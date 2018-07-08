<?php

/* base.html.twig */
class __TwigTemplate_0eb3d72f7d9cbe32099ee157ec9d43480f846a04fcf0c8add6aedb6cc82aad4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body>
       
<header>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-toggleable-md\">

";
        // line 36
        if ($this->getAttribute(($context["espace"] ?? null), "id", array(), "any", true, true)) {
            // line 37
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_homepage", array("id" => $this->getAttribute(($context["espace"] ?? $this->getContext($context, "espace")), "id", array()))), "html", null, true);
            echo "\">Ampli by D-Sides</a>
";
        } elseif ($this->getAttribute($this->getAttribute(        // line 38
($context["idee"] ?? null), "espace", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 39
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_homepage", array("id" => $this->getAttribute($this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "espace", array()), "id", array()))), "html", null, true);
            echo "\">Ampli by D-Sides</a>
";
        } else {
            // line 41
            echo "<a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_landing");
            echo "\">Ampli by D-Sides</a>
";
        }
        // line 43
        echo "
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <i class=\"fa fa-user-circle\"></i>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">
        ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 51
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_user_view", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-user-circle\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
            </li>
            ";
            // line 54
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 55
                echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
                // line 56
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_ampli_admin");
                echo "\">Administration</a>
            </li>
            ";
            }
            // line 59
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
            </li>
        ";
        } else {
            // line 63
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
            </li>
        ";
        }
        // line 67
        echo "    </ul>
</div>
</nav>

</header>

    <div id=\"content\">
    <div class=\"container my-5\">
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "    </div>
    </div>

    <footer>
    </footer>

";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
        echo "
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ampli by D-Sides";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
    
    <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity@2/dist/flickity.min.css\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/progressbar.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/design.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/favicon.png"), "html", null, true);
        echo "\" />
    
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i\" rel=\"stylesheet\">
    
    <script src=\"https://use.fontawesome.com/19d03e082d.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <!-- <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script> -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    
    <!--
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/jqueryui-touch-punch.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/jquery-draggable-touch.js"), "html", null, true);
        echo "\"></script> 
    -->
    
    <script src=\"https://unpkg.com/packery@2/dist/packery.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/draggabilly@2/dist/draggabilly.pkgd.min.js\"></script>
    
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/grille.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/addAnswer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/coeurs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/selection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/progressbar.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/jquery.transform2d.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/jquery.jTinder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/main.js"), "html", null, true);
        echo "\"></script>
    
    ";
        // line 110
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "2df548e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2df548e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2df548e.js");
            // line 111
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 113
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 113,  319 => 111,  314 => 110,  309 => 108,  305 => 107,  301 => 106,  296 => 104,  292 => 103,  288 => 102,  284 => 101,  280 => 100,  269 => 92,  265 => 91,  256 => 84,  247 => 83,  237 => 76,  228 => 75,  210 => 20,  205 => 18,  201 => 17,  197 => 16,  192 => 14,  186 => 10,  177 => 9,  159 => 7,  147 => 115,  145 => 83,  137 => 77,  135 => 75,  125 => 67,  119 => 64,  116 => 63,  110 => 60,  107 => 59,  101 => 56,  98 => 55,  96 => 54,  89 => 52,  86 => 51,  84 => 50,  75 => 43,  69 => 41,  63 => 39,  61 => 38,  56 => 37,  54 => 36,  44 => 28,  42 => 9,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <title>{% block title %}Ampli by D-Sides{% endblock %}</title>

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
    
    <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity@2/dist/flickity.min.css\">
    
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/dswampli/css/progressbar.css') }}\" type=\"text/css\" />
    
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/dswampli/css/main.css') }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/dswampli/css/style.css') }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/dswampli/css/design.css') }}\" type=\"text/css\" />
    
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('bundles/dswampli/img/favicon.png') }}\" />
    
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i\" rel=\"stylesheet\">
    
    <script src=\"https://use.fontawesome.com/19d03e082d.js\"></script>
{% endblock %}
</head>

<body>
       
<header>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-toggleable-md\">

{% if espace.id is defined %}
<a class=\"navbar-brand\" href=\"{{ path('dsw_ampli_homepage', {'id': espace.id}) }}\">Ampli by D-Sides</a>
{% elseif idee.espace.id is defined %}
<a class=\"navbar-brand\" href=\"{{ path('dsw_ampli_homepage', {'id': idee.espace.id}) }}\">Ampli by D-Sides</a>
{% else %}
<a class=\"navbar-brand\" href=\"{{ path('dsw_ampli_landing') }}\">Ampli by D-Sides</a>
{% endif %}

<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <i class=\"fa fa-user-circle\"></i>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto\">
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('dsw_user_view', {'id': app.user.id}) }}\"><i class=\"fa fa-user-circle\"></i> {{ app.user.username }}</a>
            </li>
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('dsw_ampli_admin') }}\">Administration</a>
            </li>
            {% endif %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
            </li>
        {% else %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
            </li>
        {% endif %}
    </ul>
</div>
</nav>

</header>

    <div id=\"content\">
    <div class=\"container my-5\">
        {% block body %}
        {% endblock %}
    </div>
    </div>

    <footer>
    </footer>

{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <!-- <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script> -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    
    <!--
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/jqueryui-touch-punch.js') }}\"></script> 
    <script src=\"{{ asset('bundles/dswampli/js/jquery-draggable-touch.js') }}\"></script> 
    -->
    
    <script src=\"https://unpkg.com/packery@2/dist/packery.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/draggabilly@2/dist/draggabilly.pkgd.min.js\"></script>
    
    <script src=\"{{ asset('bundles/dswampli/js/grille.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/addAnswer.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/coeurs.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/selection.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/progressbar.js') }}\"></script>
    
    <script src=\"{{ asset('bundles/dswampli/js/jquery.transform2d.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/jquery.jTinder.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/main.js') }}\"></script>
    
    {% javascripts 'bundles/ocplatform/js/*' %}
        <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}

{% endblock %}

</body>
</html>", "base.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/app/Resources/views/base.html.twig");
    }
}
