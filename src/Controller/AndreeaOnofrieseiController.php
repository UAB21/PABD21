<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AndreeaOnofrieseiController extends AbstractController
{
    /**
     * @Route("/andreea/onofriesei", name="andreea_onofriesei")
     */
    public function index(): Response
    {
        return $this->render('andreea_onofriesei/index.html.twig', [
            'controller_name' => 'AndreeaOnofrieseiController',
        ]);
    }
}
