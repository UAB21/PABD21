<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

class SteauMihaiLucianController extends AbstractController{
    
    public function index(){
        return $this->render('Pagini-SteauM/steaumihailucian.html.twig');
    }
    public function contact(){
        return $this->render('Pagini-SteauM/contact-steaumihailucian.html.twig');
    }
    public function lista(){
        return $this->render('Pagini-SteauM/lista-steaumihailucian.html.twig');
    }
    public function arhiva(){
        return $this->render('Pagini-SteauM/arhiva-steaumihailucian.html.twig');
    }

}

