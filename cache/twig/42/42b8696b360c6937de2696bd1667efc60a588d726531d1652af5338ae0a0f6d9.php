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

/* profile.twig */
class __TwigTemplate_ac9fe6f90e2045203917757dcef45919b039db64823ecfed694c01337e637b22 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "profile.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Profile";
    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/simplex/bootstrap.min.css\"/>
    <style>

        .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }
    </style>
";
    }

    // line 42
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "
    <div class=\"page-header\" style=\"background: url(";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["img/banner1.jpg"]), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"breadcrumb-wrapper\">
                        <h2 class=\"page-title\">My Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "<div class=\"main-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">

                    <div class=\"card-body\">
                        <div class=\"card-title mb-4\">
                            <div class=\"d-flex justify-content-start\">
                                <div class=\"image-container\">
                                    <img src=\"http://placehold.it/150x150\" id=\"imgProfile\" style=\"width: 150px; height: 150px\" class=\"img-thumbnail\" />
                                    <div class=\"middle\">
                                        <input type=\"button\" class=\"btn btn-secondary\" id=\"btnChangePicture\" value=\"Change\" />
                                        <input type=\"file\" style=\"display: none;\" id=\"profilePicture\" name=\"file\" />
                                    </div>
                                </div>
                                <div class=\"userData ml-3\">
                                    <h2 class=\"d-block\" style=\"font-size: 1.5rem; font-weight: bold\"><a href=\"javascript:void(0);\" style=\"color:black;\">Some Name</a></h2>
                                    <h6 class=\"d-block\"><a href=\"javascript:void(0)\"></a> eti Osa Lagos, Nigeria</h6>
                                    <h6 class=\"d-block\"><a href=\"javascript:void(0)\"></a> 090*******</h6>
                                    <h6 class=\"d-block\"><a href=\"javascript:void(0)\"></a> am good and a very lovely person with no worries</h6>
                                    <button type=\"button\" class=\"btn btn-primary\">Message</button>
                                    <button type=\"button\" class=\"btn btn-primary\">Request</button>
                                </div>
                                <div class=\"ml-auto\">
                                    <input type=\"button\" class=\"btn btn-primary d-none\" id=\"btnDiscard\" value=\"Discard Changes\" />
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12\">
                                <ul class=\"nav nav-tabs mb-4\" id=\"myTab\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link active\" id=\"basicInfo-tab\" data-toggle=\"tab\" href=\"#basicInfo\" role=\"tab\" aria-controls=\"basicInfo\" aria-selected=\"true\">Basic Info</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" id=\"connectedServices-tab\" data-toggle=\"tab\" href=\"#connectedServices\" role=\"tab\" aria-controls=\"connectedServices\" aria-selected=\"false\">Connected Services</a>
                                    </li>
                                </ul>
                                <div class=\"tab-content ml-1\" id=\"myTabContent\">
                                    <div class=\"tab-pane fade show active\" id=\"basicInfo\" role=\"tabpanel\" aria-labelledby=\"basicInfo-tab\">


                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-md-2 col-5\">
                                                <label style=\"font-weight:bold;\">Full Name</label>
                                            </div>
                                            <div class=\"col-md-8 col-6\">
                                                Jamshaid Kamran
                                            </div>
                                        </div>
                                        <hr />

                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-md-2 col-5\">
                                                <label style=\"font-weight:bold;\">Certificate status</label>
                                            </div>
                                            <div class=\"col-md-8 col-6\">
                                               Verified
                                            </div>
                                        </div>
                                        <hr />


                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-md-2 col-5\">
                                                <label style=\"font-weight:bold;\">Status</label>
                                            </div>
                                            <div class=\"col-md-8 col-6\">
                                                Verified
                                            </div>
                                        </div>
                                        <hr />
                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-md-2 col-5\">
                                                <label style=\"font-weight:bold;\">Something</label>
                                            </div>
                                            <div class=\"col-md-8 col-6\">
                                                Something
                                            </div>
                                        </div>
                                        <hr />
                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-md-2 col-5\">
                                                <label style=\"font-weight:bold;\">Something</label>
                                            </div>
                                            <div class=\"col-md-8 col-6\">
                                                Something
                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                    <div class=\"tab-pane fade\" id=\"connectedServices\" role=\"tabpanel\" aria-labelledby=\"ConnectedServices-tab\">
                                        Facebook, Google, Twitter Account that are connected to this account
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 169
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            \$imgSrc = \$('#imgProfile').attr('src');
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        \$('#imgProfile').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            \$('#btnChangePicture').on('click', function () {
                // document.getElementById('profilePicture').click();
                if (!\$('#btnChangePicture').hasClass('changing')) {
                    \$('#profilePicture').click();
                }
                else {
                    // change
                }
            });
            \$('#profilePicture').on('change', function () {
                readURL(this);
                \$('#btnChangePicture').addClass('changing');
                \$('#btnChangePicture').attr('value', 'Confirm');
                \$('#btnDiscard').removeClass('d-none');
                // \$('#imgProfile').attr('src', '');
            });
            \$('#btnDiscard').on('click', function () {
                // if (\$('#btnDiscard').hasClass('d-none')) {
                \$('#btnChangePicture').removeClass('changing');
                \$('#btnChangePicture').attr('value', 'Change');
                \$('#btnDiscard').addClass('d-none');
                \$('#imgProfile').attr('src', \$imgSrc);
                \$('#profilePicture').val('');
                // }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 170,  244 => 169,  131 => 58,  127 => 57,  110 => 44,  107 => 43,  103 => 42,  61 => 4,  57 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.twig' %}
{% block title %}Profile{% endblock %}
{%  block style %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/simplex/bootstrap.min.css\"/>
    <style>

        .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }
    </style>
{% endblock %}

{% block search %}

    <div class=\"page-header\" style=\"background: url({{ asset('img/banner1.jpg')  }});\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"breadcrumb-wrapper\">
                        <h2 class=\"page-title\">My Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
{% block content %}
<div class=\"main-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">

                    <div class=\"card-body\">
                        <div class=\"card-title mb-4\">
                            <div class=\"d-flex justify-content-start\">
                                <div class=\"image-container\">
                                    <img src=\"http://placehold.it/150x150\" id=\"imgProfile\" style=\"width: 150px; height: 150px\" class=\"img-thumbnail\" />
                                    <div class=\"middle\">
                                        <input type=\"button\" class=\"btn btn-secondary\" id=\"btnChangePicture\" value=\"Change\" />
                                        <input type=\"file\" style=\"display: none;\" id=\"profilePicture\" name=\"file\" />
                                    </div>
                                </div>
                                <div class=\"userData ml-3\">
                                    <h2 class=\"d-block\" style=\"font-size: 1.5rem; font-weight: bold\"><a href=\"javascript:void(0);\" style=\"color:black;\">Some Name</a></h2>
                                    <h6 class=\"d-block\"><a href=\"javascript:void(0)\"></a> eti Osa Lagos, Nigeria</h6>
                                    <h6 class=\"d-block\"><a href=\"javascript:void(0)\"></a> 090*******</h6>
                                    <h6 class=\"d-block\"><a href=\"javascript:void(0)\"></a> am good and a very lovely person with no worries</h6>
                                    <button type=\"button\" class=\"btn btn-primary\">Message</button>
                                    <button type=\"button\" class=\"btn btn-primary\">Request</button>
                                </div>
                                <div class=\"ml-auto\">
                                    <input type=\"button\" class=\"btn btn-primary d-none\" id=\"btnDiscard\" value=\"Discard Changes\" />
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12\">
                                <ul class=\"nav nav-tabs mb-4\" id=\"myTab\" role=\"tablist\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link active\" id=\"basicInfo-tab\" data-toggle=\"tab\" href=\"#basicInfo\" role=\"tab\" aria-controls=\"basicInfo\" aria-selected=\"true\">Basic Info</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" id=\"connectedServices-tab\" data-toggle=\"tab\" href=\"#connectedServices\" role=\"tab\" aria-controls=\"connectedServices\" aria-selected=\"false\">Connected Services</a>
                                    </li>
                                </ul>
                                <div class=\"tab-content ml-1\" id=\"myTabContent\">
                                    <div class=\"tab-pane fade show active\" id=\"basicInfo\" role=\"tabpanel\" aria-labelledby=\"basicInfo-tab\">


                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-md-2 col-5\">
                                                <label style=\"font-weight:bold;\">Full Name</label>
                                            </div>
                                            <div class=\"col-md-8 col-6\">
                                                Jamshaid Kamran
                                            </div>
                                        </div>
                                        <hr />

                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-md-2 col-5\">
                                                <label style=\"font-weight:bold;\">Certificate status</label>
                                            </div>
                                            <div class=\"col-md-8 col-6\">
                                               Verified
                                            </div>
                                        </div>
                                        <hr />


                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-md-2 col-5\">
                                                <label style=\"font-weight:bold;\">Status</label>
                                            </div>
                                            <div class=\"col-md-8 col-6\">
                                                Verified
                                            </div>
                                        </div>
                                        <hr />
                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-md-2 col-5\">
                                                <label style=\"font-weight:bold;\">Something</label>
                                            </div>
                                            <div class=\"col-md-8 col-6\">
                                                Something
                                            </div>
                                        </div>
                                        <hr />
                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-md-2 col-5\">
                                                <label style=\"font-weight:bold;\">Something</label>
                                            </div>
                                            <div class=\"col-md-8 col-6\">
                                                Something
                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                    <div class=\"tab-pane fade\" id=\"connectedServices\" role=\"tabpanel\" aria-labelledby=\"ConnectedServices-tab\">
                                        Facebook, Google, Twitter Account that are connected to this account
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{%  endblock %}

{%  block script %}
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            \$imgSrc = \$('#imgProfile').attr('src');
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        \$('#imgProfile').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            \$('#btnChangePicture').on('click', function () {
                // document.getElementById('profilePicture').click();
                if (!\$('#btnChangePicture').hasClass('changing')) {
                    \$('#profilePicture').click();
                }
                else {
                    // change
                }
            });
            \$('#profilePicture').on('change', function () {
                readURL(this);
                \$('#btnChangePicture').addClass('changing');
                \$('#btnChangePicture').attr('value', 'Confirm');
                \$('#btnDiscard').removeClass('d-none');
                // \$('#imgProfile').attr('src', '');
            });
            \$('#btnDiscard').on('click', function () {
                // if (\$('#btnDiscard').hasClass('d-none')) {
                \$('#btnChangePicture').removeClass('changing');
                \$('#btnChangePicture').attr('value', 'Change');
                \$('#btnDiscard').addClass('d-none');
                \$('#imgProfile').attr('src', \$imgSrc);
                \$('#profilePicture').val('');
                // }
            });
        });
    </script>
{%  endblock %}

", "profile.twig", "C:\\xampp\\htdocs\\fastLawyer\\resources\\views\\profile.twig");
    }
}
