<?php

namespace dsw\EvalBundle\Controller;

use dsw\EvalBundle\Entity\Record;
use dsw\EvalBundle\Entity\Question;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Record controller.
 *
 */
class RecordController extends Controller
{
    /**
     * Lists all record entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $records = $em->getRepository('dswEvalBundle:Record')->findAll();

        return $this->render('record/index.html.twig', array(
            'records' => $records,
        ));
    }

    /**
     * Creates a new record entity.
     *
     */
    public function newAction(Request $request)
    {
        $record = new Record();
        $form = $this->createForm('dsw\EvalBundle\Form\RecordType', $record);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($record);
            $em->flush();

            return $this->redirectToRoute('eval_record_show', array('id' => $record->getId()));
        }

        return $this->render('record/new.html.twig', array(
            'record' => $record,
            'form' => $form->createView(),
        ));
    }
    
    public function themeAction($id, Request $request)
    {
        
        // ENREGISTREMENT DES REPONSES
        // pas new !
        
        $user = $this->getUser();
        
        
        
        
        
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('dswEvalBundle:Question')->find(2);
        
        
        $record1 = new Record();
        $record1->setQuestion($question);
        
        $form = $this->createForm('dsw\EvalBundle\Form\RecordType', $record);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($record);
            $em->flush();

            return $this->redirectToRoute('eval_record_show', array('id' => $record->getId()));
        }

        return $this->render('record/new.html.twig', array(
            'record' => $record,
            'form' => $form->createView(),
        ));
        
        // return $this->render('evaluation/theme.html.twig');
        


        /*if ($form->isSubmitted() && $form->isValid()) {
   
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            foreach ($form->get('answers')->getData() as $answer)
                {
                    $answer->setQuestion($question);  
                }
            $em->flush();

            return $this->redirectToRoute('question_show', array('id' => $question->getId()));
            
        }*/
        
        
        
    }

    /**
     * Finds and displays a record entity.
     *
     */
    public function showAction(Record $record)
    {
        $deleteForm = $this->createDeleteForm($record);

        return $this->render('record/show.html.twig', array(
            'record' => $record,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing record entity.
     *
     */
    public function editAction(Request $request, Record $record)
    {
        $deleteForm = $this->createDeleteForm($record);
        $editForm = $this->createForm('dsw\EvalBundle\Form\RecordType', $record);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eval_record_edit', array('id' => $record->getId()));
        }

        return $this->render('record/edit.html.twig', array(
            'record' => $record,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a record entity.
     *
     */
    public function deleteAction(Request $request, Record $record)
    {
        $form = $this->createDeleteForm($record);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($record);
            $em->flush();
        }

        return $this->redirectToRoute('eval_record_index');
    }

    /**
     * Creates a form to delete a record entity.
     *
     * @param Record $record The record entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Record $record)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eval_record_delete', array('id' => $record->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
