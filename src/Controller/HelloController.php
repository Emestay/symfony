<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/hello")
     */


    public function sayHello(): Response
    {
        return new Response("Bonjour");
    }

    /**
     * @Route("/hello/{name}")
     */
    public function sayHelloUtil($name): Response
    {
        return new Response("Bonjour " . $name);
    }

}
