<?php

/* dswQuizBundle:Question:play.html.twig */
class __TwigTemplate_b576e0aef9612599d685f5dbc8d60266702e3cd8e5ccf8e35d6134c57c12f4fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Question:play.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Question:play.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Question:play.html.twig"));

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
<div class=\"row\">
   
    <div class=\"col-md-12\">
    <h1 class=\"question\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "intitule", array()), "html", null, true);
        echo "</h1>
    </div>
    
    
    <!--
    <form method=\"post\" action=\"index.php?questionnaire=test_suiv\">

        <div class=\"\" data-toggle=\"buttons\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"A\" value=\"A\"><?php echo \$resultat['r1']; ?>
            </label>
            <hr class=\"hr_thin\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"B\" value=\"B\"><?php echo \$resultat['r2']; ?>
            </label>
            <hr class=\"hr_thin\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"C\" value=\"C\"><?php echo \$resultat['r3']; ?>
            </label>
            <hr class=\"hr_thin\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"D\" value=\"D\"><?php echo \$resultat['r4']; ?>
            </label>

        </div>
        <br>

        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Valider la réponse\" />

    </form>
    -->
    
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["reponse"] ?? $this->getContext($context, "reponse")), 'form_start');
        echo "
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["reponse"] ?? $this->getContext($context, "reponse")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["reponse"] ?? $this->getContext($context, "reponse")), 'form_end');
        echo "
    
    
    <!--<div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "r1", array()), "html", null, true);
        echo "
        </div>
    </div>
    </div>
    
    <div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "r2", array()), "html", null, true);
        echo "
        </div>
    </div>
    </div>
    
    <div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "r3", array()), "html", null, true);
        echo "
        </div>
    </div>
    </div>
    
    <div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "r4", array()), "html", null, true);
        echo "
        </div>
    </div>
    </div>-->



    <ul>
        <li>
            <a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_edit", array("id" => $this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            <small>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "</small>
        </li>
    </ul>
    
    
    
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Question:play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 92,  163 => 89,  157 => 86,  145 => 77,  134 => 69,  123 => 61,  112 => 53,  103 => 47,  98 => 45,  94 => 44,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"row\">
   
    <div class=\"col-md-12\">
    <h1 class=\"question\">{{ question.intitule }}</h1>
    </div>
    
    
    <!--
    <form method=\"post\" action=\"index.php?questionnaire=test_suiv\">

        <div class=\"\" data-toggle=\"buttons\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"A\" value=\"A\"><?php echo \$resultat['r1']; ?>
            </label>
            <hr class=\"hr_thin\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"B\" value=\"B\"><?php echo \$resultat['r2']; ?>
            </label>
            <hr class=\"hr_thin\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"C\" value=\"C\"><?php echo \$resultat['r3']; ?>
            </label>
            <hr class=\"hr_thin\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"D\" value=\"D\"><?php echo \$resultat['r4']; ?>
            </label>

        </div>
        <br>

        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Valider la réponse\" />

    </form>
    -->
    
    {{ form_start(reponse) }}
        {{ form_widget(reponse) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(reponse) }}
    
    
    <!--<div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            {{ question.r1 }}
        </div>
    </div>
    </div>
    
    <div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            {{ question.r2 }}
        </div>
    </div>
    </div>
    
    <div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            {{ question.r3 }}
        </div>
    </div>
    </div>
    
    <div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            {{ question.r4 }}
        </div>
    </div>
    </div>-->



    <ul>
        <li>
            <a href=\"{{ path('quiz_question_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('quiz_question_edit', { 'id': question.id }) }}\">Edit</a>
        </li>
        <li>
            <small>{{ question.id }}</small>
        </li>
    </ul>
    
    
    
</div>
</div>
{% endblock %}
", "dswQuizBundle:Question:play.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Question/play.html.twig");
    }
}
