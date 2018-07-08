<?php

/* dswUserBundle:Security:login_learn.html.twig */
class __TwigTemplate_8293f424fe4fb9f4067e0a017c93beb44217fdffa774eacf724828d2966b016f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswUserBundle:Security:login_learn.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswLearnBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container my-5\">

    ";
        // line 6
        if (array_key_exists("error", $context)) {
            // line 7
            echo "    ";
            if (($context["error"] ?? null)) {
                // line 8
                echo "        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "message", array()), "html", null, true);
                echo "</div>
    ";
            }
            // line 10
            echo "    ";
        }
        // line 11
        echo "    
    ";
        // line 12
        if (array_key_exists("manual_error", $context)) {
            // line 13
            echo "    ";
            if (($context["manual_error"] ?? null)) {
                // line 14
                echo "        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, ($context["manual_error"] ?? null), "html", null, true);
                echo "</div>
    ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "    
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">

    <img class=\"card-img-top img-fluid mb-1\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/connexion_learn.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/dswampli/img/connexion_learn.png"), "ideas_wall"), "html", null, true);
        echo "\" />
    
    <!--
    <div class=\"card-block p-3 text-center\">
        Here is a text !
    </div>
    -->
    
    <div class=\"card-block p-4\" id=\"sign_in\">
        
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
           
            <div class=\"mb-3\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo " 
            </div>
            
            <div class=\"text-center\">
                <button class=\"btn btn-learn ml-0\" type=\"submit\">Se connecter</button>
            </div>
            
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        <!--
        <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_security_check");
        echo "\" method=\"post\" class=\"form-horizontal mx-3\">
            
            <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"Votre email professionnel\" class=\"form-control\" />
            
            <input type=\"hidden\" id=\"password\" name=\"_password\" required=\"required\" value=\"azerty\" class=\"form-control\" />

            <div class=\"row\"> 
            <div class=\"text-center mx-auto\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"C'est parti !\" class=\"btn btn-primary mb-3\" />
            </div>
            </div>

        </form>
        -->

    </div>
    
    </div>
    </div>
    </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "dswUserBundle:Security:login_learn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  106 => 43,  96 => 36,  90 => 33,  77 => 23,  73 => 22,  66 => 17,  63 => 16,  57 => 14,  54 => 13,  52 => 12,  49 => 11,  46 => 10,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:Security:login_learn.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Security/login_learn.html.twig");
    }
}
