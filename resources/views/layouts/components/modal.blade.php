			<!-- Country-selector modal-->
			<div class="modal fade" id="country-selector">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header border-bottom">
							<h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
						</div>
						<div class="modal-body">
							<ul class="row p-3">
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block active">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/us_flag.jpg')}}" class="me-3 language"></span>Usa
									</a>
								</li>
								<li class="col-lg-6 mb-2 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/italy_flag.jpg')}}" class="me-3 language"></span>Italy
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/spain_flag.jpg')}}" class="me-3 language"></span>Spain
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/india_flag.jpg')}}" class="me-3 language"></span>India
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/french_flag.jpg')}}" class="me-3 language"></span>France
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/mexico.jpg')}}" class="me-3 language"></span>Mexico
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/singapore.jpg')}}" class="me-3 language"></span>Singapore
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/poland.jpg')}}" class="me-3 language"></span>Poland
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/austria.jpg')}}" class="me-3 language"></span>Austria
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/russia_flag.jpg')}}" class="me-3 language"></span>Russia
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/germany_flag.jpg')}}" class="me-3 language"></span>Germany
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/argentina.jpg')}}" class="me-3 language"></span>Argentina
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/brazil.jpg')}}" class="me-3 language"></span>Brazil
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/uae.jpg')}}" class="me-3 language"></span>U.A.E
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/china.jpg')}}" class="me-3 language"></span>China
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/uk.jpg')}}" class="me-3 language"></span>U.K
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/malaysia.jpg')}}" class="me-3 language"></span>Malaysia
									</a>
								</li>
								<li class="col-lg-6 mb-2">
									<a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
										<span class="country-selector"><img alt="" src="{{asset('assets/img/flags/canada.jpg')}}" class="me-3 language"></span>Canada
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Country-selector modal-->

			<!-- Message Modal -->
			<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog modal-dialog-right chatbox" role="document">
					<div class="modal-content chat border-0">
						<div class="card overflow-hidden mb-0 border-0">
							<!-- action-header -->
							<div class="action-header clearfix">
								<div class="float-start hidden-xs d-flex ms-2">
									<div class="img_cont me-3">
										<img src="{{asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img" alt="img">
									</div>
									<div class="align-items-center mt-0">
										<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
										<span class="dot-label bg-success"></span><span class="me-3 text-white">online</span>
									</div>
								</div>
								<ul class="ah-actions actions align-items-center">
									<li class="call-icon">
										<a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="javascript:void(0);audiomodal">
											<i class="fe fe-phone"></i>
										</a>
									</li>
									<li class="video-icon">
										<a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="javascript:void(0);videomodal">
											<i class="fe fe-video"></i>
										</a>
									</li>
									<li class="dropdown">
										<a href="" data-bs-toggle="dropdown" aria-expanded="true">
											<i class="fe fe-more-vertical"></i>
										</a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><i class="fa fa-user-circle"></i> View profile</li>
											<li><i class="fa fa-users"></i>Add friends</li>
											<li><i class="fa fa-plus"></i> Add to group</li>
											<li><i class="fa fa-ban"></i> Block</li>
									</ul>
									</li>
									<li>
										<a href=""  class="" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true"><i class="fe fe-x-circle text-white"></i></span>
										</a>
									</li>
							</ul>
							</div>
							<!-- action-header end -->

							<!-- msg_card_body -->
							<div class="card-body msg_card_body">
								<div class="chat-box-single-line">
									<abbr class="timestamp">july 1st, 2021</abbr>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Hi, how are you Jenna Side?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										Hi Connor Paige i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										You welcome Connor Paige
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="{{asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Okay Bye, text you later..
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<!-- msg_card_body end -->
							<!-- card-footer -->
							<div class="card-footer">
								<div class="msb-reply d-flex">
									<div class="input-group">
										<input type="text" class="form-control " placeholder="Typing....">
										<div class="input-group-append ">
											<button type="button" class="btn btn-primary ">
												<i class="far fa-paper-plane" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div><!-- card-footer end -->
						</div>
					</div>
				</div>
			</div>

			<!--Video Modal -->
			<div id="videomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Nowa Video call</h5>
							<img src="{{asset('assets/img/faces/6.jpg')}}" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
											<i class="fas fa-video-slash"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone bg-danger text-white"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
											<i class="fas fa-microphone-slash"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- Audio Modal -->
			<div id="audiomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Nowa Voice call</h5>
							<img src="{{asset('assets/img/faces/6.jpg')}}" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
											<i class="fas fa-volume-up bg-light"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone text-white bg-primary"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape  rounded-circle mb-0 me-3" href="javascript:void(0);">
											<i class="fas fa-microphone-slash bg-light"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->
