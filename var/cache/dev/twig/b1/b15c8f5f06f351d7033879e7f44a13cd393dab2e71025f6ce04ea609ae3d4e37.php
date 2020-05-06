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

/* search.html.twig */
class __TwigTemplate_68f85042f527dd663f09e412258246299371099ec837b0edee7c4e331f018919 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search.html.twig", 1);
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
        echo "        <div class=\"header-content\">

            <div class=\"container\">

                <div class=\"ad-line\"></div><!--/.ad-line-->
                <h1 class=\"page-title\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "heading", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
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
        echo "        <!-- START MAIN CONTENT-->
        ";
        // line 17
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 18
            echo "            <div class=\"text-holder container\">
                <h4>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "</h4>
            </div><!--/#content-->
        ";
        } else {
            // line 22
            echo "            <div class=\"text-holder\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to Search results\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>

                <div class=\"list-data container\">
                    <h1>Search results</h1>
                    <span id=\"button-link-1\"></span>
                    <div class=\"casinos-list\">
                        ";
            // line 31
            echo (isset($context["casinos"]) || array_key_exists("casinos", $context) ? $context["casinos"] : (function () { throw new RuntimeError('Variable "casinos" does not exist.', 31, $this->source); })());
            echo "
                    </div>
                </div>
            </div><!--/#container-->
            ";
        }
        // line 36
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 36,  125 => 31,  114 => 22,  108 => 19,  105 => 18,  103 => 17,  100 => 16,  90 => 15,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block bodyheader %}
        <div class=\"header-content\">

            <div class=\"container\">

                <div class=\"ad-line\"></div><!--/.ad-line-->
                <h1 class=\"page-title\">{{ page.heading }}</h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->
    {% endblock %}


    {% block main %}
        <!-- START MAIN CONTENT-->
        {% if error is defined %}
            <div class=\"text-holder container\">
                <h4>{{ error }}</h4>
            </div><!--/#content-->
        {% else %}
            <div class=\"text-holder\">
                <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to Search results\">
                    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
                </a>

                <div class=\"list-data container\">
                    <h1>Search results</h1>
                    <span id=\"button-link-1\"></span>
                    <div class=\"casinos-list\">
                        {{ casinos|raw }}
                    </div>
                </div>
            </div><!--/#container-->
            {% endif %}
    {% endblock %}", "search.html.twig", "/var/www/ndc_new/templates/search.html.twig");
    }
}
