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

/* ./tamatoly/general/carousel.html.twig */
class __TwigTemplate_06173c6594342d4d047a3ab054e6586768a7f7135cfbc65b9e0716e30321c31c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/carousel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/carousel.html.twig"));

        // line 1
        echo "<!-- Carousel -->
<div class=\"reel\">
    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic01.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 1</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic02.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 2</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic03.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 3</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic04.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 4</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic05.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Lechona</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic01.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Pulvinar sagittis congue</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic02.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Fermentum sagittis proin</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic03.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic04.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Ultrices urna sit lobortis</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic05.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Varius magnis sollicitudin</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./tamatoly/general/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 76,  136 => 68,  125 => 60,  114 => 52,  103 => 44,  92 => 36,  81 => 28,  70 => 20,  59 => 12,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Carousel -->
<div class=\"reel\">
    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic01.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 1</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic02.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 2</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic03.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 3</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic04.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 4</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic05.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Lechona</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic01.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Pulvinar sagittis congue</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic02.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Fermentum sagittis proin</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic03.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic04.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Ultrices urna sit lobortis</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic05.jpg')) }}\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Varius magnis sollicitudin</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>
</div>

", "./tamatoly/general/carousel.html.twig", "C:\\xampp\\htdocs\\tamatoly\\templates\\tamatoly\\general\\carousel.html.twig");
    }
}
