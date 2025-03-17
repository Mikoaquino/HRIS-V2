<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Audit;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $day, $time, $date, $admin;

    public function render()
    {
        return view('livewire.navbar');
    }

    public function mount()
    {
        $this->admin = Auth::user()->name;

        $today = Carbon::now();
        $this->day = $today->format('l');
        $this->date = $today->format('F d, Y');
        $this->time = $today->format('h:i A');
    }

    public function logoutAccount()
    {
        Auth::logout();

        $today = Carbon::now();
        $this->day = $today->format('l');
        $this->time = $today->format('h:i A');

        Audit::create([
            'user' => $this->admin,
            'logs' => 'Logged out to the system: ' . $this->admin,
            'day' => $this->day,
            'time' => $this->time,
        ]);

        return redirect(route('login'));
    }
}
