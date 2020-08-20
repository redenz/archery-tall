<?php

namespace Tests\Feature;

use App\ArcherySession;
use App\Http\Livewire\ArcherySessions;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use ScoresSeeder;
use Tests\TestCase;

class ListArcherySessionsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_lists_archery_sessions()
    {
        $this->seed(ScoresSeeder::class);

        $this->login();
        Livewire::test(ArcherySessions::class)
            ->assertSee('Test Session');
    }

    /** @test */
    public function it_adds_archery_session_scores()
    {
    }
}
