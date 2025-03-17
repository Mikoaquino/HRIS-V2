@extends('layouts.app')

    @section('styles')

		<!--Internal  jqvmap Css-->
		<link href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">VECTOR MAPS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Maps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Vector maps</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6">
							<div class="card mg-b-20" id="map">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vector Map: World
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="ht-300" id="vmap"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mg-b-20" id="map1">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vector Map: Canada
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="ht-300" id="vmap3"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mg-b-20" id="map2">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vector Map: USA
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="ht-300" id="vmap2"></div>
								</div><!-- col-->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mg-b-20" id="map6">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vector Map: Germany
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="ht-300" id="vmap7"></div>
								</div><!-- col-->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mg-b-20" id="map7">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vector Map: Russia
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="ht-300" id="vmap8"></div>
								</div><!-- col-->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card" id="map8">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vector Map: France
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="ht-300" id="vmap9"></div>
								</div><!-- col-->
							</div>
						</div>
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')

		<!--Internal  Vector-maps js -->
		<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
		<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
		<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.canada.js')}}"></script>
		<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.algeria.js')}}"></script>
		<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.argentina.js')}}"></script>
		<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.europe.js')}}"></script>
		<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.germany.js')}}"></script>
		<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.russia.js')}}"></script>
		<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.france.js')}}"></script>
		<script src="{{asset('assets/js/vector-map.js')}}"></script>

		<!-- Internal Vector-sampledata js -->
		<script src="{{asset('assets/js/jquery.vmap.sampledata.js')}}"></script>

    @endsection
