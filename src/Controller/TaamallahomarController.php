<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaamallahomarController extends AbstractController
{
    #[Route('/taamallahomar', name: 'app_taamallahomar')]
    public function index(): Response
    {
        return $this->render('taamallahomar/index.html.twig', [
            'controller_name' => 'TaamallahomarController',
        ]);
    }
     #[Route('/taamallahomar/show', name: 'app_taamallahomar')]
    public function affichermetier(): Response
    {
        return $this->render('taamallahomar/index.html.twig', [
            'metier' => 'junior devlopper',
        ]);
    }
}
