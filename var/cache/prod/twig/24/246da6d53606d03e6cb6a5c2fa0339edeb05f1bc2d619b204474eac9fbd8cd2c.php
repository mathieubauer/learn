<?php

/* dswAmpliBundle:Espace:edit.html.twig */
class __TwigTemplate_6d2dda3ba476e7a5816cee39bcd521f494711ab4a0476e3f45cac031f712bbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Espace:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_ampli_jumbotron' => array($this, 'block_dsw_ampli_jumbotron'),
            'dsw_ampli_content' => array($this, 'block_dsw_ampli_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswAmpliBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Piloter un espace";
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
  
    <h1>Sélectionner les idées</h1>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin_idee", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-outline-primary mb-5\">Sélectionner les idées</a>
   
    <h1>Options de l'espace</h1>
    
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Titre de l'espace</strong>
        </div>
        <div class=\"col-6\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'widget');
        echo "</div>
        </div>
        
        ";
        // line 22
        if ($this->getAttribute(($context["form"] ?? null), "animateur", array(), "any", true, true)) {
            // line 23
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Animateur</strong>
        </div>
        <div class=\"col-6\">";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "animateur", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 30
        echo "        
        ";
        // line 31
        if ($this->getAttribute(($context["form"] ?? null), "slug", array(), "any", true, true)) {
            // line 32
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Code session</strong>
        </div>
        <div class=\"col-6\">";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "slug", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 39
        echo "       
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Choix de l'étape d'accueil</strong>
        </div>
        <div class=\"col-6\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "etape", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Permettre l'ajout d'idées</strong><br>
            <small>À l'étape 1</small>
        </div>
        <div class=\"col-6\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "withIdees", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Afficher les cœurs</strong><br>
            <small>Système de likes à l'étape 1</small>
        </div>
        <div class=\"col-6\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "withCoeurs", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Modération</strong><br>
            <small>Si oui, les idées doivent être validées par l'animateur pour apparaître à l'étape 2</small><br>
        </div>
        <div class=\"col-6\">";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "withModeration", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Constitution d'équipes</strong><br>
            <small>À l'étape 2, photo et nom de l'équipe</small>
        </div>
        <div class=\"col-6\">";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "withEquipe", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Afficher le bas des cartes</strong><br>
            <small>Aux étapes 2 et 3, zone avec l'auteur et le nombre de cœurs</small>
        </div>
        <div class=\"col-6\">";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "withFooter", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Autoriser les commentaires</strong><br>
            <small>À l'étape 3</small>
        </div>
        <div class=\"col-6\">";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "withCommentaires", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Contributions en temps</strong><br>
            <small>À l'étape 3</small>
        </div>
        <div class=\"col-6\">";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "withTemps", array()), 'widget');
        echo "</div>
        </div>
        
        ";
        // line 103
        if ($this->getAttribute(($context["form"] ?? null), "withArgent", array(), "any", true, true)) {
            // line 104
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Contributions financières</strong><br>
            <small>À l'étape 3 (pas encore disponible)</small>
        </div>
        <div class=\"col-6\">";
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "withArgent", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 112
        echo "        
        ";
        // line 113
        if ($this->getAttribute(($context["form"] ?? null), "categories", array(), "any", true, true)) {
            // line 114
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "categories", array()), 'widget');
            echo "
        ";
        }
        // line 116
        echo "        
        ";
        // line 117
        if ($this->getAttribute(($context["form"] ?? null), "objectifsAlias", array(), "any", true, true)) {
            // line 118
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Objectifs</strong>
        </div>
        <div class=\"col-6\">";
            // line 122
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "objectifsAlias", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 125
        echo "        
        ";
        // line 126
        if ($this->getAttribute(($context["form"] ?? null), "methodeAlias", array(), "any", true, true)) {
            // line 127
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Méthode</strong>
        </div>
        <div class=\"col-6\">";
            // line 131
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "methodeAlias", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 134
        echo "        
        ";
        // line 135
        if ($this->getAttribute(($context["form"] ?? null), "calendrierAlias", array(), "any", true, true)) {
            // line 136
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Calendrier</strong>
        </div>
        <div class=\"col-6\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "calendrierAlias", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 143
        echo "        
        ";
        // line 144
        if ($this->getAttribute(($context["form"] ?? null), "propulserAlias", array(), "any", true, true)) {
            // line 145
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Alias - Propulser</strong>
        </div>
        <div class=\"col-6\">";
            // line 149
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "propulserAlias", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 152
        echo "        
        ";
        // line 153
        if ($this->getAttribute(($context["form"] ?? null), "publicQuestion", array(), "any", true, true)) {
            // line 154
            echo "        <div class=\"row mb-3\">
        <div class=\"col-6 text-right\">
            <strong>Question publique</strong><br>
            <small>Apparaît sur les fiches publiques</small>
        </div>
        <div class=\"col-6\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "publicQuestion", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 162
        echo "        
        <input type=\"submit\" value=\"Éditer\" class=\"btn btn-primary\" />
    ";
        // line 164
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    
    <a href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Aller à l'accueil</a>
    <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_homepage", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark my-3\">Aller à l'étape</a>
    
    ";
        // line 169
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 170
            echo "    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin");
            echo "\" class=\"btn btn-dark my-3\">Accueil Admin</a>
    ";
        }
        // line 172
        echo "    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Espace:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 172,  325 => 170,  323 => 169,  318 => 167,  314 => 166,  309 => 164,  305 => 162,  299 => 159,  292 => 154,  290 => 153,  287 => 152,  281 => 149,  275 => 145,  273 => 144,  270 => 143,  264 => 140,  258 => 136,  256 => 135,  253 => 134,  247 => 131,  241 => 127,  239 => 126,  236 => 125,  230 => 122,  224 => 118,  222 => 117,  219 => 116,  213 => 114,  211 => 113,  208 => 112,  202 => 109,  195 => 104,  193 => 103,  187 => 100,  176 => 92,  165 => 84,  154 => 76,  143 => 68,  132 => 60,  121 => 52,  110 => 44,  103 => 39,  97 => 36,  91 => 32,  89 => 31,  86 => 30,  80 => 27,  74 => 23,  72 => 22,  66 => 19,  57 => 13,  50 => 9,  45 => 6,  42 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Espace:edit.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Espace/edit.html.twig");
    }
}
