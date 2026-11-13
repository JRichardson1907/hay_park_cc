<?php

namespace App\Service;

final class MatchCentreService
{
    public function getMatches(): array
    {
        return [
            [
                'id' => 'demo-1',
                'competition' => 'BDCA',
                'grade' => 'Seniors',
                'season' => '2026/27',
                'team' => '1st XI',
                'round' => 'R5',
                'status' => 'UPCOMING',
                'homeTeam' => 'Hay Park Redbacks',
                'awayTeam' => 'Example Cricket Club',
                'homeScore' => null,
                'awayScore' => null,
                'format' => 'One Day',
                'date' => 'Sat, 14 Nov 2026',
                'time' => '12:30 pm',
                'venue' => 'Hay Park',
                'result' => null,
            ],
            [
                'id' => 'demo-2',
                'competition' => 'BDCA',
                'grade' => 'Seniors',
                'season' => '2026/27',
                'team' => '1st XI',
                'round' => 'R6',
                'status' => 'UPCOMING',
                'homeTeam' => 'Example Cricket Club',
                'awayTeam' => 'Hay Park Redbacks',
                'homeScore' => null,
                'awayScore' => null,
                'format' => 'One Day',
                'date' => 'Sat, 21 Nov 2026',
                'time' => '12:30 pm',
                'venue' => 'Example Oval',
                'result' => null,
            ],
            [
                'id' => 'demo-3',
                'competition' => 'BDCA',
                'grade' => 'Seniors',
                'season' => '2026/27',
                'team' => '1st XI',
                'round' => 'R4',
                'status' => 'COMPLETED',
                'homeTeam' => 'Hay Park Redbacks',
                'awayTeam' => 'Example Cricket Club',
                'homeScore' => '185/7',
                'awayScore' => '162',
                'format' => 'One Day',
                'date' => 'Sat, 7 Nov 2026',
                'time' => '12:30 pm',
                'venue' => 'Hay Park',
                'result' => 'Hay Park won by 23 runs',
            ],
            [
                'id' => 'demo-4',
                'competition' => 'BDCA',
                'grade' => 'Juniors',
                'season' => '2026/27',
                'team' => 'Under 13',
                'round' => 'R5',
                'status' => 'UPCOMING',
                'homeTeam' => 'Hay Park Redbacks U13',
                'awayTeam' => 'Example Juniors U13',
                'homeScore' => null,
                'awayScore' => null,
                'format' => 'T20',
                'date' => 'Sun, 15 Nov 2026',
                'time' => '8:30 am',
                'venue' => 'Hay Park',
                'result' => null,
            ],
        ];
    }
}
