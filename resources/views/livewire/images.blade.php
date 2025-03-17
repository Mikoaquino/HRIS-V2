@extends('layouts.custom-app')

    @section('styles')

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">IMAGES</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Images</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="card mg-b-20" id="image1">
						<div class="card-body">
						     <h3 class="card-title  mg-b-10">Responsive Image</h3>
							<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
							<div class="text-wrap">
								<div class="example">
									<div><img alt="Responsive image" class="img-fluid br-5" src="{{asset('assets/img/photos/1.jpg')}}"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="card mg-b-20" id="image2">
						<div class="card-body">
						     <h3 class="card-title  mg-b-10">Image Thumbnail</h3>
							<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
							<div class="text-wrap">
								<div class="example">
									<img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200" src="{{asset('assets/img/photos/1.jpg')}}">
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="card mg-b-20" id="image3">
						<div class="card-body">
						 <h3 class="card-title  mg-b-10">right and left Aligning </h3>
							<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
							<div class="text-wrap">
								<div class="example">
									<div class="bd pd-20 clearfix">
										<img alt="" class="rounded float-sm-left wd-100p wd-sm-200" src="{{asset('assets/img/photos/1.jpg')}}">
										<img alt="" class="rounded float-sm-right wd-100p wd-sm-200 mg-t-10 mg-lg-t-0" src="{{asset('assets/img/photos/1.jpg')}}">
									</div>
								</div>
							</div>
						</div>
					</div>
				    <!-- /row -->

					<!-- row -->
					<div class="card" id="image4">
						<div class="card-body">
						     <h3 class="card-title  mg-b-10">Background Image</h3>
							<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
							<div class="text-wrap">
								<div class="example">
									<figure class="pos-relative  br-5 mg-b-0 wd-sm-80p wd-md-50p">
										<img alt="Responsive image" class="img-fit-cover  br-5" src="{{asset('assets/img/photos/1.jpg')}}">
										<figcaption class="pos-absolute  br-5 a-0 pd-25 bg-black-5 tx-white-8 overflow-scroll">
											<h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What Does Royalty-Free Mean?</h6>
											<p class="mg-b-0">Royalty free means you just need to pay. You don't need to pay additional or ongoing fees for each person who sees or uses it.</p>
										</figcaption>
									</figure>
								</div>
							</div>
						</div>
                    </div>
					<!-- /row -->

    @endsection

    @section('scripts')

    @endsection
