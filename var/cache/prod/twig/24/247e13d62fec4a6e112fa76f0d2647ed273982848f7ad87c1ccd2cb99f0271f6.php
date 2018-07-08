<?php

/* dswUserBundle:Security:login_content.html.twig */
class __TwigTemplate_bc302b1478528b10cf1b9d154ece6b99d8e78dac1955762c0247c7460d675306 extends Twig_Template
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
        // line 2
        echo "
<div class=\"container my-5\">
 
    ";
        // line 5
        if (($context["error"] ?? null)) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        if (($context["csrf_token"] ?? null)) {
            // line 46
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "dswUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 76,  101 => 75,  86 => 63,  69 => 48,  63 => 46,  61 => 45,  58 => 44,  53 => 39,  47 => 35,  44 => 26,  39 => 13,  32 => 8,  26 => 6,  24 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:Security:login_content.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Security/login_content.html.twig");
    }
}
