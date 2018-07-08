<?php

/* dswUserBundle:User:delete.html.twig */
class __TwigTemplate_734319270c32a098a32b1970781ab502f50d4b43f1d533ff1ba3fb609c6662a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswUserBundle:User:delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_ampli_jumbotron' => array($this, 'block_dsw_ampli_jumbotron'),
            'dsw_ampli_content' => array($this, 'block_dsw_ampli_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswAmpliBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Supprimer une idée";
    }

    // line 3
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
    }

    // line 5
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container my-5\">

    <h1>Supprimer un utilisateur</h1>
    
    ";
        // line 10
        if (twig_test_empty(($context["idees"] ?? null))) {
            // line 11
            echo "    
        <p>Etes-vous certain de vouloir supprimer l'utilisateur \"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
            echo "\" ainsi que les contributions et likes correspondants ?</p>
        
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["likes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
                // line 15
                echo "            <i class=\"fa fa-heart\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["like"], "idee", array()), "titre", array()), "html", null, true);
                echo "<br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        
        <p class=\"mt-3\">
        <small>Seuls les likes s'affichent. Les contributions éventuelles (commentaires et temps) ne s'affichent pas encore.</small><br>
        <small>Attention aux autres bundles également !</small>
        </p>
        

        ";
            // line 25
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_user_delete", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
            echo "\" method=\"post\">

        <a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin_user");
            echo "\" class=\"btn btn-primary\">
        Annuler
        </a>

        ";
            // line 32
            echo "        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

        ";
            // line 35
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
        </form>
    
    ";
        } else {
            // line 39
            echo "    
        <h3>Vous ne pouvez pas supprimer cet utilisateur car il est l'auteur des idées suivantes</h3>

        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["idees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
                // line 43
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
                echo "<br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        
        <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin_user");
            echo "\" class=\"btn btn-primary mt-3\">Retour</a>
    
    ";
        }
        // line 48
        echo "   
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswUserBundle:User:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 48,  129 => 46,  126 => 45,  117 => 43,  113 => 42,  108 => 39,  100 => 35,  96 => 32,  89 => 27,  83 => 25,  74 => 17,  65 => 15,  61 => 14,  56 => 12,  53 => 11,  51 => 10,  45 => 6,  42 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:User:delete.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/User/delete.html.twig");
    }
}
