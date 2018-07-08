<?php

/* dswLearnBundle:Course:play_welcome.html.twig */
class __TwigTemplate_b606b833b3166777d5755d477ce1e2b5b30c98cb64b9283d377f1112ba1342f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Course:play_welcome.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "name", array()), "html", null, true);
    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 6
        echo "    
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
        
        <p>Par défaut, on affiche ici le remier module.</p>
        <p>Il faudrait mettre une page d'accueil !</p>
        
        <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), "modules", array()), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</h2>
        
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), "modules", array()), 0, array(), "array"), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 15
            echo "           
            ";
            // line 17
            echo "            ";
            // line 18
            echo "            
            <div class=\"mb-3\">
            
                ";
            // line 21
            if (($this->getAttribute($context["unit"], "type", array()) == "image")) {
                // line 22
                echo "
                    <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "content", array()), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Image\">

                ";
            } elseif (($this->getAttribute(            // line 25
$context["unit"], "type", array()) == "video")) {
                // line 26
                echo "
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "content", array()), "html", null, true);
                echo "\"></iframe>
                    </div>

                ";
            } else {
                // line 32
                echo "
                    ";
                // line 33
                echo $this->getAttribute($context["unit"], "content", array());
                echo "

                ";
            }
            // line 36
            echo "            
            </div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        
        
        <h3>Choix du module</h3>
        
        <ul class=\"list-group w-100\">
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "modules", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 46
            echo "         
            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_play", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action list-group-item-learn\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
            echo "</a>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </ul>

";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Course:play_welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 50,  128 => 47,  125 => 46,  121 => 45,  114 => 40,  105 => 36,  99 => 33,  96 => 32,  89 => 28,  85 => 26,  83 => 25,  78 => 23,  75 => 22,  73 => 21,  68 => 18,  66 => 17,  63 => 15,  59 => 14,  54 => 12,  46 => 7,  43 => 6,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Course:play_welcome.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Course/play_welcome.html.twig");
    }
}
