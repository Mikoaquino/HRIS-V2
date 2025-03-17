@extends('layouts.app')

    @section('styles')

		<!-- Internal Nice-select css  -->
		<link href="{{asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SHOP</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Products</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-xl-9 col-lg-9 col-md-12">
							<div class="row row-sm">
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
											   <a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/9.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/09.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" class="primary-gradient me-2" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" class="secondary-gradient me-2" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" class="info-gradient" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">Glass Flower pot</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$55 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$59</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/8.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/08.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist" class="primary-gradient me-2"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fas fa-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">Mens party wear t-shirt</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$40 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$59</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/6.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/06.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist" class="primary-gradient me-2"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fas fa-eye"></i></a></li>
											    </ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">glass with soil gift item</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$95 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$59</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/1.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/01.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist" class="primary-gradient me-2"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fas fa-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">women party wear dress</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$80 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$59</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/02.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/2.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist" class="primary-gradient me-2"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fas fa-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">White Ear buds</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$35 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$59</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/3.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/03.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist" class="primary-gradient me-2"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fas fa-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">simple white Chair</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$50 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$59</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/4.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/04.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist"><a href="{{url('wish-list')}}" class="primary-gradient me-2"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fas fa-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">pink teddy bear</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$45 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$59</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/5.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/05.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist" class="primary-gradient me-2"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fas fa-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">Lence Camara</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$55 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$59</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/7.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/07.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist" class="primary-gradient me-2"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fas fa-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">smooth and soft Kids wear</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$70 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$59</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/11.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/10.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist" class="primary-gradient me-2"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fas fa-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">Branded Alaram clock</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$80 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$70</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/13.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/12.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist" class="primary-gradient me-2"><i class="fa fa-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fas fa-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">Branded black headset</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$550 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$239</span></h4>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3  col-sm-6">
									<div class="card">
										<div class="card-body h-100  product-grid6">
											<div class="pro-img-box product-image">
												<a href="{{url('product-details')}}">
													<img class=" pic-1" src="{{asset('assets/img/ecommerce/15.jpg')}}" alt="product-image">
													<img class="pic-2" src="{{asset('assets/img/ecommerce/14.jpg')}}" alt="product-image-1">
												</a>
												<ul class="icons">
													<li><a href="{{url('wish-list')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Wishlist" class="primary-gradient me-2"><i class="fe fe-heart"></i></a></li>
													<li><a href="{{url('product-cart')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Add to Cart" class="secondary-gradient me-2"><i class="fe fe-shopping-cart"></i></a></li>
													<li><a href="{{url('product-details')}}" data-bs-placement="top" data-bs-toggle="tooltip" title="Quick View" class="info-gradient"><i class="fe fe-eye"></i></a></li>
											</ul>
											</div>
											<div class="text-center pt-2">
												<h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">Colorful coffee cup</h3>
												<span class="tx-15 ms-auto">
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star text-warning"></i>
													<i class="ion ion-md-star-half text-warning"></i>
													<i class="ion ion-md-star-outline text-warning"></i>
												</span>
												<h4 class="h5 mb-0 mt-1 text-center font-weight-bold  tx-22">$60 <span class="text-secondary font-weight-normal tx-13 ms-1 prev-price">$49</span></h4>

											</div>
										</div>
									</div>
								</div>
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
						</div>

					<div class="col-xl-3 col-lg-3 col-md-12 mb-3 mb-md-0">
							<div class="card">
								<div class="card-body p-2">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search ...">
										<span class="input-group-append">
											<button class="btn btn-primary" type="button">Search</button>
										</span>
									</div>
								</div>
							</div>
					   <div class="card">
							<div class="card-header">
								<h3 class="card-title">
									Colors
								</h3>
							</div>
							<div class="card-body">
								<div class="row gutters-xs">
									<div class="col-auto">
										<label class="colorinput">
											<input name="color" type="radio" value="azure" class="colorinput-input" checked="">
											<span class="colorinput-color bg-azure"></span>
										</label>
									</div>
									<div class="col-auto">
										<label class="colorinput">
											<input name="color" type="radio" value="indigo" class="colorinput-input">
											<span class="colorinput-color bg-indigo"></span>
										</label>
									</div>
									<div class="col-auto">
										<label class="colorinput">
											<input name="color" type="radio" value="purple" class="colorinput-input">
											<span class="colorinput-color bg-purple"></span>
										</label>
									</div>
									<div class="col-auto">
										<label class="colorinput">
											<input name="color" type="radio" value="pink" class="colorinput-input">
											<span class="colorinput-color bg-pink"></span>
										</label>
									</div>
									<div class="col-auto">
										<label class="colorinput">
											<input name="color" type="radio" value="red" class="colorinput-input">
											<span class="colorinput-color bg-red"></span>
										</label>
									</div>
									<div class="col-auto">
										<label class="colorinput">
											<input name="color" type="radio" value="orange" class="colorinput-input">
											<span class="colorinput-color bg-orange"></span>
										</label>
									</div>
									<div class="col-auto">
										<label class="colorinput">
											<input name="color" type="radio" value="yellow" class="colorinput-input">
											<span class="colorinput-color bg-yellow"></span>
										</label>
									</div>
									<div class="col-auto">
										<label class="colorinput">
											<input name="color" type="radio" value="lime" class="colorinput-input">
											<span class="colorinput-color bg-lime"></span>
										</label>
									</div>
									<div class="col-auto">
										<label class="colorinput">
											<input name="color" type="radio" value="green" class="colorinput-input">
											<span class="colorinput-color bg-green"></span>
										</label>
									</div>
									<div class="col-auto">
										<label class="colorinput">
											<input name="color" type="radio" value="teal" class="colorinput-input">
											<span class="colorinput-color bg-teal"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header border-bottom pt-3 pb-3 mb-0 font-weight-bold text-uppercase">Category</div>
								<div class="card-body pb-0">
									<div class="form-group">
										<label class="form-label">Mens</label>
										<select name="beast" id="select-beast" class="form-control  nice-select  custom-select">
											<option value="0">--Select--</option>
											<option value="1">Foot wear</option>
											<option value="2">Top wear</option>
											<option value="3">Bootom wear</option>
											<option value="4">Men's Groming</option>
											<option value="5">Accessories</option>
										</select>
									</div>
									<div class="form-group mt-2">
										<label class="form-label">Women</label>
										<select name="beast" id="select-beast1" class="form-control  nice-select  custom-select">
											<option value="0">--Select--</option>
											<option value="1">Western wear</option>
											<option value="2">Foot wear</option>
											<option value="3">Top wear</option>
											<option value="4">Bootom wear</option>
											<option value="5">Beuty Groming</option>
											<option value="6">Accessories</option>
											<option value="7">jewellery</option>
										</select>
									</div>
									<div class="form-group mt-2">
										<label class="form-label">Baby & Kids</label>
										<select name="beast" id="select-beast2" class="form-control  nice-select  custom-select">
											<option value="0">--Select--</option>
											<option value="1">Boys clothing</option>
											<option value="2">girls Clothing</option>
											<option value="3">Toys</option>
											<option value="4">Baby Care</option>
											<option value="5">Kids footwear</option>
										</select>
									</div>
									<div class="form-group mt-2">
										<label class="form-label">Electronics</label>
										<select name="beast" id="select-beast3" class="form-control  nice-select  custom-select">
											<option value="0">--Select--</option>
											<option value="1">Mobiles</option>
											<option value="2">Laptops</option>
											<option value="3">Gaming & Accessories</option>
											<option value="4">Health care Appliances</option>
										</select>
									</div>
									<div class="form-group mt-2">
										<label class="form-label">Sport,Books & More </label>
										<select name="beast" id="select-beast4" class="form-control  nice-select  custom-select">
											<option value="0">--Select--</option>
											<option value="1">Stationery</option>
											<option value="2">Books</option>
											<option value="3">Gaming</option>
											<option value="4">Music</option>
											<option value="5">Exercise & fitness</option>
										</select>
									</div>
								</div>
								<div class="card-header border-bottom border-top pt-3 pb-3 mb-0 font-weight-bold text-uppercase rounded-0">Rating</div>
								<div class="card-body">
									<form >
										<div class="form-group">
											<label>Brand</label>
											<select class="form-control nice-select">
												<option>Wallmart</option>
												<option>Catseye</option>
												<option>Moonsoon</option>
												<option>Textmart</option>
											</select>
										</div>
										<div class="form-group">
											<label>Type</label>
											<select class="form-control nice-select">
												<option>Small</option>
												<option>Medium</option>
												<option>Large</option>
												<option>Extra Large</option>
											</select>
										</div>
									</form>
								</div>
								<div class="card-header border-bottom border-top pt-3 pb-3 mb-0 font-weight-bold text-uppercase rounded-0">Rating</div>
								<div class="py-2 px-3">
									<label class="p-1 mt-2 d-flex align-items-center">
										<span class="check-box mb-0">
											<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
										</span>
										<span class="ms-3 tx-16 my-auto">
											<i class="ion ion-md-star  text-warning"></i>
											<i class="ion ion-md-star  text-warning"></i>
											<i class="ion ion-md-star  text-warning"></i>
											<i class="ion ion-md-star  text-warning"></i>
											<i class="ion ion-md-star  text-warning"></i>
										</span>
									</label>
									<label class="p-1 mt-2 d-flex align-items-center">
										<span class="check-box mb-0">
											<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
										</span>
										<span class="ms-3 tx-16 my-auto">
											<i class="ion ion-md-star  text-warning"></i>
											<i class="ion ion-md-star  text-warning"></i>
											<i class="ion ion-md-star  text-warning"></i>
											<i class="ion ion-md-star  text-warning"></i>
										</span>
									</label>
									<label class="p-1 mt-2 d-flex align-items-center">
										<span class="check-box mb-0">
											<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
										</span>
										<span class="ms-3 tx-16 my-auto">
											<i class="ion ion-md-star  text-warning"></i>
											<i class="ion ion-md-star  text-warning"></i>
											<i class="ion ion-md-star  text-warning"></i>
										</span>
									</label>
									<label class="p-1 mt-2 d-flex align-items-center">
										<span class="checkbox mb-0">
											<span class="check-box">
												<span class="ckbox"><input type="checkbox"><span></span></span>
											</span>
										</span>
										<span class="ms-3 tx-16 my-auto">
											<i class="ion ion-md-star  text-warning"></i>
											<i class="ion ion-md-star  text-warning"></i>
										</span>
									</label>
									<label class="p-1 mt-2 d-flex align-items-center">
										<span class="checkbox mb-0">
											<span class="check-box">
												<span class="ckbox"><input type="checkbox"><span></span></span>
											</span>
										</span>
										<span class="ms-3 tx-16 my-auto">
											<i class="ion ion-md-star  text-warning"></i>
										</span>
									</label>
									<button class="btn btn-primary mt-2 mb-2 pb-2" type="submit">Filter</button>
								</div>
							</div>
						</div>
					</div>
                </div>
                <!-- row closed -->

    @endsection

    @section('scripts')

		<!-- Internal Nice-select js-->
		<script src="{{asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
		<script src="{{asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

    @endsection
