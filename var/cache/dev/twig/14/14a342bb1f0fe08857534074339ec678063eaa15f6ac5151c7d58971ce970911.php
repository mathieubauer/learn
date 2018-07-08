<?php

/* dswEvalBundle:Evaluation:start.html.twig */
class __TwigTemplate_da299d5ff006e7c83537537ed38bdbf1d91055069038fa6bdc53750ea1d32525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswEvalBundle::layout.html.twig", "dswEvalBundle:Evaluation:start.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_eval_content' => array($this, 'block_dsw_eval_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswEvalBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswEvalBundle:Evaluation:start.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswEvalBundle:Evaluation:start.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_dsw_eval_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_eval_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_eval_content"));

        // line 4
        echo "   
    <h1>Évaluation 360°</h1>
    
    ";
        // line 7
        if ( !(null === ($context["evaluation"] ?? $this->getContext($context, "evaluation")))) {
            // line 8
            echo "    
        <p>Bienvenue 
        ";
            // line 10
            if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstname", array()))) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
                echo ",
        ";
            } else {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo ",
        ";
            }
            // line 15
            echo "        </p>
    
        <p>Vous allez participer à l'évaluation de <strong>Monsieur 
        ";
            // line 18
            if ( !(null === $this->getAttribute($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "evalue", array()), "firstname", array()))) {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "evalue", array()), "firstname", array()), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            if ( !(null === $this->getAttribute($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "evalue", array()), "lastname", array()))) {
                // line 23
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "evalue", array()), "lastname", array()), "html", null, true);
                echo ".
        ";
            } else {
                // line 25
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "evalue", array()), "username", array()), "html", null, true);
                echo ".
        ";
            }
            // line 27
            echo "        </strong></p>
        
        <p>Dans le cadre de la prise de fonction des nouveaux sous-directeurs, la DGAFP attend que chaque sous-directeur / directrice fasse un « bilan managérial » afin que « chaque auditeur connaisse (ou confirme) son profil managérial ainsi que les points forts et les axes d’amélioration ».</p>
        
        <p>Pour aider chaque sous-directeur à établir ce bilan, le Ministère de la Défense a choisi d’utiliser un questionnaire et d’interroger plusieurs personnes travaillant avec le sous-directeur / directrice.</p>
        
        <p>Nous vous proposons de :</p>
        <ul>
            <li>répondre à ce questionnaire,</li>
            <li>indiquer, en quelques mots, lignes, ce qui d’après vous, caractérise le management de votre sous-directeur.</li>
        </ul>
        
        <p>L'animateur en charge de la collecte des résultats est ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "animateur", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "animateur", array()), "lastname", array()), "html", null, true);
            echo ". Nous garantissons l'anonymat des réponses.</p>

        <a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_eval_intro");
            echo "\" class=\"btn btn-primary\">Démarrer l'évaluation</a>
    
    ";
        } else {
            // line 44
            echo "    
        <p>Vous n'avez personne à évaluer</p>
    
    ";
        }
        // line 48
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswEvalBundle:Evaluation:start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 48,  150 => 44,  144 => 41,  137 => 39,  123 => 27,  117 => 25,  111 => 23,  109 => 22,  106 => 21,  100 => 19,  98 => 18,  93 => 15,  87 => 13,  81 => 11,  79 => 10,  75 => 8,  73 => 7,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswEvalBundle::layout.html.twig\" %}
{% block title %}{{ parent() }}{% endblock %}
{% block dsw_eval_content %}
   
    <h1>Évaluation 360°</h1>
    
    {% if evaluation is not null %}
    
        <p>Bienvenue 
        {% if app.user.firstname is not null %}
            {{ app.user.firstname }},
        {% else %}
            {{ app.user.username }},
        {% endif %}
        </p>
    
        <p>Vous allez participer à l'évaluation de <strong>Monsieur 
        {% if evaluation.evalue.firstname is not null %}
            {{ evaluation.evalue.firstname }}
        {% endif %}

        {% if evaluation.evalue.lastname is not null %}
            {{ evaluation.evalue.lastname }}.
        {% else %}
            {{ evaluation.evalue.username }}.
        {% endif %}
        </strong></p>
        
        <p>Dans le cadre de la prise de fonction des nouveaux sous-directeurs, la DGAFP attend que chaque sous-directeur / directrice fasse un « bilan managérial » afin que « chaque auditeur connaisse (ou confirme) son profil managérial ainsi que les points forts et les axes d’amélioration ».</p>
        
        <p>Pour aider chaque sous-directeur à établir ce bilan, le Ministère de la Défense a choisi d’utiliser un questionnaire et d’interroger plusieurs personnes travaillant avec le sous-directeur / directrice.</p>
        
        <p>Nous vous proposons de :</p>
        <ul>
            <li>répondre à ce questionnaire,</li>
            <li>indiquer, en quelques mots, lignes, ce qui d’après vous, caractérise le management de votre sous-directeur.</li>
        </ul>
        
        <p>L'animateur en charge de la collecte des résultats est {{ evaluation.animateur.firstname }} {{ evaluation.animateur.lastname }}. Nous garantissons l'anonymat des réponses.</p>

        <a href=\"{{ path('dsw_eval_intro') }}\" class=\"btn btn-primary\">Démarrer l'évaluation</a>
    
    {% else %}
    
        <p>Vous n'avez personne à évaluer</p>
    
    {% endif %}
    
{% endblock %}
", "dswEvalBundle:Evaluation:start.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/Evaluation/start.html.twig");
    }
}
