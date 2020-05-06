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

/* Casino/review.html.twig */
class __TwigTemplate_985be76ac2fc3596f2eceeb533fda53647cf70fac75a776270d06910df492be9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'ogtitle' => [$this, 'block_ogtitle'],
            'ogdescription' => [$this, 'block_ogdescription'],
            'metakeywords' => [$this, 'block_metakeywords'],
            'bodyheader' => [$this, 'block_bodyheader'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
            'mainSchemaParameters' => [$this, 'block_mainSchemaParameters'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Casino/review.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Casino/review.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Casino/review.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", false, false, false, 2), "No Deposit Casino")) : ("No Deposit Casino")), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", false, false, false, 3), "No Deposit Casino")) : ("No Deposit Casino")), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", false, false, false, 4), "No Deposit Casino")) : ("No Deposit Casino")), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_ogdescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogdescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogdescription"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", false, false, false, 5), "No Deposit Casino")) : ("No Deposit Casino")), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_metakeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metakeywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metakeywords"));

        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "keywords", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "keywords", [], "any", false, false, false, 6), "No Deposit Casino")) : ("No Deposit Casino")), "html", null, true);
        
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
        echo "    <div class=\"header-content\">
    \t<div class=\"container\">
    \t\t<div class=\"ad-line\">
    \t\t\t<div class=\"ad-container\">
    \t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 12, $this->source); })()), "fullcasinoname", [], "any", false, false, false, 12), "html", null, true);
        echo "\" rel=\"noopener nofollow\" target=\"_blank\">
    \t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 13, $this->source); })()), "logo105", [], "any", false, false, false, 13)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 13, $this->source); })()), "casinoname", [], "any", false, false, false, 13), "html", null, true);
        echo "\" width=\"105\" height=\"105\" />
    \t\t\t\t</a>
    \t\t\t</div>
    \t\t</div>
    \t\t<!--/.ad-line-->
    \t\t<div class=\"review-header-content\" id=\"review\">
    \t\t\t<div class=\"review-title\">
    \t\t\t\t<div class=\"review-title-holder\">
    \t\t\t\t\t<a class=\"review-title-image\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 21, $this->source); })()), "casinoname", [], "any", false, false, false, 21), "html", null, true);
        echo "\" rel=\"noopener nofollow\" target=\"_blank\">
    \t\t\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 22, $this->source); })()), "logo105", [], "any", false, false, false, 22)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 22, $this->source); })()), "casinoname", [], "any", false, false, false, 22), "html", null, true);
        echo "\"  width=\"105\" height=\"105\"/>
    \t\t\t\t\t</a>
    \t\t\t\t\t<h1 class=\"page-title\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 24, $this->source); })()), "casinoname", [], "any", false, false, false, 24), "html", null, true);
        echo "</h1>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<ul class=\"review-header-list\">
    \t\t\t\t<li class=\"review-header-restrictions\">
    \t\t\t\t\t";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 29, $this->source); })()), "IsAvailableInCountry", [], "any", false, false, false, 29) == true)) {
            // line 30
            echo "    \t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 30, $this->source); })()), "imgsrc", [], "any", false, false, false, 30), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30) . " flag"), "html", null, true);
            echo "\" width=\"24\" height=\"24\">
    \t\t\t\t\t";
        } else {
            // line 32
            echo "    \t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 32, $this->source); })()), "imgsrc", [], "any", false, false, false, 32), "html", null, true);
            echo "\" style=\"opacity: 0.3; \" alt=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32) . " flag"), "html", null, true);
            echo "\" width=\"24\" height=\"24\">
    \t\t\t\t\t";
        }
        // line 34
        echo "    \t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 34, $this->source); })()), "IsAvailableInCountry", [], "any", false, false, false, 34) == true)) {
            // line 35
            echo "    \t\t\t\t\t";
            $context["p"] = ((" <span class='accepted'>accepted</span><br> Players from " . twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35)) . " are accepted at this Casino");
            // line 36
            echo "    \t\t\t\t\t";
        } else {
            // line 37
            echo "    \t\t\t\t\t";
            $context["p"] = (("<span class='not-accepted'>not accepted</span><br>Players from " . twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37)) . " are not accepted at this Casino");
            // line 38
            echo "    \t\t\t\t\t";
        }
        // line 39
        echo "    \t\t\t\t\t<p>";
        echo (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 39, $this->source); })());
        echo "</p>
    \t\t\t\t</li>
    \t\t\t\t";
        // line 41
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 41, $this->source); })()), "posts", [], "any", false, false, false, 41)) > 0)) {
            // line 42
            echo "    \t\t\t\t<li>
    \t\t\t\t\t<a class=\"comments scroll-to-link\" href=\"#button-link-3\">
        \t\t\t\t\t<span class=\"icon\"></span>
        \t\t\t\t\t<span class=\"text\">
                                ";
            // line 46
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 46, $this->source); })()), "posts", [], "any", false, false, false, 46)), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 46, $this->source); })()), "posts", [], "any", false, false, false, 46)) > 1)) {
                echo "Comments";
            } else {
                echo "Comment";
            }
            // line 47
            echo "        \t\t\t\t\t</span>
    \t\t\t\t\t</a><!--/.comments-->
    \t\t\t\t</li>
    \t\t\t\t";
        }
        // line 51
        echo "    \t\t\t\t<li>
    \t\t\t\t\t<a class=\"likes\" href=\"\" data-casino=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "\"  onclick=\"return false;\" style=\"cursor: pointer;\" >
        \t\t\t\t\t<span class=\"icon\"></span>
        \t\t\t\t\t<span class=\"text\">
            \t\t\t\t\t";
        // line 55
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 55, $this->source); })()), "likes", [], "any", false, false, false, 55)) > 0)) {
            // line 56
            echo "                \t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 56, $this->source); })()), "likes", [], "any", false, false, false, 56)), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 56, $this->source); })()), "likes", [], "any", false, false, false, 56)) > 1)) {
                echo "Likes";
            } else {
                echo "Like";
            }
            // line 57
            echo "            \t\t\t\t\t";
        }
        // line 58
        echo "        \t\t\t\t\t</span>
    \t\t\t\t\t</a>
    \t\t\t\t</li>
    \t\t\t\t";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 61, $this->source); })()), "awardrank", [], "any", false, false, false, 61) < 100)) {
            // line 62
            echo "    \t\t\t\t<li>
    \t\t\t\t\t<div class=\"rank\"><span class=\"icon\"></span>#";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 63, $this->source); })()), "awardrank", [], "any", false, false, false, 63), "html", null, true);
            echo "</div>
    \t\t\t\t</li>
    \t\t\t\t";
        }
        // line 66
        echo "    \t\t\t</ul>
    \t\t\t<div class=\"button-holder\">
    \t\t\t\t<a class=\"btn btn-lg btn-primary btn-shadow\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 68, $this->source); })()), "casinoname", [], "any", false, false, false, 68), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener nofollow\">play now</a>
    \t\t\t\t<a class=\"btn btn-light btn-shadow scroll-to-link\" href=\"#post_a_comment\">leave a comment</a>
    \t\t\t</div>
    \t\t</div>
    \t\t<!--/.title-line-->
    \t</div>
    \t<!--/.wrap-->
    </div>
    <!--/#content-header-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 79
        echo "
    ";
        // line 80
        if ((twig_length_filter($this->env, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 80, $this->source); })())) != 0)) {
            // line 81
            echo "        <div class=\"review-bonuses\">
        \t<a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to bonus\">
        \t<i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
        \t</a>
        \t<div class=\"container\">
        \t\t";
            // line 86
            if ((twig_length_filter($this->env, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 86, $this->source); })())) > 1)) {
                // line 87
                echo "        \t\t<h2 id=\"button-link-1\" class=\"review-bonuses-h\">Casino Bonuses</h2>
        \t\t";
            }
            // line 89
            echo "        \t\t";
            if ((twig_length_filter($this->env, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 89, $this->source); })())) == 1)) {
                // line 90
                echo "        \t\t<h2 id=\"button-link-1\" class=\"review-bonuses-h\">Casino Bonus</h2>
        \t\t";
            }
            // line 92
            echo "

    \t\t    ";
            // line 94
            if ((twig_length_filter($this->env, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 94, $this->source); })())) == 1)) {
                // line 95
                echo "    \t\t        <div class=\"review-bonus-item single\">
        \t\t        <div class=\"review-single-top\">
                    \t\t<img class=\"review-bonus-img\" src=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 97, $this->source); })()), 0, [], "array", false, false, false, 97), "bonustype", [], "any", false, false, false, 97), "imagelocation", [], "any", false, false, false, 97)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 97, $this->source); })()), 0, [], "array", false, false, false, 97), "bonustype", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
                echo "\" width=\"70\" height=\"70\">
                    \t\t<h3 class=\"review-bonus-name\">";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 98, $this->source); })()), 0, [], "array", false, false, false, 98), "bonustype", [], "any", false, false, false, 98), "name", [], "any", false, false, false, 98), "html", null, true);
                echo "</h3>
        \t\t        </div>
                        ";
                // line 100
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 100, $this->source); })()), 0, [], "array", false, false, false, 100), "exclusive", [], "any", false, false, false, 100)) {
                    // line 101
                    echo "        \t\t\t\t    <span class=\"box-exclusive\"><i class=\"fas fa-star\"></i> &nbsp;Exclusive</span>
    \t\t\t\t\t";
                }
                // line 103
                echo "    \t\t\t\t\t<h4 class=\"review-bonus-amount\">
        \t\t\t\t\t";
                // line 104
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 104, $this->source); })()), 0, [], "array", false, false, false, 104), "bonuspercent", [], "any", false, false, false, 104) > 0)) {
                    // line 105
                    echo "            \t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 105, $this->source); })()), 0, [], "array", false, false, false, 105), "bonuspercent", [], "any", false, false, false, 105), "html", null, true);
                    echo "%
        \t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 106
(isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 106, $this->source); })()), 0, [], "array", false, false, false, 106), "freespins", [], "any", false, false, false, 106) > 0)) {
                    // line 107
                    echo "            \t\t\t\t\t<span class=\"spins\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 107, $this->source); })()), 0, [], "array", false, false, false, 107), "freespins", [], "any", false, false, false, 107), "html", null, true);
                    echo " CASINO SPINS</span>
        \t\t\t\t\t";
                }
                // line 109
                echo "        \t\t\t\t\t";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 109, $this->source); })()), 0, [], "array", false, false, false, 109), "showOnlyFirstValue", [], "any", false, false, false, 109) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 109, $this->source); })()), 0, [], "array", false, false, false, 109), "maxbonus", [], "any", false, false, false, 109) > 0))) {
                    // line 110
                    echo "            \t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 110, $this->source); })()), 0, [], "array", false, false, false, 110), "bonuspercent", [], "any", false, false, false, 110) > 0) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 110, $this->source); })()), 0, [], "array", false, false, false, 110), "freespins", [], "any", false, false, false, 110) > 0))) {
                        // line 111
                        echo "                                    <br/><span class=\"up-to\">Up To</span>
                                ";
                    }
                    // line 113
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 113, $this->source); })()), 0, [], "array", false, false, false, 113), "maxbonus", [], "any", false, false, false, 113) == 0)) {
                        // line 114
                        echo "                                    &infin;
                                ";
                    } else {
                        // line 116
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 116, $this->source); })()), 0, [], "array", false, false, false, 116), "maxbonus", [], "any", false, false, false, 116), ".")), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 116, $this->source); })()), 0, [], "array", false, false, false, 116), "symbol", [], "any", false, false, false, 116), "html", null, true);
                        echo "
                                ";
                    }
                    // line 118
                    echo "        \t\t\t\t\t";
                }
                // line 119
                echo "        \t\t\t\t\t";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 119, $this->source); })()), 0, [], "array", false, false, false, 119), "tcurl", [], "any", false, false, false, 119)) > 0)) {
                    // line 120
                    echo "                                <a class=\"review-bonus-toc\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 120, $this->source); })()), 0, [], "array", false, false, false, 120), "tcurl", [], "any", false, false, false, 120), "html", null, true);
                    echo "\" rel=\"nofollow noopener\" target=\"_blank\">T&C's Apply</a>
                            ";
                }
                // line 122
                echo "        \t\t\t\t</h4>
        \t\t\t\t<p class=\"review-bonus-code\">
        \t\t\t\t\t";
                // line 124
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 124, $this->source); })()), 0, [], "array", false, false, false, 124), "code", [], "any", false, false, false, 124) != null)) {
                    // line 125
                    echo "            \t\t\t\t\tCode: <span class=\"tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\"><span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 125, $this->source); })()), 0, [], "array", false, false, false, 125), "code", [], "any", false, false, false, 125), "html", null, true);
                    echo "</span></span>
        \t\t\t\t\t";
                }
                // line 127
                echo "        \t\t\t\t</p>
        \t\t\t\t<div class= \"review-bonus-description\">
        \t\t\t\t\t";
                // line 129
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 129, $this->source); })()), 0, [], "array", false, false, false, 129), "extraintable", [], "any", false, false, false, 129)) > 249)) {
                    // line 130
                    echo "            \t\t\t\t\t<div class=\"show-more-height\">
            \t\t\t\t\t\t";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 131, $this->source); })()), 0, [], "array", false, false, false, 131), "extraintable", [], "any", false, false, false, 131);
                    echo "
            \t\t\t\t\t</div>
                                <a class=\"show-more\" data-controls=\"\" data-state=\"closed\">SHOW MORE</a>
            \t\t\t\t\t";
                } else {
                    // line 135
                    echo "            \t\t\t\t\t    ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 135, $this->source); })()), 0, [], "array", false, false, false, 135), "extraintable", [], "any", false, false, false, 135);
                    echo "
        \t\t\t\t\t";
                }
                // line 137
                echo "        \t\t\t\t</div>
        \t\t\t\t<div class=\"text-center\">
            \t\t\t\t<ul class=\"review-bonus-details\">
            \t\t\t\t\t<li>
            \t\t\t\t\t\t<span class=\"title\">Cashable</span>
            \t\t\t\t\t\t";
                // line 142
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 142, $this->source); })()), 0, [], "array", false, false, false, 142), "cashable", [], "any", false, false, false, 142) == 1)) {
                    // line 143
                    echo "            \t\t\t\t\t\t    ";
                    echo "cashable";
                    echo "
            \t\t\t\t\t\t";
                } else {
                    // line 145
                    echo "            \t\t\t\t\t\t    ";
                    echo "not cashable";
                    echo "
            \t\t\t\t\t\t";
                }
                // line 147
                echo "            \t\t\t\t\t</li>
            \t\t\t\t\t<li class=\"border-side\">
        \t\t\t\t\t\t    <span class=\"title\">Minimum Wagering</span>
        \t\t\t\t\t\t    ";
                // line 150
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 150, $this->source); })()), 0, [], "array", false, false, false, 150), "casinowar", [], "any", false, false, false, 150) > 0)) {
                    // line 151
                    echo "        \t\t\t\t\t\t\t    ";
                    $context["war"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 151, $this->source); })()), 0, [], "array", false, false, false, 151), "casinowar", [], "any", false, false, false, 151);
                    // line 152
                    echo "                                        <span class=\"war\">
                                            ";
                    // line 153
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 153, $this->source); })()), 0, [], "array", false, false, false, 153), "casinowarb", [], "any", false, false, false, 153) == 1)) {
                        // line 154
                        echo "                                                ";
                        $context["war"] = ((isset($context["war"]) || array_key_exists("war", $context) ? $context["war"] : (function () { throw new RuntimeError('Variable "war" does not exist.', 154, $this->source); })()) . "xb");
                        // line 155
                        echo "                                            ";
                    }
                    // line 156
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 156, $this->source); })()), 0, [], "array", false, false, false, 156), "casinoward", [], "any", false, false, false, 156) == 1)) {
                        // line 157
                        echo "                                                ";
                        $context["war"] = ((isset($context["war"]) || array_key_exists("war", $context) ? $context["war"] : (function () { throw new RuntimeError('Variable "war" does not exist.', 157, $this->source); })()) . "xd");
                        // line 158
                        echo "                                            ";
                    }
                    // line 159
                    echo "                                            ";
                    echo twig_escape_filter($this->env, (isset($context["war"]) || array_key_exists("war", $context) ? $context["war"] : (function () { throw new RuntimeError('Variable "war" does not exist.', 159, $this->source); })()), "html", null, true);
                    echo "
        \t\t\t\t\t\t\t    </span>
        \t\t\t\t\t\t\t";
                }
                // line 162
                echo "        \t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 162, $this->source); })()), 0, [], "array", false, false, false, 162), "wrCount", [], "any", false, false, false, 162) > 0)) {
                    // line 163
                    echo "            \t\t\t\t\t\t\t<a class=\"morecasinowar\" status=\"closed\" onclick=\"return false;\">
            \t\t\t\t\t\t\t\t";
                    // line 164
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 164, $this->source); })()), 0, [], "array", false, false, false, 164), "wrCount", [], "any", false, false, false, 164) > 1)) {
                        echo "More";
                    } else {
                        echo "Info";
                    }
                    // line 165
                    echo "            \t\t\t\t\t\t\t\t<div class=\"casinowar\">
            \t\t\t\t\t\t\t\t\t";
                    // line 166
                    $this->loadTemplate("Casino/bonus_wr_hover.html.twig", "Casino/review.html.twig", 166)->display(twig_array_merge($context, ["bonus" => twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 166, $this->source); })()), 0, [], "array", false, false, false, 166)]));
                    // line 167
                    echo "            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t</a>
            \t\t\t\t\t\t";
                }
                // line 170
                echo "            \t\t\t\t\t</li>
            \t\t\t\t\t<li>
            \t\t\t\t\t\t<span class=\"title\">Bonus Given</span>
            \t\t\t\t\t\t";
                // line 173
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 173, $this->source); })()), 0, [], "array", false, false, false, 173), "bonusgiven", [], "any", false, false, false, 173) == 1)) {
                    // line 174
                    echo "                \t\t\t\t\t\t";
                    echo "before";
                    echo "
            \t\t\t\t\t\t";
                } else {
                    // line 176
                    echo "                \t\t\t\t\t\t";
                    echo "after";
                    echo "
            \t\t\t\t\t\t";
                }
                // line 178
                echo "            \t\t\t\t\t</li>
            \t\t\t\t</ul>
        \t\t\t\t    <a href=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 180, $this->source); })()), "id", [], "any", false, false, false, 180)]), "html", null, true);
                echo "\" rel=\"noopener nofollow\" class=\"btn btn-primary\" target=\"_blank\">CLAIM</a>
        \t\t\t\t</div>
    \t\t        </div>
                ";
            } else {
                // line 184
                echo "                    <div class=\"review-bonus-list\">
                        ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["bonuses"]) || array_key_exists("bonuses", $context) ? $context["bonuses"] : (function () { throw new RuntimeError('Variable "bonuses" does not exist.', 185, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["bonus"]) {
                    // line 186
                    echo "\t\t\t\t\t\t\t";
                    $context["type"] = twig_get_attribute($this->env, $this->source, $context["bonus"], "bonustype", [], "any", false, false, false, 186);
                    // line 187
                    echo "                    \t\t<div class=\"review-bonus-item\">
                        \t\t<img class=\"review-bonus-img\" src=\"";
                    // line 188
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 188, $this->source); })()), "imagelocation", [], "any", false, false, false, 188)), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 188, $this->source); })()), "name", [], "any", false, false, false, 188), "html", null, true);
                    echo "\" width=\"70\" height=\"70\">
                        \t\t<h3 class=\"review-bonus-name\">";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 189, $this->source); })()), "name", [], "any", false, false, false, 189), "html", null, true);
                    echo "</h3>
                                ";
                    // line 190
                    if (twig_get_attribute($this->env, $this->source, $context["bonus"], "exclusive", [], "any", false, false, false, 190)) {
                        // line 191
                        echo "                \t\t\t\t    <span class=\"box-exclusive\"><i class=\"fas fa-star\"></i> &nbsp;Exclusive</span>
            \t\t\t\t\t";
                    }
                    // line 193
                    echo "            \t\t\t\t\t<h4 class=\"review-bonus-amount\">
                \t\t\t\t\t";
                    // line 194
                    if ((twig_get_attribute($this->env, $this->source, $context["bonus"], "bonuspercent", [], "any", false, false, false, 194) > 0)) {
                        // line 195
                        echo "                    \t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "bonuspercent", [], "any", false, false, false, 195), "html", null, true);
                        echo "%
                \t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 196
$context["bonus"], "freespins", [], "any", false, false, false, 196) > 0)) {
                        // line 197
                        echo "                    \t\t\t\t\t<span class=\"spins\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "freespins", [], "any", false, false, false, 197), "html", null, true);
                        echo " CASINO SPINS</span>
                \t\t\t\t\t";
                    }
                    // line 199
                    echo "                \t\t\t\t\t";
                    if (( !twig_get_attribute($this->env, $this->source, $context["bonus"], "showOnlyFirstValue", [], "any", false, false, false, 199) && (twig_get_attribute($this->env, $this->source, $context["bonus"], "maxbonus", [], "any", false, false, false, 199) > 0))) {
                        // line 200
                        echo "                    \t\t\t\t\t";
                        if (((twig_get_attribute($this->env, $this->source, $context["bonus"], "bonuspercent", [], "any", false, false, false, 200) > 0) || (twig_get_attribute($this->env, $this->source, $context["bonus"], "freespins", [], "any", false, false, false, 200) > 0))) {
                            // line 201
                            echo "                                            <br/><span class=\"up-to\">Up To</span>
                                        ";
                        }
                        // line 203
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["bonus"], "maxbonus", [], "any", false, false, false, 203) == 0)) {
                            // line 204
                            echo "                                            &infin;
                                        ";
                        } else {
                            // line 206
                            echo "                                            ";
                            echo twig_escape_filter($this->env, twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "maxbonus", [], "any", false, false, false, 206), ".")), "html", null, true);
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "symbol", [], "any", false, false, false, 206), "html", null, true);
                            echo "
                                        ";
                        }
                        // line 208
                        echo "                \t\t\t\t\t";
                    }
                    // line 209
                    echo "                \t\t\t\t\t";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "tcurl", [], "any", false, false, false, 209)) > 0)) {
                        // line 210
                        echo "                                        <a class=\"review-bonus-toc\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "tcurl", [], "any", false, false, false, 210), "html", null, true);
                        echo "\" rel=\"nofollow noopener\" target=\"_blank\">T&C's Apply</a>
                                    ";
                    } else {
                        // line 212
                        echo "                                        <span class=\"review-bonus-toc\"></span>
                                    ";
                    }
                    // line 214
                    echo "                \t\t\t\t</h4>
                \t\t\t\t<p class=\"review-bonus-code\">
                \t\t\t\t\t";
                    // line 216
                    if ((twig_get_attribute($this->env, $this->source, $context["bonus"], "code", [], "any", false, false, false, 216) != null)) {
                        // line 217
                        echo "                    \t\t\t\t\tCode: <span class=\"tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\"><span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "code", [], "any", false, false, false, 217), "html", null, true);
                        echo "</span></span>
                \t\t\t\t\t";
                    }
                    // line 219
                    echo "                \t\t\t\t</p>
                \t\t\t\t<div class= \"review-bonus-description\">
                \t\t\t\t\t";
                    // line 221
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "extraintable", [], "any", false, false, false, 221)) > 249)) {
                        // line 222
                        echo "                    \t\t\t\t\t<div class=\"show-more-height\">
                    \t\t\t\t\t\t";
                        // line 223
                        echo twig_get_attribute($this->env, $this->source, $context["bonus"], "extraintable", [], "any", false, false, false, 223);
                        echo "
                    \t\t\t\t\t</div>
                                        <a class=\"show-more\" data-controls=\"\" data-state=\"closed\">SHOW MORE</a>
                    \t\t\t\t\t";
                    } else {
                        // line 227
                        echo "                    \t\t\t\t\t    ";
                        echo twig_get_attribute($this->env, $this->source, $context["bonus"], "extraintable", [], "any", false, false, false, 227);
                        echo "
                \t\t\t\t\t";
                    }
                    // line 229
                    echo "                \t\t\t\t</div>
                \t\t\t\t<ul class=\"review-bonus-details\">
                \t\t\t\t\t<li>
                \t\t\t\t\t\t<span class=\"title\">Cashable</span>
                \t\t\t\t\t\t";
                    // line 233
                    if ((twig_get_attribute($this->env, $this->source, $context["bonus"], "cashable", [], "any", false, false, false, 233) == 1)) {
                        // line 234
                        echo "                \t\t\t\t\t\t    ";
                        echo "cashable";
                        echo "
                \t\t\t\t\t\t";
                    } else {
                        // line 236
                        echo "                \t\t\t\t\t\t    ";
                        echo "not cashable";
                        echo "
                \t\t\t\t\t\t";
                    }
                    // line 238
                    echo "                \t\t\t\t\t</li>
                \t\t\t\t\t<li class=\"border-side\">
            \t\t\t\t\t\t    <span class=\"title\">Minimum Wagering</span>
            \t\t\t\t\t\t    ";
                    // line 241
                    if ((twig_get_attribute($this->env, $this->source, $context["bonus"], "casinowar", [], "any", false, false, false, 241) > 0)) {
                        // line 242
                        echo "            \t\t\t\t\t\t\t    ";
                        $context["war"] = twig_get_attribute($this->env, $this->source, $context["bonus"], "casinowar", [], "any", false, false, false, 242);
                        // line 243
                        echo "                                            <span class=\"war\">
                                                ";
                        // line 244
                        if ((twig_get_attribute($this->env, $this->source, $context["bonus"], "casinowarb", [], "any", false, false, false, 244) == 1)) {
                            // line 245
                            echo "                                                    ";
                            $context["war"] = ((isset($context["war"]) || array_key_exists("war", $context) ? $context["war"] : (function () { throw new RuntimeError('Variable "war" does not exist.', 245, $this->source); })()) . "xb");
                            // line 246
                            echo "                                                ";
                        }
                        // line 247
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["bonus"], "casinoward", [], "any", false, false, false, 247) == 1)) {
                            // line 248
                            echo "                                                    ";
                            $context["war"] = ((isset($context["war"]) || array_key_exists("war", $context) ? $context["war"] : (function () { throw new RuntimeError('Variable "war" does not exist.', 248, $this->source); })()) . "xd");
                            // line 249
                            echo "                                                ";
                        }
                        // line 250
                        echo "                                                ";
                        echo twig_escape_filter($this->env, (isset($context["war"]) || array_key_exists("war", $context) ? $context["war"] : (function () { throw new RuntimeError('Variable "war" does not exist.', 250, $this->source); })()), "html", null, true);
                        echo "
            \t\t\t\t\t\t\t    </span>
            \t\t\t\t\t\t\t";
                    }
                    // line 253
                    echo "            \t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["bonus"], "wrCount", [], "any", false, false, false, 253) > 0)) {
                        // line 254
                        echo "                \t\t\t\t\t\t\t<a class=\"morecasinowar\" status=\"closed\" onclick=\"return false;\">
                \t\t\t\t\t\t\t\t";
                        // line 255
                        if ((twig_get_attribute($this->env, $this->source, $context["bonus"], "wrCount", [], "any", false, false, false, 255) > 1)) {
                            echo "More";
                        } else {
                            echo "Info";
                        }
                        // line 256
                        echo "                \t\t\t\t\t\t\t\t<div class=\"casinowar\">
                \t\t\t\t\t\t\t\t\t";
                        // line 257
                        $this->loadTemplate("Casino/bonus_wr_hover.html.twig", "Casino/review.html.twig", 257)->display(twig_array_merge($context, ["bonus" => $context["bonus"]]));
                        // line 258
                        echo "                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t</a>
                                        ";
                    }
                    // line 261
                    echo "                \t\t\t\t\t</li>
                \t\t\t\t\t<li>
                \t\t\t\t\t\t<span class=\"title\">Bonus Given</span>
                \t\t\t\t\t\t";
                    // line 264
                    if ((twig_get_attribute($this->env, $this->source, $context["bonus"], "bonusgiven", [], "any", false, false, false, 264) == 1)) {
                        // line 265
                        echo "                    \t\t\t\t\t\t";
                        echo "before";
                        echo "
                \t\t\t\t\t\t";
                    } else {
                        // line 267
                        echo "                    \t\t\t\t\t\t";
                        echo "after";
                        echo "
                \t\t\t\t\t\t";
                    }
                    // line 269
                    echo "                \t\t\t\t\t</li>
                \t\t\t\t</ul>
                \t\t\t\t    <a href=\"";
                    // line 271
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271)]), "html", null, true);
                    echo "\" rel=\"noopener nofollow\" class=\"btn btn-primary\" target=\"_blank\">CLAIM</a>
                \t\t    </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bonus'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                echo "                    </div>
                ";
            }
            // line 276
            echo "        \t</div>
        </div>
    ";
        }
        // line 279
        echo "
    <div class=\"main-review\">
    \t<!--MAIN REVIEW-->
    \t<a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-2\" aria-label=\"Scroll to review\">
    \t    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
    \t</a>
    \t<div class=\"container\">
    \t\t<h2 class=\"h1\">Playing at ";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 286, $this->source); })()), "casinoname", [], "any", false, false, false, 286), "html", null, true);
        echo "</h2>
    \t\t<div class=\"row\">
    \t\t\t<div class=\"main-review-content col-md-12\" id=\"button-link-2\">
    \t\t\t\t<div class=\"button-holder\">
    \t\t\t\t\t<a class=\"btn review-like btn-primary btn-shadow\" data-casino=\"";
        // line 290
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 290, $this->source); })()), "id", [], "any", false, false, false, 290), "html", null, true);
        echo "\" onclick=\"return false;\"  href=\"#\">
        \t\t\t\t\t<span class=\"icon\"></span>
    \t\t\t\t\t\t";
        // line 292
        if (twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 292, $this->source); })()), "likedbyuser", [], "any", false, false, false, 292)) {
            // line 293
            echo "    \t\t\t\t\t\t    LIKED
    \t\t\t\t\t\t";
        } else {
            // line 295
            echo "    \t\t\t\t\t\t    LIKE THIS CASINO
    \t\t\t\t\t\t";
        }
        // line 297
        echo "    \t\t\t\t\t</a>
    \t\t\t\t\t<a class=\"btn review-comment btn-shadow scroll-to-link\" href=\"#button-link-3\">
        \t\t\t\t\t<span class=\"icon\"></span>
    \t\t\t\t\t\tCOMMENT CASINO
    \t\t\t\t\t</a>
    \t\t\t\t</div>
\t\t\t\t\t<div class=\"main-review-slideshow\">
\t\t\t\t\t\t";
        // line 304
        $context["screen"] = 0;
        // line 305
        echo "\t\t\t\t\t\t";
        $context["big"] = "";
        // line 306
        echo "\t\t\t\t\t\t";
        $context["thumb"] = "";
        // line 307
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 307, $this->source); })()), "screenshots", [], "any", false, false, false, 307));
        foreach ($context['_seq'] as $context["_key"] => $context["screenshot"]) {
            // line 308
            echo "\t\t\t\t\t\t";
            $context["screen"] = ((isset($context["screen"]) || array_key_exists("screen", $context) ? $context["screen"] : (function () { throw new RuntimeError('Variable "screen" does not exist.', 308, $this->source); })()) + 1);
            // line 309
            echo "\t\t\t\t\t\t";
            if (((isset($context["screen"]) || array_key_exists("screen", $context) ? $context["screen"] : (function () { throw new RuntimeError('Variable "screen" does not exist.', 309, $this->source); })()) <= 5)) {
                // line 310
                echo "\t\t\t\t\t\t";
                $context["big"] = ((((((((((isset($context["big"]) || array_key_exists("big", $context) ? $context["big"] : (function () { throw new RuntimeError('Variable "big" does not exist.', 310, $this->source); })()) . "
\t\t\t\t\t\t<a href='") . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source,                 // line 311
$context["screenshot"], "url", [], "any", false, false, false, 311))) . "' data-lightbox='roadtrip'><img src='") . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["screenshot"], "sliderimagesource", [], "any", false, false, false, 311))) . "' alt='") . twig_get_attribute($this->env, $this->source, $context["screenshot"], "filename", [], "any", false, false, false, 311)) . "' aria-label='") . twig_get_attribute($this->env, $this->source, $context["screenshot"], "filename", [], "any", false, false, false, 311)) . "'></a>
\t\t\t\t\t\t");
                // line 313
                echo "\t\t\t\t\t\t";
                $context["thumb"] = ((((((isset($context["thumb"]) || array_key_exists("thumb", $context) ? $context["thumb"] : (function () { throw new RuntimeError('Variable "thumb" does not exist.', 313, $this->source); })()) . "
\t\t\t\t\t\t<img src='") . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source,                 // line 314
$context["screenshot"], "thumbimagesource", [], "any", false, false, false, 314))) . "' alt='") . twig_get_attribute($this->env, $this->source, $context["screenshot"], "filename", [], "any", false, false, false, 314)) . "' >
\t\t\t\t\t\t");
                // line 316
                echo "\t\t\t\t\t\t";
            }
            // line 317
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['screenshot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        echo "\t\t\t\t\t\t<div class=\"slideshow-review\">
\t\t\t\t\t\t\t<div class=\"slider-big-img\">
\t\t\t\t\t\t\t\t";
        // line 320
        echo (isset($context["big"]) || array_key_exists("big", $context) ? $context["big"] : (function () { throw new RuntimeError('Variable "big" does not exist.', 320, $this->source); })());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"slider-thumb-nav\">
\t\t\t\t\t\t\t\t";
        // line 323
        echo (isset($context["thumb"]) || array_key_exists("thumb", $context) ? $context["thumb"] : (function () { throw new RuntimeError('Variable "thumb" does not exist.', 323, $this->source); })());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--/.slideshow-->
\t\t\t\t\t<div class=\"main-review-text show-more-height\">
    \t\t\t\t\t";
        // line 329
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 329, $this->source); })()), "reviewtext", [], "any", false, false, false, 329)) > 0)) {
            // line 330
            echo "    \t\t\t\t\t    ";
            echo (isset($context["reviewtext"]) || array_key_exists("reviewtext", $context) ? $context["reviewtext"] : (function () { throw new RuntimeError('Variable "reviewtext" does not exist.', 330, $this->source); })());
            echo "
    \t\t\t\t\t";
        } else {
            // line 332
            echo "    \t\t\t\t\t    <p>";
            echo "Review coming soon.";
            echo "</p>
    \t\t\t\t\t";
        }
        // line 334
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 335
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 335, $this->source); })()), "reviewtext", [], "any", false, false, false, 335)) > 0)) {
            // line 336
            echo "                        <a href=\"#\" class=\"show-more d-block d-md-none\" data-controls=\"\" data-state=\"closed\">SHOW MORE</a>
                    ";
        }
        // line 338
        echo "\t\t\t\t\t<div class=\"powered-by\">
\t\t\t\t\t    <span>Powered by:</span>
\t\t\t\t\t\t";
        // line 340
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 340, $this->source); })()), "dontShowFactualInformation", [], "any", false, false, false, 340)) {
            // line 341
            echo "\t\t\t\t\t\t\t";
            $context["image"] = 0;
            // line 342
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["softwares"]) || array_key_exists("softwares", $context) ? $context["softwares"] : (function () { throw new RuntimeError('Variable "softwares" does not exist.', 342, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["software"]) {
                // line 343
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["software"], "availableInCountry", [], "any", false, false, false, 343) == 1)) {
                    // line 344
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["opacity"] = 1;
                    // line 345
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 346
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["opacity"] = 0.3;
                    // line 347
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 348
                echo "\t\t\t\t\t\t\t\t";
                $context["image"] = ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 348, $this->source); })()) + 1);
                // line 349
                echo "\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\" data-original=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["software"], "softwarelogo", [], "any", false, false, false, 349)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "title", [], "any", false, false, false, 349), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "title", [], "any", false, false, false, 349), "html", null, true);
                echo "\" width=\"40\" height=\"24\" style=\"opacity:";
                echo twig_escape_filter($this->env, (isset($context["opacity"]) || array_key_exists("opacity", $context) ? $context["opacity"] : (function () { throw new RuntimeError('Variable "opacity" does not exist.', 349, $this->source); })()), "html", null, true);
                echo ";\">
\t\t\t\t\t\t\t\t";
                // line 350
                if ((((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 350, $this->source); })()) % 5) == 0)) {
                    // line 351
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo "<br>";
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 353
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['software'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 355
            echo "\t\t\t\t\t\t\t\t<p>Please visit their website for more details.</p>
\t\t\t\t\t\t";
        }
        // line 357
        echo "\t\t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t\t<!--/.row-->
    \t\t<div class=\"row main-review-bottom\">
    \t\t\t<div class=\"col-md-4\">
    \t\t\t\t<h3>Banking</h3>
\t\t\t\t\t";
        // line 364
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 364, $this->source); })()), "dontShowFactualInformation", [], "any", false, false, false, 364)) {
            // line 365
            echo "    \t\t\t\t<p>
    \t\t\t\t\t";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 366, $this->source); })()), "casinoname", [], "any", false, false, false, 366), "html", null, true);
            echo " supports banking methods  for deposits and withdrawals for
    \t\t\t\t\t";
            // line 367
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 367, $this->source); })()), "bankingoptions", [], "any", false, false, false, 367));
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
            foreach ($context['_seq'] as $context["_key"] => $context["banking"]) {
                // line 368
                echo "    \t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("banking", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banking"], "banking", [], "any", false, false, false, 368), "id", [], "any", false, false, false, 368), "casinoname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banking"], "banking", [], "any", false, false, false, 368), "slug", [], "any", false, false, false, 368)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banking"], "banking", [], "any", false, false, false, 368), "name", [], "any", false, false, false, 368), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 368)) {
                    echo ", ";
                }
                // line 369
                echo "    \t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banking'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 370
            echo "    \t\t\t\t</p>
    \t\t\t\t";
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 371, $this->source); })()), "bankingoptions", [], "any", false, false, false, 371));
            foreach ($context['_seq'] as $context["_key"] => $context["banking"]) {
                // line 372
                echo "    \t\t\t\t    <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"";
                // line 373
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banking"], "banking", [], "any", false, false, false, 373), "imagelocation", [], "any", false, false, false, 373)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banking"], "banking", [], "any", false, false, false, 373), "name", [], "any", false, false, false, 373), "html", null, true);
                echo "\" width=\"40\" height=\"24\" />
    \t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banking'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 375
            echo "\t\t\t\t\t";
        } else {
            // line 376
            echo "\t\t\t\t\t<p>Please visit their website for more details.</p>
\t\t\t\t\t";
        }
        // line 378
        echo "    \t\t\t</div>
    \t\t\t<div class=\"col-md-4\">
    \t\t\t\t<h3>Currencies</h3>
\t\t\t\t\t";
        // line 381
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 381, $this->source); })()), "dontShowFactualInformation", [], "any", false, false, false, 381)) {
            // line 382
            echo "    \t\t\t\t<p>
    \t\t\t\t\t";
            // line 383
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 383, $this->source); })()), "casinoname", [], "any", false, false, false, 383), "html", null, true);
            echo " accepts the following currencies:
    \t\t\t\t\t";
            // line 384
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 384, $this->source); })()), "currencies", [], "any", false, false, false, 384));
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
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 385
                echo "    \t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("currency", ["id" => twig_get_attribute($this->env, $this->source, $context["currency"], "id", [], "any", false, false, false, 385), "name" => twig_get_attribute($this->env, $this->source, $context["currency"], "slug", [], "any", false, false, false, 385)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "name", [], "any", false, false, false, 385), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 385)) {
                    echo ", ";
                }
                // line 386
                echo "    \t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            echo "    \t\t\t\t</p>
\t\t\t\t\t";
            // line 388
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 388, $this->source); })()), "currencies", [], "any", false, false, false, 388));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 389
                echo "\t\t\t\t\t    <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"";
                // line 390
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["currency"], "imagelocation", [], "any", false, false, false, 390)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 390, $this->source); })()), "casinoname", [], "any", false, false, false, 390) . " accepts ") . twig_get_attribute($this->env, $this->source, $context["currency"], "name", [], "any", false, false, false, 390)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 390, $this->source); })()), "casinoname", [], "any", false, false, false, 390) . " accepts ") . twig_get_attribute($this->env, $this->source, $context["currency"], "name", [], "any", false, false, false, 390)), "html", null, true);
                echo "\" width=\"16\" height=\"11\" />
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "\t\t\t\t\t";
        } else {
            // line 393
            echo "\t\t\t\t\t\t<p>Please visit their website for more details.</p>
\t\t\t\t\t";
        }
        // line 395
        echo "    \t\t\t</div>
    \t\t\t<div class=\"col-md-4\">
    \t\t\t\t<h3>Languages</h3>
\t\t\t\t\t";
        // line 398
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 398, $this->source); })()), "dontShowFactualInformation", [], "any", false, false, false, 398)) {
            // line 399
            echo "    \t\t\t\t<p>
    \t\t\t\t\t";
            // line 400
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 400, $this->source); })()), "casinoname", [], "any", false, false, false, 400), "html", null, true);
            echo " supports the following languages:
    \t\t\t\t\t";
            // line 401
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 401, $this->source); })()), "languages", [], "any", false, false, false, 401));
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
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 402
                echo "    \t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("language", ["id" => twig_get_attribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 402), "name" => twig_get_attribute($this->env, $this->source, $context["language"], "slug", [], "any", false, false, false, 402)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 402), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 402)) {
                    echo ", ";
                }
                // line 403
                echo "    \t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "    \t\t\t\t</p>
\t\t\t\t\t";
            // line 405
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 405, $this->source); })()), "languages", [], "any", false, false, false, 405));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 406
                echo "    \t\t\t\t\t<img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"";
                // line 407
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["language"], "imagelocation", [], "any", false, false, false, 407)), "html", null, true);
                echo "\"  alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 407), "html", null, true);
                echo "\"  width=\"16\" height=\"11\" />
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            echo "\t\t\t\t\t";
        } else {
            // line 410
            echo "\t\t\t\t\t\t<p>Please visit their website for more details.</p>
\t\t\t\t\t";
        }
        // line 412
        echo "    \t\t\t</div>
    \t\t</div>
    \t\t<!--END MAIN REVIEW-->
    \t</div>
    \t<!--/.wrap-->
    </div>
    <!--/#main review-->

\t<div class=\"main-review-comments\">
\t\t<a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-3\" aria-label=\"Scroll to feedback\">
\t\t    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<div class=\"container\">
    \t\t<div class=\"text-center\">
    \t\t\t<h2 class=\"h1\" id=\"button-link-3\">Real Players Feedback</h2>
    \t\t\t";
        // line 427
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 427, $this->source); })()), "posts", [], "any", false, false, false, 427)) > 0)) {
            // line 428
            echo "    \t\t\t<p class=\"review-comments-no\"><span class=\"icon\"></span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 428, $this->source); })()), "posts", [], "any", false, false, false, 428)), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 428, $this->source); })()), "posts", [], "any", false, false, false, 428)) == 1)) {
                echo "Comment";
            } else {
                echo "Comments";
            }
            echo "</p>
    \t\t</div>
\t\t\t";
        }
        // line 431
        echo "\t\t\t<section class=\"box-comments review-comments\">
\t\t\t\t";
        // line 432
        echo (isset($context["likesandcomments"]) || array_key_exists("likesandcomments", $context) ? $context["likesandcomments"] : (function () { throw new RuntimeError('Variable "likesandcomments" does not exist.', 432, $this->source); })());
        echo "
\t\t\t</section>
\t\t\t";
        // line 434
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 435
            echo "\t\t\t    ";
            $context["modal"] = "#registerModal";
            // line 436
            echo "\t\t\t";
        } else {
            // line 437
            echo "\t\t\t    ";
            $context["modal"] = "#post-form-modal";
            // line 438
            echo "            ";
        }
        // line 439
        echo "
\t\t\t";
        // line 440
        if (((isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 440, $this->source); })()) > 10)) {
            // line 441
            echo "    \t\t\t<div class=\"list-data-buttons text-center mb-0\">
    \t\t\t\t<a href=\"#\" class=\"btn btn-orange-outline\" id=\"more_activities_cas\" data-first=\"10\" data-casinoid=\"";
            // line 442
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 442, $this->source); })()), "id", [], "any", false, false, false, 442), "html", null, true);
            echo "\" data-total=\"";
            echo twig_escape_filter($this->env, (isset($context["totalnumber"]) || array_key_exists("totalnumber", $context) ? $context["totalnumber"] : (function () { throw new RuntimeError('Variable "totalnumber" does not exist.', 442, $this->source); })()), "html", null, true);
            echo "\" onclick=\"return false;\">
    \t\t\t\t\tMore Activities
    \t\t\t\t</a>
    \t\t\t\t<a href=\"#\" class=\"btn btn-orange-outline\" id=\"all_activities_cas\" data-first=\"10\" onclick=\"return false;\">
    \t\t\t\t\tAll Activities
    \t\t\t\t</a>
    \t\t\t</div>
\t\t\t";
        }
        // line 450
        echo "\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t<a href=\"#\" id=\"post_a_comment\" data-toggle=\"modal\" data-target=\"";
        // line 451
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 451, $this->source); })()), "html", null, true);
        echo "\"  class=\"btn btn-orange-outline\" onclick=\"return false;\">Post a comment</a>
\t\t\t</div>
\t\t</div>
\t\t<!--/.wrap-->
\t</div>
\t<!--/.comments-->
    <!--/#content-->
    <div class=\"modal\" id=\"post-form-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    \t<div class=\"modal-dialog\" role=\"document\">
    \t\t<div class=\"tclose\" data-dismiss=\"modal\"></div>
    \t\t<div class='modal-dialog-inner'>
    \t\t\t<form class='post-comment-form' action='' method='post' onsubmit='return false;'>
    \t\t\t\t<h3>Post comment to ";
        // line 463
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 463, $this->source); })()), "casinoname", [], "any", false, false, false, 463), "html", null, true);
        echo "
    \t\t\t\t\t<a href=''>Post</a>
    \t\t\t\t</h3>
    \t\t\t\t<div class=\"form-group\">
        \t\t\t\t<textarea aria-label='Comment' placeholder='Comment' name='post_comment' rows='' cols='' id='postcontent' required ></textarea>
        \t\t\t\t<div class=\"post-form-error form-error\">Comment can't be blank</div>
    \t\t\t\t</div>
    \t\t\t\t<input type='submit' value='Post Comment' casinoid='";
        // line 470
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 470, $this->source); })()), "id", [], "any", false, false, false, 470), "html", null, true);
        echo "' id='postbutton' class=\"btn btn-primary btn-shadow\" />
    \t\t\t</form>
    \t\t</div>
    \t</div>
    </div>
    <!-- END NEW -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 478
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 479
        echo "    <script type=\"text/javascript\">
    \tvar _sf_startpt=(new Date()).getTime()
    </script>
     <script type=\"application/ld+json\">
    {
      \"@context\": \"http://schema.org/\",
      \"@type\": \"Review\",
      \"itemReviewed\": {
        \"@type\": \"Organization\",
        \"name\": \"";
        // line 488
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 488, $this->source); })()), "casinoname", [], "any", false, false, false, 488), "html", null, true);
        echo "\",
        \"description\": \"";
        // line 489
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", true, true, false, 489)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", false, false, false, 489), "No Deposit Casino")) : ("No Deposit Casino")), "html", null, true);
        echo "\",
        \"image\": \"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 490, $this->source); })()), "logo105", [], "any", false, false, false, 490))), "html", null, true);
        echo "\"
      },
      \"author\": {
        \"@type\": \"Organization\",
        \"name\": \"No Deposit Casino\",
        \"url\": \"https://nodepositcasino.org/\",
        \"logo\": \"https://nodepositcasino.org/img/logo.png\"
      },
      \"reviewRating\": {
        \"@type\": \"Rating\",
        \"ratingValue\": \"";
        // line 500
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 500, $this->source); })()), "averagerating", [], "any", false, false, false, 500), "html", null, true);
        echo "\",
        \"bestRating\": \"5\",
        \"worstRating\": \"0\"
      }
    }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 508
    public function block_mainSchemaParameters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainSchemaParameters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainSchemaParameters"));

        // line 509
        echo "    <script type=\"application/ld+json\">
    {
        \"@context\": \"http://schema.org\",
        \"@type\": \"WebPage\",
        \"name\": \"";
        // line 513
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", true, true, false, 513)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", false, false, false, 513), "No Deposit Casino")) : ("No Deposit Casino")), "html", null, true);
        echo "\",
        \"description\": \"";
        // line 514
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", true, true, false, 514)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", false, false, false, 514), "No Deposit Casino")) : ("No Deposit Casino")), "html", null, true);
        echo "\",
        \"publisher\": {
            \"@type\": \"Organization\",
            \"name\": \"No Deposit Casino\"
        }
    }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Casino/review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1499 => 514,  1495 => 513,  1489 => 509,  1479 => 508,  1462 => 500,  1449 => 490,  1445 => 489,  1441 => 488,  1430 => 479,  1420 => 478,  1403 => 470,  1393 => 463,  1378 => 451,  1375 => 450,  1362 => 442,  1359 => 441,  1357 => 440,  1354 => 439,  1351 => 438,  1348 => 437,  1345 => 436,  1342 => 435,  1340 => 434,  1335 => 432,  1332 => 431,  1319 => 428,  1317 => 427,  1300 => 412,  1296 => 410,  1293 => 409,  1283 => 407,  1280 => 406,  1276 => 405,  1273 => 404,  1259 => 403,  1250 => 402,  1233 => 401,  1229 => 400,  1226 => 399,  1224 => 398,  1219 => 395,  1215 => 393,  1212 => 392,  1200 => 390,  1197 => 389,  1193 => 388,  1190 => 387,  1176 => 386,  1167 => 385,  1150 => 384,  1146 => 383,  1143 => 382,  1141 => 381,  1136 => 378,  1132 => 376,  1129 => 375,  1119 => 373,  1116 => 372,  1112 => 371,  1109 => 370,  1095 => 369,  1086 => 368,  1069 => 367,  1065 => 366,  1062 => 365,  1060 => 364,  1051 => 357,  1047 => 355,  1044 => 354,  1038 => 353,  1032 => 351,  1030 => 350,  1019 => 349,  1016 => 348,  1013 => 347,  1010 => 346,  1007 => 345,  1004 => 344,  1001 => 343,  996 => 342,  993 => 341,  991 => 340,  987 => 338,  983 => 336,  981 => 335,  978 => 334,  972 => 332,  966 => 330,  964 => 329,  955 => 323,  949 => 320,  945 => 318,  939 => 317,  936 => 316,  933 => 314,  930 => 313,  927 => 311,  924 => 310,  921 => 309,  918 => 308,  913 => 307,  910 => 306,  907 => 305,  905 => 304,  896 => 297,  892 => 295,  888 => 293,  886 => 292,  881 => 290,  874 => 286,  865 => 279,  860 => 276,  856 => 274,  839 => 271,  835 => 269,  829 => 267,  823 => 265,  821 => 264,  816 => 261,  811 => 258,  809 => 257,  806 => 256,  800 => 255,  797 => 254,  794 => 253,  787 => 250,  784 => 249,  781 => 248,  778 => 247,  775 => 246,  772 => 245,  770 => 244,  767 => 243,  764 => 242,  762 => 241,  757 => 238,  751 => 236,  745 => 234,  743 => 233,  737 => 229,  731 => 227,  724 => 223,  721 => 222,  719 => 221,  715 => 219,  709 => 217,  707 => 216,  703 => 214,  699 => 212,  693 => 210,  690 => 209,  687 => 208,  680 => 206,  676 => 204,  673 => 203,  669 => 201,  666 => 200,  663 => 199,  657 => 197,  655 => 196,  650 => 195,  648 => 194,  645 => 193,  641 => 191,  639 => 190,  635 => 189,  629 => 188,  626 => 187,  623 => 186,  606 => 185,  603 => 184,  596 => 180,  592 => 178,  586 => 176,  580 => 174,  578 => 173,  573 => 170,  568 => 167,  566 => 166,  563 => 165,  557 => 164,  554 => 163,  551 => 162,  544 => 159,  541 => 158,  538 => 157,  535 => 156,  532 => 155,  529 => 154,  527 => 153,  524 => 152,  521 => 151,  519 => 150,  514 => 147,  508 => 145,  502 => 143,  500 => 142,  493 => 137,  487 => 135,  480 => 131,  477 => 130,  475 => 129,  471 => 127,  465 => 125,  463 => 124,  459 => 122,  453 => 120,  450 => 119,  447 => 118,  440 => 116,  436 => 114,  433 => 113,  429 => 111,  426 => 110,  423 => 109,  417 => 107,  415 => 106,  410 => 105,  408 => 104,  405 => 103,  401 => 101,  399 => 100,  394 => 98,  388 => 97,  384 => 95,  382 => 94,  378 => 92,  374 => 90,  371 => 89,  367 => 87,  365 => 86,  358 => 81,  356 => 80,  353 => 79,  343 => 78,  321 => 68,  317 => 66,  311 => 63,  308 => 62,  306 => 61,  301 => 58,  298 => 57,  289 => 56,  287 => 55,  281 => 52,  278 => 51,  272 => 47,  264 => 46,  258 => 42,  256 => 41,  250 => 39,  247 => 38,  244 => 37,  241 => 36,  238 => 35,  235 => 34,  227 => 32,  219 => 30,  217 => 29,  209 => 24,  202 => 22,  196 => 21,  183 => 13,  177 => 12,  171 => 8,  161 => 7,  142 => 6,  123 => 5,  104 => 4,  85 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{meta.title|default('No Deposit Casino')}}{% endblock %}
{% block metaDescription %}{{meta.description|default('No Deposit Casino')}}{% endblock %}
{% block ogtitle %}{{meta.title|default('No Deposit Casino')}}{% endblock %}
{% block ogdescription %}{{meta.description|default('No Deposit Casino')}}{% endblock %}
{% block metakeywords %}{{meta.keywords|default('No Deposit Casino')}}{% endblock %}
{% block bodyheader %}
    <div class=\"header-content\">
    \t<div class=\"container\">
    \t\t<div class=\"ad-line\">
    \t\t\t<div class=\"ad-container\">
    \t\t\t\t<a href=\"{{ path(\"visit_casino\",{'id':casino.id}) }}\" title=\"{{ casino.fullcasinoname }}\" rel=\"noopener nofollow\" target=\"_blank\">
    \t\t\t\t<img src=\"{{ asset(casino.logo105) }}\" alt=\"{{ casino.casinoname }}\" width=\"105\" height=\"105\" />
    \t\t\t\t</a>
    \t\t\t</div>
    \t\t</div>
    \t\t<!--/.ad-line-->
    \t\t<div class=\"review-header-content\" id=\"review\">
    \t\t\t<div class=\"review-title\">
    \t\t\t\t<div class=\"review-title-holder\">
    \t\t\t\t\t<a class=\"review-title-image\" href=\"{{ path('visit_casino',{id:casino.id}) }}\" title=\"{{ casino.casinoname }}\" rel=\"noopener nofollow\" target=\"_blank\">
    \t\t\t\t\t<img src=\"{{ asset(casino.logo105) }}\" alt=\"{{ casino.casinoname }}\"  width=\"105\" height=\"105\"/>
    \t\t\t\t\t</a>
    \t\t\t\t\t<h1 class=\"page-title\">{{ casino.casinoname }}</h1>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<ul class=\"review-header-list\">
    \t\t\t\t<li class=\"review-header-restrictions\">
    \t\t\t\t\t{% if(casino.IsAvailableInCountry==true)%}
    \t\t\t\t\t<img src=\"{{country.imgsrc}}\" alt=\"{{ country.name~' flag' }}\" width=\"24\" height=\"24\">
    \t\t\t\t\t{% else %}
    \t\t\t\t\t<img src=\"{{country.imgsrc}}\" style=\"opacity: 0.3; \" alt=\"{{ country.name~' flag' }}\" width=\"24\" height=\"24\">
    \t\t\t\t\t{% endif %}
    \t\t\t\t\t{% if(casino.IsAvailableInCountry==true)%}
    \t\t\t\t\t{% set p=\" <span class='accepted'>accepted</span><br> Players from \"~country.name~\" are accepted at this Casino\" %}
    \t\t\t\t\t{% else %}
    \t\t\t\t\t{% set p=\"<span class='not-accepted'>not accepted</span><br>Players from \"~country.name~\" are not accepted at this Casino\" %}
    \t\t\t\t\t{% endif %}
    \t\t\t\t\t<p>{{ p|raw }}</p>
    \t\t\t\t</li>
    \t\t\t\t{% if(casino.posts|length > 0) %}
    \t\t\t\t<li>
    \t\t\t\t\t<a class=\"comments scroll-to-link\" href=\"#button-link-3\">
        \t\t\t\t\t<span class=\"icon\"></span>
        \t\t\t\t\t<span class=\"text\">
                                {{ casino.posts|length }} {% if casino.posts|length > 1 %}Comments{% else %}Comment{% endif %}
        \t\t\t\t\t</span>
    \t\t\t\t\t</a><!--/.comments-->
    \t\t\t\t</li>
    \t\t\t\t{% endif %}
    \t\t\t\t<li>
    \t\t\t\t\t<a class=\"likes\" href=\"\" data-casino=\"{{ casino.id }}\"  onclick=\"return false;\" style=\"cursor: pointer;\" >
        \t\t\t\t\t<span class=\"icon\"></span>
        \t\t\t\t\t<span class=\"text\">
            \t\t\t\t\t{% if(casino.likes|length >0) %}
                \t\t\t\t\t{{ casino.likes|length }} {% if casino.likes|length > 1 %}Likes{% else %}Like{% endif %}
            \t\t\t\t\t{% endif %}
        \t\t\t\t\t</span>
    \t\t\t\t\t</a>
    \t\t\t\t</li>
    \t\t\t\t{% if(casino.awardrank<100) %}
    \t\t\t\t<li>
    \t\t\t\t\t<div class=\"rank\"><span class=\"icon\"></span>#{{ casino.awardrank }}</div>
    \t\t\t\t</li>
    \t\t\t\t{% endif %}
    \t\t\t</ul>
    \t\t\t<div class=\"button-holder\">
    \t\t\t\t<a class=\"btn btn-lg btn-primary btn-shadow\" href=\"{{ path('visit_casino',{id:casino.id}) }}\" title=\"{{ casino.casinoname }}\" target=\"_blank\" rel=\"noopener nofollow\">play now</a>
    \t\t\t\t<a class=\"btn btn-light btn-shadow scroll-to-link\" href=\"#post_a_comment\">leave a comment</a>
    \t\t\t</div>
    \t\t</div>
    \t\t<!--/.title-line-->
    \t</div>
    \t<!--/.wrap-->
    </div>
    <!--/#content-header-->
{% endblock %}
{% block main %}

    {% if bonuses|length!=0 %}
        <div class=\"review-bonuses\">
        \t<a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-1\" aria-label=\"Scroll to bonus\">
        \t<i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
        \t</a>
        \t<div class=\"container\">
        \t\t{% if bonuses|length > 1 %}
        \t\t<h2 id=\"button-link-1\" class=\"review-bonuses-h\">Casino Bonuses</h2>
        \t\t{% endif %}
        \t\t{%   if bonuses|length == 1 %}
        \t\t<h2 id=\"button-link-1\" class=\"review-bonuses-h\">Casino Bonus</h2>
        \t\t{% endif %}


    \t\t    {% if(bonuses|length==1) %}
    \t\t        <div class=\"review-bonus-item single\">
        \t\t        <div class=\"review-single-top\">
                    \t\t<img class=\"review-bonus-img\" src=\"{{ asset(bonuses[0].bonustype.imagelocation) }}\" alt=\"{{ bonuses[0].bonustype.name }}\" width=\"70\" height=\"70\">
                    \t\t<h3 class=\"review-bonus-name\">{{ bonuses[0].bonustype.name }}</h3>
        \t\t        </div>
                        {% if (bonuses[0].exclusive) %}
        \t\t\t\t    <span class=\"box-exclusive\"><i class=\"fas fa-star\"></i> &nbsp;Exclusive</span>
    \t\t\t\t\t{% endif %}
    \t\t\t\t\t<h4 class=\"review-bonus-amount\">
        \t\t\t\t\t{% if bonuses[0].bonuspercent > 0 %}
            \t\t\t\t\t{{ bonuses[0].bonuspercent }}%
        \t\t\t\t\t{% elseif bonuses[0].freespins > 0 %}
            \t\t\t\t\t<span class=\"spins\">{{ bonuses[0].freespins }} CASINO SPINS</span>
        \t\t\t\t\t{% endif %}
        \t\t\t\t\t{% if not bonuses[0].showOnlyFirstValue and bonuses[0].maxbonus > 0 %}
            \t\t\t\t\t{% if bonuses[0].bonuspercent > 0 or bonuses[0].freespins > 0 %}
                                    <br/><span class=\"up-to\">Up To</span>
                                {% endif %}
                                {% if bonuses[0].maxbonus == 0  %}
                                    &infin;
                                {% else %}
                                    {{ bonuses[0].maxbonus|split('.')|first }}{{ bonuses[0].symbol }}
                                {% endif %}
        \t\t\t\t\t{% endif %}
        \t\t\t\t\t{% if bonuses[0].tcurl|length>0 %}
                                <a class=\"review-bonus-toc\" href=\"{{ bonuses[0].tcurl }}\" rel=\"nofollow noopener\" target=\"_blank\">T&C's Apply</a>
                            {% endif %}
        \t\t\t\t</h4>
        \t\t\t\t<p class=\"review-bonus-code\">
        \t\t\t\t\t{% if(bonuses[0].code!=null) %}
            \t\t\t\t\tCode: <span class=\"tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\"><span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">{{ bonuses[0].code }}</span></span>
        \t\t\t\t\t{% endif %}
        \t\t\t\t</p>
        \t\t\t\t<div class= \"review-bonus-description\">
        \t\t\t\t\t{% if (bonuses[0].extraintable|raw|length>249) %}
            \t\t\t\t\t<div class=\"show-more-height\">
            \t\t\t\t\t\t{{ bonuses[0].extraintable|raw }}
            \t\t\t\t\t</div>
                                <a class=\"show-more\" data-controls=\"\" data-state=\"closed\">SHOW MORE</a>
            \t\t\t\t\t{% else %}
            \t\t\t\t\t    {{ bonuses[0].extraintable|raw }}
        \t\t\t\t\t{% endif %}
        \t\t\t\t</div>
        \t\t\t\t<div class=\"text-center\">
            \t\t\t\t<ul class=\"review-bonus-details\">
            \t\t\t\t\t<li>
            \t\t\t\t\t\t<span class=\"title\">Cashable</span>
            \t\t\t\t\t\t{% if(bonuses[0].cashable==1) %}
            \t\t\t\t\t\t    {{ 'cashable' }}
            \t\t\t\t\t\t{% else %}
            \t\t\t\t\t\t    {{ 'not cashable' }}
            \t\t\t\t\t\t{% endif %}
            \t\t\t\t\t</li>
            \t\t\t\t\t<li class=\"border-side\">
        \t\t\t\t\t\t    <span class=\"title\">Minimum Wagering</span>
        \t\t\t\t\t\t    {% if bonuses[0].casinowar>0 %}
        \t\t\t\t\t\t\t    {%   set war=bonuses[0].casinowar %}
                                        <span class=\"war\">
                                            {% if bonuses[0].casinowarb==1 %}
                                                {% set war=war~'xb' %}
                                            {% endif %}
                                            {% if bonuses[0].casinoward==1 %}
                                                {% set war=war~'xd' %}
                                            {% endif %}
                                            {{ war }}
        \t\t\t\t\t\t\t    </span>
        \t\t\t\t\t\t\t{% endif %}
        \t\t\t\t\t\t\t{% if(bonuses[0].wrCount > 0) %}
            \t\t\t\t\t\t\t<a class=\"morecasinowar\" status=\"closed\" onclick=\"return false;\">
            \t\t\t\t\t\t\t\t{% if(bonuses[0].wrCount > 1) %}More{% else %}Info{% endif %}
            \t\t\t\t\t\t\t\t<div class=\"casinowar\">
            \t\t\t\t\t\t\t\t\t{% include 'Casino/bonus_wr_hover.html.twig' with {'bonus': bonuses[0]} %}
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t</a>
            \t\t\t\t\t\t{% endif %}
            \t\t\t\t\t</li>
            \t\t\t\t\t<li>
            \t\t\t\t\t\t<span class=\"title\">Bonus Given</span>
            \t\t\t\t\t\t{% if bonuses[0].bonusgiven==1  %}
                \t\t\t\t\t\t{{ 'before' }}
            \t\t\t\t\t\t{% else %}
                \t\t\t\t\t\t{{ 'after'  }}
            \t\t\t\t\t\t{% endif %}
            \t\t\t\t\t</li>
            \t\t\t\t</ul>
        \t\t\t\t    <a href=\"{{ path(\"visit_casino\",{id:casino.id}) }}\" rel=\"noopener nofollow\" class=\"btn btn-primary\" target=\"_blank\">CLAIM</a>
        \t\t\t\t</div>
    \t\t        </div>
                {% else %}
                    <div class=\"review-bonus-list\">
                        {% for bonus in bonuses %}
\t\t\t\t\t\t\t{% set type=bonus.bonustype %}
                    \t\t<div class=\"review-bonus-item\">
                        \t\t<img class=\"review-bonus-img\" src=\"{{ asset(type.imagelocation) }}\" alt=\"{{ type.name }}\" width=\"70\" height=\"70\">
                        \t\t<h3 class=\"review-bonus-name\">{{ type.name }}</h3>
                                {% if (bonus.exclusive) %}
                \t\t\t\t    <span class=\"box-exclusive\"><i class=\"fas fa-star\"></i> &nbsp;Exclusive</span>
            \t\t\t\t\t{% endif %}
            \t\t\t\t\t<h4 class=\"review-bonus-amount\">
                \t\t\t\t\t{% if bonus.bonuspercent > 0 %}
                    \t\t\t\t\t{{ bonus.bonuspercent }}%
                \t\t\t\t\t{% elseif bonus.freespins > 0 %}
                    \t\t\t\t\t<span class=\"spins\">{{ bonus.freespins }} CASINO SPINS</span>
                \t\t\t\t\t{% endif %}
                \t\t\t\t\t{% if not bonus.showOnlyFirstValue and bonus.maxbonus > 0 %}
                    \t\t\t\t\t{% if bonus.bonuspercent > 0 or bonus.freespins > 0 %}
                                            <br/><span class=\"up-to\">Up To</span>
                                        {% endif %}
                                        {% if bonus.maxbonus == 0  %}
                                            &infin;
                                        {% else %}
                                            {{ bonus.maxbonus|split('.')|first }}{{ bonus.symbol }}
                                        {% endif %}
                \t\t\t\t\t{% endif %}
                \t\t\t\t\t{% if bonus.tcurl|length>0 %}
                                        <a class=\"review-bonus-toc\" href=\"{{ bonus.tcurl }}\" rel=\"nofollow noopener\" target=\"_blank\">T&C's Apply</a>
                                    {% else %}
                                        <span class=\"review-bonus-toc\"></span>
                                    {% endif %}
                \t\t\t\t</h4>
                \t\t\t\t<p class=\"review-bonus-code\">
                \t\t\t\t\t{% if(bonus.code!=null) %}
                    \t\t\t\t\tCode: <span class=\"tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\"><span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">{{ bonus.code }}</span></span>
                \t\t\t\t\t{% endif %}
                \t\t\t\t</p>
                \t\t\t\t<div class= \"review-bonus-description\">
                \t\t\t\t\t{% if (bonus.extraintable|raw|length>249) %}
                    \t\t\t\t\t<div class=\"show-more-height\">
                    \t\t\t\t\t\t{{ bonus.extraintable|raw }}
                    \t\t\t\t\t</div>
                                        <a class=\"show-more\" data-controls=\"\" data-state=\"closed\">SHOW MORE</a>
                    \t\t\t\t\t{% else %}
                    \t\t\t\t\t    {{ bonus.extraintable|raw }}
                \t\t\t\t\t{% endif %}
                \t\t\t\t</div>
                \t\t\t\t<ul class=\"review-bonus-details\">
                \t\t\t\t\t<li>
                \t\t\t\t\t\t<span class=\"title\">Cashable</span>
                \t\t\t\t\t\t{% if(bonus.cashable==1) %}
                \t\t\t\t\t\t    {{ 'cashable' }}
                \t\t\t\t\t\t{% else %}
                \t\t\t\t\t\t    {{ 'not cashable' }}
                \t\t\t\t\t\t{% endif %}
                \t\t\t\t\t</li>
                \t\t\t\t\t<li class=\"border-side\">
            \t\t\t\t\t\t    <span class=\"title\">Minimum Wagering</span>
            \t\t\t\t\t\t    {% if bonus.casinowar>0 %}
            \t\t\t\t\t\t\t    {%   set war=bonus.casinowar %}
                                            <span class=\"war\">
                                                {% if bonus.casinowarb==1 %}
                                                    {% set war=war~'xb' %}
                                                {% endif %}
                                                {% if bonus.casinoward==1 %}
                                                    {% set war=war~'xd' %}
                                                {% endif %}
                                                {{ war }}
            \t\t\t\t\t\t\t    </span>
            \t\t\t\t\t\t\t{% endif %}
            \t\t\t\t\t\t\t{% if(bonus.wrCount > 0) %}
                \t\t\t\t\t\t\t<a class=\"morecasinowar\" status=\"closed\" onclick=\"return false;\">
                \t\t\t\t\t\t\t\t{% if(bonus.wrCount > 1) %}More{% else %}Info{% endif %}
                \t\t\t\t\t\t\t\t<div class=\"casinowar\">
                \t\t\t\t\t\t\t\t\t{% include 'Casino/bonus_wr_hover.html.twig' with {'bonus': bonus} %}
                \t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t</a>
                                        {% endif %}
                \t\t\t\t\t</li>
                \t\t\t\t\t<li>
                \t\t\t\t\t\t<span class=\"title\">Bonus Given</span>
                \t\t\t\t\t\t{% if bonus.bonusgiven==1  %}
                    \t\t\t\t\t\t{{ 'before' }}
                \t\t\t\t\t\t{% else %}
                    \t\t\t\t\t\t{{ 'after'  }}
                \t\t\t\t\t\t{% endif %}
                \t\t\t\t\t</li>
                \t\t\t\t</ul>
                \t\t\t\t    <a href=\"{{ path(\"visit_casino\",{id:casino.id}) }}\" rel=\"noopener nofollow\" class=\"btn btn-primary\" target=\"_blank\">CLAIM</a>
                \t\t    </div>
                        {% endfor %}
                    </div>
                {% endif %}
        \t</div>
        </div>
    {% endif %}

    <div class=\"main-review\">
    \t<!--MAIN REVIEW-->
    \t<a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-2\" aria-label=\"Scroll to review\">
    \t    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
    \t</a>
    \t<div class=\"container\">
    \t\t<h2 class=\"h1\">Playing at {{ casino.casinoname }}</h2>
    \t\t<div class=\"row\">
    \t\t\t<div class=\"main-review-content col-md-12\" id=\"button-link-2\">
    \t\t\t\t<div class=\"button-holder\">
    \t\t\t\t\t<a class=\"btn review-like btn-primary btn-shadow\" data-casino=\"{{ casino.id }}\" onclick=\"return false;\"  href=\"#\">
        \t\t\t\t\t<span class=\"icon\"></span>
    \t\t\t\t\t\t{% if(casino.likedbyuser) %}
    \t\t\t\t\t\t    LIKED
    \t\t\t\t\t\t{% else %}
    \t\t\t\t\t\t    LIKE THIS CASINO
    \t\t\t\t\t\t{% endif %}
    \t\t\t\t\t</a>
    \t\t\t\t\t<a class=\"btn review-comment btn-shadow scroll-to-link\" href=\"#button-link-3\">
        \t\t\t\t\t<span class=\"icon\"></span>
    \t\t\t\t\t\tCOMMENT CASINO
    \t\t\t\t\t</a>
    \t\t\t\t</div>
\t\t\t\t\t<div class=\"main-review-slideshow\">
\t\t\t\t\t\t{% set screen=0 %}
\t\t\t\t\t\t{% set big=\"\" %}
\t\t\t\t\t\t{% set thumb=\"\" %}
\t\t\t\t\t\t{% for screenshot in casino.screenshots %}
\t\t\t\t\t\t{% set screen=screen+1 %}
\t\t\t\t\t\t{% if(screen<=5) %}
\t\t\t\t\t\t{% set big=big~\"
\t\t\t\t\t\t<a href='\"~asset(screenshot.url)~\"' data-lightbox='roadtrip'><img src='\"~asset(screenshot.sliderimagesource)~\"' alt='\"~screenshot.filename~\"' aria-label='\"~screenshot.filename~\"'></a>
\t\t\t\t\t\t\" %}
\t\t\t\t\t\t{% set thumb=thumb~\"
\t\t\t\t\t\t<img src='\"~asset(screenshot.thumbimagesource)~\"' alt='\"~screenshot.filename~\"' >
\t\t\t\t\t\t\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<div class=\"slideshow-review\">
\t\t\t\t\t\t\t<div class=\"slider-big-img\">
\t\t\t\t\t\t\t\t{{ big|raw }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"slider-thumb-nav\">
\t\t\t\t\t\t\t\t{{ thumb|raw }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--/.slideshow-->
\t\t\t\t\t<div class=\"main-review-text show-more-height\">
    \t\t\t\t\t{% if(casino.reviewtext|length>0) %}
    \t\t\t\t\t    {{ reviewtext|raw }}
    \t\t\t\t\t{% else  %}
    \t\t\t\t\t    <p>{{ 'Review coming soon.' }}</p>
    \t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t{% if(casino.reviewtext|length>0) %}
                        <a href=\"#\" class=\"show-more d-block d-md-none\" data-controls=\"\" data-state=\"closed\">SHOW MORE</a>
                    {% endif %}
\t\t\t\t\t<div class=\"powered-by\">
\t\t\t\t\t    <span>Powered by:</span>
\t\t\t\t\t\t{% if not casino.dontShowFactualInformation %}
\t\t\t\t\t\t\t{% set image=0 %}
\t\t\t\t\t\t\t{% for software in softwares %}
\t\t\t\t\t\t\t\t{% if(software.availableInCountry==1) %}
\t\t\t\t\t\t\t\t\t{% set opacity=1 %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% set opacity=0.3 %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% set image=image+1 %}
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\" data-original=\"{{ asset(software.softwarelogo) }}\" alt=\"{{ software.title }}\" title=\"{{ software.title }}\" width=\"40\" height=\"24\" style=\"opacity:{{ opacity }};\">
\t\t\t\t\t\t\t\t{% if ((image%5)==0)%}
\t\t\t\t\t\t\t\t\t{{ '<br>' }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p>Please visit their website for more details.</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t\t<!--/.row-->
    \t\t<div class=\"row main-review-bottom\">
    \t\t\t<div class=\"col-md-4\">
    \t\t\t\t<h3>Banking</h3>
\t\t\t\t\t{% if not casino.dontShowFactualInformation %}
    \t\t\t\t<p>
    \t\t\t\t\t{{ casino.casinoname }} supports banking methods  for deposits and withdrawals for
    \t\t\t\t\t{% for banking in casino.bankingoptions %}
    \t\t\t\t\t<a href=\"{{ path('banking', { id: banking.banking.id, casinoname: banking.banking.slug }) }}\">{{ banking.banking.name }}</a>{% if not loop.last %}, {% endif %}
    \t\t\t\t\t{% endfor %}
    \t\t\t\t</p>
    \t\t\t\t{% for banking in casino.bankingoptions %}
    \t\t\t\t    <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"{{ asset(banking.banking.imagelocation) }}\" alt=\"{{ banking.banking.name }}\" width=\"40\" height=\"24\" />
    \t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t<p>Please visit their website for more details.</p>
\t\t\t\t\t{% endif %}
    \t\t\t</div>
    \t\t\t<div class=\"col-md-4\">
    \t\t\t\t<h3>Currencies</h3>
\t\t\t\t\t{% if not casino.dontShowFactualInformation %}
    \t\t\t\t<p>
    \t\t\t\t\t{{casino.casinoname }} accepts the following currencies:
    \t\t\t\t\t{% for currency in casino.currencies %}
    \t\t\t\t\t<a href=\"{{ path('currency', { id: currency.id, name: currency.slug }) }}\">{{ currency.name }}</a>{% if not loop.last %}, {% endif %}
    \t\t\t\t\t{% endfor %}
    \t\t\t\t</p>
\t\t\t\t\t{% for currency in casino.currencies %}
\t\t\t\t\t    <img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"{{ asset(currency.imagelocation) }}\" alt=\"{{ casino.casinoname ~ \" accepts \" ~currency.name }}\" title=\"{{ casino.casinoname ~\" accepts \"~currency.name }}\" width=\"16\" height=\"11\" />
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>Please visit their website for more details.</p>
\t\t\t\t\t{% endif %}
    \t\t\t</div>
    \t\t\t<div class=\"col-md-4\">
    \t\t\t\t<h3>Languages</h3>
\t\t\t\t\t{% if not casino.dontShowFactualInformation %}
    \t\t\t\t<p>
    \t\t\t\t\t{{ casino.casinoname }} supports the following languages:
    \t\t\t\t\t{%for language in casino.languages  %}
    \t\t\t\t\t<a href=\"{{ path('language', { id: language.id, name: language.slug }) }}\">{{ language.name }}</a>{% if not loop.last %}, {% endif %}
    \t\t\t\t\t{% endfor %}
    \t\t\t\t</p>
\t\t\t\t\t{%for language in casino.languages  %}
    \t\t\t\t\t<img class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"{{ asset(language.imagelocation) }}\"  alt=\"{{ language.name }}\"  width=\"16\" height=\"11\" />
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>Please visit their website for more details.</p>
\t\t\t\t\t{% endif %}
    \t\t\t</div>
    \t\t</div>
    \t\t<!--END MAIN REVIEW-->
    \t</div>
    \t<!--/.wrap-->
    </div>
    <!--/#main review-->

\t<div class=\"main-review-comments\">
\t\t<a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-3\" aria-label=\"Scroll to feedback\">
\t\t    <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<div class=\"container\">
    \t\t<div class=\"text-center\">
    \t\t\t<h2 class=\"h1\" id=\"button-link-3\">Real Players Feedback</h2>
    \t\t\t{% if (casino.posts|length > 0) %}
    \t\t\t<p class=\"review-comments-no\"><span class=\"icon\"></span>{{ (casino.posts)|length }} {% if casino.posts|length ==1 %}Comment{% else %}Comments{% endif %}</p>
    \t\t</div>
\t\t\t{% endif %}
\t\t\t<section class=\"box-comments review-comments\">
\t\t\t\t{{ likesandcomments|raw }}
\t\t\t</section>
\t\t\t{%  if not is_granted('IS_AUTHENTICATED_FULLY')  %}
\t\t\t    {% set modal = '#registerModal' %}
\t\t\t{% else %}
\t\t\t    {% set modal = '#post-form-modal'%}
            {% endif %}

\t\t\t{% if totalnumber > 10 %}
    \t\t\t<div class=\"list-data-buttons text-center mb-0\">
    \t\t\t\t<a href=\"#\" class=\"btn btn-orange-outline\" id=\"more_activities_cas\" data-first=\"10\" data-casinoid=\"{{ casino.id }}\" data-total=\"{{ totalnumber }}\" onclick=\"return false;\">
    \t\t\t\t\tMore Activities
    \t\t\t\t</a>
    \t\t\t\t<a href=\"#\" class=\"btn btn-orange-outline\" id=\"all_activities_cas\" data-first=\"10\" onclick=\"return false;\">
    \t\t\t\t\tAll Activities
    \t\t\t\t</a>
    \t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t<a href=\"#\" id=\"post_a_comment\" data-toggle=\"modal\" data-target=\"{{ modal }}\"  class=\"btn btn-orange-outline\" onclick=\"return false;\">Post a comment</a>
\t\t\t</div>
\t\t</div>
\t\t<!--/.wrap-->
\t</div>
\t<!--/.comments-->
    <!--/#content-->
    <div class=\"modal\" id=\"post-form-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    \t<div class=\"modal-dialog\" role=\"document\">
    \t\t<div class=\"tclose\" data-dismiss=\"modal\"></div>
    \t\t<div class='modal-dialog-inner'>
    \t\t\t<form class='post-comment-form' action='' method='post' onsubmit='return false;'>
    \t\t\t\t<h3>Post comment to {{ casino.casinoname }}
    \t\t\t\t\t<a href=''>Post</a>
    \t\t\t\t</h3>
    \t\t\t\t<div class=\"form-group\">
        \t\t\t\t<textarea aria-label='Comment' placeholder='Comment' name='post_comment' rows='' cols='' id='postcontent' required ></textarea>
        \t\t\t\t<div class=\"post-form-error form-error\">Comment can't be blank</div>
    \t\t\t\t</div>
    \t\t\t\t<input type='submit' value='Post Comment' casinoid='{{ casino.id }}' id='postbutton' class=\"btn btn-primary btn-shadow\" />
    \t\t\t</form>
    \t\t</div>
    \t</div>
    </div>
    <!-- END NEW -->
{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\">
    \tvar _sf_startpt=(new Date()).getTime()
    </script>
     <script type=\"application/ld+json\">
    {
      \"@context\": \"http://schema.org/\",
      \"@type\": \"Review\",
      \"itemReviewed\": {
        \"@type\": \"Organization\",
        \"name\": \"{{ casino.casinoname }}\",
        \"description\": \"{{ meta.description|default('No Deposit Casino') }}\",
        \"image\": \"{{ absolute_url(asset(casino.logo105)) }}\"
      },
      \"author\": {
        \"@type\": \"Organization\",
        \"name\": \"No Deposit Casino\",
        \"url\": \"https://nodepositcasino.org/\",
        \"logo\": \"https://nodepositcasino.org/img/logo.png\"
      },
      \"reviewRating\": {
        \"@type\": \"Rating\",
        \"ratingValue\": \"{{ casino.averagerating }}\",
        \"bestRating\": \"5\",
        \"worstRating\": \"0\"
      }
    }
    </script>
{% endblock %}

{% block mainSchemaParameters %}
    <script type=\"application/ld+json\">
    {
        \"@context\": \"http://schema.org\",
        \"@type\": \"WebPage\",
        \"name\": \"{{ meta.title|default('No Deposit Casino') }}\",
        \"description\": \"{{ meta.description|default('No Deposit Casino') }}\",
        \"publisher\": {
            \"@type\": \"Organization\",
            \"name\": \"No Deposit Casino\"
        }
    }
    </script>
{% endblock %}", "Casino/review.html.twig", "/var/www/ndc_new/templates/Casino/review.html.twig");
    }
}
