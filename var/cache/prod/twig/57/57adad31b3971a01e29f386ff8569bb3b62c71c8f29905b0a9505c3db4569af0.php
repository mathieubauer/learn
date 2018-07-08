<?php

/* dswAmpliBundle:Default:landing.html.twig */
class __TwigTemplate_594819f036f40f7e0a3399e5ccb89f55142ed39b10936154983f68a311b2e2e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Default:landing.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswAmpliBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  
    <div class=\"landing_page\">
    <div class=\"container py-5\">

        ";
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        
        <div class=\"text-md-left text-center\">
        <h1 class=\"display-3 mt-3 type_js\">
            Amplifiez vos <span id=\"typed\"></span>
        </h1>
       
        <!-- <a class=\"btn btn-primary\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">S'identifier</a> -->
        <a class=\"btn btn-primary btn-xl my-4 disabled\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Créez un ampli</a><br>
        <a class=\"btn btn-primary btn-xl mb-4\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_demo");
        echo "\">Essayez une démo</a><br>
        <!-- <a class=\"btn btn-tertiary\" href=\"http://ampli.live/edf/6\">Dilex 14/12/2017</a>  -->
        </div>
        
        
        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            
            <div class=\"row\">
            <div class=\"input-group col-md-6\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "slug", array()), 'widget');
        echo "
                <span class=\"input-group-btn\">
                    <input type=\"submit\" value=\"Go !\" class=\"btn btn-primary btn-lg\" />
                </span>
            </div>
            </div>
    
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        
        
    </div>
    </div>
    
<div id=\"typed-strings\">
<p>projets</p>
<p>séminaires</p>
<p>réunions</p>
<p>brainstormings</p>
<p>idées</p>
</div>

<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/typed.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
    typeSpeed: 40,
    backSpeed: 20,
    loop: true,
    loopCount: 2,
    showCursor: false,
});
</script>

";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Default:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 56,  108 => 42,  98 => 35,  91 => 31,  86 => 29,  78 => 24,  74 => 23,  70 => 22,  62 => 16,  53 => 14,  48 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Default:landing.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Default/landing.html.twig");
    }
}
