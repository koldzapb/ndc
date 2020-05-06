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

/* index.html.twig */
class __TwigTemplate_ff7cc1f7c1b72db897a35a743c474deee37e5824ddf2fa6163661447a7870b4b extends \Twig\Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::indexHeader"));
        // line 7
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::mostLikedBonuses"));
        // line 16
        echo "

            <div class=\"homepage-casino-list\">
                <div class=\"container\">
                    <div class=\"casino-list-wrapper\">
                        <div class=\"d-md-flex justify-content-between\">
                            <div class=\"d-md-flex\">
                                <nav class=\"tabs\">
                                    <ul>
                                        <li class=\"secondMenu active\"><a href=\"#\" name=\"No_Deposit\" style=\"cursor:pointer;\" onclick=\"return false;\" >No Deposit</a></li>
                                        <li class=\"secondMenu\"><a href=\"#\" name=\"New\" style=\"cursor:pointer;\" onclick=\"return false;\" >New</a></li>
                                        <li class=\"secondMenu\"><a href=\"#\" name=\"Exclusive\" onclick=\"return false;\" >Exclusive</a></li>
                                        <li class=\"secondMenu\"><a href=\"#\" name=\"Casino_Spins\" onclick=\"return false;\" >FreeSpins</a></li>
                                    </ul>
                                </nav>
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
                                    <button class=\"dropdown-toggle dropdown-filter-btn\" type=\"button\" id=\"dropdownFilter\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-sorttype=\"highRating\">Highest Rating</button>
                                    <div id=\"bonus_sort\" class=\"dropdown-menu \" aria-labelledby=\"dropdownFilter\">
                                        <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highRating\" data-text=\"Highest Rating\" onclick=\"return false;\">Highest Rating</a>
                                        <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"lowRating\" data-text=\"Lowest Rating\" onclick=\"return false;\">Lowest Rating</a>
                                        <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"A-Z\" data-text=\"A-Z\" onclick=\"return false\">A-Z</a>
                                        <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"Z-A\" data-text=\"Z-A\" onclick=\"return false\">Z-A</a>
                                        <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highAmount\" data-text=\"Highest Amount\" onclick=\"return false\">Higest Amount</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"list-data\"></div>
                        <div class=\"list-data-bottom\">
                            <div class=\"page-load\">
                                <span class=\"current-no\" id=\"current_bonus\">50</span>/<span id=\"total_bonuses\">934</span>
                            </div>
                            <div class=\"list-data-buttons\">
                                <a id=\"more_bonuses\" first=\"50\" max=\"50\" bonustype=\"No Deposit\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load More</a>
                                <a id=\"all_bonuses\" first=\"50\" max=\"1000\" bonustype=\"No Deposit\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load All</a>
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

            </div>


        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::latestNewsAndArticlesForIndexPage"));
        // line 80
        echo "

            <div class=\"main-text-section\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-2\" aria-label=\"Scroll to description\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>

                <div class=\"container-narrow\" id=\"button-link-2\">
                    <div class=\"panel-group home-panel-group\" id=\"main-text-accordion\">
                        ";
        // line 89
        $context["collapse"] = 0;
        // line 90
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segmentedtext"]) || array_key_exists("segmentedtext", $context) ? $context["segmentedtext"] : (function () { throw new RuntimeError('Variable "segmentedtext" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 91
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["segment"], 1, [], "array", true, true, false, 91)) {
                // line 92
                echo "                                ";
                $context["collapse"] = ((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 92, $this->source); })()) + 1);
                // line 93
                echo "                                ";
                if (((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 93, $this->source); })()) == 1)) {
                    // line 94
                    echo "                                    ";
                    $context["show"] = "collapse show";
                    // line 95
                    echo "                                    ";
                    $context["aria"] = "true";
                    // line 96
                    echo "                                ";
                } else {
                    // line 97
                    echo "                                    ";
                    $context["show"] = "collapse";
                    // line 98
                    echo "                                    ";
                    $context["aria"] = "false";
                    // line 99
                    echo "                                ";
                }
                // line 100
                echo "                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                      <h3 class=\"panel-title\">
                                        <a  data-toggle=\"collapse\"
                                            data-parent=\"#main-text-accordion\"
                                            href=\"#collapse-text-";
                // line 105
                echo twig_escape_filter($this->env, (isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 105, $this->source); })()), "html", null, true);
                echo "\"
                                            class=\"collapse-toggle\"
                                            aria-expanded=\"";
                // line 107
                echo twig_escape_filter($this->env, (isset($context["aria"]) || array_key_exists("aria", $context) ? $context["aria"] : (function () { throw new RuntimeError('Variable "aria" does not exist.', 107, $this->source); })()), "html", null, true);
                echo "\"
                                            >
                                              ";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["segment"], 0, [], "array", false, false, false, 109);
                echo "
                                              <i class=\"fa fa-plus\"></i>
                                              <i class=\"fa fa-minus\"></i>
                                        </a>
                                      </h3>
                                    </div>
                                    <div id=\"collapse-text-";
                // line 115
                echo twig_escape_filter($this->env, (isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 115, $this->source); })()), "html", null, true);
                echo "\" class=\"panel-collapse ";
                echo twig_escape_filter($this->env, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 115, $this->source); })()), "html", null, true);
                echo "\" data-parent=\"#main-text-accordion\">
                                      <div class=\"panel-body\">
                                        ";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["segment"], 1, [], "array", false, false, false, 117);
                echo "
                                      </div>
                                    </div>
                                </div>
                            ";
            } else {
                // line 122
                echo "                                <h1 class=\"accordionHeading\">";
                echo twig_get_attribute($this->env, $this->source, $context["segment"], 0, [], "array", false, false, false, 122);
                echo "</h1>
                            ";
            }
            // line 124
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                    </div>
                </div>

            </div>

            <div class=\"homepage-activities live-activities-section\">

                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-3\" aria-label=\"Scroll to Live Activities\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>

                <div class=\"container\" id=\"button-link-3\">
                    <div class=\"text-center\">
                        <h2 class=\"h1\">Live Activities</h2>
                        <p>See what our members have been saying about our casino reviews.</p>
                    </div>
                    <section class=\"box-comments box-comments-home\" id=\"ndc_live_activities\">
                        ";
        // line 142
        echo (isset($context["liveactivities"]) || array_key_exists("liveactivities", $context) ? $context["liveactivities"] : (function () { throw new RuntimeError('Variable "liveactivities" does not exist.', 142, $this->source); })());
        echo "
                    </section>

                    <div class=\"text-center\">
                        <a class=\"btn btn-light-primary\" id=\"more_activities\" data-first=\"7\"  onclick=\"return false;\">More Activities</a>
                    </div>
                </div>
            </div>


        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::joinContent"));
        // line 155
        echo "


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 161
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        echo "        <script src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=joshac\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 164,  330 => 163,  320 => 161,  310 => 160,  297 => 155,  295 => 152,  282 => 142,  263 => 125,  257 => 124,  251 => 122,  243 => 117,  236 => 115,  227 => 109,  222 => 107,  217 => 105,  210 => 100,  207 => 99,  204 => 98,  201 => 97,  198 => 96,  195 => 95,  192 => 94,  189 => 93,  186 => 92,  183 => 91,  178 => 90,  176 => 89,  165 => 80,  163 => 77,  100 => 16,  98 => 13,  95 => 12,  85 => 11,  74 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block bodyheader %}
        {{ render(controller(
            'App\\\\Controller\\\\TemplateController::indexHeader'
        ))
        }}
    {% endblock %}


    {% block main %}

        {{ render(controller(
            'App\\\\Controller\\\\TemplateController::mostLikedBonuses'
        ))
        }}

            <div class=\"homepage-casino-list\">
                <div class=\"container\">
                    <div class=\"casino-list-wrapper\">
                        <div class=\"d-md-flex justify-content-between\">
                            <div class=\"d-md-flex\">
                                <nav class=\"tabs\">
                                    <ul>
                                        <li class=\"secondMenu active\"><a href=\"#\" name=\"No_Deposit\" style=\"cursor:pointer;\" onclick=\"return false;\" >No Deposit</a></li>
                                        <li class=\"secondMenu\"><a href=\"#\" name=\"New\" style=\"cursor:pointer;\" onclick=\"return false;\" >New</a></li>
                                        <li class=\"secondMenu\"><a href=\"#\" name=\"Exclusive\" onclick=\"return false;\" >Exclusive</a></li>
                                        <li class=\"secondMenu\"><a href=\"#\" name=\"Casino_Spins\" onclick=\"return false;\" >FreeSpins</a></li>
                                    </ul>
                                </nav>
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
                                    <button class=\"dropdown-toggle dropdown-filter-btn\" type=\"button\" id=\"dropdownFilter\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-sorttype=\"highRating\">Highest Rating</button>
                                    <div id=\"bonus_sort\" class=\"dropdown-menu \" aria-labelledby=\"dropdownFilter\">
                                        <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highRating\" data-text=\"Highest Rating\" onclick=\"return false;\">Highest Rating</a>
                                        <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"lowRating\" data-text=\"Lowest Rating\" onclick=\"return false;\">Lowest Rating</a>
                                        <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"A-Z\" data-text=\"A-Z\" onclick=\"return false\">A-Z</a>
                                        <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"Z-A\" data-text=\"Z-A\" onclick=\"return false\">Z-A</a>
                                        <a class=\"dropdown-item\" href=\"#\" data-sorttype=\"highAmount\" data-text=\"Highest Amount\" onclick=\"return false\">Higest Amount</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"list-data\"></div>
                        <div class=\"list-data-bottom\">
                            <div class=\"page-load\">
                                <span class=\"current-no\" id=\"current_bonus\">50</span>/<span id=\"total_bonuses\">934</span>
                            </div>
                            <div class=\"list-data-buttons\">
                                <a id=\"more_bonuses\" first=\"50\" max=\"50\" bonustype=\"No Deposit\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load More</a>
                                <a id=\"all_bonuses\" first=\"50\" max=\"1000\" bonustype=\"No Deposit\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load All</a>
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

            </div>


        {{ render(controller(
            'App\\\\Controller\\\\TemplateController::latestNewsAndArticlesForIndexPage'
        ))
        }}

            <div class=\"main-text-section\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-2\" aria-label=\"Scroll to description\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>

                <div class=\"container-narrow\" id=\"button-link-2\">
                    <div class=\"panel-group home-panel-group\" id=\"main-text-accordion\">
                        {% set collapse=0 %}
                        {% for segment in segmentedtext %}
                            {% if segment[1] is defined %}
                                {%set collapse=collapse+1%}
                                {%if(collapse==1)%}
                                    {%set show='collapse show'%}
                                    {%set aria='true'%}
                                {%else%}
                                    {%set show='collapse'%}
                                    {%set aria='false'%}
                                {%endif%}
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                      <h3 class=\"panel-title\">
                                        <a  data-toggle=\"collapse\"
                                            data-parent=\"#main-text-accordion\"
                                            href=\"#collapse-text-{{collapse}}\"
                                            class=\"collapse-toggle\"
                                            aria-expanded=\"{{aria}}\"
                                            >
                                              {{ segment[0]|raw }}
                                              <i class=\"fa fa-plus\"></i>
                                              <i class=\"fa fa-minus\"></i>
                                        </a>
                                      </h3>
                                    </div>
                                    <div id=\"collapse-text-{{collapse}}\" class=\"panel-collapse {{show}}\" data-parent=\"#main-text-accordion\">
                                      <div class=\"panel-body\">
                                        {{ segment[1]|raw }}
                                      </div>
                                    </div>
                                </div>
                            {% else %}
                                <h1 class=\"accordionHeading\">{{ segment[0]|raw }}</h1>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>

            </div>

            <div class=\"homepage-activities live-activities-section\">

                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-3\" aria-label=\"Scroll to Live Activities\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>

                <div class=\"container\" id=\"button-link-3\">
                    <div class=\"text-center\">
                        <h2 class=\"h1\">Live Activities</h2>
                        <p>See what our members have been saying about our casino reviews.</p>
                    </div>
                    <section class=\"box-comments box-comments-home\" id=\"ndc_live_activities\">
                        {{ liveactivities|raw }}
                    </section>

                    <div class=\"text-center\">
                        <a class=\"btn btn-light-primary\" id=\"more_activities\" data-first=\"7\"  onclick=\"return false;\">More Activities</a>
                    </div>
                </div>
            </div>


        {{ render(controller(
            'App\\\\Controller\\\\TemplateController::joinContent'
        ))
        }}


    {% endblock %}

    {% block stylesheets %}
    {% endblock %}

    {% block javascripts %}
        <script src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=joshac\"></script>
    {% endblock %}




", "index.html.twig", "/var/www/ndc_new/templates/index.html.twig");
    }
}
