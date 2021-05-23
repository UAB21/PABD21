<?php

// src/Controller/NeagGabriel.controller.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NeagGabrielController extends AbstractController{

    /**
     * @Route("/neag_gabriel", name="Neag Gabriel")
     */
    public function index(){
        return $this->render("neaggabriel.html.twig");
    }
}
