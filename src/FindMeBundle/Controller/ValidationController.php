<?php

namespace FindMeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FindMeBundle\Entity\User;
use FindMeBundle\Entity\Player;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraint;

class ValidationController extends Controller{

//        si validation -> recupérer id user + id game    et les lier
//                      -> ajouter des pts au user

    public function validationAction()
    {
        $validator = Validation::createValidator();


        return $this->render('FindMeBundle::validation.html.twig');


    }
}