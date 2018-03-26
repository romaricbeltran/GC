<?php

namespace RB\ParcoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use RB\ParcoursBundle\Entity\Oeuvre;
use RB\ParcoursBundle\Entity\Image;

class ParcoursController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();


        return $this->render('RBParcoursBundle:Parcours:index.html.twig');
    }

    public function vuePeriodeAction()
    {
       $em = $this->getDoctrine()->getManager();

       $images = $em->getRepository('RBParcoursBundle:Image')->findAll();

      return $this->render('RBParcoursBundle:Parcours:vue_periode.html.twig', array(
          'images' => $images,
      ));
    }

}
