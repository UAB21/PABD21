<?php
    namespace App\Controller;

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    class DefaultController extends AbstractController
    {
        public function index(){
            return $this->render('Default.html.twig');
        }
    }