<?php

/* dswEvalBundle:Evaluation:index.html.twig */
class __TwigTemplate_1d28e870ae34394c0b5f174a8882ccce50f474453bca1e2e4fd3c64d8d75ddb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswEvalBundle::layout.html.twig", "dswEvalBundle:Evaluation:index.html.twig", 1);
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
   
    <h1>Evaluations</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Evalué</th>
                <th>Evaluateur(s)</th>
                <th>Sexe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evaluations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eval_evaluation_show", array("id" => $this->getAttribute($context["evaluation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "evalue", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["evaluation"], "evaluateurs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluateur"]) {
                // line 25
                echo "                    ";
                echo twig_escape_filter($this->env, $context["evaluateur"], "html", null, true);
                echo "<br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "sexe", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eval_evaluation_show", array("id" => $this->getAttribute($context["evaluation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eval_evaluation_edit", array("id" => $this->getAttribute($context["evaluation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eval_evaluation_new");
        echo "\" class=\"btn btn-primary\">Create a new evaluation</a>
    
";
    }

    public function getTemplateName()
    {
        return "dswEvalBundle:Evaluation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  114 => 41,  102 => 35,  96 => 32,  89 => 28,  86 => 27,  77 => 25,  73 => 24,  68 => 22,  62 => 21,  59 => 20,  55 => 19,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswEvalBundle:Evaluation:index.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/Evaluation/index.html.twig");
    }
}
