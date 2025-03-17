@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">THUMBNAILS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Thumbnails</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card" id="thumb">
								<div class="card-body ht-100p">
									<div>
										<h6 class="card-title mb-1">Image Thumbnail Placement</h6>
										<p class="text-muted card-sub-title">Images in Bootstrap are made responsive with .img-fluid. max-width: 100%; and height: auto; are applied to the image so that it scales with the parent element.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row">
												<div class="col-6 col-md-3">
													<img alt="Responsive image" class="img-thumbnail" src="{{asset('assets/img/photos/9.jpg')}}">
												</div>
												<div class="col-6 col-md-3">
													<img alt="Responsive image" class="img-thumbnail" src="{{asset('assets/img/photos/13.jpg')}}">
												</div>
												<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
													<img alt="Responsive image" class="img-thumbnail" src="{{asset('assets/img/photos/14.jpg')}}">
												</div>
												<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
													<img alt="Responsive image" class="img-thumbnail" src="{{asset('assets/img/photos/15.jpg')}}">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="card custom-card" id="aligning">
								<div class="card-body ht-100p">
									<div>
										<h6 class="card-title mb-1">Aligning Thumbnails</h6>
										<p class="text-muted card-sub-title">Align images with the helper float classes or text alignment classes.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="clearfix">
											  <img src="{{asset('assets/img/photos/10.jpg')}}" class="float-sm-left wd-100p wd-sm-200 br-5" alt="img">
											  <img src="{{asset('assets/img/photos/11.jpg')}}" class="float-sm-right wd-100p wd-sm-200 mg-t-10 mg-sm-t-0 br-5" alt="img">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <!-- row closed -->

    @endsection

    @section('scripts')

    @endsection
