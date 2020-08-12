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
class __TwigTemplate_4dab7639a4ec6c6a6c75338add3a7f73c11023d98431bb5cf93e84f8356bfae7 extends Template
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "session", [], "any", false, false, false, 27), "flashbag", [], "any", false, false, false, 27), "all", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 28
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 29
                echo "                    ";
                if ((0 === twig_compare($context["label"], "success"))) {
                    // line 30
                    echo "                        <div class=\"alert alert-success alert-dismissible fade show\">
                            ";
                    // line 31
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "
                        </div>
                    ";
                } elseif ((0 === twig_compare(                // line 33
$context["label"], "error"))) {
                    // line 34
                    echo "                        <div class=\"alert alert-danger alert-dismissible fade show\">
                            ";
                    // line 35
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 38
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </div>
        <div class=\"row\">
            <h1>All Contacts</h1>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
        echo "\">
                    <div class=\"btn btn-success mr-3\">
                        <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                    </div>
                </a>
                <div class=\"row ml-0\">
                    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 53, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 54, $this->source); })()), "searchFields", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Search ..."]]);
        echo "
                </div>
                <button class=\"btn btn-primary ml-3\">
                    ";
        // line 57
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 57, $this->source); })()), "")) : ("")), "html", null, true);
        echo "
                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                </button>
                ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
            </div>
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
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 79, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 80
            echo "                    <tr>
                        <td style=\"text-align:center\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstName", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "lastName", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "phoneNumber", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "company", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "office", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center\">

                        <div class=\"container col-10\">
                             <div class=\"row\">
                                 <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\">
                                 <button class=\"btn btn-primary ml-2\">
                                         <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                 </button>
                                 </a>
                                 <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\">
                                 <button class=\"btn btn-info ml-2\">
                                         <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                 </button>
                                 </a>
                                 <form method=\"post\" action=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                     <button class=\"btn btn-danger ml-2\">
                                         <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                         <input type=\"hidden\" name=\"_token\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 105))), "html", null, true);
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
            // line 115
            echo "                    <tr>
                        <td colspan=\"8\">No contacts found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
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
        return array (  296 => 119,  287 => 115,  272 => 105,  266 => 102,  258 => 97,  250 => 92,  242 => 87,  238 => 86,  234 => 85,  230 => 84,  226 => 83,  222 => 82,  218 => 81,  215 => 80,  210 => 79,  188 => 60,  182 => 57,  176 => 54,  172 => 53,  163 => 47,  154 => 40,  148 => 39,  142 => 38,  136 => 35,  133 => 34,  131 => 33,  126 => 31,  123 => 30,  120 => 29,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

        <div class=\"container\">
            <div class=\"row\">
                <a href=\"{{ path('contact_new') }}\">
                    <div class=\"btn btn-success mr-3\">
                        <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                    </div>
                </a>
                <div class=\"row ml-0\">
                    {{ form_start(searchForm) }}
                    {{ form_widget(searchForm.searchFields, {'attr': {'class': 'form-control', 'placeholder': 'Search ...'} })}}
                </div>
                <button class=\"btn btn-primary ml-3\">
                    {{ button_label|default('') }}
                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                </button>
                {{ form_end(searchForm) }}
            </div>
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
