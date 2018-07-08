<?php

namespace dsw\AmpliBundle\Controller;

use dsw\AmpliBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Commentaire controller.
 *
 */
class CommentaireController extends Controller
{
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commentaires = $em->getRepository('dswAmpliBundle:Commentaire')->findAll();

        return $this->render('dswAmpliBundle:Commentaire:index.html.twig', array(
            'commentaires' => $commentaires,
        ));
    }

    /**
     * Creates a new commentaire entity.
     *
     */
    public function newAction(Request $request)
    {
        $commentaire = new Commentaire();
        $form = $this->createForm('dsw\AmpliBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('commentaire_show', array('id' => $commentaire->getId()));
        }

        return $this->render('dswAmpliBundle:Commentaire:new.html.twig', array(
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction(Commentaire $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);

        return $this->render('dswAmpliBundle:Commentaire:show.html.twig', array(
            'commentaire' => $commentaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function editAction(Request $request, Commentaire $commentaire)
    {
        
        if ($this->getUser() !== $commentaire->getUser() and $this->getUser()->getRoles()[0] != 'ROLE_ADMIN') {
            throw new NotFoundHttpException("Vous n'êtes pas l'auteur de ce commentaire.");
        }
        
        $deleteForm = $this->createDeleteForm($commentaire);
        $editForm = $this->createForm('dsw\AmpliBundle\Form\CommentaireType', $commentaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $request->getSession()->getFlashBag()->add('info', "Le commentaire a bien été modifié.");
            return $this->redirectToRoute('ampli_idee_public', array('id' => $commentaire->getIdee()->getId()));
        }

        return $this->render('dswAmpliBundle:Commentaire:edit.html.twig', array(
            'commentaire' => $commentaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
        
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function deleteAction(Request $request, Commentaire $commentaire)
    {
        
        $em = $this->getDoctrine()->getManager();
        // $idee = $em->getRepository('dswAmpliBundle:Commentaire')->find($id);

        if (null === $commentaire) {
            throw new NotFoundHttpException("Le commentaire d'id " . $id . " n'existe pas.");
        }
        
        if ($this->getUser() !== $commentaire->getUser() and $this->getUser()->getRoles()[0] != 'ROLE_ADMIN') {
            throw new NotFoundHttpException("Vous n'êtes pas l'auteur de ce commentaire.");
        }
        
        $idee = $commentaire->getIdee()->getId();

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        // $form = $this->createForm() ne fonctionne pas sans arguments
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            
            $em->remove($commentaire);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le commentaire a bien été supprimé.");
            return $this->redirectToRoute('ampli_idee_public', array('id' => $idee));
            
        }

        return $this->render('dswAmpliBundle:Commentaire:delete.html.twig', array(
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ));
        
        
        
        // UYgdbezfberubferf
        
        $form = $this->createDeleteForm($commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commentaire);
            $em->flush();
        }

        return $this->redirectToRoute('commentaire_index');
    }

    /**
     * Creates a form to delete a commentaire entity.
     *
     * @param Commentaire $commentaire The commentaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commentaire $commentaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentaire_delete', array('id' => $commentaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
