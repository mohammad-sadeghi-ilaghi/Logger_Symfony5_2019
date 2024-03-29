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

/* /User/doshbord_user.html.twig */
class __TwigTemplate_a0147415fb27a8f9c2ede7b5c9dbb752631d75cc8f8ce8a8301cc94ad6483101 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'built' => [$this, 'block_built'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Doshbord.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/User/doshbord_user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/User/doshbord_user.html.twig"));

        // line 6
        $context["i"] = 1;
        // line 7
        $context["limit"] = 0;
        // line 1
        $this->parent = $this->loadTemplate("Doshbord.html.twig", "/User/doshbord_user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    داشبورد
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_built($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "built"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "built"));

        // line 9
        echo "    <div data-kt-menu-trigger=\"click\" id=\"package_scrole\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Shopping/Box2.svg-->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z\"
                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z\"
                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">پکیج ها</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</span>
        <div class=\"menu-sub menu-sub-accordion menu-active-bg\">
            <div class=\"menu-item\">
                <a class=\"menu-link\" id=\"list_package\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_packages");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    <span class=\"menu-title\">لیست پکیج ها</span>
                </a>
            </div>
            ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "                <div class=\"menu-item\">
                    <a class=\"menu-link\" id=\"add_package\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_packages");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-title\">اضافه کردن </span>
                    </a>
                </div>
            ";
        }
        // line 50
        echo "            <div class=\"menu-item\">
                <a class=\"menu-link\" id=\"buy_package\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_package");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    <span class=\"menu-title\">خرید پکیج</span>
                </a>
            </div>
            <div class=\"menu-item\">
                <a class=\"menu-link\" id=\"bought_package\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bought_package");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    <span class=\"menu-title\">لیست اپلیکیشن های خریداری شده</span>
                </a>
            </div>
        </div>
    </div>


    <div data-kt-menu-trigger=\"click\" id=\"Applications_scrole\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Shopping/Box2.svg-->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z\"
                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z\"
                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">اپلیکیشن ها</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</span>
        <div class=\"menu-sub menu-sub-accordion menu-active-bg\">
            <div class=\"menu-item\">
                <a class=\"menu-link\" id=\"list_Applications\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_app");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    <span class=\"menu-title\">لیست اپلیکیشن ها</span>
                </a>
            </div>
            <div class=\"menu-item\">
                <a class=\"menu-link\" id=\"add_application\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_app");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
                                                    <span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    <span class=\"menu-title\">افزودن</span>
                </a>
            </div>
        </div>
    </div>


    ";
        // line 113
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 114
            echo "        <div data-kt-menu-trigger=\"click\" id=\"article_scrole\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Shopping/Box2.svg-->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z\"
                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z\"
                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">مقالات</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</span>
            <div class=\"menu-sub menu-sub-accordion menu-active-bg\">
                <div class=\"menu-item\">
                    <a class=\"menu-link\" id=\"list_artticle\" href=\"";
            // line 138
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_article");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-title\">لیست مقالات</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a class=\"menu-link\" id=\"add_article\" href=\"";
            // line 146
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_article");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-title\">اضافه کردن مقاله </span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a class=\"menu-link\" id=\"list_category\" href=\"";
            // line 154
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_category");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-title\">لیست دسته بندی ها</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a class=\"menu-link\" id=\"add_category\" href=\"";
            // line 162
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_category");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-title\">اضافه کردن دسته بندی </span>
                    </a>
                </div>
            </div>
        </div>

    ";
        }
        // line 173
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 176
        echo "    <div class=\"container\">
        <div class=\"row ml-2 mr-4 justify-content-center\">
            <div class=\"col-md-auto g-2 card text-center\" style=\"width: 18rem;\">

                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title border-top-5 border-info text-muted\"><a
                                href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Log_deatil_type", ["type" => "INFO"]);
        echo "\">خطا هایinfo</a></h5>
                    <hr>
                    <p class=\"mt-11 card-text\">";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["INFO"]) || array_key_exists("INFO", $context) ? $context["INFO"] : (function () { throw new RuntimeError('Variable "INFO" does not exist.', 184, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-auto g-2 card text-center\" style=\"width: 18rem;\">
                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title  border-info text-muted\"><a
                                href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Log_deatil_type", ["type" => "DANGER"]);
        echo "\">خطاهایdanger</a></h5>
                    <hr>
                    <p class=\"mt-11 card-text\">";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["DANGER"]) || array_key_exists("DANGER", $context) ? $context["DANGER"] : (function () { throw new RuntimeError('Variable "DANGER" does not exist.', 192, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-auto g-2 card text-center\" style=\"width: 18rem;\">

                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title border-top-5 border-info text-muted\"><a
                                href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Log_deatil_type", ["type" => "ERROR"]);
        echo "\">خطاهای error</a></h5>
                    <hr>
                    <p class=\"mt-11 card-text\">";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["ERROR"]) || array_key_exists("ERROR", $context) ? $context["ERROR"] : (function () { throw new RuntimeError('Variable "ERROR" does not exist.', 201, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-auto g-2  card text-center\" style=\"width: 18rem;\">

                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title border-top-5 border-info text-muted\"><a
                                href=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Log_deatil_type", ["type" => "WARNING"]);
        echo "\">خطاهای warining</a></h5>
                    <hr class=\"bg-dark\">
                    <p class=\"mt-11 card-text\">";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["WARNING"]) || array_key_exists("WARNING", $context) ? $context["WARNING"] : (function () { throw new RuntimeError('Variable "WARNING" does not exist.', 210, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row bg-light  justify-content-center g-5 rounded-3 border  border-dark \">
            <div class=\"col \">
                <table class=\"table gx-7 \">
                    <thead class=\"thead-dark border-gray-400 border-bottom-1\">
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">نوع</th>
                        <th scope=\"col\">توضیحات</th>
                        <th scope=\"col\">نام اپ</th>
                    </tr>
                    </thead>
                    <tbody class=\"\" id=\"tboby_logs\">
                    ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["last_logs"]) || array_key_exists("last_logs", $context) ? $context["last_logs"] : (function () { throw new RuntimeError('Variable "last_logs" does not exist.', 227, $this->source); })()), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["last_log"]) {
            // line 228
            echo "                        ";
            $context["limit"] = twig_get_attribute($this->env, $this->source, $context["last_log"], "id", [], "any", false, false, false, 228);
            // line 229
            echo "                        <tr>
                            <th scope=\"row\">";
            // line 230
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 230, $this->source); })()), "html", null, true);
            echo "</th>
                            <td>
                                <a class=\"\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last_log"], "id", [], "any", false, false, false, 232), "html", null, true);
            echo "\"
                                   role=\"button\">
                                    ";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last_log"], "type", [], "any", false, false, false, 234), "html", null, true);
            echo "
                                </a>
                                <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\"
                                     id=\"offcanvasExample";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last_log"], "id", [], "any", false, false, false, 237), "html", null, true);
            echo "\">
                                    <div class=\"offcanvas-header bg-light-success\">
                                        <h5 class=\"offcanvas-title\"
                                            id=\"offcanvasExampleLabel\">";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["last_log"], "user", [], "any", false, false, false, 240), "eraseCredentials", [], "any", false, false, false, 240), "html", null, true);
            echo "</h5>
                                        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"
                                                aria-label=\"Close\"></button>
                                    </div>
                                    <hr>
                                    <div class=\"offcanvas-body bg-light\">
                                        <div>
                                            <p class=\"rounded-2 btn-outline-primary\"><span
                                                        class=\"text-dark btn-outline-primary fw-bold\">نوع لاگ: </span>";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last_log"], "type", [], "any", false, false, false, 248), "html", null, true);
            echo "
                                                <span class=\"text-muted\"></span></p>
                                            <p class=\"rounded-2 btn-outline-primary\"><span
                                                        class=\"text-dark btn-outline-primary fw-bold\">نام اپلیکیشن : </span>";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["last_log"], "app", [], "any", false, false, false, 251), "name", [], "any", false, false, false, 251), "html", null, true);
            echo "
                                                <span class=\"text-muted\"></span></p>
                                            <p class=\"rounded-2 btn-outline-primary\"><span
                                                        class=\"text-dark btn-outline-primary fw-bold\">تاریخ ثبت لاگ : </span>";
            // line 254
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last_log"], "date", [], "any", false, false, false, 254), "Y/m/d,  h:m:s"), "html", null, true);
            echo "
                                                <span class=\"text-muted\"></span></p>
                                            <p class=\"rounded-2 btn-outline-primary\"><span
                                                        class=\"text-dark btn-outline-primary fw-bold\">توضیحات لاگ : </span>";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last_log"], "description", [], "any", false, false, false, 257), "html", null, true);
            echo "
                                                <span class=\"text-muted\"></span></p>
                                            <p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark fw-bold\">پارامتر های لاگ :</span>{
                                                ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["last_log"], "parameters", [], "any", false, false, false, 260));
            foreach ($context['_seq'] as $context["key"] => $context["parameter"]) {
                // line 261
                echo "                                                    <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $context["parameter"], "html", null, true);
                echo ", </span>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['parameter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "                                                }</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last_log"], "description", [], "any", false, false, false, 268), "html", null, true);
            echo "</td>
                            <td>";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["last_log"], "app", [], "any", false, false, false, 269), "name", [], "any", false, false, false, 269), "html", null, true);
            echo "</td>
                        </tr>
                        ";
            // line 271
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 271, $this->source); })()) + 1);
            // line 272
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last_log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"row gy-4 mt-5\" id=\"more_log_div\">
            <div class=\"col-auto\">
                <button class=\"btn-outline-dark btn-primary rounded-3  p-3 g-5\" id=\"more_log\">بیشتر</button>
            </div>
        </div>
        <div class=\"row gy-4 mt-5 justify-content-center\">
            <div class=\"col-md-5\" id=\"link_xcel\">
                <div class=\"input-group\">
                <label for=\"xcel_log\">تعداد لاگ های آخر که به صورت اکسل بهتان داده میشود را وارد کتید.</label>
                <input type=\"number\" class=\"input-control\" id=\"xcel_log\">
                <button class=\"btn-outline-success\" onclick=\"getNumberLog()\">ارسال</button>
                </div>
            </div>
        </div>
        <div class=\"row me-2 ms-4 mt-5 justify-content-center\">
            <div class=\"col-md-auto g-3 card text-center\" style=\"width: 18rem;\">

                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title border-top-5 border-info text-muted\">مجموعه لاگ های ثبت شده</h5>
                    <hr>
                    <p class=\"mt-11 card-text\">";
        // line 297
        echo twig_escape_filter($this->env, (isset($context["total_logs"]) || array_key_exists("total_logs", $context) ? $context["total_logs"] : (function () { throw new RuntimeError('Variable "total_logs" does not exist.', 297, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-auto g-3  card text-center\" style=\"width: 18rem;\">
                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title  border-info text-muted\">مجموعه لاگ های هفته اخیر</h5>
                    <hr>
                    <p class=\"mt-11 card-text\">";
        // line 304
        echo twig_escape_filter($this->env, (isset($context["log_week_ago"]) || array_key_exists("log_week_ago", $context) ? $context["log_week_ago"] : (function () { throw new RuntimeError('Variable "log_week_ago" does not exist.', 304, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-auto g-3 card text-center\" style=\"width: 18rem;\">

                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title border-top-5 border-info text-muted\">مجموعه لاگ های ماه اخیر</h5>
                    <hr>
                    <p class=\"mt-11 card-text\">";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["log_month_ago"]) || array_key_exists("log_month_ago", $context) ? $context["log_month_ago"] : (function () { throw new RuntimeError('Variable "log_month_ago" does not exist.', 312, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>

        <div class=\"row m-10\">

        </div>
    </div>
    <div id=\"nameMohammad\"></div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

    <script language=\"JavaScript\">
        \$(document).ready(function () {
            \$('#more_log').click(function () {
                \$.post('";
        // line 327
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getLogs");
        echo "', {id: '";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 327, $this->source); })()), "html", null, true);
        echo "'}, function (data) {
                    if (data.length <= 1) {
                        document.getElementById('more_log_div').style.display = 'none';
                        console.log(data)
                    } else {
                        for (i = 0; i < data.length; i++) {
                            var e = \$('<tr>' +
                                '<th scope=\"row\">' +
                                (data[0]['number_log'] * 10 + i + 1) +
                                '</th><td>'
                                + '<a class=\"\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample' + data[i]['id'] + '\" role=\"button\">' + data[i]['type'] + '</a>' +
                                '<div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"offcanvasExample' + data[i]['id'] + '\">' +
                                '<div class=\"offcanvas-header bg-light-success\"><h5 class=\"offcanvas-title\"id=\"offcanvasExampleLabel\"> ' +
                                '</h5><button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"' +
                                'aria-label=\"Close\"></button></div><hr>' +
                                +'<div class=\"offcanvas-body bg-light\"><div>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">نوع لاگ: </span>' + data[i]['type'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">نام اپلیکیشن : </span>' + data[i]['name_app'] +
                                '<span class=\"text-muted\"></span></p><p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">تاریخ ثبت لاگ : </span>' + data[i]['date'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">توضیحات لاگ : </span>' + data[i]['description'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark fw-bold\">پارامتر های لاگ :</span>{' + '<span class=\"text-muted\">' + data[i]['parameters'] + '</span>' + '}'
                                + '</p></div></div></div>' +
                                '</td><td>' + data[i]['description'] + '</td><td>' + data[i]['name_app'] + '</td></tr>');
                            \$('#tboby_logs').append(e);
                        }
                    }
                });
            });
        });
    </script>
    <script>
        function  getNumberLog(){
            console.log(document.getElementById('xcel_log').value)
            \$.post('";
        // line 363
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getXcelFile");
        echo "',  {number: document.getElementById('xcel_log').value}, function (value) {
                var e = '<a class=\"link-info btn-primery\" href= \"'+ '";
        // line 364
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "' +  value + '\"' + '>دانلود</a>'
                document.getElementById('link_xcel').innerHTML = null;
                document.getElementById('link_xcel').innerHTML = e;

            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/User/doshbord_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 364,  610 => 363,  569 => 327,  551 => 312,  540 => 304,  530 => 297,  504 => 273,  498 => 272,  496 => 271,  491 => 269,  487 => 268,  480 => 263,  469 => 261,  465 => 260,  459 => 257,  453 => 254,  447 => 251,  441 => 248,  430 => 240,  424 => 237,  418 => 234,  413 => 232,  408 => 230,  405 => 229,  402 => 228,  398 => 227,  378 => 210,  373 => 208,  363 => 201,  358 => 199,  348 => 192,  343 => 190,  334 => 184,  329 => 182,  321 => 176,  311 => 175,  300 => 173,  286 => 162,  275 => 154,  264 => 146,  253 => 138,  227 => 114,  225 => 113,  211 => 102,  200 => 94,  162 => 59,  151 => 51,  148 => 50,  137 => 42,  134 => 41,  132 => 40,  122 => 33,  96 => 9,  86 => 8,  75 => 3,  65 => 2,  54 => 1,  52 => 7,  50 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Doshbord.html.twig' %}
{% block title %}
    داشبورد
{% endblock %}

                    {% set i = 1 %}
                    {% set limit = 0 %}
{% block built %}
    <div data-kt-menu-trigger=\"click\" id=\"package_scrole\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Shopping/Box2.svg-->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z\"
                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z\"
                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">پکیج ها</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</span>
        <div class=\"menu-sub menu-sub-accordion menu-active-bg\">
            <div class=\"menu-item\">
                <a class=\"menu-link\" id=\"list_package\" href=\"{{ path('list_packages') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    <span class=\"menu-title\">لیست پکیج ها</span>
                </a>
            </div>
            {% if is_granted(\"ROLE_ADMIN\") %}
                <div class=\"menu-item\">
                    <a class=\"menu-link\" id=\"add_package\" href=\"{{ path('add_packages') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-title\">اضافه کردن </span>
                    </a>
                </div>
            {% endif %}
            <div class=\"menu-item\">
                <a class=\"menu-link\" id=\"buy_package\" href=\"{{ path('buy_package') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    <span class=\"menu-title\">خرید پکیج</span>
                </a>
            </div>
            <div class=\"menu-item\">
                <a class=\"menu-link\" id=\"bought_package\" href=\"{{ path('bought_package') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    <span class=\"menu-title\">لیست اپلیکیشن های خریداری شده</span>
                </a>
            </div>
        </div>
    </div>


    <div data-kt-menu-trigger=\"click\" id=\"Applications_scrole\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Shopping/Box2.svg-->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z\"
                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z\"
                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">اپلیکیشن ها</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</span>
        <div class=\"menu-sub menu-sub-accordion menu-active-bg\">
            <div class=\"menu-item\">
                <a class=\"menu-link\" id=\"list_Applications\" href=\"{{ path('list_app') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    <span class=\"menu-title\">لیست اپلیکیشن ها</span>
                </a>
            </div>
            <div class=\"menu-item\">
                <a class=\"menu-link\" id=\"add_application\" href=\"{{ path('add_app') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
                                                    <span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    <span class=\"menu-title\">افزودن</span>
                </a>
            </div>
        </div>
    </div>


    {% if is_granted(\"ROLE_ADMIN\") %}
        <div data-kt-menu-trigger=\"click\" id=\"article_scrole\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotone/Shopping/Box2.svg-->
\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                     height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z\"
                                                              fill=\"#000000\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z\"
                                                              fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">مقالات</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t</span>
            <div class=\"menu-sub menu-sub-accordion menu-active-bg\">
                <div class=\"menu-item\">
                    <a class=\"menu-link\" id=\"list_artticle\" href=\"{{ path('list_article') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-title\">لیست مقالات</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a class=\"menu-link\" id=\"add_article\" href=\"{{ path('add_article') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-title\">اضافه کردن مقاله </span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a class=\"menu-link\" id=\"list_category\" href=\"{{ path('list_category') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-title\">لیست دسته بندی ها</span>
                    </a>
                </div>
                <div class=\"menu-item\">
                    <a class=\"menu-link\" id=\"add_category\" href=\"{{ path('add_category') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-title\">اضافه کردن دسته بندی </span>
                    </a>
                </div>
            </div>
        </div>

    {% endif %}

{% endblock %}
{% block main %}
    <div class=\"container\">
        <div class=\"row ml-2 mr-4 justify-content-center\">
            <div class=\"col-md-auto g-2 card text-center\" style=\"width: 18rem;\">

                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title border-top-5 border-info text-muted\"><a
                                href=\"{{ path('Log_deatil_type', {'type': 'INFO'}) }}\">خطا هایinfo</a></h5>
                    <hr>
                    <p class=\"mt-11 card-text\">{{ INFO }}</p>
                </div>
            </div>
            <div class=\"col-md-auto g-2 card text-center\" style=\"width: 18rem;\">
                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title  border-info text-muted\"><a
                                href=\"{{ path('Log_deatil_type', {'type': 'DANGER'}) }}\">خطاهایdanger</a></h5>
                    <hr>
                    <p class=\"mt-11 card-text\">{{ DANGER }}</p>
                </div>
            </div>
            <div class=\"col-md-auto g-2 card text-center\" style=\"width: 18rem;\">

                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title border-top-5 border-info text-muted\"><a
                                href=\"{{ path('Log_deatil_type', {'type': 'ERROR'}) }}\">خطاهای error</a></h5>
                    <hr>
                    <p class=\"mt-11 card-text\">{{ ERROR }}</p>
                </div>
            </div>
            <div class=\"col-md-auto g-2  card text-center\" style=\"width: 18rem;\">

                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title border-top-5 border-info text-muted\"><a
                                href=\"{{ path('Log_deatil_type', {'type': 'WARNING'}) }}\">خطاهای warining</a></h5>
                    <hr class=\"bg-dark\">
                    <p class=\"mt-11 card-text\">{{ WARNING }}</p>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row bg-light  justify-content-center g-5 rounded-3 border  border-dark \">
            <div class=\"col \">
                <table class=\"table gx-7 \">
                    <thead class=\"thead-dark border-gray-400 border-bottom-1\">
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">نوع</th>
                        <th scope=\"col\">توضیحات</th>
                        <th scope=\"col\">نام اپ</th>
                    </tr>
                    </thead>
                    <tbody class=\"\" id=\"tboby_logs\">
                    {% for last_log  in last_logs|slice(0,10) %}
                        {% set limit = last_log.id %}
                        <tr>
                            <th scope=\"row\">{{ i }}</th>
                            <td>
                                <a class=\"\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample{{ last_log.id }}\"
                                   role=\"button\">
                                    {{ last_log.type }}
                                </a>
                                <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\"
                                     id=\"offcanvasExample{{ last_log.id }}\">
                                    <div class=\"offcanvas-header bg-light-success\">
                                        <h5 class=\"offcanvas-title\"
                                            id=\"offcanvasExampleLabel\">{{ last_log.user.eraseCredentials }}</h5>
                                        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"
                                                aria-label=\"Close\"></button>
                                    </div>
                                    <hr>
                                    <div class=\"offcanvas-body bg-light\">
                                        <div>
                                            <p class=\"rounded-2 btn-outline-primary\"><span
                                                        class=\"text-dark btn-outline-primary fw-bold\">نوع لاگ: </span>{{ last_log.type }}
                                                <span class=\"text-muted\"></span></p>
                                            <p class=\"rounded-2 btn-outline-primary\"><span
                                                        class=\"text-dark btn-outline-primary fw-bold\">نام اپلیکیشن : </span>{{ last_log.app.name }}
                                                <span class=\"text-muted\"></span></p>
                                            <p class=\"rounded-2 btn-outline-primary\"><span
                                                        class=\"text-dark btn-outline-primary fw-bold\">تاریخ ثبت لاگ : </span>{{ last_log.date|date(\"Y/m/d,  h:m:s\") }}
                                                <span class=\"text-muted\"></span></p>
                                            <p class=\"rounded-2 btn-outline-primary\"><span
                                                        class=\"text-dark btn-outline-primary fw-bold\">توضیحات لاگ : </span>{{ last_log.description }}
                                                <span class=\"text-muted\"></span></p>
                                            <p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark fw-bold\">پارامتر های لاگ :</span>{
                                                {% for key,parameter in last_log.parameters %}
                                                    <span class=\"text-muted\">{{ key }}:{{ parameter }}, </span>
                                                {% endfor %}
                                                }</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ last_log.description }}</td>
                            <td>{{ last_log.app.name }}</td>
                        </tr>
                        {% set i = i + 1 %}
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"row gy-4 mt-5\" id=\"more_log_div\">
            <div class=\"col-auto\">
                <button class=\"btn-outline-dark btn-primary rounded-3  p-3 g-5\" id=\"more_log\">بیشتر</button>
            </div>
        </div>
        <div class=\"row gy-4 mt-5 justify-content-center\">
            <div class=\"col-md-5\" id=\"link_xcel\">
                <div class=\"input-group\">
                <label for=\"xcel_log\">تعداد لاگ های آخر که به صورت اکسل بهتان داده میشود را وارد کتید.</label>
                <input type=\"number\" class=\"input-control\" id=\"xcel_log\">
                <button class=\"btn-outline-success\" onclick=\"getNumberLog()\">ارسال</button>
                </div>
            </div>
        </div>
        <div class=\"row me-2 ms-4 mt-5 justify-content-center\">
            <div class=\"col-md-auto g-3 card text-center\" style=\"width: 18rem;\">

                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title border-top-5 border-info text-muted\">مجموعه لاگ های ثبت شده</h5>
                    <hr>
                    <p class=\"mt-11 card-text\">{{ total_logs }}</p>
                </div>
            </div>
            <div class=\"col-md-auto g-3  card text-center\" style=\"width: 18rem;\">
                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title  border-info text-muted\">مجموعه لاگ های هفته اخیر</h5>
                    <hr>
                    <p class=\"mt-11 card-text\">{{ log_week_ago }}</p>
                </div>
            </div>
            <div class=\"col-md-auto g-3 card text-center\" style=\"width: 18rem;\">

                <div class=\"card-body rounded-3 col border-light border-5 bg-light\">
                    <h5 class=\"card-title border-top-5 border-info text-muted\">مجموعه لاگ های ماه اخیر</h5>
                    <hr>
                    <p class=\"mt-11 card-text\">{{ log_month_ago }}</p>
                </div>
            </div>
        </div>

        <div class=\"row m-10\">

        </div>
    </div>
    <div id=\"nameMohammad\"></div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

    <script language=\"JavaScript\">
        \$(document).ready(function () {
            \$('#more_log').click(function () {
                \$.post('{{ (path('getLogs')) }}', {id: '{{ limit }}'}, function (data) {
                    if (data.length <= 1) {
                        document.getElementById('more_log_div').style.display = 'none';
                        console.log(data)
                    } else {
                        for (i = 0; i < data.length; i++) {
                            var e = \$('<tr>' +
                                '<th scope=\"row\">' +
                                (data[0]['number_log'] * 10 + i + 1) +
                                '</th><td>'
                                + '<a class=\"\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample' + data[i]['id'] + '\" role=\"button\">' + data[i]['type'] + '</a>' +
                                '<div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"offcanvasExample' + data[i]['id'] + '\">' +
                                '<div class=\"offcanvas-header bg-light-success\"><h5 class=\"offcanvas-title\"id=\"offcanvasExampleLabel\"> ' +
                                '</h5><button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"' +
                                'aria-label=\"Close\"></button></div><hr>' +
                                +'<div class=\"offcanvas-body bg-light\"><div>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">نوع لاگ: </span>' + data[i]['type'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">نام اپلیکیشن : </span>' + data[i]['name_app'] +
                                '<span class=\"text-muted\"></span></p><p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">تاریخ ثبت لاگ : </span>' + data[i]['date'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark btn-outline-primary fw-bold\">توضیحات لاگ : </span>' + data[i]['description'] +
                                '<span class=\"text-muted\"></span></p>' +
                                '<p class=\"rounded-2 btn-outline-primary\"><span class=\"text-dark fw-bold\">پارامتر های لاگ :</span>{' + '<span class=\"text-muted\">' + data[i]['parameters'] + '</span>' + '}'
                                + '</p></div></div></div>' +
                                '</td><td>' + data[i]['description'] + '</td><td>' + data[i]['name_app'] + '</td></tr>');
                            \$('#tboby_logs').append(e);
                        }
                    }
                });
            });
        });
    </script>
    <script>
        function  getNumberLog(){
            console.log(document.getElementById('xcel_log').value)
            \$.post('{{ path('getXcelFile') }}',  {number: document.getElementById('xcel_log').value}, function (value) {
                var e = '<a class=\"link-info btn-primery\" href= \"'+ '{{ path('index') }}' +  value + '\"' + '>دانلود</a>'
                document.getElementById('link_xcel').innerHTML = null;
                document.getElementById('link_xcel').innerHTML = e;

            });
        }
    </script>
{% endblock %}
", "/User/doshbord_user.html.twig", "C:\\Users\\ali\\Desktop\\project\\templates\\User\\doshbord_user.html.twig");
    }
}
