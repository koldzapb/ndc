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

/* Articles/newsbycategory.html.twig */
class __TwigTemplate_8b20d06fd454dcae2959c5de2a245e7f1ecb404b039b5bfc50dbc71f27f2ac43 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/newsbycategory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/newsbycategory.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Articles/newsbycategory.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_bodyheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        // line 6
        echo "        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\">
                </div><!--/.ad-line-->
                <h1 class=\"page-title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articlecategory"]) || array_key_exists("articlecategory", $context) ? $context["articlecategory"] : (function () { throw new RuntimeError('Variable "articlecategory" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "<span class=\"total\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 10, $this->source); })())), "html", null, true);
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
            <div class=\"text-holder container\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to news\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>
                ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, (isset($context["articlecategory"]) || array_key_exists("articlecategory", $context) ? $context["articlecategory"] : (function () { throw new RuntimeError('Variable "articlecategory" does not exist.', 21, $this->source); })()), "introText", [], "any", false, false, false, 21);
        echo "
            </div>

            <div class=\"container padding-medium\">
                <span id=\"button-link-1\"></span>
                <div class=\"row\">
                    <div class=\"articles-holder col-md-8\">
                        <div class=\"row\" id=\"articles_holder_ajax\">
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["singlenews"]) {
            // line 30
            echo "                                <div itemscope itemtype=\"http://schema.org/NewsArticle\" class=\"article-box col-lg-6\">
                                    <meta  itemprop=\"image\" content=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl(twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 31)), "html", null, true);
            echo "\" />
                                    <meta  itemprop=\"mainEntityOfPage\" content=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 32)])), "html", null, true);
            echo "\" />
                                    <meta  itemprop=\"url\" content=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 33)])), "html", null, true);
            echo "\" />
                                    <meta itemprop=\"datePublished\" content=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "timeadded", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
            echo "\" />
                                    <meta itemprop=\"dateModified\" content=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "lastmodified", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "\" />

                                    <div class=\"article-box-inner\">
                                        <div class=\"article-box-image\">
                                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
                                                <img class=\"lazyload\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-360.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 40), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 40), "html", null, true);
            echo "\" width=\"360\" height=\"220\">
                                            </a>
                                        </div>
                                        <div class=\"article-box-content\">
                                            <h3>
                                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><span itemprop=\"headline\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 45), "html", null, true);
            echo "</span></a>
                                            </h3>
                                            <a class=\"article-box-date\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "gmdate", [], "any", false, false, false, 47), "html", null, true);
            echo "</a>
                                            ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 48)) {
                // line 49
                echo "                                                <p class=\"article-box-author\">author: <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 49), "slug", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\"><span itemprop=\"author\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 49), "authorname", [], "any", false, false, false, 49), "html", null, true);
                echo "</span></a></p>
                                            ";
            }
            // line 51
            echo "                                            <p class=\"article-box-descr\">";
            echo twig_get_attribute($this->env, $this->source, $context["singlenews"], "introtext", [], "any", false, false, false, 51);
            echo "</p>
                                            <div class=\"d-flex justify-content-between\">
                                                <a class=\"read-more\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 53)]), "html", null, true);
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
        // line 68
        echo "                        </div>
                    </div>

                    <div class=\"articles-sidebar col-md-4\">
                        <h3><span class=\"icon\"></span> News Categories</h3>
                        <ul>
                            <li>
                                <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">All News</a>
                            </li>
                            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articlecategories"]) || array_key_exists("articlecategories", $context) ? $context["articlecategories"] : (function () { throw new RuntimeError('Variable "articlecategories" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 78
            echo "                                <li>
                                    <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsbycategory", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">
                                        ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "
                                    </a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                        </ul>
                        <h3><span class=\"icon\"></span> Top ";
        // line 85
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["topcasinosforcountry"]) || array_key_exists("topcasinosforcountry", $context) ? $context["topcasinosforcountry"] : (function () { throw new RuntimeError('Variable "topcasinosforcountry" does not exist.', 85, $this->source); })())), "html", null, true);
        echo " Casinos in ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), "html", null, true);
        echo "</h3>
                        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topcasinosforcountry"]) || array_key_exists("topcasinosforcountry", $context) ? $context["topcasinosforcountry"] : (function () { throw new RuntimeError('Variable "topcasinosforcountry" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["casino"]) {
            // line 87
            echo "                            ";
            $context["appropBonus"] = twig_get_attribute($this->env, $this->source, (isset($context["bonus_importance"]) || array_key_exists("bonus_importance", $context) ? $context["bonus_importance"] : (function () { throw new RuntimeError('Variable "bonus_importance" does not exist.', 87, $this->source); })()), "getapropriattebonus", [0 => $context["casino"]], "method", false, false, false, 87);
            // line 88
            echo "                            <div class=\"top-casino-item\">
                                <div class=\"casino-bonus\">
                                    <p class=\"casino-bonus-amount\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 90, $this->source); })()), "symbol", [], "any", false, false, false, 90), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 90, $this->source); })()), "maxbonusshow", [], "any", false, false, false, 90), "html", null, true);
            echo "</p>
                                    ";
            // line 91
            if (twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 91, $this->source); })()), "bonustype", [], "any", false, false, false, 91)) {
                echo "<p class=\"casino-bonus-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 91, $this->source); })()), "bonustype", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
                echo "</p>";
            }
            // line 92
            echo "                                </div>
                                <div class=\"casino-info\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div class=\"casino-rating\">
                                            <h4 class=\"casino-name\"><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, ((("/casino-review/" . twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 96)) . "/") . twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 96), [" " => "-"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 96), "html", null, true);
            echo "</a></h4>
                                            <p class='casino-rating-value'><span>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "averagerating", [], "any", false, false, false, 97), "html", null, true);
            echo "</span>/5</p>
                                            <div class=\"progress\">
                                                <span class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></span>
                                            </div>
                                        </div>
                                        <div class=\"casino-logo\">
                                            <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, ((("/casino-review/" . twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 103)) . "/") . twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 103), [" " => "-"])), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["casino"], "logo50", [], "any", false, false, false, 104)), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 104), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 104), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"casino-links\">
                                        <div class=\"casino-review\">
                                            <a href=\"\" class=\"btn-like tooltip-btn\" onclick =\"return false;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Like Casino\" aria-label=\"Like Casino\" data-original-title=\"Like Casino\" data-casino=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 110), "html", null, true);
            echo "\"></a>
                                            <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, ((("/casino-review/" . twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 111)) . "/") . twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 111), [" " => "-"])), "html", null, true);
            echo "\" class=\"btn-review tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Read Review\" data-original-title=\"Read Review\" aria-label=\"Read Review\"></a>
                                        </div>
                                        <a href=\"/casinourl/";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 113), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 113), "html", null, true);
            echo "\" rel=\"noopener nofollow\" class=\"btn btn-primary\" target=\"_blank\">VISIT</a>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
                        <h3><span class=\"icon\"></span> Latest User Activities</h3>
                        ";
        // line 120
        echo (isset($context["liveactivities"]) || array_key_exists("liveactivities", $context) ? $context["liveactivities"] : (function () { throw new RuntimeError('Variable "liveactivities" does not exist.', 120, $this->source); })());
        echo "

                    </div>
                </div>
            </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 129
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
        echo "        <script>
            \$(\".header-holder\").css(\"background\",\"url(";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articlecategory"]) || array_key_exists("articlecategory", $context) ? $context["articlecategory"] : (function () { throw new RuntimeError('Variable "articlecategory" does not exist.', 134, $this->source); })()), "imglocation", [], "any", false, false, false, 134), "html", null, true);
        echo ")\");
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Articles/newsbycategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 134,  392 => 133,  382 => 132,  372 => 129,  362 => 128,  345 => 120,  341 => 118,  328 => 113,  323 => 111,  319 => 110,  306 => 104,  302 => 103,  293 => 97,  287 => 96,  281 => 92,  275 => 91,  270 => 90,  266 => 88,  263 => 87,  259 => 86,  253 => 85,  250 => 84,  240 => 80,  236 => 79,  233 => 78,  229 => 77,  224 => 75,  215 => 68,  194 => 53,  188 => 51,  180 => 49,  178 => 48,  174 => 47,  167 => 45,  155 => 40,  151 => 39,  144 => 35,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  125 => 30,  121 => 29,  110 => 21,  103 => 16,  93 => 15,  77 => 10,  71 => 6,  61 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



    {% block bodyheader %}
        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\">
                </div><!--/.ad-line-->
                <h1 class=\"page-title\">{{ articlecategory.name }}<span class=\"total\">{{ news|length }}</span></h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->
    {% endblock %}

    {% block main %}

            <div class=\"text-holder container\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to news\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>
                {{ articlecategory.introText | raw }}
            </div>

            <div class=\"container padding-medium\">
                <span id=\"button-link-1\"></span>
                <div class=\"row\">
                    <div class=\"articles-holder col-md-8\">
                        <div class=\"row\" id=\"articles_holder_ajax\">
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
                                            <a class=\"article-box-date\">{{ singlenews.gmdate }}</a>
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
                    </div>

                    <div class=\"articles-sidebar col-md-4\">
                        <h3><span class=\"icon\"></span> News Categories</h3>
                        <ul>
                            <li>
                                <a href=\"{{ path('news') }}\">All News</a>
                            </li>
                            {% for category in articlecategories %}
                                <li>
                                    <a href=\"{{ path('newsbycategory',{'slug':category.slug}) }}\">
                                        {{ category.name }}
                                    </a>
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
                                            <h4 class=\"casino-name\"><a href=\"{{ '/casino-review/'~casino.id~'/'~casino.casinoname|replace({' ':'-' }) }}\">{{ casino.casinoname }}</a></h4>
                                            <p class='casino-rating-value'><span>{{ casino.averagerating }}</span>/5</p>
                                            <div class=\"progress\">
                                                <span class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></span>
                                            </div>
                                        </div>
                                        <div class=\"casino-logo\">
                                            <a href=\"{{ '/casino-review/'~casino.id~'/'~casino.casinoname|replace({' ':'-' }) }}\">
                                                <img src=\"{{ asset(casino.logo50) }}\" title=\"{{ casino.casinoname }}\" alt=\"{{ casino.casinoname }}\" width=\"50\" height=\"50\">
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"casino-links\">
                                        <div class=\"casino-review\">
                                            <a href=\"\" class=\"btn-like tooltip-btn\" onclick =\"return false;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Like Casino\" aria-label=\"Like Casino\" data-original-title=\"Like Casino\" data-casino=\"{{ casino.id }}\"></a>
                                            <a href=\"{{ '/casino-review/'~casino.id~'/'~casino.casinoname|replace({' ':'-' }) }}\" class=\"btn-review tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Read Review\" data-original-title=\"Read Review\" aria-label=\"Read Review\"></a>
                                        </div>
                                        <a href=\"/casinourl/{{ casino.id }}\" title=\"{{ casino.casinoname }}\" rel=\"noopener nofollow\" class=\"btn btn-primary\" target=\"_blank\">VISIT</a>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}

                        <h3><span class=\"icon\"></span> Latest User Activities</h3>
                        {{ liveactivities|raw }}

                    </div>
                </div>
            </div>

    {% endblock %}

    {% block stylesheets %}
    {% endblock %}


    {% block javascripts %}
        <script>
            \$(\".header-holder\").css(\"background\",\"url({{ articlecategory.imglocation }})\");
        </script>
    {% endblock %}


", "Articles/newsbycategory.html.twig", "/var/www/ndc_new/templates/Articles/newsbycategory.html.twig");
    }
}
