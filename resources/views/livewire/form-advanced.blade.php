@extends('layouts.app')

    @section('styles')

		<!--- Internal Select2 css-->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

		<!---Internal Fileupload css-->
		<link href="{{asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

		<!---Internal Fancy uploader css-->
		<link href="{{asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

		<!--Internal Sumoselect css-->
		<link rel="stylesheet" href="{{asset('assets/plugins/sumoselect/sumoselect.css')}}">

		<!--Internal  TelephoneInput css-->
		<link rel="stylesheet" href="{{asset('assets/plugins/telephoneinput/telephoneinput.css')}}">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">ADVANCED FORMS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Advanced Forms</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Single Select Style</h6>
										<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Single Select</p>
										<select name="somename" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
											<!--placeholder-->
											<option title="eg1 is a car"  value="eg1">eg1</option>
											<option value="saab">Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
										</select>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Disabled Select</p>
										<select class="SlectBox form-control" disabled>
											<option value="eg1">eg1</option>
											<option selected value="saab">Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
											<option disabled value="opt1">option1</option>
											<option value="opt2">option2</option>
											<option value="opt3">option3</option>
										</select>
									</div>
									<div>
										<p class="mg-b-10">Inline Select</p>
										<select class="SlectBox form-control">
											<option>selected</option>
											<option>eg1</option>
											<option>Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
											<option>eg1</option>
											<option>Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
											<option>eg1</option>
											<option>Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
											<option>eg1</option>
											<option>Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Multiple Select Styles</h6>
										<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Multiple Select</p>
										<select multiple="multiple" class="testselect2">
											<option selected value="eg1">eg1</option>
											<option value="saab">Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
										</select>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Disabled Select</p>
										<select multiple="multiple" class="testselect2" disabled >
										   <option selected value="eg1">eg1</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="eg2">eg2</option>
										   <option value="eg3">eg3</option>
										   <option value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option class="someclass" value="eg3">eg3</option>
										   <option class="someclass" value="eg4">eg4</option>
										   <option class="someclass" value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="eg3">eg3</option>
										   <option value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="hyundai">Hyundai</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
									<div>
										<p class="mg-b-10">Optgroup Support</p>
										<select   multiple="multiple" class="testselect2">
										   <option selected value="eg1">eg1</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="eg2">eg2</option>
										   <option value="eg3">eg3</option>
										   <option value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option class="someclass" value="eg3">eg3</option>
										   <option class="someclass" value="eg4">eg4</option>
										   <option class="someclass" value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="eg3">eg3</option>
										   <option value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="hyundai">Hyundai</option>
										   <option value="mitsubishi">Mitsubishi</option>
									   </select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Multiple Select Styles</h6>
										<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Multiple Select-1</p>
										<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="selectsum1">
										   <option selected value="eg1">eg1</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="eg2">eg2</option>
										   <option value="eg3">eg3</option>
										   <option selected value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
									<div>
										<p class="mg-b-10">Multiple Select-2</p>
										<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="selectsum2">
										   <option selected value="eg1">eg1</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="eg2">eg2</option>
										   <option value="eg3">eg3</option>
										   <option selected value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Telephone Input</h6>
										<p class="text-muted card-sub-title">A JavaScript plugin for entering and validating international telephone numbers. It adds a flag dropdown to any input, detects the user's country, displays a relevant placeholder and provides formatting/validation methods.</p>
									</div>
									<div class="input-group telephone-input">
										<input type="tel" id="mobile-number" placeholder="e.g. +1 702 123 4567">
										<span class="input-group-btn">
											<button class="btn ripple btn-primary" type="button">Submit</button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">File Upload</h6>
										<p class="text-muted card-sub-title">Dropify is a jQuery plugin to create a beautiful file uploader that converts a standard <code>input type="file"</code> into a nice drag & drop zone with previews and custom styles.</p>
									</div>
									<div class="row mb-4">
										<div class="col-sm-12 col-md-4">
											<input type="file" class="dropify" data-height="200" />
										</div>
										<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
											<input type="file" class="dropify" data-default-file="{{asset('assets/img/photos/1.jpg')}}" data-height="200"  />
										</div>
										<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
											<input type="file" class="dropify" disabled="disabled"/>
										</div>
									</div>
									<div>
										<input id="demo" type="file" name="files" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

        <!--Internal  Datepicker js -->
		<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal Fileuploads js-->
		<script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!--Internal Fancy uploader js-->
		<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!--Internal  Form-elements js-->
		<script src="{{asset('assets/js/advanced-form-elements.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

		<!--Internal Sumoselect js-->
		<script src="{{asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

		<!-- Internal TelephoneInput js-->
		<script src="{{asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
		<script src="{{asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>

    @endsection
