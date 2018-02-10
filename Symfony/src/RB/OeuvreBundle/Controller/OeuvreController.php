<?php

namespace RB\OeuvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class OeuvreController extends Controller
{
    public function indexAction()
    {
        return $this->render('RBOeuvreBundle:Oeuvre:index.html.twig');
    }
}
