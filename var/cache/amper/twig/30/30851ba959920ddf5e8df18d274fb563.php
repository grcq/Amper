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

/* @EasyAdmin/crud/paginator.html.twig */
class __TwigTemplate_7a18f035bdccaddb13b967d2703f823b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/paginator.html.twig"));

        // line 4
        echo "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        if (((array_key_exists("render_detailed_pagination", $context)) ? ((isset($context["render_detailed_pagination"]) || array_key_exists("render_detailed_pagination", $context) ? $context["render_detailed_pagination"] : (function () { throw new RuntimeError('Variable "render_detailed_pagination" does not exist.', 7, $this->source); })())) : (true))) {
            // line 8
            echo "            ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => twig_sprintf(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "numResults", [], "any", false, false, false, 8))], "EasyAdminBundle");
            echo "
        ";
        }
        // line 10
        echo "    </div>

    <nav class=\"pager list-pagination-paginator ";
        // line 12
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 12)) ? ("first-page") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "hasNextPage", [], "any", false, false, false, 12)) ? ("last-page") : (""));
        echo "\">
        <ul class=\"pagination\">
            <li class=\"page-item ";
        // line 14
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 14, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 14)) ? ("disabled") : (""));
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 15
        (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 15, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 15)) ? (print ("#")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 15, $this->source); })()), "generateUrlForPage", [0 => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 15, $this->source); })()), "previousPage", [], "any", false, false, false, 15)], "method", false, false, false, 15), "html", null, true))));
        echo "\">
                    <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </a>
            </li>

            ";
        // line 20
        if (((array_key_exists("render_detailed_pagination", $context)) ? ((isset($context["render_detailed_pagination"]) || array_key_exists("render_detailed_pagination", $context) ? $context["render_detailed_pagination"] : (function () { throw new RuntimeError('Variable "render_detailed_pagination" does not exist.', 20, $this->source); })())) : (true))) {
            // line 21
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 21, $this->source); })()), "pageRange", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                echo "                    <li class=\"page-item ";
                echo ((($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 22, $this->source); })()), "currentPage", [], "any", false, false, false, 22))) ? ("active") : (""));
                echo " ";
                echo (((null === $context["page"])) ? ("disabled") : (""));
                echo "\">
                        ";
                // line 23
                if ((null === $context["page"])) {
                    // line 24
                    echo "                            <span class=\"page-link\">&hellip;</span>
                        ";
                } else {
                    // line 26
                    echo "                            <a class=\"page-link\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 26, $this->source); })()), "generateUrlForPage", [0 => $context["page"]], "method", false, false, false, 26), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                        ";
                }
                // line 28
                echo "                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            ";
        } else {
            // line 31
            echo "                <li class=\"page-item active ";
            echo (((null === twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 31, $this->source); })()), "currentPage", [], "any", false, false, false, 31))) ? ("disabled") : (""));
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "generateUrlForPage", [0 => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "currentPage", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "currentPage", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 35
        echo "
            <li class=\"page-item ";
        // line 36
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 36, $this->source); })()), "hasNextPage", [], "any", false, false, false, 36)) ? ("disabled") : (""));
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 37
        (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "hasNextPage", [], "any", false, false, false, 37)) ? (print ("#")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "generateUrlForPage", [0 => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "nextPage", [], "any", false, false, false, 37)], "method", false, false, false, 37), "html", null, true))));
        echo "\">
                    <span class=\"btn-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
        echo "</span> <i class=\"fa fa-angle-right mx-1\"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 38,  137 => 37,  133 => 36,  130 => 35,  122 => 32,  117 => 31,  114 => 30,  107 => 28,  99 => 26,  95 => 24,  93 => 23,  86 => 22,  81 => 21,  79 => 20,  72 => 16,  68 => 15,  64 => 14,  57 => 12,  53 => 10,  47 => 8,  45 => 7,  40 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% trans_default_domain 'EasyAdminBundle' %}

<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        {% if render_detailed_pagination is defined ? render_detailed_pagination : true %}
            {{ 'paginator.results'|trans({'%count%': paginator.numResults|format})|raw }}
        {% endif %}
    </div>

    <nav class=\"pager list-pagination-paginator {{ not paginator.hasPreviousPage ? 'first-page' }} {{ not paginator.hasNextPage ? 'last-page' }}\">
        <ul class=\"pagination\">
            <li class=\"page-item {{ not paginator.hasPreviousPage ? 'disabled' }}\">
                <a class=\"page-link\" href=\"{{ not paginator.hasPreviousPage ? '#' : paginator.generateUrlForPage(paginator.previousPage) }}\">
                    <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">{{ 'paginator.previous'|trans }}</span>
                </a>
            </li>

            {% if render_detailed_pagination is defined ? render_detailed_pagination : true %}
                {% for page in paginator.pageRange %}
                    <li class=\"page-item {{ page == paginator.currentPage ? 'active' }} {{ page is null ? 'disabled' }}\">
                        {% if page is null %}
                            <span class=\"page-link\">&hellip;</span>
                        {% else %}
                            <a class=\"page-link\" href=\"{{ paginator.generateUrlForPage(page) }}\">{{ page }}</a>
                        {% endif %}
                    </li>
                {% endfor %}
            {% else %}
                <li class=\"page-item active {{ paginator.currentPage is null ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ paginator.generateUrlForPage(paginator.currentPage) }}\">{{ paginator.currentPage }}</a>
                </li>
            {% endif %}

            <li class=\"page-item {{ not paginator.hasNextPage ? 'disabled' }}\">
                <a class=\"page-link\" href=\"{{ not paginator.hasNextPage ? '#' : paginator.generateUrlForPage(paginator.nextPage) }}\">
                    <span class=\"btn-label\">{{ 'paginator.next'|trans }}</span> <i class=\"fa fa-angle-right mx-1\"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
", "@EasyAdmin/crud/paginator.html.twig", "/var/www/dev/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/paginator.html.twig");
    }
}
