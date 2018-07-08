<?php

/* :FeedbackBundle/seance:start.html.twig */
class __TwigTemplate_5d1b35b6e01f703e36526ce669934456f96f4ed849baee814f0075f541d5f614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::layout.html.twig", ":FeedbackBundle/seance:start.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container-fluid my-md-5 my-3\">
  
<div class=\"panel_gauche\"></div>
<div class=\"panel_droite\"></div>
  
    <div class=\"row justify-content-around\">
  
        <div class=\"col-md-4 blanc\">
            <div class=\"card\">
            <div class=\"card-body\">
            
            <h1 class=\"question mb-0\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["seance"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
            
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["seance"] ?? null), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 18
            echo "            <p class=\"text-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "intitule", array()), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            
            </div>
            </div>
        </div>

        <div class=\"col-md-4\">
           

            
        </div>
    
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return ":FeedbackBundle/seance:start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  53 => 18,  49 => 17,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":FeedbackBundle/seance:start.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/app/Resources/views/FeedbackBundle/seance/start.html.twig");
    }
}
