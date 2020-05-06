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

/* Bonus/bonusesforsoftware.html.twig */
class __TwigTemplate_84a01b18a936113fc78280b4eb7f7f9129ed0e4ea3ac65609c2e83a84f8b76f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bonus/bonusesforsoftware.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bonus/bonusesforsoftware.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Bonus/bonusesforsoftware.html.twig", 1);
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
            <div class=\"ad-line\"></div><!--/.ad-line-->
            <h1 class=\"page-title\">
                ";
        // line 8
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "heading", [], "any", false, false, false, 8))) {
            // line 9
            echo "                    ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "heading", [], "any", false, false, false, 9)]), "html", null, true);
            echo "
                    ";
        } else {
            // line 11
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["software"]) || array_key_exists("software", $context) ? $context["software"] : (function () { throw new RuntimeError('Variable "software" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
            echo "
                ";
        }
        // line 13
        echo "                <span class=\"total\">";
        echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</span>
            </h1>
        </div><!--/.wrap-->
    </div><!--/#content-header-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 22
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 22, $this->source); })()), "content", [], "any", false, false, false, 22))) {
            // line 23
            echo "            <div class=\"container text-holder\">
                <a class=\"scroll-to-button scroll-to-link show-me\" href=\"#button-link-1\">
                    Show me the ND Bonuses!
                </a>
                <div class=\"page-content\">";
            // line 27
            echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 27, $this->source); })()), "content", [], "any", false, false, false, 27);
            echo "</div>
            </div>
        ";
        }
        // line 30
        echo "
        <div class=\"container\">
            <div class=\"casino-list-wrapper ";
        // line 32
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 32, $this->source); })()), "content", [], "any", false, false, false, 32)) == 0)) {
            echo "padding-large";
        }
        echo "\">
                <span id=\"button-link-1\"></span>
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
                            <button class=\"dropdown-toggle dropdown-filter-btn\" type=\"button\" data-sorttype=\"highRating\" id=\"dropdownFilter\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Highest rating
                            </button>
                            <div id=\"bonuses_sort_software\" data-country=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
        echo "\"
                                 data-software=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["software"]) || array_key_exists("software", $context) ? $context["software"] : (function () { throw new RuntimeError('Variable "software" does not exist.', 50, $this->source); })()), "title", [], "any", false, false, false, 50), "html", null, true);
        echo "\" class=\"dropdown-menu \" aria-labelledby=\"dropdownFilter\">
                                <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highRating\" data-text=\"Highest Rating\"
                                   onclick=\"return false;\">Highest Rating</a>
                                <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"lowRating\" data-text=\"Lowest rating\"
                                   onclick=\"return false;\">Lowest Rating</a>
                                <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameAsc\" data-text=\"A-Z\"
                                   onclick=\"return false\">A-Z</a>
                                <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameDesc\" data-text=\"Z-A\" onclick=\"return false\">Z-A</a>
                                <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highAmount\" data-text=\"Highest Amount\" onclick=\"return false\">Highest Amount</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"list-data\">
                    <div class=\"casinos-list\">
                        ";
        // line 66
        echo (isset($context["bonuseslist"]) || array_key_exists("bonuseslist", $context) ? $context["bonuseslist"] : (function () { throw new RuntimeError('Variable "bonuseslist" does not exist.', 66, $this->source); })());
        echo "
                    </div>
                </div>

                <div class=\"list-data-bottom\">
                    <div class=\"page-load\">
                        <span class=\"current-no\" id=\"current_casinos\">";
        // line 72
        if (((isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 72, $this->source); })()) < 50)) {
            echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 72, $this->source); })()), "html", null, true);
        } else {
            echo "50";
        }
        echo "</span>/<span id=\"totalcasinos\">";
        echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    ";
        // line 74
        if (((isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 74, $this->source); })()) > 50)) {
            // line 75
            echo "                        <div class=\"list-data-buttons\">
                            <a id=\"more_bonuses_for_software\" first=\"50\" max=\"50\" data-software=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["software"]) || array_key_exists("software", $context) ? $context["software"] : (function () { throw new RuntimeError('Variable "software" does not exist.', 76, $this->source); })()), "title", [], "any", false, false, false, 76), "html", null, true);
            echo "\" data-country=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 76, $this->source); })()), "name", [], "any", false, false, false, 76), "html", null, true);
            echo "\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load More</a>
                            <a id=\"all_bonuses_for_software\" first=\"50\" max=\"2000\" data-software=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["software"]) || array_key_exists("software", $context) ? $context["software"] : (function () { throw new RuntimeError('Variable "software" does not exist.', 77, $this->source); })()), "title", [], "any", false, false, false, 77), "html", null, true);
            echo "\" data-country=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), "html", null, true);
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
        // line 87
        echo "                </div>
            </div>
        </div>


    ";
        // line 92
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 92, $this->source); })()), "belowcontent", [], "any", false, false, false, 92))) {
            // line 93
            echo "        <div class=\"text-holder container below-content\">
            ";
            // line 94
            echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 94, $this->source); })()), "belowcontent", [], "any", false, false, false, 94);
            echo "
        </div>
    ";
        }
        // line 97
        echo "
    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::joinContent"));
        // line 101
        echo "


    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::sectionInterest", ["pageTags" => twig_get_attribute($this->env, $this->source,         // line 105
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 105, $this->source); })()), "tags", [], "any", false, false, false, 105)]));
        // line 107
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Bonus/bonusesforsoftware.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 107,  254 => 105,  253 => 104,  248 => 101,  246 => 98,  243 => 97,  237 => 94,  234 => 93,  232 => 92,  225 => 87,  210 => 77,  204 => 76,  201 => 75,  199 => 74,  188 => 72,  179 => 66,  160 => 50,  156 => 49,  134 => 32,  130 => 30,  124 => 27,  118 => 23,  115 => 22,  105 => 21,  89 => 13,  83 => 11,  77 => 9,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bodyheader %}
    <div class=\"header-content\">
        <div class=\"container\">
            <div class=\"ad-line\"></div><!--/.ad-line-->
            <h1 class=\"page-title\">
                {% if(page.heading is not null) %}
                    {{ page.heading|shortCodes }}
                    {% else %}
                    {{ software.title }}
                {% endif %}
                <span class=\"total\">{{ totalnumber }}</span>
            </h1>
        </div><!--/.wrap-->
    </div><!--/#content-header-->
{% endblock %}



{% block main %}
        {% if page.content is not null %}
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
                            <button class=\"dropdown-toggle dropdown-filter-btn\" type=\"button\" data-sorttype=\"highRating\" id=\"dropdownFilter\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Highest rating
                            </button>
                            <div id=\"bonuses_sort_software\" data-country=\"{{ country.name }}\"
                                 data-software=\"{{ software.title }}\" class=\"dropdown-menu \" aria-labelledby=\"dropdownFilter\">
                                <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highRating\" data-text=\"Highest Rating\"
                                   onclick=\"return false;\">Highest Rating</a>
                                <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"lowRating\" data-text=\"Lowest rating\"
                                   onclick=\"return false;\">Lowest Rating</a>
                                <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"nameAsc\" data-text=\"A-Z\"
                                   onclick=\"return false\">A-Z</a>
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
                            <a id=\"more_bonuses_for_software\" first=\"50\" max=\"50\" data-software=\"{{ software.title }}\" data-country=\"{{ country.name }}\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load More</a>
                            <a id=\"all_bonuses_for_software\" first=\"50\" max=\"2000\" data-software=\"{{ software.title }}\" data-country=\"{{ country.name }}\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load All</a>
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


{% endblock %}", "Bonus/bonusesforsoftware.html.twig", "/var/www/ndc_new/templates/Bonus/bonusesforsoftware.html.twig");
    }
}
