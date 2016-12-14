<?php

namespace FindMeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilController extends Controller
{
    public function indexAction()
    {
        return $this->render('FindMeBundle::profil.html.twig');
    }
}
