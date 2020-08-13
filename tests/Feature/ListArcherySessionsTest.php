<?php

namespace Tests\Feature;

use App\ArcherySession;
use App\Http\Livewire\ArcherySessions;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ListArcherySessions extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_lists_archery_sessions()
    {
        $user = factory(User::class)->create();

        factory(ArcherySession::class)->create([
           'user_id' => $user->id,
           'name' => 'My Session',
       ]);

        $this->actingAs($user);

        Livewire::test(ArcherySessions::class)
            ->assertSee('My Session');
    }
}
