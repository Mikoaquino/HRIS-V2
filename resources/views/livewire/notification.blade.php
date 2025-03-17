@extends('layouts.app')

    @section('styles')

		<!--Internal  Font Awesome -->
		<link href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

        <!--Internal   Notify -->
		<link href="{{asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

		<!--Internal  treeview -->
        <link href="{{asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">NOTIFICATIONS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Notifications</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<!-- div -->
							<div class="card mg-b-20">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Position Notification</h3>
									<div class="example border-0 p-0">
										<div class="btn-list">
											<button onclick="not1()" class="btn btn-primary mg-t-5">Top</button>
											<button onclick="not2()" class="btn btn-primary mg-t-5">Center</button>
											<button onclick="not3()" class="btn btn-primary mg-t-5">Left</button>
											<button onclick="not4()" class="btn btn-primary mg-t-5">Top Fullwidth</button>
											<button onclick="not5()" class="btn btn-primary mg-t-5">Right</button>
											<button onclick="not51()" class="btn btn-primary mg-t-5">Bottom</button>
										</div>
									</div>
								</div>
							</div>
							<!-- div -->

							<!-- div -->
							<div class="card mg-b-20">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Notification Types</h3>
									<div class="example border-0 p-0">
										<div class="btn-list">
											<button onclick="not6()" class="btn btn-primary mg-t-5">Primary</button>
											<button onclick="not7()" class="btn btn-success mg-t-5">Success</button>
											<button onclick="not8()" class="btn btn-danger mg-t-5">Error</button>
											<button onclick="not9()" class="btn btn-warning mg-t-5">Warning</button>
											<button onclick="not10()" class="btn btn-info mg-t-5">Info</button>
											<button onclick="not11()" class="btn btn-danger mg-t-5">Fixed Error</button>
											<button onclick="not12()" class="btn btn-dark mg-t-5">Opacity</button>
										</div>
									</div>
								</div>
							</div>
							<!-- div -->

							<!-- div -->
							<div class="card mg-b-20">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Notification Styles</h3>
									<div class="example border-0 p-0">
										<div class="btn-list">
											<button onclick="not13()" class="btn btn-primary mg-t-5">Mutiple lines</button>
											<button onclick="not14()" class="btn btn-primary mg-t-5">Fade Animation</button>
											<button onclick="not15()" class="btn btn-primary mg-t-5">Customize Background</button>
											<button onclick="not16()" class="btn btn-primary mg-t-5">Timeout</button>
										</div>
									</div>
								</div>
							</div>
							<!-- div -->

							<!-- div -->
							<div class="card">
								<div class="card-body">
						         <h3 class="card-title  mg-b-10">Call Back Notification</h3>
									<div class="example border-0 p-0">
										<div class="btn-list">
											<button onclick="not17()" class="btn btn-primary">Call Back</button>
											<button onclick="not18()" class="btn btn-primary">Call Back 2</button>
										</div>
									</div>
								</div>
							</div>
							<!-- div -->
						</div>
					</div>

    @endsection

    @section('scripts')

		<!--Internal  Perfect-scrollbar js -->
		<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

		<!-- Internal Treeview js -->
		<script src="{{asset('assets/plugins/treeview/treeview.js')}}"></script>

		<!--Internal  Notify js -->
		<script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>

    @endsection
