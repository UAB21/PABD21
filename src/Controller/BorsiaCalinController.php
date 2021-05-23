<?php
// src/Controller/BorsiaCalinController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BorsiaCalinController extends AbstractController
{
    
    public function index()
    {
        return $this->render("BorsiaCalin.html.twig");
    }
} 