<?php

namespace RB\ContactBundle\Email;

use RB\ContactBundle\Entity\Contact;

class ContactMailer
{
  /**
   * @var \Swift_Mailer
   */
  private $mailer;

  public function __construct(\Swift_Mailer $mailer)
  {
    $this->mailer = $mailer;
  }

  public function sendNewNotification(Contact $contact)
  {
    $message = new \Swift_Message(
      $contact->getNom(),
      " Message recu de :
      {$contact->getNom()}
      {$contact->getEmail()}
      {$contact->getTelephone()}
      {$contact->getMessage()}"
    );

    $message
      ->addTo('gcwebcontact@gmail.com')
      ->addFrom('gcwebcontact@gmail.com')
    ;

    $this->mailer->send($message);
  }
}