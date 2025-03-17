@extends('layouts.app')

    @section('styles')

		<!-- Dashboard-1 css -->
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/style-dark.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/style-transparent.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/style-dark.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/style-transparent.css')}}" rel="stylesheet">

		<!-- Internal Ion.rangeSlider css -->
		<link href="{{asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet">
		<link href="{{asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">RANGE SLIDER</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Range slider</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">

							<!--div-->
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Range Slider (Modern Skin)
									</div>
									<p class="mg-b-20">It is the modern skin range slider of Redash.</p>
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider2" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider3" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider4" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Range Slider (Outline Skin)
									</div>
									<p class="mg-b-20">It is the outline skin range slider of Redash.</p>
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider2" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider4" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Range Slider
									</div>
									<p class="mg-b-20">Default range slider Of Nowa.</p>
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" name="example_name" type="text" value="">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider2" name="example_name" type="text" value="">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider3" name="example_name" type="text" value="">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider4" name="example_name" type="text" value="">
										</div>
									</div>
								</div>
							</div>
							<!--/div-->
						</div>
					</div>

    @endsection

    @section('scripts')

        <!--Internal Sparkline js -->
        <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Internal Piety js -->
        <script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

        <!--Internal Ion.rangeSlider.min js -->
        <script src="{{asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

        <!-- Internal  rangeslider js -->
        <script src="{{asset('assets/js/rangeslider.js')}}"></script>

    @endsection
