<?php

/* dswQuizBundle:Answer:show.html.twig */
class __TwigTemplate_53c1d6bfe65fff982e4c614d86ac52ce33ebc67baa0405a0ae84ae56b5718a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Answer:show.html.twig", 1);
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
   
    <h1>Answer</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["answer"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Answer</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["answer"] ?? null), "answer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Feedback</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["answer"] ?? null), "feedback", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Score</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["answer"] ?? null), "score", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_answer_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_answer_edit", array("id" => $this->getAttribute(($context["answer"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>
    </ul>
    
</div>    
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Answer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 39,  84 => 37,  78 => 34,  72 => 31,  62 => 24,  55 => 20,  48 => 16,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Answer:show.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Answer/show.html.twig");
    }
}
