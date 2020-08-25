<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ScoreItem extends Component
{
    public $score;
    public $distance;
    public $mode;

    public function mount($score)
    {
        $this->score = $score;
        $this->distance = $score->distance;
    }

    public function update($score)
    {
        $this->score->score = $score;
        $this->score->distance = $this->distance;
        $this->score->save();

        $this->mode = 'list';
    }

    public function remove()
    {
        $this->score->delete();
        $this->mode = 'list';
        $this->emit('scoreAdded');
    }

    public function render()
    {
        return view('livewire.score-item');
    }
}
