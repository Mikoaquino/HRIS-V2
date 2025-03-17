@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">ALERTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Alerts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="card" id="basic-alert">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Alerts</h6>
									<p class="text-muted card-sub-title">Use one of the four required contextual classes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Well done!</strong> You successfully read this  alert message.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										  </div>
										<div class="alert alert-info alert-dismissible fade show" role="alert">
											<strong>Heads up!</strong> This alert needs your attention, but it's not super .
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											<strong>Warning!</strong> Better check yourself, you're not looking too good.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-danger mg-b-0 alert-dismissible fade show" role="alert">
											<strong>Oh snap!</strong> Change a few things up and try submitting again.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="card" id="outline-alert">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Outline Alerts</h6>
									<p class="text-muted card-sub-title">Use one of the four required contextual classes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-outline-success alert-dismissible fade show" role="alert">
											<strong>Well done!</strong> You successfully read this  alert message.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										  </div>
										<div class="alert alert-outline-info alert-dismissible fade show" role="alert">
											<strong>Heads up!</strong> This alert needs your attention, but it's not super .
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-outline-warning alert-dismissible fade show" role="alert">
											<strong>Warning!</strong> Better check yourself, you're not looking too good.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-outline-danger mg-b-0 alert-dismissible fade show" role="alert">
											<strong>Oh snap!</strong> Change a few things up and try submitting again.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="card" id="solid-alert">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Solid Colored Alerts</h6>
									<p class="text-muted card-sub-title">Use one of the four required contextual classes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-solid-success alert-dismissible fade show" role="alert">
											<strong>Well done!</strong> You successfully read this  alert message.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										  </div>
										<div class="alert alert-solid-info alert-dismissible fade show" role="alert">
											<strong>Heads up!</strong> This alert needs your attention, but it's not super .
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-solid-warning alert-dismissible fade show" role="alert">
											<strong>Warning!</strong> Better check yourself, you're not looking too good.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-solid-danger mg-b-0 alert-dismissible fade show" role="alert">
											<strong>Oh snap!</strong> Change a few things up and try submitting again.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="card custom-card" id="dismiss-alerts">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dismissing Alerts</h6>
									<p class="text-muted card-sub-title">Using the alert JavaScript plugin, it’s possible to dismiss any alert inline.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											<strong>Holy guacamole!</strong> You should check in on some of those fields below.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Holy guacamole!</strong> You should check in on some of those fields below.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Holy guacamole!</strong> You should check in on some of those fields below.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
											<strong>Holy guacamole!</strong> You should check in on some of those fields below.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="card custom-card" id="icon-alerts">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Alert With Icon</h6>
									<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-default" role="alert">
											<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
											<span class="alert-inner--text"><strong>Default!</strong> This is a warning alert—check it out that has an icon too!</span>
										</div>
										<div class="alert alert-primary" role="alert">
											<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
											<span class="alert-inner--text"><strong>Primary!</strong> This is a warning alert—check it out that has an icon too!</span>
										</div>
										<div class="alert alert-success" role="alert">
											<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
											<span class="alert-inner--text"><strong>Success!</strong> This is a warning alert—check it out that has an icon too!</span>
										</div>
										<div class="alert alert-info" role="alert">
											<span class="alert-inner--icon"><i class="ti-bell"></i></span>
											<span class="alert-inner--text"><strong>Info!</strong> This is a warning alert—check it out that has an icon too!</span>
										</div>
										<div class="alert alert-warning" role="alert">
											<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
											<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
										</div>
										<div class="alert alert-danger mb-0" role="alert">
											<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
											<span class="alert-inner--text"><strong>Danger!</strong> This is a warning alert—check it out that has an icon too!</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="card custom-card" id="icon-dismissalerts">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Alert With Icon Dismissing</h6>
										<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="alert alert-default alert-dismissible fade show" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
												<span class="alert-inner--text"><strong>Default!</strong> This is a default alert—check it out!</span>
												<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="alert alert-primary alert-dismissible fade show" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
												<span class="alert-inner--text"><strong>Primary!</strong> This is a primary alert—check it out!</span>
												<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
												<span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
												<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="alert alert-warning alert-dismissible fade show" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
												<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
												<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="alert alert-info alert-dismissible fade show" role="alert">
												<span class="alert-inner--icon"><i class="ti-bell"></i></span>
												<span class="alert-inner--text"><strong>Info!</strong> This is a info alert—check it out!</span>
												<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
												<span class="alert-inner--text"><strong>Danger!</strong> This is a danger alert—check it out!</span>
												<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="card custom-card" id="link-alerts">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Link color Alerts</h6>
									<p class="text-muted card-sub-title">Use the <code class="highlighter-rouge">.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-primary" role="alert">
										  This is a primary alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-secondary" role="alert">
										  This is a secondary alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-success" role="alert">
										  This is a success alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-danger" role="alert">
										  This is a danger alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-warning" role="alert">
										  This is a warning alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-info" role="alert">
										  This is a info alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-light" role="alert">
										  This is a light alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-dark mb-0" role="alert">
										  This is a dark alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
									</div>
									</div>
								</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="card custom-card" id="additional-alerts">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Additional Content Alert</h6>
									<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-success mb-2" role="alert">
											<h4 class="alert-heading"><i class="fe fe-check-circle me-2 tx-20"></i>Well done!</h4>
											<p>Aww yeah, you successfully read this  alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
											<hr>
											<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
										</div>
										<div class="alert alert-warning mb-2" role="alert">
											<h4 class="alert-heading"><i class="fe fe-alert-octagon me-2 tx-20"></i>Warning!</h4>
											<p>Aww yeah, you successfully read this  alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
											<hr>
											<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
										</div>
										<div class="alert alert-danger mb-0" role="alert">
											<h4 class="alert-heading"><i class="fe fe-delete me-2 tx-20"></i>Error!</h4>
											<p>Aww yeah, you successfully read this  alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
											<hr>
											<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
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
