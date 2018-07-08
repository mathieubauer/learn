<?php

/* dswLearnBundle:Course:play_welcome.html.twig */
class __TwigTemplate_8188a1820e99a6a6c563fe732b1515502407d8ef0e6ac576f8d5ae30fb191b22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Course:play_welcome.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Course:play_welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Course:play_welcome.html.twig"));

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
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "name", array()), "html", null, true);
        
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
    ";
        // line 6
        echo "    
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "name", array()), "html", null, true);
        echo "</h1>
        
        <p>Par défaut, on affiche ici le remier module.</p>
        <p>Il faudrait mettre une page d'accueil !</p>
        
        <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "modules", array()), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</h2>
        
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "modules", array()), 0, array(), "array"), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 15
            echo "           
            ";
            // line 17
            echo "            ";
            // line 18
            echo "            
            <div class=\"mb-3\">
            
                ";
            // line 21
            if (($this->getAttribute($context["unit"], "type", array()) == "image")) {
                // line 22
                echo "
                    <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "content", array()), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Image\">

                ";
            } elseif (($this->getAttribute(            // line 25
$context["unit"], "type", array()) == "video")) {
                // line 26
                echo "
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "content", array()), "html", null, true);
                echo "\"></iframe>
                    </div>

                ";
            } else {
                // line 32
                echo "
                    ";
                // line 33
                echo $this->getAttribute($context["unit"], "content", array());
                echo "

                ";
            }
            // line 36
            echo "            
            </div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        
        
        <h3>Choix du module</h3>
        
        <ul class=\"list-group w-100\">
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "modules", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 46
            echo "         
            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action list-group-item-learn\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
            echo "</a>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Course:play_welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 50,  158 => 47,  155 => 46,  151 => 45,  144 => 40,  135 => 36,  129 => 33,  126 => 32,  119 => 28,  115 => 26,  113 => 25,  108 => 23,  105 => 22,  103 => 21,  98 => 18,  96 => 17,  93 => 15,  89 => 14,  84 => 12,  76 => 7,  73 => 6,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} - {{ course.name }}{% endblock %}
{% block dsw_learn_content %}

    {# Affiche le choix de module #}
    
        <h1>{{ course.name }}</h1>
        
        <p>Par défaut, on affiche ici le remier module.</p>
        <p>Il faudrait mettre une page d'accueil !</p>
        
        <h2>{{ course.modules[0].name }}</h2>
        
        {% for unit in course.modules[0].units %}
           
            {# <hr> #}
            {# <h3>{{ unit.name }}</h3> #}
            
            <div class=\"mb-3\">
            
                {% if unit.type == 'image' %}

                    <img src=\"{{ unit.content }}\" class=\"img-fluid\" alt=\"Image\">

                {% elseif unit.type == 'video' %}

                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"{{ unit.content }}\"></iframe>
                    </div>

                {% else %}

                    {{ unit.content|raw }}

                {% endif %}
            
            </div>
            
        {% endfor %}
        
        
        <h3>Choix du module</h3>
        
        <ul class=\"list-group w-100\">
        {% for module in course.modules %}
         
            <a href=\"{{ path('module_play', {'id': module.id }) }}\" class=\"list-group-item list-group-item-action list-group-item-learn\">{{ module.name }}</a>
            
        {% endfor %}
        </ul>

{% endblock %}
", "dswLearnBundle:Course:play_welcome.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Course/play_welcome.html.twig");
    }
}
