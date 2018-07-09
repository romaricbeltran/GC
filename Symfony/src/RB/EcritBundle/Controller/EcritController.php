<?php

namespace RB\EcritBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Doctrine\Common\Util\Debug;

class EcritController extends Controller
{
    public function indexAction()
    {
    	$em=$this->getDoctrine()->getManager();

        $catEcrits=$em->getRepository('RBEcritBundle:Categorie')->findOneByNom('Ecrits Théoriques');
        $catPoemes=$em->getRepository('RBEcritBundle:Categorie')->findOneByNom('Poèmes');
        $catRomans=$em->getRepository('RBEcritBundle:Categorie')->findOneByNom('Romans et Nouvelles');

    	$ecrits = $em->getRepository('RBEcritBundle:Texte')->findBy(array('categorie' => $catEcrits));
        $poemes = $em->getRepository('RBEcritBundle:Texte')->findBy(array('categorie' => $catPoemes));
    	$romans = $em->getRepository('RBEcritBundle:Texte')->findBy(array('categorie' => $catRomans));

        return $this->render('RBEcritBundle:Ecrit:index.html.twig', array(
            'ecrits' => $ecrits,
            'romans' => $romans,
            'poemes' => $poemes,
        ));
    }
}
