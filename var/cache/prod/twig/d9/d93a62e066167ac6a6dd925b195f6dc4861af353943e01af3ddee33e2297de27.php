<?php

/* dswQuizBundle:Attempt:play.html.twig */
class __TwigTemplate_c089b339721031a0e83e2af85d02534c0995ef922e79c308177c161dac12905a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Attempt:play.html.twig", 1);
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
        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => "form/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container-fluid my-md-5 my-3\">
  
<div class=\"panel_gauche\"></div>
<div class=\"panel_droite\"></div>
  
    <div class=\"row justify-content-around\">
  
        <div class=\"col-md-4 blanc\">
            <div class=\"card\">
            <div class=\"card-body\">
            <h1 class=\"question mb-0\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? null), "intitule", array()), "html", null, true);
        echo "</h1>
            </div>
            </div>
        </div>

        <div class=\"col-md-4\">
           
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal container_reponses")));
        echo "

                <div class=\"btn-groupz\" data-toggle=\"buttons\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "answer", array()), 'widget');
        echo "
                </div>
                
                <div class=\"text-center\">
                <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\"/>
                </div>

            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            
        </div>
    
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Attempt:play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 32,  62 => 25,  56 => 22,  46 => 15,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Attempt:play.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Attempt/play.html.twig");
    }
}
