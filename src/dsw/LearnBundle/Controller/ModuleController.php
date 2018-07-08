<?php

namespace dsw\LearnBundle\Controller;

use dsw\LearnBundle\Entity\Module;
use dsw\LearnBundle\Entity\Unit;
use dsw\LearnBundle\Entity\Message;
use dsw\LearnBundle\Entity\Track;

use dsw\LearnBundle\Form\MessageCustomType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Module controller.
 *
 */
class ModuleController extends Controller
{
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function playAction(Request $request, Module $module)
    {
        
        $course = $module->getCourse();
        
        $sortedUnits = $this->sortedUnits($module);
        $sorted_modules = $this->sorted_modules($course);
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        // ATTENTION - esControl CODÉ EN DUR (attrape le code es)
        
        $denied = $this->esControl($course, $user);
        $denied = $this->accessControl($course, $user);
        
        // empêche l'affichage des modules non actifs
        
        if ($module->getOpen() == false and $this->getUser()->getRoles()[0] != 'ROLE_ADMIN') {
            
            $denied = "Cette partie n'est pas encore disponible.";
            
        }

        if ($denied) {
            
            return $this->render('dswLearnBundle:Module:error.html.twig', array(
                // 'next' => $next,
                'error' => $denied,
                'module' => $module,
                'sorted_modules' => $sorted_modules,
                'course' => $course,
            ));
            
        }
        
        // ajoute un tracker
        // VOIR ORDRE - Veut-on tracker les tentatives de connexion à des pages interdites ?
        
        $track = new Track();
        $track->setModule($module);
        $track->setUser($user);
        $track->setDate(new \DateTime());
        
        
        $em->persist($track);
        $em->flush();

        
        
            
        // si accès autorisé
        
        $course = $module->getCourse();
        
        $em = $this->getDoctrine()->getManager();
        // $next = $em->getRepository('dswLearnBundle:Module')->findNext($module, $course);
        $next = $em->getRepository('dswLearnBundle:Module')->findNext($module->getDisplayOrder(), $course);
        
        
        $nbUnit = $em->getRepository('dswLearnBundle:Unit')->countUnits($module);
        
        $unit = new Unit();
        $unit->setModule($module);
        $unit->setDisplayOrder($nbUnit + 1);
        $unitForm = $this->createForm('dsw\LearnBundle\Form\UnitCreateType', $unit);
        $unitForm->handleRequest($request);
        

        if ($unitForm->isSubmitted() && $unitForm->isValid()) {
            
            if ($unit->getImageFile()) {
            
                // $file stores the uploaded PDF file
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                //$file = $unit->getImage();
                    $file = $unit->getImageFile();

                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

                // moves the file to the directory where brochures are stored
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );

                // updates the 'brochure' property to store the PDF file name
                // instead of its contents
                $unit->setImage($fileName);

                // ... persist the $product variable or any other work
                
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($unit);
            $em->flush();
            
            
            $request->getSession()->getFlashBag()->add('info', 'L\'unité a bien été ajoutée !');

            return $this->redirectToRoute('module_play', array('id' => $module->getId()));
        }
        
        if ($this->getUser()) {
        
            $message = new Message();
            $message->setUser($this->getUser());
            $message->setModule($module);
            $form_message = $this->createForm(MessageCustomType::class, $message);

            if ($request->isMethod('POST') && $form_message->handleRequest($request)->isValid()) {

                $em->persist($message);
                $em->flush();

                // $request->getSession()->getFlashBag()->add('info', 'Votre commentaire a bien été enregistré.');
                return $this->redirectToRoute('module_play', array('id' => $module->getId()));

            }

            return $this->render('dswLearnBundle:Module:play.html.twig', array(
                'units' => $sortedUnits,
                'next' => $next,
                'module' => $module,
                'sorted_modules' => $sorted_modules,
                'course' => $course,
                'form_message' => $form_message->createView(),
                'unit_form' => $unitForm->createView(),
            ));
            
        } else {
            
            return $this->render('dswLearnBundle:Module:play.html.twig', array(
                'units' => $sortedUnits,
                'next' => $next,
                'module' => $module,
                'sorted_modules' => $sorted_modules,
                'course' => $course,
            ));
            
        }
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function loginAndPlayAction(Module $module)
    {
        
        return $this->redirectToRoute('module_play', array('id' => $module->getId()));
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function createAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository('dswLearnBundle:Course')->find($id);
        
        $nb_module = $em->getRepository('dswLearnBundle:Module')->countByCourse($course);
        
        $module = new Module();
        $module->setCourse($course);
        $module->setOpen(1);
        $module->setDisplayOrder($nb_module + 1);
        
        $form = $this->createForm('dsw\LearnBundle\Form\ModuleCreateType', $module);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($module);
            $em->flush();
            
            return $this->redirectToRoute('module_build', array('id' => $module->getId()));
        }

        return $this->render('dswLearnBundle:Module:create.html.twig', array(
            'course' => $course,
            'module' => $module,
            'form' => $form->createView(),
        ));
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function create_titleAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository('dswLearnBundle:Course')->find($id);
        
        $nb_module = $em->getRepository('dswLearnBundle:Module')->countByCourse($course);
        
        $module = new Module();
        $module->setCourse($course);
        $module->setOpen(1);
        $module->setTitre(1);
        $module->setDisplayOrder($nb_module + 1);
        
        $form = $this->createForm('dsw\LearnBundle\Form\ModuleCreateType', $module);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($module);
            $em->flush();
            
            return $this->redirectToRoute('course_build', array('id' => $course->getId()));
        }

        return $this->render('dswLearnBundle:Module:create_titre.html.twig', array(
            'course' => $course,
            'module' => $module,
            'form' => $form->createView(),
        ));
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function buildAction(Request $request, Module $module)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $deleteForm = $this->createDeleteForm($module);
        
        $editForm = $this->createForm('dsw\LearnBundle\Form\ModuleEditType', $module);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            
            $request->getSession()->getFlashBag()->add('info', 'Le module a bien été modifié.');

            return $this->redirectToRoute('module_build', array('id' => $module->getId()));
        }
        
        $nbUnit = $em->getRepository('dswLearnBundle:Unit')->countUnits($module);
        
        $unit = new Unit();
        $unit->setModule($module);
        $unit->setDisplayOrder($nbUnit + 1);
        $unitForm = $this->createForm('dsw\LearnBundle\Form\UnitCreateType', $unit);
        $unitForm->handleRequest($request);

        if ($unitForm->isSubmitted() && $unitForm->isValid()) {
            
            if ($unit->getImageFile()) {
                
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $unit->getImageFile();
                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
                
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
                
                $unit->setImage($fileName);
                
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($unit);
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('info', 'L\'unité a bien été ajoutée !');

            return $this->redirectToRoute('module_build', array('id' => $module->getId()));
        }
        
        $sortedUnits = $this->sortedUnits($module);
        
        return $this->render('dswLearnBundle:Module:build.html.twig', array(
            'module' => $module,
            'units' => $sortedUnits,
            'unit_form' => $unitForm->createView(),
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    public function upAction(Request $request, Module $module)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $displayOrder = $module->getDisplayOrder();
        $previousOrder = $displayOrder - 1;
        
        $previousModule = $em->getRepository('dswLearnBundle:Module')->findOneBy(array(
            'course' => $module->getCourse(),
            'displayOrder' => $previousOrder,
        ));
        
        $module->setDisplayOrder($previousOrder);
        $previousModule->setDisplayOrder($displayOrder);
        
        $em->flush();
        $request->getSession()->getFlashBag()->add('info', 'L\'ordre a bien été modifié.');
        
        return $this->redirectToRoute('course_build', array('id' => $module->getCourse()->getId()));
        
    }
    
    public function downAction(Request $request, Module $module)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $displayOrder = $module->getDisplayOrder();
        $nextOrder = $displayOrder + 1;
        
        $nextModule = $em->getRepository('dswLearnBundle:Module')->findOneBy(array(
            'course' => $module->getCourse(),
            'displayOrder' => $nextOrder,
        ));
        
        $module->setDisplayOrder($nextOrder);
        $nextModule->setDisplayOrder($displayOrder);
        
        $em->flush();
        $request->getSession()->getFlashBag()->add('info', 'L\'ordre a bien été modifié.');
        
        return $this->redirectToRoute('course_build', array('id' => $module->getCourse()->getId()));
        
    }
    
    /* METHODES AUTOMATIQUES */
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $modules = $em->getRepository('dswLearnBundle:Module')->findAll();

        return $this->render('dswLearnBundle:Module:index.html.twig', array(
            'modules' => $modules,
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction(Request $request)
    {
        $module = new Module();
        $form = $this->createForm('dsw\LearnBundle\Form\ModuleType', $module);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($module);
            $em->flush();

            return $this->redirectToRoute('module_show', array('id' => $module->getId()));
        }

        return $this->render('dswLearnBundle:Module:new.html.twig', array(
            'module' => $module,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction(Module $module)
    {
        $deleteForm = $this->createDeleteForm($module);

        return $this->render('dswLearnBundle:Module:show.html.twig', array(
            'module' => $module,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction(Request $request, Module $module)
    {
        $deleteForm = $this->createDeleteForm($module);
        $editForm = $this->createForm('dsw\LearnBundle\Form\ModuleType', $module);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('module_edit', array('id' => $module->getId()));
        }

        return $this->render('dswLearnBundle:Module:edit.html.twig', array(
            'module' => $module,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, Module $module)
    {
        
        $form = $this->createDeleteForm($module);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->remove($module);
            $em->flush();
            
            $sortedModules = $em->getRepository('dswLearnBundle:Module')->findBy(
                array('course' => $module->getCourse()),
                array('displayOrder' => 'ASC')
            );
            
            $i = 1;
            foreach ($sortedModules as $module) {
                $module->setDisplayOrder($i);
                $i++;
            }
            
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('info', "Le module a bien été supprimé.");
            return $this->redirectToRoute('course_build', array('id' => $module->getCourse()->getId()));
            
        }

        return $this->render('dswLearnBundle:Module:delete.html.twig', array(
            'module' => $module,
            'form' => $form->createView(),
        ));
        
        
        
        



        return $this->redirectToRoute('module_index');
    }

    /**
     * Creates a form to delete a module entity.
     *
     * @param Module $module The module entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Module $module)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('module_delete', array('id' => $module->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    
    /* FONCTIONS PRIVEES */
    
    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
    
    private function sortedUnits($module) {
        
        $em = $this->getDoctrine()->getManager();
        
        return $em->getRepository('dswLearnBundle:Unit')->findBy(
            array('module' => $module),
            array('displayOrder' => 'ASC')
        );
        
    }
    
    private function sorted_modules($course) {
        
        $em = $this->getDoctrine()->getManager();
        
        return $em->getRepository('dswLearnBundle:Module')->findBy(
            array('course' => $course),
            array('displayOrder' => 'ASC')
        );
        
    }
    
    
    private function accessControl($course, $user) {
        
        if ($course->getOpen() == 0) {
            $learners = $course->getLearners();
            if (!$learners->contains($user) and $user->getRoles()[0] != 'ROLE_ADMIN') {
                
                // CODER ICI AUTO REGISTER
                // Créer une entité "domaines autorisés"
                // Créer Course->domainesAutorises
                // Si domainesAutorises contains user->email->domaine 
                // Alors incorporer user à learners
                // Persister
                // Reload (redirecttoroute ?)
                
                return "Vous n'avez pas l'autorisation d'accéder à ce contenu.<br>Merci de vous rapprocher de votre contact pour inscription.";
            } 
        }
        
    }
    
    private function esControl($course, $user) {
        
        $code = $course->getCode();
        if ($code =='es') {
            $email = $user->getEmail();
            $esCheck = $this->esCheck($email);
            if (!$esCheck and $this->getUser()->getRoles()[0] != 'ROLE_ADMIN') {
                return "Vous n'avez pas l'autorisation d'accéder à ce contenu.<br>Merci de vous rapprocher de votre contact Entreprise&Société.";
            } 
        }
        
    }
    
    private function esCheck($email) {
        
        $split = explode('@', $email);
        $domaine = $split[1];
        
        $domainesAutorises = array(
            'agirc-arrco.fr',
            'airbus.com',
            'airfrance.fr',
            'caissedesdepots.fr',
            'engie.com',
            'laposte.fr',
            'mgen.fr',
            'orange.com',
            'safrangroup.com',
            'sncf.fr',
            'groupe-vyv.fr',
            'entreprise-personnel.com',
        );
        
        if (in_array(strtolower($domaine), $domainesAutorises)) {
            
            // correspond
            return true;
            
        } else {
            
            // ne correspond pas -> refuser
            return false;
            
        }
        
    }
    
    
    
}
