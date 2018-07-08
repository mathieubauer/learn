<?php

/* dswQuizBundle:Questionnaire:bilan.html.twig */
class __TwigTemplate_ebb37d432087a9a1c294d6a480c164e28b241d555cc2daef94ff47520b8e9934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Questionnaire:bilan.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
   
    <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["questionnaire"] ?? null), "titre", array()), "html", null, true);
        echo "</h1>
    <h2>Votre score : ";
        // line 7
        echo twig_escape_filter($this->env, ($context["score"] ?? null), "html", null, true);
        echo " point(s)</h2>
    
    <div class=\"row\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attempts"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["attempt"]) {
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["attempt"], "answer", array()), "question", array()), "questionnaire", array()), "id", array()) == $this->getAttribute(($context["questionnaire"] ?? null), "id", array()))) {
                // line 11
                echo "       
        <div class=\"col-md-12\">
        <div class=\"card\">
            
            <div class=\"card-header\">
              
                <strong>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["attempt"], "answer", array()), "question", array()), "intitule", array()), "html", null, true);
                echo "</strong>
            </div>
            <div class=\"card-body\">
                Votre réponse : ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attempt"], "answer", array()), "answer", array()), "html", null, true);
                echo "<br>
                ";
                // line 21
                if ($this->getAttribute($this->getAttribute(($context["bonnesReponses"] ?? null), $this->getAttribute($context["loop"], "index0", array()), array(), "array", false, true), "answer", array(), "any", true, true)) {
                    // line 22
                    echo "                    La bonne réponse : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bonnesReponses"] ?? null), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "answer", array()), "html", null, true);
                    echo "<br>
                ";
                }
                // line 24
                echo "                Score : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attempt"], "answer", array()), "score", array()), "html", null, true);
                echo "
                
            </div>
            
        </div>
        </div>
        
    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 32
            echo "    
        <div class=\"col-md-12\">
        <p>Vous n'avez répondu à aucune question !</p>
        </div>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attempt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </div>
    
    <a class=\"btn btn-primary mt-3\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_quiz_intro", array("id" => $this->getAttribute(($context["questionnaire"] ?? null), "id", array()))), "html", null, true);
        echo "\">Recommencer le questionnaire</a><br>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Questionnaire:bilan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  112 => 38,  101 => 32,  83 => 24,  77 => 22,  75 => 21,  71 => 20,  65 => 17,  57 => 11,  45 => 10,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Questionnaire:bilan.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Questionnaire/bilan.html.twig");
    }
}
