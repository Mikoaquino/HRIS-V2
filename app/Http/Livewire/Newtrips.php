<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Newtrips extends Component
{
    public function render()
    {
        return view('livewire.newtrips');
    }

    public function saveTrip()
    {
        $this->emit(event: 'saveTrip');
        $this->emit(event: 'saveOrder');

        $this->dispatchBrowserEvent('notif');
    }
}
