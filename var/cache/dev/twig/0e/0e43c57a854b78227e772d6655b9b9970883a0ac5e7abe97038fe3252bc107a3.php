<?php

/* dswLearnBundle:Unit:loop.html.twig */
class __TwigTemplate_e5b351e906505df67a6b622d47c03f1cb4d87f51e89551812f97fe0f70333c1e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Unit:loop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Unit:loop.html.twig"));

        // line 1
        echo "                ";
        if (($this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "type", array()) == "image_url")) {
            // line 2
            echo "                    
                    <div class=\"mb-4\">
                    <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "content", array()), "html", null, true);
            echo "\" target=\"_blank\">
                        <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "content", array()), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "content", array()), "html", null, true);
            echo "\">
                    </a>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 9
($context["unit"] ?? $this->getContext($context, "unit")), "type", array()) == "image")) {
            // line 10
            echo "                    
                    <div class=\"mb-4\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "content", array()), "html", null, true);
            echo "\" target=\"_blank\">
                        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/dswlearn/img/" . $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "image", array()))), "idea_show"), "html", null, true);
            echo "\" target=\"_blank\"alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "content", array()), "html", null, true);
            echo "\" class=\"img-fluid\">
                    </a>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 17
($context["unit"] ?? $this->getContext($context, "unit")), "type", array()) == "video")) {
            // line 18
            echo "
                    <div class=\"mb-4\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "content", array()), "html", null, true);
            echo "\"></iframe>
                    </div>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 25
($context["unit"] ?? $this->getContext($context, "unit")), "type", array()) == "video_upload")) {
            // line 26
            echo "
                    <div class=\"mb-4\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <!-- <video src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/images/" . $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "image", array()))), "html", null, true);
            echo "\" controls> -->
                        <video src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/dswlearn/img/" . $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "image", array()))), "html", null, true);
            echo "\" controls>
                            Votre navigateur ne permet pas de lire les vidéos.
                        </video>
                    </div>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 36
($context["unit"] ?? $this->getContext($context, "unit")), "type", array()) == "title")) {
            // line 37
            echo "                    
                    <div class=\"\">
                        <h1 class=\"mb-3\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "content", array()), "html", null, true);
            echo "</h1>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 42
($context["unit"] ?? $this->getContext($context, "unit")), "type", array()) == "text")) {
            // line 43
            echo "                    
                    <div class=\"mb-4\">
                        <p>";
            // line 45
            echo $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "content", array());
            echo "</p>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 48
($context["unit"] ?? $this->getContext($context, "unit")), "type", array()) == "html")) {
            // line 49
            echo "                    
                    <div class=\"mb-4\">
                        <p>";
            // line 51
            echo $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "content", array());
            echo "</p>
                    </div>
                    
                ";
        } elseif (($this->getAttribute(        // line 54
($context["unit"] ?? $this->getContext($context, "unit")), "type", array()) == "doc")) {
            // line 55
            echo "                  
                    <div class=\"card mb-4\">
                    <div class=\"card-body\">
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/dswlearn/img/" . $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "image", array()))), "html", null, true);
            echo "\" target=\"_blank\" class=\"full_card\"></a>
                    <div class=\"media\">
                    <img class=\"mr-3\" src=\"https://image.flaticon.com/icons/svg/138/138557.svg\" alt=\"Document icon\" height=\"42\" width=\"42\">
                    <div class=\"media-body\">
                    <h5 class=\"mt-0\"><strong class=\"font-weight-bold\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "name", array()), "html", null, true);
            echo "</strong></h5>
                    ";
            // line 63
            echo $this->getAttribute(($context["unit"] ?? $this->getContext($context, "unit")), "content", array());
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  162 => 70,  152 => 63,  148 => 62,  141 => 58,  136 => 55,  134 => 54,  128 => 51,  124 => 49,  122 => 48,  116 => 45,  112 => 43,  110 => 42,  104 => 39,  100 => 37,  98 => 36,  89 => 30,  85 => 29,  80 => 26,  78 => 25,  71 => 21,  66 => 18,  64 => 17,  55 => 13,  51 => 12,  47 => 10,  45 => 9,  36 => 5,  32 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("                {% if unit.type == 'image_url' %}
                    
                    <div class=\"mb-4\">
                    <a href=\"{{ unit.content }}\" target=\"_blank\">
                        <img src=\"{{ unit.content }}\" class=\"img-fluid\" alt=\"{{ unit.content }}\">
                    </a>
                    </div>
                    
                {% elseif unit.type == 'image' %}
                    
                    <div class=\"mb-4\">
                    <a href=\"{{ unit.content }}\" target=\"_blank\">
                        <img src=\"{{ asset('bundles/dswlearn/img/' ~ unit.image) | imagine_filter('idea_show') }}\" target=\"_blank\"alt=\"{{ unit.content }}\" class=\"img-fluid\">
                    </a>
                    </div>
                    
                {% elseif unit.type == 'video' %}

                    <div class=\"mb-4\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"{{ unit.content }}\"></iframe>
                    </div>
                    </div>
                    
                {% elseif unit.type == 'video_upload' %}

                    <div class=\"mb-4\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <!-- <video src=\"{{ asset('/uploads/images/' ~ unit.image) }}\" controls> -->
                        <video src=\"{{ asset('bundles/dswlearn/img/' ~ unit.image) }}\" controls>
                            Votre navigateur ne permet pas de lire les vidéos.
                        </video>
                    </div>
                    </div>
                    
                {% elseif unit.type == 'title' %}
                    
                    <div class=\"\">
                        <h1 class=\"mb-3\">{{ unit.content }}</h1>
                    </div>
                    
                {% elseif unit.type == 'text' %}
                    
                    <div class=\"mb-4\">
                        <p>{{ unit.content|raw }}</p>
                    </div>
                    
                {% elseif unit.type == 'html' %}
                    
                    <div class=\"mb-4\">
                        <p>{{ unit.content|raw }}</p>
                    </div>
                    
                {% elseif unit.type == 'doc' %}
                  
                    <div class=\"card mb-4\">
                    <div class=\"card-body\">
                    <a href=\"{{ asset('bundles/dswlearn/img/' ~ unit.image) }}\" target=\"_blank\" class=\"full_card\"></a>
                    <div class=\"media\">
                    <img class=\"mr-3\" src=\"https://image.flaticon.com/icons/svg/138/138557.svg\" alt=\"Document icon\" height=\"42\" width=\"42\">
                    <div class=\"media-body\">
                    <h5 class=\"mt-0\"><strong class=\"font-weight-bold\">{{ unit.name }}</strong></h5>
                    {{ unit.content|raw }}
                    </div>
                    </div>
                    </div>
                    </div>   
                    
                {% else %}
                
                {% endif %}", "dswLearnBundle:Unit:loop.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Unit/loop.html.twig");
    }
}
