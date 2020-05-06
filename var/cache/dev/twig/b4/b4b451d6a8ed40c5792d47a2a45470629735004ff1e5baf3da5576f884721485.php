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

/* Casino/currency.html.twig */
class __TwigTemplate_e26ce07b5b2376fd4ea92354518c01b240b190f093b70f57115c9c218826566d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_follow' => [$this, 'block_meta_follow'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Casino/currency.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Casino/currency.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Casino/currency.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_meta_follow($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_follow"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_follow"));

        echo "noindex, nofollow";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_bodyheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        // line 8
        echo "        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\">
                </div><!--/.ad-line-->
                <h1 class=\"page-title\">";
        // line 12
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 12, $this->source); })()), "heading", [], "any", false, false, false, 12))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 12, $this->source); })()), "heading", [], "any", false, false, false, 12), "html", null, true);
        } else {
            echo "Online casinos that you can gamble with ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        }
        // line 13
        echo "                    <span>";
        echo twig_escape_filter($this->env, (isset($context["casinocount"]) || array_key_exists("casinocount", $context) ? $context["casinocount"] : (function () { throw new RuntimeError('Variable "casinocount" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</span>
                </h1>
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
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\">
                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>

                <span id=\"button-link-1\"></span>

                <div class=\"list-data\">
                    ";
        // line 29
        echo (isset($context["casinos"]) || array_key_exists("casinos", $context) ? $context["casinos"] : (function () { throw new RuntimeError('Variable "casinos" does not exist.', 29, $this->source); })());
        echo "
                </div>
            </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Casino/currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 29,  128 => 21,  118 => 20,  102 => 13,  95 => 12,  89 => 8,  79 => 7,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



    {% block meta_follow %}noindex, nofollow{% endblock %}

    {% block bodyheader %}
        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\">
                </div><!--/.ad-line-->
                <h1 class=\"page-title\">{% if currency.heading is not null %}{{ currency.heading }}{% else %}Online casinos that you can gamble with {{ currency.name }}{% endif %}
                    <span>{{ casinocount }}</span>
                </h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->
    {% endblock %}


    {% block main %}
            <div class=\"text-holder container\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\">
                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>

                <span id=\"button-link-1\"></span>

                <div class=\"list-data\">
                    {{ casinos|raw }}
                </div>
            </div>
    {% endblock %}", "Casino/currency.html.twig", "/var/www/ndc_new/templates/Casino/currency.html.twig");
    }
}
