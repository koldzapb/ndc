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

/* LiveActivities/articles_and_news_pages_liveactivities.html.twig */
class __TwigTemplate_f5bba5cef4cd4061ff4e4d90a31307f5aa390e92a8205d9fdadd358d5e4e5b43 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "LiveActivities/articles_and_news_pages_liveactivities.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "LiveActivities/articles_and_news_pages_liveactivities.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liveactivities"]) || array_key_exists("liveactivities", $context) ? $context["liveactivities"] : (function () { throw new RuntimeError('Variable "liveactivities" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2) == "Casino Post")) {
                // line 3
                echo "        <div  class='latest-activities-item'>
            <div class='latest-activities-logo'>
                <a href='";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 5), "slug", [], "any", false, false, false, 5)]), "html", null, true);
                echo "'>
                    <img src='";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 6), "logo50", [], "any", false, false, false, 6), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "postToCasino", [], "any", false, false, false, 6), "casinoname", [], "any", false, false, false, 6), "html", null, true);
                echo "' width=\"50\" height=\"50\">
                </a>
            </div>
            <div class='latest-activities-content'>
                <p class=\"activity\">";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "postText", [], "any", false, false, false, 10), "html", null, true);
                echo "</p>
                <div class='latest-activities-name'>
                    <a href='";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12)]), "html", null, true);
                echo "'>
                        <img width='30' height='30' src='";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 13), "imagelocation", [], "any", false, false, false, 13), "html", null, true);
                echo "' alt=''/>
                        <div class=\"float-left\">
                            ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 15), "username", [], "any", false, false, false, 15), "html", null, true);
                echo "<br/>
                            <span class=\"box-comments-date\">";
                // line 16
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "timeadded", [], "any", false, false, false, 16), "M d,y h:s"), "html", null, true);
                echo "</span>
                        </div>
                    </a>
                    <span class=\"comments-no\"><span class=\"icon\"></span></span>
                </div>
            </div>
        </div>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 23
$context["activity"], "type", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23) == "Casino Like")) {
                // line 24
                echo "        <div  class='latest-activities-item'>
            <div class='latest-activities-logo'>
                <a href='";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 26), "slug", [], "any", false, false, false, 26)]), "html", null, true);
                echo "'>
                    <img src='";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 27), "logo50", [], "any", false, false, false, 27), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 27), "casinoname", [], "any", false, false, false, 27), "html", null, true);
                echo "' width=\"50\" height=\"50\">
                </a>
            </div>
            <div class='latest-activities-content'>
                <p class=\"activity\">
                    <a href='";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 32), "username", [], "any", false, false, false, 32)]), "html", null, true);
                echo "'>
                        ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
                echo "
                    </a> liked
                    <a href='";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 35), "slug", [], "any", false, false, false, 35)]), "html", null, true);
                echo "'>
                        ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "casinoLiked", [], "any", false, false, false, 36), "casinoname", [], "any", false, false, false, 36), "html", null, true);
                echo "
                    </a>
                </p>
                <div class='latest-activities-name'>
                    <a href='";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 40), "username", [], "any", false, false, false, 40)]), "html", null, true);
                echo "'>
                        <img height='30' width='30' src='";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 41), "imagelocation", [], "any", false, false, false, 41), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 41), "username", [], "any", false, false, false, 41), "html", null, true);
                echo "'/>
                        <div class=\"float-left\">
                            ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 43), "username", [], "any", false, false, false, 43), "html", null, true);
                echo "<br/>
                            <span class=\"box-comments-date\">";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "timeadded", [], "any", false, false, false, 44), "M d,y h:s"), "html", null, true);
                echo "</span>
                        </div>
                    </a>
                    <span class=\"likes-no\"><span class=\"icon\"></span></span>
                </div>
            </div>
        </div>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 51
$context["activity"], "type", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51) == "Bonus Like")) {
                // line 52
                echo "        <div  class='latest-activities-item'>
            <div class='latest-activities-logo'>
                <a href='";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 54), "casino", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 54), "casino", [], "any", false, false, false, 54), "slug", [], "any", false, false, false, 54)]), "html", null, true);
                echo "'>
                    <img src='";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 55), "casino", [], "any", false, false, false, 55), "logo50", [], "any", false, false, false, 55), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 55), "casino", [], "any", false, false, false, 55), "casinoname", [], "any", false, false, false, 55), "html", null, true);
                echo "' width=\"50\" height=\"50\">
                </a>
            </div>
            <div class='latest-activities-content'>
                <p class=\"activity\">
                    <a href='";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 60), "username", [], "any", false, false, false, 60)]), "html", null, true);
                echo "'>
                        ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 61), "username", [], "any", false, false, false, 61), "html", null, true);
                echo "
                    </a> liked
                    <a href='";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 63), "casino", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 63), "casino", [], "any", false, false, false, 63), "slug", [], "any", false, false, false, 63)]), "html", null, true);
                echo "'>
                        ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "likedBonus", [], "any", false, false, false, 64), "casino", [], "any", false, false, false, 64), "casinoname", [], "any", false, false, false, 64), "html", null, true);
                echo "
                    </a>
                </p>
                <div class='latest-activities-name'>
                    <a href='";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 68), "username", [], "any", false, false, false, 68)]), "html", null, true);
                echo "'>
                        <img height='30' width='30' src='";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 69), "imagelocation", [], "any", false, false, false, 69), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 69), "username", [], "any", false, false, false, 69), "html", null, true);
                echo "'/>
                        <div class=\"float-left\">
                            ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "userAdded", [], "any", false, false, false, 71), "username", [], "any", false, false, false, 71), "html", null, true);
                echo "<br/>
                            <span class=\"box-comments-date\">";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "timeadded", [], "any", false, false, false, 72), "M d,y h:s"), "html", null, true);
                echo "</span>
                        </div>
                    </a>
                    <span class=\"likes-no\"><span class=\"icon\"></span></span>
                </div>
            </div>
        </div>
    ";
            }
            // line 80
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "























";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "LiveActivities/articles_and_news_pages_liveactivities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 82,  226 => 80,  215 => 72,  211 => 71,  204 => 69,  200 => 68,  193 => 64,  189 => 63,  184 => 61,  180 => 60,  170 => 55,  166 => 54,  162 => 52,  160 => 51,  150 => 44,  146 => 43,  139 => 41,  135 => 40,  128 => 36,  124 => 35,  119 => 33,  115 => 32,  105 => 27,  101 => 26,  97 => 24,  95 => 23,  85 => 16,  81 => 15,  76 => 13,  72 => 12,  67 => 10,  58 => 6,  54 => 5,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for activity in liveactivities %}
    {% if activity.type.name=='Casino Post' %}
        <div  class='latest-activities-item'>
            <div class='latest-activities-logo'>
                <a href='{{ path('casino-review',{id:activity.postToCasino.id,casinoname:activity.postToCasino.slug}) }}'>
                    <img src='{{ activity.postToCasino.logo50 }}' alt='{{ activity.postToCasino.casinoname }}' width=\"50\" height=\"50\">
                </a>
            </div>
            <div class='latest-activities-content'>
                <p class=\"activity\">{{ activity.postText }}</p>
                <div class='latest-activities-name'>
                    <a href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                        <img width='30' height='30' src='{{ activity.userAdded.imagelocation }}' alt=''/>
                        <div class=\"float-left\">
                            {{ activity.userAdded.username }}<br/>
                            <span class=\"box-comments-date\">{{ activity.timeadded|date(\"M d,y h:s\") }}</span>
                        </div>
                    </a>
                    <span class=\"comments-no\"><span class=\"icon\"></span></span>
                </div>
            </div>
        </div>
    {% elseif activity.type.name=='Casino Like' %}
        <div  class='latest-activities-item'>
            <div class='latest-activities-logo'>
                <a href='{{ path('casino-review',{id:activity.casinoLiked.id,casinoname:activity.casinoLiked.slug}) }}'>
                    <img src='{{ activity.casinoLiked.logo50 }}' alt='{{ activity.casinoLiked.casinoname }}' width=\"50\" height=\"50\">
                </a>
            </div>
            <div class='latest-activities-content'>
                <p class=\"activity\">
                    <a href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                        {{ activity.userAdded.username }}
                    </a> liked
                    <a href='{{ path('casino-review',{id:activity.casinoLiked.id,casinoname:activity.casinoLiked.slug}) }}'>
                        {{ activity.casinoLiked.casinoname }}
                    </a>
                </p>
                <div class='latest-activities-name'>
                    <a href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                        <img height='30' width='30' src='{{ activity.userAdded.imagelocation }}' alt='{{ activity.userAdded.username }}'/>
                        <div class=\"float-left\">
                            {{ activity.userAdded.username }}<br/>
                            <span class=\"box-comments-date\">{{ activity.timeadded|date('M d,y h:s') }}</span>
                        </div>
                    </a>
                    <span class=\"likes-no\"><span class=\"icon\"></span></span>
                </div>
            </div>
        </div>
    {% elseif activity.type.name=='Bonus Like' %}
        <div  class='latest-activities-item'>
            <div class='latest-activities-logo'>
                <a href='{{ path('casino-review',{id:activity.likedBonus.casino.id,casinoname:activity.likedBonus.casino.slug}) }}'>
                    <img src='{{ activity.likedBonus.casino.logo50 }}' alt='{{ activity.likedBonus.casino.casinoname }}' width=\"50\" height=\"50\">
                </a>
            </div>
            <div class='latest-activities-content'>
                <p class=\"activity\">
                    <a href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                        {{ activity.userAdded.username }}
                    </a> liked
                    <a href='{{ path('casino-review',{id:activity.likedBonus.casino.id,casinoname:activity.likedBonus.casino.slug}) }}'>
                        {{ activity.likedBonus.casino.casinoname }}
                    </a>
                </p>
                <div class='latest-activities-name'>
                    <a href='{{ path('user',{id:activity.userAdded.id,username:activity.userAdded.username}) }}'>
                        <img height='30' width='30' src='{{ activity.userAdded.imagelocation }}' alt='{{ activity.userAdded.username }}'/>
                        <div class=\"float-left\">
                            {{ activity.userAdded.username }}<br/>
                            <span class=\"box-comments-date\">{{ activity.timeadded|date('M d,y h:s') }}</span>
                        </div>
                    </a>
                    <span class=\"likes-no\"><span class=\"icon\"></span></span>
                </div>
            </div>
        </div>
    {% endif %}

{% endfor %}
























", "LiveActivities/articles_and_news_pages_liveactivities.html.twig", "/var/www/ndc_new/templates/LiveActivities/articles_and_news_pages_liveactivities.html.twig");
    }
}
