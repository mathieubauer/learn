<?php

/* dswEvalBundle:Evaluation:fin.html.twig */
class __TwigTemplate_d8d85cfce6642d5c1b6a3e0c16c6c501fab7d18ac4c3e4cc17fb30f7d59697c1 extends Twig_Template
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
    <h1>Evaluation 360 - Merci !</h1>
    
    ";
        // line 7
        if (($context["bilan"] ?? null)) {
            // line 8
            echo "    
        <h2>Réponses de ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evaluateur"] ?? null), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["evaluateur"] ?? null), "lastname", array()), "html", null, true);
            echo "</h2>
        
<div class=\"skillbar clearfix\" data-percent=\"";
            // line 11
            echo twig_escape_filter($this->env, ((($context["entreprenant"] ?? null) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #ef9a9a;\"><span>Entreprenant</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #ef9a9a;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 14
            echo twig_escape_filter($this->env, ($context["entreprenant"] ?? null), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 17
            echo twig_escape_filter($this->env, ((($context["realiste"] ?? null) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #ce93d8;\"><span>Réaliste</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #ce93d8;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 20
            echo twig_escape_filter($this->env, ($context["realiste"] ?? null), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 23
            echo twig_escape_filter($this->env, ((($context["participatif"] ?? null) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #b0bec5;\"><span>Participatif</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #b0bec5;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 26
            echo twig_escape_filter($this->env, ($context["participatif"] ?? null), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 29
            echo twig_escape_filter($this->env, ((($context["organisateur"] ?? null) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #9fa8da;\"><span>Organisateur</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #9fa8da;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 32
            echo twig_escape_filter($this->env, ($context["organisateur"] ?? null), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 35
            echo twig_escape_filter($this->env, ((($context["directif"] ?? null) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #ffab91;\"><span>Directif</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #ffab91;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 38
            echo twig_escape_filter($this->env, ($context["directif"] ?? null), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 41
            echo twig_escape_filter($this->env, ((($context["arrangeant"] ?? null) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #80cbc4;\"><span>Arrangeant</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #80cbc4;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 44
            echo twig_escape_filter($this->env, ($context["arrangeant"] ?? null), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 47
            echo twig_escape_filter($this->env, ((($context["improvisateur"] ?? null) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #e6ee9c;\"><span>Improvisateur</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #e6ee9c;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 50
            echo twig_escape_filter($this->env, ($context["improvisateur"] ?? null), "html", null, true);
            echo "</div>
</div>

<div class=\"skillbar clearfix\" data-percent=\"";
            // line 53
            echo twig_escape_filter($this->env, ((($context["formaliste"] ?? null) * 100) / 36), "html", null, true);
            echo "%\">
\t<div class=\"skillbar-title\" style=\"background: #bcaaa4;\"><span>Formaliste</span></div>
\t<div class=\"skillbar-bar\" style=\"background: #bcaaa4;\"></div>
\t<div class=\"skill-bar-percent\">";
            // line 56
            echo twig_escape_filter($this->env, ($context["formaliste"] ?? null), "html", null, true);
            echo "</div>
</div>


        
        ";
            // line 103
            echo "
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["evaluation"] ?? null), "textes", array()));
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
        return array (  173 => 109,  169 => 107,  160 => 105,  156 => 104,  153 => 103,  145 => 56,  139 => 53,  133 => 50,  127 => 47,  121 => 44,  115 => 41,  109 => 38,  103 => 35,  97 => 32,  91 => 29,  85 => 26,  79 => 23,  73 => 20,  67 => 17,  61 => 14,  55 => 11,  48 => 9,  45 => 8,  43 => 7,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswEvalBundle:Evaluation:fin.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/Evaluation/fin.html.twig");
    }
}
