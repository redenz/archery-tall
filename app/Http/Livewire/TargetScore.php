<?php

namespace App\Http\Livewire;

use App\Score;
use Livewire\Component;

class TargetScore extends Component
{
    public $target;
    public $score;

    public function create()
    {
        dd('Stuff', [$this->target, $this->score]);
        Score::create($this->validate(['score' => 'required']));
    }

    public function render()
    {
        return view('livewire.target-score');
    }
}
