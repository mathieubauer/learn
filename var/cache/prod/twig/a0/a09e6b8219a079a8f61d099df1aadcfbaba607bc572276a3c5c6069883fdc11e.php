<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_33017c750d1417c12cc800cc34e860d59ffd452446e2213fe5bf50450ac4ad30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "TwigBundle:Exception:error404.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  
    <div class=\"landing_page\">
    <div class=\"container py-5\">
        
        <div class=\"text-md-left text-center\">
        <h1 class=\"display-3 mt-3\">
            Page introuvable !
        </h1>
        <h2>Le serveur a renvoyé les informations suivantes : \"";
        // line 13
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "\".</h2>
       
        <a class=\"btn btn-primary btn-xl my-4\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_landing");
        echo "\">Retour à l'accueil</a><br>
        </div>
        
    </div>
    </div>    
   
    ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "        ";
            // line 23
            echo "    ";
        }
        // line 24
        echo "    
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  61 => 23,  59 => 22,  57 => 21,  48 => 15,  41 => 13,  31 => 5,  28 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error404.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
