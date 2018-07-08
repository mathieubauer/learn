<?php

namespace dsw\LearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $config = $em->getRepository('dswLearnBundle:Config')->findOneByName('espace_demo'); 
        $demo = $config->getValue();
        
        $courses = $em->getRepository('dswLearnBundle:Course')->findAll();
        
        return $this->render('dswLearnBundle:Default:landing.html.twig', array(
            'demo' => $demo,
            'courses' => $courses,
        ));
    }
}
