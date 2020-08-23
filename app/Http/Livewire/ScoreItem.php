<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ScoreItem extends Component
{
    public $score;

    public function mount($score)
    {
        $this->score = $score;
    }

    public function render()
    {
        return view('livewire.score-item');
    }
}
