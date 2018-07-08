<?php

/* dswUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_231885e0397280eefc6699d4d1165933ff5a01e7d7ddd171a10047fda37d7857 extends Twig_Template
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
        
        <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/wiredAmpli.png"), "html", null, true);
        echo "\" alt=\"Wired Ampli\">
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            <h2 class=\"\">Inscription</h2>
        </div>
        
        <div class=\"card-body\">
        
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

                ";
        // line 20
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors')) {
            echo "    
                    <div class=\"alert alert-warning\" role=\"alert\">
                        <div class=\"mb-0\">";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "</div>
                    </div>
                ";
        }
        // line 25
        echo "
                ";
        // line 26
        if ($this->getAttribute(($context["form"] ?? null), "username", array(), "any", true, true)) {
            // line 27
            echo "                <div class=\"mb-1\"><strong>Nom d'utilisateur</strong></div>
                <div class=\"mb-3\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget');
            echo "</div>
                ";
        }
        // line 30
        echo "
                <!--
                <div class=\"mb-1\"><strong>Prénom et Nom</strong></div>
                <div class=\"row mb-3\">
                    <div class=\"col-6\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstname", array()), 'widget');
        echo "</div>
                    <div class=\"col-6\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastname", array()), 'widget');
        echo "</div>
                </div>
                -->

                <div class=\"input-group mt-4 mb-3\">
                    <span class=\"input-group-addon\"><span class=\"fa fa-envelope fa-lg\"></span></span>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "
                </div>

                ";
        // line 44
        if ($this->getAttribute(($context["form"] ?? null), "plainPassword", array(), "any", true, true)) {
            // line 45
            echo "                <div class=\"input-group mb-3\">
                    <span class=\"input-group-addon\"><span class=\"fa fa-lock fa-lg\"></span></span>
                    ";
            // line 47
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), 'widget');
            echo "
                </div>
                ";
        }
        // line 50
        echo "                
                <div class=\"row\"> 
                <div class=\"text-center mx-auto\">
                <input type=\"submit\" value=\"C'est parti !\" class=\"btn btn-primary mb-3\" />
                </div>
                </div>

            ";
        // line 57
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
        return "dswUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 57,  106 => 50,  100 => 47,  96 => 45,  94 => 44,  88 => 41,  79 => 35,  75 => 34,  69 => 30,  64 => 28,  61 => 27,  59 => 26,  56 => 25,  50 => 22,  45 => 20,  40 => 18,  28 => 9,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:Registration:register_content.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
