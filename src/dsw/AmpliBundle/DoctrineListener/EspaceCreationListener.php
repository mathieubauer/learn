<?php
// src/OC/PlatformBundle/DoctrineListener/ApplicationCreationListener.php

namespace dsw\AmpliBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use dsw\AmpliBundle\Email\EspaceMailer;
use dsw\AmpliBundle\Entity\Espace;

class EspaceCreationListener
{
  /**
   * @var EspaceMailer
   */
  private $espaceMailer;

  public function __construct(EspaceMailer $espaceMailer)
  {
    $this->espaceMailer = $espaceMailer;
  }

  public function postPersist(LifecycleEventArgs $args)
  {
    $entity = $args->getObject();

    // On ne veut envoyer un email que pour les entités Espace
    if (!$entity instanceof Espace) {
      return;
    }

    $this->espaceMailer->sendNewNotification($entity);
  }
}
