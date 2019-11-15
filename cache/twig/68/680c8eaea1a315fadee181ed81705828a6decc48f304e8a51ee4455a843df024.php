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

/* category.twig */
class __TwigTemplate_0116007a9f2cf83da679484fb829d22954873d7a92b942948e4c5208c9eddd00 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'search' => [$this, 'block_search'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "category.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Category";
    }

    // line 13
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
    <div id=\"search-row-wrapper\">
        <div class=\"container\">
            <div class=\"search-inner\">

                <div class=\"search-bar row\">
                    <fieldset>
                        <form class=\"search-form\">
                            <div class=\"form-group\">
                                <i class=\"lni-bullhorn\"></i>
                                <input type=\"text\" name=\"customword\" class=\"form-control\" placeholder=\"What are you looking for\">
                            </div>
                            <div class=\"form-group\">
                                <div class=\"tg-select\">
                                    <select>
                                        <option value=\"none\">All Locations</option>
                                        <option value=\"none\">Community</option>
                                        <option value=\"none\">Items For Sale</option>
                                        <option value=\"none\">Jobs</option>
                                        <option value=\"none\">Personals</option>
                                        <option value=\"none\">Real Estate</option>
                                        <option value=\"none\">Services</option>
                                        <option value=\"none\">Vehicles</option>
                                    </select>
                                    <i class=\"fas fa-angle-down\"></i>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"tg-select\">
                                    <select>
                                        <option value=\"none\">All Locations</option>
                                        <option value=\"none\">New York</option>
                                        <option value=\"none\">California</option>
                                        <option value=\"none\">Training</option>
                                        <option value=\"none\">Washington</option>
                                        <option value=\"none\">Birmingham</option>
                                        <option value=\"none\">Chicago</option>
                                        <option value=\"none\">Phoenix</option>
                                        <i class=\"lnr-chevron-down\"></i>
                                    </select>
                                    <i class=\"fas fa-angle-down\"></i>
                                </div>
                            </div>
                            <button class=\"btn btn-common\" type=\"button\"><i class=\"lni-search\"></i> Search Now</button>
                        </form>
                    </fieldset>
                </div>

            </div>
        </div>
    </div>
";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "
    <div class=\"main-container\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-12 col-xs-12 page-sidebar\">
                    <aside>
                        <div class=\"inner-box\">
                            <div class=\"categories\">
                                <div class=\"widget-title\">
                                    <i class=\"fas fa-align-justify\"></i>
                                    <h4>All Categories</h4>
                                </div>
                                <div class=\"categories-list\">
                                    <ul>
                                        <li>
                                            <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("category"), "html", null, true);
        echo "\">
                                                ";
        // line 84
        echo "                                                Financial Law
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("category"), "html", null, true);
        echo "\">
                                                ";
        // line 90
        echo "                                                Community Law
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("category"), "html", null, true);
        echo "\">
                                                ";
        // line 96
        echo "                                                Cooperate Law
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("category"), "html", null, true);
        echo "\">
                                                ";
        // line 102
        echo "                                                Crime Law
                                            </a>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>


                    </aside>
                </div>
                <div class=\"col-lg-9 col-md-12 col-xs-12 page-content\">

                    <div class=\"product-filter\">
                        <div class=\"grid-list-count\">
                            <a class=\"list switchToGrid\" href=\"#\"><i class=\"fas fa-list\"></i></a>
                            <a class=\"grid switchToList\" href=\"#\"><i class=\"fas fa-th-large\"></i></a>
                        </div>
                        <div class=\"short-name\">
                            <span>Short By</span>
                            <form class=\"name-ordering\" method=\"post\">
                                <label>
                                    <select name=\"order\" class=\"orderby\">
                                        <option selected=\"selected\" value=\"menu-order\">Short by</option>
                                        <option value=\"popularity\">Price: Low to High</option>
                                        <option value=\"popularity\">Price: High to Low</option>
                                    </select>
                                </label>
                            </form>
                        </div>
                        <div class=\"Show-item\">
                            <span>Show Items</span>
                            <form class=\"woocommerce-ordering\" method=\"post\">
                                <label>
                                    <select name=\"order\" class=\"orderby\">
                                        <option selected=\"selected\" value=\"menu-order\">49 items</option>
                                        <option value=\"popularity\">popularity</option>
                                        <option value=\"popularity\">Average ration</option>
                                        <option value=\"popularity\">newness</option>
                                        <option value=\"popularity\">price</option>
                                    </select>
                                </label>
                            </form>
                        </div>
                    </div>
                       ";
        // line 150
        if (twig_test_empty(($context["categories"] ?? null))) {
            // line 151
            echo "                           No Result
                    ";
        }
        // line 153
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 154
            echo "
                    <div class=\"adds-wrapper\">
                        <div class=\"item-list\">
                            <div class=\"row\">
                                <div class=\"col-sm-2 no-padding photobox\">
                                    <div class=\"add-image\">
                                        <a href=\"#\"><img src=\"assets/img/item/img-1.jpg\" alt=\"\"></a>
                                        <span class=\"photo-count\"><i class=\"fas fa-camera\"></i>2</span>
                                    </div>
                                </div>
                                <div class=\"col-sm-7 add-desc-box\">
                                    <div class=\"add-details\">
                                        <h5 class=\"add-title\"><a href=\"ads-details.html\">";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "business_name", [], "any", false, false, false, 166), "html", null, true);
            echo "</a></h5>
                                        <div class=\"info\">


                                            Practicing for 8 years





                                        </div>
                                        <div class=\"info\">

                                                     <span class=\"date\">
                                            <i class=\"fa fa-user\"></i>
                                               ";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "business_name", [], "any", false, false, false, 181), "html", null, true);
            echo "
                                            </span>

                                            <h6> ";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "specialty", [], "any", false, false, false, 184), "html", null, true);
            echo "</h6>




                                        </div>
                                        <div class=\"info\">

                                                  ";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "state", [], "any", false, false, false, 192), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "country", [], "any", false, false, false, 192), "html", null, true);
            echo "




                                        </div>


                                    </div>


                                </div>


                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4\"></div>
                            <div class=\"col-sm-3  price-box\">
                                <h2 class=\"item-price\"> </h2>

                                <a  href=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("profile"), "html", null, true);
            echo "\" class=\"btn btn-common btn-sm\"> <i class=\"fas fa-eye\"></i>View Profile </a>
                            </div>
                            </div>
                        </div>



                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "
                  ";
        // line 243
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 249
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            \$('#bname').hide();
            \$('#name').show();
            \$('#type').val(1);
            \$(document).on('click', '#lawyer',function(){
                \$('#bname').hide();
                \$('.not_common').show();

                \$('#type').val(1);

            });
            \$(document).on('click', '#firm',function(){

                \$('#bname').show();
                \$('#name').hide();
                \$('.not_common').hide();
                \$('#type').val(2);

            });

        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 250,  331 => 249,  323 => 243,  320 => 221,  305 => 212,  280 => 192,  269 => 184,  263 => 181,  245 => 166,  231 => 154,  226 => 153,  222 => 151,  220 => 150,  170 => 102,  166 => 100,  160 => 96,  156 => 94,  150 => 90,  146 => 88,  140 => 84,  136 => 82,  119 => 67,  115 => 66,  60 => 14,  56 => 13,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.twig' %}
{% block title %}Category{% endblock %}
{#{%  block style %}
    {{ parent() }}
    <style>
        a.btn.btn-common.btn-sm{
            position: relative;
            right:150px;
            bottom:20px;
        }
    </style>
{%  endblock %}#}
{% block search %}

    <div id=\"search-row-wrapper\">
        <div class=\"container\">
            <div class=\"search-inner\">

                <div class=\"search-bar row\">
                    <fieldset>
                        <form class=\"search-form\">
                            <div class=\"form-group\">
                                <i class=\"lni-bullhorn\"></i>
                                <input type=\"text\" name=\"customword\" class=\"form-control\" placeholder=\"What are you looking for\">
                            </div>
                            <div class=\"form-group\">
                                <div class=\"tg-select\">
                                    <select>
                                        <option value=\"none\">All Locations</option>
                                        <option value=\"none\">Community</option>
                                        <option value=\"none\">Items For Sale</option>
                                        <option value=\"none\">Jobs</option>
                                        <option value=\"none\">Personals</option>
                                        <option value=\"none\">Real Estate</option>
                                        <option value=\"none\">Services</option>
                                        <option value=\"none\">Vehicles</option>
                                    </select>
                                    <i class=\"fas fa-angle-down\"></i>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"tg-select\">
                                    <select>
                                        <option value=\"none\">All Locations</option>
                                        <option value=\"none\">New York</option>
                                        <option value=\"none\">California</option>
                                        <option value=\"none\">Training</option>
                                        <option value=\"none\">Washington</option>
                                        <option value=\"none\">Birmingham</option>
                                        <option value=\"none\">Chicago</option>
                                        <option value=\"none\">Phoenix</option>
                                        <i class=\"lnr-chevron-down\"></i>
                                    </select>
                                    <i class=\"fas fa-angle-down\"></i>
                                </div>
                            </div>
                            <button class=\"btn btn-common\" type=\"button\"><i class=\"lni-search\"></i> Search Now</button>
                        </form>
                    </fieldset>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
{% block content %}

    <div class=\"main-container\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-12 col-xs-12 page-sidebar\">
                    <aside>
                        <div class=\"inner-box\">
                            <div class=\"categories\">
                                <div class=\"widget-title\">
                                    <i class=\"fas fa-align-justify\"></i>
                                    <h4>All Categories</h4>
                                </div>
                                <div class=\"categories-list\">
                                    <ul>
                                        <li>
                                            <a href=\"{{ path_for('category') }}\">
                                                {#<i class=\"fas fa-desktop\"></i>#}
                                                Financial Law
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path_for('category') }}\">
                                                {#<i class=\"fas fa-wrench\"></i>#}
                                                Community Law
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path_for('category') }}\">
                                                {#<i class=\"fab fa-github\"></i>#}
                                                Cooperate Law
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path_for('category') }}\">
                                                {#<i class=\"fas fa-leaf\"></i>#}
                                                Crime Law
                                            </a>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>


                    </aside>
                </div>
                <div class=\"col-lg-9 col-md-12 col-xs-12 page-content\">

                    <div class=\"product-filter\">
                        <div class=\"grid-list-count\">
                            <a class=\"list switchToGrid\" href=\"#\"><i class=\"fas fa-list\"></i></a>
                            <a class=\"grid switchToList\" href=\"#\"><i class=\"fas fa-th-large\"></i></a>
                        </div>
                        <div class=\"short-name\">
                            <span>Short By</span>
                            <form class=\"name-ordering\" method=\"post\">
                                <label>
                                    <select name=\"order\" class=\"orderby\">
                                        <option selected=\"selected\" value=\"menu-order\">Short by</option>
                                        <option value=\"popularity\">Price: Low to High</option>
                                        <option value=\"popularity\">Price: High to Low</option>
                                    </select>
                                </label>
                            </form>
                        </div>
                        <div class=\"Show-item\">
                            <span>Show Items</span>
                            <form class=\"woocommerce-ordering\" method=\"post\">
                                <label>
                                    <select name=\"order\" class=\"orderby\">
                                        <option selected=\"selected\" value=\"menu-order\">49 items</option>
                                        <option value=\"popularity\">popularity</option>
                                        <option value=\"popularity\">Average ration</option>
                                        <option value=\"popularity\">newness</option>
                                        <option value=\"popularity\">price</option>
                                    </select>
                                </label>
                            </form>
                        </div>
                    </div>
                       {% if categories is empty %}
                           No Result
                    {% endif %}
                    {%  for category in categories %}

                    <div class=\"adds-wrapper\">
                        <div class=\"item-list\">
                            <div class=\"row\">
                                <div class=\"col-sm-2 no-padding photobox\">
                                    <div class=\"add-image\">
                                        <a href=\"#\"><img src=\"assets/img/item/img-1.jpg\" alt=\"\"></a>
                                        <span class=\"photo-count\"><i class=\"fas fa-camera\"></i>2</span>
                                    </div>
                                </div>
                                <div class=\"col-sm-7 add-desc-box\">
                                    <div class=\"add-details\">
                                        <h5 class=\"add-title\"><a href=\"ads-details.html\">{{ category.business_name }}</a></h5>
                                        <div class=\"info\">


                                            Practicing for 8 years





                                        </div>
                                        <div class=\"info\">

                                                     <span class=\"date\">
                                            <i class=\"fa fa-user\"></i>
                                               {{ category.business_name }}
                                            </span>

                                            <h6> {{ category.specialty }}</h6>




                                        </div>
                                        <div class=\"info\">

                                                  {{ category.state }}, {{ category.country }}




                                        </div>


                                    </div>


                                </div>


                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4\"></div>
                            <div class=\"col-sm-3  price-box\">
                                <h2 class=\"item-price\"> </h2>

                                <a  href=\"{{ path_for('profile') }}\" class=\"btn btn-common btn-sm\"> <i class=\"fas fa-eye\"></i>View Profile </a>
                            </div>
                            </div>
                        </div>



                    </div>
                    {%  endfor %}

                  {#  <div class=\"col-12\">

                        <div class=\"pagination-bar\">
                            <nav>
                                <ul class=\"pagination\">
                                    <li class=\"page-item\"><a class=\"page-link active\" href=\"#\">1</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\"> ...</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Next</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class=\"post-promo text-center\">
                            <h2> Do you get anything for sell ? </h2>
                            <h5>Sell your products online FOR FREE. It's easier than you think !</h5>
                            <a href=\"post-ads.html\" class=\"btn btn-post btn-danger\">Post a Free Ad </a>
                        </div>
                    </div>#}
                </div>
            </div>
        </div>
    </div>
{%  endblock %}

{% block script %}
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            \$('#bname').hide();
            \$('#name').show();
            \$('#type').val(1);
            \$(document).on('click', '#lawyer',function(){
                \$('#bname').hide();
                \$('.not_common').show();

                \$('#type').val(1);

            });
            \$(document).on('click', '#firm',function(){

                \$('#bname').show();
                \$('#name').hide();
                \$('.not_common').hide();
                \$('#type').val(2);

            });

        })
    </script>
{%  endblock %}", "category.twig", "C:\\xampp\\htdocs\\fastLawyer\\resources\\views\\category.twig");
    }
}
