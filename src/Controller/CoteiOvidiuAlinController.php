<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CoteiOvidiuAlinController extends AbstractController{

  public function index(){
    return $this->render("coteiovidiualin.html.twig");
  }
}
