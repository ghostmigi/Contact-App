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

/* contact/search.html.twig */
class __TwigTemplate_f3d7e6f3834beb2bab89be8c37df74b3d4eaa2ba8ee9980d9ccb2c8b098c3e9c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/search.html.twig", 1);
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

        echo "Contact index";
        
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
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2;}

        tr:hover {background-color: #ddd;}

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #fd9644;
            color: white;
        }
    </style>
    <div class=\"container mt-5\">
        <div class=\"row\">
            <h1>All Contacts</h1>
        </div>

        <div class=\"row\">
            <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
        echo "\">
                <div class=\"btn btn-success\">
                    <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                </div>
            </a>
            <form method=\"post\" class=\"d-inline-flex ml-3\">
                <input type=\"text\" name=\"find\">
                <input type=\"submit\" value=\"search\" class=\"btn btn-dark\">
            </form>
        </div>

        <div class=\"row mt-4\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th style=\"text-align:center\">Id</th>
                    <th style=\"text-align:center\">First Name</th>
                    <th style=\"text-align:center\">Last Name</th>
                    <th style=\"text-align:center\">Email</th>
                    <th style=\"text-align:center\">Phone Number</th>
                    <th style=\"text-align:center\">Company</th>
                    <th style=\"text-align:center\">Office</th>
                    <th style=\"text-align:center\">Actions</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style=\"text-align:center\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                        <td style=\"text-align:center\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 58, $this->source); })()), "firstName", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                        <td style=\"text-align:center\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 59, $this->source); })()), "lastName", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
                        <td style=\"text-align:center\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                        <td style=\"text-align:center\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 61, $this->source); })()), "phoneNumber", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                        <td style=\"text-align:center\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 62, $this->source); })()), "company", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
                        <td style=\"text-align:center\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 63, $this->source); })()), "office", [], "any", false, false, false, 63), "html", null, true);
        echo "</td>
                        <td style=\"text-align:center\">

                            <div class=\"container col-10\">
                                <div class=\"row\">
                                    <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\">
                                        <button class=\"btn btn-primary ml-2\">
                                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                        </button>
                                    </a>
                                    <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        echo "\">
                                        <button class=\"btn btn-info ml-2\">
                                            <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                        </button>
                                    </a>
                                    <form method=\"post\" action=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                        <button class=\"btn btn-danger ml-2\">
                                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81))), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>


        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 81,  192 => 78,  184 => 73,  176 => 68,  168 => 63,  164 => 62,  160 => 61,  156 => 60,  152 => 59,  148 => 58,  144 => 57,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact index{% endblock %}

{% block body %}
    <style>
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2;}

        tr:hover {background-color: #ddd;}

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #fd9644;
            color: white;
        }
    </style>
    <div class=\"container mt-5\">
        <div class=\"row\">
            <h1>All Contacts</h1>
        </div>

        <div class=\"row\">
            <a href=\"{{ path('contact_new') }}\">
                <div class=\"btn btn-success\">
                    <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                </div>
            </a>
            <form method=\"post\" class=\"d-inline-flex ml-3\">
                <input type=\"text\" name=\"find\">
                <input type=\"submit\" value=\"search\" class=\"btn btn-dark\">
            </form>
        </div>

        <div class=\"row mt-4\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th style=\"text-align:center\">Id</th>
                    <th style=\"text-align:center\">First Name</th>
                    <th style=\"text-align:center\">Last Name</th>
                    <th style=\"text-align:center\">Email</th>
                    <th style=\"text-align:center\">Phone Number</th>
                    <th style=\"text-align:center\">Company</th>
                    <th style=\"text-align:center\">Office</th>
                    <th style=\"text-align:center\">Actions</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style=\"text-align:center\">{{ contact.id }}</td>
                        <td style=\"text-align:center\">{{ contact.firstName }}</td>
                        <td style=\"text-align:center\">{{ contact.lastName }}</td>
                        <td style=\"text-align:center\">{{ contact.email }}</td>
                        <td style=\"text-align:center\">{{ contact.phoneNumber }}</td>
                        <td style=\"text-align:center\">{{ contact.company }}</td>
                        <td style=\"text-align:center\">{{ contact.office }}</td>
                        <td style=\"text-align:center\">

                            <div class=\"container col-10\">
                                <div class=\"row\">
                                    <a href=\"{{ path('contact_show', {'id': contact.id}) }}\">
                                        <button class=\"btn btn-primary ml-2\">
                                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                        </button>
                                    </a>
                                    <a href=\"{{ path('contact_edit', {'id': contact.id}) }}\">
                                        <button class=\"btn btn-info ml-2\">
                                            <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                        </button>
                                    </a>
                                    <form method=\"post\" action=\"{{ path('contact_delete', {'id': contact.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                        <button class=\"btn btn-danger ml-2\">
                                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ contact.id) }}\">
                                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>


        </div>

    </div>
{% endblock %}
", "contact/search.html.twig", "Z:\\xampp\\htdocs\\Contact\\templates\\contact\\search.html.twig");
    }
}
