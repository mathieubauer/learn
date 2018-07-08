<?php

/* dswAmpliBundle:Espace:vote.html.twig */
class __TwigTemplate_48e78a75fdbb5412bb1d4eeb0eca838c09bb2abd59dba5d370adb7be5f30a872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Espace:vote.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Espace:vote.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Espace:vote.html.twig"));

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
        echo " - Proposez, votez !";
        
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

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "titre", array()), "html", null, true);
        echo "</h1>
    <h2 class=\"soustitre mb-0\">Proposez, votez !</h2>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_content"));

        // line 9
        echo "
    ";
        // line 10
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors')) {
            // line 11
            echo "    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-primary mt-3\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        <div class=\"mb-0\">";
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors');
            echo "</div>
    </div>
    </div>
    ";
        }
        // line 20
        echo "    
    ";
        // line 21
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors')) {
            // line 22
            echo "    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-primary mt-3\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        <div class=\"mb-0\">";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
            echo "</div>
    </div>
    </div>
    ";
        }
        // line 31
        echo "   
<div class=\"container mt-5 idee_liste_vote\">
   
    <div class=\"counter\">
        ";
        // line 35
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["listIdees"] ?? $this->getContext($context, "listIdees"))), "html", null, true);
        echo "&nbsp;<i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"></i>
    </div>
    
    <div class=\"grid\">
    <div class=\"grid-sizer col-md-4\"></div>
    
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listIdees"] ?? $this->getContext($context, "listIdees")));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 42
            echo "       
        ";
            // line 43
            $context["typeCoeur"] = "fa fa-heart-o fa-2x";
            // line 44
            echo "        ";
            $context["classCoeur"] = "unliked";
            // line 45
            echo "       
        ";
            // line 46
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 47
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["idee"], "coeurs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["coeur"]) {
                    // line 48
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($context["coeur"], "user", array()), "id", array()) == $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))) {
                        // line 49
                        echo "                ";
                        $context["typeCoeur"] = "fa fa-heart fa-2x";
                        // line 50
                        echo "                ";
                        $context["classCoeur"] = "liked text-tertiary";
                        // line 51
                        echo "            ";
                    }
                    // line 52
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "        ";
            }
            // line 54
            echo "        
        <div class=\"grid-item col-md-4\">
        <div class=\"grid-item-content\">
        <div class=\"card mb-3\">
            
            <!-- <div class=\"card-header idee_header text-center\">
                Catégorie 
            </div> -->
            
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <h4 class=\"card-title mb-0\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
            echo "</h4>
                    ";
            // line 66
            if ($this->getAttribute($this->getAttribute($context["idee"], "categorie", array(), "any", false, true), "titre", array(), "any", true, true)) {
                // line 67
                echo "                    <strong class=\"text-primary border border-primary p-1 ml-3 category_size\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], "categorie", array()), "titre", array())), "html", null, true);
                echo "</strong>
                    ";
            }
            // line 69
            echo "                </div>
                <p class=\"card-text\">";
            // line 70
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true));
            echo "</p>
            </div>
            
            <hr class=\"hr_thin\">
            
            <div class=\"card-body py-2 card_infos\">
                <div class=\"d-flex justify-content-between align-items-center\">
                       
                    <div class=\"text-truncate\">
                        <span class=\"fa fa-user\"></span>&nbsp; ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], "user", array()), "username", array()), "html", null, true);
            echo "
                        ";
            // line 80
            if (($this->getAttribute($this->getAttribute($context["idee"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()))) {
                // line 81
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_edit_user", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
                echo "\" class=\"hidden_link cliquable ml-3\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                            <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_delete_user", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
                echo "\" class=\"hidden_link cliquable ml-3\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                        ";
            }
            // line 84
            echo "                    </div>
                    
                    ";
            // line 86
            if (($this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "withCoeurs", array()) == 1)) {
                // line 87
                echo "                    <div class=\"ml-auto d-flex justify-content-between align-items-center\">
                       
                        <span id=\"nblikes_";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "id", array()), "html", null, true);
                echo "\" class=\"mr-3 text-truncate\">
                            ";
                // line 90
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["idee"], "coeurs", array())), "html", null, true);
                echo " J'aime
                        </span>
                        
                        <span id=\"coeur_";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "id", array()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["classCoeur"] ?? $this->getContext($context, "classCoeur")), "html", null, true);
                echo " text-tertiaryZZ\">
                            <span class=\"cliquable ";
                // line 94
                echo twig_escape_filter($this->env, ($context["typeCoeur"] ?? $this->getContext($context, "typeCoeur")), "html", null, true);
                echo "\"></span>
                        </span>
                        
                    </div>
                    ";
            }
            // line 99
            echo "                    
                </div>
            </div>
                
        </div>
        </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
    </div>
    
</div> 
   
<!-- Ajout idée ######################### -->
 
";
        // line 115
        if (($this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "withIdees", array()) == 1)) {
            // line 116
            echo "  
<button class=\"btn btn-tertiary button_fixed\" id=\"bouton_idee\" data-toggle=\"modal\" data-target=\"#modal_idee\">
    <span class=\"fa fa-plus fa-2x\"></span>
</button>

<!-- Modal nouvelle idée -->

<div class=\"modal fade\" id=\"modal_idee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
<div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">

        <div class=\"modal-header\">
            <h4 class=\"modal-title\" id=\"myModalLabel\">Proposez votre idée !</h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        
        <div class=\"modal-body\">
        ";
            // line 135
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
           
            ";
            // line 137
            if ($this->getAttribute(($context["form"] ?? null), "categorie", array(), "any", true, true)) {
                // line 138
                echo "            <div class=\"row\">
            <div class=\"mb-3 col-md-4\">";
                // line 139
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", array()), 'widget');
                echo "</div>
            </div>
            ";
            }
            // line 142
            echo "            
            <div class=\"mb-3\">";
            // line 143
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget');
            echo "</div>
            
            ";
            // line 145
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors');
            echo "
            
            
            <div class=\"mb-1\">";
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget');
            echo "</div>
            <div class=\"mb-3 text-right\"><span id=\"chars\">140</span> / 140</div>
            ";
            // line 150
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
            echo "
            
        <input type=\"submit\" value=\"Proposer !\" class=\"btn btn-primary\" />
        
        ";
            // line 154
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
        </div>

    </div>
</div>
</div>

";
        }
        // line 162
        echo "
<!-- Pied de page #########################    
    
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé de voter ?</p>
<a class=\"btn btn-secondary\" href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
        echo "\">Retour à l'accueil</a>
</div> 
</div> -->
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Espace:vote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 168,  378 => 162,  367 => 154,  360 => 150,  355 => 148,  349 => 145,  344 => 143,  341 => 142,  335 => 139,  332 => 138,  330 => 137,  325 => 135,  304 => 116,  302 => 115,  293 => 108,  279 => 99,  271 => 94,  265 => 93,  259 => 90,  255 => 89,  251 => 87,  249 => 86,  245 => 84,  240 => 82,  235 => 81,  233 => 80,  229 => 79,  217 => 70,  214 => 69,  208 => 67,  206 => 66,  202 => 65,  189 => 54,  186 => 53,  180 => 52,  177 => 51,  174 => 50,  171 => 49,  168 => 48,  163 => 47,  161 => 46,  158 => 45,  155 => 44,  153 => 43,  150 => 42,  146 => 41,  137 => 35,  131 => 31,  124 => 27,  117 => 22,  115 => 21,  112 => 20,  105 => 16,  98 => 11,  96 => 10,  93 => 9,  84 => 8,  70 => 4,  61 => 3,  42 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} - Proposez, votez !{% endblock %}
{% block dsw_ampli_jumbotron %}
    <h1>{{ espace.titre }}</h1>
    <h2 class=\"soustitre mb-0\">Proposez, votez !</h2>
{% endblock %}

{% block dsw_ampli_content %}

    {% if form_errors(form.titre) %}
    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-primary mt-3\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        <div class=\"mb-0\">{{ form_errors(form.titre) }}</div>
    </div>
    </div>
    {% endif %}
    
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
   
<div class=\"container mt-5 idee_liste_vote\">
   
    <div class=\"counter\">
        {{ listIdees|length }}&nbsp;<i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"></i>
    </div>
    
    <div class=\"grid\">
    <div class=\"grid-sizer col-md-4\"></div>
    
    {% for idee in listIdees %}
       
        {% set typeCoeur = 'fa fa-heart-o fa-2x' %}
        {% set classCoeur = 'unliked' %}
       
        {% if user %}
        {% for coeur in idee.coeurs %}
            {% if coeur.user.id == user.id %}
                {% set typeCoeur = 'fa fa-heart fa-2x' %}
                {% set classCoeur = 'liked text-tertiary' %}
            {% endif %}
        {% endfor %}
        {% endif %}
        
        <div class=\"grid-item col-md-4\">
        <div class=\"grid-item-content\">
        <div class=\"card mb-3\">
            
            <!-- <div class=\"card-header idee_header text-center\">
                Catégorie 
            </div> -->
            
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <h4 class=\"card-title mb-0\">{{ idee.titre }}</h4>
                    {% if idee.categorie.titre is defined %}
                    <strong class=\"text-primary border border-primary p-1 ml-3 category_size\">{{ idee.categorie.titre|upper }}</strong>
                    {% endif %}
                </div>
                <p class=\"card-text\">{{ idee.description|nl2br }}</p>
            </div>
            
            <hr class=\"hr_thin\">
            
            <div class=\"card-body py-2 card_infos\">
                <div class=\"d-flex justify-content-between align-items-center\">
                       
                    <div class=\"text-truncate\">
                        <span class=\"fa fa-user\"></span>&nbsp; {{ idee.user.username }}
                        {% if idee.user.username == app.user.username %}
                            <a href=\"{{ path('ampli_idee_edit_user', { 'id': idee.id }) }}\" class=\"hidden_link cliquable ml-3\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                            <a href=\"{{ path('ampli_idee_delete_user', { 'id': idee.id }) }}\" class=\"hidden_link cliquable ml-3\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                        {% endif %}
                    </div>
                    
                    {% if espace.withCoeurs == 1 %}
                    <div class=\"ml-auto d-flex justify-content-between align-items-center\">
                       
                        <span id=\"nblikes_{{ idee.id }}\" class=\"mr-3 text-truncate\">
                            {{ idee.coeurs|length }} J'aime
                        </span>
                        
                        <span id=\"coeur_{{ idee.id }}\" class=\"{{ classCoeur }} text-tertiaryZZ\">
                            <span class=\"cliquable {{ typeCoeur }}\"></span>
                        </span>
                        
                    </div>
                    {% endif %}
                    
                </div>
            </div>
                
        </div>
        </div>
        </div>

    {% endfor %}

    </div>
    
</div> 
   
<!-- Ajout idée ######################### -->
 
{% if espace.withIdees == 1 %}
  
<button class=\"btn btn-tertiary button_fixed\" id=\"bouton_idee\" data-toggle=\"modal\" data-target=\"#modal_idee\">
    <span class=\"fa fa-plus fa-2x\"></span>
</button>

<!-- Modal nouvelle idée -->

<div class=\"modal fade\" id=\"modal_idee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
<div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">

        <div class=\"modal-header\">
            <h4 class=\"modal-title\" id=\"myModalLabel\">Proposez votre idée !</h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        
        <div class=\"modal-body\">
        {{ form_start(form) }}
           
            {% if form.categorie is defined %}
            <div class=\"row\">
            <div class=\"mb-3 col-md-4\">{{ form_widget(form.categorie) }}</div>
            </div>
            {% endif %}
            
            <div class=\"mb-3\">{{ form_widget(form.titre) }}</div>
            
            {{ form_errors(form.titre) }}
            
            
            <div class=\"mb-1\">{{ form_widget(form.description) }}</div>
            <div class=\"mb-3 text-right\"><span id=\"chars\">140</span> / 140</div>
            {{ form_errors(form.description) }}
            
        <input type=\"submit\" value=\"Proposer !\" class=\"btn btn-primary\" />
        
        {{ form_end(form) }}
        </div>

    </div>
</div>
</div>

{% endif %}

<!-- Pied de page #########################    
    
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé de voter ?</p>
<a class=\"btn btn-secondary\" href=\"{{ path('dsw_ampli_viewEspace', {'id': espace.id}) }}\">Retour à l'accueil</a>
</div> 
</div> -->
    
{% endblock %}", "dswAmpliBundle:Espace:vote.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Espace/vote.html.twig");
    }
}
