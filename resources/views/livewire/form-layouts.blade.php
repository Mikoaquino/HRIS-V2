@extends('layouts.app')

    @section('styles')

		<!--- Internal Select2 css-->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FORM LAYOUTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Horizontal Alignment
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="pd-30 pd-sm-20">
										<div class="row row-xs">
											<div class="col-md-5">
												<input class="form-control" placeholder="Enter your username" type="text">
											</div>
											<div class="col-md-5 mg-t-10 mg-md-t-0">
												<input class="form-control" placeholder="Enter your password" type="password">
											</div>
											<div class="col-md mt-4 mt-xl-0">
												<button class="btn btn-primary btn-block">Sign In</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vertical Alignment
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row">
										<div class="col-lg-12">
											<div class=" p-2">
												<div class="form-group">
													<input class="form-control" placeholder="Enter your username" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Enter your password" type="password">
												</div><button class="btn btn-primary pd-x-20">Sign In</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-6 col-md-">
								<div class="card custom-card">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
												Basic Example
										</div>
										<p class="mg-b-20">A form control layout using basic layout.</p>
										<div class="d-flex flex-column pd-30 pd-sm-20">
											<div class="form-group">
												<input class="form-control" placeholder="Enter your username" type="text">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Enter Your Email" type="email">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Enter Your Password" type="password">
											</div>
											<div class="form-group">
												<label class="ckbox">
													<input type="checkbox"><span class="tx-13">I agree terms and conditions</span>
												</label>
											</div>
											<button class="btn ripple btn-primary">Submit</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Left Label Alignment
										</div>
										<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
										<div class="pd-30 pd-sm-20">
											<div class="row row-xs align-items-center mg-b-20">
												<div class="col-md-4">
													<label class="form-label mg-b-0">Firstname</label>
												</div>
												<div class="col-md-8 mg-t-5 mg-md-t-0">
													<input class="form-control" placeholder="Enter your firstname" type="text">
												</div>
											</div>
											<div class="row row-xs align-items-center mg-b-20">
												<div class="col-md-4">
													<label class="form-label mg-b-0">Lastnane</label>
												</div>
												<div class="col-md-8 mg-t-5 mg-md-t-0">
													<input class="form-control" placeholder="Enter your lastname" type="text">
												</div>
											</div>
											<div class="row row-xs align-items-center mg-b-20">
												<div class="col-md-4">
													<label class="form-label mg-b-0">Email</label>
												</div>
												<div class="col-md-8 mg-t-5 mg-md-t-0">
													<input class="form-control" placeholder="Enter your email" type="email">
												</div>
											</div>
											<button class="btn btn-primary pd-x-30 mg-r-5 mg-t-5">Register</button>
											<button class="btn btn-secondary pd-x-30 mg-t-5">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Form Group Wrapper
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="">
										<div class="row row-xs formgroup-wrapper">
											<div class="col-md-6">
												<div class="main-form-group">
													<label class="form-label">Email</label> <input class="form-control" placeholder="Enter your email" type="email" value="me@sprukotechnologies.com">
												</div><!-- main-form-group -->
											</div>
											<div class="col-md-6 mg-t-20 mg-md-t-0">
												<div class="main-form-group">
													<label class="form-label">Password</label> <input class="form-control" placeholder="Enter your password" type="password" value="thisismypassword">
												</div><!-- main-form-group -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Form in Dropdown
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="main-dropdown-form-demo">
										<div class="mg-t-20">
											<button class="btn btn-primary pd-x-20" data-bs-toggle="dropdown">Live Example <i class="icon ion-ios-arrow-down mg-l-5 tx-12"></i></button>
											<div class="dropdown-menu">
												<h6 class="dropdown-title">Subscribe</h6>
												<p class="mg-b-20">Don't miss any update from us.</p>
												<div class="form-group">
													<input class="form-control" placeholder="Enter your fullname" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Enter your email" type="email">
												</div><button class="btn btn-primary btn-block">Subscribe</button>
											</div>
										</div>
									</div><!-- main-dropdown-demo -->
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Form in Modal
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="tx-center">
										<a class="btn btn-primary" data-bs-target="#modaldemo1" data-bs-toggle="modal" href="">View Live Demo</a>
									</div><!-- pd-y-30 -->
									<div class="modal">
										<div class="modal-dialog wd-xl-400" role="document">
											<div class="modal-content">
												<div class="modal-body pd-sm-40">
													<button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
													<h5 class="modal-title mg-b-5">Create New Account</h5>
													<p class="mg-b-20">Let's get you all setup so you can begin using our app.</p>
													<div class="form-group">
														<input class="form-control" placeholder="Firstname" type="text">
													</div>
													<div class="form-group">
														<input class="form-control" placeholder="Lastname" type="text">
													</div>
													<div class="form-group">
														<input class="form-control" placeholder="Phone" type="text">
													</div>
													<div class="form-group">
														<input class="form-control" placeholder="Email" type="text">
													</div>
													<div class="form-group mg-b-25">
														<label class="ckbox mg-b-5"><input type="checkbox"><span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span></label> <label class="ckbox"><input checked type="checkbox"><span class="tx-13">Yes, I want to receive email from your newsletter.</span></label>
													</div><button class="btn btn-primary btn-block">Continue</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Payment Details
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row">
										<div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
											<div class="card card-body pd-20 pd-md-40 border shadow-none">
												<h5 class="card-title mg-b-20">Your Payment Details</h5>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">Name on Card</label> <input class="form-control" required="" type="text">
												</div>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">Card Number</label>
													<div class="pos-relative">
														<input class="form-control pd-r-80" required="" type="text">
														<div class="d-flex pos-absolute t-5 r-10"><img alt="" class="wd-30 mg-r-5" src="{{asset('assets/img/visa.png')}}"> <img alt="" class="wd-30" src="{{asset('assets/img/mastercard.png')}}"></div>
													</div>
												</div>
												<div class="form-group">
													<div class="row row-sm">
														<div class="col-sm-9">
															<label class="main-content-label tx-11 tx-medium tx-gray-600">Expiration Date</label>
															<div class="row row-sm">
																<div class="col-sm-7">
																	<select class="form-control select2-no-search">
																		<option label="Choose one">
																		</option>
																		<option value="January">
																			January
																		</option>
																		<option value="February">
																			February
																		</option>
																		<option value="March">
																			March
																		</option>
																		<option value="April">
																			April
																		</option>
																		<option value="May">
																			May
																		</option>
																	</select>
																</div>
																<div class="col-sm-5 mg-t-10 mg-sm-t-0">
																	<select class="form-control select2-no-search">
																		<option label="Choose one">
																		</option>
																		<option value="2018">
																			2018
																		</option>
																		<option value="2019">
																			2019
																		</option>
																		<option value="2020">
																			2020
																		</option>
																		<option value="2021">
																			2021
																		</option>
																		<option value="2022">
																			2022
																		</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-3 mg-t-20 mg-sm-t-0">
															<label class="main-content-label tx-11 tx-medium tx-gray-600">CVC</label> <input class="form-control" required="" type="text">
														</div>
													</div>
												</div>
												<div class="form-group mg-b-20">
													<label class="ckbox"><input checked type="checkbox"><span class="tx-13">Save my card for future purchases</span></label>
												</div>
												<button class="btn btn-primary btn-block">Complete Payment</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

                    @endsection

                    @section('modal')
                    <!-- modal -->
                    <div id="modaldemo1" class="modal">
                        <div class="modal-dialog wd-xl-400" role="document">
                            <div class="modal-content">
                                <div class="modal-body pd-20 pd-sm-40">
                                    <button type="button" class="close pos-absolute t-15 r-20 tx-26" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h5 class="modal-title mg-b-5">Create New Account</h5>
                                    <p class="mg-b-20">Let's get you all setup so you can begin using our app.</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Firstname">
                                    </div><!-- form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Lastname">
                                    </div><!-- form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div><!-- form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div><!-- form-group -->
                                    <div class="form-group mg-b-25">
                                        <label class="ckbox mg-b-5">
                                            <input type="checkbox">
                                            <span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span>
                                        </label>
                                        <label class="ckbox">
                                            <input type="checkbox" checked>
                                            <span class="tx-13">Yes, I want to receive email from your newsletter.</span>
                                        </label>
                                    </div><!-- form-group -->
                                    <button class="btn btn-primary btn-block">Continue</button>
                                </div><!-- modal-body -->
                            </div><!-- modal-content -->
                        </div><!-- modal-dialog -->
                    </div><!-- modal -->

                    @endsection

    @section('scripts')

		<!-- Form-layouts js -->
		<script src="{{asset('assets/js/form-layouts.js')}}"></script>

		<!--Internal  Select2 js -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    @endsection
