<?php

namespace RB\ParcoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class ParcoursController extends Controller
{
    public function indexAction()
    {
        return $this->render('RBParcoursBundle:Parcours:index.html.twig');
    }
}
