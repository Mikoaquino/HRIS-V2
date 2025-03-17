@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">PAGINATION</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pagination</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">BASIC PAGINATION</h6>
										<p class="text-muted card-sub-title">Below are basic pagination navigation.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<ul class="pagination mb-0">
												<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
												<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
												<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
												<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
												<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
											 						</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">CIRCLED PAGINATION</h6>
										<p class="text-muted card-sub-title">Below are basic pagination navigation in circle.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<ul class="pagination pagination-circled mb-0">
												<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
												<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
												<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
												<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
												<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
										</ul>
										</div>
									 </div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">OUT-LINE PAGINATION</h6>
										<p class="text-muted card-sub-title">Below are basic pagination navigation.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<ul class="pagination mb-0">
												<li class="page-item"><a class="page-link-outline" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
												<li class="page-item active"><a class="page-link-outline" href="javascript:void(0);">1</a></li>
												<li class="page-item"><a class="page-link-outline" href="javascript:void(0);">2</a></li>
												<li class="page-item"><a class="page-link-outline" href="javascript:void(0);">3</a></li>
												<li class="page-item"><a class="page-link-outline" href="javascript:void(0);">4</a></li>
												<li class="page-item"><a class="page-link-outline" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
											 						</ul>
											<ul class="pagination mt-3">
												<li class="page-item"><a class="page-link-outline radius-50" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
												<li class="page-item active"><a class="page-link-outline radius-50" href="javascript:void(0);">1</a></li>
												<li class="page-item"><a class="page-link-outline radius-50" href="javascript:void(0);">2</a></li>
												<li class="page-item"><a class="page-link-outline radius-50" href="javascript:void(0);">3</a></li>
												<li class="page-item"><a class="page-link-outline radius-50" href="javascript:void(0);">4</a></li>
												<li class="page-item"><a class="page-link-outline radius-50" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
											 						</ul>
										</div>
									</div>
								</div>
							</div>
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">PAGINATION FOR DARK BACKGROUND</h6>
											<p class="text-muted card-sub-title">Below are basic pagination navigation for dark background.</p>
										</div>
										<div class="text-wrap">
											<div class="example  bg-dark">
												<div class="pd-20 bg-gray-800">
													<ul class="pagination pagination-dark mb-0 mg-b-0">
														<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
														<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
														<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
														<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
														<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
												</ul>
												 </div>
											</div>
										</div>
									</div>
								</div>

								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">COLOR VARIANT PAGINATION</h6>
											<p class="text-muted card-sub-title">Below are the available colored pagination variants..</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-sm-6 col-lg-4">
														<ul class="pagination pagination-primary mg-sm-b-0">
															<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
						</ul>
													</div><!-- col-4 -->
													<div class="col-sm-6 col-lg-4 mg-sm-t-0">
														<ul class="pagination pagination-success mb-0">
															<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
						</ul>
													</div><!-- col-4 -->
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">Pagination Sizes</h6>
											<p class="text-muted card-sub-title">Fancy larger, default and smaller pagination Add </p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-sm-6 col-md-4">
														<nav>
															<ul class="pagination pagination-lg mb-2 mt-2">
																<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
																<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
																<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
							</ul>
														</nav>
													</div>
													<div class="col-sm-6 col-md-4">
														<nav>
															<ul class="pagination  mb-2 mt-2">
																<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
																<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
																<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
							</ul>
														</nav>
													</div>
													<div class="col-sm-6 col-md-4 mg-t-10 mg-sm-t-0">
														<nav>
															<ul class="pagination pagination-sm mb-2 mt-2">
																<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
																<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
																<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
							</ul>
														</nav>
													</div>
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



    @endsection