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
    	$categorie = $em->getRepository('RBEcritBundle:Categorie')->findOneByNom('Ecrits Théoriques');
    	var_dump($categorie);
        return $this->render('RBEcritBundle:Ecrit:index.html.twig');
    }
}
