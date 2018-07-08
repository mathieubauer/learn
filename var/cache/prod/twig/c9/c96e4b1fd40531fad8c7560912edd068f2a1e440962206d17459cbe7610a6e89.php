<?php

/* dswQuizBundle:Question:show.html.twig */
class __TwigTemplate_5f526bda86954cb728fe66771d5b4b90c057b625075911f1b44d0f8ae12aec5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Question:show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["question"] ?? null), "questionnaire", array()), "titre", array()), "html", null, true);
        echo "</h1>
    <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? null), "intitule", array()), "html", null, true);
        echo "</h3>
    
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["question"] ?? null), "answers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 10
            echo "        <div class=\"d-flex justify-content-between align-items-center\">
            <span class=\"mr-auto\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "answer", array()), "html", null, true);
            echo "</span>
            <span class=\"ml-3\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "score", array()), "html", null, true);
            echo "</span>
            <span class=\"ml-3\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "axe", array()), "html", null, true);
            echo "</span>
        </div>
        <hr class=\"hr_thin\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    
    
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_edit", array("id" => $this->getAttribute(($context["question"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary mt-3\">Modifier la question</a>
    
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
        <input type=\"submit\" value=\"Supprimer la question\" class=\"btn btn-tertiary mt-3\">
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "

    <!-- <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_index");
        echo "\" class=\"btn btn-secondary mt-3\">Retour à la liste des réponses</a> -->
    
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_questionnaire_show", array("id" => $this->getAttribute($this->getAttribute(($context["question"] ?? null), "questionnaire", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary mt-3\">Retour au questionnaire</a>
    
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_questionnaire_new", array("id" => $this->getAttribute($this->getAttribute(($context["question"] ?? null), "questionnaire", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary mt-3\">Ajouter une question</a>
        
</div>
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Question:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  93 => 27,  88 => 25,  83 => 23,  78 => 21,  73 => 19,  69 => 17,  59 => 13,  55 => 12,  51 => 11,  48 => 10,  44 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Question:show.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Question/show.html.twig");
    }
}
