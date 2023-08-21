<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NomController extends AbstractController
{
    #[Route('/hello/{MyName}')]
    public function index()
    {
        return  new Response("Hello world !");
    }
    #[Route('/calc/{x}/{y}')]
    public function calcAction($x,$y)
    { return new Response("La somme de " .$x. " et " .$y. " est : " .$x+$y);
       
    }
}
