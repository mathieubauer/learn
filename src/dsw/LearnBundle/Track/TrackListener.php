<?php

namespace dsw\LearnBundle\Track;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;


class TrackListener {
    
    // ici les conditions
    
    // si l'user est connecté
    // si on est dans un module
    
    // L'argument de la méthode est un FilterResponseEvent
    public function processTrack(FilterResponseEvent $event) {
        
        // On teste si la requête est bien la requête principale (on ne veut pas appliquer aux sous-requête)
        if (!$event->isMasterRequest()) {
            return;
        }

        
        
        
    }
    
    
    $remainingDays = $this->endDate->diff(new \Datetime())->days;

    // Si la date est dépassée, on ne fait rien
    if ($remainingDays <= 0) {
      return;
    }

    // On utilise notre BetaHRML
    $response = $this->betaHTML->addBeta($event->getResponse(), $remainingDays);
    
    // On met à jour la réponse avec la nouvelle valeur
    $event->setResponse($response);
    
    
    
    /*
    
  // Notre processeur
  protected $betaHTML;

  // La date de fin de la version bêta :
  // - Avant cette date, on affichera un compte à rebours (J-3 par exemple)
  // - Après cette date, on n'affichera plus le « bêta »
  protected $endDate;

  public function __construct(BetaHTMLAdder $betaHTML, $endDate)
  {
    $this->betaHTML = $betaHTML;
    $this->endDate  = new \Datetime($endDate);
  }

  public function processBeta()
  {
    $remainingDays = $this->endDate->diff(new \Datetime())->days;

    if ($remainingDays <= 0) {
      // Si la date est dépassée, on ne fait rien
      return;
    }
    
    // Ici on appelera la méthode
    // $this->betaHTML->addBeta()
  }
  
  */
}