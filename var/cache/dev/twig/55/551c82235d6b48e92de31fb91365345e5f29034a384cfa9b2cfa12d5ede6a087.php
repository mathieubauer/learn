<?php

/* dswQuizBundle:Attempt:play.html.twig */
class __TwigTemplate_71ec0b1e8be1dd2fd1db0f26cde390e9359cace058ced27a4d791e2d3f4cd9dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Attempt:play.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Attempt:play.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswQuizBundle:Attempt:play.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "form/fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container-fluid my-md-5 my-3\">
  
<div class=\"panel_gauche\"></div>
<div class=\"panel_droite\"></div>
  
    <div class=\"row justify-content-around\">
  
        <div class=\"col-md-4 blanc\">
            <div class=\"card\">
            <div class=\"card-body\">
            <h1 class=\"question mb-0\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? $this->getContext($context, "question")), "intitule", array()), "html", null, true);
        echo "</h1>
            </div>
            </div>
        </div>

        <div class=\"col-md-4\">
           
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal container_reponses")));
        echo "

                <div class=\"btn-groupz\" data-toggle=\"buttons\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "answer", array()), 'widget');
        echo "
                </div>
                
                <div class=\"text-center\">
                <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\"/>
                </div>

            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            
        </div>
    
    </div>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Attempt:play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  80 => 25,  74 => 22,  64 => 15,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
{% form_theme form 'form/fields.html.twig' %}

{% block body %}
<div class=\"container-fluid my-md-5 my-3\">
  
<div class=\"panel_gauche\"></div>
<div class=\"panel_droite\"></div>
  
    <div class=\"row justify-content-around\">
  
        <div class=\"col-md-4 blanc\">
            <div class=\"card\">
            <div class=\"card-body\">
            <h1 class=\"question mb-0\">{{ question.intitule }}</h1>
            </div>
            </div>
        </div>

        <div class=\"col-md-4\">
           
            {{ form_start(form, {'attr': {'class': 'form-horizontal container_reponses'}}) }}

                <div class=\"btn-groupz\" data-toggle=\"buttons\">
                {{ form_widget(form.answer) }}
                </div>
                
                <div class=\"text-center\">
                <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\"/>
                </div>

            {{ form_end(form) }}
            
        </div>
    
    </div>
    
</div>
{% endblock %}
", "dswQuizBundle:Attempt:play.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Attempt/play.html.twig");
    }
}
