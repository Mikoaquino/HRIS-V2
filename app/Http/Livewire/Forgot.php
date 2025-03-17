<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Forgot extends Component
{
    public function render()
    {
        return view('livewire.forgot')
        ->layout('layouts.custom-app');
    }
}
