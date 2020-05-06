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

/* Articles/news.html.twig */
class __TwigTemplate_204ba6ad81b5427edd65f5ca06991ad7e099011227515719ad99f8c7e12c58ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/news.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Articles/news.html.twig", 1);
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

    // line 20
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "            <div class=\"text-holder container\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to news\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>
                <div class=\"page-content\">";
        // line 25
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 25, $this->source); })()), "content", [], "any", false, false, false, 25);
        echo "</div>
            </div>

            <div class=\"container padding-medium\">
                <span id=\"button-link-1\"></span>
                <div class=\"row\">
                    <div class=\"articles-holder col-md-8\">
                        <div class=\"row\" id=\"news_holder_ajax\">
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["singlenews"]) {
            // line 34
            echo "                                <div itemscope itemtype=\"http://schema.org/NewsArticle\" class=\"article-box col-lg-6\">
                                    <meta  itemprop=\"image\" content=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl(twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 35)), "html", null, true);
            echo "\" />
                                    <meta  itemprop=\"mainEntityOfPage\" content=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 36)])), "html", null, true);
            echo "\" />
                                    <meta  itemprop=\"url\" content=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 37)])), "html", null, true);
            echo "\" />
                                    <meta itemprop=\"datePublished\" content=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "timeadded", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true);
            echo "\" />
                                    <meta itemprop=\"dateModified\" content=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "lastmodified", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true);
            echo "\" />
                                    <div class=\"article-box-inner\">
                                        <div class=\"article-box-image\">
                                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">
                                                <img class=\"lazyload\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-360.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 43), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 43), "html", null, true);
            echo "\" width=\"360\" height=\"220\">
                                            </a>
                                        </div>
                                        <div class=\"article-box-content\">
                                            <h3>
                                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"><span itemprop=\"headline\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 48), "html", null, true);
            echo "</span></a>
                                            </h3>
                                            <p class=\"article-box-date\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "gmdate", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                                            ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 51)) {
                // line 52
                echo "                                                <p class=\"article-box-author\">author: <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 52), "slug", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\"><span itemprop=\"author\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 52), "authorname", [], "any", false, false, false, 52), "html", null, true);
                echo "</span></a></p>
                                            ";
            }
            // line 54
            echo "                                            <p class=\"article-box-descr\">";
            echo twig_get_attribute($this->env, $this->source, $context["singlenews"], "introtext", [], "any", false, false, false, 54);
            echo "</p>
                                            <div class=\"d-flex justify-content-between\">
                                                <a class=\"read-more\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-none\" itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\" >
                                        <div class=\"d-none\" itemprop=\"logo\" itemscope itemtype=\"https://schema.org/ImageObject\">
                                            <img src=\"https://nodepositcasino.org/img/logo.svg\"/>
                                            <meta itemprop=\"url\" content=\"https://nodepositcasino.org/img/logo.png\">
                                            <meta itemprop=\"width\" content=\"400\">
                                            <meta itemprop=\"height\" content=\"60\">
                                        </div>
                                        <meta itemprop=\"name\" content=\"No Deposit Casino\">
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singlenews'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </div>

                        <div class=\"list-data-bottom\">
                            <div class=\"page-load\">
                                <span class=\"current-no\" id=\"news_current\">10</span>/<span id=\"news_totalnumber\">";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "</span>
                            </div>
                            <a id=\"load_news_button\" data-first=\"10\" data-clicked=\"false\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load More</a>
                        </div>

                        <div id=\"loading\">
                            Loading Please Wait......
                        </div>

                    </div>

                    <div class=\"articles-sidebar col-md-4\">
                        <h3><span class=\"icon\"></span> News Categories</h3>
                        <ul>
                            <li>
                                <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">All News</a>
                            </li>
                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articlecategories"]) || array_key_exists("articlecategories", $context) ? $context["articlecategories"] : (function () { throw new RuntimeError('Variable "articlecategories" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 93
            echo "                            <li>
                                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsbycategory", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 94), "html", null, true);
            echo "</a>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                        </ul>

                        <h3><span class=\"icon\"></span>Top ";
        // line 99
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["topcasinosforcountry"]) || array_key_exists("topcasinosforcountry", $context) ? $context["topcasinosforcountry"] : (function () { throw new RuntimeError('Variable "topcasinosforcountry" does not exist.', 99, $this->source); })())), "html", null, true);
        echo " Casinos in ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 99, $this->source); })()), "name", [], "any", false, false, false, 99), "html", null, true);
        echo "</h3>
                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topcasinosforcountry"]) || array_key_exists("topcasinosforcountry", $context) ? $context["topcasinosforcountry"] : (function () { throw new RuntimeError('Variable "topcasinosforcountry" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["casino"]) {
            // line 101
            echo "                            ";
            $context["appropBonus"] = twig_get_attribute($this->env, $this->source, (isset($context["bonus_importance"]) || array_key_exists("bonus_importance", $context) ? $context["bonus_importance"] : (function () { throw new RuntimeError('Variable "bonus_importance" does not exist.', 101, $this->source); })()), "getapropriattebonus", [0 => $context["casino"]], "method", false, false, false, 101);
            // line 102
            echo "                            <div class=\"top-casino-item\">
                                <div class=\"casino-bonus\">
                                    <p class=\"casino-bonus-amount\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 104, $this->source); })()), "symbol", [], "any", false, false, false, 104), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 104, $this->source); })()), "maxbonusshow", [], "any", false, false, false, 104), "html", null, true);
            echo "</p>
                                    ";
            // line 105
            if (twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 105, $this->source); })()), "bonustype", [], "any", false, false, false, 105)) {
                echo "<p class=\"casino-bonus-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 105, $this->source); })()), "bonustype", [], "any", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
                echo "</p>";
            }
            // line 106
            echo "                                </div>
                                <div class=\"casino-info\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div class=\"casino-rating\">
                                            <h4 class=\"casino-name\"><a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 110), "casinoname" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 110), [" " => "-", "'" => ""])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 110), "html", null, true);
            echo "</a></h4>
                                            <p class='casino-rating-value'><span>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "averagerating", [], "any", false, false, false, 111), "html", null, true);
            echo "</span>/5</p>
                                            <div class=\"progress\">
                                                <span class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></span>
                                            </div>
                                        </div>
                                        <div class=\"casino-logo\">
                                            <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 117), "casinoname" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 117), [" " => "-", "'" => ""])]), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["casino"], "logo50", [], "any", false, false, false, 118)), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 118), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 118), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"casino-links\">
                                        <div class=\"casino-review\">
                                            <a href=\"\" class=\"btn-like tooltip-btn\" onclick =\"return false;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Like Casino\" data-original-title=\"Like Casino\" aria-label=\"Like Casino\" data-casino=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\"></a>
                                            <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, ((("/casino-review/" . twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 125)) . "/") . twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 125), [" " => "-"])), "html", null, true);
            echo "\" class=\"btn-review tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Read Review\" data-original-title=\"Read Review\" aria-label=\"Read Review\"></a>
                                        </div>
                                        <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 127)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 127), "html", null, true);
            echo "\" rel=\"noopener nofollow\" class=\"btn btn-primary\" target=\"_blank\">VISIT</a>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "
                        <h3><span class=\"icon\"></span> Latest User Activities</h3>
                        ";
        // line 134
        echo (isset($context["liveactivities"]) || array_key_exists("liveactivities", $context) ? $context["liveactivities"] : (function () { throw new RuntimeError('Variable "liveactivities" does not exist.', 134, $this->source); })());
        echo "

                    </div>
                </div>
            </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Articles/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 134,  352 => 132,  339 => 127,  334 => 125,  330 => 124,  317 => 118,  313 => 117,  304 => 111,  298 => 110,  292 => 106,  286 => 105,  281 => 104,  277 => 102,  274 => 101,  270 => 100,  264 => 99,  260 => 97,  249 => 94,  246 => 93,  242 => 92,  237 => 90,  219 => 75,  213 => 71,  192 => 56,  186 => 54,  178 => 52,  176 => 51,  172 => 50,  165 => 48,  153 => 43,  149 => 42,  143 => 39,  139 => 38,  135 => 37,  131 => 36,  127 => 35,  124 => 34,  120 => 33,  109 => 25,  103 => 21,  93 => 20,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
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
            <div class=\"text-holder container\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to news\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>
                <div class=\"page-content\">{{ page.content|raw }}</div>
            </div>

            <div class=\"container padding-medium\">
                <span id=\"button-link-1\"></span>
                <div class=\"row\">
                    <div class=\"articles-holder col-md-8\">
                        <div class=\"row\" id=\"news_holder_ajax\">
                            {% for singlenews in news  %}
                                <div itemscope itemtype=\"http://schema.org/NewsArticle\" class=\"article-box col-lg-6\">
                                    <meta  itemprop=\"image\" content=\"{{ absolute_url(singlenews.image360) }}\" />
                                    <meta  itemprop=\"mainEntityOfPage\" content=\"{{ absolute_url(path('singlenews',{slug:singlenews.slug})) }}\" />
                                    <meta  itemprop=\"url\" content=\"{{ absolute_url(path('singlenews',{slug:singlenews.slug})) }}\" />
                                    <meta itemprop=\"datePublished\" content=\"{{ singlenews.timeadded|date('Y-m-d') }}\" />
                                    <meta itemprop=\"dateModified\" content=\"{{ singlenews.lastmodified|date('Y-m-d') }}\" />
                                    <div class=\"article-box-inner\">
                                        <div class=\"article-box-image\">
                                            <a href=\"{{ path('singlenews',{slug:singlenews.slug}) }}\">
                                                <img class=\"lazyload\" src=\"{{asset(('img/lazy-360.png'))}}\" data-original=\"{{ singlenews.image360 }}\" alt=\"{{ singlenews.heading }}\" width=\"360\" height=\"220\">
                                            </a>
                                        </div>
                                        <div class=\"article-box-content\">
                                            <h3>
                                                <a href=\"{{ path('singlenews', { slug: singlenews.slug }) }}\"><span itemprop=\"headline\">{{ singlenews.heading }}</span></a>
                                            </h3>
                                            <p class=\"article-box-date\">{{ singlenews.gmdate }}</p>
                                            {% if singlenews.author %}
                                                <p class=\"article-box-author\">author: <a href=\"{{ path('author',{\"slug\":singlenews.author.slug}) }}\"><span itemprop=\"author\">{{ singlenews.author.authorname }}</span></a></p>
                                            {% endif %}
                                            <p class=\"article-box-descr\">{{ singlenews.introtext|raw }}</p>
                                            <div class=\"d-flex justify-content-between\">
                                                <a class=\"read-more\" href=\"{{ path('singlenews', { slug: singlenews.slug }) }}\">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-none\" itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\" >
                                        <div class=\"d-none\" itemprop=\"logo\" itemscope itemtype=\"https://schema.org/ImageObject\">
                                            <img src=\"https://nodepositcasino.org/img/logo.svg\"/>
                                            <meta itemprop=\"url\" content=\"https://nodepositcasino.org/img/logo.png\">
                                            <meta itemprop=\"width\" content=\"400\">
                                            <meta itemprop=\"height\" content=\"60\">
                                        </div>
                                        <meta itemprop=\"name\" content=\"No Deposit Casino\">
                                    </div>
                                </div>
                            {% endfor %}
                        </div>

                        <div class=\"list-data-bottom\">
                            <div class=\"page-load\">
                                <span class=\"current-no\" id=\"news_current\">10</span>/<span id=\"news_totalnumber\">{{ totalnumber }}</span>
                            </div>
                            <a id=\"load_news_button\" data-first=\"10\" data-clicked=\"false\" href=\"\" onclick=\"return false\" class=\"btn btn-orange-outline\">Load More</a>
                        </div>

                        <div id=\"loading\">
                            Loading Please Wait......
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

                        <h3><span class=\"icon\"></span>Top {{topcasinosforcountry|length}} Casinos in {{ country.name }}</h3>
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
                                            <a href=\"\" class=\"btn-like tooltip-btn\" onclick =\"return false;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Like Casino\" data-original-title=\"Like Casino\" aria-label=\"Like Casino\" data-casino=\"{{ casino.id }}\"></a>
                                            <a href=\"{{ '/casino-review/'~casino.id~'/'~casino.casinoname|replace({' ':'-' }) }}\" class=\"btn-review tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Read Review\" data-original-title=\"Read Review\" aria-label=\"Read Review\"></a>
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

    {% endblock %}", "Articles/news.html.twig", "/var/www/ndc_new/templates/Articles/news.html.twig");
    }
}
