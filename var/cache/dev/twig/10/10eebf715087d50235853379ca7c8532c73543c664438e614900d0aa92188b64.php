<?php

/* dswAmpliBundle:Espace:propulse.html.twig */
class __TwigTemplate_3355010d0979d0615be3420f4274ca3ed8d7f4889a601c237b5e91e0f661e60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Espace:propulse.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Espace:propulse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Espace:propulse.html.twig"));

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
        echo " - Donnez de l'énergie !";
        
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
    <h2 class=\"soustitre mb-0\">
        ";
        // line 6
        if ($this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "propulserAlias", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "propulserAlias", array()), "html", null, true);
        } else {
            echo "Donnez de l'énergie !";
        }
        // line 7
        echo "    </h2>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_content"));

        echo " 
<div class=\"container mt-5 idee_liste_propulse\">
    
    <div class=\"grid\">
    <div class=\"grid-sizer col-md-4\"></div>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listIdees"] ?? $this->getContext($context, "listIdees")));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 17
            echo "       
        ";
            // line 18
            $context["typeCoeur"] = "fa fa-heart-o";
            // line 19
            echo "       
        ";
            // line 20
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 21
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "coeurs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["coeur"]) {
                    // line 22
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($context["coeur"], "user", array()), "id", array()) == $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))) {
                        // line 23
                        echo "                ";
                        $context["typeCoeur"] = "fa fa-heart";
                        // line 24
                        echo "            ";
                    }
                    // line 25
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "        ";
            }
            // line 27
            echo "       
        
        <div class=\"grid-item col-md-4\">
        <div class=\"grid-item-content\">
        <div class=\"card card_clickable mb-3\">
            
            ";
            // line 33
            if ($this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "imgProjet", array())) {
                // line 34
                echo "                <img class=\"card-img-top img-fluid cover_300\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "imgProjet", array()))), "ideas_wall"), "html", null, true);
                echo "\" alt=\"Image projet\">
            ";
            } else {
                // line 36
                echo "                <div class=\"card-body gradient_azure body_top\"></div>
            ";
            }
            // line 38
            echo "            
            
            <div class=\"card-body\">
                <h4 class=\"card-title\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "titre", array()), "html", null, true);
            echo "</h4>
                <p class=\"card-text\">";
            // line 42
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "description", array()), "html", null, true));
            echo "</p>
            </div>
            
            ";
            // line 45
            if ($this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "withFooter", array())) {
                // line 46
                echo "            <hr class=\"hr_thin\">
            
            <div class=\"card-body py-2 card_infos\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"mr-3\">
                        <span class=\"fa fa-user\"></span>&nbsp; ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "user", array()), "username", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"ml-auto\">
                    ";
                // line 54
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "coeurs", array())), "html", null, true);
                echo " <span class=\"";
                echo twig_escape_filter($this->env, ($context["typeCoeur"] ?? $this->getContext($context, "typeCoeur")), "html", null, true);
                echo "\"></span>
                    </div>
                    <!-- <div class=\"ml-auto\">
                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_public", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-link btn-sm \">
                    PROPULSER
                    </a>
                    </div> -->
                </div>
            </div>
            ";
            }
            // line 64
            echo "              
            <div class=\"card-info mx-auto\">
                <h1><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_public", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"hidden_link\">En savoir plus ?</a></h1>
            </div>
               
            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_public", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"color-overlay\"></a>
                
        </div>
        </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
    </div>
    
</div> 
    
<!--
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé de propulser ?</p>
<a class=\"btn btn-primary\" href=\"";
        // line 85
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
        return "dswAmpliBundle:Espace:propulse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 85,  237 => 76,  224 => 69,  218 => 66,  214 => 64,  204 => 57,  196 => 54,  190 => 51,  183 => 46,  181 => 45,  175 => 42,  171 => 41,  166 => 38,  162 => 36,  156 => 34,  154 => 33,  146 => 27,  143 => 26,  137 => 25,  134 => 24,  131 => 23,  128 => 22,  123 => 21,  121 => 20,  118 => 19,  116 => 18,  113 => 17,  109 => 16,  93 => 10,  82 => 7,  76 => 6,  70 => 4,  61 => 3,  42 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} - Donnez de l'énergie !{% endblock %}
{% block dsw_ampli_jumbotron %}
    <h1>{{ espace.titre }}</h1>
    <h2 class=\"soustitre mb-0\">
        {% if espace.propulserAlias %}{{ espace.propulserAlias }}{% else %}Donnez de l'énergie !{% endif %}
    </h2>
{% endblock %}

{% block dsw_ampli_content %} 
<div class=\"container mt-5 idee_liste_propulse\">
    
    <div class=\"grid\">
    <div class=\"grid-sizer col-md-4\"></div>

    {% for idee in listIdees %}
       
        {% set typeCoeur = 'fa fa-heart-o' %}
       
        {% if user %}
        {% for coeur in idee[0].coeurs %}
            {% if coeur.user.id == user.id %}
                {% set typeCoeur = 'fa fa-heart' %}
            {% endif %}
        {% endfor %}
        {% endif %}
       
        
        <div class=\"grid-item col-md-4\">
        <div class=\"grid-item-content\">
        <div class=\"card card_clickable mb-3\">
            
            {% if idee[0].imgProjet %}
                <img class=\"card-img-top img-fluid cover_300\" src=\"{{ asset('/uploads/img/' ~ idee[0].imgProjet) | imagine_filter('ideas_wall') }}\" alt=\"Image projet\">
            {% else %}
                <div class=\"card-body gradient_azure body_top\"></div>
            {% endif %}
            
            
            <div class=\"card-body\">
                <h4 class=\"card-title\">{{ idee[0].titre }}</h4>
                <p class=\"card-text\">{{ idee[0].description|nl2br }}</p>
            </div>
            
            {% if espace.withFooter %}
            <hr class=\"hr_thin\">
            
            <div class=\"card-body py-2 card_infos\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"mr-3\">
                        <span class=\"fa fa-user\"></span>&nbsp; {{ idee[0].user.username }}
                    </div>
                    <div class=\"ml-auto\">
                    {{ idee[0].coeurs|length }} <span class=\"{{ typeCoeur }}\"></span>
                    </div>
                    <!-- <div class=\"ml-auto\">
                    <a href=\"{{ path('ampli_idee_public', {'id': idee[0].id}) }}\" class=\"btn btn-link btn-sm \">
                    PROPULSER
                    </a>
                    </div> -->
                </div>
            </div>
            {% endif %}
              
            <div class=\"card-info mx-auto\">
                <h1><a href=\"{{ path('ampli_idee_public', {'id': idee[0].id}) }}\" class=\"hidden_link\">En savoir plus ?</a></h1>
            </div>
               
            <a href=\"{{ path('ampli_idee_public', {'id': idee[0].id}) }}\" class=\"color-overlay\"></a>
                
        </div>
        </div>
        </div>

    {% endfor %}

    </div>
    
</div> 
    
<!--
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé de propulser ?</p>
<a class=\"btn btn-primary\" href=\"{{ path('dsw_ampli_viewEspace', {'id': espace.id}) }}\">Retour à l'accueil</a>
</div> 
</div> 
-->
    
{% endblock %}", "dswAmpliBundle:Espace:propulse.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Espace/propulse.html.twig");
    }
}
