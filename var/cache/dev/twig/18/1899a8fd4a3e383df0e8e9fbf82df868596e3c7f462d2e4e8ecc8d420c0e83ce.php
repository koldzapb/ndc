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

/* Articles/articles.html.twig */
class __TwigTemplate_1ae76c62d406e9e9bd641b8bd1e1d2cd7b6a8ca4e8b8dbf4013e66d314cb12eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Articles/articles.html.twig", 1);
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
        echo "
        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\">
                </div><!--/.ad-line-->
                <h1 class=\"page-title\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "heading", [], "any", false, false, false, 9)]), "html", null, true);
        echo "<span class=\"total\">";
        echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</span></h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "
            <div class=\"text-holder\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to articles\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>

                <span id=\"button-link-1\"></span>

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"articles-holder col-md-8\">
                            <div class=\"row\" id=\"articles_holder_ajax\">
                                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 29
            echo "                                    <div class=\"article-box col-lg-6\">
                                        <div class=\"article-box-inner\">
                                            <div class=\"article-box-image\">
                                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
                                                    <img class=\"lazyload\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-360.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image360", [], "any", false, false, false, 33), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "heading", [], "any", false, false, false, 33), "html", null, true);
            echo "\" width=\"360\" height=\"220\">
                                                </a>
                                            </div>
                                            <div class=\"article-box-content\">
                                                <h3>
                                                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "heading", [], "any", false, false, false, 38), "html", null, true);
            echo "</a>
                                                </h3>
                                                <p class=\"article-box-date\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "gmdate", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
                                                <p class=\"article-box-descr\">";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["article"], "introtext", [], "any", false, false, false, 41);
            echo "</p>
                                                <div class=\"d-flex justify-content-between\">
                                                    <a class=\"read-more\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Read more</a>
                                                    <span class=\"views-no\"><span class=\"icon\"></span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "totalviews", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                            </div>
                            <div class=\"list-data-bottom\">
                                <div class=\"page-load\">
                                    <span class=\"current-no\" id=\"articled_current\">";
        // line 53
        if (((isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 53, $this->source); })()) < 24)) {
            echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 53, $this->source); })()), "html", null, true);
        } else {
            echo "24";
        }
        echo "</span>/<span id=\"articles_totalnumber\">";
        echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "</span>
                                </div>
                                ";
        // line 55
        if (((isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 55, $this->source); })()) > 24)) {
            // line 56
            echo "                                <a id=\"load_articles_button\" first=\"24\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load More</a>
                                ";
        }
        // line 58
        echo "                            </div>
                        </div>

                        <div class=\"articles-sidebar col-md-4\">
                            <h3><span class=\"icon\"></span> News Categories</h3>
                            <ul>
                                <li>
                                    <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">All News</a>
                                </li>
                                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articlecategories"]) || array_key_exists("articlecategories", $context) ? $context["articlecategories"] : (function () { throw new RuntimeError('Variable "articlecategories" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 68
            echo "                                    <li>
                                        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsbycategory", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 69), "html", null, true);
            echo "</a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                            </ul>

                            <h3><span class=\"icon\"></span> Top ";
        // line 74
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["topcasinosforcountry"]) || array_key_exists("topcasinosforcountry", $context) ? $context["topcasinosforcountry"] : (function () { throw new RuntimeError('Variable "topcasinosforcountry" does not exist.', 74, $this->source); })())), "html", null, true);
        echo " Casinos in ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), "html", null, true);
        echo "</h3>
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topcasinosforcountry"]) || array_key_exists("topcasinosforcountry", $context) ? $context["topcasinosforcountry"] : (function () { throw new RuntimeError('Variable "topcasinosforcountry" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["casino"]) {
            // line 76
            echo "                                ";
            $context["appropBonus"] = twig_get_attribute($this->env, $this->source, (isset($context["bonus_importance"]) || array_key_exists("bonus_importance", $context) ? $context["bonus_importance"] : (function () { throw new RuntimeError('Variable "bonus_importance" does not exist.', 76, $this->source); })()), "getapropriattebonus", [0 => $context["casino"]], "method", false, false, false, 76);
            // line 77
            echo "                                <div class=\"top-casino-item\">
                                    <div class=\"casino-bonus\">
                                        <p class=\"casino-bonus-amount\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 79, $this->source); })()), "symbol", [], "any", false, false, false, 79), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 79, $this->source); })()), "maxbonusshow", [], "any", false, false, false, 79), "html", null, true);
            echo "</p>
                                        ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 80, $this->source); })()), "bonustype", [], "any", false, false, false, 80)) {
                echo "<p class=\"casino-bonus-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 80, $this->source); })()), "bonustype", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
                echo "</p>";
            }
            // line 81
            echo "                                    </div>
                                    <div class=\"casino-info\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div class=\"casino-rating\">
                                                <h4 class=\"casino-name\"><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 85), "casinoname" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 85), [" " => "-", "'" => ""])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 85), "html", null, true);
            echo "</a></h4>
                                                <p class='casino-rating-value'><span>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "averagerating", [], "any", false, false, false, 86), "html", null, true);
            echo "</span>/5</p>
                                                <div class=\"progress\">
                                                    <span class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></span>
                                                </div>
                                            </div>
                                            <div class=\"casino-logo\">
                                                <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 92), "casinoname" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 92), [" " => "-", "'" => ""])]), "html", null, true);
            echo "\">
                                                    <img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["casino"], "logo50", [], "any", false, false, false, 93)), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 93), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 93), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"casino-links\">
                                            <div class=\"casino-review\">
                                                <a href=\"\" class=\"btn-like tooltip-btn\" onclick =\"return false;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like Casino\" data-casino=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 99), "html", null, true);
            echo "\" aria-label=\"Like Casino\"></a>
                                                <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, ((("/casino-review/" . twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 100)) . "/") . twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 100), [" " => "-"])), "html", null, true);
            echo "\" class=\"btn-review tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Read Review\" aria-label=\"Read Review\"></a>
                                            </div>
                                            <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 102), "html", null, true);
            echo "\" rel=\"noopener nofollow\" class=\"btn btn-primary\" target=\"_blank\">VISIT</a>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
                            <h3><span class=\"icon\"></span> Latest User Activities</h3>
                            ";
        // line 109
        echo (isset($context["liveactivities"]) || array_key_exists("liveactivities", $context) ? $context["liveactivities"] : (function () { throw new RuntimeError('Variable "liveactivities" does not exist.', 109, $this->source); })());
        echo "

                        </div>
                    </div>
                </div>
            </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Articles/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 109,  320 => 107,  307 => 102,  302 => 100,  298 => 99,  285 => 93,  281 => 92,  272 => 86,  266 => 85,  260 => 81,  254 => 80,  249 => 79,  245 => 77,  242 => 76,  238 => 75,  232 => 74,  228 => 72,  217 => 69,  214 => 68,  210 => 67,  205 => 65,  196 => 58,  192 => 56,  190 => 55,  179 => 53,  174 => 50,  162 => 44,  158 => 43,  153 => 41,  149 => 40,  142 => 38,  130 => 33,  126 => 32,  121 => 29,  117 => 28,  103 => 16,  93 => 15,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block bodyheader %}

        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\">
                </div><!--/.ad-line-->
                <h1 class=\"page-title\">{{ page.heading|shortCodes }}<span class=\"total\">{{ totalnumber }}</span></h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->

    {% endblock %}

    {% block main %}

            <div class=\"text-holder\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to articles\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>

                <span id=\"button-link-1\"></span>

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"articles-holder col-md-8\">
                            <div class=\"row\" id=\"articles_holder_ajax\">
                                {% for article in articles  %}
                                    <div class=\"article-box col-lg-6\">
                                        <div class=\"article-box-inner\">
                                            <div class=\"article-box-image\">
                                                <a href=\"{{ path('article',{slug:article.slug}) }}\">
                                                    <img class=\"lazyload\" src=\"{{asset(('img/lazy-360.png'))}}\" data-original=\"{{ article.image360 }}\" alt=\"{{ article.heading }}\" width=\"360\" height=\"220\">
                                                </a>
                                            </div>
                                            <div class=\"article-box-content\">
                                                <h3>
                                                    <a href=\"{{ path('article', { slug: article.slug }) }}\">{{ article.heading }}</a>
                                                </h3>
                                                <p class=\"article-box-date\">{{ article.gmdate }}</a>
                                                <p class=\"article-box-descr\">{{ article.introtext|raw }}</p>
                                                <div class=\"d-flex justify-content-between\">
                                                    <a class=\"read-more\" href=\"{{ path('article', { slug: article.slug }) }}\">Read more</a>
                                                    <span class=\"views-no\"><span class=\"icon\"></span>{{ article.totalviews }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                            <div class=\"list-data-bottom\">
                                <div class=\"page-load\">
                                    <span class=\"current-no\" id=\"articled_current\">{% if(totalnumber < 24 ) %}{{ totalnumber }}{% else %}24{% endif %}</span>/<span id=\"articles_totalnumber\">{{ totalnumber }}</span>
                                </div>
                                {% if totalnumber >24 %}
                                <a id=\"load_articles_button\" first=\"24\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load More</a>
                                {% endif %}
                            </div>
                        </div>

                        <div class=\"articles-sidebar col-md-4\">
                            <h3><span class=\"icon\"></span> News Categories</h3>
                            <ul>
                                <li>
                                    <a href=\"{{ path('news') }}\">All News</a>
                                </li>
                                {% for category in articlecategories %}
                                    <li>
                                        <a href=\"{{ path('newsbycategory',{'slug':category.slug}) }}\">{{ category.name }}</a>
                                    </li>
                                {% endfor %}
                            </ul>

                            <h3><span class=\"icon\"></span> Top {{topcasinosforcountry|length}} Casinos in {{ country.name }}</h3>
                            {% for casino in topcasinosforcountry %}
                                {% set appropBonus=bonus_importance.getapropriattebonus(casino) %}
                                <div class=\"top-casino-item\">
                                    <div class=\"casino-bonus\">
                                        <p class=\"casino-bonus-amount\">{{ appropBonus.symbol }}{{ appropBonus.maxbonusshow }}</p>
                                        {% if appropBonus.bonustype %}<p class=\"casino-bonus-name\">{{ appropBonus.bonustype.name }}</p>{% endif %}
                                    </div>
                                    <div class=\"casino-info\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div class=\"casino-rating\">
                                                <h4 class=\"casino-name\"><a href=\"{{ path('casino-review',{'id':casino.id,'casinoname':casino.casinoname|replace({\" \":\"-\",\"'\":\"\" }) }) }}\">{{ casino.casinoname }}</a></h4>
                                                <p class='casino-rating-value'><span>{{ casino.averagerating }}</span>/5</p>
                                                <div class=\"progress\">
                                                    <span class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></span>
                                                </div>
                                            </div>
                                            <div class=\"casino-logo\">
                                                <a href=\"{{ path('casino-review',{'id':casino.id,'casinoname':casino.casinoname|replace({\" \":\"-\",\"'\":\"\" }) }) }}\">
                                                    <img src=\"{{ asset(casino.logo50) }}\" title=\"{{ casino.casinoname }}\" alt=\"{{ casino.casinoname }}\" width=\"50\" height=\"50\">
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"casino-links\">
                                            <div class=\"casino-review\">
                                                <a href=\"\" class=\"btn-like tooltip-btn\" onclick =\"return false;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like Casino\" data-casino=\"{{ casino.id }}\" aria-label=\"Like Casino\"></a>
                                                <a href=\"{{ '/casino-review/'~casino.id~'/'~casino.casinoname|replace({' ':'-' }) }}\" class=\"btn-review tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Read Review\" aria-label=\"Read Review\"></a>
                                            </div>
                                            <a href=\"{{ path('visit_casino',{'id':casino.id}) }}\" title=\"{{ casino.casinoname }}\" rel=\"noopener nofollow\" class=\"btn btn-primary\" target=\"_blank\">VISIT</a>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}

                            <h3><span class=\"icon\"></span> Latest User Activities</h3>
                            {{ liveactivities|raw }}

                        </div>
                    </div>
                </div>
            </div>

    {% endblock %}", "Articles/articles.html.twig", "/var/www/ndc_new/templates/Articles/articles.html.twig");
    }
}
