<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sessions extends Component
{
    protected $listeners = ['sessionAdded' => '$refresh'];

    public function render()
    {
        return view('livewire.sessions', [
            'sessions' => auth()->user()->archerySessions,
        ]);
    }
}
