<?php

namespace RB\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use RB\ContactBundle\Entity\Contact;
use RB\ContactBundle\Form\ContactType;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('RBContactBundle:Contact:index.html.twig');
    }

    public function contactAction(Request $request)
    {
        $contact = new Contact();

        $form   = $this->get('form.factory')->create(ContactType::class, $contact);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Message bien envoyé.');

            return $this->redirectToRoute('RB_contact_home');
        }

        return $this->render('RBContactBundle:Contact:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
