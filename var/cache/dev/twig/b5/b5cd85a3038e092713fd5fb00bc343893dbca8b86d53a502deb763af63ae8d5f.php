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

/* Post/postform.html.twig */
class __TwigTemplate_e1b9b58ec20a2a1dfcef65a8f3060845e3ca8f57c571890304f6ee4da907be40 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Post/postform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Post/postform.html.twig"));

        // line 1
        echo "<div class=\"modal\" id=\"post-form-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tclose\" data-dismiss=\"modal\"></div>
        <div class='modal-dialog-inner'>
            <form class='post-comment-form' action='' method='post' onsubmit='return false;'>
                <h3>Post comment to ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 6, $this->source); })()), "casinoname", [], "any", false, false, false, 6), "html", null, true);
        echo "
                    <a href=''>Post</a>
                </h3>
                <div class=\"form-group\">
                    <textarea aria-label='Comment' placeholder='Comment' name='post_comment' rows='' cols='' id='postcontent' ></textarea>
                    <div class=\"post-form-error form-error\">Comment should not be blank</div>
                </div>
                <input type='submit' value='Post Comment' casinoid='";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casino"]) || array_key_exists("casino", $context) ? $context["casino"] : (function () { throw new RuntimeError('Variable "casino" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "' id='postbutton' class=\"btn btn-primary btn-shadow\" />
                <p class='clear'></p>
            </form>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Post/postform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" id=\"post-form-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tclose\" data-dismiss=\"modal\"></div>
        <div class='modal-dialog-inner'>
            <form class='post-comment-form' action='' method='post' onsubmit='return false;'>
                <h3>Post comment to {{ casino.casinoname }}
                    <a href=''>Post</a>
                </h3>
                <div class=\"form-group\">
                    <textarea aria-label='Comment' placeholder='Comment' name='post_comment' rows='' cols='' id='postcontent' ></textarea>
                    <div class=\"post-form-error form-error\">Comment should not be blank</div>
                </div>
                <input type='submit' value='Post Comment' casinoid='{{ casino.id }}' id='postbutton' class=\"btn btn-primary btn-shadow\" />
                <p class='clear'></p>
            </form>
        </div>
    </div>
</div>", "Post/postform.html.twig", "/var/www/ndc_new/templates/Post/postform.html.twig");
    }
}
