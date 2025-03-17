@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">WISH LIST</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Wish-list</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- ROW-1 OPEN -->
							<div class="col-lg-12 col-xl-12 p-0">
								<div class="row">
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card ">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/1.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (23)</a>
																</div>
																<a class="shop-title fs-18">women party wear dress</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$2,498</span>
																<span class="number-font">$1,967</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 text-muted mt-2 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/2.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (64)</a>
																</div>
																<a class="shop-title fs-18">White Ear buds</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$2,999</span>
																<span class="number-font">$1,999</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 text-muted mt-2 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/3.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (41)</a>
																</div>
																<a class="shop-title fs-18">simple white Chair</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$1,499</span>
																<span class="number-font">$999</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 mt-2 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/4.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (232)</a>
																</div>
																<a class="shop-title fs-18">pink teddy bear</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$498</span>
																<span class="number-font">$225</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 mt-2 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/5.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (143)</a>
																</div>
																<a class="shop-title fs-18">Lence Camara</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$298</span>
																<span class="number-font">$198</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 mt-2 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
												<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/06.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (29)</a>
																</div>
																<a class="shop-title fs-18">Glass with soil gift item</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$2,999</span>
																<span class="number-font">$2,499</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 text-muted mt-2 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/9.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (20)</a>
																</div>
																<a class="shop-title fs-18">Glass Flower pot</a>
															</div>
														</div>
														<div class="row user-social-detail">
															<a href="javascript:void(0);" class="social-profile me-4 rounded text-center">
																<i class="fa fa-google"></i>
															</a>
															<a href="javascript:void(0);" class="social-profile me-4 rounded text-center">
																<i class="fa fa-facebook"></i>
														     </a>
															 <a href="javascript:void(0);" class="social-profile  rounded text-center">
																<i class="fa fa-twitter"></i>
															</a>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$3,498</span>
																<span class="number-font">$2,999</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 mt-2 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/8.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (283)</a>
																</div>
																<a class="shop-title fs-18">Mens party wear t-shirt</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$2,498</span>
																<span class="number-font">$1,967</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 text-muted mt-2 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/9.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (14)</a>
																</div>
																<a class="shop-title fs-18">Glass Flower pot</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$1,499</span>
																<span class="number-font">$1,299</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 mt-2 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/1.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (143)</a>
																</div>
																<a class="shop-title fs-18">Women party wear dress</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$298</span>
																<span class="number-font">$198</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 mt-2 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/3.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (29)</a>
																</div>
																<a class="shop-title fs-18">simple white Chair</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$2,999</span>
																<span class="number-font">$2,499</span>
															</div>
														</div>
														<div>
															<p class="shop-description mt-2 fs-13 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 alert">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center zoom">
													<a href="{{url('shop')}}"><img class="w-100 br-5" src="{{asset('assets/img/ecommerce/07.jpg')}}"  alt="img" ></a>
												</div>
												<div class="card-body px-0 pb-3">
													<div class="row">
														<div class="col-10">
															<div class="cardtitle">
																<div>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-half text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"><i class="fa fa-star-o text-warning fs-16"></i></a>
																	<a href="javascript:void(0);"> (20)</a>
																</div>
																<a class="shop-title fs-18">smooth and soft Kids wear</a>
															</div>
														</div>
														<div class="col-2">
															<div class="cardprice-2">
																<span class="type--strikethrough number-font">$3,498</span>
																<span class="number-font">$2,999</span>
															</div>
														</div>
														<div>
															<p class="shop-description fs-13 mt-2 text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ipsum quia saepe esse.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-center">
												<div class="text-center ps-2 pe-2">
													<a href="{{url('product-cart')}}" class="btn btn-md btn-primary mb-2 ms-2 w-45"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
													<a href="" class="btn btn-md btn-light mb-2 ms-2 w-45" data-bs-dismiss="alert" aria-label="Close">
														<span class="me-2 fs-14">Remove</span>
														<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#495057"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
													</a>
												</div>
										     </div>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-end">
									<ul class="pagination mb-5">
										<li class="disabled page-item">
											<a class="page-link" href="javascript:void(0);">‹</a>
										</li>
										<li class="active page-item">
											<a class="page-link" href="javascript:void(0);">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="javascript:void(0);">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="javascript:void(0);">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="javascript:void(0);">4</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="javascript:void(0);">5</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="javascript:void(0);">›</a>
										</li>
                                    </ul>
                                </div>
                            </div>
                        <!-- COL-END -->

    @endsection

    @section('scripts')

    @endsection
