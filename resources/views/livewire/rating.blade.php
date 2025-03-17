@extends('layouts.app')

    @section('styles')

		<!---Internal  Owl Carousel css-->
		<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!--  ratings-2 Plugin -->
		<link href="{{asset('assets/plugins/ratings-2/star-rating-svg.css')}}" rel="stylesheet" />

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">RATINGS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Ratings</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="side-app">
						<div class="row row-cards">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Star Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-1" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Heart Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-2" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Multi Star Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-3" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Multi Heart Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-6" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Multi circle Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-4" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Thumbs-up Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating-5" data-stars="2">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-cards">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Basic Star Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Rounded star Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-4" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											 gradients Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-5" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Execute callback when rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-6"   data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											read only mode
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-7"  data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Use fullstars
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-8" data-stars="2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											On hover event
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-9" data-stars="2">
										</div>
										<span class="live-rating"></span>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											rating level colors
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block my-rating-10" data-stars="2">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Star Rating Js-->
		<script src="{{asset('assets/plugins/rating/jquery-rate-picker.js')}}"></script>
		<script src="{{asset('assets/plugins/rating/rating-picker.js')}}"></script>

		<!-- Star Rating-1 Js-->
		<script src="{{asset('assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
		<script src="{{asset('assets/plugins/ratings-2/star-rating.js')}}"></script>

    @endsection
