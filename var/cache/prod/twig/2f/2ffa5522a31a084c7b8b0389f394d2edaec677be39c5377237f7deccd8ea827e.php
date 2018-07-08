<?php

/* dswUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_dd3b0e8652a502d61890cd04dae1d48d252feb711c16a3c9a02a935959451cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswUserBundle::layout.html.twig", "dswUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jumbo_ampli' => array($this, 'block_jumbo_ampli'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Des idées aux projets
";
    }

    // line 9
    public function block_jumbo_ampli($context, array $blocks = array())
    {
    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"container my-5\">
  
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">
        
        <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/wiredAmpli.png"), "html", null, true);
        echo "\" alt=\"Wired Ampli\">
        
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            <h2 class=\"mb-3\">Bienvenue !</h2>
        </div>
        
        <div class=\"card-body my-4\">
        
            <!-- <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? null), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</span><br> -->
            <span>Félicitations ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo ", votre compte est maintenant activé !</span><br>
            ";
        // line 31
        if (($context["targetUrl"] ?? null)) {
            // line 32
            echo "            <span><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-primary mt-3\">C'est parti !</a></span>
            ";
        } else {
            // line 34
            echo "            <span><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-primary mt-3\">Retour à l'accueil</a></span>
            ";
        }
        // line 36
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
        return "dswUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 36,  85 => 34,  79 => 32,  77 => 31,  73 => 30,  69 => 29,  56 => 19,  48 => 13,  45 => 12,  40 => 9,  33 => 6,  30 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:Registration:confirmed.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
