@extends('layouts.app')

    @section('styles')

		<!---Internal  Darggable css-->
		<link href="{{asset('assets/plugins/darggable/jquery-ui-darggable.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">DRAGABBLE CARDS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Draggable cards</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="sortable">
						<div class="row row-sm">
							<div class="col-xl-4 col-sm-12 col-md-6  col-lg-4">
								<div class="card custom-card card-body card-draggable">
									<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
								</div>
								<div class="card custom-card card-img-top-1 card-draggable">
									<img alt="Image" class="img-fluid card-img-top" src="{{asset('assets/img/photos/1.jpg')}}">
									<div class="card-body">
										<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-body">
										<p class="mg-b-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
									</div>
									<div class="card-footer">
										January, 20, 2017 4:30am
									</div>
								</div>
								<div class="card custom-card  bg-primary tx-white card-draggable">
									<div class="card-body">
										<h5 class="card-title tx-white tx-medium mg-b-10">The Card Title</h5>
										<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
										<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><a class="card-link tx-white-7 hover-white" href="javascript:void(0);">Card link</a> <a class="card-link tx-white-7 hover-white" href="javascript:void(0);">Another link</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-md-6 col-lg-4">
								<div class="card custom-card card-body card-draggable bg-secondary tx-white">
									<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-body">
										<h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
										<p class="card-subtitle mg-b-15">This is the card subtitle</p>
										<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><a class="card-link" href="javascript:void(0);">Card link</a> <a class="card-link" href="javascript:void(0);">Another link</a>
									</div>
								</div>
								<div class="card custom-card bg-dark card-body tx-white-8 bg-gray-800 card-draggable">
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet consictetur.
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-body">
										<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
									<img alt="Image" class="img-fluid card-img-bottom bd-ts-0 bd-te-0" src="{{asset('assets/img/photos/3.jpg')}}">
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-md-12 col-lg-4">
								<div class="card custom-card card-body card-draggable bg-primary tx-white">
									<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card custom-card card-draggable">
									<img alt="Image" class="card-img img-fluid card-img-top " src="{{asset('assets/img/photos/6.jpg')}}">
									<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
										<p class="tx-white tx-medium mg-b-15">The Ghost Town</p>
										<p class="tx-white tx-13">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet consictetur...</p>
										<p class="tx-13 mg-b-0"><a class="tx-white" href="">Read more</a></p>
									</div>
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-header tx-medium">
										Description
									</div>
									<div class="card-body">
										<p class="mg-b-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
								</div>
								<div class="card custom-card card-draggable">
									<img alt="Image" class="img-fluid card-img-top" src="{{asset('assets/img/photos/1.jpg')}}">
									<div class="card-body">
										<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')

		<!--- Internal Darggable js-->
		<script src="{{asset('assets/plugins/darggable/jquery-ui-darggable.min.js')}}"></script>
		<script src="{{asset('assets/plugins/darggable/darggable.js')}}"></script>

    @endsection
