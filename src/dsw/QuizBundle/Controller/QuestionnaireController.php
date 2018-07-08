<?php

namespace dsw\QuizBundle\Controller;

use dsw\QuizBundle\Entity\Questionnaire;
use dsw\QuizBundle\Entity\Question;
use dsw\QuizBundle\Entity\Answer;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * Questionnaire controller.
 *
 */
class QuestionnaireController extends Controller
{
    /**
     * Lists all questionnaire entities.
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $questionnaires = $em->getRepository('dswQuizBundle:Questionnaire')->findAll();

        return $this->render('dswQuizBundle:Questionnaire:index.html.twig', array(
            'questionnaires' => $questionnaires,
        ));
    }
    
    public function homeAction()
    {
        
        // A VOIR SI ENCORE UTILE VS LANDING
        
        // return $this->render('QuizBundle/questionnaire/home.html.twig'); 
        return $this->render('dswQuizBundle:Questionnaire:home.html.twig', array(
            // 'espace' => $espace,
        ));
    }
    
    public function landingAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $quiz_demo = $em->getRepository('dswQuizBundle:Config')->findOneByName('quiz_demo'); 
        $demo = $quiz_demo->getValue();
        
        $defaultData = array('slug' => '');
        $form = $this->createFormBuilder($defaultData)
            ->add('slug', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Vous connaissez le code de votre quiz ?',
                    'class' => 'text-white border-dark bg-dark',
                )
            ))
            ->getForm();
 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData(); // data is an array
            return $this->redirectToRoute('dsw_ampli_special', array('slug' => $data['slug'])); // A MODIFIER
        }
        
        return $this->render('dswQuizBundle:Default:landing.html.twig', array(
            'form' => $form->createView(),
            'demo' => $demo,
        ));
        
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id_espace);
        
        if (null === $espace) {
            throw new NotFoundHttpException("L'espace d'id " . $id_espace . " n'existe pas.");
        }
        
        return $this->render('dswAmpliBundle:Espace:view.html.twig', array(
            'espace' => $espace,
        ));
        
    }
    
    public function introAction($id)
    {
        // DIT BONJOUR AU DEBUT D'UN TEST
        // MODIFIE POUR ENVOYER VERS LA PREMIERE QUESTION
        
        $em = $this->getDoctrine()->getManager();

        $questionnaire = $em->getRepository('dswQuizBundle:Questionnaire')->find($id);
        $questions = $em->getRepository('dswQuizBundle:Question')->findBy(
            array('questionnaire' => $id)
        );
        
        // Vers la première question
        $premiere = $questions[0];
        // return $this->redirectToRoute('dsw_quiz_question_play', array('id' => $premiere->getId()));
        
        return $this->render('dswQuizBundle:Questionnaire:intro.html.twig', array(
            'questionnaire' => $questionnaire,
            'questions' => $questions,
            'premiere' => $premiere,
        ));
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function bilanAction($id)
    {
        // AFFICHE LES RESULTATS
        
        $em = $this->getDoctrine()->getManager();
        
        $questionnaire = $em->getRepository('dswQuizBundle:Questionnaire')->find($id);
        
        $code = $questionnaire->getCode();
        
        $user = $this->getUser();
        
        $attempts = $em->getRepository('dswQuizBundle:Attempt')->AttemptsByQuestionnaireAndUser($questionnaire->getId(), $user->getId());
        
        if ($code == 'pedago') {
            
            $scores = $this->pedagoScore($attempts);
            $debriefs = $this->pedagoDebrief($scores);
            
            return $this->render('dswQuizBundle:Questionnaire:bilanPedago.html.twig', array(
                'questionnaire' => $questionnaire,
                // 'questions' => $questions,
                'attempts' => $attempts,
                'scores' => $scores,
                'debriefs' => $debriefs,
            ));
            
        } 
        
        if ($code == 'cv') {
            
            $scores = $this->cvScore($attempts);
            // $debriefs = $this->pedagoDebrief($scores);
            
            return $this->render('dswQuizBundle:Questionnaire:bilanCV.html.twig', array(
                'questionnaire' => $questionnaire,
                'attempts' => $attempts,
                'scores' => $scores,
                // 'debriefs' => $debriefs,
            ));
            
        }
        
        if ($code == 'conseiller') {
            
            $scores = $this->cvScore($attempts);
            // $debriefs = $this->pedagoDebrief($scores);
            
            return $this->render('dswQuizBundle:Questionnaire:bilanCV.html.twig', array(
                'questionnaire' => $questionnaire,
                'attempts' => $attempts,
                'scores' => $scores,
                // 'debriefs' => $debriefs,
            ));
            
        }
        
        $questions = $em->getRepository('dswQuizBundle:Question')->findBy(
            array(
                'questionnaire' => $questionnaire,
            )
        );
        
        $bonnesReponses = [];
        $score = 0;
        
        foreach ($attempts as $attempt) {
            $questionAttempt = $attempt->getAnswer()->getQuestion();
            $bonneReponse = $em->getRepository('dswQuizBundle:Question')->findGoodAnswer($questionAttempt);
            $bonnesReponses[] = $bonneReponse;
            
            if ($attempt->getAnswer()->getQuestion()->getQuestionnaire() == $questionnaire) {
                $score = $score + $attempt->getAnswer()->getScore();
            }
            
        }
        
        // $score = $em->getRepository('dswQuizBundle:Attempt')->ScoreByIdAndQuestionnaire();
        
        return $this->render('dswQuizBundle:Questionnaire:bilan.html.twig', array(
            'questionnaire' => $questionnaire,
            'questions' => $questions,
            'attempts' => $attempts,
            'bonnesReponses' => $bonnesReponses,
            'score' => $score,
        ));
    }

    /**
     * Creates a new questionnaire entity.
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction(Request $request)
    {
        $questionnaire = new Questionnaire();
        $questionnaire->setUser($this->getUser());
        
        $form = $this->createForm('dsw\QuizBundle\Form\QuestionnaireType', $questionnaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($questionnaire);
            $em->flush();

            return $this->redirectToRoute('quiz_questionnaire_show', array('id' => $questionnaire->getId()));
        }

        return $this->render('dswQuizBundle:Questionnaire:new.html.twig', array(
            'questionnaire' => $questionnaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a questionnaire entity.
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction(Questionnaire $questionnaire)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $deleteForm = $this->createDeleteForm($questionnaire);
        
        // $attempts = $questionnaire->getQuestions()->getAnswers()->getAttempts();
        
        $attempts = $em->getRepository('dswQuizBundle:Attempt')->findByQuestionnaire($questionnaire);
        $attemptsUsers = $em->getRepository('dswQuizBundle:Attempt')->findUsers($questionnaire);

        return $this->render('dswQuizBundle:Questionnaire:show.html.twig', array(
            'questionnaire' => $questionnaire,
            'attempts' => $attempts,
            'attemptsUsers' => $attemptsUsers,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing questionnaire entity.
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction(Request $request, Questionnaire $questionnaire)
    {
        $deleteForm = $this->createDeleteForm($questionnaire);
        $editForm = $this->createForm('dsw\QuizBundle\Form\QuestionnaireType', $questionnaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le questionnaire a bien été modifié');
            return $this->redirectToRoute('quiz_questionnaire_edit', array('id' => $questionnaire->getId()));
        }

        return $this->render('dswQuizBundle:Questionnaire:edit.html.twig', array(
            'questionnaire' => $questionnaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a questionnaire entity.
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, Questionnaire $questionnaire)
    {
        $form = $this->createDeleteForm($questionnaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($questionnaire);
            $em->flush();
        }

        return $this->redirectToRoute('quiz_questionnaire_index');
    }

    /**
     * Creates a form to delete a questionnaire entity.
     *
     * @param Questionnaire $questionnaire The questionnaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Questionnaire $questionnaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quiz_questionnaire_delete', array('id' => $questionnaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    private function pedagoScore($attempts)
    {
        
        $scoreA = $this->getScoreByAxe('A', $attempts) / 4;
        $scoreB = $this->getScoreByAxe('B', $attempts) / 4;
        $scoreC = $this->getScoreByAxe('C', $attempts) / 4;
        $scoreD = $this->getScoreByAxe('D', $attempts) / 4;
        
        return array(
            'A' => $scoreA,
            'B' => $scoreB,
            'C' => $scoreC,
            'D' => $scoreD,
        );
        
    }
    
    private function cvScore($attempts)
    {
        
        return $this->getPointsByAxe($attempts);
        
    }
    
    private function pedagoDebrief($score)
    {
        
        $debriefA = $this->getDebriefByAxe('A', $score);
        $debriefB = $this->getDebriefByAxe('B', $score);
        $debriefC = $this->getDebriefByAxe('C', $score);
        $debriefD = $this->getDebriefByAxe('D', $score);
        
        return array(
            'A' => $debriefA,
            'B' => $debriefB,
            'C' => $debriefC,
            'D' => $debriefD,
        );
        
    }

    
    
    
    private function getScoreByAxe($axe, $attempts) {
        
        $score = 0;
        
        foreach ($attempts as $attempt) {
            if ($attempt->getAnswer()->getAxe() == $axe) {
                $score = $score + $attempt->getAnswer()->getScore();
            }
        }
        
        return $score;
        
    }
    
    private function getPointsByAxe($attempts) {
        
        // pour 7 questions
        
        $scoreA = 0;
        $scoreB = 0;
        $scoreC = 0;
        $scoreD = 0;
        
        foreach ($attempts as $attempt) {
            if ($attempt->getAnswer()->getAxe() == 'A') {
                $scoreA = $scoreA + 1;
            } else if ($attempt->getAnswer()->getAxe() == 'B') {
                $scoreB = $scoreB + 1;
            } else if ($attempt->getAnswer()->getAxe() == 'C') {
                $scoreC = $scoreC + 1;
            } else if ($attempt->getAnswer()->getAxe() == 'D') {
                $scoreD = $scoreD + 1;
            }
        }
        
        $scoreA = round(($scoreA * 100 / 7), 2);
        //$scoreB = round(($scoreB * 100 / 7), 2);
        $scoreB = $scoreB * 100 / 7;
        $scoreC = $scoreC * 100 / 7;
        $scoreD = $scoreD * 100 / 7;
        
        return array(
            'A' => $scoreA,
            'B' => $scoreB,
            'C' => $scoreC,
            'D' => $scoreD,
        );
        
    }
    
    
    
    private function getDebriefByAxe($axe, $score) {
        
        if ($score[$axe] < 51) {
            return '"Ici débrief rouge"';
        } else if ($score[$axe] < 76) {
            return '"Ici débrief orange';
        } else {
            return '"Ici debrief vert, bravo !"';
        }
        
    }
    
}
