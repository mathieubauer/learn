<?php

/* dswUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_688489e0399ba3079be8f9a2afe9a35e3e2fcbb217096f525ed1cb1800aee12f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswUserBundle:Resetting:request_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "    
    <div class=\"container my-5\">

    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">

    <img class=\"card-img-top img-fluid mb-1\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/resetting.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <div class=\"card-block p-3\">
        
        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request form-horizontal mx-3\">
           
            <div class=\"input-group mt-4 mb-3\">
                <span class=\"input-group-addon\"><span class=\"fa fa-envelope fa-lg\"></span></span>
                <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"w-100 px-1\" />
            </div>
            
            <div class=\"text-center mx-auto\">
                <input type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary mb-4\" />
            </div>
            
        </form>

    </div>
    </div>
    </div>
    </div>
    
    </div>
    <div class=\"fond_bleu\"></div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  47 => 16,  40 => 12,  34 => 9,  25 => 2,);
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

    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">

    <img class=\"card-img-top img-fluid mb-1\" src=\"{{ asset('bundles/dswampli/img/resetting.png') }}\" alt=\"Card image cap\">
    <div class=\"card-block p-3\">
        
        <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request form-horizontal mx-3\">
           
            <div class=\"input-group mt-4 mb-3\">
                <span class=\"input-group-addon\"><span class=\"fa fa-envelope fa-lg\"></span></span>
                <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"{{ 'resetting.request.username'|trans }}\" class=\"w-100 px-1\" />
            </div>
            
            <div class=\"text-center mx-auto\">
                <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" class=\"btn btn-primary mb-4\" />
            </div>
            
        </form>

    </div>
    </div>
    </div>
    </div>
    
    </div>
    <div class=\"fond_bleu\"></div>", "dswUserBundle:Resetting:request_content.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
