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

/* order.twig */
class __TwigTemplate_ad233ae97e08887038ccebbd9184acfeeb567bf8bc864b5925453bbc7b12bd07 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "order.twig", 1);
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
                                    <div class=\"bg-image\" style=\"background-image: url('/gasnappe/public/assets/images/resources/5.png'); background-repeat:no-repeat; height: 400px;\"></div>
                                </div>
                                <div class=\"offset-lg-1 col-lg-4     col-md-4\">
                                    <div class=\"cola-form\">
                                        <h4><i class=\"flaticon-sign-in\"></i>Refill gas</h4>
                                        <h6>Please select the correct size of the cylinder below</h6>s
                                        <form method=\"post\">
                                            <label>Cylinder size</label>
                                            <select>
                                                <option>5kg</option>
                                                <option>10kg</option>
                                                <option>15kg</option>
                                            </select>

                                            <label for=\"checkbox\">I accept Collabors’s <a href=\"#\" title=\"\">Terms & Conditions</a></label>
                                            <button type=\"submit\" class=\"theme-btn\">Add to cart</button>
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
        return "order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  72 => 23,  51 => 5,  47 => 4,  36 => 1,);
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
                                    <div class=\"bg-image\" style=\"background-image: url('/gasnappe/public/assets/images/resources/5.png'); background-repeat:no-repeat; height: 400px;\"></div>
                                </div>
                                <div class=\"offset-lg-1 col-lg-4     col-md-4\">
                                    <div class=\"cola-form\">
                                        <h4><i class=\"flaticon-sign-in\"></i>Refill gas</h4>
                                        <h6>Please select the correct size of the cylinder below</h6>s
                                        <form method=\"post\">
                                            <label>Cylinder size</label>
                                            <select>
                                                <option>5kg</option>
                                                <option>10kg</option>
                                                <option>15kg</option>
                                            </select>

                                            <label for=\"checkbox\">I accept Collabors’s <a href=\"#\" title=\"\">Terms & Conditions</a></label>
                                            <button type=\"submit\" class=\"theme-btn\">Add to cart</button>
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

", "order.twig", "C:\\xampp\\htdocs\\gasnappe\\resources\\views\\order.twig");
    }
}
