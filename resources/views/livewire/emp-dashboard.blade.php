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

	<style>

		#announcementCard {
			height: 90%; 
		}

		#announcementCard .card-body {
			max-height:100px; 
			overflow-y: auto; 
		}

		.vr {
			border-left: 1px;
			height: 50px;
		}
	</style>

					<!-- breadcrumb -->
					<div class="breadcrumb-header">
						<h5 class="text-dark font-weight-semibold mb-3 mt-2">HI, WELCOME BACK <span class="text-primary">JOHN!</span></h5>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-xl-9 col-lg-12 col-md-12 col-sm-12">

							{{-- start first container(left) --}}
								<div class="card px-4 py-3">
									<div class="row index1 justify-content-center gx-4 gy-3">

										<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
											<div class="row border-end bd-xs-e-0 p-3 position-relative">
												<!-- Icon -->
												<div class="col-3 position-absolute" style="top: 40px; left: 20px;">
													<div class="circle-icon bg-primary text-center align-self-center overflow-hidden shadow">
														<i class="fa fa-clock tx-15 text-white"></i>
													</div>
												</div>
												<div class="col-9 ms-auto">
													<div class="pt-3 pb-2">
														<div class="d-flex">
															<h4 class="mb-1 tx-12 font-weight-bold">Hours Worked</h4>
														</div>
														<div class="mt-1">
															<h6 class="tx-10 mb-1"><b>Last Month:</b> 160 hours</h6>
															<h6 class="tx-10 mb-0"><b>This Month:</b> 20 hours (so far)</h6>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
											<div class="row border-end bd-md-e-0 p-3 position-relative">
												<!-- Icon -->
												<div class="col-3 position-absolute" style="top: 40px; left: 20px;">
													<div class="circle-icon bg-warning text-center align-self-center overflow-hidden shadow">
														<i class="fa fa-calendar-check tx-15 text-white"></i>
													</div>
												</div>
												<!-- Content -->
												<div class="col-9 ms-auto">
													<div class="pt-3 pb-2">
														<div class="d-flex">
															<h4 class="mb-1 tx-12 font-weight-bold">Leaves Balance</h4>
														</div>
														<div class="mt-1">
															<h6 class="tx-10 mb-1"><b>Vacation:</b> 5 days remaining</h6>
															<h6 class="tx-10 mb-0"><b>Sick Leave:</b> 5 days remaining</h6>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
											<div class="row p-3 position-relative">
												<!-- Icon -->
												<div class="col-3 position-absolute" style="top: 40px; left: 20px;">
													<div class="circle-icon bg-secondary text-center align-self-center overflow-hidden shadow">
														<i class="fa fa-money-bill tx-15 text-white"></i>
													</div>
												</div>
												<!-- Content -->
												<div class="col-9 ms-auto">
													<div class="pt-3 pb-2">
														<div class="d-flex">
															<h4 class="mb-1 tx-12 font-weight-bold">Next Payslip</h4>
														</div>
														<div class="mt-1">
															<h6 class="tx-10 mb-1"><b>Next Pay Date:</b> March 30, 2025</h6>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							{{-- end of first container(left) --}}


							{{-- second row containers(left) --}}
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
								<div class="row">

								{{-- start second container(left) --}}
								<div class="col-sm-12 col-lg-12 col-xl-7">
									<div class="card overflow-hidden p-4">
										<h4 class="fw-semibold text-dark mb-3">Attendance Summary</h4>

										<div class="progress mb-4 space-x-" style="height: 8px;">
											<div class="progress-bar bg-success" style="width: 10%;"></div> 
											<div class="progress-bar bg-info" style="width: 60%;"></div> 
											<div class="progress-bar bg-warning" style="width: 20%;"></div>
											<div class="progress-bar bg-gray-300" style="width: 10%;"></div> 
										</div>

										<div class="row text-center">
											<div class="col-3">
												<div class="d-flex align-items-center justify-content-center mb-2">
													<div class="rounded-circle bg-success me-2" style="width: 10px; height: 10px;"></div>
													<span class="text-muted">Absent</span>
												</div>
												<h5 class="fw-bold text-dark">8</h5>
											</div>

											<div class="col-3">
												<div class="d-flex align-items-center justify-content-center mb-2">
													<div class="rounded-circle bg-info me-2" style="width: 10px; height: 10px;"></div>
													<span class="text-muted">Present</span>
												</div>
												<h5 class="fw-bold text-dark">48</h5>
											</div>

											<div class="col-3">
												<div class="d-flex align-items-center justify-content-center mb-2">
													<div class="rounded-circle bg-warning me-2" style="width: 10px; height: 10px;"></div>
													<span class="text-muted">On Leave</span>
												</div>
												<h5 class="fw-bold text-dark">6</h5>
											</div>

											<div class="col-3">
												<div class="d-flex align-items-center justify-content-center mb-2">
													<div class="rounded-circle bg-gray-300 me-2" style="width: 10px; height: 10px;"></div>
													<span class="text-muted">Sick Leave</span>
												</div>
												<h5 class="fw-bold text-dark">3</h5>
											</div>
										</div>
									</div>
								</div>
								{{-- end of second container(left) --}}

									{{-- Start of first container (middle) --}}
									<div class="col-xl-5 col-md-12 col-lg-12">
										<div class="card" id="announcementCard">
											<div class="card-header pb-3 d-flex justify-content-between align-items-center">
												<h3 class="card-title mb-2">Announcements</h3>
												<button class="btn btn-sm btn-primary" id="fullscreenBtn">
													<span><i class="fa fa-expand" id="fullscreenIcon"></i></span>
												</button>
											</div>
											<div class="card-body customers">
												<li><b>New Policy Implementation:</b> "Effective next month, we will be implementing a new remote work policy. Please review the details in the policy section of the portal."</li>
												<li><b>Work Anniversary:</b> "Happy 5th work anniversary to John Smith! Thank you for your dedication and hard work over the years."</li>
												<li><b>Company Picnic:</b> "Join us for the annual company picnic on July 15th at Central Park. Food, games, and fun for the whole family!"</li>
												<li><b>System Maintenance:</b> "Scheduled maintenance on April 5th from 12 AM to 4 AM. Expect temporary downtime."</li>
												<li><b>Quarterly Meeting:</b> "The next quarterly meeting will be held on May 10th. Mark your calendars!"</li>
											</div>
										</div>
									</div>
									{{-- End of first container (middle) --}}

								</div>
							</div>

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
								<div class="row">

									{{-- Start of third container (left) --}}
									<div class="col-sm-12 col-lg-12 col-xl-7">
										<div class="card overflow-hidden p-3">
											<!-- Header -->
											<div class="card-header d-flex justify-content-between align-items-center">
												<h3 class="card-title mb-0">Daily Time Report</h3>
											</div>
											<hr class="mt-2 mb-3">

											<div class="card-body">
												<!-- Date and Action Buttons -->
												<div class="d-flex gap-3 align-items-center flex-wrap mb-3">
													<!-- Date Section -->
													<div class="text-center">
														<h6 class="text-danger fw-bold mb-0">MAR</h6>
														<h3 class="fw-bold">25</h3>
													</div>

													<div class="vr d-none d-md-block"></div>

													<!-- Action Buttons -->
													<div class="d-flex gap-2 flex-wrap">
														<button class="btn btn-outline-warning btn-sm px-3">
															<i class="fa fa-mug-hot me-1"></i> Start Break
														</button>
														<button class="btn btn-danger btn-sm px-3">
															<i class="fa fa-sign-out-alt me-1"></i> Clock Out
														</button>
													</div>
												</div>

												<!-- Time Records -->
												<div class="row text-center gy-3">
													<div class="col-12 col-md-3 border-end">
														<h6 class="text-dark small">Clock In</h6>
														<h5 class="fw-bold text-dark">08:00 AM</h5>
													</div>
													<div class="col-12 col-md-3 border-end">
														<h6 class="text-dark small">Breaks</h6>
														<h5 class="fw-bold text-dark">00:30 mins</h5>
													</div>
													<div class="col-12 col-md-3 border-end">
														<h6 class="text-dark small">Clocked Out</h6>
														<h5 class="fw-bold text-dark">06:00 PM</h5>
													</div>
													<div class="col-12 col-md-3 text-end mt-3">
														<button class="btn btn-success btn-sm">View Attendance</button>
													</div>
												</div>

											</div>
										</div>
									</div>
									{{-- end of third container(left) --}}

									{{-- start of second container(right) --}}
									<div class="col-xl-5 col-md-8 col-lg-8">
										<div class="card">
											<div class="card-header pb-2">
												<h3 class="card-title mb-1">Upcoming</h3>
											</div>
											<div class="card-body p-2 customers mt-1">
												<div class="">
													<label class="p-1 d-flex align-items-center">
														<span class="check-box mb-0 ms-1">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-2 me-4 my-auto small">
															<b>Next Payslip Uploading</b><br>
															<span class="text-muted">Distribute upcoming payslips</span>
														</span>
														<span class="ms-auto">
															<span class="badge bg-primary text-white px-2 py-0 small">Today</span>
														</span>
													</label>
													<label class="p-1 mt-1 d-flex align-items-center">
														<span class="check-box mb-0 ms-1">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-2 me-4 my-auto small">
															<b>Performance Evaluations</b><br>
															<span class="text-muted">5 evaluations pending</span>
														</span>
														<span class="ms-auto">
															<span class="badge bg-primary text-white px-2 py-0 small">Today</span>
														</span>
													</label>
													<label class="p-1 mt-1 d-flex align-items-center">
														<span class="check-box mb-0 ms-1">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-2 me-4 my-auto small">
															<b>Quarterly Reports Submission</b><br>
															<span class="text-muted">Prepare and upload financial reports</span>
														</span>
														<span class="ms-auto">
															<span class="badge bg-primary text-white px-2 py-0 small">22 hrs</span>
														</span>
													</label>
													<label class="p-1 mt-1 d-flex align-items-center">
														<span class="check-box mb-0 ms-1">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-2 me-4 my-auto small">
															<b>Training Session for New Hires</b><br>
															<span class="text-muted">Mandatory orientation for new employees</span>
														</span>
														<span class="ms-auto">
															<span class="badge bg-light text-dark px-2 py-0 small">1 Day</span>
														</span>
													</label>
													<label class="p-1 mt-1 d-flex align-items-center mb-3">
														<span class="check-box mb-0 ms-1">
															<span class="ckbox"><input checked type="checkbox"><span></span></span>
														</span>
														<span class="ms-2 me-4 my-auto small">
															<b>Monthly Team Meeting</b><br>
															<span class="text-muted">Mandatory orientation for new employees</span>
														</span>
														<span class="ms-auto">
															<span class="badge bg-light text-dark px-2 py-0 small">2 Days</span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
									{{-- end of second container (right) --}}

								</div>
							</div>

						</div>
						{{-- end of second row containers --}}

						{{-- start of first container(right) --}}
						<div class="col-xl-3 col-lg-6 col-md-8 col-xs-12">
							<div class="card overflow-hidden shadow padding-12">
								@livewire('calendar-component') 
							</div>
						</div>
						{{-- end of first container(right) --}}

					</div>

	{{-- Fullscreen script function --}}
	<script>
		document.addEventListener("DOMContentLoaded", function() {
		let fullscreenBtn = document.getElementById("fullscreenBtn");
		let fullscreenIcon = document.getElementById("fullscreenIcon");
		let card = document.getElementById("announcementCard");
		let cardBody = card.querySelector(".card-body");

		fullscreenBtn.addEventListener("click", function() {
			if (!document.fullscreenElement && !document.webkitFullscreenElement) {
				console.log("Entering full screen mode...");
				if (card.requestFullscreen) {
					card.requestFullscreen();
				} else if (card.webkitRequestFullscreen) { 
					card.webkitRequestFullscreen();
				} else if (card.msRequestFullscreen) { 
					card.msRequestFullscreen();
				}
				fullscreenIcon.classList.remove("fa-expand");
				fullscreenIcon.classList.add("fa-compress");

				cardBody.style.maxHeight = "none"; 
			} else {
				console.log("Exiting full screen mode...");
				if (document.exitFullscreen) {
					document.exitFullscreen();
				} else if (document.webkitExitFullscreen) {
					document.webkitExitFullscreen();
				} else if (document.msExitFullscreen) {
					document.msExitFullscreen();
				}
				fullscreenIcon.classList.remove("fa-compress");
				fullscreenIcon.classList.add("fa-expand");

				cardBody.style.maxHeight = "100px"; 
			}
		});

		document.addEventListener("fullscreenchange", function() {
			if (!document.fullscreenElement) {
				fullscreenIcon.classList.remove("fa-compress");
				fullscreenIcon.classList.add("fa-expand");

				cardBody.style.maxHeight = "100px";
			}
		});
	});
		</script>

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
