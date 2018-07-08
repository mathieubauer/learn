<?php

/* dswQuizBundle:Questionnaire:show.html.twig */
class __TwigTemplate_d6154735ed694690fe0319c4d5ac0635b9432d1cf944ed6b4d8a385bdb8f66b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Questionnaire:show.html.twig", 1);
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
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_questionnaire_edit", array("id" => $this->getAttribute(($context["questionnaire"] ?? null), "id", array()))), "html", null, true);
        echo "\">Éditer</a>
    
    
    <hr class=\"mt-5\">
    
    
    ";
        // line 14
        echo "    
    <h2>Questions</h2>
    
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["questionnaire"] ?? null), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 18
            echo "      
        <div class=\"card\">
       
            <div class=\"card-header\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "intitule", array()), "html", null, true);
            echo "</strong>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_edit", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                </div>
            </div>

            <ul class=\"list-group list-group-flush\">
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "answers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 30
                echo "                <li class=\"list-group-item py-2 d-flex justify-content-between\">
                    <small>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "answer", array()), "html", null, true);
                echo "</small>
                    <small>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "score", array()), "html", null, true);
                echo "</small>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </ul>

            ";
            // line 46
            echo "        
        </div>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    
    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_question_questionnaire_new", array("id" => $this->getAttribute(($context["questionnaire"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary my-3\">Ajouter une question</a>
 
    
    <hr class=\"mt-5\">
    
    
    ";
        // line 58
        echo "    
    <h2>Réponses</h2>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th>User</th>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["questionnaire"] ?? null), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 66
            echo "                <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "intitule", array()), "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </tr>
        </thead>
        <tbody>
        
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attemptsUsers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attemptsUser"]) {
            // line 73
            echo "            <tr>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attemptsUser"], "user", array()), "username", array()), "html", null, true);
            echo "</td>
                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attempts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attempt"]) {
                if (($this->getAttribute($this->getAttribute($context["attempt"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute($context["attemptsUser"], "user", array()), "username", array()))) {
                    // line 76
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attempt"], "answer", array()), "answer", array()), "html", null, true);
                    echo "</td>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attempt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attemptsUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
        </tbody>
    </table>
    
    
    
    <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_quiz_intro", array("id" => $this->getAttribute(($context["questionnaire"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-secondary mt-3\">Essayer le questionnaire</a>
    
    <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quiz_questionnaire_index");
        echo "\" class=\"btn btn-secondary mt-3\">Retour à la liste des questionnaires</a>

    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
        <input type=\"submit\" value=\"Supprimer le questionnaire\" class=\"btn btn-danger mt-3\"/>
    ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Questionnaire:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 92,  200 => 90,  195 => 88,  190 => 86,  182 => 80,  175 => 78,  165 => 76,  160 => 75,  156 => 74,  153 => 73,  149 => 72,  143 => 68,  134 => 66,  130 => 65,  121 => 58,  112 => 51,  109 => 50,  100 => 46,  96 => 35,  87 => 32,  83 => 31,  80 => 30,  76 => 29,  68 => 24,  64 => 23,  57 => 18,  53 => 17,  48 => 14,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Questionnaire:show.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Questionnaire/show.html.twig");
    }
}
