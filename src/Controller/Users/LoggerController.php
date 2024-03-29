<?php

namespace App\Controller\Users;

use App\Entity\Log;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PHPUnit\Util\Json;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Filesystem\Filesystem;

/**
 * @IsGranted ("ROLE_USER")
 */
class LoggerController extends AbstractController
{
    public function detail_log($id)
    {
        $log_deatil = $this->getDoctrine()->getRepository(Log::class)->find($id);
        if ($log_deatil->getUser() == $this->getUser()) {
            return $this->render('User/Logger_html/Log_deatil.html.twig', ['user' => $this->getUser(), 'log' => $log_deatil]);
        } else {
            return $this->render('User/doshbord_user.html.twig', ['user' => $this->getUser(), 'log' => $log_deatil]);
        }
    }


    public function Log_deatil_type(Request $request, SessionInterface $session)
    {
        $type = $request->get('type');
        if ($request->get('id') != null) {
            if ($session->get('id_log')) {
                $id = $session->get('id_log');
            } else {
                $id = $request->get('id');
            }
            $logs_type = array();
            foreach ($this->getDoctrine()->getRepository(Log::class)
                         ->createQueryBuilder('p')
                         ->where("p.type = :type")
                         ->setParameter('type', $type)
                         ->andWhere(" p.id <= $id")
                         ->orderBy('p.id', 'DESC')
                         ->setMaxResults(10)
                         ->getQuery()
                         ->getResult() as $logs) {
                $param = null;
                foreach ($logs->getParameters() as $key => $value) {
                    $param .= $key . ':' . $value . ',';
                }
                array_push($logs_type, ['type' => $logs->getType(), 'name_app' => $logs->getApp()->getName()
                    , 'id' => $logs->getId(), 'description' => $logs->getdescription(),
                    'parameters' => $param, 'date' => $logs->getDate()->format('Y:m:d , h:m:s')]);
            }
            $session->set('number', $session->get('number') + 1);
            $session->set('id_log', $session->get('id_log') - 10);
            $logs_type[0]['number'] = $session->get('number');
            $logs_type[0]['id_log'] = $session -> get('id_log');
            $logs_type[0]['id'] = $request -> get('id');
            return new JsonResponse($logs_type);
        }
        else {
            $session->set('number', 0);
            $session->set('id_log', null);
            $logs_type = $this->getDoctrine()->getRepository(Log::class)
                ->createQueryBuilder('p')
                ->where("p.type = :type")
                ->setParameter('type', $type)
                ->orderBy('p.id', 'DESC')
                ->setMaxResults(10)
                ->getQuery()
                ->getResult();
            return $this->render('User/Logger_html/Log_deatil.html.twig', ['user' => $this->getUser(), 'logs_types' => $logs_type]);
        }
    }


    public function getLogs(Request $request, SessionInterface $session)
    {
        if ($session->get('id_log') != null) {
            $id = $session->get('id_log');
        } else {
            $id = $request->get('id');
        }
        if ($id > 10) {
            $logs_array = [];
//            $id -= 1;
            foreach ($this->getDoctrine()->getRepository(Log::class)
                         ->createQueryBuilder('log')
                         ->where('log.id <= :limit')
                         ->setParameters([ 'limit' => $id])
                         ->orderBy('log.id', 'DESC')
                         ->getQuery()
                         ->setMaxResults(10)
                         ->getResult() as $logs) {
                $param = null;
                foreach ($logs->getParameters() as $key => $value) {
                    $param .= $key . ':' . $value . ',';
                }
                array_push($logs_array, ['type' => $logs->getType(), 'name_app' => $logs->getApp()->getName()
                    , 'id' => $logs->getId(), 'description' => $logs->getdescription(),
                    'parameters' => $param, 'date' => $logs->getDate()->format('Y:m:d , h:m:s')]);
            }
        }
        $session->set('id_log', $id - count($logs_array));
        $session->set('number_log', $session->get('number_log') + 1);
        $logs_array[0]['number_log'] = $session->get('number_log');
        return new JsonResponse($logs_array);

    }


    public function getXcelFile(Request $request){
        $logs = [];
        if(!is_numeric($request->get('number'))) {
            throw  new BadRequestException();
        }
//        try {
            if ($request->get('number')) {
                foreach ($this->getDoctrine()->getRepository(Log::class)->createQueryBuilder('p')
                             ->where('p.user = :user')
                             ->setParameter('user', $this->getUser())
                             ->orderBy('p.id', 'DESC')
                             ->getQuery()
                             ->setMaxResults((int)$request->get('number'))
                             ->getResult() as $item) {
                    $param = '';
                    foreach ($item->getParameters() as $value) {
                        $param .= '{'.$value .'}';
                    }
                    array_push($logs, [$item->getType(), $item->getDate(), $param, $item->getApp()->getName(), $item->getDescription()]);
                }
            }
            else {
                throw  new BadRequestException();
            }
//        }
//        catch (\Exception $exception){
//            throw  new \Exception();
//        }
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle('Log List');
        $sheet->getCell('A1')->setValue('نوع');
        $sheet->getCell('B1')->setValue(' تاریخ ثبت');
        $sheet->getCell('D1')->setValue('پارامتر ها');
        $sheet->getCell('E1')->setValue('اپلیکیشن');
        $sheet->getCell('F1')->setValue('توضیحات');
        $sheet->fromArray($logs,null, 'A2', true);


        $writer = new Xlsx($spreadsheet);
        $user = $this->getUser()->getUsername();
        $date = new \DateTime('UTC');
        $date = $date->format('Y-m-d');
        $number = random_int(10000,999999);
        $string = "Xcel/$user/$date/$number.xlsx";

//        try {
            $file = new Filesystem();
        if (!$file->exists(['Xcel'])) {
                $file->mkdir('Xcel');
        }
        if (!$file->exists(["Xcel/$user"])) {
            $file->mkdir("Xcel/$user");
        }

        if (!$file->exists(["Xcel/$user/$date"])) {
                $file->mkdir("Xcel/$user/$date");
            }
            $bool = true;
             while ($bool) {
                 if ($file->exists("Xcel/$user/$date/$number.xlsx")){
                     $number = random_int(10000,999999);
                 }
                 else {
                     $bool = false;
                     $writer->save($string);
                     return new JsonResponse($string);
                 }
             }

//        }
//        catch (\Exception $exception){
//            throw new BadRequestException();
//        }


    }
}