<?php

namespace Tests\Feature;

use App\ArcherySession as ArcherySessionModel;
use App\Http\Livewire\ArcherySession;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ShowArcherySessionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_shows_archery_session_scores()
    {
        $user = factory(User::class)->create();
        $session = factory(ArcherySessionModel::class)->create([
            'name' => 'My Session',
            'user_id' => $user->id,
        ]);
        $session->scores()->create([
            'target' => 1,
            'distance' => 20,
            'score' => 8,
            'archery_session_id' => $session->id,
            'user_id' => $user->id,
        ]);
        $session->scores()->create([
            'target' => 2,
            'distance' => 40,
            'score' => 10,
            'archery_session_id' => $session->id,
            'user_id' => $user->id,
        ]);

        Livewire::test(ArcherySession::class, ['id' => $session->id])
            ->assertSee('Target 1')
            ->assertSee('20 yds')
            ->assertSee(8)
            ->assertSee('40 yds')
            ->assertSee(10);
    }
}
