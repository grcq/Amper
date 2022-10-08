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

/* websites/index.html.twig */
class __TwigTemplate_0067213e842c9f77bb491ad4f276ef18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'content_header' => [$this, 'block_content_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@!EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "websites/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "websites/index.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "websites/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>";
        echo twig_escape_filter($this->env, (isset($context["website_name"]) || array_key_exists("website_name", $context) ? $context["website_name"] : (function () { throw new RuntimeError('Variable "website_name" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " | Websites</title>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 11
        echo "    ";
        if (((isset($context["new_site"]) || array_key_exists("new_site", $context) ? $context["new_site"] : (function () { throw new RuntimeError('Variable "new_site" does not exist.', 11, $this->source); })()) == false)) {
            // line 12
            echo "        <br>
        <a href=\"/dashboard?menuIndex=2&routeName=app_websites&submenuIndex=-1&newSite=true\"><span class=\"fas fa-plus\"></span> Add site</a>
        <br>
        <p>List of all sites:</p>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) || array_key_exists("sites", $context) ? $context["sites"] : (function () { throw new RuntimeError('Variable "sites" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 17
                echo "            <br>
            <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "path", [], "any", false, false, false, 18), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        <br>
        <form method=\"POST\" action=\"/dashboard?menuIndex=2&routeName=app_websites&submenuIndex=-1\">
            <label for=\"site_name\">Site Name</label>
            <br>
            <input type=\"text\" id=\"site_name\" placeholder=\"Site Name\" />

            <br>
            <button type=\"submit\">Add Site</button>
        </form>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 9
        echo "        <h2>Sites</h1>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "websites/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 9,  145 => 8,  125 => 21,  122 => 20,  112 => 18,  109 => 17,  105 => 16,  99 => 12,  96 => 11,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}

{% block title %}
    <title>{{website_name}} | Websites</title>
{% endblock %}

{% block content %}
    {% block content_header %}
        <h2>Sites</h1>
    {% endblock %}
    {% if new_site == false %}
        <br>
        <a href=\"/dashboard?menuIndex=2&routeName=app_websites&submenuIndex=-1&newSite=true\"><span class=\"fas fa-plus\"></span> Add site</a>
        <br>
        <p>List of all sites:</p>
        {% for site in sites %}
            <br>
            <a href=\"{{ site.path }}\">{{ site.name }}</a>
        {% endfor %}
    {% else %}
        <br>
        <form method=\"POST\" action=\"/dashboard?menuIndex=2&routeName=app_websites&submenuIndex=-1\">
            <label for=\"site_name\">Site Name</label>
            <br>
            <input type=\"text\" id=\"site_name\" placeholder=\"Site Name\" />

            <br>
            <button type=\"submit\">Add Site</button>
        </form>
    {% endif %}
{% endblock %}", "websites/index.html.twig", "/var/www/dev/templates/websites/index.html.twig");
    }
}
