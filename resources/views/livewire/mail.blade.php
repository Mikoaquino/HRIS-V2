@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">MAIL</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Mail</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm main-content-mail">
						<div class="col-lg-4 col-xl-3 col-md-12">
							<div class="card mg-b-20">
								<div class="main-content-left main-content-left-mail card-body">
									<a class="btn btn-primary btn-compose" href="" id="btnCompose">Compose</a>
									    <div class="main-mail-menu">
												<nav class="nav main-nav-column mg-b-20">
													<a class="nav-link thumb active" href="javascript:void(0);"><i class="far fa-envelope"></i> Inbox <span>20</span></a>
													<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-bookmark"></i> Important <span>10</span></a>
													<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-paper-plane"></i> Sent Mail <span>8</span></a>
													<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-hourglass"></i> Drafts <span>15</span></a>
													<a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-trash"></i> Trash <span>6</span></a>
												</nav>
											<label class="main-content-label main-content-label-sm ms-3">Label</label>
												<nav class="nav main-nav-column mg-b-20">
													<a class="nav-link thumb" href="javascript:void(0);"><i class="fab fa-instagram"></i> Social <span>10</span></a>
													<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-plus-square"></i> Promotions <span>22</span></a>
													<a class="nav-link thumb" href="javascript:void(0);"><i class="far fa-arrow-alt-circle-up"></i> Updates <span>17</span></a>
												</nav>
										</div><!-- main-mail-menu -->
								    </div>
							    </div>
							<div class="card mt-3">
								<div class="card-body">
									<label class="main-content-label">contacts</label>
									<nav class="nav main-nav-column">
											<div class="main-contact-item ps-0">
												<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/2.jpg')}}"></div>
												<div class="main-contact-body">
													<h6>Abigail Johnson</h6><span class="phone">+1-234-567-890</span>
												</div>
											</div>
											<div class="main-contact-item ps-0">
												<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/1.jpg')}}"></div>
												<div class="main-contact-body">
													<h6>Cherry Blossom</h6><span class="phone">+1-644-767-890</span>
												</div>
											</div>
											<div class="main-contact-item ps-0">
												<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/12.jpg')}}"></div>
												<div class="main-contact-body">
													<h6>Liz Erd</h6><span class="phone">+1-634-577-890</span>
												</div>
											</div>
											<div class="main-contact-item ps-0">
												<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/11.jpg')}}"></div>
												<div class="main-contact-body">
													<h6>Colin Sik</h6><span class="phone">+1-834-367-890</span>
												</div>
											</div>
											<div class="main-contact-item ps-0">
												<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/4.jpg')}}"></div>
												<div class="main-contact-body">
													<h6>Rita Book</h6><span class="phone">+1-233-867-830</span>
												</div>
											</div>
											<div class="main-contact-item ps-0">
												<div class="main-img-user online"><img alt="avatar" src="{{asset('assets/img/faces/5.jpg')}}"></div>
												<div class="main-contact-body">
													<h6>Col Fays</h6><span class="phone">+1-144-577-690</span>
												</div>
											</div>
									    </nav>
								    </div>
							    </div>
						    </div>
						    <div class="col-lg-8 col-xl-9 col-md-12">
							    <div class="card">
								    <div class="main-content-body main-content-body-mail card-body">
										<div class="mail-option">
											<div class="chk-all border-0">
												<div class="btn-group">
													<a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn mini all" aria-expanded="false">
														All
														<i class="fe fe-chevron-down"></i>
													</a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0);"> None</a></li>
														<li><a href="javascript:void(0);"> Read</a></li>
														<li><a href="javascript:void(0);"> Unread</a></li>
												</ul>
												</div>
											</div>
											<div class="btn-group me-2">
												<a href="javascript:void(0);" class="btn mini tooltips">
													<i class="fe fe-repeat"></i>
												</a>
											</div>
											<div class="btn-group hidden-phone">
												<a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn mini blue" aria-expanded="false">
													More
													<i class="fe fe-chevron-down"></i>
												</a>
												<ul class="dropdown-menu">
													<li><a href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Mark as Read</a></li>
													<li><a href="javascript:void(0);"><i class="fe fe fe-slash me-2"></i> Spam</a></li>
													<li class="divider"></li>
													<li><a href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a></li>
											</ul>
											</div>
											<ul class="unstyled inbox-pagination">
												<li><span>1-50 of 234</span></li>

												<li class="mt-1">
													<a class="btn np-btn" href="javascript:void(0);"><i class="fe fe-chevron-right pagination-right"></i></a>
												</li>
										</ul>
										</div><!-- main-mail-list-header -->
									</div><!-- main-mail-options -->
									<div class="main-mail-list bd-t-0">
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/5.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Adrian Monino
												</div>
												<div class="main-mail-subject">
													<strong>Someone who believes in you</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-attachment">
											</div>
											<div class="main-mail-date">
												11:30am
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star active">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/2.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Albert Ansing
												</div>
												<div class="main-mail-subject">
													<strong>Here's What You Missed This Week</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor...</span>
												</div>
											</div>
											<div class="main-mail-date">
												06:50am
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/9.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Carla Guden
												</div>
												<div class="main-mail-subject">
													<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-attachment">
											</div>
											<div class="main-mail-date">
												Yesterday
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/10.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Reven Galeon
												</div>
												<div class="main-mail-subject">
													<strong>We're Giving a Macbook for Free</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Yesterday
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/12.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Elisse Tan
												</div>
												<div class="main-mail-subject">
													<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 13
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/14.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Marianne Audrey
												</div>
												<div class="main-mail-subject">
													<strong>We've Made Some Changes</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 13
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-avatar bg-gray-800">
												J
											</div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Jane Phoebe
												</div>
												<div class="main-mail-subject">
													<strong>Grab Our Holiday Deals</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 12
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/15.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Raffy Godinez
												</div>
												<div class="main-mail-subject">
													<strong>Just a Few Steps Away</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 05
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star active">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/7.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Allan Cadungog
												</div>
												<div class="main-mail-subject">
													<strong>Credit Card Promos</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 04
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/10.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Alfie Salinas
												</div>
												<div class="main-mail-subject">
													<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 02
											</div>
										</div>
										<div class="main-mail-item border-bottom-0">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/1.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Jove Guden
												</div>
												<div class="main-mail-subject">
													<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 02
											</div>
										</div>
									</div>
									<div class="mg-lg-b-30"></div>
								</div>
							</div>
						</div>
						<div class="main-mail-compose">
							<div>
								<div class="container">
									<div class="main-mail-compose-box">
										<div class="main-mail-compose-header">
											<span>New Message</span>
											<nav class="nav">
												<a class="nav-link" href=""><i class="fas fa-minus"></i></a> <a class="nav-link" href=""><i class="fas fa-compress"></i></a> <a class="nav-link" href=""><i class="fas fa-times"></i></a>
											</nav>
										</div>
										<div class="main-mail-compose-body">
											<div class="form-group">
												<label class="form-label">To</label>
												<div>
													<input class="form-control" placeholder="Enter recipient's email address" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="form-label">Subject</label>
												<div>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="form-group">
												<textarea class="form-control" placeholder="Write your message here..." rows="8"></textarea>
											</div>
											<div class="form-group mg-b-0">
												<nav class="nav">
													<a class="nav-link" data-bs-toggle="tooltip" href="" title="Add attachment"><i class="fas fa-paperclip"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="Add photo"><i class="far fa-image"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="Add link"><i class="fas fa-link"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="Emoticons"><i class="far fa-smile"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="Discard"><i class="far fa-trash-alt"></i></a>
												</nav><button class="btn btn-primary">Send</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
                            <ul class="pagination product-pagination ms-auto float-end">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item page-next">
                                    <a class="page-link" href="javascript:void(0);">Next</a>
                                </li>
                            </ul>
						</div>
                        <!-- COL-END -->

    @endsection

    @section('scripts')

		<!--Internal Sparkline js -->
		<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

		<!--- Internal Check-all-mail js --->
		<script src="{{asset('assets/js/check-all-mail.js')}}"></script>

		<!--Internal Apexchart js-->
		<script src="{{asset('assets/js/apexcharts.js')}}"></script>

    @endsection
