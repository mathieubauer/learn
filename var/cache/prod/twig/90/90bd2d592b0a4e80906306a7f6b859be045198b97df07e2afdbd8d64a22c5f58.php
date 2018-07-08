<?php

/* dswLearnBundle::layout.html.twig */
class __TwigTemplate_8725b92a8a365feacf087e45adcc39709f0a34290a901584508624094e19a606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswLearnBundle::layout.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle::layout.html.twig"));

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

    // line 64
    public function block_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 65
        echo "<header>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-learn fixed-top navbar-toggleable-md\">

";
        // line 69
        if (array_key_exists("module", $context)) {
            // line 70
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo "Learn by D-Sides</a>
";
        } else {
            // line 72
            echo "<a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage");
            echo "\">Learn by D-Sides</a>
";
        }
        // line 74
        echo "  
<!--
<ul class=\"navbar-nav\">   
";
        // line 77
        if (array_key_exists("module", $context)) {
            // line 78
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "course", array()), "name", array()), "html", null, true);
            echo "</a></li>
";
        } else {
            // line 80
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage");
            echo "\">Accueil</a></li>
";
        }
        // line 82
        echo "</ul>
-->

<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <i class=\"fa fa-user-circle\"></i>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">   
            
        ";
        // line 92
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 93
            echo "           
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-user-circle\"></i> ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_user_view", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mon compte</a>
                    ";
            // line 100
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 101
                echo "                    <a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_admin_index");
                echo "\">Administration</a>
                    ";
            }
            // line 103
            echo "                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_security_logout");
            echo "\">Déconnexion</a>
                </div>
            </li>
           
        ";
        } else {
            // line 109
            echo "           
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_security_login");
            echo "\">Connexion</a></li>
            
        ";
        }
        // line 113
        echo "        
    </ul>
</div>
</nav>

</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 121
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 122
        echo "<div class=\"main_container\">
  
    ";
        // line 125
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 126
            echo "    ";
            if (array_key_exists("espace", $context)) {
                // line 127
                echo "        ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "animateur", array()))) {
                    // line 128
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 130
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
                    echo "\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        ";
                }
                // line 134
                echo "    ";
            } elseif (array_key_exists("idee", $context)) {
                // line 135
                echo "        ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "animateur", array()))) {
                    // line 136
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        ";
                }
                // line 142
                echo "    ";
            }
            echo " 
    ";
        }
        // line 143
        echo " 
    
    
    
    ";
        // line 148
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 149
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 150
                echo "    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-";
                // line 151
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " mt-3\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
        </button>
        ";
                // line 155
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    

    ";
        // line 163
        echo "    <div class=\"container my-5\">
    ";
        // line 164
        $this->displayBlock('dsw_learn_content', $context, $blocks);
        // line 166
        echo "    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 164
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_learn_content"));

        // line 165
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswLearnBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 165,  393 => 164,  383 => 166,  381 => 164,  378 => 163,  374 => 160,  368 => 159,  358 => 155,  351 => 151,  348 => 150,  343 => 149,  338 => 148,  332 => 143,  326 => 142,  319 => 138,  315 => 136,  312 => 135,  309 => 134,  302 => 130,  298 => 128,  295 => 127,  292 => 126,  289 => 125,  285 => 122,  279 => 121,  266 => 113,  260 => 110,  257 => 109,  249 => 104,  246 => 103,  240 => 101,  238 => 100,  234 => 99,  228 => 96,  223 => 93,  221 => 92,  209 => 82,  203 => 80,  195 => 78,  193 => 77,  188 => 74,  182 => 72,  175 => 70,  173 => 69,  167 => 65,  161 => 64,  145 => 52,  139 => 51,  127 => 45,  122 => 43,  116 => 42,  108 => 39,  91 => 24,  82 => 18,  75 => 14,  71 => 13,  65 => 9,  63 => 8,  58 => 5,  52 => 4,  40 => 2,  11 => 1,);
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

<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <i class=\"fa fa-user-circle\"></i>
</button>

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
    <div class=\"container my-5\">
    {% block dsw_learn_content %}
    {% endblock %}
    </div>

</div>
{% endblock %}", "dswLearnBundle::layout.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/layout.html.twig");
    }
}
