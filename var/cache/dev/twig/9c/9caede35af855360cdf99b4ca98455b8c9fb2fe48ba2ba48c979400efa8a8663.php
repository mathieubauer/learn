<?php

/* dswEvalBundle:Evaluation:show.html.twig */
class __TwigTemplate_b2d76e2ce416838ec5f2c9cfa6f155c11c5d8b94ab6b29a46752149e9f30a1ee extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswEvalBundle:Evaluation:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswEvalBundle:Evaluation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_dsw_eval_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_eval_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_eval_content"));

        // line 4
        echo "
   
    <h1>Evalué : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "evalue", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "evalue", array()), "lastname", array()), "html", null, true);
        echo "</h1>
        
    <p>Evaluateurs :</p>
    <ul>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "evaluateurs", array()));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "evaluateurs", array()));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "records", array()));
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
                    if (((($context["i"] ?? $this->getContext($context, "i")) == 48) || (($this->getAttribute($context["loop"], "index", array()) % ($context["colonnes"] ?? $this->getContext($context, "colonnes"))) == 0))) {
                        // line 48
                        echo "                    </tr>
                    <tr>
                    ";
                    }
                    // line 51
                    echo "
                ";
                    // line 52
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eval_evaluation_edit", array("id" => $this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a>

    ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
    ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  220 => 74,  215 => 72,  210 => 70,  205 => 68,  198 => 63,  185 => 55,  172 => 52,  169 => 51,  164 => 48,  162 => 47,  157 => 45,  154 => 44,  143 => 43,  123 => 25,  120 => 24,  118 => 23,  111 => 21,  108 => 20,  104 => 19,  96 => 13,  85 => 11,  81 => 10,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswEvalBundle::layout.html.twig\" %}
{% block title %}{{ parent() }}{% endblock %}
{% block dsw_eval_content %}

   
    <h1>Evalué : {{ evaluation.evalue.firstname }} {{ evaluation.evalue.lastname }}</h1>
        
    <p>Evaluateurs :</p>
    <ul>
        {% for evaluateur in evaluation.evaluateurs %}
        <li>{{ evaluateur.firstname }} {{ evaluateur.lastname }}</li>
        {% endfor %}
    </ul>
    
    <br>
    <br>
    
    
    {% for evaluateur in evaluation.evaluateurs %}
    
        <h2>Réponses de {{ evaluateur.firstname }} {{ evaluateur.lastname }}</h2>

        {% set colonnes = 8 %}
        {% set i = 0 %}
        
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
                {% for record in evaluation.records if record.user == evaluateur %}

                    <td>{{ record.points }}</td>

                    {% if i == 48 or loop.index % colonnes == 0 %}
                    </tr>
                    <tr>
                    {% endif %}

                {% set i = i + 1 %}        

                {% endfor %}
                </tr>
            
            </tbody>
            
        </table>

    
    {% endfor %}
    




    <a href=\"{{ path('eval_evaluation_index') }}\" class=\"btn btn-primary\">Back to the list</a>

    <a href=\"{{ path('eval_evaluation_edit', { 'id': evaluation.id }) }}\" class=\"btn btn-primary\">Edit</a>

    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
    {{ form_end(delete_form) }}

    
{% endblock %}
", "dswEvalBundle:Evaluation:show.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/Evaluation/show.html.twig");
    }
}
