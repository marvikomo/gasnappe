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

/* includes/header.twig */
class __TwigTemplate_2acb029ad07244ffd21da4c357136850322936aeab3ee57104aa9c5cc730671a extends \Twig\Template
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
        // line 1
        echo "<div class=\"header\">

    <nav class=\"navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar\">
        <div class=\"container\">
            <div class=\"theme-header clearfix\">

                <div class=\"navbar-header\">
                    <button class=\"navbar-toggler\" type=\"button\"  data-toggle=\"collapse\" aria-controls=\"main-navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                        <span class=\"lni-menu\"></span>
                        <span class=\"lni-menu\"></span>
                        <span class=\"lni-menu\"></span>
                    </button>
                    <a href=\"index.html\" class=\"navbar-brand\"><img src=\"\" alt=\"\"></a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"main-navbar\">
                    <ul class=\"navbar-nav mr-auto w-100 justify-content-end\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("home"), "html", null, true);
        echo "\">
                                Home
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("category"), "html", null, true);
        echo "\">
                                Category
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"contact.html\">
                                Contact
                            </a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"lnr lnr-user\"></i> My Account
                            </a>
                            <ul class=\"dropdown-menu\">
                               ";
        // line 43
        echo "                                <li><a class=\"dropdown-item\" href=\"login.html\"><i class=\"lnr lnr-lock\"></i> Log In</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("register"), "html", null, true);
        echo "\"><i class=\"lnr lnr-user\"></i> Signup</a></li>
                                <li><a class=\"dropdown-item\" href=\"forgot-password.html\"><i class=\"lnr lnr-sync\"></i> Forgot Password</a></li>
                                <li><a class=\"dropdown-item\" href=\"account-close.html\"><i class=\"lnr lnr-cross\"></i>Account close</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class=\"mobile-menu\" data-logo=\"assets/img/logo-mobile.png\"></div>
    </nav>


";
    }

    public function getTemplateName()
    {
        return "includes/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 44,  83 => 43,  65 => 24,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header\">

    <nav class=\"navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar\">
        <div class=\"container\">
            <div class=\"theme-header clearfix\">

                <div class=\"navbar-header\">
                    <button class=\"navbar-toggler\" type=\"button\"  data-toggle=\"collapse\" aria-controls=\"main-navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                        <span class=\"lni-menu\"></span>
                        <span class=\"lni-menu\"></span>
                        <span class=\"lni-menu\"></span>
                    </button>
                    <a href=\"index.html\" class=\"navbar-brand\"><img src=\"\" alt=\"\"></a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"main-navbar\">
                    <ul class=\"navbar-nav mr-auto w-100 justify-content-end\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path_for('home') }}\">
                                Home
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path_for('category') }}\">
                                Category
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"contact.html\">
                                Contact
                            </a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"lnr lnr-user\"></i> My Account
                            </a>
                            <ul class=\"dropdown-menu\">
                               {# <li><a class=\"dropdown-item\" href=\"account-home.html\"><i class=\"lnr lnr-home\"></i> Account Home</a></li>
                                <li><a class=\"dropdown-item\" href=\"account-myads.html\"><i class=\"lnr lnr-cart\"></i> My Ads</a></li>
                                <li><a class=\"dropdown-item\" href=\"account-favourite-ads.html\"><i class=\"lnr lnr-heart\"></i> Favourite ads</a></li>
                                <li><a class=\"dropdown-item\" href=\"account-archived-ads.html\"><i class=\"lnr lnr-file-add\"></i> Archived</a></li>#}
                                <li><a class=\"dropdown-item\" href=\"login.html\"><i class=\"lnr lnr-lock\"></i> Log In</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path_for('register') }}\"><i class=\"lnr lnr-user\"></i> Signup</a></li>
                                <li><a class=\"dropdown-item\" href=\"forgot-password.html\"><i class=\"lnr lnr-sync\"></i> Forgot Password</a></li>
                                <li><a class=\"dropdown-item\" href=\"account-close.html\"><i class=\"lnr lnr-cross\"></i>Account close</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class=\"mobile-menu\" data-logo=\"assets/img/logo-mobile.png\"></div>
    </nav>


", "includes/header.twig", "C:\\xampp\\htdocs\\fastLawyer\\resources\\views\\includes\\header.twig");
    }
}
