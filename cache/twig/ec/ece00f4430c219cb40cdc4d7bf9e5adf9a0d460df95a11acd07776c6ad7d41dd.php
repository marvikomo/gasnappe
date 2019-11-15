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
class __TwigTemplate_c42db4bbf6ee2fc59052810c49f69f65bf1442f94797b120fcb07a63ddb5ad83 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "register.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("includes/header.twig", "register.twig", 4)->display($context);
    }

    // line 6
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
    <div class=\"page-header\" style=\"background: url(";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["img/banner1.jpg"]), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"breadcrumb-wrapper\">
                        <h2 class=\"page-title\">Join Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
    <section id=\"content\">
        <div class=\"container\">
            <form method=\"post\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("register.profile"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
                ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "field", [], "any", false, false, false, 25);
        echo "
            <div class=\"row justify-content-center\">
                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"row page-content\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
                            <div class=\"inner-box\">
                                <div class=\"tg-contactdetail\">
                                    <h2 class=\"title-2\">Contact Detail</h2>
                                    <div class=\"dashboard-wrapper\">

                                        <div class=\"form-group mb-3\">
                                            <strong>I’m a:</strong>
                                            <div class=\"tg-selectgroup\">
                                        <span class=\"tg-radio\">
                                        <input id=\"lawyer\" type=\"radio\" name=\"usertype\" value=\"1\" checked >
                                        <label for=\"tg-sameuser\">Lawyer</label>
                                        </span>
                                                                                        <span class=\"tg-radio\">
                                        <input id=\"firm\" type=\"radio\" name=\"usertype\" value=\"2\">
                                        <label for=\"tg-someoneelse\">Law Firm</label>
                                        </span>
                                            </div>
                                        </div>
                                        <div class=\"form-group mb-3\" id=\"name\">
                                            <label class=\"control-label\">Name*</label>
                                            <input class=\"form-control input-md\" name=\"name\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3\" id=\"bname\">
                                            <label class=\"control-label\">Business Name*</label>
                                            <input class=\"form-control input-md\" name=\"bname\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Phone*</label>
                                            <input class=\"form-control input-md\" name=\"contact_phone\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Enter Email Address</label>
                                            <input class=\"form-control input-md\" name=\"email\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Password*</label>
                                            <input class=\"form-control input-md\" name=\"password\" type=\"password\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Confirm Password*</label>
                                            <input class=\"form-control input-md\" name=\"confirm_password\" type=\"password\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Enter Address</label>
                                            <input class=\"form-control input-md\" name=\"address\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3 tg-inputwithicon\">
                                            <label class=\"control-label\">Country</label>
                                            <div class=\"tg-select form-control\">
                                                <select name = \"country\">
                                                    <option value=\"none\">Select Country...</option>
                                                    <option value=\"Nigeria\">Nigeria</option>

                                                </select>
                                                <i class=\"fas fa-angle-down\"></i>
                                            </div>
                                        </div>
                                        <div class=\"form-group mb-3 tg-inputwithicon\">
                                            <label class=\"control-label\">State</label>
                                            <div class=\"tg-select form-control\">
                                                <select name=\"state\">
                                                    <option value=\"none\">Select State...</option>
                                                    <option value=\"Edo State\">Edo State</option>

                                                </select>
                                                <i class=\"fas fa-angle-down\"></i>
                                            </div>
                                        </div>
                                        <div class=\"form-group mb-3 tg-inputwithicon\">
                                            <label class=\"control-label\">City</label>
                                            <div class=\"tg-select form-control\">
                                                <select name=\"city\">
                                                    <option value=\"none\">Select City...</option>
                                                    <option value=\"Benin City\">Benin City</option>

                                                </select>
                                                <i class=\"fas fa-angle-down\"></i>
                                            </div>
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Land Mark</label>
                                            <input class=\"form-control input-md\" name=\"land_mark\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">LGA</label>
                                            <input class=\"form-control input-md\" name=\"lga\" type=\"text\">
                                        </div>

                                        <div class=\"tg-checkbox mb-2\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"tg-agreetermsandrules\">
                                                <label class=\"custom-control-label\" for=\"tg-agreetermsandrules\">I agree to all <a href=\"javascript:void(0);\">Terms of Use &amp; Posting Rules</a></label>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-common\" type=\"submit\">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
                            <div class=\"inner-box\">
                                <h2 class=\"title-2\">Track Record</h2>
                                <div class=\"dashboard-wrapper\">
                                    <div class=\"form-group mb-3 not_common\">
                                        <label class=\"control-label\">Title</label>
                                        <input class=\"form-control input-md\" name=\"title\" placeholder=\"Title\" type=\"text\">
                                    </div>
                                    <div class=\"form-group mb-3 not_common\" >
                                        <label class=\"control-label\">Year of Call</label>
                                        <input class=\"form-control input-md\" name=\"yoc\" placeholder=\"Year of Call\" type=\"text\">
                                    </div>
                                    <div class=\"form-group mb-3\">
                                        <label class=\"control-label\">Enrollment Numberr</label>
                                        <input class=\"form-control input-md\" name=\"enrollment_number\" placeholder=\"Enrollment Number\" type=\"text\">
                                    </div>
                                    <div class=\"form-group mb-3 tg-inputwithicon\">
                                        <label class=\"control-label\">Area of specialty</label>
                                        <div class=\"tg-select form-control\">
                                            <select name=\"aos\">
                                                <option value=\"none\">Choose Specialty</option>
                                                <option value=\"Financial Law\">Financial Law</option>
                                                <option value=\"Crime Law\">Crime Law</option>
                                                <option value=\"Coroperate Law\">Coroperate Law</option>

                                            </select>
                                            <i class=\"fas fa-angle-down\"></i>
                                        </div>
                                    </div>
                                    <div class=\"form-group mb-3\">
                                        <label class=\"control-label\">Brief profile</label>
                                        <textarea name=\"bf\"  class=\"form-control input-md\"></textarea>
                                    </div>

                                        <label class=\"tg-fileuploadlabel\" for=\"tg-photogallery\">
                                            <span>Drop files anywhere to upload<br>Logo or Profile Picture</br></span>


                                            <input id=\"\" class=\"\" type=\"file\" name=\"image\">
                                        </label>






                                    <label class=\"tg-fileuploadlabel\" for=\"tg-photogallery\" id=\"for_firm\">
                                        <span>Upload Neccessary Certificate</span>


                                        <input id=\"\" class=\"tg-fileinput\" type=\"file\" name=\"doc\">
                                        <input id=\"type\" class=\"tg-fileinput\" type=\"hidden\" name=\"type\" value=\"\">
                                    </label>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>

";
    }

    // line 198
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 199
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
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 199,  278 => 198,  102 => 25,  98 => 24,  93 => 21,  89 => 20,  73 => 8,  70 => 7,  66 => 6,  61 => 4,  57 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.twig' %}
{% block title %}Register{% endblock %}
{%  block header %}
    {%  include 'includes/header.twig' %}
{%  endblock %}
{% block search %}

    <div class=\"page-header\" style=\"background: url({{ asset('img/banner1.jpg')  }});\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"breadcrumb-wrapper\">
                        <h2 class=\"page-title\">Join Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block content %}

    <section id=\"content\">
        <div class=\"container\">
            <form method=\"post\" action=\"{{ path_for('register.profile') }}\" enctype=\"multipart/form-data\">
                {{ csrf.field |raw }}
            <div class=\"row justify-content-center\">
                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"row page-content\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
                            <div class=\"inner-box\">
                                <div class=\"tg-contactdetail\">
                                    <h2 class=\"title-2\">Contact Detail</h2>
                                    <div class=\"dashboard-wrapper\">

                                        <div class=\"form-group mb-3\">
                                            <strong>I’m a:</strong>
                                            <div class=\"tg-selectgroup\">
                                        <span class=\"tg-radio\">
                                        <input id=\"lawyer\" type=\"radio\" name=\"usertype\" value=\"1\" checked >
                                        <label for=\"tg-sameuser\">Lawyer</label>
                                        </span>
                                                                                        <span class=\"tg-radio\">
                                        <input id=\"firm\" type=\"radio\" name=\"usertype\" value=\"2\">
                                        <label for=\"tg-someoneelse\">Law Firm</label>
                                        </span>
                                            </div>
                                        </div>
                                        <div class=\"form-group mb-3\" id=\"name\">
                                            <label class=\"control-label\">Name*</label>
                                            <input class=\"form-control input-md\" name=\"name\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3\" id=\"bname\">
                                            <label class=\"control-label\">Business Name*</label>
                                            <input class=\"form-control input-md\" name=\"bname\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Phone*</label>
                                            <input class=\"form-control input-md\" name=\"contact_phone\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Enter Email Address</label>
                                            <input class=\"form-control input-md\" name=\"email\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Password*</label>
                                            <input class=\"form-control input-md\" name=\"password\" type=\"password\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Confirm Password*</label>
                                            <input class=\"form-control input-md\" name=\"confirm_password\" type=\"password\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Enter Address</label>
                                            <input class=\"form-control input-md\" name=\"address\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3 tg-inputwithicon\">
                                            <label class=\"control-label\">Country</label>
                                            <div class=\"tg-select form-control\">
                                                <select name = \"country\">
                                                    <option value=\"none\">Select Country...</option>
                                                    <option value=\"Nigeria\">Nigeria</option>

                                                </select>
                                                <i class=\"fas fa-angle-down\"></i>
                                            </div>
                                        </div>
                                        <div class=\"form-group mb-3 tg-inputwithicon\">
                                            <label class=\"control-label\">State</label>
                                            <div class=\"tg-select form-control\">
                                                <select name=\"state\">
                                                    <option value=\"none\">Select State...</option>
                                                    <option value=\"Edo State\">Edo State</option>

                                                </select>
                                                <i class=\"fas fa-angle-down\"></i>
                                            </div>
                                        </div>
                                        <div class=\"form-group mb-3 tg-inputwithicon\">
                                            <label class=\"control-label\">City</label>
                                            <div class=\"tg-select form-control\">
                                                <select name=\"city\">
                                                    <option value=\"none\">Select City...</option>
                                                    <option value=\"Benin City\">Benin City</option>

                                                </select>
                                                <i class=\"fas fa-angle-down\"></i>
                                            </div>
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">Land Mark</label>
                                            <input class=\"form-control input-md\" name=\"land_mark\" type=\"text\">
                                        </div>
                                        <div class=\"form-group mb-3\">
                                            <label class=\"control-label\">LGA</label>
                                            <input class=\"form-control input-md\" name=\"lga\" type=\"text\">
                                        </div>

                                        <div class=\"tg-checkbox mb-2\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"tg-agreetermsandrules\">
                                                <label class=\"custom-control-label\" for=\"tg-agreetermsandrules\">I agree to all <a href=\"javascript:void(0);\">Terms of Use &amp; Posting Rules</a></label>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-common\" type=\"submit\">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
                            <div class=\"inner-box\">
                                <h2 class=\"title-2\">Track Record</h2>
                                <div class=\"dashboard-wrapper\">
                                    <div class=\"form-group mb-3 not_common\">
                                        <label class=\"control-label\">Title</label>
                                        <input class=\"form-control input-md\" name=\"title\" placeholder=\"Title\" type=\"text\">
                                    </div>
                                    <div class=\"form-group mb-3 not_common\" >
                                        <label class=\"control-label\">Year of Call</label>
                                        <input class=\"form-control input-md\" name=\"yoc\" placeholder=\"Year of Call\" type=\"text\">
                                    </div>
                                    <div class=\"form-group mb-3\">
                                        <label class=\"control-label\">Enrollment Numberr</label>
                                        <input class=\"form-control input-md\" name=\"enrollment_number\" placeholder=\"Enrollment Number\" type=\"text\">
                                    </div>
                                    <div class=\"form-group mb-3 tg-inputwithicon\">
                                        <label class=\"control-label\">Area of specialty</label>
                                        <div class=\"tg-select form-control\">
                                            <select name=\"aos\">
                                                <option value=\"none\">Choose Specialty</option>
                                                <option value=\"Financial Law\">Financial Law</option>
                                                <option value=\"Crime Law\">Crime Law</option>
                                                <option value=\"Coroperate Law\">Coroperate Law</option>

                                            </select>
                                            <i class=\"fas fa-angle-down\"></i>
                                        </div>
                                    </div>
                                    <div class=\"form-group mb-3\">
                                        <label class=\"control-label\">Brief profile</label>
                                        <textarea name=\"bf\"  class=\"form-control input-md\"></textarea>
                                    </div>

                                        <label class=\"tg-fileuploadlabel\" for=\"tg-photogallery\">
                                            <span>Drop files anywhere to upload<br>Logo or Profile Picture</br></span>


                                            <input id=\"\" class=\"\" type=\"file\" name=\"image\">
                                        </label>






                                    <label class=\"tg-fileuploadlabel\" for=\"tg-photogallery\" id=\"for_firm\">
                                        <span>Upload Neccessary Certificate</span>


                                        <input id=\"\" class=\"tg-fileinput\" type=\"file\" name=\"doc\">
                                        <input id=\"type\" class=\"tg-fileinput\" type=\"hidden\" name=\"type\" value=\"\">
                                    </label>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>

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
{%  endblock %}", "register.twig", "C:\\xampp\\htdocs\\fastLawyer\\resources\\views\\register.twig");
    }
}
