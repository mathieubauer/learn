<?php

/* dswUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_af4d3bc67e28a9790e6e7c99f1453cc5c35bdc6e37c924eb2c8ae01f4285b651 extends Twig_Template
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
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">

    <img class=\"card-img-top img-fluid mb-1\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/wiredAmpli.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <div class=\"card-block p-3\">

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    
        ";
        // line 12
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors')) {
            echo "    
            <div class=\"alert alert-warning\" role=\"alert\">
                <div class=\"mb-0\">";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "</div>
            </div>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ($this->getAttribute(($context["form"] ?? null), "username", array(), "any", true, true)) {
            // line 19
            echo "        <div class=\"mt-3 mb-1\"><strong>Nom d'utilisateur</strong></div>
        <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-user fa-lg\"></span></span>
            ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget');
            echo "
        </div>
        ";
        }
        // line 25
        echo "        
        <div class=\"mt-3 mb-1\"><strong>Prénom et Nom</strong></div>
        <div class=\"row mb-3\">
            <div class=\"col-6\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstname", array()), 'widget');
        echo "</div>
            <div class=\"col-6\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastname", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"mt-3 mb-1\"><strong>Email</strong></div>
        <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-envelope fa-lg\"></span></span>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "
        </div>
        
        <div class=\"mt-3 mb-1\"><strong>Mot de passe actuel</strong></div>
        <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-lock fa-lg\"></span></span>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "current_password", array()), 'widget');
        echo "
        </div>

        <div>
            <input type=\"submit\" value=\"Modifier le compte\" class=\"btn btn-primary mb-3\" />
        </div>

    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>
    </div>
    </div>
    </div>
    <div class=\"fond_bleu\"></div>";
    }

    public function getTemplateName()
    {
        return "dswUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 48,  91 => 41,  82 => 35,  73 => 29,  69 => 28,  64 => 25,  58 => 22,  53 => 19,  51 => 18,  48 => 17,  42 => 14,  37 => 12,  32 => 10,  26 => 7,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:Profile:edit_content.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
