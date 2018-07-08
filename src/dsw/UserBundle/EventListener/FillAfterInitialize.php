<?php

namespace dsw\UserBundle\EventListener;

use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

// use FOS\UserBundle\Model\UserInterface;
// use FOS\UserBundle\Model\UserManagerInterface;

// use FOS\UserBundle\Event\UserEvent;

class FillAfterInitialize implements EventSubscriberInterface
{
    // use TargetPathTrait;

    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
    
    public function onRegistrationInitialize(FormEvent $event)
    {
        $url = $this->router->generate('fos_user_security_login');
        $response = new RedirectResponse($url);

        $event->setResponse($response);
    }

    /*
    public function onRegistrationInitialize(GetResponseUserEvent $event)
    {
        
        // main is your firewall's name
        // $url = $this->getTargetPath($event->getRequest()->getSession(), 'main');

        // if (!$url) {
        //     $url = $this->router->generate('homepage');
        // }

        // $response = new RedirectResponse($url);
        // $event->setResponse($response);
        
        //$user->setUsername('lalala');
        
        $event->setResponse($response);
        
    }*/

    public static function getSubscribedEvents()
    {
        return [
            FOSUserEvents::REGISTRATION_INITIALIZE => 'onRegistrationInitialize'
        ];
    }
}
