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

/* account/login.html.twig */
class __TwigTemplate_8c031615c682858a26a4ad4a972e09f083d3a1d0d7b4b81c3ea9937889e6bb3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Site connection";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .bg {
            color: #dfe6e9;
            border-radius: 10px;
            background-color: #f19066;
        }
    </style>
    <div class=\"container mt-5 w-50\">

            <div>&nbsp;</div>
            <div>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "flashbag", [], "any", false, false, false, 17), "all", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 18
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 19
                echo "                        ";
                if ((0 === twig_compare($context["label"], "success"))) {
                    // line 20
                    echo "                            <div class=\"alert alert-success alert-dismissible fade show\">
                                ";
                    // line 21
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "
                            </div>
                        ";
                } elseif ((0 === twig_compare(                // line 23
$context["label"], "error"))) {
                    // line 24
                    echo "                            <div class=\"alert alert-danger alert-dismissible fade show\">
                                ";
                    // line 25
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                // line 28
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                <div class=\"bg py-3 px-4\">
                    <h1>Sign in !</h1>

                    ";
        // line 33
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "                        <div class=\"alert alert-danger\">
                            Email or password is invalid!
                        </div>
                    ";
        }
        // line 38
        echo "
                    <form action=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
        echo "\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <input
                                    type=\"text\"
                                    name=\"_username\"
                                    id=\"email\"
                                    class=\"form-control\"
                                    placeholder=\"Address email ...\"
                                    required
                                    value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\"
                            >
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input
                                    type=\"password\"
                                    name=\"_password\"
                                    id=\"password\"
                                    placeholder=\"Password ...\"
                                    class=\"form-control\"
                                    required
                            >
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success\">Connection !</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 49,  160 => 39,  157 => 38,  151 => 34,  149 => 33,  144 => 30,  138 => 29,  132 => 28,  126 => 25,  123 => 24,  121 => 23,  116 => 21,  113 => 20,  110 => 19,  105 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Site connection{% endblock %}

{% block body %}
    <style>
        .bg {
            color: #dfe6e9;
            border-radius: 10px;
            background-color: #f19066;
        }
    </style>
    <div class=\"container mt-5 w-50\">

            <div>&nbsp;</div>
            <div>
                {% for label, flashes in app.session.flashbag.all %}
                    {% for flash in flashes %}
                        {% if ( label == 'success' ) %}
                            <div class=\"alert alert-success alert-dismissible fade show\">
                                {{ flash }}
                            </div>
                        {% elseif ( label == 'error' ) %}
                            <div class=\"alert alert-danger alert-dismissible fade show\">
                                {{ flash }}
                            </div>
                        {% endif %}
                    {% endfor %}
                {% endfor %}
                <div class=\"bg py-3 px-4\">
                    <h1>Sign in !</h1>

                    {% if hasError %}
                        <div class=\"alert alert-danger\">
                            Email or password is invalid!
                        </div>
                    {% endif %}

                    <form action=\"{{ path('account_login') }}\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <input
                                    type=\"text\"
                                    name=\"_username\"
                                    id=\"email\"
                                    class=\"form-control\"
                                    placeholder=\"Address email ...\"
                                    required
                                    value=\"{{ username }}\"
                            >
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input
                                    type=\"password\"
                                    name=\"_password\"
                                    id=\"password\"
                                    placeholder=\"Password ...\"
                                    class=\"form-control\"
                                    required
                            >
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success\">Connection !</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>

{% endblock %}
", "account/login.html.twig", "C:\\wamp64\\www\\Contact-app\\templates\\account\\login.html.twig");
    }
}
