<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class CalendarCard extends Component
{
    public $currentDate;
    public $currentMonth;
    public $currentYear;
    public $daysInMonth;
    public $firstDayOfMonth;
    public $selectedDate;

    public function mount()
    {
        $now = Carbon::now();
        $this->currentDate = $now;
        $this->currentMonth = $now->format('F');
        $this->currentYear = $now->year;
        $this->selectedDate = $now->day;
        
        // Get calendar data
        $this->daysInMonth = $now->daysInMonth;
        $this->firstDayOfMonth = $now->copy()->firstOfMonth()->dayOfWeek;
    }

    public function selectDate($day)
    {
        $this->selectedDate = $day;
    }

    public function getPreviousMonth()
    {
        $this->currentDate = $this->currentDate->subMonth();
        $this->updateCalendarData();
    }

    public function getNextMonth()
    {
        $this->currentDate = $this->currentDate->addMonth();
        $this->updateCalendarData();
    }

    private function updateCalendarData()
    {
        $this->currentMonth = $this->currentDate->format('F');
        $this->currentYear = $this->currentDate->year;
        $this->daysInMonth = $this->currentDate->daysInMonth;
        $this->firstDayOfMonth = $this->currentDate->copy()->firstOfMonth()->dayOfWeek;
    }

    public function render()
    {
        return view('livewire.calendar-card');
    }
}