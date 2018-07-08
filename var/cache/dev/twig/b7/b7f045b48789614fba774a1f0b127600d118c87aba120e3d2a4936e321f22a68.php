<?php

/* dswEvalBundle::layout.html.twig */
class __TwigTemplate_30e941363041073aef2ace38fd6d41dced4ab626b79015b5df5e3232c38566e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswEvalBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'dsw_eval_content' => array($this, 'block_dsw_eval_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswEvalBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswEvalBundle::layout.html.twig"));

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

        echo "360 by D-Sides";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/learn.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link href=\"https://fonts.googleapis.com/css?family=Megrim\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,700\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_nav($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 12
        echo "<header>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-learn fixed-top navbar-toggleable-md\">

";
        // line 16
        if ($this->getAttribute(($context["espace"] ?? null), "id", array(), "any", true, true)) {
            // line 17
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
            echo "\">360 by D-Sides</a>
";
        } elseif ($this->getAttribute($this->getAttribute(        // line 18
($context["idee"] ?? null), "espace", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 19
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "id", array()))), "html", null, true);
            echo "\">360 by D-Sides</a>
";
        } else {
            // line 21
            echo "<a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_eval_start");
            echo "\">360 by D-Sides</a>
";
        }
        // line 23
        echo "
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <i class=\"fa fa-user-circle\"></i>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">   
        
        ";
        // line 31
        if ($this->getAttribute(($context["espace"] ?? null), "id", array(), "any", true, true)) {
            // line 32
            echo "        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
            echo "\">Accueil</a></li>
        ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 33
($context["idee"] ?? null), "espace", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 34
            echo "        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "id", array()))), "html", null, true);
            echo "\">Accueil</a></li>
        ";
        } else {
            // line 36
            echo "        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage");
            echo "\">Accueil</a></li>
        ";
        }
        // line 38
        echo "            
        ";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "           
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-user-circle\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_user_view", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mon compte</a>
                    ";
            // line 47
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 48
                echo "                    <a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin");
                echo "\">Administration</a>
                    ";
            }
            // line 50
            echo "                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                </div>
            </li>
           
        ";
        } else {
            // line 56
            echo "           
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
            
        ";
        }
        // line 60
        echo "        
    </ul>
</div>
</nav>

</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "  
    ";
        // line 71
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 72
            echo "    ";
            if (array_key_exists("espace", $context)) {
                // line 73
                echo "        ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "animateur", array()))) {
                    // line 74
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
                    echo "\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        ";
                }
                // line 80
                echo "    ";
            } elseif (array_key_exists("idee", $context)) {
                // line 81
                echo "        ";
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "animateur", array()))) {
                    // line 82
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        ";
                }
                // line 88
                echo "    ";
            }
            echo " 
    ";
        }
        // line 89
        echo " 
    
    
    <div class=\"container-fluid\">
    ";
        // line 94
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 95
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 96
                echo "    <div class=\"alert alert-dismissible fade show alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " mt-3\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
        </button>
        ";
                // line 100
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </div>

    ";
        // line 107
        echo "    <div class=\"container my-5\">
    ";
        // line 108
        $this->displayBlock('dsw_eval_content', $context, $blocks);
        // line 110
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_dsw_eval_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_eval_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_eval_content"));

        // line 109
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswEvalBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 109,  335 => 108,  323 => 110,  321 => 108,  318 => 107,  314 => 104,  308 => 103,  299 => 100,  291 => 96,  286 => 95,  281 => 94,  275 => 89,  269 => 88,  262 => 84,  258 => 82,  255 => 81,  252 => 80,  245 => 76,  241 => 74,  238 => 73,  235 => 72,  232 => 71,  229 => 69,  220 => 68,  204 => 60,  198 => 57,  195 => 56,  187 => 51,  184 => 50,  178 => 48,  176 => 47,  172 => 46,  166 => 43,  161 => 40,  159 => 39,  156 => 38,  150 => 36,  144 => 34,  142 => 33,  137 => 32,  135 => 31,  125 => 23,  119 => 21,  113 => 19,  111 => 18,  106 => 17,  104 => 16,  98 => 12,  89 => 11,  75 => 6,  71 => 5,  62 => 4,  44 => 2,  11 => 1,);
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
{% block title %}360 by D-Sides{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/dswampli/css/learn.css') }}\" type=\"text/css\" />
<link href=\"https://fonts.googleapis.com/css?family=Megrim\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,700\" rel=\"stylesheet\">
{% endblock %}

{% block nav %}
<header>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-learn fixed-top navbar-toggleable-md\">

{% if espace.id is defined %}
<a class=\"navbar-brand\" href=\"{{ path('dsw_learn_homepage', {'id': espace.id}) }}\">360 by D-Sides</a>
{% elseif idee.espace.id is defined %}
<a class=\"navbar-brand\" href=\"{{ path('dsw_learn_homepage', {'id': idee.espace.id}) }}\">360 by D-Sides</a>
{% else %}
<a class=\"navbar-brand\" href=\"{{ path('dsw_eval_start') }}\">360 by D-Sides</a>
{% endif %}

<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <i class=\"fa fa-user-circle\"></i>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">   
        
        {% if espace.id is defined %}
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('dsw_learn_homepage', {'id': espace.id}) }}\">Accueil</a></li>
        {% elseif idee.espace.id is defined %}
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('dsw_learn_homepage', {'id': idee.espace.id}) }}\">Accueil</a></li>
        {% else %}
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('dsw_learn_homepage') }}\">Accueil</a></li>
        {% endif %}
            
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
           
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-user-circle\"></i> {{ app.user.username }}
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"{{ path('dsw_user_view', {'id': app.user.id}) }}\">Mon compte</a>
                    {% if is_granted('ROLE_ADMIN') %}
                    <a class=\"dropdown-item\" href=\"{{ path('dsw_ampli_admin') }}\">Administration</a>
                    {% endif %}
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                </div>
            </li>
           
        {% else %}
           
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Connexion</a></li>
            
        {% endif %}
        
    </ul>
</div>
</nav>

</header>
{% endblock %}

{% block body %}
  
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
    
    
    <div class=\"container-fluid\">
    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, messages in app.session.flashbag.all() %}
    {% for message in messages %}
    <div class=\"alert alert-dismissible fade show alert-{{ key }} mt-3\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
        </button>
        {{ message }}
    </div>
    {% endfor %}
    {% endfor %}
    </div>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    <div class=\"container my-5\">
    {% block dsw_eval_content %}
    {% endblock %}
    </div>

{% endblock %}", "dswEvalBundle::layout.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/layout.html.twig");
    }
}
