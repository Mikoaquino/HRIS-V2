<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reset extends Component
{
    public function render()
    {
        return view('livewire.reset')
        ->layout('layouts.custom-app');
    }
}
