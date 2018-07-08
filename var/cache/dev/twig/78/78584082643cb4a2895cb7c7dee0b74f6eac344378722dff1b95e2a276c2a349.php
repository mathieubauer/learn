<?php

/* dswEvalBundle:Evaluation:intro.html.twig */
class __TwigTemplate_a2dca9d5947828a5b9304d438e182babe475b86a5c4675257fb672aa626926ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswEvalBundle::layout.html.twig", "dswEvalBundle:Evaluation:intro.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswEvalBundle:Evaluation:intro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswEvalBundle:Evaluation:intro.html.twig"));

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
    <h1>Évaluation 360° - Présentation du questionnaire</h1>
    
    
    <p>Pour évaluer les façons de faire ACTUELLES de votre sous-directeur, nous vous invitons à utiliser la grille suivante.</p>
    <p>Ce qui est dit :</p>
    
    <table class=\"table\">
        <tbody>
        
            <tr>
                <td>Lui correspond tout à fait, c'est tout à fait ce qu’il fait, pense</td>
                <td>6</td>
            </tr>
            <tr>
                <td>Lui correspond souvent, c'est souvent ce que il fait, pense</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Correspond à ce que de temps à autre il fait, pense</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Ne lui correspond pas du tout, ce n'est pas du tout ce qu’il fait, pense</td>
                <td>0</td>
            </tr>
        
        </tbody>
    </table>
    
    <h3 class=\"mt-5\">Un point de vigilance</h3>
    <p>Les 48 phrases sont regroupées par thème (décider, organiser, …).</p>
    <p>Nous vous demandons de bien vouloir, pour chaque thème, utiliser l'ensemble de la grille.</p>
    <p>Par exemple pour le thème « Décider », au moins 1 phrase sera cotée 0, au moins une sera cotée 2, au moins une 4, au moins une 6. Et ainsi pour chacun des 6 thèmes composant ce questionnaire.</p>
    
    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_eval_theme", array("id" => 1));
        echo "\" class=\"btn btn-primary\">Répondre aux questions</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswEvalBundle:Evaluation:intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
   
    <h1>Évaluation 360° - Présentation du questionnaire</h1>
    
    
    <p>Pour évaluer les façons de faire ACTUELLES de votre sous-directeur, nous vous invitons à utiliser la grille suivante.</p>
    <p>Ce qui est dit :</p>
    
    <table class=\"table\">
        <tbody>
        
            <tr>
                <td>Lui correspond tout à fait, c'est tout à fait ce qu’il fait, pense</td>
                <td>6</td>
            </tr>
            <tr>
                <td>Lui correspond souvent, c'est souvent ce que il fait, pense</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Correspond à ce que de temps à autre il fait, pense</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Ne lui correspond pas du tout, ce n'est pas du tout ce qu’il fait, pense</td>
                <td>0</td>
            </tr>
        
        </tbody>
    </table>
    
    <h3 class=\"mt-5\">Un point de vigilance</h3>
    <p>Les 48 phrases sont regroupées par thème (décider, organiser, …).</p>
    <p>Nous vous demandons de bien vouloir, pour chaque thème, utiliser l'ensemble de la grille.</p>
    <p>Par exemple pour le thème « Décider », au moins 1 phrase sera cotée 0, au moins une sera cotée 2, au moins une 4, au moins une 6. Et ainsi pour chacun des 6 thèmes composant ce questionnaire.</p>
    
    <a href=\"{{ path('dsw_eval_theme', { 'id': 1 }) }}\" class=\"btn btn-primary\">Répondre aux questions</a>

{% endblock %}
", "dswEvalBundle:Evaluation:intro.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/Evaluation/intro.html.twig");
    }
}
