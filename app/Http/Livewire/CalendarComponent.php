<?php
namespace App\Http\Livewire;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;
use App\Models\Event;

class CalendarComponent extends Component
{
    public $currentMonth;
    public $currentYear;
    public $daysInMonth = [];
    public $publicHolidays = [];
    public $companyEvents = [];
    public $specialNonWorkingDays = [];
    public $observances = [];
    
    public function mount()
    {
        // Default to current month or set specific month
        $this->currentMonth = request()->get('month', now()->month);
        $this->currentYear = request()->get('year', now()->year);
        
        $this->loadEvents();
        $this->generateCalendarDays();
    }
    
    public function loadEvents()
    {
        // In a real app, you would fetch these from database
        // This is just for demonstration based on your February 2022 example
        
        // If the current month is February 2022, use the example data
        if ($this->currentMonth == 2 && $this->currentYear == 2022) {
            // Company events (yellow/orange)
            $this->companyEvents = [
                Carbon::createFromDate($this->currentYear, $this->currentMonth, 5)->format('Y-m-d'),
                Carbon::createFromDate($this->currentYear, $this->currentMonth, 10)->format('Y-m-d'),
                Carbon::createFromDate($this->currentYear, $this->currentMonth, 16)->format('Y-m-d'),
                Carbon::createFromDate($this->currentYear, $this->currentMonth, 21)->format('Y-m-d'),
                Carbon::createFromDate($this->currentYear, $this->currentMonth, 30)->format('Y-m-d')
            ];
            
            // Special non-working days (green)
            $this->specialNonWorkingDays = [
                Carbon::createFromDate($this->currentYear, $this->currentMonth, 18)->format('Y-m-d'),
                Carbon::createFromDate($this->currentYear, $this->currentMonth, 22)->format('Y-m-d'),
                Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->format('Y-m-d')
            ];
            
            // Observances (blue)
            $this->observances = [
                Carbon::createFromDate($this->currentYear, $this->currentMonth, 10)->format('Y-m-d')
            ];
            
            // Public holidays (red)
            $this->publicHolidays = [
                Carbon::createFromDate($this->currentYear, $this->currentMonth, 14)->format('Y-m-d')
            ];
        } else {
            // For other months, you would typically fetch from database
            // Here we'll generate some random events for demonstration
            $this->companyEvents = [];
            $this->specialNonWorkingDays = [];
            $this->observances = [];
            $this->publicHolidays = [];
            
            $daysInMonth = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->daysInMonth;
            
            // Add 3-5 random company events(need function to have manually setting of company's events)
            $companyEventCount = rand(3, 5);
            for ($i = 0; $i < $companyEventCount; $i++) {
                $day = rand(1, $daysInMonth);
                $this->companyEvents[] = Carbon::createFromDate($this->currentYear, $this->currentMonth, $day)->format('Y-m-d');
            }
            
            // Add 1-3 special non-working days
            $specialDaysCount = rand(1, 3);
            for ($i = 0; $i < $specialDaysCount; $i++) {
                $day = rand(1, $daysInMonth);
                $this->specialNonWorkingDays[] = Carbon::createFromDate($this->currentYear, $this->currentMonth, $day)->format('Y-m-d');
            }
            
            // Add 0-2 observances
            $observancesCount = rand(0, 2);
            for ($i = 0; $i < $observancesCount; $i++) {
                $day = rand(1, $daysInMonth);
                $this->observances[] = Carbon::createFromDate($this->currentYear, $this->currentMonth, $day)->format('Y-m-d');
            }
            
            // Add 0-2 public holidays
            $holidaysCount = rand(0, 2);
            for ($i = 0; $i < $holidaysCount; $i++) {
                $day = rand(1, $daysInMonth);
                $this->publicHolidays[] = Carbon::createFromDate($this->currentYear, $this->currentMonth, $day)->format('Y-m-d');
            }
            
            // Remove duplicates
            $this->companyEvents = array_unique($this->companyEvents);
            $this->specialNonWorkingDays = array_unique($this->specialNonWorkingDays);
            $this->observances = array_unique($this->observances);
            $this->publicHolidays = array_unique($this->publicHolidays);
        }
    }
    
    public function generateCalendarDays()
    {
        $this->daysInMonth = [];
        
        $date = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1);
        
        // Get days from previous month to fill first week
        $firstDayOfMonth = $date->copy()->firstOfMonth();
        $daysFromPreviousMonth = $firstDayOfMonth->dayOfWeek == 0 ? 6 : $firstDayOfMonth->dayOfWeek - 1;
        
        $start = $firstDayOfMonth->copy()->subDays($daysFromPreviousMonth);
        
        // Get days from next month to fill last week
        $lastDayOfMonth = $date->copy()->lastOfMonth();
        $daysFromNextMonth = 7 - ($lastDayOfMonth->dayOfWeek == 0 ? 7 : $lastDayOfMonth->dayOfWeek);
        
        $end = $lastDayOfMonth->copy()->addDays($daysFromNextMonth);
        
        // Create period and convert to array
        $period = CarbonPeriod::create($start, $end);
        
        foreach ($period as $day) {
            $formattedDate = $day->format('Y-m-d');
            $isCurrentMonth = $day->month == $this->currentMonth;
            
            $this->daysInMonth[] = [
                'date' => $formattedDate,
                'day' => $day->day,
                'isCurrentMonth' => $isCurrentMonth,
                'isToday' => $day->isToday(),
                'isPublicHoliday' => in_array($formattedDate, $this->publicHolidays),
                'isCompanyEvent' => in_array($formattedDate, $this->companyEvents),
                'isSpecialNonWorkingDay' => in_array($formattedDate, $this->specialNonWorkingDays),
                'isObservance' => in_array($formattedDate, $this->observances)
            ];
        }
    }
    
    public function previousMonth()
    {
        $date = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->subMonth();
        $this->currentMonth = $date->month;
        $this->currentYear = $date->year;
        
        $this->loadEvents();
        $this->generateCalendarDays();
    }
    
    public function nextMonth()
    {
        $date = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->addMonth();
        $this->currentMonth = $date->month;
        $this->currentYear = $date->year;
        
        $this->loadEvents();
        $this->generateCalendarDays();
    }
    
    public function render()
    {
        $monthName = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->format('F Y');
        return view('livewire.calendar-component', [
            'monthName' => $monthName
        ]);
    }
}