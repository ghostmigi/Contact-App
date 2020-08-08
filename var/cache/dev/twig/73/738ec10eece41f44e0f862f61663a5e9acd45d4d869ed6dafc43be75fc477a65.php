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

/* contact/show.html.twig */
class __TwigTemplate_b2b2b37a6a602c80f196a9eefcd4e2041ec19ac547f3df524e37dd9b60946906 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/show.html.twig", 1);
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

        echo "Contact details";
        
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
            background-color: #2ed573;
            color: white;
        }
    </style>
    <div class=\"container mt-5\">
        <div class=\"row\">
            <h1>Contact informations</h1>
        </div>

        <div class=\"container col-6 mt-4\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th style=\"text-align:center\">Id :</th>
                        <td style=\"text-align:center\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">First Name :</th>
                        <td style=\"text-align:center\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 39, $this->source); })()), "firstName", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">Last Name :</th>
                        <td style=\"text-align:center\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 43, $this->source); })()), "lastName", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">Email :</th>
                        <td style=\"text-align:center\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">Phone Number :</th>
                        <td style=\"text-align:center\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 51, $this->source); })()), "phoneNumber", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">Company :</th>
                        <td style=\"text-align:center\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 55, $this->source); })()), "company", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">Office :</th>
                        <td style=\"text-align:center\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 59, $this->source); })()), "office", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

        <div class=\"container\">
            <div class=\"row\">
                <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\">
                <button class=\"btn btn-info\">
                        <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                </button>
                </a>
            </div>
            <div class=\"row mt-2\">
                ";
        // line 73
        echo twig_include($this->env, $context, "contact/_delete_form.html.twig");
        echo "
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
        echo "\">
                <button class=\"btn btn-warning ml-2\">
                    <i class=\"fa fa-hand-o-left\" aria-hidden=\"true\"></i>
                </button>
                </a>
            </div>
        </div>

        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 74,  181 => 73,  171 => 66,  161 => 59,  154 => 55,  147 => 51,  140 => 47,  133 => 43,  126 => 39,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact details{% endblock %}

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
            background-color: #2ed573;
            color: white;
        }
    </style>
    <div class=\"container mt-5\">
        <div class=\"row\">
            <h1>Contact informations</h1>
        </div>

        <div class=\"container col-6 mt-4\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th style=\"text-align:center\">Id :</th>
                        <td style=\"text-align:center\">{{ contact.id }}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">First Name :</th>
                        <td style=\"text-align:center\">{{ contact.firstName }}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">Last Name :</th>
                        <td style=\"text-align:center\">{{ contact.lastName }}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">Email :</th>
                        <td style=\"text-align:center\">{{ contact.email }}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">Phone Number :</th>
                        <td style=\"text-align:center\">{{ contact.phoneNumber }}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">Company :</th>
                        <td style=\"text-align:center\">{{ contact.company }}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align:center\">Office :</th>
                        <td style=\"text-align:center\">{{ contact.office }}</td>
                    </tr>
                </tbody>
            </table>

        <div class=\"container\">
            <div class=\"row\">
                <a href=\"{{ path('contact_edit', {'id': contact.id}) }}\">
                <button class=\"btn btn-info\">
                        <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                </button>
                </a>
            </div>
            <div class=\"row mt-2\">
                {{ include('contact/_delete_form.html.twig') }}
                <a href=\"{{ path('contact_index') }}\">
                <button class=\"btn btn-warning ml-2\">
                    <i class=\"fa fa-hand-o-left\" aria-hidden=\"true\"></i>
                </button>
                </a>
            </div>
        </div>

        </div>
    </div>


{% endblock %}
", "contact/show.html.twig", "Z:\\xampp\\htdocs\\Contact\\templates\\contact\\show.html.twig");
    }
}
