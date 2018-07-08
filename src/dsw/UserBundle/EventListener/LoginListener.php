<?php

namespace dsw\UserBundle\EventListener;

use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use FOS\UserBundle\Model\UserManagerInterface;


class LoginListener implements EventSubscriberInterface
{
    use TargetPathTrait;

    protected $userManager;

    public function __construct(UserManagerInterface $userManager)
    {
        $this->userManager = $userManager;
    }

    public function onImplicitLogin(UserEvent $event)
    {
        $user = $event->getUser();
        
        echo $user;

        // $user->setLastLogin(new \DateTime());
        // $this->userManager->updateUser($user);
    }
    
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::SECURITY_IMPLICIT_LOGIN => 'onImplicitLogin',
        );
    }
}
