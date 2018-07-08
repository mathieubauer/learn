<?php

/* :FeedbackBundle/seance:start.html.twig */
class __TwigTemplate_93b66562716749dfd574f6ead32b5e2e3a29d8a65e719277a3eee68311e54934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::layout.html.twig", ":FeedbackBundle/seance:start.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FeedbackBundle/seance:start.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FeedbackBundle/seance:start.html.twig"));

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
        echo "<div class=\"container-fluid my-md-5 my-3\">
  
<div class=\"panel_gauche\"></div>
<div class=\"panel_droite\"></div>
  
    <div class=\"row justify-content-around\">
  
        <div class=\"col-md-4 blanc\">
            <div class=\"card\">
            <div class=\"card-body\">
            
            <h1 class=\"question mb-0\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["seance"] ?? $this->getContext($context, "seance")), "name", array()), "html", null, true);
        echo "</h1>
            
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["seance"] ?? $this->getContext($context, "seance")), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 18
            echo "            <p class=\"text-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "intitule", array()), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            
            </div>
            </div>
        </div>

        <div class=\"col-md-4\">
           

            
        </div>
    
    </div>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":FeedbackBundle/seance:start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  71 => 18,  67 => 17,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'dswCoreBundle::layout.html.twig' %}

{% block body %}
<div class=\"container-fluid my-md-5 my-3\">
  
<div class=\"panel_gauche\"></div>
<div class=\"panel_droite\"></div>
  
    <div class=\"row justify-content-around\">
  
        <div class=\"col-md-4 blanc\">
            <div class=\"card\">
            <div class=\"card-body\">
            
            <h1 class=\"question mb-0\">{{ seance.name }}</h1>
            
            {% for question in seance.questions %}
            <p class=\"text-primary\">{{ question.intitule }}</p>
            {% endfor %}
            
            </div>
            </div>
        </div>

        <div class=\"col-md-4\">
           

            
        </div>
    
    </div>
    
</div>
{% endblock %}", ":FeedbackBundle/seance:start.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/app/Resources/views/FeedbackBundle/seance/start.html.twig");
    }
}
