<?php

namespace dsw\LearnBundle\Controller;

use dsw\LearnBundle\Entity\Course;
use dsw\LearnBundle\Entity\Module;
use dsw\LearnBundle\Entity\Unit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;


/**
 * Course controller.
 *
 */
class CourseController extends Controller
{
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function playAction(Course $course) { // LANCE UN COURS
        
        $em = $this->getDoctrine()->getManager();
        
        $firstModule = $em->getRepository('dswLearnBundle:Module')->findOneBy(
            array(
                'course' => $course,
                'displayOrder' => 1,
            )
        );
        
        if (!$firstModule) { // gère les cas où display order est resté à NULL
            
            $firstModule = $em->getRepository('dswLearnBundle:Module')->findOneByCourse($course);
            
        }
        
        if (null === $firstModule) { // affiche une page d'erreur s'il n'y a pas de module
            
            $error = "Ce cours ne contient pas de module.";
                
                return $this->render('dswLearnBundle:Module:error.html.twig', array(
                    'error' => $error,
                    'course' => $course,
                ));
            
            // UJPE : ajouter les commandes administrateur
            
        }
        
        return $this->redirectToRoute('module_play', array('id' => $firstModule->getId()));
        
        return $this->render('dswLearnBundle:Module:play.html.twig', array(
            'module' => $firstModule,
        ));
        
        /*
        
        $nbModules = $em->getRepository('dswLearnBundle:Module')->countByCourse($course);
        
        if ($nbModules == 1) {
            
            // ne pas rediriger vers l'affichage du module, rester dans un affichage de cours
            
            // $module = $em->getRepository('dswLearnBundle:Module')->findOneByCourse($course);
            // return $this->redirectToRoute('module_show', array('id' => $module->getId()));
            
            return $this->render('dswLearnBundle:Course:play_module.html.twig', array(
                'course' => $course,
            ));
            
        } else if ($nbModules > 1) {
            
            return $this->render('dswLearnBundle:Course:play_welcome.html.twig', array(
                'course' => $course,
            ));
            
        }
        
        //$modules = $em->getRepository('dswLearnBundle:Module')->findByCourse($course);
        
        return $this->render('dswLearnBundle:Course:play.html.twig', array(
            'course' => $course,
        ));
        
        */
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function createAction(Request $request)
    {
        $course = new Course();
        $course->setOpen(1);
        
        $form = $this->createForm('dsw\LearnBundle\Form\CourseCreateType', $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($course);
            $em->flush();

            return $this->redirectToRoute('course_build', array('id' => $course->getId()));
        }

        return $this->render('dswLearnBundle:Course:create.html.twig', array(
            'course' => $course,
            'form' => $form->createView(),
        ));
        
        // ajouter un code avec une chaîne de 6 caractères random
        // sans voyelles
        
    }
    
    public function buildAction(Request $request, Course $course)
    {
        $deleteForm = $this->createDeleteForm($course);
        $editForm = $this->createForm('dsw\LearnBundle\Form\CourseBuildType', $course);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            
            $request->getSession()->getFlashBag()->add('info', 'Le module a bien été modifié.');

            return $this->redirectToRoute('course_build', array('id' => $course->getId()));
        }
        
        $sorted_modules = $this->sorted_modules($course);

        return $this->render('dswLearnBundle:Course:build.html.twig', array(
            'course' => $course,
            'sorted_modules' => $sorted_modules,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function registerAction(Request $request, Course $course) {
        
        $registerForm = $this->createForm('dsw\LearnBundle\Form\CourseRegisterType', $course);
        $registerForm->handleRequest($request);

        if ($registerForm->isSubmitted() && $registerForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($course);
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('info', 'Les utilisateurs ont bien été inscrits.');

            return $this->redirectToRoute('course_register', array('id' => $course->getId()));
        }

        return $this->render('dswLearnBundle:Course:register.html.twig', array(
            'course' => $course,
            'form' => $registerForm->createView(),
        ));
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function duplicateAction(Request $request, Course $course)
    {
        
        $form = $this->createFormBuilder()
            ->add('module', EntityType::class, array(
                'class' => 'dswLearnBundle:Module',
                'choice_label' => 'name',
            ))
            ->getForm();

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            $data = $form->getData();
            $module = $data['module'];
            
            $nb_module = $em->getRepository('dswLearnBundle:Module')->countByCourse($course);
            
            $moduleNew = new Module();
            $moduleNew->setName($module->getName());
            $moduleNew->setChat($module->getChat());
            $moduleNew->setOpen($module->getOpen());
            $moduleNew->setPicto($module->getPicto());
            $moduleNew->setCourse($course);
            $moduleNew->setDisplayOrder($nb_module + 1);
            
            $em->persist($moduleNew);
            $em->flush();
            
            foreach ($module->getUnits() as $unit) {
                
                $unitNew = new Unit();
                $unitNew->setName($unit->getName());
                $unitNew->setContent($unit->getContent());
                $unitNew->setType($unit->getType());
                $unitNew->setDisplayOrder($unit->getDisplayOrder());
                $unitNew->setImage($unit->getImage());
                $unitNew->setModule($moduleNew);
                
                $em->persist($unitNew);
                $em->flush();
                
            }
            
            $request->getSession()->getFlashBag()->add('info', "Le module a bien été dupliqué.");
            return $this->redirectToRoute('course_build', array('id' => $course->getId()));

        }

        return $this->render('dswLearnBundle:Course:duplicate.html.twig', array(
            'course' => $course,
            // 'module' => $module,
            'form' => $form->createView(),
        ));
        
    }
    
    /*
    
    public function resetOrderAction(Request $request, Course $course) {
        
        $i = 1;
        foreach ($course->getModules() as $module) {
            
            $module->
            
            
                
            $unitNew = new Unit();
            $unitNew->setName($unit->getName());
            $unitNew->setContent($unit->getContent());
            $unitNew->setType($unit->getType());
            $unitNew->setDisplayOrder($unit->getDisplayOrder());
            $unitNew->setImage($unit->getImage());
            $unitNew->setModule($moduleNew);

            $em->persist($unitNew);
            $em->flush();

        }
        
        
            foreach ($sortedModules as $module) {
                $module->setDisplayOrder($i);
                $i++;
            }
            
            $em->flush();

        $request->getSession()->getFlashBag()->add('info', "Le module a bien été dupliqué.");
        return $this->redirectToRoute('course_build', array('id' => $course->getId()));
        
    }
    
    */
    
    
    /* METHODES AUTOMATIQUES */

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $courses = $em->getRepository('dswLearnBundle:Course')->findAll();

        return $this->render('dswLearnBundle:Course:index.html.twig', array(
            'courses' => $courses,
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction(Request $request)
    {
        $course = new Course();
        $form = $this->createForm('dsw\LearnBundle\Form\CourseType', $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($course);
            $em->flush();

            return $this->redirectToRoute('course_show', array('id' => $course->getId()));
        }

        return $this->render('dswLearnBundle:Course:new.html.twig', array(
            'course' => $course,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction(Course $course)
    {
        $deleteForm = $this->createDeleteForm($course);

        return $this->render('dswLearnBundle:Course:show.html.twig', array(
            'course' => $course,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction(Request $request, Course $course)
    {
        $deleteForm = $this->createDeleteForm($course);
        $editForm = $this->createForm('dsw\LearnBundle\Form\CourseType', $course);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('course_edit', array('id' => $course->getId()));
        }

        return $this->render('dswLearnBundle:Course:edit.html.twig', array(
            'course' => $course,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, Course $course)
    {
        $form = $this->createDeleteForm($course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($course);
            $em->flush();
        }

        return $this->redirectToRoute('course_index');
    }
    
    
    /* FONCTIONS PRIVEES */
    
    private function sorted_modules($course) {
        
        $em = $this->getDoctrine()->getManager();
        
        return $em->getRepository('dswLearnBundle:Module')->findBy(
            array('course' => $course),
            array('displayOrder' => 'ASC')
        );
        
    }

    /**
     * Creates a form to delete a course entity.
     *
     * @param Course $course The course entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Course $course)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('course_delete', array('id' => $course->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
