@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">BUTTONS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">ELements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Buttons</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card" id="button1">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Default Buttons</h3>
									<p class="mg-b-20">Below example buttons are basic default buttons..</p>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-list">
												<a href="javascript:void(0);" class="btn btn-primary">Primary</a>
												<a href="javascript:void(0);" class="btn btn-secondary">Secondary</a>
												<a href="javascript:void(0);" class="btn btn-success">Success</a>
												<a href="javascript:void(0);" class="btn btn-info">Info</a>
												<a href="javascript:void(0);" class="btn btn-warning">Warning</a>
												<a href="javascript:void(0);" class="btn btn-danger">Danger</a>
												<a href="javascript:void(0);" class="btn btn-light">Light</a>
												<a href="javascript:void(0);" class="btn btn-link">Link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Disabled Buttons</h3>
									<p class="mg-b-20">Below example buttons are  Disabled Buttons..</p>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-list">
												<a href="javascript:void(0);" class="btn btn-primary disabled">Primary</a>
												<a href="javascript:void(0);" class="btn btn-secondary disabled">Secondary</a>
												<a href="javascript:void(0);" class="btn btn-success disabled">Success</a>
												<a href="javascript:void(0);" class="btn btn-info disabled">Info</a>
												<a href="javascript:void(0);" class="btn btn-warning disabled">Warning</a>
												<a href="javascript:void(0);" class="btn btn-danger disabled">Danger</a>
												<a href="javascript:void(0);" class="btn btn-light disabled">Light</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card" id="button33">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Gradient Buttons</h3>
									<p class="mg-b-20">Below example buttons are basic Gradient  buttons..</p>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-list">
												<a href="javascript:void(0);" class="btn btn-primary-gradient ">Primary</a>
												<a href="javascript:void(0);" class="btn btn-secondary-gradient ">Secondary</a>
												<a href="javascript:void(0);" class="btn btn-success-gradient ">Success</a>
												<a href="javascript:void(0);" class="btn btn-info-gradient ">Info</a>
												<a href="javascript:void(0);" class="btn btn-warning-gradient ">Warning</a>
												<a href="javascript:void(0);" class="btn btn-danger-gradient ">Danger</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Light Buttons</h3>
									<p class="mg-b-20">Below example buttons are basic transparent light  buttons..</p>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-list">
												<a href="javascript:void(0);" class="btn btn-primary-light ">Primary</a>
												<a href="javascript:void(0);" class="btn btn-secondary-light ">Secondary</a>
												<a href="javascript:void(0);" class="btn btn-success-light ">Success</a>
												<a href="javascript:void(0);" class="btn btn-info-light ">Info</a>
												<a href="javascript:void(0);" class="btn btn-warning-light ">Warning</a>
												<a href="javascript:void(0);" class="btn btn-danger-light ">Danger</a>
												<a href="javascript:void(0);" class="btn  btn-dark-light  ">Dark</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="card" id="button2">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Outline Buttons</h3>
									<p class="mg-b-20">Below example buttons are basic Outline Buttons..</p>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-list">
												<a href="javascript:void(0);" class="btn btn-outline-primary ">Primary</a>
												<a href="javascript:void(0);" class="btn btn-outline-secondary ">Secondary</a>
												<a href="javascript:void(0);" class="btn btn-outline-success ">Success</a>
												<a href="javascript:void(0);" class="btn btn-outline-info ">Info</a>
												<a href="javascript:void(0);" class="btn btn-outline-warning ">Warning</a>
												<a href="javascript:void(0);" class="btn btn-outline-danger ">Danger</a>
												<a href="javascript:void(0);" class="btn btn-outline-dark  ">Dark</a>
												<a href="javascript:void(0);" class="btn btn-outline-light  ">Light</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="card" id="button38">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">ROUNDED BUTTONS</h3>
									<p class="mg-b-20">Below example buttons are basic rounded Buttons..</p>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-list">
												<a href="javascript:void(0);" class="btn btn-primary btn-rounded">Primary</a>
												<a href="javascript:void(0);" class="btn btn-secondary  btn-rounded ">Secondary</a>
												<a href="javascript:void(0);" class="btn btn-success   btn-rounded">Success</a>
												<a href="javascript:void(0);" class="btn btn-info  btn-rounded">Info</a>
												<a href="javascript:void(0);" class="btn btn-warning  btn-rounded">Warning</a>
												<a href="javascript:void(0);" class="btn btn-danger  btn-rounded">Danger</a>
												<a href="javascript:void(0);" class="btn btn-dark   btn-rounded">Dark</a>
												<a href="javascript:void(0);" class="btn btn-light   btn-rounded">Light</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="card" id="button3">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">ROUNDED OUTLINE BUTTONS</h3>
									<p class="mg-b-20">Below example buttons are basic rounded outline Buttons..</p>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-list">
												<a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded">Primary</a>
												<a href="javascript:void(0);" class="btn btn-outline-secondary  btn-rounded ">Secondary</a>
												<a href="javascript:void(0);" class="btn btn-outline-success   btn-rounded">Success</a>
												<a href="javascript:void(0);" class="btn btn-outline-info  btn-rounded">Info</a>
												<a href="javascript:void(0);" class="btn btn-outline-warning  btn-rounded">Warning</a>
												<a href="javascript:void(0);" class="btn btn-outline-danger  btn-rounded">Danger</a>
												<a href="javascript:void(0);" class="btn btn-outline-dark   btn-rounded">Dark</a>
												<a href="javascript:void(0);" class="btn btn-outline-light   btn-rounded">Light</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Button with loading animation</h3>
									<p class="mg-b-20">A basic button with added loaders...</p>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-xs wd-xl-80p btn-list btn-animation">
											   <button type="button" class="btn btn-secondary btn-spiner ms-2"><span class="loading">loading...</span></button>
												<button type="button" class="btn btn-success btn-spiner ms-2"><span class="loading">loading...</span></button>
												<button type="button" class="btn btn-warning btn-spiner ms-2"><span class="loading">loading...</span></button>
												<button type="button" class="btn btn-primary btn-loaders ms-2"><span class="loading">loading...</span></button>
												<button type="button" class="btn btn-danger btn-loaders ms-2"><span class="loading">loading...</span></button>
												<button type="button" class="btn btn-info btn-loaders ms-2"><span class="loading">loading...</span></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">BUTTON WITH ICONS</h3>
									<p class="mg-b-20">A basic button with added icons...</p>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-xs wd-xl-80p btn-list">
												<button type="button" class="btn btn-dark button-icon"><i class="fe fe-upload"></i></button>
												<button type="button" class="btn btn-warning mx-2 button-icon"><i class="fe fe-heart me-2"></i>I like</button>
												<button type="button" class="btn btn-outline-success button-icon"><i class="fe fe-check"></i></button>
												<button type="button" class="btn btn-outline-primary mx-2 button-icon"><i class="fe fe-plus me-2"></i>More</button>
												<button type="button" class="btn btn-secondary-light button-icon"><i class="fe fe-link"></i></button>
												<button type="button" class="btn btn-info-light mx-2 button-icon"><i class="fe fe-message-circle me-2"></i>Comment</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-xl-6">
							<div class="card" id="button5">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">ICON BUTTONS</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication....</p>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-icon-list btn-list">
												<button type="button" class="btn btn-icon btn-primary me-1"><i class="fe fe-activity"></i></button>
												<button type="button" class="btn btn-icon  btn-dark me-1"><i class="fe fe-github"></i></button>
												<button type="button" class="btn btn-icon  btn-success me-1"><i class="fe fe-bell"></i></button>
												<button type="button" class="btn btn-icon  btn-warning me-1"><i class="fe fe-star"></i></button>
												<button type="button" class="btn btn-icon  btn-danger me-1"><i class="fe fe-trash"></i></button>
												<button type="button" class="btn btn-icon  btn-purple me-1"><i class="fe fe-bar-chart"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="col-lg-6 col-md-12 col-xl-6">
								<div class="card">
									<div class="card-body">
						         <h3 class="card-title  mg-b-10">Button size</h3>
									<p class="mg-b-20">A basic button with sizes</p>
										<div class="">
											<div class="example">
												<div class="btn-list">
													<div class="row">
														<div class="col-md-4 mb-2">
															<button type="button" class="btn btn-warning btn-sm mb-1">Small button</button>
														</div>
														<div class="col-md-4 mb-2">
															<button type="button" class="btn btn-info mb-1">Medium button</button>
														</div>
														<div class="col-md-4 mb-2">
															<button type="button" class="btn btn-success btn-lg mb-1">Large button</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						<div class="col-lg-6 col-md-12 col-xl-6">
							<div class="card" id="button6">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Button Widths</h3>
									<p class="mg-b-20">A basic button with Width sizes</p>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-list">
												<button type="button" class="btn btn-primary btn-w-xs mb-1">XS</button>
												<button type="button" class="btn btn-teal btn-w-sm mb-1">SM</button>
												<button type="button" class="btn btn-danger btn-w-sm mb-1">MD</button>
												<button type="button" class="btn btn-success btn-w-lg mb-1">LG</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

							<div class="col-lg-12 col-md-12 col-xl-12">
								<div class="card">
									<div class="card-body">
						         <h3 class="card-title  mg-b-10">Button size</h3>
									<p class="mg-b-20">A basic button block sizes</p>
										<div class="">
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
													<button type="button" class="btn btn-secondary btn-md btn-block">Block level button</button>
													<button type="button" class="btn btn-info btn-sm btn-block">Block level button</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-6 col-md-12 col-xl-6">
								<div class="card">
									<div class="card-body">
						         <h3 class="card-title  mg-b-10">Checkbox  button groups</h3>
										<div class="">
											<div class="example">
												<div class="group-btn">
													<div class="row">
														<div class="btn-group" role="group" aria-label="Basic ">
														  <input type="checkbox" class="btn-check" id="btncheck1" >
														  <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

														  <input type="checkbox" class="btn-check" id="btncheck2" >
														  <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

														  <input type="checkbox" class="btn-check" id="btncheck3" >
														  <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-6 col-md-12 col-xl-6">
								<div class="card">
									<div class="card-body">
						         <h3 class="card-title  mg-b-10">Radio button groups</h3>
										<div class="">
											<div class="example">
												<div class="group-btn">
													<div class="row">
														<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
														  <input type="radio" class="btn-check" name="btnradio" id="btnradio21"  checked>
														  <label class="btn btn-outline-primary" for="btnradio21">Radio 1</label>

														  <input type="radio" class="btn-check" name="btnradio" id="btnradio22" >
														  <label class="btn btn-outline-primary" for="btnradio22">Radio 2</label>

														  <input type="radio" class="btn-check" name="btnradio" id="btnradio33" >
														  <label class="btn btn-outline-primary" for="btnradio33">Radio 3</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-12 col-md-12 col-xl-12">
								<div class="card">
									<div class="card-body">
						         <h3 class="card-title  mg-b-10">Button Toolbar</h3>
										<div class="">
											<div class="example">
												<div class="btn-list">
													<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
														<div class="btn-group me-2 mt-2 mb-2" role="group" aria-label="First group">
														  <button type="button" class="btn btn-primary">1</button>
														  <button type="button" class="btn btn-primary">2</button>
														  <button type="button" class="btn btn-primary">3</button>
														  <button type="button" class="btn btn-primary">4</button>
														</div>
														<div class="btn-group me-2 mt-2 mb-2" role="group" aria-label="Second group">
														  <button type="button" class="btn btn-primary">5</button>
														  <button type="button" class="btn btn-primary">6</button>
														  <button type="button" class="btn btn-primary">7</button>
														</div>
														<div class="btn-group mt-2 mb-2" role="group" aria-label="Third group">
														  <button type="button" class="btn btn-primary">8</button>
														</div>
													  </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-12 col-md-12 col-xl-12">
								<div class="card">
									<div class="card-body">
						         <h3 class="card-title  mg-b-10">Toggle buttons</h3>
										<div class="">
											<div class="example">
												<div class="">
													<div class="row">
														<div class="btn-list">
															<button type="button" class="btn btn-primary" data-bs-toggle="button" >Toggle button</button>
															<button type="button" class="btn btn-primary active" data-bs-toggle="button"  aria-pressed="true">Active toggle button</button>
															<button type="button" class="btn btn-primary" disabled data-bs-toggle="button" >Disabled toggle button</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						<div class="col-lg-12 col-md-12 col-xl-12">
							<div class="card" id="button61">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">DROPDOWN BUTTONS</h3>
									<p class="mg-b-20">A button variant for using only icons.</p>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-xs wd-xl-80p">
												<div class="col-sm-6 col-md-3">
													<button data-bs-toggle="dropdown" class="btn btn-secondary btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
													<div class="dropdown-menu">
														<a href="" class="dropdown-item">Profile</a>
														<a href="" class="dropdown-item">Activity Logs</a>
														<a href="" class="dropdown-item">Account Settings</a>
														<a href="" class="dropdown-item">Logout</a>
													</div><!-- dropdown-menu -->
												</div>
												<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
													<button data-bs-toggle="dropdown" class="btn btn-primary btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
													<div class="dropdown-menu">
														<a href="" class="dropdown-item">Profile</a>
														<a href="" class="dropdown-item">Activity Logs</a>
														<a href="" class="dropdown-item">Account Settings</a>
														<a href="" class="dropdown-item">Logout</a>
													</div><!-- dropdown-menu -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-xl-12">
							<div class="card" id="button7">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Button Groups</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication..</p>
									<div class="text-wrap">
										<div class="example ">
											<div class="row row-sm">
												<div class="col-lg-6">
													<div aria-label="Basic example" class="btn-group" role="group">
														<button class="btn btn-secondary pd-x-25 active" type="button">Left</button> <button class="btn btn-secondary pd-x-25" type="button">Center</button> <button class="btn btn-secondary pd-x-25" type="button">Right</button>
													</div>
												</div><!-- col-4 -->
												<div class="col-lg-3 mg-t-20 mg-lg-t-0">
													<div aria-label="Basic example" class="btn-group" role="group">
														<button class="btn btn-primary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
													</div>
												</div><!-- col-2 -->
												<div class="col-lg-3 mg-t-20 mg-lg-t-0">
													<div aria-label="Basic example" class="btn-group" role="group">
														<button class="btn btn-secondary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
													</div>
												</div><!-- col-4 -->
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
