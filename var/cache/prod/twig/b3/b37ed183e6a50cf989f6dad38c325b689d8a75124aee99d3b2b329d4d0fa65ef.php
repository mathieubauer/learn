<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_0c13e67315265c6b2433a6b96bc33209bea64a9f732f92ae8fb8bdfba6b2de05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<div class=\"container my-5\">
 
    ";
        // line 5
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "  
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">

    <img class=\"card-img-top img-fluid mb-1\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/landingAmpli2.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
    
    ";
        // line 26
        echo "    
    ";
        // line 35
        echo "        
        
    <div class=\"card-block p-3\" id=\"sign_in\">

        <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal mx-3\">
         
        ";
        // line 44
        echo "          
            ";
        // line 45
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 46
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 48
        echo "
            <div class=\"input-group mt-4 mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-user fa-lg\"></span></span>
            <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"Nom d'utilisateur ou email\" class=\"form-control\" />
            </div>
            
            <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-lock fa-lg\"></span></span>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" class=\"form-control\" />
            </div>
            
            <input type=\"hidden\" id=\"password\" name=\"_password\" required=\"required\" value=\"azerty\" class=\"form-control\" />

            <div class=\"form-check mb-3\">
            <input class=\"\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label class=\"ml-2\" for=\"remember_me\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>

            <div class=\"row\"> 
            <div class=\"text-center mx-auto\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"C'est parti !\" class=\"btn btn-primary mb-3\" />
            </div>
            </div>

        </form>

        <div class=\"d-flex justify-content-between\">
            <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-link\">Créer un compte</a>
            <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"btn btn-link\">Mot de passe oublié ?</a>
        </div>

    </div>
    </div>
    </div>
    </div>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 76,  104 => 75,  89 => 63,  72 => 48,  66 => 46,  64 => 45,  61 => 44,  56 => 39,  50 => 35,  47 => 26,  42 => 13,  35 => 8,  29 => 6,  27 => 5,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"container my-5\">
 
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
  
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">

    <img class=\"card-img-top img-fluid mb-1\" src=\"{{ asset('bundles/dswampli/img/landingAmpli2.png') }}\" alt=\"Card image cap\">
    
    {# EXPERIMENTATION POUR FAIRE UN SLIDER ENTRE LOGIN ET REGISTER : 
        
    les id \"sign_in\" et \"sign_up\" servent à ça
        
    <div class=\"card-block p-3 text-center\">
        <h2 class=\"text-center\">Démo slide</h2>
        <a href=\"#\" class=\"btn btn-secondary\" id=\"test_slide\">Slide</a>
    </div>
       
    <hr class=\"hr_thin\">
    #}
    
    {# AFFICHAGE PRIORITAIRE DU REGISTER LORS DES EVENEMENTS 
    <div class=\"card-block p-3 text-center\" id=\"sign_up\">
        <h2 class=\"text-center\">Première visite ?</h2>
        <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-secondary\">Créer un compte</a>
    </div>
       
    <hr class=\"hr_thin\">
    #}
        
        
    <div class=\"card-block p-3\" id=\"sign_in\">

        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-horizontal mx-3\">
         
        {# AFFICHAGE PRIORITAIRE DU REGISTER LORS DES EVENEMENTS 
        <h2 class=\"text-center\">Déjà inscrit ?</h2>
        #}
          
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}

            <div class=\"input-group mt-4 mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-user fa-lg\"></span></span>
            <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"Nom d'utilisateur ou email\" class=\"form-control\" />
            </div>
            
            <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-lock fa-lg\"></span></span>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" class=\"form-control\" />
            </div>
            
            <input type=\"hidden\" id=\"password\" name=\"_password\" required=\"required\" value=\"azerty\" class=\"form-control\" />

            <div class=\"form-check mb-3\">
            <input class=\"\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label class=\"ml-2\" for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            </div>

            <div class=\"row\"> 
            <div class=\"text-center mx-auto\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"C'est parti !\" class=\"btn btn-primary mb-3\" />
            </div>
            </div>

        </form>

        <div class=\"d-flex justify-content-between\">
            <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-link\">Créer un compte</a>
            <a href=\"{{ path('fos_user_resetting_request') }}\" class=\"btn btn-link\">Mot de passe oublié ?</a>
        </div>

    </div>
    </div>
    </div>
    </div>
    
</div>
", "@FOSUser/Security/login_content.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Security/login_content.html.twig");
    }
}
