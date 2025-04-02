<style>
    .calendar-container {
        width: 100%;
        max-width: 100%;
        overflow-x: auto; 
        padding: 10px;
    }

    .calendar-header h4 {
        color: #0acf83;
        font-weight: 500;
    }

    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, minmax(0, 1fr));
        gap: 5px; 
    }

    .day-name {
        color: #666;
        font-size: 0.9rem;
        text-align: center;
        padding: 8px 0;
        margin-bottom: 8px;
    }

    .day-container {
        position: relative;
        padding-top: 100%; /* Creates a square aspect ratio */
    }

    .day-circle {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 0.9rem;
        transition: all 0.2s;
        cursor: pointer;
    }

    .day-circle:hover {
        background-color: #f0f0f0;
    }

    .text-muted {
        color: #aaa;
    }

    .bg-danger {
        background-color: #ff5252 !important;
    }

    .bg-warning {
        background-color: #ffad0d !important;
    }

    .bg-success {
        background-color: #0acf83 !important;
    }

    .bg-primary {
        background-color: #18a0fb !important;
    }

    .calendar-legend {
        padding-top: 15px;
        border-top: 1px solid #eee;
    }

    .legend-title {
        font-size: 0.8rem;
        color: #888;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    .legend-item {
        font-size: 0.85rem;
        color: #444;
    }

    .legend-marker {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .legend-text {
        font-size: 0.9rem;
    }
</style>

<div>
    <div class="calendar-container">
        <div class="calendar-header d-flex justify-content-between align-items-center flex-wrap mb-3">
            <h4 class="text-primary m-0">{{ $monthName }}</h4>
            <div>
                <button wire:click="previousMonth" class="btn btn-sm btn-outline-secondary">
                    <span>&lt;</span>
                </button>
                <button wire:click="nextMonth" class="btn btn-sm btn-outline-secondary">
                    <span>&gt;</span>
                </button>
            </div>
        </div>

        <div class="calendar">
            <div class="calendar-grid">
                <div class="day-name">Mo</div>
                <div class="day-name">Tu</div>
                <div class="day-name">We</div>
                <div class="day-name">Th</div>
                <div class="day-name">Fr</div>
                <div class="day-name">Sa</div>
                <div class="day-name">Su</div>
                
                <!-- Calendar dates -->
                @foreach($daysInMonth as $day)
                    <div class="day-container">
                        <div 
                            class="day-circle {{ !$day['isCurrentMonth'] ? 'text-muted' : '' }} 
                                {{ $day['isToday'] ? 'bg-danger text-white' : '' }}
                                {{ $day['isPublicHoliday'] && !$day['isToday'] ? 'bg-danger text-white' : '' }}
                                {{ $day['isCompanyEvent'] && !$day['isToday'] && !$day['isPublicHoliday'] ? 'bg-warning' : '' }}
                                {{ $day['isSpecialNonWorkingDay'] && !$day['isToday'] && !$day['isPublicHoliday'] && !$day['isCompanyEvent'] ? 'bg-success text-white' : '' }}
                                {{ $day['isObservance'] && !$day['isToday'] && !$day['isPublicHoliday'] && !$day['isCompanyEvent'] && !$day['isSpecialNonWorkingDay'] ? 'bg-primary text-white' : '' }}"
                        >
                            {{ $day['day'] }}
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="calendar-legend mt-4">
                <div class="legend-title mb-2">FOR THIS MONTH</div>
                <div class="legend-item d-flex align-items-center mb-2">
                    <div class="legend-marker bg-danger"></div>
                    <div class="legend-text">{{ count($publicHolidays) }} Public holidays</div>
                </div>
                <div class="legend-item d-flex align-items-center mb-2">
                    <div class="legend-marker bg-warning"></div>
                    <div class="legend-text">{{ count($companyEvents) }} Company events</div>
                </div>
                <div class="legend-item d-flex align-items-center mb-2">
                    <div class="legend-marker bg-success"></div>
                    <div class="legend-text">{{ count($specialNonWorkingDays) }} Special non-working days</div>
                </div>
                <div class="legend-item d-flex align-items-center">
                    <div class="legend-marker bg-primary"></div>
                    <div class="legend-text">{{ count($observances) }} Observances</div>
                </div>
            </div>
        </div>
    </div>
</div>