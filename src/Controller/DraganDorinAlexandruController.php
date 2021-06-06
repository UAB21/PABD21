<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DraganDorinAlexandruController extends AbstractController
{
    /**
     * @Route("/dragan-dorin-alexandru", name="dragan-dorin-alexandru")
     */
    public function index(): Response
    {
        return $this->render('dragan_dorin_alexandru/index.html.twig', [
            'controller_name' => 'DraganDorinAlexandruController',
        ]);
    }
}