<?php

// src/Controller/laurentiuTibea.controller.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class laurentiuTibeaController extends AbstractController{

    public function index(){
        return $this->render("laurentiuTibea.html.twig");
    }
}
