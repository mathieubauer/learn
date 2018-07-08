<?php

namespace dsw\QuizBundle\Controller;

use dsw\QuizBundle\Entity\Question;
use dsw\QuizBundle\Entity\Answer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * Question controller.
 *
 * @Security("has_role('ROLE_ADMIN')")
 */
class QuestionController extends Controller
{
    /**
     * Lists all question entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $questions = $em->getRepository('dswQuizBundle:Question')->findAll();

        return $this->render('dswQuizBundle:Question:index.html.twig', array(
            'questions' => $questions,
        ));
    }

    /**
     * Creates a new question entity.
     *
     */
    public function newAction(Request $request)
    {
        $question = new Question();
        
        $form = $this->createForm('dsw\QuizBundle\Form\QuestionType', $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
   
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            foreach ($form->get('answers')->getData() as $answer)
                {
                    $answer->setQuestion($question);  
                }
            $em->flush();

            return $this->redirectToRoute('quiz_question_show', array('id' => $question->getId()));
            
        }

        return $this->render('dswQuizBundle:Question:new.html.twig', array(
            'question' => $question,
            'form' => $form->createView(),
        ));
    }
    
    public function newByQuestionnaireAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $questionnaire = $em->getRepository('dswQuizBundle:Questionnaire')->find($id);
        
        $question = new Question();
        $question->setQuestionnaire($questionnaire);
        
        $form = $this->createForm('dsw\QuizBundle\Form\QuestionByQuestionnaireType', $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
   
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            foreach ($form->get('answers')->getData() as $answer)
                {
                    $answer->setQuestion($question);  
                }
            $em->flush();

            return $this->redirectToRoute('quiz_question_show', array('id' => $question->getId()));
            
        }

        return $this->render('dswQuizBundle:Question:newByQuestionnaire.html.twig', array(
            'questionnaire' => $questionnaire,
            'question' => $question,
            'form' => $form->createView(),
        ));
    }
    
    
    /**
     * Finds and displays a question entity.
     *
     */
    public function showAction(Question $question)
    {
        $deleteForm = $this->createDeleteForm($question);

        return $this->render('dswQuizBundle:Question:show.html.twig', array(
            'question' => $question,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    public function playAction(Request $request, Question $question)
    {
        
        $reponse = new Reponse();
        
        $reponse->setQuestion($question);
        
        $user = $this->getUser();
        $reponse->setUser($user);
        
        $formReponse = $this->createForm('dsw\QuizBundle\Form\ReponsePlayType', $reponse);
        $formReponse->handleRequest($request);
        
        if ($formReponse->isSubmitted() && $formReponse->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();

            return $this->redirectToRoute('dsw_quiz_question', array('id' => $question->getId() + 1));
            // question suivante !
            // dsw_quiz_question_play ?!
        }
        
        return $this->render('dswQuizBundle:Question:play.html.twig', array(
            'question' => $question,
            'reponse' => $formReponse->createView(),
        ));
        
    }

    /**
     * Displays a form to edit an existing question entity.
     *
     */
    public function editAction(Request $request, Question $question)
    {
        
        // $em = $this->getDoctrine()->getManager();
        // $answers = $em->getRepository('dswQuizBundle:Answer')->findBy(array(
        //     'question' => $question,
        // ));
        
        // foreach ($question->getAnswers() as $answer) {
        //     $question->addAnswer($answer);
        // }
        
        $deleteForm = $this->createDeleteForm($question);
        $editForm = $this->createForm('dsw\QuizBundle\Form\QuestionEditType', $question);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            
            $request->getSession()->getFlashBag()->add('info', 'La question a bien été modifiée');
            return $this->redirectToRoute('quiz_question_edit', array('id' => $question->getId()));
        }

        return $this->render('dswQuizBundle:Question:edit.html.twig', array(
            'question' => $question,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a question entity.
     *
     */
    public function deleteAction(Request $request, Question $question)
    {
        $form = $this->createDeleteForm($question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($question);
            $em->flush();
        }

        return $this->redirectToRoute('quiz_question_index');
    }

    /**
     * Creates a form to delete a question entity.
     *
     * @param Question $question The question entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Question $question)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quiz_question_delete', array('id' => $question->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
