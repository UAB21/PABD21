<?php
    namespace App\Controller;

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    class BancilaMihaiController extends AbstractController
    {
    /**
         * @Route("/bancilaMihai", name="BancilaMihai")
         */
        public function index(){
            return $this->render('bancilaMihai.html.twig');
        }
    }