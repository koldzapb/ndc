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

/* Authors/author.html.twig */
class __TwigTemplate_feb8429ffb6e8610b9a73333d92ac62c222f2b741912293383c6a2edd2de6f1e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Authors/author.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Authors/author.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Authors/author.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 3, $this->source); })()), "authorname", [], "any", false, false, false, 3), "html", null, true);
        echo " - NDC Author profile page";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        echo "Information about ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 4, $this->source); })()), "authorname", [], "any", false, false, false, 4), "html", null, true);
        echo " - NDC Author";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 5, $this->source); })()), "authorname", [], "any", false, false, false, 5), "html", null, true);
        echo " - NDC Author profile page";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_ogdescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogdescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogdescription"));

        echo "Information about ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 6, $this->source); })()), "authorname", [], "any", false, false, false, 6), "html", null, true);
        echo " - NDC Author";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_metakeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metakeywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metakeywords"));

        echo "authors";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_bodyheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        // line 11
        echo "        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\"></div><!--/.ad-line-->
                <h1 class=\"page-title\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 14, $this->source); })()), "authorname", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "        <div class=\"container article-text-holder\">
            <div class=\"row\">
                <div class=\"articles-holder col-md-8\">
                    <div class=\"author-bio mb-4\">
                        ";
        // line 24
        echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 24, $this->source); })()), "bio", [], "any", false, false, false, 24);
        echo "
                    </div>
                    <div class=\"row\" id=\"news_holder_ajax\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 27, $this->source); })()), "news", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["singlenews"]) {
            // line 28
            echo "                            <div class=\"article-box col-lg-6\">
                                <div class=\"article-box-inner\">
                                    <div class=\"article-box-image\">
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">
                                            <img class=\"lazyload\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-360.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 32), "html", null, true);
            echo "\" width=\"360\" height=\"220\">
                                        </a>
                                    </div>
                                    <div class=\"article-box-content\">
                                        <h3>
                                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 37), "html", null, true);
            echo "</a>
                                        </h3>
                                        <p class=\"article-box-date\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "gmdate", [], "any", false, false, false, 39), "html", null, true);
            echo "</a>
                                        <p class=\"article-box-author\">author: ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 40, $this->source); })()), "authorname", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                                        <p class=\"article-box-descr\">";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["singlenews"], "introtext", [], "any", false, false, false, 41);
            echo "</p>
                                        <div class=\"d-flex justify-content-between\">
                                            <a class=\"read-more\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singlenews'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </div>
                </div>
                <div class=\"articles-sidebar col-lg-4\">
                    <div class=\"latest-news-header\">
                        <h3><span class=\"icon\"></span>Latest news</h3>
                        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">View all news</a>
                    </div>
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestNews"]) || array_key_exists("latestNews", $context) ? $context["latestNews"] : (function () { throw new RuntimeError('Variable "latestNews" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["singlenews"]) {
            // line 57
            echo "                        <div class=\"article-box\">
                            <div class=\"article-box-inner\">
                                <div class=\"article-box-image\">
                                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">
                                        <img class=\"lazyload\" src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-360.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 61), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 61), "html", null, true);
            echo " \" width=\"360\" height=\"220\">
                                    </a>
                                </div>
                                <div class=\"article-box-content\">
                                    <h3>
                                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 66), "html", null, true);
            echo "</a>
                                    </h3>
                                    <p class=\"article-box-date\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "gmdate", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
                                    <a class=\"read-more\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">Read more</a>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singlenews'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_mainSchemaParameters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainSchemaParameters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainSchemaParameters"));

        // line 81
        echo "    <script type=\"application/ld+json\">
    {
        \"@context\": \"http://schema.org\",
        \"@type\": \"WebPage\",
        \"name\": \"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 85, $this->source); })()), "authorname", [], "any", false, false, false, 85), "html", null, true);
        echo " - NDC Author profile page\",
        \"description\": \"Information about ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 86, $this->source); })()), "authorname", [], "any", false, false, false, 86), "html", null, true);
        echo " - NDC Author\",
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
        return "Authors/author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 86,  363 => 85,  357 => 81,  347 => 80,  333 => 74,  322 => 69,  318 => 68,  311 => 66,  299 => 61,  295 => 60,  290 => 57,  286 => 56,  281 => 54,  274 => 49,  262 => 43,  257 => 41,  253 => 40,  249 => 39,  242 => 37,  230 => 32,  226 => 31,  221 => 28,  217 => 27,  211 => 24,  205 => 20,  195 => 19,  181 => 14,  176 => 11,  166 => 10,  147 => 7,  126 => 6,  106 => 5,  85 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ author.authorname }} - NDC Author profile page{% endblock %}
{% block metaDescription %}Information about {{ author.authorname }} - NDC Author{% endblock %}
{% block ogtitle %}{{ author.authorname }} - NDC Author profile page{% endblock %}
{% block ogdescription %}Information about {{ author.authorname }} - NDC Author{% endblock %}
{% block metakeywords %}authors{% endblock %}


    {% block bodyheader %}
        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\"></div><!--/.ad-line-->
                <h1 class=\"page-title\">{{ author.authorname }}</h1>
            </div><!--/.wrap-->
        </div><!--/#content-header-->
    {% endblock %}

    {% block main %}
        <div class=\"container article-text-holder\">
            <div class=\"row\">
                <div class=\"articles-holder col-md-8\">
                    <div class=\"author-bio mb-4\">
                        {{ author.bio|raw }}
                    </div>
                    <div class=\"row\" id=\"news_holder_ajax\">
                        {% for singlenews in author.news  %}
                            <div class=\"article-box col-lg-6\">
                                <div class=\"article-box-inner\">
                                    <div class=\"article-box-image\">
                                        <a href=\"{{ path('singlenews',{slug:singlenews.slug}) }}\">
                                            <img class=\"lazyload\" src=\"{{asset(('img/lazy-360.png'))}}\" data-original=\"{{ singlenews.image360 }}\" alt=\"{{ singlenews.heading }}\" width=\"360\" height=\"220\">
                                        </a>
                                    </div>
                                    <div class=\"article-box-content\">
                                        <h3>
                                            <a href=\"{{ path('singlenews', { slug: singlenews.slug }) }}\">{{ singlenews.heading }}</a>
                                        </h3>
                                        <p class=\"article-box-date\">{{ singlenews.gmdate }}</a>
                                        <p class=\"article-box-author\">author: {{ author.authorname }}</p>
                                        <p class=\"article-box-descr\">{{ singlenews.introtext|raw }}</p>
                                        <div class=\"d-flex justify-content-between\">
                                            <a class=\"read-more\" href=\"{{ path('singlenews', { slug: singlenews.slug }) }}\">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"articles-sidebar col-lg-4\">
                    <div class=\"latest-news-header\">
                        <h3><span class=\"icon\"></span>Latest news</h3>
                        <a href=\"{{ path('news') }}\">View all news</a>
                    </div>
                    {% for singlenews in latestNews  %}
                        <div class=\"article-box\">
                            <div class=\"article-box-inner\">
                                <div class=\"article-box-image\">
                                    <a href=\"{{ path('singlenews',{slug:singlenews.slug}) }}\">
                                        <img class=\"lazyload\" src=\"{{asset(('img/lazy-360.png'))}}\" data-original=\"{{  singlenews.image360 }}\" alt=\"{{ singlenews.heading }} \" width=\"360\" height=\"220\">
                                    </a>
                                </div>
                                <div class=\"article-box-content\">
                                    <h3>
                                        <a href=\"{{ path('singlenews',{slug:singlenews.slug}) }}\">{{ singlenews.heading }}</a>
                                    </h3>
                                    <p class=\"article-box-date\">{{ singlenews.gmdate }}</p>
                                    <a class=\"read-more\" href=\"{{ path('singlenews',{'slug':singlenews.slug}) }}\">Read more</a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
    {% endblock %}

{% block mainSchemaParameters %}
    <script type=\"application/ld+json\">
    {
        \"@context\": \"http://schema.org\",
        \"@type\": \"WebPage\",
        \"name\": \"{{ author.authorname }} - NDC Author profile page\",
        \"description\": \"Information about {{ author.authorname }} - NDC Author\",
        \"publisher\": {
            \"@type\": \"Organization\",
            \"name\": \"No Deposit Casino\"
        }
    }
    </script>
{% endblock %}
", "Authors/author.html.twig", "/var/www/ndc_new/templates/Authors/author.html.twig");
    }
}
