<?php

namespace dsw\EvalBundle\Controller;

use dsw\EvalBundle\Entity\Texte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Texte controller.
 *
 */
class TexteController extends Controller
{
    /**
     * Lists all texte entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $textes = $em->getRepository('dswEvalBundle:Texte')->findAll();

        return $this->render('dswEvalBundle:Texte:index.html.twig', array(
            'textes' => $textes,
        ));
    }

    /**
     * Creates a new texte entity.
     *
     */
    public function newAction(Request $request)
    {
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $evaluation = $em->getRepository('dswEvalBundle:Evaluation')->findEvaluationByEvaluateur($user);
        
        $texte = new Texte();
        $texte->setUser($user);
        $texte->setEvaluation($evaluation);
        
        $form = $this->createForm('dsw\EvalBundle\Form\TexteType', $texte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($texte);
            $em->flush();
            
            return $this->redirectToRoute('dsw_eval_fin', array('id' => $evaluation->getId()));
        }

        return $this->render('dswEvalBundle:Texte:new.html.twig', array(
            'texte' => $texte,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a texte entity.
     *
     */
    public function showAction(Texte $texte)
    {
        $deleteForm = $this->createDeleteForm($texte);

        return $this->render('dswEvalBundle:Texte:show.html.twig', array(
            'texte' => $texte,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing texte entity.
     *
     */
    public function editAction(Request $request, Texte $texte)
    {
        $deleteForm = $this->createDeleteForm($texte);
        $editForm = $this->createForm('dsw\EvalBundle\Form\TexteType', $texte);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eval_texte_edit', array('id' => $texte->getId()));
        }

        return $this->render('dswEvalBundle:Texte:edit.html.twig', array(
            'texte' => $texte,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a texte entity.
     *
     */
    public function deleteAction(Request $request, Texte $texte)
    {
        $form = $this->createDeleteForm($texte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($texte);
            $em->flush();
        }

        return $this->redirectToRoute('eval_texte_index');
    }

    /**
     * Creates a form to delete a texte entity.
     *
     * @param Texte $texte The texte entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Texte $texte)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eval_texte_delete', array('id' => $texte->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
