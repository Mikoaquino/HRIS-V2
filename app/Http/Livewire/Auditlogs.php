<?php

namespace App\Http\Livewire;

use App\Models\Audit;
use Livewire\Component;
use Livewire\WithPagination;

class Auditlogs extends Component
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
        $audit = Audit::orderBy('created_at', 'desc')->paginate(10);
        if (strlen($this->search) > 2) {
            $audit = Audit::where('user', 'like', "%{$this->search}%")->orderBy('created_at', 'desc')->paginate(10);
        }

        return view('livewire.auditlogs', ['audit' => $audit]);
    }
}
