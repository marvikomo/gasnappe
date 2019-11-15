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

/* home.twig */
class __TwigTemplate_d3b4365203273f34ada9286a34b8c8c44a87e31a752d6421394fbea4b921a321 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'search' => [$this, 'block_search'],
            'wrapper' => [$this, 'block_wrapper'],
            'featuredList' => [$this, 'block_featuredList'],
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Home";
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        $this->loadTemplate("includes/header.twig", "home.twig", 4)->display($context);
    }

    // line 6
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "  <div id=\"hero-area\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-lg-12 col-xs-12 text-center\">
          <div class=\"contents\">
            <h1 class=\"head-title\">Welcome to <span>Fast Lawyesr</span></h1>
            <p>Search for lawyers anywhere in Nigeria, <br>  Search For Lawyers</p>

            <div class=\"search-bar mt-4\">
              <fieldset>
                <form class=\"search-form\">
                  <div class=\"form-group\">
                    <i class=\"lni-bullhorn\"></i>
                    <input type=\"text\" name=\"customword\" class=\"form-control\" placeholder=\"What are you looking for\">
                  </div>
                  <div class=\"form-group\">
                    <div class=\"tg-select\">
                      <select>
                        <option value=\"none\">Financial Law</option>
                        <option value=\"none\">Community Law</option>
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
    </div>
  </div>


  </div>
";
    }

    // line 68
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "  <div class=\"wrapper\">

    <section class=\"grid-category\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"box-title no-border\">
              <div class=\"inner\">
                <h3 class=\"section-title\"><span>Browse by</span> Category</h3>
                <a href=\"\" class=\"sell-your-item\"><i class=\"fas fa-th-large\"></i> View more
                </a>
              </div>
            </div>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"0s\">
            <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("category"), "html", null, true);
        echo "\">
              <div class=\"icon\">
               ";
        // line 87
        echo "              </div>
              <h6>Financial Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"0.2s\">
            <a href=\"category.html\">
              <div class=\"icon\">
               ";
        // line 95
        echo "              </div>
              <h6>Community Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"0.4s\">
            <a href=\"category.html\">
              <div class=\"icon\">
              ";
        // line 103
        echo "              </div>
              <h6>Child Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"0.6s\">
            <a href=\"category.html\">
              <div class=\"icon\">
               ";
        // line 111
        echo "              </div>
              <h6>Criminal Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"0.8s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                ";
        // line 119
        echo "              </div>
              <h6>Banking and Finance Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"1s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                ";
        // line 127
        echo "              </div>
              <h6>Public Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"1.2s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                ";
        // line 135
        echo "              </div>
              <h6>Family Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"1.4s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                ";
        // line 143
        echo "              </div>
              <h6>Gaming Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category  i-category wow fadeIn\" data-wow-delay=\"1.6s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                ";
        // line 151
        echo "              </div>
              <h6>Human Right Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"1.8s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                ";
        // line 159
        echo "              </div>
              <h6>Corporate Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"2s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                ";
        // line 167
        echo "              </div>
              <h6>Financial Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"2.2s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                ";
        // line 175
        echo "              </div>
              <h6>Immigration Law</h6>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
";
    }

    // line 185
    public function block_featuredList($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "  ";
    }

    // line 294
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 295
        echo "



  <div class=\"site-section bg-white\">
    <div class=\"container\">

      <div class=\"row justify-content-center mb-5\">
        <div class=\"col-md-7 text-center border-primary\">
          <h2 class=\"font-weight-light text-primary\">Testimonials</h2>
        </div>
      </div>

      <div class=\"slide-one-item home-slider owl-carousel\">
        <div>
          <div class=\"testimonial\">
            <figure class=\"mb-4\">
              <img src=\"images/person_3.jpg\" alt=\"Image\" class=\"img-fluid mb-3\">
              <p>John Smith</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>
        <div>
          <div class=\"testimonial\">
            <figure class=\"mb-4\">
              <img src=\"images/person_2.jpg\" alt=\"Image\" class=\"img-fluid mb-3\">
              <p>Christine Aguilar</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>

        <div>
          <div class=\"testimonial\">
            <figure class=\"mb-4\">
              <img src=\"images/person_4.jpg\" alt=\"Image\" class=\"img-fluid mb-3\">
              <p>Robert Spears</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>

        <div>
          <div class=\"testimonial\">
            <figure class=\"mb-4\">
              <img src=\"images/person_5.jpg\" alt=\"Image\" class=\"img-fluid mb-3\">
              <p>Bruce Rogers</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>

      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 295,  280 => 294,  276 => 186,  272 => 185,  260 => 175,  251 => 167,  242 => 159,  233 => 151,  224 => 143,  215 => 135,  206 => 127,  197 => 119,  188 => 111,  179 => 103,  170 => 95,  161 => 87,  156 => 84,  139 => 69,  135 => 68,  71 => 7,  67 => 6,  62 => 4,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.twig' %}
{% block title %}Home{% endblock %}
{%  block header %}
  {%  include 'includes/header.twig' %}
{%  endblock %}
{% block search %}
  <div id=\"hero-area\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-lg-12 col-xs-12 text-center\">
          <div class=\"contents\">
            <h1 class=\"head-title\">Welcome to <span>Fast Lawyesr</span></h1>
            <p>Search for lawyers anywhere in Nigeria, <br>  Search For Lawyers</p>

            <div class=\"search-bar mt-4\">
              <fieldset>
                <form class=\"search-form\">
                  <div class=\"form-group\">
                    <i class=\"lni-bullhorn\"></i>
                    <input type=\"text\" name=\"customword\" class=\"form-control\" placeholder=\"What are you looking for\">
                  </div>
                  <div class=\"form-group\">
                    <div class=\"tg-select\">
                      <select>
                        <option value=\"none\">Financial Law</option>
                        <option value=\"none\">Community Law</option>
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
    </div>
  </div>


  </div>
{% endblock %}
{%  block wrapper %}
  <div class=\"wrapper\">

    <section class=\"grid-category\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"box-title no-border\">
              <div class=\"inner\">
                <h3 class=\"section-title\"><span>Browse by</span> Category</h3>
                <a href=\"\" class=\"sell-your-item\"><i class=\"fas fa-th-large\"></i> View more
                </a>
              </div>
            </div>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"0s\">
            <a href=\"{{ path_for('category') }}\">
              <div class=\"icon\">
               {# <i class=\"fas fa-car\"></i>#}
              </div>
              <h6>Financial Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"0.2s\">
            <a href=\"category.html\">
              <div class=\"icon\">
               {# <i class=\"fas fa-laptop\"></i>#}
              </div>
              <h6>Community Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"0.4s\">
            <a href=\"category.html\">
              <div class=\"icon\">
              {#  <i class=\"fas fa-mobile\"></i>#}
              </div>
              <h6>Child Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"0.6s\">
            <a href=\"category.html\">
              <div class=\"icon\">
               {# <i class=\"fas fa-headphones\"></i>#}
              </div>
              <h6>Criminal Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"0.8s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                {#<i class=\"fas fa-tv\"></i>#}
              </div>
              <h6>Banking and Finance Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"1s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                {#<i class=\"fas fa-home\"></i>#}
              </div>
              <h6>Public Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"1.2s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                {#<i class=\"fas fa-graduation-cap\"></i>#}
              </div>
              <h6>Family Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"1.4s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                {#<i class=\"fas fa-camera\"></i>#}
              </div>
              <h6>Gaming Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category  i-category wow fadeIn\" data-wow-delay=\"1.6s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                {#<i class=\"fas fa-female\"></i>#}
              </div>
              <h6>Human Right Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"1.8s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                {#<i class=\"fas fa-heart\"></i>#}
              </div>
              <h6>Corporate Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"2s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                {#<i class=\"fas fa-briefcase\"></i>#}
              </div>
              <h6>Financial Law</h6>
            </a>
          </div>
          <div class=\"col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn\" data-wow-delay=\"2.2s\">
            <a href=\"category.html\">
              <div class=\"icon\">
                {#<i class=\"fas fa-leaf\"></i>#}
              </div>
              <h6>Immigration Law</h6>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
{%  endblock %}

{%  block featuredList %}
  {#<section class=\"featured-lis\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.8s\">
          <h3 class=\"section-title\">Featured Listings</h3>
          <div id=\"new-products\" class=\"owl-carousel\">
            <div class=\"item\">
              <div class=\"product-item\">
                <div class=\"carousel-thumb\">
                  <img src=\"assets/img/product/img1.jpg\" alt=\"\">
                  <div class=\"overlay\">
                    <a href=\"ads-details.html\"><i class=\"fas fa-link\"></i></a>
                  </div>
                </div>
                <a href=\"ads-details.html\" class=\"item-name\">Lorem ipsum dolor sit</a>
                <span class=\"price\">\$150</span>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"product-item\">
                <div class=\"carousel-thumb\">
                  <img src=\"assets/img/product/img2.jpg\" alt=\"\">
                  <div class=\"overlay\">
                    <a href=\"ads-details.html\"><i class=\"fas fa-link\"></i></a>
                  </div>
                </div>
                <a href=\"ads-details.html\" class=\"item-name\">Sed diam nonummy</a>
                <span class=\"price\">\$67</span>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"product-item\">
                <div class=\"carousel-thumb\">
                  <img src=\"assets/img/product/img3.jpg\" alt=\"\">
                  <div class=\"overlay\">
                    <a href=\"ads-details.html\"><i class=\"fas fa-link\"></i></a>
                  </div>
                </div>
                <a href=\"ads-details.html\" class=\"item-name\">Feugiat nulla facilisis</a>
                <span class=\"price\">\$300</span>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"product-item\">
                <div class=\"carousel-thumb\">
                  <img src=\"assets/img/product/img4.jpg\" alt=\"\">
                  <div class=\"overlay\">
                    <a href=\"ads-details.html\"><i class=\"fas fa-link\"></i></a>
                  </div>
                </div>
                <a href=\"ads-details.html\" class=\"item-name\">Lorem ipsum dolor sit</a>
                <span class=\"price\">\$149</span>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"product-item\">
                <div class=\"carousel-thumb\">
                  <img src=\"assets/img/product/img5.jpg\" alt=\"\">
                  <div class=\"overlay\">
                    <a href=\"ads-details.html\"><i class=\"fas fa-link\"></i></a>
                  </div>
                </div>
                <a href=\"ads-details.html\" class=\"item-name\">Sed diam nonummy</a>
                <span class=\"price\">\$90</span>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"product-item\">
                <div class=\"carousel-thumb\">
                  <img src=\"assets/img/product/img6.jpg\" alt=\"\">
                  <div class=\"overlay\">
                    <a href=\"ads-details.html\"><i class=\"fas fa-link\"></i></a>
                  </div>
                </div>
                <a href=\"ads-details.html\" class=\"item-name\">Praesent luptatum zzril</a>
                <span class=\"price\">\$169</span>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"product-item\">
                <div class=\"carousel-thumb\">
                  <img src=\"assets/img/product/img7.jpg\" alt=\"\">
                  <div class=\"overlay\">
                    <a href=\"ads-details.html\"><i class=\"fas fa-link\"></i></a>
                  </div>
                </div>
                <a href=\"ads-details.html\" class=\"item-name\">Lorem ipsum dolor sit</a>
                <span class=\"price\">\$79</span>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"product-item\">
                <div class=\"carousel-thumb\">
                  <img src=\"assets/img/product/img8.jpg\" alt=\"\">
                  <div class=\"overlay\">
                    <a href=\"ads-details.html\"><i class=\"fas fa-link\"></i></a>
                  </div>
                </div>
                <a href=\"ads-details.html\" class=\"item-name\">Sed diam nonummy</a>
                <span class=\"price\">\$149</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>#}
{%  endblock %}
{% block content %}




  <div class=\"site-section bg-white\">
    <div class=\"container\">

      <div class=\"row justify-content-center mb-5\">
        <div class=\"col-md-7 text-center border-primary\">
          <h2 class=\"font-weight-light text-primary\">Testimonials</h2>
        </div>
      </div>

      <div class=\"slide-one-item home-slider owl-carousel\">
        <div>
          <div class=\"testimonial\">
            <figure class=\"mb-4\">
              <img src=\"images/person_3.jpg\" alt=\"Image\" class=\"img-fluid mb-3\">
              <p>John Smith</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>
        <div>
          <div class=\"testimonial\">
            <figure class=\"mb-4\">
              <img src=\"images/person_2.jpg\" alt=\"Image\" class=\"img-fluid mb-3\">
              <p>Christine Aguilar</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>

        <div>
          <div class=\"testimonial\">
            <figure class=\"mb-4\">
              <img src=\"images/person_4.jpg\" alt=\"Image\" class=\"img-fluid mb-3\">
              <p>Robert Spears</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>

        <div>
          <div class=\"testimonial\">
            <figure class=\"mb-4\">
              <img src=\"images/person_5.jpg\" alt=\"Image\" class=\"img-fluid mb-3\">
              <p>Bruce Rogers</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>

      </div>
    </div>
  </div>
{%  endblock %}", "home.twig", "C:\\xampp\\htdocs\\fastLawyer\\resources\\views\\home.twig");
    }
}
