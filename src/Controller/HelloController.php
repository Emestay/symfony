<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{

    public function sayHello(): Response
    {
        return new Response("Bonjour");
    }

    public function sayHelloUtil($name): Response
    {
        return new Response("Bonjour " . $name);
    }
}
