<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Temporary development data.
        // Replace with PlayHQ API data later.

        $fixtures = [
            [
                'grade' => 'A',
                'date' => 'Saturday - 14th November',
                'homeTeam' => 'Donnybrook CC',
                'awayTeam' => 'Hay Park CC',
                'venue' => 'Egan Park',
            ],
            [
                'grade' => 'C',
                'date' => 'Saturday - 14th November',
                'homeTeam' => 'Bye',
                'awayTeam' => 'Bye',
                'venue' => 'N/A',
            ],
        ];

        $results = [
            [
                'grade' => 'Demo - Senior Cricket',
                'date' => 'Sample result',
                'homeTeam' => 'Hay Park CC',
                'homeScore' => '185/7',
                'awayTeam' => 'Example Opposition',
                'awayScore' => '162',
                'outcome' => 'Sample: Hay Park won by 23 runs',
            ],
        ];

        return $this->render('home/index.html.twig', [
            'fixtures' => $fixtures,
            'results' => $results,
        ]);
    }
}
