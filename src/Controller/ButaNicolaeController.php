<?php
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    class ButaNicolaeController extends AbstractController
    {
   
        public function index(){
            return $this->render('ButaNicolae/Index.html.twig');
        }
    }