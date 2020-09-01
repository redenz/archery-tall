<?php

namespace App\Http\Livewire;

use App\SessionStats as SessionStatsModel;
use Livewire\Component;

class SessionStats extends Component
{
    public $session;

    protected $listeners = ['scoreAdded' => '$refresh'];

    public function mount($session)
    {
        $this->session = $session;
    }

    public function render()
    {
        $stats = SessionStatsModel::avgScoreByDistance($this->session->scores);

        return view('livewire.session-stats', [
            'stats' => $stats,
        ]);
    }
}
