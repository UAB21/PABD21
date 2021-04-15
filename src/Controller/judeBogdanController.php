<?php

// src/Controller/judeBogdan.controller.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class balauRazvanController extends AbstractController{

    /**
     * @Route("/jude_bogdan", name="Jude Bogdan")
     */
    public function index(){
        return $this->render("jude_bogdan.html.twig");
    }
}