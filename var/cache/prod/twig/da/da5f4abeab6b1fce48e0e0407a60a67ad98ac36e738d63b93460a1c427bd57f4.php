<?php

/* dswQuizBundle:Question:edit.html.twig */
class __TwigTemplate_bc5bada8223cf5abf9f08b23d2dec970b256e4f1e946335841d43c4cdcfaf140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswQuizBundle::layout.html.twig", "dswQuizBundle:Question:edit.html.twig", 1);
        $this->blocks = array(
            'dsw_quiz_content' => array($this, 'block_dsw_quiz_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswQuizBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_dsw_quiz_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container my-5\">
   
    <h1>Édition de question</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
       
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "questionnaire", array()), 'widget');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "intitule", array()), 'widget');
        echo "
        
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["edit_form"] ?? null), "answers", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 14
            echo "        
            <h3 class=\"mt-4\">Réponse ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</h3>
            ";
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["answer"], 'widget');
            echo "
        
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? null), 'widget');
        echo "
        
        <input type=\"submit\" value=\"Éditer la question\" class=\"btn btn-primary mt-3\" />
        
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
    
    
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
        <input type=\"submit\" value=\"Supprimer la question\" class=\"btn btn-tertiary mt-3\">
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
    
    <!-- <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_index");
        echo "\" class=\"btn btn-secondary mt-3\">Liste des questions</a> -->
    
    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_questionnaire_show", array("id" => $this->getAttribute($this->getAttribute(($context["question"] ?? null), "questionnaire", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary mt-3\">Retour au questionnaire</a>
    
</div>    
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Question:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  118 => 31,  113 => 29,  108 => 27,  102 => 24,  95 => 20,  92 => 19,  75 => 16,  71 => 15,  68 => 14,  51 => 13,  46 => 11,  42 => 10,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Question:edit.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Question/edit.html.twig");
    }
}
