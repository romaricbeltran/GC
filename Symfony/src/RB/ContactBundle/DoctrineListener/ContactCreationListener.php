<?php

namespace RB\ContactBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use RB\ContactBundle\Email\ContactMailer;
use RB\ContactBundle\Entity\Contact;

class ContactCreationListener
{
  /**
   * @var ContactMailer
   */
  private $contactMailer;

  public function __construct(ContactMailer $contactMailer)
  {
    $this->contactMailer = $contactMailer;
  }

  public function postPersist(LifecycleEventArgs $args)
  {
    $entity = $args->getObject();

    // On ne veut envoyer un email que pour les entités Contact
    if (!$entity instanceof Contact) {
      return;
    }

    $this->contactMailer->sendNewNotification($entity);
  }
}
