@extends('layouts.app')

    @section('styles')

		<!-- Internal Morris Css-->
		<link href="{{asset('assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">PEITY CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Peity Charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Line Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-sm-flex">
										<div>
											<span class="peity-line" data-peity='{ "fill": false, "stroke": "#6c25be", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span class="peity-line" data-peity='{ "fill": false, "stroke": "#19c0c0", "height": 70, "width": 200 }'>-10,-4,-4,-7,-5,-9,-10,-1,-4,-4,-7,-5,-9,-10</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-->
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Area Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-sm-flex">
										<div>
											<span class="peity-line" data-peity='{ "fill": "rgba(108, 37, 190,.2)", "stroke": "#6c25be", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span class="peity-line" data-peity='{ "fill": "rgba(25, 192, 192,.2)", "stroke": "#19c0c0", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Pie Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-md-flex flex-wrap">
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#3e80eb", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>1/5</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#19c0c0", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>226/360</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#00b9ff", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>0.52/1.561</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#ff8819 ", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>1,4</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#dc3545", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>226,134</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#3db4ec", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>0.52,1.041</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-pie" data-peity='{ "fill": ["#6c25be","#19c0c0","#00b9ff"], "height": 70, "width": 70 }'>10,4,4</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Donut Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-md-flex flex-wrap">
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#6c25be", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>1/5</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#19c0c0", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>226/360</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#00b9ff", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>0.52/1.561</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#ff8819 ", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>1,4</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#dc3545", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>226,134</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#3db4ec", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>0.52,1.041</span>
										</div>
										<div class="mg-r-20 mg-t-10">
											<span class="peity-donut" data-peity='{ "fill": ["#6c25be","#19c0c0","#00b9ff"], "height": 70, "width": 70 }'>10,4,4</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Data Attributes
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-md-flex">
										<div class="mg-r-20 mg-t-10">
											<div class="">
												<p class="data-attributes">
													<span data-peity='{ "fill": ["#6c25be", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70, "innerRadius": 10, "radius": 40 }'>1/7</span>
												</p>
											</div>
										</div>
										<div class="mg-r-20 mg-t-10">
											<div class="">
												<p class="data-attributes">
													<span data-peity='{ "fill": ["#19c0c0", "rgba(67, 87, 133, .09)"],"height": 70, "width": 70, "innerRadius": 14, "radius": 36 }'>2/7</span>
												</p>
											</div>
										</div>
										<div class="mg-r-20 mg-t-10">
											<div class="">
												<p class="data-attributes">
													<span data-peity='{ "fill": ["#00b9ff", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70, "innerRadius": 16, "radius": 32 }'>3/7</span>
												</p>
											</div>
										</div>
										<div class="mg-r-20 mg-t-10">
											<div class="">
												<p class="data-attributes">
													<span data-peity='{ "fill": ["#ff8819 ", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70, "innerRadius": 18, "radius": 28 }'>4/7</span>
												</p>
											</div>
										</div>
										<div class="mg-r-20 mg-t-10">
											<div class="">
												<p class="data-attributes">
													<span data-peity='{ "fill": ["#dc3545", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70, "innerRadius": 20, "radius": 24 }'>5/7</span>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Bar Chart
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-lg-flex">
										<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-t-20 bg-light">
											<span class="peity-bar" data-peity='{ "fill": ["#6c25be"], "height": 70, "width": 150 }'>10,4,4,7,5,9,10,5,4,4</span>
										</div>
										<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-t-20 bg-light">
											<span class="peity-bar" data-peity='{ "fill": ["#6c25be","#560bd0"], "height": 70, "width": 150 }'>10,4,4,7,5,9,10,5,4.7</span>
										</div>
									</div>
									<div class="d-lg-flex">
										<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-b-20 bg-light">
											<span class="peity-bar" data-peity='{ "fill": ["#560bd0"], "height": 70, "width": 150 }'>-10,-12,-12,-7,-5,-9,-10,-5,-13,-12</span>
										</div>
										<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-b-20 bg-light">
											<span class="peity-bar" data-peity='{ "fill": ["#560bd0","#00b9ff"], "height": 70, "width": 150 }'>-10,-12,-12,-7,-5,-9,-10,-5,-13,-12</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-->
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

		<!-- Internal jQuery Peity js -->
		<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- Internal Peity js -->
		<script src="{{asset('assets/js/chart.peity.js')}}"></script>

    @endsection
