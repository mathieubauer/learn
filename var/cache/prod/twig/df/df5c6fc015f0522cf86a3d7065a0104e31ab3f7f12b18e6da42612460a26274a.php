<?php

/* dswAmpliBundle:Espace:propulse.html.twig */
class __TwigTemplate_e19f7ca67e4b69fc8c5193f31d5f3e528b15e18b044a15a831f41c6ee4b26c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Espace:propulse.html.twig", 1);
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
        echo " - Donnez de l'énergie !";
    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["espace"] ?? null), "titre", array()), "html", null, true);
        echo "</h1>
    <h2 class=\"soustitre mb-0\">
        ";
        // line 6
        if ($this->getAttribute(($context["espace"] ?? null), "propulserAlias", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["espace"] ?? null), "propulserAlias", array()), "html", null, true);
        } else {
            echo "Donnez de l'énergie !";
        }
        // line 7
        echo "    </h2>
";
    }

    // line 10
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        echo " 
<div class=\"container mt-5 idee_liste_propulse\">
    
    <div class=\"grid\">
    <div class=\"grid-sizer col-md-4\"></div>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listIdees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 17
            echo "       
        ";
            // line 18
            $context["typeCoeur"] = "fa fa-heart-o";
            // line 19
            echo "       
        ";
            // line 20
            if (($context["user"] ?? null)) {
                // line 21
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "coeurs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["coeur"]) {
                    // line 22
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($context["coeur"], "user", array()), "id", array()) == $this->getAttribute(($context["user"] ?? null), "id", array()))) {
                        // line 23
                        echo "                ";
                        $context["typeCoeur"] = "fa fa-heart";
                        // line 24
                        echo "            ";
                    }
                    // line 25
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "        ";
            }
            // line 27
            echo "       
        
        <div class=\"grid-item col-md-4\">
        <div class=\"grid-item-content\">
        <div class=\"card card_clickable mb-3\">
            
            ";
            // line 33
            if ($this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "imgProjet", array())) {
                // line 34
                echo "                <img class=\"card-img-top img-fluid cover_300\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "imgProjet", array()))), "ideas_wall"), "html", null, true);
                echo "\" alt=\"Image projet\">
            ";
            } else {
                // line 36
                echo "                <div class=\"card-body gradient_azure body_top\"></div>
            ";
            }
            // line 38
            echo "            
            
            <div class=\"card-body\">
                <h4 class=\"card-title\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "titre", array()), "html", null, true);
            echo "</h4>
                <p class=\"card-text\">";
            // line 42
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "description", array()), "html", null, true));
            echo "</p>
            </div>
            
            ";
            // line 45
            if ($this->getAttribute(($context["espace"] ?? null), "withFooter", array())) {
                // line 46
                echo "            <hr class=\"hr_thin\">
            
            <div class=\"card-body py-2 card_infos\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"mr-3\">
                        <span class=\"fa fa-user\"></span>&nbsp; ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "user", array()), "username", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"ml-auto\">
                    ";
                // line 54
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "coeurs", array())), "html", null, true);
                echo " <span class=\"";
                echo twig_escape_filter($this->env, ($context["typeCoeur"] ?? null), "html", null, true);
                echo "\"></span>
                    </div>
                    <!-- <div class=\"ml-auto\">
                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_public", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-link btn-sm \">
                    PROPULSER
                    </a>
                    </div> -->
                </div>
            </div>
            ";
            }
            // line 64
            echo "              
            <div class=\"card-info mx-auto\">
                <h1><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_public", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"hidden_link\">En savoir plus ?</a></h1>
            </div>
               
            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_public", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"color-overlay\"></a>
                
        </div>
        </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
    </div>
    
</div> 
    
<!--
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé de propulser ?</p>
<a class=\"btn btn-primary\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">Retour à l'accueil</a>
</div> 
</div> 
-->
    
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Espace:propulse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 85,  195 => 76,  182 => 69,  176 => 66,  172 => 64,  162 => 57,  154 => 54,  148 => 51,  141 => 46,  139 => 45,  133 => 42,  129 => 41,  124 => 38,  120 => 36,  114 => 34,  112 => 33,  104 => 27,  101 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  81 => 21,  79 => 20,  76 => 19,  74 => 18,  71 => 17,  67 => 16,  57 => 10,  52 => 7,  46 => 6,  40 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Espace:propulse.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Espace/propulse.html.twig");
    }
}
