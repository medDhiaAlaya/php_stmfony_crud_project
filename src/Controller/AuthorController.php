<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/showAuthor/{name}', name: 'show_author')]
    public function showAuthor($name): Response
    {
        return $this->render('author/showAuthor.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route("/list",name:"list_")]
    function list():Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor_Hugo.jpg','username' => 'Victor Hugo', 'email' =>
            'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jfif','username' => ' William Shakespeare', 'email' =>
            ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/TahaHussein.jpg','username' => 'Taha Hussein', 'email' =>
            'taha.hussein@gmail.com', 'nb_books' => 300),
            );
            return $this->render("author/list.html.twig",[
                "authors"=>$authors,
            ]);

    }
}
