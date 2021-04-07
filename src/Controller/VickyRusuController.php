<?php
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    class VickyRusuController extends AbstractController
    {
   
        public function index(){
            return $this->render('vicky_rusu.html.twig');
        }
    }