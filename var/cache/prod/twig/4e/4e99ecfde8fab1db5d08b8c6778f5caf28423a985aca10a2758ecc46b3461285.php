<?php

/* dswLearnBundle:Unit:form_new.html.twig */
class __TwigTemplate_ed43208959bbd60b5cff4a9c4316344269834807b40e8d3360fab0d7f9e6a619 extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["unit_form"] ?? null), 'form_start', array("attr" => array("id" => "form_new_unit")));
        echo "
          
            <div class=\"mb-3\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? null), "type", array()), 'widget');
        echo "</div>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? null), "type", array()), 'errors');
        echo "
            
            <div id=\"consigne\" class=\"mt-3 mb-1\"><strong></strong></div>
            
            <div class=\"mb-3\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? null), "name", array()), 'widget');
        echo "</div>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? null), "name", array()), 'errors');
        echo "
            
            <div class=\"mb-3\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? null), "content", array()), 'widget');
        echo "</div>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? null), "content", array()), 'errors');
        echo "
            
            <div class=\"mb-3\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? null), "imageFile", array()), 'widget');
        echo "</div>
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["unit_form"] ?? null), "imageFile", array()), 'errors');
        echo "
            
        <button class=\"btn btn-learn mb-3\" type=\"submit\">Ajouter</button>

        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["unit_form"] ?? null), 'form_end');
        echo "
        </div>

    </div>
</div>
</div>";
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
        return array (  85 => 38,  78 => 34,  74 => 33,  69 => 31,  65 => 30,  60 => 28,  56 => 27,  49 => 23,  45 => 22,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Unit:form_new.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Unit/form_new.html.twig");
    }
}
