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

/* latest_news_articles_index.html.twig */
class __TwigTemplate_933b996d1e6c527124030971cc139c4949f137022f59400ecbddd01dd2ce5f5b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "latest_news_articles_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "latest_news_articles_index.html.twig"));

        // line 1
        echo "<div class=\"latest-news-section\">
    <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-4\" aria-label=\"Scroll to Latest news\">
        <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
    </a>
    <div class=\"articles-holder container\" id=\"button-link-4\">
        <div class=\"latest-news-header\">
            <h2>Latest News</h2>
            <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">View all news</a>
        </div>
        <div class=\"row\">
            ";
        // line 11
        $context["counter"] = 0;
        // line 12
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["singlenews"]) {
            // line 13
            echo "                ";
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 13, $this->source); })()) + 1);
            // line 14
            echo "                <div itemscope itemtype=\"http://schema.org/NewsArticle\" class=\"article-box col-lg-4 col-sm-6 col-12 ";
            if (((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 14, $this->source); })()) == 3)) {
                echo " ";
                echo "d-none d-lg-block";
                echo " ";
            }
            echo " \">
                    <meta  itemprop=\"image\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl(twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 15)), "html", null, true);
            echo "\" />
                    <meta  itemprop=\"mainEntityOfPage\" content=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 16)])), "html", null, true);
            echo "\" />
                    <meta  itemprop=\"url\" content=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 17)])), "html", null, true);
            echo "\" />
                    <meta itemprop=\"datePublished\" content=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "timeadded", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true);
            echo "\" />
                    <meta itemprop=\"dateModified\" content=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "lastmodified", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true);
            echo "\" />
                    <div class=\"article-box-inner\">
                        <div class=\"article-box-image\">
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">
                                <img class=\"lazyload\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-360.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "image360", [], "any", false, false, false, 23), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 23), "html", null, true);
            echo " \" width=\"360\" height=\"220\">
                            </a>
                        </div>
                        <div class=\"article-box-content\">
                            <h3>
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singlenews", ["slug" => twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"><span itemprop=\"headline\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "heading", [], "any", false, false, false, 28), "html", null, true);
            echo "</span></a>
                            </h3>
                            <p class=\"article-box-date\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "gmdate", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                            ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 31)) {
                // line 32
                echo "                                <p class=\"article-box-author\">author: <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 32), "slug", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\"><span itemprop=\"author\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singlenews"], "author", [], "any", false, false, false, 32), "authorname", [], "any", false, false, false, 32), "html", null, true);
                echo "</span></a></p>
                            ";
            }
            // line 34
            echo "                            <p class=\"article-box-descr\">";
            echo twig_get_attribute($this->env, $this->source, $context["singlenews"], "introtext", [], "any", false, false, false, 34);
            echo "</p>
                            <a class=\"read-more\" href=\"/news/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singlenews"], "slug", [], "any", false, false, false, 35), "html", null, true);
            echo "\">Read more</a>
                        </div>
                    </div>
                    <div class=\"d-none\" itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\" >
                        <div class=\"d-none\" itemprop=\"logo\" itemscope itemtype=\"https://schema.org/ImageObject\">
                            <img src=\"https://nodepositcasino.org/img/logo.svg\"/>
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
        // line 49
        echo "        </div>
    </div>

    <div class=\"articles-holder container\" id=\"button-link-4\">
        <div class=\"latest-news-header\">
            <h2>Latest Articles</h2>
            <a class=\"btn btn-primary\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\">View all Articles</a>
        </div>
        <div class=\"row\">
            ";
        // line 58
        $context["counter"] = 0;
        // line 59
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 60
            echo "                ";
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 60, $this->source); })()) + 1);
            // line 61
            echo "                <div itemscope itemtype=\"http://schema.org/NewsArticle\" class=\"article-box col-lg-4 col-sm-6 col-12 ";
            if (((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 61, $this->source); })()) == 3)) {
                echo " ";
                echo "d-none d-lg-block";
                echo " ";
            }
            echo " \">
                    <meta  itemprop=\"image\" content=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl(twig_get_attribute($this->env, $this->source, $context["article"], "image360", [], "any", false, false, false, 62)), "html", null, true);
            echo "\" />
                    <meta  itemprop=\"mainEntityOfPage\" content=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 63)])), "html", null, true);
            echo "\" />
                    <meta  itemprop=\"url\" content=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 64)])), "html", null, true);
            echo "\" />
                    <meta itemprop=\"datePublished\" content=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "timeadded", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true);
            echo "\" />
                    <meta itemprop=\"dateModified\" content=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "lastmodified", [], "any", false, false, false, 66), "Y-m-d"), "html", null, true);
            echo "\" />
                    <div class=\"article-box-inner\">
                        <div class=\"article-box-image\">
                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">
                                <img class=\"lazyload\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-360.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image360", [], "any", false, false, false, 70), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "heading", [], "any", false, false, false, 70), "html", null, true);
            echo " \" width=\"360\" height=\"220\">
                            </a>
                        </div>
                        <div class=\"article-box-content\">
                            <h3>
                                <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\"><span itemprop=\"headline\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "heading", [], "any", false, false, false, 75), "html", null, true);
            echo "</span></a>
                            </h3>
                            <p class=\"article-box-date\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "gmdate", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>

                            <p class=\"article-box-descr\">";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["article"], "introtext", [], "any", false, false, false, 79);
            echo "</p>
                            <a class=\"read-more\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">Read more</a>
                        </div>
                    </div>
                    <div class=\"d-none\" itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\" >
                        <div class=\"d-none\" itemprop=\"logo\" itemscope itemtype=\"https://schema.org/ImageObject\">
                            <img src=\"https://nodepositcasino.org/img/logo.svg\"/>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "latest_news_articles_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 94,  248 => 80,  244 => 79,  239 => 77,  232 => 75,  220 => 70,  216 => 69,  210 => 66,  206 => 65,  202 => 64,  198 => 63,  194 => 62,  185 => 61,  182 => 60,  177 => 59,  175 => 58,  169 => 55,  161 => 49,  141 => 35,  136 => 34,  128 => 32,  126 => 31,  122 => 30,  115 => 28,  103 => 23,  99 => 22,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  68 => 14,  65 => 13,  60 => 12,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"latest-news-section\">
    <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-4\" aria-label=\"Scroll to Latest news\">
        <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
    </a>
    <div class=\"articles-holder container\" id=\"button-link-4\">
        <div class=\"latest-news-header\">
            <h2>Latest News</h2>
            <a class=\"btn btn-primary\" href=\"{{ path('news') }}\">View all news</a>
        </div>
        <div class=\"row\">
            {% set counter=0 %}
            {% for singlenews in news  %}
                {% set counter=counter+1 %}
                <div itemscope itemtype=\"http://schema.org/NewsArticle\" class=\"article-box col-lg-4 col-sm-6 col-12 {% if counter==3 %} {{ 'd-none d-lg-block' }} {% endif %} \">
                    <meta  itemprop=\"image\" content=\"{{ absolute_url(singlenews.image360) }}\" />
                    <meta  itemprop=\"mainEntityOfPage\" content=\"{{ absolute_url(path('singlenews',{slug:singlenews.slug})) }}\" />
                    <meta  itemprop=\"url\" content=\"{{ absolute_url(path('singlenews',{slug:singlenews.slug})) }}\" />
                    <meta itemprop=\"datePublished\" content=\"{{ singlenews.timeadded|date('Y-m-d') }}\" />
                    <meta itemprop=\"dateModified\" content=\"{{ singlenews.lastmodified|date('Y-m-d') }}\" />
                    <div class=\"article-box-inner\">
                        <div class=\"article-box-image\">
                            <a href=\"{{ path('singlenews',{slug:singlenews.slug}) }}\">
                                <img class=\"lazyload\" src=\"{{asset(('img/lazy-360.png'))}}\" data-original=\"{{ singlenews.image360 }}\" alt=\"{{ singlenews.heading }} \" width=\"360\" height=\"220\">
                            </a>
                        </div>
                        <div class=\"article-box-content\">
                            <h3>
                                <a href=\"{{ path('singlenews',{slug:singlenews.slug}) }}\"><span itemprop=\"headline\">{{ singlenews.heading }}</span></a>
                            </h3>
                            <p class=\"article-box-date\">{{ singlenews.gmdate }}</p>
                            {% if singlenews.author %}
                                <p class=\"article-box-author\">author: <a href=\"{{ path('author',{\"slug\":singlenews.author.slug}) }}\"><span itemprop=\"author\">{{ singlenews.author.authorname }}</span></a></p>
                            {% endif %}
                            <p class=\"article-box-descr\">{{ singlenews.introtext|raw }}</p>
                            <a class=\"read-more\" href=\"/news/{{ singlenews.slug }}\">Read more</a>
                        </div>
                    </div>
                    <div class=\"d-none\" itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\" >
                        <div class=\"d-none\" itemprop=\"logo\" itemscope itemtype=\"https://schema.org/ImageObject\">
                            <img src=\"https://nodepositcasino.org/img/logo.svg\"/>
                            <meta itemprop=\"url\" content=\"https://nodepositcasino.org/img/logo.png\">
                            <meta itemprop=\"width\" content=\"400\">
                            <meta itemprop=\"height\" content=\"60\">
                        </div>
                        <meta itemprop=\"name\" content=\"No Deposit Casino\">
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

    <div class=\"articles-holder container\" id=\"button-link-4\">
        <div class=\"latest-news-header\">
            <h2>Latest Articles</h2>
            <a class=\"btn btn-primary\" href=\"{{ path('articles') }}\">View all Articles</a>
        </div>
        <div class=\"row\">
            {% set counter=0 %}
            {% for article in articles  %}
                {% set counter=counter+1 %}
                <div itemscope itemtype=\"http://schema.org/NewsArticle\" class=\"article-box col-lg-4 col-sm-6 col-12 {% if counter==3 %} {{ 'd-none d-lg-block' }} {% endif %} \">
                    <meta  itemprop=\"image\" content=\"{{ absolute_url(article.image360) }}\" />
                    <meta  itemprop=\"mainEntityOfPage\" content=\"{{ absolute_url(path('article',{slug:article.slug})) }}\" />
                    <meta  itemprop=\"url\" content=\"{{ absolute_url(path('article',{slug:article.slug})) }}\" />
                    <meta itemprop=\"datePublished\" content=\"{{ article.timeadded|date('Y-m-d') }}\" />
                    <meta itemprop=\"dateModified\" content=\"{{ article.lastmodified|date('Y-m-d') }}\" />
                    <div class=\"article-box-inner\">
                        <div class=\"article-box-image\">
                            <a href=\"{{ path('article',{slug:article.slug}) }}\">
                                <img class=\"lazyload\" src=\"{{asset(('img/lazy-360.png'))}}\" data-original=\"{{ article.image360 }}\" alt=\"{{ article.heading }} \" width=\"360\" height=\"220\">
                            </a>
                        </div>
                        <div class=\"article-box-content\">
                            <h3>
                                <a href=\"{{ path('article',{slug:article.slug}) }}\"><span itemprop=\"headline\">{{ article.heading }}</span></a>
                            </h3>
                            <p class=\"article-box-date\">{{ article.gmdate }}</p>

                            <p class=\"article-box-descr\">{{ article.introtext|raw }}</p>
                            <a class=\"read-more\" href=\"{{ path('article',{slug:article.slug}) }}\">Read more</a>
                        </div>
                    </div>
                    <div class=\"d-none\" itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\" >
                        <div class=\"d-none\" itemprop=\"logo\" itemscope itemtype=\"https://schema.org/ImageObject\">
                            <img src=\"https://nodepositcasino.org/img/logo.svg\"/>
                            <meta itemprop=\"url\" content=\"https://nodepositcasino.org/img/logo.png\">
                            <meta itemprop=\"width\" content=\"400\">
                            <meta itemprop=\"height\" content=\"60\">
                        </div>
                        <meta itemprop=\"name\" content=\"No Deposit Casino\">
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>", "latest_news_articles_index.html.twig", "/var/www/ndc_new/templates/latest_news_articles_index.html.twig");
    }
}
