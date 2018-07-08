<?php

/* dswQuizBundle:Questionnaire:bilanPedago.html.twig */
class __TwigTemplate_157624bc18cdf9dedec5fac65fd1370508dd3418f5a64dc6aa1e74d38e06e846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Questionnaire:bilanPedago.html.twig", 1);
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
   
    <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["questionnaire"] ?? null), "titre", array()), "html", null, true);
        echo "</h1>
    
    <div class=\"row my-5\">
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Créativité</h3>
            <div class=\"bilan\" id=\"bilan_a\" data-value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? null), "A", array()), "html", null, true);
        echo "\"></div>
        </div>
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Digital</h3>
            <div class=\"bilan\" id=\"bilan_b\" data-value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? null), "B", array()), "html", null, true);
        echo "\"></div>
        </div>
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Orga et anim</h3>
            <div class=\"bilan\" id=\"bilan_c\" data-value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? null), "C", array()), "html", null, true);
        echo "\"></div>
        </div>
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Analyse et synthèse</h3>
            <div class=\"bilan\" id=\"bilan_d\" data-value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? null), "D", array()), "html", null, true);
        echo "\"></div>
        </div>
    </div>
    
    <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["debriefs"] ?? null), "A", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["debriefs"] ?? null), "B", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["debriefs"] ?? null), "C", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["debriefs"] ?? null), "D", array()), "html", null, true);
        echo "</p>
    
    ";
        // line 153
        echo "    
    
    ";
        // line 181
        echo "    
    <a class=\"btn btn-primary mt-3\" href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_quiz_intro", array("id" => $this->getAttribute(($context["questionnaire"] ?? null), "id", array()))), "html", null, true);
        echo "\">Recommencer le questionnaire</a><br>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Questionnaire:bilanPedago.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 182,  92 => 181,  88 => 153,  83 => 30,  79 => 29,  75 => 28,  71 => 27,  64 => 23,  57 => 19,  50 => 15,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Questionnaire:bilanPedago.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Questionnaire/bilanPedago.html.twig");
    }
}
