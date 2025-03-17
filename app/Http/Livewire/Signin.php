<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Audit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Signin extends Component
{
    public $email, $password;
    public $day, $time, $admin;

    public function render()
    {
        return view('livewire.signin')
            ->layout('layouts.custom-app');
    }

    public function submit()
    {
        $validateData = $this->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        if (Auth::attempt(array('email' => $this->email, 'password' => $this->password))) {

            $today = Carbon::now();
            $this->day = $today->format('l');
            $this->time = $today->format('h:i A');

            $this->admin = Auth::user()->name;

            Audit::create([
                'user' => $this->admin,
                'logs' => 'Logged in to the system: ' . $this->admin,
                'day' => $this->day,
                'time' => $this->time,
            ]);

            return redirect(route('home'));
        } else {
            session()->flash('fail', 'Incorrect login credentials');
        }
    }
}