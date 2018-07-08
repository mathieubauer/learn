<?php

/* :form:fields.html.twig */
class __TwigTemplate_709a562aff3cd220f31f3d83427f4e053f9bd607108e0aa432356c7b5b5abdf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        // line 13
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 29
        echo "<div class=\"btn-group\" data-toggle=\"buttons\">
    <div ";
        // line 30
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 32
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</div>
    </div>";
    }

    // line 2
    public function block_form_row($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    <div class=\"form_row\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 13
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 14
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 15
        if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 18
        $this->displayBlock("form_rows", $context, $blocks);
        echo "zz";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 20
        echo "</div>";
    }

    public function getTemplateName()
    {
        return ":form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  87 => 19,  84 => 18,  81 => 16,  79 => 15,  75 => 14,  72 => 13,  64 => 7,  60 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  43 => 35,  37 => 33,  35 => 32,  31 => 31,  28 => 30,  25 => 29,  23 => 13,  21 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":form:fields.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/app/Resources/views/form/fields.html.twig");
    }
}
