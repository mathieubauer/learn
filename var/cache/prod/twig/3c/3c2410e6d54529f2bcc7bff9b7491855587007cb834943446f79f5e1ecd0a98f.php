<?php

/* dswLearnBundle:Module:create.html.twig */
class __TwigTemplate_0afdde1af08e2dd16928825e8d4cf1deb2f6b5e1dcadded05217196183d72ce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Module:create.html.twig", 1);
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
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "name", array()), "html", null, true);
        echo " : Nouveau module";
    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        // line 4
        echo "  
    <div class=\"row justify-content-center\">
    <div class=\"col-md-8 text-center\">
   
    <h1>Création de module</h1>
    
    <p>
    Vous allez créer un module dans le cours \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "name", array()), "html", null, true);
        echo "\"<br>
    Veuillez saisir son titre.
    </p>

    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
       
        <div class=\"mb-3\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'widget');
        echo "</div>

        <button class=\"btn btn-learn\" type=\"submit\">Créer un module</button>
        
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    
    </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Module:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  62 => 17,  57 => 15,  50 => 11,  41 => 4,  38 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Module:create.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Module/create.html.twig");
    }
}
