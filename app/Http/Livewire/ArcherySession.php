<?php

namespace App\Http\Livewire;

use App\ArcherySession as SessionModel;
use Livewire\Component;

class ArcherySession extends Component
{
    public $archerySession;

    protected $listeners = ['scoreAdded' => '$refresh'];

    public function getAverageDistanceProperty()
    {
        return $this->archerySession->scores->average(function ($score) {
            return $score->distance;
        });
    }

    public function getAverageScoreProperty()
    {
        return $this->archerySession->scores->average(function ($score) {
            return $score->score;
        });
    }

    public function mount($id)
    {
        $this->archerySession = SessionModel::with('scores')->find($id);
    }

    public function render()
    {
        return view('livewire.archery-session');
    }
}
