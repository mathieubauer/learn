<?php

/* dswAmpliBundle:Espace:vote.html.twig */
class __TwigTemplate_889558e6484697dc8ef6b4e7064beae48319402fee873361c5625ea511321576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Espace:vote.html.twig", 1);
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
        echo " - Proposez, votez !";
    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["espace"] ?? null), "titre", array()), "html", null, true);
        echo "</h1>
    <h2 class=\"soustitre mb-0\">Proposez, votez !</h2>
";
    }

    // line 8
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
        // line 10
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'errors')) {
            // line 11
            echo "    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-primary mt-3\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        <div class=\"mb-0\">";
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'errors');
            echo "</div>
    </div>
    </div>
    ";
        }
        // line 20
        echo "    
    ";
        // line 21
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'errors')) {
            // line 22
            echo "    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-primary mt-3\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        <div class=\"mb-0\">";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'errors');
            echo "</div>
    </div>
    </div>
    ";
        }
        // line 31
        echo "   
<div class=\"container mt-5 idee_liste_vote\">
   
    <div class=\"counter\">
        ";
        // line 35
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["listIdees"] ?? null)), "html", null, true);
        echo "&nbsp;<i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"></i>
    </div>
    
    <div class=\"grid\">
    <div class=\"grid-sizer col-md-4\"></div>
    
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listIdees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 42
            echo "       
        ";
            // line 43
            $context["typeCoeur"] = "fa fa-heart-o fa-2x";
            // line 44
            echo "        ";
            $context["classCoeur"] = "unliked";
            // line 45
            echo "       
        ";
            // line 46
            if (($context["user"] ?? null)) {
                // line 47
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["idee"], "coeurs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["coeur"]) {
                    // line 48
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($context["coeur"], "user", array()), "id", array()) == $this->getAttribute(($context["user"] ?? null), "id", array()))) {
                        // line 49
                        echo "                ";
                        $context["typeCoeur"] = "fa fa-heart fa-2x";
                        // line 50
                        echo "                ";
                        $context["classCoeur"] = "liked text-tertiary";
                        // line 51
                        echo "            ";
                    }
                    // line 52
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "        ";
            }
            // line 54
            echo "        
        <div class=\"grid-item col-md-4\">
        <div class=\"grid-item-content\">
        <div class=\"card mb-3\">
            
            <!-- <div class=\"card-header idee_header text-center\">
                Catégorie 
            </div> -->
            
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <h4 class=\"card-title mb-0\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
            echo "</h4>
                    ";
            // line 66
            if ($this->getAttribute($this->getAttribute($context["idee"], "categorie", array(), "any", false, true), "titre", array(), "any", true, true)) {
                // line 67
                echo "                    <strong class=\"text-primary border border-primary p-1 ml-3 category_size\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], "categorie", array()), "titre", array())), "html", null, true);
                echo "</strong>
                    ";
            }
            // line 69
            echo "                </div>
                <p class=\"card-text\">";
            // line 70
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true));
            echo "</p>
            </div>
            
            <hr class=\"hr_thin\">
            
            <div class=\"card-body py-2 card_infos\">
                <div class=\"d-flex justify-content-between align-items-center\">
                       
                    <div class=\"text-truncate\">
                        <span class=\"fa fa-user\"></span>&nbsp; ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], "user", array()), "username", array()), "html", null, true);
            echo "
                        ";
            // line 80
            if (($this->getAttribute($this->getAttribute($context["idee"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()))) {
                // line 81
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_edit_user", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
                echo "\" class=\"hidden_link cliquable ml-3\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                            <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_delete_user", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
                echo "\" class=\"hidden_link cliquable ml-3\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                        ";
            }
            // line 84
            echo "                    </div>
                    
                    ";
            // line 86
            if (($this->getAttribute(($context["espace"] ?? null), "withCoeurs", array()) == 1)) {
                // line 87
                echo "                    <div class=\"ml-auto d-flex justify-content-between align-items-center\">
                       
                        <span id=\"nblikes_";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "id", array()), "html", null, true);
                echo "\" class=\"mr-3 text-truncate\">
                            ";
                // line 90
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["idee"], "coeurs", array())), "html", null, true);
                echo " J'aime
                        </span>
                        
                        <span id=\"coeur_";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "id", array()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["classCoeur"] ?? null), "html", null, true);
                echo " text-tertiaryZZ\">
                            <span class=\"cliquable ";
                // line 94
                echo twig_escape_filter($this->env, ($context["typeCoeur"] ?? null), "html", null, true);
                echo "\"></span>
                        </span>
                        
                    </div>
                    ";
            }
            // line 99
            echo "                    
                </div>
            </div>
                
        </div>
        </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
    </div>
    
</div> 
   
<!-- Ajout idée ######################### -->
 
";
        // line 115
        if (($this->getAttribute(($context["espace"] ?? null), "withIdees", array()) == 1)) {
            // line 116
            echo "  
<button class=\"btn btn-tertiary button_fixed\" id=\"bouton_idee\" data-toggle=\"modal\" data-target=\"#modal_idee\">
    <span class=\"fa fa-plus fa-2x\"></span>
</button>

<!-- Modal nouvelle idée -->

<div class=\"modal fade\" id=\"modal_idee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
<div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">

        <div class=\"modal-header\">
            <h4 class=\"modal-title\" id=\"myModalLabel\">Proposez votre idée !</h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        
        <div class=\"modal-body\">
        ";
            // line 135
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
           
            ";
            // line 137
            if ($this->getAttribute(($context["form"] ?? null), "categorie", array(), "any", true, true)) {
                // line 138
                echo "            <div class=\"row\">
            <div class=\"mb-3 col-md-4\">";
                // line 139
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "categorie", array()), 'widget');
                echo "</div>
            </div>
            ";
            }
            // line 142
            echo "            
            <div class=\"mb-3\">";
            // line 143
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'widget');
            echo "</div>
            
            ";
            // line 145
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'errors');
            echo "
            
            
            <div class=\"mb-1\">";
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'widget');
            echo "</div>
            <div class=\"mb-3 text-right\"><span id=\"chars\">140</span> / 140</div>
            ";
            // line 150
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'errors');
            echo "
            
        <input type=\"submit\" value=\"Proposer !\" class=\"btn btn-primary\" />
        
        ";
            // line 154
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
        </div>

    </div>
</div>
</div>

";
        }
        // line 162
        echo "
<!-- Pied de page #########################    
    
<div class=\"jumbotron jumbotron-fluid mt-5 mb-0 row\">
<div class=\"container\">
<p>Vous avez terminé de voter ?</p>
<a class=\"btn btn-secondary\" href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\">Retour à l'accueil</a>
</div> 
</div> -->
    
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Espace:vote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 168,  336 => 162,  325 => 154,  318 => 150,  313 => 148,  307 => 145,  302 => 143,  299 => 142,  293 => 139,  290 => 138,  288 => 137,  283 => 135,  262 => 116,  260 => 115,  251 => 108,  237 => 99,  229 => 94,  223 => 93,  217 => 90,  213 => 89,  209 => 87,  207 => 86,  203 => 84,  198 => 82,  193 => 81,  191 => 80,  187 => 79,  175 => 70,  172 => 69,  166 => 67,  164 => 66,  160 => 65,  147 => 54,  144 => 53,  138 => 52,  135 => 51,  132 => 50,  129 => 49,  126 => 48,  121 => 47,  119 => 46,  116 => 45,  113 => 44,  111 => 43,  108 => 42,  104 => 41,  95 => 35,  89 => 31,  82 => 27,  75 => 22,  73 => 21,  70 => 20,  63 => 16,  56 => 11,  54 => 10,  51 => 9,  48 => 8,  40 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Espace:vote.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Espace/vote.html.twig");
    }
}
