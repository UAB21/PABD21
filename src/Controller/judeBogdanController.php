<?php

// src/Controller/judeBogdan.controller.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class judeBogdanController extends AbstractController{

    /**
     * @Route("/JudeBogdan", name="Jude Bogdan")
     */
    public function index(){
        return $this->render("jude_bogdan.html.twig");
    }
}