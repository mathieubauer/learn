<?php

namespace dsw\QuizBundle\Controller;

use dsw\QuizBundle\Entity\Attempt;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Attempt controller.
 *
 */
class AttemptController extends Controller
{
    /**
     * Lists all attempt entities.
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $attempts = $em->getRepository('dswQuizBundle:Attempt')->findAll();

        return $this->render('dswQuizBundle:Attempt:index.html.twig', array(
            'attempts' => $attempts,
        ));
    }

    /**
     * Creates a new attempt entity.
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction(Request $request)
    {
        $attempt = new Attempt();
        $form = $this->createForm('dsw\QuizBundle\Form\AttemptType', $attempt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($attempt);
            $em->flush();

            return $this->redirectToRoute('quiz_attempt_show', array('id' => $attempt->getId()));
        }

        return $this->render('dswQuizBundle:Attempt:new.html.twig', array(
            'attempt' => $attempt,
            'form' => $form->createView(),
        ));
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function playAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('dswQuizBundle:Question')->find($id);
        
        $user = $this->getUser();
        
        $previousAttemptsByQuestion = [];
        foreach ($question->getAnswers() as $answer) {
            $previousAttemptsByQuestion[] = $em->getRepository('dswQuizBundle:Attempt')->findBy(
                array(
                    'user' => $user,
                    'answer' => $answer,
                )
            );
        }
        
        $attempt = new Attempt();
        $attempt->setUser($user);
        
        $id_questionnaire = $question->getQuestionnaire()->getId();
        
        $nextQuestion = $em->getRepository('dswQuizBundle:Question')->findNext($id, $id_questionnaire);
        
        
        $form = $this->createForm('dsw\QuizBundle\Form\AttemptPlayType', $attempt, array(
            'question' => $question,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            if ($previousAttemptsByQuestion) {
                foreach ($previousAttemptsByQuestion as $previousAttempts) { // deux niveaux d'arrays
                foreach ($previousAttempts as $previousAttempt) {
                    $em->remove($previousAttempt);
                }
                }
            }
            
            $em->persist($attempt);
            $em->flush();
            
            if (!empty($nextQuestion)) {
                return $this->redirectToRoute('dsw_quiz_question_play', array('id' => $nextQuestion->getId()));
            } else {
                return $this->redirectToRoute('dsw_quiz_bilan', array('id' => $id_questionnaire));
            }
        }

        return $this->render('dswQuizBundle:Attempt:play.html.twig', array(
            'question' => $question,
            'attempt' => $attempt,
            'form' => $form->createView(),
        ));
        
    }

    /**
     * Finds and displays a attempt entity.
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction(Attempt $attempt)
    {
        $deleteForm = $this->createDeleteForm($attempt);

        return $this->render('dswQuizBundle:Attempt:show.html.twig', array(
            'attempt' => $attempt,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing attempt entity.
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction(Request $request, Attempt $attempt)
    {
        $deleteForm = $this->createDeleteForm($attempt);
        $editForm = $this->createForm('dsw\QuizBundle\Form\AttemptType', $attempt);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quiz_attempt_edit', array('id' => $attempt->getId()));
        }

        return $this->render('dswQuizBundle:Attempt:edit.html.twig', array(
            'attempt' => $attempt,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a attempt entity.
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, Attempt $attempt)
    {
        $form = $this->createDeleteForm($attempt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($attempt);
            $em->flush();
        }

        return $this->redirectToRoute('quiz_attempt_index');
    }

    /**
     * Creates a form to delete a attempt entity.
     *
     * @param Attempt $attempt The attempt entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Attempt $attempt)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quiz_attempt_delete', array('id' => $attempt->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
