@extends('layouts.app')

    @section('styles')

		<!--Internal  Nice-select css  -->
		<link href="{{asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">CHECKOUT</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">ECommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Checkout</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
						<div class="row">
							<div class="col-xl-12">
								<div class="card custom-card">
									<div class="card-header bg-transparent border-bottom-0">
										<div>
											<label class="main-content-label mb-2">Checkout</label> <span class="d-block tx-12 mb-0 text-muted">The Project Budget is a tool used by project managers to estimate the total cost of a project</span>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6 mx-auto">
												<div class="checkout-steps wrapper">
													<div id="checkoutsteps">
														<!-- SECTION 1 -->
														<h4>Signin</h4>
														<section>
															<form>
																<h5 class="text-start mb-2">Signin to Your Account</h5>
																<p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover and connect with the global community</p>
																<div class="form-group text-start">
																	<label>Email</label>
																	<input class="form-control" placeholder="Enter your email" type="text">
																</div>
																<div class="form-group text-start">
																	<label>Password</label>
																	<input class="form-control" placeholder="Enter your password" type="password">
																</div>
																<button class="btn ripple btn-primary btn-block">Sign In</button>
															</form>
														</section> <!-- SECTION 2 -->
														<h4>Billing</h4>
														<section>
															<form class="needs-validation" novalidate="">
																<h5 class="text-start mb-2">Billing Information</h5>
																<p class="mb-4 text-muted tx-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
																<div class="row">
																	<div class="col-md-6 mb-3">
																		<label for="firstName">First name</label>
																		<input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
																		<div class="invalid-feedback">Valid first name is required.</div>
																	</div>
																	<div class="col-md-6 mb-3">
																		<label for="lastName">Last name</label>
																		<input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
																		<div class="invalid-feedback">Valid last name is required.</div>
																	</div>
																</div>
																<div class="mb-3">
																	<label for="address">Address</label>
																	<input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
																	<div class="invalid-feedback">Please enter your shipping address.</div>
																</div>
																<div class="mb-3">
																	<label for="address2">Address 2 <span class="text-muted">(Optional)</span>
																	</label>
																	<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
																</div>
																<div class="mb-3">
																	<label for="mobile">Mobile Number</label>
																	<input type="text" class="form-control" id="mobile">
																</div>
																<div class="row">
																	<div class="col-md-5 mb-3">
																		<label for="country">Country</label>
																		<select class="custom-select d-block w-100" id="country" required="">
																			<option value="">Choose...</option>
																			<option>United States</option>
																		</select>
																		<div class="invalid-feedback">Please select a valid country.</div>
																	</div>
																	<div class="col-md-4 mb-3">
																		<label for="state">State</label>
																		<select class="custom-select d-block w-100" id="state" required="">
																			<option value="">Choose...</option>
																			<option>California</option>
																		</select>
																		<div class="invalid-feedback">Please provide a valid state.</div>
																	</div>
																	<div class="col-md-3 mb-3">
																		<label for="zip">Zip</label>
																		<input type="text" class="form-control" id="zip" placeholder="" required="">
																		<div class="invalid-feedback">Zip code required.</div>
																	</div>
																</div>
																<hr class="mb-4">
																<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
															</form>
														</section> <!-- SECTION 3 -->
														<h4>Order</h4>
														<section>
															<h5 class="text-start mb-2">Your Order</h5>
															<p class="mb-4 text-muted tx-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
															<div class="product">
																<div class="item flex-wrap">
																	<div class="left"> <a href="javascript:void(0);" class="thumb radius"> <img src="{{asset('assets/img/ecommerce/09.jpg')}}" alt="" class="radius"> </a>
																		<div class="purchase">
																			<h6> <a href="javascript:void(0);">Flowerpot</a> </h6>
																			<div class="d-flex flex-wrap  mt-2">
																				<div class="mt-2 product-title tx-12">Quantity:</div>
																				<div class="handle-counter ms-2" id="handleCounter1">
																					<button class="counter-minus btn btn-outline-light border"><i class="fe fe-minus"></i></button>
																					<input type="text" value="2" class="qty">
																					<button class="counter-plus btn btn-outline-light border"><i class="fe fe-plus"></i></button>
																				</div>
																			</div>
																		</div>
																	</div> <span class="price tx-20">$290</span>
																</div>
																<div class="item flex-wrap">
																	<div class="left"> <a href="javascript:void(0);" class="thumb radius"> <img src="{{asset('assets/img/ecommerce/03.jpg')}}" alt="" class="radius"> </a>
																		<div class="purchase">
																			<h6> <a href="javascript:void(0);">white chair</a> </h6>
																			<div class="d-flex flex-wrap mt-2">
																				<div class="mt-2 product-title tx-12">Quantity:</div>
																				<div class="handle-counter ms-2" id="handleCounter2">
																					<button class="counter-minus btn btn-outline-light border"><i class="fe fe-minus"></i></button>
																					<input type="text" value="2" class="qty">
																					<button class="counter-plus btn btn-outline-light border"><i class="fe fe-plus"></i></button>
																				</div>
																			</div>
																		</div>
																	</div> <span class="price tx-20">$124</span>
																</div>
															</div>
															<div class="checkout">
																<div class="subtotal"> <span class="heading">Subtotal</span> <span class="total tx-20 font-weight-bold">$364</span> </div>
															</div>
														</section><!-- SECTION 4 -->
														<h4>Payments</h4>
														<section>
															<div class="">
																<h5 class="text-start mb-2">Payments</h5>
																<p class="mb-4 text-muted tx-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
															</div>
															<div class="card-pay">
																<ul class="tabs-menu nav">
																	<li class=""><a href="#tab20" class="active" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
																	<li><a href="#tab21" data-bs-toggle="tab" class=""><i class="fab fa-paypal"></i>  Paypal</a></li>
																	<li><a href="#tab22" data-bs-toggle="tab" class=""><i class="fa fa-university"></i>  Bank Transfer</a></li>
																</ul>
																<div class="tab-content">
																	<div class="tab-pane active show" id="tab20">
																		<div class="bg-danger-transparent-2 text-danger py-3 br-3 mb-4" role="alert">Please Enter Valid Details</div>
																		<div class="form-group">
																			<label class="form-label">CardHolder Name</label>
																			<input type="text" class="form-control" placeholder="First Name">
																		</div>
																		<div class="form-group">
																			<label class="form-label">Card number</label>
																			<div class="input-group">
																				<input type="text" class="form-control" placeholder="Search for...">
																				<span class="input-group-append">
																					<button class="btn btn-primary box-shadow-0" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
																					<i class="fab fa-cc-mastercard"></i></button>
																				</span>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-sm-8">
																				<div class="form-group">
																					<label class="form-label">Expiration</label>
																					<div class="input-group">
																						<input type="number" class="form-control" placeholder="MM" name="Month">
																						<input type="number" class="form-control" placeholder="YY" name="Year">
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-4">
																				<div class="form-group">
																					<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
																					<input type="number" class="form-control" required="">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab21">
																		<p class="mt-4">Paypal is easiest way to pay online</p>
																		<p><a href="javascript:void(0);" class="btn btn-primary"><i class="fab fa-paypal"></i> Log in my Paypal</a></p>
																		<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
																	</div>
																	<div class="tab-pane" id="tab22">
																		<p class="mt-4">Bank account details</p>
																		<dl class="card-text">
																		  <dt>BANK: </dt>
																		  <dd> THE UNION BANK 0456</dd>
																		</dl>
																		<dl class="card-text">
																		  <dt>Account number: </dt>
																		  <dd> 67542897653214</dd>
																		</dl>
																		<dl class="card-text">
																		  <dt>IBAN: </dt>
																		  <dd>543218769</dd>
																		</dl>
																		<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
																	</div>
																</div>
															</div>
														</section>
														<h4>Finished</h4>
														<section class="text-center">
															<div class="">
																<h5 class="text-center mb-4">Your order Confirmed!</h5>
															</div>
															<svg class="wd-100 ht-100 mx-auto justify-content-center mb-3 text-center" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
																<circle class="path circle" fill="none" stroke="#22c03c" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
																<polyline class="path check" fill="none" stroke="#22c03c" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
															</svg>
															<p class="success pl-5 pr-5">Order placed successfully. Your order will be dispacted soon. meanwhile you can track your order in my order section.</p>
														</section>
													</div>
												</div>
										   </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

    @endsection

    @section('scripts')

		<!-- Jquery-steps js -->
		<script src="{{asset('assets/plugins/checkout-jquery-steps/jquery.steps.min.js')}}"></script>
		<script src="{{asset('assets/js/checkout-jquery-steps.js')}}"></script>

		<!--Internal  Nice-select js-->
		<script src="{{asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
		<script src="{{asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

		<!-- Internal HandleCounter js -->
		<script src="{{asset('assets/js/handleCounter.js')}}"></script>

    @endsection
