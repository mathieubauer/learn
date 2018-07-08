<?php

/* dswLearnBundle:Course:build.html.twig */
class __TwigTemplate_9ccf3337a874306fe85587fc48aab68b5a834d789d1491b3b96d8e38a7dfcf47 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Course:build.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Éditer un cours";
        
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
   
    <h1>Constructeur de cours</h1>
    
    <div class=\"breadcrumb p-4 mb-5\">
    <h2 class=\"mb-4\">Paramètres du cours</h2>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
      
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Titre</strong></div>
            <div class=\"col-md-9\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Description</strong></div>
            <div class=\"col-md-9\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Code</strong></div>
            <div class=\"col-md-9\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "code", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Logo</strong></div>
            <div class=\"col-md-9\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "logo", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Public</strong></div>
            <div class=\"col-md-9\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "public", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"ml-0 text-right\">
            <button class=\"btn btn-learn ml-0\" type=\"submit\">Enregistrer les modifications</button>
        </div>
       
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    
    </div>
    
    
    
    
    
    <h2 class=\"mb-4\">Liste des modules</h2>
    
    <ul class=\"list-group w-100\">
    
    
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sorted_modules"] ?? $this->getContext($context, "sorted_modules")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 58
            echo "
        <div class=\"row mb-4\">
           
            <div class=\"col-md-8\">

            ";
            // line 63
            if ($this->getAttribute($context["module"], "titre", array())) {
                // line 64
                echo "            <h3 class=\"mt-4 mb-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
                echo "</h3>
            ";
            } else {
                // line 66
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_build", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" class=\"list-group-item list-group-item-action list-group-item-learn\">
            ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
                echo "
            </a>
            ";
            }
            // line 70
            echo "
            </div>
            
            <div class=\"col-md-4\">

            <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_build", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-edit\"></i></a>

            ";
            // line 77
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 78
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_down", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-down\"></i></a>
            ";
            }
            // line 80
            echo "
            ";
            // line 81
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                // line 82
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_up", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-up\"></i></a>
            ";
            }
            // line 84
            echo "
            <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_delete", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
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
            // line 92
            echo "       
        <p>Il n'y a encore aucun module associé à ce cours. Commencez par en ajouter un !</p>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
    </ul>
    
    <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_create", array("id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Créer un module</a>
    <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_duplicate_module", array("id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Dupliquer un module</a>
    <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_create_title", array("id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Ajouter un séparateur</a>
    <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Voir le cours</a>
    
    ";
        // line 110
        echo "    
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  259 => 110,  254 => 102,  250 => 101,  246 => 100,  242 => 99,  237 => 96,  228 => 92,  208 => 85,  205 => 84,  199 => 82,  197 => 81,  194 => 80,  188 => 78,  186 => 77,  181 => 75,  174 => 70,  168 => 67,  163 => 66,  157 => 64,  155 => 63,  148 => 58,  130 => 57,  114 => 44,  104 => 37,  96 => 32,  88 => 27,  80 => 22,  72 => 17,  65 => 13,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} - Éditer un cours{% endblock %}
{% block dsw_learn_content %}
  
<div class=\"row justify-content-center\">
<div class=\"col-md-10\">
   
    <h1>Constructeur de cours</h1>
    
    <div class=\"breadcrumb p-4 mb-5\">
    <h2 class=\"mb-4\">Paramètres du cours</h2>

    {{ form_start(edit_form) }}
      
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Titre</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.name) }}</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Description</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.description) }}</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Code</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.code) }}</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Logo</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.logo) }}</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Public</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.public) }}</div>
        </div>
        
        <div class=\"ml-0 text-right\">
            <button class=\"btn btn-learn ml-0\" type=\"submit\">Enregistrer les modifications</button>
        </div>
       
    {{ form_end(edit_form) }}
    
    </div>
    
    
    
    
    
    <h2 class=\"mb-4\">Liste des modules</h2>
    
    <ul class=\"list-group w-100\">
    
    
    {% for module in sorted_modules %}

        <div class=\"row mb-4\">
           
            <div class=\"col-md-8\">

            {% if module.titre %}
            <h3 class=\"mt-4 mb-2\">{{ module.name }}</h3>
            {% else %}
            <a href=\"{{ path('module_build', {'id': module.id }) }}\" class=\"list-group-item list-group-item-action list-group-item-learn\">
            {{ module.name }}
            </a>
            {% endif %}

            </div>
            
            <div class=\"col-md-4\">

            <a href=\"{{ path('module_build', {'id': module.id }) }}\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-edit\"></i></a>

            {% if not loop.last %}
            <a href=\"{{ path('module_down', {'id': module.id }) }}\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-down\"></i></a>
            {% endif %}

            {% if not loop.first %}
            <a href=\"{{ path('module_up', {'id': module.id }) }}\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-up\"></i></a>
            {% endif %}

            <a href=\"{{ path('module_delete', {'id': module.id }) }}\" class=\"btn btn-danger btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-trash\"></i></a>

            </div>
            
        </div>
    
    {% else %}
       
        <p>Il n'y a encore aucun module associé à ce cours. Commencez par en ajouter un !</p>
        
    {% endfor %}

    </ul>
    
    <a href=\"{{ path('module_create', {'id': course.id }) }}\" class=\"btn btn-dark my-3\">Créer un module</a>
    <a href=\"{{ path('course_duplicate_module', {'id': course.id }) }}\" class=\"btn btn-dark my-3\">Dupliquer un module</a>
    <a href=\"{{ path('module_create_title', {'id': course.id }) }}\" class=\"btn btn-dark my-3\">Ajouter un séparateur</a>
    <a href=\"{{ path('course_play', {'id': course.id }) }}\" class=\"btn btn-dark my-3\">Voir le cours</a>
    
    {#
    <hr>
    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Supprimer le cours\" class=\"btn btn-tertiary mt-3\" />
    {{ form_end(delete_form) }}
    #}
    
</div>
</div>

{% endblock %}", "dswLearnBundle:Course:build.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Course/build.html.twig");
    }
}
