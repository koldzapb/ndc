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

/* section_interest.html.twig */
class __TwigTemplate_a6cf9729bba4a8ea512009eb4c4d1f05a4c63990de66dabeaced38dde3bff6e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "section_interest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "section_interest.html.twig"));

        // line 1
        echo "<div class=\"section-interest\">
    <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-5\" aria-label=\"Scroll to Interested articles\">
        <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
    </a>
    <div class=\"container\">
        <h2 class=\"text-center\"><span id=\"button-link-5\"></span>You May Be Interested In</h3>
        <div class=\"articles-holder\">
            <div class=\"row justify-content-center\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "                    <div class=\"article-box col-lg-4 col-md-6\">
                        <div class=\"article-box-inner\">
                            <div class=\"article-box-image\">
                                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">
                                    <img class=\"lazyload\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-360.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image360", [], "any", false, false, false, 14), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "heading", [], "any", false, false, false, 14), "html", null, true);
            echo "\" width=\"360\" height=\"200\"/>
                                </a>
                            </div>
                            <div class=\"article-box-content\">
                                <h3>
                                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "heading", [], "any", false, false, false, 19), "html", null, true);
            echo "</a>
                                </h3>
                                <p class=\"article-box-date\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "gmdate", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                                <p class=\"article-box-descr\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["article"], "introtext", [], "any", false, false, false, 22);
            echo "</p>
                                <div class=\"d-flex justify-content-between\">
                                    <a class=\"read-more\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">Read more</a>
                                    <span class=\"views-no\"><span class=\"icon\"></span>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "totalviews", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "section_interest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  98 => 25,  94 => 24,  89 => 22,  85 => 21,  78 => 19,  66 => 14,  62 => 13,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-interest\">
    <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-5\" aria-label=\"Scroll to Interested articles\">
        <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
    </a>
    <div class=\"container\">
        <h2 class=\"text-center\"><span id=\"button-link-5\"></span>You May Be Interested In</h3>
        <div class=\"articles-holder\">
            <div class=\"row justify-content-center\">
                {% for article in articles  %}
                    <div class=\"article-box col-lg-4 col-md-6\">
                        <div class=\"article-box-inner\">
                            <div class=\"article-box-image\">
                                <a href=\"{{ path('article', { slug: article.slug }) }}\">
                                    <img class=\"lazyload\" src=\"{{asset(('img/lazy-360.png'))}}\" data-original=\"{{ article.image360 }}\" alt=\"{{ article.heading }}\" width=\"360\" height=\"200\"/>
                                </a>
                            </div>
                            <div class=\"article-box-content\">
                                <h3>
                                    <a href=\"{{ path('article', { slug: article.slug }) }}\">{{ article.heading }}</a>
                                </h3>
                                <p class=\"article-box-date\">{{ article.gmdate }}</p>
                                <p class=\"article-box-descr\">{{ article.introtext|raw }}</p>
                                <div class=\"d-flex justify-content-between\">
                                    <a class=\"read-more\" href=\"{{ path('article', { slug: article.slug }) }}\">Read more</a>
                                    <span class=\"views-no\"><span class=\"icon\"></span>{{ article.totalviews }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "section_interest.html.twig", "/var/www/ndc_new/templates/section_interest.html.twig");
    }
}
