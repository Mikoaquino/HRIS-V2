@extends('layouts.app')

    @section('styles')

		<!---Internal  Owl Carousel css-->
		<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!--- Internal Sweet-Alert css-->
		<link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SWEET ALERTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sweet alert</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row opened -->
					<div class="row row-deck">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Basic Sweet-alert</h3>
								</div>
								<div class="card-body pt-0">
									<table class="table card-table border">
										<tr>
											<td><label>Title</label><input type='text' class="form-control" placeholder='Title text' id='title'></td>
										</tr>
										<tr>
											<td class="bd-t-0"><label>Message</label><input type='text' class="form-control" placeholder='Your message' id='message'></td>
										</tr>
										<tr>
											<td  class="mt-5  bd-t-0">
												<input type='button' class="btn btn-primary mt-2" value='Simple alert' id='but1'>&nbsp;
												<input type='button' class="btn btn-danger mt-2" value='Alert with title' id='but2'>&nbsp;
												<input type='button' class="btn btn-info mt-2" value='Alert with image' id='but3'>&nbsp;
												<input type='button' class="btn btn-warning mt-2" value='With timer' id='but4'>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div><!-- col end -->
					</div><!-- col end -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Alert</h6>
										<p class="text-muted card-sub-title">A Basic Message</p>
									</div>
									<div class="btn ripple btn-primary" id='swal-basic'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Title alert</h6>
										<p class="text-muted card-sub-title">A title with a text under</p>
									</div>
									<div class="btn ripple btn-danger" id='swal-title'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Success alert</h6>
										<p class="text-muted card-sub-title">A Success Message</p>
									</div>
									<div class="btn ripple btn-success" id='swal-success'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Warning alert</h6>
										<p class="text-muted card-sub-title">A warning message</p>
									</div>
									<div class="btn ripple btn-warning" id='swal-warning'>
										Click me !
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Passing a parameter alert</h6>
										<p class="text-muted card-sub-title">By passing a parameter</p>
									</div>
									<div class="btn ripple btn-secondary" id='swal-parameter'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Image alert</h6>
										<p class="text-muted card-sub-title">A message with custom Image</p>
									</div>
									<div class="btn ripple btn-info" id='swal-image'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Timer alert</h6>
										<p class="text-muted card-sub-title">A message with auto close timer</p>
									</div>
									<div class="btn ripple btn-dark" id='swal-timer'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Ajax Alert</h6>
										<p class="text-muted card-sub-title">With a loader (for a AJAX requests)</p>
									</div>
									<div class="btn ripple btn-pink" id='swal-ajax'>
										Click me !
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal  Sweet-Alert js-->
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>

		<!-- Sweet-alert js  -->
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/js/sweet-alert.js')}}"></script>

    @endsection
