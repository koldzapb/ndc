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

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig */
class __TwigTemplate_483511e0e204b8aac5674a6f345a4b32c5a6ac7cf02065e6c0ea655c3138a61b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig"));

        // line 11
        echo "
";
        // line 13
        echo "
<table class=\"table table-bordered\">
    <thead>
        <tr>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "children", [], "any", false, false, false, 17)), "children", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
            // line 18
            echo "                ";
            if (($context["field_name"] == "_delete")) {
                // line 19
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                echo "</th>
                ";
            } else {
                // line 21
                echo "                    <th
                        ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 22), "required", [], "array", false, false, false, 22)) {
                    // line 23
                    echo "                            class=\"required\"
                        ";
                }
                // line 25
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 25), "attr", [], "array", false, true, false, 25), "hidden", [], "array", true, true, false, 25) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 25), "attr", [], "array", false, false, false, 25), "hidden", [], "array", false, false, false, 25))) {
                    // line 26
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 28
                echo "                    >
                        ";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 29), "label", [], "any", false, false, false, 29), [], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "sonata_admin", [], "array", false, true, false, 29), "admin", [], "any", false, true, false, 29), "translationDomain", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 29), "sonata_admin", [], "array", false, true, false, 29), "admin", [], "any", false, true, false, 29), "translationDomain", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 30
$context["nested_field"], "vars", [], "any", false, false, false, 30), "translation_domain", [], "any", false, false, false, 30))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 30), "translation_domain", [], "any", false, false, false, 30)))), "html", null, true);
                // line 31
                echo "
                    </th>
                ";
            }
            // line 34
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "children", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
            // line 39
            echo "            <tr>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "children", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                // line 41
                echo "                    <td class=\"
                        sonata-ba-td-";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "
                        control-group
                        ";
                // line 44
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 44), "errors", [], "any", false, false, false, 44)) > 0)) {
                    echo " error sonata-ba-field-error";
                }
                // line 45
                echo "                        \"
                        ";
                // line 46
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true, false, 46), "attr", [], "array", false, true, false, 46), "hidden", [], "array", true, true, false, 46) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 46), "attr", [], "array", false, false, false, 46), "hidden", [], "array", false, false, false, 46))) {
                    // line 47
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 49
                echo "                    >
                        ";
                // line 50
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 50), "associationadmin", [], "any", false, true, false, 50), "formfielddescriptions", [], "any", false, true, false, 50), $context["field_name"], [], "array", true, true, false, 50)) {
                    // line 51
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                    echo "

                            ";
                    // line 53
                    $context["dummy"] = twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "setrendered", [], "any", false, false, false, 53);
                    // line 54
                    echo "                        ";
                } else {
                    // line 55
                    echo "                            ";
                    if (($context["field_name"] == "_delete")) {
                        // line 56
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget', ["label" => false]);
                        echo "
                            ";
                    } else {
                        // line 58
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                        echo "
                            ";
                    }
                    // line 60
                    echo "                        ";
                }
                // line 61
                echo "                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 61), "errors", [], "any", false, false, false, 61)) > 0)) {
                    // line 62
                    echo "                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                ";
                    // line 63
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                    echo "
                            </div>
                        ";
                }
                // line 66
                echo "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 70,  190 => 68,  183 => 66,  177 => 63,  174 => 62,  171 => 61,  168 => 60,  162 => 58,  156 => 56,  153 => 55,  150 => 54,  148 => 53,  142 => 51,  140 => 50,  137 => 49,  133 => 47,  131 => 46,  128 => 45,  124 => 44,  117 => 42,  114 => 41,  110 => 40,  107 => 39,  103 => 38,  98 => 35,  92 => 34,  87 => 31,  85 => 30,  84 => 29,  81 => 28,  77 => 26,  74 => 25,  70 => 23,  68 => 22,  65 => 21,  59 => 19,  56 => 18,  52 => 17,  46 => 13,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% sonata_template_deprecate '@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig' %}

<table class=\"table table-bordered\">
    <thead>
        <tr>
            {% for field_name, nested_field in form.children|first.children %}
                {% if field_name == '_delete' %}
                    <th>{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}</th>
                {% else %}
                    <th
                        {% if nested_field.vars['required'] %}
                            class=\"required\"
                        {% endif %}
                        {% if (nested_field.vars['attr']['hidden'] is defined) and (nested_field.vars['attr']['hidden']) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {{ nested_field.vars.label|trans({}, nested_field.vars['sonata_admin'].admin.translationDomain
                            |default(nested_field.vars.translation_domain)
                        ) }}
                    </th>
                {% endif %}
            {% endfor %}
        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        {% for nested_group_field_name, nested_group_field in form.children %}
            <tr>
                {% for field_name, nested_field in nested_group_field.children %}
                    <td class=\"
                        sonata-ba-td-{{ id }}-{{ field_name  }}
                        control-group
                        {% if nested_field.vars.errors|length > 0 %} error sonata-ba-field-error{% endif %}
                        \"
                        {% if (nested_field.vars['attr']['hidden'] is defined) and (nested_field.vars['attr']['hidden']) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {% if sonata_admin.field_description.associationadmin.formfielddescriptions[field_name] is defined %}
                            {{ form_widget(nested_field) }}

                            {% set dummy = nested_group_field.setrendered %}
                        {% else %}
                            {% if field_name == '_delete' %}
                                {{ form_widget(nested_field, { label: false }) }}
                            {% else %}
                                {{ form_widget(nested_field) }}
                            {% endif %}
                        {% endif %}
                        {% if nested_field.vars.errors|length > 0 %}
                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                {{ form_errors(nested_field) }}
                            </div>
                        {% endif %}
                    </td>
                {% endfor %}
            </tr>
        {% endfor %}
    </tbody>
</table>
", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig", "/var/www/ndc_new/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_to_many_inline_table.html.twig");
    }
}
