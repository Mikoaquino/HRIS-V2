@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">WIDTHS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Width</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Width Values</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-md-flex mb-3">
										<div class="d-flex align-items-center justify-content-center wd-200 ht-100 bg-gray-200 mt-4 mt-md-0">
											.wd-200
										</div>
										<div class="d-flex align-items-center justify-content-center wd-150 ht-100 bg-gray-200 ms-md-4 mt-4 mt-md-0">
											.wd-150
										</div>
										<div class="d-flex align-items-center justify-content-center wd-100 ht-100 bg-gray-200 ms-md-4 mt-4 mt-md-0">
											.wd-100
										</div>
										<div class="d-flex align-items-center justify-content-center wd-80 ht-100 bg-gray-200 ms-md-4 mt-4 mt-md-0">
											.wd-80
										</div>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Smaller Width</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]</code></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0">
											<thead>
												<tr>
													<th class="wd-30p">Regular Width</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]</code></td>
													<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5)</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Bigger Width</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]</code></td>
													<td>150 | 200 | 250 | 300 | ... | 1000 &nbsp; (step of 50)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Percentage Width</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]p</code></td>
													<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
								<h3 class="card-title  mg-b-10">Media Query Width</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[size]-[value]</code></td>
													<td rowspan="2">
														<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the width value (refer to code above)</p>
													</td>
												</tr>
												<tr>
													<td><code>.wd-[size]-[value]p</code></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
								<h3 class="card-title  mg-b-10">Extra Width Classes</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="table-responsive">
										<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-100v</code></td>
													<td>Set a width to an element based on viewport width.</td>
												</tr>
												<tr>
													<td><code>.wd-auto</code></td>
													<td>Set an auto width to an element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')



    @endsection