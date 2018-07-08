<?php

/* dswQuizBundle:Question:play.html.twig */
class __TwigTemplate_e0fe0b3bdde2cecbe3b3b8a0700d99bbbd892cdee2e9c5b7b39af931164d5a19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Question:play.html.twig", 1);
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
<div class=\"row\">
   
    <div class=\"col-md-12\">
    <h1 class=\"question\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? null), "intitule", array()), "html", null, true);
        echo "</h1>
    </div>
    
    
    <!--
    <form method=\"post\" action=\"index.php?questionnaire=test_suiv\">

        <div class=\"\" data-toggle=\"buttons\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"A\" value=\"A\"><?php echo \$resultat['r1']; ?>
            </label>
            <hr class=\"hr_thin\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"B\" value=\"B\"><?php echo \$resultat['r2']; ?>
            </label>
            <hr class=\"hr_thin\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"C\" value=\"C\"><?php echo \$resultat['r3']; ?>
            </label>
            <hr class=\"hr_thin\">

            <label class=\"btn btn-primary reponse\">
            <input type=\"radio\" name=\"reponse\" id=\"D\" value=\"D\"><?php echo \$resultat['r4']; ?>
            </label>

        </div>
        <br>

        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Valider la réponse\" />

    </form>
    -->
    
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["reponse"] ?? null), 'form_start');
        echo "
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["reponse"] ?? null), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["reponse"] ?? null), 'form_end');
        echo "
    
    
    <!--<div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? null), "r1", array()), "html", null, true);
        echo "
        </div>
    </div>
    </div>
    
    <div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? null), "r2", array()), "html", null, true);
        echo "
        </div>
    </div>
    </div>
    
    <div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? null), "r3", array()), "html", null, true);
        echo "
        </div>
    </div>
    </div>
    
    <div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? null), "r4", array()), "html", null, true);
        echo "
        </div>
    </div>
    </div>-->



    <ul>
        <li>
            <a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_edit", array("id" => $this->getAttribute(($context["question"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            <small>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["question"] ?? null), "id", array()), "html", null, true);
        echo "</small>
        </li>
    </ul>
    
    
    
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Question:play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 92,  145 => 89,  139 => 86,  127 => 77,  116 => 69,  105 => 61,  94 => 53,  85 => 47,  80 => 45,  76 => 44,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Question:play.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Question/play.html.twig");
    }
}
