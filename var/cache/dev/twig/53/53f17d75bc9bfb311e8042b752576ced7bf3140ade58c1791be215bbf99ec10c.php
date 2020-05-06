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

/* Articles/article.html.twig */
class __TwigTemplate_8ee39b32f0cb52166c09f77e39f1a261b076f01da725664e457995cf4fbca234 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/article.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Articles/article.html.twig", 1);
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
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "heading", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "        <div class=\"container article-text-holder\">
            <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to article text\">
                <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
            </a>
            <span id=\"button-link-1\"></span>
            ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "maintextwithimage", [], "any", false, false, false, 19);
        echo "
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        <script type=\"application/ld+json\">
        {
          \"@context\": \"http://schema.org\",
          \"@type\": \"Article\",
          \"author\": \"No Deposit Casino\",
          \"headline\": \"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 29, $this->source); })()), "heading", [], "any", false, false, false, 29), "html", null, true);
        echo "\",
          \"image\": \"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 30, $this->source); })()), "imagelocation", [], "any", false, false, false, 30)), "html", null, true);
        echo "\",
          \"datePublished\": \"";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 31, $this->source); })()), "timeadded", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
        echo "\",
          \"dateModified\": \"";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 32, $this->source); })()), "lastmodified", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
        echo "\",
          \"mainEntityOfPage\": \"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "uri", [], "any", false, false, false, 33), "html", null, true);
        echo "\",
          \"url\": \"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "uri", [], "any", false, false, false, 34), "html", null, true);
        echo "\",
          \"publisher\": {
            \"@type\": \"Organization\",
            \"name\": \"No Deposit Casino\",
            \"url\": \"https://nodepositcasino.org/\",
            \"logo\": {
                \"@type\": \"ImageObject\",
                \"url\": \"https://nodepositcasino.org/img/logo.png\",
                \"width\": \"400\",
                \"height\": \"60\"
            }
          }
        }
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Articles/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 34,  152 => 33,  148 => 32,  144 => 31,  140 => 30,  136 => 29,  129 => 24,  119 => 23,  106 => 19,  99 => 14,  89 => 13,  75 => 7,  70 => 4,  60 => 3,  37 => 1,);
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
        <div class=\"container article-text-holder\">
            <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to article text\">
                <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
            </a>
            <span id=\"button-link-1\"></span>
            {{ page.maintextwithimage|raw }}
        </div>
    {% endblock %}

    {% block javascripts %}
        <script type=\"application/ld+json\">
        {
          \"@context\": \"http://schema.org\",
          \"@type\": \"Article\",
          \"author\": \"No Deposit Casino\",
          \"headline\": \"{{ page.heading }}\",
          \"image\": \"{{ absolute_url(page.imagelocation) }}\",
          \"datePublished\": \"{{ page.timeadded|date('Y-m-d') }}\",
          \"dateModified\": \"{{ page.lastmodified|date('Y-m-d') }}\",
          \"mainEntityOfPage\": \"{{ app.request.uri }}\",
          \"url\": \"{{ app.request.uri }}\",
          \"publisher\": {
            \"@type\": \"Organization\",
            \"name\": \"No Deposit Casino\",
            \"url\": \"https://nodepositcasino.org/\",
            \"logo\": {
                \"@type\": \"ImageObject\",
                \"url\": \"https://nodepositcasino.org/img/logo.png\",
                \"width\": \"400\",
                \"height\": \"60\"
            }
          }
        }
        </script>
    {% endblock %}
", "Articles/article.html.twig", "/var/www/ndc_new/templates/Articles/article.html.twig");
    }
}
