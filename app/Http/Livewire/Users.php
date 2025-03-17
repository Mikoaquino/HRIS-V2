<?php

namespace App\Http\Livewire;

use App\Models\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    public $search = '';

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = Auth::paginate(2);
        if (strlen($this->search) > 2) {
            $users = Auth::where('name', 'like', "%{$this->search}%")->paginate(2);
        }
        return view('livewire.users', ['users' => $users]);
    }
}
