<?php

/* dswLearnBundle:Default:landing.html.twig */
class __TwigTemplate_98638ee54a31cf1fc813b4c4d9b87553cac66804ba0a301a7502a5b937a1f670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout_nocontainer.html.twig", "dswLearnBundle:Default:landing.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_learn_content' => array($this, 'block_dsw_learn_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswLearnBundle::layout_nocontainer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        // line 4
        echo " 
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "<div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "


<section class=\"py-5 bg-image-full\" style=\"background: 
    linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.15) 33%, rgba(0, 0, 0, 0) 100%),
    url(";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/workstation.jpg"), "html", null, true);
        echo ") no-repeat center center scroll; background-size: cover;\">
    <div class=\"px-5 text-white text_protected\">
        <h1 class=\"text-center display-3 font-weight-bold\">Learn by D-Sides</h1>
    </div>
    
</section>

<!--
<div class=\"jumbotron p-3 p-md-5 text-white bg-learn\">
    <div class=\"px-0 text-center\">
    <p class=\"lead my-3\">Parce que l'outil le plus simple est toujours le meilleur, nous avons créé une plateforme d'apprentissage ultra simplifiée !</p>
    </div>
</div>
-->

<div class=\"row my-3 col-10 mx-auto\">
  
    <p class=\"lead my-3\">Parce que l'outil le plus simple est toujours le meilleur, nous avons créé une plateforme d'apprentissage ultra simplifiée !</p>
   
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            if ($this->getAttribute($context["course"], "public", array())) {
                // line 34
                echo "          
        <div class=\"col-md-6\">
            
            <div class=\"card flex-md-row my-2 box-shadow h-md-250\">
            
            <div class=\"card-body d-flex flex-column align-items-start\">
            <!-- <strong class=\"d-inline-block mb-2 text-primary\">Thème du cours</strong> -->
            <h3 class=\"mb-2\">
            <a class=\"text-dark\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
                echo "</a>
            </h3>
            <!-- <div class=\"mb-1 text-muted\">Dernière connexion le 00/00/00</div> -->
            <p class=\"card-text mb-auto\">
                ";
                // line 46
                if ($this->getAttribute($context["course"], "description", array())) {
                    // line 47
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "description", array()), "html", null, true);
                    echo "
                ";
                } else {
                    // line 49
                    echo "                Description du cours en quelques lignes.
                ";
                }
                // line 51
                echo "            </p>
            <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-learn\">Aller au cours</a>
            </div>
            <img class=\"card-img-right flex-auto d-none d-lg-block course_card_img w-50 img-fluid\" src=";
                // line 54
                if ($this->getAttribute($context["course"], "logo", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "logo", array()), "html", null, true);
                } else {
                    echo "\"https://picsum.photos/200/250/?random\"";
                }
                echo " alt=\"Card image cap\">
            
            </div>
            
        </div>
            
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 61
            echo "        
            <p>Il n'y a pas de cours disponible.</p>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
</div>
      
<div class=\"jumbotron p-3 p-md-5 text-white bg-learn sticky-bottom\">
    <div class=\"px-0 text-center\">
        <a class=\"btn btn-primary my-4\" href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_create");
        echo "\">Créer un cours</a>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Default:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 70,  155 => 65,  146 => 61,  129 => 54,  124 => 52,  121 => 51,  117 => 49,  111 => 47,  109 => 46,  100 => 42,  90 => 34,  84 => 33,  62 => 14,  55 => 9,  46 => 7,  42 => 6,  39 => 4,  36 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Default:landing.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Default/landing.html.twig");
    }
}
