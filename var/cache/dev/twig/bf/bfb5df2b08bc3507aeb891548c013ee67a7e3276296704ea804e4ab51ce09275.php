<?php

/* dswUserBundle:User:view.html.twig */
class __TwigTemplate_d9c628c5d11d24cea0f3280328debb2ab20b2e30b0f0ebe242130d2596cdffb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout2.html.twig", "dswUserBundle:User:view.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswUserBundle:User:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswUserBundle:User:view.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        
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
    
        <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/utilisateur.png"), "html", null, true);
        echo "\" alt=\"Image user\">
        
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            ";
        // line 17
        if ($this->getAttribute(($context["user"] ?? null), "lastname", array(), "any", true, true)) {
            // line 18
            echo "                <p class=\"titre_idee mb-3\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastname", array()), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 20
            echo "                <p class=\"titre_idee mb-3\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 22
        echo "        </div>
        
        
        <div class=\"card-body\">
            
            ";
        // line 27
        if (((($context["user"] ?? $this->getContext($context, "user")) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 28
            echo "            <h4 class=\"card-title\">Informations visibles sur votre fiche publique</h4>
            ";
        }
        // line 30
        echo "            
            <p class=\"card-text mb-1\">Nom d'utilisateur : ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
            <p class=\"card-text mb-1\">Nombre d'idées crées : ";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["idees"] ?? $this->getContext($context, "idees"))), "html", null, true);
        echo "</p>
            <p class=\"card-text\">Nombre d'idées aimées : ";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["likes"] ?? $this->getContext($context, "likes"))), "html", null, true);
        echo "</p>

        </div>
        
        ";
        // line 38
        echo "        ";
        if (((($context["user"] ?? $this->getContext($context, "user")) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 39
            echo "        
        <hr class=\"hr_thin\">
        <div class=\"card-body\">
            
            <h4 class=\"card-title\">Informations personnelles</h4>
            <p class=\"card-text mb-1\">Email : ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
            echo "</p>
            <p class=\"card-text mb-1\">Dernière connexion : ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastLogin", array()), "d/m/y \\à G:i"), "html", null, true);
            echo "</p>
            
            <p class=\"card-text\">
            ";
            // line 48
            if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", array())) {
                // line 49
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 50
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo " 
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "            ";
            }
            // line 53
            echo "            </p>
            
            <a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" class=\"btn btn-outline-primary mt-2\">Modifier le profil</a>
            <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\" class=\"btn btn-outline-primary mt-2\">Changer de mot de passe</a>
            
            
        </div>
        
        <hr class=\"hr_thin\">
        <div class=\"card-body\">
            
            <h4 class=\"card-title\">Idées proposées</h4>
            
            ";
            // line 66
            if (($context["idees"] ?? $this->getContext($context, "idees"))) {
                // line 67
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["idees"] ?? $this->getContext($context, "idees")));
                foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
                    // line 68
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
                    echo "\" class=\"mb-1\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
                    echo "</a><br>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "            ";
            }
            // line 71
            echo "            
        </div>
        
        <hr class=\"hr_thin\">
        <div class=\"card-body\">
            
            <h4 class=\"card-title\">Idées aimées</h4>
            
            ";
            // line 79
            if (($context["likes"] ?? $this->getContext($context, "likes"))) {
                // line 80
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["likes"] ?? $this->getContext($context, "likes")));
                foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
                    // line 81
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($this->getAttribute($context["like"], "idee", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"mb-1\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["like"], "idee", array()), "titre", array()), "html", null, true);
                    echo "</a><br>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "            ";
            }
            // line 84
            echo "            
        </div> 
        
        ";
        }
        // line 88
        echo "        

    
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
        return "dswUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 88,  263 => 84,  260 => 83,  249 => 81,  244 => 80,  242 => 79,  232 => 71,  229 => 70,  218 => 68,  213 => 67,  211 => 66,  198 => 56,  194 => 55,  190 => 53,  187 => 52,  178 => 50,  173 => 49,  171 => 48,  165 => 45,  161 => 44,  154 => 39,  151 => 38,  144 => 33,  140 => 32,  136 => 31,  133 => 30,  129 => 28,  127 => 27,  120 => 22,  114 => 20,  106 => 18,  104 => 17,  96 => 12,  88 => 6,  79 => 5,  62 => 3,  42 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} - {{ user.username }}{% endblock %}
{% block dsw_ampli_jumbotron %}{% endblock %}

{% block dsw_ampli_content %}
<div class=\"container my-5\">
   
    <div class=\"row idee_page\">
    <div class=\"col-lg-8 mx-auto\">
    <div class=\"card idee\">
    
        <img class=\"card-img img-fluid cover_300 pos_a\" src=\"{{ asset('bundles/dswampli/img/utilisateur.png') }}\" alt=\"Image user\">
        
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            {% if user.lastname is defined %}
                <p class=\"titre_idee mb-3\">{{ user.firstname }} {{ user.lastname }}</p>
            {% else %}
                <p class=\"titre_idee mb-3\">{{ user.username }}</p>
            {% endif %}
        </div>
        
        
        <div class=\"card-body\">
            
            {% if user == app.user or is_granted('ROLE_ADMIN') %}
            <h4 class=\"card-title\">Informations visibles sur votre fiche publique</h4>
            {% endif %}
            
            <p class=\"card-text mb-1\">Nom d'utilisateur : {{ user.username }}</p>
            <p class=\"card-text mb-1\">Nombre d'idées crées : {{ idees|length }}</p>
            <p class=\"card-text\">Nombre d'idées aimées : {{ likes|length }}</p>

        </div>
        
        {# Partie privée #}
        {% if user == app.user or is_granted('ROLE_ADMIN') %}
        
        <hr class=\"hr_thin\">
        <div class=\"card-body\">
            
            <h4 class=\"card-title\">Informations personnelles</h4>
            <p class=\"card-text mb-1\">Email : {{ user.email }}</p>
            <p class=\"card-text mb-1\">Dernière connexion : {{ user.lastLogin|date(\"d/m/y \\\\à G:i\") }}</p>
            
            <p class=\"card-text\">
            {% if user.roles %}
            {% for role in user.roles %}
                {{ role }} 
            {% endfor %}
            {% endif %}
            </p>
            
            <a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-outline-primary mt-2\">Modifier le profil</a>
            <a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-outline-primary mt-2\">Changer de mot de passe</a>
            
            
        </div>
        
        <hr class=\"hr_thin\">
        <div class=\"card-body\">
            
            <h4 class=\"card-title\">Idées proposées</h4>
            
            {% if idees %}
            {% for idee in idees %}
                <a href=\"{{ path('ampli_idee_show', {'id': idee.id}) }}\" class=\"mb-1\">{{ idee.titre }}</a><br>
            {% endfor %}
            {% endif %}
            
        </div>
        
        <hr class=\"hr_thin\">
        <div class=\"card-body\">
            
            <h4 class=\"card-title\">Idées aimées</h4>
            
            {% if likes %}
            {% for like in likes %}
                <a href=\"{{ path('ampli_idee_show', {'id': like.idee.id}) }}\" class=\"mb-1\">{{ like.idee.titre }}</a><br>
            {% endfor %}
            {% endif %}
            
        </div> 
        
        {% endif %}
        

    
    </div>
    

    
    
    </div>
    </div>
    
</div>
{% endblock %}





    

", "dswUserBundle:User:view.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/User/view.html.twig");
    }
}
