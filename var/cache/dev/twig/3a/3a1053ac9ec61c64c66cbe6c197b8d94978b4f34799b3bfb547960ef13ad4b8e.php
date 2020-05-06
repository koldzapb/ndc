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

/* base.html.twig */
class __TwigTemplate_9a80c3df13f969017dfbf13bc3e605fc3c7c0f189caf44d63c185b934b2f0122 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'ogtitle' => [$this, 'block_ogtitle'],
            'ogdescription' => [$this, 'block_ogdescription'],
            'metakeywords' => [$this, 'block_metakeywords'],
            'meta_follow' => [$this, 'block_meta_follow'],
            'bodyheader' => [$this, 'block_bodyheader'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'commonjs' => [$this, 'block_commonjs'],
            'mainSchemaParameters' => [$this, 'block_mainSchemaParameters'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if IE 7]><html class=\"no-js ie ie7 ie8m\" lang=\"en\"><![endif]-->
<!--[if IE 8]><html class=\"no-js ie ie8 ie8m\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"no-js ie ie9\" lang=\"en\" ><![endif]-->
<!--[if !IE]><!--><html class=\"no-js\" lang=\"en\"><!--<![endif]-->

    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "
    <body class=\"";
        // line 37
        echo twig_escape_filter($this->env, (((isset($context["bodyclass"]) || array_key_exists("bodyclass", $context))) ? (_twig_default_filter((isset($context["bodyclass"]) || array_key_exists("bodyclass", $context) ? $context["bodyclass"] : (function () { throw new RuntimeError('Variable "bodyclass" does not exist.', 37, $this->source); })()), "template-page")) : ("template-page")), "html", null, true);
        echo "\" >

    <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-PS2HV78\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
            <div id=\"fb-root\"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=1945076775524520&autoLogAppEvents=1';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>

            <div id=\"jqtoast-tr\" class=\"freeow freeow-top-right\"></div>
            <div id=\"jqtoast-br\" class=\"freeow freeow-bottom-right\"></div>
            <!--[if lt IE 7]><p class=\"chromeframe\">Your browser is <em>ancient!</em> <a href=\"//browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"//www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

            <div id=\"welcomeDiv\" class=\"alertBox\">
                <div class=\"welcomeDivBox\">
                    <span class=\"alertLike\"></span>
                    <span id='alert'></span>
                </div>
            </div>

            <div id=\"unlikeAlert\" class=\"alertBox\">
                <span class=\"alertUnlike\"></span>
                <span id='alert2'></span>
            </div>


            <div class=\"header-holder ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fullimagelink", [], "any", true, true, false, 71) && (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 71, $this->source); })()), "fullimagelink", [], "any", false, false, false, 71) != null))) {
            echo "cover-image-header";
        }
        echo "\">
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::header"));
        // line 75
        echo "
                ";
        // line 76
        $this->displayBlock('bodyheader', $context, $blocks);
        // line 77
        echo "            </div><!--/.header-holder-->

            <div class=\"main-container\"><!-- START MAIN CONTENT-->
                ";
        // line 80
        $this->displayBlock('main', $context, $blocks);
        // line 81
        echo "            </div><!-- END MAIN CONTENT-->


            ";
        // line 84
        $this->displayBlock('footer', $context, $blocks);
        // line 93
        echo "
            ";
        // line 94
        $this->displayBlock('commonjs', $context, $blocks);
        // line 120
        echo "
            ";
        // line 121
        $this->displayBlock('mainSchemaParameters', $context, $blocks);
        // line 135
        echo "
            ";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", true, true, false, 136) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 136, $this->source); })()), "navigation", [], "any", false, false, false, 136)) > 0))) {
            // line 137
            echo "                <script>
                    \$(document).ready(function() {
                        \$(\"[data-page=";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 139, $this->source); })()), "navigation", [], "any", false, false, false, 139), "html", null, true);
            echo "]\").addClass(\"active\");
                    });
                </script>
            ";
        }
        // line 143
        echo "
            ";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        // line 146
        echo "
        </body>
</html>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 8
        echo "        <head>
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-PS2HV78');</script>
            <!-- End Google Tag Manager -->
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <meta name=\"description\" content=\"";
        // line 18
        $this->displayBlock('metaDescription', $context, $blocks);
        echo " \"/>
            <meta property=\"og:title\" content=\"";
        // line 19
        $this->displayBlock('ogtitle', $context, $blocks);
        echo "\" />
            ";
        // line 20
        if ((isset($context["page"]) || array_key_exists("page", $context))) {
            echo "<meta property=\"og:description\" content=\"";
            $this->displayBlock('ogdescription', $context, $blocks);
            echo "\" />";
        }
        // line 21
        echo "            <meta name=\"keywords\" content=\"";
        $this->displayBlock('metakeywords', $context, $blocks);
        echo "\"/>
            <meta property=\"og:url\" content=\" ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "uri", [], "any", false, false, false, 22), "html", null, true);
        echo "\" />
            <meta property=\"og:type\" content=\"website\" />
            <meta property=\"og:image\" content=\"https://nodepositcasino.org/public/img/ndc-logo.png\" />
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
            <meta name=\"robots\" content=\"";
        // line 26
        $this->displayBlock('meta_follow', $context, $blocks);
        echo "\" />
            <meta name=\"google-signin-client_id\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["new_google_client_id"]) || array_key_exists("new_google_client_id", $context) ? $context["new_google_client_id"] : (function () { throw new RuntimeError('Variable "new_google_client_id" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\">
            <link rel=\"canonical\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "uri", [], "any", false, false, false, 28), "html", null, true);
        echo "\" />
            <link rel=\"icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ndc_favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
            <link rel=\"shortcut icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ndc_favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
            <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500|Roboto:400,500,700\" rel=\"stylesheet\">
            <!--[if lt IE 7]><link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ie-old.css"), "html", null, true);
        echo "\"><![endif]-->
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\">
        </head>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatitle", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatitle", [], "any", false, false, false, 17), "No Deposit Casino")) : ("No Deposit Casino"))]), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metadescription", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metadescription", [], "any", false, false, false, 18), "No Deposit Casino")) : ("No Deposit Casino"))]), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatitle", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatitle", [], "any", false, false, false, 19), "No Deposit Casino")) : ("No Deposit Casino"))]), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_ogdescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogdescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogdescription"));

        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })()), "metadescription", [], "any", false, false, false, 20)]), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_metakeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metakeywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metakeywords"));

        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metakeywords", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metakeywords", [], "any", false, false, false, 21), "No Deposit Casino")) : ("No Deposit Casino"))]), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_meta_follow($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_follow"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_follow"));

        echo "all";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_bodyheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyheader"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 85
        echo "                ";
        if ((isset($context["page"]) || array_key_exists("page", $context))) {
            // line 86
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::footer", ["page" =>             // line 88
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 88, $this->source); })())]));
            // line 90
            echo "
                ";
        }
        // line 92
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_commonjs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commonjs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commonjs"));

        // line 95
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ouibounce/ouibounce.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"https://apis.google.com/js/platform.js\" async defer></script>
                <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google_sign_in.js"), "html", null, true);
        echo "\" async defer></script>

                <!--[if (gte IE 6)&(lte IE 8)]><script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/selectivizr.js"), "html", null, true);
        echo "\"></script><![endif]-->
                <script>
                    (function (d, t) {
                        var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
                        bh.type=\"text/javascript\";
                        bh.src=\"//www.bugherd.com/sidebarv2.js?apikey=dsqpjvcppyf4uqahqbcdja\";
                        s.parentNode.insertBefore(bh, s);
                    })(document, \"script\");
                </script>

                <script type=\"application/ld+json\">
                {
                  \"@context\": \"http://schema.org/\",
                  \"@type\": \"Organization\",
                  \"name\": \"No Deposit Casino\",
                  \"url\": \"https://nodepositcasino.org/\",
                  \"logo\": \"https://nodepositcasino.org/img/logo.png\"
                }
                </script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_mainSchemaParameters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainSchemaParameters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainSchemaParameters"));

        // line 122
        echo "                <script type=\"application/ld+json\">
                {
                    \"@context\": \"http://schema.org\",
                    \"@type\": \"WebPage\",
                    \"name\": \"";
        // line 126
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatitle", [], "any", true, true, false, 126)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatitle", [], "any", false, false, false, 126), "No Deposit Casino")) : ("No Deposit Casino"))]), "html", null, true);
        echo "\",
                    \"description\": \"";
        // line 127
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('shortCodes')->getCallable(), [((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metadescription", [], "any", true, true, false, 127)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metadescription", [], "any", false, false, false, 127), "No Deposit Casino")) : ("No Deposit Casino"))]), "html", null, true);
        echo "\",
                    \"publisher\": {
                        \"@type\": \"Organization\",
                        \"name\": \"No Deposit Casino\"
                    }
                }
                </script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 145,  543 => 144,  525 => 127,  521 => 126,  515 => 122,  505 => 121,  475 => 100,  470 => 98,  466 => 97,  460 => 95,  450 => 94,  440 => 92,  436 => 90,  434 => 88,  432 => 86,  429 => 85,  419 => 84,  401 => 80,  383 => 76,  364 => 26,  345 => 21,  326 => 20,  307 => 19,  288 => 18,  269 => 17,  256 => 33,  252 => 32,  247 => 30,  243 => 29,  239 => 28,  235 => 27,  231 => 26,  224 => 22,  219 => 21,  213 => 20,  209 => 19,  205 => 18,  201 => 17,  190 => 8,  180 => 7,  164 => 146,  162 => 144,  159 => 143,  152 => 139,  148 => 137,  146 => 136,  143 => 135,  141 => 121,  138 => 120,  136 => 94,  133 => 93,  131 => 84,  126 => 81,  124 => 80,  119 => 77,  117 => 76,  114 => 75,  112 => 72,  106 => 71,  69 => 37,  66 => 36,  64 => 7,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<!--[if IE 7]><html class=\"no-js ie ie7 ie8m\" lang=\"en\"><![endif]-->
<!--[if IE 8]><html class=\"no-js ie ie8 ie8m\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"no-js ie ie9\" lang=\"en\" ><![endif]-->
<!--[if !IE]><!--><html class=\"no-js\" lang=\"en\"><!--<![endif]-->

    {% block head %}
        <head>
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-PS2HV78');</script>
            <!-- End Google Tag Manager -->
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            <title>{% block title %}{{ page.metatitle|default('No Deposit Casino')|shortCodes }}{% endblock %}</title>
            <meta name=\"description\" content=\"{% block metaDescription %}{{ page.metadescription|default('No Deposit Casino')|shortCodes }}{% endblock %} \"/>
            <meta property=\"og:title\" content=\"{% block ogtitle %}{{ page.metatitle|default('No Deposit Casino')|shortCodes }}{% endblock %}\" />
            {%if page is defined %}<meta property=\"og:description\" content=\"{% block ogdescription %}{{ page.metadescription|shortCodes }}{% endblock %}\" />{% endif %}
            <meta name=\"keywords\" content=\"{% block metakeywords %}{{ page.metakeywords|default('No Deposit Casino')|shortCodes }}{% endblock %}\"/>
            <meta property=\"og:url\" content=\" {{ app.request.uri  }}\" />
            <meta property=\"og:type\" content=\"website\" />
            <meta property=\"og:image\" content=\"https://nodepositcasino.org/public/img/ndc-logo.png\" />
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
            <meta name=\"robots\" content=\"{% block meta_follow %}all{% endblock %}\" />
            <meta name=\"google-signin-client_id\" content=\"{{ new_google_client_id }}\">
            <link rel=\"canonical\" href=\"{{ app.request.uri }}\" />
            <link rel=\"icon\" href=\"{{ asset('ndc_favicon.ico') }}\" type=\"image/x-icon\"/>
            <link rel=\"shortcut icon\" href=\"{{ asset('ndc_favicon.ico') }}\" type=\"image/x-icon\"/>
            <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500|Roboto:400,500,700\" rel=\"stylesheet\">
            <!--[if lt IE 7]><link rel=\"stylesheet\" href=\"{{ asset('css/ie-old.css') }}\"><![endif]-->
            <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\">
        </head>
    {% endblock %}

    <body class=\"{{ bodyclass|default('template-page') }}\" >

    <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-PS2HV78\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
            <div id=\"fb-root\"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=1945076775524520&autoLogAppEvents=1';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>

            <div id=\"jqtoast-tr\" class=\"freeow freeow-top-right\"></div>
            <div id=\"jqtoast-br\" class=\"freeow freeow-bottom-right\"></div>
            <!--[if lt IE 7]><p class=\"chromeframe\">Your browser is <em>ancient!</em> <a href=\"//browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"//www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

            <div id=\"welcomeDiv\" class=\"alertBox\">
                <div class=\"welcomeDivBox\">
                    <span class=\"alertLike\"></span>
                    <span id='alert'></span>
                </div>
            </div>

            <div id=\"unlikeAlert\" class=\"alertBox\">
                <span class=\"alertUnlike\"></span>
                <span id='alert2'></span>
            </div>


            <div class=\"header-holder {% if page.fullimagelink is defined and page.fullimagelink != null %}cover-image-header{% endif %}\">
                {{ render(controller(
                    'App\\\\Controller\\\\TemplateController::header'
                    ))
                }}
                {% block bodyheader %}{% endblock %}
            </div><!--/.header-holder-->

            <div class=\"main-container\"><!-- START MAIN CONTENT-->
                {% block main %}{% endblock %}
            </div><!-- END MAIN CONTENT-->


            {% block footer %}
                {%if page is defined %}
                    {{ render(controller(
                        'App\\\\Controller\\\\TemplateController::footer',
                            { 'page':page }
                        ))
                    }}
                {% endif %}
            {% endblock %}

            {% block commonjs %}
                <script src=\"{{ asset('js/ouibounce/ouibounce.min.js') }}\"></script>
                <script src=\"https://apis.google.com/js/platform.js\" async defer></script>
                <script src=\"{{ asset('build/app.js') }}\"></script>
                <script src=\"{{ asset('js/google_sign_in.js') }}\" async defer></script>

                <!--[if (gte IE 6)&(lte IE 8)]><script src=\"{{ asset('js/selectivizr.js') }}\"></script><![endif]-->
                <script>
                    (function (d, t) {
                        var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
                        bh.type=\"text/javascript\";
                        bh.src=\"//www.bugherd.com/sidebarv2.js?apikey=dsqpjvcppyf4uqahqbcdja\";
                        s.parentNode.insertBefore(bh, s);
                    })(document, \"script\");
                </script>

                <script type=\"application/ld+json\">
                {
                  \"@context\": \"http://schema.org/\",
                  \"@type\": \"Organization\",
                  \"name\": \"No Deposit Casino\",
                  \"url\": \"https://nodepositcasino.org/\",
                  \"logo\": \"https://nodepositcasino.org/img/logo.png\"
                }
                </script>
            {% endblock %}

            {% block mainSchemaParameters %}
                <script type=\"application/ld+json\">
                {
                    \"@context\": \"http://schema.org\",
                    \"@type\": \"WebPage\",
                    \"name\": \"{{ page.metatitle|default('No Deposit Casino')|shortCodes }}\",
                    \"description\": \"{{ page.metadescription|default('No Deposit Casino')|shortCodes }}\",
                    \"publisher\": {
                        \"@type\": \"Organization\",
                        \"name\": \"No Deposit Casino\"
                    }
                }
                </script>
            {% endblock %}

            {% if(page.navigation is defined and page.navigation|length > 0) %}
                <script>
                    \$(document).ready(function() {
                        \$(\"[data-page={{ page.navigation }}]\").addClass(\"active\");
                    });
                </script>
            {% endif %}

            {% block javascripts %}
            {% endblock %}

        </body>
</html>



", "base.html.twig", "/var/www/ndc_new/templates/base.html.twig");
    }
}
