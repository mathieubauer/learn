<?php

/* dswLearnBundle:Module:play.html.twig */
class __TwigTemplate_5e4608b7dc15dcf89b3b6f4e8c07ec26f15a9a9761d387ff3d175ac78e0ecd06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout_fluid.html.twig", "dswLearnBundle:Module:play.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_learn_content' => array($this, 'block_dsw_learn_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswLearnBundle::layout_fluid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Module:play.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Module:play.html.twig"));

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
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "name", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_learn_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_learn_content"));

        // line 4
        echo "  
<div class=\"row\">

";
        // line 8
        echo "
   
";
        // line 10
        echo "       
 
<nav class=\"col-md-3 col-lg-2 d-none d-md-block bg_sidebar sidebar\">
<div class=\"sidebar-sticky pb-5\">
   
    ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "logo", array())) {
            // line 16
            echo "    <div class=\"p-3\">
        <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "logo", array()), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"logo\">
    </div>
    ";
        }
        // line 20
        echo "
    <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted font-weight-bold\">
    <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "name", array()), "html", null, true);
        echo "</span>
    </h6>

    <ul class=\"nav flex-column\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sorted_modules"] ?? $this->getContext($context, "sorted_modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module_menu"]) {
            // line 27
            echo "    
    ";
            // line 28
            if ($this->getAttribute($context["module_menu"], "titre", array())) {
                // line 29
                echo "    
        <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted\">
        <span>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "name", array()), "html", null, true);
                echo "</span>
        </h6>
    
    ";
            } else {
                // line 35
                echo "    
        <li class=\"nav-item\">
            <a class=\"nav-link ";
                // line 37
                if ( !$this->getAttribute($context["module_menu"], "open", array())) {
                    echo "desactive";
                }
                echo " ";
                if (($context["module_menu"] == ($context["module"] ?? $this->getContext($context, "module")))) {
                    echo "active";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($context["module_menu"], "id", array()))), "html", null, true);
                echo "\">
                <div class=\"d-flex flex-row align-items-centerZZ\">
                   <span>
                        <i class=\"fas ";
                // line 40
                if ($this->getAttribute($context["module_menu"], "picto", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "picto", array()), "html", null, true);
                } else {
                    echo "fas fa-arrow-right";
                }
                echo " fa-fw mr-2\"></i>
                    </span>
                    <span>
                        ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "name", array()), "html", null, true);
                echo "
                    </span>
                </div>
            </a>
        </li>
    
    ";
            }
            // line 50
            echo "    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </ul>

</div>
</nav>


";
        // line 59
        echo "       
<main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10\">
<div class=\"row justify-content-center\">
<div class=\"col-md-8\">
    
    ";
        // line 65
        echo "    
        ";
        // line 67
        echo "        ";
        // line 68
        echo "        
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "learners", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["learner"]) {
            // line 70
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["learner"], "username", array()), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['learner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["units"] ?? $this->getContext($context, "units")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 74
            echo "          
            <div class=\"row\">
           
            ";
            // line 78
            echo "            ";
            // line 79
            echo "            
            ";
            // line 80
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 81
                echo "                <div class=\"col-md-10\">
            ";
            } else {
                // line 83
                echo "                <div class=\"col-12\">
            ";
            }
            // line 85
            echo "            
                ";
            // line 86
            echo twig_include($this->env, $context, "dswLearnBundle:Unit:loop.html.twig");
            echo "
            
            ";
            // line 88
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 89
                echo "                </div>
                <div class=\"col-md-2 text-right\">
                <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_edit", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn\"><i class=\"fas fa-edit\"></i></a>
                </div>
            ";
            } else {
                // line 94
                echo "                </div>
            ";
            }
            // line 96
            echo "            
            </div>
            
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 100
            echo "        
            <p>Il n'y a pas encore de contenus dans ce module.</p>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        
        ";
        // line 105
        if (($context["next"] ?? $this->getContext($context, "next"))) {
            // line 106
            echo "        <div class=\"text-right\">
        <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute(($context["next"] ?? $this->getContext($context, "next")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-learn my-3\">Continuer<i class=\"fas fa-caret-right ml-2\"></i></a>
        </div>
        ";
        }
        // line 110
        echo "        
        ";
        // line 111
        if ($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "chat", array())) {
            // line 112
            echo "        
        <div id=\"forum\" class=\"mt-4 p-4 bg_forum mb-5\">
        
        <h1>Commentaires</h1>

        <ul class=\"list-unstyled\">
        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "messages", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 119
                echo "            
            <li class=\"media mb-3\">
            <img class=\"d-flex mr-3 rounded-circle\" src=\"https://i2.wp.com/vivea.lecube.io/wp-content/themes/storyspooc2/library/images/cham_avatars/cham_avatar5.jpg\" alt=\"Generic placeholder image\" height=\"42\" width=\"42\">
            
            <div class=\"media-body\">
            
                <div class=\"d-flex justify-content-between align-items-center mb-1\">

                <strong class=\"font-weight-bold\">
                ";
                // line 128
                if ($this->getAttribute($this->getAttribute($context["message"], "user", array()), "firstname", array())) {
                    // line 129
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "user", array()), "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "user", array()), "lastname", array()), "html", null, true);
                    echo "
                ";
                } else {
                    // line 131
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "user", array()), "username", array()), "html", null, true);
                    echo "
                ";
                }
                // line 133
                echo "                </strong>

                <small class=\"text-muted\">Posté le ";
                // line 135
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", array()), "m/d/Y"), "html", null, true);
                echo "</small>

                </div>

                <p class=\"forum_texte mb-0 mt-1\">";
                // line 139
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", array()), "html", null, true));
                echo "</p>
            
            </div>
            </li>

            ";
                // line 164
                echo "
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 166
                echo "        
            <p>Personne n'a encore commenté ce module. Et si vous commenciez ?</p>
        
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "        </ul>
        
        ";
            // line 172
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 173
                echo "        ";
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_message"] ?? $this->getContext($context, "form_message")), 'form_start');
                echo "
        <div class=\" row d-flex justify-content-between align-self-center\">
            <div class=\"col-md-10\">
            ";
                // line 176
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_message"] ?? $this->getContext($context, "form_message")), "content", array()), 'widget');
                echo "
            </div>
            <button class=\"btn btn-secondary\" type=\"submit\">Envoyer</button>
            
        </div>
        ";
                // line 181
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_message"] ?? $this->getContext($context, "form_message")), 'form_end');
                echo "
        ";
            } else {
                // line 183
                echo "        
            <p>Vous devez être connecté pour contribuer. <a href=\"";
                // line 184
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_login", array("id" => $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "id", array()))), "html", null, true);
                echo "\" class=\"\">Allez !</a></p>
        
        ";
            }
            // line 187
            echo "        
        </div>
        
        ";
        }
        // line 191
        echo "        
        
        ";
        // line 193
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 194
            echo "            
            <hr>
            
            ";
            // line 197
            echo twig_include($this->env, $context, "dswLearnBundle:Unit:form_new.html.twig");
            echo "
            
            <a href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_build", array("id" => $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary my-3\">
                <i class=\"far fa-file fa-lg mr-2\"></i>Modifier le module
            </a>
            
            <a href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_build", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary my-3\">
                <i class=\"far fa-folder-open fa-lg mr-2\"></i>Modifier le cours
            </a>
            
        ";
        }
        // line 208
        echo "        
</div>
</div>

</main>   
</div>  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 217
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 218
        echo "
    ";
        // line 219
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "code", array()) == "es")) {
            // line 220
            echo "    <footer class=\"footer fixed-bottom bg-white text-center d-none justify-content-center align-items-center d-md-flex\">
        <span class=\"text-muted\">Entreprise&Société, le think lab d'</span>
        <img src=\"https://preview.ibb.co/nECCFT/logo_e_p_maigre_haute_def.jpg\" alt=\"E&P\" width=\"220\">
    </footer>
    ";
        }
        // line 225
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Module:play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 225,  495 => 220,  493 => 219,  490 => 218,  481 => 217,  465 => 208,  457 => 203,  450 => 199,  445 => 197,  440 => 194,  438 => 193,  434 => 191,  428 => 187,  422 => 184,  419 => 183,  414 => 181,  406 => 176,  399 => 173,  397 => 172,  393 => 170,  384 => 166,  378 => 164,  370 => 139,  363 => 135,  359 => 133,  353 => 131,  345 => 129,  343 => 128,  332 => 119,  327 => 118,  319 => 112,  317 => 111,  314 => 110,  308 => 107,  305 => 106,  303 => 105,  300 => 104,  291 => 100,  275 => 96,  271 => 94,  265 => 91,  261 => 89,  259 => 88,  254 => 86,  251 => 85,  247 => 83,  243 => 81,  241 => 80,  238 => 79,  236 => 78,  231 => 74,  213 => 73,  210 => 72,  201 => 70,  197 => 69,  194 => 68,  192 => 67,  189 => 65,  182 => 59,  174 => 52,  167 => 50,  157 => 43,  147 => 40,  133 => 37,  129 => 35,  122 => 31,  118 => 29,  116 => 28,  113 => 27,  109 => 26,  102 => 22,  98 => 20,  92 => 17,  89 => 16,  87 => 15,  80 => 10,  76 => 8,  71 => 4,  62 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswLearnBundle::layout_fluid.html.twig\" %}
{% block title %}{{ parent() }} - {{ module.course.name }}{% endblock %}
{% block dsw_learn_content %}
  
<div class=\"row\">

{# LE MENU COLLAPSABLE EST DANS LE LAYOUT #}

   
{# VOLET DE GAUCHE - NAV #}       
 
<nav class=\"col-md-3 col-lg-2 d-none d-md-block bg_sidebar sidebar\">
<div class=\"sidebar-sticky pb-5\">
   
    {% if module.course.logo %}
    <div class=\"p-3\">
        <img src=\"{{ module.course.logo }}\" class=\"img-fluid\" alt=\"logo\">
    </div>
    {% endif %}

    <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted font-weight-bold\">
    <span>{{ module.course.name }}</span>
    </h6>

    <ul class=\"nav flex-column\">
    {% for module_menu in sorted_modules %}
    
    {% if module_menu.titre %}
    
        <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted\">
        <span>{{ module_menu.name }}</span>
        </h6>
    
    {% else %}
    
        <li class=\"nav-item\">
            <a class=\"nav-link {% if not module_menu.open %}desactive{% endif %} {% if module_menu == module %}active{% endif %}\" href=\"{{ path('module_play', {'id': module_menu.id }) }}\">
                <div class=\"d-flex flex-row align-items-centerZZ\">
                   <span>
                        <i class=\"fas {% if module_menu.picto %}{{ module_menu.picto }}{% else %}fas fa-arrow-right{% endif %} fa-fw mr-2\"></i>
                    </span>
                    <span>
                        {{ module_menu.name }}
                    </span>
                </div>
            </a>
        </li>
    
    {% endif %}
    
    {% endfor %}
    </ul>

</div>
</nav>


{# ESPACE CENTRAL - MAIN #}
       
<main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10\">
<div class=\"row justify-content-center\">
<div class=\"col-md-8\">
    
    {# Affiche le module unique #}
    
        {# <h1>{{ module.course.name }}</h1> #}
        {# <h1>{{ module.name }}</h1> #}
        
        {% for learner in module.course.learners %}
        {{ learner.username }}
        {% endfor %}
        
        {% for unit in units %}
          
            <div class=\"row\">
           
            {# <hr> #}
            {# <h3>{{ unit.name }}</h3> #}
            
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"col-md-10\">
            {% else %}
                <div class=\"col-12\">
            {% endif %}
            
                {{ include(\"dswLearnBundle:Unit:loop.html.twig\") }}
            
            {% if is_granted('ROLE_ADMIN') %}
                </div>
                <div class=\"col-md-2 text-right\">
                <a href=\"{{ path('unit_edit', {'id': unit.id }) }}\" class=\"btn btn-learn\"><i class=\"fas fa-edit\"></i></a>
                </div>
            {% else %}
                </div>
            {% endif %}
            
            </div>
            
        {% else  %}
        
            <p>Il n'y a pas encore de contenus dans ce module.</p>
        
        {% endfor %}
        
        {% if next %}
        <div class=\"text-right\">
        <a href=\"{{ path('module_play', {'id': next.id }) }}\" class=\"btn btn-learn my-3\">Continuer<i class=\"fas fa-caret-right ml-2\"></i></a>
        </div>
        {% endif %}
        
        {% if module.chat %}
        
        <div id=\"forum\" class=\"mt-4 p-4 bg_forum mb-5\">
        
        <h1>Commentaires</h1>

        <ul class=\"list-unstyled\">
        {% for message in module.messages %}
            
            <li class=\"media mb-3\">
            <img class=\"d-flex mr-3 rounded-circle\" src=\"https://i2.wp.com/vivea.lecube.io/wp-content/themes/storyspooc2/library/images/cham_avatars/cham_avatar5.jpg\" alt=\"Generic placeholder image\" height=\"42\" width=\"42\">
            
            <div class=\"media-body\">
            
                <div class=\"d-flex justify-content-between align-items-center mb-1\">

                <strong class=\"font-weight-bold\">
                {% if message.user.firstname %}
                {{ message.user.firstname }} {{ message.user.lastname }}
                {% else %}
                {{ message.user.username }}
                {% endif %}
                </strong>

                <small class=\"text-muted\">Posté le {{ message.date|date(\"m/d/Y\") }}</small>

                </div>

                <p class=\"forum_texte mb-0 mt-1\">{{ message.content|nl2br }}</p>
            
            </div>
            </li>

            {#<div class=\"card-body\">

            <div class=\"d-flex justify-content-between align-items-center mb-1\">

            <strong class=\"\">
            {% if message.user.firstname %}
            {{ message.user.firstname }} {{ message.user.lastname }}
            {% else %}
            {{ message.user.username }}
            {% endif %}
            </strong>

            <small class=\"text-muted\">Posté le {{ message.date|date(\"m/d/Y\") }}</small>

            </div>

            <p class=\"forum_texte mb-0 mt-2\">{{ message.content|nl2br }}</p>

            </div>
            <hr class=\"hr_thin\"> #}

        {% else %}
        
            <p>Personne n'a encore commenté ce module. Et si vous commenciez ?</p>
        
        {% endfor %}
        </ul>
        
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {{ form_start(form_message) }}
        <div class=\" row d-flex justify-content-between align-self-center\">
            <div class=\"col-md-10\">
            {{ form_widget(form_message.content) }}
            </div>
            <button class=\"btn btn-secondary\" type=\"submit\">Envoyer</button>
            
        </div>
        {{ form_end(form_message) }}
        {% else %}
        
            <p>Vous devez être connecté pour contribuer. <a href=\"{{ path('module_login', {'id': module.id}) }}\" class=\"\">Allez !</a></p>
        
        {% endif %}
        
        </div>
        
        {% endif %}
        
        
        {% if is_granted('ROLE_ADMIN') %}
            
            <hr>
            
            {{ include(\"dswLearnBundle:Unit:form_new.html.twig\") }}
            
            <a href=\"{{ path('module_build', {'id': module.id}) }}\" class=\"btn btn-primary my-3\">
                <i class=\"far fa-file fa-lg mr-2\"></i>Modifier le module
            </a>
            
            <a href=\"{{ path('course_build', {'id': module.course.id}) }}\" class=\"btn btn-primary my-3\">
                <i class=\"far fa-folder-open fa-lg mr-2\"></i>Modifier le cours
            </a>
            
        {% endif %}
        
</div>
</div>

</main>   
</div>  
{% endblock %}


{% block footer %}

    {% if module.course.code == 'es' %}
    <footer class=\"footer fixed-bottom bg-white text-center d-none justify-content-center align-items-center d-md-flex\">
        <span class=\"text-muted\">Entreprise&Société, le think lab d'</span>
        <img src=\"https://preview.ibb.co/nECCFT/logo_e_p_maigre_haute_def.jpg\" alt=\"E&P\" width=\"220\">
    </footer>
    {% endif %}

{% endblock %}", "dswLearnBundle:Module:play.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Module/play.html.twig");
    }
}
