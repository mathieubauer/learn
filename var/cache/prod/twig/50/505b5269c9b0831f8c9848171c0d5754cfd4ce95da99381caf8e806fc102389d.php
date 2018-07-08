<?php

/* dswAmpliBundle:Idee:print.html.twig */
class __TwigTemplate_d514654156538ff030b04c8d8b3ef751df52095146d7364574db515d55f2f08f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout2.html.twig", "dswAmpliBundle:Idee:print.html.twig", 1);
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
        echo " - Des idées aux projets";
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
    
    ";
        // line 11
        echo "
    <div class=\"col-lg-8\">
    <div class=\"card idee\">

        ";
        // line 15
        if ($this->getAttribute(($context["idee"] ?? null), "imgProjet", array())) {
            // line 16
            echo "            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute(($context["idee"] ?? null), "imgProjet", array()))), "idea_show"), "html", null, true);
            echo "\" alt=\"Image projet\">
        ";
        } else {
            // line 18
            echo "            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/placeholder_projet.jpg"), "html", null, true);
            echo "\" alt=\"Image projet\">
        ";
        }
        // line 20
        echo "        
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            <!-- <h4 class=\"theme\">Ici thème</h4> --> 
            <p class=\"titre_idee mb-3\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "titre", array()), "html", null, true);
        echo "</p>
            <!-- <p class=\"likes\">";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "coeurs", array())), "html", null, true);
        echo " <span class=\"fa fa-heart\"></span></p> -->
        </div>

        <div class=\"card-body p-5\">
            <p class=\"card-text lead\">";
        // line 30
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "description", array()), "html", null, true));
        echo "</p>
            ";
        // line 31
        if ($this->getAttribute(($context["idee"] ?? null), "video", array())) {
            // line 32
            echo "            <div class=\"embed-responsive embed-responsive-16by9 offset-lg-2 col-lg-8 border-vid\">
                <video controls id=\"vid\" class=\"embed-responsive-item\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "video", array()), "html", null, true);
            echo "\"></video>
            </div>
            ";
        }
        // line 36
        echo "        </div>

        <hr class=\"hr_thin\">

        <div class=\"card-body p-5\">
            <h3 class=\"mb-3\">
                ";
        // line 42
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "objectifsAlias", array())) {
            // line 43
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "objectifsAlias", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 45
            echo "                    Objectifs
                ";
        }
        // line 47
        echo "            </h3>
            <p class=\"mb-0\">";
        // line 48
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "objectifs", array()), "html", null, true));
        echo "</p>
            <h3 class=\"mt-4 mb-3\">
                ";
        // line 50
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "methodeAlias", array())) {
            // line 51
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "methodeAlias", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 53
            echo "                    Méthode
                ";
        }
        // line 55
        echo "            </h3>
            <p class=\"mb-0\">";
        // line 56
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "methode", array()), "html", null, true));
        echo "</p>
            <h3 class=\"mt-4 mb-3\">
                ";
        // line 58
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "calendrierAlias", array())) {
            // line 59
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "calendrierAlias", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 61
            echo "                    Calendrier
                ";
        }
        // line 63
        echo "            </h3>
            <p class=\"mb-0\">";
        // line 64
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "calendrier", array()), "html", null, true));
        echo "</p>
        </div>

        ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withEquipe", array())) {
            // line 68
            echo "        <hr class=\"hr_thin\">
        <div class=\"card-body p-5\">
            <h3>L'équipe</h3>
            <div class=\"col-md-6 col-xs-10 mx-auto\">
            <div class=\"card polaroid mb-3\">
                ";
            // line 73
            if ($this->getAttribute(($context["idee"] ?? null), "imgEquipe", array())) {
                // line 74
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("web/uploads/img/" . $this->getAttribute(($context["idee"] ?? null), "imgEquipe", array()))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"imageEquipe\">
                ";
            } else {
                // line 76
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/placeholder_team.jpg"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"imageEquipe\">
                ";
            }
            // line 78
            echo "                <div class=\"card-body\">
                ";
            // line 79
            if ($this->getAttribute(($context["idee"] ?? null), "equipe", array())) {
                // line 80
                echo "                    <p>Projet développé par ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "equipe", array()), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 82
                echo "                    <p>Idée proposée par ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "user", array()), "username", array()), "html", null, true);
                echo "</p>
                ";
            }
            // line 84
            echo "                </div>
            </div>
            </div>
        </div>
        ";
        }
        // line 89
        echo "
    </div>

    </div>
        
        
    ";
        // line 96
        echo "    
    ";
        // line 97
        if (($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withCommentaires", array()) || $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withTemps", array()))) {
            // line 98
            echo "    
    <div class=\"col-lg-4 mt-5\">
        
        <div class=\"row\">
            
            <div class=\"col-lg-12\">
              
                ";
            // line 106
            echo "                <h1 class=\"text-center\">Contributions</h1>
                ";
            // line 112
            echo "               
                
                
                
                
                <div id=\"forum\" class=\"card mt-3\">
                
                <div class=\"card-header\"><strong class=\"col-xs-12\">Dernières contributions</strong></div>
                
                ";
            // line 121
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withTemps", array())) {
                // line 122
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["idee"] ?? null), "participations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
                    // line 123
                    echo "                
                    <div class=\"card-body\">
                    
                    <div class=\"d-flex justify-content-between align-items-center mb-1\">
                       
                        <strong class=\"\">
                        ";
                    // line 129
                    if ($this->getAttribute($this->getAttribute($context["participation"], "user", array()), "firstname", array())) {
                        // line 130
                        echo "                            <p class=\"mb-0\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "user", array()), "firstname", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "user", array()), "lastname", array()), "html", null, true);
                        echo "</p>
                        ";
                    } else {
                        // line 132
                        echo "                            <p class=\"mb-0\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "user", array()), "username", array()), "html", null, true);
                        echo "</p>
                        ";
                    }
                    // line 134
                    echo "                        </strong>
                        
                        <strong class=\"text-primary\">";
                    // line 136
                    echo twig_escape_filter($this->env, $this->getAttribute($context["participation"], "temps", array()), "html", null, true);
                    echo "h</strong>
                        
                        ";
                    // line 141
                    echo "                        
                    </div>
                    
                    <p class=\"forum_texte mb-0 mt-2\">";
                    // line 144
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["participation"], "competence", array()), "html", null, true));
                    echo "</p>
                    
                    </div>
                    <hr class=\"hr_thin\">
                
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                ";
            }
            // line 151
            echo "    
                ";
            // line 152
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withCommentaires", array())) {
                // line 153
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["idee"] ?? null), "commentaires", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 154
                    echo "                
                    <div class=\"card-body\">
                    
                        <div class=\"d-flex align-items-center mb-1\">

                            <strong class=\"\">
                            ";
                    // line 160
                    if ($this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "firstname", array())) {
                        // line 161
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "firstname", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "lastname", array()), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 163
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "username", array()), "html", null, true);
                        echo "
                            ";
                    }
                    // line 165
                    echo "                            </strong>
                            
                            ";
                    // line 167
                    if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
                        // line 168
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()))) {
                            // line 169
                            echo "                            <small class=\"ml-2\">
                                <a href=\"";
                            // line 170
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_edit", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                            echo "\" class=\"hidden_link cliquable\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                            </small>
                            <small class=\"ml-2\">
                                <a href=\"";
                            // line 173
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_delete", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                            echo "\" class=\"hidden_link cliquable\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                            </small>
                            ";
                        }
                        // line 176
                        echo "                            ";
                    }
                    // line 177
                    echo "                            
                            <small class=\"text-muted ml-auto\">Posté le ";
                    // line 178
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", array()), "d/m/Y"), "html", null, true);
                    echo "</small>
                            
                            ";
                    // line 181
                    echo "                            
                        </div>

                        <p class=\"forum_texte mb-0 mt-2\">";
                    // line 184
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "content", array()), "html", null, true));
                    echo "</p>
                    
                    </div>
                    <hr class=\"hr_thin\">
                
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "                ";
            }
            // line 191
            echo "                
                ";
            // line 192
            if ((twig_test_empty($this->getAttribute(($context["idee"] ?? null), "commentaires", array())) && twig_test_empty($this->getAttribute(($context["idee"] ?? null), "participations", array())))) {
                // line 193
                echo "                <div class=\"card-body\">
                    Il n'y a pas encore de contribution pour ce projet.
                </div>
                ";
            }
            // line 197
            echo "                
                </div>
                
                ";
            // line 244
            echo "                
            </div>
            
        </div>
        
    </div>
    
    ";
        }
        // line 251
        echo " ";
        // line 252
        echo "    
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Idee:print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 252,  431 => 251,  421 => 244,  416 => 197,  410 => 193,  408 => 192,  405 => 191,  402 => 190,  390 => 184,  385 => 181,  380 => 178,  377 => 177,  374 => 176,  368 => 173,  362 => 170,  359 => 169,  356 => 168,  354 => 167,  350 => 165,  344 => 163,  336 => 161,  334 => 160,  326 => 154,  321 => 153,  319 => 152,  316 => 151,  313 => 150,  301 => 144,  296 => 141,  291 => 136,  287 => 134,  281 => 132,  273 => 130,  271 => 129,  263 => 123,  258 => 122,  256 => 121,  245 => 112,  242 => 106,  233 => 98,  231 => 97,  228 => 96,  220 => 89,  213 => 84,  207 => 82,  201 => 80,  199 => 79,  196 => 78,  190 => 76,  184 => 74,  182 => 73,  175 => 68,  173 => 67,  167 => 64,  164 => 63,  160 => 61,  154 => 59,  152 => 58,  147 => 56,  144 => 55,  140 => 53,  134 => 51,  132 => 50,  127 => 48,  124 => 47,  120 => 45,  114 => 43,  112 => 42,  104 => 36,  98 => 33,  95 => 32,  93 => 31,  89 => 30,  82 => 26,  78 => 25,  71 => 20,  65 => 18,  59 => 16,  57 => 15,  51 => 11,  45 => 6,  42 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Idee:print.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/print.html.twig");
    }
}
