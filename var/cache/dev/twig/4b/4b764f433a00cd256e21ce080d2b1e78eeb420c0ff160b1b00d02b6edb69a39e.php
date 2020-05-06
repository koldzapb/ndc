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

/* header.html.twig */
class __TwigTemplate_7fdb566a90ce1c40ae3fe4390e937bd197ca3f68be88bc40e335495039ef11fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header class=\"header\">
    <div class=\"container header-container\">
        <div class=\"row wrap no-gutters\">

            <div class=\"col-lg-2 col-md-3 col-sm-4 col headerMobileColumn\">
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                    <div class=\"header-logo\">
                        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo.svg"), "html", null, true);
        echo "\" alt=\"No Deposit Casinos\" width=\"162\" height=\"42\" />
                    </div>
                </a>
            </div>

            <div class=\"col-xl-5 col-lg-6 col-md-5 d-none d-lg-block\">
                <nav class=\"navbar\" id=\"nav-menu-desktop\">
                    <ul class=\"menu\">
                        <li class=\"m-regular m-home bordernav\" data-page=\"Index\"><a href=\"/\" class=\"m-regular-link\">Home</a></li>
                        <li class=\"m-regular\" data-page=\"Casinos\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casinos");
        echo "\" class=\"m-regular-link\">Casinos</a></li>
                        <li class=\"m-regular dropdown\" data-page=\"No Deposits By\" >
                            <a class=\"m-regular-link dropdown-toggle\">No Deposits By</a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"dropdown dropdown-item\">
                                    <a> Country</a>
                                    <ul class=\"dropdown-menu dropdown-submenu\">
                                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countrylist"]) || array_key_exists("countrylist", $context) ? $context["countrylist"] : (function () { throw new RuntimeError('Variable "countrylist" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 25
            echo "                                            <li>
                                                <a  href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bonusesforcountry", ["slug" => twig_get_attribute($this->env, $this->source, $context["country"], "slug", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">
                                                    ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "countryname", [], "any", false, false, false, 27), "html", null, true);
            echo "
                                                </a>
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                                    </ul>
                                </li>
                                <li class=\"dropdown dropdown-item\">
                                    <a> Software</a>
                                    <ul class=\"dropdown-menu dropdown-submenu\">
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["softwareslist"]) || array_key_exists("softwareslist", $context) ? $context["softwareslist"] : (function () { throw new RuntimeError('Variable "softwareslist" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["software"]) {
            // line 37
            echo "                                            <li>
                                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bonusesforsoftware", ["slug" => twig_get_attribute($this->env, $this->source, $context["software"], "slug", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">
                                                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "anchorname", [], "any", false, false, false, 39), "html", null, true);
            echo "
                                                </a>
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['software'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                                    </ul>
                                </li>
                                <li class=\"dropdown dropdown-item\">
                                    <a> Game</a>
                                    <ul class=\"dropdown-menu dropdown-submenu\">
                                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gameslist"]) || array_key_exists("gameslist", $context) ? $context["gameslist"] : (function () { throw new RuntimeError('Variable "gameslist" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 49
            echo "                                            <li>
                                                <a  href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bonusesbygametype", ["gametype" => twig_get_attribute($this->env, $this->source, $context["game"], "slug", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
                                                    ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "game", [], "any", false, false, false, 51), "html", null, true);
            echo "
                                                </a>
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                    </ul>
                                </li>
                                ";
        // line 57
        if ((twig_length_filter($this->env, (isset($context["bonusesbyvalue"]) || array_key_exists("bonusesbyvalue", $context) ? $context["bonusesbyvalue"] : (function () { throw new RuntimeError('Variable "bonusesbyvalue" does not exist.', 57, $this->source); })())) > 0)) {
            // line 58
            echo "                                    <li class=\"dropdown dropdown-item\">
                                        <a> Amount</a>
                                        <ul class=\"dropdown-menu dropdown-submenu\">
                                            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bonusesbyvalue"]) || array_key_exists("bonusesbyvalue", $context) ? $context["bonusesbyvalue"] : (function () { throw new RuntimeError('Variable "bonusesbyvalue" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bonval"]) {
                // line 62
                echo "                                                <li>
                                                    <a  href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bonuses_by_value", ["slug" => twig_get_attribute($this->env, $this->source, $context["bonval"], "slug", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\">
                                                        ";
                // line 64
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["bonval"], "value", [], "any", false, false, false, 64) . twig_get_attribute($this->env, $this->source, $context["bonval"], "symbol", [], "any", false, false, false, 64)) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonval"], "bonustype", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64)), "html", null, true);
                echo "
                                                    </a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bonval'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                        </ul>
                                    </li>
                                ";
        }
        // line 71
        echo "                            </ul>
                        </li>
                        <li class=\"m-regular\" data-page=\"Articles\"><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\" class=\"m-regular-link\">Articles</a></li>
                        <li class=\"m-regular\" data-page=\"News\"><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\" class=\"m-regular-link\">News</a></li>
                    </ul>
                </nav>
            </div>




            <div class=\"col-xl-3 col-md-7 col-sm-4 col-lg-2 d-none d-sm-block \">
                <form action=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"post\"  id=\"search\" class=\"desktopSearch\">
                    <input value=\" \" type=\"submit\">
                    <input type=\"text\" name=\"search_query\" data-search=\"q\" aria-label=\"Search for a Casino\" placeholder=\"Search for a Casino\"/>
                </form>
            </div>

            <div class=\"col-xl-2 col-md-2 no-gutters col-sm-4 col\">
                <nav id=\"menu-user\">
                    <ul>
                        <li>
                            <a href=\"#search-collapse\" class=\"mobileSearch\" data-toggle=\"collapse\" aria-label=\"collapse\"></a>
                        </li>
                        ";
        // line 95
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 96
            echo "                        <li>
                            <a href=\"#\" data-toggle=\"modal\" class=\"loginMobile\" data-target=\"#loginModal\" data-original-title=\"login mobile\" aria-label=\"login mobile\"></a>
                        </li>
                        ";
        }
        // line 100
        echo "
                        ";
        // line 101
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 102
            echo "                            <li class=\"loginDesktop m-home m-regular\">
                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\">Login</a>
                            </li>

                            <li class=\"registerDesktop m-home m-regular register-link\">
                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#registerModal\">Register</a>
                            </li>
                        ";
        } else {
            // line 110
            echo "                            <li class=\"m-regular profile-dropdown\">
                                <a href=\"\"  data-toggle=\"collapse\" data-target=\"#profile-collapse\">Profile
                                    <i class=\"fa fa-caret-down caret-profile\" aria-hidden=\"true\"></i>
                                </a>
                                <div id=\"profile-collapse\" class=\" collapse dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"/profile\">View profile</a>
                                    <a class=\"dropdown-item\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#edit-info\" href=\"\" onclick=\"({url:'/userinformationinitiate' });return false;\">Adjust account</a>
                                    <a class=\"dropdown-item\" onclick=\"signOut();\" href=\"/logout\">Logout</a>
                                </div>
                            </li>
                        ";
        }
        // line 121
        echo "                        <li>
                            <a class=\"mobile-toggle\" href=\"\"  id=\"menu-icon\" data-toggle=\"collapse\" data-target=\"#nav-menu-mobile\">&#9776;</a>
                        </li>
                    </ul>
                    <div id=\"search-collapse\" class=\"toggle-container collapse\">
                        <form action=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"post\" id =\"searchMobile\">
                            <input value=\" \" type=\"submit\">
                            <input type=\"text\" name=\"search_query\"  placeholder=\"Search for a Casino\" class=\"ui-autocomplete-input\" autocomplete=\"off\" role=\"textbox\" aria-autocomplete=\"list\" aria-haspopup=\"true\"/>
                        </form>
                    </div>

                </nav><!--/#menu-user-->
            </div>

            <nav id =\"nav-menu-mobile\"  class=\"toggle-container collapse col-sm-12 navbar\">
                <ul class=\"menu navbar-nav\">
                    <li class=\"bordernav m-regular m-home\" data-page=\"Index\"><a href=\"/\">Home</a></li>
                    <li class=\"bordernav m-regular\" data-page=\"Casinos\"><a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casinos");
        echo "\">Casinos</a></li>
                    <li class=\"bordernav m-regular dropdown\" data-page=\"No Deposits By\" >
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">No Deposits By </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"dropdown-submenu\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"> Country</a>
                                <ul class=\"dropdown-menu secondmenu\">
                                    <li>  ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countrylist"]) || array_key_exists("countrylist", $context) ? $context["countrylist"] : (function () { throw new RuntimeError('Variable "countrylist" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 146
            echo "                                            <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bonusesforcountry", ["slug" => twig_get_attribute($this->env, $this->source, $context["country"], "slug", [], "any", false, false, false, 146)]), "html", null, true);
            echo "\">
                                                ";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "countryname", [], "any", false, false, false, 147), "html", null, true);
            echo "
                                            </a>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown-submenu\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"> Software</a>
                                <ul class=\"dropdown-menu secondmenu\">
                                    <li>
                                        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["softwareslist"]) || array_key_exists("softwareslist", $context) ? $context["softwareslist"] : (function () { throw new RuntimeError('Variable "softwareslist" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["software"]) {
            // line 158
            echo "                                            <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bonusesforsoftware", ["slug" => twig_get_attribute($this->env, $this->source, $context["software"], "slug", [], "any", false, false, false, 158)]), "html", null, true);
            echo "\">
                                                ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["software"], "anchorname", [], "any", false, false, false, 159), "html", null, true);
            echo "
                                            </a>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['software'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                                    </li>
                                </ul>
                            </li>

                            <li class=\"dropdown-submenu\">
                                <a class=\"dropdown-item dropdown-toggle removeBorder\"  href=\"#\" data-toggle=\"dropdown\"> Game</a>

                                <ul class=\"dropdown-menu secondmenu\">
                                    <li>
                                        ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gameslist"]) || array_key_exists("gameslist", $context) ? $context["gameslist"] : (function () { throw new RuntimeError('Variable "gameslist" does not exist.', 171, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 172
            echo "                                            <a class=\"dropdown-item\"  href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bonusesbygametype", ["gametype" => twig_get_attribute($this->env, $this->source, $context["game"], "slug", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\">
                                                ";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "game", [], "any", false, false, false, 173), "html", null, true);
            echo "
                                            </a>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"bordernav m-regular\" data-page=\"Articles\"><a href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\">Articles</a></li>
                    <li class=\"bordernav m-regular\" data-page=\"News\"><a href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">News</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header><!--/#header-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 182,  375 => 181,  368 => 176,  359 => 173,  354 => 172,  350 => 171,  339 => 162,  330 => 159,  325 => 158,  321 => 157,  312 => 150,  303 => 147,  298 => 146,  294 => 145,  284 => 138,  269 => 126,  262 => 121,  249 => 110,  239 => 102,  237 => 101,  234 => 100,  228 => 96,  226 => 95,  211 => 83,  199 => 74,  195 => 73,  191 => 71,  186 => 68,  176 => 64,  172 => 63,  169 => 62,  165 => 61,  160 => 58,  158 => 57,  154 => 55,  144 => 51,  140 => 50,  137 => 49,  133 => 48,  126 => 43,  116 => 39,  112 => 38,  109 => 37,  105 => 36,  98 => 31,  88 => 27,  84 => 26,  81 => 25,  77 => 24,  67 => 17,  55 => 8,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
    <div class=\"container header-container\">
        <div class=\"row wrap no-gutters\">

            <div class=\"col-lg-2 col-md-3 col-sm-4 col headerMobileColumn\">
                <a href=\"{{ path('index') }}\">
                    <div class=\"header-logo\">
                        <img src=\"{{ asset('/img/logo.svg') }}\" alt=\"No Deposit Casinos\" width=\"162\" height=\"42\" />
                    </div>
                </a>
            </div>

            <div class=\"col-xl-5 col-lg-6 col-md-5 d-none d-lg-block\">
                <nav class=\"navbar\" id=\"nav-menu-desktop\">
                    <ul class=\"menu\">
                        <li class=\"m-regular m-home bordernav\" data-page=\"Index\"><a href=\"/\" class=\"m-regular-link\">Home</a></li>
                        <li class=\"m-regular\" data-page=\"Casinos\"><a href=\"{{ path('casinos') }}\" class=\"m-regular-link\">Casinos</a></li>
                        <li class=\"m-regular dropdown\" data-page=\"No Deposits By\" >
                            <a class=\"m-regular-link dropdown-toggle\">No Deposits By</a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"dropdown dropdown-item\">
                                    <a> Country</a>
                                    <ul class=\"dropdown-menu dropdown-submenu\">
                                        {% for country in countrylist %}
                                            <li>
                                                <a  href=\"{{ path('bonusesforcountry',{slug:country.slug}) }}\">
                                                    {{ country.countryname }}
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </li>
                                <li class=\"dropdown dropdown-item\">
                                    <a> Software</a>
                                    <ul class=\"dropdown-menu dropdown-submenu\">
                                        {% for software in softwareslist %}
                                            <li>
                                                <a href=\"{{ path('bonusesforsoftware',{slug:software.slug}) }}\">
                                                    {{  software.anchorname }}
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </li>
                                <li class=\"dropdown dropdown-item\">
                                    <a> Game</a>
                                    <ul class=\"dropdown-menu dropdown-submenu\">
                                        {% for game in gameslist %}
                                            <li>
                                                <a  href=\"{{ path('bonusesbygametype',{gametype:game.slug}) }}\">
                                                    {{  game.game }}
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </li>
                                {% if bonusesbyvalue|length > 0 %}
                                    <li class=\"dropdown dropdown-item\">
                                        <a> Amount</a>
                                        <ul class=\"dropdown-menu dropdown-submenu\">
                                            {% for bonval in bonusesbyvalue %}
                                                <li>
                                                    <a  href=\"{{ path('bonuses_by_value',{slug:bonval.slug}) }}\">
                                                        {{  bonval.value~bonval.symbol~' '~bonval.bonustype.name }}
                                                    </a>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </li>
                                {% endif %}
                            </ul>
                        </li>
                        <li class=\"m-regular\" data-page=\"Articles\"><a href=\"{{ path('articles') }}\" class=\"m-regular-link\">Articles</a></li>
                        <li class=\"m-regular\" data-page=\"News\"><a href=\"{{ path('news') }}\" class=\"m-regular-link\">News</a></li>
                    </ul>
                </nav>
            </div>




            <div class=\"col-xl-3 col-md-7 col-sm-4 col-lg-2 d-none d-sm-block \">
                <form action=\"{{ path('search') }}\" method=\"post\"  id=\"search\" class=\"desktopSearch\">
                    <input value=\" \" type=\"submit\">
                    <input type=\"text\" name=\"search_query\" data-search=\"q\" aria-label=\"Search for a Casino\" placeholder=\"Search for a Casino\"/>
                </form>
            </div>

            <div class=\"col-xl-2 col-md-2 no-gutters col-sm-4 col\">
                <nav id=\"menu-user\">
                    <ul>
                        <li>
                            <a href=\"#search-collapse\" class=\"mobileSearch\" data-toggle=\"collapse\" aria-label=\"collapse\"></a>
                        </li>
                        {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li>
                            <a href=\"#\" data-toggle=\"modal\" class=\"loginMobile\" data-target=\"#loginModal\" data-original-title=\"login mobile\" aria-label=\"login mobile\"></a>
                        </li>
                        {% endif %}

                        {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                            <li class=\"loginDesktop m-home m-regular\">
                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\">Login</a>
                            </li>

                            <li class=\"registerDesktop m-home m-regular register-link\">
                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#registerModal\">Register</a>
                            </li>
                        {% else %}
                            <li class=\"m-regular profile-dropdown\">
                                <a href=\"\"  data-toggle=\"collapse\" data-target=\"#profile-collapse\">Profile
                                    <i class=\"fa fa-caret-down caret-profile\" aria-hidden=\"true\"></i>
                                </a>
                                <div id=\"profile-collapse\" class=\" collapse dropdown-menu dropdown-menu-right\">
                                    <a class=\"dropdown-item\" href=\"/profile\">View profile</a>
                                    <a class=\"dropdown-item\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#edit-info\" href=\"\" onclick=\"({url:'/userinformationinitiate' });return false;\">Adjust account</a>
                                    <a class=\"dropdown-item\" onclick=\"signOut();\" href=\"/logout\">Logout</a>
                                </div>
                            </li>
                        {% endif %}
                        <li>
                            <a class=\"mobile-toggle\" href=\"\"  id=\"menu-icon\" data-toggle=\"collapse\" data-target=\"#nav-menu-mobile\">&#9776;</a>
                        </li>
                    </ul>
                    <div id=\"search-collapse\" class=\"toggle-container collapse\">
                        <form action=\"{{ path('search') }}\" method=\"post\" id =\"searchMobile\">
                            <input value=\" \" type=\"submit\">
                            <input type=\"text\" name=\"search_query\"  placeholder=\"Search for a Casino\" class=\"ui-autocomplete-input\" autocomplete=\"off\" role=\"textbox\" aria-autocomplete=\"list\" aria-haspopup=\"true\"/>
                        </form>
                    </div>

                </nav><!--/#menu-user-->
            </div>

            <nav id =\"nav-menu-mobile\"  class=\"toggle-container collapse col-sm-12 navbar\">
                <ul class=\"menu navbar-nav\">
                    <li class=\"bordernav m-regular m-home\" data-page=\"Index\"><a href=\"/\">Home</a></li>
                    <li class=\"bordernav m-regular\" data-page=\"Casinos\"><a href=\"{{ path('casinos') }}\">Casinos</a></li>
                    <li class=\"bordernav m-regular dropdown\" data-page=\"No Deposits By\" >
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">No Deposits By </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"dropdown-submenu\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"> Country</a>
                                <ul class=\"dropdown-menu secondmenu\">
                                    <li>  {% for country in countrylist %}
                                            <a class=\"dropdown-item\" href=\"{{ path('bonusesforcountry',{slug:country.slug}) }}\">
                                                {{ country.countryname }}
                                            </a>
                                        {% endfor %}
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown-submenu\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"> Software</a>
                                <ul class=\"dropdown-menu secondmenu\">
                                    <li>
                                        {% for software in softwareslist %}
                                            <a class=\"dropdown-item\" href=\"{{ path('bonusesforsoftware',{slug:software.slug}) }}\">
                                                {{  software.anchorname }}
                                            </a>
                                        {% endfor %}
                                    </li>
                                </ul>
                            </li>

                            <li class=\"dropdown-submenu\">
                                <a class=\"dropdown-item dropdown-toggle removeBorder\"  href=\"#\" data-toggle=\"dropdown\"> Game</a>

                                <ul class=\"dropdown-menu secondmenu\">
                                    <li>
                                        {% for game in gameslist %}
                                            <a class=\"dropdown-item\"  href=\"{{ path('bonusesbygametype',{gametype:game.slug}) }}\">
                                                {{  game.game }}
                                            </a>
                                        {% endfor %}
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"bordernav m-regular\" data-page=\"Articles\"><a href=\"{{ path('articles') }}\">Articles</a></li>
                    <li class=\"bordernav m-regular\" data-page=\"News\"><a href=\"{{ path('news') }}\">News</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header><!--/#header-->", "header.html.twig", "/var/www/ndc_new/templates/header.html.twig");
    }
}
