<?php

/* dswAmpliBundle:Idee:public.html.twig */
class __TwigTemplate_7b3b3e5b4503a838cd7289f09d5791107a5de6f63dd4349fd13ef7c58d4d7c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout2.html.twig", "dswAmpliBundle:Idee:public.html.twig", 1);
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

        <div class=\"row mt-1\">
        <div class=\"offset-lg-2 col-lg-8\">

            <!-- ";
        // line 95
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 96
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_edit", array("id" => $this->getAttribute(($context["idee"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-tertiary button_fixed\">
            <span class=\"fa fa-pencil fa-2x\"></span>
            </a>
            ";
        }
        // line 99
        echo " -->

            ";
        // line 101
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 102
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_delete", array("id" => $this->getAttribute(($context["idee"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary mb-3\">Supprimer le projet</a>
            ";
        }
        // line 104
        echo "
            <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_propulse", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mb-3\">Retour aux projets</a>

        </div>
        </div>

    </div>
        
        
    ";
        // line 114
        echo "    
    ";
        // line 115
        if (($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withCommentaires", array()) || $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withTemps", array()))) {
            // line 116
            echo "    
    <div class=\"col-lg-4\">
        
        <div class=\"row\">
            
            <div class=\"col-lg-12\">
              
                ";
            // line 124
            echo "                <h1>Contribuez à ce projet !</h1>
                ";
            // line 125
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "publicQuestion", array())) {
                // line 126
                echo "                    <h3 class=\"soustitre\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "publicQuestion", array()), "html", null, true);
                echo "</h3>
                ";
            }
            // line 128
            echo "               
                <div class=\"mb-2\">
                
                ";
            // line 131
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 132
                echo "                <div class=\"d-flex justify-content-between\">
                
                    ";
                // line 139
                echo "                
                    ";
                // line 141
                echo "                    ";
                if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withCommentaires", array())) {
                    // line 142
                    echo "                
                    <button class=\"btn btn-primary mr-1\" id=\"bouton_commentaire\" data-toggle=\"modal\" data-target=\"#modalCommentaire\">
                        <span class=\"fa fa-bullhorn\"></span> Je commente
                    </button>
                    
                    <!-- Modal -->
                    
                    <div class=\"modal fade\" id=\"modalCommentaire\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">

                            <div class=\"modal-header\">
                                ";
                    // line 155
                    echo "                                <h4 class=\"modal-title\" id=\"myModalLabel\">À vous !</h4>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>

                            <div class=\"modal-body\">
                            ";
                    // line 162
                    echo                     $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_commentaire"] ?? null), 'form_start');
                    echo "
                                ";
                    // line 163
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_commentaire"] ?? null), "content", array()), 'widget');
                    echo "
                                <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary mt-3\" />
                            ";
                    // line 165
                    echo                     $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_commentaire"] ?? null), 'form_end');
                    echo "
                            </div>

                        </div>
                    </div>
                    </div>
                    ";
                }
                // line 172
                echo "                    
                    
                    ";
                // line 175
                echo "                    ";
                if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withTemps", array())) {
                    // line 176
                    echo "                
                    <button class=\"btn btn-primary mr-1\" id=\"bouton_participation\" data-toggle=\"modal\" data-target=\"#modalPart\">
                        <span class=\"fa fa-users\"></span> Je participe
                    </button>
                    
                    <!-- Modal -->
                    
                    <div class=\"modal fade\" id=\"modalPart\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">

                            <div class=\"modal-header\">
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Je donne du temps et des compétences</h4>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>

                            <div class=\"modal-body\">
                            ";
                    // line 195
                    echo                     $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_participation"] ?? null), 'form_start');
                    echo "
                                ";
                    // line 196
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form_participation"] ?? null), 'widget');
                    echo "
                                <input type=\"submit\" value=\"Je participe !\" class=\"btn btn-primary\" />
                            ";
                    // line 198
                    echo                     $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_participation"] ?? null), 'form_end');
                    echo "
                            </div>

                        </div>
                    </div>
                    </div>
                    ";
                }
                // line 205
                echo "                    
                    ";
                // line 211
                echo "                    
                </div>
                
                ";
            } else {
                // line 215
                echo "                
                    <p class=\"mb-1\">Vous devez être connecté·e pour contribuer</p>
                    <a href=\"";
                // line 217
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_public_connect", array("id" => $this->getAttribute(($context["idee"] ?? null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary mr-1 mb-3\">Je participe</a>
                
                ";
            }
            // line 220
            echo "
                </div>
                
                
                
                <div id=\"forum\" class=\"card mt-3\">
                
                <div class=\"card-header\"><strong class=\"col-xs-12\">Dernières contributions</strong></div>
                
                ";
            // line 229
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withTemps", array())) {
                // line 230
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["idee"] ?? null), "participations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
                    // line 231
                    echo "                
                    <div class=\"card-body\">
                    
                    <div class=\"d-flex justify-content-between align-items-center mb-1\">
                       
                        <strong class=\"\">
                        ";
                    // line 237
                    if ($this->getAttribute($this->getAttribute($context["participation"], "user", array()), "firstname", array())) {
                        // line 238
                        echo "                            <p class=\"mb-0\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "user", array()), "firstname", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "user", array()), "lastname", array()), "html", null, true);
                        echo "</p>
                        ";
                    } else {
                        // line 240
                        echo "                            <p class=\"mb-0\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["participation"], "user", array()), "username", array()), "html", null, true);
                        echo "</p>
                        ";
                    }
                    // line 242
                    echo "                        </strong>
                        
                        <strong class=\"text-primary\">";
                    // line 244
                    echo twig_escape_filter($this->env, $this->getAttribute($context["participation"], "temps", array()), "html", null, true);
                    echo "h</strong>
                        
                        ";
                    // line 249
                    echo "                        
                    </div>
                    
                    <p class=\"forum_texte mb-0 mt-2\">";
                    // line 252
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["participation"], "competence", array()), "html", null, true));
                    echo "</p>
                    
                    </div>
                    <hr class=\"hr_thin\">
                
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 258
                echo "                ";
            }
            // line 259
            echo "    
                ";
            // line 260
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withCommentaires", array())) {
                // line 261
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["idee"] ?? null), "commentaires", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 262
                    echo "                
                    <div class=\"card-body\">
                    
                        <div class=\"d-flex align-items-center mb-1\">

                            <strong class=\"\">
                            ";
                    // line 268
                    if ($this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "firstname", array())) {
                        // line 269
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "firstname", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "lastname", array()), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 271
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "username", array()), "html", null, true);
                        echo "
                            ";
                    }
                    // line 273
                    echo "                            </strong>
                            
                            ";
                    // line 275
                    if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
                        // line 276
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()))) {
                            // line 277
                            echo "                            <small class=\"ml-2\">
                                <a href=\"";
                            // line 278
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_edit", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                            echo "\" class=\"hidden_link cliquable\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                            </small>
                            <small class=\"ml-2\">
                                <a href=\"";
                            // line 281
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_delete", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                            echo "\" class=\"hidden_link cliquable\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                            </small>
                            ";
                        }
                        // line 284
                        echo "                            ";
                    }
                    // line 285
                    echo "                            
                            <small class=\"text-muted ml-auto\">Posté le ";
                    // line 286
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", array()), "d/m/Y"), "html", null, true);
                    echo "</small>
                            
                            ";
                    // line 289
                    echo "                            
                        </div>

                        <p class=\"forum_texte mb-0 mt-2\">";
                    // line 292
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "content", array()), "html", null, true));
                    echo "</p>
                    
                    </div>
                    <hr class=\"hr_thin\">
                
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 298
                echo "                ";
            }
            // line 299
            echo "                
                ";
            // line 300
            if ((twig_test_empty($this->getAttribute(($context["idee"] ?? null), "commentaires", array())) && twig_test_empty($this->getAttribute(($context["idee"] ?? null), "participations", array())))) {
                // line 301
                echo "                <div class=\"card-body\">
                    Il n'y a pas encore de contribution pour ce projet.
                </div>
                ";
            }
            // line 305
            echo "                
                </div>
                
                ";
            // line 352
            echo "                
            </div>
            
        </div>
        
    </div>
    
    ";
        }
        // line 359
        echo " ";
        // line 360
        echo "    
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Idee:public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 360,  600 => 359,  590 => 352,  585 => 305,  579 => 301,  577 => 300,  574 => 299,  571 => 298,  559 => 292,  554 => 289,  549 => 286,  546 => 285,  543 => 284,  537 => 281,  531 => 278,  528 => 277,  525 => 276,  523 => 275,  519 => 273,  513 => 271,  505 => 269,  503 => 268,  495 => 262,  490 => 261,  488 => 260,  485 => 259,  482 => 258,  470 => 252,  465 => 249,  460 => 244,  456 => 242,  450 => 240,  442 => 238,  440 => 237,  432 => 231,  427 => 230,  425 => 229,  414 => 220,  408 => 217,  404 => 215,  398 => 211,  395 => 205,  385 => 198,  380 => 196,  376 => 195,  355 => 176,  352 => 175,  348 => 172,  338 => 165,  333 => 163,  329 => 162,  320 => 155,  306 => 142,  303 => 141,  300 => 139,  296 => 132,  294 => 131,  289 => 128,  283 => 126,  281 => 125,  278 => 124,  269 => 116,  267 => 115,  264 => 114,  253 => 105,  250 => 104,  244 => 102,  242 => 101,  238 => 99,  230 => 96,  228 => 95,  220 => 89,  213 => 84,  207 => 82,  201 => 80,  199 => 79,  196 => 78,  190 => 76,  184 => 74,  182 => 73,  175 => 68,  173 => 67,  167 => 64,  164 => 63,  160 => 61,  154 => 59,  152 => 58,  147 => 56,  144 => 55,  140 => 53,  134 => 51,  132 => 50,  127 => 48,  124 => 47,  120 => 45,  114 => 43,  112 => 42,  104 => 36,  98 => 33,  95 => 32,  93 => 31,  89 => 30,  82 => 26,  78 => 25,  71 => 20,  65 => 18,  59 => 16,  57 => 15,  51 => 11,  45 => 6,  42 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Idee:public.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/public.html.twig");
    }
}
