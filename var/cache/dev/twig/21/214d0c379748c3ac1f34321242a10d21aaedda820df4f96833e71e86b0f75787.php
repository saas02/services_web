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

/* error.html.twig */
class __TwigTemplate_ca981a9e6b30d5304a59dc7715738470db9fbfe2818d941d8df7489206e2194a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error.html.twig"));

        // line 1
        echo "<!DOCTYPE html> 
<html lang=&quot;es&quot;>
    <head> \t\t
        <meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; />
        <meta name=&quot;description&quot; content=&quot;Esta Tienda está desarrollada con PrestaShop&quot; />
        <style>
            ::-moz-selection {background: #b3d4fc; text-shadow: none;}             
            ::selection {background: #b3d4fc; text-shadow: none;}             
            html {padding: 30px 10px; font-size: 16px; line-height: 1.4; color: #737373; background: #f0f0f0;                 -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}             html,             input {font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;}             body {max-width:700px; _width: 700px; padding: 30px 20px 50px; border: 1px solid #b3b3b3;                 border-radius: 4px;margin: 0 auto; box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;                 background: #fcfcfc;}             h1 {margin: 0 10px; font-size: 50px; text-align: center;}             h1 span {color: #bbb;}             h2 {color: #D35780;margin: 0 10px;font-size: 40px;text-align: center;}             h2 span {color: #bbb;font-size: 80px;}             h3 {margin: 1.5em 0 0.5em;}             p {margin: 1em 0;}             ul {padding: 0 0 0 40px;margin: 1em 0;}             
            .container {max-width: 380px;_width: 480px;margin: 0 auto;}
            input::-moz-focus-inner {padding: 0;border: 0;}
        </style>
    </head>
    <body>         
        <div class=&quot;container&quot;>             
            <h2><span>500</span>Error interno del servidor</h2>             
            <p>¡Vaya! Algo salió mal.<br /><br />Trata de volver a cargar esta página o no dudes en contactar con nosotros si el problema persiste.</p>
        </div>
    </body> 
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html> 
<html lang=&quot;es&quot;>
    <head> \t\t
        <meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; />
        <meta name=&quot;description&quot; content=&quot;Esta Tienda está desarrollada con PrestaShop&quot; />
        <style>
            ::-moz-selection {background: #b3d4fc; text-shadow: none;}             
            ::selection {background: #b3d4fc; text-shadow: none;}             
            html {padding: 30px 10px; font-size: 16px; line-height: 1.4; color: #737373; background: #f0f0f0;                 -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}             html,             input {font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;}             body {max-width:700px; _width: 700px; padding: 30px 20px 50px; border: 1px solid #b3b3b3;                 border-radius: 4px;margin: 0 auto; box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;                 background: #fcfcfc;}             h1 {margin: 0 10px; font-size: 50px; text-align: center;}             h1 span {color: #bbb;}             h2 {color: #D35780;margin: 0 10px;font-size: 40px;text-align: center;}             h2 span {color: #bbb;font-size: 80px;}             h3 {margin: 1.5em 0 0.5em;}             p {margin: 1em 0;}             ul {padding: 0 0 0 40px;margin: 1em 0;}             
            .container {max-width: 380px;_width: 480px;margin: 0 auto;}
            input::-moz-focus-inner {padding: 0;border: 0;}
        </style>
    </head>
    <body>         
        <div class=&quot;container&quot;>             
            <h2><span>500</span>Error interno del servidor</h2>             
            <p>¡Vaya! Algo salió mal.<br /><br />Trata de volver a cargar esta página o no dudes en contactar con nosotros si el problema persiste.</p>
        </div>
    </body> 
</html>
", "error.html.twig", "C:\\xampp\\htdocs\\tamatoly\\templates\\error.html.twig");
    }
}
