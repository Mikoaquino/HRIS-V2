<?php

namespace App\Http\Livewire;

use App\Models\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Signup extends Component
{
    public $email, $password, $name;

    public function resetRegValues()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function submit()
    {
        $validateData = $this->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
        ]);
        $this->password = Hash::make($this->password);

        Auth::create(['name' => $this->name, 'email' => $this->email, 'password' => $this->password]);

        session()->flash('success', 'Registered successfully');

        $this->resetRegValues();
    }

    public function render()
    {
        return view('livewire.signup')
            ->layout('layouts.custom-app');
    }
}
