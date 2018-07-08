<?php

/* dswEvalBundle:Evaluation:start.html.twig */
class __TwigTemplate_179e061984fa034404e9f1f1109010a3a29da25a33369995e8dc2b4884aba8b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswEvalBundle::layout.html.twig", "dswEvalBundle:Evaluation:start.html.twig", 1);
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
    <h1>Évaluation 360°</h1>
    
    ";
        // line 7
        if ( !(null === ($context["evaluation"] ?? null))) {
            // line 8
            echo "    
        <p>Bienvenue 
        ";
            // line 10
            if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "firstname", array()))) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "firstname", array()), "html", null, true);
                echo ",
        ";
            } else {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
                echo ",
        ";
            }
            // line 15
            echo "        </p>
    
        <p>Vous allez participer à l'évaluation de <strong>Monsieur 
        ";
            // line 18
            if ( !(null === $this->getAttribute($this->getAttribute(($context["evaluation"] ?? null), "evalue", array()), "firstname", array()))) {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? null), "evalue", array()), "firstname", array()), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            if ( !(null === $this->getAttribute($this->getAttribute(($context["evaluation"] ?? null), "evalue", array()), "lastname", array()))) {
                // line 23
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? null), "evalue", array()), "lastname", array()), "html", null, true);
                echo ".
        ";
            } else {
                // line 25
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? null), "evalue", array()), "username", array()), "html", null, true);
                echo ".
        ";
            }
            // line 27
            echo "        </strong></p>
        
        <p>Dans le cadre de la prise de fonction des nouveaux sous-directeurs, la DGAFP attend que chaque sous-directeur / directrice fasse un « bilan managérial » afin que « chaque auditeur connaisse (ou confirme) son profil managérial ainsi que les points forts et les axes d’amélioration ».</p>
        
        <p>Pour aider chaque sous-directeur à établir ce bilan, le Ministère de la Défense a choisi d’utiliser un questionnaire et d’interroger plusieurs personnes travaillant avec le sous-directeur / directrice.</p>
        
        <p>Nous vous proposons de :</p>
        <ul>
            <li>répondre à ce questionnaire,</li>
            <li>indiquer, en quelques mots, lignes, ce qui d’après vous, caractérise le management de votre sous-directeur.</li>
        </ul>
        
        <p>L'animateur en charge de la collecte des résultats est ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? null), "animateur", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["evaluation"] ?? null), "animateur", array()), "lastname", array()), "html", null, true);
            echo ". Nous garantissons l'anonymat des réponses.</p>

        <a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_eval_intro");
            echo "\" class=\"btn btn-primary\">Démarrer l'évaluation</a>
    
    ";
        } else {
            // line 44
            echo "    
        <p>Vous n'avez personne à évaluer</p>
    
    ";
        }
        // line 48
        echo "    
";
    }

    public function getTemplateName()
    {
        return "dswEvalBundle:Evaluation:start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 48,  120 => 44,  114 => 41,  107 => 39,  93 => 27,  87 => 25,  81 => 23,  79 => 22,  76 => 21,  70 => 19,  68 => 18,  63 => 15,  57 => 13,  51 => 11,  49 => 10,  45 => 8,  43 => 7,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswEvalBundle:Evaluation:start.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/EvalBundle/Resources/views/Evaluation/start.html.twig");
    }
}
