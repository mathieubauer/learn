<?php

/* dswAmpliBundle:Espace:develop.html.twig */
class __TwigTemplate_1fb3aa399890a5bc9319bb6db7da371b135bd2e15447d4c0911a7927fcbe26d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Espace:develop.html.twig", 1);
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
        echo " - Des idées aux projets";
    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["espace"] ?? null), "titre", array()), "html", null, true);
        echo "</h1>
    <h2 class=\"soustitre mb-0\">Des idées aux projets !</h2>
";
    }

    // line 8
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"container mt-5 idee_liste_vote\">
    
    <div class=\"grid\">
    <div class=\"grid-sizer col-md-4\"></div>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listIdees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 15
            echo "       
        ";
            // line 16
            $context["typeCoeur"] = "fa fa-heart-o";
            // line 17
            echo "       
        ";
            // line 18
            if (($context["user"] ?? null)) {
                // line 19
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["idee"], "coeurs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["coeur"]) {
                    // line 20
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($context["coeur"], "user", array()), "id", array()) == $this->getAttribute(($context["user"] ?? null), "id", array()))) {
                        // line 21
                        echo "                ";
                        $context["typeCoeur"] = "fa fa-heart";
                        // line 22
                        echo "            ";
                    }
                    // line 23
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "        ";
            }
            // line 25
            echo "       
        
        <div class=\"grid-item col-md-4\">
        <div class=\"grid-item-content\">
        <div class=\"card card_clickable mb-3\">
           
            ";
            // line 31
            if ($this->getAttribute($context["idee"], "imgProjet", array())) {
                // line 32
                echo "                <img class=\"card-img-top img-fluid cover_300\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute($context["idee"], "imgProjet", array()))), "ideas_wall"), "html", null, true);
                echo "\" alt=\"Image projet\">
            ";
            }
            // line 34
            echo "            
            <!-- <div class=\"card-header idee_header text-center\">
                Catégorie
            </div> -->
            
            <div class=\"card-body\">
                <h4 class=\"card-title\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
            echo "</h4>
                <p class=\"card-text\">";
            // line 41
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true));
            echo "</p>           
            </div>
            
            ";
            // line 44
            if ($this->getAttribute(($context["espace"] ?? null), "withFooter", array())) {
                // line 45
                echo "            <hr class=\"hr_thin\">
            
            <div class=\"card-body py-2 card_infos\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"mr-auto\">
                        <span class=\"fa fa-user\"></span>&nbsp; ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], "user", array()), "username", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"ml-auto\">
                    ";
                // line 53
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["idee"], "coeurs", array())), "html", null, true);
                echo " <span class=\"";
                echo twig_escape_filter($this->env, ($context["typeCoeur"] ?? null), "html", null, true);
                echo "\"></span>
                    </div>
                    <!-- <div>
                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-tertiary btn-sm btn_circle waves-effect waves-light\">
                    <span class=\"fa fa-pencil\"></span>
                    </a>
                    </div> -->
                </div>
            </div>
            ";
            }
            // line 63
            echo "              
            <div class=\"card-info mx-auto\">
                <h1><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\" class=\"hidden_link\">En savoir plus ?</a></h1>
            </div>
               
            <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\" class=\"color-overlay\"></a>
                
        </div>
        </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
    </div>
    
</div> 
  
<!--  
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé de développer ?</p>
<a class=\"btn btn-secondary\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">Retour à l'accueil</a>
</div> 
</div> 
-->
    
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Espace:develop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 84,  185 => 75,  172 => 68,  166 => 65,  162 => 63,  152 => 56,  144 => 53,  138 => 50,  131 => 45,  129 => 44,  123 => 41,  119 => 40,  111 => 34,  105 => 32,  103 => 31,  95 => 25,  92 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  72 => 19,  70 => 18,  67 => 17,  65 => 16,  62 => 15,  58 => 14,  51 => 9,  48 => 8,  40 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Espace:develop.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Espace/develop.html.twig");
    }
}
