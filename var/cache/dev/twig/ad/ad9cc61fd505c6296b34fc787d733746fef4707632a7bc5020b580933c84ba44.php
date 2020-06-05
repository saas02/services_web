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

/* tamatoly/general/header.html.twig */
class __TwigTemplate_957508c4cf3a7674f35a8cc395c59a3244cc6eb7e057b08593f00b13da8cb9a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tamatoly/general/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tamatoly/general/header.html.twig"));

        // line 2
        echo "<!-- Header -->
<div id=\"header\">

    <!-- Inner -->
    <div class=\"inner\">
        <header>
            <h1><a href=\"index.html\" id=\"logo\">Helios</a></h1>
            <hr />
            <p>Another fine freebie by HTML5 UP</p>
        </header>
        <footer>
            <a href=\"#banner\" class=\"button circled scrolly\">Start</a>
        </footer>
    </div>

    <!-- Nav -->
    <nav id=\"nav\">
        <ul>
            <li><a href=\"index.html\">Home</a></li>
            <li>
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
        </ul>
    </nav>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tamatoly/general/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# empty Twig template #}
<!-- Header -->
<div id=\"header\">

    <!-- Inner -->
    <div class=\"inner\">
        <header>
            <h1><a href=\"index.html\" id=\"logo\">Helios</a></h1>
            <hr />
            <p>Another fine freebie by HTML5 UP</p>
        </header>
        <footer>
            <a href=\"#banner\" class=\"button circled scrolly\">Start</a>
        </footer>
    </div>

    <!-- Nav -->
    <nav id=\"nav\">
        <ul>
            <li><a href=\"index.html\">Home</a></li>
            <li>
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
        </ul>
    </nav>

</div>
", "tamatoly/general/header.html.twig", "C:\\xampp\\htdocs\\tamatoly\\templates\\tamatoly\\general\\header.html.twig");
    }
}
