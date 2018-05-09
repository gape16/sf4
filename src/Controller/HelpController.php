<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HelpController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return new Response("bonjour !");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf("article en question : %s", $slug));
    }
}