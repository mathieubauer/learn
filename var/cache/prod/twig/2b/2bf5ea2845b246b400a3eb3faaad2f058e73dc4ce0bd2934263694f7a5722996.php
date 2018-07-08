<?php

/* dswAmpliBundle:Idee:view.html.twig */
class __TwigTemplate_e2e1b4cab8e72af0baf6c1d376851a8b0fd94e5526f021e0d111f308f9f272d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout2.html.twig", "dswAmpliBundle:Idee:view.html.twig", 1);
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
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "titre", array()), "html", null, true);
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
   
    <div class=\"row idee_page\">
    <div class=\"col-lg-8 mx-auto\">
    <div class=\"card idee\">
    
        ";
        // line 12
        if ($this->getAttribute(($context["idee"] ?? null), "imgProjet", array())) {
            // line 13
            echo "            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute(($context["idee"] ?? null), "imgProjet", array()))), "idea_show"), "html", null, true);
            echo "\" alt=\"Image projet\">
        ";
        } else {
            // line 15
            echo "            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/placeholder_projet.jpg"), "html", null, true);
            echo "\" alt=\"Image projet\">
        ";
        }
        // line 17
        echo "        
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            <!-- <h4 class=\"theme\">Ici thème</h4> --> 
            <p class=\"titre_idee mb-3\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "titre", array()), "html", null, true);
        echo "</p>
            <!-- <p class=\"likes\">";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "coeurs", array())), "html", null, true);
        echo " <span class=\"fa fa-heart\"></span></p> -->
        </div>
        
        <div class=\"card-body p-5\">
            <p class=\"card-text lead\">";
        // line 27
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "description", array()), "html", null, true));
        echo "</p>
            ";
        // line 28
        if ($this->getAttribute(($context["idee"] ?? null), "video", array())) {
            // line 29
            echo "            <div class=\"embed-responsive embed-responsive-16by9 offset-lg-2 col-lg-8 border-vid\">
                <video controls id=\"vid\" class=\"embed-responsive-item\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "video", array()), "html", null, true);
            echo "\"></video>
            </div>
            ";
        }
        // line 33
        echo "        </div>
        
        <hr class=\"hr_thin\">
        
        <div class=\"card-body p-5\">
            <h3 class=\"mb-3\">
                ";
        // line 39
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "objectifsAlias", array())) {
            // line 40
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "objectifsAlias", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 42
            echo "                    Objectifs
                ";
        }
        // line 44
        echo "            </h3>
            <p class=\"mb-0\">";
        // line 45
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "objectifs", array()), "html", null, true));
        echo "</p>
            <h3 class=\"mt-4 mb-3\">
                ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "methodeAlias", array())) {
            // line 48
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "methodeAlias", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 50
            echo "                    Méthode
                ";
        }
        // line 52
        echo "            </h3>
            <p class=\"mb-0\">";
        // line 53
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "methode", array()), "html", null, true));
        echo "</p>
            <h3 class=\"mt-4 mb-3\">
                ";
        // line 55
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "calendrierAlias", array())) {
            // line 56
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "calendrierAlias", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 58
            echo "                    Calendrier
                ";
        }
        // line 60
        echo "            </h3>
            <p class=\"mb-0\">";
        // line 61
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "calendrier", array()), "html", null, true));
        echo "</p>
        </div>
        
        ";
        // line 64
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withEquipe", array())) {
            // line 65
            echo "        <hr class=\"hr_thin\">
        <div class=\"card-body p-5\">
            <h3>L'équipe</h3>
            <div class=\"col-md-6 col-xs-10 mx-auto\">
            <div class=\"card polaroid mb-3\">
                ";
            // line 70
            if ($this->getAttribute(($context["idee"] ?? null), "imgEquipe", array())) {
                // line 71
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute(($context["idee"] ?? null), "imgEquipe", array()))), "equipe"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"imageEquipe\">
                ";
            } else {
                // line 73
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/placeholder_team.jpg"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"imageEquipe\">
                ";
            }
            // line 75
            echo "                <div class=\"card-body\">
                ";
            // line 76
            if ($this->getAttribute(($context["idee"] ?? null), "equipe", array())) {
                // line 77
                echo "                    <p>Projet développé par ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "equipe", array()), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 79
                echo "                    <p>Idée proposée par ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "user", array()), "username", array()), "html", null, true);
                echo "</p>
                ";
            }
            // line 81
            echo "                </div>
            </div>
            </div>
        </div>
        ";
        }
        // line 86
        echo "    
    </div>
    
        <div class=\"row mt-1\">
        <div class=\"offset-lg-2 col-lg-8\">
            
            ";
        // line 93
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_edit", array("id" => $this->getAttribute(($context["idee"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-tertiary button_fixed\">
            <span class=\"fa fa-pencil fa-2x\"></span>
            </a>
            ";
        // line 97
        echo "            
            ";
        // line 98
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || ($this->getAttribute(($context["app"] ?? null), "user", array()) == $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "animateur", array())))) {
            // line 99
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_delete", array("id" => $this->getAttribute(($context["idee"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary mb-3\">Supprimer le projet</a>
            ";
        }
        // line 101
        echo "            
            <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_develop", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mb-3\">Retour aux projets</a>

        </div>
        </div>
    
    
    </div>
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Idee:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 102,  243 => 101,  237 => 99,  235 => 98,  232 => 97,  225 => 93,  217 => 86,  210 => 81,  204 => 79,  198 => 77,  196 => 76,  193 => 75,  187 => 73,  181 => 71,  179 => 70,  172 => 65,  170 => 64,  164 => 61,  161 => 60,  157 => 58,  151 => 56,  149 => 55,  144 => 53,  141 => 52,  137 => 50,  131 => 48,  129 => 47,  124 => 45,  121 => 44,  117 => 42,  111 => 40,  109 => 39,  101 => 33,  95 => 30,  92 => 29,  90 => 28,  86 => 27,  79 => 23,  75 => 22,  68 => 17,  62 => 15,  56 => 13,  54 => 12,  46 => 6,  43 => 5,  38 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Idee:view.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/view.html.twig");
    }
}
