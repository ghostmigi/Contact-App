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

/* contact/index.html.twig */
class __TwigTemplate_903d5d2180814bf8838a730088b5063478ae42f30077cbcb487d2d8c444e7cf2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "flashbag", [], "any", false, false, false, 26), "all", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 27
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 28
                echo "                    ";
                if ((0 === twig_compare($context["label"], "success"))) {
                    // line 29
                    echo "                        <div class=\"alert alert-success alert-dismissible fade show\">
                            ";
                    // line 30
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "
                        </div>
                    ";
                } elseif ((0 === twig_compare(                // line 32
$context["label"], "error"))) {
                    // line 33
                    echo "                        <div class=\"alert alert-danger alert-dismissible fade show\">
                            ";
                    // line 34
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 37
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>
        <div class=\"row\">
            <h1>All Contacts</h1>
        </div>

        <div class=\"row\">
            <a href=\"";
        // line 45
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
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 71, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 72
            echo "                    <tr>
                        <td style=\"text-align:center\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstName", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "lastName", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "phoneNumber", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "company", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "office", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">

                        <div class=\"container col-10\">
                             <div class=\"row\">
                                 <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">
                                 <button class=\"btn btn-primary ml-2\">
                                         <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                 </button>
                                 </a>
                                 <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\">
                                 <button class=\"btn btn-info ml-2\">
                                         <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                 </button>
                                 </a>
                                 <form method=\"post\" action=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                     <button class=\"btn btn-danger ml-2\">
                                         <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                         <input type=\"hidden\" name=\"_token\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 97))), "html", null, true);
            echo "\">
                                         <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                     </button>
                                 </form>
                             </div>
                        </div>

                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 107
            echo "                    <tr>
                        <td colspan=\"8\">No contacts found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                </tbody>
            </table>


        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 111,  267 => 107,  252 => 97,  246 => 94,  238 => 89,  230 => 84,  222 => 79,  218 => 78,  214 => 77,  210 => 76,  206 => 75,  202 => 74,  198 => 73,  195 => 72,  190 => 71,  161 => 45,  153 => 39,  147 => 38,  141 => 37,  135 => 34,  132 => 33,  130 => 32,  125 => 30,  122 => 29,  119 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        </div>
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
                {% for contact in contacts %}
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
                {% else %}
                    <tr>
                        <td colspan=\"8\">No contacts found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>


        </div>

    </div>
{% endblock %}
", "contact/index.html.twig", "Z:\\xampp\\htdocs\\Contact\\templates\\contact\\index.html.twig");
    }
}
