<?php

/* dswAmpliBundle:Idee:index.html.twig */
class __TwigTemplate_fc624bf82ee56725ed9fa9662403f9f06f2dd5bdc41b49956d5d55b5d061811f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("dswAmpliBundle::layout.html.twig", "dswAmpliBundle:Idee:index.html.twig", 3);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Liste des idées";
    }

    // line 5
    public function block_dsw_ampli_jumbotron($context, array $blocks = array())
    {
    }

    // line 7
    public function block_dsw_ampli_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container my-5\">
   
    <h1>Liste des idées</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>User</th>
                <th>Cœurs</th>
                <th>Sélection</th>
                <th class=\"col-1\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["idees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "user", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "coeurs", array())), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 33
            if ($this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "selection", array())) {
                // line 34
                echo "                    
                    <span id=\"idee_";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"selected btn btn-secondary btn-sm\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></span>
                    
                    ";
            } else {
                // line 38
                echo "                    
                    <span id=\"idee_";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"unselected btn btn-secondary btn-sm\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span>
                    
                    ";
            }
            // line 42
            echo "                    
                </td>
                <td>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_show", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm m-1\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_edit", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm m-1\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ampli_idee_delete", array("id" => $this->getAttribute($this->getAttribute($context["idee"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm m-1\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
        
    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_viewEspace", array("id" => $this->getAttribute(($context["espace"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-dark mb-3\">Retour à l'espace</a>
    ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin");
            echo "\" class=\"btn btn-dark mb-3\">Accueil Admin</a>
    ";
        }
        // line 58
        echo "    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswAmpliBundle:Idee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 58,  148 => 56,  146 => 55,  142 => 54,  137 => 51,  127 => 47,  123 => 46,  119 => 45,  114 => 42,  108 => 39,  105 => 38,  99 => 35,  96 => 34,  94 => 33,  89 => 31,  85 => 30,  81 => 29,  77 => 28,  71 => 27,  68 => 26,  64 => 25,  45 => 8,  42 => 7,  37 => 5,  30 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswAmpliBundle:Idee:index.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/AmpliBundle/Resources/views/Idee/index.html.twig");
    }
}
