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

/* Articles/more_news.html.twig */
class __TwigTemplate_7d6beb5abb3a9c3338d6b2897d63dc586c46f8aa9d4e9ed6d210396e20286a05 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/more_news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Articles/more_news.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["singlenews"]) {
            // line 2
            echo "    <div itemscope itemtype=\"http://schema.org/NewsArticle\" class=\"article-box col-lg-6\">
        <meta  itemprop=\"image\" content=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl(twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 3)), "html", null, true);
            echo "\" />
        <meta  itemprop=\"mainEntityOfPage\" content=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 4)])), "html", null, true);
            echo "\" />
        <meta  itemprop=\"url\" content=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 5)])), "html", null, true);
            echo "\" />
        <meta itemprop=\"datePublished\" content=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "timeadded", [], "any", false, false, false, 6), "Y-m-d"), "html", null, true);
            echo "\" />
        <meta itemprop=\"dateModified\" content=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "lastmodified", [], "any", false, false, false, 7), "Y-m-d"), "html", null, true);
            echo "\" />

        <div class=\"article-box-inner\">
            <div class=\"article-box-image\">
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">
                    <img class=\"lazyload\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-360.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 12), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 12), "html", null, true);
            echo "\" width=\"360\" height=\"220\">
                </a>
            </div>
            <div class=\"article-box-content\">
                <h3>
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\"><span itemprop=\"headline\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 17), "html", null, true);
            echo "</span></a>
                </h3>
                <p class=\"article-box-date\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "gmdate", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 20)) {
                // line 21
                echo "                    <p class=\"article-box-author\">author: <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 21), "slug", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\"><meta itemprop=\"author\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 21), "authorname", [], "any", false, false, false, 21), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 21), "authorname", [], "any", false, false, false, 21), "html", null, true);
                echo "</a></p>
                ";
            }
            // line 23
            echo "                <p class=\"article-box-descr\">";
            echo twig_get_attribute($this->env, $this->source, $context["singlenews"], "introtext", [], "any", false, false, false, 23);
            echo "</p>
                <div class=\"d-flex justify-content-between\">
                    <a class=\"read-more\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">Read more</a>
                </div>
            </div>
        </div>
        <div class=\"d-none\" itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\" >
            <div class=\"d-none\" itemprop=\"logo\" itemscope itemtype=\"https://schema.org/ImageObject\">
                <img src=\"https://nodepositcasino.org/img/logo.png\"/>
                <meta itemprop=\"url\" content=\"https://nodepositcasino.org/img/logo.png\">
                <meta itemprop=\"width\" content=\"400\">
                <meta itemprop=\"height\" content=\"60\">
            </div>
            <meta itemprop=\"name\" content=\"No Deposit Casino\">
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singlenews'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Articles/more_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  112 => 23,  102 => 21,  100 => 20,  96 => 19,  89 => 17,  77 => 12,  73 => 11,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for singlenews in news  %}
    <div itemscope itemtype=\"http://schema.org/NewsArticle\" class=\"article-box col-lg-6\">
        <meta  itemprop=\"image\" content=\"{{ absolute_url(singlenews.image360) }}\" />
        <meta  itemprop=\"mainEntityOfPage\" content=\"{{ absolute_url(path('singlenews',{slug:singlenews.slug})) }}\" />
        <meta  itemprop=\"url\" content=\"{{ absolute_url(path('singlenews',{slug:singlenews.slug})) }}\" />
        <meta itemprop=\"datePublished\" content=\"{{ singlenews.timeadded|date('Y-m-d') }}\" />
        <meta itemprop=\"dateModified\" content=\"{{ singlenews.lastmodified|date('Y-m-d') }}\" />

        <div class=\"article-box-inner\">
            <div class=\"article-box-image\">
                <a href=\"{{ path('singlenews',{slug:singlenews.slug}) }}\">
                    <img class=\"lazyload\" src=\"{{asset(('img/lazy-360.png'))}}\" data-original=\"{{ singlenews.image360 }}\" alt=\"{{ singlenews.heading }}\" width=\"360\" height=\"220\">
                </a>
            </div>
            <div class=\"article-box-content\">
                <h3>
                    <a href=\"{{ path('singlenews', { slug: singlenews.slug }) }}\"><span itemprop=\"headline\">{{ singlenews.heading }}</span></a>
                </h3>
                <p class=\"article-box-date\">{{ singlenews.gmdate }}</p>
                {% if singlenews.author %}
                    <p class=\"article-box-author\">author: <a href=\"{{ path('author',{\"slug\":singlenews.author.slug}) }}\"><meta itemprop=\"author\" content=\"{{ singlenews.author.authorname }}\">{{ singlenews.author.authorname }}</a></p>
                {% endif %}
                <p class=\"article-box-descr\">{{ singlenews.introtext|raw }}</p>
                <div class=\"d-flex justify-content-between\">
                    <a class=\"read-more\" href=\"{{ path('singlenews', { slug: singlenews.slug }) }}\">Read more</a>
                </div>
            </div>
        </div>
        <div class=\"d-none\" itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\" >
            <div class=\"d-none\" itemprop=\"logo\" itemscope itemtype=\"https://schema.org/ImageObject\">
                <img src=\"https://nodepositcasino.org/img/logo.png\"/>
                <meta itemprop=\"url\" content=\"https://nodepositcasino.org/img/logo.png\">
                <meta itemprop=\"width\" content=\"400\">
                <meta itemprop=\"height\" content=\"60\">
            </div>
            <meta itemprop=\"name\" content=\"No Deposit Casino\">
        </div>
    </div>
{% endfor %}", "Articles/more_news.html.twig", "/var/www/ndc_new/templates/Articles/more_news.html.twig");
    }
}
