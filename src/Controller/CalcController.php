<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalcController extends AbstractController
{
    #[Route('/calc/{x}/{y}', name: 'app_calc')]
    public function index($x=1,$y=1): Response
    {
        $m=bcmul($x, $y);
  
        return $this->render('calc/index.html.twig', [
            'm'=>$m,
            'x'=>$x,
            'y'=>$y
        ]);
    }
}
