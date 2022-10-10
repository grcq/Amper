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

/* @EasyAdmin/includes/_css_assets.html.twig */
class __TwigTemplate_c83a0a75f0fbc99de284035a8d0520ca extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/includes/_css_assets.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assets"]) || array_key_exists("assets", $context) ? $context["assets"] : (function () { throw new RuntimeError('Variable "assets" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 3
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["css_asset"], "preload", [], "any", false, false, false, 3)) {
                // line 4
                echo "        <link rel=\"preload\" href=\"";
                echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "preload", $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["css_asset"], "value", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, $context["css_asset"], "packageName", [], "any", false, false, false, 4)), ["as" => "style", "nopush" => twig_get_attribute($this->env, $this->source, $context["css_asset"], "nopush", [], "any", false, false, false, 4)]);
                echo "\"
        ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["css_asset"], "htmlAttributes", [], "any", false, false, false, 5));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html_attr");
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
    ";
            } else {
                // line 7
                echo "        <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["css_asset"], "value", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, $context["css_asset"], "packageName", [], "any", false, false, false, 7)), "html", null, true);
                echo "\"
        ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["css_asset"], "htmlAttributes", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html_attr");
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/includes/_css_assets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  67 => 7,  52 => 5,  47 => 4,  44 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var assets \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetDto[] #}
{% for css_asset in assets %}
    {% if css_asset.preload %}
        <link rel=\"preload\" href=\"{{ ea_call_function_if_exists('preload', asset(css_asset.value, css_asset.packageName), { as: 'style', nopush: css_asset.nopush }) }}\"
        {% for attr, value in css_asset.htmlAttributes %}{{ attr }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
    {% else %}
        <link rel=\"stylesheet\" href=\"{{ asset(css_asset.value, css_asset.packageName) }}\"
        {% for attr, value in css_asset.htmlAttributes %}{{ attr }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
    {% endif %}
{% endfor %}
", "@EasyAdmin/includes/_css_assets.html.twig", "/var/www/dev/vendor/easycorp/easyadmin-bundle/src/Resources/views/includes/_css_assets.html.twig");
    }
}
