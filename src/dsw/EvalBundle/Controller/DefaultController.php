<?php

namespace dsw\EvalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('dswEvalBundle:Default:index.html.twig');
    }
}
