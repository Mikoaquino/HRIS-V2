@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SEARCH</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Search</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body pb-0">
									<div class="input-group mb-2">
										<input type="text" class="form-control" placeholder="Searching.....">
										<span class="input-group-append">
											<button class="btn ripple btn-primary" type="button">Search</button>
										</span>
									</div>
								</div>
								<div class="card-body ps-0 pe-0 bd-t-0 pt-0">
									<div class="main-content-body-profile mb-3">
										<nav class="nav main-nav-line">
											<a class="nav-link active" data-bs-toggle="tab" href="#tab1">All</a>
											<a class="nav-link" data-bs-toggle="tab" href="#tab2">Images</a>
											<a class="nav-link" data-bs-toggle="tab" href="#tab3">Books</a>
											<a class="nav-link" data-bs-toggle="tab" href="#tab4">News</a>
											<a class="nav-link" data-bs-toggle="tab" href="#tab5">Videos</a>
										</nav>
									</div>
									<p class="text-muted mb-0 ps-3">About 12,546,90000 results (0.56 Seconds)</p>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-header border-bottom-0">
									<div>
										<h3 class="card-title mb-0 text-dark "><a href="javascript:void(0);" class="text-dark">Search the new animations</a></h3>
									</div>
								 </div>
								<div class="card-body pt-0">
									<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-header border-bottom-0">
										<div>
											<h3 class="card-title mb-0 text-dark "><a href="javascript:void(0);" class="text-dark">Free Boostrap admin templates</a></h3>
										</div>
								</div>
								 <div class="card-body pt-0">
									 <div class="mb-2">
										<a href="javascript:void(0);" class="h5 text-dark">Templist – HTML5 Digital Marketplace Template by ...</a>
									</div>
									<a href="javascript:void(0);" class="text-primary">https://www.spruko.com/demo/templist/Html/index.html</a>
									<p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
									<div>
										<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
										<a href="javascript:void(0);" class="me-4"> (48) Reviews</a>
										<a href="javascript:void(0);" class="font-weight-bold">USD-$24</a>
									</div>
							     </div>
							</div>
							<div class="card custom-card">
							    <div class="card-header border-bottom-0">
									<div>
										<h3 class="card-title mb-0 text-dark "><a href="javascript:void(0);" class="text-dark">20+ download the free templates</a></h3>
									</div>
								 </div>
								<div class="card-body pt-0">
									<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
							<div class="card custom-card">
							    <div class="card-header border-bottom-0">
									<div>
										<h3 class="card-title mb-0 text-dark "><a href="javascript:void(0);" class="text-dark">Customizable admin templates</a></h3>
									</div>
								 </div>
								<div class="card-body pt-0">
										<div class="mb-2">
											<a href="javascript:void(0);" class="h4 text-dark">User related Images</a>
										</div>
										<div class="row mb-2">
											<div class="col-sm-6 col-lg-3">
												<a class="" href="javascript:void(0);">
													<div class="border  br-5 p-0 text-center m-1">
														<img src="{{asset('assets/img/photos/1.jpg')}}" alt="img" class="mx-auto br-5">
													</div>
												</a>
											</div>
											<div class="col-sm-6 col-lg-3">
												<a class="" href="javascript:void(0);">
													<div class="border   br-5 p-0 text-center m-1">
														<img src="{{asset('assets/img/photos/3.jpg')}}" alt="img" class="mx-auto  br-5">
													</div>
												</a>
											</div>
											<div class="col-sm-6 col-lg-3">
												<a class="" href="javascript:void(0);">
													<div class="border br-5 p-0 text-center m-1">
														<img src="{{asset('assets/img/photos/5.jpg')}}" alt="img" class="mx-auto  br-5">
													</div>
												</a>
											</div>
											<div class="col-sm-6 col-lg-3">
												<a class="" href="javascript:void(0);">
													<div class="border br-5 p-0 text-center m-1">
														<img src="{{asset('assets/img/photos/6.jpg')}}" alt="img" class="mx-auto  br-5">
													</div>
												</a>
											</div>
										</div>
										<a href="javascript:void(0);" class="text-primary h6 mb-0">more images for treal template<span class="ms-1"><i class="fa fa-arrow-right"></i></span></a>
								</div>
							</div>
							<div class="card custom-card">
							    <div class="card-header border-bottom-0">
									<div>
										<h3 class="card-title mb-0 text-dark "><a href="javascript:void(0);" class="text-dark">HTML Admin templates</a></h3>
									</div>
								 </div>
								<div class="card-body  pt-0">
									<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
							<div class="card custom-card">
							    <div class="card-header border-bottom-0">
									<div>
										<h3 class="card-title mb-0 text-dark "><a href="javascript:void(0);" class="text-dark">Best free admin templates</a></h3>
									</div>
								 </div>
								<div class="card-body  pt-0">
									<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
							<div class="text-center search">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
									<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
							</ul>
							</div>
						</div>
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')



    @endsection
