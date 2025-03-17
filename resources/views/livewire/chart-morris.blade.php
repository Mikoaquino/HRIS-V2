@extends('layouts.app')

    @section('styles')

		<!-- Internal Morris Css-->
		<link href="{{asset('assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">MORRIS CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Morris charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Line Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="morris-wrapper-demo" id="morrisLine1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Line Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="morris-wrapper-demo" id="morrisLine2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Area Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="morris-wrapper-demo" id="morrisArea1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Area Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="morris-wrapper-demo" id="morrisArea2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Stacked Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="morris-wrapper-demo" id="morrisBar3"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Stacked Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="morris-wrapper-demo" id="morrisBar4"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->


					<!-- /row -->

						<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="morris-wrapper-demo" id="morrisBar1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="morris-wrapper-demo" id="morrisBar2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-md-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Donut Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Donut Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="morris-donut-wrapper-demo" id="morrisDonut2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

		<!--Internal  Morris js -->
		<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{asset('assets/plugins/morrisjs/morris.min.js')}}"></script>

		<!--Internal Chart Morris js -->
		<script src="{{asset('assets/js/chart.morris.js')}}"></script>

    @endsection
