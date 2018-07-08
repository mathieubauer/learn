<?php

/* ::layout.html.twig */
class __TwigTemplate_319920935e86ef0418f37881b7109c4d58485125cb715ddf8ca72217f0a17242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
       
    <header>
    <nav class=\"navbar fixed-top navbar-dark bg-dark\">

        <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_homepage");
        echo "\"><i class=\"fa fa-home\"></i></a>

        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_homepage");
        echo "\">Accueil</a>
            </li>
        </ul>

    </nav>

    <div class=\"jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h1>L'Ampli</h1>
        <p>Ce projet est en construction !</p>
    </div>
    </div>

    </header>

    <div id=\"content\">
        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "    </div>

    <footer>
    </footer>

    ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "by D-Sides";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  ";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "        ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  116 => 48,  112 => 42,  109 => 41,  103 => 12,  99 => 10,  96 => 9,  90 => 7,  84 => 52,  82 => 48,  75 => 43,  73 => 41,  54 => 25,  47 => 21,  38 => 14,  36 => 9,  31 => 7,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::layout.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/app/Resources/views/layout.html.twig");
    }
}
