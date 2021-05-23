<?php
// src/Controller/stefalinController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class stefalinController extends AbstractController
{
    /**
     * @Route("/stef_alin", name="Stef Alin")
     */
    public function index()
    {
        return $this->render("stefalin.html.twig");
    }
}