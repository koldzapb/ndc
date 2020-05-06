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

/* Post/usercommentform.html.twig */
class __TwigTemplate_2ce050cbcf248e3f7431d2645f32ef7827dfa78d1af47770c8657feed6fd09a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Post/usercommentform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Post/usercommentform.html.twig"));

        // line 1
        echo "<div class='modal-dialog-inner'>
    <form class='post-comment-form' action='' method='post' onsubmit='return false;'>
        <input type='hidden' name='wall_id' value=''/>
        <h3>Post comment to ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userreceiver"]) || array_key_exists("userreceiver", $context) ? $context["userreceiver"] : (function () { throw new RuntimeError('Variable "userreceiver" does not exist.', 4, $this->source); })()), "username", [], "any", false, false, false, 4), "html", null, true);
        echo "</h3>
        <div class=\"form-group\">
            <textarea aria-label='Comment' placeholder='Comment' name='post_comment' rows='' cols='' id='postcontent' required></textarea>
            <div class=\"post-form-error form-error\">Comment should not be blank</div>
        </div>
        <input type='submit' value='Post Comment' userid='";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userreceiver"]) || array_key_exists("userreceiver", $context) ? $context["userreceiver"] : (function () { throw new RuntimeError('Variable "userreceiver" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "' id='commentbutton' />
    </form>
</div>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Post/usercommentform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='modal-dialog-inner'>
    <form class='post-comment-form' action='' method='post' onsubmit='return false;'>
        <input type='hidden' name='wall_id' value=''/>
        <h3>Post comment to {{ userreceiver.username }}</h3>
        <div class=\"form-group\">
            <textarea aria-label='Comment' placeholder='Comment' name='post_comment' rows='' cols='' id='postcontent' required></textarea>
            <div class=\"post-form-error form-error\">Comment should not be blank</div>
        </div>
        <input type='submit' value='Post Comment' userid='{{ userreceiver.id }}' id='commentbutton' />
    </form>
</div>




", "Post/usercommentform.html.twig", "/var/www/ndc_new/templates/Post/usercommentform.html.twig");
    }
}
