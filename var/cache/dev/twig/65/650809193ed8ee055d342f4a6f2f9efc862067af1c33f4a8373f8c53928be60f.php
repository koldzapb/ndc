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

/* Bonus/bonusesbyvalue.html.twig */
class __TwigTemplate_4afc729b1e2d72733438a5d2d58df5242d1d355266bffed42f684ceb18183d08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bonus/bonusesbyvalue.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bonus/bonusesbyvalue.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Bonus/bonusesbyvalue.html.twig", 1);
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
        echo "    <div class=\"header-content\">
        <div class=\"container\">
            <div class=\"ad-line\">
            </div><!--/.ad-line-->
            <h1 class=\"page-title\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "heading", [], "any", false, false, false, 8)]), "html", null, true);
        echo " <span class=\"total\">";
        echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</span></h1>
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
        echo "
        ";
        // line 16
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()), "content", [], "any", false, false, false, 16)) > 0)) {
            // line 17
            echo "            <div class=\"container text-holder\">
                <a class=\"scroll-to-button scroll-to-link show-me\" href=\"#button-link-1\">
                    Show me the ND Bonuses!
                </a>
                <div class=\"page-content\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21);
            echo "</div>
            </div>
        ";
        }
        // line 24
        echo "
        <div class=\"container\">
            <div class=\"casino-list-wrapper ";
        // line 26
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()), "content", [], "any", false, false, false, 26)) == 0)) {
            echo "padding-large";
        }
        echo "\">
                <span id=\"button-link-1\"></span>
                <div class=\"d-md-flex justify-content-end\">
                    <div class=\"spinner\">
                        <div class=\"re filter-spinnerct1\"></div>
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
                            <div id=\"bonuses_sort_value\" data-country=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 43, $this->source); })()), "value", [], "any", false, false, false, 43), "html", null, true);
        echo "\" data-maxValue=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 43, $this->source); })()), "upperValue", [], "any", false, false, false, 43), "html", null, true);
        echo "\" data-symbol=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 43, $this->source); })()), "symbol", [], "any", false, false, false, 43), "html", null, true);
        echo "\" data-type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 43, $this->source); })()), "bonustype", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
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
        // line 57
        echo (isset($context["casinoslist"]) || array_key_exists("casinoslist", $context) ? $context["casinoslist"] : (function () { throw new RuntimeError('Variable "casinoslist" does not exist.', 57, $this->source); })());
        echo "

                    </div>
                </div>

                <div class=\"list-data-bottom\">
                    <div class=\"page-load\">
                        <span class=\"current-no\" id=\"current_casinos\">";
        // line 64
        if (((isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 64, $this->source); })()) < 50)) {
            echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 64, $this->source); })()), "html", null, true);
        } else {
            echo "50";
        }
        echo "</span>/<span id=\"totalcasinos\">";
        echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <div id=\"bottom_spinner\" class=\"spinner\">
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
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 77, $this->source); })()), "belowcontent", [], "any", false, false, false, 77))) {
            // line 78
            echo "        <div class=\"text-holder container below-content\">
            ";
            // line 79
            echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 79, $this->source); })()), "belowcontent", [], "any", false, false, false, 79);
            echo "
        </div>
    ";
        }
        // line 82
        echo "
    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::joinContent"));
        // line 86
        echo "


    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::sectionInterest", ["pageTags" => twig_get_attribute($this->env, $this->source,         // line 90
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 90, $this->source); })()), "tags", [], "any", false, false, false, 90)]));
        // line 92
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Bonus/bonusesbyvalue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 92,  223 => 90,  222 => 89,  217 => 86,  215 => 83,  212 => 82,  206 => 79,  203 => 78,  201 => 77,  179 => 64,  169 => 57,  144 => 43,  122 => 26,  118 => 24,  112 => 21,  106 => 17,  104 => 16,  101 => 15,  91 => 14,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bodyheader %}
    <div class=\"header-content\">
        <div class=\"container\">
            <div class=\"ad-line\">
            </div><!--/.ad-line-->
            <h1 class=\"page-title\">{{ page.heading|shortCodes }} <span class=\"total\">{{ totalnumber }}</span></h1>
        </div><!--/.wrap-->
    </div><!--/#content-header-->
{% endblock %}


{% block main %}

        {% if page.content|length>0 %}
            <div class=\"container text-holder\">
                <a class=\"scroll-to-button scroll-to-link show-me\" href=\"#button-link-1\">
                    Show me the ND Bonuses!
                </a>
                <div class=\"page-content\">{{ page.content|raw }}</div>
            </div>
        {% endif %}

        <div class=\"container\">
            <div class=\"casino-list-wrapper {% if page.content|length == 0 %}padding-large{% endif %}\">
                <span id=\"button-link-1\"></span>
                <div class=\"d-md-flex justify-content-end\">
                    <div class=\"spinner\">
                        <div class=\"re filter-spinnerct1\"></div>
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
                            <div id=\"bonuses_sort_value\" data-country=\"{{ country.name }}\" data-value=\"{{ page.value }}\" data-maxValue=\"{{ page.upperValue }}\" data-symbol=\"{{ page.symbol }}\" data-type=\"{{ page.bonustype.name }}\" class=\"dropdown-menu \" aria-labelledby=\"dropdownFilter\">
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
                        {{ casinoslist|raw }}

                    </div>
                </div>

                <div class=\"list-data-bottom\">
                    <div class=\"page-load\">
                        <span class=\"current-no\" id=\"current_casinos\">{% if totalnumber<50 %}{{ totalnumber }}{% else %}50{% endif %}</span>/<span id=\"totalcasinos\">{{ totalnumber }}</span>
                    </div>
                    <div id=\"bottom_spinner\" class=\"spinner\">
                        <div class=\"rect1\"></div>
                        <div class=\"rect2\"></div>
                        <div class=\"rect3\"></div>
                        <div class=\"rect4\"></div>
                        <div class=\"rect5\"></div>
                    </div>
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
", "Bonus/bonusesbyvalue.html.twig", "/var/www/ndc_new/templates/Bonus/bonusesbyvalue.html.twig");
    }
}
