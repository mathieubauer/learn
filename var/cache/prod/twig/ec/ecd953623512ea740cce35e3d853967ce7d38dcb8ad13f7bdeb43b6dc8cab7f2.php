<?php

/* dswLearnBundle:Unit:edit.html.twig */
class __TwigTemplate_41bd0c8c19ac2f88cb61e4136679d50019141c786d36a948f252a9e126d91810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Unit:edit.html.twig", 1);
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
        echo " - Édition";
    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        // line 4
        echo "  
    <div class=\"row justify-content-center\">
    <div class=\"col-md-8\">
   
    <h1>Éditer une ressource</h1>
    
    <nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["unit"] ?? null), "module", array()), "course", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["unit"] ?? null), "module", array()), "course", array()), "name", array()), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item\">
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($this->getAttribute(($context["unit"] ?? null), "module", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unit"] ?? null), "module", array()), "name", array()), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 18
        if ($this->getAttribute(($context["unit"] ?? null), "name", array(), "any", true, true)) {
            // line 19
            echo "        <li class=\"breadcrumb-item active\" aria-current=\"page\">
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? null), "name", array()), "html", null, true);
            echo "
        </li>
        ";
        }
        // line 23
        echo "    </ol>
    </nav>
    
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
    
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? null), 'errors');
        echo "
        
        ";
        // line 36
        echo "        
        ";
        // line 37
        if ($this->getAttribute(($context["edit_form"] ?? null), "name", array(), "any", true, true)) {
            // line 38
            echo "        <div class=\"mb-1\"><strong>Titre de la ressource</strong></div>
        <div class=\"mb-3\">";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "name", array()), 'widget');
            echo "</div>
        ";
        }
        // line 41
        echo "        
        <div class=\"mb-1\"><strong>Contenu</strong></div>
        <div class=\"mb-3 typo_code\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "content", array()), 'widget');
        echo "</div>
        
        ";
        // line 45
        if ($this->getAttribute(($context["edit_form"] ?? null), "type", array(), "any", true, true)) {
            // line 46
            echo "        <div class=\"mb-1\"><strong>Type</strong></div>
        <div class=\"mb-3\">";
            // line 47
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "type", array()), 'widget');
            echo "</div>
        ";
        }
        // line 49
        echo "        
        ";
        // line 50
        if ($this->getAttribute(($context["edit_form"] ?? null), "imageFile", array(), "any", true, true)) {
            // line 51
            echo "        <div class=\"mb-1\"><strong>Fichier</strong></div>
        <div class=\"mb-3\">";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "imageFile", array()), 'widget');
            echo "</div>
        ";
        }
        // line 54
        echo "        
        
        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_build", array("id" => $this->getAttribute($this->getAttribute(($context["unit"] ?? null), "module", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mb-3\">Annuler</a>
        <button class=\"btn btn-learn mb-3\" type=\"submit\">Enregistrer les modifications</button>
        
    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
    
    ";
        // line 61
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 62
            echo "        <hr>
        <h3>Administrateur</h3>
        <a href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_index");
            echo "\" class=\"btn btn-learn mb-3\">Retour à la liste</a>
        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_delete", array("id" => $this->getAttribute(($context["unit"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger mb-3\">Supprimer l'unité</a>
    ";
        }
        // line 66
        echo "    
    
    </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Unit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 66,  161 => 65,  157 => 64,  153 => 62,  151 => 61,  146 => 59,  140 => 56,  136 => 54,  131 => 52,  128 => 51,  126 => 50,  123 => 49,  118 => 47,  115 => 46,  113 => 45,  108 => 43,  104 => 41,  99 => 39,  96 => 38,  94 => 37,  91 => 36,  86 => 28,  81 => 26,  76 => 23,  70 => 20,  67 => 19,  65 => 18,  58 => 16,  50 => 13,  39 => 4,  36 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Unit:edit.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Unit/edit.html.twig");
    }
}
