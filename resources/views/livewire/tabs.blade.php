@extends('layouts.app')

    @section('styles')

		<!---Internal Input tags css-->
		<link href="{{asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TABS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tabs</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-lg-12 col-md-12">
							<div class="card" id="basic-alert">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Style Tabs</h6>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="panel panel-primary tabs-style-1">
												<div class=" tab-menu-heading">
													<div class="tabs-menu1">
														<!-- Tabs -->
														<ul class="nav panel-tabs main-nav-line">
															<li class="nav-item"><a href="#tab1" class="nav-link active" data-bs-toggle="tab">Tab 01</a></li>
															<li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Tab 02</a></li>
															<li class="nav-item"><a href="#tab3" class="nav-link" data-bs-toggle="tab">Tab 03</a></li>
														</ul>
													</div>
												</div>
												<div class="panel-body tabs-menu-body main-content-body-right border-top-0 border">
													<div class="tab-content">
														<div class="tab-pane active" id="tab1">
															blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sintaccusamus et iusto odio  At vero eos et dignissimos ducimus qui  occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
														</div>
														<div class="tab-pane" id="tab2">
															<p>cum soluta nobis est eligendi optio cumque nihil Et harum quidem rerum facilis est et expedita distinctio., similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil Et harum quidem rerum facilis est et expedita distinctio.  impedit quo minus id quod maxime</p>
															<p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
														</div>
														<div class="tab-pane" id="tab3">
															<p>aborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio cupiditate non provident praesentium</p>
															<p class="mb-0">deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.similique sunt in culpa qui officia  Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-12">
							<!-- div -->
							<div class="card mg-b-20" id="tabs-style2">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Basic Style2 Tabs
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="text-wrap">
										<div class="example">
											<div class="panel panel-primary tabs-style-2">
												<div class=" tab-menu-heading">
													<div class="tabs-menu1">
														<!-- Tabs -->
														<ul class="nav panel-tabs main-nav-line">
															<li><a href="#tab4" class="nav-link active" data-bs-toggle="tab">Tab 01</a></li>
															<li><a href="#tab5" class="nav-link" data-bs-toggle="tab">Tab 02</a></li>
															<li><a href="#tab6" class="nav-link" data-bs-toggle="tab">Tab 03</a></li>
						</ul>
													</div>
												</div>
												<div class="panel-body tabs-menu-body main-content-body-right border">
													<div class="tab-content">
														<div class="tab-pane active" id="tab4">
															voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
														</div>
														<div class="tab-pane" id="tab5">
															<p>cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
															<p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
														</div>
														<div class="tab-pane" id="tab6">
															<p>cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas sint occaecati cupiditate non provident,</p>
															<p class="mb-0">scupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /div -->

						<div class="col-xl-12">
							<!-- div -->
							<div class="card mg-b-20" id="tabs-style3">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Basic Style3 Tabs
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="text-wrap">
										<div class="example">
											<div class="panel panel-primary tabs-style-3">
												<div class="tab-menu-heading">
													<div class="tabs-menu ">
														<!-- Tabs -->
														<ul class="nav panel-tabs">
															<li class=""><a href="#tab11" class="active" data-bs-toggle="tab"> Tab Style 01</a></li>
															<li><a href="#tab12" data-bs-toggle="tab"> Tab Style 02</a></li>
															<li><a href="#tab13" data-bs-toggle="tab">Tab Style 03</a></li>
															<li><a href="#tab14" data-bs-toggle="tab">Tab Style 04</a></li>
						</ul>
													</div>
												</div>
												<div class="panel-body tabs-menu-body">
													<div class="tab-content">
														<div class="tab-pane active" id="tab11">
															<p>cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p class="mb-0">cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
														</div>
														<div class="tab-pane" id="tab12">
															<p> cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
															<p class="mb-0">cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas et quas voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
														</div>
														<div class="tab-pane" id="tab13">
															<p>cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas repudiandae sint et molestiae non recusandae</p>
															<p class="mb-0">cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
														</div>
														<div class="tab-pane" id="tab14">
															<p>cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
															<p class="mb-0">cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /div -->

						<div class="col-xl-12">
							<!-- div -->
							<div class="card" id="tabs-style4">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vertical Tabs
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="text-wrap">
										<div class="example">
											<div class="d-md-flex">
												<div class="">
													<div class="panel panel-primary tabs-style-4">
														<div class="tab-menu-heading">
															<div class="tabs-menu ">
																<!-- Tabs -->
																<ul class="nav panel-tabs me-3">
																	<li class=""><a href="#tab21" class="active" data-bs-toggle="tab"> Tab Style 01</a></li>
																	<li><a href="#tab22" data-bs-toggle="tab"> Tab Style 02</a></li>
																	<li><a href="#tab23" data-bs-toggle="tab"> Tab Style 03</a></li>
																	<li><a href="#tab24" data-bs-toggle="tab"> Tab Style 04</a></li>
								</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="tabs-style-4 ">
													<div class="panel-body tabs-menu-body">
														<div class="tab-content">
															<div class="tab-pane active" id="tab21">
																<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																<p class="mb-0">cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
															</div>
															<div class="tab-pane" id="tab22">
																<p> Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																<p> Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																<p class="mb-0">cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															</div>
															<div class="tab-pane" id="tab23">
																<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti sint et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																<p class="mb-0">Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
															</div>
															<div class="tab-pane" id="tab24">
																<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum delenitiof pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																<p class="mb-0">Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
			                          </div>
								 </div>
									<!-- /div -->
								</div>
							</div>
						</div>
						<div class="col-xl-12">
							<!-- div -->
							<div class="card" id="tabs-style5">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Horizontal Tabs-right-side
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="text-wrap">
										<div class="example">
											<div class="panel panel-primary">
												<div class="tab_wrapper right_tab">
													<ul class="tab_list">
														<li class="active">Tab 1</li>
														<li>Tab 2</li>
														<li>Tab 3</li>
												</ul>
													<div class="content_wrapper">
														<div class="tab_content active">
															<p class="mb-1">Circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally  except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences,To take a trivial example, which of us ever undertakes laborious physical exercise, Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally  except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one ?</p>
														</div>

														<div class="tab_content">
															<p class="mb-1">Circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally  except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences,To take a trivial example, which of us ever undertakes laborious physical exercise, Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally  except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one ?</p>
														</div>

														<div class="tab_content">
															<p class="mb-1">Circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally  except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences,To take a trivial example, which of us ever undertakes laborious physical exercise, Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally  except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one ?</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->
								</div>
							</div>
						</div>

    @endsection

    @section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Input tags js-->
		<script src="{{asset('assets/plugins/inputtags/inputtags.js')}}"></script>

		<!--- Tabs JS-->
		<script src="{{asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
		<script src="{{asset('assets/js/tabs.js')}}"></script>

    @endsection
