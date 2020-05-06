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

/* FMElfinderBundle:Elfinder:tinymce4.html.twig */
class __TwigTemplate_8a929725afbf6077705ad709bea28467351a70a3083296794f8b0f66a2f0402b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:tinymce4.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:tinymce4.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new RuntimeError('Variable "includeAssets" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_css.html.twig");
            echo "
";
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new RuntimeError('Variable "includeAssets" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "    ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_js.html.twig");
            echo "
";
        }
        // line 12
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    var FileBrowserDialogue = {
        init: function () {
            // Here goes your code for setting your custom things onLoad.
        },
        mySubmit: function (URL) {
            // pass selected file path to TinyMCE
            top.tinymce.activeEditor.windowManager.getParams().setUrl(URL);

            // close popup window
            top.tinymce.activeEditor.windowManager.close();
        }
    };

    \$(document).ready(function() {
        var elf = \$('.elfinder').elfinder({
            // set your elFinder options here
            url: '";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_connect", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 29, $this->source); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new RuntimeError('Variable "homeFolder" does not exist.', 29, $this->source); })())]), "html", null, true);
        echo "',  // connector URL
            lang : '";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 31
        echo (isset($context["onlyMimes"]) || array_key_exists("onlyMimes", $context) ? $context["onlyMimes"] : (function () { throw new RuntimeError('Variable "onlyMimes" does not exist.', 31, $this->source); })());
        echo ",
            getFileCallback: function(file) { // editor callback
                ";
        // line 33
        if ((isset($context["relative_path"]) || array_key_exists("relative_path", $context) ? $context["relative_path"] : (function () { throw new RuntimeError('Variable "relative_path" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "                        FileBrowserDialogue.mySubmit('";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) || array_key_exists("pathPrefix", $context) ? $context["pathPrefix"] : (function () { throw new RuntimeError('Variable "pathPrefix" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "schemeAndHttpHost", [], "any", false, false, false, 34), "html", null, true);
            echo "/\", \"\")); // pass selected file path to TinyMCE
                ";
        } else {
            // line 36
            echo "                    FileBrowserDialogue.mySubmit(file.url); // pass selected file path to TinyMCE
                ";
        }
        // line 38
        echo "
            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:tinymce4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  110 => 36,  102 => 34,  100 => 33,  95 => 31,  91 => 30,  87 => 29,  68 => 12,  62 => 10,  60 => 9,  56 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
{% if includeAssets %}
    {{ include(\"@FMElfinder/Elfinder/helper/assets_css.html.twig\") }}
{% endif %}
</head>
<body>
{% if includeAssets %}
    {{ include(\"@FMElfinder/Elfinder/helper/assets_js.html.twig\") }}
{% endif %}
<script type=\"text/javascript\" charset=\"utf-8\">
    var FileBrowserDialogue = {
        init: function () {
            // Here goes your code for setting your custom things onLoad.
        },
        mySubmit: function (URL) {
            // pass selected file path to TinyMCE
            top.tinymce.activeEditor.windowManager.getParams().setUrl(URL);

            // close popup window
            top.tinymce.activeEditor.windowManager.close();
        }
    };

    \$(document).ready(function() {
        var elf = \$('.elfinder').elfinder({
            // set your elFinder options here
            url: '{{ path('ef_connect', {'instance': instance, 'homeFolder': homeFolder }) }}',  // connector URL
            lang : '{{ locale }}',
            onlyMimes: {{ onlyMimes|raw }},
            getFileCallback: function(file) { // editor callback
                {% if relative_path %}
                        FileBrowserDialogue.mySubmit('{{ pathPrefix }}'+file.url.replace(\"{{ app.request.schemeAndHttpHost }}/\", \"\")); // pass selected file path to TinyMCE
                {% else %}
                    FileBrowserDialogue.mySubmit(file.url); // pass selected file path to TinyMCE
                {% endif %}

            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
", "FMElfinderBundle:Elfinder:tinymce4.html.twig", "/var/www/ndc_new/vendor/helios-ag/fm-elfinder-bundle/src/Resources/views/Elfinder/tinymce4.html.twig");
    }
}
