<?php

/* dswLearnBundle:Course:play.html.twig */
class __TwigTemplate_7aa8bc97bc7f3b7d3cd7ac13b9632240ded2e270b9902ea4dbdfd90a82653197 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Course:play.html.twig", 1);
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
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute(($context["course"] ?? null), "modules", array())) == 1)) {
            // line 6
            echo "    ";
            // line 7
            echo "    
        <h1>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), "modules", array()), 0, array(), "array"), "name", array()), "html", null, true);
            echo "</h1>
        
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), "modules", array()), 0, array(), "array"), "units", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
                // line 11
                echo "            <hr>
            <h3>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "name", array()), "html", null, true);
                echo "</h3>
            ";
                // line 13
                echo $this->getAttribute($context["unit"], "content", array());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    
    ";
        } else {
            // line 17
            echo "    ";
            // line 18
            echo "    
        <h1>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "name", array()), "html", null, true);
            echo "</h1>
        <h3>Choix du module</h3>
        
        <div class=\"row\">
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "modules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 24
                echo "          
            <div class=\"col-md-3\">
            <div class=\"card\">
            <div class=\"card-body\">
                ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
                echo "
            </div>
            </div>
            </div>
           
            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo " 
        </div>
        
    
    ";
        }
        // line 39
        echo "
";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Course:play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  113 => 34,  100 => 28,  94 => 24,  90 => 23,  83 => 19,  80 => 18,  78 => 17,  74 => 15,  66 => 13,  62 => 12,  59 => 11,  55 => 10,  50 => 8,  47 => 7,  45 => 6,  43 => 5,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Course:play.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Course/play.html.twig");
    }
}
