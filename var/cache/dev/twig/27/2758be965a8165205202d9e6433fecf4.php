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

/* @EasyAdmin/crud/filters.html.twig */
class __TwigTemplate_addaf3bd54eb9de124b10844a9001195 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/filters.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/filters.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 3, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "crud", [], "any", false, false, false, 3), "formThemes", [], "any", false, false, false, 3), false);
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "data-ea-filters-form-id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)]]);
        // line 8
        echo "
    ";
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->flattenArray((isset($context["form_action_query_string_as_array"]) || array_key_exists("form_action_query_string_as_array", $context) ? $context["form_action_query_string_as_array"] : (function () { throw new RuntimeError('Variable "form_action_query_string_as_array" does not exist.', 11, $this->source); })())));
        foreach ($context['_seq'] as $context["paramName"] => $context["paramValue"]) {
            // line 12
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["paramName"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['paramName'], $context['paramValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 15, $this->source); })()), 'widget');
        echo "
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filters_form"]) || array_key_exists("filters_form", $context) ? $context["filters_form"] : (function () { throw new RuntimeError('Variable "filters_form" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  74 => 15,  71 => 14,  60 => 12,  55 => 11,  52 => 8,  50 => 7,  49 => 6,  48 => 5,  45 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var filters_form \\EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType #}
{% form_theme filters_form with ea.crud.formThemes only %}

{{ form_start(filters_form, { attr: {
    id: filters_form.vars.id,
    'data-ea-filters-form-id': filters_form.vars.id
} }) }}
    {# browsers remove the query string when submitting forms using GET;
       that's why all query string parameters are added as hidden form fields #}
    {% for paramName, paramValue in form_action_query_string_as_array|ea_flatten_array %}
        <input type=\"hidden\" name=\"{{ paramName }}\" value=\"{{ paramValue }}\">
    {% endfor %}

    {{ form_widget(filters_form) }}
{{ form_end(filters_form) }}
", "@EasyAdmin/crud/filters.html.twig", "/var/www/dev/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/filters.html.twig");
    }
}
