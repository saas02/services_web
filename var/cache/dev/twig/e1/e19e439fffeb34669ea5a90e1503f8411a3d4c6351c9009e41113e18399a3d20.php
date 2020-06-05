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

/* ./tamatoly/general/footer.html.twig */
class __TwigTemplate_0340af3aae90bf31a1554ff5b98c1a7fc3186862395b19f2f654b0eec2cedce5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./tamatoly/general/footer.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <!-- Tweets -->
        <section class=\"col-4 col-12-mobile\">
            ";
        // line 5
        $this->loadTemplate("./tamatoly/general/tweets.html.twig", "./tamatoly/general/footer.html.twig", 5)->display($context);
        echo " 
        </section>
        <!-- Posts -->
        <section class=\"col-4 col-12-mobile\">
            ";
        // line 9
        $this->loadTemplate("./tamatoly/general/posts.html.twig", "./tamatoly/general/footer.html.twig", 9)->display($context);
        echo " 
        </section>
        <!-- Photos -->
        <section class=\"col-4 col-12-mobile\">
            ";
        // line 13
        $this->loadTemplate("./tamatoly/general/photos.html.twig", "./tamatoly/general/footer.html.twig", 13)->display($context);
        echo " 
        </section>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- Contact -->
            <section id=\"contact\" class=\"contact\">
                ";
        // line 21
        $this->loadTemplate("./tamatoly/general/contact.html.twig", "./tamatoly/general/footer.html.twig", 21)->display($context);
        echo " 
            </section>
            <!-- Copyright -->                            
            <div class=\"copyright\">
                ";
        // line 25
        $this->loadTemplate("./tamatoly/general/copyright.html.twig", "./tamatoly/general/footer.html.twig", 25)->display($context);
        echo "                                
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./tamatoly/general/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  74 => 21,  63 => 13,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <!-- Tweets -->
        <section class=\"col-4 col-12-mobile\">
            {% include './tamatoly/general/tweets.html.twig' %} 
        </section>
        <!-- Posts -->
        <section class=\"col-4 col-12-mobile\">
            {% include './tamatoly/general/posts.html.twig' %} 
        </section>
        <!-- Photos -->
        <section class=\"col-4 col-12-mobile\">
            {% include './tamatoly/general/photos.html.twig' %} 
        </section>
    </div>
    <hr />
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- Contact -->
            <section id=\"contact\" class=\"contact\">
                {% include './tamatoly/general/contact.html.twig' %} 
            </section>
            <!-- Copyright -->                            
            <div class=\"copyright\">
                {% include './tamatoly/general/copyright.html.twig' %}                                
            </div>
        </div>
    </div>
</div>", "./tamatoly/general/footer.html.twig", "C:\\xampp\\htdocs\\tamatoly\\templates\\tamatoly\\general\\footer.html.twig");
    }
}
