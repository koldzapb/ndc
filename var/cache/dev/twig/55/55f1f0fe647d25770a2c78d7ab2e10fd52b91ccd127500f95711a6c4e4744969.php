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

/* User/login_form.html.twig */
class __TwigTemplate_34bb7a0da1fb70bf5748224b1a12b48b963ac9f0b6600f4cf6d52f757e473e57 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/login_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/login_form.html.twig"));

        // line 1
        echo "<div class='modal-dialog-inner'>
    <h3>Log In To Your Account</h3>
    <div class=\"form-group\">
        <input aria-label='Username' placeholder='Username' type='text' id='login_username' />
    </div>
    <div class=\"form-group\">
        <input aria-label='Password' placeholder='Password' type='password' id='login_password' />
    </div>
    <p id='login_error'>Invalid username or password</p>
    <div class=\"form-group\">
        <a href=\"#\" class='btn btn-primary btn-shadow' id='loginbutton'>Login </a>
    </div>

    <div class='pass-reset'>Forgot your password?<br> <a href='#'>Reset password</a></div>
    <div class=\"social-log\">
        <div class='social-text'>Log In With Your Social Media Account</div>
        <div class='social'>
            <li>
                <a class='s-facebook' href='";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 19, $this->source); })()), "loginUrl", [], "any", false, false, false, 19), "html", null, true);
        echo "' aria-label=\"facebook\"><i class='fab fa-facebook-f' aria-hidden='true'></i></a>
            </li>
            <li>
                <div class=\"g-signin2 s-gplus\" ";
        // line 22
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "data-onsuccess=\"onSignIn\"";
        }
        echo "></div>
            </li>
            <li>
                <a class='s-twitter' href='";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 25, $this->source); })()), "url", [], "any", false, false, false, 25), "html", null, true);
        echo "' aria-label=\"twitter\"><i class='fab fa-twitter' aria-hidden='true'></i></a>
            </li>
        </div>
    </div>
    <p class='login-register'>Dont Have an Account? <a href='#' onclick='return false;' data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#registerModal\">Register for free</a>
    </p>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "User/login_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  69 => 22,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='modal-dialog-inner'>
    <h3>Log In To Your Account</h3>
    <div class=\"form-group\">
        <input aria-label='Username' placeholder='Username' type='text' id='login_username' />
    </div>
    <div class=\"form-group\">
        <input aria-label='Password' placeholder='Password' type='password' id='login_password' />
    </div>
    <p id='login_error'>Invalid username or password</p>
    <div class=\"form-group\">
        <a href=\"#\" class='btn btn-primary btn-shadow' id='loginbutton'>Login </a>
    </div>

    <div class='pass-reset'>Forgot your password?<br> <a href='#'>Reset password</a></div>
    <div class=\"social-log\">
        <div class='social-text'>Log In With Your Social Media Account</div>
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
    <p class='login-register'>Dont Have an Account? <a href='#' onclick='return false;' data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#registerModal\">Register for free</a>
    </p>
</div>", "User/login_form.html.twig", "/var/www/ndc_new/templates/User/login_form.html.twig");
    }
}
