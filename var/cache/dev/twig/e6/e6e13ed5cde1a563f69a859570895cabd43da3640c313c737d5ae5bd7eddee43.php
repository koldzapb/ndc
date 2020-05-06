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

/* LiveActivities/liveactivities.html.twig */
class __TwigTemplate_5707c18c7d5164c7e73f5bd8f507900adb2ab56a31eeb2013403cd5c119873c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "LiveActivities/liveactivities.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "LiveActivities/liveactivities.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liveactivities"]) || array_key_exists("liveactivities", $context) ? $context["liveactivities"] : (function () { throw new RuntimeError('Variable "liveactivities" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 2
            echo "
    ";
            // line 3
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3) == "Casino Post")) {
                // line 4
                echo "        <div  class='box-comments-item'>
            <div class='box-comments-logo' id=\"live_p";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 5), "html", null, true);
                echo "\">
                ";
                // line 6
                if ((isset($context["review"]) || array_key_exists("review", $context))) {
                    // line 7
                    echo "                    <span class=\"icon icon-comment\"></span>
                ";
                } else {
                    // line 9
                    echo "                    <a href='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 9), "slug", [], "any", false, false, false, 9)]), "html", null, true);
                    echo "'>
                        <img class=\"lazyload\" src=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy.png"), "html", null, true);
                    echo "\" data-original='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 10), "logo90", [], "any", false, false, false, 10), "html", null, true);
                    echo "' alt='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 10), "casinoname", [], "any", false, false, false, 10), "html", null, true);
                    echo "' width=\"90\" height=\"90\">
                    </a>
                ";
                }
                // line 13
                echo "            </div>

            <div class='box-comments-name'>
                <a href='";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16)]), "html", null, true);
                echo "'>
                    ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 17), "username", [], "any", false, false, false, 17), "html", null, true);
                echo "
                </a>
                posted to
                <a href='";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 20), "slug", [], "any", false, false, false, 20)]), "html", null, true);
                echo "'>
                    ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 21), "casinoname", [], "any", false, false, false, 21), "html", null, true);
                echo "
                </a>:
            </div>

            <div class='box-comments-content'>
                <p>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "postText", [], "any", false, false, false, 26), "html", null, true);
                echo "</p>
            </div>

            <div class='box-comments-image'>
                <a href='";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30)]), "html", null, true);
                echo "'>
                    <img width='50' height='50' class=\"lazyload\" src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy.png"), "html", null, true);
                echo "\" data-original='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 31), "imagelocation", [], "any", false, false, false, 31), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
                echo "'/>
                </a>
            </div>

            <div class='box-comments-user like-wrap'>
                <div class='box-comments-user-inner'>
                    <a class='box-comments-username' href='";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37)]), "html", null, true);
                echo "'>
                        ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
                echo "
                    </a>
                    <span id='wall_like_post_";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "'></span>
                    <span class=\"box-comments-date\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "timeadded", [], "any", false, false, false, 41), "M d,y h:s"), "html", null, true);
                echo "</span>
                </div>

                <div class='box-comments-like'>
                    ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "usersWhoLikedPost", [], "any", false, false, false, 45), "contains", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)], "method", false, false, false, 45)) {
                    // line 46
                    echo "                        <a href='' onclick='return false;' class='unlike-user-post tooltip-btn' data-placement='top' title='' data-original-title='Unlike' aria-label='Unlike' data-postid='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 46), "html", null, true);
                    echo "' data-userid='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
                    echo "'></a>
                    ";
                } else {
                    // line 48
                    echo "                        <a href='' class='user-like-post btn-like tooltip-btn' data-toggle='tooltip'  data-placement='top' title='' data-original-title='Like' aria-label='Like' data-userid='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "' data-postid='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "' onclick='return false;'></a>
                    ";
                }
                // line 50
                echo "
                    ";
                // line 51
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "usersWhoLikedPost", [], "any", false, false, false, 51)) > 0)) {
                    // line 52
                    echo "                        <span class='post-likes-num'>";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "usersWhoLikedPost", [], "any", false, false, false, 52)), "html", null, true);
                    echo "</span>
                        ";
                    // line 53
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "usersWhoLikedPost", [], "any", false, false, false, 53)) == 1)) {
                        echo "Like";
                    } else {
                        echo "Likes";
                    }
                    // line 54
                    echo "                    ";
                }
                // line 55
                echo "
                    ";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, $context["activity"], "allowedtoremovepost", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)], "method", false, false, false, 56) == true)) {
                    // line 57
                    echo "                        <a class='remove-user-comment' data-userid='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
                    echo "' data-commentid='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 57), "html", null, true);
                    echo "' onclick='return false;' href='' aria-label=\"Remove comment\">
                            <i class='fas fa-times'></i>
                        </a>
                    ";
                }
                // line 61
                echo "                </div>

            </div>
        </div>


    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 67
$context["activity"], "type", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67) == "Casino Like")) {
                // line 68
                echo "
        <div  class='box-comments-item'>
            <div class='box-comments-logo'>
                ";
                // line 71
                if ((isset($context["review"]) || array_key_exists("review", $context))) {
                    // line 72
                    echo "                    <span class=\"icon icon-like\"></span>
                ";
                } else {
                    // line 74
                    echo "                    <a href='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 74), "slug", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "'>
                        <img class=\"lazyload\" src=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy.png"), "html", null, true);
                    echo "\" data-original='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 75), "logo90", [], "any", false, false, false, 75), "html", null, true);
                    echo "' alt='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 75), "casinoname", [], "any", false, false, false, 75), "html", null, true);
                    echo "' width=\"90\" height=\"90\">
                    </a>
                ";
                }
                // line 78
                echo "            </div>

            <div class='box-comments-content' id=\"live_p";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 80), "html", null, true);
                echo "\">
                <a href='";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 81), "username", [], "any", false, false, false, 81)]), "html", null, true);
                echo "'>
                    ";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 82), "username", [], "any", false, false, false, 82), "html", null, true);
                echo "
                </a> liked
                ";
                // line 84
                if ((isset($context["review"]) || array_key_exists("review", $context))) {
                    // line 85
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 85), "casinoname", [], "any", false, false, false, 85), "html", null, true);
                    echo "
                ";
                } else {
                    // line 87
                    echo "                    <a href='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 87), "slug", [], "any", false, false, false, 87)]), "html", null, true);
                    echo "'>
                        ";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 88), "casinoname", [], "any", false, false, false, 88), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 91
                echo "            </div>

            <div class='box-comments-name'></div>

            <div class='box-comments-image'>
                <a href='";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 96), "username", [], "any", false, false, false, 96)]), "html", null, true);
                echo "'>
                    <img height='50' width='50' class=\"lazyload\" src=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy.png"), "html", null, true);
                echo "\" data-original='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 97), "imagelocation", [], "any", false, false, false, 97), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 97), "username", [], "any", false, false, false, 97), "html", null, true);
                echo "'/>
                </a>
            </div>

            <div class='box-comments-user'>
                <div class='box-comments-user-inner'>
                    <a class=\"box-comments-username\" href='";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 103), "username", [], "any", false, false, false, 103)]), "html", null, true);
                echo "'>
                        ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 104), "username", [], "any", false, false, false, 104), "html", null, true);
                echo "
                    </a>
                    <span class=\"box-comments-date\">";
                // line 106
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "timeadded", [], "any", false, false, false, 106), "M d,y h:s"), "html", null, true);
                echo "</span>
                </div>
            </div>

        </div>


    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 113
$context["activity"], "type", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113) == "Bonus Like")) {
                // line 114
                echo "        <div  class='box-comments-item bonus-like'>
            <div class='box-comments-logo'>
                ";
                // line 116
                if ((isset($context["review"]) || array_key_exists("review", $context))) {
                    // line 117
                    echo "                    <span class=\"icon icon-like\"></span>
                ";
                } else {
                    // line 119
                    echo "                    <a href='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 119), "casino", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 119), "casino", [], "any", false, false, false, 119), "slug", [], "any", false, false, false, 119)]), "html", null, true);
                    echo "'>
                        <img class=\"lazyload\" src=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy.png"), "html", null, true);
                    echo "\" data-original='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 120), "casino", [], "any", false, false, false, 120), "logo90", [], "any", false, false, false, 120), "html", null, true);
                    echo "' alt='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 120), "casino", [], "any", false, false, false, 120), "casinoname", [], "any", false, false, false, 120), "html", null, true);
                    echo "' width=\"90\" height=\"90\">
                    </a>
                ";
                }
                // line 123
                echo "            </div>
            ";
                // line 124
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, true, false, 124), "bonustypes", [], "any", false, true, false, 124), 0, [], "array", true, true, false, 124) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 124), "bonustypes", [], "any", false, false, false, 124), 0, [], "array", false, false, false, 124), "name", [], "any", false, false, false, 124) == "Casino Spins"))) {
                    // line 125
                    echo "                <div class='box-comments-bonus'>
                    <p class=\"casino-bonus-freespins\"> ";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 126), "freespins", [], "any", false, false, false, 126), "html", null, true);
                    echo " </p>
                    <p class=\"casino-bonus-name\" itemprop=\"description\"> ";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 127), "bonustypes", [], "any", false, false, false, 127), 0, [], "array", false, false, false, 127), "name", [], "any", false, false, false, 127), "html", null, true);
                    echo " </p>
                    <p class=\"casino-bonus-wr\">Wr:";
                    // line 128
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 128), "wr", [], "any", false, false, false, 128), "html", null, true);
                    echo "</p>
                </div>
            ";
                } else {
                    // line 131
                    echo "                <div class='box-comments-bonus'>
                    <p class=\"casino-bonus-amount\">";
                    // line 132
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 132), "symbol", [], "any", false, false, false, 132), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 132), "maxbonusshow", [], "any", false, false, false, 132), "html", null, true);
                    echo "</p>
                    <p class=\"casino-bonus-name\" itemprop=\"description\">";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 133), "bonustypename", [], "any", false, false, false, 133), "html", null, true);
                    echo "</p>
                    ";
                    // line 134
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 134), "code", [], "any", false, false, false, 134)) > 0)) {
                        // line 135
                        echo "                        <p class=\"casino-bonus-code\">Code:
                            <span>";
                        // line 136
                        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 136), "code", [], "any", false, false, false, 136), 0, 13), "html", null, true);
                        echo "</span>
                            <span class=\"code_hover tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\">
                                <span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">";
                        // line 138
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 138), "code", [], "any", false, false, false, 138), "html", null, true);
                        echo "</span>
                            </span>
                        </p>
                    ";
                    }
                    // line 142
                    echo "                </div>
            ";
                }
                // line 144
                echo "
            <div class='box-comments-content' id=\"live_p";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 145), "html", null, true);
                echo "\">
                <a href='";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 146), "id", [], "any", false, false, false, 146), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 146), "username", [], "any", false, false, false, 146)]), "html", null, true);
                echo "'>
                    ";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 147), "username", [], "any", false, false, false, 147), "html", null, true);
                echo "
                </a> &nbspliked&nbsp
                ";
                // line 149
                if ((isset($context["review"]) || array_key_exists("review", $context))) {
                    // line 150
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 150)) {
                        // line 151
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 151), "casinoname", [], "any", false, false, false, 151), "html", null, true);
                        echo "
                    ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 152
$context["activity"], "likedBonus", [], "any", false, false, false, 152)) {
                        // line 153
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 153), "casino", [], "any", false, false, false, 153), "casinoname", [], "any", false, false, false, 153), "html", null, true);
                        echo " bonus
                    ";
                    }
                    // line 155
                    echo "                ";
                } else {
                    // line 156
                    echo "                    <a href='";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 156), "casino", [], "any", false, false, false, 156), "id", [], "any", false, false, false, 156), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 156), "casino", [], "any", false, false, false, 156), "slug", [], "any", false, false, false, 156)]), "html", null, true);
                    echo "'>
                        ";
                    // line 157
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 157), "casino", [], "any", false, false, false, 157), "casinoname", [], "any", false, false, false, 157), "html", null, true);
                    echo " bonus
                    </a>
                ";
                }
                // line 160
                echo "            </div>

            <div class='box-comments-image'>
                <a href='";
                // line 163
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 163), "id", [], "any", false, false, false, 163), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 163), "username", [], "any", false, false, false, 163)]), "html", null, true);
                echo "'>
                    <img height='50' width='50' class=\"lazyload\" src=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy.png"), "html", null, true);
                echo "\" data-original='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 164), "imagelocation", [], "any", false, false, false, 164), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 164), "username", [], "any", false, false, false, 164), "html", null, true);
                echo "'/>
                </a>
            </div>

            <div class='box-comments-user'>
                <div class='box-comments-user-inner'>
                    <a class=\"box-comments-username\" href='";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 170), "id", [], "any", false, false, false, 170), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 170), "username", [], "any", false, false, false, 170)]), "html", null, true);
                echo "'>
                        ";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 171), "username", [], "any", false, false, false, 171), "html", null, true);
                echo "
                    </a>
                    <span class=\"box-comments-date\">";
                // line 173
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "timeadded", [], "any", false, false, false, 173), "M d,y h:s"), "html", null, true);
                echo "</span>
                </div>
            </div>

        </div>

    ";
            }
            // line 180
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "





";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "LiveActivities/liveactivities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 183,  490 => 180,  480 => 173,  475 => 171,  471 => 170,  458 => 164,  454 => 163,  449 => 160,  443 => 157,  438 => 156,  435 => 155,  429 => 153,  427 => 152,  422 => 151,  419 => 150,  417 => 149,  412 => 147,  408 => 146,  404 => 145,  401 => 144,  397 => 142,  390 => 138,  385 => 136,  382 => 135,  380 => 134,  376 => 133,  370 => 132,  367 => 131,  361 => 128,  357 => 127,  353 => 126,  350 => 125,  348 => 124,  345 => 123,  335 => 120,  330 => 119,  326 => 117,  324 => 116,  320 => 114,  318 => 113,  308 => 106,  303 => 104,  299 => 103,  286 => 97,  282 => 96,  275 => 91,  269 => 88,  264 => 87,  258 => 85,  256 => 84,  251 => 82,  247 => 81,  243 => 80,  239 => 78,  229 => 75,  224 => 74,  220 => 72,  218 => 71,  213 => 68,  211 => 67,  203 => 61,  193 => 57,  191 => 56,  188 => 55,  185 => 54,  179 => 53,  174 => 52,  172 => 51,  169 => 50,  161 => 48,  153 => 46,  151 => 45,  144 => 41,  140 => 40,  135 => 38,  131 => 37,  118 => 31,  114 => 30,  107 => 26,  99 => 21,  95 => 20,  89 => 17,  85 => 16,  80 => 13,  70 => 10,  65 => 9,  61 => 7,  59 => 6,  55 => 5,  52 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for activity in liveactivities %}

    {% if activity.type.name == 'Casino Post' %}
        <div  class='box-comments-item'>
            <div class='box-comments-logo' id=\"live_p{{ activity.id }}\">
                {% if review is defined %}
                    <span class=\"icon icon-comment\"></span>
                {% else %}
                    <a href='{{ path('casino-review',{id:activity.postToCasino.id,casinoname:activity.postToCasino.slug}) }}'>
                        <img class=\"lazyload\" src=\"{{asset(('img/lazy.png'))}}\" data-original='{{ activity.postToCasino.logo90 }}' alt='{{ activity.postToCasino.casinoname }}' width=\"90\" height=\"90\">
                    </a>
                {% endif %}
            </div>

            <div class='box-comments-name'>
                <a href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                    {{ activity.userAdded.username }}
                </a>
                posted to
                <a href='{{ path('casino-review',{id:activity.postToCasino.id,casinoname:activity.postToCasino.slug}) }}'>
                    {{ activity.postToCasino.casinoname }}
                </a>:
            </div>

            <div class='box-comments-content'>
                <p>{{ activity.postText }}</p>
            </div>

            <div class='box-comments-image'>
                <a href='{{ path('user',{id:activity.userAdded.id , username:activity.userAdded.username}) }}'>
                    <img width='50' height='50' class=\"lazyload\" src=\"{{asset(('img/lazy.png'))}}\" data-original='{{ activity.userAdded.imagelocation }}' alt='{{ activity.userAdded.username }}'/>
                </a>
            </div>

            <div class='box-comments-user like-wrap'>
                <div class='box-comments-user-inner'>
                    <a class='box-comments-username' href='{{ path('user',{ id:activity.userAdded.id,username:activity.userAdded.username }) }}'>
                        {{ activity.userAdded.username }}
                    </a>
                    <span id='wall_like_post_{{ activity.id }}'></span>
                    <span class=\"box-comments-date\">{{ activity.timeadded|date('M d,y h:s') }}</span>
                </div>

                <div class='box-comments-like'>
                    {% if activity.usersWhoLikedPost.contains(app.user) %}
                        <a href='' onclick='return false;' class='unlike-user-post tooltip-btn' data-placement='top' title='' data-original-title='Unlike' aria-label='Unlike' data-postid='{{ activity.id }}' data-userid='{{ activity.userAdded.id }}'></a>
                    {% else %}
                        <a href='' class='user-like-post btn-like tooltip-btn' data-toggle='tooltip'  data-placement='top' title='' data-original-title='Like' aria-label='Like' data-userid='{{ activity.userAdded.id }}' data-postid='{{ activity.id }}' onclick='return false;'></a>
                    {% endif %}

                    {% if activity.usersWhoLikedPost|length >0%}
                        <span class='post-likes-num'>{{ activity.usersWhoLikedPost|length }}</span>
                        {% if(activity.usersWhoLikedPost|length ==1) %}{{ 'Like' }}{% else %}{{ 'Likes' }}{% endif %}
                    {% endif %}

                    {% if activity.allowedtoremovepost(app.user)==true %}
                        <a class='remove-user-comment' data-userid='{{ activity.userAdded.id }}' data-commentid='{{ activity.id }}' onclick='return false;' href='' aria-label=\"Remove comment\">
                            <i class='fas fa-times'></i>
                        </a>
                    {% endif %}
                </div>

            </div>
        </div>


    {% elseif activity.type.name == 'Casino Like' %}

        <div  class='box-comments-item'>
            <div class='box-comments-logo'>
                {% if review is defined %}
                    <span class=\"icon icon-like\"></span>
                {% else %}
                    <a href='{{ path('casino-review',{id:activity.casinoLiked.id,casinoname:activity.casinoLiked.slug}) }}'>
                        <img class=\"lazyload\" src=\"{{asset(('img/lazy.png'))}}\" data-original='{{ activity.casinoLiked.logo90 }}' alt='{{ activity.casinoLiked.casinoname }}' width=\"90\" height=\"90\">
                    </a>
                {% endif %}
            </div>

            <div class='box-comments-content' id=\"live_p{{ activity.id }}\">
                <a href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                    {{ activity.userAdded.username }}
                </a> liked
                {% if review is defined %}
                    {{ activity.casinoLiked.casinoname }}
                {% else %}
                    <a href='{{ path('casino-review',{id:activity.casinoLiked.id,casinoname:activity.casinoLiked.slug}) }}'>
                        {{ activity.casinoLiked.casinoname }}
                    </a>
                {% endif %}
            </div>

            <div class='box-comments-name'></div>

            <div class='box-comments-image'>
                <a href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                    <img height='50' width='50' class=\"lazyload\" src=\"{{asset(('img/lazy.png'))}}\" data-original='{{ activity.userAdded.imagelocation }}' alt='{{ activity.userAdded.username }}'/>
                </a>
            </div>

            <div class='box-comments-user'>
                <div class='box-comments-user-inner'>
                    <a class=\"box-comments-username\" href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                        {{ activity.userAdded.username }}
                    </a>
                    <span class=\"box-comments-date\">{{ activity.timeadded|date('M d,y h:s') }}</span>
                </div>
            </div>

        </div>


    {% elseif activity.type.name == 'Bonus Like' %}
        <div  class='box-comments-item bonus-like'>
            <div class='box-comments-logo'>
                {% if review is defined %}
                    <span class=\"icon icon-like\"></span>
                {% else %}
                    <a href='{{ path('casino-review',{id:activity.likedBonus.casino.id,casinoname:activity.likedBonus.casino.slug}) }}'>
                        <img class=\"lazyload\" src=\"{{asset(('img/lazy.png'))}}\" data-original='{{ activity.likedBonus.casino.logo90 }}' alt='{{ activity.likedBonus.casino.casinoname }}' width=\"90\" height=\"90\">
                    </a>
                {% endif %}
            </div>
            {% if activity.likedBonus.bonustypes[0] is defined  and  activity.likedBonus.bonustypes[0].name == 'Casino Spins' %}
                <div class='box-comments-bonus'>
                    <p class=\"casino-bonus-freespins\"> {{ activity.likedBonus.freespins }} </p>
                    <p class=\"casino-bonus-name\" itemprop=\"description\"> {{ activity.likedBonus.bonustypes[0].name }} </p>
                    <p class=\"casino-bonus-wr\">Wr:{{ activity.likedBonus.wr }}</p>
                </div>
            {% else %}
                <div class='box-comments-bonus'>
                    <p class=\"casino-bonus-amount\">{{ activity.likedBonus.symbol }} {{ activity.likedBonus.maxbonusshow }}</p>
                    <p class=\"casino-bonus-name\" itemprop=\"description\">{{ activity.likedBonus.bonustypename }}</p>
                    {% if activity.likedBonus.code|length > 0 %}
                        <p class=\"casino-bonus-code\">Code:
                            <span>{{ activity.likedBonus.code|slice(0,13) }}</span>
                            <span class=\"code_hover tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\">
                                <span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">{{ activity.likedBonus.code }}</span>
                            </span>
                        </p>
                    {% endif %}
                </div>
            {% endif %}

            <div class='box-comments-content' id=\"live_p{{ activity.id }}\">
                <a href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                    {{ activity.userAdded.username }}
                </a> &nbspliked&nbsp
                {% if review is defined %}
                    {% if activity.casinoLiked %}
                        {{ activity.casinoLiked.casinoname }}
                    {% elseif activity.likedBonus %}
                        {{ activity.likedBonus.casino.casinoname }} bonus
                    {% endif %}
                {% else %}
                    <a href='{{ path('casino-review',{id:activity.likedBonus.casino.id,casinoname:activity.likedBonus.casino.slug}) }}'>
                        {{ activity.likedBonus.casino.casinoname }} bonus
                    </a>
                {% endif %}
            </div>

            <div class='box-comments-image'>
                <a href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                    <img height='50' width='50' class=\"lazyload\" src=\"{{asset(('img/lazy.png'))}}\" data-original='{{ activity.userAdded.imagelocation }}' alt='{{ activity.userAdded.username }}'/>
                </a>
            </div>

            <div class='box-comments-user'>
                <div class='box-comments-user-inner'>
                    <a class=\"box-comments-username\" href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                        {{ activity.userAdded.username }}
                    </a>
                    <span class=\"box-comments-date\">{{ activity.timeadded|date('M d,y h:s') }}</span>
                </div>
            </div>

        </div>

    {% endif %}


{% endfor %}






", "LiveActivities/liveactivities.html.twig", "/var/www/ndc_new/templates/LiveActivities/liveactivities.html.twig");
    }
}
