<?php

/* dswAmpliBundle:Idee:view.html.twig */
class __TwigTemplate_c54c3290199777c1dbdfaa6a863bcf576b91561655569d8d0defe458d8d0c558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout2.html.twig", "dswAmpliBundle:Idee:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_ampli_jumbotron' => array($this, 'block_dsw_ampli_jumbotron'),
            'dsw_ampli_content' => array($this, 'block_dsw_ampli_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswAmpliBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Idee:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Idee:view.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "titre", array()), "html", null, true);
        
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
   
    <div class=\"row idee_page\">
    <div class=\"col-lg-8 mx-auto\">
    <div class=\"card idee\">
    
        ";
        // line 12
        if ($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "imgProjet", array())) {
            // line 13
            echo "            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "imgProjet", array()))), "idea_show"), "html", null, true);
            echo "\" alt=\"Image projet\">
        ";
        } else {
            // line 15
            echo "            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/placeholder_projet.jpg"), "html", null, true);
            echo "\" alt=\"Image projet\">
        ";
        }
        // line 17
        echo "        
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            <!-- <h4 class=\"theme\">Ici thème</h4> --> 
            <p class=\"titre_idee mb-3\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "titre", array()), "html", null, true);
        echo "</p>
            <!-- <p class=\"likes\">";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "coeurs", array())), "html", null, true);
        echo " <span class=\"fa fa-heart\"></span></p> -->
        </div>
        
        <div class=\"card-body p-5\">
            <p class=\"card-text lead\">";
        // line 27
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "description", array()), "html", null, true));
        echo "</p>
            ";
        // line 28
        if ($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "video", array())) {
            // line 29
            echo "            <div class=\"embed-responsive embed-responsive-16by9 offset-lg-2 col-lg-8 border-vid\">
                <video controls id=\"vid\" class=\"embed-responsive-item\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "video", array()), "html", null, true);
            echo "\"></video>
            </div>
            ";
        }
        // line 33
        echo "        </div>
        
        <hr class=\"hr_thin\">
        
        <div class=\"card-body p-5\">
            <h3 class=\"mb-3\">
                ";
        // line 39
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "objectifsAlias", array())) {
            // line 40
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "objectifsAlias", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 42
            echo "                    Objectifs
                ";
        }
        // line 44
        echo "            </h3>
            <p class=\"mb-0\">";
        // line 45
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "objectifs", array()), "html", null, true));
        echo "</p>
            <h3 class=\"mt-4 mb-3\">
                ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "methodeAlias", array())) {
            // line 48
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "methodeAlias", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 50
            echo "                    Méthode
                ";
        }
        // line 52
        echo "            </h3>
            <p class=\"mb-0\">";
        // line 53
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "methode", array()), "html", null, true));
        echo "</p>
            <h3 class=\"mt-4 mb-3\">
                ";
        // line 55
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "calendrierAlias", array())) {
            // line 56
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "calendrierAlias", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 58
            echo "                    Calendrier
                ";
        }
        // line 60
        echo "            </h3>
            <p class=\"mb-0\">";
        // line 61
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "calendrier", array()), "html", null, true));
        echo "</p>
        </div>
        
        ";
        // line 64
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withEquipe", array())) {
            // line 65
            echo "        <hr class=\"hr_thin\">
        <div class=\"card-body p-5\">
            <h3>L'équipe</h3>
            <div class=\"col-md-6 col-xs-10 mx-auto\">
            <div class=\"card polaroid mb-3\">
                ";
            // line 70
            if ($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "imgEquipe", array())) {
                // line 71
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "imgEquipe", array()))), "equipe"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"imageEquipe\">
                ";
            } else {
                // line 73
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/placeholder_team.jpg"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"imageEquipe\">
                ";
            }
            // line 75
            echo "                <div class=\"card-body\">
                ";
            // line 76
            if ($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "equipe", array())) {
                // line 77
                echo "                    <p>Projet développé par ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "equipe", array()), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 79
                echo "                    <p>Idée proposée par ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "user", array()), "username", array()), "html", null, true);
                echo "</p>
                ";
            }
            // line 81
            echo "                </div>
            </div>
            </div>
        </div>
        ";
        }
        // line 86
        echo "    
    </div>
    
        <div class=\"row mt-1\">
        <div class=\"offset-lg-2 col-lg-8\">
            
            ";
        // line 93
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_edit", array("id" => $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-tertiary button_fixed\">
            <span class=\"fa fa-pencil fa-2x\"></span>
            </a>
            ";
        // line 97
        echo "            
            ";
        // line 98
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "animateur", array())))) {
            // line 99
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_delete", array("id" => $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary mb-3\">Supprimer le projet</a>
            ";
        }
        // line 101
        echo "            
            <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_develop", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mb-3\">Retour aux projets</a>

        </div>
        </div>
    
    
    </div>
    </div>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Idee:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 102,  285 => 101,  279 => 99,  277 => 98,  274 => 97,  267 => 93,  259 => 86,  252 => 81,  246 => 79,  240 => 77,  238 => 76,  235 => 75,  229 => 73,  223 => 71,  221 => 70,  214 => 65,  212 => 64,  206 => 61,  203 => 60,  199 => 58,  193 => 56,  191 => 55,  186 => 53,  183 => 52,  179 => 50,  173 => 48,  171 => 47,  166 => 45,  163 => 44,  159 => 42,  153 => 40,  151 => 39,  143 => 33,  137 => 30,  134 => 29,  132 => 28,  128 => 27,  121 => 23,  117 => 22,  110 => 17,  104 => 15,  98 => 13,  96 => 12,  88 => 6,  79 => 5,  62 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswAmpliBundle::layout2.html.twig\" %}
{% block title %}{{ parent() }} - {{ idee.titre }}{% endblock %}
{% block dsw_ampli_jumbotron %}{% endblock %}

{% block dsw_ampli_content %}
<div class=\"container my-5\">
   
    <div class=\"row idee_page\">
    <div class=\"col-lg-8 mx-auto\">
    <div class=\"card idee\">
    
        {% if idee.imgProjet %}
            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"{{ asset('/uploads/img/' ~ idee.imgProjet) | imagine_filter('idea_show') }}\" alt=\"Image projet\">
        {% else %}
            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"{{ asset('bundles/dswampli/img/placeholder_projet.jpg') }}\" alt=\"Image projet\">
        {% endif %}
        
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            <!-- <h4 class=\"theme\">Ici thème</h4> --> 
            <p class=\"titre_idee mb-3\">{{ idee.titre }}</p>
            <!-- <p class=\"likes\">{{ idee.coeurs|length }} <span class=\"fa fa-heart\"></span></p> -->
        </div>
        
        <div class=\"card-body p-5\">
            <p class=\"card-text lead\">{{ idee.description|nl2br }}</p>
            {% if idee.video %}
            <div class=\"embed-responsive embed-responsive-16by9 offset-lg-2 col-lg-8 border-vid\">
                <video controls id=\"vid\" class=\"embed-responsive-item\" src=\"{{ idee.video }}\"></video>
            </div>
            {% endif %}
        </div>
        
        <hr class=\"hr_thin\">
        
        <div class=\"card-body p-5\">
            <h3 class=\"mb-3\">
                {% if idee.espace.objectifsAlias %}
                    {{ idee.espace.objectifsAlias }}
                {% else %}
                    Objectifs
                {% endif %}
            </h3>
            <p class=\"mb-0\">{{ idee.objectifs|nl2br }}</p>
            <h3 class=\"mt-4 mb-3\">
                {% if idee.espace.methodeAlias %}
                    {{ idee.espace.methodeAlias }}
                {% else %}
                    Méthode
                {% endif %}
            </h3>
            <p class=\"mb-0\">{{ idee.methode|nl2br }}</p>
            <h3 class=\"mt-4 mb-3\">
                {% if idee.espace.calendrierAlias %}
                    {{ idee.espace.calendrierAlias }}
                {% else %}
                    Calendrier
                {% endif %}
            </h3>
            <p class=\"mb-0\">{{ idee.calendrier|nl2br }}</p>
        </div>
        
        {% if idee.espace.withEquipe %}
        <hr class=\"hr_thin\">
        <div class=\"card-body p-5\">
            <h3>L'équipe</h3>
            <div class=\"col-md-6 col-xs-10 mx-auto\">
            <div class=\"card polaroid mb-3\">
                {% if idee.imgEquipe %}
                    <img src=\"{{ asset('/uploads/img/' ~ idee.imgEquipe) | imagine_filter('equipe') }}\" class=\"card-img-top\" alt=\"imageEquipe\">
                {% else %}
                    <img src=\"{{ asset('bundles/dswampli/img/placeholder_team.jpg') }}\" class=\"card-img-top\" alt=\"imageEquipe\">
                {% endif %}
                <div class=\"card-body\">
                {% if idee.equipe %}
                    <p>Projet développé par {{ idee.equipe }}</p>
                {% else %}
                    <p>Idée proposée par {{ idee.user.username }}</p>
                {% endif %}
                </div>
            </div>
            </div>
        </div>
        {% endif %}
    
    </div>
    
        <div class=\"row mt-1\">
        <div class=\"offset-lg-2 col-lg-8\">
            
            {# if is_granted('ROLE_AUTEUR') #}
            <a href=\"{{ path('ampli_idee_edit', {'id': idee.id}) }}\" class=\"btn btn-tertiary button_fixed\">
            <span class=\"fa fa-pencil fa-2x\"></span>
            </a>
            {# endif #}
            
            {% if is_granted('ROLE_ADMIN') or app.user == idee.espace.animateur %}
            <a href=\"{{ path('ampli_idee_delete', {'id': idee.id}) }}\" class=\"btn btn-primary mb-3\">Supprimer le projet</a>
            {% endif %}
            
            <a href=\"{{ path('dsw_ampli_develop', {'id': idee.espace.id}) }}\" class=\"btn btn-dark mb-3\">Retour aux projets</a>

        </div>
        </div>
    
    
    </div>
    </div>
    
</div>
{% endblock %}", "dswAmpliBundle:Idee:view.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/view.html.twig");
    }
}
