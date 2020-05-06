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

/* User/register_form.html.twig */
class __TwigTemplate_8ada72d4b149239854839c11ae218fce2a7f1602ff0cbab84d868ab3d83ea860 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/register_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/register_form.html.twig"));

        // line 1
        echo " <div class=\"modal fade\" id=\"registerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tclose\" data-dismiss=\"modal\"></div>
        <div class='modal-dialog-inner'>
            <h3>Register Your Account</h3>
            <div class=\"form-group\">
                <input aria-label='Username *' placeholder='Username *' type='text' name='reg_username' id='reg_username' value='";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "'/>
            </div>
            <div class=\"form-group\">
                <input aria-label='Email *' placeholder='Email *' type='text' name='reg_email' id='reg_email' value='";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "' />
            </div>
            <div class=\"form-group\">
                <input aria-label='Password *' placeholder='Password *' type='password' name='reg_password' id='reg_password'/>
            </div>
            <div class=\"form-group\">
                <input aria-label='Confirm Password *' placeholder='Confirm Password *' type='password' name='reg_password2' id='reg_password2'/>
            </div>
            <p id='register_error'></p>
            <div class=\"form-group\">
                <button id='registerbutton' class='btn btn-primary btn-shadow'>Register</button>
            </div>
            <div class=\"form-group form-group-checkbox terms-checkbox\">
                <input id=\"reg_terms\" type=\"checkbox\" name=\"reg_terms\" required>
                <label for=\"reg_terms\">I agree with No Deposit Casino <a href='/terms-and-conditions'>Terms&Conditions</a></label>
                <p id='terms_error' class=\"form-error\">Please accept Terms&Conditions to register</p>
            </div>
            <div class=\"form-group form-group-checkbox\">
                <input id=\"reg_newsletter\" type=\"checkbox\" name=\"reg_newsletter\">
                <label for=\"reg_newsletter\">
                    Receive Weekly Newsletter<br/>
                    <small>Our newsletter contains the latest no deposit offers and codes.</small>
                </label>
            </div>
            <div class=\"social-log\">
                <div class='social-text'>or Register With Your Social Media Account</div>
                <div class='social'>
                    <li>
                        <a class='s-facebook' href='";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 38, $this->source); })()), "loginUrl", [], "any", false, false, false, 38), "html", null, true);
        echo "' aria-label=\"facebook\"><i class='fab fa-facebook-f' aria-hidden='true'></i></a>
                    </li>
                    <li>
                        <div class=\"g-signin2 s-gplus\" ";
        // line 41
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "data-onsuccess=\"onSignIn\"";
        }
        echo "></div>
                    </li>
                    <li>
                        <a class='s-twitter' href='";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 44, $this->source); })()), "url", [], "any", false, false, false, 44), "html", null, true);
        echo "' aria-label=\"twitter\"><i class='fab fa-twitter' aria-hidden='true'></i></a>
                    </li>
                </div>
            </div>
            <p class='login-register'>Already a User? <a href='#' data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#loginModal\">Log In</a>
            </p>
        </div>
    </div>
 </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "User/register_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 44,  94 => 41,  88 => 38,  57 => 10,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <div class=\"modal fade\" id=\"registerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tclose\" data-dismiss=\"modal\"></div>
        <div class='modal-dialog-inner'>
            <h3>Register Your Account</h3>
            <div class=\"form-group\">
                <input aria-label='Username *' placeholder='Username *' type='text' name='reg_username' id='reg_username' value='{{ name }}'/>
            </div>
            <div class=\"form-group\">
                <input aria-label='Email *' placeholder='Email *' type='text' name='reg_email' id='reg_email' value='{{ email }}' />
            </div>
            <div class=\"form-group\">
                <input aria-label='Password *' placeholder='Password *' type='password' name='reg_password' id='reg_password'/>
            </div>
            <div class=\"form-group\">
                <input aria-label='Confirm Password *' placeholder='Confirm Password *' type='password' name='reg_password2' id='reg_password2'/>
            </div>
            <p id='register_error'></p>
            <div class=\"form-group\">
                <button id='registerbutton' class='btn btn-primary btn-shadow'>Register</button>
            </div>
            <div class=\"form-group form-group-checkbox terms-checkbox\">
                <input id=\"reg_terms\" type=\"checkbox\" name=\"reg_terms\" required>
                <label for=\"reg_terms\">I agree with No Deposit Casino <a href='/terms-and-conditions'>Terms&Conditions</a></label>
                <p id='terms_error' class=\"form-error\">Please accept Terms&Conditions to register</p>
            </div>
            <div class=\"form-group form-group-checkbox\">
                <input id=\"reg_newsletter\" type=\"checkbox\" name=\"reg_newsletter\">
                <label for=\"reg_newsletter\">
                    Receive Weekly Newsletter<br/>
                    <small>Our newsletter contains the latest no deposit offers and codes.</small>
                </label>
            </div>
            <div class=\"social-log\">
                <div class='social-text'>or Register With Your Social Media Account</div>
                <div class='social'>
                    <li>
                        <a class='s-facebook' href='{{socialregister.loginUrl}}' aria-label=\"facebook\"><i class='fab fa-facebook-f' aria-hidden='true'></i></a>
                    </li>
                    <li>
                        <div class=\"g-signin2 s-gplus\" {% if not is_granted('IS_AUTHENTICATED_FULLY') %}data-onsuccess=\"onSignIn\"{% endif %}></div>
                    </li>
                    <li>
                        <a class='s-twitter' href='{{socialregister.url}}' aria-label=\"twitter\"><i class='fab fa-twitter' aria-hidden='true'></i></a>
                    </li>
                </div>
            </div>
            <p class='login-register'>Already a User? <a href='#' data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#loginModal\">Log In</a>
            </p>
        </div>
    </div>
 </div>", "User/register_form.html.twig", "/var/www/ndc_new/templates/User/register_form.html.twig");
    }
}
