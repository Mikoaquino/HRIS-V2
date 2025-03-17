@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FILE MANAGER 1</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">File manager1</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-xl-12">
							<div class="row">
								<div class="col-6">
									<div class="tx-18 mb-4">
										Files
									</div>
								</div>
								<div class="col-6 col-auto">
								<div class="input-group mb-2">
									<input type="text" class="form-control" placeholder="Search files.....">
									<span class="input-group-append">
										<button class="btn ripple btn-primary" type="button">Search</button>
									</span>
								</div>
								</div>
							</div>
								<div class="row">
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">videos</h6>
												<span class="text-muted">4.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">Images</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">Downloads</h6>
												<span class="text-muted">453kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/word.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">Word document</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">Downloads</h6>
												<span class="text-muted">453kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
                                    <div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold">Downloads</h6>
												<span class="text-muted">453kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon1">
													<img src="{{asset('assets/img/files/doc.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-1">Document</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/image.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-2">login image</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
                                    <div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/image.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-2">beach image</h6>
												<span class="text-muted">4.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/image.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-2">sky image</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/image.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-2">Sea</h6>
												<span class="text-muted">897mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											<div class="d-flex align-items-center px-3 pt-3">
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/image.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-2">Outdoor Image</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
							</div>
							<ul class="pagination float-end mb-4">
								<li class="page-item page-prev disabled">
									<a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
								</li>
								<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
								<li class="page-item page-next">
									<a class="page-link" href="javascript:void(0);">Next</a>
								</li>
						    </ul>
						</div>
					</div>
					<!-- End Row -->

    @endsection

    @section('scripts')



    @endsection
