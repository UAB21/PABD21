<?php
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    class risteiuileana1975Controller extends AbstractController
    {
   
        public function index(){
            return $this->render('risteiuileana1975.html.twig');
        }
    }