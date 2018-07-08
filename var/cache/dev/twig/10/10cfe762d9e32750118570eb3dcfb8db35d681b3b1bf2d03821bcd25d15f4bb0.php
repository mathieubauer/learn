<?php

/* dswQuizBundle:Questionnaire:bilanPedago.html.twig */
class __TwigTemplate_277adc3aafb7437b9ce362a4f7aabed79f5384f346778910bac488bf2ae4263d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Questionnaire:bilanPedago.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Questionnaire:bilanPedago.html.twig"));

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
    
    <div class=\"row my-5\">
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Créativité</h3>
            <div class=\"bilan\" id=\"bilan_a\" data-value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? $this->getContext($context, "scores")), "A", array()), "html", null, true);
        echo "\"></div>
        </div>
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Digital</h3>
            <div class=\"bilan\" id=\"bilan_b\" data-value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? $this->getContext($context, "scores")), "B", array()), "html", null, true);
        echo "\"></div>
        </div>
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Orga et anim</h3>
            <div class=\"bilan\" id=\"bilan_c\" data-value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? $this->getContext($context, "scores")), "C", array()), "html", null, true);
        echo "\"></div>
        </div>
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Analyse et synthèse</h3>
            <div class=\"bilan\" id=\"bilan_d\" data-value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? $this->getContext($context, "scores")), "D", array()), "html", null, true);
        echo "\"></div>
        </div>
    </div>
    
    <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["debriefs"] ?? $this->getContext($context, "debriefs")), "A", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["debriefs"] ?? $this->getContext($context, "debriefs")), "B", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["debriefs"] ?? $this->getContext($context, "debriefs")), "C", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["debriefs"] ?? $this->getContext($context, "debriefs")), "D", array()), "html", null, true);
        echo "</p>
    
    ";
        // line 153
        echo "    
    
    ";
        // line 181
        echo "    
    <a class=\"btn btn-primary mt-3\" href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_quiz_intro", array("id" => $this->getAttribute(($context["questionnaire"] ?? $this->getContext($context, "questionnaire")), "id", array()))), "html", null, true);
        echo "\">Recommencer le questionnaire</a><br>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  113 => 182,  110 => 181,  106 => 153,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  82 => 23,  75 => 19,  68 => 15,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
   
    <h1>{{ questionnaire.titre }}</h1>
    
    <div class=\"row my-5\">
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Créativité</h3>
            <div class=\"bilan\" id=\"bilan_a\" data-value=\"{{ scores.A }}\"></div>
        </div>
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Digital</h3>
            <div class=\"bilan\" id=\"bilan_b\" data-value=\"{{ scores.B }}\"></div>
        </div>
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Orga et anim</h3>
            <div class=\"bilan\" id=\"bilan_c\" data-value=\"{{ scores.C }}\"></div>
        </div>
        <div class=\"col-md-3 text-center\">
            <h3 class=\"mb-4\">Analyse et synthèse</h3>
            <div class=\"bilan\" id=\"bilan_d\" data-value=\"{{ scores.D }}\"></div>
        </div>
    </div>
    
    <p>{{ debriefs.A }}</p>
    <p>{{ debriefs.B }}</p>
    <p>{{ debriefs.C }}</p>
    <p>{{ debriefs.D }}</p>
    
    {#
    <h3 class=\"mt-3\">Créativité : {{ scores.A }} %</h3>
    
    <div class=\"meter dark my-3\" style=\"width: 100%;\">
        <span style=\"width: {{ scores.A }}%;\"></span>
    </div>
    
    <p>{{ debriefs.A }}</p>
    
    <div class=\"row\">
    {% for attempt in attempts if attempt.answer.question.questionnaire.id == questionnaire.id and attempt.answer.axe == 'A' %}
        <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-header\">
                <strong>{{ attempt.answer.question.intitule }}</strong>
            </div>
            <div class=\"card-body\">
                Votre réponse : {{ attempt.answer.answer }}<br>
                {% if bonnesReponses[loop.index0].answer is defined %}
                    La bonne réponse : {{ bonnesReponses[loop.index0].answer }}<br>
                {% endif %}
                Score : {{ attempt.answer.score }}
            </div>
        </div>
        </div>
    {% endfor %}
    </div>
    
    
    <h3 class=\"mt-3\">Digital : {{ scores.B }} %</h3>
    <p>{{ debriefs.B }}</p>
    
    <div class=\"row\">
    
    <span class=\"col-md-12 my-3\">
        <div class=\"meter dark\" style=\"width: 100%;\">
            <span style=\"width: {{ scores.B }}%;\"></span>
        </div>
    </span>
    
    {% for attempt in attempts if attempt.answer.question.questionnaire.id == questionnaire.id and attempt.answer.axe == 'B' %}
        <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-header\">
                <strong>{{ attempt.answer.question.intitule }}</strong>
            </div>
            <div class=\"card-body\">
                Votre réponse : {{ attempt.answer.answer }}<br>
                {% if bonnesReponses[loop.index0].answer is defined %}
                    La bonne réponse : {{ bonnesReponses[loop.index0].answer }}<br>
                {% endif %}
                Score : {{ attempt.answer.score }}
            </div>
        </div>
        </div>
    {% endfor %}
    
    </div>
    
    
    <h3 class=\"mt-3\">Organisation et animation : {{ scores.C }} %</h3>
    <p>{{ debriefs.C }}</p>

    <div class=\"row\">
    
    <span class=\"col-md-12 my-3\">
        <div class=\"meter dark\" style=\"width: 100%;\">
            <span style=\"width: {{ scores.C }}%;\"></span>
        </div>
    </span>
    
    {% for attempt in attempts if attempt.answer.question.questionnaire.id == questionnaire.id and attempt.answer.axe == 'C' %}
        <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-header\">
                <strong>{{ attempt.answer.question.intitule }}</strong>
            </div>
            <div class=\"card-body\">
                Votre réponse : {{ attempt.answer.answer }}<br>
                {% if bonnesReponses[loop.index0].answer is defined %}
                    La bonne réponse : {{ bonnesReponses[loop.index0].answer }}<br>
                {% endif %}
                Score : {{ attempt.answer.score }}
            </div>
        </div>
        </div>
    {% endfor %}
    
    </div>
    
    
    <h3 class=\"mt-3\">Analyse et synthèse : {{ scores.D }} %</h3>
    <p>{{ debriefs.D }}</p>
    
    <div class=\"row\">
    
    <span class=\"col-md-12 my-3\">
        <div class=\"meter dark\" style=\"width: 100%;\">
            <span style=\"width: {{ scores.D }}%;\"></span>
        </div>
    </span>
    
    {% for attempt in attempts if attempt.answer.question.questionnaire.id == questionnaire.id and attempt.answer.axe == 'D' %}
        <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-header\">
                <strong>{{ attempt.answer.question.intitule }}</strong>
            </div>
            <div class=\"card-body\">
                Votre réponse : {{ attempt.answer.answer }}<br>
                {% if bonnesReponses[loop.index0].answer is defined %}
                    La bonne réponse : {{ bonnesReponses[loop.index0].answer }}<br>
                {% endif %}
                Score : {{ attempt.answer.score }}
            </div>
        </div>
        </div>
    {% endfor %}
    
    </div>
    #}
    
    
    {#
    {% for attempt in attempts if attempt.answer.question.questionnaire.id == questionnaire.id and attempt.answer.axe == 'A' %}
       
        <div class=\"card\">
            
            <div class=\"card-header\">
              
                <strong>{{ attempt.answer.question.intitule }}</strong>
            </div>
            <div class=\"card-body\">
                Votre réponse : {{ attempt.answer.answer }}<br>
                {% if bonnesReponses[loop.index0].answer is defined %}
                    La bonne réponse : {{ bonnesReponses[loop.index0].answer }}<br>
                {% endif %}
                Score : {{ attempt.answer.score }}
                
            </div>
            
        </div>
        
    {% else %}
    
        <p>Vous n'avez répondu à aucune question !</p>
    
    {% endfor %}
    #}
    
    <a class=\"btn btn-primary mt-3\" href=\"{{ path('dsw_quiz_intro', { 'id': questionnaire.id }) }}\">Recommencer le questionnaire</a><br>
    
</div>
{% endblock %}", "dswQuizBundle:Questionnaire:bilanPedago.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Questionnaire/bilanPedago.html.twig");
    }
}
