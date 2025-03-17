@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">DROPDOWNS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="basic">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Example</h6>
										<p class="text-muted card-sub-title">Basic dropdown.</p>
									</div>
									<div class="text-wrap">
										 <div class="example">
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-bs-toggle="dropdown" id="dropdownMenuButton" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-bs-toggle="dropdown" id="dropdownMenuButton1" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-teal" data-bs-toggle="dropdown" id="dropdownMenuButton2" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-light" data-bs-toggle="dropdown" id="dropdownMenuButton3" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="basic2">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Rounded button dropdowns</h6>
										<p class="text-muted card-sub-title">Basic dropdown Rounded Outline button</p>
									</div>
									<div class="text-wrap">
										 <div class="example">
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-rounded btn-primary" data-bs-toggle="dropdown" id="dropdownMenuButton4" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-rounded btn-secondary" data-bs-toggle="dropdown" id="dropdownMenuButton5" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple  btn-rounded btn-teal" data-bs-toggle="dropdown" id="dropdownMenuButton6" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple  btn-rounded btn-light" data-bs-toggle="dropdown" id="dropdownMenuButton7" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="basic3">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1"> Outline button dropdowns</h6>
										<p class="text-muted card-sub-title"> Dropdown square Outline button </p>
									</div>
									<div class="text-wrap">
										 <div class="example">
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-primary" data-bs-toggle="dropdown" id="dropdownMenuButton8" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-secondary" data-bs-toggle="dropdown" id="dropdownMenuButton9" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-success" data-bs-toggle="dropdown" id="dropdownMenuButton10" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-light" data-bs-toggle="dropdown" id="dropdownMenuButton11" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="basic4">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Rounded Outline button dropdowns</h6>
										<p class="text-muted card-sub-title"> Dropdowns with Rounded Outline button  </p>
									</div>
									<div class="text-wrap">
										 <div class="example">
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-rounded btn-outline-primary" data-bs-toggle="dropdown" id="dropdownMenuButton12" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-rounded btn-outline-secondary" data-bs-toggle="dropdown" id="dropdownMenuButton13" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple  btn-rounded btn-outline-success" data-bs-toggle="dropdown" id="dropdownMenuButton14" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple  btn-rounded btn-outline-light" data-bs-toggle="dropdown" id="dropdownMenuButton15" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="basic5">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Rounded  split  button dropdowns</h6>
										<p class="text-muted card-sub-title"> Dropdowns with Rounded  button  </p>
									</div>
									<div class="text-wrap">
										 <div class="example">
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-primary btn-rounded">Action</button>
													<button type="button" class="btn btn-primary  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-danger  btn-rounded">Action</button>
													<button type="button" class="btn btn-danger  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-info  btn-rounded">Action</button>
													<button type="button" class="btn btn-info  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-warning  btn-rounded">Action</button>
													<button type="button" class="btn btn-warning  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-light  btn-rounded">Action</button>
													<button type="button" class="btn btn-light  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="basic6">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1"> Outline split  button dropdowns</h6>
										<p class="text-muted card-sub-title"> Dropdowns with Rounded Outline button  </p>
									</div>
									<div class="text-wrap">
										 <div class="example">
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-primary">Action</button>
													<button type="button" class="btn btn-primary dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-danger">Action</button>
													<button type="button" class="btn btn-danger dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-info">Action</button>
													<button type="button" class="btn btn-info dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-warning">Action</button>
													<button type="button" class="btn btn-warning dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-light">Action</button>
													<button type="button" class="btn btn-light dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="basic7">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Rounded Outline split  button dropdowns</h6>
										<p class="text-muted card-sub-title"> Dropdowns with Rounded Outline button  </p>
									</div>
									<div class="text-wrap">
										 <div class="example">
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-outline-primary btn-rounded">Action</button>
													<button type="button" class="btn btn-outline-primary  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-outline-danger  btn-rounded">Action</button>
													<button type="button" class="btn btn-outline-danger  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-outline-info  btn-rounded">Action</button>
													<button type="button" class="btn btn-outline-info  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-outline-warning  btn-rounded">Action</button>
													<button type="button" class="btn btn-outline-warning  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-outline-light  btn-rounded">Action</button>
													<button type="button" class="btn btn-outline-light  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="basic8">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1"> Outline split  button dropdowns</h6>
										<p class="text-muted card-sub-title"> Dropdowns with Rounded Outline button  </p>
									</div>
									<div class="text-wrap">
										 <div class="example">
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-outline-primary">Action</button>
													<button type="button" class="btn btn-outline-primary dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-outline-danger">Action</button>
													<button type="button" class="btn btn-outline-danger dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-outline-info">Action</button>
													<button type="button" class="btn btn-outline-info dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-outline-warning">Action</button>
													<button type="button" class="btn btn-outline-warning dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown btn-group">
													<button type="button" class="btn btn-outline-light">Action</button>
													<button type="button" class="btn btn-outline-light dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="active">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Active Menu Item</h6>
										<p class="text-muted card-sub-title">Add active class to items in the dropdown to style them as active.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item active" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										     </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-teal" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item  active" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										     </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item   active" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										     </div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item active" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
										     </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="disabled">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Disabled Menu Item</h6>
										<p class="text-muted card-sub-title">Add disabled class to items in the dropdown to style them as disabled.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item disabled" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
										    <div class="btn-group ms-2 mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-teal" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item disabled" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
										    <div class="btn-group ms-2  mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item disabled" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
										    <div class="btn-group ms-2  mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item disabled" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="header">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Dropdown Header</h6>
										<p class="text-muted card-sub-title">Add a header to label sections of actions in any dropdown menu.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
										    <div class="btn-group ms-2  mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
										    <div class="btn-group ms-2  mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
										    <div class="btn-group  ms-2  mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
										    <div class="btn-group  ms-2  mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="right">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Dropright & Dropleft</h6>
										<p class="text-muted card-sub-title">Trigger dropdown menus above elements by adding dropright & dropleft class to the parent element.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-xs">
												<div class="col-sm-6 col-md-3">
													<div class="dropdown dropend">
														<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-bs-toggle="dropdown" id="droprightMenuButton" type="button">Dropright Menu<i class="fas fa-caret-right ms-1"></i></button>
														<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
															<a class="dropdown-item" href="javascript:void(0);">Action</a>
															<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
													<div class="dropdown dropstart">
														<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger dropdown-toggle" data-bs-toggle="dropdown" id="dropleftMenuButton" type="button">Dropleft Menu</button>
														<div aria-labelledby="dropleftMenuButton" class="dropdown-menu tx-13">
															<a class="dropdown-item" href="javascript:void(0);">Action</a>
															<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="basic9">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Dropdown with icons</h6>
										<p class="text-muted card-sub-title">Basic dropdown with icons.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-xs wd-xl-80p">
												<div class="btn-group mb-2 mt-2">
												  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fe fe-mail "></i>
												  </button>
												  <ul class="dropdown-menu">
													<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
													<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
													<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>

													<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
												  						</ul>
												</div>
												<div class="btn-group mb-2 mt-2">
												  <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fe fe-more-horizontal"></i>
												  </button>
												  <ul class="dropdown-menu">
													<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
													<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
													<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>

													<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
												  						</ul>
												</div>
												<div class="btn-group mb-2 mt-2">
												  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												  </button>
												  <ul class="dropdown-menu">
													<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
													<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
													<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>

													<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
												  						</ul>
												</div>
												<div class="btn-group mb-2 mt-2">
												  <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fe fe-settings"></i>
												  </button>
												  <ul class="dropdown-menu">
													<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
													<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
													<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>

													<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
												  						</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card custom-card" id="divider">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Dropdown Divider</h6>
										<p class="text-muted card-sub-title">Separate groups of related menu items with a divider.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="btn-group ms-2  mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:void(0);">Action</a> <a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0);">Separated link</a>
													</div>
												</div>
											</div>
											<div class="btn-group ms-2  mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:void(0);">Action</a> <a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0);">Separated link</a>
													</div>
												</div>
											</div>
											<div class="btn-group ms-2  mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:void(0);">Action</a> <a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0);">Separated link</a>
													</div>
												</div>
											</div>
											<div class="btn-group ms-2  mt-2 mb-2">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:void(0);">Action</a> <a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0);">Separated link</a>
													</div>
												</div>
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
