<?php

/* dswAmpliBundle:Idee:index.html.twig */
class __TwigTemplate_fe4838e1d308c7b8e65e5e7423fad117ee41198723be0f7eae7e28329724257b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Idee:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_ampli_jumbotron' => array($this, 'block_dsw_ampli_jumbotron'),
            'dsw_ampli_content' => array($this, 'block_dsw_ampli_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswAmpliBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Idee:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Idee:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Liste des idées";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_jumbotron"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_jumbotron"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_content"));

        // line 8
        echo "<div class=\"container my-5\">
   
    <h1>Liste des idées</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>User</th>
                <th>Cœurs</th>
                <th>Sélection</th>
                <th class=\"col-1\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["idees"] ?? $this->getContext($context, "idees")));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "user", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "coeurs", array())), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 33
            if ($this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "selection", array())) {
                // line 34
                echo "                    
                    <span id=\"idee_";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"selected btn btn-secondary btn-sm\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></span>
                    
                    ";
            } else {
                // line 38
                echo "                    
                    <span id=\"idee_";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"unselected btn btn-secondary btn-sm\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span>
                    
                    ";
            }
            // line 42
            echo "                    
                </td>
                <td>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm m-1\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_edit", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm m-1\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_delete", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm m-1\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
        
    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mb-3\">Retour à l'espace</a>
    ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin");
            echo "\" class=\"btn btn-dark mb-3\">Accueil Admin</a>
    ";
        }
        // line 58
        echo "    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Idee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 58,  190 => 56,  188 => 55,  184 => 54,  179 => 51,  169 => 47,  165 => 46,  161 => 45,  156 => 42,  150 => 39,  147 => 38,  141 => 35,  138 => 34,  136 => 33,  131 => 31,  127 => 30,  123 => 29,  119 => 28,  113 => 27,  110 => 26,  106 => 25,  87 => 8,  78 => 7,  61 => 5,  42 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Vue administrateur ou animateur #}

{% extends \"dswAmpliBundle::layout.html.twig\" %}
{% block title %}{{ parent() }} - Liste des idées{% endblock %}
{% block dsw_ampli_jumbotron %}{% endblock %}

{% block dsw_ampli_content %}
<div class=\"container my-5\">
   
    <h1>Liste des idées</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>User</th>
                <th>Cœurs</th>
                <th>Sélection</th>
                <th class=\"col-1\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for idee in idees %}
            <tr>
                <td><a href=\"{{ path('ampli_idee_show', { 'id': idee[0].id }) }}\">{{ idee[0].id }}</a></td>
                <td>{{ idee[0].titre }}</td>
                <td>{{ idee[0].description }}</td>
                <td>{{ idee[0].user }}</td>
                <td>{{ idee[0].coeurs|length }}</td>
                <td>
                    {% if idee[0].selection %}
                    
                    <span id=\"idee_{{ idee[0].id }}\" class=\"selected btn btn-secondary btn-sm\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></span>
                    
                    {% else %}
                    
                    <span id=\"idee_{{ idee[0].id }}\" class=\"unselected btn btn-secondary btn-sm\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span>
                    
                    {% endif %}
                    
                </td>
                <td>
                    <a href=\"{{ path('ampli_idee_show', { 'id': idee[0].id }) }}\" class=\"btn btn-primary btn-sm m-1\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"{{ path('ampli_idee_edit', { 'id': idee[0].id }) }}\" class=\"btn btn-primary btn-sm m-1\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                    <a href=\"{{ path('ampli_idee_delete', { 'id': idee[0].id }) }}\" class=\"btn btn-primary btn-sm m-1\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
        
    <a href=\"{{ path('dsw_ampli_viewEspace', {'id': espace.id }) }}\" class=\"btn btn-dark mb-3\">Retour à l'espace</a>
    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('dsw_ampli_admin') }}\" class=\"btn btn-dark mb-3\">Accueil Admin</a>
    {% endif %}
    
</div>
{% endblock %}", "dswAmpliBundle:Idee:index.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/index.html.twig");
    }
}
