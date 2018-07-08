<?php

/* dswLearnBundle:Unit:edit.html.twig */
class __TwigTemplate_71fa2850784920e754940bb1a45fd7dd1886e51616f1372145f6669c1790d3ef extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Unit:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Unit:edit.html.twig"));

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
        echo " - Édition";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_learn_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_learn_content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "module", array()), "course", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "module", array()), "course", array()), "name", array()), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item\">
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "module", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "module", array()), "name", array()), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 18
        if ($this->getAttribute(($context["unit"] ?? null), "name", array(), "any", true, true)) {
            // line 19
            echo "        <li class=\"breadcrumb-item active\" aria-current=\"page\">
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "name", array()), "html", null, true);
            echo "
        </li>
        ";
        }
        // line 23
        echo "    </ol>
    </nav>
    
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
    
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'errors');
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "name", array()), 'widget');
            echo "</div>
        ";
        }
        // line 41
        echo "        
        <div class=\"mb-1\"><strong>Contenu</strong></div>
        <div class=\"mb-3 typo_code\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "content", array()), 'widget');
        echo "</div>
        
        ";
        // line 45
        if ($this->getAttribute(($context["edit_form"] ?? null), "type", array(), "any", true, true)) {
            // line 46
            echo "        <div class=\"mb-1\"><strong>Type</strong></div>
        <div class=\"mb-3\">";
            // line 47
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "type", array()), 'widget');
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imageFile", array()), 'widget');
            echo "</div>
        ";
        }
        // line 54
        echo "        
        
        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_build", array("id" => $this->getAttribute($this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "module", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mb-3\">Annuler</a>
        <button class=\"btn btn-learn mb-3\" type=\"submit\">Enregistrer les modifications</button>
        
    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_delete", array("id" => $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger mb-3\">Supprimer l'unité</a>
    ";
        }
        // line 66
        echo "    
    
    </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  196 => 66,  191 => 65,  187 => 64,  183 => 62,  181 => 61,  176 => 59,  170 => 56,  166 => 54,  161 => 52,  158 => 51,  156 => 50,  153 => 49,  148 => 47,  145 => 46,  143 => 45,  138 => 43,  134 => 41,  129 => 39,  126 => 38,  124 => 37,  121 => 36,  116 => 28,  111 => 26,  106 => 23,  100 => 20,  97 => 19,  95 => 18,  88 => 16,  80 => 13,  69 => 4,  60 => 3,  41 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} - Édition{% endblock %}
{% block dsw_learn_content %}
  
    <div class=\"row justify-content-center\">
    <div class=\"col-md-8\">
   
    <h1>Éditer une ressource</h1>
    
    <nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
        <a href=\"{{ path('course_play', {'id': unit.module.course.id }) }}\">{{ unit.module.course.name }}</a>
        </li>
        <li class=\"breadcrumb-item\">
        <a href=\"{{ path('module_play', {'id': unit.module.id }) }}\">{{ unit.module.name }}</a>
        </li>
        {% if unit.name is defined %}
        <li class=\"breadcrumb-item active\" aria-current=\"page\">
        {{ unit.name }}
        </li>
        {% endif %}
    </ol>
    </nav>
    
    {{ form_start(edit_form) }}
    
        {{ form_errors(edit_form) }}
        
        {#
        <div class=\"mb-3\">
        {{ form_label(edit_form.module) }}
        {{ form_widget(edit_form.module) }}
        </div>
        #}
        
        {% if edit_form.name is defined %}
        <div class=\"mb-1\"><strong>Titre de la ressource</strong></div>
        <div class=\"mb-3\">{{ form_widget(edit_form.name) }}</div>
        {% endif %}
        
        <div class=\"mb-1\"><strong>Contenu</strong></div>
        <div class=\"mb-3 typo_code\">{{ form_widget(edit_form.content) }}</div>
        
        {% if edit_form.type is defined %}
        <div class=\"mb-1\"><strong>Type</strong></div>
        <div class=\"mb-3\">{{ form_widget(edit_form.type) }}</div>
        {% endif %}
        
        {% if edit_form.imageFile is defined %}
        <div class=\"mb-1\"><strong>Fichier</strong></div>
        <div class=\"mb-3\">{{ form_widget(edit_form.imageFile) }}</div>
        {% endif %}
        
        
        <a href=\"{{ path('module_build', {'id': unit.module.id }) }}\" class=\"btn btn-dark mb-3\">Annuler</a>
        <button class=\"btn btn-learn mb-3\" type=\"submit\">Enregistrer les modifications</button>
        
    {{ form_end(edit_form) }}
    
    {% if is_granted('ROLE_ADMIN') %}
        <hr>
        <h3>Administrateur</h3>
        <a href=\"{{ path('unit_index') }}\" class=\"btn btn-learn mb-3\">Retour à la liste</a>
        <a href=\"{{ path('unit_delete', {'id': unit.id }) }}\" class=\"btn btn-danger mb-3\">Supprimer l'unité</a>
    {% endif %}    
    
    </div>
    </div>
    
{% endblock %}", "dswLearnBundle:Unit:edit.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Unit/edit.html.twig");
    }
}
