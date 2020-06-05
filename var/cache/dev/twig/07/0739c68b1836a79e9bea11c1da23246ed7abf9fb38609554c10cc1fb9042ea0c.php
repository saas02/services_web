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

/* ./tamatoly/general/features.html.twig */
class __TwigTemplate_05f210229719dccbe88b443cb66c18e996980e580b63dc7d945a677ab0f3b4c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/features.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/features.html.twig"));

        // line 1
        echo "<!-- Features -->

<header>
    <h2>Nuestros Clientes</h2>
    <p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
</header>
<div class=\"row\">
    <article class=\"col-4 col-12-mobile special\">
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic07.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Panaderia 1</a></h3>
        </header>
        <p>
            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
        </p>
    </article>
    <article class=\"col-4 col-12-mobile special\">
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic08.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Panaderia 2</a></h3>
        </header>
        <p>
            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
        </p>
    </article>
    <article class=\"col-4 col-12-mobile special\">
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic09.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Panaderia 3</a></h3>
        </header>
        <p>
            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
        </p>
    </article>
    <article class=\"col-4 col-12-mobile special\">
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic07.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Panaderia 4</a></h3>
        </header>
        <p>
            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
        </p>
    </article>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./tamatoly/general/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  79 => 29,  66 => 19,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Features -->

<header>
    <h2>Nuestros Clientes</h2>
    <p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
</header>
<div class=\"row\">
    <article class=\"col-4 col-12-mobile special\">
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic07.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Panaderia 1</a></h3>
        </header>
        <p>
            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
        </p>
    </article>
    <article class=\"col-4 col-12-mobile special\">
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic08.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Panaderia 2</a></h3>
        </header>
        <p>
            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
        </p>
    </article>
    <article class=\"col-4 col-12-mobile special\">
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic09.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Panaderia 3</a></h3>
        </header>
        <p>
            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
        </p>
    </article>
    <article class=\"col-4 col-12-mobile special\">
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic07.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Panaderia 4</a></h3>
        </header>
        <p>
            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
        </p>
    </article>
</div>
", "./tamatoly/general/features.html.twig", "C:\\xampp\\htdocs\\tamatoly\\templates\\tamatoly\\general\\features.html.twig");
    }
}
