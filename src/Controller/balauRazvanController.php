<?php

// src/Controller/balauRazvan.controller.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class balauRazvanController extends AbstractController{

    /**
     * @Route("/balau_razvan", name="Balau Razvan")
     */
    public function index(){
        return $this->render("balau_razvan.html.twig");
    }
}
