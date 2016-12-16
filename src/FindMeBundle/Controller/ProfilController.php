<?php

namespace FindMeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FindMeBundle\Entity\Player;

class ProfilController extends Controller
{
    public function indexAction()
    {
        return $this->render('@FindMe/profil.html.twig');
    }

    /**
     * Lists all player entities.
     *
     */
    public function profilAction()
    {
        $em = $this->getDoctrine()->getManager();

        $player = $em->getRepository('FindMeBundle:Player')->findAll();

        return $this->render('FindMeBundle::profil.html.twig', array(
            'player' => $player,
        ));
    }

//    Add points to winner when the game is validated
//    public function addPoints(Request $request)
//    {
//        if ($form->isSubmitted() && $form->isValid()) {
//            // do some sort of processing
//
//
//
//
//        // redirect to the "profil" route
////        return $this->redirectToRoute('profil');
//    }
}
