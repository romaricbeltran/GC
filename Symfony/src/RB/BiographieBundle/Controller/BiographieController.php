<?php

namespace RB\BiographieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class BiographieController extends Controller
{
    public function indexAction()
    {
        return $this->render('RBBiographieBundle:Biographie:index.html.twig');
    }
}
