
@extends('layouts.app')

@section('styles')



@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">CHARTJS CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chartjs charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Line Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartLine1"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Area Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartArea1"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Stacked Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartStacked1"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Stacked Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartStacked2"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-12">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-sm-12 col-md-6 col-xl-4">
											<div class="main-content-label tx-12 mg-b-15">
												Solid Color
											</div>
											<div class="ht-200 ht-lg-250">
												<canvas id="chartBar1"></canvas>
											</div>
										</div><!-- col-6 -->
										<div class="col-sm-12 col-md-6 col-xl-4 mg-t-20 mg-md-t-0">
											<div class="main-content-label tx-12 mg-b-15">
												With Transparency
											</div>
											<div class="ht-200 ht-lg-250">
												<canvas id="chartBar2"></canvas>
											</div>
										</div><!-- col-6 -->
										<div class="col-sm-12 col-md-6 col-xl-4 mg-t-20 mg-xl-t-0">
											<div class="main-content-label tx-12 mg-b-15">
												Using Gradient Color
											</div>
											<div class="ht-200 ht-lg-250">
												<canvas id="chartBar3"></canvas>
											</div>
										</div><!-- col-6 -->
									</div>
								</div><!-- col-12 -->
							</div><!-- col-12 -->
						</div><!-- col-12 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Horizontal Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartBar4"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Horizontal Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartBar5"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card mg-b-md-20 overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Pie Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartPie"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Donut Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Nowa template.</p>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartDonut"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!--Internal  Chart.bundle js -->
		<script src="{{asset('assets/plugins/chartjs/Chart.bundle.min.js')}}"></script>

		<!--Internal Chartjs js -->
		<script src="{{asset('assets/js/chart.chartjs.js')}}"></script>

@endsection
