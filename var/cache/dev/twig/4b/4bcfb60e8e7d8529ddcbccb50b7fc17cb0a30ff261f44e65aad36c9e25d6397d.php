<?php

/* dswQuizBundle:Question:new.html.twig */
class __TwigTemplate_4db6bc9283d9056474cec12ae0121bce62eca7863b5538bc3c83809d8d09d54c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Question:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Question:new.html.twig"));

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
    
    <h3>Création de question</h3>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "questionnaire", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-8\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "questionnaire", array()), 'widget');
        echo "
                    </div>
                </div>
                <br>

                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "intitule", array()), 'widget');
        echo "
                </div>

            </div>
            </div>


            <div class=\"col-6\">
            <div class=\"answers\" data-prototype=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "answers", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
                ";
        // line 38
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "answers", array()));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_index");
        echo "\" class=\"btn btn-secondary\">Retour à la liste des questions</a>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  128 => 50,  123 => 48,  114 => 41,  105 => 39,  100 => 38,  96 => 36,  85 => 28,  77 => 23,  71 => 20,  60 => 11,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    
    <h3>Création de question</h3>

    {{ form_start(form) }}
       
        {# form_widget(form) #}
        
        <div class=\"row mt-5\">
        
            <div class=\"col-6\">
            <div class=\"card\">
                
                <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-4\">
                    {{ form_label(form.questionnaire) }}
                    </div>
                    <div class=\"col-8\">
                    {{ form_widget(form.questionnaire) }}
                    </div>
                </div>
                <br>

                {{ form_widget(form.intitule) }}
                </div>

            </div>
            </div>


            <div class=\"col-6\">
            <div class=\"answers\" data-prototype=\"{{ form_widget(form.answers.vars.prototype)|e('html_attr') }}\">
                {# iterate over each existing tag and render its only field: name #}
                {% for answer in form.answers %}
                    {{ form_widget(answer.answer) }}
                {% endfor %}
            </div>
            </div>
        
        </div>
        
        <input type=\"submit\" value=\"Créer la question\" class=\"btn btn-primary\" />
        
    {{ form_end(form) }}

    <a href=\"{{ path('quiz_question_index') }}\" class=\"btn btn-secondary\">Retour à la liste des questions</a>
    
</div>
{% endblock %}
", "dswQuizBundle:Question:new.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Question/new.html.twig");
    }
}
