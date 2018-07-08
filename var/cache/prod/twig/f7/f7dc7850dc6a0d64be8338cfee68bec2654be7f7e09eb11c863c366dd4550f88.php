<?php

/* dswAmpliBundle:Espace:view.html.twig */
class __TwigTemplate_749f0b78c5a15df75e004812dae2fc9fc0f0adbe659b332b260763b4949ee1cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Espace:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_ampli_jumbotron' => array($this, 'block_dsw_ampli_jumbotron'),
            'dsw_ampli_content' => array($this, 'block_dsw_ampli_content'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Choix de l'étape";
    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["espace"] ?? null), "titre", array()), "html", null, true);
        echo "</h1>
    <h2 class=\"soustitre mb-0\">Quelle sera votre contribution ?</h2>
";
    }

    // line 8
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 9
        echo "   
    <div class=\"row no-gutters\">

        <!-- <div class=\"col-md-3 col-6\">
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_new", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            <div class=\"vcard text-center chiaro\" >
                <i class=\"fa fa-microphone\" aria-hidden=\"true\"></i>
                <div class=\"card-block\">
                    <h3 class=\"card-title\">1. Proposer</h3>
                </div>
            </div>
            </a>
        </div> -->

        <div class=\"col-md-4 col-12\">
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_vote", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            <div class=\"vcard text-center oscuro\" >
                <i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
                <div class=\"card-block\">
                    <h3 class=\"card-title\">Inventer</h3>
                </div>
            </div>
            </a>
        </div>


        <div class=\"col-md-4 col-12\">
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_develop", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            <div class=\"vcard text-center chiaro\" >
                <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
                <div class=\"card-block\">
                    <h3 class=\"card-title\">Développer</h3>
                </div>
            </div>
            </a>
        </div>

        <div class=\"col-md-4 col-12\">
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_propulse", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            <div class=\"vcard text-center oscuro\" >
                <i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i>
                <div class=\"card-block\">
                    <h3 class=\"card-title\">Propulser</h3>
                </div>
            </div>
            </a>
        </div>

    </div>
    
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Espace:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 47,  86 => 36,  71 => 24,  57 => 13,  51 => 9,  48 => 8,  40 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Espace:view.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Espace/view.html.twig");
    }
}
