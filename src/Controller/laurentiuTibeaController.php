<?php

// src/Controller/laurentiuTibea.controller.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class laurentiuTibeaController extends AbstractController{

    /**
     * @Route("/laurentiu_tibea", name="Laurentiu Tibea")
     */
    public function index(){
        return $this->render("laurentiuTibea.html.twig");
    }
}
