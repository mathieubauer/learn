<?php

/* dswLearnBundle:Unit:form_new.html.twig */
class __TwigTemplate_31d5d454ed8df793d4186abb4ba30e849d3c4f1b24d04ff8b8156f75959cf02b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Unit:form_new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Unit:form_new.html.twig"));

        // line 1
        echo "<button class=\"btn btn-learn\" id=\"bouton_idee\" data-toggle=\"modal\" data-target=\"#modal_idee\">
    Ajouter un contenu
</button>

<!-- Modal nouvelle unité -->

<div class=\"modal fade\" id=\"modal_idee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
<div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">

        <div class=\"modal-header\">
            <h4 class=\"modal-title\" id=\"myModalLabel\">Nouveau contenu</h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>

        <div class=\"modal-body\">

        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["unit_form"] ?? $this->getContext($context, "unit_form")), 'form_start', array("attr" => array("id" => "form_new_unit")));
        echo "
           
            <div class=\"mb-3\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? $this->getContext($context, "unit_form")), "type", array()), 'widget');
        echo "</div>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? $this->getContext($context, "unit_form")), "type", array()), 'errors');
        echo "
            
            <div id=\"consigne\" class=\"mt-3 mb-1\"><strong></strong></div>
            
            <div class=\"mb-3\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? $this->getContext($context, "unit_form")), "name", array()), 'widget');
        echo "</div>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? $this->getContext($context, "unit_form")), "name", array()), 'errors');
        echo "
            
            <div class=\"mb-3\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? $this->getContext($context, "unit_form")), "content", array()), 'widget');
        echo "</div>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? $this->getContext($context, "unit_form")), "content", array()), 'errors');
        echo "
            
            <div class=\"mb-3\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? $this->getContext($context, "unit_form")), "imageFile", array()), 'widget');
        echo "</div>
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? $this->getContext($context, "unit_form")), "imageFile", array()), 'errors');
        echo "
            
        <button class=\"btn btn-learn mb-3\" type=\"submit\">Ajouter</button>

        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["unit_form"] ?? $this->getContext($context, "unit_form")), 'form_end');
        echo "
        
        </div>

    </div>
</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Unit:form_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  84 => 34,  80 => 33,  75 => 31,  71 => 30,  66 => 28,  62 => 27,  55 => 23,  51 => 22,  46 => 20,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<button class=\"btn btn-learn\" id=\"bouton_idee\" data-toggle=\"modal\" data-target=\"#modal_idee\">
    Ajouter un contenu
</button>

<!-- Modal nouvelle unité -->

<div class=\"modal fade\" id=\"modal_idee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
<div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">

        <div class=\"modal-header\">
            <h4 class=\"modal-title\" id=\"myModalLabel\">Nouveau contenu</h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>

        <div class=\"modal-body\">

        {{ form_start(unit_form, {'attr': {'id': 'form_new_unit'}}) }}
           
            <div class=\"mb-3\">{{ form_widget(unit_form.type) }}</div>
            {{ form_errors(unit_form.type) }}
            
            <div id=\"consigne\" class=\"mt-3 mb-1\"><strong></strong></div>
            
            <div class=\"mb-3\">{{ form_widget(unit_form.name) }}</div>
            {{ form_errors(unit_form.name) }}
            
            <div class=\"mb-3\">{{ form_widget(unit_form.content) }}</div>
            {{ form_errors(unit_form.content) }}
            
            <div class=\"mb-3\">{{ form_widget(unit_form.imageFile) }}</div>
            {{ form_errors(unit_form.imageFile) }}
            
        <button class=\"btn btn-learn mb-3\" type=\"submit\">Ajouter</button>

        {{ form_end(unit_form) }}
        
        </div>

    </div>
</div>
</div>", "dswLearnBundle:Unit:form_new.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Unit/form_new.html.twig");
    }
}
