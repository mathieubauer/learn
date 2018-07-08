<?php

/* dswEvalBundle::layout.html.twig */
class __TwigTemplate_cab1c0074af6ab3e8a614d66c3ae2490373e0b0c3d2badaf2df8a7847aca652f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "360 by D-Sides";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 11
    public function block_nav($context, array $blocks = array())
    {
        // line 12
        echo "<header>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-learn fixed-top navbar-toggleable-md\">

";
        // line 16
        if ($this->getAttribute(($context["espace"] ?? null), "id", array(), "any", true, true)) {
            // line 17
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
            echo "\">360 by D-Sides</a>
";
        } elseif ($this->getAttribute($this->getAttribute(        // line 18
($context["idee"] ?? null), "espace", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 19
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
            echo "\">Accueil</a></li>
        ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 33
($context["idee"] ?? null), "espace", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 34
            echo "        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_learn_homepage", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_user_view", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
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
                if (($this->getAttribute(($context["app"] ?? null), "user", array()) == $this->getAttribute(($context["espace"] ?? null), "animateur", array()))) {
                    // line 74
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
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
                if (($this->getAttribute(($context["app"] ?? null), "user", array()) == $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "animateur", array()))) {
                    // line 82
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "id", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
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
    }

    // line 108
    public function block_dsw_eval_content($context, array $blocks = array())
    {
        // line 109
        echo "    ";
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
        return array (  278 => 109,  275 => 108,  269 => 110,  267 => 108,  264 => 107,  260 => 104,  254 => 103,  245 => 100,  237 => 96,  232 => 95,  227 => 94,  221 => 89,  215 => 88,  208 => 84,  204 => 82,  201 => 81,  198 => 80,  191 => 76,  187 => 74,  184 => 73,  181 => 72,  178 => 71,  175 => 69,  172 => 68,  162 => 60,  156 => 57,  153 => 56,  145 => 51,  142 => 50,  136 => 48,  134 => 47,  130 => 46,  124 => 43,  119 => 40,  117 => 39,  114 => 38,  108 => 36,  102 => 34,  100 => 33,  95 => 32,  93 => 31,  83 => 23,  77 => 21,  71 => 19,  69 => 18,  64 => 17,  62 => 16,  56 => 12,  53 => 11,  45 => 6,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswEvalBundle::layout.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/layout.html.twig");
    }
}
