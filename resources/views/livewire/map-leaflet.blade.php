@extends('layouts.app')

    @section('styles')

		<!-- Internal  leaflet-map css -->
		<link href="{{asset('assets/plugins/leaflet/leaflet.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">LEAFLET MAPS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Maps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Leaflet maps</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Basic
									</div>
									<p class="mg-b-20">A default map style by Leaflet Maps.</p>
									<div class="ht-300" id="leaflet1"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										With Popup
									</div>
									<p class="mg-b-20">Popups are usually used when you want to attach some information to a map.</p>
									<div class="ht-300" id="leaflet2"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Map with circle
									</div>
									<p class="mg-b-20">Adding a circle is the same (except for specifying the radius in meters as a second argument), but lets you control how it looks by passing options as the last argument when creating the object.</p>
									<div class="ht-200 ht-sm-300 ht-md-400 mb-0" id="leaflet3"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')

		<!--Internal  Leaflet-maps js -->
		<script src="{{asset('assets/plugins/leaflet/leaflet.js')}}"></script>
		<script src="{{asset('assets/js/map-leafleft.js')}}"></script>

    @endsection
