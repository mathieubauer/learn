<?php

/* dswUserBundle:Security:usernameCreate.html.twig */
class __TwigTemplate_6d4a1e458452a9d2b8364d7f990fb683ddb44b92aa4f7f485c458d3d3f6b6244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "dswUserBundle:Security:usernameCreate.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "@dswUser/Security/usernameCreate_content.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "dswUserBundle:Security:usernameCreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:Security:usernameCreate.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Security/usernameCreate.html.twig");
    }
}
