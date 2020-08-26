<?php

namespace App;

class SessionStats
{
    public static function avgScoreByDistance($scores)
    {
        if (! $scores) {
            return [];
        }

        return collect($scores)->map(function ($score) {
            $low = floor($score['distance'] / 10) * 10;

            $high = $score['distance'] % 10 == 0 ? $score['distance'] + 1 : $score['distance'];
            $high = ceil($high / 10) * 10;

            return [
                'range' => "{$low} - {$high}",
                'distance' => $score['distance'],
                'score' => $score['score'],
            ];
        })
        ->groupBy('range')
        ->map(function ($item, $key) {
            return [
                'range' => $key,
                'avg' => number_format(collect($item)->avg('score'), 1),
                'numTargets' => collect($item)->count(),
            ];
        })->sortBy('range')->values()->toArray();
    }
}
