<?php

namespace dsw\AmpliBundle\Controller;

use dsw\AmpliBundle\Entity\Idee;
use dsw\AmpliBundle\Entity\Espace;
use dsw\AmpliBundle\Entity\Participation;
use dsw\AmpliBundle\Entity\Commentaire;
use dsw\AmpliBundle\Form\IdeeType;
use dsw\AmpliBundle\Form\IdeeEditType;
use dsw\AmpliBundle\Form\ParticipationType;
use dsw\AmpliBundle\Form\CommentaireType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class IdeeController extends Controller
{
    public function indexAction()
    {
        
        // Renvoie toutes les idées
        // Utilisé nulle part
        
        $idees = $this->getDoctrine()->getManager()->getRepository('dswAmpliBundle:Idee')->findAll();
        
        return $this->render('dswAmpliBundle:Idee:index.html.twig', array(
            'idees' => $idees,
        ));
        
    }
    
    public function showAction($id)
    {
        
        // on récupère l'entity manager
        $em = $this->getDoctrine()->getManager();
        
        // on récupère l'idée
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);
        
        if (null === $idee) {
            throw new NotFoundHttpException("L'idée d'id " . $id . " n'existe pas.");
        }
        
        return $this->render('dswAmpliBundle:Idee:view.html.twig', array(
            'idee' => $idee,
        ));
        
        // VOIR S'IL FAUT RENDRE CE CONTROLEUR PRIVE
        
    }
    
    public function publicAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);
        
        if (null === $idee) {
            throw new NotFoundHttpException("L'idée d'id " . $id . " n'existe pas.");
        }
        
        if ($this->getUser()) {
            
            $participation = new Participation();
            $participation->setUser($this->getUser());
            $participation->setIdee($idee);
            $form_participation = $this->createForm(ParticipationType::class, $participation);
            
            if ($request->isMethod('POST') && $form_participation->handleRequest($request)->isValid()) {
          
                $em->persist($participation);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Votre participation a bien été enregistrée.');
                return $this->redirectToRoute('ampli_idee_public', array('id' => $idee->getId()));

            }
            
            $commentaire = new Commentaire();
            $commentaire->setUser($this->getUser());
            $commentaire->setIdee($idee);
            $form_commentaire = $this->createForm(CommentaireType::class, $commentaire);
            
            if ($request->isMethod('POST') && $form_commentaire->handleRequest($request)->isValid()) {
          
                
                $em->persist($commentaire);
                $em->flush();

                $request->getSession()->getFlashBag()->add('info', 'Votre commentaire a bien été enregistré.');
                return $this->redirectToRoute('ampli_idee_public', array('id' => $idee->getId()));

            }
            
            return $this->render('dswAmpliBundle:Idee:public.html.twig', array(
                'idee' => $idee,
                'form_participation' => $form_participation->createView(),
                'form_commentaire' => $form_commentaire->createView(),
            ));
            
        } else {
            
        }
        
        return $this->render('dswAmpliBundle:Idee:public.html.twig', array(
            'idee' => $idee,
        ));
        
    }
    
    public function printAction($id)
    {
        
        // on récupère l'entity manager
        $em = $this->getDoctrine()->getManager();
        
        // on récupère l'idée
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);
        
        if (null === $idee) {
            throw new NotFoundHttpException("L'idée d'id " . $id . " n'existe pas.");
        }
        
        return $this->render('dswAmpliBundle:Idee:print.html.twig', array(
            'idee' => $idee,
        ));
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function connectAction($id)
    {
        return $this->redirectToRoute('ampli_idee_public', array('id' => $id));
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function newAction(Request $request, $id, $categorie = 0)
    {
        
        // CE TRUC N'EST (PRESQUE) PLUS UTILISE, DEBILE !
        
        // OPTIONS POUR BRAINSTORMING (présence ou distance)
        // Ne pas mettre le contrôle de sécurité ROLE_AUTEUR
        // Demander un choix de secteur d'activité
        // Demander un choix de catégorie
        
        $em = $this->getDoctrine()->getManager();
        
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        $user = $this->getUser();
        $categorie = $em->getRepository('dswAmpliBundle:Categorie')->find($categorie);
        
        $idee = new Idee();
        $idee->setEspace($espace);
        $idee->setUser($user);
        
        if ($categorie) {
            $idee->setCategorie($categorie);
        }
        
        $categories = $em->getRepository('dswAmpliBundle:Categorie')->findBy(
            array(
                'espace' => $espace,
            )
        );
        
        if ($categories) {
            $hasCategories = 1;
        } else {
            $hasCategories = 0;
        }
        
        $form = $this->createForm(IdeeType::class, $idee, array(
            'espace' => $espace->getId(),
            'hasCategories' => $hasCategories,
        ));

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
          
            $em->persist($idee);
            $em->flush();
            
            $categorie = $idee->getCategorie()->getId();

          $request->getSession()->getFlashBag()->add('info', 'L\'idée a bien été enregistrée !');
          return $this->redirectToRoute('ampli_idee_new_categorie', array('id' => $id, 'categorie' => $categorie));
            
        }

        return $this->render('dswAmpliBundle:Idee:add.html.twig', array(
            'form' => $form->createView(),
            'espace' => $espace,
        ));
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function editAction($id, Request $request)
    {
        
        // A REFLECHIR
        // seul l'auteur peur modifier son idée
        // ou l'animateur
        // ou l'administrateur
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);
        
        if (null === $idee) {
            throw new NotFoundHttpException("L'idée d'id " . $id . " n'existe pas.");
        }
        
        $form = $this->createForm(IdeeEditType::class, $idee);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            
            // Upload image
            // $idee->getImgProjetFile()->upload();
            $idee->uploadImgProjetFile();
            $idee->uploadImgEquipeFile();
            
            // Inutile de persister ici, Doctrine connait déjà notre idée
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'L\'idée a bien été modifiée.');
            return $this->redirectToRoute('ampli_idee_show', array('id' => $idee->getId()));
            
        }

        return $this->render('dswAmpliBundle:Idee:edit.html.twig', array(
          'idee' => $idee,
          'form' => $form->createView(),
        ));
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function toggleAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);
        
        if ($this->getUser() !== $idee->getEspace()->getAnimateur() and $this->getUser()->getRoles()[0] != 'ROLE_ADMIN') {
            throw new NotFoundHttpException("Seul un animateur ou un administrateur peut modérer une idée.");
        }
        
        if ($idee->getSelection()) {
            
            $idee->setSelection(0);
            
        } else {
            
            $idee->setSelection(1);
            
        }
        
        $em->flush();
        
        // Une réponse car il faut renvoyer quelque chose...
        // Ne sera pas affichée car Ajax
        return new Response('Hey');
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function deleteAction(Request $request, $id)
    {
        
        // A VERIFIER
        // La seule chose qui diffère entre delete et delete_user c'est la redirection
        // Si c'est le cas, créer une fonction
        // Créer une fonction pour les vérifications de permissions
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);

        if (null === $idee) {
            throw new NotFoundHttpException("L'idée d'id " . $id . " n'existe pas.");
        }
        
        $user = $this->getUser();
        
        if ($user !== $idee->getUser() and $user !== $idee->getEspace()->getAnimateur() and $user->getRoles()[0] != 'ROLE_ADMIN') {
            throw new NotFoundHttpException("Vous n'êtes pas l'auteur de cette idée.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        // $form = $this->createForm() ne fonctionne pas sans arguments
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            
            $em->remove($idee);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "L'idée a bien été supprimée.");
            return $this->redirectToRoute('dsw_ampli_admin_idee', array('id' => $idee->getEspace()->getId()));
            
        }

        return $this->render('dswAmpliBundle:Idee:delete.html.twig', array(
            'idee' => $idee,
            'form'   => $form->createView(),
        ));
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function delete_userAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);

        if (null === $idee) {
            throw new NotFoundHttpException("L'idée d'id " . $id . " n'existe pas.");
        }
        
        if ($this->getUser() !== $idee->getUser() and $this->getUser()->getRoles()[0] != 'ROLE_ADMIN') {
            throw new NotFoundHttpException("Vous n'êtes pas l'auteur de cette idée.");
        }
        
        $espace = $idee->getEspace()->getId();

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        // $form = $this->createForm() ne fonctionne pas sans arguments
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            
            $em->remove($idee);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "L'idée a bien été supprimée.");
            return $this->redirectToRoute('dsw_ampli_vote', array('id' => $espace));
            
        }

        return $this->render('dswAmpliBundle:Idee:delete_user.html.twig', array(
            'idee' => $idee,
            'form'   => $form->createView(),
        ));
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function edit_userAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);
        
        if (null === $idee) {
            throw new NotFoundHttpException("L'idée d'id " . $id . " n'existe pas.");
        }
        
        if ($this->getUser() !== $idee->getUser() and $this->getUser()->getRoles()[0] != 'ROLE_ADMIN') {
            throw new NotFoundHttpException("Vous n'êtes pas l'auteur de cette idée.");
        }
        
        $form = $this->createForm(IdeeType::class, $idee);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            
            // Inutile de persister ici, Doctrine connait déjà notre idée
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'L\'idée a bien été modifiée.');
            return $this->redirectToRoute('dsw_ampli_vote', array('id' => $idee->getEspace()->getId()));
            
        }

        return $this->render('dswAmpliBundle:Idee:edit.html.twig', array(
          'idee' => $idee,
          'form' => $form->createView(),
        ));
        
    }

}
