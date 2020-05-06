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

/* emails/new_no_deposit_bonus.html.twig */
class __TwigTemplate_8750b5034b538b54f857d8e49efd13fc215e791538f428976d7eabeb88d8b62c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/new_no_deposit_bonus.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/new_no_deposit_bonus.html.twig"));

        // line 1
        echo "<html>
<head>
</head>
<body>
<h2>New No Deposit Has Arrived</h2>
<p>Bonus Amount:";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 6, $this->source); })()), "symbol", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 6, $this->source); })()), "maxbonusshow", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
";
        // line 7
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 7, $this->source); })()), "code", [], "any", false, false, false, 7)) > 0)) {
            // line 8
            echo "    <p>Bonus Code: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 8, $this->source); })()), "code", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
";
        }
        // line 10
        if (((((isset($context["users_country"]) || array_key_exists("users_country", $context) ? $context["users_country"] : (function () { throw new RuntimeError('Variable "users_country" does not exist.', 10, $this->source); })()) != null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 10, $this->source); })()), "restrictedcountries", [], "any", false, false, false, 10), "contains", [0 => (isset($context["users_country"]) || array_key_exists("users_country", $context) ? $context["users_country"] : (function () { throw new RuntimeError('Variable "users_country" does not exist.', 10, $this->source); })())], "method", false, false, false, 10)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 10, $this->source); })()), "casino", [], "any", false, false, false, 10), "countries", [], "any", false, false, false, 10), "contains", [0 => (isset($context["users_country"]) || array_key_exists("users_country", $context) ? $context["users_country"] : (function () { throw new RuntimeError('Variable "users_country" does not exist.', 10, $this->source); })())], "method", false, false, false, 10))) {
            // line 11
            echo "    <p>Players from ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["users_country"]) || array_key_exists("users_country", $context) ? $context["users_country"] : (function () { throw new RuntimeError('Variable "users_country" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
            echo " allowed</p>
";
        }
        // line 13
        echo "<p>WR: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 13, $this->source); })()), "wr", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
<p style=\"font-size: 8px\" >";
        // line 14
        echo twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 14, $this->source); })()), "extraIntable", [], "any", false, false, false, 14);
        echo "</p>
";
        // line 15
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 15, $this->source); })()), "tcurl", [], "any", false, false, false, 15)) > 0)) {
            // line 16
            echo "    <p style=\"font-size: 8px\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, (isset($context["bonus"]) || array_key_exists("bonus", $context) ? $context["bonus"] : (function () { throw new RuntimeError('Variable "bonus" does not exist.', 16, $this->source); })()), "tcurl", [], "any", false, false, false, 16);
            echo "\">T&C</a></p>
";
        }
        // line 18
        echo "<p>Copyright © 2019 Nodepositcaisno.org. All rights reserved.
    Is gambling a problem for you? Visit our help page <a href=\"https://nodepositcasino.org/gamblinghelp\">here</a>.
    If you don't want to receive this email, please unsubscribe <a href=\"https://nodepositcasino.org/unsubscribe?user_token=";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo " \">here</a>.
    Contact us <a href=\"https://nodepositcasino.org/contact/\">here</a>.
</p>
<a href=\"http://www.gamcare.org.uk\"><img src=\"https://nodepositcasino.org/img/FooterImages/gamecare_woo.png\" alt=\"gamcare\"></a>
<a href=\"https://nodepositcasino.org/disclaimer\"><img src=\"https://nodepositcasino.org/img/FooterImages/18_woo.png\" alt=\"disclaimer\"></a>
<a href=\"https://www.begambleaware.org/\"><img src=\"https://nodepositcasino.org/img/FooterImages/begambleaware_logo.png\" alt=\"be gamble aware\"></a>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/new_no_deposit_bonus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  89 => 18,  83 => 16,  81 => 15,  77 => 14,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
</head>
<body>
<h2>New No Deposit Has Arrived</h2>
<p>Bonus Amount:{{ bonus.symbol }} {{ bonus.maxbonusshow }}</p>
{% if(bonus.code|length > 0) %}
    <p>Bonus Code: {{ bonus.code }}</p>
{% endif %}
{% if users_country!=null and not bonus.restrictedcountries.contains(users_country) and not bonus.casino.countries.contains(users_country) %}
    <p>Players from {{ users_country.name }} allowed</p>
{% endif %}
<p>WR: {{ bonus.wr }}</p>
<p style=\"font-size: 8px\" >{{ bonus.extraIntable|raw }}</p>
{% if bonus.tcurl|length>0 %}
    <p style=\"font-size: 8px\"><a href=\"{{ bonus.tcurl|raw }}\">T&C</a></p>
{% endif %}
<p>Copyright © 2019 Nodepositcaisno.org. All rights reserved.
    Is gambling a problem for you? Visit our help page <a href=\"https://nodepositcasino.org/gamblinghelp\">here</a>.
    If you don't want to receive this email, please unsubscribe <a href=\"https://nodepositcasino.org/unsubscribe?user_token={{ user.id }} \">here</a>.
    Contact us <a href=\"https://nodepositcasino.org/contact/\">here</a>.
</p>
<a href=\"http://www.gamcare.org.uk\"><img src=\"https://nodepositcasino.org/img/FooterImages/gamecare_woo.png\" alt=\"gamcare\"></a>
<a href=\"https://nodepositcasino.org/disclaimer\"><img src=\"https://nodepositcasino.org/img/FooterImages/18_woo.png\" alt=\"disclaimer\"></a>
<a href=\"https://www.begambleaware.org/\"><img src=\"https://nodepositcasino.org/img/FooterImages/begambleaware_logo.png\" alt=\"be gamble aware\"></a>
</body>
</html>", "emails/new_no_deposit_bonus.html.twig", "/var/www/ndc_new/templates/emails/new_no_deposit_bonus.html.twig");
    }
}
