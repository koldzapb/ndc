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

/* Casino/casinos.html.twig */
class __TwigTemplate_1cf830333b56bc2124b58da03157d53ee93730de5440a85a49ed20889be9d6ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Casino/casinos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Casino/casinos.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["casinos"]) || array_key_exists("casinos", $context) ? $context["casinos"] : (function () { throw new RuntimeError('Variable "casinos" does not exist.', 1, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["casino"]) {
            // line 2
            echo "    <div class='casino-list-row'>

        <div class='casino-logo no-border casino-list-item'>
            ";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, $context["casino"], "isavailableincountry", [], "any", false, false, false, 5) == 1)) {
                // line 6
                echo "                <span class=\"flag\">
                    <img src='";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 7, $this->source); })()), "imgSrc", [], "any", false, false, false, 7), "html", null, true);
                echo "' alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
                echo "\" width=\"16\" height=\"11\">
                </span>
            ";
            }
            // line 10
            echo "            <a href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            echo "'  title='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 10), "html", null, true);
            echo "' rel='noopener nofollow' target='_blank'>
                <img class=\"lazyload\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy.png"), "html", null, true);
            echo "\" data-original=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "logo90", [], "any", false, false, false, 11), "html", null, true);
            echo "\" title='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 11), "html", null, true);
            echo "'  alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 11), "html", null, true);
            echo "\" width=\"90\" height=\"90\">
            </a>
        </div>

        ";
            // line 15
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "likes", [], "any", false, false, false, 15)) > 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "posts", [], "any", false, false, false, 15)) > 1))) {
                // line 16
                echo "            <div class='casino-list-item hidden-cell casino-comments'>
                ";
                // line 17
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "posts", [], "any", false, false, false, 17)) > 1)) {
                    // line 18
                    echo "                    <span class='comments-no'><span class=\"icon\"></span>";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "posts", [], "any", false, false, false, 18)), "html", null, true);
                    echo " Comments</span>
                ";
                }
                // line 20
                echo "                ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "likes", [], "any", false, false, false, 20)) > 1)) {
                    // line 21
                    echo "                    <span class=\"likes-no\"><span class=\"icon\"></span>";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "likes", [], "any", false, false, false, 21)), "html", null, true);
                    echo " Likes</span>
                ";
                }
                // line 23
                echo "            </div>
        ";
            } else {
                // line 25
                echo "            <div class=\"casino-list-item casino-no-comments\"></div>
        ";
            }
            // line 27
            echo "
        <div class='casino-list-item casino-rating hidden-cell'>
            <p class='cell-subtitle'>Rating</p>
            <p class='casino-rating-value'><span>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "averagerating", [], "any", false, false, false, 30), "html", null, true);
            echo "</span>/5</p>
            <div class='progress'>
                <span class='progress-bar' role='progressbar' style='width: ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "ratingpercent", [], "any", false, false, false, 32), "html", null, true);
            echo "%;' aria-valuenow='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "ratingpercent", [], "any", false, false, false, 32), "html", null, true);
            echo "' aria-valuemin='0' aria-valuemax='100'>
                </span>
            </div>
        </div>

        <div class='casino-list-item casino-powered-by hidden-cell'>
            <p class='cell-subtitle'>Powered By</p>
                ";
            // line 39
            $this->loadTemplate("casino_softwares_for_country_list.html.twig", "Casino/casinos.html.twig", 39)->display(twig_array_merge($context, ["softwares" => twig_get_attribute($this->env, $this->source, $context["casino"], "softwares", [], "any", false, false, false, 39), "casinosPage" => true]));
            // line 40
            echo "        </div>

        <div class='casino-list-item casino-review'>
            <a href='#' class='btn-like tooltip-btn' data-toggle='tooltip' data-placement='top' title='Like' data-casino='";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "' onclick='return false;' aria-label=\"Like\"></a>
            <a href='";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 44), "casinoname" => twig_get_attribute($this->env, $this->source, $context["casino"], "slug", [], "any", false, false, false, 44)]), "html", null, true);
            echo "' class='btn-review tooltip-btn' data-toggle='tooltip' data-placement='top' title='Read Review' aria-label=\"Read Review\"></a>
        </div>

        <div class='no-border casino-list-item casino-link'>
            <a class='show-hidden-cells' href=\"#\" aria-label=\"Show hidden\"></a>
            <a href='";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, $context["casino"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "'  title='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casino"], "casinoname", [], "any", false, false, false, 49), "html", null, true);
            echo "' rel='noopener nofollow' class='btn btn-primary' target='_blank'>
                ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50) == "United Kingdom")) {
                echo "PLAY";
            } else {
                echo "PLAY NOW";
            }
            // line 51
            echo "            </a>
        </div>
    </div>



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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Casino/casinos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 58,  181 => 51,  175 => 50,  169 => 49,  161 => 44,  157 => 43,  152 => 40,  150 => 39,  138 => 32,  133 => 30,  128 => 27,  124 => 25,  120 => 23,  114 => 21,  111 => 20,  105 => 18,  103 => 17,  100 => 16,  98 => 15,  85 => 11,  78 => 10,  70 => 7,  67 => 6,  65 => 5,  60 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for casino in casinos %}
    <div class='casino-list-row'>

        <div class='casino-logo no-border casino-list-item'>
            {% if casino.isavailableincountry==1 %}
                <span class=\"flag\">
                    <img src='{{ country.imgSrc }}' alt=\"{{ country.name }}\" width=\"16\" height=\"11\">
                </span>
            {% endif %}
            <a href='{{ path('visit_casino',{id:casino.id}) }}'  title='{{ casino.casinoname }}' rel='noopener nofollow' target='_blank'>
                <img class=\"lazyload\" src=\"{{asset(('img/lazy.png'))}}\" data-original=\"{{ casino.logo90 }}\" title='{{ casino.casinoname }}'  alt=\"{{ casino.casinoname }}\" width=\"90\" height=\"90\">
            </a>
        </div>

        {% if (casino.likes|length >1 or casino.posts|length >1 )  %}
            <div class='casino-list-item hidden-cell casino-comments'>
                {% if casino.posts|length >1 %}
                    <span class='comments-no'><span class=\"icon\"></span>{{ casino.posts|length }} Comments</span>
                {% endif %}
                {% if casino.likes|length >1 %}
                    <span class=\"likes-no\"><span class=\"icon\"></span>{{ casino.likes|length }} Likes</span>
                {% endif %}
            </div>
        {% else %}
            <div class=\"casino-list-item casino-no-comments\"></div>
        {% endif %}

        <div class='casino-list-item casino-rating hidden-cell'>
            <p class='cell-subtitle'>Rating</p>
            <p class='casino-rating-value'><span>{{ casino.averagerating }}</span>/5</p>
            <div class='progress'>
                <span class='progress-bar' role='progressbar' style='width: {{ casino.ratingpercent }}%;' aria-valuenow='{{ casino.ratingpercent }}' aria-valuemin='0' aria-valuemax='100'>
                </span>
            </div>
        </div>

        <div class='casino-list-item casino-powered-by hidden-cell'>
            <p class='cell-subtitle'>Powered By</p>
                {% include 'casino_softwares_for_country_list.html.twig' with {'softwares': casino.softwares , 'casinosPage':true} %}
        </div>

        <div class='casino-list-item casino-review'>
            <a href='#' class='btn-like tooltip-btn' data-toggle='tooltip' data-placement='top' title='Like' data-casino='{{ casino.id }}' onclick='return false;' aria-label=\"Like\"></a>
            <a href='{{ path('casino-review',{id:casino.id,casinoname:casino.slug}) }}' class='btn-review tooltip-btn' data-toggle='tooltip' data-placement='top' title='Read Review' aria-label=\"Read Review\"></a>
        </div>

        <div class='no-border casino-list-item casino-link'>
            <a class='show-hidden-cells' href=\"#\" aria-label=\"Show hidden\"></a>
            <a href='{{ path('visit_casino',{id:casino.id}) }}'  title='{{ casino.casinoname }}' rel='noopener nofollow' class='btn btn-primary' target='_blank'>
                {% if country.name=='United Kingdom' %}PLAY{% else %}PLAY NOW{% endif %}
            </a>
        </div>
    </div>



{% endfor %}




", "Casino/casinos.html.twig", "/var/www/ndc_new/templates/Casino/casinos.html.twig");
    }
}
