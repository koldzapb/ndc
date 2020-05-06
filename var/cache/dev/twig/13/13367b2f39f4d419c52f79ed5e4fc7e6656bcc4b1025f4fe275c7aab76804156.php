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

/* Bonus/most_liked.html.twig */
class __TwigTemplate_e0da9578e9bf6230ad8b79f864d28617355d80f236c3fa051c43e50af9412595 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bonus/most_liked.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bonus/most_liked.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            echo "<div class=\"container most-liked\">
    <h2 class=\"most-liked-headline\">Most Liked Casino Bonuses in the last 30 days</h2>
    <div class=\"casino-list-bonuses\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bonus"]) {
                // line 6
                echo "            <div itemscope itemtype=\"http://schema.org/Offer\">
                <meta itemprop=\"url\" content='";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 7), "casino", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 7), "casino", [], "any", false, false, false, 7), "slug", [], "any", false, false, false, 7)])), "html", null, true);
                echo "' />
                <meta itemprop=\"name\" content=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 8), "casino", [], "any", false, false, false, 8), "casinoname", [], "any", false, false, false, 8), "html", null, true);
                echo "\" />
                <div class='casino-list-row'>

                    <div class='casino-logo no-border casino-list-item'>
                        <span class=\"flag\">
                            <img src='";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 13, $this->source); })()), "imgSrc", [], "any", false, false, false, 13), "html", null, true);
                echo "' alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
                echo "\" width=\"16\" height=\"11\">
                        </span>
                        <a href='";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 15), "casino", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)]), "html", null, true);
                echo "' title='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 15), "casino", [], "any", false, false, false, 15), "casinoname", [], "any", false, false, false, 15), "html", null, true);
                echo "' rel='noopener nofollow' target='_blank'>
                            <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy.png"), "html", null, true);
                echo "\" data-original='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 16), "casino", [], "any", false, false, false, 16), "logo90", [], "any", false, false, false, 16), "html", null, true);
                echo "' title='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 16), "casino", [], "any", false, false, false, 16), "casinoname", [], "any", false, false, false, 16), "html", null, true);
                echo "'  alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 16), "casino", [], "any", false, false, false, 16), "casinoname", [], "any", false, false, false, 16), "html", null, true);
                echo "' width=\"90\" height=\"90\" class=\"lazyload\">
                        </a>
                        ";
                // line 18
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 18), "exclusive", [], "any", false, false, false, 18) == 1)) {
                    // line 19
                    echo "                            <span class='box-exclusive'>Exclusive</span>
                        ";
                }
                // line 21
                echo "                    </div>

                    <div class='casino-list-item hidden-cell casino-comments'>
                        <span class=\"likes-no\"><span class=\"icon\"></span>
                        <span class=\"no a\">";
                // line 25
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 25), "likes", [], "any", false, false, false, 25)), "html", null, true);
                echo "</span> ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 25), "likes", [], "any", false, false, false, 25)) == 1)) {
                    echo "Like";
                } else {
                    echo "Likes";
                }
                echo "</span>
                    </div>

                    ";
                // line 28
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, true, false, 28), "bonustypes", [], "any", false, true, false, 28), 0, [], "array", true, true, false, 28) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 28), "bonustypes", [], "any", false, false, false, 28), 0, [], "array", false, false, false, 28), "name", [], "any", false, false, false, 28) == "Casino Spins"))) {
                    // line 29
                    echo "                        <div class='casino-list-item casino-bonus'>
                            <p class=\"casino-bonus-freespins\"> ";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 30), "freespins", [], "any", false, false, false, 30), "html", null, true);
                    echo " </p>
                            <p class=\"casino-bonus-name\" itemprop=\"description\"> ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 31), "bonustypes", [], "any", false, false, false, 31), 0, [], "array", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                    echo " </p>
                            <p class=\"casino-bonus-wr\">Wr:";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 32), "wr", [], "any", false, false, false, 32), "html", null, true);
                    echo "</p>
                        </div>
                    ";
                } else {
                    // line 35
                    echo "                        <div class='casino-list-item casino-bonus'>
                            <p class=\"casino-bonus-amount\">";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 36), "symbol", [], "any", false, false, false, 36), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 36), "maxbonusshow", [], "any", false, false, false, 36), "html", null, true);
                    echo "</p>
                            <p class=\"casino-bonus-name\" itemprop=\"description\">";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 37), "bonustypename", [], "any", false, false, false, 37), "html", null, true);
                    echo "</p>
                            ";
                    // line 38
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 38), "code", [], "any", false, false, false, 38)) > 0)) {
                        // line 39
                        echo "                                <p class=\"casino-bonus-code\">Code:
                                    <span>";
                        // line 40
                        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 40), "code", [], "any", false, false, false, 40), 0, 13), "html", null, true);
                        echo "</span>
                                    <span class=\"code_hover tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\">
                                        <span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">";
                        // line 42
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 42), "code", [], "any", false, false, false, 42), "html", null, true);
                        echo "</span>
                                    </span>
                                </p>
                            ";
                    }
                    // line 46
                    echo "                        </div>
                    ";
                }
                // line 48
                echo "

                    <div class='casino-list-item casino-rating hidden-cell'>
                        <p class='cell-subtitle'>Rating</p>
                        <p class='casino-rating-value'><span>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 52), "casino", [], "any", false, false, false, 52), "averagerating", [], "any", false, false, false, 52), "html", null, true);
                echo "</span>/5</p>
                        <div class='progress'>
                            <span class='progress-bar' role='progressbar' style='width: ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 54), "casino", [], "any", false, false, false, 54), "ratingpercent", [], "any", false, false, false, 54), "html", null, true);
                echo "%;' aria-valuenow='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 54), "casino", [], "any", false, false, false, 54), "ratingpercent", [], "any", false, false, false, 54), "html", null, true);
                echo "' aria-valuemin='0' aria-valuemax='100'>
                            </span>
                        </div>
                    </div>


                    <div class='casino-list-item casino-powered-by hidden-cell'>
                        <p class='cell-subtitle'>Powered By</p>
                        ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["bonus"], 1, [], "array", false, false, false, 62));
                foreach ($context['_seq'] as $context["_key"] => $context["software"]) {
                    // line 63
                    echo "                            <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
             data-original='";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "image25", [], "any", false, false, false, 64), "html", null, true);
                    echo "' style='opacity:";
                    if ((twig_get_attribute($this->env, $this->source, $context["software"], "availableincountry", [], "any", false, false, false, 64) == 1)) {
                        echo "1";
                    } else {
                        echo "0.3";
                    }
                    echo "' width=\"25\" height=\"15\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "title", [], "any", false, false, false, 64), "html", null, true);
                    echo "\">
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['software'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 66)) == 1)) {
                    // line 67
                    echo "                            <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
             data-original='";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 68), 0, [], "array", false, false, false, 68), "image25", [], "any", false, false, false, 68), "html", null, true);
                    echo "' style='opacity:";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 68), 0, [], "array", false, false, false, 68), "availableincountry", [], "any", false, false, false, 68) == 1)) {
                        echo "1";
                    } else {
                        echo "0.3";
                    }
                    echo "' alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 68), 0, [], "array", false, false, false, 68), "title", [], "any", false, false, false, 68), "html", null, true);
                    echo "\">
                        ";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 69
$context["bonus"], 2, [], "array", false, false, false, 69)) > 1)) {
                    // line 70
                    echo "                            <div class='more-softwares'>+";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 70)), "html", null, true);
                    echo "
                                <div class='softwares_hover'>
                                    ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 72));
                    foreach ($context['_seq'] as $context["_key"] => $context["hoversoftware"]) {
                        // line 73
                        echo "                                        <img  class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
             data-original='";
                        // line 74
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hoversoftware"], "image25", [], "any", false, false, false, 74), "html", null, true);
                        echo "' style='opacity:";
                        if ((twig_get_attribute($this->env, $this->source, $context["hoversoftware"], "availableincountry", [], "any", false, false, false, 74) == 1)) {
                            echo "1";
                        } else {
                            echo "0.3";
                        }
                        echo "' width=\"25\" height=\"15\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hoversoftware"], "title", [], "any", false, false, false, 74), "html", null, true);
                        echo "\">
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hoversoftware'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "                                </div>
                            </div>
                        ";
                }
                // line 79
                echo "                    </div>



                    <div class='casino-list-item casino-review hidden-cell'>
                        <a href='#' class='btn-like tooltip-btn' data-toggle='tooltip' data-placement='top' title='Like' onclick='return false;' data-bonus='";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
                echo "' aria-label=\"Like\"></a>
                        <a href='";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 85), "casino", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 85), "casino", [], "any", false, false, false, 85), "slug", [], "any", false, false, false, 85)]), "html", null, true);
                echo "' class='btn-review tooltip-btn' data-toggle='tooltip' data-placement='top' title='Read Review' aria-label=\"Read Review\"></a>
                    </div>

                    <div class='no-border casino-list-item casino-link' itemscope itemprop=\"seller\" itemtype=\"http://schema.org/Organization\">
                        <meta itemprop=\"name\" content=\"";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 89), "casino", [], "any", false, false, false, 89), "casinoname", [], "any", false, false, false, 89), "html", null, true);
                echo "\" />
                        <meta itemprop=\"url\" content=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 90), "casino", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90)])), "html", null, true);
                echo "\" />
                        <a class='show-hidden-cells' href=\"#\" aria-label=\"Show hidden\"></a>
                        <a href='";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 92), "casino", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "' title='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 92), "casino", [], "any", false, false, false, 92), "casinoname", [], "any", false, false, false, 92), "html", null, true);
                echo "' rel='noopener nofollow' class='btn btn-primary' target='_blank'>
                            ";
                // line 93
                if ((twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93) == "United Kingdom")) {
                    echo "PLAY";
                } else {
                    echo "PLAY NOW";
                }
                // line 94
                echo "                        </a>
                    </div>

                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bonus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "    </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Bonus/most_liked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 100,  310 => 94,  304 => 93,  298 => 92,  293 => 90,  289 => 89,  282 => 85,  278 => 84,  271 => 79,  266 => 76,  250 => 74,  247 => 73,  243 => 72,  237 => 70,  235 => 69,  223 => 68,  220 => 67,  217 => 66,  201 => 64,  198 => 63,  194 => 62,  181 => 54,  176 => 52,  170 => 48,  166 => 46,  159 => 42,  154 => 40,  151 => 39,  149 => 38,  145 => 37,  139 => 36,  136 => 35,  130 => 32,  126 => 31,  122 => 30,  119 => 29,  117 => 28,  105 => 25,  99 => 21,  95 => 19,  93 => 18,  82 => 16,  76 => 15,  69 => 13,  61 => 8,  57 => 7,  54 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if bonuses|length > 0 %}
<div class=\"container most-liked\">
    <h2 class=\"most-liked-headline\">Most Liked Casino Bonuses in the last 30 days</h2>
    <div class=\"casino-list-bonuses\">
        {% for bonus in bonuses %}
            <div itemscope itemtype=\"http://schema.org/Offer\">
                <meta itemprop=\"url\" content='{{ absolute_url(path(\"casino-review\",{\"id\":bonus[0].casino.id,\"casinoname\":bonus[0].casino.slug})) }}' />
                <meta itemprop=\"name\" content=\"{{ bonus[0].casino.casinoname }}\" />
                <div class='casino-list-row'>

                    <div class='casino-logo no-border casino-list-item'>
                        <span class=\"flag\">
                            <img src='{{ country.imgSrc }}' alt=\"{{ country.name }}\" width=\"16\" height=\"11\">
                        </span>
                        <a href='{{ path('visit_casino',{id:bonus[0].casino.id}) }}' title='{{ bonus[0].casino.casinoname }}' rel='noopener nofollow' target='_blank'>
                            <img src=\"{{asset(('img/lazy.png'))}}\" data-original='{{ bonus[0].casino.logo90 }}' title='{{ bonus[0].casino.casinoname }}'  alt='{{ bonus[0].casino.casinoname }}' width=\"90\" height=\"90\" class=\"lazyload\">
                        </a>
                        {% if bonus[0].exclusive==1 %}
                            <span class='box-exclusive'>Exclusive</span>
                        {% endif %}
                    </div>

                    <div class='casino-list-item hidden-cell casino-comments'>
                        <span class=\"likes-no\"><span class=\"icon\"></span>
                        <span class=\"no a\">{{ bonus[0].likes|length }}</span> {% if bonus[0].likes|length == 1 %}Like{% else %}Likes{% endif %}</span>
                    </div>

                    {% if bonus[0].bonustypes[0] is defined  and  bonus[0].bonustypes[0].name == 'Casino Spins' %}
                        <div class='casino-list-item casino-bonus'>
                            <p class=\"casino-bonus-freespins\"> {{ bonus[0].freespins }} </p>
                            <p class=\"casino-bonus-name\" itemprop=\"description\"> {{ bonus[0].bonustypes[0].name }} </p>
                            <p class=\"casino-bonus-wr\">Wr:{{ bonus[0].wr }}</p>
                        </div>
                    {% else %}
                        <div class='casino-list-item casino-bonus'>
                            <p class=\"casino-bonus-amount\">{{ bonus[0].symbol }} {{ bonus[0].maxbonusshow }}</p>
                            <p class=\"casino-bonus-name\" itemprop=\"description\">{{ bonus[0].bonustypename }}</p>
                            {% if bonus[0].code|length > 0 %}
                                <p class=\"casino-bonus-code\">Code:
                                    <span>{{ bonus[0].code|slice(0,13) }}</span>
                                    <span class=\"code_hover tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\">
                                        <span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">{{ bonus[0].code }}</span>
                                    </span>
                                </p>
                            {% endif %}
                        </div>
                    {% endif %}


                    <div class='casino-list-item casino-rating hidden-cell'>
                        <p class='cell-subtitle'>Rating</p>
                        <p class='casino-rating-value'><span>{{ bonus[0].casino.averagerating }}</span>/5</p>
                        <div class='progress'>
                            <span class='progress-bar' role='progressbar' style='width: {{ bonus[0].casino.ratingpercent }}%;' aria-valuenow='{{ bonus[0].casino.ratingpercent }}' aria-valuemin='0' aria-valuemax='100'>
                            </span>
                        </div>
                    </div>


                    <div class='casino-list-item casino-powered-by hidden-cell'>
                        <p class='cell-subtitle'>Powered By</p>
                        {% for software in bonus[1] %}
                            <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
             data-original='{{ software.image25 }}' style='opacity:{% if (software.availableincountry == 1) %}{{ '1' }}{% else %}{{ '0.3' }}{% endif %}' width=\"25\" height=\"15\" alt=\"{{ software.title }}\">
                        {% endfor %}
                        {% if bonus[2]|length == 1  %}
                            <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
             data-original='{{ bonus[2][0].image25 }}' style='opacity:{% if (bonus[2][0].availableincountry == 1) %}{{ '1' }}{% else %}{{ '0.3' }}{% endif %}' alt=\"{{ bonus[2][0].title }}\">
                        {% elseif bonus[2]|length > 1 %}
                            <div class='more-softwares'>+{{ bonus[2]|length }}
                                <div class='softwares_hover'>
                                    {% for hoversoftware in bonus[2] %}
                                        <img  class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
             data-original='{{ hoversoftware.image25 }}' style='opacity:{% if (hoversoftware.availableincountry == 1) %}{{ '1' }}{% else %}{{ '0.3' }}{% endif %}' width=\"25\" height=\"15\" alt=\"{{ hoversoftware.title }}\">
                                    {% endfor %}
                                </div>
                            </div>
                        {% endif %}
                    </div>



                    <div class='casino-list-item casino-review hidden-cell'>
                        <a href='#' class='btn-like tooltip-btn' data-toggle='tooltip' data-placement='top' title='Like' onclick='return false;' data-bonus='{{ bonus[0].id }}' aria-label=\"Like\"></a>
                        <a href='{{ path('casino-review',{id:bonus[0].casino.id , casinoname:bonus[0].casino.slug }) }}' class='btn-review tooltip-btn' data-toggle='tooltip' data-placement='top' title='Read Review' aria-label=\"Read Review\"></a>
                    </div>

                    <div class='no-border casino-list-item casino-link' itemscope itemprop=\"seller\" itemtype=\"http://schema.org/Organization\">
                        <meta itemprop=\"name\" content=\"{{ bonus[0].casino.casinoname }}\" />
                        <meta itemprop=\"url\" content=\"{{ absolute_url(path('visit_casino',{id:bonus[0].casino.id})) }}\" />
                        <a class='show-hidden-cells' href=\"#\" aria-label=\"Show hidden\"></a>
                        <a href='{{ path('visit_casino',{id:bonus[0].casino.id}) }}' title='{{ bonus[0].casino.casinoname }}' rel='noopener nofollow' class='btn btn-primary' target='_blank'>
                            {% if country.name=='United Kingdom' %}PLAY{% else %}PLAY NOW{% endif %}
                        </a>
                    </div>

                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endif %}
", "Bonus/most_liked.html.twig", "/var/www/ndc_new/templates/Bonus/most_liked.html.twig");
    }
}
