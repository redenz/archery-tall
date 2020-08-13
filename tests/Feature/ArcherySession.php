<?php

namespace Tests\Feature;

use App\ArcherySession as ArcherySessionModel;
use App\Http\Livewire\CreateArcherySession;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ArcherySession extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_session()
    {
        $this->actingAs(factory(User::class)->create());

        Livewire::test(CreateArcherySession::class)
            ->set('name', 'My Session')
            ->call('create');

        $this->assertTrue(ArcherySessionModel::whereName('My Session')
        ->whereUserId(1)
        ->exists());
    }
}
