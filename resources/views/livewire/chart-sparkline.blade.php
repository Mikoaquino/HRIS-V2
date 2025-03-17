@extends('layouts.app')

    @section('styles')

		<!-- Internal Morris Css-->
		<link href="{{asset('assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SPARKLINE CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sparkline Charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6">
							<div class="card mg-b-20 overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Line Chart
									</div>
									<p class="mg-b-20">Below is the basic line chart example.</p>
									<div class="d-sm-flex">
										<div>
											<span id="sparkline1">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span id="sparkline2">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span id="sparkline11">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-->
						<div class="col-lg-6">
							<div class="card mg-b-20 overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Area Chart
									</div>
									<p class="mg-b-20">Below is the area bar chart example.</p>
									<div class="d-sm-flex">
										<div>
											<span id="sparkline3">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span id="sparkline4">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span id="sparkline14">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6">
							<div class="card mg-b-20 overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Bar Chart
									</div>
									<p class="mg-b-20">Below is the basic bar chart example.</p>
									<div class="d-sm-flex">
										<div>
											<span id="sparkline5">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span id="sparkline6">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span id="sparkline16">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-->

						<div class="col-lg-6">
							<div class="card mg-b-20 overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Stacked Bar Chart
									</div>
									<p class="mg-b-20">Below is the basic stacked bar chart example.</p>
									<div class="d-sm-flex">
										<div>
											<span id="sparkline7">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span id="sparkline8">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span id="sparkline18">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-12">
							<!-- div -->
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Pie Chart
									</div>
									<p class="mg-b-20">An example of a pie chart with four series.</p>
									<div class="d-flex">
										<div>
											<span id="sparkline9">3,4,4</span>
										</div>
										<div class="mg-l-30">
											<span id="sparkline10">3,4,4,7,5,9</span>
										</div>
										<div class="mg-l-30">
											<span id="sparkline01">3,4,4,7,5,9</span>
										</div>
										<div class="mg-l-30  d-none d-md-flex">
											<span id="sparkline02">3,4,4,7,5,9</span>
										</div>
									</div>
								</div>
							</div>
						<!-- /div -->
						</div><!-- col-6 -->
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

		<!-- Internal Jquery-sparkline js -->
		<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
		<script src="{{asset('assets/js/chart.sparkline.js')}}"></script>

    @endsection
