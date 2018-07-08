<?php

/* dswEvalBundle:Evaluation:fin.html.twig */
class __TwigTemplate_5e72060848b94d394715a962a3ff2aef36491a197d5302159d6a607dd5d38311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswEvalBundle::layout.html.twig", "dswEvalBundle:Evaluation:fin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswEvalBundle:Evaluation:fin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswEvalBundle:Evaluation:fin.html.twig"));

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
    <h1>Evaluation 360 - Merci !</h1>
    
    ";
        // line 7
        if (($context["bilan"] ?? $this->getContext($context, "bilan"))) {
            // line 8
            echo "    
        <h2>Réponses de ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evaluateur"] ?? $this->getContext($context, "evaluateur")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evaluateur"] ?? $this->getContext($context, "evaluateur")), "lastname", array()), "html", null, true);
            echo "</h2>
        
<div class=\"skillbar clearfix\" data-percent=\"";
            // line 11
            echo twig_escape_filter($this->env, ((($context["entreprenant"] ?? $this->getContext($context, "entreprenant")) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #ef9a9a;\"><span>Entreprenant</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #ef9a9a;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 14
            echo twig_escape_filter($this->env, ($context["entreprenant"] ?? $this->getContext($context, "entreprenant")), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 17
            echo twig_escape_filter($this->env, ((($context["realiste"] ?? $this->getContext($context, "realiste")) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #ce93d8;\"><span>Réaliste</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #ce93d8;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 20
            echo twig_escape_filter($this->env, ($context["realiste"] ?? $this->getContext($context, "realiste")), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 23
            echo twig_escape_filter($this->env, ((($context["participatif"] ?? $this->getContext($context, "participatif")) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #b0bec5;\"><span>Participatif</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #b0bec5;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 26
            echo twig_escape_filter($this->env, ($context["participatif"] ?? $this->getContext($context, "participatif")), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 29
            echo twig_escape_filter($this->env, ((($context["organisateur"] ?? $this->getContext($context, "organisateur")) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #9fa8da;\"><span>Organisateur</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #9fa8da;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 32
            echo twig_escape_filter($this->env, ($context["organisateur"] ?? $this->getContext($context, "organisateur")), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 35
            echo twig_escape_filter($this->env, ((($context["directif"] ?? $this->getContext($context, "directif")) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #ffab91;\"><span>Directif</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #ffab91;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 38
            echo twig_escape_filter($this->env, ($context["directif"] ?? $this->getContext($context, "directif")), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 41
            echo twig_escape_filter($this->env, ((($context["arrangeant"] ?? $this->getContext($context, "arrangeant")) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #80cbc4;\"><span>Arrangeant</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #80cbc4;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 44
            echo twig_escape_filter($this->env, ($context["arrangeant"] ?? $this->getContext($context, "arrangeant")), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 47
            echo twig_escape_filter($this->env, ((($context["improvisateur"] ?? $this->getContext($context, "improvisateur")) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #e6ee9c;\"><span>Improvisateur</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #e6ee9c;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 50
            echo twig_escape_filter($this->env, ($context["improvisateur"] ?? $this->getContext($context, "improvisateur")), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 53
            echo twig_escape_filter($this->env, ((($context["formaliste"] ?? $this->getContext($context, "formaliste")) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #bcaaa4;\"><span>Formaliste</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #bcaaa4;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 56
            echo twig_escape_filter($this->env, ($context["formaliste"] ?? $this->getContext($context, "formaliste")), "html", null, true);
            echo "</div>
</div>


        
        ";
            // line 103
            echo "
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["evaluation"] ?? $this->getContext($context, "evaluation")), "textes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["texte"]) {
                // line 105
                echo "           <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["texte"], "reponse", array()), "html", null, true);
                echo "</strong>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['texte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "    
    ";
        }
        // line 109
        echo "    
    <p>Vos réponses ont bien été prises en compte, merci de votre participation.</p>
    <p>Vous pouvez maintenant fermer cette fenêtre.</p>
    
    

    


    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswEvalBundle:Evaluation:fin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 109,  199 => 107,  190 => 105,  186 => 104,  183 => 103,  175 => 56,  169 => 53,  163 => 50,  157 => 47,  151 => 44,  145 => 41,  139 => 38,  133 => 35,  127 => 32,  121 => 29,  115 => 26,  109 => 23,  103 => 20,  97 => 17,  91 => 14,  85 => 11,  78 => 9,  75 => 8,  73 => 7,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
   
    <h1>Evaluation 360 - Merci !</h1>
    
    {% if bilan %}
    
        <h2>Réponses de {{ evaluateur.firstname }} {{ evaluateur.lastname }}</h2>
        
<div class=\"skillbar clearfix\" data-percent=\"{{ entreprenant * 100 / 36 }}%\">
\t<div class=\"skillbar-title\" style=\"background: #ef9a9a;\"><span>Entreprenant</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #ef9a9a;\"></div>
\t<div class=\"skill-bar-percent\">{{ entreprenant }}</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"{{ realiste * 100 / 36 }}%\">
\t<div class=\"skillbar-title\" style=\"background: #ce93d8;\"><span>Réaliste</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #ce93d8;\"></div>
\t<div class=\"skill-bar-percent\">{{ realiste }}</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"{{ participatif * 100 / 36 }}%\">
\t<div class=\"skillbar-title\" style=\"background: #b0bec5;\"><span>Participatif</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #b0bec5;\"></div>
\t<div class=\"skill-bar-percent\">{{ participatif }}</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"{{ organisateur * 100 / 36 }}%\">
\t<div class=\"skillbar-title\" style=\"background: #9fa8da;\"><span>Organisateur</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #9fa8da;\"></div>
\t<div class=\"skill-bar-percent\">{{ organisateur }}</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"{{ directif * 100 / 36 }}%\">
\t<div class=\"skillbar-title\" style=\"background: #ffab91;\"><span>Directif</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #ffab91;\"></div>
\t<div class=\"skill-bar-percent\">{{ directif }}</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"{{ arrangeant * 100 / 36 }}%\">
\t<div class=\"skillbar-title\" style=\"background: #80cbc4;\"><span>Arrangeant</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #80cbc4;\"></div>
\t<div class=\"skill-bar-percent\">{{ arrangeant }}</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"{{ improvisateur * 100 / 36 }}%\">
\t<div class=\"skillbar-title\" style=\"background: #e6ee9c;\"><span>Improvisateur</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #e6ee9c;\"></div>
\t<div class=\"skill-bar-percent\">{{ improvisateur }}</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"{{ formaliste * 100 / 36 }}%\">
\t<div class=\"skillbar-title\" style=\"background: #bcaaa4;\"><span>Formaliste</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #bcaaa4;\"></div>
\t<div class=\"skill-bar-percent\">{{ formaliste }}</div>
</div>


        
        {#

        {% set colonnes = 8 %}
        {% set i = 0 %}

        
        <table class=\"table table-sm\">
            <thead>
                <tr class=\"\">
                    <th class=\"\">Entreprenant</th>
                    <th class=\"\">Réaliste</th>
                    <th class=\"\">Participatif</th>
                    <th class=\"\">Organisateur</th>
                    <th class=\"\">Directif</th>
                    <th class=\"\">Arrangeant</th>
                    <th class=\"\">Improvisateur</th>
                    <th class=\"\">Formaliste</th>
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
            
        #}

        {% for texte in evaluation.textes %}
           <strong>{{ texte.reponse }}</strong>
        {% endfor %}
    
    {% endif %}
    
    <p>Vos réponses ont bien été prises en compte, merci de votre participation.</p>
    <p>Vous pouvez maintenant fermer cette fenêtre.</p>
    
    

    


    

{% endblock %}
", "dswEvalBundle:Evaluation:fin.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/Evaluation/fin.html.twig");
    }
}
