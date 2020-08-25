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
        return number_format($this->archerySession->scores->average(function ($score) {
            return $score->distance;
        }), 1);
    }

    public function getAverageScoreProperty()
    {
        return number_format($this->archerySession->scores->average(function ($score) {
            return $score->score;
        }), 1);
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