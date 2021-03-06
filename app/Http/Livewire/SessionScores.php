<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SessionScores extends Component
{
    public $session;

    protected $listeners = ['scoreAdded' => '$refresh'];

    public function mount($session)
    {
        $this->session = $session;
    }

    public function render()
    {
        return view('livewire.score-list',
            ['scores' => $this->session->scores->reverse()]
        );
    }
}
