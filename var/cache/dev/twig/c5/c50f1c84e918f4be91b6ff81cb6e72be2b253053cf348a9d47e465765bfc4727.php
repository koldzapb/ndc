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

/* Casino/casinos_page.html.twig */
class __TwigTemplate_adbfb68a08a9478b391fea1047192c8086595e0ad6a3e85c70c2f84e51c884a6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyheader' => [$this, 'block_bodyheader'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Casino/casinos_page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Casino/casinos_page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Casino/casinos_page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        // line 4
        echo "        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\"></div><!--/.ad-line-->
                <h1 class=\"page-title\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "heading", [], "any", false, false, false, 7)]), "html", null, true);
        echo "</h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 15
        echo "            <div class=\"container text-holder\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to casinos\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>
                <div class=\"page-content\">";
        // line 19
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "content", [], "any", false, false, false, 19);
        echo "</div>
            </div>

            <div class=\"list-data container\">
                <span id=\"button-link-1\"></span>
                <div class=\"casino-list-wrapper\">
                    <div class=\"d-sm-flex justify-content-between align-items-center\">
                        <div class=\"d-sm-flex\">
                            <h2 class=\"list-data-headline\">All Casinos</h2>
                            <div class=\"spinner filter-spinner\">
                                <div class=\"rect1\"></div>
                                <div class=\"rect2\"></div>
                                <div class=\"rect3\"></div>
                                <div class=\"rect4\"></div>
                                <div class=\"rect5\"></div>
                            </div>
                        </div>
                        <div class=\"filter-holder\">
                            <span>Sort by</span>
                            <div class=\"dropdown d-inline\">
                                <button class=\"dropdown-toggle dropdown-filter-btn\" type=\"button\" id=\"dropdownFilter\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Please Select
                                </button>

                                <div id=\"cas_sort\" class=\"dropdown-menu \" aria-labelledby=\"dropdownFilter\">
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highRating\" data-text=\"Highest Rating\" onclick=\"return false;\">Highest Rating</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"lowRating\" data-text=\"Lowest Rating\" onclick=\"return false;\">Lowest Rating</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameAsc\" data-text=\"A-Z\" onclick=\"return false\">A-Z</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameDesc\" data-text=\"Z-A\" onclick=\"return false\">Z-A</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"casinos-list\">
                        ";
        // line 53
        echo (isset($context["casinoslist"]) || array_key_exists("casinoslist", $context) ? $context["casinoslist"] : (function () { throw new RuntimeError('Variable "casinoslist" does not exist.', 53, $this->source); })());
        echo "
                    </div>

                    <div class=\"list-data-bottom\">
                        <div class=\"page-load\">
                            <span class=\"current-no\" id=\"current_casinos\">";
        // line 58
        if (((isset($context["totalnumber_for_pagination"]) || array_key_exists("totalnumber_for_pagination", $context) ? $context["totalnumber_for_pagination"] : (function () { throw new RuntimeError('Variable "totalnumber_for_pagination" does not exist.', 58, $this->source); })()) < 50)) {
            echo twig_escape_filter($this->env, (isset($context["totalnumber_for_pagination"]) || array_key_exists("totalnumber_for_pagination", $context) ? $context["totalnumber_for_pagination"] : (function () { throw new RuntimeError('Variable "totalnumber_for_pagination" does not exist.', 58, $this->source); })()), "html", null, true);
        } else {
            echo "50";
        }
        echo "</span>/<span id=\"totalcasinos\">";
        echo twig_escape_filter($this->env, (isset($context["totalnumber_for_pagination"]) || array_key_exists("totalnumber_for_pagination", $context) ? $context["totalnumber_for_pagination"] : (function () { throw new RuntimeError('Variable "totalnumber_for_pagination" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "</span>
                        </div>
                        ";
        // line 60
        if (((isset($context["totalnumber_for_pagination"]) || array_key_exists("totalnumber_for_pagination", $context) ? $context["totalnumber_for_pagination"] : (function () { throw new RuntimeError('Variable "totalnumber_for_pagination" does not exist.', 60, $this->source); })()) > 50)) {
            // line 61
            echo "                        <div class=\"list-data-buttons\">
                            <a href=\"#\" id=\"more_casinos\" first=\"50\" max=\"50\" class=\"btn btn-orange-outline\" onclick=\"return false;\">Load More</a>
                            <a href=\"#\" id=\"all_casinos\" first=\"50\" max=\"2000\" class=\"btn btn-orange-outline\" onclick=\"return false;\">Load All</a>
                        </div>
                        ";
        }
        // line 66
        echo "                        <div id=\"bottom_spinner \"class=\"spinner\">
                            <div class=\"rect1\"></div>
                            <div class=\"rect2\"></div>
                            <div class=\"rect3\"></div>
                            <div class=\"rect4\"></div>
                            <div class=\"rect5\"></div>
                        </div>
                    </div>
                </div>
            </div>

        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::joinContent"));
        // line 80
        echo "


        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::sectionInterest", ["pageTags" => twig_get_attribute($this->env, $this->source,         // line 84
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 84, $this->source); })()), "tags", [], "any", false, false, false, 84)]));
        // line 86
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Casino/casinos_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 86,  190 => 84,  189 => 83,  184 => 80,  182 => 77,  169 => 66,  162 => 61,  160 => 60,  149 => 58,  141 => 53,  104 => 19,  98 => 15,  88 => 14,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block bodyheader %}
        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\"></div><!--/.ad-line-->
                <h1 class=\"page-title\">{{ page.heading|shortCodes }}</h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->
    {% endblock %}



    {% block main %}
            <div class=\"container text-holder\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to casinos\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>
                <div class=\"page-content\">{{ page.content|raw }}</div>
            </div>

            <div class=\"list-data container\">
                <span id=\"button-link-1\"></span>
                <div class=\"casino-list-wrapper\">
                    <div class=\"d-sm-flex justify-content-between align-items-center\">
                        <div class=\"d-sm-flex\">
                            <h2 class=\"list-data-headline\">All Casinos</h2>
                            <div class=\"spinner filter-spinner\">
                                <div class=\"rect1\"></div>
                                <div class=\"rect2\"></div>
                                <div class=\"rect3\"></div>
                                <div class=\"rect4\"></div>
                                <div class=\"rect5\"></div>
                            </div>
                        </div>
                        <div class=\"filter-holder\">
                            <span>Sort by</span>
                            <div class=\"dropdown d-inline\">
                                <button class=\"dropdown-toggle dropdown-filter-btn\" type=\"button\" id=\"dropdownFilter\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Please Select
                                </button>

                                <div id=\"cas_sort\" class=\"dropdown-menu \" aria-labelledby=\"dropdownFilter\">
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highRating\" data-text=\"Highest Rating\" onclick=\"return false;\">Highest Rating</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"lowRating\" data-text=\"Lowest Rating\" onclick=\"return false;\">Lowest Rating</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameAsc\" data-text=\"A-Z\" onclick=\"return false\">A-Z</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameDesc\" data-text=\"Z-A\" onclick=\"return false\">Z-A</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"casinos-list\">
                        {{ casinoslist|raw }}
                    </div>

                    <div class=\"list-data-bottom\">
                        <div class=\"page-load\">
                            <span class=\"current-no\" id=\"current_casinos\">{% if(totalnumber_for_pagination<50) %}{{ totalnumber_for_pagination }}{% else %}50{% endif %}</span>/<span id=\"totalcasinos\">{{ totalnumber_for_pagination }}</span>
                        </div>
                        {% if(totalnumber_for_pagination>50) %}
                        <div class=\"list-data-buttons\">
                            <a href=\"#\" id=\"more_casinos\" first=\"50\" max=\"50\" class=\"btn btn-orange-outline\" onclick=\"return false;\">Load More</a>
                            <a href=\"#\" id=\"all_casinos\" first=\"50\" max=\"2000\" class=\"btn btn-orange-outline\" onclick=\"return false;\">Load All</a>
                        </div>
                        {% endif %}
                        <div id=\"bottom_spinner \"class=\"spinner\">
                            <div class=\"rect1\"></div>
                            <div class=\"rect2\"></div>
                            <div class=\"rect3\"></div>
                            <div class=\"rect4\"></div>
                            <div class=\"rect5\"></div>
                        </div>
                    </div>
                </div>
            </div>

        {{ render(controller(
            'App\\\\Controller\\\\TemplateController::joinContent'
        ))
        }}


        {{ render(controller(
            'App\\\\Controller\\\\TemplateController::sectionInterest',{'pageTags':page.tags}
        ))
        }}

    {% endblock %}", "Casino/casinos_page.html.twig", "/var/www/ndc_new/templates/Casino/casinos_page.html.twig");
    }
}
