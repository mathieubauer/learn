<?php

namespace dsw\AmpliBundle\Controller;

use dsw\AmpliBundle\Entity\Espace;
use dsw\AmpliBundle\Entity\Idee;
use dsw\AmpliBundle\Entity\Categorie;

use dsw\AmpliBundle\Form\EspaceType;
use dsw\AmpliBundle\Form\EspaceEditType;
use dsw\AmpliBundle\Form\IdeeType;

use Symfony\Component\Form\Extension\Core\Type\TextType;

// use dsw\AmpliBundle\Repository\Idee;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EspaceController extends Controller
{
    
    public function landingAction(Request $request)
    {
        
        // Quand on arrive sur ampli.live
        
        $defaultData = array('slug' => '');
        $form = $this->createFormBuilder($defaultData)
            ->add('slug', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Code session',
                    'class' => 'text-white border-dark bg-dark',
                )
            ))
            ->getForm();
        

            
            

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData(); // data is an array
            return $this->redirectToRoute('dsw_ampli_special', array('slug' => $data['slug']));
        }
        
        return $this->render('dswAmpliBundle:Default:landing.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }
    
    public function homeAction($id)
    {
        
        // Quand on clique sur Ampli by D-Sides
        // Quand on est redirigé suite à un slug
        
        // mettre un id en variable
        // si aucun espace correspond -> va vers la landing
        // sinon -> va vers la home de l'espace ou l'étape
        
        
        $em = $this->getDoctrine()->getManager();
        
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        // $config = $em->getRepository('dswAmpliBundle:Config')->findOneByName('espace_home'); 
        
        // if ($config->getValue()) {
            
            // $id_espace = $config->getValue();
            $id_espace = $espace->getId();
            
            // $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id_espace);
            $etape = $espace->getEtape();
            
            if ($etape == 1) {
                return $this->redirectToRoute('ampli_idee_new', array('id' => $id_espace));
            } else if ($etape == 2) {
                return $this->redirectToRoute('dsw_ampli_vote', array('id' => $id_espace));
            } else if ($etape == 3) {
                return $this->redirectToRoute('dsw_ampli_develop', array('id' => $id_espace));
            } else if ($etape == 4) {
                return $this->redirectToRoute('dsw_ampli_propulse', array('id' => $id_espace));
            } else if ($etape == 5) {
                return $this->redirectToRoute('dsw_ampli_selectionner', array('id' => $id_espace));
            } else {
                return $this->redirectToRoute('dsw_ampli_viewEspace', array('id' => $id_espace));
            }
            
        // } else {
            
            // return $this->render('dswCoreBundle:Core:landingTest.html.twig');
            // return $this->render('dswCoreBundle:Core:landingAmpli.html.twig'); 
            // return $this->render('dswAmpliBundle:Default:landing.html.twig'); 
            
            /* $user = $this->getUser();
            
            if ($user) {
                return $this->render('dswCoreBundle:Core:landingTest.html.twig');
            } else {
                return $this->render('dswCoreBundle:Core:landingTest.html.twig');
            } */
            
        // } 
        
    }
    
    public function specialAction($slug)
    {
        
        // REDIRECTIONS AVEC LES URL SPÉCIALES
        // A MODIFIER : DES TRUCS ECRITS EN DUR
        
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->findOneBySlug($slug);
        
        if (null === $espace) {
            
            $course = $em->getRepository('dswLearnBundle:Course')->findOneByCode($slug);
            
            if (null === $course) {
                
                throw new NotFoundHttpException("L'espace nommé " . $slug . " n'existe pas.");
                
            }
            
            return $this->redirectToRoute('course_play', array('id' => $course->getId()));
            
        }
        
        return $this->redirectToRoute('dsw_ampli_homepage', array('id' => $espace->getId()));
        
    }
    
    
    public function demoAction()
    {
        
        // Renvoie vers l'espace défini comme espace de démo (depuis la landing page)
        
        $em = $this->getDoctrine()->getManager();
        
        $config = $em->getRepository('dswAmpliBundle:Config')->findOneByName('espace_demo'); 
        
        $id_espace = $config->getValue();
        
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id_espace);
        
        if (null === $espace) {
            throw new NotFoundHttpException("L'espace d'id " . $id_espace . " n'existe pas.");
        }
        
        return $this->render('dswAmpliBundle:Espace:view.html.twig', array(
            'espace' => $espace,
        ));
        
    }
    
    public function indexAction()
    {
        
        // désactivation temporaire du choix des espaces ; renvoi direct vers l'espace 1
        return $this->redirectToRoute('dsw_ampli_viewEspace', array('id' => 1));
        
        /*
        
        // on récupère tout
        $listEspaces = $this->getDoctrine()->getManager()->getRepository('dswAmpliBundle:Espace')->findAll();
        
        // Appel de la vue
        return $this->render('dswAmpliBundle:Espace:index.html.twig', array(
            'listEspaces' => $listEspaces,
        ));
        
        */
        
    }
    
    
    public function viewAction($id)
    {
        
        // récupération des paramètres de l'espace
        
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        
        return $this->render('dswAmpliBundle:Espace:view.html.twig', array(
            'espace' => $espace,
        ));

        
        /*
        
        CE CODE PERMET D'AFFICHER UN MUR D'IDEES
        
        // on récupère le repository
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        
        if (null === $espace) {
        throw new NotFoundHttpException("L'espace d'id " . $id . " n'existe pas.");
        }
        
        // On récupère la liste des idées de cet espace
        $listIdees = $em->getRepository('dswAmpliBundle:Idee')->getIdeesWithNbCoeurs($id);
        // $listIdees = $em->getRepository('dswAmpliBundle:Idee')->findBy(array('espace' => $id));
        
        $user = $this->getUser();
        
        return $this->render('dswAmpliBundle:Espace:view2.html.twig', array(
            'espace' => $espace,
            'listIdees' => $listIdees,
            'user' => $user,
        ));
        */
        
    }
    
    
    public function addAction(Request $request)
    {
        
        $espace = new Espace();
        $espace->setEtape(0);
        $espace->setWithCoeurs(0);
        $espace->setWithIdees(1);
        $espace->setWithModeration(1);
        $espace->setWithEquipe(0);
        $espace->setWithCommentaires(1);
        $espace->setWithFooter(1);
        $espace->setWithTemps(0);
        $espace->setWithArgent(0);
        $espace->setObjectifsAlias("");
        $espace->setMethodeAlias("");
        $espace->setCalendrierAlias("");
        $espace->setPropulserAlias("");
        $espace->setPublicQuestion("");

        $form = $this->createForm('dsw\AmpliBundle\Form\EspaceType', $espace);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($espace);
            foreach ($form->get('categories')->getData() as $categorie) {
                $categorie->setEspace($espace);  
            }
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Espace bien enregistré.');

            return $this->redirectToRoute('dsw_ampli_admin_espace', array('id' => $espace->getId()));
        }

        return $this->render('dswAmpliBundle:Espace:add.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function voteAction(Request $request, $id, $categorie = 0)
    {
        
        // 21.01 : Les idées se créent ici, pas dans Idee > Add
        // Trouver une solution pour mélanger les idées
        
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        
        if (null === $espace) {
            throw new NotFoundHttpException("L'espace d'id " . $id . " n'existe pas.");
        }
        
        $listIdees = $em->getRepository('dswAmpliBundle:Idee')->getIdeesWithNbCoeurs($id);
        
        $user = $this->getUser();
        
        $categorie = $em->getRepository('dswAmpliBundle:Categorie')->find($categorie);
        
        $idee = new Idee();
        $idee->setEspace($espace);
        $idee->setUser($user);
        
        if (!$espace->getWithModeration()) {
            // ne modère pas
            $idee->setSelection(1);
        }
        
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
            
            $request->getSession()->getFlashBag()->add('info', 'L\'idée a bien été enregistrée !');
            
            if ($categorie) {
                $categorie = $idee->getCategorie()->getId();
                return $this->redirectToRoute('dsw_ampli_vote_categorie', array('id' => $id, 'categorie' => $categorie));
            } else {
                return $this->redirectToRoute('dsw_ampli_vote', array('id' => $id));
            }
            
        }
        
        return $this->render('dswAmpliBundle:Espace:vote.html.twig', array(
            'espace' => $espace,
            'listIdees' => $listIdees,
            'user' => $user,
            'form' => $form->createView(),
        ));
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function developAction($id)
    {
        
        // $id correspond à l'espace
        // Presque identique à vote
        // Excepté qu'on renvoie seulement les idées sélectionnées et une vue améliorée
        // Ajouter la possibilité de sélectionner
        
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        
        if (null === $espace) {
            throw new NotFoundHttpException("L'espace d'id " . $id . " n'existe pas.");
        }
        
        //$listIdees = $em->getRepository('dswAmpliBundle:Idee')->getIdeesWithNbCoeurs($id);
        //$listIdees = $em->getRepository('dswAmpliBundle:Idee')->findAll();
        $listIdees = $em->getRepository('dswAmpliBundle:Idee')->findBy(
            array(
                'espace' => $id,
                'selection' => 1,
            )
        );
        
        $user = $this->getUser();
        
        return $this->render('dswAmpliBundle:Espace:develop.html.twig', array(
            'espace' => $espace,
            'listIdees' => $listIdees,
            'user' => $user,
        ));
        
    }
    
    public function propulseAction($id)
    {
        
        // Ajouter les barres d'énergie et les photos
        // Créer une vue "crowdfunding"
        // Rendre les likes activables ici ?
        
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        
        if (null === $espace) {
            throw new NotFoundHttpException("L'espace d'id " . $id . " n'existe pas.");
        }
        
        // findOrdered 
        // prend l'id_espace en variable
        // renvoie la liste des idées triées par likes
        // ajoute à l'array nbCoeurs, les idées doivent être affichées dans la vue avec idee[0]
        // pour ne pas avoir idee['nbCoeurs']
        
        $listIdees = $em->getRepository('dswAmpliBundle:Idee')->findOrdered($id);
        
        $user = $this->getUser();
        
        return $this->render('dswAmpliBundle:Espace:propulse.html.twig', array(
            'espace' => $espace,
            'listIdees' => $listIdees,
            'user' => $user,
        ));
        
    }
    
    // TINDER DES IDEES - EXPERIMENTAL
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function selectionnerAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        
        if (null === $espace) {
            throw new NotFoundHttpException("L'espace d'id " . $id . " n'existe pas.");
        }
        
        $listIdees = $em->getRepository('dswAmpliBundle:Idee')->findBy(
            array(
                'espace' => $id,
            )
        );
        
        shuffle($listIdees);
        
        $user = $this->getUser();
            
        return $this->render('dswAmpliBundle:Espace:selectionner.html.twig', array(
            'espace' => $espace,
            'listIdees' => $listIdees,
            'user' => $user,
        ));
        
    }
    
    // ANIMATEUR - (SOUS ADMINISTRATEUR)
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function animateurAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find($id);
        
        if (null === $espace) {
            throw new NotFoundHttpException("L'idée d'id " . $id . " n'existe pas.");
        }
        
        // vérifications !
        
        $user = $this->getUser();
        $animateur = $espace->getAnimateur();
        
        if (($user != $animateur) and ($user->getRoles()[0] != 'ROLE_ADMIN')) {
            throw new NotFoundHttpException("Vous n'avez pas accès à l'espace d'animation.");
        }
        
        
        $form = $this->createForm(EspaceEditType::class, $espace);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Espace bien modifié.');
            return $this->redirectToRoute('dsw_ampli_espace_animateur', array('id' => $espace->getId()));
            
        }

        return $this->render('dswAmpliBundle:Espace:edit.html.twig', array(
          'espace' => $espace,
          'form' => $form->createView(),
        ));
        
    }
    
}