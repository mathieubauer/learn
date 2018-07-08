<?php

namespace dsw\LearnBundle\Controller;

// use dsw\AmpliBundle\Entity\Idee;
// use dsw\AmpliBundle\Entity\Espace;

// use dsw\AmpliBundle\Form\EspaceEditType;
// use dsw\AmpliBundle\Form\EspaceEditAdminType;
// use dsw\AmpliBundle\Form\ConfigType;
// use dsw\AmpliBundle\Form\ConfigAllType;
// use dsw\AmpliBundle\Form\IdeeType;
// use dsw\AmpliBundle\Form\IdeeEditType;

use dsw\LearnBundle\Form\ConfigAllType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class AdminController extends Controller
{
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        
        // Accueil Admin
        // Vers gestion des utilisateurs (commune à tous les bundles)
        // Vers configuration (notamment le cours de démo)
        // Liste des cours
        
        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository('dswLearnBundle:Course')->findAll();
        
        return $this->render('dswLearnBundle:Admin:index.html.twig', array(
            'courses' => $courses,
        ));
        
    }
    
    public function configAction(Request $request)
    {
        
        // NOTES
        // On ne passe pas par des entités reliées, donc pas d'ArrayCollection
        // Il faut donc passer la collection d'entités en arrays
        // https://openclassrooms.com/forum/sujet/symfony-formulaire-avec-plusieurs-lignes
        
        // $em = $this->getDoctrine()->getManager();
        $configs = array('configs' => $this->getDoctrine()->getRepository('dswLearnBundle:Config')->findAll()) ;
        
        $form = $this->createForm(ConfigAllType::class, $configs);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            // $em->persist($configs);
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('notice', 'Configuration bien modifiée.');
            return $this->redirectToRoute('learn_admin_config');
            
        }

        return $this->render('dswLearnBundle:Admin:config.html.twig', array(
          'configs' => $configs,
          'form' => $form->createView(),
        ));
        
    }
    
    
    
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function viewAction($id)
    {
        
    }
    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request)
    {
        
    }
    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function editAction($id, Request $request)
    {
        
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, $id)
    {
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function ideeAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        
        if (null === $espace) {
            throw new NotFoundHttpException("L'espace d'id " . $id . " n'existe pas.");
        }
        
        $animateur = $espace->getAnimateur();
        
        if ($this->getUser() !== $animateur and $this->getUser()->getRoles()[0] != 'ROLE_ADMIN') {
            throw new NotFoundHttpException("Vous n'êtes pas l'auteur de cette idée.");
        }
        
        $em = $this->getDoctrine()->getManager();
        
        // findOrdered 
        // prend l'id_espace en variable
        // renvoie la liste des idées triées par likes
        // ajoute à l'array nbCoeurs, les idées doivent être affichées dans la vue avec idee[0]
        
        $idees = $em->getRepository('dswAmpliBundle:Idee')->findOrdered($id);
        
        return $this->render('dswAmpliBundle:Idee:index.html.twig', array(
            'espace' => $espace,
            'idees' => $idees,
        ));
        
    }
    
    public function espaceAction($id, Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        
        if (null === $espace) {
            throw new NotFoundHttpException("L'idée d'id " . $id . " n'existe pas.");
        }
        
        $form = $this->createForm(EspaceEditAdminType::class, $espace);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Espace bien modifié.');
            return $this->redirectToRoute('dsw_ampli_admin_espace', array('id' => $espace->getId()));
            
        }

        return $this->render('dswAmpliBundle:Espace:edit.html.twig', array(
          'espace' => $espace,
          'form' => $form->createView(),
        ));
        
    }
    
    public function userAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('dswUserBundle:User')->findAll();
        
        return $this->render('dswAmpliBundle:Admin:index_users.html.twig', array(
            'users' => $users,
        ));
        
    }
    
    
    

}
