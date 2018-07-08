<?php

/* dswAmpliBundle:Idee:add.html.twig */
class __TwigTemplate_f2ade515d847281083a2b9ed3ec3125ef50b0673da739e9fa82bf0a9efd750f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Idee:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_ampli_jumbotron' => array($this, 'block_dsw_ampli_jumbotron'),
            'dsw_ampli_content' => array($this, 'block_dsw_ampli_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswAmpliBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Proposez vos idées !";
    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["espace"] ?? null), "titre", array()), "html", null, true);
        echo "</p><h1>Proposez vos idées !</h1>";
    }

    // line 5
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container mt-5\">
    
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    
        <div class=\"row\">
        <div class=\"mb-3 col-md-4\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "categorie", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"mb-3\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'widget');
        echo "</div>
    
        <div class=\"mb-3\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'widget');
        echo "</div>
    
    <input type=\"submit\" value=\"Proposer !\" class=\"btn btn-primary\" />
    
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    
    </div>
    
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé ?</p>
<a class=\"btn btn-primary mb-3\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_vote", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">Voir les idées</a>
<a class=\"btn btn-primary mb-3\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">Retour à l'accueil</a>
</div> 
</div>

";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Idee:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  86 => 27,  76 => 20,  69 => 16,  64 => 14,  58 => 11,  52 => 8,  48 => 6,  45 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Idee:add.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/add.html.twig");
    }
}
