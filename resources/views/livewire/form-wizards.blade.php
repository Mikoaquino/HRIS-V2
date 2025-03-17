@extends('layouts.app')

@section('styles')

        <!--- Internal Select2 css-->
        <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

        <!---Internal Fileupload css-->
        <link href="{{asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

        <!---Internal Fancy uploader css-->
        <link href="{{asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />


    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FORM WIZARD</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
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
										Basic Content Wizard
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div id="wizard1">
										<h3>Personal Information</h3>
										<section>
											<div class="control-group form-group">
												<label class="form-label">Name</label>
												<input type="text" class="form-control required" placeholder="Name">
											</div>
											<div class="control-group form-group">
												<label class="form-label">Email</label>
												<input type="email" class="form-control required" placeholder="Email Address">
											</div>
											<div class="control-group form-group">
												<label class="form-label">Phone Number</label>
												<input type="number" class="form-control required" placeholder="Number">
											</div>
											<div class="control-group form-group mb-0">
												<label class="form-label">Address</label>
												<input type="text" class="form-control required" placeholder="Address">
											</div>
										</section>
										<h3>Billing Information</h3>
										<section>
											<div class="table-responsive mg-t-20">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td>Cart Subtotal</td>
															<td class="text-end">$792.00</td>
														</tr>
														<tr>
															<td><span>Totals</span></td>
															<td class="text-end text-muted"><span>$792.00</span></td>
														</tr>
														<tr>
															<td><span>Order Total</span></td>
															<td><h2 class="price text-end mb-0">$792.00</h2></td>
														</tr>
													</tbody>
												</table>
											</div>
										</section>
										<h3>Payment Details</h3>
										<section>
											<div class="form-group">
												<label class="form-label" >CardHolder Name</label>
												<input type="text" class="form-control" id="name1" placeholder="First Name">
											</div>
											<div class="form-group">
												<label class="form-label">Card number</label>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search for...">
													<span class="input-group-append">
														<button class="btn btn-secondary" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
														<i class="fab fa-cc-mastercard"></i></button>
													</span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<div class="form-group mb-sm-0">
														<label class="form-label">Expiration</label>
														<div class="input-group">
															<input type="number" class="form-control" placeholder="MM" name="expiremonth">
															<input type="number" class="form-control" placeholder="YY" name="expireyear">
														</div>
													</div>
												</div>
												<div class="col-sm-4 ">
													<div class="form-group mb-0">
														<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
														<input type="number" class="form-control" required="">
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Basic Wizard With Validation
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div id="wizard2">
										<h3>Personal Information</h3>
										<section>
											<p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>
											<div class="row row-sm">
												<div class="col-md-5 col-lg-4">
													<label class="form-control-label">Firstname: <span class="tx-danger">*</span></label> <input class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" required="" type="text">
												</div>
												<div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
													<label class="form-control-label">Lastname: <span class="tx-danger">*</span></label> <input class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" required="" type="text">
												</div>
											</div>
										</section>
										<h3>Billing Information</h3>
										<section>
											<p>Wonderful transition effects.</p>
											<div class="form-group wd-xs-300">
												<label class="form-control-label">Email: <span class="tx-danger">*</span></label> <input class="form-control" id="email" name="email" placeholder="Enter email address" required="" type="email">
											</div>
										</section>
										<h3>Payment Details</h3>
										<section>
											<div class="form-group">
												<label class="form-label" >CardHolder Name</label>
												<input type="text" class="form-control" id="name11" placeholder="First Name">
											</div>
											<div class="form-group">
												<label class="form-label">Card number</label>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search for...">
													<span class="input-group-append">
														<button class="btn btn-secondary" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
														<i class="fab fa-cc-mastercard"></i></button>
													</span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<div class="form-group mb-sm-0">
														<label class="form-label">Expiration</label>
														<div class="input-group">
															<input type="number" class="form-control" placeholder="MM" name="expiremonth">
															<input type="number" class="form-control" placeholder="YY" name="expireyear">
														</div>
													</div>
												</div>
												<div class="col-sm-4 ">
													<div class="form-group mb-0">
														<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
														<input type="number" class="form-control" required="">
													</div>
												</div>
											</div>
										</section>
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
										Vertical Orientation Wizard
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div id="wizard3">
										<h3>Personal Information</h3>
										<section>
											<div class="control-group form-group">
												<label class="form-label">Name</label>
												<input type="text" class="form-control required" placeholder="Name">
											</div>
											<div class="control-group form-group">
												<label class="form-label">Email</label>
												<input type="email" class="form-control required" placeholder="Email Address">
											</div>
											<div class="control-group form-group">
												<label class="form-label">Phone Number</label>
												<input type="number" class="form-control required" placeholder="Number">
											</div>
											<div class="control-group form-group mb-2">
												<label class="form-label">Address</label>
												<input type="text" class="form-control required" placeholder="Address">
											</div>
											<div class="mb-2">
												<input type="file" class="dropify" data-height="200" />
											</div>
											<div class="mb-0">
												<input id="demo" type="file" name="files" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
											</div>
										</section>
										<h3>Billing Information</h3>
										<section>
											<div class="table-responsive mg-t-20">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td>Cart Subtotal</td>
															<td class="text-end">$792.00</td>
														</tr>
														<tr>
															<td><span>Totals</span></td>
															<td class="text-end text-muted"><span>$792.00</span></td>
														</tr>
														<tr>
															<td><span>Order Total</span></td>
															<td><h2 class="price text-end mb-0">$792.00</h2></td>
														</tr>
													</tbody>
												</table>
											</div>
										</section>
										<h3>Payment Details</h3>
										<section>
											<div class="form-group">
												<label class="form-label" >CardHolder Name</label>
												<input type="text" class="form-control" id="name12" placeholder="First Name">
											</div>
											<div class="form-group">
												<label class="form-label">Card number</label>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search for...">
													<span class="input-group-append">
														<button class="btn btn-secondary" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
														<i class="fab fa-cc-mastercard"></i></button>
													</span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<div class="form-group mb-sm-0">
														<label class="form-label">Expiration</label>
														<div class="input-group">
															<input type="number" class="form-control" placeholder="MM" name="expiremonth">
															<input type="number" class="form-control" placeholder="YY" name="expireyear">
														</div>
													</div>
												</div>
												<div class="col-sm-4 ">
													<div class="form-group mb-0">
														<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
														<input type="number" class="form-control" required="">
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

        <!--Internal  Select2 js -->
        <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

        <!-- Internal Jquery.steps js -->
        <script src="{{asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
        <script src="{{asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

        <!--Internal  Form-wizard js -->
        <script src="{{asset('assets/js/form-wizard.js')}}"></script>

        <!--Internal Fileuploads js-->
        <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

        <!--Internal Fancy uploader js-->
        <script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

    @endsection
