<?php

/* dswAmpliBundle:Commentaire:delete.html.twig */
class __TwigTemplate_c9ae9900a93a60475b774e17f12f36ccc102aedfa659d244073db217159ce4a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Commentaire:delete.html.twig", 1);
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
        echo " - Supprimer un commentaire";
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

    <h1>Supprimer un commentaire</h1>

    <p>Etes-vous certain de vouloir supprimer ce commentaire ?</p>
    <p><strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commentaire"] ?? null), "content", array()), "html", null, true);
        echo "</strong></p>
    <p>Cette opération est irréversible.</p>

    ";
        // line 15
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_delete", array("id" => $this->getAttribute(($context["commentaire"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_public", array("id" => $this->getAttribute($this->getAttribute(($context["commentaire"] ?? null), "idee", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
    Annuler
    </a>
    
    ";
        // line 22
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    
    ";
        // line 25
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </form>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Commentaire:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  71 => 22,  64 => 17,  58 => 15,  52 => 11,  45 => 6,  42 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Commentaire:delete.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Commentaire/delete.html.twig");
    }
}
