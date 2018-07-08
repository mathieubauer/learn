<?php

/* dswAmpliBundle:Espace:edit.html.twig */
class __TwigTemplate_61b360e2280cb2e751db794fa35a779c17a5733d2eede539ae9574a764f26e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Espace:edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Espace:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Espace:edit.html.twig"));

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
        echo " - Piloter un espace";
        
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
        echo "<div class=\"container my-5\">
  
    <h1>Sélectionner les idées</h1>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin_idee", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-outline-primary mb-5\">Sélectionner les idées</a>
   
    <h1>Options de l'espace</h1>
    
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Titre de l'espace</strong>
        </div>
        <div class=\"col-6\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "</div>
        </div>
        
        ";
        // line 22
        if ($this->getAttribute(($context["form"] ?? null), "animateur", array(), "any", true, true)) {
            // line 23
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Animateur</strong>
        </div>
        <div class=\"col-6\">";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "animateur", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 30
        echo "        
        ";
        // line 31
        if ($this->getAttribute(($context["form"] ?? null), "slug", array(), "any", true, true)) {
            // line 32
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Code session</strong>
        </div>
        <div class=\"col-6\">";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "slug", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 39
        echo "       
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Choix de l'étape d'accueil</strong>
        </div>
        <div class=\"col-6\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etape", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Permettre l'ajout d'idées</strong><br>
            <small>À l'étape 1</small>
        </div>
        <div class=\"col-6\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "withIdees", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Afficher les cœurs</strong><br>
            <small>Système de likes à l'étape 1</small>
        </div>
        <div class=\"col-6\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "withCoeurs", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Modération</strong><br>
            <small>Si oui, les idées doivent être validées par l'animateur pour apparaître à l'étape 2</small><br>
        </div>
        <div class=\"col-6\">";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "withModeration", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Constitution d'équipes</strong><br>
            <small>À l'étape 2, photo et nom de l'équipe</small>
        </div>
        <div class=\"col-6\">";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "withEquipe", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Afficher le bas des cartes</strong><br>
            <small>Aux étapes 2 et 3, zone avec l'auteur et le nombre de cœurs</small>
        </div>
        <div class=\"col-6\">";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "withFooter", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Autoriser les commentaires</strong><br>
            <small>À l'étape 3</small>
        </div>
        <div class=\"col-6\">";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "withCommentaires", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Contributions en temps</strong><br>
            <small>À l'étape 3</small>
        </div>
        <div class=\"col-6\">";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "withTemps", array()), 'widget');
        echo "</div>
        </div>
        
        ";
        // line 103
        if ($this->getAttribute(($context["form"] ?? null), "withArgent", array(), "any", true, true)) {
            // line 104
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Contributions financières</strong><br>
            <small>À l'étape 3 (pas encore disponible)</small>
        </div>
        <div class=\"col-6\">";
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "withArgent", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 112
        echo "        
        ";
        // line 113
        if ($this->getAttribute(($context["form"] ?? null), "categories", array(), "any", true, true)) {
            // line 114
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", array()), 'widget');
            echo "
        ";
        }
        // line 116
        echo "        
        ";
        // line 117
        if ($this->getAttribute(($context["form"] ?? null), "objectifsAlias", array(), "any", true, true)) {
            // line 118
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Objectifs</strong>
        </div>
        <div class=\"col-6\">";
            // line 122
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "objectifsAlias", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 125
        echo "        
        ";
        // line 126
        if ($this->getAttribute(($context["form"] ?? null), "methodeAlias", array(), "any", true, true)) {
            // line 127
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Méthode</strong>
        </div>
        <div class=\"col-6\">";
            // line 131
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "methodeAlias", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 134
        echo "        
        ";
        // line 135
        if ($this->getAttribute(($context["form"] ?? null), "calendrierAlias", array(), "any", true, true)) {
            // line 136
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Calendrier</strong>
        </div>
        <div class=\"col-6\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "calendrierAlias", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 143
        echo "        
        ";
        // line 144
        if ($this->getAttribute(($context["form"] ?? null), "propulserAlias", array(), "any", true, true)) {
            // line 145
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Propulser</strong>
        </div>
        <div class=\"col-6\">";
            // line 149
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "propulserAlias", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 152
        echo "        
        ";
        // line 153
        if ($this->getAttribute(($context["form"] ?? null), "publicQuestion", array(), "any", true, true)) {
            // line 154
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Question publique</strong><br>
            <small>Apparaît sur les fiches publiques</small>
        </div>
        <div class=\"col-6\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "publicQuestion", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 162
        echo "        
        <input type=\"submit\" value=\"Éditer\" class=\"btn btn-primary\" />
    ";
        // line 164
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    
    <a href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Aller à l'accueil</a>
    <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_homepage", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Aller à l'étape</a>
    
    ";
        // line 169
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 170
            echo "    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin");
            echo "\" class=\"btn btn-dark my-3\">Accueil Admin</a>
    ";
        }
        // line 172
        echo "    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Espace:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 172,  367 => 170,  365 => 169,  360 => 167,  356 => 166,  351 => 164,  347 => 162,  341 => 159,  334 => 154,  332 => 153,  329 => 152,  323 => 149,  317 => 145,  315 => 144,  312 => 143,  306 => 140,  300 => 136,  298 => 135,  295 => 134,  289 => 131,  283 => 127,  281 => 126,  278 => 125,  272 => 122,  266 => 118,  264 => 117,  261 => 116,  255 => 114,  253 => 113,  250 => 112,  244 => 109,  237 => 104,  235 => 103,  229 => 100,  218 => 92,  207 => 84,  196 => 76,  185 => 68,  174 => 60,  163 => 52,  152 => 44,  145 => 39,  139 => 36,  133 => 32,  131 => 31,  128 => 30,  122 => 27,  116 => 23,  114 => 22,  108 => 19,  99 => 13,  92 => 9,  87 => 6,  78 => 5,  61 => 3,  42 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} - Piloter un espace{% endblock %}
{% block dsw_ampli_jumbotron %}{% endblock %}

{% block dsw_ampli_content %}
<div class=\"container my-5\">
  
    <h1>Sélectionner les idées</h1>
    <a href=\"{{ path('dsw_ampli_admin_idee', {'id': espace.id}) }}\" class=\"btn btn-outline-primary mb-5\">Sélectionner les idées</a>
   
    <h1>Options de l'espace</h1>
    
    {{ form_start(form) }}
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Titre de l'espace</strong>
        </div>
        <div class=\"col-6\">{{ form_widget(form.titre) }}</div>
        </div>
        
        {% if form.animateur is defined %}
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Animateur</strong>
        </div>
        <div class=\"col-6\">{{ form_widget(form.animateur) }}</div>
        </div>
        {% endif %}
        
        {% if form.slug is defined %}
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Code session</strong>
        </div>
        <div class=\"col-6\">{{ form_widget(form.slug) }}</div>
        </div>
        {% endif %}
       
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Choix de l'étape d'accueil</strong>
        </div>
        <div class=\"col-6\">{{ form_widget(form.etape) }}</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Permettre l'ajout d'idées</strong><br>
            <small>À l'étape 1</small>
        </div>
        <div class=\"col-6\">{{ form_widget(form.withIdees) }}</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Afficher les cœurs</strong><br>
            <small>Système de likes à l'étape 1</small>
        </div>
        <div class=\"col-6\">{{ form_widget(form.withCoeurs) }}</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Modération</strong><br>
            <small>Si oui, les idées doivent être validées par l'animateur pour apparaître à l'étape 2</small><br>
        </div>
        <div class=\"col-6\">{{ form_widget(form.withModeration) }}</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Constitution d'équipes</strong><br>
            <small>À l'étape 2, photo et nom de l'équipe</small>
        </div>
        <div class=\"col-6\">{{ form_widget(form.withEquipe) }}</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Afficher le bas des cartes</strong><br>
            <small>Aux étapes 2 et 3, zone avec l'auteur et le nombre de cœurs</small>
        </div>
        <div class=\"col-6\">{{ form_widget(form.withFooter) }}</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Autoriser les commentaires</strong><br>
            <small>À l'étape 3</small>
        </div>
        <div class=\"col-6\">{{ form_widget(form.withCommentaires) }}</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Contributions en temps</strong><br>
            <small>À l'étape 3</small>
        </div>
        <div class=\"col-6\">{{ form_widget(form.withTemps) }}</div>
        </div>
        
        {% if form.withArgent is defined %}
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Contributions financières</strong><br>
            <small>À l'étape 3 (pas encore disponible)</small>
        </div>
        <div class=\"col-6\">{{ form_widget(form.withArgent) }}</div>
        </div>
        {% endif %}
        
        {% if form.categories is defined %}
        {{ form_widget(form.categories) }}
        {% endif %}
        
        {% if form.objectifsAlias is defined %}
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Objectifs</strong>
        </div>
        <div class=\"col-6\">{{ form_widget(form.objectifsAlias) }}</div>
        </div>
        {% endif %}
        
        {% if form.methodeAlias is defined %}
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Méthode</strong>
        </div>
        <div class=\"col-6\">{{ form_widget(form.methodeAlias) }}</div>
        </div>
        {% endif %}
        
        {% if form.calendrierAlias is defined %}
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Calendrier</strong>
        </div>
        <div class=\"col-6\">{{ form_widget(form.calendrierAlias) }}</div>
        </div>
        {% endif %}
        
        {% if form.propulserAlias is defined %}
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Propulser</strong>
        </div>
        <div class=\"col-6\">{{ form_widget(form.propulserAlias) }}</div>
        </div>
        {% endif %}
        
        {% if form.publicQuestion is defined %}
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Question publique</strong><br>
            <small>Apparaît sur les fiches publiques</small>
        </div>
        <div class=\"col-6\">{{ form_widget(form.publicQuestion) }}</div>
        </div>
        {% endif %}
        
        <input type=\"submit\" value=\"Éditer\" class=\"btn btn-primary\" />
    {{ form_end(form) }}
    
    <a href=\"{{ path('dsw_ampli_viewEspace', {'id': espace.id}) }}\" class=\"btn btn-dark my-3\">Aller à l'accueil</a>
    <a href=\"{{ path('dsw_ampli_homepage', {'id': espace.id}) }}\" class=\"btn btn-dark my-3\">Aller à l'étape</a>
    
    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('dsw_ampli_admin') }}\" class=\"btn btn-dark my-3\">Accueil Admin</a>
    {% endif %}
    
</div>
{% endblock %}", "dswAmpliBundle:Espace:edit.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Espace/edit.html.twig");
    }
}
