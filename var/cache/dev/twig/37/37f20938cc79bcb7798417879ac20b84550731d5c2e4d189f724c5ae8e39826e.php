<?php

/* dswAmpliBundle:Idee:print.html.twig */
class __TwigTemplate_102bfd20905d9c8610270970f812a31f4092402b4fc1e57596c97f958ddb8b42 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Idee:print.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Idee:print.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Des idées aux projets";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_jumbotron"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_jumbotron"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_ampli_content"));

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
        if ($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "imgProjet", array())) {
            // line 16
            echo "            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "imgProjet", array()))), "idea_show"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "titre", array()), "html", null, true);
        echo "</p>
            <!-- <p class=\"likes\">";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "coeurs", array())), "html", null, true);
        echo " <span class=\"fa fa-heart\"></span></p> -->
        </div>

        <div class=\"card-body p-5\">
            <p class=\"card-text lead\">";
        // line 30
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "description", array()), "html", null, true));
        echo "</p>
            ";
        // line 31
        if ($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "video", array())) {
            // line 32
            echo "            <div class=\"embed-responsive embed-responsive-16by9 offset-lg-2 col-lg-8 border-vid\">
                <video controls id=\"vid\" class=\"embed-responsive-item\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "video", array()), "html", null, true);
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
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "objectifsAlias", array())) {
            // line 43
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "objectifsAlias", array()), "html", null, true);
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
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "objectifs", array()), "html", null, true));
        echo "</p>
            <h3 class=\"mt-4 mb-3\">
                ";
        // line 50
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "methodeAlias", array())) {
            // line 51
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "methodeAlias", array()), "html", null, true);
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
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "methode", array()), "html", null, true));
        echo "</p>
            <h3 class=\"mt-4 mb-3\">
                ";
        // line 58
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "calendrierAlias", array())) {
            // line 59
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "calendrierAlias", array()), "html", null, true);
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
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "calendrier", array()), "html", null, true));
        echo "</p>
        </div>

        ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withEquipe", array())) {
            // line 68
            echo "        <hr class=\"hr_thin\">
        <div class=\"card-body p-5\">
            <h3>L'équipe</h3>
            <div class=\"col-md-6 col-xs-10 mx-auto\">
            <div class=\"card polaroid mb-3\">
                ";
            // line 73
            if ($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "imgEquipe", array())) {
                // line 74
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("web/uploads/img/" . $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "imgEquipe", array()))), "html", null, true);
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
            if ($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "equipe", array())) {
                // line 80
                echo "                    <p>Projet développé par ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "equipe", array()), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 82
                echo "                    <p>Idée proposée par ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "user", array()), "username", array()), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withCommentaires", array()) || $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withTemps", array()))) {
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
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withTemps", array())) {
                // line 122
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "participations", array()));
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
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withCommentaires", array())) {
                // line 153
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "commentaires", array()));
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
                        if (($this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()))) {
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
            if ((twig_test_empty($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "commentaires", array())) && twig_test_empty($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "participations", array())))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  475 => 252,  473 => 251,  463 => 244,  458 => 197,  452 => 193,  450 => 192,  447 => 191,  444 => 190,  432 => 184,  427 => 181,  422 => 178,  419 => 177,  416 => 176,  410 => 173,  404 => 170,  401 => 169,  398 => 168,  396 => 167,  392 => 165,  386 => 163,  378 => 161,  376 => 160,  368 => 154,  363 => 153,  361 => 152,  358 => 151,  355 => 150,  343 => 144,  338 => 141,  333 => 136,  329 => 134,  323 => 132,  315 => 130,  313 => 129,  305 => 123,  300 => 122,  298 => 121,  287 => 112,  284 => 106,  275 => 98,  273 => 97,  270 => 96,  262 => 89,  255 => 84,  249 => 82,  243 => 80,  241 => 79,  238 => 78,  232 => 76,  226 => 74,  224 => 73,  217 => 68,  215 => 67,  209 => 64,  206 => 63,  202 => 61,  196 => 59,  194 => 58,  189 => 56,  186 => 55,  182 => 53,  176 => 51,  174 => 50,  169 => 48,  166 => 47,  162 => 45,  156 => 43,  154 => 42,  146 => 36,  140 => 33,  137 => 32,  135 => 31,  131 => 30,  124 => 26,  120 => 25,  113 => 20,  107 => 18,  101 => 16,  99 => 15,  93 => 11,  87 => 6,  78 => 5,  61 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswAmpliBundle::layout2.html.twig\" %}
{% block title %}{{ parent() }} - Des idées aux projets{% endblock %}
{% block dsw_ampli_jumbotron %}{% endblock %}

{% block dsw_ampli_content %}
<div class=\"container my-5\">
   
    <div class=\"row idee_page\">
    
    {# Partie gauche ######################################## #}

    <div class=\"col-lg-8\">
    <div class=\"card idee\">

        {% if idee.imgProjet %}
            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"{{ asset('/uploads/img/' ~ idee.imgProjet) | imagine_filter('idea_show') }}\" alt=\"Image projet\">
        {% else %}
            <img class=\"card-img img-fluid cover_300 pos_a\" src=\"{{ asset('bundles/dswampli/img/placeholder_projet.jpg') }}\" alt=\"Image projet\">
        {% endif %}
        
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            <!-- <h4 class=\"theme\">Ici thème</h4> --> 
            <p class=\"titre_idee mb-3\">{{ idee.titre }}</p>
            <!-- <p class=\"likes\">{{ idee.coeurs|length }} <span class=\"fa fa-heart\"></span></p> -->
        </div>

        <div class=\"card-body p-5\">
            <p class=\"card-text lead\">{{ idee.description|nl2br }}</p>
            {% if idee.video %}
            <div class=\"embed-responsive embed-responsive-16by9 offset-lg-2 col-lg-8 border-vid\">
                <video controls id=\"vid\" class=\"embed-responsive-item\" src=\"{{ idee.video }}\"></video>
            </div>
            {% endif %}
        </div>

        <hr class=\"hr_thin\">

        <div class=\"card-body p-5\">
            <h3 class=\"mb-3\">
                {% if idee.espace.objectifsAlias %}
                    {{ idee.espace.objectifsAlias }}
                {% else %}
                    Objectifs
                {% endif %}
            </h3>
            <p class=\"mb-0\">{{ idee.objectifs|nl2br }}</p>
            <h3 class=\"mt-4 mb-3\">
                {% if idee.espace.methodeAlias %}
                    {{ idee.espace.methodeAlias }}
                {% else %}
                    Méthode
                {% endif %}
            </h3>
            <p class=\"mb-0\">{{ idee.methode|nl2br }}</p>
            <h3 class=\"mt-4 mb-3\">
                {% if idee.espace.calendrierAlias %}
                    {{ idee.espace.calendrierAlias }}
                {% else %}
                    Calendrier
                {% endif %}
            </h3>
            <p class=\"mb-0\">{{ idee.calendrier|nl2br }}</p>
        </div>

        {% if idee.espace.withEquipe %}
        <hr class=\"hr_thin\">
        <div class=\"card-body p-5\">
            <h3>L'équipe</h3>
            <div class=\"col-md-6 col-xs-10 mx-auto\">
            <div class=\"card polaroid mb-3\">
                {% if idee.imgEquipe %}
                    <img src=\"{{ asset('web/uploads/img/' ~ idee.imgEquipe) }}\" class=\"card-img-top\" alt=\"imageEquipe\">
                {% else %}
                    <img src=\"{{ asset('bundles/dswampli/img/placeholder_team.jpg') }}\" class=\"card-img-top\" alt=\"imageEquipe\">
                {% endif %}
                <div class=\"card-body\">
                {% if idee.equipe %}
                    <p>Projet développé par {{ idee.equipe }}</p>
                {% else %}
                    <p>Idée proposée par {{ idee.user.username }}</p>
                {% endif %}
                </div>
            </div>
            </div>
        </div>
        {% endif %}

    </div>

    </div>
        
        
    {# Partie droite ######################################## #}
    
    {% if idee.espace.withCommentaires or idee.espace.withTemps %}
    
    <div class=\"col-lg-4 mt-5\">
        
        <div class=\"row\">
            
            <div class=\"col-lg-12\">
              
                {# <h1>Propulsez ce projet !</h1> #}
                <h1 class=\"text-center\">Contributions</h1>
                {#
                {% if idee.espace.publicQuestion %}
                    <h3 class=\"soustitre\">{{ idee.espace.publicQuestion }}</h3>
                {% endif %}
                #}
               
                
                
                
                
                <div id=\"forum\" class=\"card mt-3\">
                
                <div class=\"card-header\"><strong class=\"col-xs-12\">Dernières contributions</strong></div>
                
                {% if idee.espace.withTemps %}
                {% for participation in idee.participations %}
                
                    <div class=\"card-body\">
                    
                    <div class=\"d-flex justify-content-between align-items-center mb-1\">
                       
                        <strong class=\"\">
                        {% if participation.user.firstname %}
                            <p class=\"mb-0\">{{ participation.user.firstname }} {{ participation.user.lastname }}</p>
                        {% else %}
                            <p class=\"mb-0\">{{ participation.user.username }}</p>
                        {% endif %}
                        </strong>
                        
                        <strong class=\"text-primary\">{{ participation.temps }}h</strong>
                        
                        {# <small class=\"text-muted\">Posté le 31/12/18</small>
                        
                        <strong class=\"text-primary border border-primary contribution_size\">{{ participation.temps }} h</strong> #}
                        
                    </div>
                    
                    <p class=\"forum_texte mb-0 mt-2\">{{ participation.competence|nl2br }}</p>
                    
                    </div>
                    <hr class=\"hr_thin\">
                
                {% endfor %}
                {% endif %}
    
                {% if idee.espace.withCommentaires %}
                {% for commentaire in idee.commentaires %}
                
                    <div class=\"card-body\">
                    
                        <div class=\"d-flex align-items-center mb-1\">

                            <strong class=\"\">
                            {% if commentaire.user.firstname %}
                                {{ commentaire.user.firstname }} {{ commentaire.user.lastname }}
                            {% else %}
                                {{ commentaire.user.username }}
                            {% endif %}
                            </strong>
                            
                            {% if app.user.username is defined %}
                            {% if commentaire.user.username == app.user.username %}
                            <small class=\"ml-2\">
                                <a href=\"{{ path('commentaire_edit', {'id': commentaire.id}) }}\" class=\"hidden_link cliquable\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                            </small>
                            <small class=\"ml-2\">
                                <a href=\"{{ path('commentaire_delete', {'id': commentaire.id}) }}\" class=\"hidden_link cliquable\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                            </small>
                            {% endif %}
                            {% endif %}
                            
                            <small class=\"text-muted ml-auto\">Posté le {{ commentaire.date|date(\"d/m/Y\") }}</small>
                            
                            {# <strong class=\"text-primary border border-primary contribution_size\"><i class=\"fa fa-lightbulb-o\"></i></strong> #}
                            
                        </div>

                        <p class=\"forum_texte mb-0 mt-2\">{{ commentaire.content|nl2br }}</p>
                    
                    </div>
                    <hr class=\"hr_thin\">
                
                {% endfor %}
                {% endif %}
                
                {% if idee.commentaires is empty and idee.participations is empty %}
                <div class=\"card-body\">
                    Il n'y a pas encore de contribution pour ce projet.
                </div>
                {% endif %}
                
                </div>
                
                {# Panel énergie 
                <div class=\"card mt-2\">
                <div class=\"card-header\"><strong class=\"col-xs-12\">Energie</strong></div>
                   
                    <div class=\"card-block\">
                        <div class=\"meter dark\" style=\"width: 100%;\">
                            <span style=\"width: <?php echo (\$idee->getEnergie() + \$energieMax * 0.1) / \$energieMax * 85; ?>%;\"></span>
                        </div> 
                    </div>
                    
                    
                    <div class=\"card-block\">
                        <div class=\"row vdivide\">
                            <div class=\"col-md-4 text-xs-center\">12 <span class=\"fa fa-heart\"></span></div>
                            <div class=\"col-md-4 text-xs-center\">12 heure(s)</div>
                            <div class=\"col-md-4 text-xs-center\">12 000 €</div>
                        </div>
                    </div>
                    
                </div> -->
                
                <!-- Panel contributions 
                <div class=\"card mt-2\">
                <div class=\"card-header\"><strong class=\"col-xs-12\">Contributions</strong></div>
                <?php foreach (\$financements as \$financement) { ?>
                
                    <div class=\"card-block\">
                    <span class=\"offset-xs-8 col-xs-4\"><?= nl2br(\$financement->getMontant()); ?> 000 €</span>
                    </div>
                    <hr class=\"hr_thin\">
                
                <?php } ?>
                
                <?php foreach (\$participations as \$participation) { ?>
                
                    <div class=\"card-block\">
                    <span class=\"col-xs-8\"><?= nl2br(\$participation->getCompetences()); ?></span>
                    <span class=\"col-xs-4\"><?= \$participation->getTemps(); ?> heure(s)</span>
                    </div>
                    <hr class=\"hr_thin\">
                
                <?php } ?>
                </div> 
                #}
                
            </div>
            
        </div>
        
    </div>
    
    {% endif %} {# Fin de la condition : Si rien à faire apparaître à droite #}
    
    </div>
    
</div>
{% endblock %}", "dswAmpliBundle:Idee:print.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/print.html.twig");
    }
}
