<?php

namespace dsw\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
    
    // La page d'accueil
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository('dswAmpliBundle:Espace')->find(1);
        // pour le moment, on ne travaille qu'avec l'espace 1
        
        $user = $this->getUser();
        
        if (null === $user) {
            
            // Ici, l'utilisateur est anonyme ou l'URL n'est pas derrière un pare-feu
            // return $this->render('dswCoreBundle:Core:landing.html.twig');
            
            // POUR TESTS
            return $this->render('dswCoreBundle:Core:landingTest.html.twig');
            
        } else {
            
            // Ici, $user est une instance de notre classe User
            // return $this->render('dswCoreBundle:Core:index.html.twig');
            
            // POUR TESTS
            return $this->render('dswCoreBundle:Core:landingTest.html.twig');
            
            // A FAIRE : rediriger vers un espace admin le cas échéant
            
        }
        
        
    // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
    if (!$this->get('security.authorization_checker')->isGranted('ROLE_AUTEUR')) {
      // Sinon on déclenche une exception « Accès interdit »
      // throw new AccessDeniedException('Accès limité aux auteurs.');
    }

    // Ici l'utilisateur a les droits suffisant,
    // on peut ajouter une annonce
        
        
        
        // Si connecté
        // Si pas connecté
        


      // On retourne simplement la vue de la page d'accueil
    // L'affichage des 3 dernières annonces utilisera le contrôleur déjà existant dans PlatformBundle
    
    // La méthode longue $this->get('templating')->renderResponse('...') est parfaitement valable

    }
  
}