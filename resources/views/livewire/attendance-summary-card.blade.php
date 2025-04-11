<div class="card border-0 shadow-sm">
    <div class="card-body">
        <h5 class="text-center mb-3">Today's Attendance Summary</h5>

        <div class="progress" style="height: 6px;">
            <div class="progress-bar bg-success mx-1" role="progressbar"
                style="width: {{ number_format((48 / 65) * 100, 2) }}%"
                aria-valuenow="{{ number_format((48 / 65) * 100, 2) }}" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-warning mx-1" role="progressbar"
                style="width: {{ number_format((6 / 65) * 100, 2) }}%"
                aria-valuenow="{{ number_format((6 / 65) * 100, 2) }}" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-info mx-1" role="progressbar"
                style="width: {{ number_format((8 / 65) * 100, 2) }}%"
                aria-valuenow="{{ number_format((8 / 65) * 100, 2) }}" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-danger mx-1" role="progressbar"
                style="width: {{ number_format((3 / 65) * 100, 2) }}%"
                aria-valuenow="{{ number_format((3 / 65) * 100, 2) }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="d-flex justify-content-between mt-2">
            <div class="text-center">
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <span class="rounded-circle bg-success mr-2"
                        style="width: 10px; height: 10px; display: inline-block;"></span>
                    <small class="text-muted">Absent</small>
                </div>
                <span class="font-weight-bold">8</span>
            </div>
            <div class="text-center">
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <span class="rounded-circle bg-warning mr-2"
                        style="width: 10px; height: 10px; display: inline-block;"></span>
                    <small class="text-muted">Present</small>
                </div>
                <span class="font-weight-bold">48</span>
            </div>
            <div class="text-center">
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <span class="rounded-circle bg-info mr-2"
                        style="width: 10px; height: 10px; display: inline-block;"></span>
                    <small class="text-muted">On leave</small>
                </div>
                <span class="font-weight-bold">6</span>
            </div>
            <div class="text-center">
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <span class="rounded-circle bg-danger mr-2"
                        style="width: 10px; height: 10px; display: inline-block;"></span>
                    <small class="text-muted">Sick Leave</small>
                </div>
                <span class="font-weight-bold">3</span>
            </div>
        </div>
    </div>
</div>
