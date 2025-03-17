@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')



					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TABLES</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Basic tables</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Nowa Simple Table. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">STRIPED ROWS</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Nowa Striped Rows.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div><!-- bd -->
								</div><!-- bd -->
							</div><!-- bd -->
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Bordered Table</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Nowa Bordered Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Hoverable Rows Table</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Nowa Hoverable Rows Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-hover mb-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>$320,800</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>$170,750</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Ashton Cox</td>
													<td>Junior Technical Author</td>
													<td>$86,000</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>$433,060</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>$162,700</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
					</div>
					<!-- /row -->

    @endsection

    @section('scripts')



    @endsection