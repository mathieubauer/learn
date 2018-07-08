<?php

/* dswLearnBundle:Course:build.html.twig */
class __TwigTemplate_9e661ea8f9b94383a3b8be33148462c024f655bb422629c449f2a4ee5898e567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Course:build.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Éditer un cours";
    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        // line 4
        echo "  
<div class=\"row justify-content-center\">
<div class=\"col-md-10\">
   
    <h1>Constructeur de cours</h1>
    
    <div class=\"breadcrumb p-4 mb-5\">
    <h3 class=\"mb-4\">Paramètres du cours</h3>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
      
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Titre</strong></div>
            <div class=\"col-md-9\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "name", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Description</strong></div>
            <div class=\"col-md-9\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "description", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Code</strong></div>
            <div class=\"col-md-9\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "code", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Logo</strong></div>
            <div class=\"col-md-9\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "logo", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Public</strong></div>
            <div class=\"col-md-9\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "public", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"ml-0 text-right\">
            <button class=\"btn btn-learn ml-0\" type=\"submit\">Enregistrer les modifications</button>
        </div>
       
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
    
    </div>
    
    
    <h3 class=\"mb-4\">Liste des modules</h3>
    
    <ul class=\"list-group w-100\">
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "modules", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 53
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_build", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action list-group-item-learn\">
        ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
            echo "
        </a>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "        <p>Il n'y a encore aucun module associé à ce cours. Commencez par en ajouter un !</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </ul>
    
    <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_create", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Ajouter un module</a>
    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Voir le cours</a>
    
    ";
        // line 70
        echo "    
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Course:build.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 70,  143 => 62,  139 => 61,  135 => 59,  128 => 57,  120 => 54,  115 => 53,  110 => 52,  99 => 44,  89 => 37,  81 => 32,  73 => 27,  65 => 22,  57 => 17,  50 => 13,  39 => 4,  36 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Course:build.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Course/build.html.twig");
    }
}
