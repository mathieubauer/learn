<?php

/* dswLearnBundle:Unit:delete.html.twig */
class __TwigTemplate_708c8f3271e928ed905f55021ea6a1cad308f28489ac8c7814157b02d828df65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Unit:delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_learn_content' => array($this, 'block_dsw_learn_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswLearnBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Supprimer une unité";
    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <h1>Supprimer une unité</h1>

    <strong>Cette opération est irréversible.</strong>
    <p>Etes-vous certain de vouloir supprimer l'unité \"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? null), "name", array()), "html", null, true);
        echo "\" ?</p>
    
    ";
        // line 11
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_delete", array("id" => $this->getAttribute(($context["unit"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($this->getAttribute(($context["unit"] ?? null), "module", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
    Annuler
    </a>
    
    ";
        // line 18
        echo "    <button class=\"btn btn-danger\" type=\"submit\">Supprimer</button>
    
    ";
        // line 21
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </form>
    
";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Unit:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  63 => 18,  56 => 13,  50 => 11,  45 => 8,  39 => 4,  36 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Unit:delete.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Unit/delete.html.twig");
    }
}
