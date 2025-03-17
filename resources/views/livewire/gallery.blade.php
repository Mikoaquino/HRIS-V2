@extends('layouts.app')

    @section('styles')

		<!--  smart photo master css -->
		<link href="{{asset('assets/plugins/SmartPhoto-master/smartphoto.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">GALLERY</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Gallery</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="masonry row">
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/1.jpg')}}" class="js-img-viewer" data-caption="IMAGE-01"
									data-id="lion">
									<img src="{{asset('assets/img/photos/1.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/2.jpg')}}" class="js-img-viewer" data-caption="IMAGE-02"
									data-id="camel">
									<img src="{{asset('assets/img/photos/2.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/3.jpg')}}" class="js-img-viewer" data-caption="IMAGE-03"
									data-id="hippo">
									<img src="{{asset('assets/img/photos/3.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/4.jpg')}}" class="js-img-viewer" data-caption="IMAGE-04"
									data-id="koala">
									<img src="{{asset('assets/img/photos/4.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/5.jpg')}}"  class="js-img-viewer" data-caption="IMAGE-05"
									data-id=" bear">
									<img src="{{asset('assets/img/photos/5.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/6.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-06"
									data-id=" rhino">
									<img src="{{asset('assets/img/photos/6.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/7.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-07"
									data-id=" rhino">
									<img src="{{asset('assets/img/photos/7.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/8.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-08"
									data-id=" rhino">
									<img src=" {{asset('assets/img/photos/8.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/9.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-09"
									data-id=" rhino">
									<img src="{{asset('assets/img/photos/9.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/10.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-10"
									data-id=" rhino">
									<img src="{{asset('assets/img/photos/10.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/11.jpg')}}" class="js-img-viewer" data-caption="IMAGE-11"
									data-id=" rhino">
									<img src="{{asset('assets/img/photos/11.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="brick">
								<a href="{{asset('assets/img/photos/12.jpg')}}" class="js-img-viewer" data-caption="IMAGE-11"
									data-id=" rhino">
									<img src="{{asset('assets/img/photos/12.jpg')}}" alt="" />
								</a>
							</div>
						</div>
					</div>
					<!-- Pagination -->
					<div class="row mb-5">
						<div class="col-md-6 mt-1 d-none d-md-block text-dark">1 - 10 of 234 photos</div>
						<ul class="pagination product-pagination ms-auto float-end">
							<li class="page-item page-prev disabled">
								<a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
							</li>
							<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
							<li class="page-item page-next">
								<a class="page-link" href="javascript:void(0);">Next</a>
							</li>
						</ul>
					</div>
					<!-- Pagination -->

    @endsection

    @section('scripts')

		<!-- smart photo master js -->
		<script src="{{asset('assets/plugins/SmartPhoto-master/smartphoto.js')}}"></script>
		<script src="{{asset('assets/js/gallery.js')}}"></script>

    @endsection
