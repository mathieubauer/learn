<?php

/* dswLearnBundle:Course:play_module.html.twig */
class __TwigTemplate_1e103b77682c0df3501f7a7e9055e33c436e77c04ebcb644eb50e0f240b6e3ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Course:play_module.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Course:play_module.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Course:play_module.html.twig"));

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
<div class=\"row justify-content-center\">
<div class=\"col-md-10\">
    
    ";
        // line 9
        echo "    
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "name", array()), "html", null, true);
        echo "</h1>
        <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "modules", array()), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</h1>
        
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "modules", array()), 0, array(), "array"), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 14
            echo "           
            ";
            // line 16
            echo "            ";
            // line 17
            echo "            
            <div class=\"mb-3\">
            
                ";
            // line 20
            if (($this->getAttribute($context["unit"], "type", array()) == "image")) {
                // line 21
                echo "
                    <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "content", array()), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Image\">

                ";
            } elseif (($this->getAttribute(            // line 24
$context["unit"], "type", array()) == "video")) {
                // line 25
                echo "
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "content", array()), "html", null, true);
                echo "\"></iframe>
                    </div>

                ";
            } else {
                // line 31
                echo "
                    ";
                // line 32
                echo $this->getAttribute($context["unit"], "content", array());
                echo "

                ";
            }
            // line 35
            echo "            
            </div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        
        ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_build", array("id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-learn my-3\">Modifier le cours</a>
        ";
        }
        // line 43
        echo "        
</div>
</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Course:play_module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 43,  148 => 41,  146 => 40,  143 => 39,  134 => 35,  128 => 32,  125 => 31,  118 => 27,  114 => 25,  112 => 24,  107 => 22,  104 => 21,  102 => 20,  97 => 17,  95 => 16,  92 => 14,  88 => 13,  83 => 11,  79 => 10,  76 => 9,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
   
<div class=\"row justify-content-center\">
<div class=\"col-md-10\">
    
    {# Affiche le module unique #}
    
        <h1>{{ course.name }}</h1>
        <h1>{{ course.modules[0].name }}</h1>
        
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
        
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('course_build', {'id': course.id}) }}\" class=\"btn btn-learn my-3\">Modifier le cours</a>
        {% endif %}
        
</div>
</div>
    
{% endblock %}
", "dswLearnBundle:Course:play_module.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Course/play_module.html.twig");
    }
}
