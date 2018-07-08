<?php

/* dswUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_06dcd83bc5b9b4093fbe9dfedbeb1a88e4afe2b89059ab0a7e2c5b3e2f2a0c85 extends Twig_Template
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
        return array (  48 => 20,  41 => 16,  34 => 12,  28 => 9,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:Resetting:request_content.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
