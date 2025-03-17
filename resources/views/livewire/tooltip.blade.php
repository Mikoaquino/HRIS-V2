@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TOOLTIPS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">ELements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tooltips</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<!-- div -->
							<div class="card mg-b-20" id="Tooltip">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Default Tooltip
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="main-content-label main-content-label-sm mg-b-10">
										Static Example
									</div>
									<div class="tooltip-static-demo mg-b-20">
										<div class="row row-sm">
											<div class="col-sm-6 col-lg-3">
												<div class="tooltip bs-tooltip-top" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the top
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<div class="tooltip bs-tooltip-bottom" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the bottom
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<div class="tooltip bs-tooltip-start" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the left
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<div class="tooltip bs-tooltip-end" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the right
													</div>
												</div>
											</div>
										</div>
									</div><!-- tooltip-static-demo -->
									<div class="main-content-label main-content-label-sm mg-b-10">
										Example
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-sm tx-center">
												<div class="col-sm-6 col-lg-3">
													<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<button class="btn btn-primary" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<button class="btn btn-primary" data-bs-placement="left" data-bs-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<button class="btn btn-primary" data-bs-placement="right" data-bs-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /div -->

							<!--div-->
							<div class="card mg-b-20" id="Tooltip2">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Colored Tooltip
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="main-content-label main-content-label-sm mg-b-10">
										Static Example
									</div>
									<div class="tooltip-static-demo mg-b-20">
										<div class="row row-sm">
											<div class="col-sm-6 col-lg-3">
												<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the top
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<div class="tooltip tooltip-secondary bs-tooltip-bottom" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the bottom
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<div class="tooltip tooltip-primary1 bs-tooltip-start" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the left
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<div class="tooltip tooltip-secondary1 bs-tooltip-end" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the right
													</div>
												</div>
											</div>
										</div>
									</div><!-- tooltip-static-demo -->
									<div class="main-content-label main-content-label-sm mg-b-10">
										Example
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="bg-gray-200 pd-20">
												<div class="row row-sm tx-center">
												<div class="col-sm-6 col-lg-3">
													<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<button class="btn btn-primary" data-bs-placement="bottom" data-bs-toggle="tooltip-secondary" title="Tooltip on bottom" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<button class="btn btn-primary" data-bs-placement="left" data-bs-toggle="tooltip-primary1" title="Tooltip on left" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<button class="btn btn-primary" data-bs-placement="right" data-bs-toggle="tooltip-secondary1" title="Tooltip on right" type="button">Hover me</button>
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')

		<!-- tootip js -->
		<script src="{{asset('assets/js/tooltip.js')}}"></script>

    @endsection
