<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SessionTotals extends Component
{
    public $archerySession;
    protected $listeners = ['scoreAdded' => '$refresh'];

    public function mount($archerySession)
    {
        $this->archerySession = $archerySession;
    }

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

    public function getTotalScoreProperty()
    {
        return $this->archerySession->scores->sum('score');
    }

    public function getTotalDistanceProperty()
    {
        return $this->archerySession->scores->sum('distance');
    }

    public function render()
    {
        return view('livewire.session-totals');
    }
}
