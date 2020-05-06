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

/* security/adminlogin.html.twig */
class __TwigTemplate_4386b7636262a895f6d748ef6db2633298549ee0fce15920f3a07f948ed612bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html.twig"));

        // line 1
        echo "

<form class=\"form-style-4\" action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminlogin");
        echo "\" method=\"post\">
    <label for=\"username\">
        <span>Enter Your Username:</span><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" required=\"true\" />
    </label>
    <br>


    <label for=\"password\">
        <span>Enter Your Password:</span><input type=\"password\" id=\"password\" name=\"_password\" required=\"true\"  />
    </label>
    <br>

    <label>
        <span>&nbsp;</span><input type=\"submit\" value=\"Login\" />
    </label>
</form>


";
        // line 21
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "    <div style=\"text-align: center\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "messageKey", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "messageData", [], "any", false, false, false, 22), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 24
        echo "


<style type=\"text/css\">




    .form-style-4{
        width: 450px;
        font-size: 16px;
        background: #495C70;
        padding: 30px 30px 15px 30px;
        border: 5px solid #53687E;
        margin: auto auto;
    }
    .form-style-4 input[type=submit],
    .form-style-4 input[type=button],
    .form-style-4 input[type=text],
    .form-style-4 input[type=email],
    .form-style-4 textarea,
    .form-style-4 label
    {
        font-family: Georgia, \"Times New Roman\", Times, serif;
        font-size: 16px;
        color: #fff;

    }
    .form-style-4 label {
        display:block;
        margin-bottom: 10px;
    }
    .form-style-4 label > span{
        display: inline-block;
        float: left;
        width: 150px;
    }
    .form-style-4 input[type=text],
    .form-style-4 input[type=email]
    {
        background: transparent;
        border: none;
        border-bottom: 1px dashed #83A4C5;
        width: 275px;
        outline: none;
        padding: 0px 0px 0px 0px;
        font-style: italic;
    }
    .form-style-4 textarea{
        font-style: italic;
        padding: 0px 0px 0px 0px;
        background: transparent;
        outline: none;
        border: none;
        border-bottom: 1px dashed #83A4C5;
        width: 275px;
        overflow: hidden;
        resize:none;
        height:20px;
    }

    .form-style-4 textarea:focus,
    .form-style-4 input[type=text]:focus,
    .form-style-4 input[type=email]:focus,
    .form-style-4 input[type=email] :focus
    {
        border-bottom: 1px dashed #D9FFA9;
    }

    .form-style-4 input[type=submit],
    .form-style-4 input[type=button]{
        background: #576E86;
        border: none;
        padding: 8px 10px 8px 10px;
        border-radius: 5px;
        color: #A8BACE;
    }
    .form-style-4 input[type=submit]:hover,
    .form-style-4 input[type=button]:hover{
        background: #394D61;
    }
</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/adminlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  73 => 22,  71 => 21,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<form class=\"form-style-4\" action=\"{{ path('adminlogin') }}\" method=\"post\">
    <label for=\"username\">
        <span>Enter Your Username:</span><input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"true\" />
    </label>
    <br>


    <label for=\"password\">
        <span>Enter Your Password:</span><input type=\"password\" id=\"password\" name=\"_password\" required=\"true\"  />
    </label>
    <br>

    <label>
        <span>&nbsp;</span><input type=\"submit\" value=\"Login\" />
    </label>
</form>


{% if error %}
    <div style=\"text-align: center\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}



<style type=\"text/css\">




    .form-style-4{
        width: 450px;
        font-size: 16px;
        background: #495C70;
        padding: 30px 30px 15px 30px;
        border: 5px solid #53687E;
        margin: auto auto;
    }
    .form-style-4 input[type=submit],
    .form-style-4 input[type=button],
    .form-style-4 input[type=text],
    .form-style-4 input[type=email],
    .form-style-4 textarea,
    .form-style-4 label
    {
        font-family: Georgia, \"Times New Roman\", Times, serif;
        font-size: 16px;
        color: #fff;

    }
    .form-style-4 label {
        display:block;
        margin-bottom: 10px;
    }
    .form-style-4 label > span{
        display: inline-block;
        float: left;
        width: 150px;
    }
    .form-style-4 input[type=text],
    .form-style-4 input[type=email]
    {
        background: transparent;
        border: none;
        border-bottom: 1px dashed #83A4C5;
        width: 275px;
        outline: none;
        padding: 0px 0px 0px 0px;
        font-style: italic;
    }
    .form-style-4 textarea{
        font-style: italic;
        padding: 0px 0px 0px 0px;
        background: transparent;
        outline: none;
        border: none;
        border-bottom: 1px dashed #83A4C5;
        width: 275px;
        overflow: hidden;
        resize:none;
        height:20px;
    }

    .form-style-4 textarea:focus,
    .form-style-4 input[type=text]:focus,
    .form-style-4 input[type=email]:focus,
    .form-style-4 input[type=email] :focus
    {
        border-bottom: 1px dashed #D9FFA9;
    }

    .form-style-4 input[type=submit],
    .form-style-4 input[type=button]{
        background: #576E86;
        border: none;
        padding: 8px 10px 8px 10px;
        border-radius: 5px;
        color: #A8BACE;
    }
    .form-style-4 input[type=submit]:hover,
    .form-style-4 input[type=button]:hover{
        background: #394D61;
    }
</style>", "security/adminlogin.html.twig", "/var/www/ndc_new/templates/security/adminlogin.html.twig");
    }
}
