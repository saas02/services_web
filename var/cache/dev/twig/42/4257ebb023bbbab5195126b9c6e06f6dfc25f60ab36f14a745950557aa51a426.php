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

/* ./tamatoly/general/posts.html.twig */
class __TwigTemplate_98b47ca429a7a656f5bd4d8a1c37db10fb9a1381288694308527a32492c204a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/posts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/posts.html.twig"));

        // line 1
        echo "<header>
    <h2 class=\"icon solid fa-file circled\"><span class=\"label\">Posts</span></h2>
</header>
<ul class=\"divided\">
    <li>
        <article class=\"post stub\">
            <header>
                <h3><a href=\"#\">Nisl fermentum integer</a></h3>
            </header>
            <span class=\"timestamp\">3 hours ago</span>
        </article>
    </li>
    <li>
        <article class=\"post stub\">
            <header>
                <h3><a href=\"#\">Phasellus portitor lorem</a></h3>
            </header>
            <span class=\"timestamp\">6 hours ago</span>
        </article>
    </li>
    <li>
        <article class=\"post stub\">
            <header>
                <h3><a href=\"#\">Magna tempus consequat</a></h3>
            </header>
            <span class=\"timestamp\">Yesterday</span>
        </article>
    </li>
    <li>
        <article class=\"post stub\">
            <header>
                <h3><a href=\"#\">Feugiat lorem ipsum</a></h3>
            </header>
            <span class=\"timestamp\">2 days ago</span>
        </article>
    </li>
</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./tamatoly/general/posts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <h2 class=\"icon solid fa-file circled\"><span class=\"label\">Posts</span></h2>
</header>
<ul class=\"divided\">
    <li>
        <article class=\"post stub\">
            <header>
                <h3><a href=\"#\">Nisl fermentum integer</a></h3>
            </header>
            <span class=\"timestamp\">3 hours ago</span>
        </article>
    </li>
    <li>
        <article class=\"post stub\">
            <header>
                <h3><a href=\"#\">Phasellus portitor lorem</a></h3>
            </header>
            <span class=\"timestamp\">6 hours ago</span>
        </article>
    </li>
    <li>
        <article class=\"post stub\">
            <header>
                <h3><a href=\"#\">Magna tempus consequat</a></h3>
            </header>
            <span class=\"timestamp\">Yesterday</span>
        </article>
    </li>
    <li>
        <article class=\"post stub\">
            <header>
                <h3><a href=\"#\">Feugiat lorem ipsum</a></h3>
            </header>
            <span class=\"timestamp\">2 days ago</span>
        </article>
    </li>
</ul>", "./tamatoly/general/posts.html.twig", "C:\\xampp\\htdocs\\tamatoly\\templates\\tamatoly\\general\\posts.html.twig");
    }
}
