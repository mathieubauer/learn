<?php

/* dswQuizBundle:Question:new.html.twig */
class __TwigTemplate_0e7031dbd224b9692b58d8d75e77c4ea379961864752f7a446d53d492a70cec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Question:new.html.twig", 1);
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
    
    <h3>Création de question</h3>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
       
        ";
        // line 11
        echo "        
        <div class=\"row mt-5\">
        
            <div class=\"col-6\">
            <div class=\"card\">
                
                <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-4\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "questionnaire", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-8\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "questionnaire", array()), 'widget');
        echo "
                    </div>
                </div>
                <br>

                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "intitule", array()), 'widget');
        echo "
                </div>

            </div>
            </div>


            <div class=\"col-6\">
            <div class=\"answers\" data-prototype=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "answers", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
                ";
        // line 38
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "answers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 39
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["answer"], "answer", array()), 'widget');
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
            </div>
        
        </div>
        
        <input type=\"submit\" value=\"Créer la question\" class=\"btn btn-primary\" />
        
    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_index");
        echo "\" class=\"btn btn-secondary\">Retour à la liste des questions</a>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Question:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  105 => 48,  96 => 41,  87 => 39,  82 => 38,  78 => 36,  67 => 28,  59 => 23,  53 => 20,  42 => 11,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Question:new.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Question/new.html.twig");
    }
}
