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

/* emails/affiliate_link_change.txt.twig */
class __TwigTemplate_d786fb8ec45c1faa5d065a1cfe9f4bd8d95336aeb90f4a7ad2b1e8223db2c561 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/affiliate_link_change.txt.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/affiliate_link_change.txt.twig"));

        // line 1
        echo "Hi, ";
        echo (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 1, $this->source); })());
        echo "

Afilliate link of the following casino has changed
";
        // line 4
        echo (isset($context["casinoname"]) || array_key_exists("casinoname", $context) ? $context["casinoname"] : (function () { throw new RuntimeError('Variable "casinoname" does not exist.', 4, $this->source); })());
        echo "
New link is
";
        // line 6
        echo (isset($context["casinourl"]) || array_key_exists("casinourl", $context) ? $context["casinourl"] : (function () { throw new RuntimeError('Variable "casinourl" does not exist.', 6, $this->source); })());
        echo "

Regards
The NDC Team";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/affiliate_link_change.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Hi, {{ username }}

Afilliate link of the following casino has changed
{{ casinoname }}
New link is
{{ casinourl }}

Regards
The NDC Team", "emails/affiliate_link_change.txt.twig", "/var/www/ndc_new/templates/emails/affiliate_link_change.txt.twig");
    }
}
