<?php

// src/Controller/laurentiuTibea.controller.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GolgotMihaiController extends AbstractController{

    public function index(){
        return $this->render("GolgotMihai.html.twig");
    }
}
