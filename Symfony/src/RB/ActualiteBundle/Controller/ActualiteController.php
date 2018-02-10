<?php

namespace RB\ActualiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class ActualiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('RBActualiteBundle:Actualite:index.html.twig');
    }
}
