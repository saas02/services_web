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

/* ./tamatoly/general/tweets.html.twig */
class __TwigTemplate_4fff21fb45259045075f6c74f62fb0b069c470d3960fa33276fdec7d9795cf32 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/tweets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/tweets.html.twig"));

        // line 1
        echo "<header>
    <h2 class=\"icon brands fa-twitter circled\"><span class=\"label\">Tweets</span></h2>
</header>
<ul class=\"divided\">
    <li>
        <article class=\"tweet\">
            Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
            <span class=\"timestamp\">5 minutes ago</span>
        </article>
    </li>
    <li>
        <article class=\"tweet\">
            Hendrerit rutrum quisque.
            <span class=\"timestamp\">30 minutes ago</span>
        </article>
    </li>
    <li>
        <article class=\"tweet\">
            Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
            <span class=\"timestamp\">3 hours ago</span>
        </article>
    </li>
    <li>
        <article class=\"tweet\">
            Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
            <span class=\"timestamp\">5 hours ago</span>
        </article>
    </li>
</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./tamatoly/general/tweets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <h2 class=\"icon brands fa-twitter circled\"><span class=\"label\">Tweets</span></h2>
</header>
<ul class=\"divided\">
    <li>
        <article class=\"tweet\">
            Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
            <span class=\"timestamp\">5 minutes ago</span>
        </article>
    </li>
    <li>
        <article class=\"tweet\">
            Hendrerit rutrum quisque.
            <span class=\"timestamp\">30 minutes ago</span>
        </article>
    </li>
    <li>
        <article class=\"tweet\">
            Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
            <span class=\"timestamp\">3 hours ago</span>
        </article>
    </li>
    <li>
        <article class=\"tweet\">
            Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
            <span class=\"timestamp\">5 hours ago</span>
        </article>
    </li>
</ul>
", "./tamatoly/general/tweets.html.twig", "C:\\xampp\\htdocs\\tamatoly\\templates\\tamatoly\\general\\tweets.html.twig");
    }
}
