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

/* Casino/bonus_wr_hover.html.twig */
class __TwigTemplate_6d214e81dbcea070b0fd9fb372d12b174d95b65fc65258b5838d0eb902c48ec8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Casino/bonus_wr_hover.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Casino/bonus_wr_hover.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 1, $this->source); })()), "classicblackjack", [], "any", false, false, false, 1) > 0)) {
            // line 2
            echo "    <div class=\"casinowar-item\">
        <img src='/img/icons/blackjack.png' width=\"20\" height=\"20\" alt=\"classic blackjack\">
         ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 4, $this->source); })()), "classicblackjack", [], "any", false, false, false, 4), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 4, $this->source); })()), "classicblackjackb", [], "any", false, false, false, 4) > 0)) {
                echo "xb";
            }
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 4, $this->source); })()), "classicblackjackd", [], "any", false, false, false, 4) > 0)) {
                echo "&d";
            }
            echo " classic blackjack
    </div>
";
        }
        // line 7
        echo "
";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 8, $this->source); })()), "otherblackjack", [], "any", false, false, false, 8) > 0)) {
            // line 9
            echo "    <div class=\"casinowar-item\">
        <img src='/img/icons/other-black-jack.png' width=\"20\" height=\"20\" alt=\"other blackjack\">
    ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 11, $this->source); })()), "otherblackjack", [], "any", false, false, false, 11), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 11, $this->source); })()), "otherblackjackb", [], "any", false, false, false, 11) > 0)) {
                echo "xb";
            }
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 11, $this->source); })()), "otherblackjackd", [], "any", false, false, false, 11) > 0)) {
                echo "&d";
            }
            echo " other blackjack
    </div>
";
        }
        // line 14
        echo "
";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 15, $this->source); })()), "videopoker", [], "any", false, false, false, 15) > 0)) {
            // line 16
            echo "    <div class=\"casinowar-item\">
        <img src='/img/icons/video-poker.png' width=\"20\" height=\"20\" alt=\"videopoker\">
         ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 18, $this->source); })()), "videopoker", [], "any", false, false, false, 18), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 18, $this->source); })()), "videopokerb", [], "any", false, false, false, 18) > 0)) {
                echo "xb";
            }
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 18, $this->source); })()), "videopokerd", [], "any", false, false, false, 18) > 0)) {
                echo "&d";
            }
            echo " videopoker
    </div>
";
        }
        // line 21
        echo "
";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 22, $this->source); })()), "craps", [], "any", false, false, false, 22) > 0)) {
            // line 23
            echo "    <div class=\"casinowar-item\">
        <img src='/img/icons/craps.png' width=\"20\" height=\"20\" alt=\"craps\">
         ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 25, $this->source); })()), "craps", [], "any", false, false, false, 25), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 25, $this->source); })()), "crapsb", [], "any", false, false, false, 25) > 0)) {
                echo "xb";
            }
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 25, $this->source); })()), "crapsd", [], "any", false, false, false, 25) > 0)) {
                echo "&d";
            }
            echo " craps
    </div>
";
        }
        // line 28
        echo "
";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 29, $this->source); })()), "baccarat", [], "any", false, false, false, 29) > 0)) {
            // line 30
            echo "    <div class=\"casinowar-item\">
        <img src='/img/icons/baccarat.png' width=\"20\" height=\"20\" alt=\"craps\">
         ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 32, $this->source); })()), "baccarat", [], "any", false, false, false, 32), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 32, $this->source); })()), "baccaratb", [], "any", false, false, false, 32) > 0)) {
                echo "xb";
            }
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 32, $this->source); })()), "baccaratd", [], "any", false, false, false, 32) > 0)) {
                echo "&d";
            }
            echo " baccarat
    </div>
";
        }
        // line 35
        echo "
";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 36, $this->source); })()), "pokergames", [], "any", false, false, false, 36) > 0)) {
            // line 37
            echo "    <div class=\"casinowar-item\">
        <img src='/img/icons/poker-games.png' width=\"20\" height=\"20\" alt=\"pokergames\">
         ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 39, $this->source); })()), "pokergames", [], "any", false, false, false, 39), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 39, $this->source); })()), "pokergamesb", [], "any", false, false, false, 39) > 0)) {
                echo "xb";
            }
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 39, $this->source); })()), "pokergamesd", [], "any", false, false, false, 39) > 0)) {
                echo "&d";
            }
            echo " pokergames
    </div>
";
        }
        // line 42
        echo "
";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 43, $this->source); })()), "sicbo", [], "any", false, false, false, 43) > 0)) {
            // line 44
            echo "    <div class=\"casinowar-item\">
        <img src='/img/icons/baccarat.png' width=\"20\" height=\"20\" alt=\"sicbo\">
        ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 46, $this->source); })()), "sicbo", [], "any", false, false, false, 46), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 46, $this->source); })()), "sicbob", [], "any", false, false, false, 46) > 0)) {
                echo "xb";
            }
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 46, $this->source); })()), "sicbod", [], "any", false, false, false, 46) > 0)) {
                echo "&d";
            }
            echo " sicbo
    </div>
";
        }
        // line 49
        echo "
";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 50, $this->source); })()), "americanroulette", [], "any", false, false, false, 50) > 0)) {
            // line 51
            echo "    <div class=\"casinowar-item\">
        <img src='/img/icons/roulette.png' width=\"20\" height=\"20\" alt=\"americanroulette\">
        ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 53, $this->source); })()), "americanroulette", [], "any", false, false, false, 53), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 53, $this->source); })()), "americanrouletteb", [], "any", false, false, false, 53) > 0)) {
                echo "xb";
            }
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 53, $this->source); })()), "americanrouletted", [], "any", false, false, false, 53) > 0)) {
                echo "&d";
            }
            echo " americanroulette
    </div>
";
        }
        // line 56
        echo "
";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 57, $this->source); })()), "otherroulette", [], "any", false, false, false, 57) > 0)) {
            // line 58
            echo "    <div class=\"casinowar-item\">
        <img src='/img/icons/other-roulette.png' width=\"20\" height=\"20\" alt=\"otherroulette\">
        ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 60, $this->source); })()), "otherroulette", [], "any", false, false, false, 60), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 60, $this->source); })()), "otherrouletteb", [], "any", false, false, false, 60) > 0)) {
                echo "xb";
            }
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 60, $this->source); })()), "otherrouletted", [], "any", false, false, false, 60) > 0)) {
                echo "&d";
            }
            echo " otherroulette
    </div>
";
        }
        // line 63
        echo "
";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 64, $this->source); })()), "slots", [], "any", false, false, false, 64) > 0)) {
            // line 65
            echo "    <div class=\"casinowar-item\">
        <img src='/img/icons/other-roulette.png' width=\"20\" height=\"20\" alt=\"slots\">
        ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 67, $this->source); })()), "slots", [], "any", false, false, false, 67), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 67, $this->source); })()), "slotsb", [], "any", false, false, false, 67) > 0)) {
                echo "xb";
            }
            if ((twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 67, $this->source); })()), "slotsd", [], "any", false, false, false, 67) > 0)) {
                echo "&d";
            }
            echo " slots
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Casino/bonus_wr_hover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 67,  234 => 65,  232 => 64,  229 => 63,  217 => 60,  213 => 58,  211 => 57,  208 => 56,  196 => 53,  192 => 51,  190 => 50,  187 => 49,  175 => 46,  171 => 44,  169 => 43,  166 => 42,  154 => 39,  150 => 37,  148 => 36,  145 => 35,  133 => 32,  129 => 30,  127 => 29,  124 => 28,  112 => 25,  108 => 23,  106 => 22,  103 => 21,  91 => 18,  87 => 16,  85 => 15,  82 => 14,  70 => 11,  66 => 9,  64 => 8,  61 => 7,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if bonus.classicblackjack >0 %}
    <div class=\"casinowar-item\">
        <img src='/img/icons/blackjack.png' width=\"20\" height=\"20\" alt=\"classic blackjack\">
         {{ bonus.classicblackjack }}{% if bonus.classicblackjackb > 0 %}xb{% endif %}{% if bonus.classicblackjackd > 0  %}&d{% endif %} classic blackjack
    </div>
{% endif %}

{% if bonus.otherblackjack >0 %}
    <div class=\"casinowar-item\">
        <img src='/img/icons/other-black-jack.png' width=\"20\" height=\"20\" alt=\"other blackjack\">
    {{ bonus.otherblackjack  }}{% if bonus.otherblackjackb > 0 %}xb{% endif %}{% if bonus.otherblackjackd > 0  %}&d{% endif %} other blackjack
    </div>
{% endif %}

{% if bonus.videopoker >0 %}
    <div class=\"casinowar-item\">
        <img src='/img/icons/video-poker.png' width=\"20\" height=\"20\" alt=\"videopoker\">
         {{ bonus.videopoker }}{% if bonus.videopokerb > 0 %}xb{% endif %}{% if bonus.videopokerd > 0  %}&d{% endif %} videopoker
    </div>
{% endif %}

{% if bonus.craps >0 %}
    <div class=\"casinowar-item\">
        <img src='/img/icons/craps.png' width=\"20\" height=\"20\" alt=\"craps\">
         {{ bonus.craps }}{% if bonus.crapsb > 0 %}xb{% endif %}{% if bonus.crapsd > 0  %}&d{% endif %} craps
    </div>
{% endif %}

{% if bonus.baccarat >0 %}
    <div class=\"casinowar-item\">
        <img src='/img/icons/baccarat.png' width=\"20\" height=\"20\" alt=\"craps\">
         {{ bonus.baccarat }}{% if bonus.baccaratb > 0 %}xb{% endif %}{% if bonus.baccaratd > 0  %}&d{% endif %} baccarat
    </div>
{% endif %}

{% if bonus.pokergames >0 %}
    <div class=\"casinowar-item\">
        <img src='/img/icons/poker-games.png' width=\"20\" height=\"20\" alt=\"pokergames\">
         {{ bonus.pokergames }}{% if bonus.pokergamesb > 0 %}xb{% endif %}{% if bonus.pokergamesd > 0  %}&d{% endif %} pokergames
    </div>
{% endif %}

{% if bonus.sicbo >0 %}
    <div class=\"casinowar-item\">
        <img src='/img/icons/baccarat.png' width=\"20\" height=\"20\" alt=\"sicbo\">
        {{ bonus.sicbo }}{% if bonus.sicbob > 0 %}xb{% endif %}{% if bonus.sicbod > 0  %}&d{% endif %} sicbo
    </div>
{% endif %}

{% if bonus.americanroulette >0 %}
    <div class=\"casinowar-item\">
        <img src='/img/icons/roulette.png' width=\"20\" height=\"20\" alt=\"americanroulette\">
        {{ bonus.americanroulette }}{% if bonus.americanrouletteb > 0 %}xb{% endif %}{% if bonus.americanrouletted > 0  %}&d{% endif %} americanroulette
    </div>
{% endif %}

{% if bonus.otherroulette >0 %}
    <div class=\"casinowar-item\">
        <img src='/img/icons/other-roulette.png' width=\"20\" height=\"20\" alt=\"otherroulette\">
        {{ bonus.otherroulette }}{% if bonus.otherrouletteb > 0 %}xb{% endif %}{% if bonus.otherrouletted > 0  %}&d{% endif %} otherroulette
    </div>
{% endif %}

{% if bonus.slots >0 %}
    <div class=\"casinowar-item\">
        <img src='/img/icons/other-roulette.png' width=\"20\" height=\"20\" alt=\"slots\">
        {{ bonus.slots }}{% if bonus.slotsb > 0 %}xb{% endif %}{% if bonus.slotsd > 0 %}&d{% endif %} slots
    </div>
{% endif %}", "Casino/bonus_wr_hover.html.twig", "/var/www/ndc_new/templates/Casino/bonus_wr_hover.html.twig");
    }
}
