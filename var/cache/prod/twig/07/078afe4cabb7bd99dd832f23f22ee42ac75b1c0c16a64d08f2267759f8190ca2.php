<?php

/* dswAmpliBundle:Espace:selectionner.html.twig */
class __TwigTemplate_8167c485e797bba0511fbbc0bb4227f2df05439dd3757a95eb03a40fe4c696ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout2.html.twig", "dswAmpliBundle:Espace:selectionner.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_ampli_jumbotron' => array($this, 'block_dsw_ampli_jumbotron'),
            'dsw_ampli_content' => array($this, 'block_dsw_ampli_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswAmpliBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Sélectionnez vos idées préférées";
    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
    }

    // line 5
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 6
        echo "   
<div class=\"container mt-md-5 mt-3 px-md-3 px-0 idee_liste_selection\">
<div class=\"main-carousel col-md-6 mx-auto\">
   
        <div id=\"\" class=\"item_0 draggable2\">
        <div id=\"card_first\" class=\"card mb-3 item_0\">
            
            <h4 class=\"card-header text-white bg-primary text-center py-4\">Sélection des idées</h4>
            
            <div class=\"card-body my-3\">
                <div class=\"row\">
                <div class=\"col-6 text-center\">
                    <strong class=\"card-text\">Vous n'aimez pas ?</strong><br>
                    <span class=\"card-text\">Glissez à gauche</span><br>
                    <span class=\"fa fa-arrow-left fa-2x mt-3 text-center\"></span>
                </div>
                <div class=\"col-6 text-right text-center\">
                    <strong class=\"card-text\">Vous aimez ?</strong><br>
                    <span class=\"card-text\">Glissez à droite</span><br>
                    <span class=\"fa fa-arrow-right fa-2x mt-3 text-center\"></span>
                </div>
                </div>
            </div>
                
            <hr class=\"hr_thin\">
                
            <div class=\"card-body py-2 card_infos\">  
                <div class=\"text-center\">
                    <span class=\"card-text\">Essayez !</span>
                </div>
            </div>
                
        </div>
        
        <div class=\"row\">
           
            <div class=\"col-6 text-center\">
            <button id=\"\" class=\"btn btn-white text-tertiary button_round croix\">
                <span class=\"fa fa-times fa-2x\"></span>
            </button>
                </div>
            <div class=\"col-6 text-center\">
            <button id=\"\" class=\"btn btn-white text-tertiary button_round coeur\">
                <span class=\"fa fa-heart fa-2x\"></span>
            </button>
            </div>
        
        </div>
        
        </div>
    
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listIdees"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 58
            echo "       
        ";
            // line 59
            $context["typeCoeur"] = "fa fa-heart-o fa-2x";
            // line 60
            echo "        ";
            $context["classCoeur"] = "unliked";
            // line 61
            echo "       
        ";
            // line 62
            if (($context["user"] ?? null)) {
                // line 63
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["idee"], "coeurs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["coeur"]) {
                    // line 64
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($context["coeur"], "user", array()), "id", array()) == $this->getAttribute(($context["user"] ?? null), "id", array()))) {
                        // line 65
                        echo "                ";
                        $context["typeCoeur"] = "fa fa-heart fa-2x";
                        // line 66
                        echo "                ";
                        $context["classCoeur"] = "liked";
                        // line 67
                        echo "            ";
                    }
                    // line 68
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "        ";
            }
            // line 70
            echo "        
        <!-- <div class=\"carousel-cell\"> -->
        <div id=\"card_";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "id", array()), "html", null, true);
            echo "\" class=\"item_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " draggable2 hidden\">
        <div class=\"card mb-3\">
           
            ";
            // line 75
            if ($this->getAttribute($context["idee"], "imgProjet", array())) {
                // line 76
                echo "                <img class=\"card-img-top img-fluid cover_180\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute($context["idee"], "imgProjet", array()))), "ideas_wall"), "html", null, true);
                echo "\" alt=\"Image projet\">
            ";
            }
            // line 78
            echo "            
            <!-- <div class=\"card-header idee_header text-center\">
                Catégorie 
            </div> -->
            
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <h4 class=\"card-title mb-0\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
            echo "</h4>
                    ";
            // line 86
            if ($this->getAttribute($this->getAttribute($context["idee"], "categorie", array(), "any", false, true), "titre", array(), "any", true, true)) {
                // line 87
                echo "                    <strong class=\"text-primary border border-primary p-1 ml-3 category_size\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], "categorie", array()), "titre", array())), "html", null, true);
                echo "</strong>
                    ";
            }
            // line 89
            echo "                </div>
                <p class=\"card-text\">";
            // line 90
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true));
            echo "</p>
            </div>
            
            <hr class=\"hr_thin\">
            
            <div class=\"card-body py-2 card_infos\">
                <div class=\"d-flex justify-content-between align-items-center\">
                       
                    <div class=\"\">
                        <span class=\"fa fa-user\"></span>&nbsp; ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], "user", array()), "username", array()), "html", null, true);
            echo "
                        <!-- ";
            // line 100
            if (($this->getAttribute($this->getAttribute($context["idee"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()))) {
                // line 101
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_delete_user", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
                echo "\" class=\"hidden_link cliquable ml-3\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                        ";
            }
            // line 102
            echo " -->
                    </div>
                    
                    ";
            // line 105
            if (($this->getAttribute(($context["espace"] ?? null), "withCoeurs", array()) == 1)) {
                // line 106
                echo "                    <div class=\"ml-auto\">
                       
                        <!-- <span id=\"nblikes_";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "id", array()), "html", null, true);
                echo "\">
                            ";
                // line 109
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["idee"], "coeurs", array())), "html", null, true);
                echo " 
                        </span>  -->
                        
                        <span id=\"coeur_";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "id", array()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["classCoeur"] ?? null), "html", null, true);
                echo " text-tertiary\">
                            <span class=\"cliquable ";
                // line 113
                echo twig_escape_filter($this->env, ($context["typeCoeur"] ?? null), "html", null, true);
                echo "\"></span>
                        </span>
                        
                        <!-- 
                        <span id=\"croix_";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "id", array()), "html", null, true);
                echo "\" class=\"croix\"><span class=\"cliquable fa fa-times-circle-o fa-2x\"></span></span> 
                        <span id=\"coeur_";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "id", array()), "html", null, true);
                echo "\" class=\"coeur\"><span class=\"cliquable fa fa-check-circle-o fa-2x\"></span></span> 
                        <span id=\"coeur_";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "id", array()), "html", null, true);
                echo "\" class=\"coeur ml-3\"><span class=\"cliquable fa fa-arrow-circle-o-right fa-2x\">
                        </span></span>
                        -->
                    </div>
                    ";
            }
            // line 124
            echo "                    
                </div>
            </div>
                
        </div>
        
        
        <div class=\"row\">
           
            <div class=\"col-6 text-center\">
            <button id=\"\" class=\"btn btn-white text-tertiary button_round croix\">
                <span class=\"fa fa-times fa-2x\"></span>
            </button>
                </div>
            <div class=\"col-6 text-center\">
            <button id=\"\" class=\"btn btn-white text-tertiary button_round coeur\">
                <span class=\"fa fa-heart fa-2x\"></span>
            </button>
            </div>
        
        </div>
        
        </div>
        
        <!-- </div> -->

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "    
        <div class=\"carousel-cell\">
        <div id=\"card_last\" class=\"card text-white bg-info mb-3 item_";
        // line 153
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["listIdees"] ?? null)) + 1), "html", null, true);
        echo " hidden\">
            
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <h4 class=\"card-title mb-0\">Vous avez vu toutes les idées</h4>
                </div>
                <p class=\"card-text\">Merci !</p>
                <a class=\"btn btn-secondary\" href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">Retour à l'accueil</a>
            </div>
                
        </div>
        </div>
    
</div> 
</div> 

<!-- Pied de page #########################    
    
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé de voter ?</p>
<a class=\"btn btn-secondary\" href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">Retour à l'accueil</a>
</div> 
</div> -->
    
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Espace:selectionner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 174,  326 => 160,  316 => 153,  312 => 151,  272 => 124,  264 => 119,  260 => 118,  256 => 117,  249 => 113,  243 => 112,  237 => 109,  233 => 108,  229 => 106,  227 => 105,  222 => 102,  216 => 101,  214 => 100,  210 => 99,  198 => 90,  195 => 89,  189 => 87,  187 => 86,  183 => 85,  174 => 78,  168 => 76,  166 => 75,  158 => 72,  154 => 70,  151 => 69,  145 => 68,  142 => 67,  139 => 66,  136 => 65,  133 => 64,  128 => 63,  126 => 62,  123 => 61,  120 => 60,  118 => 59,  115 => 58,  98 => 57,  45 => 6,  42 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Espace:selectionner.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Espace/selectionner.html.twig");
    }
}
