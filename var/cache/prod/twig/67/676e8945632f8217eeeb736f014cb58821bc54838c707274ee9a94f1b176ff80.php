<?php

/* dswLearnBundle:Course:play_module.html.twig */
class __TwigTemplate_610065fe5790d6e1146d18494ef412ffb6fcabf64775aefda8c2de97d108dde9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswLearnBundle:Course:play_module.html.twig", 1);
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
<div class=\"row justify-content-center\">
<div class=\"col-md-10\">
    
    ";
        // line 9
        echo "    
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
        <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), "modules", array()), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</h1>
        
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), "modules", array()), 0, array(), "array"), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 14
            echo "           
            ";
            // line 16
            echo "            ";
            // line 17
            echo "            
            <div class=\"mb-3\">
            
                ";
            // line 20
            if (($this->getAttribute($context["unit"], "type", array()) == "image")) {
                // line 21
                echo "
                    <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "content", array()), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Image\">

                ";
            } elseif (($this->getAttribute(            // line 24
$context["unit"], "type", array()) == "video")) {
                // line 25
                echo "
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "content", array()), "html", null, true);
                echo "\"></iframe>
                    </div>

                ";
            } else {
                // line 31
                echo "
                    ";
                // line 32
                echo $this->getAttribute($context["unit"], "content", array());
                echo "

                ";
            }
            // line 35
            echo "            
            </div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        
        ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_build", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-learn my-3\">Modifier le cours</a>
        ";
        }
        // line 43
        echo "        
</div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Course:play_module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  118 => 41,  116 => 40,  113 => 39,  104 => 35,  98 => 32,  95 => 31,  88 => 27,  84 => 25,  82 => 24,  77 => 22,  74 => 21,  72 => 20,  67 => 17,  65 => 16,  62 => 14,  58 => 13,  53 => 11,  49 => 10,  46 => 9,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Course:play_module.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Course/play_module.html.twig");
    }
}
