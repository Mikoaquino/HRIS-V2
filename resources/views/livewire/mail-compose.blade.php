@extends('layouts.app')

    @section('styles')

		<!-- Internal Select2 css -->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">MAIL COMPOSE</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Mail Compose</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row opened -->
					<div class="row row-sm">
						<!-- Col -->
						<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
							<div class="card mg-b-20">
								<div class="main-content-left main-content-left-mail card-body">
									<a class="btn btn-primary btn-compose" href="" id="btnCompose">Compose</a>
									<div class="main-mail-menu">
										<nav class="nav main-nav-column mg-b-20">
											<a class="nav-link thumb active" href="javascript:void(0);"><i class="far fa-envelope"></i> Inbox <span>18</span></a>
											<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-star"></i> Starred <span>8</span></a>
											<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-clock"></i> Snoozed <span>6</span></a>
											<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-bookmark"></i> Important <span>15</span></a>
											<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-paper-plane"></i> Sent Mail <span>24</span></a>
											<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-hourglass"></i> Drafts <span>2</span></a>
											<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-dot-circle"></i> Spam <span>32</span></a>
											<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-comments"></i> Chats <span>14</span></a>
											<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-user-circle"></i> Contacts <span>547</span></a>
											<a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-trash"></i> Trash <span>365</span></a>
										</nav>
										<label class="main-content-label main-content-label-sm">Settings</label>
										<nav class="nav main-nav-column">
											<a class="nav-link active" href="javascript:void(0);">Email Settings</a>
										</nav>
									</div><!-- main-mail-menu -->
								</div>
							</div>
						</div>
						<!-- /Col -->
						<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Compose new message</h3>
								</div>
								<div class="card-body">
									<form >
										<div class="form-group">
											<div class="row align-items-center">
												<label class="col-sm-2">To</label>
												<div class="col-sm-10">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row align-items-center">
												<label class="col-sm-2">Subject</label>
												<div class="col-sm-10">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row ">
												<label class="col-sm-2">Message</label>
												<div class="col-sm-10">
													<textarea rows="10" class="form-control"></textarea>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="main-chat-footer d-sm-flex">
									<nav class="nav">
										<a class="nav-link" data-bs-toggle="tooltip" href="" title="" data-bs-original-title="Attach"><i class="bx bx-paperclip text-muted tx-18"></i></a>
										<a class="nav-link" data-bs-toggle="tooltip" href="" title="" data-bs-original-title="Link"><i class="bx bx-link text-muted tx-18"></i></a>
										<a class="nav-link" data-bs-toggle="tooltip" href="" title="" data-bs-original-title="Photos"><i class="bx bx-image text-muted tx-18"></i></a>
										<a class="nav-link" data-bs-toggle="tooltip" href="" title="" data-bs-original-title="Delete"><i class="bx bx-trash text-muted tx-18"></i></a>
									</nav>
									<div class="btn-list ms-auto">
                                         <a class="main-msg-send bg-primary text-white" href=""><i class="far fa-paper-plane"></i></a>
										<a  href="javascript:void(0);" class="ms-2 br-5 p-2 border " data-bs-toggle="dropdown"><i class="fe fe-more-vertical align-middle"></i></a>
										<div class="dropdown-menu tx-13">
											<a class="dropdown-item" href="javascript:void(0);">Schedule send</a>
											<a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
											<a class="dropdown-item" href="javascript:void(0);">Discard</a>
											<a class="dropdown-item" href="javascript:void(0);">Settings</a>
											<a class="dropdown-item" href="javascript:void(0);">Help and feedback</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

        <!--Internal Sparkline js -->
        <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Internal Select2.min js -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

    @endsection
