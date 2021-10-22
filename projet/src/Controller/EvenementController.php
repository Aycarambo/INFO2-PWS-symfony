<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    #[Route('/detailevt/{id?}', name: 'detail evt')]
    public function detailevt(?int $id): Response
    {
        return $this->render('detailevt/detailevt.html.twig', [
            'controller_name' => 'EvenementController',
            'id'=>$id,
        ]);
    }
    #[Route('/detailevtpass', name: 'detail evt passe')]
    public function detailevtpass(): Response
    {
        return $this->render('detailevtpass/detailevtpass.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
    #[Route('/detailprop', name: 'detail prop')]
    public function detailprop(): Response
    {
        return $this->render('detailprop/detailprop.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
    #[Route('/detailsession', name: 'detail session')]
    public function detailsession(): Response
    {
        return $this->render('detailsession/detailsession.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
    #[Route('/add', name: 'ajouter')]
    public function add(): Response
    {
        return $this->render('add/add.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
    #[Route('/addprop', name: 'ajouter prop')]
    public function addprop(): Response
    {
        return $this->render('addprop/addprop.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
}
