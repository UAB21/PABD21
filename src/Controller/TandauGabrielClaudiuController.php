<?php
    namespace App\Controller;

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    class TandauGabrielClaudiuController extends AbstractController
    {
        public function index()
        {
            return $this->render('TandauGabrielClaudiu.html.twig');
        }
    }
?>