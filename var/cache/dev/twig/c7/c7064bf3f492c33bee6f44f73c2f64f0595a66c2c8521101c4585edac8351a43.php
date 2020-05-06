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

/* sitemap.xml.twig */
class __TwigTemplate_47c24634b5106f31a56d41f3dc80302779d9ad07c72db7ef74da8c6182d82820 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mainPages"]) || array_key_exists("mainPages", $context) ? $context["mainPages"] : (function () { throw new RuntimeError('Variable "mainPages" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "        <url>
            <loc>";
            // line 5
            echo twig_escape_filter($this->env, ((isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 5, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 5)), "html", null, true);
            echo "</loc>
            ";
            // line 6
            if (((twig_get_attribute($this->env, $this->source, $context["page"], "code", [], "any", false, false, false, 6) == "Index") || (twig_get_attribute($this->env, $this->source, $context["page"], "code", [], "any", false, false, false, 6) == "News"))) {
                // line 7
                echo "                <priority>1.0</priority>
                <changefreq>daily</changefreq>
                ";
            } else {
                // line 10
                echo "                    <priority>0.9</priority>
                    <changefreq>weekly</changefreq>
            ";
            }
            // line 13
            echo "            <lastmod>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "lastmodified", [], "any", false, false, false, 13), "Y-m-d"), "html", null, true);
            echo "</lastmod>
        </url>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 18
            echo "        <url>
            <loc>";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "</loc>
            <lastmod>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "lastmodified", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true);
            echo "</lastmod>
            <priority>0.6</priority>
            <changefreq>monthly</changefreq>
        </url>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 28
            echo "        <url>
            <loc>";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["n"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
            echo "</loc>
            <lastmod>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "lastmodified", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
            echo "</lastmod>
            <priority>0.9</priority>
            <changefreq>daily</changefreq>
        </url>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "

    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["casinos"]) || array_key_exists("casinos", $context) ? $context["casinos"] : (function () { throw new RuntimeError('Variable "casinos" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["casino"]) {
            // line 38
            echo "        <url>
            <loc>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("casino-review", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 39), "casinoname" => twig_get_attribute($this->env, $this->source, $context["casino"], "slug", [], "any", false, false, false, 39)]), "html", null, true);
            echo "</loc>
            <lastmod>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "lastmodified", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true);
            echo "</lastmod>
            <priority>0.9</priority>
            <changefreq>daily</changefreq>
        </url>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "



</urlset>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 45,  146 => 40,  142 => 39,  139 => 38,  135 => 37,  131 => 35,  120 => 30,  116 => 29,  113 => 28,  109 => 27,  105 => 25,  94 => 20,  90 => 19,  87 => 18,  83 => 17,  80 => 16,  70 => 13,  65 => 10,  60 => 7,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    {% for page in mainPages %}
        <url>
            <loc>{{ host~page.url }}</loc>
            {% if(page.code=='Index' or page.code=='News') %}
                <priority>1.0</priority>
                <changefreq>daily</changefreq>
                {% else %}
                    <priority>0.9</priority>
                    <changefreq>weekly</changefreq>
            {% endif %}
            <lastmod>{{ page.lastmodified | date('Y-m-d') }}</lastmod>
        </url>
    {% endfor %}

    {% for article in articles %}
        <url>
            <loc>{{ url('article', { slug: article.slug }) }}</loc>
            <lastmod>{{ article.lastmodified | date('Y-m-d') }}</lastmod>
            <priority>0.6</priority>
            <changefreq>monthly</changefreq>
        </url>
    {% endfor %}


    {% for n in news %}
        <url>
            <loc>{{ url('singlenews', { slug: n.slug }) }}</loc>
            <lastmod>{{ n.lastmodified | date('Y-m-d') }}</lastmod>
            <priority>0.9</priority>
            <changefreq>daily</changefreq>
        </url>
    {% endfor %}


    {% for casino in casinos %}
        <url>
            <loc>{{ url('casino-review', { id: casino.id, casinoname: casino.slug}) }}</loc>
            <lastmod>{{ casino.lastmodified|date('Y-m-d') }}</lastmod>
            <priority>0.9</priority>
            <changefreq>daily</changefreq>
        </url>
    {% endfor %}




</urlset>

", "sitemap.xml.twig", "/var/www/ndc_new/templates/sitemap.xml.twig");
    }
}
