<?php

/* dswUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_000c4d257721ce122e07fb0c95f46cb66f6131774d4d16ae064a6e7507d5f3f5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswUserBundle:Registration:register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"container my-5\">
  
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">
        
        <img class=\"card-img img-fluid cover_300 pos_a\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/wiredAmpli.png"), "html", null, true);
        echo "\" alt=\"Wired Ampli\">
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            <h2 class=\"\">Inscription</h2>
        </div>
        
        <div class=\"card-body\">
        
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

                ";
        // line 20
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            echo "    
                    <div class=\"alert alert-warning\" role=\"alert\">
                        <div class=\"mb-0\">";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "</div>
                    </div>
                ";
        }
        // line 25
        echo "
                ";
        // line 26
        if ($this->getAttribute(($context["form"] ?? null), "username", array(), "any", true, true)) {
            // line 27
            echo "                <div class=\"mb-1\"><strong>Nom d'utilisateur</strong></div>
                <div class=\"mb-3\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
            echo "</div>
                ";
        }
        // line 30
        echo "
                <!--
                <div class=\"mb-1\"><strong>Prénom et Nom</strong></div>
                <div class=\"row mb-3\">
                    <div class=\"col-6\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "</div>
                    <div class=\"col-6\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "</div>
                </div>
                -->

                <div class=\"input-group mt-4 mb-3\">
                    <span class=\"input-group-addon\"><span class=\"fa fa-envelope fa-lg\"></span></span>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                </div>

                ";
        // line 44
        if ($this->getAttribute(($context["form"] ?? null), "plainPassword", array(), "any", true, true)) {
            // line 45
            echo "                <div class=\"input-group mb-3\">
                    <span class=\"input-group-addon\"><span class=\"fa fa-lock fa-lg\"></span></span>
                    ";
            // line 47
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), 'widget');
            echo "
                </div>
                ";
        }
        // line 50
        echo "                
                <div class=\"row\"> 
                <div class=\"text-center mx-auto\">
                <input type=\"submit\" value=\"C'est parti !\" class=\"btn btn-primary mb-3\" />
                </div>
                </div>

            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        
        </div>
    
    </div>
    </div>
    </div>
    
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  112 => 50,  106 => 47,  102 => 45,  100 => 44,  94 => 41,  85 => 35,  81 => 34,  75 => 30,  70 => 28,  67 => 27,  65 => 26,  62 => 25,  56 => 22,  51 => 20,  46 => 18,  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"container my-5\">
  
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">
        
        <img class=\"card-img img-fluid cover_300 pos_a\" src=\"{{ asset('bundles/dswampli/img/wiredAmpli.png') }}\" alt=\"Wired Ampli\">
        <div class=\"text_protection_top cover_300\"></div>
        
        <div class=\"card-img-overlay text_protected cover_300\">
            <h2 class=\"\">Inscription</h2>
        </div>
        
        <div class=\"card-body\">
        
            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

                {% if form_errors(form) %}    
                    <div class=\"alert alert-warning\" role=\"alert\">
                        <div class=\"mb-0\">{{ form_errors(form) }}</div>
                    </div>
                {% endif %}

                {% if form.username is defined %}
                <div class=\"mb-1\"><strong>Nom d'utilisateur</strong></div>
                <div class=\"mb-3\">{{ form_widget(form.username) }}</div>
                {% endif %}

                <!--
                <div class=\"mb-1\"><strong>Prénom et Nom</strong></div>
                <div class=\"row mb-3\">
                    <div class=\"col-6\">{{ form_widget(form.firstname) }}</div>
                    <div class=\"col-6\">{{ form_widget(form.lastname) }}</div>
                </div>
                -->

                <div class=\"input-group mt-4 mb-3\">
                    <span class=\"input-group-addon\"><span class=\"fa fa-envelope fa-lg\"></span></span>
                    {{ form_widget(form.email) }}
                </div>

                {% if form.plainPassword is defined %}
                <div class=\"input-group mb-3\">
                    <span class=\"input-group-addon\"><span class=\"fa fa-lock fa-lg\"></span></span>
                    {{ form_widget(form.plainPassword) }}
                </div>
                {% endif %}
                
                <div class=\"row\"> 
                <div class=\"text-center mx-auto\">
                <input type=\"submit\" value=\"C'est parti !\" class=\"btn btn-primary mb-3\" />
                </div>
                </div>

            {{ form_end(form) }}
        
        </div>
    
    </div>
    </div>
    </div>
    
</div>
", "dswUserBundle:Registration:register_content.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
