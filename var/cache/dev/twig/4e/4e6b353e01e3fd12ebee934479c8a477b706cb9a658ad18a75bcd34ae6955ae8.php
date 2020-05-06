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

/* emails/subscription.html.twig */
class __TwigTemplate_4319ca740b5fcc090d71a52cfbebc828d1a783da689290066451a9138a342639 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/subscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/subscription.html.twig"));

        // line 1
        echo "<html>
<head>
</head>
<body>
    <p>Hi</p>
    <p>
        <strong>Thanks for subscribing!</strong>
        Please confirm your newsletter subscription by clicking the button below:</p>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "/subscriptionconfirmation?token=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 9, $this->source); })()), "token", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
           style=\"font-size:16px;font-family:Helvetica,Arial,sans-serif;color:rgb(52,152,219);text-decoration:none;border-radius:5px;padding:8px 14px;border:1px solid rgb(235,164,52);display:inline-block;background-color:rgb(235,164,52);\"
           target=\"_blank\">
            <span style=\"font-size:16px;font-family:Helvetica,Arial,sans-serif;color:#ffffff\">
                CONFIRM SUBSCRIPTION
            </span>
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
        return "emails/subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
</head>
<body>
    <p>Hi</p>
    <p>
        <strong>Thanks for subscribing!</strong>
        Please confirm your newsletter subscription by clicking the button below:</p>
        <a href=\"{{ host }}/subscriptionconfirmation?token={{ subscription.token }}\"
           style=\"font-size:16px;font-family:Helvetica,Arial,sans-serif;color:rgb(52,152,219);text-decoration:none;border-radius:5px;padding:8px 14px;border:1px solid rgb(235,164,52);display:inline-block;background-color:rgb(235,164,52);\"
           target=\"_blank\">
            <span style=\"font-size:16px;font-family:Helvetica,Arial,sans-serif;color:#ffffff\">
                CONFIRM SUBSCRIPTION
            </span>
        </a>
    <p>Regards,</p>
    <p>The NDC Team</p>
</body>
</html>", "emails/subscription.html.twig", "/var/www/ndc_new/templates/emails/subscription.html.twig");
    }
}
