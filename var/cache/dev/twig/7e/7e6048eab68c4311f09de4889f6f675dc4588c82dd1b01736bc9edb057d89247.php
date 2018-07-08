<?php

/* dswAmpliBundle:Idee:public.html.twig */
class __TwigTemplate_bda81e45d6ce6b4d07ea62e40fcecb52a878be267f114d39b521b9d87c65229d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Idee:public.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswAmpliBundle:Idee:public.html.twig"));

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

        <div class=\"row mt-1\">
        <div class=\"offset-lg-2 col-lg-8\">

            <!-- ";
        // line 95
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 96
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_edit", array("id" => $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_delete", array("id" => $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary mb-3\">Supprimer le projet</a>
            ";
        }
        // line 104
        echo "
            <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_propulse", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mb-3\">Retour aux projets</a>

        </div>
        </div>

    </div>
        
        
    ";
        // line 114
        echo "    
    ";
        // line 115
        if (($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withCommentaires", array()) || $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withTemps", array()))) {
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
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "publicQuestion", array())) {
                // line 126
                echo "                    <h3 class=\"soustitre\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "publicQuestion", array()), "html", null, true);
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
                if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withCommentaires", array())) {
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
                    echo                     $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_commentaire"] ?? $this->getContext($context, "form_commentaire")), 'form_start');
                    echo "
                                ";
                    // line 163
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_commentaire"] ?? $this->getContext($context, "form_commentaire")), "content", array()), 'widget');
                    echo "
                                <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary mt-3\" />
                            ";
                    // line 165
                    echo                     $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_commentaire"] ?? $this->getContext($context, "form_commentaire")), 'form_end');
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
                if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withTemps", array())) {
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
                    echo                     $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_participation"] ?? $this->getContext($context, "form_participation")), 'form_start');
                    echo "
                                ";
                    // line 196
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form_participation"] ?? $this->getContext($context, "form_participation")), 'widget');
                    echo "
                                <input type=\"submit\" value=\"Je participe !\" class=\"btn btn-primary\" />
                            ";
                    // line 198
                    echo                     $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_participation"] ?? $this->getContext($context, "form_participation")), 'form_end');
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_public_connect", array("id" => $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "id", array()))), "html", null, true);
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
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withTemps", array())) {
                // line 230
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "participations", array()));
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
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "withCommentaires", array())) {
                // line 261
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "commentaires", array()));
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
                        if (($this->getAttribute($this->getAttribute($context["commentaire"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()))) {
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
            if ((twig_test_empty($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "commentaires", array())) && twig_test_empty($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "participations", array())))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  644 => 360,  642 => 359,  632 => 352,  627 => 305,  621 => 301,  619 => 300,  616 => 299,  613 => 298,  601 => 292,  596 => 289,  591 => 286,  588 => 285,  585 => 284,  579 => 281,  573 => 278,  570 => 277,  567 => 276,  565 => 275,  561 => 273,  555 => 271,  547 => 269,  545 => 268,  537 => 262,  532 => 261,  530 => 260,  527 => 259,  524 => 258,  512 => 252,  507 => 249,  502 => 244,  498 => 242,  492 => 240,  484 => 238,  482 => 237,  474 => 231,  469 => 230,  467 => 229,  456 => 220,  450 => 217,  446 => 215,  440 => 211,  437 => 205,  427 => 198,  422 => 196,  418 => 195,  397 => 176,  394 => 175,  390 => 172,  380 => 165,  375 => 163,  371 => 162,  362 => 155,  348 => 142,  345 => 141,  342 => 139,  338 => 132,  336 => 131,  331 => 128,  325 => 126,  323 => 125,  320 => 124,  311 => 116,  309 => 115,  306 => 114,  295 => 105,  292 => 104,  286 => 102,  284 => 101,  280 => 99,  272 => 96,  270 => 95,  262 => 89,  255 => 84,  249 => 82,  243 => 80,  241 => 79,  238 => 78,  232 => 76,  226 => 74,  224 => 73,  217 => 68,  215 => 67,  209 => 64,  206 => 63,  202 => 61,  196 => 59,  194 => 58,  189 => 56,  186 => 55,  182 => 53,  176 => 51,  174 => 50,  169 => 48,  166 => 47,  162 => 45,  156 => 43,  154 => 42,  146 => 36,  140 => 33,  137 => 32,  135 => 31,  131 => 30,  124 => 26,  120 => 25,  113 => 20,  107 => 18,  101 => 16,  99 => 15,  93 => 11,  87 => 6,  78 => 5,  61 => 3,  42 => 2,  11 => 1,);
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

        <div class=\"row mt-1\">
        <div class=\"offset-lg-2 col-lg-8\">

            <!-- {% if is_granted('ROLE_AUTEUR') %}
            <a href=\"{{ path('ampli_idee_edit', {'id': idee.id}) }}\" class=\"btn btn-tertiary button_fixed\">
            <span class=\"fa fa-pencil fa-2x\"></span>
            </a>
            {% endif %} -->

            {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('ampli_idee_delete', {'id': idee.id}) }}\" class=\"btn btn-primary mb-3\">Supprimer le projet</a>
            {% endif %}

            <a href=\"{{ path('dsw_ampli_propulse', {'id': idee.espace.id}) }}\" class=\"btn btn-dark mb-3\">Retour aux projets</a>

        </div>
        </div>

    </div>
        
        
    {# Partie droite ######################################## #}
    
    {% if idee.espace.withCommentaires or idee.espace.withTemps %}
    
    <div class=\"col-lg-4\">
        
        <div class=\"row\">
            
            <div class=\"col-lg-12\">
              
                {# <h1>Propulsez ce projet !</h1> #}
                <h1>Contribuez à ce projet !</h1>
                {% if idee.espace.publicQuestion %}
                    <h3 class=\"soustitre\">{{ idee.espace.publicQuestion }}</h3>
                {% endif %}
               
                <div class=\"mb-2\">
                
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <div class=\"d-flex justify-content-between\">
                
                    {# J'aime ########## 
                    <button class=\"btn btn-primary mr-1\" id=\"\" data-toggle=\"\" data-target=\"\">
                        <span class=\"fa fa-heart\"></span>
                    </button>
                    #}
                
                    {# Je commente ########## #}
                    {% if idee.espace.withCommentaires %}
                
                    <button class=\"btn btn-primary mr-1\" id=\"bouton_commentaire\" data-toggle=\"modal\" data-target=\"#modalCommentaire\">
                        <span class=\"fa fa-bullhorn\"></span> Je commente
                    </button>
                    
                    <!-- Modal -->
                    
                    <div class=\"modal fade\" id=\"modalCommentaire\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">

                            <div class=\"modal-header\">
                                {# <h4 class=\"modal-title\" id=\"myModalLabel\">Un avis ? Une suggestion ?</h4> #}
                                <h4 class=\"modal-title\" id=\"myModalLabel\">À vous !</h4>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>

                            <div class=\"modal-body\">
                            {{ form_start(form_commentaire) }}
                                {{ form_widget(form_commentaire.content) }}
                                <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary mt-3\" />
                            {{ form_end(form_commentaire) }}
                            </div>

                        </div>
                    </div>
                    </div>
                    {% endif %}
                    
                    
                    {# Je participe (temps et compétences) ########## #}
                    {% if idee.espace.withTemps %}
                
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
                            {{ form_start(form_participation) }}
                                {{ form_widget(form_participation) }}
                                <input type=\"submit\" value=\"Je participe !\" class=\"btn btn-primary\" />
                            {{ form_end(form_participation) }}
                            </div>

                        </div>
                    </div>
                    </div>
                    {% endif %}
                    
                    {# Je finance ########## 
                    <button class=\"btn btn-primary mr-1\" id=\"\" data-toggle=\"\" data-target=\"\">
                        <span class=\"fa fa-eur\"></span>
                    </button>
                    #}
                    
                </div>
                
                {% else %}
                
                    <p class=\"mb-1\">Vous devez être connecté·e pour contribuer</p>
                    <a href=\"{{ path('ampli_idee_public_connect', {'id': idee.id}) }}\" class=\"btn btn-primary mr-1 mb-3\">Je participe</a>
                
                {% endif %}

                </div>
                
                
                
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
{% endblock %}", "dswAmpliBundle:Idee:public.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/public.html.twig");
    }
}
