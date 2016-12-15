<?php

namespace MarvelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FindMeBundle\Entity\User;

class ValidationController extends Controller{

    public function validationAction(User $user, Request $request){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('FindMeBundle:User')->findOneById($id);
        //Possible de récupérer les données avec Request $request en paramètre, spécifique à SF
        $validation = 0;
        if ($validation == 1){
            $winner = 1;
            return $this->render('@FindMe/Default/partie.html.twig', array(
                'user' => $user,
                'points' => $points,
            ));
        }
        else {
            return $this->render('@FindMe/Default/partie.html.twig', array(
                'id' => $id,
            ));
        }
    }
}