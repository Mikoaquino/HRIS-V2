@extends('layouts.app')

    @section('styles')

		<!-- Internal Data table css -->
		<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}"  rel="stylesheet">
		<link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

		<!-- INTERNAL Select2 css -->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content mt-2">
							<a class="btn ripple btn-primary" data-bs-target="#Vertically" data-bs-toggle="modal" href=""><i class="fe fe-plus me-2"></i>Add New User</a>
						</div>
						<div class="justify-content-center mt-2">
                            <button id="userlist-1" class="btn btn-primary data-table-btn me-2">Delete User</button>
                            <button type="button" class="btn btn-secondary">
                                <i class="fe fe-download me-1"></i> Download User Data
                            </button>
                        </div>
					</div>
					<!-- /breadcrumb -->

					<!--Row-->
						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div class="table-responsive  deleted-table">
											<table id="user-datatable" class="table table-bordered text-nowrap border-bottom Userlist">
												<thead>
													<tr>
														<th class="wd-2">
															Photo
														</th>
														<th>Name</th>
														<th>Role</th>
														<th>Last Active</th>
														<th>Country</th>
														<th>Verification</th>
														<th>Joined Date</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/4.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Ajanto</p>
															<p class="tx-13 text-muted mb-0">ajanto.aja445@hotmail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Architect</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">20 days ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">France</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">23-7-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar avatar-md bg-success text-white rounded-circle">
																W
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Winters</p>
															<p class="tx-13 text-muted mb-0">winters.w345@gmail.org</p>
														</td>
														<td>
															<span class="text-muted tx-13">Front end Designer</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">20 hrs ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Greece</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-secondary-transparent text-secondary tx-11">Not Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">11-2-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar avatar-md bg-secondary text-white rounded-circle">
																CX
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Cox</p>
															<p class="tx-13 text-muted mb-0">morenocox.g111@gmail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Junior Technical Author</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">1 month ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Texas</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">25-5-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/7.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Kelly</p>
															<p class="tx-13 text-muted mb-0">kellybelly357@webmail.org</p>
														</td>
														<td>
															<span class="text-muted tx-13">Senior Javascript Developer</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">36 mins ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Columbia</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-secondary-transparent text-secondary tx-11">Not Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">13-3-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/8.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Satou</p>
															<p class="tx-13 text-muted mb-0">satousatti3345@gmail.org</p>
														</td>
														<td>
															<span class="text-muted tx-13">Accountant</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">11 hrs ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Spain</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">12-6-2020</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/9.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Williamson</p>
															<p class="tx-13 text-muted mb-0">Williamson.wilson123@gmail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Integration Specialist</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">21 hrs ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Bermuda</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">29-1-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar avatar-md bg-info text-white rounded-circle">
																CH
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Chandler</p>
															<p class="tx-13 text-muted mb-0">Chandler.k@mobimail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Sales Assistant</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">28 days ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">China</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-secondary-transparent text-secondary tx-11">Not Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">3-4-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/11.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Davidson</p>
															<p class="tx-12 font-weight-semibold text-muted mb-0">davidson.david@hotmail.com</p>
														</td>
														<td>
															<span class="text-muted tx-13">Integration Specialist</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">14 mins ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Portugal</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">19-8-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar avatar-md bg-warning text-white rounded-circle">
																H
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Hurst</p>
															<p class="tx-13 text-muted mb-0">Hurst.h@webmail.org.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Javascript Developer</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">17 days ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Iceland</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">16-4-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/13.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Frost</p>
															<p class="tx-13 text-muted mb-0">Frostpup143@gmail.org</p>
														</td>
														<td>
															<span class="text-muted tx-13">Software Engineer</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">19 hrs ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">India</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">31-1-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/14.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Gaines</p>
															<p class="tx-13 text-muted mb-0">Gaines.j@hotmail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Office Manager</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">15 days ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Romania</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-secondary-transparent text-secondary tx-11">Not Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">27-3-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/15.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Flynn</p>
															<p class="tx-13 text-muted mb-0">flynn.gov@gmail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Support Lead</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">1 month ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Japan</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">23-5-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/16.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Marshall</p>
															<p class="tx-13 text-muted mb-0">Marshall@ravichandra.mail</p>
														</td>
														<td>
															<span class="text-muted tx-13">Regional Director</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">2 days ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Mexico</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">11-7-2020</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/17.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Kennedy</p>
															<p class="tx-13 text-muted mb-0">Kennedy@123.org.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Senior Marketing Designer</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">12 mins ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Italy</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">26-4-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

    @endsection

    @section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Data tables -->
		<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!-- INTERNAL Select2 js -->
		<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

		<!--Internal  Userlist js -->
		<script src="{{asset('assets/js/user-list.js')}}"></script>

    @endsection
