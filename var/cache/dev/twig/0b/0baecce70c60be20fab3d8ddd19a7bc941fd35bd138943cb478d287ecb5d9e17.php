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

/* user.html.twig */
class __TwigTemplate_37287a44ceee70e142125f2ce083931795b976d27bb5eab5e80ebb869a2a3d29 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_follow' => [$this, 'block_meta_follow'],
            'bodyheader' => [$this, 'block_bodyheader'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_meta_follow($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_follow"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_follow"));

        echo "noindex, nofollow";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_bodyheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        // line 8
        echo "
        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\"></div><!--/.ad-line-->
                <div class=\"user-profile\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "imagelocation", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"user-profile-image\" width=\"160\" height=\"160\"/>
                    <div class=\"user-profile-info\">
                        <h1>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>
                        <ul class=\"user-profile-list\">
                            <li>
                                <a class=\"likes-user\" href=\"#\"  onclick=\"return false;\" data-usertobeliked=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "\" >
                                    <span class=\"btn-like\"></span>
                                    ";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "otheruserslikes", [], "any", false, false, false, 20)), "html", null, true);
        echo "
                                    ";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "otheruserslikes", [], "any", false, false, false, 21)) == 1)) {
            // line 22
            echo "                                        ";
            echo "Like";
            echo "
                                    ";
        } else {
            // line 24
            echo "                                        ";
            echo "Likes";
            echo "
                                    ";
        }
        // line 26
        echo "                                </a>
                            </li>
                            <li>
                                <a class=\"comment-user scroll-to-link\" href=\"#comments-list\">
                                    <span class=\"btn-comment\"></span>
                                    ";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "receivedcomments", [], "any", false, false, false, 31)), "html", null, true);
        echo "
                                    ";
        // line 32
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "receivedcomments", [], "any", false, false, false, 32)) == 1)) {
            // line 33
            echo "                                        ";
            echo "comment";
            echo "
                                    ";
        } else {
            // line 35
            echo "                                        ";
            echo "comments";
            echo "
                                    ";
        }
        // line 37
        echo "                                </a><!--/.comments-->
                            </li>
                        </ul>
                    </div>
                </div><!--/.title-line-->
                <div class=\"user-profile-details\">
                    <div class=\"dr\">
                        <span class=\"icon\"></span>
                        Date of Registration:<span class=\"text\">";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "timejoined", [], "any", false, false, false, 45), "M d,y H:m"), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"sl\">
                        <span class=\"icon\"></span>
                        Submitted Likes:<span class=\"text\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["casinoLikesNumber"]) || array_key_exists("casinoLikesNumber", $context) ? $context["casinoLikesNumber"] : (function () { throw new RuntimeError('Variable "casinoLikesNumber" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"sc\">
                        <span class=\"icon\"></span>
                        Submitted Comments:<span class=\"text\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["casinoPostsNumber"]) || array_key_exists("casinoPostsNumber", $context) ? $context["casinoPostsNumber"] : (function () { throw new RuntimeError('Variable "casinoPostsNumber" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>

                </div>


            </div><!--/.wrap-->
        </div><!--/#content-header-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 65
        echo "            <!-- START MAIN CONTENT-->
            <div class=\"user-profile-content container\">
                <div class=\"user-profile-comments\">
                    <div class=\"text-center\">
                        <p class=\"comments-count\">
                            <span>
                                ";
        // line 71
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "receivedcomments", [], "any", false, false, false, 71)), "html", null, true);
        echo "
                                ";
        // line 72
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "receivedcomments", [], "any", false, false, false, 72)) == 1)) {
            // line 73
            echo "                                    ";
            echo "comment";
            echo "
                                ";
        } else {
            // line 75
            echo "                                    ";
            echo "comments";
            echo "
                                ";
        }
        // line 77
        echo "                            </span>
                        </p>
                        ";
        // line 79
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 80
            echo "                            ";
            $context["modal"] = "#registerModal";
            // line 81
            echo "                        ";
        } else {
            // line 82
            echo "                            ";
            $context["modal"] = "#post-comment-form";
            // line 83
            echo "                        ";
        }
        // line 84
        echo "                        <a href=\"#\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"";
        echo twig_escape_filter($this->env, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "\" onclick=\"({url:'/usercomment?userid=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84), "html", null, true);
        echo "'});return false;\"  class=\"btn btn-orange-outline\">Post a comment</a>
                    </div>

                    <div class=\"user-comment-list\" id=\"comments-list\">
                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 89
            echo "                            <div class=\"user-comment-item\">
                                <a href=\"/user/";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 90), "userwhoposts", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 90), "userwhoposts", [], "any", false, false, false, 90), "username", [], "any", false, false, false, 90), "html", null, true);
            echo "/\" class=\"user-comment-image\">
                                    <img src=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 91), "userwhoposts", [], "any", false, false, false, 91), "imagelocation", [], "any", false, false, false, 91), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 91), "userwhoposts", [], "any", false, false, false, 91), "username", [], "any", false, false, false, 91), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
                                </a>
                                <div class=\"user-comment-content\">
                                    <a class=\"user-comment-username\" href=\"/user/";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 94), "userwhoposts", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 94), "userwhoposts", [], "any", false, false, false, 94), "username", [], "any", false, false, false, 94), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 94), "userwhoposts", [], "any", false, false, false, 94), "username", [], "any", false, false, false, 94), "html", null, true);
            echo "</a><time>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], 1, [], "array", false, false, false, 94), "d/m/Y"), "html", null, true);
            echo "</time>
                                    <p>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 95), "content", [], "any", false, false, false, 95), "html", null, true);
            echo "</p>
                                    <div class=\"reply\">
                                        <a href=\"#\" class=\"reply-btn\"><span class=\"icon\"></span>Reply</a>
                                        <textarea class=\"reply-content\" data-commentid=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
            echo "\" ></textarea>
                                        <button class=\"reply-button btn btn-orange-outline btn-small\" >Submit</button>
                                    </div>
                                    <div class=\"remove\">
                                        ";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 102), "id", [], "any", true, true, false, 102) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 102), "userwhoposts", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102)))) {
                // line 103
                echo "                                            <a href=\"\" onclick=\"return false;\" comment=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 103), "id", [], "any", false, false, false, 103), "html", null, true);
                echo "\">Remove</a>
                                        ";
            }
            // line 105
            echo "                                    </div>
                                </div>
                                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], 0, [], "array", false, false, false, 107), "replies", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                // line 108
                echo "                                    <div class=\"user-comment-item reply-item\">
                                        <a href=\"/user/";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "id", [], "any", false, false, false, 109), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reply"], "user", [], "any", false, false, false, 109), "username", [], "any", false, false, false, 109), "html", null, true);
                echo "/\" class=\"user-comment-image\">
                                            <img src=\"";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reply"], "user", [], "any", false, false, false, 110), "imagelocation", [], "any", false, false, false, 110), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reply"], "user", [], "any", false, false, false, 110), "username", [], "any", false, false, false, 110), "html", null, true);
                echo "\" width=\"50\" height=\"50\">
                                        </a>
                                        <div class=\"user-comment-content\">
                                            <a class=\"user-comment-username\" href=\"/user/";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reply"], "user", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reply"], "user", [], "any", false, false, false, 113), "username", [], "any", false, false, false, 113), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reply"], "user", [], "any", false, false, false, 113), "username", [], "any", false, false, false, 113), "html", null, true);
                echo "</a><time>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "timeadded", [], "any", false, false, false, 113), "d/m/Y"), "html", null, true);
                echo "</time>
                                            <p>";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "content", [], "any", false, false, false, 114), "html", null, true);
                echo "</p>
                                            <div class=\"remove\">
                                                ";
                // line 116
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 116), "id", [], "any", true, true, false, 116) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reply"], "user", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116)))) {
                    // line 117
                    echo "                                                    <a href=\"\" onclick=\"return false;\" data-reply=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "id", [], "any", false, false, false, 117), "html", null, true);
                    echo "\">Remove</a>
                                                ";
                }
                // line 119
                echo "                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                    </div>
                </div>
            </div><!--/#content-->
        <!-- END MAIN CONTENT-->

        <div class=\"modal\" id=\"post-comment-form\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"tclose\" data-dismiss=\"modal\"></div>
                <div class='modal-dialog-inner'>
                    <form class='post-comment-form' action='' method='post' onsubmit='return false;'>
                        <input type='hidden' name='wall_id' value=''/>
                        <h3>Post comment to ";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "username", [], "any", false, false, false, 136), "html", null, true);
        echo "</h3>
                        <div class=\"form-group\">
                            <textarea aria-label='Comment' placeholder='Comment' name='post_comment' rows='' cols='' id='postcontent' required></textarea>
                            <div class=\"post-form-error form-error\">Comment should not be blank</div>
                        </div>
                        <input type='submit' value='Post Comment' userid='";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141), "html", null, true);
        echo "' id='commentbutton' class=\"btn btn-primary btn-shadow\" />
                    </form>
                </div>
            </div>
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 141,  393 => 136,  380 => 125,  373 => 123,  364 => 119,  358 => 117,  356 => 116,  351 => 114,  341 => 113,  333 => 110,  327 => 109,  324 => 108,  320 => 107,  316 => 105,  310 => 103,  308 => 102,  301 => 98,  295 => 95,  285 => 94,  277 => 91,  271 => 90,  268 => 89,  264 => 88,  254 => 84,  251 => 83,  248 => 82,  245 => 81,  242 => 80,  240 => 79,  236 => 77,  230 => 75,  224 => 73,  222 => 72,  218 => 71,  210 => 65,  200 => 64,  181 => 53,  174 => 49,  167 => 45,  157 => 37,  151 => 35,  145 => 33,  143 => 32,  139 => 31,  132 => 26,  126 => 24,  120 => 22,  118 => 21,  114 => 20,  109 => 18,  103 => 15,  96 => 13,  89 => 8,  79 => 7,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


    {% block meta_follow %}noindex, nofollow{% endblock %}


    {% block bodyheader %}

        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"ad-line\"></div><!--/.ad-line-->
                <div class=\"user-profile\">
                    <img src=\"{{ user.imagelocation }}\" alt=\"{{ user.username }}\" class=\"user-profile-image\" width=\"160\" height=\"160\"/>
                    <div class=\"user-profile-info\">
                        <h1>{{ user.username }}</h1>
                        <ul class=\"user-profile-list\">
                            <li>
                                <a class=\"likes-user\" href=\"#\"  onclick=\"return false;\" data-usertobeliked=\"{{ user.id }}\" >
                                    <span class=\"btn-like\"></span>
                                    {{ user.otheruserslikes|length }}
                                    {% if(user.otheruserslikes|length ==1) %}
                                        {{ 'Like' }}
                                    {% else %}
                                        {{ 'Likes' }}
                                    {% endif %}
                                </a>
                            </li>
                            <li>
                                <a class=\"comment-user scroll-to-link\" href=\"#comments-list\">
                                    <span class=\"btn-comment\"></span>
                                    {{ user.receivedcomments|length }}
                                    {% if(user.receivedcomments|length ==1) %}
                                        {{ 'comment' }}
                                    {% else %}
                                        {{ 'comments' }}
                                    {% endif %}
                                </a><!--/.comments-->
                            </li>
                        </ul>
                    </div>
                </div><!--/.title-line-->
                <div class=\"user-profile-details\">
                    <div class=\"dr\">
                        <span class=\"icon\"></span>
                        Date of Registration:<span class=\"text\">{{ user.timejoined|date('M d,y H:m') }}</span>
                    </div>
                    <div class=\"sl\">
                        <span class=\"icon\"></span>
                        Submitted Likes:<span class=\"text\">{{ casinoLikesNumber }}</span>
                    </div>
                    <div class=\"sc\">
                        <span class=\"icon\"></span>
                        Submitted Comments:<span class=\"text\">{{ casinoPostsNumber }}</span>
                    </div>

                </div>


            </div><!--/.wrap-->
        </div><!--/#content-header-->
    {% endblock %}


    {% block main %}
            <!-- START MAIN CONTENT-->
            <div class=\"user-profile-content container\">
                <div class=\"user-profile-comments\">
                    <div class=\"text-center\">
                        <p class=\"comments-count\">
                            <span>
                                {{ user.receivedcomments|length }}
                                {% if(user.receivedcomments|length ==1) %}
                                    {{ 'comment' }}
                                {% else %}
                                    {{ 'comments' }}
                                {% endif %}
                            </span>
                        </p>
                        {%  if not is_granted('IS_AUTHENTICATED_FULLY')  %}
                            {% set modal = '#registerModal' %}
                        {% else %}
                            {% set modal = '#post-comment-form'%}
                        {% endif %}
                        <a href=\"#\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"{{ modal }}\" onclick=\"({url:'/usercomment?userid={{ user.id }}'});return false;\"  class=\"btn btn-orange-outline\">Post a comment</a>
                    </div>

                    <div class=\"user-comment-list\" id=\"comments-list\">
                        {% for comment in comments %}
                            <div class=\"user-comment-item\">
                                <a href=\"/user/{{ comment[0].userwhoposts.id }}/{{ comment[0].userwhoposts.username }}/\" class=\"user-comment-image\">
                                    <img src=\"{{ comment[0].userwhoposts.imagelocation }}\" alt=\"{{ comment[0].userwhoposts.username }}\" width=\"50\" height=\"50\">
                                </a>
                                <div class=\"user-comment-content\">
                                    <a class=\"user-comment-username\" href=\"/user/{{ comment[0].userwhoposts.id }}/{{ comment[0].userwhoposts.username }}\">{{ comment[0].userwhoposts.username }}</a><time>{{ comment[1]|date('d/m/Y')  }}</time>
                                    <p>{{ comment[0].content }}</p>
                                    <div class=\"reply\">
                                        <a href=\"#\" class=\"reply-btn\"><span class=\"icon\"></span>Reply</a>
                                        <textarea class=\"reply-content\" data-commentid=\"{{ comment[0].id }}\" ></textarea>
                                        <button class=\"reply-button btn btn-orange-outline btn-small\" >Submit</button>
                                    </div>
                                    <div class=\"remove\">
                                        {% if(app.user.id is defined and app.user.id==comment[0].userwhoposts.id) %}
                                            <a href=\"\" onclick=\"return false;\" comment=\"{{ comment[0].id }}\">Remove</a>
                                        {% endif %}
                                    </div>
                                </div>
                                {% for reply in comment[0].replies %}
                                    <div class=\"user-comment-item reply-item\">
                                        <a href=\"/user/{{ reply.id }}/{{ reply.user.username }}/\" class=\"user-comment-image\">
                                            <img src=\"{{ reply.user.imagelocation }}\" alt=\"{{ reply.user.username }}\" width=\"50\" height=\"50\">
                                        </a>
                                        <div class=\"user-comment-content\">
                                            <a class=\"user-comment-username\" href=\"/user/{{ reply.user.id }}/{{ reply.user.username }}\">{{ reply.user.username }}</a><time>{{ reply.timeadded|date('d/m/Y')  }}</time>
                                            <p>{{ reply.content }}</p>
                                            <div class=\"remove\">
                                                {% if(app.user.id is defined and app.user.id==reply.user.id) %}
                                                    <a href=\"\" onclick=\"return false;\" data-reply=\"{{ reply.id }}\">Remove</a>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div><!--/#content-->
        <!-- END MAIN CONTENT-->

        <div class=\"modal\" id=\"post-comment-form\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"tclose\" data-dismiss=\"modal\"></div>
                <div class='modal-dialog-inner'>
                    <form class='post-comment-form' action='' method='post' onsubmit='return false;'>
                        <input type='hidden' name='wall_id' value=''/>
                        <h3>Post comment to {{ user.username }}</h3>
                        <div class=\"form-group\">
                            <textarea aria-label='Comment' placeholder='Comment' name='post_comment' rows='' cols='' id='postcontent' required></textarea>
                            <div class=\"post-form-error form-error\">Comment should not be blank</div>
                        </div>
                        <input type='submit' value='Post Comment' userid='{{ user.id }}' id='commentbutton' class=\"btn btn-primary btn-shadow\" />
                    </form>
                </div>
            </div>
        </div>

    {% endblock %}", "user.html.twig", "/var/www/ndc_new/templates/user.html.twig");
    }
}
