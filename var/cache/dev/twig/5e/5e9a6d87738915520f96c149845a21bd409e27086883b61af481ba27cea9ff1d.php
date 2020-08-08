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

/* authentification/index.html.twig */
class __TwigTemplate_9441102b2f767b3ab3bd143a9d33003cbc87fb690777ec9e08f9b46becc7d019 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentification/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentification/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "authentification/index.html.twig", 1);
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
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    <title>Login V1</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"/templates/authentification/images/icons/favicon.ico\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/vendor/bootstrap/css/bootstrap.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/fonts/font-awesome-4.7.0/css/font-awesome.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/vendor/animate/animate.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/vendor/css-hamburgers/hamburgers.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/vendor/select2/select2.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/main.css\">
    <!--===============================================================================================-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"limiter\">
                <div class=\"container-login100\">
                    <div class=\"wrap-login100\">
                        <div class=\"login100-pic js-tilt\" data-tilt>
                            <img src=\"images/img-01.png\" alt=\"IMG\">
                        </div>

                        <form class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\tMember Login
\t\t\t\t\t</span>

                            <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                                <input class=\"input100\" type=\"text\" name=\"email\" placeholder=\"Email\">
                                <span class=\"focus-input100\"></span>
                                <span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
                            </div>

                            <div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
                                <input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Password\">
                                <span class=\"focus-input100\"></span>
                                <span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
                            </div>

                            <div class=\"container-login100-form-btn\">
                                <button class=\"login100-form-btn\">
                                    Login
                                </button>
                            </div>

                            <div class=\"text-center p-t-12\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t</span>
                                <a class=\"txt2\" href=\"#\">
                                    Username / Password?
                                </a>
                            </div>

                            <div class=\"text-center p-t-136\">
                                <a class=\"txt2\" href=\"#\">
                                    Create your Account
                                    <i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            <!--===============================================================================================-->
            <script src=\"/templates/authentification/vendor/jquery/jquery-3.2.1.min.js\"></script>
            <!--===============================================================================================-->
            <script src=\"/templates/authentification/vendor/bootstrap/js/popper.js\"></script>
            <script src=\"/templates/authentification/vendor/bootstrap/js/bootstrap.min.js\"></script>
            <!--===============================================================================================-->
            <script src=\"/templates/authentification/vendor/select2/select2.min.js\"></script>
            <!--===============================================================================================-->
            <script src=\"/templates/authentification/vendor/tilt/tilt.jquery.min.js\"></script>
            <script >
                \$('.js-tilt').tilt({
                    scale: 1.1
                })
            </script>
            <!--===============================================================================================-->
            <script src=\"/templates/authentification/js/main.js\"></script>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authentification/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  118 => 27,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Site connection{% endblock %}

{% block head %}
    <title>Login V1</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"/templates/authentification/images/icons/favicon.ico\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/vendor/bootstrap/css/bootstrap.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/fonts/font-awesome-4.7.0/css/font-awesome.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/vendor/animate/animate.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/vendor/css-hamburgers/hamburgers.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/vendor/select2/select2.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/templates/authentification/main.css\">
    <!--===============================================================================================-->
{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"limiter\">
                <div class=\"container-login100\">
                    <div class=\"wrap-login100\">
                        <div class=\"login100-pic js-tilt\" data-tilt>
                            <img src=\"images/img-01.png\" alt=\"IMG\">
                        </div>

                        <form class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\tMember Login
\t\t\t\t\t</span>

                            <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                                <input class=\"input100\" type=\"text\" name=\"email\" placeholder=\"Email\">
                                <span class=\"focus-input100\"></span>
                                <span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
                            </div>

                            <div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
                                <input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Password\">
                                <span class=\"focus-input100\"></span>
                                <span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
                            </div>

                            <div class=\"container-login100-form-btn\">
                                <button class=\"login100-form-btn\">
                                    Login
                                </button>
                            </div>

                            <div class=\"text-center p-t-12\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t</span>
                                <a class=\"txt2\" href=\"#\">
                                    Username / Password?
                                </a>
                            </div>

                            <div class=\"text-center p-t-136\">
                                <a class=\"txt2\" href=\"#\">
                                    Create your Account
                                    <i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            <!--===============================================================================================-->
            <script src=\"/templates/authentification/vendor/jquery/jquery-3.2.1.min.js\"></script>
            <!--===============================================================================================-->
            <script src=\"/templates/authentification/vendor/bootstrap/js/popper.js\"></script>
            <script src=\"/templates/authentification/vendor/bootstrap/js/bootstrap.min.js\"></script>
            <!--===============================================================================================-->
            <script src=\"/templates/authentification/vendor/select2/select2.min.js\"></script>
            <!--===============================================================================================-->
            <script src=\"/templates/authentification/vendor/tilt/tilt.jquery.min.js\"></script>
            <script >
                \$('.js-tilt').tilt({
                    scale: 1.1
                })
            </script>
            <!--===============================================================================================-->
            <script src=\"/templates/authentification/js/main.js\"></script>
        </div>
    </div>
{% endblock %}", "authentification/index.html.twig", "Z:\\xampp\\htdocs\\Contact\\templates\\authentification\\index.html.twig");
    }
}
