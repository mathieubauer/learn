<?php

/* dswQuizBundle:Questionnaire:intro.html.twig */
class __TwigTemplate_fd343a41ce467dbe02ec8481668a513fecb7bbca82ea6696769f7faa93586f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Questionnaire:intro.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container my-5\">
  
    <div class=\"col-md-8 mx-auto\">
   
        <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["questionnaire"] ?? null), "titre", array()), "html", null, true);
        echo "</h1>
        <div>";
        // line 9
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["questionnaire"] ?? null), "intro", array()), "html", null, true));
        echo "</div>
        
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_quiz_question_play", array("id" => $this->getAttribute(($context["premiere"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary my-3\">Démarrer !</a>
    
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Questionnaire:intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Questionnaire:intro.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Questionnaire/intro.html.twig");
    }
}
