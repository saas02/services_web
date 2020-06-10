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

/* tamatoly/general/carousel.html.twig */
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tamatoly/general/carousel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tamatoly/general/carousel.html.twig"));

        // line 1
        echo "<!-- Carousel -->
<div class=\"reel\">
    ";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 3, $this->source); })()));
        echo "
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 4, $this->source); })()), "productos", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 5
            echo "        <article>
            <a href=\"#\" class=\"image featured\"><img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic01.jpg")), "html", null, true);
            echo "\" alt=\"\" /></a>
            <header>
                <h3><a href=\"#\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 8), "html", null, true);
            echo "</a></h3>
            </header>
            <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "descripcion", [], "any", false, false, false, 10), "html", null, true);
            echo ".</p>
            <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 11), "html", null, true);
            echo ".</p>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic02.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 2</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic03.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 3</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic04.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Tamal 4</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic05.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Lechona</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic01.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Pulvinar sagittis congue</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic02.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Fermentum sagittis proin</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic03.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic04.jpg")), "html", null, true);
        echo "\" alt=\"\" /></a>
        <header>
            <h3><a href=\"#\">Ultrices urna sit lobortis</a></h3>
        </header>
        <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
    </article>

    <article>
        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 81
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
        return "tamatoly/general/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 81,  163 => 73,  152 => 65,  141 => 57,  130 => 49,  119 => 41,  108 => 33,  97 => 25,  86 => 17,  81 => 14,  72 => 11,  68 => 10,  63 => 8,  58 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Carousel -->
<div class=\"reel\">
    {{ dump(result) }}
    {% for producto in result.productos %}
        <article>
            <a href=\"#\" class=\"image featured\"><img src=\"{{ absolute_url(asset('assets/images/pic01.jpg')) }}\" alt=\"\" /></a>
            <header>
                <h3><a href=\"#\">{{ producto.nombre }}</a></h3>
            </header>
            <p>{{ producto.descripcion }}.</p>
            <p>{{ producto.precio }}.</p>
        </article>
    {% endfor %}
    

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

", "tamatoly/general/carousel.html.twig", "C:\\xampp\\htdocs\\tamatoly\\templates\\tamatoly\\general\\carousel.html.twig");
    }
}
