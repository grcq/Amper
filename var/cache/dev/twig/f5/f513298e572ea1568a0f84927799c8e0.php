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

/* @EasyAdmin/crud/field/code_editor.html.twig */
class __TwigTemplate_865e0129bf539739a44e8c2c4498fabc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/code_editor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/code_editor.html.twig"));

        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "crud", [], "any", false, false, false, 4), "currentAction", [], "any", false, false, false, 4) == "detail")) {
            // line 5
            echo "    ";
            // line 6
            echo "    ";
            $context["configuredHeight"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "customOptions", [], "any", false, false, false, 6), "get", [0 => "height"], "method", false, false, false, 6);
            // line 7
            echo "    <pre style=\"";
            (((null === (isset($context["configuredHeight"]) || array_key_exists("configuredHeight", $context) ? $context["configuredHeight"] : (function () { throw new RuntimeError('Variable "configuredHeight" does not exist.', 7, $this->source); })()))) ? (print ("max-height: 500px;")) : (print (twig_escape_filter($this->env, (("max-height: unset; height: " . (isset($context["configuredHeight"]) || array_key_exists("configuredHeight", $context) ? $context["configuredHeight"] : (function () { throw new RuntimeError('Variable "configuredHeight" does not exist.', 7, $this->source); })())) . "px"), "html", null, true))));
            echo "\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "value", [], "any", false, false, false, 8), "html", null, true);
            // line 9
            echo "</pre>
";
        } else {
            // line 11
            echo "    ";
            $context["html_id"] = ("ea-code-editor-" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 11, $this->source); })()), "uniqueId", [], "any", false, false, false, 11));
            // line 12
            echo "    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\">
        <i class=\"fa fa-code\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.code_editor.view_code", [], "EasyAdminBundle"), "html", null, true);
            echo "
    </a>

    <div class=\"modal fade\" id=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 20, $this->source); })()), "label", [], "any", false, false, false, 20)), "html", null, true);
            echo "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close", [], "EasyAdminBundle"), "html", null, true);
            echo "\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 25
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 25, $this->source); })()), "formattedValue", [], "any", false, false, false, 25)));
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/code_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  85 => 21,  81 => 20,  74 => 16,  68 => 13,  63 => 12,  60 => 11,  56 => 9,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% if ea.crud.currentAction == 'detail' %}
    {# TODO: improve this to highlight code #}
    {% set configuredHeight = field.customOptions.get('height') %}
    <pre style=\"{{ configuredHeight is null ? 'max-height: 500px;' : 'max-height: unset; height: ' ~ configuredHeight ~ 'px' }}\">
        {{- field.value -}}
    </pre>
{% else %}
    {% set html_id = 'ea-code-editor-' ~ field.uniqueId %}
    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#{{ html_id }}\">
        <i class=\"fa fa-code\"></i> {{ 'field.code_editor.view_code'|trans([], domain = 'EasyAdminBundle') }}
    </a>

    <div class=\"modal fade\" id=\"{{ html_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ field.label|trans }}</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ 'action.close'|trans([], domain = 'EasyAdminBundle') }}\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ field.formattedValue|escape|nl2br }}
                </div>
            </div>
        </div>
    </div>
{% endif %}
", "@EasyAdmin/crud/field/code_editor.html.twig", "/var/www/dev/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/field/code_editor.html.twig");
    }
}
