<?php

/* dswAmpliBundle:Idee:edit.html.twig */
class __TwigTemplate_bd6bce588b3bad6159f4a7dbbd152a9cf60587d94ae05d6168ad5dfb2be726d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Idee:edit.html.twig", 1);
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
        echo " - Editer une idée";
    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
    }

    // line 5
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'errors')) {
            // line 8
            echo "    <div class=\"container-fluid\">
    <div class=\"alert alert-dismissible fade show alert-primary mt-3\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        <div class=\"mb-0\">";
            // line 13
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'errors');
            echo "</div>
    </div>
    </div>
    ";
        }
        // line 17
        echo "
<div class=\"container my-5\">
  
<div class=\"row idee_page\">
<div class=\"col-lg-8 mx-auto\">
   
    <h1>Modifier le projet</h1>
    
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    
        ";
        // line 27
        if ($this->getAttribute(($context["form"] ?? null), "categorie", array(), "any", true, true)) {
            // line 28
            echo "        <div class=\"mb-1\"><strong>Catégorie</strong></div>
        <div class=\"row\">
        <div class=\"mb-3 col-4\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "categorie", array()), 'widget');
            echo "</div>
        </div>
        ";
        }
        // line 33
        echo "        
        <div class=\"mb-1\"><strong>";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'label');
        echo "</strong></div>
        <div class=\"mb-3 display-4\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'widget');
        echo "</div>
    
        <div class=\"mb-1\"><strong>Description courte</strong></div>
        <div class=\"mb-1\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'widget');
        echo "</div>
        <div class=\"mb-5 text-right\"><span id=\"chars\">140</span> / 140</div>
        
    
        ";
        // line 42
        if ($this->getAttribute(($context["form"] ?? null), "objectifs", array(), "any", true, true)) {
            // line 43
            echo "        <div class=\"mb-1\"><strong>
            ";
            // line 44
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "objectifsAlias", array())) {
                // line 45
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "objectifsAlias", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 47
                echo "                Objectifs
            ";
            }
            // line 49
            echo "        </strong></div>
        <div class=\"mb-3\">";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "objectifs", array()), 'widget');
            echo "</div>
        ";
        }
        // line 52
        echo "    
        ";
        // line 53
        if ($this->getAttribute(($context["form"] ?? null), "methode", array(), "any", true, true)) {
            // line 54
            echo "        <div class=\"mb-1\"><strong>
            ";
            // line 55
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "methodeAlias", array())) {
                // line 56
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "methodeAlias", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 58
                echo "                Méthode
            ";
            }
            // line 60
            echo "        </strong></div>
        <div class=\"mb-3\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "methode", array()), 'widget');
            echo "</div>
        ";
        }
        // line 63
        echo "    
        ";
        // line 64
        if ($this->getAttribute(($context["form"] ?? null), "calendrier", array(), "any", true, true)) {
            // line 65
            echo "        <div class=\"mb-1\"><strong>
            ";
            // line 66
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "calendrierAlias", array())) {
                // line 67
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "calendrierAlias", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 69
                echo "                Calendrier
            ";
            }
            // line 71
            echo "        </strong></div>
        <div class=\"mb-5\">";
            // line 72
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "calendrier", array()), 'widget');
            echo "</div>
        ";
        }
        // line 74
        echo "        
        ";
        // line 75
        if ($this->getAttribute(($context["form"] ?? null), "equipe", array(), "any", true, true)) {
            // line 76
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withEquipe", array())) {
                // line 77
                echo "        <div class=\"mb-1\"><strong>Equipe</strong></div>
        <div class=\"mb-3\">";
                // line 78
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "equipe", array()), 'widget');
                echo "</div>
        ";
            } else {
                // line 80
                echo "        ";
                $this->getAttribute($this->getAttribute(($context["form"] ?? null), "equipe", array()), "setRendered", array());
                // line 81
                echo "        ";
            }
            // line 82
            echo "        ";
        }
        // line 83
        echo "        
        ";
        // line 84
        if ($this->getAttribute(($context["form"] ?? null), "imgProjetfile", array(), "any", true, true)) {
            // line 85
            echo "        <div class=\"mb-1\"><strong>";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "imgProjetfile", array()), 'label');
            echo "</strong></div>
        <div class=\"mb-3\">";
            // line 86
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "imgProjetfile", array()), 'widget');
            echo "</div>
        ";
        }
        // line 88
        echo "        
        ";
        // line 89
        if ($this->getAttribute(($context["form"] ?? null), "imgEquipefile", array(), "any", true, true)) {
            // line 90
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["idee"] ?? null), "espace", array()), "withEquipe", array())) {
                // line 91
                echo "        <div class=\"mb-1\"><strong>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "imgEquipefile", array()), 'label');
                echo "</strong></div>
        <div class=\"mb-3\">";
                // line 92
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "imgEquipefile", array()), 'widget');
                echo "</div>
        ";
            } else {
                // line 94
                echo "        ";
                $this->getAttribute($this->getAttribute(($context["form"] ?? null), "imgEquipefile", array()), "setRendered", array());
                // line 95
                echo "        ";
            }
            // line 96
            echo "        ";
        }
        // line 97
        echo "    
    <input type=\"submit\" value=\"Valider les modifications\" class=\"btn btn-primary\" />
    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    
</div>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Idee:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 99,  259 => 97,  256 => 96,  253 => 95,  250 => 94,  245 => 92,  240 => 91,  237 => 90,  235 => 89,  232 => 88,  227 => 86,  222 => 85,  220 => 84,  217 => 83,  214 => 82,  211 => 81,  208 => 80,  203 => 78,  200 => 77,  197 => 76,  195 => 75,  192 => 74,  187 => 72,  184 => 71,  180 => 69,  174 => 67,  172 => 66,  169 => 65,  167 => 64,  164 => 63,  159 => 61,  156 => 60,  152 => 58,  146 => 56,  144 => 55,  141 => 54,  139 => 53,  136 => 52,  131 => 50,  128 => 49,  124 => 47,  118 => 45,  116 => 44,  113 => 43,  111 => 42,  104 => 38,  98 => 35,  94 => 34,  91 => 33,  85 => 30,  81 => 28,  79 => 27,  74 => 25,  64 => 17,  57 => 13,  50 => 8,  48 => 7,  45 => 6,  42 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Idee:edit.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/edit.html.twig");
    }
}
