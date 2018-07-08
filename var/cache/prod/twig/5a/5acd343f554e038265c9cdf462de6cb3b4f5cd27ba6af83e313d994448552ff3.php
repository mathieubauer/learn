<?php

/* dswQuizBundle:Questionnaire:bilanCV.html.twig */
class __TwigTemplate_ca3fc571b58bc5768af9b12390135b3a2b9be6bb5293c7aed9992d4fa09f2f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dswCoreBundle::base.html.twig", "dswQuizBundle:Questionnaire:bilanCV.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dswCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container my-5\">
   
    <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["questionnaire"] ?? null), "titre", array()), "html", null, true);
        echo "</h1>
    
    <div class=\"row my-5\">
        <div class=\"col-md-3 text-center cliquable\" data-toggle=\"modal\" data-target=\"#modal_a\">
            <h3 class=\"mb-4\">Ingénieur</h3>
            <div class=\"bilan\" id=\"bilan_a\" data-value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? null), "A", array()), "html", null, true);
        echo "\"></div>
            <button class=\"btn btn-primary btn-sm\">En savoir plus</button>
        </div>
        <div class=\"col-md-3 text-center cliquable\" data-toggle=\"modal\" data-target=\"#modal_b\">
            <h3 class=\"mb-4\">Artisan</h3>
            <div class=\"bilan\" id=\"bilan_b\" data-value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? null), "B", array()), "html", null, true);
        echo "\"></div>
            <button class=\"btn btn-primary btn-sm\">En savoir plus</button>
        </div>
        <div class=\"col-md-3 text-center cliquable\" data-toggle=\"modal\" data-target=\"#modal_c\">
            <h3 class=\"mb-4\">Pilote</h3>
            <div class=\"bilan\" id=\"bilan_c\" data-value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? null), "C", array()), "html", null, true);
        echo "\"></div>
            <button class=\"btn btn-primary btn-sm\">En savoir plus</button>
        </div>
        <div class=\"col-md-3 text-center cliquable\" data-toggle=\"modal\" data-target=\"#modal_d\">
            <h3 class=\"mb-4\">Jardinier</h3>
            <div class=\"bilan\" id=\"bilan_d\" data-value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["scores"] ?? null), "D", array()), "html", null, true);
        echo "\"></div>
            <button class=\"btn btn-primary btn-sm\">En savoir plus</button>
        </div>
    </div>


    <!-- Modals -->
    <div class=\"modal fade\" id=\"modal_c\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\" id=\"exampleModalLabel\">Pilote</h3>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                <p>Le Pilote est la locomotive qui tire les wagons avec lui. Il pense que pour aider quelqu'un à avancer, il ne faut pas hésiter à le stimuler, à l’orienter dans son action, à le guider dans certains de ses choix. Il considère que les conseils qu’il donne sont nécessaires pour aider l'apprenant à progresser. Ça ne l’empêche pas de questionner, voire d’écouter... à condition que ça ne dure pas trop longtemps. Il faut faire des choix, s’engager, et cela tient en partie de sa responsabilité.</p>
                <p>Rigoureux, précis dans ses explications, il va ainsi préparer son intervention de coaching, limiter la place de l’imprévu et dispenser dans les meilleures conditions ses connaissances et ses conseils. Il n’hésitera pas à argumenter, à convaincre parce qu’il est lui-même convaincu que le chemin qu’il propose est le plus efficace.
                </p>
                <p>Aspects positifs : </p>
                <ul>
                    <li>clarté des propos et rigueur de la méthode</li>
                    <li>rassurant pour les apprenants</li>
                    <li>stimulant, moteur</li>
                </ul>
                <p>Points d'amélioration</p>
                <ul>
                    <li>manque de liberté pour l'apprenant, cadrage parfois trop formel</li>
                    <li>placage de solutions susceptibles d’être inadaptées pour celui qui devra les mettre en œuvre</li>
                    <li>davantage mobilisateur de ses propres talents que de ceux des apprenants</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"modal fade\" id=\"modal_d\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\" id=\"exampleModalLabel\">Jardinier</h3>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                <p>Le Jardinier adopte une posture plus distanciée que ne le fait le Pilote. Il se caractérise avant tout par sa capacité d’écoute (questionnement, reformulation, silence assumé). Sa principale préoccupation est d’aider l'apprenant à trouver par lui-même le chemin qui lui convient le mieux. Il va adapter son intervention aux problématiques propres du bénéficiaire.</p>
                <p>Son attitude pourrait être assimilée à celle d’un accompagnateur qui aide l'apprenant à trouver sa réponse à son problème. Adaptable, modulable et à l’écoute, il privilégiera plutôt les méthodes introspectives à partir desquelles il va tenter de tirer le meilleur de la personne par la co-construction.</p>
                <p>Il privilégiera enfin le tâtonnement et les allers-retours pour que l'apprenant s’approprie par lui même les outils et la méthode.</p>
                <p>Aspects positifs : </p>
                <ul>
                    <li>adaptation à l'apprenant, à ses représentations, à son rythme d’apprentissage</li>
                    <li>aide à la construction de réponses singulières, spécifiques à l'apprenant</li>
                    <li>acquisitions solides et durables</li>
                </ul>
                <p>Points d'amélioration</p>
                <ul>
                    <li>hésitation à proposer des pistes d’action qui pourraient pourtant s’avérer fécondes pour les apprenants</li>
                    <li>approche plus chronophage (méthode souvent plus longue)</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"modal fade\" id=\"modal_a\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\" id=\"exampleModalLabel\">Ingénieur</h3>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                <p>L’Ingénieur considère qu’une grille de lecture, un modèle théorique, une méthodologie constituent souvent des clés précieuses pour agir. Il a la conviction que ce type d’approche permet à une personne ou à un groupe de gagner du temps pour mieux comprendre une situation et agir sur elle. Il n’hésite pas à donner des exemples, mais ce qui lui importe avant tout, c’est d’organiser l’action à partir d’une construction pensée et cohérente. Il s’attachera souvent à modéliser des comportements, des processus, des situations pour mieux les appréhender. Ça ne l’empêche pas d’être pragmatique, à condition de pouvoir au besoin référer son action à un cadre de référence tangible dans l’absolu.</p>
                <p>Aspects positifs : </p>
                <ul>
                    <li>permet d’avoir des modèles génériques soutenant la compréhension d’une situation ou la mise
en œuvre d’une action</li>
                   <li>structure l’apprentissage à travers des schémas, des concepts... servant de cadre de
référence pour agir dans différents types de situations</li>
                </ul>
                <p>Points d'amélioration</p>
                <ul>
                    <li>parfois trop abstrait, doctrinal, avec des modèles théoriques difficiles à relier à la réalité</li>
                    <li>mémorisation parfois difficile dans la durée faute de repères concrets</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"modal fade\" id=\"modal_b\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\" id=\"exampleModalLabel\">Artisan</h3>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                <p>L’Artisan considère que pour apprendre, il faut faire. Il estime que l’école de la vie est souvent plus apprenante que la vie à l’école. De fait, il préconise de tâtonner, de tester, d’apprendre de ses erreurs. Il s’appuie volontiers sur des exemples concrets pour transmettre les compétences visées. Il n’hésitera pas à recourir aux mises en situation pratiques et invitera l'apprenant à faire ou à dire même s’il ne sait pas. Déductif et logique, il se base très souvent sur la force d’une démonstration pour ancrer son discours dans la réalité. Il n’exclut pas les ressources conceptuelles, mais il pense que l’on peut s’y enfermer rapidement si l’on s’y attarde de façon prolongée.</p>
                <p>Aspects positifs : </p>
                <ul>
                    <li>est facile d’accès, compréhensible dans ses explications</li>
                    <li>permet une appropriation rapide</li>
                </ul>
                <p>Points d'amélioration</p>
                <ul>
                    <li>peut réduire la réalité à des mécanismes trop simples... au risque d’en devenir simpliste</li>
                    <li>ne permet pas toujours de prendre la distance suffisante pour faire face à n’importe quel type
de situation</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 153
        echo "    
    ";
        // line 275
        echo "    
    
    ";
        // line 303
        echo "    
    <a class=\"btn btn-primary mt-3\" href=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dsw_quiz_intro", array("id" => $this->getAttribute(($context["questionnaire"] ?? null), "id", array()))), "html", null, true);
        echo "\">Recommencer le questionnaire</a><br>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "dswQuizBundle:Questionnaire:bilanCV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 304,  198 => 303,  194 => 275,  191 => 153,  67 => 26,  59 => 21,  51 => 16,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dswQuizBundle:Questionnaire:bilanCV.html.twig", "/Users/mbr/Documents/a_MAMP/ampli_symfony/src/dsw/QuizBundle/Resources/views/Questionnaire/bilanCV.html.twig");
    }
}
