<?php

/* dswUserBundle:Security:login_learn_admin.html.twig */
class __TwigTemplate_c1388aeade727d276fac8bf1c5f1854d16a34c03463d221f456eca3b0fa0aa69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswUserBundle::layout.html.twig", "dswUserBundle:Security:login_learn_admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswUserBundle::layout.html.twig";
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
    
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">

        <img class=\"card-img-top img-fluid mb-1\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/connexion_learn.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">

        ";
        // line 12
        if (($context["error"] ?? null)) {
            // line 13
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "message", array()), "html", null, true);
            echo "</div>
        ";
        }
        // line 15
        echo "
        <div class=\"card-block p-4\" id=\"sign_in\">

            <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_admin_security_check");
        echo "\" method=\"post\" class=\"form-horizontal mx-3\">

                <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"Votre email professionnel\" class=\"form-control mb-3\" />

                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" class=\"form-control mb-3\" />

                <div class=\"row\"> 
                <div class=\"text-center mx-auto\">
                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Espace administrateur\" class=\"btn btn-primary mb-3\" />
                </div>
                </div>

            </form>

        </div>

    </div>
    </div>
    </div>

</div
";
    }

    public function getTemplateName()
    {
        return "dswUserBundle:Security:login_learn_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  52 => 15,  46 => 13,  44 => 12,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswUserBundle:Security:login_learn_admin.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Security/login_learn_admin.html.twig");
    }
}
