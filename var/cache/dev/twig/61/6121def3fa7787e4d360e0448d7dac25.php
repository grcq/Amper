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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_8912aa50e4855683f673b346f271b1fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 5)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        // line 6
        $context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"] = ((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo "page-login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo ((array_key_exists("page_title", $context)) ? ((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 9, $this->source); })())) : (((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 9, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 9)) : (""))));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 12
        echo "    ";
        if (((array_key_exists("favicon_path", $context)) ? (_twig_default_filter((isset($context["favicon_path"]) || array_key_exists("favicon_path", $context) ? $context["favicon_path"] : (function () { throw new RuntimeError('Variable "favicon_path" does not exist.', 12, $this->source); })()), false)) : (false))) {
            // line 13
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["favicon_path"]) || array_key_exists("favicon_path", $context) ? $context["favicon_path"] : (function () { throw new RuntimeError('Variable "favicon_path" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 15
            echo "        ";
            $this->displayParentBlock("head_favicon", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 20
        echo "    ";
        $context["page_title"] =         $this->renderBlock("page_title", $context, $blocks);
        // line 21
        echo "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["username_label"]) || array_key_exists("username_label", $context) ? $context["username_label"] : (function () { throw new RuntimeError('Variable "username_label" does not exist.', 21, $this->source); })()), [],         // line 6
(isset($context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"]) || array_key_exists("__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14", $context) ? $context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"] : (function () { throw new RuntimeError('Variable "__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 22
        echo "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["password_label"]) || array_key_exists("password_label", $context) ? $context["password_label"] : (function () { throw new RuntimeError('Variable "password_label" does not exist.', 22, $this->source); })()), [],         // line 6
(isset($context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"]) || array_key_exists("__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14", $context) ? $context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"] : (function () { throw new RuntimeError('Variable "__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 23
        echo "    ";
        $context["_forgot_password_label"] = ((array_key_exists("forgot_password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["forgot_password_label"]) || array_key_exists("forgot_password_label", $context) ? $context["forgot_password_label"] : (function () { throw new RuntimeError('Variable "forgot_password_label" does not exist.', 23, $this->source); })()), [],         // line 6
(isset($context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"]) || array_key_exists("__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14", $context) ? $context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"] : (function () { throw new RuntimeError('Variable "__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.forgot_password", [], "EasyAdminBundle")));
        // line 24
        echo "    ";
        $context["_remember_me_label"] = ((array_key_exists("remember_me_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["remember_me_label"]) || array_key_exists("remember_me_label", $context) ? $context["remember_me_label"] : (function () { throw new RuntimeError('Variable "remember_me_label" does not exist.', 24, $this->source); })()), [],         // line 6
(isset($context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"]) || array_key_exists("__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14", $context) ? $context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"] : (function () { throw new RuntimeError('Variable "__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.remember_me", [], "EasyAdminBundle")));
        // line 25
        echo "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["sign_in_label"]) || array_key_exists("sign_in_label", $context) ? $context["sign_in_label"] : (function () { throw new RuntimeError('Variable "sign_in_label" does not exist.', 25, $this->source); })()), [],         // line 6
(isset($context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"]) || array_key_exists("__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14", $context) ? $context["__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14"] : (function () { throw new RuntimeError('Variable "__internal_0645aa2543e427d110be37e574b696bb71ba2b4781f40cb0c36e5968860bbc14" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 26
        echo "
    ";
        // line 27
        $this->loadTemplate("@EasyAdmin/flash_messages.html.twig", "@EasyAdmin/page/login.html.twig", 27)->display($context);
        // line 28
        echo "
    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                ";
        // line 32
        $this->displayBlock('header_logo', $context, $blocks);
        // line 45
        echo "            </div>
        </header>

        <section class=\"content\">

            ";
        // line 50
        if (((array_key_exists("error", $context)) ? (_twig_default_filter((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 50, $this->source); })()), false)) : (false))) {
            // line 51
            echo "                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    <i class=\"fas fa-times-circle mr-1\"></i>
                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageKey", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageData", [], "any", false, false, false, 53), "security"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 56
        echo "
            <form method=\"post\" action=\"";
        // line 57
        echo twig_escape_filter($this->env, ((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 57, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\">
                ";
        // line 58
        if (((array_key_exists("csrf_token_intention", $context)) ? (_twig_default_filter((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context) ? $context["csrf_token_intention"] : (function () { throw new RuntimeError('Variable "csrf_token_intention" does not exist.', 58, $this->source); })()), false)) : (false))) {
            // line 59
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context) ? $context["csrf_token_intention"] : (function () { throw new RuntimeError('Variable "csrf_token_intention" does not exist.', 59, $this->source); })())), "html", null, true);
            echo "\">
                ";
        }
        // line 61
        echo "
                <input type=\"hidden\" name=\"";
        // line 62
        echo twig_escape_filter($this->env, ((array_key_exists("target_path_parameter", $context)) ? (_twig_default_filter((isset($context["target_path_parameter"]) || array_key_exists("target_path_parameter", $context) ? $context["target_path_parameter"] : (function () { throw new RuntimeError('Variable "target_path_parameter" does not exist.', 62, $this->source); })()), "_target_path")) : ("_target_path")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("target_path", $context)) ? (_twig_default_filter((isset($context["target_path"]) || array_key_exists("target_path", $context) ? $context["target_path"] : (function () { throw new RuntimeError('Variable "target_path" does not exist.', 62, $this->source); })()), ((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 62, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 62))) : ("/")))) : (((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 62, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 62))) : ("/")))), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"email\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["_username_label"]) || array_key_exists("_username_label", $context) ? $context["_username_label"] : (function () { throw new RuntimeError('Variable "_username_label" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</label>
                    <div class=\"form-widget\">
                        <input type=\"email\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 67, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" name=\"email\" id=\"email\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"password\">";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["_password_label"]) || array_key_exists("_password_label", $context) ? $context["_password_label"] : (function () { throw new RuntimeError('Variable "_password_label" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "</label>
                    <div class=\"form-widget\">
                        <input type=\"password\" id=\"password\" name=\"";
        // line 74
        echo twig_escape_filter($this->env, ((array_key_exists("password_parameter", $context)) ? (_twig_default_filter((isset($context["password_parameter"]) || array_key_exists("password_parameter", $context) ? $context["password_parameter"] : (function () { throw new RuntimeError('Variable "password_parameter" does not exist.', 74, $this->source); })()), "_password")) : ("_password")), "html", null, true);
        echo "\" class=\"form-control\" required autocomplete=\"current-password\">
                    </div>

                    ";
        // line 77
        if (((array_key_exists("forgot_password_enabled", $context)) ? (_twig_default_filter((isset($context["forgot_password_enabled"]) || array_key_exists("forgot_password_enabled", $context) ? $context["forgot_password_enabled"] : (function () { throw new RuntimeError('Variable "forgot_password_enabled" does not exist.', 77, $this->source); })()), false)) : (false))) {
            // line 78
            echo "                        <div class=\"form-text\">
                            <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, ((array_key_exists("forgot_password_path", $context)) ? (_twig_default_filter((isset($context["forgot_password_path"]) || array_key_exists("forgot_password_path", $context) ? $context["forgot_password_path"] : (function () { throw new RuntimeError('Variable "forgot_password_path" does not exist.', 79, $this->source); })()), "#")) : ("#")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["_forgot_password_label"]) || array_key_exists("_forgot_password_label", $context) ? $context["_forgot_password_label"] : (function () { throw new RuntimeError('Variable "_forgot_password_label" does not exist.', 79, $this->source); })()), "html", null, true);
            echo "</a>
                        </div>
                    ";
        }
        // line 82
        echo "                </div>

                ";
        // line 84
        if (((array_key_exists("remember_me_enabled", $context)) ? (_twig_default_filter((isset($context["remember_me_enabled"]) || array_key_exists("remember_me_enabled", $context) ? $context["remember_me_enabled"] : (function () { throw new RuntimeError('Variable "remember_me_enabled" does not exist.', 84, $this->source); })()), false)) : (false))) {
            // line 85
            echo "                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"";
            // line 86
            echo twig_escape_filter($this->env, ((array_key_exists("remember_me_parameter", $context)) ? (_twig_default_filter((isset($context["remember_me_parameter"]) || array_key_exists("remember_me_parameter", $context) ? $context["remember_me_parameter"] : (function () { throw new RuntimeError('Variable "remember_me_parameter" does not exist.', 86, $this->source); })()), "_remember_me")) : ("_remember_me")), "html", null, true);
            echo "\" ";
            echo ((((array_key_exists("remember_me_checked", $context)) ? (_twig_default_filter((isset($context["remember_me_checked"]) || array_key_exists("remember_me_checked", $context) ? $context["remember_me_checked"] : (function () { throw new RuntimeError('Variable "remember_me_checked" does not exist.', 86, $this->source); })()), false)) : (false))) ? ("checked") : (""));
            echo ">
                        <label class=\"form-check-label\" for=\"remember_me\">
                            ";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["_remember_me_label"]) || array_key_exists("_remember_me_label", $context) ? $context["_remember_me_label"] : (function () { throw new RuntimeError('Variable "_remember_me_label" does not exist.', 88, $this->source); })()), "html", null, true);
            echo "
                        </label>
                    </div>
                ";
        }
        // line 92
        echo "
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["_sign_in_label"]) || array_key_exists("_sign_in_label", $context) ? $context["_sign_in_label"] : (function () { throw new RuntimeError('Variable "_sign_in_label" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "</button>
                </div>
            </form>

            <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.js", twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        echo "\"></script>
        </section>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 33
        echo "                    ";
        if ((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "                        ";
            if (array_key_exists("ea", $context)) {
                // line 35
                echo "                            <a class=\"logo ";
                echo (((twig_length_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 35, $this->source); })())) > 14)) ? ("logo-long") : (""));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_striptags((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 35, $this->source); })())), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 35, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 35));
                echo "\">
                                ";
                // line 36
                echo (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 36, $this->source); })());
                echo "
                            </a>
                        ";
            } else {
                // line 39
                echo "                            <div class=\"logo ";
                echo (((twig_length_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 39, $this->source); })())) > 14)) ? ("logo-long") : (""));
                echo "\">
                                ";
                // line 40
                echo (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 40, $this->source); })());
                echo "
                            </div>
                        ";
            }
            // line 43
            echo "                    ";
        }
        // line 44
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 44,  353 => 43,  347 => 40,  342 => 39,  336 => 36,  327 => 35,  324 => 34,  321 => 33,  311 => 32,  297 => 98,  290 => 94,  286 => 92,  279 => 88,  272 => 86,  269 => 85,  267 => 84,  263 => 82,  255 => 79,  252 => 78,  250 => 77,  244 => 74,  239 => 72,  231 => 67,  226 => 65,  218 => 62,  215 => 61,  209 => 59,  207 => 58,  203 => 57,  200 => 56,  194 => 53,  190 => 51,  188 => 50,  181 => 45,  179 => 32,  173 => 28,  171 => 27,  168 => 26,  166 => 6,  164 => 25,  162 => 6,  160 => 24,  158 => 6,  156 => 23,  154 => 6,  152 => 22,  150 => 6,  148 => 21,  145 => 20,  135 => 19,  121 => 15,  115 => 13,  112 => 12,  102 => 11,  83 => 9,  64 => 8,  54 => 5,  52 => 6,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# This template checks for 'ea' variable existence because it can
   be used in a EasyAdmin Dashboard controller, where 'ea' is defined
   or from any other Symfony controller, where 'ea' is not defined #}
{% extends ea is defined ? ea.templatePath('layout') : '@EasyAdmin/page/login_minimal.html.twig' %}
{% trans_default_domain ea is defined ? ea.i18n.translationDomain : (translation_domain is defined ? translation_domain ?? 'messages') %}

{% block body_class 'page-login' %}
{% block page_title %}{{ page_title is defined ? page_title|raw : (ea is defined ? ea.dashboardTitle|raw : '') }}{% endblock %}

{% block head_favicon %}
    {% if favicon_path|default(false) %}
        <link rel=\"shortcut icon\" href=\"{{ favicon_path }}\">
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block wrapper_wrapper %}
    {% set page_title = block('page_title') %}
    {% set _username_label = username_label is defined ? username_label|trans : 'login_page.username'|trans({}, 'EasyAdminBundle') %}
    {% set _password_label = password_label is defined ? password_label|trans : 'login_page.password'|trans({}, 'EasyAdminBundle') %}
    {% set _forgot_password_label = forgot_password_label is defined ? forgot_password_label|trans : 'login_page.forgot_password'|trans({}, 'EasyAdminBundle') %}
    {% set _remember_me_label = remember_me_label is defined ? remember_me_label|trans : 'login_page.remember_me'|trans({}, 'EasyAdminBundle') %}
    {% set _sign_in_label = sign_in_label is defined ? sign_in_label|trans : 'login_page.sign_in'|trans({}, 'EasyAdminBundle') %}

    {% include '@EasyAdmin/flash_messages.html.twig' %}

    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                {% block header_logo %}
                    {% if page_title %}
                        {% if ea is defined %}
                            <a class=\"logo {{ page_title|length > 14 ? 'logo-long' }}\" title=\"{{ page_title|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                {{ page_title|raw }}
                            </a>
                        {% else %}
                            <div class=\"logo {{ page_title|length > 14 ? 'logo-long' }}\">
                                {{ page_title|raw }}
                            </div>
                        {% endif %}
                    {% endif %}
                {% endblock header_logo %}
            </div>
        </header>

        <section class=\"content\">

            {% if error|default(false) %}
                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    <i class=\"fas fa-times-circle mr-1\"></i>
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            <form method=\"post\" action=\"{{ action|default('') }}\">
                {% if csrf_token_intention|default(false) %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(csrf_token_intention) }}\">
                {% endif %}

                <input type=\"hidden\" name=\"{{ target_path_parameter|default('_target_path') }}\" value=\"{{ target_path|default(ea is defined ? path(ea.dashboardRouteName) : '/') }}\" />

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"email\">{{ _username_label }}</label>
                    <div class=\"form-widget\">
                        <input type=\"email\" value=\"{{ last_username|default('') }}\" name=\"email\" id=\"email\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"password\">{{ _password_label }}</label>
                    <div class=\"form-widget\">
                        <input type=\"password\" id=\"password\" name=\"{{ password_parameter|default('_password') }}\" class=\"form-control\" required autocomplete=\"current-password\">
                    </div>

                    {% if forgot_password_enabled|default(false) %}
                        <div class=\"form-text\">
                            <a href=\"{{ forgot_password_path|default('#') }}\">{{ _forgot_password_label }}</a>
                        </div>
                    {% endif %}
                </div>

                {% if remember_me_enabled|default(false) %}
                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"{{ remember_me_parameter|default('_remember_me') }}\" {{ remember_me_checked|default(false) ? 'checked' }}>
                        <label class=\"form-check-label\" for=\"remember_me\">
                            {{ _remember_me_label }}
                        </label>
                    </div>
                {% endif %}

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">{{ _sign_in_label }}</button>
                </div>
            </form>

            <script src=\"{{ asset('login.js', constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Asset\\\\AssetPackage::PACKAGE_NAME')) }}\"></script>
        </section>
    </div>
{% endblock %}
", "@EasyAdmin/page/login.html.twig", "/var/www/dev/vendor/easycorp/easyadmin-bundle/src/Resources/views/page/login.html.twig");
    }
}
