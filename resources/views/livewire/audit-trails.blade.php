@extends('layouts.app')


@section('styles')
    <!-- Data table css -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/responsive.bootstrap5.css') }}" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css">
    <!-- INTERNAL Select2 css -->
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">AUDIT TRAIL </span>
        </div>

    </div>
    @php
        $logs = json_decode(
            json_encode([
                [
                    'log_number' => 'LOG-0010',
                    'name' => 'John Doe',
                    'email' => 'johndoe@example.com',
                    'role' => 'Admin',
                    'status' => 'OK',
                    'action' => 'Add Account',
                    'description' => 'Admin added the account ACC-0001',
                    'timestamp' => '01-13-2025 08:15:30',
                ],
                [
                    'log_number' => 'LOG-0009',
                    'name' => 'John Doe',
                    'email' => 'johndoe@example.com',
                    'role' => 'Admin',
                    'status' => 'OK',
                    'action' => 'Delete Account',
                    'description' => 'User deleted the account ACC-0010',
                    'timestamp' => '01-13-2025 08:15:30',
                ],
                [
                    'log_number' => 'LOG-0008',
                    'name' => 'John Doe',
                    'email' => 'johndoe@example.com',
                    'role' => 'User',
                    'status' => 'OK',
                    'action' => 'Log in',
                    'description' => 'User John Doe logged in',
                    'timestamp' => '01-13-2025 08:15:30',
                ],
                [
                    'log_number' => 'LOG-0007',
                    'name' => 'John Doe',
                    'email' => 'johndoe@example.com',
                    'role' => 'User',
                    'status' => 'FAILED',
                    'action' => 'Log in',
                    'description' => 'User attempted to log in',
                    'timestamp' => '01-13-2025 08:15:30',
                ],
            ]),
        );
    @endphp

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>

                                    <th>Log Number</th>
                                    <th>Action</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Timestamp</th>
                                    <th>Performed By</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logs as $log)
                                    <tr>

                                        <td>{{ $log->log_number }}</td>
                                        <td>{{ $log->action }}</td>
                                        <td>{{ $log->description }}</td>
                                        <td>{{ $log->status }}</td>
                                        <td>{{ $log->timestamp }}</td>
                                        <td>{{ $log->name }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Internal Data tables -->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/table-data.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('#basic-datatable').DataTable({
            dom: '<"row"<"col-md-6"l><"col-md-6 d-flex justify-content-end align-items-center"f>>rt<"row"<"col-md-6"i><"col-md-6"p>>',
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ entries per page'
            },
            initComplete: function() {
                // Find the search container
                var searchContainer = $(this).closest('.dataTables_wrapper').find('.dataTables_filter');

                // Create a custom filter container
                var filterControlsContainer = $(
                '<div class="d-flex align-items-center filter-controls"></div>');

                // Clear Filter Button
                var clearFilterBtn = $('<button class="btn btn-outline-danger btn-sm me-2" id="clearFilters">' +
                    'Clear Filter' +
                    '</button>');

                // Action Dropdown
                var actionDropdown = $(
                    '<select class="form-select form-select-sm me-2" style="width: 120px;">' +
                    '<option>Action</option>' +
                    '<option>Option 1</option>' +
                    '<option>Option 2</option>' +
                    '</select>');

                // Date Picker
                var datePicker = $(
                    '<input type="text" class="form-control form-control-sm me-2" style="width: 150px;" placeholder="MM/dd/yyyy">'
                    );

                // Assemble filter controls
                filterControlsContainer
                    .append(clearFilterBtn)
                    .append(actionDropdown)
                    .append(datePicker);

                // Modify search input container
                searchContainer.addClass('d-flex align-items-center')
                    .prepend(filterControlsContainer);

                // Customize search input
                var searchInput = searchContainer.find('input[type="search"]')
                    .addClass('form-control form-control-sm ms-2')
                    .attr('placeholder', 'Search...')
                    .css('width', '200px');

                // Optional: Add functionality to clear filters
                clearFilterBtn.on('click', function() {
                    // Reset dropdown and date picker
                    actionDropdown.val(actionDropdown.find('option:first').val());
                    datePicker.val('');

                    // Clear DataTable search
                    $('#basic-datatable').DataTable().search('').draw();
                });

                // Optional: Date picker initialization
                datePicker.datepicker({
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true
                });
            }
        });
    </script>

    <!-- INTERNAL Select2 js -->
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
@endsection
