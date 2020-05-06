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

/* emails/registration.html.twig */
class __TwigTemplate_15a8cb1ccc204f97e9550bdf886bb9de672a377dad20e63658c9402dcb514297 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration.html.twig"));

        // line 1
        echo "<html>
<head>
</head>
<body>
    <p>Hi ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "username", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
    <p>
        <strong>Thanks for registering!</strong>
        Please confirm your membership";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "newsletter", [], "any", false, false, false, 8)) {
            echo " and newsletter subscription";
        }
        echo " by clicking the button below:</p>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "/accountconfirmation?username=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), "html", null, true);
        echo "&token=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "token", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
           style=\"font-size:16px;font-family:Helvetica,Arial,sans-serif;color:rgb(52,152,219);text-decoration:none;border-radius:5px;padding:8px 14px;border:1px solid rgb(235,164,52);display:inline-block;background-color:rgb(235,164,52);\"
           target=\"_blank\">
            <span style=\"font-size:16px;font-family:Helvetica,Arial,sans-serif;color:#ffffff\">
                CONFIRM ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "newsletter", [], "any", false, false, false, 13)) {
            echo "SUBSCRIPTION";
        } else {
            echo "MEMBERSHIP";
        }
        // line 14
        echo "            </span>
        </a>
    <p>Regards,</p>
    <p>The NDC Team</p>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  72 => 13,  61 => 9,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
</head>
<body>
    <p>Hi {{ user.username }}</p>
    <p>
        <strong>Thanks for registering!</strong>
        Please confirm your membership{% if user.newsletter %} and newsletter subscription{% endif %} by clicking the button below:</p>
        <a href=\"{{ host }}/accountconfirmation?username={{ user.username }}&token={{ user.token }}\"
           style=\"font-size:16px;font-family:Helvetica,Arial,sans-serif;color:rgb(52,152,219);text-decoration:none;border-radius:5px;padding:8px 14px;border:1px solid rgb(235,164,52);display:inline-block;background-color:rgb(235,164,52);\"
           target=\"_blank\">
            <span style=\"font-size:16px;font-family:Helvetica,Arial,sans-serif;color:#ffffff\">
                CONFIRM {% if user.newsletter %}SUBSCRIPTION{% else %}MEMBERSHIP{% endif %}
            </span>
        </a>
    <p>Regards,</p>
    <p>The NDC Team</p>
</body>
</html>", "emails/registration.html.twig", "/var/www/ndc_new/templates/emails/registration.html.twig");
    }
}
