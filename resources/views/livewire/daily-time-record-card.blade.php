<div class="card">
    <div class="card-header text-center text-black">
        <i class="fas fa-clock text-danger"></i>
        <span class="fw-bold"><span class="text-danger">LIVE </span> Daily Time Record</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-borderless border-0">
                <thead>
                    <tr>
                        <th>Employee</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($timeRecords as $record)
                        <tr>
                            <td>{{ $record['name'] }}</td>
                            <td>{{ $record['timeIn'] }}</td>
                            <td>{{ $record['timeOut'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-end mt-3">
            <a href="#"
                class="border-end-0 border-start-0 border-top-0   border-bottom-4 bg-transparent text-info border-info fw-bold">
                <u>
                    View Full Details</U>
            </a>
        </div>
    </div>
</div>
