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

/* footer.html.twig */
class __TwigTemplate_38888483682d36dd189bd8d0b41e726d318d27b149ea41393952a3270814f261 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "mainfooter1", [], "any", false, false, false, 1) == true)) {
            // line 2
            echo "
    <div class=\"latest-bonus-wrapper\">

        <div class=\"container\">
            <h3>Latest No Deposit Casino Bonuses</h3>
            <div class=\"latest-bonus-slider\">
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["latestbonuses"]) || array_key_exists("latestbonuses", $context) ? $context["latestbonuses"] : (function () { throw new RuntimeError('Variable "latestbonuses" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bonus"]) {
                // line 9
                echo "                <div itemscope itemtype=\"http://schema.org/Offer\">
                    <meta itemprop=\"url\" content='";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casino-review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), "casinoname" => twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 10), "casinoname", [], "any", false, false, false, 10), [" " => "-"])])), "html", null, true);
                echo "' />
                    <meta itemprop=\"name\" content=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "bonustype", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
                echo " Bonus\" />
                    <div class=\"latest-bonus-item\">
                        <div class=\"latest-bonus-top\">
                            <span class=\"box-new\">New!</span>
                            <span class=\"flag\">
                                <img src='";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 16, $this->source); })()), "imgSrc", [], "any", false, false, false, 16), "html", null, true);
                echo "' alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
                echo "\" width=\"16\" height=\"11\">
                            </span>
                            <a href=\"/casino-review/";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 18), "casinoname", [], "any", false, false, false, 18), [" " => "-"]), "html", null, true);
                echo "\">
                                <img class=\"latest-bonus-logo lazyload\" src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lazy-115.png"), "html", null, true);
                echo "\" data-original=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 19), "casinologo", [], "any", false, false, false, 19)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 19), "casinoname", [], "any", false, false, false, 19), "html", null, true);
                echo "\" width=\"115\" height=\"115\" />
                            </a>
                            <p class=\"latest-bonus-comments\">
                                ";
                // line 22
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 22), "posts", [], "any", false, false, false, 22)) > 0)) {
                    // line 23
                    echo "                                    <span class=\"comments\"><span class=\"icon\"></span>";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 23), "posts", [], "any", false, false, false, 23)), "html", null, true);
                    echo " ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 23), "posts", [], "any", false, false, false, 23)) > 1)) {
                        echo "Comments";
                    } else {
                        echo "Comment";
                    }
                    echo "</span>
                                ";
                }
                // line 25
                echo "
                                ";
                // line 26
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 26), "likes", [], "any", false, false, false, 26)) > 0)) {
                    // line 27
                    echo "                                    <span class=\"likes\"><span class=\"icon\"></span>";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 27), "likes", [], "any", false, false, false, 27)), "html", null, true);
                    echo " ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 27), "likes", [], "any", false, false, false, 27)) > 1)) {
                        echo "Likes";
                    } else {
                        echo "Like";
                    }
                    echo "</span>
                                ";
                }
                // line 29
                echo "                            </p>

                        </div>

                        <div class=\"latest-bonus-bottom\" itemscope itemprop=\"seller\" itemtype=\"http://schema.org/Organization\">
                            <meta itemprop=\"name\" content=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 34), "casinoname", [], "any", false, false, false, 34), "html", null, true);
                echo "\" />
                            <meta itemprop=\"url\" content=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)])), "html", null, true);
                echo "\" />
                            <div class=\"casino-bonus\">
                                <span class=\"casino-bonus-amount\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "symbol", [], "any", false, false, false, 37), "html", null, true);
                echo twig_escape_filter($this->env, twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "maxbonus", [], "any", false, false, false, 37), ".")), "html", null, true);
                echo "</span>
                                <p class=\"casino-bonus-name\">
                                        ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "bonustype", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
                echo "
                                </p>
                                ";
                // line 41
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "code", [], "any", false, false, false, 41)) > 0)) {
                    // line 42
                    echo "                                    <p class=\"casino-bonus-code\">Code:
                                        <span>";
                    // line 43
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "code", [], "any", false, false, false, 43), 0, 13), "html", null, true);
                    echo "</span>
                                        <span class=\"code_hover tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\">
                                            <span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "code", [], "any", false, false, false, 45), "html", null, true);
                    echo "</span>
                                        </span>
                                    </p>
                                ";
                }
                // line 49
                echo "                            </div>
                            <div>
                                <a href=\"\" class=\"btn-like tooltip-btn\" data-bonus=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bonus"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"Like\" aria-label=\"Like\" onclick=\"return false;\"></a>
                                <a href=\"/casino-review/";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 52), "casinoname", [], "any", false, false, false, 52), [" " => "-"]), "html", null, true);
                echo "\" class=\"btn-review tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Read Review\" aria-label=\"Read Review\"></a>
                            </div>
                        </div>
                        <a class=\"btn btn-primary\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visit_casino", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bonus"], "casino", [], "any", false, false, false, 55), "casinoname", [], "any", false, false, false, 55), "html", null, true);
                echo "\" rel=\"noopener nofollow\"  target=\"_blank\">
                            ";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56) == "United Kingdom")) {
                    echo "PLAY";
                } else {
                    echo "PLAY NOW";
                }
                // line 57
                echo "                        </a>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bonus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "            </div><!--/.latest-bonus-->
        </div>
    </div><!--/#footer1-->
";
        }
        // line 65
        echo "
";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 66, $this->source); })()), "mainfooter2", [], "any", false, false, false, 66) == true)) {
            // line 67
            echo "    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"footer-top\">

                <ul class=\"footer-social\">
                    <li>
                        <a class=\"facebook\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 73, $this->source); })()), "loginUrl", [], "any", false, false, false, 73), "html", null, true);
            echo "\" aria-label=\"facebook\">
                            <i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i>
                        </a>
                    </li>

                    <li>
                        <a class=\"twitter\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["socialregister"]) || array_key_exists("socialregister", $context) ? $context["socialregister"] : (function () { throw new RuntimeError('Variable "socialregister" does not exist.', 79, $this->source); })()), "url", [], "any", false, false, false, 79), "html", null, true);
            echo "\" aria-label=\"twitter\">
                            <i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>
                        </a>
                    </li>

                    <li>
                        <div class=\"g-signin2 s-gplus\" ";
            // line 85
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                echo "data-onsuccess=\"onSignIn\"";
            }
            echo "></div>
                    </li>
                </ul>


                <nav id=\"menu-footer\">
                    <ul>
                        <li>
                            <a href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\">No Deposit Casinos</a>
                        </li>

                        <li>
                            <a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casinos");
            echo "\">All Casinos</a>
                        </li>

                        <li>
                            <a href=\"/gamblinghelp\">Gambling Help</a>
                        </li>
                    </ul>
                </nav>


                <a class=\"powered-by\" href=\"http://lcb.org/\" rel=\"noopener ";
            // line 107
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", true, true, false, 107) && (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 107, $this->source); })()), "navigation", [], "any", false, false, false, 107) != "Index"))) {
                echo "nofollow";
            }
            echo "\" target=\"_blank\">Powered by <span></span></a>

            </div>


            <div class=\"footer-bottom\">
                <div class=\"footer-bottom-links\">
                    <a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_pages", ["slug" => "privacy"]);
            echo "\">Privacy Policy</a>
                    <a href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_pages", ["slug" => "disclaimer"]);
            echo "\">Disclaimer</a>
                    <a href=\"";
            // line 116
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">Contact Us</a>
                    <a href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_pages", ["slug" => "terms-and-conditions"]);
            echo "\">Terms and Conditions</a>
                </div>
                <div class=\"footer-logos\">
                    <a  href=\"http://www.gamcare.org.uk/\" rel=\"noopener ";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", true, true, false, 120) && (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 120, $this->source); })()), "navigation", [], "any", false, false, false, 120) != "Index"))) {
                echo "nofollow";
            }
            echo "\" target=\"_blank\">
                        <img width=\"40\" height=\"43\" class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/FooterImages/gamecare_woo.png"), "html", null, true);
            echo "\" alt=\"gamcare\">
                    </a>

                    <a href=\"";
            // line 125
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_pages", ["slug" => "disclaimer"]);
            echo "\">
                        <img width=\"40\" height=\"40\" class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/FooterImages/18_woo.png"), "html", null, true);
            echo "\" alt=\"disclaimer\">
                    </a>

                    <a  href=\"https://www.begambleaware.org/\" rel=\"noopener ";
            // line 130
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", true, true, false, 130) && (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 130, $this->source); })()), "navigation", [], "any", false, false, false, 130) != "Index"))) {
                echo "nofollow";
            }
            echo "\" target=\"_blank\">
                        <img width=\"40\" height=\"40\" class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/FooterImages/begambleaware_logo.png"), "html", null, true);
            echo "\" alt=\"beGambleAware\">
                    </a>
                </div>
                <div id=\"copyright\">NoDepositCasino  &copy; 2012- ";
            // line 135
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo ". All Rights Reserved.</div>
                <div class=\"partner-website\"><a href=\"http://www.nodepositbingo.co.uk/\" rel=\"noopener ";
            // line 136
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", true, true, false, 136) && (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 136, $this->source); })()), "navigation", [], "any", false, false, false, 136) != "Index"))) {
                echo "nofollow";
            }
            echo "\" target=\"_blank\">Partner Website <span></span></a></div>

            </div>
        </div>
    </div><!--/#footer-->

";
        }
        // line 143
        echo "
";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TemplateController::userPopups"));
        echo "

<div id=\"cookie-bar\">
    <p>No Deposit Casino uses cookies, this enables us to provide you with a personalised experience
        <a class=\"cookie_bar_more_info\" href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_pages", ["slug" => "privacy"]);
        echo "\"> More info</a>
        <button class=\"hide-cookie-bar btn btn-primary\">Got it!</button>
    </p>
</div>


<div id=\"subscription\" class=\"fadeIn animate\" >
    <span id=\"close_subscription_popup\"  onclick=\"return false;\"></span>
    <div class=\"subscribe-heading\">
        <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/subscribe.png"), "html", null, true);
        echo "\" alt=\"Subscribe\" width=\"107\" height=\"76\" />
        <span> Get The Latest Posts Delivered Directly To Your Inbox! </span>
    </div>
    <div class=\"subscribeDescriptionBox\">
        <p class=\"subscribeDescription\"> Join Over 10,000 B2B Marketers Who Get The Latest Posts On Content Marketing and Growth Hacking Delivered Directly To Their Inbox. </p>
    </div>
    <div class=\"form-group\">
        <input class=\"narrow\" id=\"newsletter_subscription_only\" type=\"email\" required name=\"newsletter_subscription_email\" aria-label=\"Email Address\" placeholder=\"Email Address\">
        <a id=\"newsletter_subscribe\" href=\"\" class=\"btn btn-primary\" onclick=\"return false\">Subscribe</a>
    </div>
    <p class=\"form-error\" id=\"newsletter_subscribe_error\"></p>
    <div class=\"form-group-checkbox\">
        <input id=\"dont_show_again\" type=\"checkbox\" name=\"dontshow\">
        <label for=\"dont_show_again\">Don't show this again.</label>
    </div>
</div>

<div id=\"ouibounce-modal\">
  <div class=\"underlay\"></div>
  <div class=\"modal-inner\">
    <div class=\"modal-title\">
      <h3>Be Informed!</h3>
    </div>

    <div class=\"modal-body\">
      <p>We send out FREE weekly emails and instant alerts detailing NEW No Deposits and exclusive freerolls many of which are exclusive to NDC, leave your email to be included!</p>

      <form id=\"ouisubform\">
        <input id=\"ouibounce-modal-email\" type=\"text\" aria-label=\"your@email.com\" placeholder=\"your@email.com\">
        <input id=\"ouibounce-modal-subscription\" type=\"submit\"  value=\"Subscribe\">
      </form>
        <p style=\"text-align: center;\" id=\"oui-modal-error\"></p>
    </div>

    <div class=\"ouibounce-footer\">
      <p>no thanks</p>
    </div>
  </div>
</div>

<input id=\"copyText\" type=\"text\" tabindex='-1' aria-hidden='true'>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 157,  370 => 148,  363 => 144,  360 => 143,  348 => 136,  344 => 135,  338 => 132,  331 => 130,  325 => 127,  320 => 125,  314 => 122,  307 => 120,  301 => 117,  297 => 116,  293 => 115,  289 => 114,  277 => 107,  264 => 97,  257 => 93,  244 => 85,  235 => 79,  226 => 73,  218 => 67,  216 => 66,  213 => 65,  207 => 61,  198 => 57,  192 => 56,  186 => 55,  178 => 52,  174 => 51,  170 => 49,  163 => 45,  158 => 43,  155 => 42,  153 => 41,  148 => 39,  142 => 37,  137 => 35,  133 => 34,  126 => 29,  114 => 27,  112 => 26,  109 => 25,  97 => 23,  95 => 22,  85 => 19,  79 => 18,  72 => 16,  64 => 11,  60 => 10,  57 => 9,  53 => 8,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if (page.mainfooter1==true)  %}

    <div class=\"latest-bonus-wrapper\">

        <div class=\"container\">
            <h3>Latest No Deposit Casino Bonuses</h3>
            <div class=\"latest-bonus-slider\">
                {% for bonus in latestbonuses %}
                <div itemscope itemtype=\"http://schema.org/Offer\">
                    <meta itemprop=\"url\" content='{{ absolute_url(path(\"casino-review\",{\"id\":bonus.casino.id,\"casinoname\":bonus.casino.casinoname|replace({\" \":\"-\" })})) }}' />
                    <meta itemprop=\"name\" content=\"{{ bonus.bonustype.name }} Bonus\" />
                    <div class=\"latest-bonus-item\">
                        <div class=\"latest-bonus-top\">
                            <span class=\"box-new\">New!</span>
                            <span class=\"flag\">
                                <img src='{{ country.imgSrc }}' alt=\"{{ country.name }}\" width=\"16\" height=\"11\">
                            </span>
                            <a href=\"/casino-review/{{ bonus.casino.id }}/{{ bonus.casino.casinoname|replace({' ':'-' }) }}\">
                                <img class=\"latest-bonus-logo lazyload\" src=\"{{asset(('img/lazy-115.png'))}}\" data-original=\"{{ asset(bonus.casino.casinologo) }}\" alt=\"{{ bonus.casino.casinoname }}\" width=\"115\" height=\"115\" />
                            </a>
                            <p class=\"latest-bonus-comments\">
                                {% if (bonus.casino.posts|length>0) %}
                                    <span class=\"comments\"><span class=\"icon\"></span>{{ bonus.casino.posts|length }} {% if bonus.casino.posts|length > 1 %}Comments{% else %}Comment{% endif %}</span>
                                {% endif %}

                                {% if (bonus.casino.likes|length>0) %}
                                    <span class=\"likes\"><span class=\"icon\"></span>{{ bonus.casino.likes|length }} {% if bonus.casino.likes|length > 1 %}Likes{% else %}Like{% endif %}</span>
                                {% endif %}
                            </p>

                        </div>

                        <div class=\"latest-bonus-bottom\" itemscope itemprop=\"seller\" itemtype=\"http://schema.org/Organization\">
                            <meta itemprop=\"name\" content=\"{{ bonus.casino.casinoname }}\" />
                            <meta itemprop=\"url\" content=\"{{ absolute_url(path('visit_casino',{id:bonus.casino.id})) }}\" />
                            <div class=\"casino-bonus\">
                                <span class=\"casino-bonus-amount\">{{ bonus.symbol }}{{ bonus.maxbonus|split('.')|first }}</span>
                                <p class=\"casino-bonus-name\">
                                        {{ bonus.bonustype.name }}
                                </p>
                                {% if bonus.code|length > 0 %}
                                    <p class=\"casino-bonus-code\">Code:
                                        <span>{{ bonus.code|slice(0,13) }}</span>
                                        <span class=\"code_hover tooltip-btn tooltip-hover\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copy to Clipboard\">
                                            <span class=\"copy-code tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Code copied to Clipboard\" data-trigger=\"manual\">{{ bonus.code }}</span>
                                        </span>
                                    </p>
                                {% endif %}
                            </div>
                            <div>
                                <a href=\"\" class=\"btn-like tooltip-btn\" data-bonus=\"{{ bonus.id }}\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"Like\" aria-label=\"Like\" onclick=\"return false;\"></a>
                                <a href=\"/casino-review/{{ bonus.casino.id }}/{{ bonus.casino.casinoname|replace({' ':'-' }) }}\" class=\"btn-review tooltip-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Read Review\" aria-label=\"Read Review\"></a>
                            </div>
                        </div>
                        <a class=\"btn btn-primary\" href=\"{{ path('visit_casino',{id:bonus.casino.id}) }}\" title=\"{{ bonus.casino.casinoname }}\" rel=\"noopener nofollow\"  target=\"_blank\">
                            {% if country.name=='United Kingdom' %}PLAY{% else %}PLAY NOW{% endif %}
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div><!--/.latest-bonus-->
        </div>
    </div><!--/#footer1-->
{% endif %}

{% if (page.mainfooter2==true) %}
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"footer-top\">

                <ul class=\"footer-social\">
                    <li>
                        <a class=\"facebook\" href=\"{{ socialregister.loginUrl }}\" aria-label=\"facebook\">
                            <i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i>
                        </a>
                    </li>

                    <li>
                        <a class=\"twitter\" href=\"{{ socialregister.url }}\" aria-label=\"twitter\">
                            <i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>
                        </a>
                    </li>

                    <li>
                        <div class=\"g-signin2 s-gplus\" {% if not is_granted('IS_AUTHENTICATED_FULLY') %}data-onsuccess=\"onSignIn\"{% endif %}></div>
                    </li>
                </ul>


                <nav id=\"menu-footer\">
                    <ul>
                        <li>
                            <a href=\"{{ path('index') }}\">No Deposit Casinos</a>
                        </li>

                        <li>
                            <a href=\"{{ path('casinos') }}\">All Casinos</a>
                        </li>

                        <li>
                            <a href=\"/gamblinghelp\">Gambling Help</a>
                        </li>
                    </ul>
                </nav>


                <a class=\"powered-by\" href=\"http://lcb.org/\" rel=\"noopener {% if(page.navigation is defined and page.navigation!='Index') %}nofollow{% endif %}\" target=\"_blank\">Powered by <span></span></a>

            </div>


            <div class=\"footer-bottom\">
                <div class=\"footer-bottom-links\">
                    <a href=\"{{ path('general_pages',{\"slug\":'privacy'}) }}\">Privacy Policy</a>
                    <a href=\"{{ path('general_pages',{\"slug\":'disclaimer'}) }}\">Disclaimer</a>
                    <a href=\"{{ path('contact') }}\">Contact Us</a>
                    <a href=\"{{ path('general_pages',{\"slug\":'terms-and-conditions'}) }}\">Terms and Conditions</a>
                </div>
                <div class=\"footer-logos\">
                    <a  href=\"http://www.gamcare.org.uk/\" rel=\"noopener {% if(page.navigation is defined and page.navigation!='Index') %}nofollow{% endif %}\" target=\"_blank\">
                        <img width=\"40\" height=\"43\" class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"{{ asset('img/FooterImages/gamecare_woo.png') }}\" alt=\"gamcare\">
                    </a>

                    <a href=\"{{ path('general_pages',{\"slug\":'disclaimer'}) }}\">
                        <img width=\"40\" height=\"40\" class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"{{ asset('img/FooterImages/18_woo.png') }}\" alt=\"disclaimer\">
                    </a>

                    <a  href=\"https://www.begambleaware.org/\" rel=\"noopener {% if(page.navigation is defined and page.navigation!='Index') %}nofollow{% endif %}\" target=\"_blank\">
                        <img width=\"40\" height=\"40\" class=\"lazyload\" src=\"data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQIHWO4/+INAAVdArRD1D4LAAAAAElFTkSuQmCC\"
     data-original=\"{{ asset('img/FooterImages/begambleaware_logo.png') }}\" alt=\"beGambleAware\">
                    </a>
                </div>
                <div id=\"copyright\">NoDepositCasino  &copy; 2012- {{ \"now\"|date(\"Y\") }}. All Rights Reserved.</div>
                <div class=\"partner-website\"><a href=\"http://www.nodepositbingo.co.uk/\" rel=\"noopener {% if(page.navigation is defined and page.navigation!='Index') %}nofollow{% endif %}\" target=\"_blank\">Partner Website <span></span></a></div>

            </div>
        </div>
    </div><!--/#footer-->

{% endif %}

{{ render(controller('App\\\\Controller\\\\TemplateController::userPopups'))}}

<div id=\"cookie-bar\">
    <p>No Deposit Casino uses cookies, this enables us to provide you with a personalised experience
        <a class=\"cookie_bar_more_info\" href=\"{{ path('general_pages',{\"slug\":'privacy'}) }}\"> More info</a>
        <button class=\"hide-cookie-bar btn btn-primary\">Got it!</button>
    </p>
</div>


<div id=\"subscription\" class=\"fadeIn animate\" >
    <span id=\"close_subscription_popup\"  onclick=\"return false;\"></span>
    <div class=\"subscribe-heading\">
        <img src=\"{{ asset('img/subscribe.png') }}\" alt=\"Subscribe\" width=\"107\" height=\"76\" />
        <span> Get The Latest Posts Delivered Directly To Your Inbox! </span>
    </div>
    <div class=\"subscribeDescriptionBox\">
        <p class=\"subscribeDescription\"> Join Over 10,000 B2B Marketers Who Get The Latest Posts On Content Marketing and Growth Hacking Delivered Directly To Their Inbox. </p>
    </div>
    <div class=\"form-group\">
        <input class=\"narrow\" id=\"newsletter_subscription_only\" type=\"email\" required name=\"newsletter_subscription_email\" aria-label=\"Email Address\" placeholder=\"Email Address\">
        <a id=\"newsletter_subscribe\" href=\"\" class=\"btn btn-primary\" onclick=\"return false\">Subscribe</a>
    </div>
    <p class=\"form-error\" id=\"newsletter_subscribe_error\"></p>
    <div class=\"form-group-checkbox\">
        <input id=\"dont_show_again\" type=\"checkbox\" name=\"dontshow\">
        <label for=\"dont_show_again\">Don't show this again.</label>
    </div>
</div>

<div id=\"ouibounce-modal\">
  <div class=\"underlay\"></div>
  <div class=\"modal-inner\">
    <div class=\"modal-title\">
      <h3>Be Informed!</h3>
    </div>

    <div class=\"modal-body\">
      <p>We send out FREE weekly emails and instant alerts detailing NEW No Deposits and exclusive freerolls many of which are exclusive to NDC, leave your email to be included!</p>

      <form id=\"ouisubform\">
        <input id=\"ouibounce-modal-email\" type=\"text\" aria-label=\"your@email.com\" placeholder=\"your@email.com\">
        <input id=\"ouibounce-modal-subscription\" type=\"submit\"  value=\"Subscribe\">
      </form>
        <p style=\"text-align: center;\" id=\"oui-modal-error\"></p>
    </div>

    <div class=\"ouibounce-footer\">
      <p>no thanks</p>
    </div>
  </div>
</div>

<input id=\"copyText\" type=\"text\" tabindex='-1' aria-hidden='true'>", "footer.html.twig", "/var/www/ndc_new/templates/footer.html.twig");
    }
}
