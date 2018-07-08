<?php

/* dswAmpliBundle:Commentaire:edit.html.twig */
class __TwigTemplate_fe61f31aef0b9bbb172d989e8bc67f0e9cf69723e2d4d744d910d4bf18f5df32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Commentaire:edit.html.twig", 1);
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
        echo " - Éditer un commentaire";
    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
    }

    // line 5
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container my-5\">
<div class=\"row justify-content-center\">
<div class=\"col-md-8\">
   
    <h1>Éditer le commentaire</h1>

    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
       
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "content", array()), 'widget');
        echo "
        
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_public", array("id" => $this->getAttribute($this->getAttribute(($context["commentaire"] ?? null), "idee", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary mt-3\">Annuler</a>
        
        <input type=\"submit\" value=\"Enregistrer les modifications\" class=\"btn btn-primary mt-3\" />
        
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
    
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Commentaire:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  63 => 16,  58 => 14,  53 => 12,  45 => 6,  42 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Commentaire:edit.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Commentaire/edit.html.twig");
    }
}
