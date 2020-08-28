<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
     * @Route("/")
     */
class PageAccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('page_accueil/accueil.html.twig', [
            'controller_name' => 'PageAccueilController',
        ]);
    }
     /**
     * @Route("/manifestation", name="page_manifestation")
     */
    public function manifestation()
    {
        return $this->render('page_accueil/manifestation.html.twig', [
            'controller_name' => 'PageAccueilController',
        ]);
    }
}
