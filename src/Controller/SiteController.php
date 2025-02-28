<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('site/index.html.twig', []);
    }

    /**
     * @Route("/support", name="support")
     */
    public function support(): Response
    {
        return $this->render('site/support.html.twig', []);
    }
}
