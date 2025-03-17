@extends('layouts.app')

@section('styles')

<!-- Data table css -->
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

<!-- INTERNAL Select2 css -->
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />

@endsection

@section('content')

<livewire:mrsdashboard />


@livewireScripts


@endsection

@section('scripts')

<!-- Internal Data tables -->
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/js/table-data.js')}}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- INTERNAL Apexchart js -->
<script src="{{asset('assets/js/apexcharts.js')}}"></script>

@endsection