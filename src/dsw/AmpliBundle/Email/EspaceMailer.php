<?php
// src/dsw/AmpliBundle/Email/EspaceMailer.php

namespace dsw\AmpliBundle\Email;

use dsw\AmpliBundle\Entity\Espace;

class EspaceMailer
{
    
      /**
       * @var \Swift_Mailer
       */
      private $mailer;

      public function __construct(\Swift_Mailer $mailer)
      {
        $this->mailer = $mailer;
      }

      public function sendNewNotification(Espace $espace)
      {
        $message = new \Swift_Message(
          'Un nouvel ampli a été créé',
          'L\'espace "' . $espace->getTitre() . '" est disponible à l\'adresse http://ampli.live/' . $espace->getSlug()
        );

        if ($espace->getAnimateur()) {
            // if ($espace->getAnimateur()->getEmail()) {

                $message
                  ->addTo($espace->getAnimateur()->getEmail()) 
                  ->addFrom('ampli@dsides.net')
                ;

                $this->mailer->send($message);

            // }
        }

    }

}
