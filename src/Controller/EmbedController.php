<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmbedController extends AbstractController
{
    /**
     * @Route("/checkout", name="checkout")
     */
    public function checkout(): Response
    {
        return $this->render('embed/checkout.html.twig', []);
    }
}
