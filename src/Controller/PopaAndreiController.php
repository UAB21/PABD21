<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PopaAndreiController extends AbstractController{

  public function index(){
    return $this->render("popaandrei.html.twig");
  }
}
