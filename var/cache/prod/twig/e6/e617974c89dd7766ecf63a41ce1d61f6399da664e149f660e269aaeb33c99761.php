<?php

/* dswEvalBundle:Evaluation:show.html.twig */
class __TwigTemplate_89cc63005df25c2aa119661c73d59ab62baab313c7c6acabb43e2ea415f3482e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswEvalBundle::layout.html.twig", "dswEvalBundle:Evaluation:show.html.twig", 1);
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
   
    <h1>Evalué : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? null), "evalue", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? null), "evalue", array()), "lastname", array()), "html", null, true);
        echo "</h1>
        
    <p>Evaluateurs :</p>
    <ul>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["evaluation"] ?? null), "evaluateurs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["evaluateur"]) {
            // line 11
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluateur"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluateur"], "lastname", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
    
    <br>
    <br>
    
    
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["evaluation"] ?? null), "evaluateurs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["evaluateur"]) {
            // line 20
            echo "    
        <h2>Réponses de ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluateur"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluateur"], "lastname", array()), "html", null, true);
            echo "</h2>

        ";
            // line 23
            $context["colonnes"] = 8;
            // line 24
            echo "        ";
            $context["i"] = 0;
            // line 25
            echo "        
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Entreprenant</th>
                    <th>Réaliste</th>
                    <th>Participatif</th>
                    <th>Organisateur</th>
                    <th>Directif</th>
                    <th>Arrangeant</th>
                    <th>Improvisateur</th>
                    <th>Formaliste</th>
                </tr>
            </thead>
            
            <tbody>
            
                <tr>
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["evaluation"] ?? null), "records", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                if (($this->getAttribute($context["record"], "user", array()) == $context["evaluateur"])) {
                    // line 44
                    echo "
                    <td>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "points", array()), "html", null, true);
                    echo "</td>

                    ";
                    // line 47
                    if (((($context["i"] ?? null) == 48) || (($this->getAttribute($context["loop"], "index", array()) % ($context["colonnes"] ?? null)) == 0))) {
                        // line 48
                        echo "                    </tr>
                    <tr>
                    ";
                    }
                    // line 51
                    echo "
                ";
                    // line 52
                    $context["i"] = (($context["i"] ?? null) + 1);
                    echo "        

                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                </tr>
            
            </tbody>
            
        </table>

    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    




    <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eval_evaluation_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>

    <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eval_evaluation_edit", array("id" => $this->getAttribute(($context["evaluation"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a>

    ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
        <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
    ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "

    
";
    }

    public function getTemplateName()
    {
        return "dswEvalBundle:Evaluation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 74,  185 => 72,  180 => 70,  175 => 68,  168 => 63,  155 => 55,  142 => 52,  139 => 51,  134 => 48,  132 => 47,  127 => 45,  124 => 44,  113 => 43,  93 => 25,  90 => 24,  88 => 23,  81 => 21,  78 => 20,  74 => 19,  66 => 13,  55 => 11,  51 => 10,  42 => 6,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswEvalBundle:Evaluation:show.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/Evaluation/show.html.twig");
    }
}
