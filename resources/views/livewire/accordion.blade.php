@extends('layouts.app')

    @section('styles')

		<!-- Interenal Accordion Css -->
		<link href="{{asset('assets/plugins/accordion/accordion.css')}}" rel="stylesheet" />

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">ACCORDION</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Accordion</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Style Accordion</h6>
										<p class="text-muted card-sub-title">The default collapse behavior to create an accordion.</p>
									</div>
									<div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
										<div class="card mb-0">
											<div class="card-header" id="headingOne" role="tab">
												<a aria-controls="collapseOne" aria-expanded="true" data-bs-toggle="collapse" href="#collapseOne">Making a Beautiful CSS3 Button Set</a>
											</div>
											<div aria-labelledby="headingOne" class="collapse show" data-bs-parent="#accordion" id="collapseOne" role="tabpanel">
												<div class="card-body">
													A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
												</div>
											</div>
										</div>
										<div class="card mb-0 mt-2">
											<div class="card-header" id="headingTwo" role="tab">
												<a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-bs-toggle="collapse" href="#collapseTwo">Horizontal Navigation Menu Fold Animation</a>
											</div>
											<div aria-labelledby="headingTwo" class="collapse" data-bs-parent="#accordion" id="collapseTwo" role="tabpanel">
												<div class="card-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
												</div>
											</div>
										</div>
										<div class="card mt-2">
											<div class="card-header" id="headingThree" role="tab">
												<a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-bs-toggle="collapse" href="#collapseThree">Creating CSS3 Button with Rounded Corners</a>
											</div>
											<div aria-labelledby="headingThree" class="collapse" data-bs-parent="#accordion" id="collapseThree" role="tabpanel">
												<div class="card-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
												</div>
											</div><!-- collapse -->
										</div>
									</div><!-- accordion -->
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card overflow-hidden">
								<div class="card-header pb-0">
									<h3 class="card-title">Accordion Style01</h3>
									<p class="text-muted card-sub-title mb-0">The default collapse behavior to create an accordion.</p>
								</div>
								<div class="card-body">
									<div class="panel-group1" id="accordion11" role="tablist">
										<div class="card overflow-hidden">
											<a class="accordion-toggle panel-heading1 collapsed " data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapseFour1" aria-expanded="false">Section 1</a>
											<div id="collapseFour1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
												<div class="panel-body">
													<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
												</div>
											</div>
										</div>
										<div class="card overflow-hidden">
											<a class="accordion-toggle mb-0 panel-heading1 collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapseFive2" aria-expanded="false">Section 2</a>

											<div id="collapseFive2" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
												<div class="panel-body ">
													<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

					<!-- row opened -->
					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Accordion Style02</h3>
								</div>
								<div class="card-body h-100">
									<div id="accordion01" class="w-100 overflow-hidden Accordion-Style02 ">
										<div class="mb-2">
											<div class="accor " id="headingOne1">
												<div class="m-0">
													<a href="#collapseOne1" class="" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
													   Accordions With Text
													</a>
												</div>
											</div>
											<div id="collapseOne1" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion01">
												<div class="border p-3 accstyle border-top-0">
													I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful
													sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
												</div>
											</div>
										</div>
										<div class="mb-2">
											<div class="accor" id="headingTwo2">
												<div class="m-0">
													<a href="#collapseTwo2" class="collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
														Accordions with images
													</a>
												</div>
											</div>
											<div id="collapseTwo2" class="collapse b-b0" aria-labelledby="headingTwo" data-bs-parent="#accordion01">
												<div class="border p-3 accstyle border-top-0">
													<div class="row">
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded" src="{{asset('assets/img/photos/8.jpg')}} " alt="banner image">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded" src="{{asset('assets/img/photos/10.jpg')}}" alt="banner image ">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded" src="{{asset('assets/img/photos/8.jpg')}}" alt="banner image ">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid rounded " src="{{asset('assets/img/photos/12.jpg')}}" alt="banner image ">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mb-2">
											<div class="accor " id="headingThree3">
												<div class="m-0">
													<a href="#collapseThree1" class="collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
														Accordions with tables
													</a>
												</div>
											</div>
											<div id="collapseThree1" class="collapse b-b0" aria-labelledby="headingThree" data-bs-parent="#accordion">
												<div class="border table-responsive p-3 accstyle border-top-0">
													<table class="table mb-0 table-bordered border-top mb-0">
														<thead>
														  <tr>
															<th>#</th>
															<th>First Name</th>
															<th>Last Name</th>
															<th>Username</th>
														  </tr>
														</thead>
														<tbody>
														  <tr>
															<th scope="row">1</th>
															<td>Mark</td>
															<td>Otto</td>
															<td>@mdo</td>
														  </tr>
														  <tr>
															<th scope="row">2</th>
															<td>Jacob</td>
															<td>Thornton</td>
															<td>@fat</td>
														  </tr>
														  <tr>
															<th scope="row">3</th>
															<td>Larry</td>
															<td>the Bird</td>
															<td>@twitter</td>
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
					<!-- row closed -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Accordion With Icons</h6>
										<p class="text-muted card-sub-title">The default collapse behavior to create an accordion.</p>
									</div>
									<div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2" role="tablist">
										<div class="card mb-0">
											<div class="card-header" id="headingOne2" role="tab">
												<a aria-controls="collapseOne2" aria-expanded="false" data-bs-toggle="collapse" href="#collapseOne2"><i class="fe fe-plus-circle me-2"></i>Making a Beautiful CSS3 Button Set</a>
											</div>
											<div aria-labelledby="headingOne2" class="collapse show" data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
												<div class="card-body">
													A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
												</div>
											</div>
										</div>
										<div class="card mb-0 mt-2">
											<div class="card-header" id="headingTwo4" role="tab">
												<a aria-controls="collapseTwo4" aria-expanded="true" class="collapsed" data-bs-toggle="collapse" href="#collapseTwo4"><i class="fe fe-plus-circle me-2"></i>Horizontal Navigation Menu Fold Animation</a>
											</div>
											<div aria-labelledby="headingTwo4" class="collapse" data-bs-parent="#accordion2" id="collapseTwo4" role="tabpanel">
												<div class="card-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
												</div>
											</div>
										</div>
										<div class="card mb-0 mt-2">
											<div class="card-header" id="headingThree2" role="tab">
												<a aria-controls="collapseThree2" aria-expanded="false" class="collapsed" data-bs-toggle="collapse" href="#collapseThree2"><i class="fe fe-plus-circle me-2"></i>Creating CSS3 Button with Rounded Corners</a>
											</div>
											<div aria-labelledby="headingThree2" class="collapse" data-bs-parent="#accordion2" id="collapseThree2" role="tabpanel">
												<div class="card-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
												</div>
											</div><!-- collapse -->
										</div>
									</div><!-- accordion -->
								</div>
								<div class="card-footer">
									<table class="table main-table-reference mt-0 mb-0">
										<thead>
											<tr>
												<th class="wd-40p">Class Reference</th>
												<th class="wd-60p">Values</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code class="pd-0 bg-transparent">class="accordion accordion-[value]"</code></td>
												<td>indigo | blue | dark | gray</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--- Internal Accordion Js -->
		<script src="{{asset('assets/plugins/accordion/accordion.min.js')}}"></script>
		<script src="{{asset('assets/js/accordion.js')}}"></script>

    @endsection

