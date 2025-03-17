<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;

class Login extends Component
{
    public $users, $email, $password, $name;

    public function render()
    {
        return view('livewire.login');
    }
}
