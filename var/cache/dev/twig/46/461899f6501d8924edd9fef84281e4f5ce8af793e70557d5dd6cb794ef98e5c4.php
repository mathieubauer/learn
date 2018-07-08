<?php

/* dswUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_cf3107ab0736d2c82ac0cc090aa41d46cab64ca32fa5d549786c54b87705f45a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswUserBundle:Profile:edit_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">

    <img class=\"card-img-top img-fluid mb-1\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/wiredAmpli.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <div class=\"card-block p-3\">

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    
        ";
        // line 12
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            echo "    
            <div class=\"alert alert-warning\" role=\"alert\">
                <div class=\"mb-0\">";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "</div>
            </div>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ($this->getAttribute(($context["form"] ?? null), "username", array(), "any", true, true)) {
            // line 19
            echo "        <div class=\"mt-3 mb-1\"><strong>Nom d'utilisateur</strong></div>
        <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-user fa-lg\"></span></span>
            ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
            echo "
        </div>
        ";
        }
        // line 25
        echo "        
        <div class=\"mt-3 mb-1\"><strong>Prénom et Nom</strong></div>
        <div class=\"row mb-3\">
            <div class=\"col-6\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "</div>
            <div class=\"col-6\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "</div>
        </div>
        
        <div class=\"mt-3 mb-1\"><strong>Email</strong></div>
        <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-envelope fa-lg\"></span></span>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
        </div>
        
        <div class=\"mt-3 mb-1\"><strong>Mot de passe actuel</strong></div>
        <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-lock fa-lg\"></span></span>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", array()), 'widget');
        echo "
        </div>

        <div>
            <input type=\"submit\" value=\"Modifier le compte\" class=\"btn btn-primary mb-3\" />
        </div>

    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
    </div>
    </div>
    </div>
    <div class=\"fond_bleu\"></div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 48,  97 => 41,  88 => 35,  79 => 29,  75 => 28,  70 => 25,  64 => 22,  59 => 19,  57 => 18,  54 => 17,  48 => 14,  43 => 12,  38 => 10,  32 => 7,  25 => 2,);
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

    <div class=\"row mt-5\">
    <div class=\"col-lg-5 col-md-8 mx-auto mt-3\">
    <div class=\"card\">

    <img class=\"card-img-top img-fluid mb-1\" src=\"{{ asset('bundles/dswampli/img/wiredAmpli.png') }}\" alt=\"Card image cap\">
    <div class=\"card-block p-3\">

        {{ form_start(form, {'method': 'post', 'action': path('fos_user_profile_edit'), 'attr': {'class': 'fos_user_profile_edit'}}) }}
    
        {% if form_errors(form) %}    
            <div class=\"alert alert-warning\" role=\"alert\">
                <div class=\"mb-0\">{{ form_errors(form) }}</div>
            </div>
        {% endif %}

        {% if form.username is defined %}
        <div class=\"mt-3 mb-1\"><strong>Nom d'utilisateur</strong></div>
        <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-user fa-lg\"></span></span>
            {{ form_widget(form.username) }}
        </div>
        {% endif %}
        
        <div class=\"mt-3 mb-1\"><strong>Prénom et Nom</strong></div>
        <div class=\"row mb-3\">
            <div class=\"col-6\">{{ form_widget(form.firstname) }}</div>
            <div class=\"col-6\">{{ form_widget(form.lastname) }}</div>
        </div>
        
        <div class=\"mt-3 mb-1\"><strong>Email</strong></div>
        <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-envelope fa-lg\"></span></span>
            {{ form_widget(form.email) }}
        </div>
        
        <div class=\"mt-3 mb-1\"><strong>Mot de passe actuel</strong></div>
        <div class=\"input-group mb-3\">
            <span class=\"input-group-addon\"><span class=\"fa fa-lock fa-lg\"></span></span>
            {{ form_widget(form.current_password) }}
        </div>

        <div>
            <input type=\"submit\" value=\"Modifier le compte\" class=\"btn btn-primary mb-3\" />
        </div>

    {{ form_end(form) }}

    </div>
    </div>
    </div>
    </div>
    <div class=\"fond_bleu\"></div>", "dswUserBundle:Profile:edit_content.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/UserBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
