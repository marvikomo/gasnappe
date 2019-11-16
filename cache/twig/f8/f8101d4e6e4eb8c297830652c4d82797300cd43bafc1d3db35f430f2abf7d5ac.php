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

/* register.twig */
class __TwigTemplate_3bbeea6cf9ed3066d175620092cdb185b656f108fc774a9f457066f17afeb7ed extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "register.twig", 1);
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
                            <h4>Register</h4>
                            <p>( Create an account today. )</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- subhead -->
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
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
                                        <a title=\"\" href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\"></i>facebook</a>
                                        <a title=\"\" href=\"#\" class=\"google\"><i class=\"fa fa-google-plus\"></i>Google</a>
                                        <a title=\"\" href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i>Twitter</a>
                                    </div>
                                </div>
                                <div class=\"offset-lg-1 col-lg-7 col-md-8\">
                                    <div class=\"cola-form\">
                                        <h4><i class=\"flaticon-sign-in\"></i>Register:</h4>
                                        <form method=\"post\" action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("register"), "html", null, true);
        echo "\">
                                            ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "field", [], "any", false, false, false, 44);
        echo "
                                            <label>first Name:</label>
                                            <input type=\"text\" name=\"first_name\">
                                            <label>last name:</label>
                                            <input type=\"text\" name=\"last_name\">
                                            <label>contact phone:</label>
                                            <input type=\"text\" name=\"mobile\">
                                            <label>email:</label>
                                            <input type=\"text\" name=\"email\">
                                            <label>password:</label>
                                            <input type=\"password\" name=\"password\">
                                            <label>confirm password:</label>
                                            <input type=\"password\" name=\"cpassword\">
                                            <input type=\"checkbox\" id=\"checkbox\">
                                            <label for=\"checkbox\">I accept Collabors’s <a href=\"#\" title=\"\">Terms & Conditions</a></label>
                                            <button type=\"submit\" class=\"theme-btn\">register</button>
                                        </form>
                                        <span>Are you a member already? <a href=\"#\" title=\"\">Login here</a></span>
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
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 44,  97 => 43,  76 => 24,  72 => 23,  51 => 5,  47 => 4,  36 => 1,);
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
                            <h4>Register</h4>
                            <p>( Create an account today. )</p>
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
                                        <a title=\"\" href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\"></i>facebook</a>
                                        <a title=\"\" href=\"#\" class=\"google\"><i class=\"fa fa-google-plus\"></i>Google</a>
                                        <a title=\"\" href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i>Twitter</a>
                                    </div>
                                </div>
                                <div class=\"offset-lg-1 col-lg-7 col-md-8\">
                                    <div class=\"cola-form\">
                                        <h4><i class=\"flaticon-sign-in\"></i>Register:</h4>
                                        <form method=\"post\" action=\"{{ path_for('register') }}\">
                                            {{ csrf.field | raw }}
                                            <label>first Name:</label>
                                            <input type=\"text\" name=\"first_name\">
                                            <label>last name:</label>
                                            <input type=\"text\" name=\"last_name\">
                                            <label>contact phone:</label>
                                            <input type=\"text\" name=\"mobile\">
                                            <label>email:</label>
                                            <input type=\"text\" name=\"email\">
                                            <label>password:</label>
                                            <input type=\"password\" name=\"password\">
                                            <label>confirm password:</label>
                                            <input type=\"password\" name=\"cpassword\">
                                            <input type=\"checkbox\" id=\"checkbox\">
                                            <label for=\"checkbox\">I accept Collabors’s <a href=\"#\" title=\"\">Terms & Conditions</a></label>
                                            <button type=\"submit\" class=\"theme-btn\">register</button>
                                        </form>
                                        <span>Are you a member already? <a href=\"#\" title=\"\">Login here</a></span>
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

", "register.twig", "C:\\xampp\\htdocs\\gasnappe\\resources\\views\\register.twig");
    }
}
