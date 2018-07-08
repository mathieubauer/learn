<?php

/* dswQuizBundle:Question:show.html.twig */
class __TwigTemplate_ca3c380b0b282e4f019e5d1680c9f45399256261666ef77277635ca1cfcf0b40 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Question:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Question:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container my-5\">
   
    <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "questionnaire", array()), "titre", array()), "html", null, true);
        echo "</h1>
    <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "intitule", array()), "html", null, true);
        echo "</h3>
    
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "answers", array()));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_edit", array("id" => $this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary mt-3\">Modifier la question</a>
    
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Supprimer la question\" class=\"btn btn-tertiary mt-3\">
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

    <!-- <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_index");
        echo "\" class=\"btn btn-secondary mt-3\">Retour à la liste des réponses</a> -->
    
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_questionnaire_show", array("id" => $this->getAttribute($this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "questionnaire", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary mt-3\">Retour au questionnaire</a>
    
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_questionnaire_new", array("id" => $this->getAttribute($this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "questionnaire", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary mt-3\">Ajouter une question</a>
        
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  116 => 29,  111 => 27,  106 => 25,  101 => 23,  96 => 21,  91 => 19,  87 => 17,  77 => 13,  73 => 12,  69 => 11,  66 => 10,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswCoreBundle::base.html.twig\" %}

{% block body %}
<div class=\"container my-5\">
   
    <h1>{{ question.questionnaire.titre }}</h1>
    <h3>{{ question.intitule }}</h3>
    
    {% for answer in question.answers %}
        <div class=\"d-flex justify-content-between align-items-center\">
            <span class=\"mr-auto\">{{ answer.answer }}</span>
            <span class=\"ml-3\">{{ answer.score }}</span>
            <span class=\"ml-3\">{{ answer.axe }}</span>
        </div>
        <hr class=\"hr_thin\">
    {% endfor %}
    
    
    <a href=\"{{ path('quiz_question_edit', { 'id': question.id }) }}\" class=\"btn btn-primary mt-3\">Modifier la question</a>
    
    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Supprimer la question\" class=\"btn btn-tertiary mt-3\">
    {{ form_end(delete_form) }}

    <!-- <a href=\"{{ path('quiz_question_index') }}\" class=\"btn btn-secondary mt-3\">Retour à la liste des réponses</a> -->
    
    <a href=\"{{ path('quiz_questionnaire_show', { 'id': question.questionnaire.id }) }}\" class=\"btn btn-secondary mt-3\">Retour au questionnaire</a>
    
    <a href=\"{{ path('quiz_question_questionnaire_new', { 'id': question.questionnaire.id }) }}\" class=\"btn btn-secondary mt-3\">Ajouter une question</a>
        
</div>
{% endblock %}
", "dswQuizBundle:Question:show.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Question/show.html.twig");
    }
}
