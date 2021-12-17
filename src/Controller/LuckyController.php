<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;

class LuckyController extends AbstractController
{
   
     /**
     * @Route("/lucky/{max?}", name="lucky")
     */


    public function number2($max): Response
    {
        if(!isset($max)||(!is_numeric($max) )) {
            throw new HttpException(404 , "il faut entrer une valeur non nulle et non caractere");
            }
       
        $ma = random_int(0, $max);
        
        return $this->render('lucky/number.html.twig', [
            'ma' => $max,
        ]);

       
    }

 }