<?php
    namespace App\Controller;

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    class BancilaMihaiController extends AbstractController
    {
        public function index(){
            return $this->render('Pages-BMihai/bancilaMihai.html.twig');
        }

        public function feed(){
            return $this->render('Pages-BMihai/feed-bancilaMihai.html.twig');
        }

        public function about(){
            return $this->render('Pages-BMihai/about-bancilaMihai.html.twig');
        }

        public function contact(){
            return $this->render('Pages-BMihai/contact-bancilaMihai.html.twig');
        }
    }