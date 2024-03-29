<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Doshbord.html.twig */
class __TwigTemplate_724c70cf2c647f7606435d5eb0ff5f227f136f5d4f1d416c4d20da45beab099a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'built' => [$this, 'block_built'],
            'program' => [$this, 'block_program'],
            'changed' => [$this, 'block_changed'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Doshbord.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Doshbord.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html direction=\"rtl\" dir=\"rtl\" style=\"direction: rtl\">
<!--begin::Head-->
";
        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "<!--begin::Body-->
";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 5474
        echo "<!--end::Body-->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <head>
        <base href=\"\">
        <meta charset=\"utf-8\"/>
        <meta name=\"description\"
              content=\"Metronic admin dashboard live demo. Check out all the features of the admin panel. A large شماره کارت of settings, additional services و widgets.\"/>
        <meta name=\"keywords\"
              content=\"Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, admin themes, web design, figma, web development, ree admin themes, bootstrap admin, bootstrap dashboard\"/>
        <link rel=\"canonical\" href=\"Https://preview.keenthemes.com/metronic8\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We\"
              crossorigin=\"anonymous\">
        <script src=\"https://cdn.tiny.cloud/1/1t8l08csl6vv8v2pgpi066y34dz9rjcrdmwj27ozdg2xo39c/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>

        <title>
        ";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        // line 22
        echo "        </title>

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <link rel=\"shortcut icon\" href=\"/assets/media/logos/favicon.ico\"/>
        <!--begin::Fonts-->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\"/>
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href=\"/assets/plugins/global/plugins.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"/assets/css/style.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>

        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 21
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    <body id=\"kt_body\"
          class=\"header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled کردن aside-fixed\"
          style=\"--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px\">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class=\"d-flex flex-column flex-root\">
        <!--begin::Pسن-->
        <div class=\"pسن d-flex flex-row flex-column-fluid\">
            <!--begin::سایدبار کنار-->
            <div id=\"kt_aside\" class=\"aside aside-dark aside-hoverable\" data-kt-drawer=\"true\"
                 data-kt-drawer-name=\"aside\" data-kt-drawer-activate=\"{default: true, lg: false}\"
                 data-kt-drawer-overlay=\"true\" data-kt-drawer-width=\"{default:'200px', '300px': '250px'}\"
                 data-kt-drawer-direction=\"start\" data-kt-drawer-toggle=\"#kt_aside_mobile_toggle\">
                <!--begin::Brو-->
                <div class=\"aside-logo flex-column-auto\" id=\"kt_aside_logo\">
                    <!--begin::Logo-->
                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                        <img alt=\"Logo\" src=\"/assets/media/logos/logo-1.svg\" class=\"h-15px logo\"/>
                    </a>

                </div>
                <!--end::Brو-->
                <!--begin::سایدبار کنار menu-->
                <div class=\"aside-menu flex-column-fluid\">
                    <!--begin::سایدبار کنار Menu-->
                    <div class=\"hover-scroll-overlay-y my-5 my-lg-5\" id=\"kt_aside_menu_wrapper\" data-kt-scroll=\"true\"
                         data-kt-scroll-activate=\"{default: false, lg: true}\" data-kt-scroll-height=\"auto\"
                         data-kt-scroll-dependencies=\"#kt_aside_logo, #kt_aside_footer\"
                         data-kt-scroll-wrappers=\"#kt_aside_menu\" data-kt-scroll-offset=\"0\">
                        <!--begin::Menu-->
                        <div class=\"menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500\"
                             id=\"#kt_aside_menu\" data-kt-menu=\"true\">
                            <div class=\"menu-item\">
                                <a class=\"menu-link active\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashbord");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Design/PenوRuller.svg-->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z\"
                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z\"
                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"menu-title\">داشبورد</span>
                                </a>
                            </div>
                            <div class=\"menu-item\">
                                <a class=\"menu-link\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Design/Sketch.svg-->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon fill=\"#000000\" opacity=\"0.3\" points=\"5 3 19 3 23 8 1 8\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon fill=\"#000000\" points=\"23 8 12 20 1 8\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"menu-title\">صفحه اصلی</span>
                                </a>
                            </div>
                            <div class=\"menu-item\">
                                <div class=\"menu-content pt-8 pb-2\">
                                    <span class=\"menu-section text-muted text-uppercase fs-8 ls-1\">ساخته شده</span>
                                </div>
                            </div>
                            ";
        // line 110
        $this->displayBlock('built', $context, $blocks);
        // line 113
        echo "                            ";
        $this->displayBlock('program', $context, $blocks);
        // line 115
        echo "                            ";
        $this->displayBlock('changed', $context, $blocks);
        // line 117
        echo "
                        </div>
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::سایدبار کنار menu-->
                <!--begin::Footer-->
                <div class=\"aside-footer flex-column-auto pt-5 pb-7 px-5\" id=\"kt_aside_footer\">
                    <a href=\"#\" class=\"btn btn-custom btn-primary w-100\" data-bs-toggle=\"tooltip\"
                       data-bs-trigger=\"hover\" data-bs-delay-show=\"8000\"
                       title=\"Check out the complete اسناد با over 100 کامپوننت ها\">
                        <span class=\"btn-label\">مستندات و کامپوننت ها</span>
                        <!--begin::Svg Icon | path: icons/duotone/عمومی/Clipboard.svg-->
                        <span class=\"svg-icon btn-icon svg-icon-2\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z\"
                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z\"
                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"7\" y=\"10\" width=\"5\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"7\" y=\"14\" width=\"9\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </a>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::سایدبار کنار-->
            <!--begin::Wrapper-->
            <div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
                ";
        // line 152
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                <!--begin::Header-->
                <div id=\"kt_header\" style=\"\" class=\"header align-items-stretch\">
                    <!--begin::Container-->
                    <div class=\"container-fluid d-flex align-items-stretch justify-content-between\">
                        <!--begin::سایدبار کنار mobile toggle-->
                        <div class=\"d-flex align-items-center d-lg-none ms-n3 me-1\" title=\"Show aside menu\">
                            <div class=\"btn btn-icon btn-active-light-primary\" id=\"kt_aside_mobile_toggle\">
                                <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                                <span class=\"svg-icon svg-icon-2x mt-1\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\"
                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"4\" y=\"5\" width=\"16\" height=\"3\" rx=\"1.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z\"
                                                      fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::سایدبار کنار mobile toggle-->
                        <!--begin::Mobile logo-->
                        <div class=\"d-flex align-items-center flex-grow-1 flex-lg-grow-0\">
                            <a href=\"index.html\" class=\"d-lg-none\">
                                <img alt=\"Logo\" src=\"/assets/media/logos/logo-3.svg\" class=\"h-30px\"/>
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Wrapper-->
                        <div class=\"d-flex align-items-stretch justify-content-between flex-lg-grow-1\">
                            <!--begin::Navbar-->
                            <div class=\"d-flex align-items-stretch\" id=\"kt_header_nav\">
                                <!--begin::Menu wrapper-->
                                <div class=\"header-menu align-items-stretch\" data-kt-drawer=\"true\"
                                     data-kt-drawer-name=\"header-menu\"
                                     data-kt-drawer-activate=\"{default: true, lg: false}\" data-kt-drawer-overlay=\"true\"
                                     data-kt-drawer-width=\"{default:'200px', '300px': '250px'}\"
                                     data-kt-drawer-direction=\"end\"
                                     data-kt-drawer-toggle=\"#kt_header_menu_mobile_toggle\" data-kt-place=\"true\"
                                     data-kt-place-mode=\"prepend\"
                                     data-kt-place-parent=\"{default: '#kt_body', lg: '#kt_header_nav'}\">
                                    <!--begin::Menu-->
                                    <div class=\"menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch\"
                                         id=\"#kt_header_menu\" data-kt-menu=\"true\">
                                        <div class=\"menu-item me-lg-1\">
                                            <a class=\"menu-link py-3\" href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashbord");
        echo "\">
                                                <span class=\"menu-title\">داشبورد</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item me-lg-1\">
                                            <a class=\"menu-link py-3\" href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                                                <span class=\"menu-title\">صفحه اصلی</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item me-lg-1\">
                                            <a class=\"menu-link py-3\" href=\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
                                                <span class=\"menu-title\">خروج</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Topbar-->
                            <div class=\"d-flex align-items-stretch flex-shrink-0\">
                                <!--begin::Toolbar wrapper-->
                                <div class=\"d-flex align-items-stretch flex-shrink-0\">
                                    <!--begin::جستجو-->
                                    <div class=\"d-flex align-items-stretch ms-1 ms-lg-3\">
                                        <!--begin::جستجو-->
                                        <div id=\"kt_header_search\" class=\"d-flex align-items-stretch\"
                                             data-kt-search-keypress=\"true\" data-kt-search-min-length=\"2\"
                                             data-kt-search-enter=\"enter\" data-kt-search-layout=\"menu\"
                                             data-kt-menu-trigger=\"auto\" data-kt-menu-overflow=\"false\"
                                             data-kt-menu-permanent=\"true\" data-kt-menu-placement=\"bottom-end\"
                                             data-kt-menu-flip=\"bottom\">
                                            <!--begin::Menu-->
                                            <div data-kt-search-element=\"content\"
                                                 class=\"menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px\">
                                                <!--begin::Wrapper-->
                                                <div data-kt-search-element=\"wrapper\">
                                                    <!--begin::Fیاm-->
                                                    <form data-kt-search-element=\"form\"
                                                          class=\"w-100 position-relative mb-3\" autocomplete=\"off\">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotone/عمومی/جستجو.svg-->
                                                        <span class=\"svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\"
                                                                              fill=\"#000000\" fill-rule=\"nonzero\"
                                                                              opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\"
                                                                              fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Input-->
                                                        <input type=\"text\" class=\"form-control form-control-flush ps-10\"
                                                               name=\"search\" value=\"\" placeholder=\"جستجو...\"
                                                               data-kt-search-element=\"input\"/>
                                                        <!--end::Input-->
                                                        <!--begin::Spinner-->
                                                        <span class=\"position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1\"
                                                              data-kt-search-element=\"spinner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-bیاder h-15px w-15px align-middle text-gray-400\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::Spinner-->
                                                        <!--begin::ریست-->
                                                        <span class=\"btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none\"
                                                              data-kt-search-element=\"clear\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-lg-1 me-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                         xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                         width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                         version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                                                           fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\"
                                                                                  height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                                  transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                                                                  x=\"0\" y=\"7\" width=\"16\" height=\"2\"
                                                                                  rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::ریست-->
                                                        <!--begin::Toolbar-->
                                                        <div class=\"position-absolute top-50 end-0 translate-middle-y\"
                                                             data-kt-search-element=\"toolbar\">
                                                            <!--begin::اولویت ها toggle-->
                                                            <div data-kt-search-element=\"preferences-show\"
                                                                 class=\"btn btn-icon w-20px btn-sm btn-active-color-primary me-1\"
                                                                 data-bs-toggle=\"tooltip\"
                                                                 title=\"نمایش تنظیمات برگزیده جستجو\">
                                                                <!--begin::Svg Icon | path: icons/duotone/Code/Settings4.svg-->
                                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                             width=\"24px\" height=\"24px\"
                                                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z\"
                                                                                  fill=\"#000000\" fill-rule=\"nonzero\"
                                                                                  opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z\"
                                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::اولویت ها toggle-->
                                                            <!--begin::پیشرفته search toggle-->
                                                            <div data-kt-search-element=\"advanced-options-form-show\"
                                                                 class=\"btn btn-icon w-20px btn-sm btn-active-color-primary\"
                                                                 data-bs-toggle=\"tooltip\" title=\"نمایش بیشتر\">
                                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                                                                <span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                             width=\"24px\" height=\"24px\"
                                                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                               fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z\"
                                                                                      fill=\"#000000\" fill-rule=\"nonzero\"
                                                                                      transform=\"translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::پیشرفته search toggle-->
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </form>
                                                    <!--end::Fیاm-->
                                                    <!--begin::Separatیا-->
                                                    <div class=\"separator bیاder-gray-200 mb-6\"></div>
                                                    <!--end::Separatیا-->
                                                    <!--begin::Recently viewed-->
                                                    <div data-kt-search-element=\"results\" class=\"d-none\">
                                                        <!--begin::items-->
                                                        <div class=\"scroll-y mh-200px mh-lg-325px\">
                                                            <!--begin::دسته بندی title-->
                                                            <h3 class=\"fs-5 text-muted m-0 pb-5\"
                                                                data-kt-search-element=\"دسته بندی-title\">کاربران</h3>
                                                            <!--end::دسته بندی title-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
                                                                    <img src=\"/assets/media/avatars/150-1.jpg\" alt=\"\"/>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">";
        // line 367
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 367, $this->source); })()), "user", [], "any", false, false, false, 367), "eraseCredentials", [], "any", false, false, false, 367), "html", null, true);
        echo "</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">مدیر بازاریابی</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
                                                                    <img src=\"/assets/media/avatars/150-3.jpg\" alt=\"\"/>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">Olivia Bold</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">Software Engineer</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
                                                                    <img src=\"/assets/media/avatars/150-8.jpg\" alt=\"\"/>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">Ana Clark</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">طراح یو ای و یوایکس</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
                                                                    <img src=\"/assets/media/avatars/150-11.jpg\" alt=\"\"/>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">Nick Pitola</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">کارگردان هنری</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
                                                                    <img src=\"/assets/media/avatars/150-12.jpg\" alt=\"\"/>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">Edward Kulnic</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">System مدیر</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::دسته بندی title-->
                                                            <h3 class=\"fs-5 text-muted m-0 pt-5 pb-5\"
                                                                data-kt-search-element=\"دسته بندی-title\">مشتری ها</h3>
                                                            <!--end::دسته بندی title-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\"
                                                                                 src=\"/assets/media/svg/brand-logos/volicity-9.svg\"
                                                                                 alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">شرکت Rbrوing</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">طراح</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\"
                                                                                 src=\"/assets/media/svg/brand-logos/tvit.svg\"
                                                                                 alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">شرکت Re-brوing</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">توسعه دهنده وب</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\"
                                                                                 src=\"/assets/media/svg/misc/infography.svg\"
                                                                                 alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">بیزینس Analytics App</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">مدیریت</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\"
                                                                                 src=\"/assets/media/svg/brand-logos/leaf.svg\"
                                                                                 alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">EcoLeaf App Launch</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">Marketing</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\"
                                                                                 src=\"/assets/media/svg/brand-logos/tower.svg\"
                                                                                 alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">Tower Group Website</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">Google Adwیاds</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::دسته بندی title-->
                                                            <h3 class=\"fs-5 text-muted m-0 pt-5 pb-5\"
                                                                data-kt-search-element=\"دسته بندی-title\">پروژه ها</h3>
                                                            <!--end::دسته بندی title-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Clipboard-list.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z\"
                                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z\"
                                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"10\" y=\"9\" width=\"7\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"7\" y=\"9\" width=\"2\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"7\" y=\"13\" width=\"2\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"10\" y=\"13\" width=\"7\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"7\" y=\"17\" width=\"2\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"10\" y=\"17\" width=\"7\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <span class=\"fs-6 fw-bold\">Si-Fi پروژهby AU Themes</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">#45670</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Media/Equalizer.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                                       fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\"
                                                                                              height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\"
                                                                                              opacity=\"0.3\" x=\"13\" y=\"4\"
                                                                                              width=\"3\" height=\"16\"
                                                                                              rx=\"1.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"8\" y=\"9\"
                                                                                              width=\"3\" height=\"11\"
                                                                                              rx=\"1.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"18\"
                                                                                              y=\"11\" width=\"3\"
                                                                                              height=\"9\" rx=\"1.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"3\"
                                                                                              y=\"13\" width=\"3\"
                                                                                              height=\"7\" rx=\"1.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <span class=\"fs-6 fw-bold\">فروشگاه موبایل Planning</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">#45690</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Group-chat.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z\"
                                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z\"
                                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <span class=\"fs-6 fw-bold\">دارایی، مالیه، سرمایه گذاری Monitیاing SAAS Discussion</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">#21090</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/عمومی/کاربر.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                                       fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon
                                                                                                points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z\"
                                                                                              fill=\"#000000\"
                                                                                              fill-rule=\"nonzero\"
                                                                                              opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z\"
                                                                                              fill=\"#000000\"
                                                                                              fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <span class=\"fs-6 fw-bold\">داشبورد Analitics Launch</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">#34560</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                        </div>
                                                        <!--end::items-->
                                                    </div>
                                                    <!--end::Recently viewed-->
                                                    <!--begin::Recently viewed-->
                                                    <div class=\"mb-4\" data-kt-search-element=\"main\">
                                                        <!--begin::Heading-->
                                                        <div class=\"d-flex flex-stack fw-bold mb-4\">
                                                            <!--begin::برچسب-->
                                                            <span class=\"text-muted fs-6 me-2\">آخرین جستجوها:</span>
                                                            <!--end::برچسب-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::items-->
                                                        <div class=\"scroll-y mh-200px mh-lg-325px\">
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Monitیا.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g opacity=\"0.25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2 15C2 16.6569 3.34315 18 5 18L19 18C20.6569 18 22 16.6569 22 15V5C22 3.34315 20.6569 2 19 2H5C3.34315 2 2 3.34315 2 5V15Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8 20C7.44772 20 7 20.4477 7 21C7 21.5523 7.44772 22 8 22H16C16.5523 22 17 21.5523 17 21C17 20.4477 16.5523 20 16 20H8Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7 6C6.44772 6 6 6.44772 6 7C6 7.55228 6.44772 8 7 8H14C14.5523 8 15 7.55228 15 7C15 6.44772 14.5523 6 14 6H7Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7 10C6.44772 10 6 10.4477 6 11C6 11.5523 6.44772 12 7 12H9C9.55229 12 10 11.5523 10 11C10 10.4477 9.55229 10 9 10H7Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">
                                                                        ساتراس وب</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#45789</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Scatter-Up.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g opacity=\"0.25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20 13C20.5523 13 21 12.5523 21 12C21 11.4477 20.5523 11 20 11C19.4477 11 19 11.4477 19 12C19 12.5523 19.4477 13 20 13Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20 17C20.5523 17 21 16.5523 21 16C21 15.4477 20.5523 15 20 15C19.4477 15 19 15.4477 19 16C19 16.5523 19.4477 17 20 17Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20 21C20.5523 21 21 20.5523 21 20C21 19.4477 20.5523 19 20 19C19.4477 19 19 19.4477 19 20C19 20.5523 19.4477 21 20 21Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 21C12.5523 21 13 20.5523 13 20C13 19.4477 12.5523 19 12 19C11.4477 19 11 19.4477 11 20C11 20.5523 11.4477 21 12 21Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4 21C4.55228 21 5 20.5523 5 20C5 19.4477 4.55228 19 4 19C3.44772 19 3 19.4477 3 20C3 20.5523 3.44772 21 4 21Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17 6C17 7.65685 18.3431 9 20 9C21.6569 9 23 7.65685 23 6C23 4.34315 21.6569 3 20 3C18.3431 3 17 4.34315 17 6Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4 17C2.34315 17 1 15.6569 1 14C1 12.3431 2.34315 11 4 11C5.65685 11 7 12.3431 7 14C7 15.6569 5.65685 17 4 17Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">ملاقات
                                                                        های پروژه</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#84050</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                                          fill-rule=\"evenodd\"
                                                                                          clip-rule=\"evenodd\"
                                                                                          d=\"M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
                                                                                          clip-rule=\"evenodd\"
                                                                                          d=\"M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">اجرای
                                                                        طرح</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#84250</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Stacked-Area-Down.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                                          d=\"M2 13.8857C2 13.1875 2.69737 12.7042 3.35112 12.9493L8.14677 14.7477C8.64016 14.9327 9.17357 14.9845 9.69334 14.8979L14.6354 14.0742C14.8087 14.0453 14.9865 14.0626 15.151 14.1243L21.3511 16.4493C21.7414 16.5957 22 16.9688 22 17.3857V20C22 21.1046 21.1046 22 20 22H4C2.89543 22 2 21.1046 2 20V13.8857Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2 4.13517C2 2.4395 3.97771 1.51318 5.28037 2.59873L8.93565 5.64479C9.1593 5.83117 9.45306 5.91083 9.74023 5.86296L14.0555 5.14376C14.8073 5.01846 15.5786 5.18401 16.2128 5.60679L20.6641 8.57435C21.4987 9.13074 22 10.0674 22 11.0705V13.1138C22 13.812 21.3026 14.2953 20.6489 14.0501L15.8532 12.2518C15.3598 12.0667 14.8264 12.0149 14.3067 12.1016L9.36454 12.9253C9.19129 12.9541 9.01348 12.9369 8.84902 12.8752L2.64888 10.5501C2.25857 10.4038 2 10.0307 2 9.61381V4.13517Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">سوالات
                                                                        متداول</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#67945</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Envelope.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                                          d=\"M1 6C1 4.34315 2.34315 3 4 3H20C21.6569 3 23 4.34315 23 6V18C23 19.6569 21.6569 21 20 21H4C2.34315 21 1 19.6569 1 18V6Z\"
                                                                                          fill=\"#191213\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
                                                                                          clip-rule=\"evenodd\"
                                                                                          d=\"M5.23177 7.35984C5.58534 6.93556 6.2159 6.87824 6.64018 7.2318L11.3598 11.1648C11.7307 11.4739 12.2693 11.4739 12.6402 11.1648L17.3598 7.2318C17.7841 6.87824 18.4147 6.93556 18.7682 7.35984C19.1218 7.78412 19.0645 8.41468 18.6402 8.76825L13.9205 12.7013C12.808 13.6284 11.192 13.6284 10.0794 12.7013L5.35981 8.76825C4.93553 8.41468 4.87821 7.78412 5.23177 7.35984Z\"
                                                                                          fill=\"#121319\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">توسعه
                                                                        دهنده اندروید</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#84250</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Bank.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                                          d=\"M4 10H8V17H10V10H14V17H16V10H20V17C21.1046 17 22 17.8954 22 19V20C22 21.1046 21.1046 22 20 22H4C2.89543 22 2 21.1046 2 20V19C2 17.8954 2.89543 17 4 17V10Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2 7.35405C2 6.53624 2.4979 5.80083 3.25722 5.4971L11.2572 2.2971C11.734 2.10637 12.266 2.10637 12.7428 2.2971L20.7428 5.4971C21.5021 5.80083 22 6.53624 22 7.35405V7.99999C22 9.10456 21.1046 9.99999 20 9.99999H4C2.89543 9.99999 2 9.10456 2 7.99999V7.35405Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">فروشگاه
                                                                        موبایل</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#45690</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Up.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                                          d=\"M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
                                                                                          clip-rule=\"evenodd\"
                                                                                          d=\"M20.8682 6.49631C21.1422 6.01679 20.9756 5.40594 20.4961 5.13193C20.0166 4.85792 19.4058 5.02451 19.1317 5.50403L15.8834 11.1886C15.6612 11.5775 15.2073 11.7712 14.7727 11.6626L9.71238 10.3975C8.40847 10.0715 7.04688 10.6526 6.38005 11.8195L3.13174 17.504C2.85773 17.9835 3.02433 18.5944 3.50385 18.8684C3.98337 19.1424 4.59422 18.9758 4.86823 18.4963L8.11653 12.8118C8.33881 12.4228 8.79268 12.2291 9.22731 12.3378L14.2876 13.6028C15.5915 13.9288 16.9531 13.3478 17.6199 12.1808L20.8682 6.49631Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">اجرای
                                                                        طرح</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#24005</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                        </div>
                                                        <!--end::items-->
                                                    </div>
                                                    <!--end::Recently viewed-->
                                                    <!--begin::Empty-->
                                                    <div data-kt-search-element=\"empty\" class=\"text-center d-none\">
                                                        <!--begin::Icon-->
                                                        <div class=\"pt-10 pb-10\">
                                                            <!--begin::Svg Icon | path: icons/duotone/Interface/File-جستجو.svg-->
                                                            <span class=\"svg-icon svg-icon-4x opacity-50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                                                         height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                              d=\"M3 4C3 2.34315 4.34315 1 6 1H15.7574C16.553 1 17.3161 1.31607 17.8787 1.87868L20.1213 4.12132C20.6839 4.68393 21 5.44699 21 6.24264V20C21 21.6569 19.6569 23 18 23H6C4.34315 23 3 21.6569 3 20V4Z\"
                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15 1.89181C15 1.39927 15.3993 1 15.8918 1V1C16.6014 1 17.2819 1.28187 17.7836 1.78361L20.2164 4.21639C20.7181 4.71813 21 5.39863 21 6.10819V6.10819C21 6.60073 20.6007 7 20.1082 7H16C15.4477 7 15 6.55228 15 6V1.89181Z\"
                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                                                              d=\"M13.032 15.4462C12.4365 15.7981 11.7418 16 11 16C8.79086 16 7 14.2091 7 12C7 9.79086 8.79086 8 11 8C13.2091 8 15 9.79086 15 12C15 12.7418 14.7981 13.4365 14.4462 14.032L16.7072 16.293C17.0977 16.6835 17.0977 17.3167 16.7072 17.7072C16.3167 18.0977 15.6835 18.0977 15.293 17.7072L13.032 15.4462ZM13 12C13 13.1046 12.1046 14 11 14C9.89543 14 9 13.1046 9 12C9 10.8954 9.89543 10 11 10C12.1046 10 13 10.8954 13 12Z\"
                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::پیام-->
                                                        <div class=\"pb-15 fw-bold\">
                                                            <h3 class=\"text-gray-600 fs-5 mb-2\">No result found</h3>
                                                            <div class=\"text-muted fs-7\">Please try again با a different
                                                                query
                                                            </div>
                                                        </div>
                                                        <!--end::پیام-->
                                                    </div>
                                                    <!--end::Empty-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::اولویت ها-->
                                                <form data-kt-search-element=\"advanced-options-form\"
                                                      class=\"pt-1 d-none\">
                                                    <!--begin::Heading-->
                                                    <h3 class=\"fw-bold text-dark mb-7\">پیشرفته جستجو</h3>
                                                    <!--end::Heading-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <input type=\"text\"
                                                               class=\"form-control form-control-sm form-control-solid\"
                                                               placeholder=\"\" name=\"query\"/>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <!--begin::Radio group-->
                                                        <div class=\"nav-group nav-group-fluid\">
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"نوع\"
                                                                       value=\"has\" checked=\"checked\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary\">همه</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"نوع\"
                                                                       value=\"کاربران\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">کاربران</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"نوع\"
                                                                       value=\"یاders\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">سفارشات</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"نوع\"
                                                                       value=\"projects\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">پروژه ها</span>
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Radio group-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <input type=\"text\" name=\"assignedto\"
                                                               class=\"form-control form-control-sm form-control-solid\"
                                                               placeholder=\"اختصاص دادن \" value=\"\"/>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <input type=\"text\" name=\"\"
                                                               class=\"form-control form-control-sm form-control-solid\"
                                                               placeholder=\"\" value=\"\"/>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <!--begin::Radio group-->
                                                        <div class=\"nav-group nav-group-fluid\">
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"attachment\"
                                                                       value=\"has\" checked=\"checked\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary\">ضمیمه</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"attachment\"
                                                                       value=\"any\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">هیچ</span>
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Radio group-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <select name=\"timezone\" aria-label=\"انتخاب a زمانzone\"
                                                                data-control=\"select2\" data-placeholder=\"تاریخ_period\"
                                                                class=\"form-select form-select-sm form-select-solid\">
                                                            <option value=\"next\">در بعدی</option>
                                                            <option value=\"last\">قبلی</option>
                                                            <option value=\"between\">بین</option>
                                                            <option value=\"on\">روشن</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"row mb-8\">
                                                        <!--begin::Col-->
                                                        <div class=\"col-6\">
                                                            <input type=\"شماره کارت\" name=\"تاریخ_شماره کارت\"
                                                                   class=\"form-control form-control-sm form-control-solid\"
                                                                   placeholder=\"طول\" value=\"\"/>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class=\"col-6\">
                                                            <select name=\"تاریخ_نوعr\" aria-label=\"انتخاب a زمانzone\"
                                                                    data-control=\"select2\" data-placeholder=\"Period\"
                                                                    class=\"form-select form-select-sm form-select-solid\">
                                                                <option value=\"days\">روزها</option>
                                                                <option value=\"weeks\">هفته ها</option>
                                                                <option value=\"months\">ماه ها</option>
                                                                <option value=\"سال ها\">سال ها</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::عملیات-->
                                                    <div class=\"d-flex justify-content-end\">
                                                        <button type=\"ریست\"
                                                                class=\"btn btn-sm btn-white fw-bolder btn-active-light-primary me-2\"
                                                                data-kt-search-element=\"advanced-options-form-cancel\">
                                                            انصراف
                                                        </button>
                                                        <a href=\"pages/search/horizontal.html\"
                                                           class=\"btn btn-sm fw-bolder btn-primary\"
                                                           data-kt-search-element=\"advanced-options-form-search\">جستجو</a>
                                                    </div>
                                                    <!--end::عملیات-->
                                                </form>
                                                <!--end::اولویت ها-->
                                                <!--begin::اولویت ها-->
                                                <form data-kt-search-element=\"preferences\" class=\"pt-1 d-none\">
                                                    <!--begin::Heading-->
                                                    <h3 class=\"fw-bold text-dark mb-7\">جستجو اولویت ها</h3>
                                                    <!--end::Heading-->
                                                    <!--begin::Input group-->
                                                    <div class=\"pb-4 bیاder-bottom\">
                                                        <label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
                                                            <span class=\"form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2\">پروژه ها</span>
                                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                                                   checked=\"checked\"/>
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"py-4 border-bottom\">
                                                        <label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
                                                            <span class=\"form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2\">اهداف</span>
                                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                                                   checked=\"checked\"/>
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"py-4 border-bottom\">
                                                        <label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
                                                            <span class=\"form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2\">بازاریابی</span>
                                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"/>
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"py-4 border-bottom\">
                                                        <label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
                                                            <span class=\"form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2\">مراجعات</span>
                                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                                                   checked=\"checked\"/>
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"py-4 border-bottom\">
                                                        <label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
                                                            <span class=\"form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2\">کاربران</span>
                                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"/>
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::عملیات-->
                                                    <div class=\"d-flex justify-content-end pt-7\">
                                                        <button type=\"ریست\"
                                                                class=\"btn btn-sm btn-white fw-bolder btn-active-light-primary me-2\"
                                                                data-kt-search-element=\"preferences-dismiss\">انصراف
                                                        </button>
                                                        <button type=\"submit\" class=\"btn btn-sm fw-bolder btn-primary\">
                                                            ذخیره تغییرات
                                                        </button>
                                                    </div>
                                                    <!--end::عملیات-->
                                                </form>
                                                <!--end::اولویت ها-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::جستجو-->
                                    </div>
                                    <!--end::جستجو-->
                                    <!--begin::Menu-->
                                    <div class=\"menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px\"
                                         data-kt-menu=\"true\">
                                        <!--begin::Heading-->
                                        <div class=\"d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10\"
                                             style=\"background-image:url('/assets/media//misc/pattern-1.jpg')\">
                                            <!--begin::Title-->
                                            <h3 class=\"text-white fw-bold mb-3\">لینک های سریع</h3>
                                            <!--end::Title-->
                                            <!--begin::وضعیت-->
                                            <span class=\"badge bg-success py-2 px-3\">25 وظیفه در انتظار</span>
                                            <!--end::وضعیت-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin:Nav-->
                                        <div class=\"row g-0\">
                                            <!--begin:مورد-->
                                            <div class=\"col-6\">
                                                <a href=\"pages/projects/budget.html\"
                                                   class=\"d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom\">
                                                    <!--begin::Svg Icon | path: icons/duotone/Shopping/Euro.svg-->
                                                    <span class=\"svg-icon svg-icon-3x svg-icon-success mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z\"
                                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z\"
                                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Svg Icon-->
                                                    <span class=\"fs-5 fw-bold text-gray-800 mb-0\">حسابداری</span>
                                                    <span class=\"fs-7 text-gray-400\">تجارت</span>
                                                </a>
                                            </div>
                                            <!--end:مورد-->
                                            <!--begin:مورد-->
                                            <div class=\"col-6\">
                                                <a href=\"pages/projects/settings.html\"
                                                   class=\"d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom\">
                                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Mail-attachment.svg-->
                                                    <span class=\"svg-icon svg-icon-3x svg-icon-success mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z\"
                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z\"
                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Svg Icon-->
                                                    <span class=\"fs-5 fw-bold text-gray-800 mb-0\">مدیریت</span>
                                                    <span class=\"fs-7 text-gray-400\">کنسول</span>
                                                </a>
                                            </div>
                                            <!--end:مورد-->
                                            <!--begin:مورد-->
                                            <div class=\"col-6\">
                                                <a href=\"pages/projects/list.html\"
                                                   class=\"d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end\">
                                                    <!--begin::Svg Icon | path: icons/duotone/Shopping/Box2.svg-->
                                                    <span class=\"svg-icon svg-icon-3x svg-icon-success mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z\"
                                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z\"
                                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Svg Icon-->
                                                    <span class=\"fs-5 fw-bold text-gray-800 mb-0\">پروژه ها</span>
                                                    <span class=\"fs-7 text-gray-400\">انتظار وظیفه ها</span>
                                                </a>
                                            </div>
                                            <!--end:مورد-->
                                            <!--begin:مورد-->
                                            <div class=\"col-6\">
                                                <a href=\"pages/projects/users.html\"
                                                   class=\"d-flex flex-column flex-center h-100 p-6 bg-hover-light\">
                                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Group.svg-->
                                                    <span class=\"svg-icon svg-icon-3x svg-icon-success mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z\"
                                                                          fill=\"#000000\" fill-rule=\"nonzero\"
                                                                          opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z\"
                                                                          fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Svg Icon-->
                                                    <span class=\"fs-5 fw-bold text-gray-800 mb-0\">مشتری ها</span>
                                                    <span class=\"fs-7 text-gray-400\">آخرین موارد</span>
                                                </a>
                                            </div>
                                            <!--end:مورد-->
                                        </div>
                                        <!--end:Nav-->
                                        <!--begin::نمایش mیاe-->
                                        <div class=\"py-2 text-center border-top\">
                                            <a href=\"pages/profile/activity.html\"
                                               class=\"btn btn-color-gray-600 btn-active-color-primary\">نمایش همه
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                                <span class=\"svg-icon svg-icon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                               fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                      transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                                      x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                                      fill=\"#000000\" fill-rule=\"nonzero\"
                                                                      transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon--></a>
                                        </div>
                                        <!--end::نمایش mیاe-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::Quick links-->
                                <!--begin::نمودارها-->
                                <div class=\"d-flex align-items-center ms-1 ms-lg-3\">
                                    <!--begin::Menu wrapper-->
                                    <div class=\"btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px\"
                                         id=\"kt_drawer_chat_toggle\">
                                        <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Group-chat.svg-->
                                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                         viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z\"
                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z\"
                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <!--end::Svg Icon-->
                                        <span class=\"bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink\"></span>
                                    </div>
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::نمودارها-->
                                <!--begin::اعلانات-->
                                <div class=\"d-flex align-items-center ms-1 ms-lg-3\">
                                    <!--begin::Menu- wrapper-->
                                    <div class=\"btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px\"
                                         data-kt-menu-trigger=\"click\" data-kt-menu-attach=\"parent\"
                                         data-kt-menu-placement=\"bottom-end\" data-kt-menu-flip=\"bottom\">
                                        <!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
                                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                         viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\"
                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\"
                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--begin::Menu-->
                                    <div class=\"menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px\"
                                         data-kt-menu=\"true\">
                                        <!--begin::Heading-->
                                        <div class=\"d-flex flex-column bgi-no-repeat rounded-top\"
                                             style=\"background-image:url('/assets/media//misc/pattern-1.jpg')\">
                                            <!--begin::Title-->
                                            <h3 class=\"text-white fw-bold px-9 mt-10 mb-6\">اعلانات
                                                <span class=\"fs-8 opacity-75 ps-3\">24 گزارش</span></h3>
                                            <!--end::Title-->
                                            <!--begin::Tabs-->
                                            <ul class=\"nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9\">
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link text-white opacity-75 opacity-state-100 pb-4\"
                                                       data-bs-toggle=\"tab\"
                                                       href=\"#kt_topbar_notifications_1\">هشدارها</a>
                                                </li>
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link text-white opacity-75 opacity-state-100 pb-4 active\"
                                                       data-bs-toggle=\"tab\" href=\"#kt_topbar_notifications_2\">بروزرسانی
                                                        ها</a>
                                                </li>
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link text-white opacity-75 opacity-state-100 pb-4\"
                                                       data-bs-toggle=\"tab\" href=\"#kt_topbar_notifications_3\">گزارش</a>
                                                </li>
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Tab content-->
                                        <div class=\"tab-content\">
                                            <!--begin::Tab panel-->
                                            <div class=\"tab-pane fade\" id=\"kt_topbar_notifications_1\" سطح
                                                 role=\"tabpanel\">
                                                <!--begin::items-->
                                                <div class=\"scroll-y mh-325px my-5 px-8\">
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Clothes/Crown.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z\"
                                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z\"
                                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">پروژه
                                                                    آلیس</a>
                                                                <div class=\"text-gray-400 fs-7\">توسعه فاز 1</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">1 hr</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Code/هشدار-2.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z\"
                                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"11\" y=\"9\"
                                                                                          width=\"2\" height=\"7\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"11\" y=\"17\"
                                                                                          width=\"2\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">محرمانه</a>
                                                                <div class=\"text-gray-400 fs-7\">اسناد محرمانه کارکنان
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">2 hrs</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Group.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z\"
                                                                                          fill=\"#000000\"
                                                                                          fill-rule=\"nonzero\"
                                                                                          opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z\"
                                                                                          fill=\"#000000\"
                                                                                          fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">شرکت
                                                                    منابع انسانی</a>
                                                                <div class=\"text-gray-400 fs-7\">مشخصات کارکنان را شریک
                                                                    کنید
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">5 hrs</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/عمومی/Thunder.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                                       fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\"
                                                                                              height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.3740377,19.9389434 L18.2226499,11.1660251 C18.4524142,10.8213786 18.3592838,10.3557266 18.0146373,10.1259623 C17.8914367,10.0438285 17.7466809,10 17.5986122,10 L13,10 L13,4.47708173 C13,4.06286817 12.6642136,3.72708173 12.25,3.72708173 C11.9992351,3.72708173 11.7650616,3.85240758 11.6259623,4.06105658 L5.7773501,12.8339749 C5.54758575,13.1786214 5.64071616,13.6442734 5.98536267,13.8740377 C6.10856331,13.9561715 6.25331908,14 6.40138782,14 L11,14 L11,19.5229183 C11,19.9371318 11.3357864,20.2729183 11.75,20.2729183 C12.0007649,20.2729183 12.2349384,20.1475924 12.3740377,19.9389434 Z\"
                                                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">پروژه
                                                                    ریداکس</a>
                                                                <div class=\"text-gray-400 fs-7\">تم ادمین جدید</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">2 days</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Flag.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3.5,3 L5,3 L5,19.5 C5,20.3284271 4.32842712,21 3.5,21 L3.5,21 C2.67157288,21 2,20.3284271 2,19.5 L2,4.5 C2,3.67157288 2.67157288,3 3.5,3 Z\"
                                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.99987583,2.99995344 L19.754647,2.99999303 C20.3069317,2.99999474 20.7546456,3.44771138 20.7546439,3.99999613 C20.7546431,4.24703684 20.6631995,4.48533385 20.497938,4.66895776 L17.5,8 L20.4979317,11.3310353 C20.8673908,11.7415453 20.8341123,12.3738351 20.4236023,12.7432941 C20.2399776,12.9085564 20.0016794,13 19.7546376,13 L6.99987583,13 L6.99987583,2.99995344 Z\"
                                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">پروژه
                                                                    بریفینگ</a>
                                                                <div class=\"text-gray-400 fs-7\">به روز رسانی وضعیت راه
                                                                    اندازی محصول
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">21 Jan</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Design/Imسن.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                                       fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon
                                                                                                points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z\"
                                                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">دارایی
                                                                    های بنر</a>
                                                                <div class=\"text-gray-400 fs-7\">مجموعه ای از تصویر
                                                                    بنرها
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">21 Jan</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Design/Component.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.7442084,3.27882877 L19.2473374,6.9949025 C19.7146999,7.26196679 20.003129,7.75898194 20.003129,8.29726722 L20.003129,15.7027328 C20.003129,16.2410181 19.7146999,16.7380332 19.2473374,17.0050975 L12.7442084,20.7211712 C12.2830594,20.9846849 11.7169406,20.9846849 11.2557916,20.7211712 L4.75266256,17.0050975 C4.28530007,16.7380332 3.99687097,16.2410181 3.99687097,15.7027328 L3.99687097,8.29726722 C3.99687097,7.75898194 4.28530007,7.26196679 4.75266256,6.9949025 L11.2557916,3.27882877 C11.7169406,3.01531506 12.2830594,3.01531506 12.7442084,3.27882877 Z M12,14.5 C13.3807119,14.5 14.5,13.3807119 14.5,12 C14.5,10.6192881 13.3807119,9.5 12,9.5 C10.6192881,9.5 9.5,10.6192881 9.5,12 C9.5,13.3807119 10.6192881,14.5 12,14.5 Z\"
                                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">نماد
                                                                    دارایی ها</a>
                                                                <div class=\"text-gray-400 fs-7\">مجموعه ای از ایکون ها
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">20 March</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                </div>
                                                <!--end::items-->
                                                <!--begin::نمایش mیاe-->
                                                <div class=\"py-3 text-center border-top\">
                                                    <a href=\"pages/profile/activity.html\"
                                                       class=\"btn btn-color-gray-600 btn-active-color-primary\">نمایش همه
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                                        <span class=\"svg-icon svg-icon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                              transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                                              x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\"
                                                                              rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                                              fill=\"#000000\" fill-rule=\"nonzero\"
                                                                              transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::Svg Icon--></a>
                                                </div>
                                                <!--end::نمایش mیاe-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div class=\"tab-pane fade show active\" id=\"kt_topbar_notifications_2\" سطح
                                                 role=\"tabpanel\">
                                                <!--begin::Wrapper-->
                                                <div class=\"d-flex flex-column px-9\">
                                                    <!--begin::Section-->
                                                    <div class=\"pt-10 pb-0\">
                                                        <!--begin::Title-->
                                                        <h3 class=\"text-dark text-center fw-bolder\">دسترسی حرفه ای را
                                                            دریافت کنید</h3>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class=\"text-center text-gray-600 fw-bold pt-1\">رئوس مطالب
                                                            شما را صادق نگه می دارد. آنها جلوی شگفت انگیز بودن شما
                                                            درمورد رانندگی را می گیرند
                                                        </div>
                                                        <!--end::Text-->
                                                        <!--begin::Action-->
                                                        <div class=\"text-center mt-5 mb-9\">
                                                            <a href=\"#\" class=\"btn btn-sm btn-primary px-6\"
                                                               data-bs-toggle=\"modal\"
                                                               data-bs-target=\"#kt_modal_upgrade_plan\">ارتقا دهید</a>
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Illustration-->
                                                    <div class=\"text-center px-4\">
                                                        <img class=\"mw-100 mh-200px\" alt=\"metronic\"
                                                             src=\"/assets/media/illustrations/wیاk.png\"/>
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div class=\"tab-pane fade\" id=\"kt_topbar_notifications_3\" سطح
                                                 role=\"tabpanel\">
                                                <!--begin::items-->
                                                <div class=\"scroll-y mh-325px my-5 px-8\">
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-success me-4\">200</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">سفارش
                                                                جدید</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Just now</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-danger me-4\">500</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">مشتری
                                                                جدید</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">2 hrs</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-success me-4\">200</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">پردازش
                                                                درگاه</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">5 hrs</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-warning me-4\">300</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">جستجوی
                                                                کوئری</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">2 days</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-success me-4\">200</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">ارتباط
                                                                کلید دسترسی</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">1 week</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-success me-4\">200</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">بازگردانی
                                                                پایگاه داده</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Mar 5</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-warning me-4\">300</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">بروزرسانی
                                                                سیستم</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">May 15</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-warning me-4\">300</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">اپدیت
                                                                سیستم عامل سرور</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Apr 3</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-warning me-4\">300</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">برگشت
                                                                کلید دسترسی</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Jun 30</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-danger me-4\">500</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">روند
                                                                بازپرداخت</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Jul 10</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-danger me-4\">500</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">روند
                                                                برداشت</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Sep 10</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-danger me-4\">500</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">وظایف
                                                                نامه</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Dec 10</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                </div>
                                                <!--end::items-->
                                                <!--begin::نمایش mیاe-->
                                                <div class=\"py-3 text-center border-top\">
                                                    <a href=\"pages/profile/activity.html\"
                                                       class=\"btn btn-color-gray-600 btn-active-color-primary\">نمایش همه
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                                        <span class=\"svg-icon svg-icon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                              transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                                              x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\"
                                                                              rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                                              fill=\"#000000\" fill-rule=\"nonzero\"
                                                                              transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::Svg Icon--></a>
                                                </div>
                                                <!--end::نمایش mیاe-->
                                            </div>
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::اعلانات-->
                                <!--begin::کاربر-->
                                <div class=\"d-flex align-items-center ms-1 ms-lg-3\" id=\"kt_header_کاربر_menu_toggle\">
                                    <!--begin::Menu wrapper-->
                                    <div class=\"cursیا-pointer symbol symbol-30px symbol-md-40px\"
                                         data-kt-menu-trigger=\"click\" data-kt-menu-attach=\"parent\"
                                         data-kt-menu-placement=\"bottom-end\" data-kt-menu-flip=\"bottom\">
                                        <img src=\"/assets/media/avatars/150-2.jpg\" alt=\"metronic\"/>
                                    </div>
                                    <!--begin::Menu-->
                                    <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold py-4 fs-6 w-275px\"
                                         data-kt-menu=\"true\">
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-3\">
                                            <div class=\"menu-content d-flex align-items-center px-3\">
                                                <!--begin::تصویر کاربری-->
                                                <div class=\"symbol symbol-50px me-5\">
                                                    <img alt=\"Logo\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                                </div>
                                                <!--end::تصویر کاربری-->
                                                <!--begin::کاربرname-->
                                                <div class=\"d-flex flex-column\">
                                                    <div class=\"fw-bolder d-flex align-items-center fs-5\">";
        // line 2050
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2050, $this->source); })()), "user", [], "any", false, false, false, 2050), "eraseCredentials", [], "any", false, false, false, 2050), "html", null, true);
        echo "
                                                        <span class=\"badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2\">Pro</span>
                                                    </div>
                                                    <a href=\"#\"
                                                       class=\"fw-bold text-muted text-hover-primary fs-7\">";
        // line 2054
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2054, $this->source); })()), "user", [], "any", false, false, false, 2054), "email", [], "any", false, false, false, 2054), "html", null, true);
        echo "</a>
                                                </div>
                                                <!--end::کاربرname-->
                                            </div>
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu separator-->
                                        <div class=\"separator my-2\"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\">
                                            <a href=\"account/overview.html\" class=\"menu-link px-5\">پروفایل من</a>
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\">
                                            <a href=\"pages/projects/list.html\" class=\"menu-link px-5\">
                                                <span class=\"menu-text\">پروژه های من</span>
                                                <span class=\"menu-badge\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-danger badge-circle fw-bolder fs-7\">3</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </a>
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\" data-kt-menu-trigger=\"hover\"
                                             data-kt-menu-placement=\"left-start\" data-kt-menu-flip=\"center, top\">
                                            <a href=\"#\" class=\"menu-link px-5\">
                                                <span class=\"menu-title\">اشتراک من</span>
                                                <span class=\"menu-arrow\"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class=\"menu-sub menu-sub-dropdown w-175px py-4\">
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/referrals.html\" class=\"menu-link px-5\">مراجعات</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/billing.html\" class=\"menu-link px-5\">صورتحساب</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/statements.html\" class=\"menu-link px-5\">درگاه
                                                        ها</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/statements.html\"
                                                       class=\"menu-link d-flex flex-stack px-5\">بیانیه
                                                        <i class=\"fas fa-exclamation-circle ms-2 fs-7\"
                                                           data-bs-toggle=\"tooltip\"
                                                           title=\"اظهارات خود را نمایش دهید\"></i></a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu separator-->
                                                <div class=\"separator my-2\"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <div class=\"menu-content px-3\">
                                                        <label class=\"form-check form-switch form-check-custom form-check-solid\">
                                                            <input class=\"form-check-input w-30px h-20px\"
                                                                   type=\"checkbox\" value=\"1\" checked=\"checked\"
                                                                   name=\"notifications\"/>
                                                            <span class=\"form-check-label text-muted fs-7\">اعلانات</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--end::Menu مورد-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\">
                                            <a href=\"account/statements.html\" class=\"menu-link px-5\">اظهارات من</a>
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu separator-->
                                        <div class=\"separator my-2\"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\" data-kt-menu-trigger=\"hover\"
                                             data-kt-menu-placement=\"left-start\" data-kt-menu-flip=\"center, top\">
                                            <a href=\"#\" class=\"menu-link px-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title position-relative\">زبان
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0\">English
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-15px h-15px rounded-1 ms-2\"
                                                             src=\"/assets/media/flags/united-states.svg\"
                                                             alt=\"metronic\"/></span></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class=\"menu-sub menu-sub-dropdown w-175px py-4\">
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/settings.html\"
                                                       class=\"menu-link d-flex px-5 active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-1\"
                                                                     src=\"/assets/media/flags/united-states.svg\"
                                                                     alt=\"metronic\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>English</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/settings.html\" class=\"menu-link d-flex px-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-1\"
                                                                     src=\"/assets/media/flags/spain.svg\"
                                                                     alt=\"metronic\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>Spanish</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/settings.html\" class=\"menu-link d-flex px-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-1\"
                                                                     src=\"/assets/media/flags/germany.svg\"
                                                                     alt=\"metronic\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>German</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/settings.html\" class=\"menu-link d-flex px-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-1\"
                                                                     src=\"/assets/media/flags/japan.svg\"
                                                                     alt=\"metronic\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>Japanese</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/settings.html\" class=\"menu-link d-flex px-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-1\"
                                                                     src=\"/assets/media/flags/france.svg\"
                                                                     alt=\"metronic\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>French</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5 my-1\">
                                            <a href=\"account/settings.html\" class=\"menu-link px-5\">تنظیمات اکانت
                                                کاربر</a>
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\">
                                            <a href=\"authentication/flows/basic/sign-in.html\" class=\"menu-link px-5\">خروج</a>
                                        </div>
                                        <!--end::Menu مورد-->
                                    </div>
                                </div>
                                <!--end::Menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::کاربر -->
                            <!--begin::Heaeder menu toggle-->
                            <div class=\"d-flex align-items-center d-lg-none ms-2 me-n3\" title=\"Show header menu\">
                                <div class=\"btn btn-icon btn-active-light-primary\"
                                     id=\"kt_header_menu_mobile_toggle\">
                                    <!--begin::Svg Icon | path: icons/duotone/Text/Toggle-Right.svg-->
                                    <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                         height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                           fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                                                  d=\"M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z\"
                                                                  fill=\"black\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                                                  d=\"M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z\"
                                                                  fill=\"black\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Heaeder menu toggle-->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <!--end::Content-->

    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Pسن-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->
    <!--begin::فعالیتها drawer-->
    <div id=\"kt_activities\" class=\"bg-white\" data-kt-drawer=\"true\" data-kt-drawer-name=\"activities\"
         data-kt-drawer-activate=\"true\" data-kt-drawer-overlay=\"true\"
         data-kt-drawer-width=\"{default:'300px', 'lg': '900px'}\" data-kt-drawer-direction=\"end\"
         data-kt-drawer-toggle=\"#kt_activities_toggle\" data-kt-drawer-close=\"#kt_activities_close\">
        <div class=\"card shadow-none\">
            <!--begin::Header-->
            <div class=\"card-header\" id=\"kt_activities_header\">
                <h3 class=\"card-title fw-bolder text-dark\">گزارش ها</h3>
                <div class=\"card-toolbar\">
                    <button type=\"button\" class=\"btn btn-sm btn-icon btn-active-light-primary me-n5\"
                            id=\"kt_activities_close\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                       fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                              transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                              x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class=\"card-body position-relative\" id=\"kt_activities_body\">
                <!--begin::Content-->
                <div id=\"kt_activities_scroll\" class=\"position-relative scroll-y me-n5 pe-5\" data-kt-scroll=\"true\"
                     data-kt-scroll-height=\"auto\" data-kt-scroll-wrappers=\"#kt_activities_body\"
                     data-kt-scroll-dependencies=\"#kt_activities_header, #kt_activities_footer\"
                     data-kt-scroll-offset=\"5px\">
                    <!--begin::زمانline items-->
                    <div class=\"timeline\">
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px me-4\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Chat2.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<polygon fill=\"#000000\" opacity=\"0.3\" points=\"5 15 3 21.5 9.5 19.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z\"
                                                      fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">در پروژه نرم افزار موبایل دو وظیفه وجود دارد</div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">اضافه شده در ساعت 4:12</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Nina Nilson\">
                                            <img src=\"/assets/media/avatars/150-11.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                                <!--begin::زمانline جزئیات-->
                                <div class=\"overflow-auto pb-5\">
                                    <!--begin::Recیاd-->
                                    <div class=\"d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5\">
                                        <!--begin::Title-->
                                        <a href=\"#\"
                                           class=\"fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px\">ملاقات
                                            با مشتری</a>
                                        <!--end::Title-->
                                        <!--begin::برچسب-->
                                        <div class=\"min-w-175px pe-2\">
                                            <span class=\"badge badge-light text-muted\">طراحی اپلیکیشن</span>
                                        </div>
                                        <!--end::برچسب-->
                                        <!--begin::کاربران-->
                                        <div class=\"symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2\">
                                            <!--begin::کاربر-->
                                            <div class=\"symbol symbol-circle symbol-25px\">
                                                <img src=\"/assets/media/avatars/150-3.jpg\" alt=\"img\"/>
                                            </div>
                                            <!--end::کاربر-->
                                            <!--begin::کاربر-->
                                            <div class=\"symbol symbol-circle symbol-25px\">
                                                <img src=\"/assets/media/avatars/150-11.jpg\" alt=\"img\"/>
                                            </div>
                                            <!--end::کاربر-->
                                            <!--begin::کاربر-->
                                            <div class=\"symbol symbol-circle symbol-25px\">
                                                <div class=\"symbol-label fs-8 fw-bold bg-primary text-inverse-primary\">
                                                    A
                                                </div>
                                            </div>
                                            <!--end::کاربر-->
                                        </div>
                                        <!--end::کاربران-->
                                        <!--begin::پردازش-->
                                        <div class=\"min-w-125px pe-2\">
                                            <span class=\"badge badge-light-primary\">درحال پردازش</span>
                                        </div>
                                        <!--end::پردازش-->
                                        <!--begin::Action-->
                                        <a href=\"#\" class=\"btn btn-sm btn-light btn-active-light-primary\">نمایش</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Recیاd-->
                                    <!--begin::Recیاd-->
                                    <div class=\"d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0\">
                                        <!--begin::Title-->
                                        <a href=\"#\"
                                           class=\"fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px\">آماده
                                            سازی تحویل پروژه</a>
                                        <!--end::Title-->
                                        <!--begin::برچسب-->
                                        <div class=\"min-w-175px\">
                                            <span class=\"badge badge-light text-muted\">توسعه دهنده سیستم</span>
                                        </div>
                                        <!--end::برچسب-->
                                        <!--begin::کاربران-->
                                        <div class=\"symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px\">
                                            <!--begin::کاربر-->
                                            <div class=\"symbol symbol-circle symbol-25px\">
                                                <img src=\"/assets/media/avatars/150-5.jpg\" alt=\"img\"/>
                                            </div>
                                            <!--end::کاربر-->
                                            <!--begin::کاربر-->
                                            <div class=\"symbol symbol-circle symbol-25px\">
                                                <div class=\"symbol-label fs-8 fw-bold bg-success text-inverse-primary\">
                                                    B
                                                </div>
                                            </div>
                                            <!--end::کاربر-->
                                        </div>
                                        <!--end::کاربران-->
                                        <!--begin::پردازش-->
                                        <div class=\"min-w-125px\">
                                            <span class=\"badge badge-light-success\">کامل شد</span>
                                        </div>
                                        <!--end::پردازش-->
                                        <!--begin::Action-->
                                        <a href=\"#\" class=\"btn btn-sm btn-light btn-active-light-primary\">نمایش</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Recیاd-->
                                </div>
                                <!--end::زمانline جزئیات-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Thumbtack.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.6734943,8.3307728 L14.9993074,6.09979492 L14.1213255,5.22181303 C13.7308012,4.83128874 13.7308012,4.19812376 14.1213255,3.80759947 L15.535539,2.39338591 C15.9260633,2.00286161 16.5592283,2.00286161 16.9497526,2.39338591 L22.6066068,8.05024016 C22.9971311,8.44076445 22.9971311,9.07392943 22.6066068,9.46445372 L21.1923933,10.8786673 C20.801869,11.2691916 20.168704,11.2691916 19.7781797,10.8786673 L18.9002333,10.0007208 L16.6692373,13.3265608 C16.9264145,14.2523264 16.9984943,15.2320236 16.8664372,16.2092466 L16.4344698,19.4058049 C16.360509,19.9531149 15.8568695,20.3368403 15.3095595,20.2628795 C15.0925691,20.2335564 14.8912006,20.1338238 14.7363706,19.9789938 L5.02099894,10.2636221 C4.63047465,9.87309784 4.63047465,9.23993286 5.02099894,8.84940857 C5.17582897,8.69457854 5.37719743,8.59484594 5.59418783,8.56552292 L8.79074617,8.13355557 C9.76799113,8.00149544 10.7477104,8.0735815 11.6734943,8.3307728 Z\"
                                                      fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<polygon fill=\"#000000\" opacity=\"0.3\"
                                                         transform=\"translate(7.050253, 17.949747) rotate(-315.000000) translate(-7.050253, -17.949747)\"
                                                         points=\"5.55025253 13.9497475 5.55025253 19.6640332 7.05025253 21.9497475 8.55025253 19.6640332 8.55025253 13.9497475\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n2\">
                                <!--begin::زمانline heading-->
                                <div class=\"overflow-auto pe-3\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">دعوت نامه برای ساخت طراحی های جذاب که کارگاه انسانی
                                        را بیان می کنند
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">ارسال شده در ساعت 4:23</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Alan Nilson\">
                                            <img src=\"/assets/media/avatars/150-2.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/عمومی/Attachment2.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                 xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z\"
                                                          fill=\"#000000\" opacity=\"0.3\"
                                                          transform=\"translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z\"
                                                          fill=\"#000000\"
                                                          transform=\"translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z\"
                                                          fill=\"#000000\" opacity=\"0.3\"
                                                          transform=\"translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z\"
                                                          fill=\"#000000\" opacity=\"0.3\"
                                                          transform=\"translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"mb-5 pe-3\">
                                    <!--begin::Title-->
                                    <a href=\"#\" class=\"fs-5 fw-bold text-gray-800 text-hover-primary mb-2\">3 پروژه ورودی
                                        جدید پرونده ها:</a>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">ارسال شده در ساعت 10:30</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Jan Hummer\">
                                            <img src=\"/assets/media/avatars/150-6.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                                <!--begin::زمانline جزئیات-->
                                <div class=\"overflow-auto pb-5\">
                                    <div class=\"d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5\">
                                        <!--begin::مورد-->
                                        <div class=\"d-flex flex-aligns-center pe-10 pe-lg-20\">
                                            <!--begin::Icon-->
                                            <img alt=\"\" class=\"w-30px me-3\" src=\"/assets/media/svg/files/pdf.svg\"/>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class=\"ms-1 fw-bold\">
                                                <!--begin::Desc-->
                                                <a href=\"#\" class=\"fs-6 text-hover-primary fw-bolder\">دارایی، مالیه،
                                                    سرمایه گذاری </a>
                                                <!--end::Desc-->
                                                <!--begin::شماره کارت-->
                                                <div class=\"text-gray-400\">1.9mb</div>
                                                <!--end::شماره کارت-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::مورد-->
                                        <!--begin::مورد-->
                                        <div class=\"d-flex flex-aligns-center pe-10 pe-lg-20\">
                                            <!--begin::Icon-->
                                            <img alt=\"\" class=\"w-30px me-3\" src=\"/assets/media/svg/files/doc.svg\"/>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class=\"ms-1 fw-bold\">
                                                <!--begin::Desc-->
                                                <a href=\"#\" class=\"fs-6 text-hover-primary fw-bolder\">نتایج تست سرویس
                                                    گیرنده</a>
                                                <!--end::Desc-->
                                                <!--begin::شماره کارت-->
                                                <div class=\"text-gray-400\">18kb</div>
                                                <!--end::شماره کارت-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::مورد-->
                                        <!--begin::مورد-->
                                        <div class=\"d-flex flex-aligns-center\">
                                            <!--begin::Icon-->
                                            <img alt=\"\" class=\"w-30px me-3\" src=\"/assets/media/svg/files/css.svg\"/>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class=\"ms-1 fw-bold\">
                                                <!--begin::Desc-->
                                                <a href=\"#\" class=\"fs-6 text-hover-primary fw-bolder\">دارایی، مالیه،
                                                    سرمایه گذاری گزارش ها</a>
                                                <!--end::Desc-->
                                                <!--begin::شماره کارت-->
                                                <div class=\"text-gray-400\">20mb</div>
                                                <!--end::شماره کارت-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::مورد-->
                                    </div>
                                </div>
                                <!--end::زمانline جزئیات-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/خانه/Library.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                 xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\"
                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                          transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)\"
                                                          x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">وظیفه
                                        <a href=\"#\" class=\"text-primary fw-bolder me-1\">#45890</a>ادغام با
                                        <a href=\"#\" class=\"text-primary fw-bolder me-1\">#45890</a>درپروژه داشبورد ادمین
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">آغاز شده در 4:23 بعد از ظهر توسط</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Nina Nilson\">
                                            <img src=\"/assets/media/avatars/150-11.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/نوشتن.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z\"
                                                      fill=\"#000000\" fill-rule=\"nonzero\"
                                                      transform=\"translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z\"
                                                      fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">3 مفهوم جدید طراحی برنامه اضافه شده است:</div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">ایجاد شده در 4:23 بعد از ظهر توسط</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Marcus Dotson\">
                                            <img src=\"/assets/media/avatars/150-3.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                                <!--begin::زمانline جزئیات-->
                                <div class=\"overflow-auto pb-5\">
                                    <div class=\"d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7\">
                                        <!--begin::مورد-->
                                        <div class=\"overlay me-10\">
                                            <!--begin::Imسن-->
                                            <div class=\"overlay-wrapper\">
                                                <img alt=\"img\" class=\"rounded w-200px\"
                                                     src=\"/assets/media/demos/demo1.png\"/>
                                            </div>
                                            <!--end::Imسن-->
                                            <!--begin::Link-->
                                            <div class=\"overlay-layer bg-dark bg-opacity-10 rounded\">
                                                <a href=\"#\" class=\"btn btn-sm btn-primary btn-shadow\">کاوش کنید</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::مورد-->
                                        <!--begin::مورد-->
                                        <div class=\"overlay me-10\">
                                            <!--begin::Imسن-->
                                            <div class=\"overlay-wrapper\">
                                                <img alt=\"img\" class=\"rounded w-200px\"
                                                     src=\"/assets/media/demos/demo2.png\"/>
                                            </div>
                                            <!--end::Imسن-->
                                            <!--begin::Link-->
                                            <div class=\"overlay-layer bg-dark bg-opacity-10 rounded\">
                                                <a href=\"#\" class=\"btn btn-sm btn-primary btn-shadow\">کاوش کنید</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::مورد-->
                                        <!--begin::مورد-->
                                        <div class=\"overlay\">
                                            <!--begin::Imسن-->
                                            <div class=\"overlay-wrapper\">
                                                <img alt=\"img\" class=\"rounded w-200px\"
                                                     src=\"/assets/media/demos/demo3.png\"/>
                                            </div>
                                            <!--end::Imسن-->
                                            <!--begin::Link-->
                                            <div class=\"overlay-layer bg-dark bg-opacity-10 rounded\">
                                                <a href=\"#\" class=\"btn btn-sm btn-primary btn-shadow\">کاوش کنید</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::مورد-->
                                    </div>
                                </div>
                                <!--end::زمانline جزئیات-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/فوری-mail.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z\"
                                                      fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z\"
                                                      fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">کیس جدید
                                        <a href=\"#\" class=\"text-primary fw-bolder me-1\">#67890</a>در پروژه طراحی پایگاه
                                        داده چند پلتفرمی به شما اختصاص داده شده است
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"overflow-auto pb-5\">
                                        <!--begin::Wrapper-->
                                        <div class=\"d-flex align-items-center mt-1 fs-6\">
                                            <!--begin::Info-->
                                            <div class=\"text-muted me-2 fs-7\">اضافه شده در ساعت 4:12</div>
                                            <!--end::Info-->
                                            <!--begin::کاربر-->
                                            <a href=\"#\" class=\"text-primary fw-bolder me-1\">رضا علی ابادی</a>
                                            <!--end::کاربر-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/نوشتن.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z\"
                                                      fill=\"#000000\" fill-rule=\"nonzero\"
                                                      transform=\"translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z\"
                                                      fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">رسید به دست شما سفارش جدید</div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">در 5:05 صبح توسط</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Robert Rich\">
                                            <img src=\"/assets/media/avatars/150-14.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                                <!--begin::زمانline جزئیات-->
                                <div class=\"overflow-auto pb-5\">
                                    <!--begin::Notice-->
                                    <div class=\"notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6\">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotone/Code/Git4.svg-->
                                        <span class=\"svg-icon svg-icon-2tx svg-icon-primary me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z\"
                                                          fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7,11.4648712 L7,17 C7,18.1045695 7.8954305,19 9,19 L15,19 L15,21 L9,21 C6.790861,21 5,19.209139 5,17 L5,8 L5,7 L7,7 L7,8 C7,9.1045695 7.8954305,10 9,10 L15,10 L15,12 L9,12 C8.27142571,12 7.58834673,11.8052114 7,11.4648712 Z\"
                                                          fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18,22 C19.1045695,22 20,21.1045695 20,20 C20,18.8954305 19.1045695,18 18,18 C16.8954305,18 16,18.8954305 16,20 C16,21.1045695 16.8954305,22 18,22 Z M18,24 C15.790861,24 14,22.209139 14,20 C14,17.790861 15.790861,16 18,16 C20.209139,16 22,17.790861 22,20 C22,22.209139 20.209139,24 18,24 Z\"
                                                          fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 Z M18,15 C15.790861,15 14,13.209139 14,11 C14,8.790861 15.790861,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 Z\"
                                                          fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class=\"d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap\">
                                            <!--begin::Content-->
                                            <div class=\"mb-3 mb-md-0 fw-bold\">
                                                <h4 class=\"text-gray-800 fw-bolder\">پایگاه داده برگشت فرآیند کامل
                                                    شد!</h4>
                                                <div class=\"fs-6 text-gray-600 pe-7\">برای اطمینان از درستی داده ها ، به
                                                    مدیر داشبورد وارد شوید
                                                </div>
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Action-->
                                            <a href=\"#\" class=\"btn btn-primary px-6 align-self-center text-nowrap\">پردازش</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::زمانline جزئیات-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/Shopping/Cart4.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
                                                 viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                      d=\"M3.19406 11.1644C3.09247 10.5549 3.56251 10 4.18045 10H19.8195C20.4375 10 20.9075 10.5549 20.8059 11.1644L19.4178 19.4932C19.1767 20.9398 17.9251 22 16.4586 22H7.54138C6.07486 22 4.82329 20.9398 4.58219 19.4932L3.19406 11.1644Z\"
                                                      fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2 9.5C2 8.67157 2.67157 8 3.5 8H20.5C21.3284 8 22 8.67157 22 9.5C22 10.3284 21.3284 11 20.5 11H3.5C2.67157 11 2 10.3284 2 9.5Z\"
                                                      fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10 13C9.44772 13 9 13.4477 9 14V18C9 18.5523 9.44772 19 10 19C10.5523 19 11 18.5523 11 18V14C11 13.4477 10.5523 13 10 13Z\"
                                                      fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14 13C13.4477 13 13 13.4477 13 14V18C13 18.5523 13.4477 19 14 19C14.5523 19 15 18.5523 15 18V14C15 13.4477 14.5523 13 14 13Z\"
                                                      fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<g opacity=\"0.25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10.7071 3.70711C11.0976 3.31658 11.0976 2.68342 10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711C4.68342 9.09763 5.31658 9.09763 5.70711 8.70711L10.7071 3.70711Z\"
                                                          fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13.2929 3.70711C12.9024 3.31658 12.9024 2.68342 13.2929 2.29289C13.6834 1.90237 14.3166 1.90237 14.7071 2.29289L19.7071 7.29289C20.0976 7.68342 20.0976 8.31658 19.7071 8.70711C19.3166 9.09763 18.6834 9.09763 18.2929 8.70711L13.2929 3.70711Z\"
                                                          fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">سفارش جدید
                                        <a href=\"#\" class=\"text-primary fw-bolder me-1\">#67890</a>is placed fیا Wیاkshow
                                        Planning &amp; بودجه Estimation
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">در ساعت 4:23 بعد از ظهر توسط</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <a href=\"#\" class=\"text-primary fw-bolder me-1\">محسن علی ابادی</a>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                    </div>
                    <!--end::زمانline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class=\"card-footer py-5 text-center\" id=\"kt_activities_footer\">
                <a href=\"pages/profile/activity.html\" class=\"btn btn-bg-white text-primary\">نمایش تمام فعالیت ها
                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                    <span class=\"svg-icon svg-icon-3 svg-icon-primary\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                      transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                      x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\"/>
\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                      fill=\"#000000\" fill-rule=\"nonzero\"
                                      transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
                    <!--end::Svg Icon--></a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::فعالیتها drawer-->
    <!--begin::نمودارها drawer-->
    <div id=\"kt_drawer_chat\" class=\"bg-white\" data-kt-drawer=\"true\" data-kt-drawer-name=\"chat\"
         data-kt-drawer-activate=\"true\" data-kt-drawer-overlay=\"true\"
         data-kt-drawer-width=\"{default:'300px', 'md': '500px'}\" data-kt-drawer-direction=\"end\"
         data-kt-drawer-toggle=\"#kt_drawer_chat_toggle\" data-kt-drawer-close=\"#kt_drawer_chat_close\">
        <!--begin::Messenger-->
        <div class=\"card w-100\" id=\"kt_drawer_chat_messenger\">
            <!--begin::Card header-->
            <div class=\"card-header pe-5\" id=\"kt_drawer_chat_messenger_header\">
                <!--begin::Title-->
                <div class=\"card-title\">
                    <!--begin::کاربر-->
                    <div class=\"d-flex justify-content-center flex-column me-3\">
                        <a href=\"#\" class=\"fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1\">رضا علی
                            ابادی</a>
                        <!--begin::Info-->
                        <div class=\"mb-0 lh-1\">
                            <span class=\"badge badge-success badge-circle w-10px h-10px me-1\"></span>
                            <span class=\"fs-7 fw-bold text-gray-400\">فعال</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::کاربر-->
                </div>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class=\"card-toolbar\">
                    <!--begin::Menu-->
                    <div class=\"me-2\">
                        <button class=\"btn btn-sm btn-icon btn-active-light-primary\" data-kt-menu-trigger=\"click\"
                                data-kt-menu-placement=\"bottom-end\" data-kt-menu-flip=\"top-end\">
                            <i class=\"bi bi-three-dots fs-3\"></i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3\"
                             data-kt-menu=\"true\">
                            <!--begin::Heading-->
                            <div class=\"menu-item px-3\">
                                <div class=\"menu-content text-muted pb-2 px-3 fs-7 text-uppercase\">مخاطبین</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu مورد-->
                            <div class=\"menu-item px-3\">
                                <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"modal\"
                                   data-bs-target=\"#kt_modal_کاربران_search\">افزودن مخاطب</a>
                            </div>
                            <!--end::Menu مورد-->
                            <!--begin::Menu مورد-->
                            <div class=\"menu-item px-3\">
                                <a href=\"#\" class=\"menu-link flex-stack px-3\" data-bs-toggle=\"modal\"
                                   data-bs-target=\"#kt_modal_invite_friends\">دعوت از مخاطبین
                                    <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                       title=\"برای ارسال دعوت نامه یک ایمیل تماس مشخص کنید\"></i></a>
                            </div>
                            <!--end::Menu مورد-->
                            <!--begin::Menu مورد-->
                            <div class=\"menu-item px-3\" data-kt-menu-trigger=\"hover\" data-kt-menu-placement=\"left-start\"
                                 data-kt-menu-flip=\"left, center, top\">
                                <a href=\"#\" class=\"menu-link px-3\">
                                    <span class=\"menu-title\">گروه ها</span>
                                    <span class=\"menu-arrow\"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class=\"menu-sub menu-sub-dropdown w-175px py-4\">
                                    <!--begin::Menu مورد-->
                                    <div class=\"menu-item px-3\">
                                        <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\" title=\"بزودی\">ایجاد
                                            کردن گروه</a>
                                    </div>
                                    <!--end::Menu مورد-->
                                    <!--begin::Menu مورد-->
                                    <div class=\"menu-item px-3\">
                                        <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\" title=\"بزودی\">دعوت
                                            کاربران</a>
                                    </div>
                                    <!--end::Menu مورد-->
                                    <!--begin::Menu مورد-->
                                    <div class=\"menu-item px-3\">
                                        <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\" title=\"بزودی\">تنظیمات</a>
                                    </div>
                                    <!--end::Menu مورد-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu مورد-->
                            <!--begin::Menu مورد-->
                            <div class=\"menu-item px-3 my-1\">
                                <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\" title=\"بزودی\">تنظیمات</a>
                            </div>
                            <!--end::Menu مورد-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->
                    <!--begin::Close-->
                    <div class=\"btn btn-sm btn-icon btn-active-light-primary\" id=\"kt_drawer_chat_close\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                       fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                              transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                              x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class=\"card-body\" id=\"kt_drawer_chat_messenger_body\">
                <!--begin::پیامs-->
                <div class=\"scroll-y me-n5 pe-5\" data-kt-element=\"messسنs\" data-kt-scroll=\"true\"
                     data-kt-scroll-activate=\"true\" data-kt-scroll-height=\"auto\"
                     data-kt-scroll-dependencies=\"#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer\"
                     data-kt-scroll-wrappers=\"#kt_drawer_chat_messenger_body\" data-kt-scroll-offset=\"0px\">
                    <!--begin::پیام(in)-->
                    <div class=\"d-flex justify-content-start mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-start\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                                <!--begin::جزئیات-->
                                <div class=\"ms-3\">
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary me-1\">رضا علی
                                        ابادی</a>
                                    <span class=\"text-muted fs-7 mb-1\">دو دقیقه پیش</span>
                                </div>
                                <!--end::جزئیات-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start\"
                                 data-kt-element=\"messسن-text\">چقدر احتمال دارد که شرکت ما را به دوستان و خانواده خود
                                پیشنهاد دهید؟?
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class=\"d-flex justify-content-end mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-end\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::جزئیات-->
                                <div class=\"me-3\">
                                    <span class=\"text-muted fs-7 mb-1\">5دقیقه پیش</span>
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary ms-1\">شما</a>
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end\"
                                 data-kt-element=\"messسن-text\">سلام ، ما فقط در حال نوشتن هستیم تا به شما اطلاع دهیم که
                                در مخزن گیت هاب مشترک شده اید.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class=\"d-flex justify-content-start mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-start\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                                <!--begin::جزئیات-->
                                <div class=\"ms-3\">
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary me-1\">رضا علی
                                        ابادی</a>
                                    <span class=\"text-muted fs-7 mb-1\">یکساعت پیش</span>
                                </div>
                                <!--end::جزئیات-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start\"
                                 data-kt-element=\"messسن-text\">بله فهمیدم
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class=\"d-flex justify-content-end mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-end\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::جزئیات-->
                                <div class=\"me-3\">
                                    <span class=\"text-muted fs-7 mb-1\">دوساعت پیش</span>
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary ms-1\">شما</a>
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end\"
                                 data-kt-element=\"messسن-text\">شما برای همه موارد اعلان دریافت خواهید کرد ، درخواستها را
                                بکشید!
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class=\"d-flex justify-content-start mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-start\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                                <!--begin::جزئیات-->
                                <div class=\"ms-3\">
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary me-1\">رضا علی
                                        ابادی</a>
                                    <span class=\"text-muted fs-7 mb-1\">سه ساعت پیش</span>
                                </div>
                                <!--end::جزئیات-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start\"
                                 data-kt-element=\"messسن-text\">شما can unwatch this repositیاy immediately by clicking
                                here:
                                <a href=\"https://keenthemes.com\">ساتراس وب.com</a></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class=\"d-flex justify-content-end mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-end\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::جزئیات-->
                                <div class=\"me-3\">
                                    <span class=\"text-muted fs-7 mb-1\">4ساعت پیش</span>
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary ms-1\">شما</a>
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end\"
                                 data-kt-element=\"messسن-text\">بیشتر دوره های بازرگانی خریداری شده در طول این فروش!
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class=\"d-flex justify-content-start mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-start\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                                <!--begin::جزئیات-->
                                <div class=\"ms-3\">
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary me-1\">رضا علی
                                        ابادی</a>
                                    <span class=\"text-muted fs-7 mb-1\">5ساعت پبش</span>
                                </div>
                                <!--end::جزئیات-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start\"
                                 data-kt-element=\"messسن-text\">شرکت BBQ برای جشن گرفتن آخرین دستاوردها و اهداف کواتر.
                                غذا و نوشیدنی تهیه شده
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(template fیا out)-->
                    <div class=\"d-flex justify-content-end mb-10 d-none\" data-kt-element=\"template-out\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-end\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::جزئیات-->
                                <div class=\"me-3\">
                                    <span class=\"text-muted fs-7 mb-1\">Just now</span>
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary ms-1\">شما</a>
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end\"
                                 data-kt-element=\"messسن-text\"></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(template fیا out)-->
                    <!--begin::پیام(template fیا in)-->
                    <div class=\"d-flex justify-content-start mb-10 d-none\" data-kt-element=\"template-in\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-start\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                                <!--begin::جزئیات-->
                                <div class=\"ms-3\">
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary me-1\">رضا علی
                                        ابادی</a>
                                    <span class=\"text-muted fs-7 mb-1\">Just now</span>
                                </div>
                                <!--end::جزئیات-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start\"
                                 data-kt-element=\"messسن-text\">Right befیاe vacation season we have the next Big Deal
                                fیا you.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(template fیا in)-->
                </div>
                <!--end::پیامs-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class=\"card-footer pt-4\" id=\"kt_drawer_chat_messenger_footer\">
                <!--begin::Input-->
                <textarea class=\"form-control form-control-flush mb-3\" rows=\"1\" data-kt-element=\"input\"
                          placeholder=\"پیام را بنویسید\"></textarea>
                <!--end::Input-->
                <!--begin:Toolbar-->
                <div class=\"d-flex flex-stack\">
                    <!--begin::عملیات-->
                    <div class=\"d-flex align-items-center me-2\">
                        <button class=\"btn btn-sm btn-icon btn-active-light-primary me-1\" type=\"button\"
                                data-bs-toggle=\"tooltip\" title=\"بزودی\">
                            <i class=\"bi bi-paperclip fs-3\"></i>
                        </button>
                        <button class=\"btn btn-sm btn-icon btn-active-light-primary me-1\" type=\"button\"
                                data-bs-toggle=\"tooltip\" title=\"بزودی\">
                            <i class=\"bi bi-upload fs-3\"></i>
                        </button>
                    </div>
                    <!--end::عملیات-->
                    <!--begin::ارسال-->
                    <button class=\"btn btn-primary\" type=\"button\" data-kt-element=\"send\">ارسال</button>
                    <!--end::ارسال-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--begin::Exolیاe drawer-->
    <!--begin::Modal - دعوت از دوستان-->
    <div class=\"modal fade\" id=\"kt_modal_invite_friends\" tabindex=\"-1\" aria-hidden=\"true\">
        <!--begin::Modal dialog-->
        <div class=\"modal-dialog mw-650px\">
            <!--begin::Modal content-->
            <div class=\"modal-content\">
                <!--begin::Modal header-->
                <div class=\"modal-header pb-0 border-0 justify-content-end\">
                    <!--begin::Close-->
                    <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                       fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                              transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                              x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class=\"modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15\">
                    <!--begin::Heading-->
                    <div class=\"text-center mb-13\">
                        <!--begin::Title-->
                        <h1 class=\"mb-3\">دعوت از دوستان</h1>
                        <!--end::Title-->
                        <!--begin::توضیحات-->
                        <div class=\"text-gray-400 fw-bold fs-5\">اگر به اطلاعات بیشتری نیاز دارید ، لطفاً این مورد را
                            بررسی کنید
                            <a href=\"#\" class=\"link-primary fw-bolder\">صفحه سوالات متداول</a>.
                        </div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Google مخاطبین Invite-->
                    <div class=\"btn btn-light-primary fw-bolder w-100 mb-8\">
                        <img alt=\"Logo\" src=\"/assets/media/svg/brand-logos/google-icon.svg\" class=\"h-20px me-3\"/>دعوت از
                        مخاطبین جمیل
                    </div>
                    <!--end::Google مخاطبین Invite-->
                    <!--begin::Separatیا-->
                    <div class=\"separator d-flex flex-center mb-8\">
                        <span class=\"text-uppercase bg-white fs-7 fw-bold text-gray-400 px-3\">یا</span>
                    </div>
                    <!--end::Separatیا-->
                    <!--begin::Textarea-->
                    <textarea class=\"form-control form-control-solid mb-8\" rows=\"3\"
                              placeholder=\"ایمیل را وارد نمایید\"></textarea>
                    <!--end::Textarea-->
                    <!--begin::کاربران-->
                    <div class=\"mb-10\">
                        <!--begin::Heading-->
                        <div class=\"fs-6 fw-bold mb-2\">دعوت از کاربران</div>
                        <!--end::Heading-->
                        <!--begin::List-->
                        <div class=\"mh-300px scroll-y me-n7 pe-7\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-1.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">اتنا
                                            ابراهیمی</a>
                                        <div class=\"fw-bold text-gray-400\">e.smith@kpmg.com.au</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-danger text-danger fw-bold\">M</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">رضا علی
                                            ابادی</a>
                                        <div class=\"fw-bold text-gray-400\">melody@altbox.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\" selected=\"selected\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محمد
                                            ابراهیمی</a>
                                        <div class=\"fw-bold text-gray-400\">max@kt.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-4.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محسن
                                            برومند</a>
                                        <div class=\"fw-bold text-gray-400\">sean@dellito.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">رضا علی
                                            ابادی</a>
                                        <div class=\"fw-bold text-gray-400\">brian@exchange.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-warning text-warning fw-bold\">M</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محسن
                                            برومند</a>
                                        <div class=\"fw-bold text-gray-400\">mikaela@pexcom.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-8.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محمد
                                            رصایی</a>
                                        <div class=\"fw-bold text-gray-400\">f.mitcham@kpmg.com.au</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-danger text-danger fw-bold\">O</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">رضا علی
                                            ابادی</a>
                                        <div class=\"fw-bold text-gray-400\">olivia@cیاpmail.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-primary text-primary fw-bold\">N</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محسن
                                            برومند</a>
                                        <div class=\"fw-bold text-gray-400\">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\" selected=\"selected\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-6.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">علی
                                            کاربر</a>
                                        <div class=\"fw-bold text-gray-400\">dam@consilting.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-danger text-danger fw-bold\">E</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">اتنا
                                            رضایی</a>
                                        <div class=\"fw-bold text-gray-400\">emma@intenso.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-7.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">علی
                                            کاربر</a>
                                        <div class=\"fw-bold text-gray-400\">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\" selected=\"selected\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-info text-info fw-bold\">A</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">رابرت
                                            دو</a>
                                        <div class=\"fw-bold text-gray-400\">robert@benko.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-17.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">مصطفی
                                            اکبرپور</a>
                                        <div class=\"fw-bold text-gray-400\">miller@mapple.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-success text-success fw-bold\">L</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">سجاد
                                            خراشادی</a>
                                        <div class=\"fw-bold text-gray-400\">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-10.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محمدابراهیمی</a>
                                        <div class=\"fw-bold text-gray-400\">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\" selected=\"selected\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-4.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محسن
                                            برومند</a>
                                        <div class=\"fw-bold text-gray-400\">sean@dellito.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::کاربران-->
                    <!--begin::Notice-->
                    <div class=\"d-flex flex-stack\">
                        <!--begin::برچسب-->
                        <div class=\"me-5 fw-bold\">
                            <label class=\"fs-6\">اضافه کردن کاربران توسط اعضای تیم</label>
                            <div class=\"fs-7 text-gray-400\">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را
                                بررسی کنید
                            </div>
                        </div>
                        <!--end::برچسب-->
                        <!--begin::Switch-->
                        <label class=\"form-check form-switch form-check-custom form-check-solid\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" checked=\"checked\"/>
                            <span class=\"form-check-label fw-bold text-gray-400\">همه بدهکار هستیم</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend-->
    <!--begin::Modal - ایجاد کردن نرم افزار-->
    <div class=\"modal fade\" id=\"kt_modal_create_app\" tabindex=\"-1\" aria-hidden=\"true\">
        <!--begin::Modal dialog-->
        <div class=\"modal-dialog modal-dialog-centered mw-900px\">
            <!--begin::Modal content-->
            <div class=\"modal-content\">
                <!--begin::Modal header-->
                <div class=\"modal-header\">
                    <!--begin::Modal title-->
                    <h2>ایجاد کردن نرم افزار</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                       fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                              transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                              x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class=\"modal-body py-lg-10 px-lg-10\">
                    <!--begin::Stepper-->
                    <div class=\"stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid\"
                         id=\"kt_modal_create_app_stepper\">
                        <!--begin::سایدبار کنار-->
                        <div class=\"d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px\">
                            <!--begin::Nav-->
                            <div class=\"stepper-nav ps-lg-10\">
                                <!--begin::Step 1-->
                                <div class=\"stepper-item current\" data-kt-stepper-element=\"nav\">
                                    <!--begin::Line-->
                                    <div class=\"stepper-line w-40px\"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class=\"stepper-icon w-40px h-40px\">
                                        <i class=\"stepper-check fas fa-check\"></i>
                                        <span class=\"stepper-شماره کارت\">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::برچسب-->
                                    <div class=\"stepper-label\">
                                        <h3 class=\"stepper-title\">جزئیات</h3>
                                        <div class=\"stepper-desc\">نام نرم افزار شما</div>
                                    </div>
                                    <!--end::برچسب-->
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <!--begin::Line-->
                                    <div class=\"stepper-line w-40px\"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class=\"stepper-icon w-40px h-40px\">
                                        <i class=\"stepper-check fas fa-check\"></i>
                                        <span class=\"stepper-شماره کارت\">2</span>
                                    </div>
                                    <!--begin::Icon-->
                                    <!--begin::برچسب-->
                                    <div class=\"stepper-label\">
                                        <h3 class=\"stepper-title\">چارچوب ها</h3>
                                        <div class=\"stepper-desc\">چارچوب برنامه خود را مشخص کنید</div>
                                    </div>
                                    <!--begin::برچسب-->
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <!--begin::Line-->
                                    <div class=\"stepper-line w-40px\"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class=\"stepper-icon w-40px h-40px\">
                                        <i class=\"stepper-check fas fa-check\"></i>
                                        <span class=\"stepper-شماره کارت\">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::برچسب-->
                                    <div class=\"stepper-label\">
                                        <h3 class=\"stepper-title\">پایگاه داده</h3>
                                        <div class=\"stepper-desc\">انتخاب نوع دیتابیس نرم افزار</div>
                                    </div>
                                    <!--end::برچسب-->
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <!--begin::Line-->
                                    <div class=\"stepper-line w-40px\"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class=\"stepper-icon w-40px h-40px\">
                                        <i class=\"stepper-check fas fa-check\"></i>
                                        <span class=\"stepper-شماره کارت\">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::برچسب-->
                                    <div class=\"stepper-label\">
                                        <h3 class=\"stepper-title\">صورتحساب</h3>
                                        <div class=\"stepper-desc\">ارائه جزئیات پرداخت</div>
                                    </div>
                                    <!--end::برچسب-->
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <!--begin::Line-->
                                    <div class=\"stepper-line w-40px\"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class=\"stepper-icon w-40px h-40px\">
                                        <i class=\"stepper-check fas fa-check\"></i>
                                        <span class=\"stepper-شماره کارت\">5</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::برچسب-->
                                    <div class=\"stepper-label\">
                                        <h3 class=\"stepper-title\">رهایی</h3>
                                        <div class=\"stepper-desc\">بررسی و ارسال</div>
                                    </div>
                                    <!--end::برچسب-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::سایدبار کنار-->
                        <!--begin::Content-->
                        <div class=\"flex-row-fluid py-lg-5 px-lg-15\">
                            <!--begin::Fیاm-->
                            <form class=\"form\" novaliتاریخ=\"novaliتاریخ\" id=\"kt_modal_create_app_form\">
                                <!--begin::Step 1-->
                                <div class=\"current\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Input group-->
                                        <div class=\"fv-row mb-10\">
                                            <!--begin::برچسب-->
                                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                                <span class=\"required\">نام نرم افزار</span>
                                                <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                                   title=\"Specify your unique نام نرم افزار\"></i>
                                            </label>
                                            <!--end::برچسب-->
                                            <!--begin::Input-->
                                            <input type=\"text\" class=\"form-control form-control-lg form-control-solid\"
                                                   name=\"name\" placeholder=\"\" value=\"\"/>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class=\"fv-row\">
                                            <!--begin::برچسب-->
                                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-4\">
                                                <span class=\"required\">دسته بندی</span>
                                                <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                                   title=\"انتخاب your app دسته بندی\"></i>
                                            </label>
                                            <!--end::برچسب-->
                                            <!--begin:تنظیمات-->
                                            <div class=\"fv-row\">
                                                <!--begin:Option-->
                                                <label class=\"d-flex flex-stack mb-5 cursیا-pointer\">
                                                    <!--begin:برچسب-->
                                                    <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/خانه/Globe.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-1 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                             width=\"24px\" height=\"24px\"
                                                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                               fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\"
                                                                                      height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z\"
                                                                                      fill=\"#000000\"
                                                                                      fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\"
                                                                                        cx=\"12\" cy=\"10\" r=\"6\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                    <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">دوره های آنلاین سریع</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">ایجاد یک متن متمایز فقط یک سئو است</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:برچسب-->
                                                    <!--begin:Input-->
                                                    <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\"
                                                                   name=\"دسته بندی\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class=\"d-flex flex-stack mb-5 cursیا-pointer\">
                                                    <!--begin:برچسب-->
                                                    <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/چیدمان/چیدمان-4-blocks-2.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-1 svg-icon-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                             width=\"24px\" height=\"24px\"
                                                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                               fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"5\" y=\"5\" width=\"5\" height=\"5\"
                                                                                      rx=\"1\" fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"14\" y=\"5\" width=\"5\" height=\"5\"
                                                                                      rx=\"1\" fill=\"#000000\"
                                                                                      opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"5\" y=\"14\" width=\"5\" height=\"5\"
                                                                                      rx=\"1\" fill=\"#000000\"
                                                                                      opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"14\" y=\"14\" width=\"5\" height=\"5\"
                                                                                      rx=\"1\" fill=\"#000000\"
                                                                                      opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                    <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">بحث های چهره به چهره</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">ایجاد یک ساختار متن روشن فقط یک جنبه است</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:برچسب-->
                                                    <!--begin:Input-->
                                                    <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\"
                                                                   name=\"دسته بندی\" value=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class=\"d-flex flex-stack cursیا-pointer\">
                                                    <!--begin:برچسب-->
                                                    <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/دستگاهs/Watch1.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                             width=\"24px\" height=\"24px\"
                                                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z M9,6 L15,6 C16.6568542,6 18,7.34314575 18,9 L18,15 C18,16.6568542 16.6568542,18 15,18 L9,18 C7.34314575,18 6,16.6568542 6,15 L6,9 C6,7.34314575 7.34314575,6 9,6 Z\"
                                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z\"
                                                                                  fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9,18 L15,18 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,18 Z\"
                                                                                  fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,6 L9,6 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z\"
                                                                                  fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                    <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">آموزش مقدماتی کامل</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">ایجاد یک متن متن روشن برای نوشتن متن</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:برچسب-->
                                                    <!--begin:Input-->
                                                    <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\"
                                                                   name=\"دسته بندی\" value=\"3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end:تنظیمات-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Input group-->
                                        <div class=\"fv-row\">
                                            <!--begin::برچسب-->
                                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-4\">
                                                <span class=\"required\">انتخاب فریمورک</span>
                                                <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                                   title=\"Specify your apps framewیاk\"></i>
                                            </label>
                                            <!--end::برچسب-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer mb-5\">
                                                <!--begin:برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-html5 text-warning fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">HTML5</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Base Web Projec</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" checked=\"checked\"
                                                               name=\"framewیاk\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer mb-5\">
                                                <!--begin:برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-react text-success fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">ReactJS</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Robust و flexible app framewیاk</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"framewیاk\"
                                                               value=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer mb-5\">
                                                <!--begin:برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-angular text-danger fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">Angular</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Powerful data mangement</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"framewیاk\"
                                                               value=\"3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer\">
                                                <!--begin:برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-vuejs text-primary fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">Vue</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Lightweight و responsive framewیاk</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"framewیاk\"
                                                               value=\"4\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Input group-->
                                        <div class=\"fv-row mb-10\">
                                            <!--begin::برچسب-->
                                            <label class=\"required fs-5 fw-bold mb-2\">پایگاه داده نام</label>
                                            <!--end::برچسب-->
                                            <!--begin::Input-->
                                            <input type=\"text\" class=\"form-control form-control-lg form-control-solid\"
                                                   name=\"dbname\" placeholder=\"\" value=\"master_db\"/>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class=\"fv-row\">
                                            <!--begin::برچسب-->
                                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-4\">
                                                <span class=\"required\">انتخاب پایگاه داده Engine</span>
                                                <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                                   title=\"انتخاب your app پایگاه داده engine\"></i>
                                            </label>
                                            <!--end::برچسب-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer mb-5\">
                                                <!--begin::برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-database text-success fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">MySQL</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Basic MySQL پایگاه داده</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::برچسب-->
                                                <!--begin::Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"dbengine\"
                                                               checked=\"checked\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer mb-5\">
                                                <!--begin::برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-google text-danger fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">Firebase</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Google based app data manسنment</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::برچسب-->
                                                <!--begin::Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"dbengine\"
                                                               value=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer\">
                                                <!--begin::برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-amazon text-warning fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">DynamoDB</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\"> پایگاه داده</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::برچسب-->
                                                <!--begin::Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"dbengine\"
                                                               value=\"3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Input group-->
                                        <div class=\"d-flex flex-column mb-7 fv-row\">
                                            <!--begin::برچسب-->
                                            <label class=\"d-flex align-items-center fs-6 fw-bold form-label mb-2\">
                                                <span class=\"required\">نام بر روی کارت</span>
                                                <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                                   title=\"Specify a card holder's name\"></i>
                                            </label>
                                            <!--end::برچسب-->
                                            <input type=\"text\" class=\"form-control form-control-solid\" placeholder=\"\"
                                                   name=\"card_name\" value=\"محمد ابراهیمی\"/>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class=\"d-flex flex-column mb-7 fv-row\">
                                            <!--begin::برچسب-->
                                            <label class=\"required fs-6 fw-bold form-label mb-2\">شماره کارت</label>
                                            <!--end::برچسب-->
                                            <!--begin::Input wrapper-->
                                            <div class=\"position-relative\">
                                                <!--begin::Input-->
                                                <input type=\"text\" class=\"form-control form-control-solid\"
                                                       placeholder=\"Enter card شماره کارت\" name=\"card_شماره کارت\"
                                                       value=\"4111 1111 1111 1111\"/>
                                                <!--end::Input-->
                                                <!--begin::Card logos-->
                                                <div class=\"position-absolute translate-middle-y top-50 end-0 me-5\">
                                                    <img src=\"/assets/media/svg/card-logos/visa.svg\" alt=\"\"
                                                         class=\"h-25px\"/>
                                                    <img src=\"/assets/media/svg/card-logos/mastercard.svg\" alt=\"\"
                                                         class=\"h-25px\"/>
                                                    <img src=\"/assets/media/svg/card-logos/american-express.svg\" alt=\"\"
                                                         class=\"h-25px\"/>
                                                </div>
                                                <!--end::Card logos-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class=\"row mb-10\">
                                            <!--begin::Col-->
                                            <div class=\"col-md-8 fv-row\">
                                                <!--begin::برچسب-->
                                                <label class=\"required fs-6 fw-bold form-label mb-2\">تاریخ انقضا</label>
                                                <!--end::برچسب-->
                                                <!--begin::Row-->
                                                <div class=\"row fv-row\">
                                                    <!--begin::Col-->
                                                    <div class=\"col-6\">
                                                        <select name=\"card_expiry_month\"
                                                                class=\"form-select form-select-solid\"
                                                                data-control=\"select2\" data-hide-search=\"true\"
                                                                data-placeholder=\"ماه\">
                                                            <option></option>
                                                            <option value=\"1\">1</option>
                                                            <option value=\"2\">2</option>
                                                            <option value=\"3\">3</option>
                                                            <option value=\"4\">4</option>
                                                            <option value=\"5\">5</option>
                                                            <option value=\"6\">6</option>
                                                            <option value=\"7\">7</option>
                                                            <option value=\"8\">8</option>
                                                            <option value=\"9\">9</option>
                                                            <option value=\"10\">10</option>
                                                            <option value=\"11\">11</option>
                                                            <option value=\"12\">12</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class=\"col-6\">
                                                        <select name=\"card_expiry_سال\"
                                                                class=\"form-select form-select-solid\"
                                                                data-control=\"select2\" data-hide-search=\"true\"
                                                                data-placeholder=\"سال\">
                                                            <option></option>
                                                            <option value=\"2021\">2021</option>
                                                            <option value=\"2022\">2022</option>
                                                            <option value=\"2023\">2023</option>
                                                            <option value=\"2024\">2024</option>
                                                            <option value=\"2025\">2025</option>
                                                            <option value=\"2026\">2026</option>
                                                            <option value=\"2027\">2027</option>
                                                            <option value=\"2028\">2028</option>
                                                            <option value=\"2029\">2029</option>
                                                            <option value=\"2030\">2030</option>
                                                            <option value=\"2031\">2031</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class=\"col-md-4 fv-row\">
                                                <!--begin::برچسب-->
                                                <label class=\"d-flex align-items-center fs-6 fw-bold form-label mb-2\">
                                                    <span class=\"required\">CVV</span>
                                                    <i class=\"fas fa-exclamation-circle ms-2 fs-7\"
                                                       data-bs-toggle=\"tooltip\" title=\"Enter a card CVV code\"></i>
                                                </label>
                                                <!--end::برچسب-->
                                                <!--begin::Input wrapper-->
                                                <div class=\"position-relative\">
                                                    <!--begin::Input-->
                                                    <input type=\"text\" class=\"form-control form-control-solid\"
                                                           minlength=\"3\" maxlength=\"4\" placeholder=\"CVV\"
                                                           name=\"card_cvv\"/>
                                                    <!--end::Input-->
                                                    <!--begin::CVV icon-->
                                                    <div class=\"position-absolute translate-middle-y top-50 end-0 me-3\">
                                                        <!--begin::Svg Icon | path: icons/duotone/Shopping/Credit-card.svg-->
                                                        <span class=\"svg-icon svg-icon-2hx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"2\" y=\"5\"
                                                                              width=\"20\" height=\"14\" rx=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"2\" y=\"8\" width=\"20\"
                                                                              height=\"3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"16\" y=\"14\"
                                                                              width=\"4\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::CVV icon-->
                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class=\"d-flex flex-stack\">
                                            <!--begin::برچسب-->
                                            <div class=\"me-5\">
                                                <label class=\"fs-6 fw-bold form-label\">کارت را برای صورتحساب بیشتر ذخیره
                                                    کنید؟?</label>
                                                <div class=\"fs-7 fw-bold text-gray-400\">اگر به اطلاعات بیشتری نیاز دارید
                                                    ، لطفا برنامه ریزی بودجه را بررسی کنید
                                                </div>
                                            </div>
                                            <!--end::برچسب-->
                                            <!--begin::Switch-->
                                            <label class=\"form-check form-switch form-check-custom form-check-solid\">
                                                <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                                       checked=\"checked\"/>
                                                <span class=\"form-check-label fw-bold text-gray-400\">ذخیره کارت</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-element=\"content\">
                                    <div class=\"w-100 text-center\">
                                        <!--begin::Heading-->
                                        <h1 class=\"fw-bolder text-dark mb-3\">رهایی!</h1>
                                        <!--end::Heading-->
                                        <!--begin::توضیحات-->
                                        <div class=\"text-muted fw-bold fs-3\">برنامه خود را برای شروع پروژه خود ثبت
                                            کنید.
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::Illustration-->
                                        <div class=\"text-center px-4 py-15\">
                                            <img src=\"/assets/media/illustrations/todo.png\" alt=\"\"
                                                 class=\"mw-100 mh-150px\"/>
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::عملیات-->
                                <div class=\"d-flex flex-stack pt-10\">
                                    <!--begin::Wrapper-->
                                    <div class=\"me-2\">
                                        <button type=\"button\" class=\"btn btn-lg btn-light-primary me-3\"
                                                data-kt-stepper-action=\"previous\">
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Left-2.svg-->
                                            <span class=\"svg-icon svg-icon-3 me-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                              transform=\"translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)\"
                                                              x=\"14\" y=\"7\" width=\"2\" height=\"10\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z\"
                                                              fill=\"#000000\" fill-rule=\"nonzero\"
                                                              transform=\"translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->برگشت
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type=\"button\" class=\"btn btn-lg btn-primary\"
                                                data-kt-stepper-action=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"indicator-label\">ثبت
                                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-3 ms-2 me-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                         height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                           fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                  transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                                  x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"
                                                                  transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Svg Icon--></span>
                                            <span class=\"indicator-progress\">لطفا صبر کنید
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-border spinner-border-sm align-middle ms-2\"></span></span>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-lg btn-primary\"
                                                data-kt-stepper-action=\"next\">ادامه
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                            <span class=\"svg-icon svg-icon-3 ms-1 me-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                              transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                              x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                              fill=\"#000000\" fill-rule=\"nonzero\"
                                                              transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon--></button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::عملیات-->
                            </form>
                            <!--end::Fیاm-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - ایجاد کردن نرم افزار-->
    <!--begin::Modal - ارتقا دهید plan-->
    <div class=\"modal fade\" id=\"kt_modal_upgrade_plan\" tabindex=\"-1\" aria-hidden=\"true\">
        <!--begin::Modal dialog-->
        <div class=\"modal-dialog modal-xl\">
            <!--begin::Modal content-->
            <div class=\"modal-content rounded\">
                <!--begin::Modal header-->
                <div class=\"modal-header justify-content-end border-0 pb-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                       fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                              transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                              x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class=\"modal-body pt-0 pb-15 px-5 px-xl-20\">
                    <!--begin::Heading-->
                    <div class=\"mb-13 text-center\">
                        <h1 class=\"mb-3\">یک برنامه را ارتقا کنید</h1>
                        <div class=\"text-gray-400 fw-bold fs-5\">اگر به اطلاعات لازم دارید ، لطفاً بررسی کنید
                            <a href=\"#\" class=\"link-primary fw-bolder\">دستورالعمل قیمت گذاری</a>.
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::برنامه ریزی ها-->
                    <div class=\"d-flex flex-column\">
                        <!--begin::Nav group-->
                        <div class=\"nav-group nav-group-outline mx-auto\" data-kt-buttons=\"true\">
                            <a href=\"#\"
                               class=\"btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active\"
                               data-kt-plan=\"month\">ماهانه</a>
                            <a href=\"#\" class=\"btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3\"
                               data-kt-plan=\"annual\">سالانه</a>
                        </div>
                        <!--end::Nav group-->
                        <!--begin::Row-->
                        <div class=\"row mt-10\">
                            <!--begin::Col-->
                            <div class=\"col-lg-6 mb-10 mb-lg-0\">
                                <!--begin::Tabs-->
                                <div class=\"nav flex-column\">
                                    <!--begin::Tab link-->
                                    <div class=\"nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6\"
                                         data-bs-toggle=\"tab\" data-bs-target=\"#kt_upgrade_plan_startup\">
                                        <!--end::توضیحات-->
                                        <div class=\"d-flex align-items-center me-2\">
                                            <!--begin::Radio-->
                                            <div class=\"form-check form-check-custom form-check-solid form-check-success me-6\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"plan\"
                                                       checked=\"checked\" value=\"startup\"/>
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class=\"flex-grow-1\">
                                                <h2 class=\"d-flex align-items-center fs-2 fw-bolder flex-wrap\">استارت
                                                    آپ</h2>
                                                <div class=\"fw-bold opacity-50\">بهرتین استارتاپ</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class=\"ms-5\">
                                            <span class=\"mb-2\"> تومان</span>
                                            <span class=\"fs-3x fw-bolder\" data-kt-plan-price-month=\"39\"
                                                  data-kt-plan-price-annual=\"399\">39</span>
                                            <span class=\"fs-7 opacity-50\">/
\t\t\t\t\t\t\t\t\t\t\t\t<span data-kt-element=\"period\">دوشنبه</span></span>
                                        </div>
                                        <!--end::قیمت-->
                                    </div>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <div class=\"nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6\"
                                         data-bs-toggle=\"tab\" data-bs-target=\"#kt_upgrade_plan_advanced\">
                                        <!--end::توضیحات-->
                                        <div class=\"d-flex align-items-center me-2\">
                                            <!--begin::Radio-->
                                            <div class=\"form-check form-check-custom form-check-solid form-check-success me-6\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"plan\"
                                                       value=\"advanced\"/>
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class=\"flex-grow-1\">
                                                <h2 class=\"d-flex align-items-center fs-2 fw-bolder flex-wrap\">
                                                    پیشرفته</h2>
                                                <div class=\"fw-bold opacity-50\">بهترین اندازه</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class=\"ms-5\">
                                            <span class=\"mb-2\"> تومان</span>
                                            <span class=\"fs-3x fw-bolder\" data-kt-plan-price-month=\"339\"
                                                  data-kt-plan-price-annual=\"3399\">339</span>
                                            <span class=\"fs-7 opacity-50\">/
\t\t\t\t\t\t\t\t\t\t\t\t<span data-kt-element=\"period\">دوشنبه</span></span>
                                        </div>
                                        <!--end::قیمت-->
                                    </div>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <div class=\"nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6\"
                                         data-bs-toggle=\"tab\" data-bs-target=\"#kt_upgrade_plan_enterprise\">
                                        <!--end::توضیحات-->
                                        <div class=\"d-flex align-items-center me-2\">
                                            <!--begin::Radio-->
                                            <div class=\"form-check form-check-custom form-check-solid form-check-success me-6\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"plan\"
                                                       value=\"enterprise\"/>
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class=\"flex-grow-1\">
                                                <h2 class=\"d-flex align-items-center fs-2 fw-bolder flex-wrap\">شرکت،
                                                    پروژه
                                                    <span class=\"badge badge-light-success ms-2 fs-7\">محبوب</span></h2>
                                                <div class=\"fw-bold opacity-50\">تیم</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class=\"ms-5\">
                                            <span class=\"mb-2\"> تومان</span>
                                            <span class=\"fs-3x fw-bolder\" data-kt-plan-price-month=\"999\"
                                                  data-kt-plan-price-annual=\"9999\">999</span>
                                            <span class=\"fs-7 opacity-50\">/
\t\t\t\t\t\t\t\t\t\t\t\t<span data-kt-element=\"period\">دوشنبه</span></span>
                                        </div>
                                        <!--end::قیمت-->
                                    </div>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <div class=\"nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6\">
                                        <!--end::توضیحات-->
                                        <div class=\"d-flex align-items-center me-2\">
                                            <!--begin::Radio-->
                                            <div class=\"form-check form-check-custom form-check-solid form-check-success me-6\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"plan\"
                                                       value=\"custom\"/>
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class=\"flex-grow-1\">
                                                <h2 class=\"d-flex align-items-center fs-2 fw-bolder flex-wrap\">
                                                    انتخابی</h2>
                                                <div class=\"fw-bold opacity-50\">دوباره مجوز سفارشی را دوباره تهیه کنید
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class=\"ms-5\">
                                            <a href=\"#\" class=\"btn btn-sm btn-primary\">تماس با ما</a>
                                        </div>
                                        <!--end::قیمت-->
                                    </div>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class=\"col-lg-6\">
                                <!--begin::Tab content-->
                                <div class=\"tab-content rounded h-100 bg-light p-10\">
                                    <!--begin::Tab Pane-->
                                    <div class=\"tab-pane fade show active\" id=\"kt_upgrade_plan_startup\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-5\">
                                            <h2 class=\"fw-bolder text-dark\">برنامه ی استارت اپ شما چیست؟?</h2>
                                            <div class=\"text-gray-400 fw-bold\"> استارت آپ جدید</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class=\"pt-1\">
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 10 کاربر فعال</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 30 ادغام پروژه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول تجزیه و تحلیل</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">ماژول حسابداری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">بستر شبکه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">فضای نامحدود ابر</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class=\"tab-pane fade\" id=\"kt_upgrade_plan_advanced\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-5\">
                                            <h2 class=\"fw-bolder text-dark\">برنامه ی استارت اپ شما چیست؟?</h2>
                                            <div class=\"text-gray-400 fw-bold\">بنگاه اقتصادی</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class=\"pt-1\">
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 10 کاربر فعال</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 30 ادغام پروژه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول تجزیه و تحلیل</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول حسابداری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">بستر شبکه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">فضای نامحدود ابر</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class=\"tab-pane fade\" id=\"kt_upgrade_plan_enterprise\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-5\">
                                            <h2 class=\"fw-bolder text-dark\">برنامه ی استارت اپ شما چیست؟?</h2>
                                            <div class=\"text-gray-400 fw-bold\">بنگاه اقتصادی
                                            </div>
                                        </div>

                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class=\"pt-1\">
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 10 کاربر فعال</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 30 ادغام پروژه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول تجزیه و تحلیل</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول حسابداری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">بستر شبکه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">فضای نامحدود ابر</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::برنامه ریزی ها-->
                    <!--begin::عملیات-->
                    <div class=\"d-flex flex-center flex-row-fluid pt-12\">
                        <button type=\"ریست\" class=\"btn btn-white me-3\" data-bs-dismiss=\"modal\">انصراف</button>
                        <button type=\"submit\" class=\"btn btn-primary\">ارتقا طرح</button>
                    </div>
                    <!--end::عملیات-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - ارتقا دهید plan-->
    <!--end::مدال-->
    <!--begin::Scrolltop-->
    <div id=\"kt_scrolltop\" class=\"scrolltop\" data-kt-scrolltop=\"true\">
        <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
        <span class=\"svg-icon\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\"/>
\t\t\t\t\t\t<path d=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\"
                              fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t</span>
        <!--end::Svg Icon-->
    </div>

    <!--end::Scrolltop-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    ";
        // line 5454
        $this->displayBlock('javascript', $context, $blocks);
        // line 5472
        echo "    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_built($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "built"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "built"));

        // line 111
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_program($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "program"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "program"));

        // line 114
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_changed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "changed"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "changed"));

        // line 116
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 153
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5454
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 5455
        echo "    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src=\"/assets/plugins/global/plugins.bundle.js\"></script>
    <script src=\"/assets/js/scripts.bundle.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\"
            integrity=\"sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj\"
            crossorigin=\"anonymous\"></script>

    <!--end::Global Javascript Bundle-->
    <!--begin::Pسن انتخابی Javascript(used by this pسن)-->
    <script src=\"";
        // line 5464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom/modals/new-target.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 5465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom/widgets.js"), "html", null, true);
        echo "\"></script>
<script src=\"/assets/js/custom/apps/chat/chat.js\"></script>
<script src=\"/assets/js/custom/modals/create-app.js\"></script>
<script src=\"/assets/js/custom/modals/upgrade-plan.js\"></script>
<!--end::Pسن انتخابی Javascript-->
<!--end::Javascript-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Doshbord.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  5725 => 5465,  5721 => 5464,  5710 => 5455,  5700 => 5454,  5690 => 153,  5680 => 152,  5670 => 116,  5660 => 115,  5650 => 114,  5640 => 113,  5629 => 111,  5619 => 110,  5608 => 5472,  5606 => 5454,  2203 => 2054,  2196 => 2050,  510 => 367,  352 => 212,  344 => 207,  336 => 202,  286 => 154,  284 => 152,  247 => 117,  244 => 115,  241 => 113,  239 => 110,  216 => 90,  195 => 72,  175 => 55,  157 => 39,  147 => 38,  137 => 21,  127 => 20,  103 => 22,  101 => 20,  85 => 6,  75 => 5,  64 => 5474,  62 => 38,  59 => 37,  57 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html direction=\"rtl\" dir=\"rtl\" style=\"direction: rtl\">
<!--begin::Head-->
{% block header %}
    <head>
        <base href=\"\">
        <meta charset=\"utf-8\"/>
        <meta name=\"description\"
              content=\"Metronic admin dashboard live demo. Check out all the features of the admin panel. A large شماره کارت of settings, additional services و widgets.\"/>
        <meta name=\"keywords\"
              content=\"Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, admin themes, web design, figma, web development, ree admin themes, bootstrap admin, bootstrap dashboard\"/>
        <link rel=\"canonical\" href=\"Https://preview.keenthemes.com/metronic8\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We\"
              crossorigin=\"anonymous\">
        <script src=\"https://cdn.tiny.cloud/1/1t8l08csl6vv8v2pgpi066y34dz9rjcrdmwj27ozdg2xo39c/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>

        <title>
        {% block title %}
        {% endblock %}
        </title>

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <link rel=\"shortcut icon\" href=\"/assets/media/logos/favicon.ico\"/>
        <!--begin::Fonts-->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\"/>
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href=\"/assets/plugins/global/plugins.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"/assets/css/style.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>

        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
{% endblock %}
<!--begin::Body-->
{% block body %}
    <body id=\"kt_body\"
          class=\"header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled کردن aside-fixed\"
          style=\"--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px\">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class=\"d-flex flex-column flex-root\">
        <!--begin::Pسن-->
        <div class=\"pسن d-flex flex-row flex-column-fluid\">
            <!--begin::سایدبار کنار-->
            <div id=\"kt_aside\" class=\"aside aside-dark aside-hoverable\" data-kt-drawer=\"true\"
                 data-kt-drawer-name=\"aside\" data-kt-drawer-activate=\"{default: true, lg: false}\"
                 data-kt-drawer-overlay=\"true\" data-kt-drawer-width=\"{default:'200px', '300px': '250px'}\"
                 data-kt-drawer-direction=\"start\" data-kt-drawer-toggle=\"#kt_aside_mobile_toggle\">
                <!--begin::Brو-->
                <div class=\"aside-logo flex-column-auto\" id=\"kt_aside_logo\">
                    <!--begin::Logo-->
                    <a href=\"{{ path('index') }}\">
                        <img alt=\"Logo\" src=\"/assets/media/logos/logo-1.svg\" class=\"h-15px logo\"/>
                    </a>

                </div>
                <!--end::Brو-->
                <!--begin::سایدبار کنار menu-->
                <div class=\"aside-menu flex-column-fluid\">
                    <!--begin::سایدبار کنار Menu-->
                    <div class=\"hover-scroll-overlay-y my-5 my-lg-5\" id=\"kt_aside_menu_wrapper\" data-kt-scroll=\"true\"
                         data-kt-scroll-activate=\"{default: false, lg: true}\" data-kt-scroll-height=\"auto\"
                         data-kt-scroll-dependencies=\"#kt_aside_logo, #kt_aside_footer\"
                         data-kt-scroll-wrappers=\"#kt_aside_menu\" data-kt-scroll-offset=\"0\">
                        <!--begin::Menu-->
                        <div class=\"menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500\"
                             id=\"#kt_aside_menu\" data-kt-menu=\"true\">
                            <div class=\"menu-item\">
                                <a class=\"menu-link active\" href=\"{{ path('dashbord') }}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Design/PenوRuller.svg-->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z\"
                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z\"
                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"menu-title\">داشبورد</span>
                                </a>
                            </div>
                            <div class=\"menu-item\">
                                <a class=\"menu-link\" href=\"{{ path('index') }}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Design/Sketch.svg-->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon fill=\"#000000\" opacity=\"0.3\" points=\"5 3 19 3 23 8 1 8\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon fill=\"#000000\" points=\"23 8 12 20 1 8\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"menu-title\">صفحه اصلی</span>
                                </a>
                            </div>
                            <div class=\"menu-item\">
                                <div class=\"menu-content pt-8 pb-2\">
                                    <span class=\"menu-section text-muted text-uppercase fs-8 ls-1\">ساخته شده</span>
                                </div>
                            </div>
                            {% block built %}

                            {% endblock %}
                            {% block program %}
                            {% endblock %}
                            {% block changed %}
                            {% endblock %}

                        </div>
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::سایدبار کنار menu-->
                <!--begin::Footer-->
                <div class=\"aside-footer flex-column-auto pt-5 pb-7 px-5\" id=\"kt_aside_footer\">
                    <a href=\"#\" class=\"btn btn-custom btn-primary w-100\" data-bs-toggle=\"tooltip\"
                       data-bs-trigger=\"hover\" data-bs-delay-show=\"8000\"
                       title=\"Check out the complete اسناد با over 100 کامپوننت ها\">
                        <span class=\"btn-label\">مستندات و کامپوننت ها</span>
                        <!--begin::Svg Icon | path: icons/duotone/عمومی/Clipboard.svg-->
                        <span class=\"svg-icon btn-icon svg-icon-2\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z\"
                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z\"
                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"7\" y=\"10\" width=\"5\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"7\" y=\"14\" width=\"9\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </a>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::سایدبار کنار-->
            <!--begin::Wrapper-->
            <div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
                {% block main %}
                {% endblock %}
                <!--begin::Header-->
                <div id=\"kt_header\" style=\"\" class=\"header align-items-stretch\">
                    <!--begin::Container-->
                    <div class=\"container-fluid d-flex align-items-stretch justify-content-between\">
                        <!--begin::سایدبار کنار mobile toggle-->
                        <div class=\"d-flex align-items-center d-lg-none ms-n3 me-1\" title=\"Show aside menu\">
                            <div class=\"btn btn-icon btn-active-light-primary\" id=\"kt_aside_mobile_toggle\">
                                <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                                <span class=\"svg-icon svg-icon-2x mt-1\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\"
                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"4\" y=\"5\" width=\"16\" height=\"3\" rx=\"1.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z\"
                                                      fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::سایدبار کنار mobile toggle-->
                        <!--begin::Mobile logo-->
                        <div class=\"d-flex align-items-center flex-grow-1 flex-lg-grow-0\">
                            <a href=\"index.html\" class=\"d-lg-none\">
                                <img alt=\"Logo\" src=\"/assets/media/logos/logo-3.svg\" class=\"h-30px\"/>
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Wrapper-->
                        <div class=\"d-flex align-items-stretch justify-content-between flex-lg-grow-1\">
                            <!--begin::Navbar-->
                            <div class=\"d-flex align-items-stretch\" id=\"kt_header_nav\">
                                <!--begin::Menu wrapper-->
                                <div class=\"header-menu align-items-stretch\" data-kt-drawer=\"true\"
                                     data-kt-drawer-name=\"header-menu\"
                                     data-kt-drawer-activate=\"{default: true, lg: false}\" data-kt-drawer-overlay=\"true\"
                                     data-kt-drawer-width=\"{default:'200px', '300px': '250px'}\"
                                     data-kt-drawer-direction=\"end\"
                                     data-kt-drawer-toggle=\"#kt_header_menu_mobile_toggle\" data-kt-place=\"true\"
                                     data-kt-place-mode=\"prepend\"
                                     data-kt-place-parent=\"{default: '#kt_body', lg: '#kt_header_nav'}\">
                                    <!--begin::Menu-->
                                    <div class=\"menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch\"
                                         id=\"#kt_header_menu\" data-kt-menu=\"true\">
                                        <div class=\"menu-item me-lg-1\">
                                            <a class=\"menu-link py-3\" href=\"{{ path('dashbord') }}\">
                                                <span class=\"menu-title\">داشبورد</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item me-lg-1\">
                                            <a class=\"menu-link py-3\" href=\"{{ path('index') }}\">
                                                <span class=\"menu-title\">صفحه اصلی</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item me-lg-1\">
                                            <a class=\"menu-link py-3\" href=\"{{ path('logout') }}\">
                                                <span class=\"menu-title\">خروج</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Topbar-->
                            <div class=\"d-flex align-items-stretch flex-shrink-0\">
                                <!--begin::Toolbar wrapper-->
                                <div class=\"d-flex align-items-stretch flex-shrink-0\">
                                    <!--begin::جستجو-->
                                    <div class=\"d-flex align-items-stretch ms-1 ms-lg-3\">
                                        <!--begin::جستجو-->
                                        <div id=\"kt_header_search\" class=\"d-flex align-items-stretch\"
                                             data-kt-search-keypress=\"true\" data-kt-search-min-length=\"2\"
                                             data-kt-search-enter=\"enter\" data-kt-search-layout=\"menu\"
                                             data-kt-menu-trigger=\"auto\" data-kt-menu-overflow=\"false\"
                                             data-kt-menu-permanent=\"true\" data-kt-menu-placement=\"bottom-end\"
                                             data-kt-menu-flip=\"bottom\">
                                            <!--begin::Menu-->
                                            <div data-kt-search-element=\"content\"
                                                 class=\"menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px\">
                                                <!--begin::Wrapper-->
                                                <div data-kt-search-element=\"wrapper\">
                                                    <!--begin::Fیاm-->
                                                    <form data-kt-search-element=\"form\"
                                                          class=\"w-100 position-relative mb-3\" autocomplete=\"off\">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotone/عمومی/جستجو.svg-->
                                                        <span class=\"svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\"
                                                                              fill=\"#000000\" fill-rule=\"nonzero\"
                                                                              opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\"
                                                                              fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Input-->
                                                        <input type=\"text\" class=\"form-control form-control-flush ps-10\"
                                                               name=\"search\" value=\"\" placeholder=\"جستجو...\"
                                                               data-kt-search-element=\"input\"/>
                                                        <!--end::Input-->
                                                        <!--begin::Spinner-->
                                                        <span class=\"position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1\"
                                                              data-kt-search-element=\"spinner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-bیاder h-15px w-15px align-middle text-gray-400\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::Spinner-->
                                                        <!--begin::ریست-->
                                                        <span class=\"btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none\"
                                                              data-kt-search-element=\"clear\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-lg-1 me-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                         xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                         width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                         version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                                                           fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\"
                                                                                  height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                                  transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                                                                  x=\"0\" y=\"7\" width=\"16\" height=\"2\"
                                                                                  rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::ریست-->
                                                        <!--begin::Toolbar-->
                                                        <div class=\"position-absolute top-50 end-0 translate-middle-y\"
                                                             data-kt-search-element=\"toolbar\">
                                                            <!--begin::اولویت ها toggle-->
                                                            <div data-kt-search-element=\"preferences-show\"
                                                                 class=\"btn btn-icon w-20px btn-sm btn-active-color-primary me-1\"
                                                                 data-bs-toggle=\"tooltip\"
                                                                 title=\"نمایش تنظیمات برگزیده جستجو\">
                                                                <!--begin::Svg Icon | path: icons/duotone/Code/Settings4.svg-->
                                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                             width=\"24px\" height=\"24px\"
                                                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z\"
                                                                                  fill=\"#000000\" fill-rule=\"nonzero\"
                                                                                  opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z\"
                                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::اولویت ها toggle-->
                                                            <!--begin::پیشرفته search toggle-->
                                                            <div data-kt-search-element=\"advanced-options-form-show\"
                                                                 class=\"btn btn-icon w-20px btn-sm btn-active-color-primary\"
                                                                 data-bs-toggle=\"tooltip\" title=\"نمایش بیشتر\">
                                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                                                                <span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                             width=\"24px\" height=\"24px\"
                                                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                               fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z\"
                                                                                      fill=\"#000000\" fill-rule=\"nonzero\"
                                                                                      transform=\"translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::پیشرفته search toggle-->
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </form>
                                                    <!--end::Fیاm-->
                                                    <!--begin::Separatیا-->
                                                    <div class=\"separator bیاder-gray-200 mb-6\"></div>
                                                    <!--end::Separatیا-->
                                                    <!--begin::Recently viewed-->
                                                    <div data-kt-search-element=\"results\" class=\"d-none\">
                                                        <!--begin::items-->
                                                        <div class=\"scroll-y mh-200px mh-lg-325px\">
                                                            <!--begin::دسته بندی title-->
                                                            <h3 class=\"fs-5 text-muted m-0 pb-5\"
                                                                data-kt-search-element=\"دسته بندی-title\">کاربران</h3>
                                                            <!--end::دسته بندی title-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
                                                                    <img src=\"/assets/media/avatars/150-1.jpg\" alt=\"\"/>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">{{ app.user.eraseCredentials }}</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">مدیر بازاریابی</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
                                                                    <img src=\"/assets/media/avatars/150-3.jpg\" alt=\"\"/>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">Olivia Bold</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">Software Engineer</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
                                                                    <img src=\"/assets/media/avatars/150-8.jpg\" alt=\"\"/>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">Ana Clark</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">طراح یو ای و یوایکس</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
                                                                    <img src=\"/assets/media/avatars/150-11.jpg\" alt=\"\"/>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">Nick Pitola</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">کارگردان هنری</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
                                                                    <img src=\"/assets/media/avatars/150-12.jpg\" alt=\"\"/>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">Edward Kulnic</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">System مدیر</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::دسته بندی title-->
                                                            <h3 class=\"fs-5 text-muted m-0 pt-5 pb-5\"
                                                                data-kt-search-element=\"دسته بندی-title\">مشتری ها</h3>
                                                            <!--end::دسته بندی title-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\"
                                                                                 src=\"/assets/media/svg/brand-logos/volicity-9.svg\"
                                                                                 alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">شرکت Rbrوing</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">طراح</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\"
                                                                                 src=\"/assets/media/svg/brand-logos/tvit.svg\"
                                                                                 alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">شرکت Re-brوing</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">توسعه دهنده وب</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\"
                                                                                 src=\"/assets/media/svg/misc/infography.svg\"
                                                                                 alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">بیزینس Analytics App</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">مدیریت</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\"
                                                                                 src=\"/assets/media/svg/brand-logos/leaf.svg\"
                                                                                 alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">EcoLeaf App Launch</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">Marketing</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-20px h-20px\"
                                                                                 src=\"/assets/media/svg/brand-logos/tower.svg\"
                                                                                 alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column justify-content-start fw-bold\">
                                                                    <span class=\"fs-6 fw-bold\">Tower Group Website</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">Google Adwیاds</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::دسته بندی title-->
                                                            <h3 class=\"fs-5 text-muted m-0 pt-5 pb-5\"
                                                                data-kt-search-element=\"دسته بندی-title\">پروژه ها</h3>
                                                            <!--end::دسته بندی title-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Clipboard-list.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z\"
                                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z\"
                                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"10\" y=\"9\" width=\"7\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"7\" y=\"9\" width=\"2\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"7\" y=\"13\" width=\"2\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"10\" y=\"13\" width=\"7\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"7\" y=\"17\" width=\"2\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                                                          x=\"10\" y=\"17\" width=\"7\"
                                                                                          height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <span class=\"fs-6 fw-bold\">Si-Fi پروژهby AU Themes</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">#45670</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Media/Equalizer.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                                       fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\"
                                                                                              height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\"
                                                                                              opacity=\"0.3\" x=\"13\" y=\"4\"
                                                                                              width=\"3\" height=\"16\"
                                                                                              rx=\"1.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"8\" y=\"9\"
                                                                                              width=\"3\" height=\"11\"
                                                                                              rx=\"1.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"18\"
                                                                                              y=\"11\" width=\"3\"
                                                                                              height=\"9\" rx=\"1.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"3\"
                                                                                              y=\"13\" width=\"3\"
                                                                                              height=\"7\" rx=\"1.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <span class=\"fs-6 fw-bold\">فروشگاه موبایل Planning</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">#45690</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Group-chat.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z\"
                                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z\"
                                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <span class=\"fs-6 fw-bold\">دارایی، مالیه، سرمایه گذاری Monitیاing SAAS Discussion</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">#21090</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <a href=\"#\"
                                                               class=\"d-flex text-dark text-hover-primary align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/عمومی/کاربر.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                                       fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon
                                                                                                points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z\"
                                                                                              fill=\"#000000\"
                                                                                              fill-rule=\"nonzero\"
                                                                                              opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z\"
                                                                                              fill=\"#000000\"
                                                                                              fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <span class=\"fs-6 fw-bold\">داشبورد Analitics Launch</span>
                                                                    <span class=\"fs-7 fw-bold text-muted\">#34560</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::مورد-->
                                                        </div>
                                                        <!--end::items-->
                                                    </div>
                                                    <!--end::Recently viewed-->
                                                    <!--begin::Recently viewed-->
                                                    <div class=\"mb-4\" data-kt-search-element=\"main\">
                                                        <!--begin::Heading-->
                                                        <div class=\"d-flex flex-stack fw-bold mb-4\">
                                                            <!--begin::برچسب-->
                                                            <span class=\"text-muted fs-6 me-2\">آخرین جستجوها:</span>
                                                            <!--end::برچسب-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::items-->
                                                        <div class=\"scroll-y mh-200px mh-lg-325px\">
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Monitیا.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g opacity=\"0.25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2 15C2 16.6569 3.34315 18 5 18L19 18C20.6569 18 22 16.6569 22 15V5C22 3.34315 20.6569 2 19 2H5C3.34315 2 2 3.34315 2 5V15Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8 20C7.44772 20 7 20.4477 7 21C7 21.5523 7.44772 22 8 22H16C16.5523 22 17 21.5523 17 21C17 20.4477 16.5523 20 16 20H8Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7 6C6.44772 6 6 6.44772 6 7C6 7.55228 6.44772 8 7 8H14C14.5523 8 15 7.55228 15 7C15 6.44772 14.5523 6 14 6H7Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7 10C6.44772 10 6 10.4477 6 11C6 11.5523 6.44772 12 7 12H9C9.55229 12 10 11.5523 10 11C10 10.4477 9.55229 10 9 10H7Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">
                                                                        ساتراس وب</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#45789</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Scatter-Up.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g opacity=\"0.25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20 13C20.5523 13 21 12.5523 21 12C21 11.4477 20.5523 11 20 11C19.4477 11 19 11.4477 19 12C19 12.5523 19.4477 13 20 13Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20 17C20.5523 17 21 16.5523 21 16C21 15.4477 20.5523 15 20 15C19.4477 15 19 15.4477 19 16C19 16.5523 19.4477 17 20 17Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20 21C20.5523 21 21 20.5523 21 20C21 19.4477 20.5523 19 20 19C19.4477 19 19 19.4477 19 20C19 20.5523 19.4477 21 20 21Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 21C12.5523 21 13 20.5523 13 20C13 19.4477 12.5523 19 12 19C11.4477 19 11 19.4477 11 20C11 20.5523 11.4477 21 12 21Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4 21C4.55228 21 5 20.5523 5 20C5 19.4477 4.55228 19 4 19C3.44772 19 3 19.4477 3 20C3 20.5523 3.44772 21 4 21Z\"
                                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17 6C17 7.65685 18.3431 9 20 9C21.6569 9 23 7.65685 23 6C23 4.34315 21.6569 3 20 3C18.3431 3 17 4.34315 17 6Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4 17C2.34315 17 1 15.6569 1 14C1 12.3431 2.34315 11 4 11C5.65685 11 7 12.3431 7 14C7 15.6569 5.65685 17 4 17Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">ملاقات
                                                                        های پروژه</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#84050</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Doughnut.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                                          fill-rule=\"evenodd\"
                                                                                          clip-rule=\"evenodd\"
                                                                                          d=\"M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
                                                                                          clip-rule=\"evenodd\"
                                                                                          d=\"M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">اجرای
                                                                        طرح</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#84250</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Stacked-Area-Down.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                                          d=\"M2 13.8857C2 13.1875 2.69737 12.7042 3.35112 12.9493L8.14677 14.7477C8.64016 14.9327 9.17357 14.9845 9.69334 14.8979L14.6354 14.0742C14.8087 14.0453 14.9865 14.0626 15.151 14.1243L21.3511 16.4493C21.7414 16.5957 22 16.9688 22 17.3857V20C22 21.1046 21.1046 22 20 22H4C2.89543 22 2 21.1046 2 20V13.8857Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2 4.13517C2 2.4395 3.97771 1.51318 5.28037 2.59873L8.93565 5.64479C9.1593 5.83117 9.45306 5.91083 9.74023 5.86296L14.0555 5.14376C14.8073 5.01846 15.5786 5.18401 16.2128 5.60679L20.6641 8.57435C21.4987 9.13074 22 10.0674 22 11.0705V13.1138C22 13.812 21.3026 14.2953 20.6489 14.0501L15.8532 12.2518C15.3598 12.0667 14.8264 12.0149 14.3067 12.1016L9.36454 12.9253C9.19129 12.9541 9.01348 12.9369 8.84902 12.8752L2.64888 10.5501C2.25857 10.4038 2 10.0307 2 9.61381V4.13517Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">سوالات
                                                                        متداول</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#67945</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Envelope.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                                          d=\"M1 6C1 4.34315 2.34315 3 4 3H20C21.6569 3 23 4.34315 23 6V18C23 19.6569 21.6569 21 20 21H4C2.34315 21 1 19.6569 1 18V6Z\"
                                                                                          fill=\"#191213\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
                                                                                          clip-rule=\"evenodd\"
                                                                                          d=\"M5.23177 7.35984C5.58534 6.93556 6.2159 6.87824 6.64018 7.2318L11.3598 11.1648C11.7307 11.4739 12.2693 11.4739 12.6402 11.1648L17.3598 7.2318C17.7841 6.87824 18.4147 6.93556 18.7682 7.35984C19.1218 7.78412 19.0645 8.41468 18.6402 8.76825L13.9205 12.7013C12.808 13.6284 11.192 13.6284 10.0794 12.7013L5.35981 8.76825C4.93553 8.41468 4.87821 7.78412 5.23177 7.35984Z\"
                                                                                          fill=\"#121319\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">توسعه
                                                                        دهنده اندروید</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#84250</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Bank.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                                          d=\"M4 10H8V17H10V10H14V17H16V10H20V17C21.1046 17 22 17.8954 22 19V20C22 21.1046 21.1046 22 20 22H4C2.89543 22 2 21.1046 2 20V19C2 17.8954 2.89543 17 4 17V10Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2 7.35405C2 6.53624 2.4979 5.80083 3.25722 5.4971L11.2572 2.2971C11.734 2.10637 12.266 2.10637 12.7428 2.2971L20.7428 5.4971C21.5021 5.80083 22 6.53624 22 7.35405V7.99999C22 9.10456 21.1046 9.99999 20 9.99999H4C2.89543 9.99999 2 9.10456 2 7.99999V7.35405Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">فروشگاه
                                                                        موبایل</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#45690</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                            <!--begin::مورد-->
                                                            <div class=\"d-flex align-items-center mb-5\">
                                                                <!--begin::Symbol-->
                                                                <div class=\"symbol symbol-40px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Interface/Line-03-Up.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24\" height=\"24\"
                                                                                     viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                                          d=\"M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
                                                                                          clip-rule=\"evenodd\"
                                                                                          d=\"M20.8682 6.49631C21.1422 6.01679 20.9756 5.40594 20.4961 5.13193C20.0166 4.85792 19.4058 5.02451 19.1317 5.50403L15.8834 11.1886C15.6612 11.5775 15.2073 11.7712 14.7727 11.6626L9.71238 10.3975C8.40847 10.0715 7.04688 10.6526 6.38005 11.8195L3.13174 17.504C2.85773 17.9835 3.02433 18.5944 3.50385 18.8684C3.98337 19.1424 4.59422 18.9758 4.86823 18.4963L8.11653 12.8118C8.33881 12.4228 8.79268 12.2291 9.22731 12.3378L14.2876 13.6028C15.5915 13.9288 16.9531 13.3478 17.6199 12.1808L20.8682 6.49631Z\"
                                                                                          fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class=\"d-flex flex-column\">
                                                                    <a href=\"#\"
                                                                       class=\"fs-6 text-gray-800 text-hover-primary fw-bold\">اجرای
                                                                        طرح</a>
                                                                    <span class=\"fs-7 text-muted fw-bold\">#24005</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::مورد-->
                                                        </div>
                                                        <!--end::items-->
                                                    </div>
                                                    <!--end::Recently viewed-->
                                                    <!--begin::Empty-->
                                                    <div data-kt-search-element=\"empty\" class=\"text-center d-none\">
                                                        <!--begin::Icon-->
                                                        <div class=\"pt-10 pb-10\">
                                                            <!--begin::Svg Icon | path: icons/duotone/Interface/File-جستجو.svg-->
                                                            <span class=\"svg-icon svg-icon-4x opacity-50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
                                                                         height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                                              d=\"M3 4C3 2.34315 4.34315 1 6 1H15.7574C16.553 1 17.3161 1.31607 17.8787 1.87868L20.1213 4.12132C20.6839 4.68393 21 5.44699 21 6.24264V20C21 21.6569 19.6569 23 18 23H6C4.34315 23 3 21.6569 3 20V4Z\"
                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15 1.89181C15 1.39927 15.3993 1 15.8918 1V1C16.6014 1 17.2819 1.28187 17.7836 1.78361L20.2164 4.21639C20.7181 4.71813 21 5.39863 21 6.10819V6.10819C21 6.60073 20.6007 7 20.1082 7H16C15.4477 7 15 6.55228 15 6V1.89181Z\"
                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                                                              d=\"M13.032 15.4462C12.4365 15.7981 11.7418 16 11 16C8.79086 16 7 14.2091 7 12C7 9.79086 8.79086 8 11 8C13.2091 8 15 9.79086 15 12C15 12.7418 14.7981 13.4365 14.4462 14.032L16.7072 16.293C17.0977 16.6835 17.0977 17.3167 16.7072 17.7072C16.3167 18.0977 15.6835 18.0977 15.293 17.7072L13.032 15.4462ZM13 12C13 13.1046 12.1046 14 11 14C9.89543 14 9 13.1046 9 12C9 10.8954 9.89543 10 11 10C12.1046 10 13 10.8954 13 12Z\"
                                                                              fill=\"#12131A\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::پیام-->
                                                        <div class=\"pb-15 fw-bold\">
                                                            <h3 class=\"text-gray-600 fs-5 mb-2\">No result found</h3>
                                                            <div class=\"text-muted fs-7\">Please try again با a different
                                                                query
                                                            </div>
                                                        </div>
                                                        <!--end::پیام-->
                                                    </div>
                                                    <!--end::Empty-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::اولویت ها-->
                                                <form data-kt-search-element=\"advanced-options-form\"
                                                      class=\"pt-1 d-none\">
                                                    <!--begin::Heading-->
                                                    <h3 class=\"fw-bold text-dark mb-7\">پیشرفته جستجو</h3>
                                                    <!--end::Heading-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <input type=\"text\"
                                                               class=\"form-control form-control-sm form-control-solid\"
                                                               placeholder=\"\" name=\"query\"/>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <!--begin::Radio group-->
                                                        <div class=\"nav-group nav-group-fluid\">
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"نوع\"
                                                                       value=\"has\" checked=\"checked\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary\">همه</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"نوع\"
                                                                       value=\"کاربران\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">کاربران</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"نوع\"
                                                                       value=\"یاders\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">سفارشات</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"نوع\"
                                                                       value=\"projects\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">پروژه ها</span>
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Radio group-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <input type=\"text\" name=\"assignedto\"
                                                               class=\"form-control form-control-sm form-control-solid\"
                                                               placeholder=\"اختصاص دادن \" value=\"\"/>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <input type=\"text\" name=\"\"
                                                               class=\"form-control form-control-sm form-control-solid\"
                                                               placeholder=\"\" value=\"\"/>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <!--begin::Radio group-->
                                                        <div class=\"nav-group nav-group-fluid\">
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"attachment\"
                                                                       value=\"has\" checked=\"checked\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary\">ضمیمه</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type=\"radio\" class=\"btn-check\" name=\"attachment\"
                                                                       value=\"any\"/>
                                                                <span class=\"btn btn-sm btn-color-muted btn-active btn-active-primary px-4\">هیچ</span>
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Radio group-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"mb-5\">
                                                        <select name=\"timezone\" aria-label=\"انتخاب a زمانzone\"
                                                                data-control=\"select2\" data-placeholder=\"تاریخ_period\"
                                                                class=\"form-select form-select-sm form-select-solid\">
                                                            <option value=\"next\">در بعدی</option>
                                                            <option value=\"last\">قبلی</option>
                                                            <option value=\"between\">بین</option>
                                                            <option value=\"on\">روشن</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"row mb-8\">
                                                        <!--begin::Col-->
                                                        <div class=\"col-6\">
                                                            <input type=\"شماره کارت\" name=\"تاریخ_شماره کارت\"
                                                                   class=\"form-control form-control-sm form-control-solid\"
                                                                   placeholder=\"طول\" value=\"\"/>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class=\"col-6\">
                                                            <select name=\"تاریخ_نوعr\" aria-label=\"انتخاب a زمانzone\"
                                                                    data-control=\"select2\" data-placeholder=\"Period\"
                                                                    class=\"form-select form-select-sm form-select-solid\">
                                                                <option value=\"days\">روزها</option>
                                                                <option value=\"weeks\">هفته ها</option>
                                                                <option value=\"months\">ماه ها</option>
                                                                <option value=\"سال ها\">سال ها</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::عملیات-->
                                                    <div class=\"d-flex justify-content-end\">
                                                        <button type=\"ریست\"
                                                                class=\"btn btn-sm btn-white fw-bolder btn-active-light-primary me-2\"
                                                                data-kt-search-element=\"advanced-options-form-cancel\">
                                                            انصراف
                                                        </button>
                                                        <a href=\"pages/search/horizontal.html\"
                                                           class=\"btn btn-sm fw-bolder btn-primary\"
                                                           data-kt-search-element=\"advanced-options-form-search\">جستجو</a>
                                                    </div>
                                                    <!--end::عملیات-->
                                                </form>
                                                <!--end::اولویت ها-->
                                                <!--begin::اولویت ها-->
                                                <form data-kt-search-element=\"preferences\" class=\"pt-1 d-none\">
                                                    <!--begin::Heading-->
                                                    <h3 class=\"fw-bold text-dark mb-7\">جستجو اولویت ها</h3>
                                                    <!--end::Heading-->
                                                    <!--begin::Input group-->
                                                    <div class=\"pb-4 bیاder-bottom\">
                                                        <label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
                                                            <span class=\"form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2\">پروژه ها</span>
                                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                                                   checked=\"checked\"/>
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"py-4 border-bottom\">
                                                        <label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
                                                            <span class=\"form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2\">اهداف</span>
                                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                                                   checked=\"checked\"/>
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"py-4 border-bottom\">
                                                        <label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
                                                            <span class=\"form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2\">بازاریابی</span>
                                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"/>
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"py-4 border-bottom\">
                                                        <label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
                                                            <span class=\"form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2\">مراجعات</span>
                                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                                                   checked=\"checked\"/>
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class=\"py-4 border-bottom\">
                                                        <label class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack\">
                                                            <span class=\"form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2\">کاربران</span>
                                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"/>
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::عملیات-->
                                                    <div class=\"d-flex justify-content-end pt-7\">
                                                        <button type=\"ریست\"
                                                                class=\"btn btn-sm btn-white fw-bolder btn-active-light-primary me-2\"
                                                                data-kt-search-element=\"preferences-dismiss\">انصراف
                                                        </button>
                                                        <button type=\"submit\" class=\"btn btn-sm fw-bolder btn-primary\">
                                                            ذخیره تغییرات
                                                        </button>
                                                    </div>
                                                    <!--end::عملیات-->
                                                </form>
                                                <!--end::اولویت ها-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::جستجو-->
                                    </div>
                                    <!--end::جستجو-->
                                    <!--begin::Menu-->
                                    <div class=\"menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px\"
                                         data-kt-menu=\"true\">
                                        <!--begin::Heading-->
                                        <div class=\"d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10\"
                                             style=\"background-image:url('/assets/media//misc/pattern-1.jpg')\">
                                            <!--begin::Title-->
                                            <h3 class=\"text-white fw-bold mb-3\">لینک های سریع</h3>
                                            <!--end::Title-->
                                            <!--begin::وضعیت-->
                                            <span class=\"badge bg-success py-2 px-3\">25 وظیفه در انتظار</span>
                                            <!--end::وضعیت-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin:Nav-->
                                        <div class=\"row g-0\">
                                            <!--begin:مورد-->
                                            <div class=\"col-6\">
                                                <a href=\"pages/projects/budget.html\"
                                                   class=\"d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom\">
                                                    <!--begin::Svg Icon | path: icons/duotone/Shopping/Euro.svg-->
                                                    <span class=\"svg-icon svg-icon-3x svg-icon-success mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z\"
                                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z\"
                                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Svg Icon-->
                                                    <span class=\"fs-5 fw-bold text-gray-800 mb-0\">حسابداری</span>
                                                    <span class=\"fs-7 text-gray-400\">تجارت</span>
                                                </a>
                                            </div>
                                            <!--end:مورد-->
                                            <!--begin:مورد-->
                                            <div class=\"col-6\">
                                                <a href=\"pages/projects/settings.html\"
                                                   class=\"d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom\">
                                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Mail-attachment.svg-->
                                                    <span class=\"svg-icon svg-icon-3x svg-icon-success mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z\"
                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z\"
                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Svg Icon-->
                                                    <span class=\"fs-5 fw-bold text-gray-800 mb-0\">مدیریت</span>
                                                    <span class=\"fs-7 text-gray-400\">کنسول</span>
                                                </a>
                                            </div>
                                            <!--end:مورد-->
                                            <!--begin:مورد-->
                                            <div class=\"col-6\">
                                                <a href=\"pages/projects/list.html\"
                                                   class=\"d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end\">
                                                    <!--begin::Svg Icon | path: icons/duotone/Shopping/Box2.svg-->
                                                    <span class=\"svg-icon svg-icon-3x svg-icon-success mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z\"
                                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z\"
                                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Svg Icon-->
                                                    <span class=\"fs-5 fw-bold text-gray-800 mb-0\">پروژه ها</span>
                                                    <span class=\"fs-7 text-gray-400\">انتظار وظیفه ها</span>
                                                </a>
                                            </div>
                                            <!--end:مورد-->
                                            <!--begin:مورد-->
                                            <div class=\"col-6\">
                                                <a href=\"pages/projects/users.html\"
                                                   class=\"d-flex flex-column flex-center h-100 p-6 bg-hover-light\">
                                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Group.svg-->
                                                    <span class=\"svg-icon svg-icon-3x svg-icon-success mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z\"
                                                                          fill=\"#000000\" fill-rule=\"nonzero\"
                                                                          opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z\"
                                                                          fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Svg Icon-->
                                                    <span class=\"fs-5 fw-bold text-gray-800 mb-0\">مشتری ها</span>
                                                    <span class=\"fs-7 text-gray-400\">آخرین موارد</span>
                                                </a>
                                            </div>
                                            <!--end:مورد-->
                                        </div>
                                        <!--end:Nav-->
                                        <!--begin::نمایش mیاe-->
                                        <div class=\"py-2 text-center border-top\">
                                            <a href=\"pages/profile/activity.html\"
                                               class=\"btn btn-color-gray-600 btn-active-color-primary\">نمایش همه
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                                <span class=\"svg-icon svg-icon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                               fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                      transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                                      x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                                      fill=\"#000000\" fill-rule=\"nonzero\"
                                                                      transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon--></a>
                                        </div>
                                        <!--end::نمایش mیاe-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::Quick links-->
                                <!--begin::نمودارها-->
                                <div class=\"d-flex align-items-center ms-1 ms-lg-3\">
                                    <!--begin::Menu wrapper-->
                                    <div class=\"btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px\"
                                         id=\"kt_drawer_chat_toggle\">
                                        <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Group-chat.svg-->
                                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                         viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z\"
                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z\"
                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <!--end::Svg Icon-->
                                        <span class=\"bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink\"></span>
                                    </div>
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::نمودارها-->
                                <!--begin::اعلانات-->
                                <div class=\"d-flex align-items-center ms-1 ms-lg-3\">
                                    <!--begin::Menu- wrapper-->
                                    <div class=\"btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px\"
                                         data-kt-menu-trigger=\"click\" data-kt-menu-attach=\"parent\"
                                         data-kt-menu-placement=\"bottom-end\" data-kt-menu-flip=\"bottom\">
                                        <!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
                                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                         viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\"
                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\"
                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--begin::Menu-->
                                    <div class=\"menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px\"
                                         data-kt-menu=\"true\">
                                        <!--begin::Heading-->
                                        <div class=\"d-flex flex-column bgi-no-repeat rounded-top\"
                                             style=\"background-image:url('/assets/media//misc/pattern-1.jpg')\">
                                            <!--begin::Title-->
                                            <h3 class=\"text-white fw-bold px-9 mt-10 mb-6\">اعلانات
                                                <span class=\"fs-8 opacity-75 ps-3\">24 گزارش</span></h3>
                                            <!--end::Title-->
                                            <!--begin::Tabs-->
                                            <ul class=\"nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9\">
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link text-white opacity-75 opacity-state-100 pb-4\"
                                                       data-bs-toggle=\"tab\"
                                                       href=\"#kt_topbar_notifications_1\">هشدارها</a>
                                                </li>
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link text-white opacity-75 opacity-state-100 pb-4 active\"
                                                       data-bs-toggle=\"tab\" href=\"#kt_topbar_notifications_2\">بروزرسانی
                                                        ها</a>
                                                </li>
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link text-white opacity-75 opacity-state-100 pb-4\"
                                                       data-bs-toggle=\"tab\" href=\"#kt_topbar_notifications_3\">گزارش</a>
                                                </li>
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Tab content-->
                                        <div class=\"tab-content\">
                                            <!--begin::Tab panel-->
                                            <div class=\"tab-pane fade\" id=\"kt_topbar_notifications_1\" سطح
                                                 role=\"tabpanel\">
                                                <!--begin::items-->
                                                <div class=\"scroll-y mh-325px my-5 px-8\">
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Clothes/Crown.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z\"
                                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z\"
                                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">پروژه
                                                                    آلیس</a>
                                                                <div class=\"text-gray-400 fs-7\">توسعه فاز 1</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">1 hr</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Code/هشدار-2.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z\"
                                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"11\" y=\"9\"
                                                                                          width=\"2\" height=\"7\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"11\" y=\"17\"
                                                                                          width=\"2\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">محرمانه</a>
                                                                <div class=\"text-gray-400 fs-7\">اسناد محرمانه کارکنان
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">2 hrs</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Group.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z\"
                                                                                          fill=\"#000000\"
                                                                                          fill-rule=\"nonzero\"
                                                                                          opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z\"
                                                                                          fill=\"#000000\"
                                                                                          fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">شرکت
                                                                    منابع انسانی</a>
                                                                <div class=\"text-gray-400 fs-7\">مشخصات کارکنان را شریک
                                                                    کنید
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">5 hrs</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/عمومی/Thunder.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                                       fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\"
                                                                                              height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.3740377,19.9389434 L18.2226499,11.1660251 C18.4524142,10.8213786 18.3592838,10.3557266 18.0146373,10.1259623 C17.8914367,10.0438285 17.7466809,10 17.5986122,10 L13,10 L13,4.47708173 C13,4.06286817 12.6642136,3.72708173 12.25,3.72708173 C11.9992351,3.72708173 11.7650616,3.85240758 11.6259623,4.06105658 L5.7773501,12.8339749 C5.54758575,13.1786214 5.64071616,13.6442734 5.98536267,13.8740377 C6.10856331,13.9561715 6.25331908,14 6.40138782,14 L11,14 L11,19.5229183 C11,19.9371318 11.3357864,20.2729183 11.75,20.2729183 C12.0007649,20.2729183 12.2349384,20.1475924 12.3740377,19.9389434 Z\"
                                                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">پروژه
                                                                    ریداکس</a>
                                                                <div class=\"text-gray-400 fs-7\">تم ادمین جدید</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">2 days</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Flag.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3.5,3 L5,3 L5,19.5 C5,20.3284271 4.32842712,21 3.5,21 L3.5,21 C2.67157288,21 2,20.3284271 2,19.5 L2,4.5 C2,3.67157288 2.67157288,3 3.5,3 Z\"
                                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.99987583,2.99995344 L19.754647,2.99999303 C20.3069317,2.99999474 20.7546456,3.44771138 20.7546439,3.99999613 C20.7546431,4.24703684 20.6631995,4.48533385 20.497938,4.66895776 L17.5,8 L20.4979317,11.3310353 C20.8673908,11.7415453 20.8341123,12.3738351 20.4236023,12.7432941 C20.2399776,12.9085564 20.0016794,13 19.7546376,13 L6.99987583,13 L6.99987583,2.99995344 Z\"
                                                                                          fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">پروژه
                                                                    بریفینگ</a>
                                                                <div class=\"text-gray-400 fs-7\">به روز رسانی وضعیت راه
                                                                    اندازی محصول
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">21 Jan</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Design/Imسن.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                                       fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon
                                                                                                points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z\"
                                                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">دارایی
                                                                    های بنر</a>
                                                                <div class=\"text-gray-400 fs-7\">مجموعه ای از تصویر
                                                                    بنرها
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">21 Jan</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center\">
                                                            <!--begin::Symbol-->
                                                            <div class=\"symbol symbol-35px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Design/Component.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 svg-icon-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                                     width=\"24px\" height=\"24px\"
                                                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.7442084,3.27882877 L19.2473374,6.9949025 C19.7146999,7.26196679 20.003129,7.75898194 20.003129,8.29726722 L20.003129,15.7027328 C20.003129,16.2410181 19.7146999,16.7380332 19.2473374,17.0050975 L12.7442084,20.7211712 C12.2830594,20.9846849 11.7169406,20.9846849 11.2557916,20.7211712 L4.75266256,17.0050975 C4.28530007,16.7380332 3.99687097,16.2410181 3.99687097,15.7027328 L3.99687097,8.29726722 C3.99687097,7.75898194 4.28530007,7.26196679 4.75266256,6.9949025 L11.2557916,3.27882877 C11.7169406,3.01531506 12.2830594,3.01531506 12.7442084,3.27882877 Z M12,14.5 C13.3807119,14.5 14.5,13.3807119 14.5,12 C14.5,10.6192881 13.3807119,9.5 12,9.5 C10.6192881,9.5 9.5,10.6192881 9.5,12 C9.5,13.3807119 10.6192881,14.5 12,14.5 Z\"
                                                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class=\"mb-0 me-2\">
                                                                <a href=\"#\"
                                                                   class=\"fs-6 text-gray-800 text-hover-primary fw-bolder\">نماد
                                                                    دارایی ها</a>
                                                                <div class=\"text-gray-400 fs-7\">مجموعه ای از ایکون ها
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">20 March</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                </div>
                                                <!--end::items-->
                                                <!--begin::نمایش mیاe-->
                                                <div class=\"py-3 text-center border-top\">
                                                    <a href=\"pages/profile/activity.html\"
                                                       class=\"btn btn-color-gray-600 btn-active-color-primary\">نمایش همه
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                                        <span class=\"svg-icon svg-icon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                              transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                                              x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\"
                                                                              rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                                              fill=\"#000000\" fill-rule=\"nonzero\"
                                                                              transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::Svg Icon--></a>
                                                </div>
                                                <!--end::نمایش mیاe-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div class=\"tab-pane fade show active\" id=\"kt_topbar_notifications_2\" سطح
                                                 role=\"tabpanel\">
                                                <!--begin::Wrapper-->
                                                <div class=\"d-flex flex-column px-9\">
                                                    <!--begin::Section-->
                                                    <div class=\"pt-10 pb-0\">
                                                        <!--begin::Title-->
                                                        <h3 class=\"text-dark text-center fw-bolder\">دسترسی حرفه ای را
                                                            دریافت کنید</h3>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class=\"text-center text-gray-600 fw-bold pt-1\">رئوس مطالب
                                                            شما را صادق نگه می دارد. آنها جلوی شگفت انگیز بودن شما
                                                            درمورد رانندگی را می گیرند
                                                        </div>
                                                        <!--end::Text-->
                                                        <!--begin::Action-->
                                                        <div class=\"text-center mt-5 mb-9\">
                                                            <a href=\"#\" class=\"btn btn-sm btn-primary px-6\"
                                                               data-bs-toggle=\"modal\"
                                                               data-bs-target=\"#kt_modal_upgrade_plan\">ارتقا دهید</a>
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Illustration-->
                                                    <div class=\"text-center px-4\">
                                                        <img class=\"mw-100 mh-200px\" alt=\"metronic\"
                                                             src=\"/assets/media/illustrations/wیاk.png\"/>
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div class=\"tab-pane fade\" id=\"kt_topbar_notifications_3\" سطح
                                                 role=\"tabpanel\">
                                                <!--begin::items-->
                                                <div class=\"scroll-y mh-325px my-5 px-8\">
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-success me-4\">200</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">سفارش
                                                                جدید</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Just now</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-danger me-4\">500</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">مشتری
                                                                جدید</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">2 hrs</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-success me-4\">200</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">پردازش
                                                                درگاه</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">5 hrs</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-warning me-4\">300</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">جستجوی
                                                                کوئری</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">2 days</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-success me-4\">200</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">ارتباط
                                                                کلید دسترسی</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">1 week</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-success me-4\">200</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">بازگردانی
                                                                پایگاه داده</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Mar 5</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-warning me-4\">300</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">بروزرسانی
                                                                سیستم</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">May 15</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-warning me-4\">300</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">اپدیت
                                                                سیستم عامل سرور</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Apr 3</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-warning me-4\">300</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">برگشت
                                                                کلید دسترسی</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Jun 30</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-danger me-4\">500</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">روند
                                                                بازپرداخت</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Jul 10</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-danger me-4\">500</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">روند
                                                                برداشت</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Sep 10</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                    <!--begin::مورد-->
                                                    <div class=\"d-flex flex-stack py-4\">
                                                        <!--begin::Section-->
                                                        <div class=\"d-flex align-items-center me-2\">
                                                            <!--begin::Code-->
                                                            <span class=\"w-70px badge badge-light-danger me-4\">500</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href=\"#\"
                                                               class=\"text-gray-800 text-hover-primary fw-bold\">وظایف
                                                                نامه</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::برچسب-->
                                                        <span class=\"badge badge-light fs-8\">Dec 10</span>
                                                        <!--end::برچسب-->
                                                    </div>
                                                    <!--end::مورد-->
                                                </div>
                                                <!--end::items-->
                                                <!--begin::نمایش mیاe-->
                                                <div class=\"py-3 text-center border-top\">
                                                    <a href=\"pages/profile/activity.html\"
                                                       class=\"btn btn-color-gray-600 btn-active-color-primary\">نمایش همه
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                                        <span class=\"svg-icon svg-icon-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                              transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                                              x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\"
                                                                              rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                                              fill=\"#000000\" fill-rule=\"nonzero\"
                                                                              transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::Svg Icon--></a>
                                                </div>
                                                <!--end::نمایش mیاe-->
                                            </div>
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::اعلانات-->
                                <!--begin::کاربر-->
                                <div class=\"d-flex align-items-center ms-1 ms-lg-3\" id=\"kt_header_کاربر_menu_toggle\">
                                    <!--begin::Menu wrapper-->
                                    <div class=\"cursیا-pointer symbol symbol-30px symbol-md-40px\"
                                         data-kt-menu-trigger=\"click\" data-kt-menu-attach=\"parent\"
                                         data-kt-menu-placement=\"bottom-end\" data-kt-menu-flip=\"bottom\">
                                        <img src=\"/assets/media/avatars/150-2.jpg\" alt=\"metronic\"/>
                                    </div>
                                    <!--begin::Menu-->
                                    <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold py-4 fs-6 w-275px\"
                                         data-kt-menu=\"true\">
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-3\">
                                            <div class=\"menu-content d-flex align-items-center px-3\">
                                                <!--begin::تصویر کاربری-->
                                                <div class=\"symbol symbol-50px me-5\">
                                                    <img alt=\"Logo\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                                </div>
                                                <!--end::تصویر کاربری-->
                                                <!--begin::کاربرname-->
                                                <div class=\"d-flex flex-column\">
                                                    <div class=\"fw-bolder d-flex align-items-center fs-5\">{{ app.user.eraseCredentials }}
                                                        <span class=\"badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2\">Pro</span>
                                                    </div>
                                                    <a href=\"#\"
                                                       class=\"fw-bold text-muted text-hover-primary fs-7\">{{ app.user.email }}</a>
                                                </div>
                                                <!--end::کاربرname-->
                                            </div>
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu separator-->
                                        <div class=\"separator my-2\"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\">
                                            <a href=\"account/overview.html\" class=\"menu-link px-5\">پروفایل من</a>
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\">
                                            <a href=\"pages/projects/list.html\" class=\"menu-link px-5\">
                                                <span class=\"menu-text\">پروژه های من</span>
                                                <span class=\"menu-badge\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light-danger badge-circle fw-bolder fs-7\">3</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </a>
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\" data-kt-menu-trigger=\"hover\"
                                             data-kt-menu-placement=\"left-start\" data-kt-menu-flip=\"center, top\">
                                            <a href=\"#\" class=\"menu-link px-5\">
                                                <span class=\"menu-title\">اشتراک من</span>
                                                <span class=\"menu-arrow\"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class=\"menu-sub menu-sub-dropdown w-175px py-4\">
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/referrals.html\" class=\"menu-link px-5\">مراجعات</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/billing.html\" class=\"menu-link px-5\">صورتحساب</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/statements.html\" class=\"menu-link px-5\">درگاه
                                                        ها</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/statements.html\"
                                                       class=\"menu-link d-flex flex-stack px-5\">بیانیه
                                                        <i class=\"fas fa-exclamation-circle ms-2 fs-7\"
                                                           data-bs-toggle=\"tooltip\"
                                                           title=\"اظهارات خود را نمایش دهید\"></i></a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu separator-->
                                                <div class=\"separator my-2\"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <div class=\"menu-content px-3\">
                                                        <label class=\"form-check form-switch form-check-custom form-check-solid\">
                                                            <input class=\"form-check-input w-30px h-20px\"
                                                                   type=\"checkbox\" value=\"1\" checked=\"checked\"
                                                                   name=\"notifications\"/>
                                                            <span class=\"form-check-label text-muted fs-7\">اعلانات</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--end::Menu مورد-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\">
                                            <a href=\"account/statements.html\" class=\"menu-link px-5\">اظهارات من</a>
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu separator-->
                                        <div class=\"separator my-2\"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\" data-kt-menu-trigger=\"hover\"
                                             data-kt-menu-placement=\"left-start\" data-kt-menu-flip=\"center, top\">
                                            <a href=\"#\" class=\"menu-link px-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title position-relative\">زبان
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0\">English
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-15px h-15px rounded-1 ms-2\"
                                                             src=\"/assets/media/flags/united-states.svg\"
                                                             alt=\"metronic\"/></span></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class=\"menu-sub menu-sub-dropdown w-175px py-4\">
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/settings.html\"
                                                       class=\"menu-link d-flex px-5 active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-1\"
                                                                     src=\"/assets/media/flags/united-states.svg\"
                                                                     alt=\"metronic\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>English</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/settings.html\" class=\"menu-link d-flex px-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-1\"
                                                                     src=\"/assets/media/flags/spain.svg\"
                                                                     alt=\"metronic\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>Spanish</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/settings.html\" class=\"menu-link d-flex px-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-1\"
                                                                     src=\"/assets/media/flags/germany.svg\"
                                                                     alt=\"metronic\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>German</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/settings.html\" class=\"menu-link d-flex px-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-1\"
                                                                     src=\"/assets/media/flags/japan.svg\"
                                                                     alt=\"metronic\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>Japanese</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                                <!--begin::Menu مورد-->
                                                <div class=\"menu-item px-3\">
                                                    <a href=\"account/settings.html\" class=\"menu-link d-flex px-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-20px me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-1\"
                                                                     src=\"/assets/media/flags/france.svg\"
                                                                     alt=\"metronic\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>French</a>
                                                </div>
                                                <!--end::Menu مورد-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5 my-1\">
                                            <a href=\"account/settings.html\" class=\"menu-link px-5\">تنظیمات اکانت
                                                کاربر</a>
                                        </div>
                                        <!--end::Menu مورد-->
                                        <!--begin::Menu مورد-->
                                        <div class=\"menu-item px-5\">
                                            <a href=\"authentication/flows/basic/sign-in.html\" class=\"menu-link px-5\">خروج</a>
                                        </div>
                                        <!--end::Menu مورد-->
                                    </div>
                                </div>
                                <!--end::Menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::کاربر -->
                            <!--begin::Heaeder menu toggle-->
                            <div class=\"d-flex align-items-center d-lg-none ms-2 me-n3\" title=\"Show header menu\">
                                <div class=\"btn btn-icon btn-active-light-primary\"
                                     id=\"kt_header_menu_mobile_toggle\">
                                    <!--begin::Svg Icon | path: icons/duotone/Text/Toggle-Right.svg-->
                                    <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                         height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                           fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                                                  d=\"M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z\"
                                                                  fill=\"black\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                                                  d=\"M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z\"
                                                                  fill=\"black\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Heaeder menu toggle-->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <!--end::Content-->

    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Pسن-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->
    <!--begin::فعالیتها drawer-->
    <div id=\"kt_activities\" class=\"bg-white\" data-kt-drawer=\"true\" data-kt-drawer-name=\"activities\"
         data-kt-drawer-activate=\"true\" data-kt-drawer-overlay=\"true\"
         data-kt-drawer-width=\"{default:'300px', 'lg': '900px'}\" data-kt-drawer-direction=\"end\"
         data-kt-drawer-toggle=\"#kt_activities_toggle\" data-kt-drawer-close=\"#kt_activities_close\">
        <div class=\"card shadow-none\">
            <!--begin::Header-->
            <div class=\"card-header\" id=\"kt_activities_header\">
                <h3 class=\"card-title fw-bolder text-dark\">گزارش ها</h3>
                <div class=\"card-toolbar\">
                    <button type=\"button\" class=\"btn btn-sm btn-icon btn-active-light-primary me-n5\"
                            id=\"kt_activities_close\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                       fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                              transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                              x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class=\"card-body position-relative\" id=\"kt_activities_body\">
                <!--begin::Content-->
                <div id=\"kt_activities_scroll\" class=\"position-relative scroll-y me-n5 pe-5\" data-kt-scroll=\"true\"
                     data-kt-scroll-height=\"auto\" data-kt-scroll-wrappers=\"#kt_activities_body\"
                     data-kt-scroll-dependencies=\"#kt_activities_header, #kt_activities_footer\"
                     data-kt-scroll-offset=\"5px\">
                    <!--begin::زمانline items-->
                    <div class=\"timeline\">
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px me-4\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Chat2.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<polygon fill=\"#000000\" opacity=\"0.3\" points=\"5 15 3 21.5 9.5 19.5\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z\"
                                                      fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">در پروژه نرم افزار موبایل دو وظیفه وجود دارد</div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">اضافه شده در ساعت 4:12</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Nina Nilson\">
                                            <img src=\"/assets/media/avatars/150-11.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                                <!--begin::زمانline جزئیات-->
                                <div class=\"overflow-auto pb-5\">
                                    <!--begin::Recیاd-->
                                    <div class=\"d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5\">
                                        <!--begin::Title-->
                                        <a href=\"#\"
                                           class=\"fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px\">ملاقات
                                            با مشتری</a>
                                        <!--end::Title-->
                                        <!--begin::برچسب-->
                                        <div class=\"min-w-175px pe-2\">
                                            <span class=\"badge badge-light text-muted\">طراحی اپلیکیشن</span>
                                        </div>
                                        <!--end::برچسب-->
                                        <!--begin::کاربران-->
                                        <div class=\"symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2\">
                                            <!--begin::کاربر-->
                                            <div class=\"symbol symbol-circle symbol-25px\">
                                                <img src=\"/assets/media/avatars/150-3.jpg\" alt=\"img\"/>
                                            </div>
                                            <!--end::کاربر-->
                                            <!--begin::کاربر-->
                                            <div class=\"symbol symbol-circle symbol-25px\">
                                                <img src=\"/assets/media/avatars/150-11.jpg\" alt=\"img\"/>
                                            </div>
                                            <!--end::کاربر-->
                                            <!--begin::کاربر-->
                                            <div class=\"symbol symbol-circle symbol-25px\">
                                                <div class=\"symbol-label fs-8 fw-bold bg-primary text-inverse-primary\">
                                                    A
                                                </div>
                                            </div>
                                            <!--end::کاربر-->
                                        </div>
                                        <!--end::کاربران-->
                                        <!--begin::پردازش-->
                                        <div class=\"min-w-125px pe-2\">
                                            <span class=\"badge badge-light-primary\">درحال پردازش</span>
                                        </div>
                                        <!--end::پردازش-->
                                        <!--begin::Action-->
                                        <a href=\"#\" class=\"btn btn-sm btn-light btn-active-light-primary\">نمایش</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Recیاd-->
                                    <!--begin::Recیاd-->
                                    <div class=\"d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0\">
                                        <!--begin::Title-->
                                        <a href=\"#\"
                                           class=\"fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px\">آماده
                                            سازی تحویل پروژه</a>
                                        <!--end::Title-->
                                        <!--begin::برچسب-->
                                        <div class=\"min-w-175px\">
                                            <span class=\"badge badge-light text-muted\">توسعه دهنده سیستم</span>
                                        </div>
                                        <!--end::برچسب-->
                                        <!--begin::کاربران-->
                                        <div class=\"symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px\">
                                            <!--begin::کاربر-->
                                            <div class=\"symbol symbol-circle symbol-25px\">
                                                <img src=\"/assets/media/avatars/150-5.jpg\" alt=\"img\"/>
                                            </div>
                                            <!--end::کاربر-->
                                            <!--begin::کاربر-->
                                            <div class=\"symbol symbol-circle symbol-25px\">
                                                <div class=\"symbol-label fs-8 fw-bold bg-success text-inverse-primary\">
                                                    B
                                                </div>
                                            </div>
                                            <!--end::کاربر-->
                                        </div>
                                        <!--end::کاربران-->
                                        <!--begin::پردازش-->
                                        <div class=\"min-w-125px\">
                                            <span class=\"badge badge-light-success\">کامل شد</span>
                                        </div>
                                        <!--end::پردازش-->
                                        <!--begin::Action-->
                                        <a href=\"#\" class=\"btn btn-sm btn-light btn-active-light-primary\">نمایش</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Recیاd-->
                                </div>
                                <!--end::زمانline جزئیات-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/Thumbtack.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.6734943,8.3307728 L14.9993074,6.09979492 L14.1213255,5.22181303 C13.7308012,4.83128874 13.7308012,4.19812376 14.1213255,3.80759947 L15.535539,2.39338591 C15.9260633,2.00286161 16.5592283,2.00286161 16.9497526,2.39338591 L22.6066068,8.05024016 C22.9971311,8.44076445 22.9971311,9.07392943 22.6066068,9.46445372 L21.1923933,10.8786673 C20.801869,11.2691916 20.168704,11.2691916 19.7781797,10.8786673 L18.9002333,10.0007208 L16.6692373,13.3265608 C16.9264145,14.2523264 16.9984943,15.2320236 16.8664372,16.2092466 L16.4344698,19.4058049 C16.360509,19.9531149 15.8568695,20.3368403 15.3095595,20.2628795 C15.0925691,20.2335564 14.8912006,20.1338238 14.7363706,19.9789938 L5.02099894,10.2636221 C4.63047465,9.87309784 4.63047465,9.23993286 5.02099894,8.84940857 C5.17582897,8.69457854 5.37719743,8.59484594 5.59418783,8.56552292 L8.79074617,8.13355557 C9.76799113,8.00149544 10.7477104,8.0735815 11.6734943,8.3307728 Z\"
                                                      fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<polygon fill=\"#000000\" opacity=\"0.3\"
                                                         transform=\"translate(7.050253, 17.949747) rotate(-315.000000) translate(-7.050253, -17.949747)\"
                                                         points=\"5.55025253 13.9497475 5.55025253 19.6640332 7.05025253 21.9497475 8.55025253 19.6640332 8.55025253 13.9497475\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n2\">
                                <!--begin::زمانline heading-->
                                <div class=\"overflow-auto pe-3\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">دعوت نامه برای ساخت طراحی های جذاب که کارگاه انسانی
                                        را بیان می کنند
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">ارسال شده در ساعت 4:23</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Alan Nilson\">
                                            <img src=\"/assets/media/avatars/150-2.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/عمومی/Attachment2.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                 xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z\"
                                                          fill=\"#000000\" opacity=\"0.3\"
                                                          transform=\"translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z\"
                                                          fill=\"#000000\"
                                                          transform=\"translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z\"
                                                          fill=\"#000000\" opacity=\"0.3\"
                                                          transform=\"translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z\"
                                                          fill=\"#000000\" opacity=\"0.3\"
                                                          transform=\"translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"mb-5 pe-3\">
                                    <!--begin::Title-->
                                    <a href=\"#\" class=\"fs-5 fw-bold text-gray-800 text-hover-primary mb-2\">3 پروژه ورودی
                                        جدید پرونده ها:</a>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">ارسال شده در ساعت 10:30</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Jan Hummer\">
                                            <img src=\"/assets/media/avatars/150-6.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                                <!--begin::زمانline جزئیات-->
                                <div class=\"overflow-auto pb-5\">
                                    <div class=\"d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5\">
                                        <!--begin::مورد-->
                                        <div class=\"d-flex flex-aligns-center pe-10 pe-lg-20\">
                                            <!--begin::Icon-->
                                            <img alt=\"\" class=\"w-30px me-3\" src=\"/assets/media/svg/files/pdf.svg\"/>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class=\"ms-1 fw-bold\">
                                                <!--begin::Desc-->
                                                <a href=\"#\" class=\"fs-6 text-hover-primary fw-bolder\">دارایی، مالیه،
                                                    سرمایه گذاری </a>
                                                <!--end::Desc-->
                                                <!--begin::شماره کارت-->
                                                <div class=\"text-gray-400\">1.9mb</div>
                                                <!--end::شماره کارت-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::مورد-->
                                        <!--begin::مورد-->
                                        <div class=\"d-flex flex-aligns-center pe-10 pe-lg-20\">
                                            <!--begin::Icon-->
                                            <img alt=\"\" class=\"w-30px me-3\" src=\"/assets/media/svg/files/doc.svg\"/>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class=\"ms-1 fw-bold\">
                                                <!--begin::Desc-->
                                                <a href=\"#\" class=\"fs-6 text-hover-primary fw-bolder\">نتایج تست سرویس
                                                    گیرنده</a>
                                                <!--end::Desc-->
                                                <!--begin::شماره کارت-->
                                                <div class=\"text-gray-400\">18kb</div>
                                                <!--end::شماره کارت-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::مورد-->
                                        <!--begin::مورد-->
                                        <div class=\"d-flex flex-aligns-center\">
                                            <!--begin::Icon-->
                                            <img alt=\"\" class=\"w-30px me-3\" src=\"/assets/media/svg/files/css.svg\"/>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class=\"ms-1 fw-bold\">
                                                <!--begin::Desc-->
                                                <a href=\"#\" class=\"fs-6 text-hover-primary fw-bolder\">دارایی، مالیه،
                                                    سرمایه گذاری گزارش ها</a>
                                                <!--end::Desc-->
                                                <!--begin::شماره کارت-->
                                                <div class=\"text-gray-400\">20mb</div>
                                                <!--end::شماره کارت-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::مورد-->
                                    </div>
                                </div>
                                <!--end::زمانline جزئیات-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/خانه/Library.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                 xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\"
                                                          fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                          transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)\"
                                                          x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">وظیفه
                                        <a href=\"#\" class=\"text-primary fw-bolder me-1\">#45890</a>ادغام با
                                        <a href=\"#\" class=\"text-primary fw-bolder me-1\">#45890</a>درپروژه داشبورد ادمین
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">آغاز شده در 4:23 بعد از ظهر توسط</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Nina Nilson\">
                                            <img src=\"/assets/media/avatars/150-11.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/نوشتن.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z\"
                                                      fill=\"#000000\" fill-rule=\"nonzero\"
                                                      transform=\"translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z\"
                                                      fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">3 مفهوم جدید طراحی برنامه اضافه شده است:</div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">ایجاد شده در 4:23 بعد از ظهر توسط</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Marcus Dotson\">
                                            <img src=\"/assets/media/avatars/150-3.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                                <!--begin::زمانline جزئیات-->
                                <div class=\"overflow-auto pb-5\">
                                    <div class=\"d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7\">
                                        <!--begin::مورد-->
                                        <div class=\"overlay me-10\">
                                            <!--begin::Imسن-->
                                            <div class=\"overlay-wrapper\">
                                                <img alt=\"img\" class=\"rounded w-200px\"
                                                     src=\"/assets/media/demos/demo1.png\"/>
                                            </div>
                                            <!--end::Imسن-->
                                            <!--begin::Link-->
                                            <div class=\"overlay-layer bg-dark bg-opacity-10 rounded\">
                                                <a href=\"#\" class=\"btn btn-sm btn-primary btn-shadow\">کاوش کنید</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::مورد-->
                                        <!--begin::مورد-->
                                        <div class=\"overlay me-10\">
                                            <!--begin::Imسن-->
                                            <div class=\"overlay-wrapper\">
                                                <img alt=\"img\" class=\"rounded w-200px\"
                                                     src=\"/assets/media/demos/demo2.png\"/>
                                            </div>
                                            <!--end::Imسن-->
                                            <!--begin::Link-->
                                            <div class=\"overlay-layer bg-dark bg-opacity-10 rounded\">
                                                <a href=\"#\" class=\"btn btn-sm btn-primary btn-shadow\">کاوش کنید</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::مورد-->
                                        <!--begin::مورد-->
                                        <div class=\"overlay\">
                                            <!--begin::Imسن-->
                                            <div class=\"overlay-wrapper\">
                                                <img alt=\"img\" class=\"rounded w-200px\"
                                                     src=\"/assets/media/demos/demo3.png\"/>
                                            </div>
                                            <!--end::Imسن-->
                                            <!--begin::Link-->
                                            <div class=\"overlay-layer bg-dark bg-opacity-10 rounded\">
                                                <a href=\"#\" class=\"btn btn-sm btn-primary btn-shadow\">کاوش کنید</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::مورد-->
                                    </div>
                                </div>
                                <!--end::زمانline جزئیات-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/فوری-mail.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z\"
                                                      fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z\"
                                                      fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">کیس جدید
                                        <a href=\"#\" class=\"text-primary fw-bolder me-1\">#67890</a>در پروژه طراحی پایگاه
                                        داده چند پلتفرمی به شما اختصاص داده شده است
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"overflow-auto pb-5\">
                                        <!--begin::Wrapper-->
                                        <div class=\"d-flex align-items-center mt-1 fs-6\">
                                            <!--begin::Info-->
                                            <div class=\"text-muted me-2 fs-7\">اضافه شده در ساعت 4:12</div>
                                            <!--end::Info-->
                                            <!--begin::کاربر-->
                                            <a href=\"#\" class=\"text-primary fw-bolder me-1\">رضا علی ابادی</a>
                                            <!--end::کاربر-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/طریقه ی ارتباط/نوشتن.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                 viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z\"
                                                      fill=\"#000000\" fill-rule=\"nonzero\"
                                                      transform=\"translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z\"
                                                      fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mb-10 mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">رسید به دست شما سفارش جدید</div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">در 5:05 صبح توسط</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <div class=\"symbol symbol-circle symbol-25px\" data-bs-toggle=\"tooltip\"
                                             data-bs-boundary=\"window\" data-bs-placement=\"top\" title=\"Robert Rich\">
                                            <img src=\"/assets/media/avatars/150-14.jpg\" alt=\"img\"/>
                                        </div>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                                <!--begin::زمانline جزئیات-->
                                <div class=\"overflow-auto pb-5\">
                                    <!--begin::Notice-->
                                    <div class=\"notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6\">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotone/Code/Git4.svg-->
                                        <span class=\"svg-icon svg-icon-2tx svg-icon-primary me-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\"
                                                     viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z\"
                                                          fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7,11.4648712 L7,17 C7,18.1045695 7.8954305,19 9,19 L15,19 L15,21 L9,21 C6.790861,21 5,19.209139 5,17 L5,8 L5,7 L7,7 L7,8 C7,9.1045695 7.8954305,10 9,10 L15,10 L15,12 L9,12 C8.27142571,12 7.58834673,11.8052114 7,11.4648712 Z\"
                                                          fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18,22 C19.1045695,22 20,21.1045695 20,20 C20,18.8954305 19.1045695,18 18,18 C16.8954305,18 16,18.8954305 16,20 C16,21.1045695 16.8954305,22 18,22 Z M18,24 C15.790861,24 14,22.209139 14,20 C14,17.790861 15.790861,16 18,16 C20.209139,16 22,17.790861 22,20 C22,22.209139 20.209139,24 18,24 Z\"
                                                          fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 Z M18,15 C15.790861,15 14,13.209139 14,11 C14,8.790861 15.790861,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 Z\"
                                                          fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class=\"d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap\">
                                            <!--begin::Content-->
                                            <div class=\"mb-3 mb-md-0 fw-bold\">
                                                <h4 class=\"text-gray-800 fw-bolder\">پایگاه داده برگشت فرآیند کامل
                                                    شد!</h4>
                                                <div class=\"fs-6 text-gray-600 pe-7\">برای اطمینان از درستی داده ها ، به
                                                    مدیر داشبورد وارد شوید
                                                </div>
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Action-->
                                            <a href=\"#\" class=\"btn btn-primary px-6 align-self-center text-nowrap\">پردازش</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::زمانline جزئیات-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                        <!--begin::زمانline مورد-->
                        <div class=\"timeline-item\">
                            <!--begin::زمانline line-->
                            <div class=\"timeline-line w-40px\"></div>
                            <!--end::زمانline line-->
                            <!--begin::زمانline icon-->
                            <div class=\"timeline-icon symbol symbol-circle symbol-40px\">
                                <div class=\"symbol-label bg-light\">
                                    <!--begin::Svg Icon | path: icons/duotone/Shopping/Cart4.svg-->
                                    <span class=\"svg-icon svg-icon-2 svg-icon-gray-500\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
                                                 viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.25\"
                                                      d=\"M3.19406 11.1644C3.09247 10.5549 3.56251 10 4.18045 10H19.8195C20.4375 10 20.9075 10.5549 20.8059 11.1644L19.4178 19.4932C19.1767 20.9398 17.9251 22 16.4586 22H7.54138C6.07486 22 4.82329 20.9398 4.58219 19.4932L3.19406 11.1644Z\"
                                                      fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2 9.5C2 8.67157 2.67157 8 3.5 8H20.5C21.3284 8 22 8.67157 22 9.5C22 10.3284 21.3284 11 20.5 11H3.5C2.67157 11 2 10.3284 2 9.5Z\"
                                                      fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10 13C9.44772 13 9 13.4477 9 14V18C9 18.5523 9.44772 19 10 19C10.5523 19 11 18.5523 11 18V14C11 13.4477 10.5523 13 10 13Z\"
                                                      fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14 13C13.4477 13 13 13.4477 13 14V18C13 18.5523 13.4477 19 14 19C14.5523 19 15 18.5523 15 18V14C15 13.4477 14.5523 13 14 13Z\"
                                                      fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<g opacity=\"0.25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10.7071 3.70711C11.0976 3.31658 11.0976 2.68342 10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711C4.68342 9.09763 5.31658 9.09763 5.70711 8.70711L10.7071 3.70711Z\"
                                                          fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13.2929 3.70711C12.9024 3.31658 12.9024 2.68342 13.2929 2.29289C13.6834 1.90237 14.3166 1.90237 14.7071 2.29289L19.7071 7.29289C20.0976 7.68342 20.0976 8.31658 19.7071 8.70711C19.3166 9.09763 18.6834 9.09763 18.2929 8.70711L13.2929 3.70711Z\"
                                                          fill=\"#7E8299\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::زمانline icon-->
                            <!--begin::زمانline content-->
                            <div class=\"timeline-content mt-n1\">
                                <!--begin::زمانline heading-->
                                <div class=\"pe-3 mb-5\">
                                    <!--begin::Title-->
                                    <div class=\"fs-5 fw-bold mb-2\">سفارش جدید
                                        <a href=\"#\" class=\"text-primary fw-bolder me-1\">#67890</a>is placed fیا Wیاkshow
                                        Planning &amp; بودجه Estimation
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class=\"d-flex align-items-center mt-1 fs-6\">
                                        <!--begin::Info-->
                                        <div class=\"text-muted me-2 fs-7\">در ساعت 4:23 بعد از ظهر توسط</div>
                                        <!--end::Info-->
                                        <!--begin::کاربر-->
                                        <a href=\"#\" class=\"text-primary fw-bolder me-1\">محسن علی ابادی</a>
                                        <!--end::کاربر-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::زمانline heading-->
                            </div>
                            <!--end::زمانline content-->
                        </div>
                        <!--end::زمانline مورد-->
                    </div>
                    <!--end::زمانline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class=\"card-footer py-5 text-center\" id=\"kt_activities_footer\">
                <a href=\"pages/profile/activity.html\" class=\"btn btn-bg-white text-primary\">نمایش تمام فعالیت ها
                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                    <span class=\"svg-icon svg-icon-3 svg-icon-primary\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                      transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                      x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\"/>
\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                      fill=\"#000000\" fill-rule=\"nonzero\"
                                      transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
                    <!--end::Svg Icon--></a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::فعالیتها drawer-->
    <!--begin::نمودارها drawer-->
    <div id=\"kt_drawer_chat\" class=\"bg-white\" data-kt-drawer=\"true\" data-kt-drawer-name=\"chat\"
         data-kt-drawer-activate=\"true\" data-kt-drawer-overlay=\"true\"
         data-kt-drawer-width=\"{default:'300px', 'md': '500px'}\" data-kt-drawer-direction=\"end\"
         data-kt-drawer-toggle=\"#kt_drawer_chat_toggle\" data-kt-drawer-close=\"#kt_drawer_chat_close\">
        <!--begin::Messenger-->
        <div class=\"card w-100\" id=\"kt_drawer_chat_messenger\">
            <!--begin::Card header-->
            <div class=\"card-header pe-5\" id=\"kt_drawer_chat_messenger_header\">
                <!--begin::Title-->
                <div class=\"card-title\">
                    <!--begin::کاربر-->
                    <div class=\"d-flex justify-content-center flex-column me-3\">
                        <a href=\"#\" class=\"fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1\">رضا علی
                            ابادی</a>
                        <!--begin::Info-->
                        <div class=\"mb-0 lh-1\">
                            <span class=\"badge badge-success badge-circle w-10px h-10px me-1\"></span>
                            <span class=\"fs-7 fw-bold text-gray-400\">فعال</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::کاربر-->
                </div>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class=\"card-toolbar\">
                    <!--begin::Menu-->
                    <div class=\"me-2\">
                        <button class=\"btn btn-sm btn-icon btn-active-light-primary\" data-kt-menu-trigger=\"click\"
                                data-kt-menu-placement=\"bottom-end\" data-kt-menu-flip=\"top-end\">
                            <i class=\"bi bi-three-dots fs-3\"></i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3\"
                             data-kt-menu=\"true\">
                            <!--begin::Heading-->
                            <div class=\"menu-item px-3\">
                                <div class=\"menu-content text-muted pb-2 px-3 fs-7 text-uppercase\">مخاطبین</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu مورد-->
                            <div class=\"menu-item px-3\">
                                <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"modal\"
                                   data-bs-target=\"#kt_modal_کاربران_search\">افزودن مخاطب</a>
                            </div>
                            <!--end::Menu مورد-->
                            <!--begin::Menu مورد-->
                            <div class=\"menu-item px-3\">
                                <a href=\"#\" class=\"menu-link flex-stack px-3\" data-bs-toggle=\"modal\"
                                   data-bs-target=\"#kt_modal_invite_friends\">دعوت از مخاطبین
                                    <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                       title=\"برای ارسال دعوت نامه یک ایمیل تماس مشخص کنید\"></i></a>
                            </div>
                            <!--end::Menu مورد-->
                            <!--begin::Menu مورد-->
                            <div class=\"menu-item px-3\" data-kt-menu-trigger=\"hover\" data-kt-menu-placement=\"left-start\"
                                 data-kt-menu-flip=\"left, center, top\">
                                <a href=\"#\" class=\"menu-link px-3\">
                                    <span class=\"menu-title\">گروه ها</span>
                                    <span class=\"menu-arrow\"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class=\"menu-sub menu-sub-dropdown w-175px py-4\">
                                    <!--begin::Menu مورد-->
                                    <div class=\"menu-item px-3\">
                                        <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\" title=\"بزودی\">ایجاد
                                            کردن گروه</a>
                                    </div>
                                    <!--end::Menu مورد-->
                                    <!--begin::Menu مورد-->
                                    <div class=\"menu-item px-3\">
                                        <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\" title=\"بزودی\">دعوت
                                            کاربران</a>
                                    </div>
                                    <!--end::Menu مورد-->
                                    <!--begin::Menu مورد-->
                                    <div class=\"menu-item px-3\">
                                        <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\" title=\"بزودی\">تنظیمات</a>
                                    </div>
                                    <!--end::Menu مورد-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu مورد-->
                            <!--begin::Menu مورد-->
                            <div class=\"menu-item px-3 my-1\">
                                <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\" title=\"بزودی\">تنظیمات</a>
                            </div>
                            <!--end::Menu مورد-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->
                    <!--begin::Close-->
                    <div class=\"btn btn-sm btn-icon btn-active-light-primary\" id=\"kt_drawer_chat_close\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                       fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                              transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                              x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class=\"card-body\" id=\"kt_drawer_chat_messenger_body\">
                <!--begin::پیامs-->
                <div class=\"scroll-y me-n5 pe-5\" data-kt-element=\"messسنs\" data-kt-scroll=\"true\"
                     data-kt-scroll-activate=\"true\" data-kt-scroll-height=\"auto\"
                     data-kt-scroll-dependencies=\"#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer\"
                     data-kt-scroll-wrappers=\"#kt_drawer_chat_messenger_body\" data-kt-scroll-offset=\"0px\">
                    <!--begin::پیام(in)-->
                    <div class=\"d-flex justify-content-start mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-start\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                                <!--begin::جزئیات-->
                                <div class=\"ms-3\">
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary me-1\">رضا علی
                                        ابادی</a>
                                    <span class=\"text-muted fs-7 mb-1\">دو دقیقه پیش</span>
                                </div>
                                <!--end::جزئیات-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start\"
                                 data-kt-element=\"messسن-text\">چقدر احتمال دارد که شرکت ما را به دوستان و خانواده خود
                                پیشنهاد دهید؟?
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class=\"d-flex justify-content-end mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-end\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::جزئیات-->
                                <div class=\"me-3\">
                                    <span class=\"text-muted fs-7 mb-1\">5دقیقه پیش</span>
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary ms-1\">شما</a>
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end\"
                                 data-kt-element=\"messسن-text\">سلام ، ما فقط در حال نوشتن هستیم تا به شما اطلاع دهیم که
                                در مخزن گیت هاب مشترک شده اید.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class=\"d-flex justify-content-start mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-start\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                                <!--begin::جزئیات-->
                                <div class=\"ms-3\">
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary me-1\">رضا علی
                                        ابادی</a>
                                    <span class=\"text-muted fs-7 mb-1\">یکساعت پیش</span>
                                </div>
                                <!--end::جزئیات-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start\"
                                 data-kt-element=\"messسن-text\">بله فهمیدم
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class=\"d-flex justify-content-end mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-end\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::جزئیات-->
                                <div class=\"me-3\">
                                    <span class=\"text-muted fs-7 mb-1\">دوساعت پیش</span>
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary ms-1\">شما</a>
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end\"
                                 data-kt-element=\"messسن-text\">شما برای همه موارد اعلان دریافت خواهید کرد ، درخواستها را
                                بکشید!
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class=\"d-flex justify-content-start mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-start\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                                <!--begin::جزئیات-->
                                <div class=\"ms-3\">
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary me-1\">رضا علی
                                        ابادی</a>
                                    <span class=\"text-muted fs-7 mb-1\">سه ساعت پیش</span>
                                </div>
                                <!--end::جزئیات-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start\"
                                 data-kt-element=\"messسن-text\">شما can unwatch this repositیاy immediately by clicking
                                here:
                                <a href=\"https://keenthemes.com\">ساتراس وب.com</a></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class=\"d-flex justify-content-end mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-end\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::جزئیات-->
                                <div class=\"me-3\">
                                    <span class=\"text-muted fs-7 mb-1\">4ساعت پیش</span>
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary ms-1\">شما</a>
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end\"
                                 data-kt-element=\"messسن-text\">بیشتر دوره های بازرگانی خریداری شده در طول این فروش!
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class=\"d-flex justify-content-start mb-10\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-start\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                                <!--begin::جزئیات-->
                                <div class=\"ms-3\">
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary me-1\">رضا علی
                                        ابادی</a>
                                    <span class=\"text-muted fs-7 mb-1\">5ساعت پبش</span>
                                </div>
                                <!--end::جزئیات-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start\"
                                 data-kt-element=\"messسن-text\">شرکت BBQ برای جشن گرفتن آخرین دستاوردها و اهداف کواتر.
                                غذا و نوشیدنی تهیه شده
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(template fیا out)-->
                    <div class=\"d-flex justify-content-end mb-10 d-none\" data-kt-element=\"template-out\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-end\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::جزئیات-->
                                <div class=\"me-3\">
                                    <span class=\"text-muted fs-7 mb-1\">Just now</span>
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary ms-1\">شما</a>
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end\"
                                 data-kt-element=\"messسن-text\"></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(template fیا out)-->
                    <!--begin::پیام(template fیا in)-->
                    <div class=\"d-flex justify-content-start mb-10 d-none\" data-kt-element=\"template-in\">
                        <!--begin::Wrapper-->
                        <div class=\"d-flex flex-column align-items-start\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex align-items-center mb-2\">
                                <!--begin::تصویر کاربری-->
                                <div class=\"symbol symbol-35px symbol-circle\">
                                    <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                </div>
                                <!--end::تصویر کاربری-->
                                <!--begin::جزئیات-->
                                <div class=\"ms-3\">
                                    <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary me-1\">رضا علی
                                        ابادی</a>
                                    <span class=\"text-muted fs-7 mb-1\">Just now</span>
                                </div>
                                <!--end::جزئیات-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::Text-->
                            <div class=\"p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start\"
                                 data-kt-element=\"messسن-text\">Right befیاe vacation season we have the next Big Deal
                                fیا you.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(template fیا in)-->
                </div>
                <!--end::پیامs-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class=\"card-footer pt-4\" id=\"kt_drawer_chat_messenger_footer\">
                <!--begin::Input-->
                <textarea class=\"form-control form-control-flush mb-3\" rows=\"1\" data-kt-element=\"input\"
                          placeholder=\"پیام را بنویسید\"></textarea>
                <!--end::Input-->
                <!--begin:Toolbar-->
                <div class=\"d-flex flex-stack\">
                    <!--begin::عملیات-->
                    <div class=\"d-flex align-items-center me-2\">
                        <button class=\"btn btn-sm btn-icon btn-active-light-primary me-1\" type=\"button\"
                                data-bs-toggle=\"tooltip\" title=\"بزودی\">
                            <i class=\"bi bi-paperclip fs-3\"></i>
                        </button>
                        <button class=\"btn btn-sm btn-icon btn-active-light-primary me-1\" type=\"button\"
                                data-bs-toggle=\"tooltip\" title=\"بزودی\">
                            <i class=\"bi bi-upload fs-3\"></i>
                        </button>
                    </div>
                    <!--end::عملیات-->
                    <!--begin::ارسال-->
                    <button class=\"btn btn-primary\" type=\"button\" data-kt-element=\"send\">ارسال</button>
                    <!--end::ارسال-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--begin::Exolیاe drawer-->
    <!--begin::Modal - دعوت از دوستان-->
    <div class=\"modal fade\" id=\"kt_modal_invite_friends\" tabindex=\"-1\" aria-hidden=\"true\">
        <!--begin::Modal dialog-->
        <div class=\"modal-dialog mw-650px\">
            <!--begin::Modal content-->
            <div class=\"modal-content\">
                <!--begin::Modal header-->
                <div class=\"modal-header pb-0 border-0 justify-content-end\">
                    <!--begin::Close-->
                    <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                       fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                              transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                              x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class=\"modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15\">
                    <!--begin::Heading-->
                    <div class=\"text-center mb-13\">
                        <!--begin::Title-->
                        <h1 class=\"mb-3\">دعوت از دوستان</h1>
                        <!--end::Title-->
                        <!--begin::توضیحات-->
                        <div class=\"text-gray-400 fw-bold fs-5\">اگر به اطلاعات بیشتری نیاز دارید ، لطفاً این مورد را
                            بررسی کنید
                            <a href=\"#\" class=\"link-primary fw-bolder\">صفحه سوالات متداول</a>.
                        </div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Google مخاطبین Invite-->
                    <div class=\"btn btn-light-primary fw-bolder w-100 mb-8\">
                        <img alt=\"Logo\" src=\"/assets/media/svg/brand-logos/google-icon.svg\" class=\"h-20px me-3\"/>دعوت از
                        مخاطبین جمیل
                    </div>
                    <!--end::Google مخاطبین Invite-->
                    <!--begin::Separatیا-->
                    <div class=\"separator d-flex flex-center mb-8\">
                        <span class=\"text-uppercase bg-white fs-7 fw-bold text-gray-400 px-3\">یا</span>
                    </div>
                    <!--end::Separatیا-->
                    <!--begin::Textarea-->
                    <textarea class=\"form-control form-control-solid mb-8\" rows=\"3\"
                              placeholder=\"ایمیل را وارد نمایید\"></textarea>
                    <!--end::Textarea-->
                    <!--begin::کاربران-->
                    <div class=\"mb-10\">
                        <!--begin::Heading-->
                        <div class=\"fs-6 fw-bold mb-2\">دعوت از کاربران</div>
                        <!--end::Heading-->
                        <!--begin::List-->
                        <div class=\"mh-300px scroll-y me-n7 pe-7\">
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-1.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">اتنا
                                            ابراهیمی</a>
                                        <div class=\"fw-bold text-gray-400\">e.smith@kpmg.com.au</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-danger text-danger fw-bold\">M</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">رضا علی
                                            ابادی</a>
                                        <div class=\"fw-bold text-gray-400\">melody@altbox.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\" selected=\"selected\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-2.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محمد
                                            ابراهیمی</a>
                                        <div class=\"fw-bold text-gray-400\">max@kt.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-4.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محسن
                                            برومند</a>
                                        <div class=\"fw-bold text-gray-400\">sean@dellito.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-15.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">رضا علی
                                            ابادی</a>
                                        <div class=\"fw-bold text-gray-400\">brian@exchange.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-warning text-warning fw-bold\">M</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محسن
                                            برومند</a>
                                        <div class=\"fw-bold text-gray-400\">mikaela@pexcom.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-8.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محمد
                                            رصایی</a>
                                        <div class=\"fw-bold text-gray-400\">f.mitcham@kpmg.com.au</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-danger text-danger fw-bold\">O</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">رضا علی
                                            ابادی</a>
                                        <div class=\"fw-bold text-gray-400\">olivia@cیاpmail.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-primary text-primary fw-bold\">N</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محسن
                                            برومند</a>
                                        <div class=\"fw-bold text-gray-400\">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\" selected=\"selected\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-6.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">علی
                                            کاربر</a>
                                        <div class=\"fw-bold text-gray-400\">dam@consilting.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-danger text-danger fw-bold\">E</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">اتنا
                                            رضایی</a>
                                        <div class=\"fw-bold text-gray-400\">emma@intenso.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-7.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">علی
                                            کاربر</a>
                                        <div class=\"fw-bold text-gray-400\">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\" selected=\"selected\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-info text-info fw-bold\">A</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">رابرت
                                            دو</a>
                                        <div class=\"fw-bold text-gray-400\">robert@benko.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-17.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">مصطفی
                                            اکبرپور</a>
                                        <div class=\"fw-bold text-gray-400\">miller@mapple.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <span class=\"symbol-label bg-light-success text-success fw-bold\">L</span>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">سجاد
                                            خراشادی</a>
                                        <div class=\"fw-bold text-gray-400\">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\" selected=\"selected\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-10.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محمدابراهیمی</a>
                                        <div class=\"fw-bold text-gray-400\">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\" selected=\"selected\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                            <!--begin::کاربر-->
                            <div class=\"d-flex flex-stack py-4\">
                                <!--begin::جزئیات-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::تصویر کاربری-->
                                    <div class=\"symbol symbol-35px symbol-circle\">
                                        <img alt=\"Pic\" src=\"/assets/media/avatars/150-4.jpg\"/>
                                    </div>
                                    <!--end::تصویر کاربری-->
                                    <!--begin::جزئیات-->
                                    <div class=\"ms-5\">
                                        <a href=\"#\" class=\"fs-5 fw-bolder text-gray-900 text-hover-primary mb-2\">محسن
                                            برومند</a>
                                        <div class=\"fw-bold text-gray-400\">sean@dellito.com</div>
                                    </div>
                                    <!--end::جزئیات-->
                                </div>
                                <!--end::جزئیات-->
                                <!--begin::Access menu-->
                                <div class=\"ms-2 w-100px\">
                                    <select class=\"form-select form-select-solid form-select-sm\" data-control=\"select2\"
                                            data-hide-search=\"true\">
                                        <option value=\"1\">مهمان</option>
                                        <option value=\"2\">مدیر</option>
                                        <option value=\"3\" selected=\"selected\">Can</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::کاربر-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::کاربران-->
                    <!--begin::Notice-->
                    <div class=\"d-flex flex-stack\">
                        <!--begin::برچسب-->
                        <div class=\"me-5 fw-bold\">
                            <label class=\"fs-6\">اضافه کردن کاربران توسط اعضای تیم</label>
                            <div class=\"fs-7 text-gray-400\">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را
                                بررسی کنید
                            </div>
                        </div>
                        <!--end::برچسب-->
                        <!--begin::Switch-->
                        <label class=\"form-check form-switch form-check-custom form-check-solid\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" checked=\"checked\"/>
                            <span class=\"form-check-label fw-bold text-gray-400\">همه بدهکار هستیم</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend-->
    <!--begin::Modal - ایجاد کردن نرم افزار-->
    <div class=\"modal fade\" id=\"kt_modal_create_app\" tabindex=\"-1\" aria-hidden=\"true\">
        <!--begin::Modal dialog-->
        <div class=\"modal-dialog modal-dialog-centered mw-900px\">
            <!--begin::Modal content-->
            <div class=\"modal-content\">
                <!--begin::Modal header-->
                <div class=\"modal-header\">
                    <!--begin::Modal title-->
                    <h2>ایجاد کردن نرم افزار</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                       fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                              transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                              x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class=\"modal-body py-lg-10 px-lg-10\">
                    <!--begin::Stepper-->
                    <div class=\"stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid\"
                         id=\"kt_modal_create_app_stepper\">
                        <!--begin::سایدبار کنار-->
                        <div class=\"d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px\">
                            <!--begin::Nav-->
                            <div class=\"stepper-nav ps-lg-10\">
                                <!--begin::Step 1-->
                                <div class=\"stepper-item current\" data-kt-stepper-element=\"nav\">
                                    <!--begin::Line-->
                                    <div class=\"stepper-line w-40px\"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class=\"stepper-icon w-40px h-40px\">
                                        <i class=\"stepper-check fas fa-check\"></i>
                                        <span class=\"stepper-شماره کارت\">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::برچسب-->
                                    <div class=\"stepper-label\">
                                        <h3 class=\"stepper-title\">جزئیات</h3>
                                        <div class=\"stepper-desc\">نام نرم افزار شما</div>
                                    </div>
                                    <!--end::برچسب-->
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <!--begin::Line-->
                                    <div class=\"stepper-line w-40px\"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class=\"stepper-icon w-40px h-40px\">
                                        <i class=\"stepper-check fas fa-check\"></i>
                                        <span class=\"stepper-شماره کارت\">2</span>
                                    </div>
                                    <!--begin::Icon-->
                                    <!--begin::برچسب-->
                                    <div class=\"stepper-label\">
                                        <h3 class=\"stepper-title\">چارچوب ها</h3>
                                        <div class=\"stepper-desc\">چارچوب برنامه خود را مشخص کنید</div>
                                    </div>
                                    <!--begin::برچسب-->
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <!--begin::Line-->
                                    <div class=\"stepper-line w-40px\"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class=\"stepper-icon w-40px h-40px\">
                                        <i class=\"stepper-check fas fa-check\"></i>
                                        <span class=\"stepper-شماره کارت\">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::برچسب-->
                                    <div class=\"stepper-label\">
                                        <h3 class=\"stepper-title\">پایگاه داده</h3>
                                        <div class=\"stepper-desc\">انتخاب نوع دیتابیس نرم افزار</div>
                                    </div>
                                    <!--end::برچسب-->
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <!--begin::Line-->
                                    <div class=\"stepper-line w-40px\"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class=\"stepper-icon w-40px h-40px\">
                                        <i class=\"stepper-check fas fa-check\"></i>
                                        <span class=\"stepper-شماره کارت\">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::برچسب-->
                                    <div class=\"stepper-label\">
                                        <h3 class=\"stepper-title\">صورتحساب</h3>
                                        <div class=\"stepper-desc\">ارائه جزئیات پرداخت</div>
                                    </div>
                                    <!--end::برچسب-->
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <!--begin::Line-->
                                    <div class=\"stepper-line w-40px\"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class=\"stepper-icon w-40px h-40px\">
                                        <i class=\"stepper-check fas fa-check\"></i>
                                        <span class=\"stepper-شماره کارت\">5</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::برچسب-->
                                    <div class=\"stepper-label\">
                                        <h3 class=\"stepper-title\">رهایی</h3>
                                        <div class=\"stepper-desc\">بررسی و ارسال</div>
                                    </div>
                                    <!--end::برچسب-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::سایدبار کنار-->
                        <!--begin::Content-->
                        <div class=\"flex-row-fluid py-lg-5 px-lg-15\">
                            <!--begin::Fیاm-->
                            <form class=\"form\" novaliتاریخ=\"novaliتاریخ\" id=\"kt_modal_create_app_form\">
                                <!--begin::Step 1-->
                                <div class=\"current\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Input group-->
                                        <div class=\"fv-row mb-10\">
                                            <!--begin::برچسب-->
                                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                                <span class=\"required\">نام نرم افزار</span>
                                                <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                                   title=\"Specify your unique نام نرم افزار\"></i>
                                            </label>
                                            <!--end::برچسب-->
                                            <!--begin::Input-->
                                            <input type=\"text\" class=\"form-control form-control-lg form-control-solid\"
                                                   name=\"name\" placeholder=\"\" value=\"\"/>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class=\"fv-row\">
                                            <!--begin::برچسب-->
                                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-4\">
                                                <span class=\"required\">دسته بندی</span>
                                                <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                                   title=\"انتخاب your app دسته بندی\"></i>
                                            </label>
                                            <!--end::برچسب-->
                                            <!--begin:تنظیمات-->
                                            <div class=\"fv-row\">
                                                <!--begin:Option-->
                                                <label class=\"d-flex flex-stack mb-5 cursیا-pointer\">
                                                    <!--begin:برچسب-->
                                                    <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/خانه/Globe.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-1 svg-icon-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                             width=\"24px\" height=\"24px\"
                                                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                               fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\"
                                                                                      height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z\"
                                                                                      fill=\"#000000\"
                                                                                      fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\"
                                                                                        cx=\"12\" cy=\"10\" r=\"6\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                    <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">دوره های آنلاین سریع</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">ایجاد یک متن متمایز فقط یک سئو است</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:برچسب-->
                                                    <!--begin:Input-->
                                                    <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\"
                                                                   name=\"دسته بندی\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class=\"d-flex flex-stack mb-5 cursیا-pointer\">
                                                    <!--begin:برچسب-->
                                                    <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/چیدمان/چیدمان-4-blocks-2.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-1 svg-icon-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                             width=\"24px\" height=\"24px\"
                                                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\"
                                                                               fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"5\" y=\"5\" width=\"5\" height=\"5\"
                                                                                      rx=\"1\" fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"14\" y=\"5\" width=\"5\" height=\"5\"
                                                                                      rx=\"1\" fill=\"#000000\"
                                                                                      opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"5\" y=\"14\" width=\"5\" height=\"5\"
                                                                                      rx=\"1\" fill=\"#000000\"
                                                                                      opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"14\" y=\"14\" width=\"5\" height=\"5\"
                                                                                      rx=\"1\" fill=\"#000000\"
                                                                                      opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                    <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">بحث های چهره به چهره</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">ایجاد یک ساختار متن روشن فقط یک جنبه است</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:برچسب-->
                                                    <!--begin:Input-->
                                                    <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\"
                                                                   name=\"دسته بندی\" value=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class=\"d-flex flex-stack cursیا-pointer\">
                                                    <!--begin:برچسب-->
                                                    <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/دستگاهs/Watch1.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                             width=\"24px\" height=\"24px\"
                                                                             viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z M9,6 L15,6 C16.6568542,6 18,7.34314575 18,9 L18,15 C18,16.6568542 16.6568542,18 15,18 L9,18 C7.34314575,18 6,16.6568542 6,15 L6,9 C6,7.34314575 7.34314575,6 9,6 Z\"
                                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z\"
                                                                                  fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9,18 L15,18 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,18 Z\"
                                                                                  fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,6 L9,6 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z\"
                                                                                  fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                    <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">آموزش مقدماتی کامل</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">ایجاد یک متن متن روشن برای نوشتن متن</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:برچسب-->
                                                    <!--begin:Input-->
                                                    <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\"
                                                                   name=\"دسته بندی\" value=\"3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end:تنظیمات-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Input group-->
                                        <div class=\"fv-row\">
                                            <!--begin::برچسب-->
                                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-4\">
                                                <span class=\"required\">انتخاب فریمورک</span>
                                                <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                                   title=\"Specify your apps framewیاk\"></i>
                                            </label>
                                            <!--end::برچسب-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer mb-5\">
                                                <!--begin:برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-html5 text-warning fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">HTML5</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Base Web Projec</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" checked=\"checked\"
                                                               name=\"framewیاk\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer mb-5\">
                                                <!--begin:برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-react text-success fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">ReactJS</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Robust و flexible app framewیاk</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"framewیاk\"
                                                               value=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer mb-5\">
                                                <!--begin:برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-angular text-danger fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">Angular</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Powerful data mangement</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"framewیاk\"
                                                               value=\"3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer\">
                                                <!--begin:برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-vuejs text-primary fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">Vue</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Lightweight و responsive framewیاk</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end:Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"framewیاk\"
                                                               value=\"4\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Input group-->
                                        <div class=\"fv-row mb-10\">
                                            <!--begin::برچسب-->
                                            <label class=\"required fs-5 fw-bold mb-2\">پایگاه داده نام</label>
                                            <!--end::برچسب-->
                                            <!--begin::Input-->
                                            <input type=\"text\" class=\"form-control form-control-lg form-control-solid\"
                                                   name=\"dbname\" placeholder=\"\" value=\"master_db\"/>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class=\"fv-row\">
                                            <!--begin::برچسب-->
                                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-4\">
                                                <span class=\"required\">انتخاب پایگاه داده Engine</span>
                                                <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                                   title=\"انتخاب your app پایگاه داده engine\"></i>
                                            </label>
                                            <!--end::برچسب-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer mb-5\">
                                                <!--begin::برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-database text-success fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">MySQL</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Basic MySQL پایگاه داده</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::برچسب-->
                                                <!--begin::Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"dbengine\"
                                                               checked=\"checked\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer mb-5\">
                                                <!--begin::برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-google text-danger fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">Firebase</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\">Google based app data manسنment</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::برچسب-->
                                                <!--begin::Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"dbengine\"
                                                               value=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursیا-pointer\">
                                                <!--begin::برچسب-->
                                                <span class=\"d-flex align-items-center me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol symbol-50px me-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"symbol-label bg-light-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-amazon text-warning fs-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-6\">DynamoDB</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-7 text-muted\"> پایگاه داده</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::برچسب-->
                                                <!--begin::Input-->
                                                <span class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"dbengine\"
                                                               value=\"3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Input group-->
                                        <div class=\"d-flex flex-column mb-7 fv-row\">
                                            <!--begin::برچسب-->
                                            <label class=\"d-flex align-items-center fs-6 fw-bold form-label mb-2\">
                                                <span class=\"required\">نام بر روی کارت</span>
                                                <i class=\"fas fa-exclamation-circle ms-2 fs-7\" data-bs-toggle=\"tooltip\"
                                                   title=\"Specify a card holder's name\"></i>
                                            </label>
                                            <!--end::برچسب-->
                                            <input type=\"text\" class=\"form-control form-control-solid\" placeholder=\"\"
                                                   name=\"card_name\" value=\"محمد ابراهیمی\"/>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class=\"d-flex flex-column mb-7 fv-row\">
                                            <!--begin::برچسب-->
                                            <label class=\"required fs-6 fw-bold form-label mb-2\">شماره کارت</label>
                                            <!--end::برچسب-->
                                            <!--begin::Input wrapper-->
                                            <div class=\"position-relative\">
                                                <!--begin::Input-->
                                                <input type=\"text\" class=\"form-control form-control-solid\"
                                                       placeholder=\"Enter card شماره کارت\" name=\"card_شماره کارت\"
                                                       value=\"4111 1111 1111 1111\"/>
                                                <!--end::Input-->
                                                <!--begin::Card logos-->
                                                <div class=\"position-absolute translate-middle-y top-50 end-0 me-5\">
                                                    <img src=\"/assets/media/svg/card-logos/visa.svg\" alt=\"\"
                                                         class=\"h-25px\"/>
                                                    <img src=\"/assets/media/svg/card-logos/mastercard.svg\" alt=\"\"
                                                         class=\"h-25px\"/>
                                                    <img src=\"/assets/media/svg/card-logos/american-express.svg\" alt=\"\"
                                                         class=\"h-25px\"/>
                                                </div>
                                                <!--end::Card logos-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class=\"row mb-10\">
                                            <!--begin::Col-->
                                            <div class=\"col-md-8 fv-row\">
                                                <!--begin::برچسب-->
                                                <label class=\"required fs-6 fw-bold form-label mb-2\">تاریخ انقضا</label>
                                                <!--end::برچسب-->
                                                <!--begin::Row-->
                                                <div class=\"row fv-row\">
                                                    <!--begin::Col-->
                                                    <div class=\"col-6\">
                                                        <select name=\"card_expiry_month\"
                                                                class=\"form-select form-select-solid\"
                                                                data-control=\"select2\" data-hide-search=\"true\"
                                                                data-placeholder=\"ماه\">
                                                            <option></option>
                                                            <option value=\"1\">1</option>
                                                            <option value=\"2\">2</option>
                                                            <option value=\"3\">3</option>
                                                            <option value=\"4\">4</option>
                                                            <option value=\"5\">5</option>
                                                            <option value=\"6\">6</option>
                                                            <option value=\"7\">7</option>
                                                            <option value=\"8\">8</option>
                                                            <option value=\"9\">9</option>
                                                            <option value=\"10\">10</option>
                                                            <option value=\"11\">11</option>
                                                            <option value=\"12\">12</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class=\"col-6\">
                                                        <select name=\"card_expiry_سال\"
                                                                class=\"form-select form-select-solid\"
                                                                data-control=\"select2\" data-hide-search=\"true\"
                                                                data-placeholder=\"سال\">
                                                            <option></option>
                                                            <option value=\"2021\">2021</option>
                                                            <option value=\"2022\">2022</option>
                                                            <option value=\"2023\">2023</option>
                                                            <option value=\"2024\">2024</option>
                                                            <option value=\"2025\">2025</option>
                                                            <option value=\"2026\">2026</option>
                                                            <option value=\"2027\">2027</option>
                                                            <option value=\"2028\">2028</option>
                                                            <option value=\"2029\">2029</option>
                                                            <option value=\"2030\">2030</option>
                                                            <option value=\"2031\">2031</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class=\"col-md-4 fv-row\">
                                                <!--begin::برچسب-->
                                                <label class=\"d-flex align-items-center fs-6 fw-bold form-label mb-2\">
                                                    <span class=\"required\">CVV</span>
                                                    <i class=\"fas fa-exclamation-circle ms-2 fs-7\"
                                                       data-bs-toggle=\"tooltip\" title=\"Enter a card CVV code\"></i>
                                                </label>
                                                <!--end::برچسب-->
                                                <!--begin::Input wrapper-->
                                                <div class=\"position-relative\">
                                                    <!--begin::Input-->
                                                    <input type=\"text\" class=\"form-control form-control-solid\"
                                                           minlength=\"3\" maxlength=\"4\" placeholder=\"CVV\"
                                                           name=\"card_cvv\"/>
                                                    <!--end::Input-->
                                                    <!--begin::CVV icon-->
                                                    <div class=\"position-absolute translate-middle-y top-50 end-0 me-3\">
                                                        <!--begin::Svg Icon | path: icons/duotone/Shopping/Credit-card.svg-->
                                                        <span class=\"svg-icon svg-icon-2hx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                     version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                       fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"2\" y=\"5\"
                                                                              width=\"20\" height=\"14\" rx=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"2\" y=\"8\" width=\"20\"
                                                                              height=\"3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\" x=\"16\" y=\"14\"
                                                                              width=\"4\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::CVV icon-->
                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class=\"d-flex flex-stack\">
                                            <!--begin::برچسب-->
                                            <div class=\"me-5\">
                                                <label class=\"fs-6 fw-bold form-label\">کارت را برای صورتحساب بیشتر ذخیره
                                                    کنید؟?</label>
                                                <div class=\"fs-7 fw-bold text-gray-400\">اگر به اطلاعات بیشتری نیاز دارید
                                                    ، لطفا برنامه ریزی بودجه را بررسی کنید
                                                </div>
                                            </div>
                                            <!--end::برچسب-->
                                            <!--begin::Switch-->
                                            <label class=\"form-check form-switch form-check-custom form-check-solid\">
                                                <input class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                                       checked=\"checked\"/>
                                                <span class=\"form-check-label fw-bold text-gray-400\">ذخیره کارت</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-element=\"content\">
                                    <div class=\"w-100 text-center\">
                                        <!--begin::Heading-->
                                        <h1 class=\"fw-bolder text-dark mb-3\">رهایی!</h1>
                                        <!--end::Heading-->
                                        <!--begin::توضیحات-->
                                        <div class=\"text-muted fw-bold fs-3\">برنامه خود را برای شروع پروژه خود ثبت
                                            کنید.
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::Illustration-->
                                        <div class=\"text-center px-4 py-15\">
                                            <img src=\"/assets/media/illustrations/todo.png\" alt=\"\"
                                                 class=\"mw-100 mh-150px\"/>
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::عملیات-->
                                <div class=\"d-flex flex-stack pt-10\">
                                    <!--begin::Wrapper-->
                                    <div class=\"me-2\">
                                        <button type=\"button\" class=\"btn btn-lg btn-light-primary me-3\"
                                                data-kt-stepper-action=\"previous\">
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Left-2.svg-->
                                            <span class=\"svg-icon svg-icon-3 me-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.3\"
                                                              transform=\"translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)\"
                                                              x=\"14\" y=\"7\" width=\"2\" height=\"10\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z\"
                                                              fill=\"#000000\" fill-rule=\"nonzero\"
                                                              transform=\"translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->برگشت
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type=\"button\" class=\"btn btn-lg btn-primary\"
                                                data-kt-stepper-action=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"indicator-label\">ثبت
                                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-3 ms-2 me-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                         height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                           fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                                  transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                                  x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"
                                                                  transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                    <!--end::Svg Icon--></span>
                                            <span class=\"indicator-progress\">لطفا صبر کنید
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-border spinner-border-sm align-middle ms-2\"></span></span>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-lg btn-primary\"
                                                data-kt-stepper-action=\"next\">ادامه
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                            <span class=\"svg-icon svg-icon-3 ms-1 me-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                                              transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                              x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                              fill=\"#000000\" fill-rule=\"nonzero\"
                                                              transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon--></button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::عملیات-->
                            </form>
                            <!--end::Fیاm-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - ایجاد کردن نرم افزار-->
    <!--begin::Modal - ارتقا دهید plan-->
    <div class=\"modal fade\" id=\"kt_modal_upgrade_plan\" tabindex=\"-1\" aria-hidden=\"true\">
        <!--begin::Modal dialog-->
        <div class=\"modal-dialog modal-xl\">
            <!--begin::Modal content-->
            <div class=\"modal-content rounded\">
                <!--begin::Modal header-->
                <div class=\"modal-header justify-content-end border-0 pb-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                       fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\"
                                              transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                              x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class=\"modal-body pt-0 pb-15 px-5 px-xl-20\">
                    <!--begin::Heading-->
                    <div class=\"mb-13 text-center\">
                        <h1 class=\"mb-3\">یک برنامه را ارتقا کنید</h1>
                        <div class=\"text-gray-400 fw-bold fs-5\">اگر به اطلاعات لازم دارید ، لطفاً بررسی کنید
                            <a href=\"#\" class=\"link-primary fw-bolder\">دستورالعمل قیمت گذاری</a>.
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::برنامه ریزی ها-->
                    <div class=\"d-flex flex-column\">
                        <!--begin::Nav group-->
                        <div class=\"nav-group nav-group-outline mx-auto\" data-kt-buttons=\"true\">
                            <a href=\"#\"
                               class=\"btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active\"
                               data-kt-plan=\"month\">ماهانه</a>
                            <a href=\"#\" class=\"btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3\"
                               data-kt-plan=\"annual\">سالانه</a>
                        </div>
                        <!--end::Nav group-->
                        <!--begin::Row-->
                        <div class=\"row mt-10\">
                            <!--begin::Col-->
                            <div class=\"col-lg-6 mb-10 mb-lg-0\">
                                <!--begin::Tabs-->
                                <div class=\"nav flex-column\">
                                    <!--begin::Tab link-->
                                    <div class=\"nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6\"
                                         data-bs-toggle=\"tab\" data-bs-target=\"#kt_upgrade_plan_startup\">
                                        <!--end::توضیحات-->
                                        <div class=\"d-flex align-items-center me-2\">
                                            <!--begin::Radio-->
                                            <div class=\"form-check form-check-custom form-check-solid form-check-success me-6\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"plan\"
                                                       checked=\"checked\" value=\"startup\"/>
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class=\"flex-grow-1\">
                                                <h2 class=\"d-flex align-items-center fs-2 fw-bolder flex-wrap\">استارت
                                                    آپ</h2>
                                                <div class=\"fw-bold opacity-50\">بهرتین استارتاپ</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class=\"ms-5\">
                                            <span class=\"mb-2\"> تومان</span>
                                            <span class=\"fs-3x fw-bolder\" data-kt-plan-price-month=\"39\"
                                                  data-kt-plan-price-annual=\"399\">39</span>
                                            <span class=\"fs-7 opacity-50\">/
\t\t\t\t\t\t\t\t\t\t\t\t<span data-kt-element=\"period\">دوشنبه</span></span>
                                        </div>
                                        <!--end::قیمت-->
                                    </div>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <div class=\"nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6\"
                                         data-bs-toggle=\"tab\" data-bs-target=\"#kt_upgrade_plan_advanced\">
                                        <!--end::توضیحات-->
                                        <div class=\"d-flex align-items-center me-2\">
                                            <!--begin::Radio-->
                                            <div class=\"form-check form-check-custom form-check-solid form-check-success me-6\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"plan\"
                                                       value=\"advanced\"/>
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class=\"flex-grow-1\">
                                                <h2 class=\"d-flex align-items-center fs-2 fw-bolder flex-wrap\">
                                                    پیشرفته</h2>
                                                <div class=\"fw-bold opacity-50\">بهترین اندازه</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class=\"ms-5\">
                                            <span class=\"mb-2\"> تومان</span>
                                            <span class=\"fs-3x fw-bolder\" data-kt-plan-price-month=\"339\"
                                                  data-kt-plan-price-annual=\"3399\">339</span>
                                            <span class=\"fs-7 opacity-50\">/
\t\t\t\t\t\t\t\t\t\t\t\t<span data-kt-element=\"period\">دوشنبه</span></span>
                                        </div>
                                        <!--end::قیمت-->
                                    </div>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <div class=\"nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6\"
                                         data-bs-toggle=\"tab\" data-bs-target=\"#kt_upgrade_plan_enterprise\">
                                        <!--end::توضیحات-->
                                        <div class=\"d-flex align-items-center me-2\">
                                            <!--begin::Radio-->
                                            <div class=\"form-check form-check-custom form-check-solid form-check-success me-6\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"plan\"
                                                       value=\"enterprise\"/>
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class=\"flex-grow-1\">
                                                <h2 class=\"d-flex align-items-center fs-2 fw-bolder flex-wrap\">شرکت،
                                                    پروژه
                                                    <span class=\"badge badge-light-success ms-2 fs-7\">محبوب</span></h2>
                                                <div class=\"fw-bold opacity-50\">تیم</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class=\"ms-5\">
                                            <span class=\"mb-2\"> تومان</span>
                                            <span class=\"fs-3x fw-bolder\" data-kt-plan-price-month=\"999\"
                                                  data-kt-plan-price-annual=\"9999\">999</span>
                                            <span class=\"fs-7 opacity-50\">/
\t\t\t\t\t\t\t\t\t\t\t\t<span data-kt-element=\"period\">دوشنبه</span></span>
                                        </div>
                                        <!--end::قیمت-->
                                    </div>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <div class=\"nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6\">
                                        <!--end::توضیحات-->
                                        <div class=\"d-flex align-items-center me-2\">
                                            <!--begin::Radio-->
                                            <div class=\"form-check form-check-custom form-check-solid form-check-success me-6\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"plan\"
                                                       value=\"custom\"/>
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class=\"flex-grow-1\">
                                                <h2 class=\"d-flex align-items-center fs-2 fw-bolder flex-wrap\">
                                                    انتخابی</h2>
                                                <div class=\"fw-bold opacity-50\">دوباره مجوز سفارشی را دوباره تهیه کنید
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class=\"ms-5\">
                                            <a href=\"#\" class=\"btn btn-sm btn-primary\">تماس با ما</a>
                                        </div>
                                        <!--end::قیمت-->
                                    </div>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class=\"col-lg-6\">
                                <!--begin::Tab content-->
                                <div class=\"tab-content rounded h-100 bg-light p-10\">
                                    <!--begin::Tab Pane-->
                                    <div class=\"tab-pane fade show active\" id=\"kt_upgrade_plan_startup\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-5\">
                                            <h2 class=\"fw-bolder text-dark\">برنامه ی استارت اپ شما چیست؟?</h2>
                                            <div class=\"text-gray-400 fw-bold\"> استارت آپ جدید</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class=\"pt-1\">
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 10 کاربر فعال</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 30 ادغام پروژه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول تجزیه و تحلیل</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">ماژول حسابداری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">بستر شبکه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">فضای نامحدود ابر</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class=\"tab-pane fade\" id=\"kt_upgrade_plan_advanced\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-5\">
                                            <h2 class=\"fw-bolder text-dark\">برنامه ی استارت اپ شما چیست؟?</h2>
                                            <div class=\"text-gray-400 fw-bold\">بنگاه اقتصادی</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class=\"pt-1\">
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 10 کاربر فعال</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 30 ادغام پروژه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول تجزیه و تحلیل</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول حسابداری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">بستر شبکه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"fw-bold fs-5 text-gray-400 flex-grow-1\">فضای نامحدود ابر</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Errیا-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\"
                                                                  fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class=\"tab-pane fade\" id=\"kt_upgrade_plan_enterprise\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-5\">
                                            <h2 class=\"fw-bolder text-dark\">برنامه ی استارت اپ شما چیست؟?</h2>
                                            <div class=\"text-gray-400 fw-bold\">بنگاه اقتصادی
                                            </div>
                                        </div>

                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class=\"pt-1\">
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 10 کاربر فعال</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">حداکثر 30 ادغام پروژه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول تجزیه و تحلیل</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">ماژول حسابداری</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center mb-7\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">بستر شبکه</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                            <!--begin::مورد-->
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"fw-bold fs-5 text-gray-700 flex-grow-1\">فضای نامحدود ابر</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class=\"svg-icon svg-icon-1 svg-icon-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                             height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\"
                                                                    r=\"10\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z\"
                                                                  fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::مورد-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::برنامه ریزی ها-->
                    <!--begin::عملیات-->
                    <div class=\"d-flex flex-center flex-row-fluid pt-12\">
                        <button type=\"ریست\" class=\"btn btn-white me-3\" data-bs-dismiss=\"modal\">انصراف</button>
                        <button type=\"submit\" class=\"btn btn-primary\">ارتقا طرح</button>
                    </div>
                    <!--end::عملیات-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - ارتقا دهید plan-->
    <!--end::مدال-->
    <!--begin::Scrolltop-->
    <div id=\"kt_scrolltop\" class=\"scrolltop\" data-kt-scrolltop=\"true\">
        <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
        <span class=\"svg-icon\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\"/>
\t\t\t\t\t\t<path d=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\"
                              fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t</span>
        <!--end::Svg Icon-->
    </div>

    <!--end::Scrolltop-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    {% block javascript %}
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src=\"/assets/plugins/global/plugins.bundle.js\"></script>
    <script src=\"/assets/js/scripts.bundle.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\"
            integrity=\"sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj\"
            crossorigin=\"anonymous\"></script>

    <!--end::Global Javascript Bundle-->
    <!--begin::Pسن انتخابی Javascript(used by this pسن)-->
    <script src=\"{{ asset ('assets/js/custom/modals/new-target.js') }}\" ></script>
<script src=\"{{ asset ('assets/js/custom/widgets.js') }}\"></script>
<script src=\"/assets/js/custom/apps/chat/chat.js\"></script>
<script src=\"/assets/js/custom/modals/create-app.js\"></script>
<script src=\"/assets/js/custom/modals/upgrade-plan.js\"></script>
<!--end::Pسن انتخابی Javascript-->
<!--end::Javascript-->
{% endblock %}
    </body>
{% endblock body %}
<!--end::Body-->
</html>", "Doshbord.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\Doshbord.html.twig");
    }
}
