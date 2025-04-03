<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DailyTimeRecordCard extends Component

    {
        public $timeRecords = [
            [
                'name' => 'Criscela Mae R.',
                'timeIn' => '9:01 AM',
                'timeOut' => '----'
            ],
            [
                'name' => 'Princess Eliyah',
                'timeIn' => '8:54 AM',
                'timeOut' => '3:30 PM'
            ],
            [
                'name' => 'Peter Jeremiah L.',
                'timeIn' => '7:31 AM',
                'timeOut' => '----'
            ],
            [
                'name' => 'Estoconing J. Pil.',
                'timeIn' => '7:43 AM',
                'timeOut' => '5:30 PM'
            ]
        ];
    
        public function render()
        {
            return view('livewire.daily-time-record-card');
        }
    }

