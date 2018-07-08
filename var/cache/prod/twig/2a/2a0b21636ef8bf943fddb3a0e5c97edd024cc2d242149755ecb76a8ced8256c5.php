<?php

/* dswUserBundle:Security:email.html.twig */
class __TwigTemplate_a58529cc40eac2e3080c5f53623e21205a30d3836813632dfa9eba370e53f524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswUserBundle::layout.html.twig", "dswUserBundle:Security:email.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container my-5\">
 
    ";
        // line 10
        if (array_key_exists("error", $context)) {
            // line 11
            echo "    ";
            if (($context["error"] ?? null)) {
                // line 12
                echo "        <div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
                echo "</div>
    ";
            }
            // line 14
            echo "    ";
        }
        // line 15
        echo "  
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">

    <img class=\"card-img-top img-fluid mb-1\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/landingAmpli2.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
        
    <div class=\"card-block p-3\" id=\"sign_in\">

        <!-- <form action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal mx-3\">
         
            <div class=\"input-group mt-4 mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-user fa-lg\"></span></span>
            <input type=\"text\" id=\"email\" name=\"_email\" required=\"required\" class=\"form-control\" />
            </div>

            <div class=\"row\"> 
            <div class=\"text-center mx-auto\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"C'est parti !\" class=\"btn btn-primary mb-3\" />
            </div>
            </div>

        </form> -->
        
        
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        
        <div class=\"text-center mx-auto\">
           
        ";
        // line 44
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors')) {
            echo "    
            <div class=\"alert alert-warning\" role=\"alert\">
                <div class=\"mb-0\">";
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "</div>
            </div>
        ";
        }
        // line 49
        echo "               
        <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-lock fa-lg\"></span></span>
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "
        </div>
                
                
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            <input type=\"submit\" value=\"Entrer\" class=\"btn btn-primary mb-3\" />
            
        </div>
        
        ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        

    </div>
    </div>
    </div>
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswUserBundle:Security:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 61,  123 => 56,  116 => 52,  111 => 49,  105 => 46,  100 => 44,  93 => 40,  74 => 24,  67 => 20,  60 => 15,  57 => 14,  51 => 12,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:Security:email.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Security/email.html.twig");
    }
}
