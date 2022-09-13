<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class HomepageController extends AbstractController
{

    #[Route('/homepage', name: 'app_homepage')]
    public function index(): Response
    {
        $session = new Session();
        $session->start();

        $myName = $session->get('name');
        if(!isset($myName)){
            $myName = 'Session not set';
        }
        return $this->render('homepage/index.html.twig', [
            'controller_name' => $myName,
        ]);
    }
    #[Route('/homepage/change-name', name: 'app_homepage_changeName')]
    public function changeName():Response{
        $session = new Session();
        $session->start();

        $userName = $_GET['firstName'];
        $session->set('name', $userName);

        return $this->render('homepage/index.html.twig',[
            'controller_name'=> $userName,
        ]);
    }
}
