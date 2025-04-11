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
    <style>
        .notification:before {
            content: "";
            position: absolute;
            top: 0px !important;
            bottom: 5px;
            width: 2px !important;
            background-color: var(--primary02);
            left: 2.5% !important;
            margin-left: -2.5px;
        }

        .notification .notification-icon {
            left: -2.5% !important;
            position: absolute !important;
            width: 10%;
            text-align: center;
            top: auto !important;
        }

        .notification .notification-icon a {
            text-decoration: none;
            width: 15px !important;
            height: 15px !important;
            display: inline-block;
            border-radius: 50%;
            background: #fff;
            line-height: 10px;
            color: #fff;
            font-size: 14px;
            border: 3px solid var(--primary-bg-color);
            transition: border-color 0.2s linear;
        }

        .image-audit {
            border-radius: 50%;
        }
    </style>
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
                    'log_number' => 'LOG#0010',
                    'name' => 'John Doe',
                    'email' => 'johndoe@example.com',
                    'role' => 'Admin',
                    'status' => 'OK',
                    'action' => 'Add Account',
                    'description' => 'Admin added the account ACC-0001',
                    'timestamp' => '01-13-2025 08:15:30',
                ],
                [
                    'log_number' => 'LOG#0009',
                    'name' => 'John Doe',
                    'email' => 'johndoe@example.com',
                    'role' => 'Admin',
                    'status' => 'OK',
                    'action' => 'Delete Account',
                    'description' => 'User deleted the account ACC-0010',
                    'timestamp' => '01-13-2025 08:15:30',
                ],
                [
                    'log_number' => 'LOG#0008',
                    'name' => 'John Doe',
                    'email' => 'johndoe@example.com',
                    'role' => 'User',
                    'status' => 'OK',
                    'action' => 'Log in',
                    'description' => 'User John Doe logged in',
                    'timestamp' => '01-13-2025 08:15:30',
                ],
                [
                    'log_number' => 'LOG#0007',
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
                        <table class="table m-0 border-0 text-nowrap notification" id="basic-datatable">
                            <thead class="d-none border-0">
                                <tr>
                                    <th>Date Done</th>
                                    <th>Log Number</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                    <th>Description</th>

                                    <th>Timestamp</th>

                                </tr>
                            </thead>
                            <tbody class="border-0">
                                @foreach ($logs as $log)
                                    <tr class="border-0">

                                        <td class="date-cell bd-t-0 bd-e">
                                            <div class="notification-icon">
                                                <a href="javascript:void(0);"></a>
                                            </div>
                                            <div class="text-center">

                                                <div class="fw-bold">{{ date('l', strtotime($log->timestamp)) }}</div>
                                                <div>{{ date('H:i', strtotime($log->timestamp)) }}</div>
                                            </div>
                                        </td>
                                        <td class="bd-b">{{ $log->log_number }}</td>
                                        <td class="bd-b ">
                                            <div class="d-flex align-items-center">
                                                <img class="image-audit me-2" src="{!! 'https://placehold.co/40' !!}"
                                                    alt="Placeholder">
                                                <div class="text-center">
                                                    <p class="mb-0 fw-semibold">{{ $log->name }}</p>
                                                    <p class="mb-0 text-muted small">{{ $log->role }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="bd-b">
                                            <div class="badge badge-pill badge-primary px-2 py-2">{{ $log->action }} </div>
                                        </td>
                                        <td class="bd-b">{{ $log->description }}</td>

                                        <td class="bd-b bd-e">{{ date('F d, Y', strtotime($log->timestamp)) }}</td>


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
                lengthMenu: '_MENU_ activity logs'
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
                var actionDropdown = $(`
    <select class="form-select form-select-sm me-2" style="width: 200px;">
        <option value="" disabled selected>Action</option>
        <optgroup label="Authentication">
            <option value="login">Log in</option>
            <option value="logout">Log out</option>
        </optgroup>
        <optgroup label="Account Management">
            <option value="add_account">Add Account</option>
            <option value="delete_account">Delete Account</option>
        </optgroup>
        <optgroup label="Audit Trail">
            <option value="view_audit_trail">View Audit Trail</option>
        </optgroup>
        <optgroup label="Dashboard">
            <option value="view_dashboard">View Dashboard</option>
        </optgroup>
    </select>
`);


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
