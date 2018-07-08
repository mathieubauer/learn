<?php

/* dswLearnBundle::layout_nocontainer.html.twig */
class __TwigTemplate_6b6d31b0b55c6d1e791a03cf1984ce667758ed2cb79cc2bd3f661090c46531e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswLearnBundle::layout_nocontainer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'opengraph' => array($this, 'block_opengraph'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'dsw_learn_content' => array($this, 'block_dsw_learn_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Learn by D-Sides";
    }

    // line 4
    public function block_opengraph($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "name", array()), "html", null, true);
            echo "\" />
    <meta property=\"og:url\" content=\"http://ampli.live/learn/module/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "id", array()), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"http://ampli.live/web/bundles/dswampli/img/chaises.jpg\" />
    <meta property=\"og:site_name\" content=\"learn\" />
    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:description\" content=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "name", array()), "html", null, true);
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
    }

    // line 42
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    // line 63
    public function block_nav($context, array $blocks = array())
    {
        // line 64
        echo "<header>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-learn fixed-top navbar-toggleable-md\">

";
        // line 68
        if (array_key_exists("module", $context)) {
            // line 69
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo "Learn by D-Sides</a>
";
        } else {
            // line 71
            echo "<a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage");
            echo "\">Learn by D-Sides</a>
";
        }
        // line 73
        echo "  
<!--
<ul class=\"navbar-nav\">   
";
        // line 76
        if (array_key_exists("module", $context)) {
            // line 77
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "name", array()), "html", null, true);
            echo "</a></li>
";
        } else {
            // line 79
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage");
            echo "\">Accueil</a></li>
";
        }
        // line 81
        echo "</ul>
-->

<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <i class=\"fa fa-user-circle\"></i>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">   

        ";
        // line 91
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 92
            echo "           
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-user-circle\"></i> ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_user_view", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mon compte</a>
                    ";
            // line 99
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 100
                echo "                    <a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_admin_index");
                echo "\">Administration</a>
                    ";
            }
            // line 102
            echo "                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_security_logout");
            echo "\">Déconnexion</a>
                </div>
            </li>
           
        ";
        } else {
            // line 108
            echo "           
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 109
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_security_login");
            echo "\">Connexion</a></li>
            
        ";
        }
        // line 112
        echo "        
    </ul>
</div>
</nav>

</header>
";
    }

    // line 120
    public function block_body($context, array $blocks = array())
    {
        // line 121
        echo "  
    ";
        // line 123
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 124
            echo "    ";
            if (array_key_exists("espace", $context)) {
                // line 125
                echo "        ";
                if (($this->getAttribute(($context["app"] ?? null), "user", array()) == $this->getAttribute(($context["espace"] ?? null), "animateur", array()))) {
                    // line 126
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
                    echo "\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        ";
                }
                // line 132
                echo "    ";
            } elseif (array_key_exists("idee", $context)) {
                // line 133
                echo "        ";
                if (($this->getAttribute(($context["app"] ?? null), "user", array()) == $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "animateur", array()))) {
                    // line 134
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        ";
                }
                // line 140
                echo "    ";
            }
            echo " 
    ";
        }
        // line 141
        echo " 
    
    
    ";
        // line 145
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 146
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 147
                echo "    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-";
                // line 148
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " mt-3\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
        </button>
        ";
                // line 152
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "    

    ";
        // line 160
        echo "    ";
        $this->displayBlock('dsw_learn_content', $context, $blocks);
        // line 162
        echo "
";
    }

    // line 160
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        // line 161
        echo "    ";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle::layout_nocontainer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 161,  344 => 160,  339 => 162,  336 => 160,  332 => 157,  326 => 156,  316 => 152,  309 => 148,  306 => 147,  301 => 146,  296 => 145,  291 => 141,  285 => 140,  278 => 136,  274 => 134,  271 => 133,  268 => 132,  261 => 128,  257 => 126,  254 => 125,  251 => 124,  248 => 123,  245 => 121,  242 => 120,  232 => 112,  226 => 109,  223 => 108,  215 => 103,  212 => 102,  206 => 100,  204 => 99,  200 => 98,  194 => 95,  189 => 92,  187 => 91,  175 => 81,  169 => 79,  161 => 77,  159 => 76,  154 => 73,  148 => 71,  141 => 69,  139 => 68,  133 => 64,  130 => 63,  118 => 52,  115 => 51,  106 => 45,  101 => 43,  98 => 42,  93 => 39,  76 => 24,  67 => 18,  60 => 14,  56 => 13,  50 => 9,  48 => 8,  43 => 5,  40 => 4,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle::layout_nocontainer.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/layout_nocontainer.html.twig");
    }
}
