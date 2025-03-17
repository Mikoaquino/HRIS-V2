<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Register extends Component
{
    public $users, $email, $password, $name;

    public function render()
    {
        return view('livewire.register')
            ->layout('layouts.custom-app');
    }

    public function registerAccount()
    {
        // $validateData = $this->validate([
        //     'name' => 'required',
        //     'email' => 'required | email',
        //     'password' => 'required',
        // ]);
        // $this->password = Hash::make($this->password);

        // User::create(['name' => $this->name, 'email' => $this->email, 'password' => $this->password]);
        return view('livewire.signup');
    }
}
