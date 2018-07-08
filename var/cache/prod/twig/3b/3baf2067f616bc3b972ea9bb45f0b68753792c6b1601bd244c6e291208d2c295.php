<?php

/* dswQuizBundle:Default:landing.html.twig */
class __TwigTemplate_8b278dd33f7606446bcadfb787ae330ec33a33b723d9d82ed7e7ce7c9c432991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswQuizBundle::layout.html.twig", "dswQuizBundle:Default:landing.html.twig", 1);
        $this->blocks = array(
            'dsw_quiz_content' => array($this, 'block_dsw_quiz_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswQuizBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_dsw_quiz_content($context, array $blocks = array())
    {
        // line 4
        echo "  
    <div class=\"landing_page\">
    <div class=\"container py-5\">
        
        <div class=\"text-md-left text-center\">
           
            <h1 class=\"display-3 mt-3\">
                Quiz !
            </h1>

            <a class=\"btn btn-primary btn-xl my-4\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_quiz_intro", array("id" => ($context["demo"] ?? null))), "html", null, true);
        echo "\">Essayez une démo</a><br>
            
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

                <div class=\"row\">
                <div class=\"input-group col-md-6\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "slug", array()), 'widget');
        echo "
                    <span class=\"input-group-btn\">
                        <input type=\"submit\" value=\"Go !\" class=\"btn btn-primary btn-lg\" />
                    </span>
                </div>
                </div>

            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        
        </div>
        
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Default:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  60 => 22,  53 => 18,  48 => 16,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Default:landing.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Default/landing.html.twig");
    }
}
