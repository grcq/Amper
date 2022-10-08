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

/* @EasyAdmin/crud/field/textarea.html.twig */
class __TwigTemplate_87bc0fb2b69679607be72b933897e31d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/textarea.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/textarea.html.twig"));

        // line 4
        $context["render_as_html"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), "customOptions", [], "any", false, false, false, 4), "get", [0 => "renderAsHtml"], "method", false, false, false, 4);
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "crud", [], "any", false, false, false, 5), "currentAction", [], "any", false, false, false, 5) == "detail")) {
            // line 6
            echo "    <span title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "value", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
        ";
            // line 7
            echo (((isset($context["render_as_html"]) || array_key_exists("render_as_html", $context) ? $context["render_as_html"] : (function () { throw new RuntimeError('Variable "render_as_html" does not exist.', 7, $this->source); })())) ? (twig_nl2br(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "formattedValue", [], "any", false, false, false, 7))) : (twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "formattedValue", [], "any", false, false, false, 7), "html", null, true))));
            echo "
    </span>
";
        } else {
            // line 10
            echo "    <span title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "value", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
        ";
            // line 11
            (((isset($context["render_as_html"]) || array_key_exists("render_as_html", $context) ? $context["render_as_html"] : (function () { throw new RuntimeError('Variable "render_as_html" does not exist.', 11, $this->source); })())) ? (print (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 11, $this->source); })()), "formattedValue", [], "any", false, false, false, 11))) : (print (twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 11, $this->source); })()), "formattedValue", [], "any", false, false, false, 11)), "html", null, true))));
            echo "
    </span>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  58 => 10,  52 => 7,  47 => 6,  45 => 5,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% set render_as_html = field.customOptions.get('renderAsHtml') %}
{% if ea.crud.currentAction == 'detail' %}
    <span title=\"{{ field.value }}\">
        {{ render_as_html ? field.formattedValue|raw|nl2br : field.formattedValue|nl2br }}
    </span>
{% else %}
    <span title=\"{{ field.value }}\">
        {{ render_as_html ? field.formattedValue|raw : field.formattedValue|striptags }}
    </span>
{% endif %}
", "@EasyAdmin/crud/field/textarea.html.twig", "/var/www/dev/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/field/textarea.html.twig");
    }
}
