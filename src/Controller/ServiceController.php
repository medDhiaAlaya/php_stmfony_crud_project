<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('service/{name}',name:"service_app")]
    function showService($name):Response
    {
        return $this-> render('service/showService.html.twig',[
            "name"=>$name
        ]);

    }

    #[Route("/go")]
    function goToIndex():Response
    {
        return $this->redirect("home");

    }
}
