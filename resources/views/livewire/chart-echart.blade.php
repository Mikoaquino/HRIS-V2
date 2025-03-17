@extends('layouts.app')

    @section('styles')

		<!-- Internal Morris Css-->
		<link href="{{asset('assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">ECHART CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Echart Charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Data Attributes
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div id="echart5"  class="ht-300"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Data Attributes
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div id="echart6"  class="ht-300"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Bar Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div id="echart1" class="ht-300"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vertical Bar Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div id="echart3"  class="ht-300"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Line Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div id="echart2"  class="ht-300"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vertical Line Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div id="echart4"  class="ht-300"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Data Attributes
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div id="echart7"  class="ht-300"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Data Attributes
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div id="echart8"  class="ht-300"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Data Attributes
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div id="index"  class="ht-300"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

		<!--Internal Echart Plugin -->
		<script src="{{asset('assets/plugins/echart/echart.js')}}"></script>
		<script src="{{asset('assets/js/echarts.js')}}"></script>

    @endsection
