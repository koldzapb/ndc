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

/* User/update_form.html.twig */
class __TwigTemplate_f173ef50df09da9ff63595dc1ac81c21cb479665368664881485c4db366fd431 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/update_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/update_form.html.twig"));

        // line 1
        echo "<div class='modal-dialog-inner'>
    <h3>Edit Your Personal Info</h3>
    <form id='updateform' action='' method='post' enctype='multipart/form-data' >
        <div class=\"form-group\">
            <div class='updateImage' style=\"background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "imagelocation", [], "any", false, false, false, 5), "html", null, true);
        echo "'); background-position: center;\">
                <input type='file' name='userimage' class='upload' style='margin-bottom:0;  '/>
            </div>
        </div>
        <div class=\"form-group\">
            <input aria-label='Username *' placeholder='Username *' type='text' name='reg_username' id='update_username' value='";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
        echo "'/>
        </div>
        <div class=\"form-group\">
            <input aria-label='Email *' placeholder='Email *' type='text' name='reg_email' id='update_email' value='";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "email", [], "any", false, false, false, 13), "html", null, true);
        echo "' />
        </div>
        <div class=\"form-group\">
            <select class='gender' name='gender'>
                <option label='Male' ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "male", [], "any", false, false, false, 17) == 1)) {
            echo " ";
            echo "selected";
            echo " ";
        }
        echo " > Male </option>
                <option label='Female' ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "male", [], "any", false, false, false, 18) != 1)) {
            echo " ";
            echo "selected";
            echo " ";
        }
        echo " > Female </option>
            </select>
        </div>
        <p id='update_error'></p>
        <div class=\"form-group form-group-checkbox\">
            <input class='regular-checkbox' type='checkbox' name='reg_newsletter_update'  id='reg_newsletter_update' ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "newsletter", [], "any", false, false, false, 23) == 1)) {
            echo " ";
            echo "checked";
        }
        echo " />
            <label for=\"reg_newsletter_update\">I Would Like To Receive Newsletter Update & New No Deposit Alerts</label>
        </div>
        <div class=\"buttons-holder\">
            <input type='submit' name='submit' value='save changes' class=\"btn btn-primary btn-shadow\">
            <input id='cancel_update' type='submit' name='submit' value='cancel changes' class='btn btn-light btn-shadow'>
        </div>
    </form>
    <p class=\"login-register\"> To change your password click <a href='#'> Here </a> </p>
</div>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "User/update_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  78 => 18,  70 => 17,  63 => 13,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='modal-dialog-inner'>
    <h3>Edit Your Personal Info</h3>
    <form id='updateform' action='' method='post' enctype='multipart/form-data' >
        <div class=\"form-group\">
            <div class='updateImage' style=\"background-image: url('{{ app.user.imagelocation }}'); background-position: center;\">
                <input type='file' name='userimage' class='upload' style='margin-bottom:0;  '/>
            </div>
        </div>
        <div class=\"form-group\">
            <input aria-label='Username *' placeholder='Username *' type='text' name='reg_username' id='update_username' value='{{ app.user.username }}'/>
        </div>
        <div class=\"form-group\">
            <input aria-label='Email *' placeholder='Email *' type='text' name='reg_email' id='update_email' value='{{ app.user.email }}' />
        </div>
        <div class=\"form-group\">
            <select class='gender' name='gender'>
                <option label='Male' {% if(app.user.male == 1) %} {{ 'selected' }} {% endif %} > Male </option>
                <option label='Female' {% if(app.user.male != 1) %} {{ 'selected' }} {% endif %} > Female </option>
            </select>
        </div>
        <p id='update_error'></p>
        <div class=\"form-group form-group-checkbox\">
            <input class='regular-checkbox' type='checkbox' name='reg_newsletter_update'  id='reg_newsletter_update' {% if(app.user.newsletter == 1) %} {{ 'checked' }}{% endif %} />
            <label for=\"reg_newsletter_update\">I Would Like To Receive Newsletter Update & New No Deposit Alerts</label>
        </div>
        <div class=\"buttons-holder\">
            <input type='submit' name='submit' value='save changes' class=\"btn btn-primary btn-shadow\">
            <input id='cancel_update' type='submit' name='submit' value='cancel changes' class='btn btn-light btn-shadow'>
        </div>
    </form>
    <p class=\"login-register\"> To change your password click <a href='#'> Here </a> </p>
</div>



", "User/update_form.html.twig", "/var/www/ndc_new/templates/User/update_form.html.twig");
    }
}
