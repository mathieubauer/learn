<?php

/* dswUserBundle:Security:login_learn.html.twig */
class __TwigTemplate_bc718b2684d044fb353d2c47c3251aec5670caabaaec72bd247748c0fb8bcb15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout.html.twig", "dswUserBundle:Security:login_learn.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswLearnBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswUserBundle:Security:login_learn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Connexion - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"landing_page_learn\">
<div class=\"container pt-5 \"> 

    ";
        // line 11
        if (array_key_exists("error", $context)) {
            // line 12
            echo "    ";
            if (($context["error"] ?? $this->getContext($context, "error"))) {
                // line 13
                echo "        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
                echo "</div>
    ";
            }
            // line 15
            echo "    ";
        }
        // line 16
        echo "    
    ";
        // line 17
        if (array_key_exists("manual_error", $context)) {
            // line 18
            echo "    ";
            if (($context["manual_error"] ?? $this->getContext($context, "manual_error"))) {
                // line 19
                echo "        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, ($context["manual_error"] ?? $this->getContext($context, "manual_error")), "html", null, true);
                echo "</div>
    ";
            }
            // line 21
            echo "    ";
        }
        // line 22
        echo "    
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">
   
    ";
        // line 27
        if (($context["image"] ?? $this->getContext($context, "image"))) {
            // line 28
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["image"] ?? $this->getContext($context, "image"))), "html", null, true);
            echo "\" class=\"card-img-top img-fluid mb-1\" alt=\"Card image cap\"/> 
    ";
        } else {
            // line 30
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/uploads/img/connexion_learn.png"), "ideas_wall"), "html", null, true);
            echo "\" class=\"card-img-top img-fluid mb-1\" alt=\"Card image cap\"/> 
    ";
        }
        // line 32
        echo "    
    <!--
    <div class=\"card-block p-3 text-center\">
        Here is a text !
    </div>
    -->
    
    <div class=\"card-block p-4\" id=\"sign_in\">
        
        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
           
            <div class=\"mb-3\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo " 
            </div>
            
            <div class=\"text-center\">
                <button class=\"btn btn-learn ml-0\" type=\"submit\">Se connecter</button>
            </div>
            
        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        <!--
        <form action=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("learn_security_check");
        echo "\" method=\"post\" class=\"form-horizontal mx-3\">
            
            <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"Votre email professionnel\" class=\"form-control\" />
            
            <input type=\"hidden\" id=\"password\" name=\"_password\" required=\"required\" value=\"azerty\" class=\"form-control\" />

            <div class=\"row\"> 
            <div class=\"text-center mx-auto\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"C'est parti !\" class=\"btn btn-primary mb-3\" />
            </div>
            </div>

        </form>
        -->

    </div>
    
    </div>
    </div>
    </div>


</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswUserBundle:Security:login_learn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  141 => 51,  131 => 44,  125 => 41,  114 => 32,  108 => 30,  102 => 28,  100 => 27,  93 => 22,  90 => 21,  84 => 19,  81 => 18,  79 => 17,  76 => 16,  73 => 15,  67 => 13,  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswLearnBundle::layout.html.twig\" %}

{% block title %}
    Connexion - {{ parent() }}
{% endblock %}

{% block body %}
<div class=\"landing_page_learn\">
<div class=\"container pt-5 \"> 

    {% if error is defined %}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.message }}</div>
    {% endif %}
    {% endif %}
    
    {% if manual_error is defined %}
    {% if manual_error %}
        <div class=\"alert alert-danger\">{{ manual_error }}</div>
    {% endif %}
    {% endif %}
    
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">
   
    {% if image %}
        <img src=\"{{ asset(image) }}\" class=\"card-img-top img-fluid mb-1\" alt=\"Card image cap\"/> 
    {% else %}
        <img src=\"{{ asset('/uploads/img/connexion_learn.png') | imagine_filter('ideas_wall') }}\" class=\"card-img-top img-fluid mb-1\" alt=\"Card image cap\"/> 
    {% endif %}
    
    <!--
    <div class=\"card-block p-3 text-center\">
        Here is a text !
    </div>
    -->
    
    <div class=\"card-block p-4\" id=\"sign_in\">
        
        {{ form_start(form) }}
           
            <div class=\"mb-3\">
                {{ form_widget(form.email) }} 
            </div>
            
            <div class=\"text-center\">
                <button class=\"btn btn-learn ml-0\" type=\"submit\">Se connecter</button>
            </div>
            
        {{ form_end(form) }}

        <!--
        <form action=\"{{ path(\"learn_security_check\") }}\" method=\"post\" class=\"form-horizontal mx-3\">
            
            <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"Votre email professionnel\" class=\"form-control\" />
            
            <input type=\"hidden\" id=\"password\" name=\"_password\" required=\"required\" value=\"azerty\" class=\"form-control\" />

            <div class=\"row\"> 
            <div class=\"text-center mx-auto\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"C'est parti !\" class=\"btn btn-primary mb-3\" />
            </div>
            </div>

        </form>
        -->

    </div>
    
    </div>
    </div>
    </div>


</div>
</div>
{% endblock %}


", "dswUserBundle:Security:login_learn.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Security/login_learn.html.twig");
    }
}
