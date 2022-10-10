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

/* @EasyAdmin/crud/action.html.twig */
class __TwigTemplate_9e04db8fd42e0eb3f5488ce55c224e77 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action.html.twig"));

        // line 4
        if (("a" == twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()), "htmlElement", [], "any", false, false, false, 4))) {
            // line 5
            echo "    <a class=\"";
            echo ((((array_key_exists("isIncludedInDropdown", $context)) ? (_twig_default_filter((isset($context["isIncludedInDropdown"]) || array_key_exists("isIncludedInDropdown", $context) ? $context["isIncludedInDropdown"] : (function () { throw new RuntimeError('Variable "isIncludedInDropdown" does not exist.', 5, $this->source); })()), false)) : (false))) ? ("dropdown-item") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "cssClass", [], "any", false, false, false, 5), "html", null, true);
            echo "\"
       href=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "linkUrl", [], "any", false, false, false, 6), "html", null, true);
            echo "\"
       ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 7, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 7)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html_attr");
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 8
            if (twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "icon", [], "any", false, false, false, 8)) {
                echo "<i class=\"action-icon ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "icon", [], "any", false, false, false, 8), "html", null, true);
                echo "\"></i> ";
            }
            // line 9
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "label", [], "any", false, false, false, 9))) {
                echo "<span class=\"action-label\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "label", [], "any", false, false, false, 9));
                echo "</span>";
            }
            // line 10
            echo "</a>
";
        } elseif (("button" == twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()), "htmlElement", [], "any", false, false, false, 11))) {
            // line 12
            echo "    <button class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "cssClass", [], "any", false, false, false, 12), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "trans", [], "any", true, true, false, 12)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"])) : ($context["value"])), "html_attr");
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        <span class=\"btn-label\">";
            // line 14
            if (twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "icon", [], "any", false, false, false, 14)) {
                echo "<i class=\"action-icon ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "icon", [], "any", false, false, false, 14), "html", null, true);
                echo "\"></i> ";
            }
            // line 15
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "label", [], "any", false, false, false, 15))) {
                echo "<span class=\"action-label\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "label", [], "any", false, false, false, 15));
                echo "</span>";
            }
            // line 16
            echo "</span>
    </button>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 16,  106 => 15,  100 => 14,  83 => 12,  81 => 11,  78 => 10,  72 => 9,  66 => 8,  53 => 7,  49 => 6,  42 => 5,  40 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var action \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% if 'a' == action.htmlElement %}
    <a class=\"{{ isIncludedInDropdown|default(false) ? 'dropdown-item' }} {{ action.cssClass }}\"
       href=\"{{ action.linkUrl }}\"
       {% for name, value in action.htmlAttributes %}{{ name }}=\"{{ (value.trans is defined ? value|trans : value)|e('html_attr') }}\" {% endfor %}>
        {%- if action.icon %}<i class=\"action-icon {{ action.icon }}\"></i> {% endif -%}
        {%- if action.label is not empty -%}<span class=\"action-label\">{{ action.label|trans|raw }}</span>{%- endif -%}
    </a>
{% elseif 'button' == action.htmlElement %}
    <button class=\"{{ action.cssClass }}\" {% for name, value in action.htmlAttributes %}{{ name }}=\"{{ (value.trans is defined ? value|trans : value)|e('html_attr') }}\" {% endfor %}>
        <span class=\"btn-label\">
            {%- if action.icon %}<i class=\"action-icon {{ action.icon }}\"></i> {% endif -%}
            {%- if action.label is not empty -%}<span class=\"action-label\">{{ action.label|trans|raw }}</span>{%- endif -%}
        </span>
    </button>
{% endif %}
", "@EasyAdmin/crud/action.html.twig", "/var/www/dev/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/action.html.twig");
    }
}
