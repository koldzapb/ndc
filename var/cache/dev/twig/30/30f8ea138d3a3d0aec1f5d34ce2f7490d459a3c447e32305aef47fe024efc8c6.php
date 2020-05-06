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

/* emails/affiliate_link_change.html.twig */
class __TwigTemplate_00d0ace3b9ce426d8c185fadaca3e21170925da179523a3fd8ecd03d6407e16b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/affiliate_link_change.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/affiliate_link_change.html.twig"));

        // line 1
        echo "<html>
<head>
</head>
<body>
<p>Hi ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</p>
<p>
    Affiliate ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["casinoname"]) || array_key_exists("casinoname", $context) ? $context["casinoname"] : (function () { throw new RuntimeError('Variable "casinoname" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " has changed web address
</p>
<p>
    New address is ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["casinourl"]) || array_key_exists("casinourl", $context) ? $context["casinourl"] : (function () { throw new RuntimeError('Variable "casinourl" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "
</p>
<p>Regards,</p>
<p>The NDC Team</p>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/affiliate_link_change.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
</head>
<body>
<p>Hi {{ username }}</p>
<p>
    Affiliate {{ casinoname }} has changed web address
</p>
<p>
    New address is {{ casinourl }}
</p>
<p>Regards,</p>
<p>The NDC Team</p>
</body>
</html>", "emails/affiliate_link_change.html.twig", "/var/www/ndc_new/templates/emails/affiliate_link_change.html.twig");
    }
}
