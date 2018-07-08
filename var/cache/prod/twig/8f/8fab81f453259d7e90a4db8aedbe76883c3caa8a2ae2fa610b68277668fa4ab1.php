<?php

/* dswAmpliBundle:Idee:delete_user.html.twig */
class __TwigTemplate_8450eea4a55ed5cdc7b849d3cbf64debaed812b8142d1b4cde40f70209f1ef80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Idee:delete_user.html.twig", 1);
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
        echo " - Supprimer une idée";
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

    <h1>Supprimer une idée</h1>

    <p>Etes-vous certain de vouloir supprimer l'idée \"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "titre", array()), "html", null, true);
        echo "\" ainsi que les contributions et likes correspondants ?</p>

    ";
        // line 13
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_delete_user", array("id" => $this->getAttribute(($context["idee"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_vote", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
    Annuler
    </a>
    
    ";
        // line 20
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    
    ";
        // line 23
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </form>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Idee:delete_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  69 => 20,  62 => 15,  56 => 13,  51 => 10,  45 => 6,  42 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Idee:delete_user.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/delete_user.html.twig");
    }
}
