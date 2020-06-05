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

/* tamatoly/general/index.html.twig */
class __TwigTemplate_aa8e812d426d7bac341b0ecf0fb4beb693cefd52a9c33a0adf7835123f384bfd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./tamatoly/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tamatoly/general/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tamatoly/general/index.html.twig"));

        $this->parent = $this->loadTemplate("./tamatoly/base.html.twig", "tamatoly/general/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "    
    <body class=\"homepage is-preload\">
        <div id=\"page-wrapper\">
            <!-- Header -->
            <div id=\"header\">
                <!-- Inner -->
                <div class=\"inner\">
                    <header>
                        <h1><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_home");
        echo "\" id=\"logo\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 11, $this->source); })()), "nombre", [], "any", false, false, false, 11)), "html", null, true);
        echo "</a></h1>
                        <hr />
                        <p>Un Slogan!!!!!!!!!!!!!</p>
                    </header>
                    <footer>
                        <a href=\"#banner\" class=\"button circled scrolly\">Invima!</a>
                    </footer>
                    
                    <div class=\"dVYIqU\">
                        <a href=\"https://api.whatsapp.com/send?phone=+57";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 20, $this->source); })()), "whatsapp", [], "any", false, false, false, 20), "html", null, true);
        echo "&text=Hola!!%20Deseo%20información%20de%20los%20productos\" target=\"_blank\">
                            <img class=\"img-social-chat\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wp.png")), "html", null, true);
        echo "\">
                        </a><br>
                        <a href=\"https://m.me/";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 23, $this->source); })()), "facebook", [], "any", false, false, false, 23), "html", null, true);
        echo "\" target=\"_blank\">
                            <img class=\"img-social-chat\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fbmsn.png")), "html", null, true);
        echo "\">
                        </a>                        
                    </div>
                    
                </div>
                
                <!-- Nav -->
                <nav id=\"nav\">                                                                               
                    <ul>
                        <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_home");
        echo "\">Inicio</a></li>
                        <li><a href=\"#banner\">Nuestros Productos</a></li>
                        <li><a href=\"#main\">Nosotros</a></li>
                        <li><a href=\"#features\">Nuestros Clientes</a></li>
                        <li><a href=\"#contact\">Contáctenos</a></li>
                        <!--<li>
                            <a href=\"#\">Dropdown</a>
                            <ul>
                                <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                <li><a href=\"#\">Magna phasellus</a></li>
                                <li><a href=\"#\">Etiam dolore nisl</a></li>
                                <li>
                                    <a href=\"#\">And a submenu &hellip;</a>
                                    <ul>
                                        <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                        <li><a href=\"#\">Phasellus consequat</a></li>
                                        <li><a href=\"#\">Magna phasellus</a></li>
                                        <li><a href=\"#\">Etiam dolore nisl</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\">Veroeros feugiat</a></li>
                            </ul>
                        </li>
                        <li><a href=\"left-sidebar.html\">Left Sidebar</a></li>
                        <li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
                        <li><a href=\"no-sidebar.html\">No Sidebar</a></li>
                        -->
                    </ul>
                </nav>
            </div>
            <!-- Banner -->
            <section id=\"banner\">
                ";
        // line 65
        $this->loadTemplate("./tamatoly/general/banner.html.twig", "tamatoly/general/index.html.twig", 65)->display($context);
        // line 66
        echo "            </section>
            <!-- Carousel -->
            <section class=\"carousel\">
                ";
        // line 69
        $this->loadTemplate("./tamatoly/general/carousel.html.twig", "tamatoly/general/index.html.twig", 69)->display($context);
        // line 70
        echo "            </section>
            <!-- Main -->
            <div class=\"wrapper style2\">
                <article id=\"main\" class=\"container special\">
                    <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic06.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
                    <header>
                        <h2><a href=\"#\">Mision -- Vision</a></h2>
                        <p>
                            Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
                            pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
                        </p>
                    </header>
                    <p>
                        Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                        posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                        sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
                        mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
                        lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                        consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                        interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                        natoque aenean scelerisque.
                    </p>
                    <footer>
                        <a href=\"#\" class=\"button\">Continue Reading</a>
                    </footer>
                </article>
            </div>
            <!-- Features -->
            <div class=\"wrapper style1\">
                <section id=\"features\" class=\"container special\">
                    ";
        // line 100
        $this->loadTemplate("./tamatoly/general/features.html.twig", "tamatoly/general/index.html.twig", 100)->display($context);
        // line 101
        echo "                </section>
            </div>

            <!-- Footer -->
            <div id=\"footer\">
                ";
        // line 106
        $this->loadTemplate("./tamatoly/general/footer.html.twig", "tamatoly/general/index.html.twig", 106)->display($context);
        echo " 
            </div>
        </div>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tamatoly/general/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 106,  197 => 101,  195 => 100,  166 => 74,  160 => 70,  158 => 69,  153 => 66,  151 => 65,  116 => 33,  104 => 24,  100 => 23,  95 => 21,  91 => 20,  77 => 11,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './tamatoly/base.html.twig' %}

{% block body %}    
    <body class=\"homepage is-preload\">
        <div id=\"page-wrapper\">
            <!-- Header -->
            <div id=\"header\">
                <!-- Inner -->
                <div class=\"inner\">
                    <header>
                        <h1><a href=\"{{ path(\"general_home\") }}\" id=\"logo\">{{ result.nombre|capitalize }}</a></h1>
                        <hr />
                        <p>Un Slogan!!!!!!!!!!!!!</p>
                    </header>
                    <footer>
                        <a href=\"#banner\" class=\"button circled scrolly\">Invima!</a>
                    </footer>
                    
                    <div class=\"dVYIqU\">
                        <a href=\"https://api.whatsapp.com/send?phone=+57{{ result.whatsapp }}&text=Hola!!%20Deseo%20información%20de%20los%20productos\" target=\"_blank\">
                            <img class=\"img-social-chat\" src=\"{{ absolute_url(asset('assets/images/wp.png')) }}\">
                        </a><br>
                        <a href=\"https://m.me/{{ result.facebook }}\" target=\"_blank\">
                            <img class=\"img-social-chat\" src=\"{{ absolute_url(asset('assets/images/fbmsn.png')) }}\">
                        </a>                        
                    </div>
                    
                </div>
                
                <!-- Nav -->
                <nav id=\"nav\">                                                                               
                    <ul>
                        <li><a href=\"{{ path(\"general_home\") }}\">Inicio</a></li>
                        <li><a href=\"#banner\">Nuestros Productos</a></li>
                        <li><a href=\"#main\">Nosotros</a></li>
                        <li><a href=\"#features\">Nuestros Clientes</a></li>
                        <li><a href=\"#contact\">Contáctenos</a></li>
                        <!--<li>
                            <a href=\"#\">Dropdown</a>
                            <ul>
                                <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                <li><a href=\"#\">Magna phasellus</a></li>
                                <li><a href=\"#\">Etiam dolore nisl</a></li>
                                <li>
                                    <a href=\"#\">And a submenu &hellip;</a>
                                    <ul>
                                        <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                        <li><a href=\"#\">Phasellus consequat</a></li>
                                        <li><a href=\"#\">Magna phasellus</a></li>
                                        <li><a href=\"#\">Etiam dolore nisl</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\">Veroeros feugiat</a></li>
                            </ul>
                        </li>
                        <li><a href=\"left-sidebar.html\">Left Sidebar</a></li>
                        <li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
                        <li><a href=\"no-sidebar.html\">No Sidebar</a></li>
                        -->
                    </ul>
                </nav>
            </div>
            <!-- Banner -->
            <section id=\"banner\">
                {% include './tamatoly/general/banner.html.twig' %}
            </section>
            <!-- Carousel -->
            <section class=\"carousel\">
                {% include './tamatoly/general/carousel.html.twig' %}
            </section>
            <!-- Main -->
            <div class=\"wrapper style2\">
                <article id=\"main\" class=\"container special\">
                    <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic06.jpg')) }}\" alt=\"\" /></a>
                    <header>
                        <h2><a href=\"#\">Mision -- Vision</a></h2>
                        <p>
                            Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
                            pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
                        </p>
                    </header>
                    <p>
                        Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                        posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                        sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
                        mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
                        lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                        consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                        interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                        natoque aenean scelerisque.
                    </p>
                    <footer>
                        <a href=\"#\" class=\"button\">Continue Reading</a>
                    </footer>
                </article>
            </div>
            <!-- Features -->
            <div class=\"wrapper style1\">
                <section id=\"features\" class=\"container special\">
                    {% include './tamatoly/general/features.html.twig' %}
                </section>
            </div>

            <!-- Footer -->
            <div id=\"footer\">
                {% include './tamatoly/general/footer.html.twig' %} 
            </div>
        </div>
    </body>
{% endblock %}
", "tamatoly/general/index.html.twig", "C:\\xampp\\htdocs\\tamatoly\\templates\\tamatoly\\general\\index.html.twig");
    }
}
