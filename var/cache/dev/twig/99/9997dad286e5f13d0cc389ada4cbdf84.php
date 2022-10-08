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

/* category/index.html.twig */
class __TwigTemplate_36b4992c0553634eeaae725600d515a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@!EasyAdmin/crud/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/crud/index.html.twig", "category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@!EasyAdmin/crud/index.html.twig' %}

{#% extends '@!EasyAdmin/layout.html.twig' %}

{% block content %}
    {% block content_header %}
        <h1>Websites</h1>
        <br>
    {% endblock %}
    <br>
    <a href=\"/dashboard?menuIndex=2&routeName=app_category_new&submenuIndex=-1\"><span class=\"fa fa-plus\"></span> Add Site</a>
    <br>

    {% block main %}
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Files Path</th>
                    <th>Domain</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for category in categories %}
                <tr>
                    <td>{{ category.id }}</td>
                    <td>{{ category.name }}</td>
                    <td>{{ category.filesPath }}</td>
                    <td>{{ category.domain }}</td>
                    <td>
                        <a href=\"{{ path('app_category_show', {'id': category.id}) }}\">Show</a>
                        <a href=\"{{ path('app_category_edit', {'id': category.id}) }}\">Edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endblock %}

{% endblock %#}
", "category/index.html.twig", "/var/www/dev/templates/category/index.html.twig");
    }
}
