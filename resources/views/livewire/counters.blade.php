@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">COUNTERS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Counters</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12 col-xl-4">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">
										Time Counting From 0
									</h3>
								</div>
								<div class="card-body">
									<div class="example bg-primary-transparent border-primary text-primary">
										<div class="d-block d-sm-flex">
											<span class="tx-30 pe-5"><i class="bi bi-alarm"></i></span>
											<div class="">
												<span id="timer-countup" class="h3"></span>
												<h5 class="mb-0 mt-1">Only 6 min left</h5>
											</div>
											<div class="ms-auto text-md-end text-start">
												<h5 class="mb-1">Max Bid:</h5>
												<span class="h3 mb-0">$1000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- COL-END -->
						<div class="col-md-12 col-xl-4">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">
										Time Counting From 60 to 20
									</h3>
								</div>
								<div class="card-body">
									<div class="example bg-secondary-transparent border-secondary text-secondary">
										<div class="d-block d-sm-flex">
											<span class="tx-30 pe-5"><i class="bi bi-alarm"></i></span>
											<div class="">
												<span id="timer-countinbetween" class="h3"></span>
												<h5 class="mb-0 mt-1">Only 6 min left</h5>
											</div>
											<span class="h1 ms-auto mb-0">$1000</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- COL-END -->
						<div class="col-md-12 col-xl-4">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">
										Time minutes counter
									</h3>
								</div>
								<div class="card-body">
									<div class="example bg-warning-transparent border-warning text-warning">
										<div class="d-block d-sm-flex">
											<span class="tx-30 pe-5"><i class="bi bi-alarm"></i></span>
											<div class="">
												<span id="timer-countercallback" class="h3"></span>
												<h5 class="mb-0 mt-1">Only 6 min left</h5>
											</div>
											<span class="h1 text-center ms-auto mb-0">$1000</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- COL-END -->
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">
										Time Counting days Limit
									</h3>
								</div>
								<div class="card-body mx-auto">
									<div class="example bg-info text-white border border-info pb-4 px-5">
										<span class="badge bg-danger fs-14 me-2">Hurry Up!</span>
										<span>Only we have two days</span>
										<div>
											<span class="text-white tx-30 pe-5"><i class="bi bi-calendar-day"></i></span>
											<span id="timer-outputpattern" class="h3"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row-end-->

					<!-- row -->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-xl-4">
							<div class="card custom-card">
								<div class="card-body text-center card-img-top-1">
									<div>
										<h6 class="card-title">Time Counting From 0</h6>
									</div>
									<img src="{{asset('assets/img/media/illustrate.png')}}" alt="counter-image" class="wd-300 ht-300 ">
									<div class="pb-0 mt-4  bg-primary text-white p-3 br-5">
										<span id="timer-countup1" class="tx-26 mb-0"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-xl-4">
							<div class="card custom-card">
								<div class="card-body text-center card-img-top-1">
									<div>
										<h6 class="card-title">Time Counting From 60 to 20</h6>
									</div>
									<img src="{{asset('assets/img/media/illustrate1.png')}}" alt="counter-image" class="wd-300 ht-300 ">
									<div class="mt-4 bg-warning text-white p-3 br-5">
										<span id="timer-countinbetween1" class="tx-26 mb-0"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-xl-4">
							<div class="card custom-card">
								<div class="card-body text-center card-img-top-1 ">
									<div>
										<h6 class="card-title">Time 1 minute counter</h6>
									</div>
									<img src="{{asset('assets/img/media/illustrate2.png')}}" alt="counter-image" class="wd-300 ht-300 ">
									<div class="mt-4 bg-secondary text-white p-3 br-5">
										<span id="timer-countercallback1" class="tx-26 mb-0"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')

		<!--Internal Counters -->
		<script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>
		<script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>

		<!--Internal Time Counter -->
		<script src="{{asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
		<script src="{{asset('assets/plugins/counters/counter.js')}}"></script>

    @endsection
