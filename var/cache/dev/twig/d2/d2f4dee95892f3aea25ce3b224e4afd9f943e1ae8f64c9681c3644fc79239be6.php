<?php

/* dswLearnBundle:Course:build.html.twig */
class __TwigTemplate_37d3510a21ce0f473510cfe3d45eb5d0819199d6526d27b54e66e237e40e8d1e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Course:build.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Course:build.html.twig"));

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
        echo " - Éditer un cours";
        
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
            <div class=\"col-md-3\"><strong>Logo</strong></div>
            <div class=\"col-md-9\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "logo", array()), 'widget');
        echo "</div>
        </div>
        
        <hr>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Ouverture</strong></div>
            <div class=\"col-md-9\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "open", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Inscriptions</strong></div>
            <div class=\"col-md-9\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_register", array("id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">Inscrire</a></div>
        </div>
        
        
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Code url</strong></div>
            <div class=\"col-md-9\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "code", array()), 'widget');
        echo "</div>
        </div>
        
        <hr>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Page d'accueil</strong></div>
            <div class=\"col-md-9\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "public", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Description accueil</strong></div>
            <div class=\"col-md-9\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "</div>
        </div>
        
        
        <div class=\"ml-0 text-right\">
            <button class=\"btn btn-learn ml-0\" type=\"submit\">Enregistrer les modifications</button>
        </div>
       
    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    
    </div>    
    
    
    <h2 class=\"mb-4\">Liste des modules</h2>
    
    <ul class=\"list-group w-100\">
    
    
    ";
        // line 71
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
            // line 72
            echo "
        <div class=\"row mb-4\">
           
            <div class=\"col-md-8\">

            ";
            // line 77
            if ($this->getAttribute($context["module"], "titre", array())) {
                // line 78
                echo "            <h3 class=\"mt-4 mb-2\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
                echo "</h3>
            ";
            } else {
                // line 80
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_build", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" class=\"list-group-item list-group-item-action list-group-item-learn\">
            ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
                echo "
            </a>
            ";
            }
            // line 84
            echo "
            </div>
            
            <div class=\"col-md-4\">

            <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_build", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-edit\"></i></a>

            ";
            // line 91
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 92
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_down", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-down\"></i></a>
            ";
            }
            // line 94
            echo "
            ";
            // line 95
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                // line 96
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_up", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-up\"></i></a>
            ";
            }
            // line 98
            echo "
            <a href=\"";
            // line 99
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
            // line 106
            echo "       
        <p>Il n'y a encore aucun module associé à ce cours. Commencez par en ajouter un !</p>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
    </ul>
    
    <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_create", array("id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Créer un module</a>
    <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_duplicate_module", array("id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Dupliquer un module</a>
    <a href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_create_title", array("id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Ajouter un séparateur</a>
    <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Voir le cours</a>
    
    ";
        // line 124
        echo "    
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  294 => 124,  289 => 116,  285 => 115,  281 => 114,  277 => 113,  272 => 110,  263 => 106,  243 => 99,  240 => 98,  234 => 96,  232 => 95,  229 => 94,  223 => 92,  221 => 91,  216 => 89,  209 => 84,  203 => 81,  198 => 80,  192 => 78,  190 => 77,  183 => 72,  165 => 71,  152 => 61,  141 => 53,  133 => 48,  123 => 41,  113 => 34,  105 => 29,  95 => 22,  87 => 17,  80 => 13,  69 => 4,  60 => 3,  41 => 2,  11 => 1,);
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
            <div class=\"col-md-3\"><strong>Logo</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.logo) }}</div>
        </div>
        
        <hr>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Ouverture</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.open) }}</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Inscriptions</strong></div>
            <div class=\"col-md-9\"><a href=\"{{ path('course_register', {'id': course.id }) }}\">Inscrire</a></div>
        </div>
        
        
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Code url</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.code) }}</div>
        </div>
        
        <hr>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Page d'accueil</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.public) }}</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Description accueil</strong></div>
            <div class=\"col-md-9\">{{ form_widget(edit_form.description) }}</div>
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
