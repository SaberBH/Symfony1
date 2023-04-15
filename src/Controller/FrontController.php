<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        $formation = "BootCamp Symfony REAN Devops ";
        $duree = "60 heures";
        $mode = "hybride";
        $formateur = "Mohamed Amine Mezghich";
        $stagiaires = ["Wael","hosni","saber"];
        $camps = [];

        
       /* return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);*/

       //return new Response("<h1 align=center>Welcome to symfony</h1>".$formation);
       return $this ->render('front/Welcome.html.twig',
    [
        'formation'=> $formation,
        'duree'=> $duree,
        'mode'=> $mode,
        'formateur'=> $formateur,
        'stagiaires'=> $stagiaires,
        'camps'=>$camps
    ]
    );
    }
}
