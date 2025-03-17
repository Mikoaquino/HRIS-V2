@extends('layouts.app')

    @section('styles')

		<!--Internal  Nice-select css  -->
		<link href="{{asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>

		<!-- Internal Select2 css -->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">CART</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cart</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row opened -->
                    <div class="row">
						<div class="col-lg-12 col-xl-9 col-md-12">
							<div class="card">
								<div class="card-body">
									<!-- Shopping Cart-->
									<div class="product-details table-responsive text-nowrap">
										<table class="table table-bordered table-hover mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="text-start">Product</th>
													<th class="w-150">Quantity</th>
													<th>prize</th>
													<th>STATUS</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="media">
															<div class="card-aside-img">
																<img src="{{asset('assets/img/ecommerce/01.jpg')}}" alt="img" class="h-60 w-60">
															</div>
															<div class="media-body">
																<div class="card-item-desc mt-0">
																	<h6 class="font-weight-semibold mt-0 text-uppercase">party wear</h6>
																	<dl class="card-item-desc-1">
																	  <dt>Size: </dt>
																	  <dd>XXL</dd>
																	</dl>
																	<dl class="card-item-desc-1">
																	  <dt>Color: </dt>
																	  <dd>purple color</dd>
																	</dl>
																</div>
															</div>
														</div>
													</td>
												   <td>
													<div class="handle-counter ms-2" id="handleCounter4">
														<button class="counter-minus btn btn-white lh-2 shadow-none"><i class="fe fe-minus"></i></button>
														<input type="text" value="2" class="qty">
														<button class="counter-plus btn btn-white lh-2 shadow-none"><i class="fe fe-plus"></i></button>
													</div>
													</td>
													<td class="text-center text-lg text-medium font-weight-bold  tx-15">$80.00</td>
													<td class="text-center"><span class="badge bg-danger p-1">Out of stock</span></td>
													<td class="text-center">
													   <a class="btn btn-sm btn-danger-light" href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove item" data-bs-container=".btn"><i class="fe fe-trash"></i></a>
													</td>
								                 </tr>
												<tr>
													<td>
														<div class="media">
															<div class="card-aside-img">
																<img src="{{asset('assets/img/ecommerce/09.jpg')}}" alt="img" class="h-60 w-60">
															</div>
															<div class="media-body">
																<div class="card-item-desc mt-0">
																	<h6 class="font-weight-semibold mt-0 text-uppercase">Flower pot</h6>
																	<dl class="card-item-desc-1">
																	  <dt>Size: </dt>
																	  <dd>XL</dd>
																	</dl>
																	<dl class="card-item-desc-1">
																	  <dt>Color: </dt>
																	  <dd>Red color</dd>
																	</dl>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="handle-counter ms-2" id="handleCounter1">
															<button class="counter-minus btn btn-white lh-2 shadow-none"><i class="fe fe-minus"></i></button>
															<input type="text" value="2" class="qty">
															<button class="counter-plus btn btn-white lh-2 shadow-none"><i class="fe fe-plus"></i></button>
														</div>
													</td>
													<td class="text-center text-lg text-medium font-weight-bold  tx-15">$50.30</td>
													<td class="text-center"> <span class="badge bg-success p-1">In stock</span></td>
													<td class="text-center">
														<a class="btn  btn-sm btn-danger-light" href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove item" data-bs-container=".btn"><i class="fe fe-trash"></i></a>
													</td>
								                 </tr>
												<tr>
													<td>
														<div class="media">
															<div class="card-aside-img">
																<img src="{{asset('assets/img/ecommerce/08.jpg')}}" alt="img" class="h-60 w-60">
															</div>
															<div class="media-body">
																<div class="card-item-desc mt-0">
																	<h6 class="font-weight-semibold mt-0 text-uppercase">Mens wear</h6>
																	<dl class="card-item-desc-1">
																	  <dt>Size: </dt>
																	  <dd>M</dd>
																	</dl>
																	<dl class="card-item-desc-1">
																	  <dt>Color: </dt>
																	  <dd>LightPink color</dd>
																	</dl>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="handle-counter ms-2" id="handleCounter2">
															<button class="counter-minus btn btn-white lh-2 shadow-none"><i class="fe fe-minus"></i></button>
															<input type="text" value="2" class="qty">
															<button class="counter-plus btn btn-white lh-2 shadow-none"><i class="fe fe-plus"></i></button>
														</div>
													</td>
													<td class="text-center text-lg text-medium font-weight-bold  tx-15">$79.90</td>
													<td class="text-center"><span class="badge bg-danger p-1">Out of stock</span></td>
													<td class="text-center">
														<a class="btn  btn-sm btn-danger-light" href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove item" data-bs-container=".btn"><i class="fe fe-trash"></i></a>

													</td>
								                 </tr>
												<tr>
													<td  class="">
														<div class="media">
															<div class="card-aside-img">
																<img src="{{asset('assets/img/ecommerce/02.jpg')}}" alt="img" class="h-60 w-60">
															</div>
															<div class="media-body">
																<div class="card-item-desc mt-0">
																	<h6 class="font-weight-semibold mt-0 text-uppercase">Ear phones</h6>
																	<dl class="card-item-desc-1">
																	  <dt>Size: </dt>
																	  <dd>11-12 inches</dd>
																	</dl>
																	<dl class="card-item-desc-1">
																	  <dt>Color: </dt>
																	  <dd>Red color</dd>
																	</dl>
																</div>
															</div>
														</div>
													</td>
													<td class="">
														<div class="handle-counter ms-2" id="handleCounter3">
															<button class="counter-minus btn btn-white lh-2 shadow-none"><i class="fe fe-minus"></i></button>
															<input type="text" value="2" class="qty">
															<button class="counter-plus btn btn-white lh-2 shadow-none"><i class="fe fe-plus"></i></button>
														</div>
													</td>
													<td class="text-center text-lg text-medium font-weight-bold tx-15">$79.90</td>
													<td class="text-center "> <span class="badge bg-success p-1 ">In stock</span></td>
													<td class="text-center ">
														<a class="btn  btn-sm btn-danger-light" href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove item" data-bs-container=".btn"><i class="fe fe-trash"></i></a>
													</td>
								                 </tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<div class="shopping-cart-footer bd-0">
										<div class="column"><a class="btn btn-secondary" href="shop"><i class="fe fe-corner-up-left  mx-2"></i>Back to Shopping</a></div>
										<div class="column">
											<a class="btn btn-primary" href="product-cart"><i class="fe fe-refresh-cw mx-2"></i>Update Cart</a>
											<a class="btn btn-outline-primary" href="check-out"><i class="fe fe-log-in mx-2"></i>Checkout</a>
										</div>
									</div>
								</div>
							</div>
							</div>
							<div class="col-lg-12 col-xl-3 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<form>
											<div class="form-group mb-0"> <label>Have coupon?</label>
												<div class="input-group"> <input type="text" class="form-control coupon" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
											</div>
										</form>
									</div>
								</div>
								<div class="card custom-card cart-details">
									<div class="card-body">
										<h5 class="mb-3 font-weight-bold tx-14">PRICE DETAIL</h5>
										<dl class="dlist-align">
											<dt class="">ITEMS 3</dt>
											<dd class="text-end ms-auto">$ 262.00</dd>
										</dl>
										<dl class="dlist-align">
											<dt>Discount:</dt>
											<dd class="text-end text-danger ms-auto">- $20.00</dd>
										</dl>
										<dl class="dlist-align">
											<dt>Total price:</dt>
											<dd class="text-end ms-auto">$252.97</dd>
										</dl>
										<dl class="dlist-align">
											<dt>Delivery:</dt>
											<dd class="text-end text-success ms-auto">Free</dd>
										</dl>
										<hr>
										<dl class="dlist-align">
											<dt>Total:</dt>
											<dd class="text-end  ms-auto tx-20"><strong>$252.97</strong></dd>
										</dl>
									</div>
										<div class="card-footer">
											<div class="column"><a class="btn btn-primary" href="shop">Continue Shopping</a></div>
										</div>
								</div>
							</div>
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

		<!-- Internal HandleCounter js -->
		<script src="{{asset('assets/js/handleCounter.js')}}"></script>

		<!-- Internal Select2.min js -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

		<!-- Internal Nice-select js-->
		<script src="{{asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
		<script src="{{asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

    @endsection
