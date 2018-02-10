<?php

namespace RB\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('RBContactBundle:Contact:index.html.twig');
    }
}
