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

/* user_popups.html.twig */
class __TwigTemplate_0c049e10267b8c8cb5728b3a1d6c8407e3c5b906a9449b7f3b45a60015a4d4c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_popups.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_popups.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "    <div class=\"modal\" id=\"edit-info\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"tclose\" data-dismiss=\"modal\"></div>
            <div class='modal-dialog-inner'>
                <h3>Edit Your Personal Info</h3>
                <form id='updateform' action='' method='post' enctype='multipart/form-data' >
                    <div class=\"form-group\">
                        <div class='updateImage' style=\"background-image: url('";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "imagelocation", [], "any", false, false, false, 9), "html", null, true);
            echo "');  background-position: center;\">
                            <input type='file' name='userimage' class='upload' style='margin-bottom:0;  '/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <input aria-label='Username *' placeholder='Username *' type='text' name='reg_username' id='update_username' value='";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
            echo "'/>
                    </div>
                    <div class=\"form-group\">
                        <input aria-label='Email *' placeholder='Email *' type='text' name='reg_email' id='update_email' value='";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "email", [], "any", false, false, false, 17), "html", null, true);
            echo "' />
                    </div>
                    <div class=\"form-group\">
                        <select class='gender' name='gender'>
                            <option label='Male' ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "male", [], "any", false, false, false, 21) == 1)) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo " > Male </option>
                            <option label='Female' ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "male", [], "any", false, false, false, 22) != 1)) {
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
            // line 27
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "newsletter", [], "any", false, false, false, 27) == 1)) {
                echo " ";
                echo "checked";
            }
            echo " />
                        <label for=\"reg_newsletter_update\">I Would Like To Receive Newsletter Update  & New No Deposit Alerts </label>
                    </div>
                    <div class=\"buttons-holder\">
                        <input type='submit' name='submit' value='save changes' class=\"btn btn-primary btn-shadow\">
                        <input id='cancel_update' type='submit' name='submit' value='cancel changes' class='btn btn-light btn-shadow'>
                    </div>
                </form>
                <div class=\"edit_reset_password_profile\">
                    <p class=\"login-register\"> To change your password click <a id=\"edit_reset_password\" href='#'> Here </a> </p>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 42
        echo "
<div class=\"modal\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tclose\" data-dismiss=\"modal\"></div>

        <div class='modal-dialog-inner'>
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
            <div class=\"reset_password_profile\">
                <p class='pass-reset'>Forgot your password?<br> <a id=\"reset_password\" href='#' onclick=\"return false;\">Reset password</a></p>
            </div>
            <div class=\"social-log\">
                <div class='social-text'>Log In With Your Social Media Account</div>
                <div class='social'>
                    <li>
                        <a class='s-facebook' href='";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 66, $this->source); })()), "loginUrl", [], "any", false, false, false, 66), "html", null, true);
        echo "'  aria-label=\"facebook\"><i class='fab fa-facebook-f' aria-hidden='true'></i></a>
                    </li>
                    <li>
                        <div class=\"g-signin2 s-gplus\" ";
        // line 69
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "data-onsuccess=\"onSignIn\"";
        }
        echo "></div>
                    </li>
                    <li>
                        <a class='s-twitter' href='";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 72, $this->source); })()), "url", [], "any", false, false, false, 72), "html", null, true);
        echo "'  aria-label=\"twitter\"><i class='fab fa-twitter' aria-hidden='true'></i></a>
                    </li>
                </div>
            </div>
            <p class='login-register'>Dont Have an Account? <a href='#' onclick='return false;' data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#registerModal\">Register for free</a>
            </p>
        </div>
    </div>
</div>


<div class=\"modal\" id=\"registerModal\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tclose\" data-dismiss=\"modal\"></div>
        <div class='modal-dialog-inner'>
            <h3>Register Your Account</h3>
            <div class=\"form-group\">
                <input aria-label='Username *' placeholder='Username *' type='text' name='reg_username' id='reg_username' value='' required/>
            </div>
            <div class=\"form-group\">
                <input aria-label='Email *' placeholder='Email *' type='text' name='reg_email' id='reg_email' value='' required/>
            </div>
            <div class=\"form-group\">
                <input aria-label='Password *' placeholder='Password *' type='password' name='reg_password' id='reg_password' required/>
            </div>
            <div class=\"form-group\">
                <input aria-label='Confirm Password *' placeholder='Confirm Password *' type='password' name='reg_password2' id='reg_password2' required/>
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
                    Receive Weekly Newsletter & New No Deposit Alerts<br/>
                    <small>Our newsletter contains the latest no deposit offers and codes.</small>
                </label>
            </div>
            <div class=\"social-log\">
                <div class='social-text'>or Register With Your Social Media Account</div>
                <div class='social'>
                    <li>
                        <a class='s-facebook' href='";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 120, $this->source); })()), "loginUrl", [], "any", false, false, false, 120), "html", null, true);
        echo "' aria-label=\"facebook\"><i class='fab fa-facebook-f' aria-hidden='true'></i></a>
                    </li>
                    <li>
                        <div class=\"g-signin2 s-gplus\"  ";
        // line 123
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "data-onsuccess=\"onSignIn\"";
        }
        echo "></div>
                    </li>
                    <li>
                        <a class='s-twitter' href='";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 126, $this->source); })()), "url", [], "any", false, false, false, 126), "html", null, true);
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
        return "user_popups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 126,  213 => 123,  207 => 120,  156 => 72,  148 => 69,  142 => 66,  116 => 42,  95 => 27,  83 => 22,  75 => 21,  68 => 17,  62 => 14,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <div class=\"modal\" id=\"edit-info\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"tclose\" data-dismiss=\"modal\"></div>
            <div class='modal-dialog-inner'>
                <h3>Edit Your Personal Info</h3>
                <form id='updateform' action='' method='post' enctype='multipart/form-data' >
                    <div class=\"form-group\">
                        <div class='updateImage' style=\"background-image: url('{{ app.user.imagelocation }}');  background-position: center;\">
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
                        <label for=\"reg_newsletter_update\">I Would Like To Receive Newsletter Update  & New No Deposit Alerts </label>
                    </div>
                    <div class=\"buttons-holder\">
                        <input type='submit' name='submit' value='save changes' class=\"btn btn-primary btn-shadow\">
                        <input id='cancel_update' type='submit' name='submit' value='cancel changes' class='btn btn-light btn-shadow'>
                    </div>
                </form>
                <div class=\"edit_reset_password_profile\">
                    <p class=\"login-register\"> To change your password click <a id=\"edit_reset_password\" href='#'> Here </a> </p>
                </div>
            </div>
        </div>
    </div>
{% endif %}

<div class=\"modal\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tclose\" data-dismiss=\"modal\"></div>

        <div class='modal-dialog-inner'>
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
            <div class=\"reset_password_profile\">
                <p class='pass-reset'>Forgot your password?<br> <a id=\"reset_password\" href='#' onclick=\"return false;\">Reset password</a></p>
            </div>
            <div class=\"social-log\">
                <div class='social-text'>Log In With Your Social Media Account</div>
                <div class='social'>
                    <li>
                        <a class='s-facebook' href='{{socialregister.loginUrl}}'  aria-label=\"facebook\"><i class='fab fa-facebook-f' aria-hidden='true'></i></a>
                    </li>
                    <li>
                        <div class=\"g-signin2 s-gplus\" {% if not is_granted('IS_AUTHENTICATED_FULLY') %}data-onsuccess=\"onSignIn\"{% endif %}></div>
                    </li>
                    <li>
                        <a class='s-twitter' href='{{socialregister.url}}'  aria-label=\"twitter\"><i class='fab fa-twitter' aria-hidden='true'></i></a>
                    </li>
                </div>
            </div>
            <p class='login-register'>Dont Have an Account? <a href='#' onclick='return false;' data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#registerModal\">Register for free</a>
            </p>
        </div>
    </div>
</div>


<div class=\"modal\" id=\"registerModal\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tclose\" data-dismiss=\"modal\"></div>
        <div class='modal-dialog-inner'>
            <h3>Register Your Account</h3>
            <div class=\"form-group\">
                <input aria-label='Username *' placeholder='Username *' type='text' name='reg_username' id='reg_username' value='' required/>
            </div>
            <div class=\"form-group\">
                <input aria-label='Email *' placeholder='Email *' type='text' name='reg_email' id='reg_email' value='' required/>
            </div>
            <div class=\"form-group\">
                <input aria-label='Password *' placeholder='Password *' type='password' name='reg_password' id='reg_password' required/>
            </div>
            <div class=\"form-group\">
                <input aria-label='Confirm Password *' placeholder='Confirm Password *' type='password' name='reg_password2' id='reg_password2' required/>
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
                    Receive Weekly Newsletter & New No Deposit Alerts<br/>
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
                        <div class=\"g-signin2 s-gplus\"  {% if not is_granted('IS_AUTHENTICATED_FULLY') %}data-onsuccess=\"onSignIn\"{% endif %}></div>
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
</div>", "user_popups.html.twig", "/var/www/ndc_new/templates/user_popups.html.twig");
    }
}
