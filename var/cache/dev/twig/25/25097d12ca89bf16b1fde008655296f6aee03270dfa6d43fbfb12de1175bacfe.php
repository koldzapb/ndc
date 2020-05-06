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

/* index_header.twig */
class __TwigTemplate_be3bcf2e5700c1b3982ab2f4f907c69b502e28dc4136d9e916217b67115e2e28 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index_header.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index_header.twig"));

        // line 1
        echo "<div class=\"header-content\">
    <div class=\"carousel-header-wrap\">
        <div class=\"ad-line\"></div><!--/.ad-line-->
        ";
        // line 4
        if (twig_length_filter($this->env, (isset($context["ndw"]) || array_key_exists("ndw", $context) ? $context["ndw"] : (function () { throw new RuntimeError('Variable "ndw" does not exist.', 4, $this->source); })()))) {
            echo "<h3 class=\"carousel-main-title\">No Deposit casinos of the week</h3>";
        }
        // line 5
        echo "        <div id=\"carouselHeader\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
            <div class=\"carousel-inner\" role=\"listbox\">
                ";
        // line 7
        $context["k"] = 1;
        // line 8
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ndw"]) || array_key_exists("ndw", $context) ? $context["ndw"] : (function () { throw new RuntimeError('Variable "ndw" does not exist.', 8, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["casino"]) {
            // line 9
            echo "                ";
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 9, $this->source); })()) == 1)) {
                // line 10
                echo "                <div class=\"carousel-item slide-";
                echo twig_escape_filter($this->env, (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 10, $this->source); })()), "html", null, true);
                echo " active \" role=\"option\">
                    ";
            } else {
                // line 12
                echo "                    <div class=\"carousel-item slide-";
                echo twig_escape_filter($this->env, (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 12, $this->source); })()), "html", null, true);
                echo " \" role=\"option\">
                        ";
            }
            // line 14
            echo "                        ";
            $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 14, $this->source); })()) + 1);
            // line 15
            echo "                        <div itemscope itemtype=\"http://schema.org/Offer\" >
                            <meta itemprop=\"url\" content='";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 16), "casinoname" => twig_get_attribute($this->env, $this->source, $context["casino"], "slug", [], "any", false, false, false, 16)])), "html", null, true);
            echo "'/>
                            <meta itemprop=\"name\" content=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 17), "html", null, true);
            echo "\" />
                            <div class=\"carousel-title\">
                                <a class=\"carousel-title-image\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 19), "html", null, true);
            echo "\" rel=\"noopener nofollow\" target=\"_blank\">
                                    <img class=\"lazyload\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["casino"], "logo90", [], "any", false, false, false, 20)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 20), "html", null, true);
            echo "\" width=\"90\" height=\"90\" />
                                </a>
                                <div class=\"carousel-title-holder\">
                                    <h2>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 23), "html", null, true);
            echo "</h2>
                                    ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["casino"], "IsAvailableInCountry", [], "any", false, false, false, 24) == true)) {
                // line 25
                echo "                                        <img class=\"carousel-title-flag lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\" data-original=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 25, $this->source); })()), "imgSrc", [], "any", false, false, false, 25)), "html", null, true);
                echo "\" width=\"24\" height=\"24\" alt=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25) . " flag"), "html", null, true);
                echo "\" >
                                    ";
            }
            // line 27
            echo "                                </div>
                            </div>
                            ";
            // line 29
            $context["appropBonus"] = twig_get_attribute($this->env, $this->source, (isset($context["bonus_importance"]) || array_key_exists("bonus_importance", $context) ? $context["bonus_importance"] : (function () { throw new RuntimeError('Variable "bonus_importance" does not exist.', 29, $this->source); })()), "getapropriattebonus", [0 => $context["casino"]], "method", false, false, false, 29);
            // line 30
            echo "                            <ul class=\"carousel-bonus-list\">
                                ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 31, $this->source); })()), "maxbonus", [], "any", false, false, false, 31)) {
                // line 32
                echo "                                    <li class=\"carousel-bonus-amount\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 32, $this->source); })()), "symbol", [], "any", false, false, false, 32), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 32, $this->source); })()), "maxbonus", [], "any", false, false, false, 32), ".")), "html", null, true);
                echo "</li>
                                ";
            }
            // line 34
            echo "                                <li class=\"carousel-bonus-name\" itemprop=\"description\">";
            if (twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 34, $this->source); })()), "bonustype", [], "any", false, false, false, 34)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 34, $this->source); })()), "bonustype", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            }
            echo "</li>
                                ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 35, $this->source); })()), "code", [], "any", false, false, false, 35) != null)) {
                // line 36
                echo "                                    <li class=\"carousel-bonus-code\">
                                        Code:<br/>
                                        ";
                // line 38
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 38, $this->source); })()), "code", [], "any", false, false, false, 38)) > 8)) {
                    // line 39
                    echo "                                            <span class=\"tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\"><small class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 39, $this->source); })()), "code", [], "any", false, false, false, 39), "html", null, true);
                    echo "</small></span>
                                        ";
                } else {
                    // line 41
                    echo "                                            <span class=\"tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\"><span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 41, $this->source); })()), "code", [], "any", false, false, false, 41), "html", null, true);
                    echo "</span></span>
                                        ";
                }
                // line 43
                echo "                                    </li>
                                ";
            }
            // line 45
            echo "                                <li>Min WR:<br/>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 45, $this->source); })()), "wr", [], "any", false, false, false, 45), "html", null, true);
            echo "</li>
                                ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 46, $this->source); })()), "exclusive", [], "any", false, false, false, 46) == 1)) {
                // line 47
                echo "                                    <li>Exclusive:<br/>No Deposit bonus</li>
                                ";
            }
            // line 49
            echo "                                ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 49, $this->source); })()), "tcurl", [], "any", false, false, false, 49)) > 0)) {
                // line 50
                echo "                                    <li class=\"carousel-bonus-link\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appropBonus"]) || array_key_exists("appropBonus", $context) ? $context["appropBonus"] : (function () { throw new RuntimeError('Variable "appropBonus" does not exist.', 50, $this->source); })()), "tcurl", [], "any", false, false, false, 50), "html", null, true);
                echo "\" rel=\"nofollow noopener\" target=\"_blank\">T&C's Apply</a></li>
                                ";
            }
            // line 52
            echo "                            </ul>
                            <ul class=\"carousel-activity-list\">
                                ";
            // line 54
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "posts", [], "any", false, false, false, 54)) > 0)) {
                // line 55
                echo "                                    <li>
                                        <a class=\"comments\" href=\"/casino-review/";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 56), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "slug", [], "any", false, false, false, 56), "html", null, true);
                echo "/#comments\">
                                            <span class=\"icon\"></span>
                                            ";
                // line 58
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "posts", [], "any", false, false, false, 58)), "html", null, true);
                echo " ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "posts", [], "any", false, false, false, 58)) == 1)) {
                    echo "Comment";
                } else {
                    echo "Comments";
                }
                // line 59
                echo "                                        </a><!--/.comments-->
                                    </li>
                                ";
            }
            // line 62
            echo "                                ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "likes", [], "any", false, false, false, 62)) > 0)) {
                // line 63
                echo "                                    <li>
                                        <a class=\"likes\" data-casino=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\" href=\"\"  onclick=\"return false;\">
                                            <span class=\"icon\"></span>
                                            ";
                // line 66
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "likes", [], "any", false, false, false, 66)), "html", null, true);
                echo " ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "likes", [], "any", false, false, false, 66)) == 1)) {
                    echo "Like";
                } else {
                    echo "Likes";
                }
                // line 67
                echo "                                        </a>
                                    </li>
                                ";
            }
            // line 70
            echo "                                <li>
                                    <div class=\"powered\">
                                        ";
            // line 72
            $this->loadTemplate("casino_softwares_for_country_list.html.twig", "index_header.twig", 72)->display(twig_array_merge($context, ["softwares" => twig_get_attribute($this->env, $this->source, $context["casino"], "softwares", [], "any", false, false, false, 72)]));
            // line 73
            echo "                                    </div>
                                </li>
                            </ul>
                            <div class=\"button-holder\" itemscope itemprop=\"seller\" itemtype=\"http://schema.org/Organization\">
                                <meta itemprop=\"name\" content=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 77), "html", null, true);
            echo "\" />
                                <meta itemprop=\"url\" content=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 78)])), "html", null, true);
            echo "\" />
                                <a class=\"btn btn-lg btn-primary\" href=\"/casinourl/";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 79), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 79), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener nofollow\">";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79) == "United Kingdom")) {
                echo "play";
            } else {
                echo "play now";
            }
            echo "</a>
                                <a class=\"btn btn-lg btn-light\" href=\"/casino-review/";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "slug", [], "any", false, false, false, 80), "html", null, true);
            echo "\">view details</a>
                            </div>
                        </div>
                    </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                </div>
                <div class=\"popular d-none d-md-block\">
                    <h3>
                        Popular Casinos For ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88), "html", null, true);
        echo "
                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 89, $this->source); })()), "imgSrc", [], "any", false, false, false, 89)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), "html", null, true);
        echo "\" width=\"16\" height=\"11\">
                    </h3>
                    <ul>
                        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestcasinos"]) || array_key_exists("bestcasinos", $context) ? $context["bestcasinos"] : (function () { throw new RuntimeError('Variable "bestcasinos" does not exist.', 92, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["casino"]) {
            // line 93
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 93) < 6)) {
                // line 94
                echo "                                <li  class=\"popular-casino\">
                                    <a href=\"/casinourl/";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 95), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 95), "html", null, true);
                echo "\" rel=\"noopener nofollow\" target=\"_blank\">
                                        <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
                                             data-original=\"";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "logo35", [], "any", false, false, false, 97), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 97), "html", null, true);
                echo "\" width=\"35\" height=\"35\">
                                        <span>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 98), "html", null, true);
                echo "</span>
                                    </a>
                                </li>
                            ";
            }
            // line 102
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                    </ul>
                </div>
                <ol class=\"carousel-indicators\">
                    ";
        // line 106
        $context["active"] = 0;
        // line 107
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ndw"]) || array_key_exists("ndw", $context) ? $context["ndw"] : (function () { throw new RuntimeError('Variable "ndw" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["casino"]) {
            // line 108
            echo "                        <li data-target=\"#carouselHeader\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 108, $this->source); })()), "html", null, true);
            echo "\" ";
            if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 108, $this->source); })()) == 0)) {
                echo "class='active'";
            }
            echo "></li>
                        ";
            // line 109
            $context["active"] = ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 109, $this->source); })()) + 1);
            // line 110
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                </ol>
            </div>
        </div>
    </div>
</div><!--/#content-header-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 111,  409 => 110,  407 => 109,  398 => 108,  393 => 107,  391 => 106,  386 => 103,  372 => 102,  365 => 98,  359 => 97,  352 => 95,  349 => 94,  346 => 93,  329 => 92,  321 => 89,  317 => 88,  312 => 85,  291 => 80,  279 => 79,  275 => 78,  271 => 77,  265 => 73,  263 => 72,  259 => 70,  254 => 67,  246 => 66,  241 => 64,  238 => 63,  235 => 62,  230 => 59,  222 => 58,  215 => 56,  212 => 55,  210 => 54,  206 => 52,  200 => 50,  197 => 49,  193 => 47,  191 => 46,  186 => 45,  182 => 43,  176 => 41,  170 => 39,  168 => 38,  164 => 36,  162 => 35,  155 => 34,  147 => 32,  145 => 31,  142 => 30,  140 => 29,  136 => 27,  128 => 25,  126 => 24,  122 => 23,  112 => 20,  106 => 19,  101 => 17,  97 => 16,  94 => 15,  91 => 14,  85 => 12,  79 => 10,  76 => 9,  58 => 8,  56 => 7,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header-content\">
    <div class=\"carousel-header-wrap\">
        <div class=\"ad-line\"></div><!--/.ad-line-->
        {% if ndw|length %}<h3 class=\"carousel-main-title\">No Deposit casinos of the week</h3>{%endif%}
        <div id=\"carouselHeader\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
            <div class=\"carousel-inner\" role=\"listbox\">
                {% set k=1 %}
                {% for casino in ndw %}
                {% if(k==1) %}
                <div class=\"carousel-item slide-{{ k }} active \" role=\"option\">
                    {% else %}
                    <div class=\"carousel-item slide-{{ k }} \" role=\"option\">
                        {% endif %}
                        {% set k=k+1 %}
                        <div itemscope itemtype=\"http://schema.org/Offer\" >
                            <meta itemprop=\"url\" content='{{ absolute_url(path(\"casino-review\",{\"id\":casino.id,\"casinoname\":casino.slug})) }}'/>
                            <meta itemprop=\"name\" content=\"{{ casino.casinoname }}\" />
                            <div class=\"carousel-title\">
                                <a class=\"carousel-title-image\" href=\"{{ path('visit_casino',{id:casino.id}) }}\" title=\"{{ casino.casinoname }}\" rel=\"noopener nofollow\" target=\"_blank\">
                                    <img class=\"lazyload\" src=\"{{asset(('img/lazy.png'))}}\" data-original=\"{{ asset(casino.logo90) }}\" alt=\"{{ casino.casinoname }}\" width=\"90\" height=\"90\" />
                                </a>
                                <div class=\"carousel-title-holder\">
                                    <h2>{{ casino.casinoname }}</h2>
                                    {% if(casino.IsAvailableInCountry==true)%}
                                        <img class=\"carousel-title-flag lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\" data-original=\"{{asset(country.imgSrc)}}\" width=\"24\" height=\"24\" alt=\"{{ country.name~ ' flag' }}\" >
                                    {% endif %}
                                </div>
                            </div>
                            {% set appropBonus=bonus_importance.getapropriattebonus(casino) %}
                            <ul class=\"carousel-bonus-list\">
                                {% if appropBonus.maxbonus %}
                                    <li class=\"carousel-bonus-amount\">{{ appropBonus.symbol }} {{ appropBonus.maxbonus|split('.')|first }}</li>
                                {% endif %}
                                <li class=\"carousel-bonus-name\" itemprop=\"description\">{% if appropBonus.bonustype %}{{ appropBonus.bonustype.name }}{% endif %}</li>
                                {% if appropBonus.code!=null %}
                                    <li class=\"carousel-bonus-code\">
                                        Code:<br/>
                                        {% if appropBonus.code|length > 8 %}
                                            <span class=\"tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\"><small class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">{{ appropBonus.code }}</small></span>
                                        {% else %}
                                            <span class=\"tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\"><span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">{{ appropBonus.code }}</span></span>
                                        {% endif %}
                                    </li>
                                {% endif %}
                                <li>Min WR:<br/>{{ appropBonus.wr }}</li>
                                {% if appropBonus.exclusive ==1%}
                                    <li>Exclusive:<br/>No Deposit bonus</li>
                                {% endif %}
                                {% if appropBonus.tcurl|length>0 %}
                                    <li class=\"carousel-bonus-link\"><a href=\"{{ appropBonus.tcurl }}\" rel=\"nofollow noopener\" target=\"_blank\">T&C's Apply</a></li>
                                {% endif %}
                            </ul>
                            <ul class=\"carousel-activity-list\">
                                {% if(casino.posts|length > 0) %}
                                    <li>
                                        <a class=\"comments\" href=\"/casino-review/{{ casino.id }}/{{ casino.slug }}/#comments\">
                                            <span class=\"icon\"></span>
                                            {{ casino.posts|length }} {% if (casino.posts|length == 1) %}{{ 'Comment' }}{% else %}{{ 'Comments' }}{% endif %}
                                        </a><!--/.comments-->
                                    </li>
                                {% endif %}
                                {% if casino.likes|length > 0 %}
                                    <li>
                                        <a class=\"likes\" data-casino=\"{{ casino.id }}\" href=\"\"  onclick=\"return false;\">
                                            <span class=\"icon\"></span>
                                            {{ casino.likes|length }} {% if(casino.likes|length ==1) %}{{ 'Like' }}{% else %}{{ 'Likes' }}{% endif %}
                                        </a>
                                    </li>
                                {% endif %}
                                <li>
                                    <div class=\"powered\">
                                        {% include 'casino_softwares_for_country_list.html.twig' with {'softwares': casino.softwares} %}
                                    </div>
                                </li>
                            </ul>
                            <div class=\"button-holder\" itemscope itemprop=\"seller\" itemtype=\"http://schema.org/Organization\">
                                <meta itemprop=\"name\" content=\"{{ casino.casinoname }}\" />
                                <meta itemprop=\"url\" content=\"{{ absolute_url(path('visit_casino',{id:casino.id})) }}\" />
                                <a class=\"btn btn-lg btn-primary\" href=\"/casinourl/{{ casino.id }}\" title=\"{{ casino.casinoname }}\" target=\"_blank\" rel=\"noopener nofollow\">{% if country.name=='United Kingdom' %}play{% else %}play now{% endif %}</a>
                                <a class=\"btn btn-lg btn-light\" href=\"/casino-review/{{ casino.id }}/{{ casino.slug }}\">view details</a>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
                <div class=\"popular d-none d-md-block\">
                    <h3>
                        Popular Casinos For {{ country.name }}
                        <img src=\"{{asset(country.imgSrc)}}\" alt=\"{{ country.name }}\" width=\"16\" height=\"11\">
                    </h3>
                    <ul>
                        {% for casino in bestcasinos %}
                            {% if loop.index < 6 %}
                                <li  class=\"popular-casino\">
                                    <a href=\"/casinourl/{{ casino.id }}\" title=\"{{ casino.casinoname }}\" rel=\"noopener nofollow\" target=\"_blank\">
                                        <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
                                             data-original=\"{{ casino.logo35 }}\" alt=\"{{ casino.casinoname }}\" width=\"35\" height=\"35\">
                                        <span>{{ casino.casinoname }}</span>
                                    </a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
                <ol class=\"carousel-indicators\">
                    {% set active=0 %}
                    {% for casino in ndw  %}
                        <li data-target=\"#carouselHeader\" data-slide-to=\"{{ active }}\" {% if (active==0) %}{{ \"class='active'\" }}{% endif %}></li>
                        {% set active=active + 1 %}
                    {% endfor %}
                </ol>
            </div>
        </div>
    </div>
</div><!--/#content-header-->", "index_header.twig", "/var/www/ndc_new/templates/index_header.twig");
    }
}
