<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AttendanceSummaryCard extends Component
{
    public $attendanceData = [
        'present' => 48,
        'absent' => 8,
        'on_leave' => 6,
        'sick_leave' => 3
    ];

    public function getTotalAttribute()
    {
        return array_sum($this->attendanceData);
    }

    public function render()
    {
        return view('livewire.attendance-summary-card');
    }
}