<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController{
    /**
     * @Route("/test")
     */


    public function TrouFolce($test) : Response {
        if($test == 'true'){
            return new Response("<p>C'est bon</p>");

        }
        elseif($test == 'false'){
            return new Response("<p>C'est pas bon</p>");
        }
        else{
            return new Response("<p>Autre</p>");
        }
    }
    /**
     * @Route("/test/{test}")
     */


}
