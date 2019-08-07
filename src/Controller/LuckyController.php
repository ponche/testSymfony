<?php

namespace App\Controller; 

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 

class LuckyController extends AbstractController 
{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */
    public function number($max)
    {
        $number = random_int(0, $max); 
        $test = $this->generateUrl('app_lucky_number', ['max' => 10]) ; 

        // test flash message 
        $this->addFlash('notice', 'Hello my rabbit') ; 
        $this->addFlash('warning', 'SOS invasion rabbit') ; 

        return $this->render('lucky/number.html.twig', [
            'number' => $number, 
            'test' => $test, 
        ]); 
    }
}