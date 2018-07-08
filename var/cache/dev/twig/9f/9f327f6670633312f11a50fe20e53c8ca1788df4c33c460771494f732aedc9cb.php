<?php

/* dswQuizBundle:Questionnaire:show.html.twig */
class __TwigTemplate_2e5fd7a4ea38bb418e47bdf20601ccafc98f76094993ba82d6ae94689468d96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Questionnaire:show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Questionnaire:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Questionnaire:show.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["questionnaire"] ?? $this->getContext($context, "questionnaire")), "titre", array()), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_questionnaire_edit", array("id" => $this->getAttribute(($context["questionnaire"] ?? $this->getContext($context, "questionnaire")), "id", array()))), "html", null, true);
        echo "\">Éditer</a>
    
    
    <hr class=\"mt-5\">
    
    
    ";
        // line 14
        echo "    
    <h2>Questions</h2>
    
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["questionnaire"] ?? $this->getContext($context, "questionnaire")), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 18
            echo "      
        <div class=\"card\">
       
            <div class=\"card-header\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "intitule", array()), "html", null, true);
            echo "</strong>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_edit", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                </div>
            </div>

            <ul class=\"list-group list-group-flush\">
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "answers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 30
                echo "                <li class=\"list-group-item py-2 d-flex justify-content-between\">
                    <small>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "answer", array()), "html", null, true);
                echo "</small>
                    <small>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "score", array()), "html", null, true);
                echo "</small>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </ul>

            ";
            // line 46
            echo "        
        </div>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    
    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_questionnaire_new", array("id" => $this->getAttribute(($context["questionnaire"] ?? $this->getContext($context, "questionnaire")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary my-3\">Ajouter une question</a>
 
    
    <hr class=\"mt-5\">
    
    
    ";
        // line 58
        echo "    
    <h2>Réponses</h2>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th>User</th>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["questionnaire"] ?? $this->getContext($context, "questionnaire")), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 66
            echo "                <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "intitule", array()), "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </tr>
        </thead>
        <tbody>
        
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attemptsUsers"] ?? $this->getContext($context, "attemptsUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["attemptsUser"]) {
            // line 73
            echo "            <tr>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attemptsUser"], "user", array()), "username", array()), "html", null, true);
            echo "</td>
                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attempts"] ?? $this->getContext($context, "attempts")));
            foreach ($context['_seq'] as $context["_key"] => $context["attempt"]) {
                if (($this->getAttribute($this->getAttribute($context["attempt"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute($context["attemptsUser"], "user", array()), "username", array()))) {
                    // line 76
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attempt"], "answer", array()), "answer", array()), "html", null, true);
                    echo "</td>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attempt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attemptsUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
        </tbody>
    </table>
    
    
    
    <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_quiz_intro", array("id" => $this->getAttribute(($context["questionnaire"] ?? $this->getContext($context, "questionnaire")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary mt-3\">Essayer le questionnaire</a>
    
    <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_questionnaire_index");
        echo "\" class=\"btn btn-secondary mt-3\">Retour à la liste des questionnaires</a>

    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Supprimer le questionnaire\" class=\"btn btn-danger mt-3\"/>
    ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Questionnaire:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 92,  218 => 90,  213 => 88,  208 => 86,  200 => 80,  193 => 78,  183 => 76,  178 => 75,  174 => 74,  171 => 73,  167 => 72,  161 => 68,  152 => 66,  148 => 65,  139 => 58,  130 => 51,  127 => 50,  118 => 46,  114 => 35,  105 => 32,  101 => 31,  98 => 30,  94 => 29,  86 => 24,  82 => 23,  75 => 18,  71 => 17,  66 => 14,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'dswCoreBundle::base.html.twig' %}

{% block body %}
<div class=\"container my-5\">
   
    <h1>{{ questionnaire.titre }}</h1>
    <a href=\"{{ path('quiz_questionnaire_edit', { 'id': questionnaire.id }) }}\">Éditer</a>
    
    
    <hr class=\"mt-5\">
    
    
    {# ===== QUESTIONS ===== #}
    
    <h2>Questions</h2>
    
    {% for question in questionnaire.questions %}
      
        <div class=\"card\">
       
            <div class=\"card-header\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <strong>{{ question.intitule }}</strong>
                    <a href=\"{{ path('quiz_question_edit', { 'id': question.id }) }}\" class=\"btn btn-secondary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                </div>
            </div>

            <ul class=\"list-group list-group-flush\">
            {% for answer in question.answers %}
                <li class=\"list-group-item py-2 d-flex justify-content-between\">
                    <small>{{ answer.answer }}</small>
                    <small>{{ answer.score }}</small>
                </li>
            {% endfor %}
            </ul>

            {# =====
            {% for answer in question.answers %}
            {% for attempt in answer.attempts %}

                {{ attempt.user.username }} : {{ attempt.answer.score }}

            {% endfor %}
            {% endfor %}
            ===== #}
        
        </div>
        
    {% endfor %}
    
    <a href=\"{{ path('quiz_question_questionnaire_new', { 'id': questionnaire.id }) }}\" class=\"btn btn-primary my-3\">Ajouter une question</a>
 
    
    <hr class=\"mt-5\">
    
    
    {# ===== REPONSES ===== #}
    
    <h2>Réponses</h2>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th>User</th>
                {% for question in questionnaire.questions %}
                <th>{{ question.intitule }}</th>
                {% endfor %}
            </tr>
        </thead>
        <tbody>
        
            {% for attemptsUser in attemptsUsers %}
            <tr>
                <td>{{ attemptsUser.user.username }}</td>
                {% for attempt in attempts if attempt.user.username == attemptsUser.user.username %}
                <td>{{ attempt.answer.answer }}</td>
                {% endfor %}
            </tr>
            {% endfor %}

        </tbody>
    </table>
    
    
    
    <a href=\"{{ path('dsw_quiz_intro', { 'id': questionnaire.id }) }}\" class=\"btn btn-secondary mt-3\">Essayer le questionnaire</a>
    
    <a href=\"{{ path('quiz_questionnaire_index') }}\" class=\"btn btn-secondary mt-3\">Retour à la liste des questionnaires</a>

    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Supprimer le questionnaire\" class=\"btn btn-danger mt-3\"/>
    {{ form_end(delete_form) }}

</div>
{% endblock %}
", "dswQuizBundle:Questionnaire:show.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Questionnaire/show.html.twig");
    }
}
