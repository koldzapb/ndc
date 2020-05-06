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

/* casino_softwares_for_country_list.html.twig */
class __TwigTemplate_1d8459426c4a3ad0b72d1fefb531d83d57a98bae4a6803bf96e66e57a213dcca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "casino_softwares_for_country_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "casino_softwares_for_country_list.html.twig"));

        // line 1
        $context["i"] = 0;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["softwares"]) || array_key_exists("softwares", $context) ? $context["softwares"] : (function () { throw new RuntimeError('Variable "softwares" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["software"]) {
            // line 3
            echo "    ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 3, $this->source); })()) + 1);
            // line 4
            echo "    ";
            $context["softwaresLength"] = twig_length_filter($this->env, (isset($context["softwares"]) || array_key_exists("softwares", $context) ? $context["softwares"] : (function () { throw new RuntimeError('Variable "softwares" does not exist.', 4, $this->source); })()));
            // line 5
            echo "    ";
            if ((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 5, $this->source); })()) < 4) || ((isset($context["softwaresLength"]) || array_key_exists("softwaresLength", $context) ? $context["softwaresLength"] : (function () { throw new RuntimeError('Variable "softwaresLength" does not exist.', 5, $this->source); })()) == 4))) {
                // line 6
                echo "        <img src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original='";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "image25", [], "any", false, false, false, 7), "html", null, true);
                echo "' style='opacity:";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["software"], "restrictedcountries", [], "any", false, false, false, 7), "contains", [0 => (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 7, $this->source); })())], "method", false, false, false, 7)) {
                    echo "0.3";
                } else {
                    echo "1";
                }
                echo "' alt='Powered By ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "title", [], "any", false, false, false, 7), "html", null, true);
                echo "' title='Powered By ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "title", [], "any", false, false, false, 7), "html", null, true);
                echo "' width=\"25\" height=\"15\" class=\"lazyload\">
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if ((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 10, $this->source); })()) == 4) && ((isset($context["softwaresLength"]) || array_key_exists("softwaresLength", $context) ? $context["softwaresLength"] : (function () { throw new RuntimeError('Variable "softwaresLength" does not exist.', 10, $this->source); })()) > 4))) {
                // line 11
                echo "        ";
                $context["softwaresNum"] = ((isset($context["softwaresLength"]) || array_key_exists("softwaresLength", $context) ? $context["softwaresLength"] : (function () { throw new RuntimeError('Variable "softwaresLength" does not exist.', 11, $this->source); })()) - 3);
                // line 12
                echo "        ";
                if ((isset($context["casinosPage"]) || array_key_exists("casinosPage", $context))) {
                    // line 13
                    echo "            <div class='more-softwares'>+";
                    echo twig_escape_filter($this->env, (isset($context["softwaresNum"]) || array_key_exists("softwaresNum", $context) ? $context["softwaresNum"] : (function () { throw new RuntimeError('Variable "softwaresNum" does not exist.', 13, $this->source); })()), "html", null, true);
                    echo "
            <div class='softwares_hover'>
            ";
                } else {
                    // line 16
                    echo "            <div class='more-softwares'>+";
                    echo twig_escape_filter($this->env, (isset($context["softwaresNum"]) || array_key_exists("softwaresNum", $context) ? $context["softwaresNum"] : (function () { throw new RuntimeError('Variable "softwaresNum" does not exist.', 16, $this->source); })()), "html", null, true);
                    echo "
                <div class='softwares_hover softwares_hoverSlide'>
            ";
                }
                // line 19
                echo "    ";
            }
            // line 20
            echo "

    ";
            // line 22
            if ((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 22, $this->source); })()) >= 4) && ((isset($context["softwaresLength"]) || array_key_exists("softwaresLength", $context) ? $context["softwaresLength"] : (function () { throw new RuntimeError('Variable "softwaresLength" does not exist.', 22, $this->source); })()) > 4))) {
                // line 23
                echo "        <img src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original='";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "image25", [], "any", false, false, false, 24), "html", null, true);
                echo "' style='opacity:";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["software"], "restrictedcountries", [], "any", false, false, false, 24), "contains", [0 => (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 24, $this->source); })())], "method", false, false, false, 24)) {
                    echo "0.3";
                } else {
                    echo "1";
                }
                echo "' alt='Powered By ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "title", [], "any", false, false, false, 24), "html", null, true);
                echo "' title='Powered By ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "title", [], "any", false, false, false, 24), "html", null, true);
                echo "' width=\"25\" height=\"15\" class=\"lazyload\">
    ";
            }
            // line 26
            echo "
    ";
            // line 27
            if ((((isset($context["softwaresLength"]) || array_key_exists("softwaresLength", $context) ? $context["softwaresLength"] : (function () { throw new RuntimeError('Variable "softwaresLength" does not exist.', 27, $this->source); })()) > 4) && ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 27, $this->source); })()) == (isset($context["softwaresLength"]) || array_key_exists("softwaresLength", $context) ? $context["softwaresLength"] : (function () { throw new RuntimeError('Variable "softwaresLength" does not exist.', 27, $this->source); })())))) {
                // line 28
                echo "                </div>
            </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['software'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "casino_softwares_for_country_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 28,  131 => 27,  128 => 26,  113 => 24,  110 => 23,  108 => 22,  104 => 20,  101 => 19,  94 => 16,  87 => 13,  84 => 12,  81 => 11,  79 => 10,  76 => 9,  61 => 7,  58 => 6,  55 => 5,  52 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set i=0 %}
{% for software in softwares %}
    {% set i=i+1 %}
    {% set softwaresLength = softwares|length %}
    {% if i < 4 or softwaresLength == 4 %}
        <img src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original='{{ software.image25 }}' style='opacity:{% if(software.restrictedcountries.contains(country)) %}0.3{% else %}1{% endif %}' alt='Powered By {{ software.title }}' title='Powered By {{ software.title }}' width=\"25\" height=\"15\" class=\"lazyload\">
    {% endif %}

    {%  if i==4 and softwaresLength >4   %}
        {% set softwaresNum=softwaresLength - 3 %}
        {% if casinosPage is defined %}
            <div class='more-softwares'>+{{ softwaresNum }}
            <div class='softwares_hover'>
            {% else %}
            <div class='more-softwares'>+{{ softwaresNum }}
                <div class='softwares_hover softwares_hoverSlide'>
            {% endif %}
    {% endif %}


    {% if i>=4 and softwaresLength > 4 %}
        <img src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original='{{ software.image25 }}' style='opacity:{% if(software.restrictedcountries.contains(country)) %}0.3{% else %}1{% endif %}' alt='Powered By {{ software.title }}' title='Powered By {{ software.title }}' width=\"25\" height=\"15\" class=\"lazyload\">
    {% endif %}

    {% if softwaresLength >4 and i==softwaresLength %}
                </div>
            </div>
    {% endif %}
{% endfor %}", "casino_softwares_for_country_list.html.twig", "/var/www/ndc_new/templates/casino_softwares_for_country_list.html.twig");
    }
}
