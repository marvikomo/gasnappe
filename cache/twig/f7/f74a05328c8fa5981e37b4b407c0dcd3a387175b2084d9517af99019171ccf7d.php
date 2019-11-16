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
class __TwigTemplate_809c994349766adbc3623cf9bd9510ef185f85c950e216e80cd2074ec5fea596 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'caurosel' => [$this, 'block_caurosel'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from wpkixx.com/html/car-carry/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 22:40:06 GMT -->
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <title>Car Carry</title>
    <link rel=\"icon\" type=\"image/png\" href=\"images/fav.png\">

    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/apps.css"]), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/style.css"]), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/color.css"]), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/responsive.css"]), "html", null, true);
        echo "\">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/revolution/settings.css"]), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/revolution/navigation.css"]), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/revolution/pe-icon-7-stroke/css/pe-icon-7-stroke.css"]), "html", null, true);
        echo "\">

</head>
<body>
<div class=\"site-layout\">

    <div class=\"header-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ul class=\"top-links\">
                        <li><i class=\"flaticon-support\"></i><a href=\"support.html\" title=\"\">support center</a></li>
                        <li><i class=\"flaticon-info\"></i><a href=\"faq.html\" title=\"\">Faq's</a></li>
                    </ul>
                    <div class=\"login-area\">
                        <ul>
                            <li class=\"log-in\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("login"), "html", null, true);
        echo "\" title=\"Login\"><i class=\"flaticon-unlocked\"></i> login</a></li>
                            <li class=\"Register\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("register"), "html", null, true);
        echo "\" title=\"Register\"><i class=\"flaticon-checked\"></i> register</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- topbar -->

    <div class=\"topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <header>
                        <div class=\"logo\">
                            <a href=\"index-2.html\" title=\"index.html\"><img src=\"images/logo-black.png\" alt=\"\"></a>
                        </div>
                        <nav>
                            <ul class=\"main-menu\">
                                <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("home"), "html", null, true);
        echo "\" title=\"\">Home</a>

                                </li>
                               
                                <li><a href=\"#\" title=\"\">rides</a>
                                    <ul>
                                        <li><a href=\"ride-listing.html\" title=\"\">ride listing</a></li>
                                        <li><a href=\"ride-request.html\" title=\"\">ride request</a></li>
                                        <li><a href=\"ride-detail.html\" title=\"\">ride detail</a></li>
                                        <li><a href=\"ride-requests-list.html\" title=\"\">ride request list</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\" title=\"\">leasing</a>
                                    <ul>
                                        <li><a href=\"leasing.html\" title=\"\">Leasing Page</a></li>
                                        <li><a href=\"leasing-car-step1.html\" title=\"\">leasing Step 1</a></li>
                                        <li><a href=\"leasing-car-step2.html\" title=\"\">leasing step 2</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\" title=\"\">profiles</a>
                                    <ul>
                                        <li><a href=\"user-profile.html\" title=\"\">Profile user</a></li>
                                        <li><a href=\"user-profile-v2.html\" title=\"\">Profile user v2</a></li>
                                        <li><a href=\"my-profile.html\" title=\"\">My profile</a></li>
                                        <li><a href=\"profile-balance.html\" title=\"\">profile balance</a></li>
                                        <li><a href=\"profile-earning.html\" title=\"\">profile earning</a></li>
                                        <li><a href=\"profile-edit.html\" title=\"\">profile edit page</a></li>
                                        <li><a href=\"profile-invite-friend.html\" title=\"\">profile invite friend</a></li>
                                        <li><a href=\"profile-points.html\" title=\"\">profile points</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\" title=\"\"><i class=\"fa fa-ellipsis-v\"></i></a>
                                    <ul>
                                        <li><a href=\"login.html\" title=\"\">Login page</a></li>
                                        <li><a href=\"register.html\" title=\"\">Register Page</a></li>
                                        <li><a href=\"how-this-work.html\" title=\"\">how it's work</a></li>
                                        <li><a href=\"faq.html\" title=\"\">faq's</a></li>
                                        <li><a href=\"points.html\" title=\"\">poinst</a></li>
                                        <li><a href=\"coming-soon.html\" title=\"\">Coming Soon</a></li>
                                        <li><a href=\"404.html\" title=\"\">404 Page</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class=\"time-info\">
                            <i class=\"flaticon-phone-call-1\"></i>
                            <span>Whatsapp now <em>+1-124-3456-2</em></span>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div><!-- topbar header -->

    <div class=\"responsive-header\">
        <div class=\"res-top\">
            <ul>
                <li><a href=\"#\" title=\"Home\"><i class=\"flaticon-home\"></i></a></li>
                <li><a href=\"#\" title=\"Faq's\"><i class=\"flaticon-info\"></i></a></li>
                <li><a href=\"#\" title=\"Support center\"><i class=\"flaticon-support\"></i></a></li>
                <li><a href=\"#\" title=\"Login\"><i class=\"flaticon-unlocked\"></i></a></li>
                <li><a href=\"#\" title=\"New register\"><i class=\"flaticon-checked\"></i></a></li>
                <li class=\"post-new\"><a href=\"#\" title=\"New post\">+Post</a></li>
            </ul>
        </div>
        <div class=\"logomenu-bar\">
            <div class=\"logo\"><a href=\"index-2.html\" title=\"\"><img src=\"images/logo-black.png\" alt=\"\"></a></div>
            <span class=\"responsviemenu-btn\"><i class=\"flaticon-menu-1\"></i></span>
        </div>
        <div class=\"responsive-menu\">
            <span class=\"close-btn\"><i class=\"flaticon-error-1\"></i></span>
            <ul>
                <li><a href=\"index-2.html\" title=\"\">Home</a></li>
                <li class=\"menu-item-has-children\"><a href=\"#\" title=\"\">cars</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"index-after-login.html\" title=\"\">page after login</a></li>
                        <li><a href=\"cars.html\" title=\"\">cars</a></li>
                        <li><a href=\"car-profile.html\" title=\"\">car profile</a></li>
                        <li><a href=\"car-detail.html\" title=\"\">cars detail</a></li>
                        <li><a href=\"create-route-notification.html\" title=\"\">route notification</a></li>
                        <li><a href=\"submit-car-intro.html\" title=\"\">Submit car introduction</a></li>
                        <li><a href=\"submit-car-for-rent.html\" title=\"\">submit car for rent</a></li>
                        <li><a href=\"submit-route.html\" title=\"\">submit car route</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\"><a href=\"#\" title=\"\">rides</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"ride-listing.html\" title=\"\">ride listing</a></li>
                        <li><a href=\"ride-request.html\" title=\"\">ride request</a></li>
                        <li><a href=\"ride-detail.html\" title=\"\">ride detail</a></li>
                        <li><a href=\"ride-requests-list.html\" title=\"\">ride request list</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\"><a href=\"#\" title=\"\">leasing</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"leasing.html\" title=\"\">Leasing Page</a></li>
                        <li><a href=\"leasing-car-step1.html\" title=\"\">leasing Step 1</a></li>
                        <li><a href=\"leasing-car-step2.html\" title=\"\">leasing step 2</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\"><a href=\"#\" title=\"\">profiles</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"user-profile.html\" title=\"\">Profile user</a></li>
                        <li><a href=\"user-profile-v2.html\" title=\"\">Profile user v2</a></li>
                        <li><a href=\"my-profile.html\" title=\"\">My profile</a></li>
                        <li><a href=\"profile-balance.html\" title=\"\">profile balance</a></li>
                        <li><a href=\"profile-earning.html\" title=\"\">profile earning</a></li>
                        <li><a href=\"profile-edit.html\" title=\"\">profile edit page</a></li>
                        <li><a href=\"profile-invite-friend.html\" title=\"\">profile invite friend</a></li>
                        <li><a href=\"profile-points.html\" title=\"\">profile points</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\"><a href=\"#\" title=\"\">more pages</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("login"), "html", null, true);
        echo "\" title=\"\">Login page</a></li>
                        <li><a href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("register"), "html", null, true);
        echo "\" title=\"\">Register Page</a></li>
                        <li><a href=\"how-this-work.html\" title=\"\">how it's work</a></li>
                        <li><a href=\"faq.html\" title=\"\">faq's</a></li>
                        <li><a href=\"points.html\" title=\"\">poinst</a></li>
                        <li><a href=\"coming-soon.html\" title=\"\">Coming Soon</a></li>
                        <li><a href=\"404.html\" title=\"\">404 Page</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- Responsive Header -->

    ";
        // line 185
        $this->loadTemplate("includes/flash.twig", "layouts/base.twig", 185)->display($context);
        // line 186
        echo "    ";
        $this->displayBlock('caurosel', $context, $blocks);
        // line 188
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 191
        echo "












    <section>
        <div class=\"space no-space dark-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-4\">
                        <div class=\"servize\">
                            <i class=\"flaticon-placeholder\"></i>
                            <div class=\"serviz-meta\">
                                <span>Tucson, AZ 80210: 501 Lane</span>
                                <i>Canada</i>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-4\">
                        <div class=\"servize\">
                            <i class=\"flaticon-24-hours-1\"></i>
                            <div class=\"serviz-meta\">
                                <span>Tool free number 24/7</span>
                                <i>+1-111-222-333</i>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-4\">
                        <div class=\"servize\">
                            <i class=\"flaticon-24-hours\"></i>
                            <div class=\"serviz-meta\">
                                <span>Full time services</span>
                                <i>24/7</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- footer top -->

    <footer class=\"light\">
        <div class=\"mockup-right\">
            <img src=\"images/resources/footer-mockup.png\" alt=\"\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"widget\">
                        <a href=\"index-2.html\" title=\"\"><img src=\"images/logo-black.png\" alt=\"\"></a>
                        <p>
                            The trio took this simple idea and built it into the world’s leading carpooling platform, connecting millions of people going the same way.
                        </p>
                        <ul class=\"social\">
                            <li><a href=\"#\" title=\"\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" title=\"\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" title=\"\" class=\"instagram\"><i class=\"fa fa-instagram\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-sm-6\">
                    <div class=\"widget\">
                        <div class=\"widget-title\"><h4>useful links</h4></div>
                        <ul class=\"list-style\">
                            <li><a href=\"#\" title=\"\">leasing</a></li>
                            <li><a href=\"#\" title=\"\">submit route</a></li>
                            <li><a href=\"#\" title=\"\">how does it work?</a></li>
                            <li><a href=\"#\" title=\"\">agent listings</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"widget\">
                        <div class=\"widget-title\"><h4>weekly news letter</h4></div>
                        <div class=\"news-letter\">
                            <p>We may send you information about related events, webinars, products and services which we believe.</p>
                            <form method=\"post\">
                                <input type=\"text\" placeholder=\"Enter your email address\">
                                <button type=\"submit\"><i class=\"fa fa-paper-plane-o\"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-sm-6\">
                    <div class=\"widget\">
                        <div class=\"widget-title\"><h4>download apps</h4></div>
                        <ul class=\"colla-apps\">
                            <li><a href=\"#\" title=\"\"><i class=\"flaticon-android\"></i> android</a></li>
                            <li><a href=\"#\" title=\"\"><i class=\"flaticon-apple\"></i> iPhone</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bottombar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <span class=\"copyright\">© 2019. All rights reserved.</span>
                        <i><img src=\"images/credit-cards.png\" alt=\"\"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- footer -->

</div>
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/apps.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 307
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/script.js"]), "html", null, true);
        echo "\"></script>

<!-- REVOLUTION JS FILES -->
<script type=\"text/javascript\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/jquery.themepunch.tools.min.js"]), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/jquery.themepunch.revolution.min.js"]), "html", null, true);
        echo "\"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  -->
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/revolution.extension.actions.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/revolution.extension.carousel.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/revolution.extension.kenburn.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/revolution.extension.layeranimation.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/revolution.extension.migration.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 319
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/revolution.extension.navigation.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/revolution.extension.parallax.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/revolution.extension.slideanims.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/revolution.extension.video.min.js"]), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/revolution/revolution.initialize.js"]), "html", null, true);
        echo "\"></script>

</body>

<!-- Mirrored from wpkixx.com/html/car-carry/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 22:40:07 GMT -->
</html>\t\t";
    }

    // line 186
    public function block_caurosel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "    ";
    }

    // line 188
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "
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
        return array (  464 => 189,  460 => 188,  456 => 187,  452 => 186,  442 => 323,  438 => 322,  434 => 321,  430 => 320,  426 => 319,  422 => 318,  418 => 317,  414 => 316,  410 => 315,  406 => 314,  400 => 311,  396 => 310,  390 => 307,  386 => 306,  269 => 191,  266 => 188,  263 => 186,  261 => 185,  246 => 173,  242 => 172,  124 => 57,  102 => 38,  98 => 37,  79 => 21,  75 => 20,  71 => 19,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from wpkixx.com/html/car-carry/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 22:40:06 GMT -->
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <title>Car Carry</title>
    <link rel=\"icon\" type=\"image/png\" href=\"images/fav.png\">

    <link rel=\"stylesheet\" href=\"{{asset('css/apps.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/color.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/responsive.css')}}\">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/revolution/settings.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/revolution/navigation.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/revolution/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}\">

</head>
<body>
<div class=\"site-layout\">

    <div class=\"header-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ul class=\"top-links\">
                        <li><i class=\"flaticon-support\"></i><a href=\"support.html\" title=\"\">support center</a></li>
                        <li><i class=\"flaticon-info\"></i><a href=\"faq.html\" title=\"\">Faq's</a></li>
                    </ul>
                    <div class=\"login-area\">
                        <ul>
                            <li class=\"log-in\"><a href=\"{{ path_for('login') }}\" title=\"Login\"><i class=\"flaticon-unlocked\"></i> login</a></li>
                            <li class=\"Register\"><a href=\"{{ path_for('register') }}\" title=\"Register\"><i class=\"flaticon-checked\"></i> register</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- topbar -->

    <div class=\"topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <header>
                        <div class=\"logo\">
                            <a href=\"index-2.html\" title=\"index.html\"><img src=\"images/logo-black.png\" alt=\"\"></a>
                        </div>
                        <nav>
                            <ul class=\"main-menu\">
                                <li><a href=\"{{ path_for('home') }}\" title=\"\">Home</a>

                                </li>
                               
                                <li><a href=\"#\" title=\"\">rides</a>
                                    <ul>
                                        <li><a href=\"ride-listing.html\" title=\"\">ride listing</a></li>
                                        <li><a href=\"ride-request.html\" title=\"\">ride request</a></li>
                                        <li><a href=\"ride-detail.html\" title=\"\">ride detail</a></li>
                                        <li><a href=\"ride-requests-list.html\" title=\"\">ride request list</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\" title=\"\">leasing</a>
                                    <ul>
                                        <li><a href=\"leasing.html\" title=\"\">Leasing Page</a></li>
                                        <li><a href=\"leasing-car-step1.html\" title=\"\">leasing Step 1</a></li>
                                        <li><a href=\"leasing-car-step2.html\" title=\"\">leasing step 2</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\" title=\"\">profiles</a>
                                    <ul>
                                        <li><a href=\"user-profile.html\" title=\"\">Profile user</a></li>
                                        <li><a href=\"user-profile-v2.html\" title=\"\">Profile user v2</a></li>
                                        <li><a href=\"my-profile.html\" title=\"\">My profile</a></li>
                                        <li><a href=\"profile-balance.html\" title=\"\">profile balance</a></li>
                                        <li><a href=\"profile-earning.html\" title=\"\">profile earning</a></li>
                                        <li><a href=\"profile-edit.html\" title=\"\">profile edit page</a></li>
                                        <li><a href=\"profile-invite-friend.html\" title=\"\">profile invite friend</a></li>
                                        <li><a href=\"profile-points.html\" title=\"\">profile points</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\" title=\"\"><i class=\"fa fa-ellipsis-v\"></i></a>
                                    <ul>
                                        <li><a href=\"login.html\" title=\"\">Login page</a></li>
                                        <li><a href=\"register.html\" title=\"\">Register Page</a></li>
                                        <li><a href=\"how-this-work.html\" title=\"\">how it's work</a></li>
                                        <li><a href=\"faq.html\" title=\"\">faq's</a></li>
                                        <li><a href=\"points.html\" title=\"\">poinst</a></li>
                                        <li><a href=\"coming-soon.html\" title=\"\">Coming Soon</a></li>
                                        <li><a href=\"404.html\" title=\"\">404 Page</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class=\"time-info\">
                            <i class=\"flaticon-phone-call-1\"></i>
                            <span>Whatsapp now <em>+1-124-3456-2</em></span>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div><!-- topbar header -->

    <div class=\"responsive-header\">
        <div class=\"res-top\">
            <ul>
                <li><a href=\"#\" title=\"Home\"><i class=\"flaticon-home\"></i></a></li>
                <li><a href=\"#\" title=\"Faq's\"><i class=\"flaticon-info\"></i></a></li>
                <li><a href=\"#\" title=\"Support center\"><i class=\"flaticon-support\"></i></a></li>
                <li><a href=\"#\" title=\"Login\"><i class=\"flaticon-unlocked\"></i></a></li>
                <li><a href=\"#\" title=\"New register\"><i class=\"flaticon-checked\"></i></a></li>
                <li class=\"post-new\"><a href=\"#\" title=\"New post\">+Post</a></li>
            </ul>
        </div>
        <div class=\"logomenu-bar\">
            <div class=\"logo\"><a href=\"index-2.html\" title=\"\"><img src=\"images/logo-black.png\" alt=\"\"></a></div>
            <span class=\"responsviemenu-btn\"><i class=\"flaticon-menu-1\"></i></span>
        </div>
        <div class=\"responsive-menu\">
            <span class=\"close-btn\"><i class=\"flaticon-error-1\"></i></span>
            <ul>
                <li><a href=\"index-2.html\" title=\"\">Home</a></li>
                <li class=\"menu-item-has-children\"><a href=\"#\" title=\"\">cars</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"index-after-login.html\" title=\"\">page after login</a></li>
                        <li><a href=\"cars.html\" title=\"\">cars</a></li>
                        <li><a href=\"car-profile.html\" title=\"\">car profile</a></li>
                        <li><a href=\"car-detail.html\" title=\"\">cars detail</a></li>
                        <li><a href=\"create-route-notification.html\" title=\"\">route notification</a></li>
                        <li><a href=\"submit-car-intro.html\" title=\"\">Submit car introduction</a></li>
                        <li><a href=\"submit-car-for-rent.html\" title=\"\">submit car for rent</a></li>
                        <li><a href=\"submit-route.html\" title=\"\">submit car route</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\"><a href=\"#\" title=\"\">rides</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"ride-listing.html\" title=\"\">ride listing</a></li>
                        <li><a href=\"ride-request.html\" title=\"\">ride request</a></li>
                        <li><a href=\"ride-detail.html\" title=\"\">ride detail</a></li>
                        <li><a href=\"ride-requests-list.html\" title=\"\">ride request list</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\"><a href=\"#\" title=\"\">leasing</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"leasing.html\" title=\"\">Leasing Page</a></li>
                        <li><a href=\"leasing-car-step1.html\" title=\"\">leasing Step 1</a></li>
                        <li><a href=\"leasing-car-step2.html\" title=\"\">leasing step 2</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\"><a href=\"#\" title=\"\">profiles</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"user-profile.html\" title=\"\">Profile user</a></li>
                        <li><a href=\"user-profile-v2.html\" title=\"\">Profile user v2</a></li>
                        <li><a href=\"my-profile.html\" title=\"\">My profile</a></li>
                        <li><a href=\"profile-balance.html\" title=\"\">profile balance</a></li>
                        <li><a href=\"profile-earning.html\" title=\"\">profile earning</a></li>
                        <li><a href=\"profile-edit.html\" title=\"\">profile edit page</a></li>
                        <li><a href=\"profile-invite-friend.html\" title=\"\">profile invite friend</a></li>
                        <li><a href=\"profile-points.html\" title=\"\">profile points</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\"><a href=\"#\" title=\"\">more pages</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"{{ path_for('login') }}\" title=\"\">Login page</a></li>
                        <li><a href=\"{{ path_for('register') }}\" title=\"\">Register Page</a></li>
                        <li><a href=\"how-this-work.html\" title=\"\">how it's work</a></li>
                        <li><a href=\"faq.html\" title=\"\">faq's</a></li>
                        <li><a href=\"points.html\" title=\"\">poinst</a></li>
                        <li><a href=\"coming-soon.html\" title=\"\">Coming Soon</a></li>
                        <li><a href=\"404.html\" title=\"\">404 Page</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- Responsive Header -->

    {%  include 'includes/flash.twig' %}
    {%  block caurosel %}
    {%  endblock %}
    {%  block content %}

    {%  endblock %}













    <section>
        <div class=\"space no-space dark-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-4\">
                        <div class=\"servize\">
                            <i class=\"flaticon-placeholder\"></i>
                            <div class=\"serviz-meta\">
                                <span>Tucson, AZ 80210: 501 Lane</span>
                                <i>Canada</i>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-4\">
                        <div class=\"servize\">
                            <i class=\"flaticon-24-hours-1\"></i>
                            <div class=\"serviz-meta\">
                                <span>Tool free number 24/7</span>
                                <i>+1-111-222-333</i>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-4\">
                        <div class=\"servize\">
                            <i class=\"flaticon-24-hours\"></i>
                            <div class=\"serviz-meta\">
                                <span>Full time services</span>
                                <i>24/7</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- footer top -->

    <footer class=\"light\">
        <div class=\"mockup-right\">
            <img src=\"images/resources/footer-mockup.png\" alt=\"\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"widget\">
                        <a href=\"index-2.html\" title=\"\"><img src=\"images/logo-black.png\" alt=\"\"></a>
                        <p>
                            The trio took this simple idea and built it into the world’s leading carpooling platform, connecting millions of people going the same way.
                        </p>
                        <ul class=\"social\">
                            <li><a href=\"#\" title=\"\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" title=\"\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" title=\"\" class=\"instagram\"><i class=\"fa fa-instagram\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-sm-6\">
                    <div class=\"widget\">
                        <div class=\"widget-title\"><h4>useful links</h4></div>
                        <ul class=\"list-style\">
                            <li><a href=\"#\" title=\"\">leasing</a></li>
                            <li><a href=\"#\" title=\"\">submit route</a></li>
                            <li><a href=\"#\" title=\"\">how does it work?</a></li>
                            <li><a href=\"#\" title=\"\">agent listings</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"widget\">
                        <div class=\"widget-title\"><h4>weekly news letter</h4></div>
                        <div class=\"news-letter\">
                            <p>We may send you information about related events, webinars, products and services which we believe.</p>
                            <form method=\"post\">
                                <input type=\"text\" placeholder=\"Enter your email address\">
                                <button type=\"submit\"><i class=\"fa fa-paper-plane-o\"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-sm-6\">
                    <div class=\"widget\">
                        <div class=\"widget-title\"><h4>download apps</h4></div>
                        <ul class=\"colla-apps\">
                            <li><a href=\"#\" title=\"\"><i class=\"flaticon-android\"></i> android</a></li>
                            <li><a href=\"#\" title=\"\"><i class=\"flaticon-apple\"></i> iPhone</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bottombar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <span class=\"copyright\">© 2019. All rights reserved.</span>
                        <i><img src=\"images/credit-cards.png\" alt=\"\"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- footer -->

</div>
<script src=\"{{asset('js/apps.min.js')}}\"></script>
<script src=\"{{asset('js/script.js')}}\"></script>

<!-- REVOLUTION JS FILES -->
<script type=\"text/javascript\" src=\"{{asset('js/revolution/jquery.themepunch.tools.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('js/revolution/jquery.themepunch.revolution.min.js')}}\"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  -->
<script src=\"{{asset('js/revolution/revolution.extension.actions.min.js')}}\"></script>
<script src=\"{{asset('js/revolution/revolution.extension.carousel.min.js')}}\"></script>
<script src=\"{{asset('js/revolution/revolution.extension.kenburn.min.js')}}\"></script>
<script src=\"{{asset('js/revolution/revolution.extension.layeranimation.min.js')}}\"></script>
<script src=\"{{asset('js/revolution/revolution.extension.migration.min.js')}}\"></script>
<script src=\"{{asset('js/revolution/revolution.extension.navigation.min.js')}}\"></script>
<script src=\"{{asset('js/revolution/revolution.extension.parallax.min.js')}}\"></script>
<script src=\"{{asset('js/revolution/revolution.extension.slideanims.min.js')}}\"></script>
<script src=\"{{asset('js/revolution/revolution.extension.video.min.js')}}\"></script>
<script src=\"{{asset('js/revolution/revolution.initialize.js')}}\"></script>

</body>

<!-- Mirrored from wpkixx.com/html/car-carry/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 22:40:07 GMT -->
</html>\t\t", "layouts/base.twig", "C:\\xampp\\htdocs\\gasnappe\\resources\\views\\layouts\\base.twig");
    }
}
