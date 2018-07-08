<?php

/* dswAmpliBundle::layout.html.twig */
class __TwigTemplate_9dea8d757749e3a914726664a13d107e266d14040778482daab8cda5e5be9c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswAmpliBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'dsw_ampli_jumbotron' => array($this, 'block_dsw_ampli_jumbotron'),
            'dsw_ampli_content' => array($this, 'block_dsw_ampli_content'),
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
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        // line 5
        echo "<header>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-toggleable-md d-print-none\">

";
        // line 9
        if ($this->getAttribute(($context["espace"] ?? null), "id", array(), "any", true, true)) {
            // line 10
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_homepage", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
            echo "\">Ampli by D-Sides</a>
";
        } elseif ($this->getAttribute($this->getAttribute(        // line 11
($context["idee"] ?? null), "espace", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 12
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_homepage", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "id", array()))), "html", null, true);
            echo "\">Ampli by D-Sides</a>
";
        } else {
            // line 14
            echo "<a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_landing");
            echo "\">Ampli by D-Sides</a>
";
        }
        // line 16
        echo "
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <i class=\"fa fa-user-circle\"></i>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">   
        
        ";
        // line 24
        if ($this->getAttribute(($context["espace"] ?? null), "id", array(), "any", true, true)) {
            // line 25
            echo "        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_homepage", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
            echo "\">Accueil</a></li>
        ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 26
($context["idee"] ?? null), "espace", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 27
            echo "        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_homepage", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "id", array()))), "html", null, true);
            echo "\">Accueil</a></li>
        ";
        } else {
            // line 29
            echo "        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_landing");
            echo "\">Accueil</a></li>
        ";
        }
        // line 31
        echo "            
        ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "           
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-user-circle\"></i> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_user_view", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mon compte</a>
                    ";
            // line 40
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 41
                echo "                    <a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin");
                echo "\">Administration</a>
                    ";
            }
            // line 43
            echo "                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                </div>
            </li>
           
        ";
        } else {
            // line 49
            echo "           
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
            
        ";
        }
        // line 53
        echo "        
    </ul>
</div>
</nav>

</header>
";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 62
        echo "  
    ";
        // line 64
        echo "    <div class=\"jumbotron jumbotron-fluid text-center mb-0 jumbo_ampli\">
    <div class=\"container\">
    ";
        // line 66
        $this->displayBlock('dsw_ampli_jumbotron', $context, $blocks);
        // line 70
        echo "    </div>
    </div>
    
    ";
        // line 74
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 75
            echo "    ";
            if (array_key_exists("espace", $context)) {
                // line 76
                echo "        ";
                if (($this->getAttribute(($context["app"] ?? null), "user", array()) == $this->getAttribute(($context["espace"] ?? null), "animateur", array()))) {
                    // line 77
                    echo "        <div class=\"jumbotron jumbotron-fluid text-center mb-0 p-1 bg-warning\">
        <div class=\"container\">
        <a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_espace_animateur", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
                    echo "\" class=\"hidden_link cliquable\">Espace animateur</a>
        </div>
        </div>
        ";
                }
                // line 83
                echo "    ";
            }
            // line 84
            echo "    ";
        }
        // line 85
        echo "    
    <div class=\"container-fluid\">
    ";
        // line 88
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 89
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 90
                echo "    <div class=\"alert alert-dismissible fade show alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " mt-3\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
        </button>
        ";
                // line 94
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </div>

    ";
        // line 101
        echo "    ";
        $this->displayBlock('dsw_ampli_content', $context, $blocks);
        // line 103
        echo "
";
    }

    // line 66
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
        // line 67
        echo "    <h1>L'Ampli</h1>
    <p>Ce projet est en construction !</p>
    ";
    }

    // line 101
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 102
        echo "    ";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 102,  258 => 101,  252 => 67,  249 => 66,  244 => 103,  241 => 101,  237 => 98,  231 => 97,  222 => 94,  214 => 90,  209 => 89,  204 => 88,  200 => 85,  197 => 84,  194 => 83,  187 => 79,  183 => 77,  180 => 76,  177 => 75,  174 => 74,  169 => 70,  167 => 66,  163 => 64,  160 => 62,  157 => 61,  147 => 53,  141 => 50,  138 => 49,  130 => 44,  127 => 43,  121 => 41,  119 => 40,  115 => 39,  109 => 36,  104 => 33,  102 => 32,  99 => 31,  93 => 29,  87 => 27,  85 => 26,  80 => 25,  78 => 24,  68 => 16,  62 => 14,  56 => 12,  54 => 11,  49 => 10,  47 => 9,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle::layout.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/layout.html.twig");
    }
}
