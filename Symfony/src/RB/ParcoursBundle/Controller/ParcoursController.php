<?php

namespace RB\ParcoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
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

    public function menuPeriodeAction($limit)
    {
        $em = $this->getDoctrine()->getManager();
        $periodes = $em->getRepository('RBParcoursBundle:Periode')->findBy(
      array(),                 // Pas de critère
      array('id' => 'asc'),    // On trie par date croissante
      $limit,                  // On sélectionne $limit de périodes
      0                        // À partir du premier
      );

    return $this->render('RBParcoursBundle:Parcours:menuPeriode.html.twig', 
      array('periodes' => $periodes));
    }

    public function vuePeriodeAction($id)
    {
       $em = $this->getDoctrine()->getManager();

       $periode = $em->getRepository('RBParcoursBundle:Periode')->find($id);

        if (null === $periode) {
            throw new NotFoundHttpException("La periode d'id ".$id." n'existe pas.");
        }

       $sousParties=$em->getRepository('RBParcoursBundle:SousPartie')->findBy(array('periode' => $periode));

       $oeuvres=$em->getRepository('RBParcoursBundle:Oeuvre')->findBy(array('sousPartie' => $sousParties));


        return $this->render('RBParcoursBundle:Parcours:vuePeriode.html.twig', array(
          'periode' => $periode,
          'sousParties' => $sousParties,
          'oeuvres' => $oeuvres,
      ));
    }
}
