<?php

namespace App\Http\Livewire;

use App\ArcherySession as SessionModel;
use Livewire\Component;

class ArcherySession extends Component
{
    public $archerySession;

    protected $listeners = ['scoreAdded' => '$refresh'];

    public function mount($id)
    {
        $this->archerySession = SessionModel::with('scores')->find($id);
    }

    public function render()
    {
        return view('livewire.archery-session');
    }
}
