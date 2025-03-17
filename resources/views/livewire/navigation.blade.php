@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">NAVIGATION</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Navigation</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="card custom-card" id="basic">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Navigation</h6>
										<p class="text-muted card-sub-title">Below is an example of a basic navigation</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 br-5 border">
												<nav class="nav main-nav flex-column flex-md-row">
													<a class="nav-link active" href="javascript:void(0);">Home</a>
													<a class="nav-link" href="javascript:void(0);">About</a>
													<a class="nav-link" href="javascript:void(0);">Pages</a>
													<a class="nav-link" href="javascript:void(0);">Custom</a>
												</nav>
											</div>
										</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="vertical">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">Vertical Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a basic navigation in a vertical mode</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 br-5  border">
													<nav class="nav main-nav-column">
														<a class="nav-link active" href="javascript:void(0);">Home</a>
														<a class="nav-link" href="javascript:void(0);">About</a>
														<a class="nav-link" href="javascript:void(0);">Pages</a>
														<a class="nav-link" href="javascript:void(0);">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="pill">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">ICON Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a pill navigation</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-2 br-5 ">
										<ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
											<li class="nav-item">
												<a class="nav-link border py-2 px-3 m-2" id="tab1" data-bs-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-2 px-3  m-2" id="tab2" data-bs-toggle="tab" href="#tabs_2_2" role="tab"  aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-2 px-3  border active show m-2" id="tab3" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="true">
													<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-2 px-3  m-2" id="tab4" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-2 px-3  m-2" id="tab5" data-bs-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
												</a>
											</li>
									</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="verticallpill">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">Vertical Pills Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a pill navigation in vertical mode</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 br-5  border">
													<nav class="nav nav-pills flex-column">
														<a class="nav-link active" href="javascript:void(0);">Home</a>
														<a class="nav-link" href="javascript:void(0);">About</a>
														<a class="nav-link" href="javascript:void(0);">Pages</a>
														<a class="nav-link" href="javascript:void(0);">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="hori">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">Horizontal Alignment</h6>
											<p class="text-muted card-sub-title">A navigation with center and right in which left is the default.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 br-5 border mb-3">
													<nav class="nav main-nav flex-column flex-md-row justify-content-center">
														<a class="nav-link active" href="javascript:void(0);">Home</a>
														<a class="nav-link" href="javascript:void(0);">About</a>
														<a class="nav-link" href="javascript:void(0);">Pages</a>
														<a class="nav-link" href="javascript:void(0);">Custom</a>
													</nav>
												</div>
												<div class="p-3 br-5  border">
													<nav class="nav main-nav flex-column flex-md-row justify-content-end">
														<a class="nav-link active" href="javascript:void(0);">Home</a>
														<a class="nav-link" href="javascript:void(0);">About</a>
														<a class="nav-link" href="javascript:void(0);">Pages</a>
														<a class="nav-link" href="javascript:void(0);">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">ICON NAVBAR</h6>
											<p class="text-muted card-sub-title">A navigation with ICON NAVBAR.</p>
										</div>
										<div class="text-wrap">
											<div class="example icon-navbar">
												<ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
													<li class="nav-item">
														<a class="nav-link border text-center  m-2" id="tab21" data-bs-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="tab1" aria-selected="false">
															<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home fs-20"></i></span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border  m-2" id="tab22" data-bs-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="tab2" aria-selected="false">
															<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock fs-20"></i></span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border active show  m-2" id="tab23" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab3" aria-selected="true">
															<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play fs-20"></i></span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border  m-2" id="tab24" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab4" aria-selected="false">
															<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers fs-20"></i></span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link border m-2" id="tab25" data-bs-toggle="tab" href="#tabs_2_4" role="tab" aria-controls="tab5" aria-selected="false">
															<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image fs-20"></i> </span>
														</a>
													</li>
											</ul>
											</div>
								         </div>
									</div>
								</div>
								<div class="card custom-card" id="colored">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">Colored Nav Variations</h6>
											<p class="text-muted card-sub-title">A navigation with colored nav that wrapped the navigation.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 bg-primary br-5 mb-3">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active" href="javascript:void(0);">Home</a>
														<a class="nav-link" href="javascript:void(0);">About</a>
														<a class="nav-link" href="javascript:void(0);">Pages</a>
														<a class="nav-link" href="javascript:void(0);">Custom</a>
													</nav>
												</div>
												<div class="p-3 br-5 bg-secondary mb-3">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active" href="javascript:void(0);">Home</a>
														<a class="nav-link" href="javascript:void(0);">About</a>
														<a class="nav-link" href="javascript:void(0);">Pages</a>
														<a class="nav-link" href="javascript:void(0);">Custom</a>
													</nav>
												</div>
												<div class="p-3 br-5 bg-info">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active" href="javascript:void(0);">Home</a>
														<a class="nav-link" href="javascript:void(0);">About</a>
														<a class="nav-link" href="javascript:void(0);">Pages</a>
														<a class="nav-link" href="javascript:void(0);">Custom</a>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="tab">
									<div class="card-body">
										<div>
											<h6 class="card-title mb-1">Simple Tab Navigation</h6>
											<p class="text-muted card-sub-title">Below is a tab navigation that have only few links.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="border">
													<div class="bg-gray-100 nav-bg">
														<nav class="nav nav-tabs">
															<a class="nav-link active" data-bs-toggle="tab" href="#tabCont1">Home</a>
															<a class="nav-link" data-bs-toggle="tab" href="#tabCont2">About</a>
															<a class="nav-link" data-bs-toggle="tab" href="#tabCont3">Contact</a>
														</nav>
													</div>
													<div class="card-body tab-content">
														<div class="tab-pane active show" id="tabCont1">
															Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
														</div>
														<div class="tab-pane" id="tabCont2">
															At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
														</div>
														<div class="tab-pane" id="tabCont3">
															 Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->

    @endsection

    @section('scripts')



    @endsection