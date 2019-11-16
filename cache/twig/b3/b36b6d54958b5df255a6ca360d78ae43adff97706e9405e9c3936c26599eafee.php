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

/* includes/flash.twig */
class __TwigTemplate_f3dbb090c494d8b5dbde3c6469831dbd4c872981281a7d2242f5fa355dd8b6c0 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", [0 => "success"], "method", false, false, false, 1)) {
            // line 2
            echo "    <div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <div class='alert-icon contrast-alert'>
            <i class='far fa-thumbs-up'></i>
        </div>
        <div class='alert-message'>
            <span><strong>";
            // line 8
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", [0 => "success"], "method", false, false, false, 8)), "html", null, true);
            echo "</strong></span>
        </div>
    </div>
";
        }
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", [0 => "error"], "method", false, false, false, 12)) {
            // line 13
            echo "    <div class='alert alert-danger alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <div class='alert-icon contrast-alert'>
            <i class='fa fa-times'></i>
        </div>
        <div class='alert-message'>
            <span><strong>";
            // line 19
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", [0 => "error"], "method", false, false, false, 19)), "html", null, true);
            echo "</strong></span>
        </div>
    </div>
";
        }
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", [0 => "warning"], "method", false, false, false, 23)) {
            // line 24
            echo "    <div class='alert alert-warning alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <div class='alert-icon contrast-alert'>
            <i class='fas fa-exclamation'></i>
        </div>
        <div class='alert-message'>
            <span><strong>";
            // line 30
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", [0 => "warning"], "method", false, false, false, 30)), "html", null, true);
            echo "</strong></span>
        </div>
    </div>
";
        }
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", [0 => "info"], "method", false, false, false, 34)) {
            // line 35
            echo "    <div class='alert alert-info alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <div class='alert-icon contrast-alert'>
            <i class='fas fa-exclamation'></i>
        </div>
        <div class='alert-message'>
            <span><strong>";
            // line 41
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", [0 => "info"], "method", false, false, false, 41)), "html", null, true);
            echo "</strong></span>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "includes/flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 41,  90 => 35,  88 => 34,  81 => 30,  73 => 24,  71 => 23,  64 => 19,  56 => 13,  54 => 12,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if flash.getMessage('success') %}
    <div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <div class='alert-icon contrast-alert'>
            <i class='far fa-thumbs-up'></i>
        </div>
        <div class='alert-message'>
            <span><strong>{{ flash.getMessage('success')| first }}</strong></span>
        </div>
    </div>
{% endif %}
{% if flash.getMessage('error') %}
    <div class='alert alert-danger alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <div class='alert-icon contrast-alert'>
            <i class='fa fa-times'></i>
        </div>
        <div class='alert-message'>
            <span><strong>{{ flash.getMessage('error')| first }}</strong></span>
        </div>
    </div>
{% endif %}
{% if flash.getMessage('warning') %}
    <div class='alert alert-warning alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <div class='alert-icon contrast-alert'>
            <i class='fas fa-exclamation'></i>
        </div>
        <div class='alert-message'>
            <span><strong>{{ flash.getMessage('warning')| first }}</strong></span>
        </div>
    </div>
{% endif %}
{% if flash.getMessage('info') %}
    <div class='alert alert-info alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <div class='alert-icon contrast-alert'>
            <i class='fas fa-exclamation'></i>
        </div>
        <div class='alert-message'>
            <span><strong>{{ flash.getMessage('info')| first }}</strong></span>
        </div>
    </div>
{% endif %}", "includes/flash.twig", "C:\\xampp\\htdocs\\gasnappe\\resources\\views\\includes\\flash.twig");
    }
}
