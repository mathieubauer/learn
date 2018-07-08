<?php

/* dswLearnBundle:Module:desactive.html.twig */
class __TwigTemplate_4838f53f5fdca8a4c964942820ac859dcd984b70f88bb8c629a2db99121723a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout_fluid.html.twig", "dswLearnBundle:Module:desactive.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_learn_content' => array($this, 'block_dsw_learn_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswLearnBundle::layout_fluid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Module:desactive.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_learn_content"));

        // line 4
        echo "  
<div class=\"row\">
        
<nav class=\"col-md-3 col-lg-2 d-none d-md-block bg-light sidebar\">
<div class=\"sidebar-sticky\">
   
    ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "logo", array())) {
            // line 11
            echo "    <div class=\"p-3\">
        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "logo", array()), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"logo\">
    </div>
    ";
        }
        // line 15
        echo "
    <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-5 mb-1 text-muted\">
    <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "name", array()), "html", null, true);
        echo "</span>
    </h6>

    <ul class=\"nav flex-column\">
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "modules", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module_menu"]) {
            // line 22
            echo "
    <li class=\"nav-item\">
    <a class=\"nav-link ";
            // line 24
            if ( !$this->getAttribute($context["module_menu"], "open", array())) {
                echo "desactive";
            }
            echo " ";
            if (($context["module_menu"] == ($context["module"] ?? $this->getContext($context, "module")))) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($context["module_menu"], "id", array()))), "html", null, true);
            echo "\">
    <i class=\"fas ";
            // line 25
            if ($this->getAttribute($context["module_menu"], "picto", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "picto", array()), "html", null, true);
            } else {
                echo "fas fa-arrow-right";
            }
            echo " mr-2\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "name", array()), "html", null, true);
            echo "
    </a>
    </li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>

</div>
</nav>
       
       
<main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10\">
<div class=\"row justify-content-center\">
<div class=\"col-md-8\">
   
        <p>Cette partie n'est pas encore disponible !</p>
    
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "modules", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module_menu"]) {
            // line 43
            echo "        ";
            if ($this->getAttribute($context["module_menu"], "open", array())) {
                // line 44
                echo "
        <a class=\"nav-link\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($context["module_menu"], "id", array()))), "html", null, true);
                echo "\">
        Retour à \"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "name", array()), "html", null, true);
                echo "\"
        </a>

        ";
            }
            // line 50
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        

 
 
</div>
</div>
</main>       
</div>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Module:desactive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 51,  157 => 50,  150 => 46,  146 => 45,  143 => 44,  140 => 43,  136 => 42,  122 => 30,  105 => 25,  93 => 24,  89 => 22,  85 => 21,  78 => 17,  74 => 15,  68 => 12,  65 => 11,  63 => 10,  55 => 4,  49 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswLearnBundle::layout_fluid.html.twig\" %}
{% block title %}{{ parent() }} - {{ module.course.name }}{% endblock %}
{% block dsw_learn_content %}
  
<div class=\"row\">
        
<nav class=\"col-md-3 col-lg-2 d-none d-md-block bg-light sidebar\">
<div class=\"sidebar-sticky\">
   
    {% if module.course.logo %}
    <div class=\"p-3\">
        <img src=\"{{ module.course.logo }}\" class=\"img-fluid\" alt=\"logo\">
    </div>
    {% endif %}

    <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-5 mb-1 text-muted\">
    <span>{{ module.course.name }}</span>
    </h6>

    <ul class=\"nav flex-column\">
    {% for module_menu in module.course.modules %}

    <li class=\"nav-item\">
    <a class=\"nav-link {% if not module_menu.open %}desactive{% endif %} {% if module_menu == module %}active{% endif %}\" href=\"{{ path('module_play', {'id': module_menu.id }) }}\">
    <i class=\"fas {% if module_menu.picto %}{{ module_menu.picto }}{% else %}fas fa-arrow-right{% endif %} mr-2\"></i> {{ module_menu.name }}
    </a>
    </li>

    {% endfor %}
    </ul>

</div>
</nav>
       
       
<main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10\">
<div class=\"row justify-content-center\">
<div class=\"col-md-8\">
   
        <p>Cette partie n'est pas encore disponible !</p>
    
        {% for module_menu in module.course.modules %}
        {% if module_menu.open %}

        <a class=\"nav-link\" href=\"{{ path('module_play', {'id': module_menu.id }) }}\">
        Retour à \"{{ module_menu.name }}\"
        </a>

        {% endif %}
        {% endfor %}

        

 
 
</div>
</div>
</main>       
</div>

    
{% endblock %}

", "dswLearnBundle:Module:desactive.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Module/desactive.html.twig");
    }
}
