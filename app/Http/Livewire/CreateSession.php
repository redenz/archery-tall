<?php

namespace App\Http\Livewire;

use App\ArcherySession;
use Livewire\Component;

class CreateSession extends Component
{
    public $mode;
    public $sessionName;

    public function save()
    {
        $data = $this->validate([
            'sessionName' => 'required|string',
        ]);

        ArcherySession::create([
            'name' => $data['sessionName'],
            'user_id' => auth()->user()->id,
        ]);

        $this->mode = null;
        $this->emit('sessionAdded');
    }

    public function render()
    {
        return view('livewire.create-session');
    }
}
