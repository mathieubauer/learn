<?php

/* dswAmpliBundle:Idee:edit.html.twig */
class __TwigTemplate_ee01464fd462050b8b05c167198d4120f2fe5a2e0bd921e719f0974c5fcef54d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Idee:edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Idee:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Idee:edit.html.twig"));

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
        echo " - Editer une idée";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_jumbotron"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_jumbotron"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_content"));

        // line 6
        echo "
    ";
        // line 7
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors')) {
            // line 8
            echo "    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-primary mt-3\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        <div class=\"mb-0\">";
            // line 13
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
            echo "</div>
    </div>
    </div>
    ";
        }
        // line 17
        echo "
<div class=\"container my-5\">
  
<div class=\"row idee_page\">
<div class=\"col-lg-8 mx-auto\">
   
    <h1>Modifier le projet</h1>
    
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    
        ";
        // line 27
        if ($this->getAttribute(($context["form"] ?? null), "categorie", array(), "any", true, true)) {
            // line 28
            echo "        <div class=\"mb-1\"><strong>Catégorie</strong></div>
        <div class=\"row\">
        <div class=\"mb-3 col-4\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 33
        echo "        
        <div class=\"mb-1\"><strong>";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'label');
        echo "</strong></div>
        <div class=\"mb-3 display-4\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "</div>
    
        <div class=\"mb-1\"><strong>Description courte</strong></div>
        <div class=\"mb-1\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget');
        echo "</div>
        <div class=\"mb-5 text-right\"><span id=\"chars\">140</span> / 140</div>
        
    
        ";
        // line 42
        if ($this->getAttribute(($context["form"] ?? null), "objectifs", array(), "any", true, true)) {
            // line 43
            echo "        <div class=\"mb-1\"><strong>
            ";
            // line 44
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "objectifsAlias", array())) {
                // line 45
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "objectifsAlias", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 47
                echo "                Objectifs
            ";
            }
            // line 49
            echo "        </strong></div>
        <div class=\"mb-3\">";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "objectifs", array()), 'widget');
            echo "</div>
        ";
        }
        // line 52
        echo "    
        ";
        // line 53
        if ($this->getAttribute(($context["form"] ?? null), "methode", array(), "any", true, true)) {
            // line 54
            echo "        <div class=\"mb-1\"><strong>
            ";
            // line 55
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "methodeAlias", array())) {
                // line 56
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "methodeAlias", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 58
                echo "                Méthode
            ";
            }
            // line 60
            echo "        </strong></div>
        <div class=\"mb-3\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "methode", array()), 'widget');
            echo "</div>
        ";
        }
        // line 63
        echo "    
        ";
        // line 64
        if ($this->getAttribute(($context["form"] ?? null), "calendrier", array(), "any", true, true)) {
            // line 65
            echo "        <div class=\"mb-1\"><strong>
            ";
            // line 66
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "calendrierAlias", array())) {
                // line 67
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "calendrierAlias", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 69
                echo "                Calendrier
            ";
            }
            // line 71
            echo "        </strong></div>
        <div class=\"mb-5\">";
            // line 72
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "calendrier", array()), 'widget');
            echo "</div>
        ";
        }
        // line 74
        echo "        
        ";
        // line 75
        if ($this->getAttribute(($context["form"] ?? null), "equipe", array(), "any", true, true)) {
            // line 76
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withEquipe", array())) {
                // line 77
                echo "        <div class=\"mb-1\"><strong>Equipe</strong></div>
        <div class=\"mb-3\">";
                // line 78
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "equipe", array()), 'widget');
                echo "</div>
        ";
            } else {
                // line 80
                echo "        ";
                $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "equipe", array()), "setRendered", array());
                // line 81
                echo "        ";
            }
            // line 82
            echo "        ";
        }
        // line 83
        echo "        
        ";
        // line 84
        if ($this->getAttribute(($context["form"] ?? null), "imgProjetfile", array(), "any", true, true)) {
            // line 85
            echo "        <div class=\"mb-1\"><strong>";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imgProjetfile", array()), 'label');
            echo "</strong></div>
        <div class=\"mb-3\">";
            // line 86
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imgProjetfile", array()), 'widget');
            echo "</div>
        ";
        }
        // line 88
        echo "        
        ";
        // line 89
        if ($this->getAttribute(($context["form"] ?? null), "imgEquipefile", array(), "any", true, true)) {
            // line 90
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withEquipe", array())) {
                // line 91
                echo "        <div class=\"mb-1\"><strong>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imgEquipefile", array()), 'label');
                echo "</strong></div>
        <div class=\"mb-3\">";
                // line 92
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imgEquipefile", array()), 'widget');
                echo "</div>
        ";
            } else {
                // line 94
                echo "        ";
                $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imgEquipefile", array()), "setRendered", array());
                // line 95
                echo "        ";
            }
            // line 96
            echo "        ";
        }
        // line 97
        echo "    
    <input type=\"submit\" value=\"Valider les modifications\" class=\"btn btn-primary\" />
    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    
</div>
</div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Idee:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 99,  301 => 97,  298 => 96,  295 => 95,  292 => 94,  287 => 92,  282 => 91,  279 => 90,  277 => 89,  274 => 88,  269 => 86,  264 => 85,  262 => 84,  259 => 83,  256 => 82,  253 => 81,  250 => 80,  245 => 78,  242 => 77,  239 => 76,  237 => 75,  234 => 74,  229 => 72,  226 => 71,  222 => 69,  216 => 67,  214 => 66,  211 => 65,  209 => 64,  206 => 63,  201 => 61,  198 => 60,  194 => 58,  188 => 56,  186 => 55,  183 => 54,  181 => 53,  178 => 52,  173 => 50,  170 => 49,  166 => 47,  160 => 45,  158 => 44,  155 => 43,  153 => 42,  146 => 38,  140 => 35,  136 => 34,  133 => 33,  127 => 30,  123 => 28,  121 => 27,  116 => 25,  106 => 17,  99 => 13,  92 => 8,  90 => 7,  87 => 6,  78 => 5,  61 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswAmpliBundle::layout.html.twig\" %}
{% block title %}{{ parent() }} - Editer une idée{% endblock %}
{% block dsw_ampli_jumbotron %}{% endblock %}

{% block dsw_ampli_content %}

    {% if form_errors(form.description) %}
    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-primary mt-3\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        <div class=\"mb-0\">{{ form_errors(form.description) }}</div>
    </div>
    </div>
    {% endif %}

<div class=\"container my-5\">
  
<div class=\"row idee_page\">
<div class=\"col-lg-8 mx-auto\">
   
    <h1>Modifier le projet</h1>
    
    {{ form_start(form) }}
    
        {% if form.categorie is defined %}
        <div class=\"mb-1\"><strong>Catégorie</strong></div>
        <div class=\"row\">
        <div class=\"mb-3 col-4\">{{ form_widget(form.categorie) }}</div>
        </div>
        {% endif %}
        
        <div class=\"mb-1\"><strong>{{ form_label(form.titre) }}</strong></div>
        <div class=\"mb-3 display-4\">{{ form_widget(form.titre) }}</div>
    
        <div class=\"mb-1\"><strong>Description courte</strong></div>
        <div class=\"mb-1\">{{ form_widget(form.description) }}</div>
        <div class=\"mb-5 text-right\"><span id=\"chars\">140</span> / 140</div>
        
    
        {% if form.objectifs is defined %}
        <div class=\"mb-1\"><strong>
            {% if idee.espace.objectifsAlias %}
                {{ idee.espace.objectifsAlias }}
            {% else %}
                Objectifs
            {% endif %}
        </strong></div>
        <div class=\"mb-3\">{{ form_widget(form.objectifs) }}</div>
        {% endif %}
    
        {% if form.methode is defined %}
        <div class=\"mb-1\"><strong>
            {% if idee.espace.methodeAlias %}
                {{ idee.espace.methodeAlias }}
            {% else %}
                Méthode
            {% endif %}
        </strong></div>
        <div class=\"mb-3\">{{ form_widget(form.methode) }}</div>
        {% endif %}
    
        {% if form.calendrier is defined %}
        <div class=\"mb-1\"><strong>
            {% if idee.espace.calendrierAlias %}
                {{ idee.espace.calendrierAlias }}
            {% else %}
                Calendrier
            {% endif %}
        </strong></div>
        <div class=\"mb-5\">{{ form_widget(form.calendrier) }}</div>
        {% endif %}
        
        {% if form.equipe is defined %}
        {% if idee.espace.withEquipe %}
        <div class=\"mb-1\"><strong>Equipe</strong></div>
        <div class=\"mb-3\">{{ form_widget(form.equipe) }}</div>
        {% else %}
        {% do form.equipe.setRendered %}
        {% endif %}
        {% endif %}
        
        {% if form.imgProjetfile is defined %}
        <div class=\"mb-1\"><strong>{{ form_label(form.imgProjetfile) }}</strong></div>
        <div class=\"mb-3\">{{ form_widget(form.imgProjetfile) }}</div>
        {% endif %}
        
        {% if form.imgEquipefile is defined %}
        {% if idee.espace.withEquipe %}
        <div class=\"mb-1\"><strong>{{ form_label(form.imgEquipefile) }}</strong></div>
        <div class=\"mb-3\">{{ form_widget(form.imgEquipefile) }}</div>
        {% else %}
        {% do form.imgEquipefile.setRendered %}
        {% endif %}
        {% endif %}
    
    <input type=\"submit\" value=\"Valider les modifications\" class=\"btn btn-primary\" />
    {{ form_end(form) }}
    
</div>
</div>

</div>
{% endblock %}", "dswAmpliBundle:Idee:edit.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/edit.html.twig");
    }
}
