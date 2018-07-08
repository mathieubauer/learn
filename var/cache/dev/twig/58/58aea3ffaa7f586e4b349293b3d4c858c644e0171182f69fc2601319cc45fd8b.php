<?php

/* dswCoreBundle::base.html.twig */
class __TwigTemplate_c104908e8ed929e30650f08222cae1ea5f9b61c997ffa6fd28dd90d706c0ed54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'opengraph' => array($this, 'block_opengraph'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswCoreBundle::base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswCoreBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html prefix=\"og: http://ogp.me/ns#\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 9
        $this->displayBlock('opengraph', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 67
        echo "</head>

<body>
    
    ";
        // line 71
        $this->displayBlock('nav', $context, $blocks);
        // line 73
        echo "
    <div id=\"content\">
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "    </div>

    ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
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
    public function block_opengraph($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "opengraph"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "opengraph"));

        // line 10
        echo "   
    <meta name=\"description\" content=\"Parce que les dynamiques collectives retombent trop souvent dès la fin des ateliers, nous avons créé un outil d'idéation, de capitalisation d'idées et de propulsion de projets !\" />
    
    ";
        // line 13
        if (array_key_exists("idee", $context)) {
            // line 14
            echo "    
    <meta property=\"og:locale\" content=\"fr_FR\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"Ampli - ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "titre", array()), "html", null, true);
            echo "\" />
    <meta property=\"og:description\" content=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "description", array()), "html", null, true);
            echo "\" />
    <meta property=\"og:url\" content=\"http://ampli.live/idee/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "id", array()), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "imgProjet", array()))), "ideas_wall"), "html", null, true);
            echo "\" />
    <meta property=\"og:site_name\" content=\"ampli\" />
    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:description\" content=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "description", array()), "html", null, true);
            echo "\" />
    <meta name=\"twitter:title\" content=\"Ampli - ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? $this->getContext($context, "idee")), "titre", array()), "html", null, true);
            echo "\" />
    <meta name=\"twitter:site\" content=\"@dsideslab\" />
    <meta name=\"twitter:creator\" content=\"@dsideslab\" />
    
    ";
        } else {
            // line 29
            echo "    
    <meta property=\"og:locale\" content=\"fr_FR\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"Ampli by D-Sides\" />
    <meta property=\"og:description\" content=\"Parce que les dynamiques collectives retombent trop souvent dès la fin des ateliers, nous avons créé un outil d'idéation, de capitalisation d'idées et de propulsion de projets !\" />
    <meta property=\"og:url\" content=\"http://ampli.live/\" />
    <meta property=\"og:image\" content=\"http://ampli.live/web/bundles/dswampli/img/chaises.jpg\" />
    <meta property=\"og:site_name\" content=\"ampli\" />
    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:description\" content=\"Parce que les dynamiques collectives retombent trop souvent dès la fin des ateliers, nous avons créé un outil d'idéation, de capitalisation d'idées et de propulsion de projets !\" />
    <meta name=\"twitter:title\" content=\"Ampli by D-Sides\" />
    <meta name=\"twitter:site\" content=\"@dsideslab\" />
    <meta name=\"twitter:creator\" content=\"@dsideslab\" />
    
    ";
        }
        // line 44
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 48
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
    
    <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity@2/dist/flickity.min.css\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/progressbar.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    
    <link rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/css/design.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 58
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

    // line 71
    public function block_nav($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 72
        echo "    ";
        
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

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 80
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <!-- <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script> -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    
    <script
  src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"
  integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\"
  crossorigin=\"anonymous\"></script>
    
    <!--
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/jqueryui-touch-punch.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/jquery-draggable-touch.js"), "html", null, true);
        echo "\"></script> 
    -->
    
    <script src=\"https://unpkg.com/packery@2/dist/packery.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/draggabilly@2/dist/draggabilly.pkgd.min.js\"></script>
    
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/main.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/grille.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/addAnswer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/coeurs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/selection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/progressbar.js"), "html", null, true);
        echo "\"></script>
    
    <!--
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/jquery.transform2d.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/js/jquery.jTinder.js"), "html", null, true);
        echo "\"></script>
    -->
    
    <!--
    ";
        // line 118
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "2df548e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2df548e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2df548e.js");
            // line 119
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 121
        echo "    -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dswCoreBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  383 => 121,  376 => 119,  371 => 118,  364 => 114,  360 => 113,  354 => 110,  350 => 109,  346 => 108,  342 => 107,  338 => 106,  333 => 104,  322 => 96,  318 => 95,  304 => 83,  295 => 82,  285 => 80,  276 => 79,  266 => 76,  257 => 75,  247 => 72,  238 => 71,  219 => 58,  214 => 56,  210 => 55,  206 => 54,  201 => 52,  195 => 48,  186 => 47,  175 => 44,  158 => 29,  150 => 24,  146 => 23,  140 => 20,  136 => 19,  132 => 18,  128 => 17,  123 => 14,  121 => 13,  116 => 10,  107 => 9,  89 => 7,  77 => 124,  75 => 82,  72 => 81,  70 => 79,  66 => 77,  64 => 75,  60 => 73,  58 => 71,  52 => 67,  50 => 47,  47 => 46,  45 => 9,  40 => 7,  32 => 1,);
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
<html prefix=\"og: http://ogp.me/ns#\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <title>{% block title %}Ampli by D-Sides{% endblock %}</title>

{% block opengraph %}
   
    <meta name=\"description\" content=\"Parce que les dynamiques collectives retombent trop souvent dès la fin des ateliers, nous avons créé un outil d'idéation, de capitalisation d'idées et de propulsion de projets !\" />
    
    {% if idee is defined %}
    
    <meta property=\"og:locale\" content=\"fr_FR\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"Ampli - {{ idee.titre }}\" />
    <meta property=\"og:description\" content=\"{{ idee.description }}\" />
    <meta property=\"og:url\" content=\"http://ampli.live/idee/{{ idee.id }}\" />
    <meta property=\"og:image\" content=\"{{ asset('/uploads/img/' ~ idee.imgProjet) | imagine_filter('ideas_wall') }}\" />
    <meta property=\"og:site_name\" content=\"ampli\" />
    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:description\" content=\"{{ idee.description }}\" />
    <meta name=\"twitter:title\" content=\"Ampli - {{ idee.titre }}\" />
    <meta name=\"twitter:site\" content=\"@dsideslab\" />
    <meta name=\"twitter:creator\" content=\"@dsideslab\" />
    
    {% else %}
    
    <meta property=\"og:locale\" content=\"fr_FR\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"Ampli by D-Sides\" />
    <meta property=\"og:description\" content=\"Parce que les dynamiques collectives retombent trop souvent dès la fin des ateliers, nous avons créé un outil d'idéation, de capitalisation d'idées et de propulsion de projets !\" />
    <meta property=\"og:url\" content=\"http://ampli.live/\" />
    <meta property=\"og:image\" content=\"http://ampli.live/web/bundles/dswampli/img/chaises.jpg\" />
    <meta property=\"og:site_name\" content=\"ampli\" />
    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:description\" content=\"Parce que les dynamiques collectives retombent trop souvent dès la fin des ateliers, nous avons créé un outil d'idéation, de capitalisation d'idées et de propulsion de projets !\" />
    <meta name=\"twitter:title\" content=\"Ampli by D-Sides\" />
    <meta name=\"twitter:site\" content=\"@dsideslab\" />
    <meta name=\"twitter:creator\" content=\"@dsideslab\" />
    
    {% endif %}
    
{% endblock %}

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
    
    {% block nav %}
    {% endblock %}

    <div id=\"content\">
        {% block body %}
        {% endblock %}
    </div>

    {% block footer %}
    {% endblock %}

{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <!-- <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script> -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    
    <script
  src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"
  integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\"
  crossorigin=\"anonymous\"></script>
    
    <!--
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/jqueryui-touch-punch.js') }}\"></script> 
    <script src=\"{{ asset('bundles/dswampli/js/jquery-draggable-touch.js') }}\"></script> 
    -->
    
    <script src=\"https://unpkg.com/packery@2/dist/packery.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js\"></script>
    <script src=\"https://unpkg.com/draggabilly@2/dist/draggabilly.pkgd.min.js\"></script>
    
    <script src=\"{{ asset('bundles/dswampli/js/main.js') }}\"></script>
    
    <script src=\"{{ asset('bundles/dswampli/js/grille.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/addAnswer.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/coeurs.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/selection.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/progressbar.js') }}\"></script>
    
    <!--
    <script src=\"{{ asset('bundles/dswampli/js/jquery.transform2d.js') }}\"></script>
    <script src=\"{{ asset('bundles/dswampli/js/jquery.jTinder.js') }}\"></script>
    -->
    
    <!--
    {% javascripts 'bundles/ocplatform/js/*' %}
        <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
    -->

{% endblock %}

</body>
</html>", "dswCoreBundle::base.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/CoreBundle/Resources/views/base.html.twig");
    }
}
