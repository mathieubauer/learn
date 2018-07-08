<?php

/* dswLearnBundle:Unit:loop.html.twig */
class __TwigTemplate_6ed46010e7ca70520ed30d9198b60572b335ebba868a41841f288bbbc4a1b252 extends Twig_Template
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
        echo "                ";
        if (($this->getAttribute(($context["unit"] ?? null), "type", array()) == "image_url")) {
            // line 2
            echo "                    
                    <div class=\"mb-4\">
                    <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? null), "content", array()), "html", null, true);
            echo "\" target=\"_blank\">
                        <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? null), "content", array()), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? null), "content", array()), "html", null, true);
            echo "\">
                    </a>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 9
($context["unit"] ?? null), "type", array()) == "image")) {
            // line 10
            echo "                    
                    <div class=\"mb-4\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? null), "content", array()), "html", null, true);
            echo "\" target=\"_blank\">
                        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/dswlearn/img/" . $this->getAttribute(($context["unit"] ?? null), "image", array()))), "idea_show"), "html", null, true);
            echo "\" target=\"_blank\"alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? null), "content", array()), "html", null, true);
            echo "\" class=\"img-fluid\">
                    </a>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 17
($context["unit"] ?? null), "type", array()) == "video")) {
            // line 18
            echo "
                    <div class=\"mb-4\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? null), "content", array()), "html", null, true);
            echo "\"></iframe>
                    </div>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 25
($context["unit"] ?? null), "type", array()) == "video_upload")) {
            // line 26
            echo "
                    <div class=\"mb-4\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <!-- <video src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/images/" . $this->getAttribute(($context["unit"] ?? null), "image", array()))), "html", null, true);
            echo "\" controls> -->
                        <video src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/dswlearn/img/" . $this->getAttribute(($context["unit"] ?? null), "image", array()))), "html", null, true);
            echo "\" controls>
                            Votre navigateur ne permet pas de lire les vidéos.
                        </video>
                    </div>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 36
($context["unit"] ?? null), "type", array()) == "title")) {
            // line 37
            echo "                    
                    <div class=\"\">
                        <h1 class=\"mb-3\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? null), "content", array()), "html", null, true);
            echo "</h1>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 42
($context["unit"] ?? null), "type", array()) == "text")) {
            // line 43
            echo "                    
                    <div class=\"mb-4\">
                        <p>";
            // line 45
            echo $this->getAttribute(($context["unit"] ?? null), "content", array());
            echo "</p>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 48
($context["unit"] ?? null), "type", array()) == "html")) {
            // line 49
            echo "                    
                    <div class=\"mb-4\">
                        <p>";
            // line 51
            echo $this->getAttribute(($context["unit"] ?? null), "content", array());
            echo "</p>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 54
($context["unit"] ?? null), "type", array()) == "doc")) {
            // line 55
            echo "                  
                    <div class=\"card mb-4\">
                    <div class=\"card-body\">
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/dswlearn/img/" . $this->getAttribute(($context["unit"] ?? null), "image", array()))), "html", null, true);
            echo "\" target=\"_blank\" class=\"full_card\"></a>
                    <div class=\"media\">
                    <img class=\"mr-3\" src=\"https://image.flaticon.com/icons/svg/138/138557.svg\" alt=\"Document icon\" height=\"42\" width=\"42\">
                    <div class=\"media-body\">
                    <h5 class=\"mt-0\"><strong class=\"font-weight-bold\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? null), "name", array()), "html", null, true);
            echo "</strong></h5>
                    ";
            // line 63
            echo $this->getAttribute(($context["unit"] ?? null), "content", array());
            echo "
                    </div>
                    </div>
                    </div>
                    </div>   
                    
                ";
        } else {
            // line 70
            echo "                
                ";
        }
    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Unit:loop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 70,  146 => 63,  142 => 62,  135 => 58,  130 => 55,  128 => 54,  122 => 51,  118 => 49,  116 => 48,  110 => 45,  106 => 43,  104 => 42,  98 => 39,  94 => 37,  92 => 36,  83 => 30,  79 => 29,  74 => 26,  72 => 25,  65 => 21,  60 => 18,  58 => 17,  49 => 13,  45 => 12,  41 => 10,  39 => 9,  30 => 5,  26 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswLearnBundle:Unit:loop.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Unit/loop.html.twig");
    }
}
