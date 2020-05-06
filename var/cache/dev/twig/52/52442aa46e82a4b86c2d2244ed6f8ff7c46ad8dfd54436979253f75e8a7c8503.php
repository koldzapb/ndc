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

/* Articles/singlenews.html.twig */
class __TwigTemplate_b07e7a8a141b530f746f10cf7dc008d471f3e35724c137f481e91ebdf717fae2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/singlenews.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/singlenews.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Articles/singlenews.html.twig", 1);
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
        // line 10
        if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "fullimagelink", [], "any", false, false, false, 10) != null)) {
            // line 11
            echo "            <div class=\"cover-image-holder\" style=\"background: url(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 11, $this->source); })()), "coverimagelocation", [], "any", false, false, false, 11), "html", null, true);
            echo ") no-repeat top center;\"></div>
        ";
        }
        // line 13
        echo "    ";
        
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
        echo "        <div class=\"container article-text-holder\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-lg-0 mb-4\">
                    ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "maintextwithimage", [], "any", false, false, false, 19);
        echo "
                    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })()), "author", [], "any", false, false, false, 20)) {
            // line 21
            echo "                        <a class=\"news-author\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()), "author", [], "any", false, false, false, 21), "slug", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">Author: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()), "author", [], "any", false, false, false, 21), "authorname", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
                    ";
        }
        // line 23
        echo "                </div>
                <div class=\"articles-sidebar col-lg-4\">
                    <div class=\"latest-news-header\">
                        <h3><span class=\"icon\"></span>Latest news</h3>
                        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">View all news</a>
                    </div>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestNews"]) || array_key_exists("latestNews", $context) ? $context["latestNews"] : (function () { throw new RuntimeError('Variable "latestNews" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["singlenews"]) {
            // line 30
            echo "                        <div class=\"article-box\">
                            <div class=\"article-box-inner\">
                                <div class=\"article-box-image\">
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                                        <img class=\"lazyload\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-360.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 34), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 34), "html", null, true);
            echo " \" width=\"360\" height=\"220\">
                                    </a>
                                </div>
                                <div class=\"article-box-content\">
                                    <h3>
                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 39), "html", null, true);
            echo "</a>
                                    </h3>
                                    <p class=\"article-box-date\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "gmdate", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                                    <a class=\"read-more\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Read more</a>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singlenews'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "        <script type=\"application/ld+json\">
        {
          \"@context\": \"http://schema.org\",
          \"@type\": \"NewsArticle\",
          \"author\": \"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 58, $this->source); })()), "author", [], "any", false, false, false, 58), "authorname", [], "any", false, false, false, 58), "html", null, true);
        echo "\",
          \"headline\": \"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 59, $this->source); })()), "heading", [], "any", false, false, false, 59), "html", null, true);
        echo "\",
          \"image\": \"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 60, $this->source); })()), "imagelocation", [], "any", false, false, false, 60)), "html", null, true);
        echo "\",
          \"datePublished\": \"";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 61, $this->source); })()), "timeadded", [], "any", false, false, false, 61), "Y-m-d"), "html", null, true);
        echo "\",
          \"dateModified\": \"";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 62, $this->source); })()), "lastmodified", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true);
        echo "\",
          \"mainEntityOfPage\": \"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "uri", [], "any", false, false, false, 63), "html", null, true);
        echo "\",
          \"url\": \"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "uri", [], "any", false, false, false, 64), "html", null, true);
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
        return "Articles/singlenews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 64,  236 => 63,  232 => 62,  228 => 61,  224 => 60,  220 => 59,  216 => 58,  210 => 54,  200 => 53,  186 => 47,  175 => 42,  171 => 41,  164 => 39,  152 => 34,  148 => 33,  143 => 30,  139 => 29,  134 => 27,  128 => 23,  120 => 21,  118 => 20,  114 => 19,  109 => 16,  99 => 15,  89 => 13,  83 => 11,  81 => 10,  75 => 7,  70 => 4,  60 => 3,  37 => 1,);
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
        {% if page.fullimagelink != null %}
            <div class=\"cover-image-holder\" style=\"background: url({{ page.coverimagelocation }}) no-repeat top center;\"></div>
        {% endif %}
    {% endblock %}

    {% block main %}
        <div class=\"container article-text-holder\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-lg-0 mb-4\">
                    {{ page.maintextwithimage|raw }}
                    {% if page.author %}
                        <a class=\"news-author\" href=\"{{ path('author',{\"slug\":page.author.slug}) }}\">Author: {{ page.author.authorname }}</a>
                    {% endif %}
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
                                        <img class=\"lazyload\" src=\"{{asset(('img/lazy-360.png'))}}\" data-original=\"{{ singlenews.image360 }}\" alt=\"{{ singlenews.heading }} \" width=\"360\" height=\"220\">
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

    {% block javascripts %}
        <script type=\"application/ld+json\">
        {
          \"@context\": \"http://schema.org\",
          \"@type\": \"NewsArticle\",
          \"author\": \"{{ page.author.authorname }}\",
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
", "Articles/singlenews.html.twig", "/var/www/ndc_new/templates/Articles/singlenews.html.twig");
    }
}
