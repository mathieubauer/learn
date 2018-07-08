<?php

/* dswLearnBundle:Module:build.html.twig */
class __TwigTemplate_060cddda062b4f875291455421137111f543c0d03173abb7324e6f745e639a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Module:build.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Module:build.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "name", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "name", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_learn_content"));

        // line 4
        echo "  
<div class=\"row justify-content-center\">
<div class=\"col-md-10\">
   
    <h1>Constructeur de module</h1>
    
    <nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb px-4\">
        <li class=\"breadcrumb-item\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_build", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "name", array()), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "name", array()), "html", null, true);
        echo "
        </li>
        <li class=\"text-right\">
        <i class=\"fas ";
        // line 19
        if ($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "picto", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "picto", array()), "html", null, true);
        } else {
            echo "fas fa-arrow-right";
        }
        echo " fa-fw ml-2 text-right\"></i>
        </li>
        
        
        
    </ol>
    
    </nav>
    
    <div class=\"breadcrumb p-4 mb-5\">
    <h3 class=\"mb-4\">Paramètres du module</h3>

    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
      
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Titre</strong></div>
            <div class=\"col-md-9\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Picto du menu</strong></div>
            <div class=\"col-md-9\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "picto", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Forum de discussion</strong></div>
            <div class=\"col-md-9\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "chat", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Accessibilité du module</strong></div>
            <div class=\"col-md-9\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "open", array()), 'widget');
        echo "</div>
        </div> 
        
        <div class=\"ml-0\">
            <button class=\"btn btn-learn ml-0\" type=\"submit\">
                <i class=\"far fa-save fa-lg mr-2\"></i>Enregistrer les modifications
            </button>
        </div>
       
    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    
    </div>
    
    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["units"] ?? $this->getContext($context, "units")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 64
            echo "
        <div class=\"row mb-4\">
        <div class=\"col-md-8\">
        
            ";
            // line 68
            echo twig_include($this->env, $context, "dswLearnBundle:Unit:loop.html.twig");
            echo "
                
        </div>
        <div class=\"col-md-4\">
        
        <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_edit", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-edit\"></i></a>
        
        ";
            // line 75
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 76
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_down", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-down\"></i></a>
        ";
            }
            // line 78
            echo "        
        ";
            // line 79
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                // line 80
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_up", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-up\"></i></a>
        ";
            }
            // line 82
            echo "        
        <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_delete", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-trash\"></i></a>
        
            </div>
            </div>
    
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 89
            echo "        <p>Il n'y a encore aucun contenu associé à ce module. Commencez par en ajouter un !</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    
<!-- Ajout unité image ######################### -->
    
    ";
        // line 111
        echo "    
    
<!-- Ajout unité ######################### -->
    
    <hr>
    ";
        // line 116
        echo twig_include($this->env, $context, "dswLearnBundle:Unit:form_new.html.twig");
        echo "
    
    
<!-- Affichages ######################### -->
   
    <br>
    <!-- <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_build", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mt-2 mb-3\">Retour au cours</a> -->
    <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mt-2 mb-3\"> 
        <i class=\"fas fa-eye fa-lg mr-2\"></i>Afficher le cours
    </a>
    <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mt-2 mb-3\"> 
        <i class=\"fas fa-eye fa-lg mr-2\"></i>Afficher le module
    </a>
    
    <hr>
    

<!-- Suppression ######################### -->    

    <div class=\"text-right\">
    ";
        // line 136
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <button class=\"btn btn-danger mt-3\" type=\"submit\">
            <i class=\"fas fa-trash fa-lg mr-2\"></i>Supprimer le module
        </button>
    ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </div>
    
</div>
</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Module:build.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 140,  280 => 136,  267 => 126,  261 => 123,  257 => 122,  248 => 116,  241 => 111,  236 => 91,  229 => 89,  210 => 83,  207 => 82,  201 => 80,  199 => 79,  196 => 78,  190 => 76,  188 => 75,  183 => 73,  175 => 68,  169 => 64,  151 => 63,  144 => 59,  132 => 50,  124 => 45,  116 => 40,  108 => 35,  101 => 31,  82 => 19,  76 => 16,  68 => 13,  57 => 4,  51 => 3,  35 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} - {{ module.course.name }} : {{ module.name }}{% endblock %}
{% block dsw_learn_content %}
  
<div class=\"row justify-content-center\">
<div class=\"col-md-10\">
   
    <h1>Constructeur de module</h1>
    
    <nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb px-4\">
        <li class=\"breadcrumb-item\">
        <a href=\"{{ path('course_build', {'id': module.course.id }) }}\">{{ module.course.name }}</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">
        {{ module.name }}
        </li>
        <li class=\"text-right\">
        <i class=\"fas {% if module.picto %}{{ module.picto }}{% else %}fas fa-arrow-right{% endif %} fa-fw ml-2 text-right\"></i>
        </li>
        
        
        
    </ol>
    
    </nav>
    
    <div class=\"breadcrumb p-4 mb-5\">
    <h3 class=\"mb-4\">Paramètres du module</h3>

    {{ form_start(edit_form) }}
      
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Titre</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.name) }}</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Picto du menu</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.picto) }}</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Forum de discussion</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.chat) }}</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Accessibilité du module</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.open) }}</div>
        </div> 
        
        <div class=\"ml-0\">
            <button class=\"btn btn-learn ml-0\" type=\"submit\">
                <i class=\"far fa-save fa-lg mr-2\"></i>Enregistrer les modifications
            </button>
        </div>
       
    {{ form_end(edit_form) }}
    
    </div>
    
    {% for unit in units %}

        <div class=\"row mb-4\">
        <div class=\"col-md-8\">
        
            {{ include(\"dswLearnBundle:Unit:loop.html.twig\") }}
                
        </div>
        <div class=\"col-md-4\">
        
        <a href=\"{{ path('unit_edit', {'id': unit.id }) }}\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-edit\"></i></a>
        
        {% if not loop.last %}
        <a href=\"{{ path('unit_down', {'id': unit.id }) }}\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-down\"></i></a>
        {% endif %}
        
        {% if not loop.first %}
        <a href=\"{{ path('unit_up', {'id': unit.id }) }}\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-up\"></i></a>
        {% endif %}
        
        <a href=\"{{ path('unit_delete', {'id': unit.id }) }}\" class=\"btn btn-danger btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-trash\"></i></a>
        
            </div>
            </div>
    
    {% else %}
        <p>Il n'y a encore aucun contenu associé à ce module. Commencez par en ajouter un !</p>
    {% endfor %}
    
<!-- Ajout unité image ######################### -->
    
    {#
    <button class=\"btn btn-learn mt-5\" id=\"\" data-toggle=\"modal\" data-target=\"#modal_unit_image\">
        Ajouter une image
    </button>
    
    <div class=\"modal fade\" id=\"modal_unit_image\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
    <div class=\"modal-body\">
    
        Hoy
    
    </div>
    </div>
    </div>
    </div>
    #}
    
    
<!-- Ajout unité ######################### -->
    
    <hr>
    {{ include(\"dswLearnBundle:Unit:form_new.html.twig\") }}
    
    
<!-- Affichages ######################### -->
   
    <br>
    <!-- <a href=\"{{ path('course_build', {'id': module.course.id}) }}\" class=\"btn btn-dark mt-2 mb-3\">Retour au cours</a> -->
    <a href=\"{{ path('course_play', {'id': module.course.id}) }}\" class=\"btn btn-dark mt-2 mb-3\"> 
        <i class=\"fas fa-eye fa-lg mr-2\"></i>Afficher le cours
    </a>
    <a href=\"{{ path('module_play', {'id': module.id}) }}\" class=\"btn btn-dark mt-2 mb-3\"> 
        <i class=\"fas fa-eye fa-lg mr-2\"></i>Afficher le module
    </a>
    
    <hr>
    

<!-- Suppression ######################### -->    

    <div class=\"text-right\">
    {{ form_start(delete_form) }}
        <button class=\"btn btn-danger mt-3\" type=\"submit\">
            <i class=\"fas fa-trash fa-lg mr-2\"></i>Supprimer le module
        </button>
    {{ form_end(delete_form) }}
    </div>
    
</div>
</div>
    
{% endblock %}
", "dswLearnBundle:Module:build.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Module/build.html.twig");
    }
}
