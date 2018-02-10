<?php

namespace RB\EcritBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class EcritController extends Controller
{
    public function indexAction()
    {
        return $this->render('RBEcritBundle:Ecrit:index.html.twig');
    }
}
