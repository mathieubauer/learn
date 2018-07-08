<?php

/* dswQuizBundle:Question:newByQuestionnaire.html.twig */
class __TwigTemplate_82c129d5987dc3a28f462e3d80c49cf5cc1302d3d6e9657a69558f79f1290f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Question:newByQuestionnaire.html.twig", 1);
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
    
    <h3>Création de question</h3>
    
    <form>
        <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"feedbackCheck\">
            <label class=\"form-check-label\" for=\"feedbackCheck\">
            Feedback
            </label>
        </div>
        <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"axeCheck\" checked>
            <label class=\"form-check-label\" for=\"axeCheck\">
            Axe
            </label>
        </div>
        <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"scoreCheck\" checked>
            <label class=\"form-check-label\" for=\"scoreCheck\">
            Score
            </label>
        </div>
    </form> 
    
    

    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
       
        ";
        // line 36
        echo "        
        <div class=\"row my-5\">
        
            <div class=\"col-6\">
            <div class=\"card\">
                
                <div class=\"card-body\">

                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "intitule", array()), 'widget');
        echo "
                </div>

            </div>
            </div>


            <div class=\"col-6\">
            <div class=\"answers\" data-prototype=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "answers", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
                ";
        // line 54
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "answers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 55
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["answer"], "answer", array()), 'widget');
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </div>
            </div>
        
        </div>
        
        <input type=\"submit\" value=\"Créer la question\" class=\"btn btn-primary\" />
        
    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    <!-- <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_index");
        echo "\" class=\"btn btn-secondary\">Retour à la liste des questions</a> -->
    <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_questionnaire_show", array("id" => $this->getAttribute(($context["questionnaire"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary\">Retour au questionnaire</a>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Question:newByQuestionnaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 67,  123 => 66,  118 => 64,  109 => 57,  100 => 55,  95 => 54,  91 => 52,  80 => 44,  70 => 36,  65 => 33,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Question:newByQuestionnaire.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Question/newByQuestionnaire.html.twig");
    }
}
