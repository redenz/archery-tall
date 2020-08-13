<?php

namespace Tests\Feature;

use App\Http\Livewire\TargetScore;
use App\Score;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TargetScoreTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_records_a_score()
    {
        $this->actingAs(factory(User::class)->create());

        Livewire::test(TargetScore::class)
            ->set('score', 11)
            ->call('create');

        $this->assertTrue(Score::whereScore(12)->exists());
    }
}
