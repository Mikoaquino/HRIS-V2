@extends('layouts.app')

    @section('styles')

		<!---Internal Input tags css-->
		<link href="{{asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TOAST</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Toast</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="card custom-card" id="basic">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Example</h6>
										<p class="text-muted card-sub-title">Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-static-toast">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
													<div class="toast-header">
														<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted me-3">11 mins ago</small>
														<button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="toast-body">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="stacking">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Stacking</h6>
										<p class="text-muted card-sub-title">When you have multiple toasts, we default to vertiaclly stacking them in a readable manner.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-static-toast">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
													<div class="toast-header">
														<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted me-3">Just now</small>
														<button aria-label="Close" class="ms-2 mb-1 close" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="toast-body">
														See? Just like this.
													</div>
												</div>
												<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
													<div class="toast-header">
														<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted me-3">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="toast-body">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="place">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Placement</h6>
										<p class="text-muted card-sub-title">Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle.</p>
									</div>
									<div class="text-wrap mb-3">
										<div class="example">
											<div class="ht-150 pos-relative mb-3">
												<div class="demo-static-toast pos-absolute t-10 r-10">
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-header">
															<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted me-3">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="toast-body">
															Hello, world! This is a toast message.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="text-wrap mb-3">
										<div class="example">
											<div class="demo-static-toast d-flex justify-content-center align-items-center">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
													<div class="toast-header">
														<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted me-3">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="toast-body">
														Hello, world! This is a toast message.
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
					<div class="row">
						<div class="col-xl-12">
							<div class="card custom-card" id="tarns">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Color Toasts</h6>
										<p class="text-muted card-sub-title">Toasts are slightly translucent, too, so they blend over whatever they might appear over.</p>
									</div>
									<div class="text-wrap">
										<div class="example d-flex">
											<div class="row">
												<div class="col-xl-12">
													<div class="row">
														<div class="col-xl-6 col-lg-6 col-md-12">
															<div class="demo-static-toast mb-2 mt-2">
																<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
																	<div class="toast-header bg-primary text-white p-2"><i class="fe fe-home me-2"></i>
																		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="me-3">11 mins ago</small>
																		<button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="toast-body p-3">
																		Hello, world! This is a toast message.
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-12">
															<div class="demo-static-toastmt-2 mb-2">
																<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
																	<div class="toast-header bg-secondary text-white p-2"><i class="fe fe-compass me-2"></i>
																		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="me-3">11 mins ago</small>
																		<button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="toast-body p-3">
																		Hello, world! This is a toast message.
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-12">
															<div class="demo-static-toast mt-2 mb-2">
																<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
																	<div class="toast-header bg-success text-white p-2"><i class="fe fe-check-circle me-2"></i>
																		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="me-3">11 mins ago</small>
																		<button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="toast-body p-3">
																		Hello, world! This is a toast message.
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-12">
															<div class="demo-static-toast mt-2 mb-2">
																<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
																	<div class="toast-header bg-info text-white p-2"><i class="fe fe-info me-2"></i>
																		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="me-3">11 mins ago</small>
																		<button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="toast-body p-3">
																		Hello, world! This is a toast message.
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

    @endsection

    @section('scripts')

		<!-- Internal Input tags js-->
		<script src="{{asset('assets/plugins/inputtags/inputtags.js')}}"></script>

    @endsection
