<?php

namespace dsw\FeedbackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('dswFeedbackBundle:Default:index.html.twig');
    }
}
