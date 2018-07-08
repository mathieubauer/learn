<?php

namespace dsw\LearnBundle\Controller;

use dsw\LearnBundle\Entity\Track;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Track controller.
 *
 */
class TrackController extends Controller
{
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function moduleAction()
    {
        $em = $this->getDoctrine()->getManager();

        $modules = $em->getRepository('dswLearnBundle:Module')->findAll();
        
        $modules = $em->getRepository('dswLearnBundle:Module')->findBy(
            array('titre' => NULL),
            array('name' => 'ASC')
        );
        
        // SANS LES COMPTES ADMIN ! 

        return $this->render('dswLearnBundle:Track:index_module.html.twig', array(
            'modules' => $modules,
        ));
    }
    
    
    
    /**
     * Lists all track entities.
     *
     */
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tracks = $em->getRepository('dswLearnBundle:Track')->findAll();

        return $this->render('dswLearnBundle:Track:index.html.twig', array(
            'tracks' => $tracks,
        ));
    }

    /**
     * Creates a new track entity.
     *
     */
    public function newAction(Request $request)
    {
        $track = new Track();
        $form = $this->createForm('dsw\LearnBundle\Form\TrackType', $track);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($track);
            $em->flush();

            return $this->redirectToRoute('track_show', array('id' => $track->getId()));
        }

        return $this->render('dswLearnBundle:Track:new.html.twig', array(
            'track' => $track,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a track entity.
     *
     */
    public function showAction(Track $track)
    {
        $deleteForm = $this->createDeleteForm($track);

        return $this->render('dswLearnBundle:Track:show.html.twig', array(
            'track' => $track,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing track entity.
     *
     */
    public function editAction(Request $request, Track $track)
    {
        $deleteForm = $this->createDeleteForm($track);
        $editForm = $this->createForm('dsw\LearnBundle\Form\TrackType', $track);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('track_edit', array('id' => $track->getId()));
        }

        return $this->render('dswLearnBundle:Track:edit.html.twig', array(
            'track' => $track,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a track entity.
     *
     */
    public function deleteAction(Request $request, Track $track)
    {
        $form = $this->createDeleteForm($track);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($track);
            $em->flush();
        }

        return $this->redirectToRoute('track_index');
    }

    /**
     * Creates a form to delete a track entity.
     *
     * @param Track $track The track entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Track $track)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('track_delete', array('id' => $track->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
