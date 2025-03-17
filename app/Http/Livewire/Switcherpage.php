<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Switcherpage extends Component
{
    public function render()
    {
        return view('livewire.switcherpage')
        ->layout('layouts.switcher');
    }
}
