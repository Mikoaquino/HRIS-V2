@extends('layouts.app')

    @section('styles')

		<!-- Internal Morris Css-->
		<link href="{{asset('assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FLOT CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Flot Charts</li>
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
									<div class="ht-200 ht-sm-300" id="flotLine1"></div>
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
									<div class="ht-200 ht-sm-300" id="flotLine2"></div>
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
									<div class="ht-200 ht-sm-300" id="flotArea1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6 ">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Area Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="ht-200 ht-sm-300" id="flotArea2"></div>
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
										Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="ht-200 ht-sm-300" id="flotBar1"></div>
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
									<div class="ht-200 ht-sm-300" id="flotBar2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-20 mg-md-b-0">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Pie Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="ht-200 ht-sm-300" id="flotPie1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Pie Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="ht-200 ht-sm-300" id="flotPie2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

		<!-- Internal Flot js -->
		<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
		<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>

		<!-- Internal Chart flot js -->
		<script src="{{asset('assets/js/chart.flot.js')}}"></script>

    @endsection
