<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_17e5d3422dbc0cbd2cb0d23bf18b24e9560feeaaa8f8b980bc3633395c8c9fec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</title>
  </head>
  <body>
    <h1>Oups ! Une erreur</h1>
    <h2>Le serveur a renvoyé les informations suivantes : \"";
        // line 9
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "\".</h2>

    <div>
       <p>Vous n'avez rien compris ? Nous non plus...</p>
       <p>Mais n'hésitez pas à nous prévenir du problème !</p>
       <p>Le mieux, c'est sans doute de revenir à la page d'accueil <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_core_home");
        echo "\">Retour</a> </p>
       
    </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  32 => 9,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error403.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/app/Resources/TwigBundle/views/Exception/error403.html.twig");
    }
}
