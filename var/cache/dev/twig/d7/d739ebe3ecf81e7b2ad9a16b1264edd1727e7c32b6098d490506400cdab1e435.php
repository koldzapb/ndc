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

/* Bonus/bonusesforcountry.html.twig */
class __TwigTemplate_3ead381a98946912fb3fe50c995492539e3e168b57c28a335098c3805abebb9f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bonus/bonusesforcountry.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bonus/bonusesforcountry.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Bonus/bonusesforcountry.html.twig", 1);
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
                <h1 class=\"page-title\">
                    ";
        // line 8
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "heading", [], "any", false, false, false, 8)) < 1)) {
            // line 9
            echo "                        ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9) . " No Deposit Bonuses"), "html", null, true);
            echo "
                    ";
        } else {
            // line 11
            echo "                        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 11, $this->source); })()), "heading", [], "any", false, false, false, 11)]), "html", null, true);
            echo "
                    ";
        }
        // line 13
        echo "                    <span class=\"total\">";
        echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</span>
                </h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 23
        echo "            ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 23, $this->source); })()), "content", [], "any", false, false, false, 23)) > 0)) {
            // line 24
            echo "                <div class=\"container text-holder\">
                    <a class=\"scroll-to-button scroll-to-link show-me\" href=\"#button-link-1\">
                        Show me the ND Bonuses!
                    </a>
                    <div class=\"page-content\">";
            // line 28
            echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 28, $this->source); })()), "content", [], "any", false, false, false, 28);
            echo "</div>
                </div>
            ";
        }
        // line 31
        echo "
            <div class=\"container\">
                <span id=\"button-link-1\"></span>
                <div class=\"casino-list-wrapper ";
        // line 34
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 34, $this->source); })()), "content", [], "any", false, false, false, 34)) == 0)) {
            echo "padding-large";
        }
        echo "\">
                    <div class=\"d-md-flex justify-content-end\">
                        <div class=\"spinner filter-spinner\">
                            <div class=\"rect1\"></div>
                            <div class=\"rect2\"></div>
                            <div class=\"rect3\"></div>
                            <div class=\"rect4\"></div>
                            <div class=\"rect5\"></div>
                        </div>
                        <div class=\"filter-holder\">
                            <span>Sort by</span>
                            <div class=\"dropdown d-inline\">
                                <button class=\"dropdown-toggle dropdown-filter-btn\" type=\"button\" data-sorttype=\"highRating\" id=\"dropdownFilter\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Highest Rating
                                </button>
                                <div id=\"bonuses_sort_country\" data-country=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
        echo "\" class=\"dropdown-menu \" aria-labelledby=\"dropdownFilter\">
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highRating\" data-text=\"Highest Rating\" onclick=\"return false;\">Highest Rating</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"lowRating\" data-text=\"Lowest Rating\" onclick=\"return false;\">Lowest Rating</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameAsc\" data-text=\"A-Z\" onclick=\"return false\">A-Z</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameDesc\" data-text=\"Z-A\" onclick=\"return false\">Z-A</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highAmount\" data-text=\"Highest Amount\" onclick=\"return false\">Highest Amount</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"list-data\">
                        <div class=\"casinos-list\">
                            ";
        // line 62
        echo (isset($context["bonuseslist"]) || array_key_exists("bonuseslist", $context) ? $context["bonuseslist"] : (function () { throw new RuntimeError('Variable "bonuseslist" does not exist.', 62, $this->source); })());
        echo "
                        </div>
                    </div>

                    <div class=\"list-data-bottom\">
                        <div class=\"page-load\">
                            <span class=\"current-no\" id=\"current_casinos\">";
        // line 68
        if (((isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 68, $this->source); })()) < 50)) {
            echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 68, $this->source); })()), "html", null, true);
        } else {
            echo "50";
        }
        echo "</span>/<span id=\"totalcasinos\">";
        echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "</span>
                        </div>
                        ";
        // line 70
        if (((isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 70, $this->source); })()) > 50)) {
            // line 71
            echo "                            <div class=\"list-data-buttons\">
                                <a id=\"more_bonuses_for_country\" first=\"50\" max=\"50\"  data-country=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true);
            echo "\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load More</a>
                                <a id=\"all_bonuses_for_country\" first=\"50\" max=\"2000\"  data-country=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), "html", null, true);
            echo "\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load All</a>
                            </div>
                            <div id=\"bottom_spinner\" class=\"spinner\">
                                <div class=\"rect1\"></div>
                                <div class=\"rect2\"></div>
                                <div class=\"rect3\"></div>
                                <div class=\"rect4\"></div>
                                <div class=\"rect5\"></div>
                            </div>
                        ";
        }
        // line 83
        echo "                    </div>

                </div>
            </div>

        ";
        // line 88
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 88, $this->source); })()), "belowcontent", [], "any", false, false, false, 88))) {
            // line 89
            echo "            <div class=\"text-holder container below-content\">
                ";
            // line 90
            echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 90, $this->source); })()), "belowcontent", [], "any", false, false, false, 90);
            echo "
            </div>
        ";
        }
        // line 93
        echo "
        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::joinContent"));
        // line 97
        echo "

        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::sectionInterest", ["pageTags" => twig_get_attribute($this->env, $this->source,         // line 100
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 100, $this->source); })()), "tags", [], "any", false, false, false, 100)]));
        // line 102
        echo "



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Bonus/bonusesforcountry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 102,  241 => 100,  240 => 99,  236 => 97,  234 => 94,  231 => 93,  225 => 90,  222 => 89,  220 => 88,  213 => 83,  200 => 73,  196 => 72,  193 => 71,  191 => 70,  180 => 68,  171 => 62,  155 => 49,  135 => 34,  130 => 31,  124 => 28,  118 => 24,  115 => 23,  105 => 22,  89 => 13,  83 => 11,  77 => 9,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block bodyheader %}
        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\"></div><!--/.ad-line-->
                <h1 class=\"page-title\">
                    {% if page.heading|length <1 %}
                        {{ country.name~' No Deposit Bonuses' }}
                    {% else %}
                        {{ page.heading|shortCodes }}
                    {% endif %}
                    <span class=\"total\">{{ totalnumber }}</span>
                </h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->
    {% endblock %}




    {% block main %}
            {% if page.content|length > 0 %}
                <div class=\"container text-holder\">
                    <a class=\"scroll-to-button scroll-to-link show-me\" href=\"#button-link-1\">
                        Show me the ND Bonuses!
                    </a>
                    <div class=\"page-content\">{{ page.content|raw }}</div>
                </div>
            {% endif %}

            <div class=\"container\">
                <span id=\"button-link-1\"></span>
                <div class=\"casino-list-wrapper {% if page.content|length == 0 %}padding-large{% endif %}\">
                    <div class=\"d-md-flex justify-content-end\">
                        <div class=\"spinner filter-spinner\">
                            <div class=\"rect1\"></div>
                            <div class=\"rect2\"></div>
                            <div class=\"rect3\"></div>
                            <div class=\"rect4\"></div>
                            <div class=\"rect5\"></div>
                        </div>
                        <div class=\"filter-holder\">
                            <span>Sort by</span>
                            <div class=\"dropdown d-inline\">
                                <button class=\"dropdown-toggle dropdown-filter-btn\" type=\"button\" data-sorttype=\"highRating\" id=\"dropdownFilter\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Highest Rating
                                </button>
                                <div id=\"bonuses_sort_country\" data-country=\"{{ country.name }}\" class=\"dropdown-menu \" aria-labelledby=\"dropdownFilter\">
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highRating\" data-text=\"Highest Rating\" onclick=\"return false;\">Highest Rating</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"lowRating\" data-text=\"Lowest Rating\" onclick=\"return false;\">Lowest Rating</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameAsc\" data-text=\"A-Z\" onclick=\"return false\">A-Z</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameDesc\" data-text=\"Z-A\" onclick=\"return false\">Z-A</a>
                                    <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highAmount\" data-text=\"Highest Amount\" onclick=\"return false\">Highest Amount</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"list-data\">
                        <div class=\"casinos-list\">
                            {{ bonuseslist|raw }}
                        </div>
                    </div>

                    <div class=\"list-data-bottom\">
                        <div class=\"page-load\">
                            <span class=\"current-no\" id=\"current_casinos\">{% if totalnumber<50 %}{{ totalnumber }}{% else %}50{% endif %}</span>/<span id=\"totalcasinos\">{{ totalnumber }}</span>
                        </div>
                        {% if totalnumber >50 %}
                            <div class=\"list-data-buttons\">
                                <a id=\"more_bonuses_for_country\" first=\"50\" max=\"50\"  data-country=\"{{ country.name }}\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load More</a>
                                <a id=\"all_bonuses_for_country\" first=\"50\" max=\"2000\"  data-country=\"{{ country.name }}\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load All</a>
                            </div>
                            <div id=\"bottom_spinner\" class=\"spinner\">
                                <div class=\"rect1\"></div>
                                <div class=\"rect2\"></div>
                                <div class=\"rect3\"></div>
                                <div class=\"rect4\"></div>
                                <div class=\"rect5\"></div>
                            </div>
                        {% endif %}
                    </div>

                </div>
            </div>

        {% if page.belowcontent is not null %}
            <div class=\"text-holder container below-content\">
                {{ page.belowcontent|raw }}
            </div>
        {% endif %}

        {{ render(controller(
            'App\\\\Controller\\\\TemplateController::joinContent'
        ))
        }}

        {{ render(controller(
            'App\\\\Controller\\\\TemplateController::sectionInterest',{'pageTags':page.tags}
        ))
        }}



    {% endblock %}
", "Bonus/bonusesforcountry.html.twig", "/var/www/ndc_new/templates/Bonus/bonusesforcountry.html.twig");
    }
}
