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

/* ./tamatoly/general/photos.html.twig */
class __TwigTemplate_80b96b377d0b4bcbdb505ffd6c3a158fa4e0baf40dbfd6fd0f9c5460a2c6ffa8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/photos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/photos.html.twig"));

        // line 1
        echo "<header>
    <h2 class=\"icon solid fa-camera circled\"><span class=\"label\">Photos</span></h2>
</header>
<div class=\"row gtr-25\">
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic10.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
    </div>
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic11.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
    </div>
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic12.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
    </div>
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic13.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
    </div>
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic14.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
    </div>
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic15.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./tamatoly/general/photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  74 => 18,  68 => 15,  62 => 12,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <h2 class=\"icon solid fa-camera circled\"><span class=\"label\">Photos</span></h2>
</header>
<div class=\"row gtr-25\">
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"{{ absolute_url(asset('assets/images/pic10.jpg')) }}\" alt=\"\" /></a>
    </div>
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"{{ absolute_url(asset('assets/images/pic11.jpg')) }}\" alt=\"\" /></a>
    </div>
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"{{ absolute_url(asset('assets/images/pic12.jpg')) }}\" alt=\"\" /></a>
    </div>
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"{{ absolute_url(asset('assets/images/pic13.jpg')) }}\" alt=\"\" /></a>
    </div>
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"{{ absolute_url(asset('assets/images/pic14.jpg')) }}\" alt=\"\" /></a>
    </div>
    <div class=\"col-6\">
        <a href=\"#\" class=\"image fit\"><img src=\"{{ absolute_url(asset('assets/images/pic15.jpg')) }}\" alt=\"\" /></a>
    </div>
</div>
", "./tamatoly/general/photos.html.twig", "C:\\xampp\\htdocs\\tamatoly\\templates\\tamatoly\\general\\photos.html.twig");
    }
}
