<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Signup extends Component
{
    public function render()
    {
        return view('livewire.signup')
        ->layout('layouts.custom-app');
    }
}
