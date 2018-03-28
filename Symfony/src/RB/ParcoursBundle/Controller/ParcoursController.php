<?php

namespace RB\ParcoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use RB\ParcoursBundle\Entity\Oeuvre;
use RB\ParcoursBundle\Entity\Image;
use RB\ParcoursBundle\Entity\Periode;

class ParcoursController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $listPeriodes=$em->getRepository('RBParcoursBundle:Periode')->findAll();

        return $this->render('RBParcoursBundle:Parcours:index.html.twig', array(
            'periodes' => $listPeriodes, 
        ));
    }

    public function vuePeriodeAction()
    {
       $em = $this->getDoctrine()->getManager();

       $oeuvres = $em->getRepository('RBParcoursBundle:Oeuvre')->findAll();

      return $this->render('RBParcoursBundle:Parcours:vue_periode.html.twig', array(
          'oeuvre' => $oeuvres,
      ));
    }

}
