<?php

namespace Tests\Unit;

use App\SessionStats;
use PHPUnit\Framework\TestCase;

class SessionStatsTest extends TestCase
{
    /** @test */
    public function it_can_accumulate_stats_by_range()
    {
        $expected = [
            [
                'range' => '10 - 20',
                'avg' => 10,
                'numTargets' => 3,
            ],
            [
                'range' => '20 - 30',
                'avg' => 2.5,
                'numTargets' => 2,
            ],
        ];

        $data = [
            [
                'distance' => 11,
                'score' => 8,
            ],
            [
                'distance' => 18,
                'score' => 10,
            ],
            [
                'distance' => 15,
                'score' => 12,
            ],
            [
                'distance' => 22,
                'score' => 5,
            ],
            [
                'distance' => 28,
                'score' => 0,
            ],
        ];

        $avgs = SessionStats::avgScoreByDistance($data);

        $this->assertEquals($expected, $avgs);
    }
}
