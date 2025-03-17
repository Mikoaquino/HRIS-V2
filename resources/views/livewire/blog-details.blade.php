@extends('layouts.app')

    @section('styles')

		<!--  smart photo master css -->
		<link href="{{asset('assets/plugins/SmartPhoto-master/smartphoto.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">BLOG DETAILS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog-details</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

						<div class="row">
							<div class="col-xl-12 col-xxl-9 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img px-4 pt-4">
										<a href="javascript:void(0);"></a>
										<img src="{{asset('assets/img/photos/blog.jpg')}}" alt="img" class="cover-image br-7 w-100">
									</div>
									<div class="card-body">
										<a href="javascript:void(0);" class="mt-4"><h5 class="font-weight-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5></a>
										<p class="">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
										<p class="mb-0">but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example</p>
									</div>
									<div class="card-footer pb-2 pt-2">
										<div class="item7-card-desc d-md-flex">
											<div class="d-flex align-items-center mt-0">
												<img src="{{asset('assets/img/faces/2.jpg')}}" class="avatar brround avatar-md me-3" alt="avatar-img">
												<div>
													<a href="{{url('profile')}}" class="text-default font-weight-bold">Lilly Potter</a>
													<small class="d-block text-muted">1 day ago</small>
												</div>
											</div>
											<div class="ms-auto mb-2 d-flex mt-3">
											<a href="javascript:void(0);" class="me-3 mb-2 me-2 d-flex"><span class="fe fe-calendar text-muted tx-17"></span><div class="mt-0 mt-0 text-dark">Jan-18-2020</div></a>
											<a class="me-0 d-flex" href="javascript:void(0);"><span class="fe fe-message-square text-muted me-2 tx-17"></span><div class="mt-0 mt-0 text-dark">12 Comments</div></a>
											</div>
										</div>
									</div>
								</div>
								<div class="">
									<div class="card overflow-hidden">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Comments</h3>
										</div>
										<div class="card-body">
											<div class="d-sm-flex mt-0 p-3 sub-review-section border border-bottom-0 br-bl-0 br-br-0">
												<div class="d-flex me-3">
													<a href="javascript:void(0);"><img class="media-object brround avatar-md" alt="64x64" src="{{asset('assets/img/faces/1.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
														<span class="tx-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="verified"><i class="fe fe-check-circle text-success tx-12"></i></span>
														<span class="tx-14 ms-2"> 4.5 <i class="fa fa-star text-warning"></i></span>
													</h5>
													<p class="font-13  mb-2 mt-2">
													   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
													</p>
													<a href="javascript:void(0);" class="me-2 mt-1"><span class="badge badge-primary"><span class="me-1 fe fe-thumbs-up tx-11"></span>Helpful</span></a>
													<a href="" class="me-2 mt-1"><span class="badge bg-success "><span class="me-1 fe fe-edit-2 tx-11"></span>Comment</span></a>
													<a href="" class="me-2 mt-1"><span class="badge bg-success"><span class="me-1 fe fe-alert-triangle tx-11"></span>Report</span></a>
													<div class="btn-group btn-group-sm mb-1 ms-auto float-sm-right mt-1">
														<button class="btn btn-light me-2" ><span class="fe fe-thumbs-up tx-16"></span></button>
														<button class="btn btn-light" ><span class="fe fe-thumbs-down tx-16"></span></button>
													</div>
												</div>
											</div>
											<div class="d-sm-flex p-3 sub-review-section border subsection-color br-tl-0 br-tr-0">
												<div class="d-flex me-3">
													<a href="javascript:void(0);"><img class="media-object brround avatar-md" alt="64x64" src="{{asset('assets/img/faces/3.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="tx-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="verified"><i class="fe fe-check-circle text-success tx-12"></i></span></h5>
													<p class="font-13  mb-2 mt-2">
														Lorem ipsum dolor sit amet nostrud exercitation ullamco laboris   commodo consequat.
													</p>
													<a href="javascript:void(0);" class="me-2 mt-1"><span class="badge badge-primary"><span class="me-1 fe fe-thumbs-up tx-11"></span>Helpful</span></a>
													<a href="" class="me-2 mt-1"><span class="badge bg-success "><span class="me-1 fe fe-edit-2 tx-11"></span>Comment</span></a>
													<a href="" class="me-2 mt-1"><span class="badge bg-success"><span class="me-1 fe fe-alert-triangle tx-11"></span>Report</span></a>
													<div class="btn-group btn-group-sm mb-1 ms-auto float-sm-right mt-1">
														<button class="btn btn-light me-2" ><span class="fe fe-thumbs-up tx-16"></span></button>
														<button class="btn btn-light" ><span class="fe fe-thumbs-down tx-16"></span></button>
													</div>
												</div>
											</div>
											<div class="d-sm-flex p-3 mt-4 border sub-review-section pb-0">
												<div class="d-flex me-3">
													<a href="javascript:void(0);"><img class="media-object brround avatar-md" alt="64x64" src="{{asset('assets/img/faces/5.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<h5 class="mt-0 mb-1 font-weight-semibold">Edward
													<span class="tx-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="verified"><i class="fe fe-check-circle text-success tx-12"></i></span>
													<span class="tx-14 ms-2"> 4 <i class="fa fa-star text-warning"></i></span>
													</h5>
													<p class="font-13  mb-2 mt-2">
													   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
													</p>
													<a href="javascript:void(0);" class="me-2 mt-1"><span class="badge badge-primary"><span class="me-1 fe fe-thumbs-up tx-11"></span>Helpful</span></a>
													<a href="" class="me-2 mt-1"><span class="badge bg-success "><span class="me-1 fe fe-edit-2 tx-11"></span>Comment</span></a>
													<a href="" class="me-2 mt-1"><span class="badge bg-success"><span class="me-1 fe fe-alert-triangle tx-11"></span>Report</span></a>
													<div class="btn-group btn-group-sm mb-1 ms-auto float-sm-right mt-1">
														<button class="btn btn-light me-2" ><span class="fe fe-thumbs-up tx-16"></span></button>
														<button class="btn btn-light" ><span class="fe fe-thumbs-down tx-16"></span></button>
													</div>
												</div>
											</div>
											<div class="d-sm-flex p-3 sub-review-section border subsection-color br-tl-0 br-tr-0">
												<div class="d-flex me-3">
													<a href="javascript:void(0);"><img class="media-object brround avatar-md" alt="64x64" src="{{asset('assets/img/faces/6.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<h5 class="mt-0 mb-1 font-weight-semibold">Camila cabello <span class="tx-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="verified"><i class="fe fe-check-circle text-success tx-12"></i></span></h5>
													<p class="font-13  mb-2 mt-2">
														Lorem ipsum dolor sit amet nostrud exercitation ullamco laboris   commodo consequat.
													</p>
													<a href="javascript:void(0);" class="me-2 mt-1"><span class="badge badge-primary"><span class="me-1 fe fe-thumbs-up tx-11"></span>Helpful</span></a>
													<a href="" class="me-2 mt-1"><span class="badge bg-success "><span class="me-1 fe fe-edit-2 tx-11"></span>Comment</span></a>
													<a href="" class="me-2 mt-1"><span class="badge bg-success"><span class="me-1 fe fe-alert-triangle tx-11"></span>Report</span></a>
													<div class="btn-group btn-group-sm mb-1 ms-auto float-sm-right mt-1">
														<button class="btn btn-light me-2" ><span class="fe fe-thumbs-up tx-16"></span></button>
														<button class="btn btn-light" ><span class="fe fe-thumbs-down tx-16"></span></button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
								<div class="">
									<div class="card overflow-hidden">
									<div class="card mb-lg-0">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">Add a Comment</h3>
										</div>
										<div class="card-body">
											<div class="mt-2">
												<div class="form-group">
													<input type="text" class="form-control" id="name1" placeholder="Your Name">
												</div>
												<div class="form-group">
													<input type="email" class="form-control" id="email" placeholder="Email Address">
												</div>
												<div class="form-group">
													<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Review"></textarea>
												</div>
												<a href="javascript:void(0);" class="btn btn-primary">Send Reply</a>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="col-xl-12 col-xxl-3 col-lg-12 col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-header border-bottom mb-1">
										<h3 class="card-title">Search</h3>
									</div>
									<div class="card-body">
										<div class="text-center">
											<p class="">
												<div class="input-group">
													<input class="form-control" placeholder="Enter email..." type="email">
													<button class="btn btn-primary br-ts-0 br-bs-0" type="button">Sign in</button>
												</div>
											</p>
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden">
									<div class="card-header border-bottom">
										<h3 class="card-title">About Author</h3>
									</div>
									<div class="card-body">
										<div class="text-center">
											<a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('assets/img/photos/11.jpg')}}" alt=""></a>
											<div class="br-5 p-2 text-justify">
												<p>
													Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nulla deleniti voluptas officia accusamus  magnam ullam inventore Lorem ipsum dolor, sit amet consectetur dolorem quibusdam?.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden">
									<div class="card-header border-bottom">
										<h3 class="card-title mb-1">Popular posts</h3>
									</div>
									<div class="card-body">
										<ul class="list-group mb-0">
											<li class="list-group-item d-flex border-0 pt-3 px-0">
												<img src="{{asset('assets/img/photos/blog1.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
												<div class="">
													<span class="d-block">Tourism</span>
													<a class="text-default tx-12 font-weight-semibold white-space-nowrap">Explore tourism by visitinig places.</a>
													<small class="d-block text-muted">February 2,2021</small>
												</div>
											</li>
											<li class="list-group-item d-flex border-0 px-0">
												<img src="{{asset('assets/img/photos/blog2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
												<div class="">
													<span class="d-block">Beautician</span>
													<a class="text-default  tx-12 font-weight-semibold white-space-nowrap">Beautification courses are available.</a>
													<small class="d-block text-muted">August 14,2021</small>
												</div>
											</li>
											<li class="list-group-item d-flex pb-3 border-0 px-0">
												<img src="{{asset('assets/img/photos/blog5.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
												<div class="">
													<span class="d-block">Music</span>
													<a class="text-default tx-12 font-weight-semibold white-space-nowrap">Music in a peaceful way </a>
													<small class="d-block text-muted">November 30,2021</small>
												</div>
											</li>
									</ul>
									</div>
								</div>
								<div class="card custom-card overflow-hidden">
									<div class="card-header border-bottom">
										<h3 class="card-title mb-1">Categories</h3>
									</div>
									<div class="card-body">
										<div><div class="tags">
											<a href="javascript:void(0);" class="tag">Life style</a>
											<a href="javascript:void(0);" class="tag">Health</a>
											<a href="javascript:void(0);" class="tag">Tourism</a>
											<a href="javascript:void(0);" class="tag">Web designing</a>
											<a href="javascript:void(0);" class="tag">Medical</a>
											<a href="javascript:void(0);" class="tag">Hotels</a>
											<a href="javascript:void(0);" class="tag">Real estate</a>
											<a href="javascript:void(0);" class="tag">Business</a>
											<a href="javascript:void(0);" class="tag">Shopping</a>
											<a href="javascript:void(0);" class="tag">Marketing</a>
											<a href="javascript:void(0);" class="tag">Housing</a>
										</div></div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden">
									<div class="card-header border-bottom">
										<h3 class="card-title mb-1">Gallery</h3>
									</div>
									<div class="card-body">
										<div class="text-center demo-gallery">
											<div class="mt-2">
												<div class="masonry row">
													<div class="col-xl-4 col-lg-4 col-sm-6">
														<div class="brick">
															<a href="{{asset('assets/img/photos/1.jpg')}}" class="js-img-viewer" data-caption="IMAGE-01"
																data-id="lion">
																<img src="{{asset('assets/img/photos/1.jpg')}}" alt="" />
															</a>
														</div>
													</div>
													<div class="col-xl-4 col-lg-4 col-sm-6">
														<div class="brick">
															<a href="{{asset('assets/img/photos/2.jpg')}}" class="js-img-viewer" data-caption="IMAGE-02"
																data-id="camel">
																<img src="{{asset('assets/img/photos/2.jpg')}}" alt="" />
															</a>
														</div>
													</div>
													<div class="col-xl-4 col-lg-4 col-sm-6">
														<div class="brick">
															<a href="{{asset('assets/img/photos/3.jpg')}}" class="js-img-viewer" data-caption="IMAGE-03"
																data-id="hippo">
																<img src="{{asset('assets/img/photos/3.jpg')}}" alt="" />
															</a>
														</div>
													</div>
													<div class="col-xl-4 col-lg-4 col-sm-6">
														<div class="brick">
															<a href="{{asset('assets/img/photos/4.jpg')}}" class="js-img-viewer" data-caption="IMAGE-04"
																data-id="koala">
																<img src="{{asset('assets/img/photos/4.jpg')}}" alt="" />
															</a>
														</div>
													</div>
													<div class="col-xl-4 col-lg-4 col-sm-6">
														<div class="brick">
															<a href="{{asset('assets/img/photos/5.jpg')}}"  class="js-img-viewer" data-caption="IMAGE-05"
																data-id=" bear">
																<img src="{{asset('assets/img/photos/5.jpg')}}" alt="" />
															</a>
														</div>
													</div>
													<div class="col-xl-4 col-lg-4 col-sm-6">
														<div class="brick">
															<a href="{{asset('assets/img/photos/6.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-06"
																data-id=" rhino">
																<img src="{{asset('assets/img/photos/6.jpg')}}" alt="" />
															</a>
														</div>
													</div>
													<div class="col-xl-4 col-lg-4 col-sm-6">
														<div class="brick">
															<a href="{{asset('assets/img/photos/7.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-07"
																data-id=" rhino">
																<img src="{{asset('assets/img/photos/7.jpg')}}" alt="" />
															</a>
														</div>
													</div>
													<div class="col-xl-4 col-lg-4 col-sm-6">
														<div class="brick">
															<a href="{{asset('assets/img/photos/8.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-08"
																data-id=" rhino">
																<img src=" {{asset('assets/img/photos/8.jpg')}}" alt="" />
															</a>
														</div>
													</div>
													<div class="col-xl-4 col-lg-4 col-sm-6">
														<div class="brick">
															<a href="{{asset('assets/img/photos/9.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-09"
																data-id=" rhino">
																<img src="{{asset('assets/img/photos/9.jpg')}}" alt="" />
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

    @endsection

    @section('scripts')

		<!-- smart photo master js -->
		<script src="{{asset('assets/plugins/SmartPhoto-master/smartphoto.js')}}"></script>
		<script src="{{asset('assets/js/gallery.js')}}"></script>

    @endsection
