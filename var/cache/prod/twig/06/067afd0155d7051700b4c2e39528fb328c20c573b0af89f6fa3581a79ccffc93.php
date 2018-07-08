<?php

/* dswCoreBundle:Core:landing.html.twig */
class __TwigTemplate_0924c032aebf27d3607348262a1fdf8725196b0842734e366d8f67d86b30343d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("dswCoreBundle::layout.html.twig", "dswCoreBundle:Core:landing.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "  
    <div class=\"landing_page\">
    <div class=\"container py-5\">

        ";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "        <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        
        <div class=\"\">
        <h1 class=\"display-3 mt-3 type_js\">
            Amplifiez vos <span id=\"typed\"></span>
        </h1>
       
        <!-- <a class=\"btn btn-primary\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">S'identifier</a> -->
        <a class=\"btn btn-primary btn-xl my-4 disabled\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Créez un ampli</a><br>
        <a class=\"btn btn-primary btn-xl\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => 1));
        echo "\">Essayez une démo</a>
        <a class=\"btn btn-tertiary\" href=\"http://ampli.live/edf/6\">Dilex 14/12/2017</a>
        </div>
        
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
        // line 41
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
        return "dswCoreBundle:Core:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 41,  78 => 26,  74 => 25,  70 => 24,  62 => 18,  53 => 16,  48 => 15,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswCoreBundle:Core:landing.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/CoreBundle/Resources/views/Core/landing.html.twig");
    }
}
