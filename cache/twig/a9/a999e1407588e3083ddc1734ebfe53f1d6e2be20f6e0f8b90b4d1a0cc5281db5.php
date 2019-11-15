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

/* layouts/base.twig */
class __TwigTemplate_b6fc274d84d210ce8634757c73b0c9b118b8d174f0781a1837a6513d787b1a73 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'tittle' => [$this, 'block_tittle'],
            'style' => [$this, 'block_style'],
            'search' => [$this, 'block_search'],
            'wrapper' => [$this, 'block_wrapper'],
            'featuredList' => [$this, 'block_featuredList'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from demo.graygrids.com/themes/classix/classic/index-v-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 13:58:47 GMT -->
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"author\" content=\"GrayGrids Team\">
    ";
        // line 11
        $this->displayBlock('tittle', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('style', $context, $blocks);
        // line 36
        echo "</head>
<body>

";
        // line 39
        $this->loadTemplate("includes/header.twig", "layouts/base.twig", 39)->display($context);
        // line 40
        $this->displayBlock('search', $context, $blocks);
        // line 43
        $this->displayBlock('wrapper', $context, $blocks);
        // line 46
        echo "

";
        // line 48
        $this->displayBlock('featuredList', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "<section id=\"counter\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"counting wow fadeInDownQuick\" data-wow-delay=\".5s\">
                    <div class=\"icon\">
<span>
<i class=\"lnr lnr-tag\"></i>
</span>
                    </div>
                    ";
        // line 69
        echo "                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"counting wow fadeInDownQuick\" data-wow-delay=\"1s\">
                    <div class=\"icon\">
<span>
<i class=\"lnr lnr-map\"></i>
</span>
                    </div>
                    <div class=\"desc\">
                        <h3 class=\"counter\">350</h3>
                        <p>Locations</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"counting wow fadeInDownQuick\" data-wow-delay=\"1.5s\">
                    <div class=\"icon\">
<span>
<i class=\"lnr lnr-users\"></i>
</span>
                    </div>
                    <div class=\"desc\">
                        <h3 class=\"counter\">23453</h3>
                        <p>Reguler Members</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"counting wow fadeInDownQuick\" data-wow-delay=\"2s\">
                    <div class=\"icon\">
<span>
<i class=\"lnr lnr-license\"></i>
</span>
                    </div>
                   ";
        // line 108
        echo "                </div>
            </div>
        </div>
    </div>
</section>



";
        // line 177
        echo "

<section class=\"app\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-12 col-xs-12\">
                <div class=\"app-inner wow fadeInLeft\" data-wow-delay=\"0.5s\">
                    <h2>Get Free Mobile App from AppStore and GooglePlay</h2>
                    <div class=\"description\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta vel, commodi laudantium officiis ipsum est aliquid dolore omnis, facilis molestiae dicta ipsam aperiam corporis minima mollitia iusto voluptatibus asperiores nemo.</p>
                    </div>
                    <button class=\"btn btn-common btn-lg\"><i class=\"fab fa-apple\"></i> App Store</button>
                    <button class=\"btn btn-danger btn-lg\"><i class=\"fas fa-play\"></i> Google Play</button>
                </div>
            </div>
            <div class=\"col-lg-6\">
            </div>
        </div>
    </div>
</section>


<footer>

    <section class=\"footer-Content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-xs-12 wow fadeIn\" data-wow-delay=\"0.2s\">
                    <div class=\"widget\">
                        <h3 class=\"block-title\">About us</h3>
                        <div class=\"textwidget\">
                            <p>Fast lawyer is an innovative solution that connects clients to lawyer</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-xs-12 wow fadeIn\" data-wow-delay=\"0.4s\">
                    ";
        // line 214
        echo "                        ";
        // line 215
        echo "                        ";
        // line 216
        echo "                            ";
        // line 217
        echo "                            ";
        // line 218
        echo "                            ";
        // line 219
        echo "                            ";
        // line 220
        echo "                            ";
        // line 221
        echo "                            ";
        // line 222
        echo "                            ";
        // line 223
        echo "                            ";
        // line 224
        echo "                            ";
        // line 225
        echo "                            ";
        // line 226
        echo "                        ";
        // line 227
        echo "                    ";
        // line 228
        echo "                </div>
                ";
        // line 230
        echo "                    ";
        // line 231
        echo "                        ";
        // line 232
        echo "                        ";
        // line 233
        echo "                            ";
        // line 234
        echo "                                ";
        // line 239
        echo "                                ";
        // line 240
        echo "                                ";
        // line 245
        echo "                                ";
        // line 246
        echo "                            ";
        // line 247
        echo "                        ";
        // line 248
        echo "                    ";
        // line 249
        echo "                ";
        // line 250
        echo "
            </div>
        </div>
    </section>


    <div id=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"site-info float-left\">
                        <p>Designed and Developed by <a href=\"http://uideck.com/\" rel=\"nofollow\">Marvelous</a></p>
                    </div>
                    <div class=\"bottom-social-icons social-icon float-right\">
                        <a class=\"facebook\" target=\"_blank\" href=\"https://web.facebook.com/GrayGrids\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"twitter\" target=\"_blank\" href=\"https://twitter.com/GrayGrids\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"dribble\" target=\"_blank\" href=\"https://dribbble.com/\"><i class=\"fab fa-dribbble\"></i></a>
                        <a class=\"flickr\" target=\"_blank\" href=\"https://www.flickr.com/\"><i class=\"fab fa-flickr\"></i></a>
                        <a class=\"youtube\" target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"google-plus\" target=\"_blank\" href=\"https://plus.google.com/\"><i class=\"fab fa-google-plus\"></i></a>
                        <a class=\"linkedin\" target=\"_blank\" href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href=\"#\" class=\"back-to-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<div id=\"loader\">
    <div class=\"sk-folding-cube\">
        <div class=\"sk-cube1 sk-cube\"></div>
        <div class=\"sk-cube2 sk-cube\"></div>
        <div class=\"sk-cube4 sk-cube\"></div>
        <div class=\"sk-cube3 sk-cube\"></div>
    </div>
</div>
 ";
        // line 292
        $this->displayBlock('script', $context, $blocks);
        // line 307
        echo "</body>

<!-- Mirrored from demo.graygrids.com/themes/classix/classic/index-v-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 13:58:47 GMT -->
</html>";
    }

    // line 11
    public function block_tittle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<title>FastLawyers | home</title>";
    }

    // line 13
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["img/favicon.png"]), "html", null, true);
        echo "\" type=\"text/css\" >

    <link rel=\"stylesheet\"  href=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/bootstrap.min.css"]), "html", null, true);
        echo "\" type=\"text/css\" >

    <link rel=\"stylesheet\"  href=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["fonts/all.min.css\" type=\"text/css"]), "html", null, true);
        echo "\" type=\"text/css\" >

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["fonts/line-icons/line-icons.css"]), "html", null, true);
        echo "\" type=\"text/css\">

    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["extras/animate.css"]), "html", null, true);
        echo "\"  type=\"text/css\">

    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["extras/owl.carousel.css"]), "html", null, true);
        echo "\"  type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["extras/owl.theme.css"]), "html", null, true);
        echo "\"  type=\"text/css\">

    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/slicknav.min.css"]), "html", null, true);
        echo "\" type=\"text/css\">

    <link rel=\"stylesheet\"  href=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/main.css"]), "html", null, true);
        echo "\"  type=\"text/css\">

    <link rel=\"stylesheet\"  href=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/responsive.css"]), "html", null, true);
        echo "\"   type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\"
          integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\"
          crossorigin=\"anonymous\">
    ";
    }

    // line 40
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "
";
    }

    // line 43
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "
";
    }

    // line 48
    public function block_featuredList($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "
";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "
";
    }

    // line 292
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 293
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/jquery-min.js"]), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\"  src=\"";
        // line 294
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/popper.min.js"]), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/bootstrap.min.js"]), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/jquery.parallax.js"]), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/owl.carousel.min.js"]), "html", null, true);
        echo "\"  ></script>
<script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/color-switcher.js"]), "html", null, true);
        echo "\"  ></script>
<script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/jquery.slicknav.js"]), "html", null, true);
        echo "\"  ></script>
<script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/wow.js"]), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/jquery.counterup.min.js"]), "html", null, true);
        echo "\"  ></script>
<script type=\"text/javascript\"  src=\"";
        // line 302
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/waypoints.min.js"]), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\"  src=\"";
        // line 303
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/form-validator.min.js"]), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\"  src=\"";
        // line 304
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/contact-form-script.js"]), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\"  src=\"";
        // line 305
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/main.js"]), "html", null, true);
        echo "\" ></script>
";
    }

    public function getTemplateName()
    {
        return "layouts/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 305,  440 => 304,  436 => 303,  432 => 302,  428 => 301,  424 => 300,  420 => 299,  416 => 298,  412 => 297,  408 => 296,  404 => 295,  400 => 294,  395 => 293,  391 => 292,  386 => 53,  382 => 52,  377 => 49,  373 => 48,  368 => 44,  364 => 43,  359 => 41,  355 => 40,  346 => 31,  341 => 29,  336 => 27,  331 => 25,  327 => 24,  322 => 22,  317 => 20,  312 => 18,  307 => 16,  301 => 14,  297 => 13,  290 => 11,  283 => 307,  281 => 292,  237 => 250,  235 => 249,  233 => 248,  231 => 247,  229 => 246,  227 => 245,  225 => 240,  223 => 239,  221 => 234,  219 => 233,  217 => 232,  215 => 231,  213 => 230,  210 => 228,  208 => 227,  206 => 226,  204 => 225,  202 => 224,  200 => 223,  198 => 222,  196 => 221,  194 => 220,  192 => 219,  190 => 218,  188 => 217,  186 => 216,  184 => 215,  182 => 214,  144 => 177,  134 => 108,  97 => 69,  85 => 55,  83 => 52,  80 => 51,  78 => 48,  74 => 46,  72 => 43,  70 => 40,  68 => 39,  63 => 36,  61 => 13,  58 => 12,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from demo.graygrids.com/themes/classix/classic/index-v-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 13:58:47 GMT -->
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"author\" content=\"GrayGrids Team\">
    {% block tittle %}<title>FastLawyers | home</title>{% endblock %}

    {% block style %}
    <link rel=\"shortcut icon\" href=\"{{ asset('img/favicon.png') }}\" type=\"text/css\" >

    <link rel=\"stylesheet\"  href=\"{{ asset('css/bootstrap.min.css') }}\" type=\"text/css\" >

    <link rel=\"stylesheet\"  href=\"{{ asset('fonts/all.min.css\" type=\"text/css') }}\" type=\"text/css\" >

    <link rel=\"stylesheet\" href=\"{{ asset('fonts/line-icons/line-icons.css') }}\" type=\"text/css\">

    <link rel=\"stylesheet\" href=\"{{ asset('extras/animate.css') }}\"  type=\"text/css\">

    <link rel=\"stylesheet\" href=\"{{ asset('extras/owl.carousel.css') }}\"  type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('extras/owl.theme.css') }}\"  type=\"text/css\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/slicknav.min.css') }}\" type=\"text/css\">

    <link rel=\"stylesheet\"  href=\"{{ asset('css/main.css') }}\"  type=\"text/css\">

    <link rel=\"stylesheet\"  href=\"{{ asset('css/responsive.css') }}\"   type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\"
          integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\"
          crossorigin=\"anonymous\">
    {% endblock %}
</head>
<body>

{%  include 'includes/header.twig' %}
{% block search %}

{%  endblock %}
{%  block wrapper %}

{%  endblock %}


{%  block featuredList %}

{%  endblock %}

{%  block content %}

{% endblock %}
<section id=\"counter\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"counting wow fadeInDownQuick\" data-wow-delay=\".5s\">
                    <div class=\"icon\">
<span>
<i class=\"lnr lnr-tag\"></i>
</span>
                    </div>
                    {#<div class=\"desc\">
                        <h3 class=\"counter\">12090</h3>
                        <p>Regular Ads</p>
                    </div>#}
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"counting wow fadeInDownQuick\" data-wow-delay=\"1s\">
                    <div class=\"icon\">
<span>
<i class=\"lnr lnr-map\"></i>
</span>
                    </div>
                    <div class=\"desc\">
                        <h3 class=\"counter\">350</h3>
                        <p>Locations</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"counting wow fadeInDownQuick\" data-wow-delay=\"1.5s\">
                    <div class=\"icon\">
<span>
<i class=\"lnr lnr-users\"></i>
</span>
                    </div>
                    <div class=\"desc\">
                        <h3 class=\"counter\">23453</h3>
                        <p>Reguler Members</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"counting wow fadeInDownQuick\" data-wow-delay=\"2s\">
                    <div class=\"icon\">
<span>
<i class=\"lnr lnr-license\"></i>
</span>
                    </div>
                   {# <div class=\"desc\">
                        <h3 class=\"counter\">150</h3>
                        <p>Premium Ads</p>
                    </div>#}
                </div>
            </div>
        </div>
    </div>
</section>



{#<section id=\"pricing-table\" class=\"section\">
    <div class=\"container\">
        <h2 class=\"section-title\">Find a pricing plan that’s fit your needs</h2>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 col-xs-12 wow fadeInDownQuick\" data-wow-delay=\"0s\">
                <div class=\"table wow\">
                    <div class=\"title\">
                        <h3>Free</h3>
                    </div>
                    <div class=\"pricing-header\">
                        <p class=\"price-value\"> <sup>\$</sup>0</p>
                        <p class=\"price-quality\">per month</p>
                    </div>
                    <ul class=\"description\">
                        <li><i class=\"fas fa-check-square\"></i>Free ad posting</li>
                        <li><i class=\"fas fa-times-circle-o\"></i>Featured ads availability</li>
                        <li><i class=\"fas fa-times-circle-o\"></i>Multi-user</li>
                        <li><i class=\"fas fa-check-square\"></i>100% Secure!</li>
                    </ul>
                    <button class=\"btn btn-common\" type=\"submit\">Create Account</button>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-xs-12 wow fadeInDownQuick\" data-wow-delay=\"0.5s\">
                <div class=\"table\" id=\"active-tb\">
                    <div class=\"title\">
                        <h3>Standard</h3>
                    </div>
                    <div class=\"pricing-header\">
                        <p class=\"price-value\"> <sup>\$</sup>12</p>
                        <p class=\"price-quality\">per month</p>
                    </div>
                    <ul class=\"description\">
                        <li><i class=\"fas fa-check-square\"></i>Free ad posting</li>
                        <li><i class=\"fas fa-check-square\"></i>6&nbsp;Featured ads availability</li>
                        <li><i class=\"fas fa-check-square\"></i>3 Users</li>
                        <li><i class=\"fas fa-check-square\"></i>100% Secure!</li>
                    </ul>
                    <button class=\"btn btn-common\" type=\"submit\">Purchase Now</button>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-xs-12 wow fadeInDownQuick\" data-wow-delay=\"0.8s\">
                <div class=\"table\">
                    <div class=\"title\">
                        <h3>Platinum</h3>
                    </div>
                    <div class=\"pricing-header\">
                        <p class=\"price-value\"> <sup>\$</sup>29</p>
                        <p class=\"price-quality\">per month</p>
                    </div>
                    <ul class=\"description\">
                        <li><i class=\"fas fa-check-square\"></i>Free ad posting</li>
                        <li><i class=\"fas fa-check-square\"></i>20&nbsp;Featured ads availability</li>
                        <li><i class=\"fas fa-check-square\"></i>Unlimited users</li>
                        <li><i class=\"fas fa-check-square\"></i>100% Secure!</li>
                    </ul>
                    <button class=\"btn btn-common\" type=\"submit\">Purchase Now</button>
                </div>
            </div>
        </div>
    </div>
</section>#}


<section class=\"app\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-md-12 col-xs-12\">
                <div class=\"app-inner wow fadeInLeft\" data-wow-delay=\"0.5s\">
                    <h2>Get Free Mobile App from AppStore and GooglePlay</h2>
                    <div class=\"description\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta vel, commodi laudantium officiis ipsum est aliquid dolore omnis, facilis molestiae dicta ipsam aperiam corporis minima mollitia iusto voluptatibus asperiores nemo.</p>
                    </div>
                    <button class=\"btn btn-common btn-lg\"><i class=\"fab fa-apple\"></i> App Store</button>
                    <button class=\"btn btn-danger btn-lg\"><i class=\"fas fa-play\"></i> Google Play</button>
                </div>
            </div>
            <div class=\"col-lg-6\">
            </div>
        </div>
    </div>
</section>


<footer>

    <section class=\"footer-Content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-xs-12 wow fadeIn\" data-wow-delay=\"0.2s\">
                    <div class=\"widget\">
                        <h3 class=\"block-title\">About us</h3>
                        <div class=\"textwidget\">
                            <p>Fast lawyer is an innovative solution that connects clients to lawyer</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-xs-12 wow fadeIn\" data-wow-delay=\"0.4s\">
                    {#<div class=\"widget\">#}
                        {#<h3 class=\"block-title\">Useful Links</h3>#}
                        {#<ul class=\"menu\">#}
                            {#<li><a href=\"#\">Home</a></li>#}
                            {#<li><a href=\"#\">Categories</a></li>#}
                            {#<li><a href=\"#\">FAQ</a></li>#}
                            {#<li><a href=\"#\">Left Sidebar</a></li>#}
                            {#<li><a href=\"#\">Pricing Plans</a></li>#}
                            {#<li><a href=\"#\">About</a></li>#}
                            {#<li><a href=\"#\">Contact</a></li>#}
                            {#<li><a href=\"#\">Full Width Page</a></li>#}
                            {#<li><a href=\"#\">Terms of Use</a></li>#}
                            {#<li><a href=\"#\">Privacy Policy</a></li>#}
                        {#</ul>#}
                    {#</div>#}
                </div>
                {#<div class=\"col-lg-3 col-md-6 col-xs-12 wow fadeIn\" data-wow-delay=\"0.6s\">#}
                    {#<div class=\"widget\">#}
                        {#<h3 class=\"block-title\">Latest Tweets</h3>#}
                        {#<div class=\"twitter-content clearfix\">#}
                            {#<ul class=\"twitter-list\">#}
                                {#<li class=\"clearfix\">#}
{#<span>#}
{#Platform to Download and Submit #Bootstrap Templates via @ProductHunt @GrayGrids#}
{#<a href=\"#\">http://t.co/cLo2w7rWOx</a>#}
{#</span>#}
                                {#</li>#}
                                {#<li class=\"clearfix\">#}
{#<span>#}
{#Introducing Bootstrap 4 Features: What’s new, What’s gone!#}
{#<a href=\"#\">http://t.co/cLo2w7rWOx</a>#}
{#</span>#}
                                {#</li>#}
                            {#</ul>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}

            </div>
        </div>
    </section>


    <div id=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"site-info float-left\">
                        <p>Designed and Developed by <a href=\"http://uideck.com/\" rel=\"nofollow\">Marvelous</a></p>
                    </div>
                    <div class=\"bottom-social-icons social-icon float-right\">
                        <a class=\"facebook\" target=\"_blank\" href=\"https://web.facebook.com/GrayGrids\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"twitter\" target=\"_blank\" href=\"https://twitter.com/GrayGrids\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"dribble\" target=\"_blank\" href=\"https://dribbble.com/\"><i class=\"fab fa-dribbble\"></i></a>
                        <a class=\"flickr\" target=\"_blank\" href=\"https://www.flickr.com/\"><i class=\"fab fa-flickr\"></i></a>
                        <a class=\"youtube\" target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"google-plus\" target=\"_blank\" href=\"https://plus.google.com/\"><i class=\"fab fa-google-plus\"></i></a>
                        <a class=\"linkedin\" target=\"_blank\" href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href=\"#\" class=\"back-to-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<div id=\"loader\">
    <div class=\"sk-folding-cube\">
        <div class=\"sk-cube1 sk-cube\"></div>
        <div class=\"sk-cube2 sk-cube\"></div>
        <div class=\"sk-cube4 sk-cube\"></div>
        <div class=\"sk-cube3 sk-cube\"></div>
    </div>
</div>
 {%  block script %}
<script type=\"text/javascript\" src=\"{{ asset('js/jquery-min.js') }}\" ></script>
<script type=\"text/javascript\"  src=\"{{ asset('js/popper.min.js') }}\" ></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\" ></script>
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.parallax.js') }}\" ></script>
<script type=\"text/javascript\" src=\"{{ asset('js/owl.carousel.min.js') }}\"  ></script>
<script type=\"text/javascript\" src=\"{{ asset('js/color-switcher.js') }}\"  ></script>
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.slicknav.js') }}\"  ></script>
<script type=\"text/javascript\" src=\"{{ asset('js/wow.js') }}\" ></script>
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.counterup.min.js') }}\"  ></script>
<script type=\"text/javascript\"  src=\"{{ asset('js/waypoints.min.js') }}\" ></script>
<script type=\"text/javascript\"  src=\"{{ asset('js/form-validator.min.js') }}\" ></script>
<script type=\"text/javascript\"  src=\"{{ asset('js/contact-form-script.js') }}\" ></script>
<script type=\"text/javascript\"  src=\"{{ asset('js/main.js') }}\" ></script>
{% endblock %}
</body>

<!-- Mirrored from demo.graygrids.com/themes/classix/classic/index-v-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 13:58:47 GMT -->
</html>", "layouts/base.twig", "C:\\xampp\\htdocs\\fastLawyer\\resources\\views\\layouts\\base.twig");
    }
}
