<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArcherySessions extends Component
{
    protected $listeners = ['scoreAdded' => 'something'];

    public function something()
    {
        dd('GOT IT');
    }

    public function render()
    {
        return view('livewire.archery-sessions', [
            'sessions' => auth()->user()->archerySessions,
        ]);
    }
}
