<?php

namespace dsw\EvalBundle\Controller;

use dsw\EvalBundle\Entity\Enregistrement;
use dsw\EvalBundle\Entity\Record;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Enregistrement controller.
 *
 */
class EnregistrementController extends Controller
{
    /**
     * Lists all enregistrement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enregistrements = $em->getRepository('dswEvalBundle:Enregistrement')->findAll();

        return $this->render('dswEvalBundle:Enregistrement:index.html.twig', array(
            'enregistrements' => $enregistrements,
        ));
    }

    /**
     * Creates a new enregistrement entity.
     *
     */
    public function newAction(Request $request, $id)
    {
        
        // pour l'enregistrement de tous les scores
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $evaluation = $em->getRepository('dswEvalBundle:Evaluation')->findEvaluationByEvaluateur($user);
        
        if ($id == 1) { 
            
            // alors début du questionnaire, supprime les éventuelles tentatives précédentes
            // à améliorer (pour permettre le retour en arrière ? la poursuite d'un test ?)
            
            $recordsToDelete = $em->getRepository('dswEvalBundle:Record')->findBy(array(
                'user' => $user,
                'evaluation' => $evaluation,
            ));
            
            foreach ($recordsToDelete as $recordToDelete) {
                $em->remove($recordToDelete);
            }
            
            $textsToDelete = $em->getRepository('dswEvalBundle:Texte')->findBy(array(
                'user' => $user,
                'evaluation' => $evaluation,
            ));
            
            foreach ($textsToDelete as $textToDelete) {
                $em->remove($textToDelete);
            }
            
            $em->flush();
            
        }
        
        $questions = $em->getRepository('dswEvalBundle:Question')->findByTheme($id);
        
        $enregistrement = new Enregistrement();
        
        if ($id == 1) { $theme = 'Décider'; }
        if ($id == 2) { $theme = 'Organiser'; }
        if ($id == 3) { $theme = 'Développer l\'esprit d\'équipe'; }
        if ($id == 4) { $theme = 'Développer la coopération'; }
        if ($id == 5) { $theme = 'Gérer les changements / les incertitudes'; }
        if ($id == 6) { $theme = 'Gérer les tensions / les conflits'; }
        // if ($id == 7) { $theme = 'Le profil managérial du sous directeur'; }
        
        
        foreach ($questions as $key => $question) {
            
            $record[$key] = new Record();
            $record[$key]->setUser($user);
            $record[$key]->setQuestion($questions[$key]);
            $record[$key]->setEnregistrement($enregistrement);
            $record[$key]->setEvaluation($evaluation);
            $enregistrement->getRecords()->add($record[$key]);
            
        }
        
        $form = $this->createForm('dsw\EvalBundle\Form\EnregistrementType', $enregistrement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enregistrement);
            $em->flush();

            if ($id == 6) {
                return $this->redirectToRoute('dsw_eval_text');
            } else {
                return $this->redirectToRoute('dsw_eval_theme', array('id' => $id + 1));
            }
            
        }

        return $this->render('dswEvalBundle:Enregistrement:new.html.twig', array(
            'id' => $id,
            'theme' => $theme,
            'questions' => $questions,
            'enregistrement' => $enregistrement,
            'form' => $form->createView(),
        ));
    }
    
    public function textAction(Request $request)
    {
        
        // Non utilisé
        /*
        
        $user = $this->getUser();
        
        $em = $this->getDoctrine()->getManager();
        
        $enregistrement = new Enregistrement();
        
        $texte = new Texte();
        $texte->setUser($user);
        
        //$evaluation = 
        
        
        foreach ($questions as $key => $question) {
            
            $record[$key] = new Record();
            $record[$key]->setUser($user);
            $record[$key]->setQuestion($questions[$key]);
            $record[$key]->setEnregistrement($enregistrement);
            $enregistrement->getRecords()->add($record[$key]);
            
        }
            
        
        $form = $this->createForm('dsw\EvalBundle\Form\EnregistrementType', $enregistrement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enregistrement);
            $em->flush();

            if ($id == 6) {
                return $this->redirectToRoute('dsw_eval_text');
                
            } else {
                return $this->redirectToRoute('dsw_eval_theme', array('id' => $id + 1));
            }
            
        }

        return $this->render('dswEvalBundle:Enregistrement:new.html.twig', array(
            'id' => $id,
            'theme' => $theme,
            'questions' => $questions,
            'enregistrement' => $enregistrement,
            'form' => $form->createView(),
        ));
        */
    }

    /**
     * Finds and displays a enregistrement entity.
     *
     */
    public function showAction(Enregistrement $enregistrement)
    {
        $deleteForm = $this->createDeleteForm($enregistrement);

        return $this->render('dswEvalBundle:Enregistrement:show.html.twig', array(
            'enregistrement' => $enregistrement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing enregistrement entity.
     *
     */
    public function editAction(Request $request, Enregistrement $enregistrement)
    {
        $deleteForm = $this->createDeleteForm($enregistrement);
        $editForm = $this->createForm('dsw\EvalBundle\Form\EnregistrementType', $enregistrement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eval_enregistrement_edit', array('id' => $enregistrement->getId()));
        }

        return $this->render('dswEvalBundle:Enregistrement:edit.html.twig', array(
            'enregistrement' => $enregistrement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a enregistrement entity.
     *
     */
    public function deleteAction(Request $request, Enregistrement $enregistrement)
    {
        $form = $this->createDeleteForm($enregistrement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($enregistrement);
            $em->flush();
        }

        return $this->redirectToRoute('eval_enregistrement_index');
    }

    /**
     * Creates a form to delete a enregistrement entity.
     *
     * @param Enregistrement $enregistrement The enregistrement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Enregistrement $enregistrement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eval_enregistrement_delete', array('id' => $enregistrement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
