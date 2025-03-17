@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">CHAT</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chat</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm mb-4">
						<div class="col-xl-12">
							<div class="row">
								<div class="col-xl-3 col-lg-12">
									<div class="card">
										<div class="main-content-app">
											<div class="main-content-left main-content-left-chat overflow-hidden">
												<nav class="nav main-nav-line main-nav-line-chat">
													<a class="nav-link active" data-bs-toggle="tab" href="">Recent Chat</a>
													<a class="nav-link" data-bs-toggle="tab" href="">Groups</a>
													<a class="nav-link" data-bs-toggle="tab" href="">Calls</a>
												</nav>
												<div class="main-chat-list" id="ChatList">
													<div class="media new">
														<div class="main-img-user online">
															<img alt="" src="{{asset('assets/img/faces/5.jpg')}}"> <span>2</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Socrates Itumay</span> <span>2 hours</span>
															</div>
															<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
														</div>
													</div>
													<div class="media new">
														<div class="main-img-user">
															<img alt="" src="{{asset('assets/img/faces/6.jpg')}}"> <span>1</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Dexter dela Cruz</span> <span>3 hours</span>
															</div>
															<p>Maec enas tempus, tellus eget con dime ntum rhoncus, sem quam</p>
														</div>
													</div>
													<div class="media selected">
														<div class="main-img-user online"><img alt="" src="{{asset('assets/img/faces/9.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Reynante Labares</span> <span>10 hours</span>
															</div>
															<p>Nam quam nunc, bl ndit vel aecenas et ante tincid</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/11.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Joyce Chua</span> <span>2 days</span>
															</div>
															<p>Ma ecenas tempus, tellus eget con dimen tum rhoncus, sem quam</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/4.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Rolando Paloso</span> <span>2 days</span>
															</div>
															<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
														</div>
													</div>
													<div class="media new">
														<div class="main-img-user">
															<img alt="" src="{{asset('assets/img/faces/7.jpg')}}"> <span>1</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Ariana Monino</span> <span>3 days</span>
															</div>
															<p>Maece nas tempus, tellus eget cond imentum rhoncus, sem quam</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/8.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Maricel Villalon</span> <span>4 days</span>
															</div>
															<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/12.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Maryjane Cruiser</span> <span>5 days</span>
															</div>
															<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/15.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Lovely Dela Cruz</span> <span>5 days</span>
															</div>
															<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/10.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Daniel Padilla</span> <span>5 days</span>
															</div>
															<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/3.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>John Pratts</span> <span>6 days</span>
															</div>
															<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/7.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Raymart Santiago</span> <span>6 days</span>
															</div>
															<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
														</div>
													</div>
													<div class="media border-bottom-0">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/6.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Samuel Lerin</span> <span>7 days</span>
															</div>
															<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/15.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Lovely Dela Cruz</span> <span>5 days</span>
															</div>
															<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/10.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Daniel Padilla</span> <span>5 days</span>
															</div>
															<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/3.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>John Pratts</span> <span>6 days</span>
															</div>
															<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/7.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Raymart Santiago</span> <span>6 days</span>
															</div>
															<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
														</div>
													</div>
													<div class="media border-bottom-0">
														<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/6.jpg')}}"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Samuel Lerin</span> <span>7 days</span>
															</div>
															<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
														</div>
													</div>
												</div><!-- main-chat-list -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-xl-6">
									<div class="card">
										<div class="main-content-app">
											<a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
											<div class="main-content-body main-content-body-chat">
												<div class="main-chat-header">
													<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/9.jpg')}}"></div>
													<div class="main-chat-msg-name">
														<h6>Reynante Labares</h6><small>Last seen: 2 minutes ago</small>
													</div>
													<nav class="nav">
														<a class="nav-link" href=""><i class="icon ion-md-more"></i></a>
														<a class="nav-link" data-bs-toggle="tooltip" href="" title="Call"><i class="fe fe-star"></i></a>
														<a class="nav-link" data-bs-toggle="tooltip" href="" title="Trash"><i class="fe fe-trash"></i></a>
														<a class="nav-link" data-bs-toggle="tooltip" href="" title="View Info"><i class="fe fe-alert-circle"></i></a>
													</nav>
												</div><!-- main-chat-header -->
												<div class="main-chat-body" id="ChatBody">
													<div class="content-inner">
														<label class="main-chat-time"><span>3 days ago</span></label>
														<div class="media flex-row-reverse">
															<div class="main-img-user online"><img alt="" src="{{asset('assets/img/faces/9.jpg')}}"></div>
															<div class="media-body">
																<div class="main-msg-wrapper right">
																	Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
																</div>
																<div class="main-msg-wrapper right">
																	rhoncus ut, imperdiet a, venenatis vitae, justo...
																</div>
																<div class="main-msg-wrapper pd-0"><img alt="" class="wd-100 ht-100 br-5" src="{{asset('assets/img/ecommerce/6.jpg')}}"></div>
																<div>
																	<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
																</div>
															</div>
														</div>
														<div class="media">
															<div class="main-img-user online"><img alt="" src="{{asset('assets/img/faces/6.jpg')}}"></div>
															<div class="media-body">
																<div class="main-msg-wrapper left">
																	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
																</div>
																<div>
																	<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
																</div>
															</div>
														</div>
														<div class="media flex-row-reverse">
															<div class="main-img-user online"><img alt="" src="{{asset('assets/img/faces/9.jpg')}}"></div>
															<div class="media-body">
																<div class="main-msg-wrapper right">
																	Nullam dictum felis eu pede mollis pretium
																</div>
																<div>
																	<span>11:22 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
																</div>
															</div>
														</div><label class="main-chat-time"><span>Yesterday</span></label>
														<div class="media">
															<div class="main-img-user online"><img alt="" src="{{asset('assets/img/faces/6.jpg')}}"></div>
															<div class="media-body">
																<div class="main-msg-wrapper left">
																	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
																</div>
																<div>
																	<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
																</div>
															</div>
														</div>
														<div class="media flex-row-reverse">
															<div class="main-img-user online"><img alt="" src="{{asset('assets/img/faces/9.jpg')}}"></div>
															<div class="media-body">
																<div class="main-msg-wrapper right">
																	Donec quam felis, ultricies nec, pellentesque euerdiet a, venenatis vitae, justo.
																</div>
																<div class="main-msg-wrapper right">
																	Nullam dictum felis eu pede mollis pretium
																</div>
																<div>
																	<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
																</div>
															</div>
														</div><label class="main-chat-time"><span>Today</span></label>
														<div class="media">
															<div class="main-img-user online"><img alt="" src="{{asset('assets/img/faces/6.jpg')}}"></div>
															<div class="media-body">
																<div class="main-msg-wrapper left">
																	Maecenas tempus, tellus eget condimentum rhoncus
																</div>
																<div class="main-msg-wrapper left">
																	Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
																</div>
																<div>
																	<span>10:12 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
																</div>
															</div>
														</div>
														<div class="media flex-row-reverse">
															<div class="main-img-user online"><img alt="" src="{{asset('assets/img/faces/9.jpg')}}"></div>
															<div class="media-body">
																<div class="main-msg-wrapper right">
																	Maecenas tempus, tellus eget condimentum rhoncus
																</div>
																<div class="main-msg-wrapper right">
																	Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
																</div>
																<div>
																	<span>09:40 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="main-chat-footer">
													<nav class="nav">
													</nav><input class="form-control" placeholder="Type your message here..." type="text">
													<a class="nav-link me-2" data-bs-toggle="tooltip" href="" title="Add Emoticons"><i class="fe fe-paperclip"></i></a>
													<a class="main-msg-send" href=""><i class="fe fe-send"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-xl-3">
									<div class="card overflow-hidden">
										<div class="main-content-app">
											<div class="card-body p-0 chat-main">
												<div class="float-end ms-auto m-4">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
												<div class="text-center border-bottom chat-image p-4 pb-0 mb-4 br-5 mt-3">
													<div class="main-img-user avatar-xl main-avatar online mb-3 mx-auto">
														<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/2.jpg')}}"></a>
													</div>
													<a href="{{url('profile')}}"><h5 class="mb-1">Ryan Gracie</h5></a>
													<p class="text-muted mt-0 mb-1 pt-0 tx-13">Senior Web Designer</p>
													<p class="text-muted mt-0 pt-0 tx-13 mb-0">+123(45)-678-90</p>
												</div>
												<div class="">
													<div class="px-4">
														<h6 class="mb-3">Contact Details :</h6>
														<div class="d-flex">
															<div>
																<a class="nav-link border rounded-pill chat-profile me-2" href=""><i class="fe fe-shield"></i></a>
															</div>
															<div class="ms-2">
																<p class="tx-13 font-weight-semibold mb-0">Id</p>
																<p class="tx-12 text-muted">2E345D4.</p>
															</div>
														</div>
														<div class="d-flex">
															<div>
																<a class="nav-link border rounded-pill chat-profile me-2" href=""><i class="fe fe-mail"></i></a>
															</div>
															<div class="ms-2">
																<p class="tx-13 font-weight-semibold mb-0">Email</p>
																<p class="tx-12 text-muted">ryangracie435@gmail.com.</p>
															</div>
														</div>
														<div class="d-flex mt-2">
															<div>
																<a class="nav-link border rounded-pill chat-profile me-2" href=""><i class="fe fe-map-pin"></i></a>
															</div>
															<div class="ms-2">
																<p class="tx-13 font-weight-semibold mb-0">Address</p>
																<p class="tx-12 text-muted">2nd street,houston texas,united states.</p>
															</div>
														</div>
													</div>
													<div class="px-4">
														<h6 class="mb-0">Shared Files :</h6>
														<div class="card custom-card overflow-hidden">
															<div class="card-body pb-0 ps-0">
																<div class="border-0 p-0 mb-4">
																	<div class="media mt-0">
																		<div class="ps-0 me-3"><i class="fa fa-folder-open shared-files text-muted"></i></div>
																		<div class="media-body">
																			<div class="d-flex align-items-center">
																				<div class="mt-0">
																					<h5 class="mb-1 tx-13 font-weight-sembold text-dark"> Ex Document</h5>
																					<p class="mb-0 tx-13 text-muted">ppt<span class="tx-11 ms-2">1.2 mb</span></p>
																				</div>
																				<span class="ms-auto wd-45p fs-16 ">
																					<span id="spark1" class="wd-100p"></span>
																					<span class="float-end badge">
																					<span class="op-7 text-muted font-weight-semibold">4 hrs ago </span>
																				</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="border-0 p-0 mb-4">
																	<div class="media mt-0">
																		<div class="ps-0 me-3"><i class="fa fa-image shared-files text-muted"></i></div>
																		<div class="media-body">
																			<div class="d-flex align-items-center">
																				<div class="mt-0">
																					<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Sam Photo</h5>
																					<p class="mb-0 tx-13 text-muted">img<span class="tx-11 ms-2">12 mb</span></p>
																				</div>
																				<span class="ms-auto wd-45p fs-16 ">
																					<span id="spark2" class="wd-100p"></span>
																					<span class="float-end badge">
																					<span class="op-7 text-muted font-weight-semibold">4 hrs ago </span>
																				</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="border-0 p-0 mb-0">
																	<div class="media mt-0">
																		<div class="ps-0 me-3"><i class="fa fa-envelope shared-files text-muted"></i></div>
																		<div class="media-body">
																			<div class="d-flex align-items-center">
																				<div class="mt-0">
																					<h5 class="mb-1 tx-13 font-weight-sembold text-dark"> video</h5>
																					<p class="mb-0 tx-13 text-muted">Video<span class="tx-12 ms-2">16 mb</span></p>
																				</div>
																				<span class="ms-auto wd-45p fs-16 ">
																					<span id="spark3" class="wd-100p"></span>
																					<span class="float-end badge">
																					<span class="op-7 text-muted font-weight-semibold">22 mins ago </span>
																				</span>
																				</span>
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
						</div>
					</div>
					<!-- row -->

    @endsection

    @section('scripts')

		<!--Internal  lightslider js -->
		<script src="{{asset('assets/plugins/lightslider/js/lightslider.min.js')}}"></script>

		<!--Internal  Chat js -->
		<script src="{{asset('assets/js/chat.js')}}"></script>

    @endsection
