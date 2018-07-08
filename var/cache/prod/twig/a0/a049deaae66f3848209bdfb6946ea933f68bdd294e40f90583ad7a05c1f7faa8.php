<?php

/* dswLearnBundle:Module:play.html.twig */
class __TwigTemplate_1004ed09eb9919b47734742575169ab106607931c8d33eedc92d0dcd5d4904ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout_fluid.html.twig", "dswLearnBundle:Module:play.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_learn_content' => array($this, 'block_dsw_learn_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswLearnBundle::layout_fluid.html.twig";
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
    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        // line 4
        echo "
  
<div class=\"row\">

<div class=\"collapse navbar-collapse bg-learn text-white d-md-none\" id=\"navMenu\">
    <ul class=\"nav flex-column\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "modules", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module_menu"]) {
            // line 11
            echo "
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($context["module_menu"], "id", array()))), "html", null, true);
            echo "\">
            <div class=\"d-flex flex-row align-items-centerZZ\">
               <span>
                    <i class=\"fas ";
            // line 16
            if ($this->getAttribute($context["module_menu"], "picto", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "picto", array()), "html", null, true);
            } else {
                echo "fas fa-arrow-right";
            }
            echo " fa-fw mr-2\"></i>
                </span>
                <span>
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "name", array()), "html", null, true);
            echo "
                </span>
            </div>
        </a>
    </li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
</div>

       
     
       
       
        
<nav class=\"col-md-3 col-lg-2 d-none d-md-block bg-light sidebar\">
<div class=\"sidebar-sticky\">
   
    ";
        // line 37
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "logo", array())) {
            // line 38
            echo "    <div class=\"p-3\">
        <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "logo", array()), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"logo\">
    </div>
    ";
        }
        // line 42
        echo "
    <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-5 mb-1 text-muted\">
    <span>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "name", array()), "html", null, true);
        echo "</span>
    </h6>

    <ul class=\"nav flex-column\">
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "modules", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module_menu"]) {
            // line 49
            echo "
    <li class=\"nav-item\">
        <a class=\"nav-link ";
            // line 51
            if ( !$this->getAttribute($context["module_menu"], "open", array())) {
                echo "desactive";
            }
            echo " ";
            if (($context["module_menu"] == ($context["module"] ?? null))) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($context["module_menu"], "id", array()))), "html", null, true);
            echo "\">
            <div class=\"d-flex flex-row align-items-centerZZ\">
               <span>
                    <i class=\"fas ";
            // line 54
            if ($this->getAttribute($context["module_menu"], "picto", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "picto", array()), "html", null, true);
            } else {
                echo "fas fa-arrow-right";
            }
            echo " fa-fw mr-2\"></i>
                </span>
                <span>
                    ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["module_menu"], "name", array()), "html", null, true);
            echo "
                </span>
            </div>
        </a>
    </li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </ul>

</div>
</nav>
       
       
<main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10\">
<div class=\"row justify-content-center\">
<div class=\"col-md-8\">
    
    ";
        // line 75
        echo "    
        ";
        // line 77
        echo "        ";
        // line 78
        echo "        
        ";
        // line 79
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
            // line 80
            echo "          
            <div class=\"row\">
           
            ";
            // line 84
            echo "            ";
            // line 85
            echo "            
            ";
            // line 86
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 87
                echo "                <div class=\"col-md-10\">
            ";
            } else {
                // line 89
                echo "                <div class=\"col-12\">
            ";
            }
            // line 91
            echo "            
                ";
            // line 92
            echo twig_include($this->env, $context, "dswLearnBundle:Unit:loop.html.twig");
            echo "
            
            ";
            // line 94
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 95
                echo "                </div>
                <div class=\"col-md-2 text-right\">
                <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unit_edit", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn\"><i class=\"fas fa-edit\"></i></a>
                </div>
            ";
            } else {
                // line 100
                echo "                </div>
            ";
            }
            // line 102
            echo "            
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
            // line 106
            echo "        
            <p>Il n'y a pas encore de contenus dans ce module.</p>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        
        ";
        // line 111
        if (($context["next"] ?? null)) {
            // line 112
            echo "        <div class=\"text-right\">
        <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute(($context["next"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-learn my-3\">Continuer<i class=\"fas fa-caret-right ml-2\"></i></a>
        </div>
        ";
        }
        // line 116
        echo "        
        ";
        // line 117
        if ($this->getAttribute(($context["module"] ?? null), "chat", array())) {
            // line 118
            echo "        
        <div id=\"forum\" class=\"mt-4 p-4 bg_forum\">
        
        <h1>Commentaires</h1>

        <ul class=\"list-unstyled\">
        ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["module"] ?? null), "messages", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 125
                echo "            
            <li class=\"media mb-3\">
            <img class=\"d-flex mr-3 rounded-circle\" src=\"https://i2.wp.com/vivea.lecube.io/wp-content/themes/storyspooc2/library/images/cham_avatars/cham_avatar5.jpg\" alt=\"Generic placeholder image\" height=\"42\" width=\"42\">
            
            <div class=\"media-body\">
            
                <div class=\"d-flex justify-content-between align-items-center mb-1\">

                <strong class=\"font-weight-bold\">
                ";
                // line 134
                if ($this->getAttribute($this->getAttribute($context["message"], "user", array()), "firstname", array())) {
                    // line 135
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "user", array()), "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "user", array()), "lastname", array()), "html", null, true);
                    echo "
                ";
                } else {
                    // line 137
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "user", array()), "username", array()), "html", null, true);
                    echo "
                ";
                }
                // line 139
                echo "                </strong>

                <small class=\"text-muted\">Posté le ";
                // line 141
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", array()), "m/d/Y"), "html", null, true);
                echo "</small>

                </div>

                <p class=\"forum_texte mb-0 mt-1\">";
                // line 145
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", array()), "html", null, true));
                echo "</p>
            
            </div>
            </li>

            ";
                // line 170
                echo "
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 172
                echo "        
            <p>Personne n'a encore commenté ce module. Et si vous commenciez ?</p>
        
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "        </ul>
        
        ";
            // line 178
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 179
                echo "        ";
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_message"] ?? null), 'form_start');
                echo "
        <div class=\" row d-flex justify-content-between align-self-center\">
            <div class=\"col-md-10\">
            ";
                // line 182
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_message"] ?? null), "content", array()), 'widget');
                echo "
            </div>
            <button class=\"btn btn-secondary\" type=\"submit\">Envoyer</button>
            
        </div>
        ";
                // line 187
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_message"] ?? null), 'form_end');
                echo "
        ";
            } else {
                // line 189
                echo "        
            <p>Vous devez être connecté pour contribuer. <a href=\"";
                // line 190
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_login", array("id" => $this->getAttribute(($context["module"] ?? null), "id", array()))), "html", null, true);
                echo "\" class=\"\">Allez !</a></p>
        
        ";
            }
            // line 193
            echo "        
        </div>
        
        ";
        }
        // line 197
        echo "        
        
        ";
        // line 199
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 200
            echo "            <hr>
            
            ";
            // line 202
            echo twig_include($this->env, $context, "dswLearnBundle:Unit:form_new.html.twig");
            echo "
            
            <a href=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_build", array("id" => $this->getAttribute(($context["module"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary my-3\">
                <i class=\"far fa-file fa-lg mr-2\"></i>Modifier le module
            </a>
            
            <a href=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_build", array("id" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "course", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary my-3\">
                <i class=\"far fa-folder-open fa-lg mr-2\"></i>Modifier le cours
            </a>
            
        ";
        }
        // line 213
        echo " 
 
</div>
</div>
</main>       
</div>

    
";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Module:play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 213,  428 => 208,  421 => 204,  416 => 202,  412 => 200,  410 => 199,  406 => 197,  400 => 193,  394 => 190,  391 => 189,  386 => 187,  378 => 182,  371 => 179,  369 => 178,  365 => 176,  356 => 172,  350 => 170,  342 => 145,  335 => 141,  331 => 139,  325 => 137,  317 => 135,  315 => 134,  304 => 125,  299 => 124,  291 => 118,  289 => 117,  286 => 116,  280 => 113,  277 => 112,  275 => 111,  272 => 110,  263 => 106,  247 => 102,  243 => 100,  237 => 97,  233 => 95,  231 => 94,  226 => 92,  223 => 91,  219 => 89,  215 => 87,  213 => 86,  210 => 85,  208 => 84,  203 => 80,  185 => 79,  182 => 78,  180 => 77,  177 => 75,  165 => 64,  152 => 57,  142 => 54,  128 => 51,  124 => 49,  120 => 48,  113 => 44,  109 => 42,  103 => 39,  100 => 38,  98 => 37,  85 => 26,  72 => 19,  62 => 16,  56 => 13,  52 => 11,  48 => 10,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Module:play.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Module/play.html.twig");
    }
}
