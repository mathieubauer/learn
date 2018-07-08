<?php

namespace dsw\QuizBundle\Controller;

use dsw\QuizBundle\Entity\Config;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Config controller.
 *
 */
class ConfigController extends Controller
{
    /**
     * Lists all config entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $configs = $em->getRepository('dswQuizBundle:Config')->findAll();

        return $this->render('dswQuizBundle:Config:index.html.twig', array(
            'configs' => $configs,
        ));
    }

    /**
     * Creates a new config entity.
     *
     */
    public function newAction(Request $request)
    {
        $config = new Config();
        $form = $this->createForm('dsw\QuizBundle\Form\ConfigType', $config);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($config);
            $em->flush();

            return $this->redirectToRoute('quiz_config_show', array('id' => $config->getId()));
        }

        return $this->render('dswQuizBundle:Config:new.html.twig', array(
            'config' => $config,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a config entity.
     *
     */
    public function showAction(Config $config)
    {
        $deleteForm = $this->createDeleteForm($config);

        return $this->render('dswQuizBundle:Config:show.html.twig', array(
            'config' => $config,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing config entity.
     *
     */
    public function editAction(Request $request, Config $config)
    {
        $deleteForm = $this->createDeleteForm($config);
        $editForm = $this->createForm('dsw\QuizBundle\Form\ConfigType', $config);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quiz_config_edit', array('id' => $config->getId()));
        }

        return $this->render('dswQuizBundle:Config:edit.html.twig', array(
            'config' => $config,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a config entity.
     *
     */
    public function deleteAction(Request $request, Config $config)
    {
        $form = $this->createDeleteForm($config);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($config);
            $em->flush();
        }

        return $this->redirectToRoute('quiz_config_index');
    }

    /**
     * Creates a form to delete a config entity.
     *
     * @param Config $config The config entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Config $config)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quiz_config_delete', array('id' => $config->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
