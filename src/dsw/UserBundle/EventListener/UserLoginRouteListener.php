<?php

namespace dsw\UserBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserLoginRouteListener
{
    /**
     * @var TokenStorageInterface
     */
    private $tokenStorageInterface;

    /**
     * @var RouterInterface
     */
    private $routerInterface;

    public function __construct(TokenStorageInterface $tokenStorageInterface, RouterInterface $routerInterface)
    {
        $this->tokenStorageInterface = $tokenStorageInterface;
        $this->routerInterface = $routerInterface;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        if ($request->get('_route') !== 'fos_user_security_login') {
        // if ($request->get('_route') !== 'fos_user_security_check') {
            return false;
        }
        
        
        if ($request->query->get('email')) {
            // un mail est passé
            return false;
        }
        
        return $event->setResponse(
            new RedirectResponse(
                $this->routerInterface->generate('dsw_user_email')
            )
        );
    }
}