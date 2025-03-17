@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

			<!-- breadcrumb -->
			<div class="breadcrumb-header justify-content-between">
				<div class="left-content">
				  <span class="main-content-title mg-b-0 mg-b-lg-1">EXTRAS</span>
				</div>
				<div class="justify-content-center mt-2">
					<ol class="breadcrumb">
						<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
						<li class="breadcrumb-item active" aria-current="page">Extras</li>
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
						<h3 class="card-title  mg-b-10">Opacity</h3>
							<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
							<div class="example">
								<div class="gray-set d-flex  flex-wrap">
									<div class="flex-1 bg-primary p-3 ht-100 p-3  text-white op-1"><div class="text-dark op-0">.op-1</div></div>
									<div class="flex-1 bg-primary p-3 ht-100 p-3  text-white op-2">.op-2</div>
									<div class="flex-1 bg-primary p-3 ht-100 p-3  text-white op-3">.op-3</div>
									<div class="flex-1 bg-primary p-3 ht-100 p-3  text-white op-4">.op-4</div>
									<div class="flex-1 bg-primary p-3 ht-100 p-3  text-white op-5">.op-5</div>
									<div class="flex-1 bg-primary p-3 ht-100 p-3  text-white op-6">.op-6</div>
									<div class="flex-1 bg-primary p-3 ht-100 p-3  text-white op-7">.op-7</div>
									<div class="flex-1 bg-primary p-3 ht-100 p-3  text-white op-8">.op-8</div>
									<div class="flex-1 bg-primary p-3 ht-100 p-3  text-white op-9">.op-9</div>
								</div>
							</div>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-t-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code>.op-[value]</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code>.op-[breakpoint]-[value]</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>
												<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
												<p class="mg-b-0">value: 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/div-->
				<!--div-->
				<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<div class="card">
						<div class="card-body">
						<h3 class="card-title  mg-b-10">Shadow</h3>
							<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code>.shadow-base</code></td>
											<td><code>.shadow-none</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>Add shadow to any box element.</td>
											<td>Remove shadow to any box element.</td>
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
