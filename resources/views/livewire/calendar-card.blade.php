<div class="card border-0 shadow-sm">
    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center p-3">
        <button wire:click="getPreviousMonth" class="btn btn-link text-muted p-0">
            <i class="fas fa-chevron-left"></i>
        </button>
        <h5 class="mb-0">{{ $currentMonth }} {{ $currentYear }}</h5>
        <button wire:click="getNextMonth" class="btn btn-link text-muted p-0">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    <div class="card-body p-3">
        <table class="table table-borderless mb-0">
            <thead>
                <tr>
                    @php
                        $weekdays = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];
                    @endphp
                    @foreach ($weekdays as $day)
                        <th class="text-center text-muted fw-normal p-1">{{ $day }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @php
                    $day = 1;
                    $startDay = $firstDayOfMonth > 0 ? $firstDayOfMonth - 1 : 6;
                @endphp
                @for ($i = 0; $i < 6; $i++)
                    <tr>
                        @for ($j = 0; $j < 7; $j++)
                            @if ($i === 0 && $j < $startDay)
                                <td class="text-center text-muted p-1"></td>
                            @elseif ($day > $daysInMonth)
                                <td class="text-center text-muted p-1"></td>
                            @else
                                <td class="text-center p-1">
                                    <button wire:click="selectDate({{ $day }})"
                                        class="btn p-1 {{ $day === $selectedDate ? 'bg-primary text-white rounded-circle' : 'text-dark' }}"
                                        style="width: 32px; height: 32px;">
                                        {{ $day }}
                                    </button>
                                </td>
                                @php $day++; @endphp
                            @endif
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
