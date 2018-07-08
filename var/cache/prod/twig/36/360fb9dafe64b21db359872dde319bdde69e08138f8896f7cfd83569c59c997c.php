<?php

/* dswAmpliBundle:Admin:index.html.twig */
class __TwigTemplate_a0541449f505e96f64b8b94b9bb3b40c60dab5676c00cd58cc652b4217b645fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Admin:index.html.twig", 1);
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
        echo " - Administration";
    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
    }

    // line 5
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container my-5\"> 
  
    <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin_config");
        echo "\" class=\"btn btn-tertiary mb-3\">Piloter Ampli</a><br>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin_user");
        echo "\" class=\"btn btn-secondary mb-5\">Gérer les utilisateurs</a>
    
   
    <h2>Gestion des espaces</h2>
    
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listEspaces"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["espace"]) {
            // line 15
            echo "        
        <h3>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["espace"], "titre", array()), "html", null, true);
            echo "</h3>
        
        <p class=\"mb-0\">Etape : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["espace"], "etape", array()), "html", null, true);
            echo "</p>
        <p class=\"mb-0\">Cœurs : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["espace"], "withCoeurs", array()), "html", null, true);
            echo "</p>
        <p class=\"mb-0\">Ajout idées : ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["espace"], "withIdees", array()), "html", null, true);
            echo "</p>
        <p>Slug : ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["espace"], "slug", array()), "html", null, true);
            echo "</p>
        
        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute($context["espace"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">
        Aller à l'espace
        </a>
       
        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin_espace", array("id" => $this->getAttribute($context["espace"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">
        Piloter l'espace
        </a>
        
        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin_idee", array("id" => $this->getAttribute($context["espace"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">
        Sélectionner les idées
        </a>
        
        <hr>
        
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "    <p>Pas (encore !) d'espaces</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['espace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    
    <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_addEspace");
        echo "\" class=\"btn btn-secondary\">Ajouter un espace</a>
    
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 41,  124 => 40,  117 => 38,  105 => 31,  98 => 27,  91 => 23,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  69 => 16,  66 => 15,  61 => 14,  53 => 9,  49 => 8,  45 => 6,  42 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Admin:index.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Admin/index.html.twig");
    }
}
