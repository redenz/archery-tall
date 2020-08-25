<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArcherySessions extends Component
{
    protected $listeners = ['sessionAdded' => '$refresh'];

    public function render()
    {
        return view('livewire.archery-sessions', [
            'sessions' => auth()->user()->archerySessions,
        ]);
    }
}
