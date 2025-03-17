@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">CONTACTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<button type="button" class="btn btn-primary">
								<i class="fe fe-plus me-1"></i> Add New Contact
							</button>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-12 col-lg-5 col-xl-3">
							<div class="card custom-card">
								<div class="">
									<div class="main-content-contacts pt-0">
										<div class="main-content-left main-content-left-contacts">
											<nav class="nav main-nav-line  border-bottom-0 main-nav-line-chat  p-3">
												<a class="nav-link active" data-bs-toggle="tab" href="#mainContactList">All Contacts</a>
												<a class="nav-link" data-bs-toggle="tab" href="#mainContactList">Favorites</a>
											</nav>
											<div class="main-contacts-list" id="mainContactList">
												<div class="main-contact-label">
													A
												</div>
												<div class="main-contact-item selected">
													<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/2.jpg')}}"></div>
													<div class="main-contact-body">
														<h6>Abigail Johnson</h6><span class="phone">+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="avatar" src="{{asset('assets/img/faces/3.jpg')}}"></div>
													<div class="main-contact-body">
														<h6>Archie Cantones</h6><span>archie@cantones.com</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-avatar online">
														A
													</div>
													<div class="main-contact-body">
														<h6>Allan Rey Palban</h6><span>allanr@palban.com</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-avatar bg-secondary">
														A
													</div>
													<div class="main-contact-body">
														<h6>Aileen Mante</h6><span>+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-label">
													B
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="avatar" src="{{asset('assets/img/faces/4.jpg')}}"></div>
													<div class="main-contact-body">
														<h6>Brandon Dilao</h6><span>+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/5.jpg')}}"></div>
													<div class="main-contact-body">
														<h6>Britney Labares</h6><span>+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-avatar bg-danger">
														B
													</div>
													<div class="main-contact-body">
														<h6>Brateyley Cruz</h6><span>+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-label">
													C
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="avatar" src="{{asset('assets/img/faces/6.jpg')}}"></div>
													<div class="main-contact-body">
														<h6>Camille Audrey</h6><span>+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/7.jpg')}}"></div>
													<div class="main-contact-body">
														<h6>Christian Lerio</h6><span>+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/8.jpg')}}"></div>
													<div class="main-contact-body">
														<h6>Christopher Segovia</h6><span>+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-label">
													D
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/9.jpg')}}"></div>
													<div class="main-contact-body">
														<h6>Darius Clayton</h6><span>+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="avatar" src="{{asset('assets/img/faces/10.jpg')}}"></div>
													<div class="main-contact-body">
														<h6>Dyanne Aceron</h6><span>+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/11.jpg')}}"></div>
													<div class="main-contact-body">
														<h6>Divina Gracia</h6><span>+1-234-567-890</span>
													</div>
													<div class="main-contact-star">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-18"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-star me-2 "></i>Add to Favorite</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2"></i>Delete</a>
															</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-7 col-xl-9">
							<div class="">
								<a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
								<div class="main-content-body main-content-body-contacts card custom-card">
									<div class="main-contact-info-header pt-3">
										<div class="media">
											<div class="main-img-user">
												<img alt="avatar" src="{{asset('assets/img/faces/6.jpg')}}"> <a href=""><i class="fe fe-camera"></i></a>
											</div>
											<div class="media-body">
												<h5>Teri Dactyl</h5>
												<p>Web Designer</p>
												<nav class="contact-info">
													<a href="javascript:void(0);" class="contact-icon border tx-inverse" data-bs-toggle="tooltip" title="Call"><i class="fe fe-phone"></i></a>
													<a href="javascript:void(0);" class="contact-icon border tx-inverse" data-bs-toggle="tooltip" title="Video"><i class="fe fe-video"></i></a>
													<a href="javascript:void(0);" class="contact-icon border tx-inverse" data-bs-toggle="tooltip" title="message"><i class="fe fe-message-square"></i></a>
													<a href="javascript:void(0);" class="contact-icon border tx-inverse" data-bs-toggle="tooltip" title="Add to Group"><i class="fe fe-user-plus"></i></a>
													<a href="javascript:void(0);" class="contact-icon border tx-inverse" data-bs-toggle="tooltip" title="Block"><i class="fe fe-slash"></i></a>
												</nav>
											</div>
										</div>
										<div class="main-contact-action btn-list pt-3 pe-0 me-3">
											<a href="javascript:void(0);" class="btn ripple btn-primary text-white btn-icon" data-placement="top" data-bs-toggle="tooltip" title="Edit Profile"><i class="fe fe-edit"></i></a>
											<a href="javascript:void(0);" class="btn ripple btn-secondary text-white btn-icon" data-placement="top" data-bs-toggle="tooltip" title="Delete Profile"><i class="fe fe-trash-2"></i></a>
											<a href="javascript:void(0);" class="btn ripple btn-warning text-white btn-icon" data-placement="top" data-bs-toggle="tooltip" title="Add Favorite"><i class="fe fe-star"></i></a>
										</div>
									</div>
									<div class="main-contact-info-body p-4">
										<div>
											<h6>Biography :</h6>
											<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
											<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariaturexplicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
										</div>
										<div class="media-list pb-0">
											<div class="media">
												<div class="media-body">
													<div>
														<label>Work :</label> <span class="tx-medium">+1 (234) 567 8901</span>
													</div>
													<div>
														<label>Personal :</label> <span class="tx-medium">+1 (498) 021 0090</span>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-body">
													<div>
														<label>Gmail Account :</label> <span class="tx-medium">Dactyl.taylor@gmail.com</span>
													</div>
													<div>
														<label>Other Account :</label> <span class="tx-medium">me@bootstrapdash.me</span>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-body">
													<div>
														<label>Current Address :</label> <span class="tx-medium">012 Dashboard Apartments, Dayl Francisco, California 13245</span>
													</div>
												</div>
											</div>
											<div class="media mb-0">
												<div class="media-body">
													<div>
														<label>Call History 	:</label> <span class="tx-medium">Duration of last call: 5m 25sec</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card custom-card">
									<div class="card-header">Recent Contacts</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12 col-lg-12 col-xl-4 col-xxl-4">
												<div class="border d-flex p-2 br-5 mb-2">
													<div class="recent-contacts me-3">
														<div class="main-img-user avatar-md">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/5.jpg')}}">
														</div>
													</div>
													<div>
														<h6 class="mt-1 mb-1">Abigali kelly</h6>
														<p class="mb-0 text-muted">Front end</p>
													</div>
													<div class="my-auto ms-auto">
														<nav class="contact-info d-md-flex">
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Call"><i class="fe fe-phone tx-12"></i></a>
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Video"><i class="fe fe-video tx-12"></i></a>
														</nav>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-lg-12 col-xl-4 col-xxl-4">
												<div class="border d-flex p-2 br-5 mb-2">
													<div class="recent-contacts me-3">
														<div class="main-img-user avatar-md">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/2.jpg')}}">
														</div>
													</div>
													<div>
														<h6 class="mt-1 mb-1">Brenda Crux</h6>
														<p class="mb-0 text-muted">Angular</p>
													</div>
													<div class="my-auto ms-auto">
														<nav class="contact-info d-md-flex">
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Call"><i class="fe fe-phone tx-12"></i></a>
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Video"><i class="fe fe-video tx-12"></i></a>
														</nav>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-lg-12 col-xl-4 col-xxl-4">
												<div class="border d-flex p-2 br-5 mb-2">
													<div class="recent-contacts me-3">
														<div class="main-img-user avatar-md">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/8.jpg')}}">
														</div>
													</div>
													<div>
														<h6 class="mt-1 mb-1">Rach Michelle</h6>
														<p class="mb-0 text-muted">Php</p>
													</div>
													<div class="my-auto ms-auto">
														<nav class="contact-info d-md-flex">
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Call"><i class="fe fe-phone tx-12"></i></a>
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Video"><i class="fe fe-video tx-12"></i></a>
														</nav>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-lg-12 col-xl-4 col-xxl-4">
												<div class="border d-flex p-2 br-5 mb-2">
													<div class="recent-contacts me-3">
														<div class="main-img-user avatar-md">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/9.jpg')}}">
														</div>
													</div>
													<div>
														<h6 class="mt-1 mb-1">Matt Harder</h6>
														<p class="mb-0 text-muted">Codeignitor</p>
													</div>
													<div class="my-auto ms-auto">
														<nav class="contact-info d-md-flex">
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Call"><i class="fe fe-phone tx-12"></i></a>
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Video"><i class="fe fe-video tx-12"></i></a>
														</nav>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-lg-12 col-xl-4 col-xxl-4">
												<div class="border d-flex p-2 br-5 mb-2">
													<div class="recent-contacts me-3">
														<div class="main-img-user avatar-md">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/1.jpg')}}">
														</div>
													</div>
													<div>
														<h6 class="mt-1 mb-1">Micheal Phelps</h6>
														<p class="mb-0 text-muted">Web Testing</p>
													</div>
													<div class="my-auto ms-auto">
														<nav class="contact-info d-md-flex">
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Call"><i class="fe fe-phone tx-12"></i></a>
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Video"><i class="fe fe-video tx-12"></i></a>
														</nav>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-lg-12 col-xl-4 col-xxl-4">
												<div class="border d-flex p-2 br-5 mb-2">
													<div class="recent-contacts me-3">
														<div class="main-img-user avatar-md">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/7.jpg')}}">
														</div>
													</div>
													<div>
														<h6 class="mt-1 mb-1">Azenda Hills</h6>
														<p class="mb-0 text-muted">Django</p>
													</div>
													<div class="my-auto ms-auto d-md-flex">
														<nav class="contact-info d-md-flex">
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Call"><i class="fe fe-phone tx-12"></i></a>
															<a href="javascript:void(0);" class="contact-icon border tx-inverse rounded-pill" data-bs-toggle="tooltip" title="Video"><i class="fe fe-video tx-12"></i></a>
														</nav>
													</div>
												</div>
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

		<!--Internal  Contact js -->
		<script src="{{asset('assets/js/contact.js')}}"></script>

    @endsection
