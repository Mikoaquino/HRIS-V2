@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">WIDGET NOTIFICATION</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Widget notification</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-danger bg-danger-transparent br-5 bd bd-danger">
									<div class="main-error-wrapper">
										<i class="si si-close mg-b-20 tx-50"></i>
										<h4 class="mg-b-20">Data Not Found.</h4>
										<a class="btn btn-outline-danger btn-sm" href="">Click to view details</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-success bg-success-transparent br-5  bd bd-success">
									<div class="main-error-wrapper">
										<i class="si si-check mg-b-20 tx-50"></i>
										<h4 class="mg-b-20">Success Data</h4>
										<a class="btn btn-outline-success btn-sm" href="">Click to view details</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-warning bg-warning-transparent br-5  bd bd-warning">
									<div class="main-error-wrapper">
										<i class="si si-exclamation mg-b-20 tx-50"></i>
										<h4 class="mg-b-20">Warning Alert</h4>
										<a class="btn btn-outline-warning btn-sm" href="">Click to view details</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-info bg-info-transparent br-5 bd bd-info">
									<div class="main-error-wrapper">
										<i class="si si-info mg-b-20 tx-50"></i>
										<h4 class="mg-b-20">Info Alert</h4>
										<a class="btn btn-outline-info btn-sm" href="">Click to view details</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
					</div>
					<!-- /row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20 bg-danger-transparent alert p-0">
								<div class="card-header text-danger font-weight-bold pt-0">
									<i class="far fa-times-circle"></i> Error Data
									<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"></button>
								</div>
								<div class="card-body text-danger">
									<strong>Oh snap!</strong> Change a few things up and try submitting again.
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20 bg-success-transparent alert p-0">
								<div class="card-header text-success font-weight-bold pt-0">
									<i class="far fa-check-circle"></i> Success Data
									<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"></button>
								</div>
								<div class="card-body text-success">
									<strong>Well done!</strong> You successfully read this important alert message.
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20 bg-warning-transparent alert p-0">
								<div class="card-header text-warning font-weight-bold pt-0">
									<i class="si si-exclamation"></i> warning Data
									<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"></button>
								</div>
								<div class="card-body text-warning">
									<strong>Well done!</strong> You successfully read this important alert message.
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20 bg-info-transparent alert p-0">
								<div class="card-header text-info font-weight-bold pt-0">
									<i class="far fa-question-circle"></i> Info Data
									<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"></button>
								</div>
								<div class="card-body text-info">
									<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
					</div>
					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body bd bd-success text-center rounded">
									<div class="success-widget">
									<i class="si si-check mg-b-20 tx-50 text-success"></i>
										<h3 class="mt-3 text-success">Success!</h3>
										<p class="mt-3 mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body bd bd-info text-center rounded">
									<div class="info-widget">
									<i class="si si-info mg-b-20 tx-50 text-info"></i>
										<h3 class="mt-3 text-info">info!</h3>
										<p class="mt-3 mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body bd bd-danger text-center rounded">
								<i class="si si-close mg-b-20 tx-50 text-danger"></i>
									<div class="danger-widget">
										<h3 class="mt-3 text-danger">Danger!</h3>
										<p class="mt-3 mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body bd bd-warning text-center rounded">
								<i class="si si-exclamation mg-b-20 tx-50 text-warning"></i>
									<div class="warning-widget">
										<h3 class="mt-3 text-warning">Warning!</h3>
										<p class="mt-3 mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
					</div>
					<!-- /row -->
					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body bd bd-success text-center rounded">
									<div class="success-widget">
										<h3 class="text-success">Success!</h3>
										<p class="mt-3 mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body bd bd-info text-center rounded">
									<div class="info-widget">
										<h3 class="text-info">info!</h3>
										<p class="mt-3 mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body bd bd-danger text-center rounded">
									<div class="danger-widget">
										<h3 class="text-danger">Danger!</h3>
										<p class="mt-3 mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body bd bd-warning text-center rounded">
									<div class="warning-widget">
										<h3 class="text-warning">Warning!</h3>
										<p class="mt-3 mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20 bg-danger">
								<div class="card-body text-white">
									<div class="main-error-wrapper">
										<i class="si si-close mg-b-20 tx-50"></i>
										<h4 class="mg-b-0">Data Not Found.</h4>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20 bg-success">
								<div class="card-body text-white">
									<div class="main-error-wrapper">
										<i class="si si-check mg-b-20 tx-50"></i>
										<h4 class="mg-b-0">Submitted Successfully</h4>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20 bg-info">
								<div class="card-body text-white">
									<div class="main-error-wrapper">
										<i class="si si-info mg-b-20 tx-50"></i>
										<h4 class="mg-b-0">Info Alert</h4>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20 bg-warning">
								<div class="card-body text-white">
									<div class="main-error-wrapper">
										<i class="si si-exclamation mg-b-20 tx-50"></i>
										<h4 class="mg-b-0">Warning Alert</h4>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
					</div>
					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-danger">
									<div class="main-error-wrapper">
										<i class="si si-close mg-b-20 tx-50"></i>
										<h4 class="mg-b-0">Data Not Found.</h4>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-success">
									<div class="main-error-wrapper">
										<i class="si si-check mg-b-20 tx-50"></i>
										<h4 class="mg-b-0">Submitted Successfully</h4>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-info">
									<div class="main-error-wrapper">
										<i class="si si-info mg-b-20 tx-50"></i>
										<h4 class="mg-b-0">Info Alert</h4>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						<div class="col-lg-6 col-md-12 col-xl-3">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-warning">
									<div class="main-error-wrapper">
										<i class="si si-exclamation mg-b-20 tx-50"></i>
										<h4 class="mg-b-0">Warning Alert</h4>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
					</div>
					<!-- /row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-6 col-xl-4">
							<div class="card mg-b-20 text-center">
								<div class="card-body h-100">
									<img src="{{asset('assets/img/svgicons/no-data.svg')}}" alt="" class="wd-35p">
									<h5 class="mg-b-10 mg-t-15 tx-18">Items Not Found</h5>
									<a href="javascript:void(0);" class="text-muted">Check The Settings</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-xl-4">
							<div class="card mg-b-20 text-center">
								<div class="card-body h-100">
									<img src="{{asset('assets/img/svgicons/note_taking.svg')}}" alt="" class="wd-35p">
									<h5 class="mg-b-10 mg-t-15 tx-18">Its Empty In Here</h5>
									<a href="javascript:void(0);" class="text-muted">Check The Settings</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-xl-4">
							<div class="card mg-b-20 text-center">
								<div class="card-body h-100">
									<img src="{{asset('assets/img/svgicons/imac.svg')}}" alt="" class="wd-40p">
									<h5 class="mg-b-10 mg-t-15 tx-18">No Site Selected</h5>
									<a href="javascript:void(0);" class="text-muted">Check The Settings</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')



    @endsection
