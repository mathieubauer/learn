<?php

/* dswLearnBundle:Default:landing.html.twig */
class __TwigTemplate_453fef775e1dbc2f2f360d0950c1726aae2cf557b5c18d93a128ab6821d98389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswLearnBundle::layout_nocontainer.html.twig", "dswLearnBundle:Default:landing.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'dsw_learn_content' => array($this, 'block_dsw_learn_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswLearnBundle::layout_nocontainer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dswLearnBundle:Default:landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_dsw_learn_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dsw_learn_content"));

        // line 4
        echo " 
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "<div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<!--
<section class=\"py-5 bg-image-full\" style=\"background: 
    linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.15) 33%, rgba(0, 0, 0, 0) 100%),
    url(";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dswampli/img/workstation.jpg"), "html", null, true);
        echo ") no-repeat center center scroll; background-size: cover;\">
    <div class=\"px-5 text-white text_protected\">
        <h1 class=\"text-center display-3 font-weight-bold\">Learn by D-Sides</h1>
    </div>
    
</section>
-->

<div class=\"py_6 learn_landing_top\">
    <div class=\"px-5 px_max text-white text_protected\">
        <h1 class=\"text-center display-3 font-weight-bold\">Learn by D-Sides</h1>
    </div>
</div>

<div class=\"jumbotron p-3 p-md-5 text-white background_gradient_learn\">
    <div class=\"col-10 mx-auto px-0 text-center\">
        <h2 class=\"my-3\" style=\"line-height: 1.4;\">
        Parce que l'outil le plus simple est toujours le meilleur, nous avons créé une plateforme d'apprentissage ultra simplifiée !
        </h2>
    </div>
</div>

<div class=\"row my-3 col-10 mx-auto\">
  
    <div class=\"text-center my-5 mx-auto col-12\">
        <h2 class=\"mb-0\" >
        Découvrez nos parcours de démonstration !
        </h2>
    </div>
   
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            if ($this->getAttribute($context["course"], "public", array())) {
                // line 44
                echo "          
        <div class=\"col-md-6\">
            
            <div class=\"card flex-md-row my-3 box-shadow h-md-250\">
            
            <div class=\"card-body d-flex flex-column align-items-start\">
                <!-- <strong class=\"d-inline-block mb-2 text-primary\">Thème du cours</strong> -->
                <h3 class=\"mt-3 mb-2\">
                    <a class=\"text-dark font-weight-bold\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
                echo "</a>
                </h3>
                <!-- <div class=\"mb-1 text-muted\">Dernière connexion le 00/00/00</div> -->
                <p class=\"card-text mb-auto\">
                    ";
                // line 56
                if ($this->getAttribute($context["course"], "description", array())) {
                    // line 57
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "description", array()), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 59
                    echo "                    Description du cours en quelques lignes.
                    ";
                }
                // line 61
                echo "                </p>
                <div class=\"\">
                    <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_play", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" class=\"mb-3 text-right\">Aller au cours</a>
                </div>
            </div>
            <img class=\"card-img-right flex-auto d-none d-lg-block course_card_img w-50 img-fluid\" src=";
                // line 66
                if ($this->getAttribute($context["course"], "logo", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "logo", array()), "html", null, true);
                } else {
                    echo "\"https://picsum.photos/200/250/?random\"";
                }
                echo " alt=\"Card image cap\">
            
            </div>
            
        </div>
            
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 73
            echo "        
            <p>Il n'y a pas de cours disponible.</p>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
</div>
      
<div class=\"jumbotron mb-0 mt-5 p-3 p-md-5 text-white bg-learn sticky-bottom\">
    <div class=\"px-0 text-center\">
        <a class=\"btn btn-primary my-4\" href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_create");
        echo "\">Créer un cours</a>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dswLearnBundle:Default:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 82,  182 => 77,  173 => 73,  156 => 66,  150 => 63,  146 => 61,  142 => 59,  136 => 57,  134 => 56,  125 => 52,  115 => 44,  109 => 43,  76 => 13,  70 => 9,  61 => 7,  57 => 6,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"dswLearnBundle::layout_nocontainer.html.twig\" %}
{% block title %}{{ parent() }} - Accueil{% endblock %}
{% block dsw_learn_content %}
 
{# On affiche tous les messages flash dont le nom est « info » #}
{% for message in app.session.flashbag.get('info') %}
<div class=\"alert alert-info\">Message flash : {{ message }}</div>
{% endfor %}

<!--
<section class=\"py-5 bg-image-full\" style=\"background: 
    linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.15) 33%, rgba(0, 0, 0, 0) 100%),
    url({{ asset('bundles/dswampli/img/workstation.jpg') }}) no-repeat center center scroll; background-size: cover;\">
    <div class=\"px-5 text-white text_protected\">
        <h1 class=\"text-center display-3 font-weight-bold\">Learn by D-Sides</h1>
    </div>
    
</section>
-->

<div class=\"py_6 learn_landing_top\">
    <div class=\"px-5 px_max text-white text_protected\">
        <h1 class=\"text-center display-3 font-weight-bold\">Learn by D-Sides</h1>
    </div>
</div>

<div class=\"jumbotron p-3 p-md-5 text-white background_gradient_learn\">
    <div class=\"col-10 mx-auto px-0 text-center\">
        <h2 class=\"my-3\" style=\"line-height: 1.4;\">
        Parce que l'outil le plus simple est toujours le meilleur, nous avons créé une plateforme d'apprentissage ultra simplifiée !
        </h2>
    </div>
</div>

<div class=\"row my-3 col-10 mx-auto\">
  
    <div class=\"text-center my-5 mx-auto col-12\">
        <h2 class=\"mb-0\" >
        Découvrez nos parcours de démonstration !
        </h2>
    </div>
   
    {% for course in courses if course.public %}
          
        <div class=\"col-md-6\">
            
            <div class=\"card flex-md-row my-3 box-shadow h-md-250\">
            
            <div class=\"card-body d-flex flex-column align-items-start\">
                <!-- <strong class=\"d-inline-block mb-2 text-primary\">Thème du cours</strong> -->
                <h3 class=\"mt-3 mb-2\">
                    <a class=\"text-dark font-weight-bold\" href=\"{{ path('course_play', { 'id': course.id  }) }}\">{{ course.name }}</a>
                </h3>
                <!-- <div class=\"mb-1 text-muted\">Dernière connexion le 00/00/00</div> -->
                <p class=\"card-text mb-auto\">
                    {% if course.description  %}
                    {{ course.description }}
                    {% else  %}
                    Description du cours en quelques lignes.
                    {% endif  %}
                </p>
                <div class=\"\">
                    <a href=\"{{ path('course_play', { 'id': course.id  }) }}\" class=\"mb-3 text-right\">Aller au cours</a>
                </div>
            </div>
            <img class=\"card-img-right flex-auto d-none d-lg-block course_card_img w-50 img-fluid\" src={% if course.logo %}{{ course.logo }}{% else %}\"https://picsum.photos/200/250/?random\"{% endif %} alt=\"Card image cap\">
            
            </div>
            
        </div>
            
        {% else  %}
        
            <p>Il n'y a pas de cours disponible.</p>
        
        {% endfor %}

</div>
      
<div class=\"jumbotron mb-0 mt-5 p-3 p-md-5 text-white bg-learn sticky-bottom\">
    <div class=\"px-0 text-center\">
        <a class=\"btn btn-primary my-4\" href=\"{{ path('course_create') }}\">Créer un cours</a>
    </div>
</div>

{% endblock %}", "dswLearnBundle:Default:landing.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/LearnBundle/Resources/views/Default/landing.html.twig");
    }
}
