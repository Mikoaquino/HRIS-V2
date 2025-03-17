@extends('layouts.app')

    @section('styles')

		<!-- INTERNAL Select2 css -->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />

		<!-- INTERNAL Data table css -->
		<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}"  rel="stylesheet">
		<link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">DASHBOARD</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sales</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-9 col-lg-12 col-md-12 col-sm-12">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
								<div class="card px-3 ps-4">
									<div class="row index1">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
											<div class="row border-end bd-xs-e-0 p-3">
												<div class="col-3 d-flex align-items-center justify-content-center">
													<div class="circle-icon bg-primary text-center align-self-center overflow-hidden shadow">
														<i class="fe fe-shopping-bag tx-15 text-white"></i>
													</div>
												</div>
												<div class="col-9 py-0">
													<div class="pt-4 pb-3">
														<div class="d-flex">
															<h6 class="mb-2 tx-12">Today Orders</h6>
															<span class="badge bg-success-transparent text-success font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>0.11%</span>
														</div>
														<div class="pb-0 mt-0">
															<div class="d-flex">
																<h4 class="tx-18 font-weight-semibold mb-0">5,472</h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
											<div class="row border-end bd-md-e-0 bd-xs-e-0 bd-lg-e-0 bd-xl-e-0  p-3">
												<div class="col-3 d-flex align-items-center justify-content-center">
													<div class="circle-icon bg-warning text-center align-self-center overflow-hidden shadow">
														<i class="fe fe-dollar-sign tx-15 text-white"></i>
													</div>
												</div>
												<div class="col-9">
													<div class="pt-4 pb-3">
														<div class="d-flex">
															<h6 class="mb-2 tx-12">Today Earnings</h6>
															<span class="badge bg-danger-transparent text-danger font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>0.23%</span>
														</div>
														<div class="pb-0 mt-0">
															<div class="d-flex">
																<h4 class="tx-18 font-weight-semibold mb-0">$47,589</h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
											<div class="row border-end bd-xs-e-0  p-3">
												<div class="col-3 d-flex align-items-center justify-content-center">
													<div class="circle-icon bg-secondary text-center align-self-center overflow-hidden shadow">
														<i class="fe fe-external-link tx-15 text-white"></i>
													</div>
												</div>
												<div class="col-9">
													<div class="pt-4 pb-3">
														<div class="d-flex">
															<h6 class="mb-2 tx-12">Profit Gain</h6>
															<span class="badge bg-success-transparent text-success font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>1.57%</span>
														</div>
														<div class="pb-0 mt-0">
															<div class="d-flex">
																<h4 class="tx-18 font-weight-semibold mb-0">$8,943</h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
											<div class="row  p-3">
												<div class="col-3 d-flex align-items-center justify-content-center">
													<div class="circle-icon bg-info text-center align-self-center overflow-hidden shadow">
														<i class="fe fe-credit-card tx-15 text-white"></i>
													</div>
												</div>
												<div class="col-9">
													<div class="pt-4 pb-3">
														<div class="d-flex	">
															<h6 class="mb-2 tx-12">Total Earnings</h6>
															<span class="badge bg-success-transparent text-success font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>0.45%</span>
														</div>
														<div class="pb-0 mt-0">
															<div class="d-flex">
																<h4 class="tx-18 font-weight-semibold mb-0">$57.12M</h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-8">
										<div class="card custom-card overflow-hidden">
											<div class="card-header border-bottom-0 d-flex">
												<h3 class="card-title mb-2 ">Sales Activity</h3>
												<div class="card-options ms-auto">
													<div class="btn-group p-0">
														<button class="btn btn-outline-light btn-sm" type="button">Week</button>
														<button class="btn btn-light btn-sm" type="button">Month</button>
														<button class="btn btn-outline-light btn-sm" type="button">Year</button>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div class="row mb-2 ps-lg-5">
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
														<p class="mb-1">Total Sales</p>
														<h5 class="mb-1">$52,618</h5>
														<p class="tx-11 text-muted">This month<span class="text-success ms-2"><i class="fa fa-caret-up me-2"></i><span class="badge bg-success text-white tx-11">0.9%</span></span></p>
													</div>
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
														<p class=" mb-1">Total Sales</p>
														<h5 class="mb-1">$11,197</h5>
														<p class="tx-11 text-muted">This Week<span class="text-danger ms-2"><i class="fa fa-caret-down me-2"></i><span class="badge bg-danger text-white tx-11">0.15%</span></span></p>
													</div>
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
														<p class=" mb-1">Total Sales</p>
														<h5 class="mb-1">$1,143</h5>
														<p class="tx-11 text-muted">Today<span class="text-success ms-2"><i class="fa fa-caret-up me-2"></i><span class="badge bg-success text-white tx-11">0.11%</span></span></p>
													</div>
												</div>
												<div id="statistics2"></div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-lg-12 col-xl-4">
										<div class="card">
											<div class="card-header bg-transparent pb-0">
												<div>
													<h3 class="card-title mb-2">Timeline</h3>
												</div>
											</div>
											<div class="card-body mt-0">
												<div class="latest-timeline mt-4">
													<ul class="timeline mb-0">
														<li>
															<div class="featured_icon1 danger">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">11.43 pm</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Anita Letterback</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
														<li>
															<div class="featured_icon1 success">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">12.22 am</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Paddy O'Furniture</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
														<li>
															<div class="featured_icon1 primary">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">08.11 pm</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark">Olive Yew</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
														<li>
															<div class="featured_icon1 warning">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">9.45 pm</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Maureen Biologist</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt. </p>
														</li>
														<li>
															<div class="featured_icon1 teal">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">12.09 am</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Peg Legge</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
														<li>
															<div class="featured_icon1 secondary">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">05.28 pm</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Letterbac</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
														<li>
															<div class="featured_icon1 info">
															</div>
														</li>
														<li class="mt-0 activity pb-4">
															<div><span class="tx-11 text-muted float-end">9.10 pm</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Anita Letterback</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-4">
										<div class="card">
											<div class="card-header pb-3">
												<h3 class="card-title mb-2">COUNTRY STATISTICS</h3>
											</div>
											<div class="card-body p-0 customers mt-1">
												<div class="country-card pt-0">
													<div class="mb-4">
														<div class="d-flex">
															<span class="tx-13 font-weight-semibold">India</span>
															<div class="ms-auto"><span class="text-danger mx-1"><i class="fe fe-trending-down"></i></span><span class="number-font">$32,879</span> (65%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-primary wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
													<div class="mb-4">
														<div class="d-flex mb-1">
															<span class="tx-13 font-weight-semibold">Russia</span>
															<div class="ms-auto"><span class="text-info mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$22,710</span> (55%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-info wd-50p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
													<div class="mb-4">
														<div class="d-flex">
															<span class="tx-13 font-weight-semibold">Canada</span>
															<div class="ms-auto"><span class="text-danger mx-1"><i class="fe fe-trending-down"></i></span><span class="number-font">$56,291</span> (69%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-secondary wd-80p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
													<div class="mb-4">
														<div class="d-flex">
															<span class="tx-13 font-weight-semibold">Brazil</span>
															<div class="ms-auto"><span class="text-success mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$34,209</span> (60%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-warning wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
													<div class="mb-4">
														<div class="d-flex">
															<span class="tx-13 font-weight-semibold">United States</span>
															<div class="ms-auto"><span class="text-success mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$45,870</span> (86%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-teal wd-80p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
													<div class="mb-3">
														<div class="d-flex">
															<span class="tx-13 font-weight-semibold">Germany</span>
															<div class="ms-auto"><span class="text-success mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$67,357</span> (73%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-success wd-70p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-12 col-lg-12">
										<div class="card">
											<div class="card-header pb-0">
												<h3 class="card-title mb-2">Weekly Visitors</h3>
											</div>
											<div class="card-body pb-0">
												<div class="row mb-4">
													<div class="col-6">
														<div class="text-muted tx-12 text-center mb-2">Average Male Visitors</div>
														<div class="d-flex justify-content-center align-items-center">
															<span class="me-3 tx-26 font-weight-semibold">2,132</span>
															<span class="text-success font-weight-semibold"><i class="fa fa-caret-up me-2"></i>0.23%</span>
														</div>
													</div>
													<div class="col-6">
														<div class="text-muted tx-12 text-center mb-2">Average Female Visitors</div>
														<div class="d-flex justify-content-center align-items-center">
															<span class="me-3 tx-26 font-weight-semibold">1,053</span>
															<span class="text-danger font-weight-semibold"><i class="fa fa-caret-down me-2"></i>0.11%</span>
														</div>
													</div>
												</div>
												<div id="Viewers1"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-12 col-lg-12">
										<div class="card">
											<div class="card-header pb-3">
												<h3 class="card-title mb-2">MAIN TASKS</h3>
											</div>
											<div class="card-body p-0 customers mt-1">
												<div class="">
													<label class="p-2 d-flex">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															accurate information at any given point.
														</span>
														<span class="ms-auto"><span class="badge badge-primary font-weight-semibold px-2 py-1 tx-11 me-2">Today</span></span>
													</label>
													<label class="p-2 mt-2 d-flex">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															sharing the information with clients or stakeholders.
														</span>
														<span class="ms-auto"><span class="badge badge-primary font-weight-semibold px-2 py-1 tx-11 me-2">Today</span></span>
													</label>
													<label class="p-2 mt-2 d-flex">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															Hearing the information and responding .
														</span>
														<span class="ms-auto"><span class="badge badge-primary font-weight-semibold px-2 py-1 tx-11 me-2 float-end">22 hrs</span></span>
													</label>
													<label class="p-2 mt-2 d-flex">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															Setting up and customizing your own sales.
														</span>
														<span class="ms-auto"> <span class="badge badge-light-transparent font-weight-semibold px-2 py-1 tx-11 me-2">1 Day</span></span>
													</label>
													<label class="p-2 mt-2 d-flex">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															To have a complete 360° overview of sales information, having.
														</span>
														<span class="ms-auto"> <span class="badge badge-light-transparent font-weight-semibold px-2 py-1 tx-11 me-2">2 Days</span></span>
													</label>
													<label class="p-2 mt-2 d-flex mb-4">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															New Admin Launched.
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-12 col-md-12 col-xs-12">
							<div class="card overflow-hidden">
								<div class="card-header pb-1">
									<h3 class="card-title mb-2">Recent Transactions</h3>
								</div>
								<div class="card-body p-0 customers mt-1">
									<div class="list-group list-lg-group list-group-flush">
										<a href="javascript:void(0);" class="border-0">
										<div class="list-group-item list-group-item-action border-0">
											<div class="media mt-0">
												<span class="me-3 bg-primary-transparent text-primary transaction-icon"><i class="fe fe-chevrons-right"></i></span>
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-0">
															<h5 class="mb-1 tx-13 font-weight-sembold text-dark"><span class="me-3">montha.K</span>

															</h5>
															<p class="mb-0 tx-12 text-muted">24-08-2021</p>
														</div>
														<span class="ms-auto wd-25p tx-12">
															<span class="text-primary tx-11 text-end d-block">Processing</span>
															<span class="float-end text-success font-weight-semibold">
																$256,347
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0">
												<div class="media mt-0">
													<span class="me-3 bg-secondary-transparent text-secondary transaction-icon"><i class="fe fe-bookmark"></i></span>
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Allie Grater</h5>
																<p class="mb-0 tx-12 text-muted">31-12-2021</p>
															</div>
															<span class="ms-auto wd-45p tx-12">
																<span class="float-end text-danger font-weight-semibold">
																	$12,345
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<span class="me-3 bg-info-transparent text-info transaction-icon"><i class="fe fe-more-horizontal"></i></span>
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark"><span class="me-3">Gabel</span></h5>
																<p class="mb-0 tx-12 text-muted">15-09-2021</p>
															</div>
															<span class="ms-auto wd-45p  tx-12">
																<span class="text-primary tx-11 text-end d-block">Processing</span>
																<span class="float-end text-success font-weight-semibold">
																	$34,567
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<span class="me-3 bg-success-transparent text-success transaction-icon"><i class="fe fe-chevrons-right"></i></span>
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark"><span class="me-3">Emmanuel</span></h5>
																<p class="mb-0 tx-12 text-muted">30-11-2021</p>
															</div>
															<span class="ms-auto wd-45p tx-12">
																<span class="text-primary tx-11 text-end d-block">Processing</span>
																<span class="float-end text-danger font-weight-semibold">
																	$16,746
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<span class="me-3 bg-warning-transparent text-warning transaction-icon"><i class="fe fe-file-text"></i></span>
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Manuel Labor</h5>
																<p class="mb-0 tx-12 text-muted">20-10-2021</p>
															</div>
															<span class="ms-auto wd-45p tx-12">
																<span class="float-end text-success font-weight-semibold">
																	$45,900
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="card custom-card overflow-hidden">
								<div class="card-header border-bottom-0">
									<div>
										<h3 class="card-title mb-0">Weekly Budget</h3> <span class="d-block tx-12 mb-0 text-muted"></span>
									</div>
								</div>
								<div class="card-body p-0">
									<div id="budget"></div>
								</div>
							</div>
							<div class="card overflow-hidden">
								<div class="card-header pb-1">
									<h3 class="card-title mb-2">Recent Customers</h3>
								</div>
								<div class="card-body p-0 customers mt-1">
									<div class="list-group list-lg-group list-group-flush">
										<a href="javascript:void(0);" class="border-0">
										<div class="list-group-item list-group-item-action border-0">
											<div class="media mt-0">
												<img class="avatar-lg rounded-circle me-3 my-auto shadow" src="{{asset('assets/img/faces/2.jpg')}}" alt="Image description">
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-0">
															<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Samantha Melon</h5>
															<p class="mb-0 tx-12 text-muted">User ID: #1234</p>
														</div>
														<span class="ms-auto wd-45p tx-14">
															<span class="float-end badge bg-success">
															<span class="font-weight-semibold">paid </span>
														</span>
														</span>
													</div>
												</div>
											</div>
										</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle me-3 my-auto shadow" src="{{asset('assets/img/faces/1.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Allie Grater</h5>
																<p class="mb-0 tx-12 text-muted">User ID: #1234</p>
															</div>
															<span class="ms-auto wd-45p tx-14">
																<span class="float-end badge bg-danger">
																<span class="font-weight-semibold">Pending</span>
															</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle me-3 my-auto shadow" src="{{asset('assets/img/faces/5.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Gabe Lackmen</h5>
																<p class="mb-0 tx-12 text-muted">User ID: #1234</p>
															</div>
															<span class="ms-auto wd-45p  tx-14">
																<span class="float-end badge bg-danger">
																<span class="font-weight-semibold">Pending</span>
															</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="border-0 mb-3">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle me-3 my-auto shadow" src="{{asset('assets/img/faces/7.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Manuel Labor</h5>
																<p class="mb-0 tx-12 text-muted">User ID: #1234</p>
															</div>
															<span class="ms-auto wd-45p tx-14">
															<span class="float-end badge bg-success">
															<span class="font-weight-semibold">Paid</span>
															</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- row  -->
					<div class="row">
						<div class="col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Product Summary</h4>
								</div>
								<div class="card-body pt-0">
									<div class="table-responsive">
										<table class="table  table-bordered text-nowrap mb-0" id="example2">
											<thead>
												<tr>
													<th class="text-center">Purchase Date</th>
													<th>Client Name</th>
													<th>Product ID</th>
													<th>Product</th>
													<th>Product Cost</th>
													<th>Payment Mode</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">#01</td>
													<td>Sean Black</td>
													<td>PRO12345</td>
													<td>Mi LED Smart TV 4A 80</td>
													<td>$14,500</td>
													<td>Online Payment</td>
													<td><span class="badge badge-success-transparent">Delivered</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#02</td>
													<td>Evan Rees</td>
													<td>PRO8765</td>
													<td>Thomson R9 122cm (48 inch) Full HD LED TV </td>
													<td>$30,000</td>
													<td>Cash on delivered</td>
													<td><span class="badge badge-primary-transparent">Add Cart</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#03</td>
													<td>David Wallace</td>
													<td>PRO54321</td>
													<td>Vu 80cm (32 inch) HD Ready LED TV</td>
													<td>$13,200</td>
													<td>Online Payment</td>
													<td><span class="badge badge-danger-transparent">Pending</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#04</td>
													<td>Julia Bower</td>
													<td>PRO97654</td>
													<td>Micromax 81cm (32 inch) HD Ready LED TV</td>
													<td>$15,100</td>
													<td>Cash on delivered</td>
													<td><span class="badge badge-warning-transparent">Delivering</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#05</td>
													<td>Kevin James</td>
													<td>PRO4532</td>
													<td>HP 200 Mouse &amp; Wireless Laptop Keyboard </td>
													<td>$5,987</td>
													<td>Online Payment</td>
													<td><span class="badge badge-danger-transparent">Shipped</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#06</td>
													<td>Theresa	Wright</td>
													<td>PRO6789</td>
													<td>Digisol DG-HR3400 Router </td>
													<td>$11,987</td>
													<td>Cash on delivered</td>
													<td><span class="badge badge-primary-transparent">Delivering</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#07</td>
													<td>Sebastian	Black</td>
													<td>PRO4567</td>
													<td>Dell WM118 Wireless Optical Mouse</td>
													<td>$4,700</td>
													<td>Online Payment</td>
													<td><span class="badge badge-info-transparent">Add to Cart</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#08</td>
													<td>Kevin Glover</td>
													<td>PRO32156</td>
													<td>Dell 16 inch Laptop Backpack </td>
													<td>$678</td>
													<td>Cash On delivered</td>
													<td><span class="badge badge-pink-transparent">Delivered</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')

        <!-- Internal Chart.Bundle js-->
        <script src="{{asset('assets/plugins/chartjs/Chart.bundle.min.js')}}"></script>

        <!-- Moment js -->
        <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

        <!-- INTERNAL Apexchart js -->
		<script src="{{asset('assets/js/apexcharts.js')}}"></script>

        <!--Internal Sparkline js -->
        <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Rating js-->
        <script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
        <script src="{{asset('assets/plugins/rating/jquery.barrating.js')}}"></script>

        <!--Internal  index js -->
        <script src="{{asset('assets/js/index1.js')}}"></script>

        <!-- Chart-circle js -->
        <script src="{{asset('assets/js/chart-circle.js')}}"></script>

        <!-- Internal Data tables -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL Select2 js -->
        <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
        <script src="{{asset('assets/js/select2.js')}}"></script>

    @endsection
