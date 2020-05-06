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

/* join_content.html.twig */
class __TwigTemplate_0e8010c8e090cc8f48c26c9a62b73d40ab6bb424399495b04a43ab97ef824c42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "join_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "join_content.html.twig"));

        // line 1
        echo "<div class=\"join-content\">
    <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-5\" aria-label=\"Scroll to Join form\">
        <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
    </a>

    <div class=\"container-small\">
        <h2 class=\"h1\" id=\"button-link-5\">Join Today it's Free</h2>
        <p class=\"join-descr\">We will let you know when we discover new no deposit bonuses<br> and receive our newsletter with exclusive bonuses every week.</p>
        <form class=\"join-form d-md-flex justify-content-center\">
            <div class=\"form-group\">
                <input aria-label=\"Your Name\" placeholder=\"Your Name\" type=\"text\" id=\"news_name\">
            </div>
            <div class=\"form-group\">
                <input aria-label=\"Email Address\" placeholder=\"Email Address\" type=\"email\" required id=\"news_email\">
            </div>
            <div class=\"form-group\">
                <a href=\"#\" id=\"join_button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#registerModal\"  onclick=\"return false;\">Join NOW</a>
            </div>
        </form>
        <div class=\"d-md-flex justify-content-between align-items-center text-md-left\">
            <div class=\"shareLinks\">
                <h3 class=\"join-subheadline\">Join Instantly With Your Social Account</h3>
                <div class=\"g-plus\" data-action=\"share\" data-href=\"https://www.nodepositcasino.org\"></div>
                <div class=\"fb-like\" data-href=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "uri", [], "any", false, false, false, 24), "html", null, true);
        echo "\" data-layout=\"standard\" data-action=\"like\" data-size=\"small\" data-show-faces=\"true\" data-share=\"true\"></div>
            </div>
            <ul class=\"social no-list\">
                <li>
                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 28, $this->source); })()), "loginUrl", [], "any", false, false, false, 28), "html", null, true);
        echo "\" class=\"s-facebook\" aria-label=\"facebook\">
                        <i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 33, $this->source); })()), "url", [], "any", false, false, false, 33), "html", null, true);
        echo "\" class=\"s-twitter\" aria-label=\"twitter\">
                        <i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>
                    </a>
                </li>
                <li>
                    <div class=\"g-signin2 s-gplus\" ";
        // line 38
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "data-onsuccess=\"onSignIn\"";
        }
        echo "></div>
                </li>
            </ul>
        </div>
    </div><!--/.wrap-->

</div><!--/.join-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "join_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  83 => 33,  75 => 28,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"join-content\">
    <a class=\"scroll-to-button scroll-to-link\" href=\"#button-link-5\" aria-label=\"Scroll to Join form\">
        <i class=\"fas fa-arrow-down\" aria-hidden=\"true\"></i>
    </a>

    <div class=\"container-small\">
        <h2 class=\"h1\" id=\"button-link-5\">Join Today it's Free</h2>
        <p class=\"join-descr\">We will let you know when we discover new no deposit bonuses<br> and receive our newsletter with exclusive bonuses every week.</p>
        <form class=\"join-form d-md-flex justify-content-center\">
            <div class=\"form-group\">
                <input aria-label=\"Your Name\" placeholder=\"Your Name\" type=\"text\" id=\"news_name\">
            </div>
            <div class=\"form-group\">
                <input aria-label=\"Email Address\" placeholder=\"Email Address\" type=\"email\" required id=\"news_email\">
            </div>
            <div class=\"form-group\">
                <a href=\"#\" id=\"join_button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#registerModal\"  onclick=\"return false;\">Join NOW</a>
            </div>
        </form>
        <div class=\"d-md-flex justify-content-between align-items-center text-md-left\">
            <div class=\"shareLinks\">
                <h3 class=\"join-subheadline\">Join Instantly With Your Social Account</h3>
                <div class=\"g-plus\" data-action=\"share\" data-href=\"https://www.nodepositcasino.org\"></div>
                <div class=\"fb-like\" data-href=\"{{ app.request.uri  }}\" data-layout=\"standard\" data-action=\"like\" data-size=\"small\" data-show-faces=\"true\" data-share=\"true\"></div>
            </div>
            <ul class=\"social no-list\">
                <li>
                    <a href=\"{{ socialregister.loginUrl }}\" class=\"s-facebook\" aria-label=\"facebook\">
                        <i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"{{ socialregister.url }}\" class=\"s-twitter\" aria-label=\"twitter\">
                        <i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>
                    </a>
                </li>
                <li>
                    <div class=\"g-signin2 s-gplus\" {% if not is_granted('IS_AUTHENTICATED_FULLY') %}data-onsuccess=\"onSignIn\"{% endif %}></div>
                </li>
            </ul>
        </div>
    </div><!--/.wrap-->

</div><!--/.join-->", "join_content.html.twig", "/var/www/ndc_new/templates/join_content.html.twig");
    }
}
