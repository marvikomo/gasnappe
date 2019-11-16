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

/* login.twig */
class __TwigTemplate_3720237b91435d5bce803c662bc49d021c2bb5113832efad2be92112f3a8aac5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'caurosel' => [$this, 'block_caurosel'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/base.twig", "login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_caurosel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"sub-head blackish ext-low-opacity\">
        <div class=\"bg-image\" style=\"background-image: url(images/resources/subhead-bg.jpg)\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"cola-head\">
                        <div class=\"head-meta\">
                            <h4>Login</h4>
                            <p>( Login to your account. )</p>
                        </div>

                        <div class=\"info-links\">
                            <a href=\"#\" title=\"\">how does this work</a>
                            <a href=\"#\" title=\"\">submit your car</a>
                            <span><i class=\"fa fa-phone\"></i>call (012) 345 - 6789</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- subhead -->
";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <section>
        <div class=\"space\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"login-sec\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"log-with-fb\">
                                        <h4>Login in seconds:</h4>
                                        <a class=\"facebook\" href=\"#\" title=\"\"><i class=\"fa fa-facebook\"></i>facebook</a>
                                        <a class=\"google\" href=\"#\" title=\"\"><i class=\"fa fa-google-plus\"></i>Google</a>
                                        <a class=\"twitter\" href=\"#\" title=\"\"><i class=\"fa fa-twitter\"></i>Twitter</a>
                                    </div>
                                </div>
                                <div class=\"offset-md-1 col-md-7\">
                                    <div class=\"cola-form\">
                                        <h4><i class=\"flaticon-key\"></i>Login:</h4>
                                        <form method=\"post\" action=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("login"), "html", null, true);
        echo "\">
                                            ";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "field", [], "any", false, false, false, 48);
        echo "
                                            <label>Email</label>
                                            <input type=\"text\" placeholder=\"Your email address\" name=\"email\">
                                            <label>password</label>
                                            <input type=\"password\" placeholder=\"Password\" name=\"password\">
                                            <input type=\"checkbox\">
                                            <label for=\"checkbox\">Remember me</label>
                                            <button type=\"submit\" id=\"checkbox\" class=\"theme-btn\">login</button>
                                        </form>
                                        <span>Aren’t you a member yet? <a href=\"#\" title=\"\">Register here</a></span>
                                        <span>Forgot your password? <a href=\"#\" title=\"\">Click here</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- form section -->

";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 48,  101 => 47,  81 => 29,  77 => 28,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.twig' %}


{% block caurosel %}

    <div class=\"sub-head blackish ext-low-opacity\">
        <div class=\"bg-image\" style=\"background-image: url(images/resources/subhead-bg.jpg)\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"cola-head\">
                        <div class=\"head-meta\">
                            <h4>Login</h4>
                            <p>( Login to your account. )</p>
                        </div>

                        <div class=\"info-links\">
                            <a href=\"#\" title=\"\">how does this work</a>
                            <a href=\"#\" title=\"\">submit your car</a>
                            <span><i class=\"fa fa-phone\"></i>call (012) 345 - 6789</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- subhead -->
{% endblock %}
{% block content %}
    <section>
        <div class=\"space\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"login-sec\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"log-with-fb\">
                                        <h4>Login in seconds:</h4>
                                        <a class=\"facebook\" href=\"#\" title=\"\"><i class=\"fa fa-facebook\"></i>facebook</a>
                                        <a class=\"google\" href=\"#\" title=\"\"><i class=\"fa fa-google-plus\"></i>Google</a>
                                        <a class=\"twitter\" href=\"#\" title=\"\"><i class=\"fa fa-twitter\"></i>Twitter</a>
                                    </div>
                                </div>
                                <div class=\"offset-md-1 col-md-7\">
                                    <div class=\"cola-form\">
                                        <h4><i class=\"flaticon-key\"></i>Login:</h4>
                                        <form method=\"post\" action=\"{{ path_for('login') }}\">
                                            {{ csrf.field | raw }}
                                            <label>Email</label>
                                            <input type=\"text\" placeholder=\"Your email address\" name=\"email\">
                                            <label>password</label>
                                            <input type=\"password\" placeholder=\"Password\" name=\"password\">
                                            <input type=\"checkbox\">
                                            <label for=\"checkbox\">Remember me</label>
                                            <button type=\"submit\" id=\"checkbox\" class=\"theme-btn\">login</button>
                                        </form>
                                        <span>Aren’t you a member yet? <a href=\"#\" title=\"\">Register here</a></span>
                                        <span>Forgot your password? <a href=\"#\" title=\"\">Click here</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- form section -->

{%  endblock %}

", "login.twig", "C:\\xampp\\htdocs\\gasnappe\\resources\\views\\login.twig");
    }
}
