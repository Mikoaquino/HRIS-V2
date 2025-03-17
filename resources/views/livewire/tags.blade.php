@extends('layouts.app')

    @section('styles')

		<!---Internal Input tags css-->
		<link href="{{asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">

		<!-- Select2 css -->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TAGS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tags</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-6 col-lg-12">
							<!-- div -->
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										DEFAULT TAG
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.</p>
									<div class="text-wrap">
										<div class="example">
											<div class="tags">
												<span class="tag">First tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
												<span class="tag">Second tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
												<span class="tag">Third tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
												<span class="tag">Fourth tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="col-xl-6 col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Link Tag
										</div>
										<p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.</p>
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-rounded">First tag<a href="javascript:void(0)" class="tag-addon rounded-pill"><i class="fe fe-x"></i></a></span>
													<span class="tag tag-rounded">Second tag<a href="javascript:void(0)" class="tag-addon rounded-pill"><i class="fe fe-x"></i></a></span>
													<span class="tag tag-rounded">Third tag<a href="javascript:void(0)" class="tag-addon rounded-pill"><i class="fe fe-x"></i></a></span>
													<span class="tag tag-rounded">Fourth tag<a href="javascript:void(0)" class="tag-addon rounded-pill "><i class="fe fe-x"></i></a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="col-xl-6 col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Default Tags Addon
										</div>
										<p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.</p>
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-default bg-light">
														One
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag tag-default  bg-light">
														Two
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag tag-default  bg-light">
														Three
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag tag-default  bg-light">
														Four
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="col-xl-6 col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Colored tags
										</div>
										<p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.</p>
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-primary br-5">primary tag<a href="javascript:void(0)" class="tag-addon bg-primary"><i class="fe fe-x"></i></a> </span>
													<span class="tag tag-secondary br-5">secondary tag<a href="javascript:void(0)" class="tag-addon bg-secondary"><i class="fe fe-x"></i></a> </span>
													<span class="tag tag-success br-5">success tag<a href="javascript:void(0)" class="tag-addon bg-success"><i class="fe fe-x"></i></a> </span>
													<span class="tag tag-warning br-5">warning tag<a href="javascript:void(0)" class="tag-addon bg-warning"><i class="fe fe-x"></i></a> </span>
													<span class="tag tag-teal br-5">teal tag<a href="javascript:void(0)" class="tag-addon bg-teal"><i class="fe fe-x"></i></a> </span>
													<span class="tag tag-danger br-5">danger tag<a href="javascript:void(0)" class="tag-addon bg-danger"><i class="fe fe-x"></i></a> </span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="col-xl-12 col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Input Tags
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website aplication.</p>
									<div class="text-wrap">
										<div class="example">
											<div class="form-group">
												<input type="text" data-role="tagsinput" value="jQuery,Script,Net" class="form-control">
											</div>
											<div class="form-group mb-0">
												<select multiple data-role="tagsinput" class="form-control">
													<option value="jQuery">jQuery</option>
													<option value="Angular">Angular</option>
													<option value="React">React</option>
													<option value="Vue">Vue</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12 col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Multiple select Tags
									</div>
									<p class="mg-b-10">Multiple Select</p><select class="form-control select2" multiple="multiple">
										<option selected value="Firefox">
											Firefox
										</option>
										<option value="Chrome">
											Chrome
										</option>
										<option value="Safari">
											Safari
										</option>
										<option value="Opera">
											Opera
										</option>
										<option value="Internet Explorer">
											Internet Explorer
										</option>
									</select>
								</div>
							</div>
						</div>
						<!--/div-->
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')

		<!-- Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

		<!-- Internal Input tags js-->
		<script src="{{asset('assets/plugins/inputtags/inputtags.js')}}"></script>

    @endsection
