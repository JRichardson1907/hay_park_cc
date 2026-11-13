<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchCentreController extends AbstractController
{
    #[Route('/match/centre', name: 'app_match_centre')]
    public function index(): Response
    {
        return $this->render('match_centre/index.html.twig', [
            'controller_name' => 'MatchCentreController',
        ]);
    }
}
