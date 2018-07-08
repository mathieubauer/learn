<?php

/* dswEvalBundle:Enregistrement:texte.html.twig */
class __TwigTemplate_b7cd7bb47be76c1ea9ad388326acae7edd3f177a52ef9d2c7a57336d353f41d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswEvalBundle::layout.html.twig", "dswEvalBundle:Enregistrement:texte.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_eval_content' => array($this, 'block_dsw_eval_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswEvalBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_dsw_eval_content($context, array $blocks = array())
    {
        // line 4
        echo "   
    <h1>Le profil managérial du sous-directeur</h1>
    <p>Indiquer, en quelques mots, quelques phrases et sans trop réfléchir, ce qui, d’après vous, caractérise le management de votre sous-directeur.</p>
   
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
       
        ";
        // line 11
        echo "        
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reponse", array()), 'widget');
        echo "
        
        <input type=\"submit\" value=\"Valider et terminer le questionnaire\" class=\"btn btn-primary mt-3\" />
        
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    
";
    }

    public function getTemplateName()
    {
        return "dswEvalBundle:Enregistrement:texte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  52 => 12,  49 => 11,  44 => 8,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswEvalBundle:Enregistrement:texte.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/Enregistrement/texte.html.twig");
    }
}
