@extends('layouts.app')

    @section('styles')

		<!-- FULL CALENDAR CSS -->
		<link href='{{asset('assets/plugins/fullcalendar/fullcalendar.css')}}' rel='stylesheet'/>

    @endsection

    @section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
					  <span class="main-content-title mg-b-0 mg-b-lg-1">CALENDAR</span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
							<li class="breadcrumb-item active" aria-current="page">Calendar</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->

                <div class="pd-b-0  main-content-calendar pt-0">

                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Calender With different Color Events</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-lg-3">
                                            <div id="external-events">
                                                <h4>Draggable Events</h4>
                                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary">
                                                    <div class="fc-event-main">My Event 1</div>
                                                </div>
                                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary" data-class="bg-teal">
                                                    <div class="fc-event-main">My Event 2</div>
                                                </div>
                                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning" data-class="bg-warning">
                                                    <div class="fc-event-main">My Event 3</div>
                                                </div>
                                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-info" data-class=" bg-info">
                                                    <div class="fc-event-main">My Event 4</div>
                                                </div>
                                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-success" data-class="bg-danger">
                                                    <div class="fc-event-main">My Event 5</div>
                                                </div>
                                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger" data-class="bg-danger">
                                                    <div class="fc-event-main">My Event 6</div>
                                                </div>
                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div id='calendar2'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">List Calendar</h3>
                                </div>
                                <div class="card-body">
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>

    @endsection

    @section('scripts')

		<!-- moomet min js -->
		<script src="{{asset('assets/plugins/moment/min/moment.min.js')}}"></script>

		<!-- Internal Select2.full.min js -->
		<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

		<!-- FULL CALENDAR JS -->
		<script src='{{asset('assets/plugins/fullcalendar/moment.min.js')}}'></script>
		<script src='{{asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}'></script>
		<script src="{{asset('assets/js/fullcalendar.js')}}"></script>

    @endsection
