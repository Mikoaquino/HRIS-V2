@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">MEDIA OBJECT</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Media object</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="card" id="media-object">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Example</h6>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="media d-block d-sm-flex">
												<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('assets/img/faces/4.jpg')}}">
												<div class="media-body">
													<h5 class="mg-b-5 tx-inverse">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="media-object2">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Nesting</h6>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="media d-block d-sm-flex">
												<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('assets/img/faces/9.jpg')}}">
												<div class="media-body">
													<h5 class="mg-b-5 tx-inverse">Media heading</h5>
													<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													<div class="media d-block d-sm-flex mg-t-25">
														<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('assets/img/faces/8.jpg')}}">
														<div class="media-body">
															<h5 class="mg-b-5 tx-inverse">Media heading</h5>
															Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="media-object3">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Alignment</h6>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="media d-block d-sm-flex">
												<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0 align-self-center" src="{{asset('assets/img/faces/14.jpg')}}">
												<div class="media-body">
													<h5 class="mg-b-5 tx-inverse">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="media-object4">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Order</h6>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="media d-block d-sm-flex">
												<div class="media-body">
													<h5 class="mg-b-5 tx-inverse">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
												<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-t-20 mg-sm-t-0" src="{{asset('assets/img/faces/5.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="media-object5">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Media List</h6>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="media media-list d-block d-sm-flex">
												<ul class="list-unstyled mb-0">
													<li class="media d-block d-sm-flex">
														<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('assets/img/faces/2.jpg')}}">
														<div class="media-body">
															<h5 class="mg-b-5 tx-inverse">Media heading</h5>
															Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
														</div>
													</li>
													<li class="media d-block d-sm-flex mg-t-25">
														<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('assets/img/faces/12.jpg')}}">
														<div class="media-body">
															<h5 class="mg-b-5 tx-inverse">Media heading</h5>
															Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
														</div>
													</li>
													<li class="media d-block d-sm-flex mg-t-25">
														<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('assets/img/faces/7.jpg')}}">
														<div class="media-body">
															<h5 class="mg-b-5 tx-inverse">Media heading</h5>
															Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
														</div>
													</li>
											    </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    @endsection
