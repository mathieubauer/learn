<?php

namespace dsw\LearnBundle\Controller;

use dsw\LearnBundle\Entity\Unit;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * Unit controller.
 *
 */
class UnitController extends Controller
{
    
    public function upAction(Request $request, Unit $unit)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $displayOrder = $unit->getDisplayOrder();
        $previousOrder = $displayOrder - 1;
        
        $previousUnit = $em->getRepository('dswLearnBundle:Unit')->findOneBy(array(
            'module' => $unit->getModule(),
            'displayOrder' => $previousOrder,
        ));
        
        $unit->setDisplayOrder($previousOrder);
        $previousUnit->setDisplayOrder($displayOrder);
        
        $em->flush();
        $request->getSession()->getFlashBag()->add('info', 'L\'ordre a bien été modifié.');
        
        return $this->redirectToRoute('module_build', array('id' => $unit->getModule()->getId()));
        
    }
    
    public function downAction(Request $request, Unit $unit)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $displayOrder = $unit->getDisplayOrder();
        $nextOrder = $displayOrder + 1;
        
        $nextUnit = $em->getRepository('dswLearnBundle:Unit')->findOneBy(array(
            'module' => $unit->getModule(),
            'displayOrder' => $nextOrder,
        ));
        
        $unit->setDisplayOrder($nextOrder);
        $nextUnit->setDisplayOrder($displayOrder);
        
        $em->flush();
        $request->getSession()->getFlashBag()->add('info', 'L\'ordre a bien été modifié.');
        
        return $this->redirectToRoute('module_build', array('id' => $unit->getModule()->getId()));
        
    }
    
    
    
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $units = $em->getRepository('dswLearnBundle:Unit')->findAll();

        return $this->render('dswLearnBundle:Unit:index.html.twig', array(
            'units' => $units,
        ));
    }

    /**
     * Creates a new unit entity.
     *
     */
    public function newAction(Request $request)
    {
        $unit = new Unit();
        $form = $this->createForm('dsw\LearnBundle\Form\UnitType', $unit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($unit);
            $em->flush();

            return $this->redirectToRoute('unit_show', array('id' => $unit->getId()));
        }

        return $this->render('dswLearnBundle:Unit:new.html.twig', array(
            'unit' => $unit,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction(Unit $unit)
    {
        $deleteForm = $this->createDeleteForm($unit);

        return $this->render('dswLearnBundle:Unit:show.html.twig', array(
            'unit' => $unit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function editAction(Request $request, Unit $unit)
    {
        
        $deleteForm = $this->createDeleteForm($unit);
        
        if ($unit->getType() == 'title') { $formStyle = 'dsw\LearnBundle\Form\UnitEditContentType'; }
        if ($unit->getType() == 'text') { $formStyle = 'dsw\LearnBundle\Form\UnitEditContentType'; }
        if ($unit->getType() == 'doc') { $formStyle = 'dsw\LearnBundle\Form\UnitEditAllType'; }
        if ($unit->getType() == 'image') { $formStyle = 'dsw\LearnBundle\Form\UnitEditFileType'; }
        if ($unit->getType() == 'image_url') { $formStyle = 'dsw\LearnBundle\Form\UnitEditNameType'; }
        if ($unit->getType() == 'video') { $formStyle = 'dsw\LearnBundle\Form\UnitEditContentType'; }
        if ($unit->getType() == 'video_upload') { $formStyle = 'dsw\LearnBundle\Form\UnitEditFileType'; }
        if ($unit->getType() == 'html') { $formStyle = 'dsw\LearnBundle\Form\UnitEditContentType'; }
        
        
        // $editForm = $this->createForm('dsw\LearnBundle\Form\UnitCreateType', $unit);
        
        $editForm = $this->createForm($formStyle, $unit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
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
            
            $this->getDoctrine()->getManager()->flush();
            
            $request->getSession()->getFlashBag()->add('info', 'L\'unité a bien été modifiée.');
            
            // return $this->redirectToRoute('unit_edit', array('id' => $unit->getId()));
            // return $this->redirectToRoute('module_build', array('id' => $unit->getModule()->getId()));
            return $this->redirectToRoute('module_play', array('id' => $unit->getModule()->getId()));
        }

        return $this->render('dswLearnBundle:Unit:edit.html.twig', array(
            'unit' => $unit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function deleteAction(Request $request, Unit $unit)
    {
        
        $form = $this->createDeleteForm($unit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->remove($unit);
            $em->flush();
            
            $sortedUnits = $em->getRepository('dswLearnBundle:Unit')->findBy(
                array('module' => $unit->getModule()),
                array('displayOrder' => 'ASC')
            );
            
            $i = 1;
            foreach ($sortedUnits as $uneUnite) {
                $uneUnite->setDisplayOrder($i);
                $i++;
            }
            
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('info', "L'unité a bien été supprimée.");
            return $this->redirectToRoute('module_play', array('id' => $unit->getModule()->getId()));
        }

        return $this->render('dswLearnBundle:Unit:delete.html.twig', array(
            'unit' => $unit,
            'form' => $form->createView(),
        ));
        
    }

    /**
     * Creates a form to delete a unit entity.
     *
     * @param Unit $unit The unit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Unit $unit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unit_delete', array('id' => $unit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
    
}
