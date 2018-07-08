<?php

/* dswLearnBundle::layout_fluid.html.twig */
class __TwigTemplate_e1d0ca1f6f0f3f23d06e76a1cd962f749a08165b823f3834553786920fc2dfd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswLearnBundle::layout_fluid.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'opengraph' => array($this, 'block_opengraph'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'dsw_learn_content' => array($this, 'block_dsw_learn_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle::layout_fluid.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Learn by D-Sides";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_opengraph($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "opengraph"));

        // line 5
        echo "  
    <meta name=\"description\" content=\"Parce que l'outil le plus simple est toujours le meilleur, nous avons créé une plateforme d'apprentissage ultra simplifiée !\" />
   
    ";
        // line 8
        if (array_key_exists("module", $context)) {
            // line 9
            echo "    
    <meta property=\"og:locale\" content=\"fr_FR\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"Learn by D-Sides\" />
    <meta property=\"og:description\" content=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "name", array()), "html", null, true);
            echo "\" />
    <meta property=\"og:url\" content=\"http://ampli.live/learn/module/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "id", array()), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"http://ampli.live/web/bundles/dswampli/img/chaises.jpg\" />
    <meta property=\"og:site_name\" content=\"learn\" />
    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:description\" content=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "name", array()), "html", null, true);
            echo "\" />
    <meta name=\"twitter:title\" content=\"Learn by D-Sides\" />
    <meta name=\"twitter:site\" content=\"@dsideslab\" />
    <meta name=\"twitter:creator\" content=\"@dsideslab\" />
    
    ";
        } else {
            // line 24
            echo "    
    <meta property=\"og:locale\" content=\"fr_FR\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"Learn by D-Sides\" />
    <meta property=\"og:description\" content=\"Parce que l'outil le plus simple est toujours le meilleur, nous avons créé une plateforme d'apprentissage ultra simplifiée !\" />
    <meta property=\"og:url\" content=\"http://ampli.live/learn\" />
    <meta property=\"og:image\" content=\"http://ampli.live/web/bundles/dswampli/img/chaises.jpg\" />
    <meta property=\"og:site_name\" content=\"learn\" />
    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:description\" content=\"Parce que l'outil le plus simple est toujours le meilleur, nous avons créé une plateforme d'apprentissage ultra simplifiée !\" />
    <meta name=\"twitter:title\" content=\"Learn by D-Sides\" />
    <meta name=\"twitter:site\" content=\"@dsideslab\" />
    <meta name=\"twitter:creator\" content=\"@dsideslab\" />
    
    ";
        }
        // line 39
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 43
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/learn.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link href=\"https://fonts.googleapis.com/css?family=Megrim\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,700\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,700\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"https://unpkg.com/feather-icons/dist/feather.min.js\"></script>
<script defer src=\"https://use.fontawesome.com/releases/v5.0.7/js/all.js\"></script>
<script>
    feather.replace()
</script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 64
        echo "<header>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-learn fixed-top navbar-toggleable-md\">

    <!-- BOUTON MENU -->
    <button class=\"navbar-toggler d-md-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navMenu\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fas fa-bars\"></i>
    </button>


    <!-- TITRE -->
    ";
        // line 75
        if (array_key_exists("module", $context)) {
            // line 76
            echo "    <a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo "Learn by D-Sides</a>
    ";
        } else {
            // line 78
            echo "    <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage");
            echo "\">Learn by D-Sides</a>
    ";
        }
        // line 80
        echo "
    <!--
    <ul class=\"navbar-nav\">   
    ";
        // line 83
        if (array_key_exists("module", $context)) {
            // line 84
            echo "    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "name", array()), "html", null, true);
            echo "</a></li>
    ";
        } else {
            // line 86
            echo "    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage");
            echo "\">Accueil</a></li>
    ";
        }
        // line 88
        echo "    </ul>
    -->

    ";
        // line 91
        if (array_key_exists("module", $context)) {
            // line 92
            echo "    
    <!-- BOUTON USER -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fa fa-user-circle\"></i>
    </button>

    <!-- AFFICHAGE MENU -->
    <div class=\"d-md-none\">
    <div class=\"collapse navbar-collapse d-md-none\" id=\"navMenu\">
        <ul class=\"navbar-nav ml-auto\">   
        ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sorted_modules"] ?? $this->getContext($context, "sorted_modules")));
            foreach ($context['_seq'] as $context["_key"] => $context["module_menu"]) {
                // line 103
                echo "
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($context["module_menu"], "id", array()))), "html", null, true);
                echo "\">
                <div class=\"d-flex flex-row\">
                    ";
                // line 107
                if ($this->getAttribute($context["module_menu"], "titre", array())) {
                    // line 108
                    echo "                        <span class=\"font-weight-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "name", array()), "html", null, true);
                    echo "</span>
                    ";
                } else {
                    // line 110
                    echo "                        <span>
                            <i class=\"fas ";
                    // line 111
                    if ($this->getAttribute($context["module_menu"], "picto", array())) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "picto", array()), "html", null, true);
                    } else {
                        echo "fas fa-arrow-right";
                    }
                    echo " fa-fw mr-2\"></i>
                        </span>
                        <span>
                            ";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "name", array()), "html", null, true);
                    echo "
                        </span>
                    ";
                }
                // line 117
                echo "                </div>
            </a>
        </li>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module_menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "        </ul>
    </div>
    </div>
    
    ";
        }
        // line 127
        echo "    
    
    <!-- AFFICHAGE USER -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ml-auto\">   

            ";
        // line 133
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 134
            echo "
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa fa-user-circle\"></i> ";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_user_view", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mon compte</a>
                        ";
            // line 141
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 142
                echo "                        <a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_admin_index");
                echo "\">Administration</a>
                        ";
            }
            // line 144
            echo "                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_security_logout");
            echo "\">Déconnexion</a>
                    </div>
                </li>

            ";
        } else {
            // line 150
            echo "
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 151
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_security_login");
            echo "\">Connexion</a></li>

            ";
        }
        // line 154
        echo "
        </ul>
    </div>

</nav>

</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 163
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 164
        echo "<div class=\"main_container\">
  
    ";
        // line 167
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 168
            echo "    ";
            if (array_key_exists("espace", $context)) {
                // line 169
                echo "        ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "animateur", array()))) {
                    // line 170
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 172
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
                    echo "\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        ";
                }
                // line 176
                echo "    ";
            } elseif (array_key_exists("idee", $context)) {
                // line 177
                echo "        ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "animateur", array()))) {
                    // line 178
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 180
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        ";
                }
                // line 184
                echo "    ";
            }
            echo " 
    ";
        }
        // line 185
        echo " 
    
    
    ";
        // line 189
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 190
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 191
                echo "    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-";
                // line 192
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " mt-3\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
        </button>
        ";
                // line 196
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "    

    ";
        // line 204
        echo "    <div class=\"container-fluid my-md-5 my-3\">
    ";
        // line 205
        $this->displayBlock('dsw_learn_content', $context, $blocks);
        // line 207
        echo "    </div>
    
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 205
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_learn_content"));

        // line 206
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 214
    public function block_footer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswLearnBundle::layout_fluid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 214,  479 => 206,  473 => 205,  462 => 207,  460 => 205,  457 => 204,  453 => 201,  447 => 200,  437 => 196,  430 => 192,  427 => 191,  422 => 190,  417 => 189,  412 => 185,  406 => 184,  399 => 180,  395 => 178,  392 => 177,  389 => 176,  382 => 172,  378 => 170,  375 => 169,  372 => 168,  369 => 167,  365 => 164,  359 => 163,  345 => 154,  339 => 151,  336 => 150,  328 => 145,  325 => 144,  319 => 142,  317 => 141,  313 => 140,  307 => 137,  302 => 134,  300 => 133,  292 => 127,  285 => 122,  275 => 117,  269 => 114,  259 => 111,  256 => 110,  250 => 108,  248 => 107,  243 => 105,  239 => 103,  235 => 102,  223 => 92,  221 => 91,  216 => 88,  210 => 86,  202 => 84,  200 => 83,  195 => 80,  189 => 78,  182 => 76,  180 => 75,  167 => 64,  161 => 63,  146 => 52,  140 => 51,  128 => 45,  123 => 43,  117 => 42,  109 => 39,  92 => 24,  83 => 18,  76 => 14,  72 => 13,  66 => 9,  64 => 8,  59 => 5,  53 => 4,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswCoreBundle::base.html.twig\" %}
{% block title %}Learn by D-Sides{% endblock %}

{% block opengraph %}
  
    <meta name=\"description\" content=\"Parce que l'outil le plus simple est toujours le meilleur, nous avons créé une plateforme d'apprentissage ultra simplifiée !\" />
   
    {% if module is defined %}
    
    <meta property=\"og:locale\" content=\"fr_FR\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"Learn by D-Sides\" />
    <meta property=\"og:description\" content=\"{{ module.course.name }}\" />
    <meta property=\"og:url\" content=\"http://ampli.live/learn/module/{{ module.id }}\" />
    <meta property=\"og:image\" content=\"http://ampli.live/web/bundles/dswampli/img/chaises.jpg\" />
    <meta property=\"og:site_name\" content=\"learn\" />
    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:description\" content=\"{{ module.course.name }}\" />
    <meta name=\"twitter:title\" content=\"Learn by D-Sides\" />
    <meta name=\"twitter:site\" content=\"@dsideslab\" />
    <meta name=\"twitter:creator\" content=\"@dsideslab\" />
    
    {% else %}
    
    <meta property=\"og:locale\" content=\"fr_FR\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"Learn by D-Sides\" />
    <meta property=\"og:description\" content=\"Parce que l'outil le plus simple est toujours le meilleur, nous avons créé une plateforme d'apprentissage ultra simplifiée !\" />
    <meta property=\"og:url\" content=\"http://ampli.live/learn\" />
    <meta property=\"og:image\" content=\"http://ampli.live/web/bundles/dswampli/img/chaises.jpg\" />
    <meta property=\"og:site_name\" content=\"learn\" />
    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:description\" content=\"Parce que l'outil le plus simple est toujours le meilleur, nous avons créé une plateforme d'apprentissage ultra simplifiée !\" />
    <meta name=\"twitter:title\" content=\"Learn by D-Sides\" />
    <meta name=\"twitter:site\" content=\"@dsideslab\" />
    <meta name=\"twitter:creator\" content=\"@dsideslab\" />
    
    {% endif %}
    
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/dswampli/css/learn.css') }}\" type=\"text/css\" />
<link href=\"https://fonts.googleapis.com/css?family=Megrim\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,700\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,700\" rel=\"stylesheet\">
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://unpkg.com/feather-icons/dist/feather.min.js\"></script>
<script defer src=\"https://use.fontawesome.com/releases/v5.0.7/js/all.js\"></script>
<script>
    feather.replace()
</script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js\"></script>
{% endblock %}



{% block nav %}
<header>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-learn fixed-top navbar-toggleable-md\">

    <!-- BOUTON MENU -->
    <button class=\"navbar-toggler d-md-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navMenu\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fas fa-bars\"></i>
    </button>


    <!-- TITRE -->
    {% if module is defined %}
    <a class=\"navbar-brand\" href=\"{{ path('course_play', {'id': module.course.id}) }}\">{# module.course.name #}Learn by D-Sides</a>
    {% else %}
    <a class=\"navbar-brand\" href=\"{{ path('dsw_learn_homepage') }}\">Learn by D-Sides</a>
    {% endif %}

    <!--
    <ul class=\"navbar-nav\">   
    {% if module is defined %}
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('course_play', {'id': module.course.id}) }}\">{{ module.course.name }}</a></li>
    {% else %}
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('dsw_learn_homepage') }}\">Accueil</a></li>
    {% endif %}
    </ul>
    -->

    {% if module is defined %}
    
    <!-- BOUTON USER -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fa fa-user-circle\"></i>
    </button>

    <!-- AFFICHAGE MENU -->
    <div class=\"d-md-none\">
    <div class=\"collapse navbar-collapse d-md-none\" id=\"navMenu\">
        <ul class=\"navbar-nav ml-auto\">   
        {% for module_menu in sorted_modules %}

        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('module_play', {'id': module_menu.id }) }}\">
                <div class=\"d-flex flex-row\">
                    {% if module_menu.titre %}
                        <span class=\"font-weight-bold\">{{ module_menu.name }}</span>
                    {% else %}
                        <span>
                            <i class=\"fas {% if module_menu.picto %}{{ module_menu.picto }}{% else %}fas fa-arrow-right{% endif %} fa-fw mr-2\"></i>
                        </span>
                        <span>
                            {{ module_menu.name }}
                        </span>
                    {% endif %}
                </div>
            </a>
        </li>

        {% endfor %}
        </ul>
    </div>
    </div>
    
    {% endif %}
    
    
    <!-- AFFICHAGE USER -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ml-auto\">   

            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa fa-user-circle\"></i> {{ app.user.username }}
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('dsw_user_view', {'id': app.user.id}) }}\">Mon compte</a>
                        {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"dropdown-item\" href=\"{{ path('learn_admin_index') }}\">Administration</a>
                        {% endif %}
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"{{ path('learn_security_logout') }}\">Déconnexion</a>
                    </div>
                </li>

            {% else %}

                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('learn_security_login') }}\">Connexion</a></li>

            {% endif %}

        </ul>
    </div>

</nav>

</header>
{% endblock %}

{% block body %}
<div class=\"main_container\">
  
    {# Pour l'animateur #}
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    {% if espace is defined %}
        {% if app.user == espace.animateur %}
        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"{{ path('dsw_ampli_espace_animateur', {'id': espace.id}) }}\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        {% endif %}
    {% elseif idee is defined %}
        {% if app.user == idee.espace.animateur %}
        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"{{ path('dsw_ampli_espace_animateur', {'id': idee.espace.id}) }}\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        {% endif %}
    {% endif %} 
    {% endif %} 
    
    
    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, messages in app.session.flashbag.all() %}
    {% for message in messages %}
    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-{{ key }} mt-3\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
        </button>
        {{ message }}
    </div>
    </div>
    {% endfor %}
    {% endfor %}
    

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    <div class=\"container-fluid my-md-5 my-3\">
    {% block dsw_learn_content %}
    {% endblock %}
    </div>
    
    
</div>
{% endblock %}


{% block footer %}
{% endblock %}", "dswLearnBundle::layout_fluid.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/layout_fluid.html.twig");
    }
}
