<?php

namespace App\Http\Livewire;

use App\ArcherySession as SessionModel;
use Livewire\Component;

class Session extends Component
{
    public $archerySession;

    public function mount($id)
    {
        $this->archerySession = SessionModel::with('scores')->find($id);
    }

    public function render()
    {
        return view('livewire.session');
    }
}
