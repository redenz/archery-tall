<?php

namespace App\Http\Livewire;

use App\ArcherySession;
use Livewire\Component;

class CreateTargetScore extends Component
{
    public $distance;
    public $score;
    public $session;

    protected $listeners = ['scoreAdded' => '$refresh'];

    public function mount(ArcherySession $session)
    {
        $this->session = $session;
    }

    public function create()
    {
        $this->validate(
            ['distance' => 'required|integer']);

        $this->session->scores()->create([
                'distance'=> $this->distance,
                'score' => $this->score,
                'target' => $this->session->scores->count() + 1,
                'user_id' => auth()->user()->id,
                ]);

        $this->clearForm();

        $this->emit('scoreAdded');
    }

    public function clearForm()
    {
        $this->distance = null;
        $this->score = null;
    }

    public function render()
    {
        $target = $this->session->scores->count() + 1;

        return view('livewire.create-target-score', ['target' => $target]);
    }
}
