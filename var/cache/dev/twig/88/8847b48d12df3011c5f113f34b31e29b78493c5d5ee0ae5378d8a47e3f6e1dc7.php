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

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_0190d092d8d6392c5cab631df74e2844b8d3ce452cb7eaa800ca7352233027a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:silex_form_div_layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:silex_form_div_layout.html.twig"));

        // line 2
        echo "
";
        // line 7
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Widgets #}

{#
    This file doesn't seem to be used anymore ; commenting it for now in order not to mess with user's configurations.
    TODO: Remove it and all of its references
#}

{#
{% block choice_widget %}
{% apply spaceless %}
    {% if expanded %}
        <ul {{ block('widget_container_attributes') }} class=\"inputs-list\">
        {% for child in form %}
            <li>
                {% set form_widget_content %}
                    {{ form_widget(child) }}
                {% endset %}
                {{ form_label(child, null, { 'in_list_checkbox' : true, 'widget' : form_widget_content } ) }}
            </li>
        {% endfor %}
        </ul>
    {% else %}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {% if empty_value is not none %}
            <option value=\"\">{{ empty_value|trans({}, translation_domain) }}</option>
        {% endif %}
        {% if preferred_choices|length > 0 %}
            {% set options = preferred_choices %}
            {{ block('choice_widget_options') }}
            {% if choices|length > 0 and separator is not none %}
                <option disabled=\"disabled\">{{ separator }}</option>
            {% endif %}
        {% endif %}
        {% set options = choices %}
        {{ block('choice_widget_options') }}
    </select>
    {% endif %}
{% endapply %}
{% endblock choice_widget %}

{% block form_widget_simple %}
{% apply spaceless %}
    {% set type = type|default('text') %}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} value=\"{{ value }}\">
{% endapply %}
{% endblock form_widget_simple %}

&#123;&#35; Labels &#35;&#125;

{% block form_label %}
{% apply spaceless %}
    {% if not compound %}
        {% set attr = attr|merge({'for': id}) %}
    {% endif %}
    {% if required %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' required'}) %}
    {% endif %}
    {% if in_list_checkbox is defined and in_list_checkbox and widget is defined %}
        <label{% for attrname,attrvalue in attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
            {{ widget|raw }}
            <span>
                {{ label|trans({}, translation_domain) }}
            </span>
        </label>
    {% else %}
        <label{% for attrname,attrvalue in attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>{{ label|trans({}, translation_domain) }}</label>
    {% endif %}
{% endapply %}
{% endblock %}

&#123;&#35; Rows &#35;&#125;

{% block form_row %}
{% apply spaceless %}
    <div class=\"form-group {{ (0 < form_errors(form)|length)? 'has-error':'' }} \">
        {{ form_label(form, label|default(null)) }}
        <div class=\"col-sm-10 col-md-5\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endapply %}
{% endblock form_row %}

&#123;&#35; Misc &#35;&#125;

{% block form_errors %}
{% apply spaceless %}
    {% if errors|length > 0 %}
        {% if not form.parent  or 'repeated' in form.vars['block_prefixes'] %}
            <div class=\"form-group has-error\">
        {% endif %}
        <span class=\"help-block\">
            {% for error in errors %}
                {% if loop.first %}
                    {{ error.messageTemplate|trans(error.messageParameters, 'validators') }}
                {% endif %}
            {% endfor %}
        </span>
        {% if not form.parent  or 'repeated' in form.vars['block_prefixes'] %}
            </div>
        {% endif %}
    {% endif %}
{% endapply %}
{% endblock form_errors %}
#}
", "SonataAdminBundle:Form:silex_form_div_layout.html.twig", "/var/www/ndc_new/vendor/sonata-project/admin-bundle/src/Resources/views/Form/silex_form_div_layout.html.twig");
    }
}
