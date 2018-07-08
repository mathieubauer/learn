<?php

/* dswQuizBundle:Question:layout.html.twig */
class __TwigTemplate_4d50b4e4984bdac7c0ea41fc8bd0daf72795f6f37dd2ef567918ed07aebfeaa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Question:layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'jumbo_ampli' => array($this, 'block_jumbo_ampli'),
            'dswampli_body' => array($this, 'block_dswampli_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container my-5\">
  
    ";
        // line 7
        echo "    <div class=\"jumbotron jumbotron-fluid text-center mb-0 jumbo_ampli\">
    <div class=\"container\">
    ";
        // line 9
        $this->displayBlock('jumbo_ampli', $context, $blocks);
        // line 13
        echo "    </div>
    </div>
    
    ";
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "    <div class=\"alert alert-dismissible fade show alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
        </button>
        ";
                // line 23
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        $this->displayBlock('dswampli_body', $context, $blocks);
        // line 31
        echo "
</div>
";
    }

    // line 9
    public function block_jumbo_ampli($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>L'Ampli</h1>
    <p>Ce projet est en construction !</p>
    ";
    }

    // line 29
    public function block_dswampli_body($context, array $blocks = array())
    {
        // line 30
        echo "    ";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Question:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  102 => 29,  96 => 10,  93 => 9,  87 => 31,  84 => 29,  81 => 27,  75 => 26,  66 => 23,  58 => 19,  53 => 18,  48 => 17,  43 => 13,  41 => 9,  37 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Question:layout.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Question/layout.html.twig");
    }
}
