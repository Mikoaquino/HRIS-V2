<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmployeeStatisticsCard extends Component
{
    public $totalEmployment = 0;
    public $newHires = 0;
    public $departures = 0;
    public $onProbation = 0;

    public function mount()
    {
        // You can replace these with actual database queries
        $this->totalEmployment = 128;
        $this->newHires = 6;
        $this->departures = 2;
        $this->onProbation = 4;
    }

    public function render()
    {
        return view('livewire.employee-statistics-card');
    }
}