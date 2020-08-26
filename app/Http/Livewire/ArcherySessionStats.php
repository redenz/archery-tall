<?php

namespace App\Http\Livewire;

use App\SessionStats;
use Livewire\Component;

class ArcherySessionStats extends Component
{
    public $session;

    protected $listeners = ['scoreAdded' => '$refresh'];

    public function mount($session)
    {
        $this->session = $session;
    }

    public function render()
    {
        $stats = SessionStats::avgScoreByDistance($this->session->scores);

        return view('livewire.archery-session-stats', [
            'stats' => $stats,
        ]);
    }
}
