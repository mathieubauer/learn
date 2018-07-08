<?php

/* dswEvalBundle:Enregistrement:new.html.twig */
class __TwigTemplate_08478d168d40f606fbdb3259852a157890044a674f002b110066efae7a6ac470 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswEvalBundle::layout.html.twig", "dswEvalBundle:Enregistrement:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_eval_content' => array($this, 'block_dsw_eval_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswEvalBundle::layout.html.twig";
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

    // line 3
    public function block_dsw_eval_content($context, array $blocks = array())
    {
        // line 4
        echo "   
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "/6)</h1>
    <p><strong>Rappel : Pour chaque thème, vous devez coter au moins une phrase à 0, au moins une à 2 et ainsi de suite.</strong></p>
    
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
      
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "records", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "           
            <div class=\"row question_score mb-2\">
            
                <div class=\"col-8 col-sm-10 d-flex align-items-center\">
                <span>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["questions"] ?? null), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "intitule", array()), "html", null, true);
            echo "</span>
                </div>

                <div class=\"col-4 col-sm-2 d-flex align-items-center\">
                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["record"], "points", array()), 'widget', array("attr" => array("min" => 0, "max" => 6, "step" => 2, "placeholder" => "0 à 6", "class" => "text-center")));
            echo "
                </div>
            
            </div>
            
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "       
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        
        <input type=\"submit\" value=\"Suite\" class=\"btn btn-primary mt-3\" />
        
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    
";
    }

    public function getTemplateName()
    {
        return "dswEvalBundle:Enregistrement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  107 => 26,  104 => 25,  84 => 19,  77 => 15,  71 => 11,  54 => 10,  49 => 8,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswEvalBundle:Enregistrement:new.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/Enregistrement/new.html.twig");
    }
}
