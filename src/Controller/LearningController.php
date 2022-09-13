<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/learning', name: 'app_learning')]
    public function index(): Response
    { $test="hello test";
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
            'string'=> $test,
        ]);
    }
    #[Route('/learning/about-me', name: 'test')]
    public function aboutMe(): Response
    {
        $test="hello";
        return $this->render( 'learning/index.html.twig',[
            'controller_name' => 'Test',
        ]);
    }
}
