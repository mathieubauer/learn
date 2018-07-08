<?php

/* dswAmpliBundle:Espace:develop.html.twig */
class __TwigTemplate_048a0991dc5a8e9c443488f58ca247fa744cf60dc67860d9f1fd48f69a93a5e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Espace:develop.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Espace:develop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Espace:develop.html.twig"));

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
        echo " - Des idées aux projets";
        
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
    <h2 class=\"soustitre mb-0\">Des idées aux projets !</h2>
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
        echo "<div class=\"container mt-5 idee_liste_vote\">
    
    <div class=\"grid\">
    <div class=\"grid-sizer col-md-4\"></div>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listIdees"] ?? $this->getContext($context, "listIdees")));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 15
            echo "       
        ";
            // line 16
            $context["typeCoeur"] = "fa fa-heart-o";
            // line 17
            echo "       
        ";
            // line 18
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 19
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["idee"], "coeurs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["coeur"]) {
                    // line 20
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($context["coeur"], "user", array()), "id", array()) == $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))) {
                        // line 21
                        echo "                ";
                        $context["typeCoeur"] = "fa fa-heart";
                        // line 22
                        echo "            ";
                    }
                    // line 23
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "        ";
            }
            // line 25
            echo "       
        
        <div class=\"grid-item col-md-4\">
        <div class=\"grid-item-content\">
        <div class=\"card card_clickable mb-3\">
           
            ";
            // line 31
            if ($this->getAttribute($context["idee"], "imgProjet", array())) {
                // line 32
                echo "                <img class=\"card-img-top img-fluid cover_300\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute($context["idee"], "imgProjet", array()))), "ideas_wall"), "html", null, true);
                echo "\" alt=\"Image projet\">
            ";
            }
            // line 34
            echo "            
            <!-- <div class=\"card-header idee_header text-center\">
                Catégorie
            </div> -->
            
            <div class=\"card-body\">
                <h4 class=\"card-title\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
            echo "</h4>
                <p class=\"card-text\">";
            // line 41
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true));
            echo "</p>           
            </div>
            
            ";
            // line 44
            if ($this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "withFooter", array())) {
                // line 45
                echo "            <hr class=\"hr_thin\">
            
            <div class=\"card-body py-2 card_infos\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"mr-auto\">
                        <span class=\"fa fa-user\"></span>&nbsp; ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], "user", array()), "username", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"ml-auto\">
                    ";
                // line 53
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["idee"], "coeurs", array())), "html", null, true);
                echo " <span class=\"";
                echo twig_escape_filter($this->env, ($context["typeCoeur"] ?? $this->getContext($context, "typeCoeur")), "html", null, true);
                echo "\"></span>
                    </div>
                    <!-- <div>
                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-tertiary btn-sm btn_circle waves-effect waves-light\">
                    <span class=\"fa fa-pencil\"></span>
                    </a>
                    </div> -->
                </div>
            </div>
            ";
            }
            // line 63
            echo "              
            <div class=\"card-info mx-auto\">
                <h1><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\" class=\"hidden_link\">En savoir plus ?</a></h1>
            </div>
               
            <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\" class=\"color-overlay\"></a>
                
        </div>
        </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
    </div>
    
</div> 
  
<!--  
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé de développer ?</p>
<a class=\"btn btn-secondary\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
        echo "\">Retour à l'accueil</a>
</div> 
</div> 
-->
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Espace:develop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 84,  227 => 75,  214 => 68,  208 => 65,  204 => 63,  194 => 56,  186 => 53,  180 => 50,  173 => 45,  171 => 44,  165 => 41,  161 => 40,  153 => 34,  147 => 32,  145 => 31,  137 => 25,  134 => 24,  128 => 23,  125 => 22,  122 => 21,  119 => 20,  114 => 19,  112 => 18,  109 => 17,  107 => 16,  104 => 15,  100 => 14,  93 => 9,  84 => 8,  70 => 4,  61 => 3,  42 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} - Des idées aux projets{% endblock %}
{% block dsw_ampli_jumbotron %}
    <h1>{{ espace.titre }}</h1>
    <h2 class=\"soustitre mb-0\">Des idées aux projets !</h2>
{% endblock %}

{% block dsw_ampli_content %}
<div class=\"container mt-5 idee_liste_vote\">
    
    <div class=\"grid\">
    <div class=\"grid-sizer col-md-4\"></div>

    {% for idee in listIdees %}
       
        {% set typeCoeur = 'fa fa-heart-o' %}
       
        {% if user %}
        {% for coeur in idee.coeurs %}
            {% if coeur.user.id == user.id %}
                {% set typeCoeur = 'fa fa-heart' %}
            {% endif %}
        {% endfor %}
        {% endif %}
       
        
        <div class=\"grid-item col-md-4\">
        <div class=\"grid-item-content\">
        <div class=\"card card_clickable mb-3\">
           
            {% if idee.imgProjet %}
                <img class=\"card-img-top img-fluid cover_300\" src=\"{{ asset('/uploads/img/' ~ idee.imgProjet) | imagine_filter('ideas_wall') }}\" alt=\"Image projet\">
            {% endif %}
            
            <!-- <div class=\"card-header idee_header text-center\">
                Catégorie
            </div> -->
            
            <div class=\"card-body\">
                <h4 class=\"card-title\">{{ idee.titre }}</h4>
                <p class=\"card-text\">{{ idee.description|nl2br }}</p>           
            </div>
            
            {% if espace.withFooter %}
            <hr class=\"hr_thin\">
            
            <div class=\"card-body py-2 card_infos\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"mr-auto\">
                        <span class=\"fa fa-user\"></span>&nbsp; {{ idee.user.username }}
                    </div>
                    <div class=\"ml-auto\">
                    {{ idee.coeurs|length }} <span class=\"{{ typeCoeur }}\"></span>
                    </div>
                    <!-- <div>
                    <a href=\"{{ path('ampli_idee_show', {'id': idee.id}) }}\" class=\"btn btn-tertiary btn-sm btn_circle waves-effect waves-light\">
                    <span class=\"fa fa-pencil\"></span>
                    </a>
                    </div> -->
                </div>
            </div>
            {% endif %}
              
            <div class=\"card-info mx-auto\">
                <h1><a href=\"{{ path('ampli_idee_show', {'id': idee.id}) }}\" class=\"hidden_link\">En savoir plus ?</a></h1>
            </div>
               
            <a href=\"{{ path('ampli_idee_show', {'id': idee.id}) }}\" class=\"color-overlay\"></a>
                
        </div>
        </div>
        </div>

    {% endfor %}

    </div>
    
</div> 
  
<!--  
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé de développer ?</p>
<a class=\"btn btn-secondary\" href=\"{{ path('dsw_ampli_viewEspace', {'id': espace.id}) }}\">Retour à l'accueil</a>
</div> 
</div> 
-->
    
{% endblock %}", "dswAmpliBundle:Espace:develop.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Espace/develop.html.twig");
    }
}
