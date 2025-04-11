<!-- File: resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('styles')
    <!-- Internal Data table css -->
    <link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

    <!-- INTERNAL Select2 css -->
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
    
    <!-- Toastr css -->
    <link href="{{asset('assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet" />
    
    <!-- Livewire styles -->
    @livewireStyles
@endsection

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content mt-2">
            <a href="{{ route('users.create') }}" class="btn ripple btn-primary">
                <i class="fe fe-plus me-2"></i>Add New User
            </a>
        </div>
        <div class="justify-content-center mt-2">
            <button type="button" class="btn btn-secondary" id="export-users">
                <i class="fe fe-download me-1"></i> Export User Data
            </button>
        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- Livewire Component -->
    @livewire('userlist')
@endsection

@section('scripts')
    <!-- Internal Select2 js-->
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- Internal Data tables -->
    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    
    <!-- Toastr js -->
    <script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
    
    <!-- Livewire scripts -->
    @livewireScripts
    
    <!-- Push any component-specific scripts -->
    @stack('scripts')
    
    <script>
        // Handle export button click
        document.getElementById('export-users').addEventListener('click', function() {
            Livewire.emit('exportUserData');
        });
        
        // Configure toastr
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: 3000
        };
    </script>
@endsection