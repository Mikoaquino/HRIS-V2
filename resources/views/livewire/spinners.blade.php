@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SPINNERS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Spinners</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="card" id="spinner">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Example</h6>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="spinner-border" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="spinner2">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">BORDER SPINNERS</h6>
										<p class="text-muted card-sub-title">Use the border spinners for a lightweight loading indicator..</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div>
												<div class="spinner-border text-primary" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-secondary" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-success" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-danger" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-warning" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-info" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-light" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-border text-dark" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="spinner3">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">GROWING SPINNER</h6>
										<p class="text-muted card-sub-title">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="spinner-grow" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="spinner4">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">GROWING Color</h6>
										<p class="text-muted card-sub-title">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="spinner-grow text-primary" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-grow text-secondary" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-grow text-success" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-grow text-danger" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-grow text-warning" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-grow text-info" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-grow text-light" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-grow text-dark" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="spinner5">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">ALIGNMENT</h6>
										<p class="text-muted card-sub-title">Use flexbox utilities or text alignment utilities to place spinners exactly where you need them in any situation.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="text-center mg-b-20">
												<div class="spinner-border" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
											<div class="text-end">
												<div class="spinner-border" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="spinner6">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Size</h6>
										<p class="mg-b-20">Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="spinner-border spinner-border-sm" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-grow spinner-grow-sm" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="spinner7">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Button</h6>
										<p class="text-muted card-sub-title">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed..</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<button class="btn btn-primary" type="button">
												<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
												<span class="sr-only">Loading...</span>
											</button>
											<button class="btn btn-primary" type="button">
												<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
											  Loading...
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row row-sm">
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders">
										<div class="card-body">
											<div>
						                        <h3 class="card-title  mg-b-10">Circle Loader</h3>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-circle"><div></div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders1">
										<div class="card-body">
											<div>
						                        <h3 class="card-title  mg-b-10">Ring Loader</h3>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-dual-ring"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders2">
										<div class="card-body">
											<div>
						                        <h3 class="card-title  mg-b-10">Lines Loader</h3>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-facebook"><div></div><div></div><div></div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders3">
										<div class="card-body">
											<div>
						                        <h3 class="card-title  mg-b-10">Heart Loader</h3>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-heart"><div></div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders4">
										<div class="card-body">
											<div>
						                        <h3 class="card-title  mg-b-10">Ripple Loader</h3>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-ripple"><div></div><div></div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="card custom-card" id="loaders5">
										<div class="card-body">
											<div>
						                        <h3 class="card-title  mg-b-10">Spinner Loader</h3>
												<p class="text-muted card-sub-title">css loading animations</p>
											</div>
											<div class="text-center">
												<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
					<!-- /row -->

    @endsection

    @section('scripts')



    @endsection
