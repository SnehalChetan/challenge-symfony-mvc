<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class LuckyController extends AbstractController
{
    public function number():Response{
        $number = random_int(0, 100);
       // return new Response( '<html><body>Lucky Number '.$number.'</body></html>');
        /**
         * As extending the AbstractController now can use the Render method
         * to render template and pass number parameter to that template
         */
        return $this->render('lucky/number.html.twig',[
           'number'=> $number,
        ]);
    }

}