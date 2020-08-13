<?php

namespace App\Http\Livewire;

use App\ArcherySession as SessionModel;
use Livewire\Component;

class CreateArcherySession extends Component
{
    public $name;

    public function create()
    {
        auth()->user()->archerySessions()->create($this->validate(['name' => 'required|string']));
    }

    public function render()
    {
        return view('livewire.create-archery-session');
    }
}
