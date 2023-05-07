<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'app_voiture')]
    public function index(): Response
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }
    #[Route('/voiture/list', name: 'app_voiture')]
    public function afficheVoiture(): Response
    {
        $voitures=array(array('id'=>1, 'marque'=>'BMW', 'vitesse'=>240, 'puissance'=>10),
           array('id'=>2, 'marque'=>'Ford', 'vitesse'=>200, 'puissance'=>6),
           array('id'=>3, 'marque'=>'Audi', 'vitesse'=>240, 'puissance'=>8),
           array('id'=>4, 'marque'=>'Peugeot', 'vitesse'=>200, 'puissance'=>4));
        return $this->render('voiture/affiche.html.twig', [
            'voitures' => $voitures,
        ]);
    }
    #[Route('/detail/{vitesse}/{puissance}', name: 'detail')]
    public function detailFormation($vitesse,$puissance): Response
    {
        return $this->render('voiture/detail.html.twig', [
            't' => $vitesse,'r'=>$puissance
        ]);
    }
}
