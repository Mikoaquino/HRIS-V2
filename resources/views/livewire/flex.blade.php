@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FLEX</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Flex</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row  -->
					<div class="row row-sm">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Enable Flex</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div class="d-flex pd-10 bg-gray-200">
										I'm a flexbox container!
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Direction</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex flex-row border p-3 br-5  mg-b-20">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row-reverse border p-3 br-5 ">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Justify Content</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex flex-row justify-content-start mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-end mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-center mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-between mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-around  border p-3 br-5">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Align Items</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex flex-row align-items-start ht-100 mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-center  ht-100 mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-end ht-100 mg-b-20 border p-3 br-5">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-stretch ht-100  border p-3 br-5">
											<div class="pd-10 bg-gray-200">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Align Self</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex flex-row ht-100 mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-200 align-self-start">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300 align-self-center">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400 align-self-end">
												Flex item 3
											</div>
											<div class="pd-10 bg-gray-300 align-self-stretch">
												Flex item 4
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Fill</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex  border p-3 br-5">
											<div class="pd-10 bg-gray-200 flex-fill">
												Flex item with a lot of content
											</div>
											<div class="pd-10 bg-gray-300 flex-fill">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400 flex-fill">
												Flex item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Grow and Shrink</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex  border p-3 br-5">
											<div class="pd-10 bg-gray-200 flex-grow-1">
												Flex item
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400">
												Third flex item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Auto Margins</h3>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
									<div>
										<div class="d-flex  border p-3 br-5">
											<div class="pd-10 bg-gray-200">
												Flex item
											</div>
											<div class="pd-10 bg-gray-300">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400 mg-l-auto">
												Third flex item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
					</div>
					<!-- row closed -->

    @endsection

    @section('scripts')



    @endsection
