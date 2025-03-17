@extends('layouts.app')

@section('styles')

<!-- INTERNAL Select2 css -->
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />

<!-- INTERNAL Data table css -->
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

<!--Internal  Datetimepicker-slider css -->
<link href="{{asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">

<!-- Internal Spectrum-colorpicker css -->
<link href="{{asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">

<!--Bootstrap-datepicker css-->
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css')}}">

<!--  colorpicker css -->
<link href="{{asset('assets/plugins/colorpicker/themes/nano.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/colorpicker/themes/monolith.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/colorpicker/themes/classic.min.css')}}" rel="stylesheet">


@endsection

@section('class')

@endsection

@section('content')

<livewire:trips />


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

<!--Internal  Datepicker js -->
<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

<!--Internal  jquery.maskedinput js -->
<script src="{{asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

<!--Internal  spectrum-colorpicker js -->
<script src="{{asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>

<!--Internal Ion.rangeSlider.min js -->
<script src="{{asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>

<!-- Ionicons js -->
<script src="{{asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>

<!--Internal  pickerjs js -->
<script src="{{asset('assets/plugins/pickerjs/picker.min.js')}}"></script>

<!--internal color picker js-->
<script src="{{asset('assets/plugins/colorpicker/pickr.es5.min.js')}}"></script>
<script src="{{asset('assets/js/colorpicker.js')}}"></script>

<!--Bootstrap-datepicker js-->
<script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>

<!-- Internal Select2.min js -->
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

<!-- Internal form-elements js -->
<script src="{{asset('assets/js/form-elements.js')}}"></script>

@endsection