<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Home extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Timeweb Cloud + Symfony = ❤️');
    }
}
