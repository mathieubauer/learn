<?php

namespace dsw\EvalBundle\Controller;

use dsw\EvalBundle\Entity\Evaluation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Evaluation controller.
 *
 */
class EvaluationController extends Controller
{
    /**
     * Lists all evaluation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $evaluations = $em->getRepository('dswEvalBundle:Evaluation')->findAll();
        
        return $this->render('dswEvalBundle:Evaluation:index.html.twig', array(
            'evaluations' => $evaluations,
        ));
    }
    
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function startAction()
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $evaluation = $em->getRepository('dswEvalBundle:Evaluation')->findEvaluationByEvaluateur($user);

        return $this->render('dswEvalBundle:Evaluation:start.html.twig', array(
            'evaluation' => $evaluation,
        ));
        
    }
    
    public function introAction()
    {
        
        return $this->render('dswEvalBundle:Evaluation:intro.html.twig');
        
    }
    
    public function finAction(Evaluation $evaluation)
    {
        
        // fait les calculs
        
        $user = $this->getUser();
        $evaluateur = $user;
        
        $em = $this->getDoctrine()->getManager();
        
        $records = $em->getRepository('dswEvalBundle:Record')->findBy(array(
            'user' => $user,
            'evaluation' => $evaluation,
        ));
        
        $points = [];
        
        foreach ($records as $key => $record) {
            if ($key % 8 == 0) { $entreprenant[] = $record->getPoints(); }
            if ($key % 8 == 1) { $realiste[] = $record->getPoints(); }
            if ($key % 8 == 2) { $participatif[] = $record->getPoints(); }
            if ($key % 8 == 3) { $organisateur[] = $record->getPoints(); }
            if ($key % 8 == 4) { $directif[] = $record->getPoints(); }
            if ($key % 8 == 5) { $arrangeant[] = $record->getPoints(); }
            if ($key % 8 == 6) { $improvisateur[] = $record->getPoints(); }
            if ($key % 8 == 7) { $formaliste[] = $record->getPoints(); }
        }
        
        
        $entreprenant = array_sum($entreprenant);
        $realiste = array_sum($realiste);
        $participatif = array_sum($participatif);
        $organisateur = array_sum($organisateur);
        $directif = array_sum($directif);
        $arrangeant = array_sum($arrangeant);
        $improvisateur = array_sum($improvisateur);
        $formaliste = array_sum($formaliste);
        
        // print_r($formaliste);
        
        // affiche le bilan de l'utilisateur
        $bilan = true;
        
        
        
        return $this->render('dswEvalBundle:Evaluation:fin.html.twig', array(
            'bilan' => $bilan,
            'evaluateur' => $evaluateur,
            'evaluation' => $evaluation,

            'entreprenant' => $entreprenant,
            'realiste' => $realiste,
            'participatif' => $participatif,
            'organisateur' => $organisateur,
            'directif' => $directif,
            'arrangeant' => $arrangeant,
            'improvisateur' => $improvisateur,
            'formaliste' => $formaliste,
        ));
        
    }

    /**
     * Creates a new evaluation entity.
     *
     */
    public function newAction(Request $request)
    {
        $evaluation = new Evaluation();
        $form = $this->createForm('dsw\EvalBundle\Form\EvaluationType', $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evaluation);
            $em->flush();

            return $this->redirectToRoute('eval_evaluation_show', array('id' => $evaluation->getId()));
        }

        return $this->render('dswEvalBundle:Evaluation:new.html.twig', array(
            'evaluation' => $evaluation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a evaluation entity.
     *
     */
    public function showAction(Evaluation $evaluation)
    {
        $deleteForm = $this->createDeleteForm($evaluation);

        return $this->render('dswEvalBundle:Evaluation:show.html.twig', array(
            'evaluation' => $evaluation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing evaluation entity.
     *
     */
    public function editAction(Request $request, Evaluation $evaluation)
    {
        $deleteForm = $this->createDeleteForm($evaluation);
        $editForm = $this->createForm('dsw\EvalBundle\Form\EvaluationType', $evaluation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eval_evaluation_edit', array('id' => $evaluation->getId()));
        }

        return $this->render('dswEvalBundle:Evaluation:edit.html.twig', array(
            'evaluation' => $evaluation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a evaluation entity.
     *
     */
    public function deleteAction(Request $request, Evaluation $evaluation)
    {
        $form = $this->createDeleteForm($evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evaluation);
            $em->flush();
        }

        return $this->redirectToRoute('eval_evaluation_index');
    }

    /**
     * Creates a form to delete a evaluation entity.
     *
     * @param Evaluation $evaluation The evaluation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Evaluation $evaluation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eval_evaluation_delete', array('id' => $evaluation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
