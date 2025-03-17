@extends('layouts.app')

    @section('styles')

		<!-- Internal Select2 css -->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FORM ELEMENT SIZES</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Element Sizes</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">Form Element Sizes</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-12">
												<p>Form control small Size add class <code class="highlighter-rouge">.form-control-sm</code> to <code class="highlighter-rouge">.form-control</code></p>
												<div class="form-group">
													<input type="text" class="form-control form-control-sm" name="input">
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group">
													<label>Form Control Medium Size <code class="highlighter-rouge">.form-control</code></label>
													<input type="text" class="form-control" name="input">
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group">
													<p>Form control small Size add class <code class="highlighter-rouge">.form-control-lg</code> to <code class="highlighter-rouge">.form-control</code></p>
													<input type="text" class="form-control form-control-lg" name="input">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">Checkbox Sizes</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-4">
												<div class="form-group m-0">
													<div class="form-label mb-4">Checkboxes</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
															<span class="custom-control-label">Option 1</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
															<span class="custom-control-label">Option 2</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
															<span class="custom-control-label">Option Disabled</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
															<span class="custom-control-label">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group m-0">
													<div class="form-label mb-4">Checkboxes Medium Sizes</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-checkbox custom-control-md">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
															<span class="custom-control-label custom-control-label-md  tx-17">Option 1</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-md">
															<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
															<span class="custom-control-label custom-control-label-md  tx-17">Option 2</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-md">
															<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
															<span class="custom-control-label custom-control-label-md  tx-17">Option Disabled</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-md">
															<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
															<span class="custom-control-label custom-control-label-md  tx-17">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group m-0">
													<div class="form-label mb-4">Checkboxes Large Size</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-checkbox custom-control-lg">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
															<span class="custom-control-label custom-control-label-lg  tx-20">Option 1</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-lg">
															<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
															<span class="custom-control-label custom-control-label-lg  tx-20">Option 2</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-lg">
															<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
															<span class="custom-control-label custom-control-label-lg  tx-20">Option Disabled</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-lg">
															<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
															<span class="custom-control-label custom-control-label-lg  tx-20">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">Radio Sizes</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-4">
												<div class="form-group ">
													<div class="form-label">Radios</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
															<span class="custom-control-label">Option 1</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option2">
															<span class="custom-control-label">Option 2</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option3" disabled="">
															<span class="custom-control-label">Option Disabled</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios02" value="option4" disabled="" checked="">
															<span class="custom-control-label">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group ">
													<div class="form-label">Medium Radios</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-radio custom-control-md">
															<input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked="">
															<span class="custom-control-label custom-control-label-md  tx-17">Option 1</span>
														</label>
														<label class="custom-control custom-radio custom-control-md">
															<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
															<span class="custom-control-label custom-control-label-md  tx-17">Option 2</span>
														</label>
														<label class="custom-control custom-radio custom-control-md">
															<input type="radio" class="custom-control-input" name="example-radios1" value="option3" disabled="">
															<span class="custom-control-label custom-control-label-md  tx-17">Option Disabled</span>
														</label>
														<label class="custom-control custom-radio custom-control-md">
															<input type="radio" class="custom-control-input" name="example-radios12" value="option4" disabled="" checked="">
															<span class="custom-control-label custom-control-label-md  tx-17">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group ">
													<div class="form-label">Large Radios</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-radio custom-control-lg">
															<input type="radio" class="custom-control-input" name="example-radios2" value="option1" checked="">
															<span class="custom-control-label custom-control-label-lg  tx-20">Option 1</span>
														</label>
														<label class="custom-control custom-radio custom-control-lg">
															<input type="radio" class="custom-control-input" name="example-radios2" value="option2">
															<span class="custom-control-label custom-control-label-lg tx-20">Option 2</span>
														</label>
														<label class="custom-control custom-radio custom-control-lg">
															<input type="radio" class="custom-control-input" name="example-radios2" value="option3" disabled="">
															<span class="custom-control-label custom-control-label-lg  tx-20">Option Disabled</span>
														</label>
														<label class="custom-control custom-radio custom-control-lg">
															<input type="radio" class="custom-control-input" name="example-radios22" value="option4" disabled="" checked="">
															<span class="custom-control-label custom-control-label-lg  tx-20">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">Check Box Sizes Switches</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-4">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description me-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description tx-17 me-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-switch-indicator-lg"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description  tx-20 me-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-xl"></span>
													</label>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description me-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox2" class="custom-switch-input">
														<span class="custom-switch-indicator custom-square"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description  tx-17 me-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox2" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-lg custom-square"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description tx-20 me-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox2" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-switch-indicator-xl custom-square"></span>
													</label>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description me-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-radius"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description  tx-17 me-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-lg custom-radius"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description tx-20 me-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-xl custom-radius"></span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">Radio Button Sizes Switches</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-4">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description me-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description  tx-17 me-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-lg"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description  tx-20 me-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-switch-indicator-xl"></span>
													</label>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description me-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio1" class="custom-switch-input">
														<span class="custom-switch-indicator custom-square"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description tx-17 me-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio1" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-lg custom-square"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description tx-20 me-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio1" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-switch-indicator-xl custom-square"></span>
													</label>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description me-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio2" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-radius"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description tx-17 me-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio2" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-lg custom-radius"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description tx-20 me-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio2" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-xl custom-radius"></span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<!-- row closed -->
					<!--Row-->
					<div class="row">
						<div class="col-xl-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Form Elements With Sizes</h4>
								</div>
								<div class="card-body">
									<div class="row p-0 m-0">
										<div class="col-xl-12 p-0">
											<div class="form-label mb-2 p-0">Form-control small sizes</div>
										</div>
										<div class="col-xl-2">
											<div class="form-group">
												<button class="btn btn-sm btn-primary btn-block">Small</button>
											</div>
										</div>
										<div class="col-xl-2">
											<div class="form-group">
												<input class="form-control form-control-sm" placeholder="from-control-sm" type="text">
											</div>
										</div>
										<div class="col-xl-2">
											<div class="form-group select2-sm">
												<select class="form-select form-select-sm select2 select2-sm select2-no-search" id="inputGroupSelect01">
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
										</div>
										<div class="col-xl-2 ps-1 pe-1">
											<div class="custom-control custom-radio mb-0 mt-1 p-0">
												<label class="custom-control custom-radio custom-control">
													<input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked="">
													<span class="custom-control-label custom-control-label  tx-17">Radio example</span>
												</label>
											</div>
										</div>
										<div class="col-xl-2 ps-1 pe-1">
										<label class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
											<span class="custom-control-label">checkbox example</span>
										</label>
										</div>
										<div class="col-xl-2 ps-1 pe-1">
											<label class="custom-switch form-switch mb-0  p-0">
												<input type="checkbox" name="custom-switch-radio" class="custom-switch-input">
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Toggle example</span>
											</label>
										</div>
									</div>
									<div class="row p-0 m-0">
										<div class="col-xl-12  p-0">
											<div class="form-label mb-2 p-0">Form-control Medium sizes</div>
										</div>
										<div class="col-xl-2">
											<div class="form-group">
												<button class="btn btn-primary btn-block">Medium</button>
											</div>
										</div>
										<div class="col-xl-2">
											<div class="form-group">
												<input class="form-control" placeholder="from-control" type="text">
											</div>
										</div>
										<div class="col-xl-2">
											<div class="form-group">
												<select class="form-select form-select select2 select2-no-search" id="inputGroupSelect02">
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
										</div>
										<div class="col-xl-2 ps-1 pe-1">
											<div class="form-group">
												<div class="custom-control custom-radio-md mb-0 mt-1  p-0">
													<label class="custom-control custom-radio custom-control-md">
														<input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked="">
														<span class="custom-control-label custom-control-label-md  tx-17">Radio example</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col-xl-2 ps-1 pe-1">
											<div class="form-group">
												<label class="custom-control custom-checkbox custom-control-md">
													<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
													<span class="custom-control-label custom-control-label-md  tx-17">checkbox example</span>
												</label>
											</div>
										</div>
										<div class="col-xl-2 ps-1 pe-1">
											<div class="form-group">
												<label class="custom-switch form-switch mb-0  p-0">
													<input type="checkbox" name="custom-switch-radio" class="custom-switch-input">
													<span class="custom-switch-indicator custom-switch-indicator-lg"></span>
													<span class="custom-switch-description">Toggle example</span>
												</label>
											</div>
										</div>
									</div>
									<div class="row p-0 m-0">
										<div class="col-xl-12  p-0">
											<div class="form-label mb-2 p-0">Form-control Large sizes</div>
										</div>
										<div class="col-xl-2">
											<div class="form-group">
												<button class="btn btn-lg btn-primary btn-block">Large</button>
											</div>
										</div>
										<div class="col-xl-2">
											<div class="form-group">
												<input class="form-control form-control-lg" placeholder="from-control-lg" type="text">
											</div>
										</div>
										<div class="col-xl-2">
											<div class="form-group select2-lg">
												<select class="form-select form-select-lg select2 select2-no-search" id="inputGroupSelect03">
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
										</div>
										<div class="col-xl-2 ps-1 pe-1">
											<div class="form-group">
												<div class="custom-control custom-radio-lg mb-0 mt-1  p-0">
													<label class="custom-control custom-radio custom-control-lg">
													<input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked="">
													<span class="custom-control-label custom-control-label-lg  tx-17">Radio example</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col-xl-2 ps-1 pe-1">
											<div class="form-group">
												<label class="custom-control custom-checkbox custom-control-lg">
													<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
													<span class="custom-control-label custom-control-label-lg  tx-20">checkbox example</span>
												</label>
											</div>
										</div>
										<div class="col-xl-2 ps-1 pe-1">
											<div class="form-group">
												<label class="custom-switch form-switch mb-0  p-0">
													<input type="checkbox" name="custom-switch-radio" class="custom-switch-input">
													<span class="custom-switch-indicator custom-switch-indicator-xl"></span>
													<span class="custom-switch-description">Toggle example</span>
												</label>
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

		<!-- Internal Select2.min js -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

    @endsection
