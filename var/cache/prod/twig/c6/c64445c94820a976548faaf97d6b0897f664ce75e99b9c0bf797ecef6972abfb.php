<?php

/* dswLearnBundle:Unit:delete.html.twig */
class __TwigTemplate_af627db2f106330ce36538b98cd8d5893d734e64eaa7a101fdc947816d65711e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Unit:delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_learn_content' => array($this, 'block_dsw_learn_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswLearnBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Unit:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Supprimer une unité";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_learn_content"));

        // line 4
        echo "
    <h1>Supprimer une unité</h1>

    <strong>Cette opération est irréversible.</strong>
    <p>Etes-vous certain de vouloir supprimer l'unité \"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "name", array()), "html", null, true);
        echo "\" ?</p>
    
    ";
        // line 11
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_delete", array("id" => $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "module", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
    Annuler
    </a>
    
    ";
        // line 18
        echo "    <button class=\"btn btn-danger\" type=\"submit\">Supprimer</button>
    
    ";
        // line 21
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </form>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Unit:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  78 => 18,  71 => 13,  65 => 11,  60 => 8,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswLearnBundle::layout.html.twig\" %}
{% block title %}{{ parent() }} - Supprimer une unité{% endblock %}
{% block dsw_learn_content %}

    <h1>Supprimer une unité</h1>

    <strong>Cette opération est irréversible.</strong>
    <p>Etes-vous certain de vouloir supprimer l'unité \"{{ unit.name }}\" ?</p>
    
    {# On met l'id de l'annonce dans la route de l'action du formulaire #}
    <form action=\"{{ path('unit_delete', {'id': unit.id}) }}\" method=\"post\">
    
    <a href=\"{{ path('module_play', {'id': unit.module.id}) }}\" class=\"btn btn-primary\">
    Annuler
    </a>
    
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <button class=\"btn btn-danger\" type=\"submit\">Supprimer</button>
    
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
    </form>
    
{% endblock %}", "dswLearnBundle:Unit:delete.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Unit/delete.html.twig");
    }
}
