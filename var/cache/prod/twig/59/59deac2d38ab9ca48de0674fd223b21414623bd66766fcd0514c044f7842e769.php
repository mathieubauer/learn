<?php

/* dswCoreBundle::base.html.twig */
class __TwigTemplate_9019eff0de83da929b84c0167f8d1ff1e4551ff3fb90ed72ef483d9ebe9e89ca extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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

    <footer>
    </footer>

";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
        echo "
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Ampli by D-Sides";
    }

    // line 9
    public function block_opengraph($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "titre", array()), "html", null, true);
            echo "\" />
    <meta property=\"og:description\" content=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "description", array()), "html", null, true);
            echo "\" />
    <meta property=\"og:url\" content=\"http://ampli.live/idee/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "id", array()), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/img/" . $this->getAttribute(($context["idee"] ?? null), "imgProjet", array()))), "ideas_wall"), "html", null, true);
            echo "\" />
    <meta property=\"og:site_name\" content=\"ampli\" />
    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:description\" content=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "description", array()), "html", null, true);
            echo "\" />
    <meta name=\"twitter:title\" content=\"Ampli - ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["idee"] ?? null), "titre", array()), "html", null, true);
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
    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 71
    public function block_nav($context, array $blocks = array())
    {
        // line 72
        echo "    ";
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        // line 76
        echo "        ";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2df548e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/2df548e.js");
            // line 119
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 121
        echo "    -->

";
    }

    public function getTemplateName()
    {
        return "dswCoreBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  283 => 121,  276 => 119,  271 => 118,  264 => 114,  260 => 113,  254 => 110,  250 => 109,  246 => 108,  242 => 107,  238 => 106,  233 => 104,  222 => 96,  218 => 95,  204 => 83,  201 => 82,  197 => 76,  194 => 75,  190 => 72,  187 => 71,  174 => 58,  169 => 56,  165 => 55,  161 => 54,  156 => 52,  150 => 48,  147 => 47,  142 => 44,  125 => 29,  117 => 24,  113 => 23,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  90 => 14,  88 => 13,  83 => 10,  80 => 9,  74 => 7,  68 => 124,  66 => 82,  59 => 77,  57 => 75,  53 => 73,  51 => 71,  45 => 67,  43 => 47,  40 => 46,  38 => 9,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswCoreBundle::base.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/CoreBundle/Resources/views/base.html.twig");
    }
}
