<?php

/* dswUserBundle:User:view.html.twig */
class __TwigTemplate_087e933d9e084f6d503d8a395d2d35e8fe0232256a88f55546fb79bcd744445a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout2.html.twig", "dswUserBundle:User:view.html.twig", 1);
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
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
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
    <div class=\"col-lg-8 mx-auto\">
    <div class=\"card idee\">
    
        <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/utilisateur.png"), "html", null, true);
        echo "\" alt=\"Image user\">
        
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            ";
        // line 17
        if ($this->getAttribute(($context["user"] ?? null), "lastname", array(), "any", true, true)) {
            // line 18
            echo "                <p class=\"titre_idee mb-3\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "lastname", array()), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 20
            echo "                <p class=\"titre_idee mb-3\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 22
        echo "        </div>
        
        
        <div class=\"card-body\">
            
            ";
        // line 27
        if (((($context["user"] ?? null) == $this->getAttribute(($context["app"] ?? null), "user", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 28
            echo "            <h4 class=\"card-title\">Informations visibles sur votre fiche publique</h4>
            ";
        }
        // line 30
        echo "            
            <p class=\"card-text mb-1\">Nom d'utilisateur : ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</p>
            <p class=\"card-text mb-1\">Nombre d'idées crées : ";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["idees"] ?? null)), "html", null, true);
        echo "</p>
            <p class=\"card-text\">Nombre d'idées aimées : ";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["likes"] ?? null)), "html", null, true);
        echo "</p>

        </div>
        
        ";
        // line 38
        echo "        ";
        if (((($context["user"] ?? null) == $this->getAttribute(($context["app"] ?? null), "user", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 39
            echo "        
        <hr class=\"hr_thin\">
        <div class=\"card-body\">
            
            <h4 class=\"card-title\">Informations personnelles</h4>
            <p class=\"card-text mb-1\">Email : ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
            echo "</p>
            <p class=\"card-text mb-1\">Dernière connexion : ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "lastLogin", array()), "d/m/y \\à G:i"), "html", null, true);
            echo "</p>
            
            <p class=\"card-text\">
            ";
            // line 48
            if ($this->getAttribute(($context["user"] ?? null), "roles", array())) {
                // line 49
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 50
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo " 
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "            ";
            }
            // line 53
            echo "            </p>
            
            <a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" class=\"btn btn-outline-primary mt-2\">Modifier le profil</a>
            <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\" class=\"btn btn-outline-primary mt-2\">Changer de mot de passe</a>
            
            
        </div>
        
        <hr class=\"hr_thin\">
        <div class=\"card-body\">
            
            <h4 class=\"card-title\">Idées proposées</h4>
            
            ";
            // line 66
            if (($context["idees"] ?? null)) {
                // line 67
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["idees"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
                    // line 68
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
                    echo "\" class=\"mb-1\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
                    echo "</a><br>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "            ";
            }
            // line 71
            echo "            
        </div>
        
        <hr class=\"hr_thin\">
        <div class=\"card-body\">
            
            <h4 class=\"card-title\">Idées aimées</h4>
            
            ";
            // line 79
            if (($context["likes"] ?? null)) {
                // line 80
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["likes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
                    // line 81
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($this->getAttribute($context["like"], "idee", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"mb-1\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["like"], "idee", array()), "titre", array()), "html", null, true);
                    echo "</a><br>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "            ";
            }
            // line 84
            echo "            
        </div> 
        
        ";
        }
        // line 88
        echo "        

    
    </div>
    

    
    
    </div>
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 88,  221 => 84,  218 => 83,  207 => 81,  202 => 80,  200 => 79,  190 => 71,  187 => 70,  176 => 68,  171 => 67,  169 => 66,  156 => 56,  152 => 55,  148 => 53,  145 => 52,  136 => 50,  131 => 49,  129 => 48,  123 => 45,  119 => 44,  112 => 39,  109 => 38,  102 => 33,  98 => 32,  94 => 31,  91 => 30,  87 => 28,  85 => 27,  78 => 22,  72 => 20,  64 => 18,  62 => 17,  54 => 12,  46 => 6,  43 => 5,  38 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:User:view.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/User/view.html.twig");
    }
}
