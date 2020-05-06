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

/* Bonus/bonuses.html.twig */
class __TwigTemplate_109a4178d210a9212d4e525294db7b2a416d834e2fafcbaf610926fea6b39fa7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bonus/bonuses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Bonus/bonuses.html.twig"));

        // line 1
        echo "<div class=\"casino-list-bonuses\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bonus"]) {
            // line 3
            echo "        <div itemscope itemtype=\"http://schema.org/Offer\">
            <meta itemprop=\"url\" content='";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 4), "casino", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 4), "casino", [], "any", false, false, false, 4), "slug", [], "any", false, false, false, 4)])), "html", null, true);
            echo "' />
            <meta itemprop=\"name\" content=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 5), "casino", [], "any", false, false, false, 5), "casinoname", [], "any", false, false, false, 5), "html", null, true);
            echo "\" />
            <div class='casino-list-row'>

                <div class='casino-logo no-border casino-list-item'>
                    <span class=\"flag\">
                        <img src='";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 10, $this->source); })()), "imgSrc", [], "any", false, false, false, 10), "html", null, true);
            echo "' alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
            echo "\" width=\"16\" height=\"11\">
                    </span>
                    <a href='";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 12), "casino", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 12), "casino", [], "any", false, false, false, 12), "casinoname", [], "any", false, false, false, 12), "html", null, true);
            echo "' rel='noopener nofollow' target='_blank'>
                        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy.png"), "html", null, true);
            echo "\" data-original='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 13), "casino", [], "any", false, false, false, 13), "logo90", [], "any", false, false, false, 13), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 13), "casino", [], "any", false, false, false, 13), "casinoname", [], "any", false, false, false, 13), "html", null, true);
            echo "'  alt='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 13), "casino", [], "any", false, false, false, 13), "casinoname", [], "any", false, false, false, 13), "html", null, true);
            echo "' width=\"90\" height=\"90\" class=\"lazyload\">
                    </a>
                    ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 15), "exclusive", [], "any", false, false, false, 15) == 1)) {
                // line 16
                echo "                        <span class='box-exclusive'>Exclusive</span>
                    ";
            }
            // line 18
            echo "                </div>

                ";
            // line 20
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 20), "casino", [], "any", false, false, false, 20), "likes", [], "any", false, false, false, 20)) > 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 20), "casino", [], "any", false, false, false, 20), "posts", [], "any", false, false, false, 20)) > 1))) {
                // line 21
                echo "                    <div class='casino-list-item hidden-cell casino-comments'>
                        ";
                // line 22
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 22), "casino", [], "any", false, false, false, 22), "posts", [], "any", false, false, false, 22)) > 1)) {
                    // line 23
                    echo "                            <span class='comments-no'><span class=\"icon\"></span>";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 23), "casino", [], "any", false, false, false, 23), "posts", [], "any", false, false, false, 23)), "html", null, true);
                    echo " Comments</span>
                        ";
                }
                // line 25
                echo "                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 25), "casino", [], "any", false, false, false, 25), "likes", [], "any", false, false, false, 25)) > 1)) {
                    // line 26
                    echo "                            <span class=\"likes-no\"><span class=\"icon\"></span><span class=\"no\">";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 26), "casino", [], "any", false, false, false, 26), "likes", [], "any", false, false, false, 26)), "html", null, true);
                    echo "</span> Likes</span>
                        ";
                }
                // line 28
                echo "                    </div>
                ";
            } else {
                // line 30
                echo "                    <div class=\"casino-list-item casino-no-comments\"></div>
                ";
            }
            // line 32
            echo "
                ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, true, false, 33), "bonustypes", [], "any", false, true, false, 33), 0, [], "array", true, true, false, 33) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 33), "bonustypes", [], "any", false, false, false, 33), 0, [], "array", false, false, false, 33), "name", [], "any", false, false, false, 33) == "Casino Spins"))) {
                // line 34
                echo "                    <div class='casino-list-item casino-bonus'>
                        <p class=\"casino-bonus-freespins\"> ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 35), "freespins", [], "any", false, false, false, 35), "html", null, true);
                echo " </p>
                        <p class=\"casino-bonus-name\" itemprop=\"description\"> ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 36), "bonustypes", [], "any", false, false, false, 36), 0, [], "array", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                echo " </p>
                        <p class=\"casino-bonus-wr\">Wr:";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 37), "wr", [], "any", false, false, false, 37), "html", null, true);
                echo "</p>
                    </div>
                ";
            } else {
                // line 40
                echo "                    <div class='casino-list-item casino-bonus'>
                        <p class=\"casino-bonus-amount\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 41), "symbol", [], "any", false, false, false, 41), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 41), "maxbonusshow", [], "any", false, false, false, 41), "html", null, true);
                echo "</p>
                        <p class=\"casino-bonus-name\" itemprop=\"description\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 42), "bonustypename", [], "any", false, false, false, 42), "html", null, true);
                echo "</p>
                        ";
                // line 43
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 43), "code", [], "any", false, false, false, 43)) > 0)) {
                    // line 44
                    echo "                            <p class=\"casino-bonus-code\">Code:
                                <span>";
                    // line 45
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 45), "code", [], "any", false, false, false, 45), 0, 13), "html", null, true);
                    echo "</span>
                                <span class=\"code_hover tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\">
                                    <span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 47), "code", [], "any", false, false, false, 47), "html", null, true);
                    echo "</span>
                                </span>
                            </p>
                        ";
                }
                // line 51
                echo "                    </div>
                ";
            }
            // line 53
            echo "

                <div class='casino-list-item casino-rating hidden-cell'>
                    <p class='cell-subtitle'>Rating</p>
                    <p class='casino-rating-value'><span>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 57), "casino", [], "any", false, false, false, 57), "averagerating", [], "any", false, false, false, 57), "html", null, true);
            echo "</span>/5</p>
                    <div class='progress'>
                        <span class='progress-bar' role='progressbar' style='width: ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 59), "casino", [], "any", false, false, false, 59), "ratingpercent", [], "any", false, false, false, 59), "html", null, true);
            echo "%;' aria-valuenow='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 59), "casino", [], "any", false, false, false, 59), "ratingpercent", [], "any", false, false, false, 59), "html", null, true);
            echo "' aria-valuemin='0' aria-valuemax='100'>
                        </span>
                    </div>
                </div>


                <div class='casino-list-item casino-powered-by hidden-cell'>
                    <p class='cell-subtitle'>Powered By</p>
                    ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["bonus"], 1, [], "array", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["software"]) {
                // line 68
                echo "                        <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
         data-original='";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "image25", [], "any", false, false, false, 69), "html", null, true);
                echo "' style='opacity:";
                if ((twig_get_attribute($this->env, $this->source, $context["software"], "availableincountry", [], "any", false, false, false, 69) == 1)) {
                    echo "1";
                } else {
                    echo "0.3";
                }
                echo "' width=\"25\" height=\"15\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "title", [], "any", false, false, false, 69), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['software'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 71)) == 1)) {
                // line 72
                echo "                        <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
         data-original='";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 73), 0, [], "array", false, false, false, 73), "image25", [], "any", false, false, false, 73), "html", null, true);
                echo "' style='opacity:";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 73), 0, [], "array", false, false, false, 73), "availableincountry", [], "any", false, false, false, 73) == 1)) {
                    echo "1";
                } else {
                    echo "0.3";
                }
                echo "' alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 73), 0, [], "array", false, false, false, 73), "title", [], "any", false, false, false, 73), "html", null, true);
                echo "\">
                    ";
            } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 74
$context["bonus"], 2, [], "array", false, false, false, 74)) > 1)) {
                // line 75
                echo "                        <div class='more-softwares'>+";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 75)), "html", null, true);
                echo "
                            <div class='softwares_hover'>
                                ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["bonus"], 2, [], "array", false, false, false, 77));
                foreach ($context['_seq'] as $context["_key"] => $context["hoversoftware"]) {
                    // line 78
                    echo "                                    <img  class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
         data-original='";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hoversoftware"], "image25", [], "any", false, false, false, 79), "html", null, true);
                    echo "' style='opacity:";
                    if ((twig_get_attribute($this->env, $this->source, $context["hoversoftware"], "availableincountry", [], "any", false, false, false, 79) == 1)) {
                        echo "1";
                    } else {
                        echo "0.3";
                    }
                    echo "' width=\"25\" height=\"15\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hoversoftware"], "title", [], "any", false, false, false, 79), "html", null, true);
                    echo "\">
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hoversoftware'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                            </div>
                        </div>
                    ";
            }
            // line 84
            echo "                </div>



                <div class='casino-list-item casino-review hidden-cell'>
                    <a href='#' class='btn-like tooltip-btn' data-toggle='tooltip' data-placement='top' title='Like' onclick='return false;' data-bonus='";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 89), "id", [], "any", false, false, false, 89), "html", null, true);
            echo "' aria-label=\"Like\"></a>
                    <a href='";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 90), "casino", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 90), "casino", [], "any", false, false, false, 90), "slug", [], "any", false, false, false, 90)]), "html", null, true);
            echo "' class='btn-review tooltip-btn' data-toggle='tooltip' data-placement='top' title='Read Review' aria-label=\"Read Review\"></a>
                </div>

                <div class='no-border casino-list-item casino-link' itemscope itemprop=\"seller\" itemtype=\"http://schema.org/Organization\">
                    <meta itemprop=\"name\" content=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 94), "casino", [], "any", false, false, false, 94), "casinoname", [], "any", false, false, false, 94), "html", null, true);
            echo "\" />
                    <meta itemprop=\"url\" content=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 95), "casino", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95)])), "html", null, true);
            echo "\" />
                    <a class='show-hidden-cells' href=\"#\" aria-label=\"Show hidden\"></a>
                    <a href='";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 97), "casino", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], 0, [], "array", false, false, false, 97), "casino", [], "any", false, false, false, 97), "casinoname", [], "any", false, false, false, 97), "html", null, true);
            echo "' rel='noopener nofollow' class='btn btn-primary' target='_blank'>
                        ";
            // line 98
            if ((twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98) == "United Kingdom")) {
                echo "PLAY";
            } else {
                echo "PLAY NOW";
            }
            // line 99
            echo "                    </a>
                </div>

            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bonus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "</div>









";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Bonus/bonuses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 105,  325 => 99,  319 => 98,  313 => 97,  308 => 95,  304 => 94,  297 => 90,  293 => 89,  286 => 84,  281 => 81,  265 => 79,  262 => 78,  258 => 77,  252 => 75,  250 => 74,  238 => 73,  235 => 72,  232 => 71,  216 => 69,  213 => 68,  209 => 67,  196 => 59,  191 => 57,  185 => 53,  181 => 51,  174 => 47,  169 => 45,  166 => 44,  164 => 43,  160 => 42,  154 => 41,  151 => 40,  145 => 37,  141 => 36,  137 => 35,  134 => 34,  132 => 33,  129 => 32,  125 => 30,  121 => 28,  115 => 26,  112 => 25,  106 => 23,  104 => 22,  101 => 21,  99 => 20,  95 => 18,  91 => 16,  89 => 15,  78 => 13,  72 => 12,  65 => 10,  57 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"casino-list-bonuses\">
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

                {% if (bonus[0].casino.likes|length >1 or bonus[0].casino.posts|length >1 )  %}
                    <div class='casino-list-item hidden-cell casino-comments'>
                        {% if bonus[0].casino.posts|length >1 %}
                            <span class='comments-no'><span class=\"icon\"></span>{{ bonus[0].casino.posts|length }} Comments</span>
                        {% endif %}
                        {% if bonus[0].casino.likes|length >1 %}
                            <span class=\"likes-no\"><span class=\"icon\"></span><span class=\"no\">{{ bonus[0].casino.likes|length }}</span> Likes</span>
                        {% endif %}
                    </div>
                {% else %}
                    <div class=\"casino-list-item casino-no-comments\"></div>
                {% endif %}

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









", "Bonus/bonuses.html.twig", "/var/www/ndc_new/templates/Bonus/bonuses.html.twig");
    }
}
