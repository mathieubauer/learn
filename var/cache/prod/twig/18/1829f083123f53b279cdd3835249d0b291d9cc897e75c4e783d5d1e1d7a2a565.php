<?php

/* dswLearnBundle:Module:build.html.twig */
class __TwigTemplate_eec782410fd1c11c64d206d4de77bb98f32f1e5035ce1d8c465775fd01f2aa50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Module:build.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_learn_content' => array($this, 'block_dsw_learn_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswLearnBundle::layout.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "name", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "name", array()), "html", null, true);
    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        // line 4
        echo "  
<div class=\"row justify-content-center\">
<div class=\"col-md-10\">
   
    <h1>Constructeur de module</h1>
    
    <nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb px-4\">
        <li class=\"breadcrumb-item\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "name", array()), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "name", array()), "html", null, true);
        echo "
        </li>
        <li class=\"text-right\">
        <i class=\"fas ";
        // line 19
        if ($this->getAttribute(($context["module"] ?? null), "picto", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "picto", array()), "html", null, true);
        } else {
            echo "fas fa-arrow-right";
        }
        echo " fa-fw ml-2 text-right\"></i>
        </li>
        
        
        
    </ol>
    
    </nav>
    
    <div class=\"breadcrumb p-4 mb-5\">
    <h3 class=\"mb-4\">Paramètres du module</h3>

    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
      
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Titre</strong></div>
            <div class=\"col-md-9\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "name", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Picto du menu</strong></div>
            <div class=\"col-md-9\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "picto", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Forum de discussion</strong></div>
            <div class=\"col-md-9\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "chat", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"row d-flex align-items-center align-self-center mb-3\">
            <div class=\"col-md-3\"><strong>Accessibilité du module</strong></div>
            <div class=\"col-md-9\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "open", array()), 'widget');
        echo "</div>
        </div> 
        
        <div class=\"ml-0\">
            <button class=\"btn btn-learn ml-0\" type=\"submit\">
                <i class=\"far fa-save fa-lg mr-2\"></i>Enregistrer les modifications
            </button>
        </div>
       
    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
    
    </div>
    
    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["units"] ?? null));
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
            // line 64
            echo "
        <div class=\"row mb-4\">
        <div class=\"col-md-8\">
        
            ";
            // line 68
            echo twig_include($this->env, $context, "dswLearnBundle:Unit:loop.html.twig");
            echo "
                
        </div>
        <div class=\"col-md-4\">
        
        <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_edit", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-edit\"></i></a>
        
        ";
            // line 75
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 76
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_down", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-down\"></i></a>
        ";
            }
            // line 78
            echo "        
        ";
            // line 79
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                // line 80
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_up", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-arrow-up\"></i></a>
        ";
            }
            // line 82
            echo "        
        <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_delete", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm-edit mt-0 mx-1\"><i class=\"fas fa-trash\"></i></a>
        
            </div>
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
            // line 89
            echo "        <p>Il n'y a encore aucun contenu associé à ce module. Commencez par en ajouter un !</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    
<!-- Ajout unité image ######################### -->
    
    ";
        // line 111
        echo "    
    
<!-- Ajout unité ######################### -->
    
    <hr>
    ";
        // line 116
        echo twig_include($this->env, $context, "dswLearnBundle:Unit:form_new.html.twig");
        echo "
    
    <br>
    <!-- <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_build", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mt-2 mb-3\">Retour au cours</a> -->
    <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute(($context["module"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mt-2 mb-3\"> 
        <i class=\"fas fa-eye fa-lg mr-2\"></i>Afficher le module
    </a>
    
    <hr>
    

<!-- Suppression ######################### -->    

    <div class=\"text-right\">
    ";
        // line 130
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
        <button class=\"btn btn-danger mt-3\" type=\"submit\">
            <i class=\"fas fa-trash fa-lg mr-2\"></i>Supprimer le module
        </button>
    ";
        // line 134
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
    </div>
    
</div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Module:build.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 134,  256 => 130,  243 => 120,  239 => 119,  233 => 116,  226 => 111,  221 => 91,  214 => 89,  195 => 83,  192 => 82,  186 => 80,  184 => 79,  181 => 78,  175 => 76,  173 => 75,  168 => 73,  160 => 68,  154 => 64,  136 => 63,  129 => 59,  117 => 50,  109 => 45,  101 => 40,  93 => 35,  86 => 31,  67 => 19,  61 => 16,  53 => 13,  42 => 4,  39 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Module:build.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Module/build.html.twig");
    }
}
