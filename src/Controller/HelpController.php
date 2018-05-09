<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HelpController extends AbstractController
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
        $comments = [
            "je n'aime pas ça",
            "trop bien !",
            "j'essaye !",
        ];
        return $this->render("article/show.html.twig", [
                "title"=> ucwords(str_replace('-','',$slug)),
                "comments"=>$comments,
            ]);
    }
}