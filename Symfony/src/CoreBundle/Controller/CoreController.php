<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Core:index.html.twig');
    }

    public function mentionsAction()
    {
        return $this->render('CoreBundle:Core:mentions.html.twig');
    }

    public function planAction()
    {
        return $this->render('CoreBundle:Core:plan.html.twig');
    }

}
