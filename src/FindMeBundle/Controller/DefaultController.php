<?php

namespace FindMeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FindMeBundle:Default:index.html.twig');
    }

    public function partieAction()
    {
        return $this->render('FindMeBundle:Default:partie.html.twig');
    }
}
