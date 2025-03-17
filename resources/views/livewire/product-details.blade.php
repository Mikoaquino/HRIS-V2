@extends('layouts.app')

    @section('styles')

        <!--Internal  Nice-select css  -->
        <link href="{{asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" />

    @endsection

    @section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">PRODUCT DETAILS</span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Ecommerce</a></li>
							<li class="breadcrumb-item active" aria-current="page">Product details</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body ">
								<div class="row row-sm ">
									<div class=" col-xl-6 col-lg-12 col-md-12">
										<div class="row">
											<div class="col-xl-2">
												<div class="clearfix carousel-slider">
													<div id="thumbcarousel" class="carousel slide" data-bs-interval="t">
														<div class="carousel-inner">
															<ul class="carousel-item active">
																<li data-bs-target="#Slider" data-bs-slide-to="0"
																	class="thumb active my-2"><img
																		src="{{asset('assets/img/ecommerce/shirt-1')}}.png"
																		alt="img"></li>
																<li data-bs-target="#Slider" data-bs-slide-to="1"
																	class="thumb my-2"><img
																		src="{{asset('assets/img/ecommerce/shirt-3')}}.png"
																		alt="img"></li>
																<li data-bs-target="#Slider" data-bs-slide-to="2"
																	class="thumb my-2"><img
																		src="{{asset('assets/img/ecommerce/shirt-4')}}.png"
																		alt="img"></li>
																<li data-bs-target="#Slider" data-bs-slide-to="3"
																	class="thumb my-2"><img
																		src="{{asset('assets/img/ecommerce/shirt-2')}}.png"
																		alt="img"></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-10">
												<div class="product-carousel  border br-5">
													<div id="Slider" class="carousel slide" data-bs-ride="false">
														<div class="carousel-inner">
															<div class="carousel-item active"><img
																	src="{{asset('assets/img/ecommerce/shirt-1')}}.png" alt="img"
																	class="img-fluid mx-auto d-block">
																<div class="text-center mt-5 mb-5 btn-list">
																</div>
															</div>
															<div class="carousel-item"> <img
																	src="{{asset('assets/img/ecommerce/shirt-3')}}.png" alt="img"
																	class="img-fluid mx-auto d-block">
																<div class="text-center mb-5 mt-5 btn-list">
																</div>
															</div>
															<div class="carousel-item"> <img
																	src="{{asset('assets/img/ecommerce/shirt-4')}}.png" alt="img"
																	class="img-fluid mx-auto d-block">
																<div class="text-center  mb-5 mt-5 btn-list">
																</div>
															</div>
															<div class="carousel-item"> <img
																	src="{{asset('assets/img/ecommerce/shirt-2')}}.png" alt="img"
																	class="img-fluid mx-auto d-block">
																<div class="text-center  mb-5 mt-5 btn-list">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="text-center  mt-4">
													<a href="{{url('product-cart')}}" class="btn ripple btn-primary me-2"><i
															class="fe fe-shopping-cart"> </i> Add to cart</a>
													<a href="{{url('check-out')}}" class="btn ripple btn-secondary"><i
															class="fe fe-credit-card"> </i> Buy Now</a>
												</div>
											</div>
										</div>
									</div>
									<div class="details col-xl-6 col-lg-12 col-md-12 mt-4 mt-xl-0">
										<h4 class="product-title mb-1">Jyothi Fashion Women's Fit & Flare Knee Length
											Western Frock</h4>
										<p class="text-muted tx-13 mb-1">women red & Grey Checked Casual frock</p>
										<div class="rating mb-1">
											<div class="stars">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star text-muted"></span>
												<span class="fa fa-star text-muted"></span>
											</div>
											<span class="review-no">41 reviews</span>
										</div>
										<h6 class="price">current price: <span class="h3 ms-2">$253</span></h6>
										<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87
												votes)</strong></p>
										<div class="mb-3">
											<div class="">
												<p class="font-weight-normal"><span class="h4">Hurry Up!</span> Sold:
													<span class="text-primary h5 ">110/150</span> products in stock.
												<p>
											</div>
											<div class="progress ht-10  mt-0">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
													style="width: 60%"></div>
											</div>
										</div>

										<div class="sizes d-flex">sizes:
											<span class="size d-flex"><label class="rdiobox mb-0"><input checked=""
														name="rdio" type="radio"> <span>s</span></label></span>
											<span class="size d-flex"><label class="rdiobox mb-0"><input name="rdio"
														type="radio"> <span>m</span></label></span>
											<span class="size d-flex"><label class="rdiobox mb-0"><input name="rdio"
														type="radio"> <span>l</span></label></span>
											<span class="size d-flex"><label class="rdiobox mb-0"><input name="rdio"
														type="radio"> <span>xl</span></label></span>
										</div>
										<div class="d-flex  mt-2">
											<div class="mt-2 product-title">Quantity:</div>
											<div class="d-flex ms-2">
												<ul class=" mb-0 qunatity-list">
													<li>
														<div class="form-group">
															<select name="quantity" id="select-countries17"
																class="form-control nice-select wd-50">
																<option value="1" selected="">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="colors d-flex me-3 mt-2">
											<span class="mt-2">colors:</span>
											<div class="d-md-flex ms-4 ms-4">
												<div class="me-2">
													<label class="colorinput">
														<input name="color" type="radio" value="azure"
															class="colorinput-input" checked="">
														<span class="colorinput-color bg-dark"></span>
													</label>
												</div>
												<div class="me-2">
													<label class="colorinput">
														<input name="color" type="radio" value="indigo"
															class="colorinput-input">
														<span class="colorinput-color bg-secondary"></span>
													</label>
												</div>
												<div class="me-2">
													<label class="colorinput">
														<input name="color" type="radio" value="purple"
															class="colorinput-input">
														<span class="colorinput-color bg-danger"></span>
													</label>
												</div>
												<div class="me-2">
													<label class="colorinput">
														<input name="color" type="radio" value="pink"
															class="colorinput-input">
														<span class="colorinput-color bg-pink"></span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-sm">
					<div class="col-lg-12 col-md-12">
						<div class="card productdesc">
							<div class="card-body">
								<div class="panel panel-primary">
									<div class=" tab-menu-heading">
										<div class="tabs-menu1">
											<!-- Tabs -->
											<ul class="nav panel-tabs">
												<li><a href="#tab5" class="active"
														data-bs-toggle="tab">Specifications</a></li>
												<li><a href="#tab6" data-bs-toggle="tab">Dimensions</a></li>
												<li><a href="#tab7" data-bs-toggle="tab">Features</a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body tabs-menu-body">
										<div class="tab-content">
											<div class="tab-pane active" id="tab5">
												<h5 class="mb-2 mt-1 fw-semibold">Description :</h5>
												<p class="mb-3 tx-13">At vero eos et accusamus et iusto odio dignissimos
													ducimus qui blanditiis praesentium voluptatum deleniti atque
													corrupti quos dolores et quas molestias excepturi sint occaecati
													cupiditate non provident,
													similique sunt in culpa qui officia deserunt mollitia animi, id est
													laborum et dolorum fuga.</p>
												<p class="mb-3 tx-13">odio dignissimos ducimus qui blanditiis
													praesentium voluptatum deleniti atque corrupti quos dolores et quas
													molestias excepturi sint occaecati cupiditate non provident,
													similique sunt in culpa qui
													officia.
												</p>
												<h5 class="mb-2 mt-3 fw-semibold">Specifications :</h5>
												<table class="table table-bordered">
													<tr>
														<td class="fw-semibold">Package Dimensions</td>
														<td> 33 x 22 x 3 cm; 450 Grams</td>
													</tr>
													<tr>
														<td class="fw-semibold">Manufacturer</td>
														<td>gownu Production</td>
													</tr>
													<tr>
														<td class="fw-semibold">Item part number </td>
														<td>BNVRDMRHENFULL-Z14</td>
													</tr>
													<tr>
														<td class="fw-semibold">Best Sellers Rank</td>
														<td> #141 in Clothing & Accessories (See Top 100 in Clothing &
															Accessories)</td>
													</tr>
													<tr>
														<td class="fw-semibold">Customer Reviews</td>
														<td>
															<p class="text-muted float-start me-3">
																<span class="fa fa-star text-warning"></span>
																<span class="fa fa-star text-warning"></span>
																<span class="fa fa-star text-warning"></span>
																<span class="fa fa-star-half-o text-warning"></span>
																<span class="fa fa-star-o text-warning"></span>
																<span class="text-success fw-semibold">(2,076
																	ratings)</span>
															</p>
														</td>
													</tr>
												</table>
											</div>
											<div class="tab-pane" id="tab6">
												<div class="table-responsive">
													<table class="table table-bordered">
														<tbody>
															<tr>
																<td> Care Instructions</td>
																<td>Hand Wash Only</td>
															</tr>
															<tr>
																<td> Fit Type</td>
																<td>Regular</td>
															</tr>
															<tr>
																<td> Fabric</td>
																<td>Soft Crepe || full stitched</td>
															</tr>
															<tr>
																<td> Size</td>
																<td>S(34''), M(36"), L(38"), XL(40"), XXL(42")</td>
															</tr>
															<tr>
																<td> Length</td>
																<td>Up to 44 inch</td>
															</tr>
															<tr>
																<td> Manufacturer</td>
																<td>Jyothi fashions</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane" id="tab7">
												<div class="table-responsive">
													<table class="table table-bordered">
														<tbody>
															<tr>
																<td><i class="fa fa-check me-3 text-success"></i>Care
																	Instructions: Hand Wash Only</td>
															</tr>
															<tr>
																<td><i class="fa fa-check me-3 text-success"></i>Kurta
																	Material:Poly Crepe</td>
															</tr>
															<tr>
																<td><i class="fa fa-check me-3 text-success"></i>Style:
																	A-line 48" length Kurta with 3/4 Bell Sleeve</td>
															</tr>
															<tr>
																<td><i
																		class="fa fa-check me-3 text-success"></i>Ocassion:Casual,
																	Formal</td>
															</tr>
															<tr>
																<td><i class="fa fa-check me-3 text-success"></i>Packet
																	contains: 1 readymade Kurta.</td>
															</tr>
															<tr>
																<td><i class="fa fa-check me-3 text-success"></i>Size
																	Declaration: Please choose garment size that is two
																	inches more than your body measurement.e.g:-For Bust
																	size -36(S),Select garment size-38''(M).</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="d-flex p-3">
									<h5 class="float-start main-content-label mb-0 mt-2">All Ratings and Reviews</h5>
									<a href="javascript:void(0);"
										class="btn btn-outline-primary btn-sm float-end ms-auto">Top Rated</a>
								</div>
								<div class="media mt-0 p-3 border-bottom border-top">
									<div class="d-flex me-3">
										<a href="javascript:void(0);"><img
												class="media-image avatar avatar-md rounded-circle" alt="64x64"
												src="{{asset('assets/img/faces/6.jpg')}}"> </a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold tx-16">Bruce Tran
											<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-placement="top"
												title="" data-bs-original-title="verified"><i
													class="fa fa-check-circle-o text-success"></i></span>
										</h5>
										<span class="text-muted tx-13">Tue, 20 Mar 2020</span>
										<div class="text-warning mt-1">
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star"></i>
										</div>
										<p class="font-13  mb-2 mt-2">
											Lorem Ipsum available, quis Neque porro quisquam est, qui dolorem ipsum quia
											.
										</p>
										<p class="mb-1"> <a href="javascript:void(0);" class="me-2"><span
													class="badge badge-primary">Helpful</span></a>
											<a href="" class="me-2"><span class="">Comment</span></a>
											<a href="" class="me-2"><span class="">Report</span></a>
											<span class="float-end"> <a href="javascript:void(0)" class="new ms-3"><i
														class="text-success br-7 text-success fe fe-thumbs-up fs-16 text-icon "></i></a>
												<a href="javascript:void(0)" class="new ms-3 mt-6"><i
														class="text-danger br-7 text-danger fe fe-thumbs-down  fs-16 text-icon"></i></a>
											</span>
										</p>
									</div>
								</div>
								<div class="media mt-0  p-3 border-bottom">
									<div class="d-flex me-3">
										<a href="javascript:void(0);"><img
												class="media-image avatar avatar-md rounded-circle" alt="64x64"
												src="{{asset('assets/img/faces/6.jpg')}}"> </a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold tx-16">Mina Harpe
											<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-placement="top"
												title="" data-bs-original-title="verified"><i
													class="fa fa-check-circle-o text-success"></i></span>
										</h5>
										<span class="text-muted tx-13">Tue, 20 Mar 2020</span>
										<div class="text-warning mt-1">
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star"></i>
										</div>
										<p class="font-13  mb-2 mt-2">
											Lorem Ipsum available, quis Neque porro quisquam est, qui dolorem ipsum quia
											dolor sit amet, et nostrud exercitation ullamco laboris commodo consequat.
										</p>
										<p class="mb-1">
											<a href="javascript:void(0);" class="me-2"><span
													class="badge badge-primary">Helpful</span></a>
											<a href="" class="me-2"><span class="">Comment</span></a>
											<a href="" class="me-2"><span class="">Report</span></a>
											<span class="float-end"> <a href="javascript:void(0)" class="new ms-3"><i
														class="text-success br-7 text-success fe fe-thumbs-up fs-16 text-icon "></i></a>
												<a href="javascript:void(0)" class="new ms-3 mt-6"><i
														class="text-danger br-7 text-danger fe fe-thumbs-down  fs-16 text-icon"></i></a>
											</span>
										</p>
									</div>
								</div>
								<div class="media mt-0 p-3">
									<div class="d-flex me-3">
										<a href="javascript:void(0);"><img
												class="media-image avatar avatar-md rounded-circle" alt="64x64"
												src="{{asset('assets/img/faces/6.jpg')}}"> </a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold tx-16">Maria Quinn
											<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-placement="top"
												title="" data-bs-original-title="verified"><i
													class="fa fa-check-circle-o text-success"></i></span>
										</h5>
										<span class="text-muted tx-13">Tue, 20 Mar 2020</span>
										<div class="text-warning mt-1">
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star active"></i>
											<i class="bx bxs-star text-light"></i>
										</div>
										<p class="font-13  mb-2 mt-2">
											Lorem Ipsum available, quis Neque porro quisquam est exercitation ullamco
											laboris commodo consequat.
										</p>
										<p class="mb-1">
											<a href="javascript:void(0);" class="me-2"><span
													class="badge badge-primary">Helpful</span></a>
											<a href="" class="me-2"><span class="">Comment</span></a>
											<a href="" class="me-2"><span class="">Report</span></a>
											<span class="float-end"> <a href="javascript:void(0)" class="new ms-3"><i
														class="text-success br-7 text-success fe fe-thumbs-up fs-16 text-icon "></i></a>
												<a href="javascript:void(0)" class="new ms-3 mt-6"><i
														class="text-danger br-7 text-danger fe fe-thumbs-down  fs-16 text-icon"></i></a>
											</span>
										</p>
									</div>
								</div>
								<div class="card-footer">
									<button class="btn btn-light">More Reviews</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="card">
							<div class="ps-4 pe-4 pb-2 pt-4">
								<h5 class="mb-4">Write Review</h5>
								<div class="mb-1">
									<div class="row">
										<div class="form-group col-md-6">
											<div class="mb-3 font-weight-semibold">Your Name</div> <input
												class="form-control" placeholder="Your Name" type="text">
										</div>
										<div class="form-group col-md-6">
											<div class="mb-3 font-weight-semibold">Email Address</div> <input
												class="form-control" placeholder="Email Address" type="text">
										</div>
									</div>
								</div>
								<span class="star-rating">
									<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
									<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
									<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
									<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
									<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
								</span>
								<form>
									<div class="form-group">
										<div class="mb-3 font-weight-semibold">Your Comment</div>
										<textarea class="form-control"></textarea>
									</div>
									<div class="form-group">
										<button class="btn btn-primary mt-3 mb-0" type="button">Post your
											review</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-3 col-xl-3">
						<div class="card item-card">
							<div class="card-body pb-0 h-100  product-grid6">
								<div class="text-center product-image">
									<img src="{{asset('assets/img/ecommerce/01.jpg')}}" alt="img" class="img-fluid">
								</div>
								<div class="card-body cardbody relative">
									<div class="cardtitle">
										<span class="h6 font-weight-bold text-uppercase">Fashion</span>
										<a class="h6 mb-2 mt-4 font-weight-bold text-uppercase"> long slit</a>
									</div>
									<div class="cardprice">
										<span class="type--strikethrough">$999</span>
										<strong>$799</strong>
									</div>
								</div>
							</div>
							<div class="text-center border-top pt-3 pb-3 ps-2 pe-2 ">
								<a href="javascript:void(0);" class="btn btn-primary mb-0 mb-lg-2"> View More</a>
								<a href="{{url('product-cart')}}" class="btn btn-secondary mb-0 mb-lg-2"><i
										class="fa fa-shopping-cart"></i> Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="card item-card">
							<div class="card-body pb-0 h-100  product-grid6">
								<div class="text-center product-image">
									<img src="{{asset('assets/img/ecommerce/08.jpg')}}" alt="img" class="img-fluid">
								</div>
								<div class="card-body cardbody relative">
									<div class="cardtitle">
										<span class="h6 font-weight-bold text-uppercase">Items</span>
										<a class="h6 mb-2 mt-4 font-weight-bold text-uppercase">Mens wear</a>
									</div>
									<div class="cardprice">
										<span class="type--strikethrough">$999</span>
										<strong>$799</strong>
									</div>
								</div>
							</div>
							<div class="text-center border-top pt-3 pb-3 ps-2 pe-2 ">
								<a href="javascript:void(0);" class="btn btn-primary mb-0 mb-lg-2"> View More</a>
								<a href="{{url('product-cart')}}" class="btn btn-secondary mb-0 mb-lg-2"><i
										class="fa fa-shopping-cart"></i> Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="card item-card">
							<div class="card-body pb-0 h-100 product-grid6">
								<div class="text-center product-image">
									<img src="{{asset('assets/img/ecommerce/07.jpg')}}" alt="img" class="img-fluid">
								</div>
								<div class="card-body cardbody relative ">
									<div class="cardtitle">
										<span class="h6 font-weight-bold text-uppercase">Fashion</span>
										<a class="h6 mb-2 mt-4 font-weight-bold text-uppercase">kids wear</a>
									</div>
									<div class="cardprice">
										<span class="type--strikethrough">$999</span>
										<strong>$799</strong>
									</div>
								</div>
							</div>
							<div class="text-center border-top pt-3 pb-3 ps-2 pe-2 ">
								<a href="javascript:void(0);" class="btn btn-primary mb-0 mb-lg-2"> View More</a>
								<a href="{{url('product-cart')}}" class="btn btn-secondary mb-0 mb-lg-2"><i
										class="fa fa-shopping-cart"></i> Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="card item-card">
							<div class="card-body pb-0 h-100  product-grid6">
								<div class="text-center product-image">
									<img src="{{asset('assets/img/ecommerce/5.jpg')}}" alt="img" class="img-fluid">
								</div>
								<div class="card-body cardbody relative">
									<div class="cardtitle">
										<span class="h6 font-weight-bold text-uppercase">Accessories</span>
										<a class="h6 mb-2 mt-4 font-weight-bold text-uppercase">camara</a>
									</div>
									<div class="cardprice">
										<span class="type--strikethrough">$999</span>
										<strong>$799</strong>
									</div>
								</div>
							</div>
							<div class="text-center border-top pt-3 pb-3 ps-2 pe-2 ">
								<a href="javascript:void(0);" class="btn btn-primary mb-0 mb-lg-2"> View More</a>
								<a href="{{url('product-cart')}}" class="btn btn-secondary mb-0 mb-lg-2"><i
										class="fa fa-shopping-cart"></i> Add to cart</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

    @endsection

    @section('scripts')

		<!-- Internal Select2.min js -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

		<!--Internal  Nice-select js-->
		<script src="{{asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
		<script src="{{asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

    @endsection
