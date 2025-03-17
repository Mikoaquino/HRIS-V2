@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">NOTIFICATIONS LIST</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Notifications List</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
                    <div class="container">
                        <ul class="notification">
                            <li>
                                <div class="notification-time">
                                   <span class="date">Friday</span>
                                   <span class="time">02:31</span>
                                </div>
                                <div class="notification-icon">
                                   <a href="javascript:void(0);"></a>
                                </div>
                                <div class="notification-body">
									<div class="media mt-0">
										<div class="main-img-user avatar-md main-avatar online me-3 shadow">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/6.jpg')}}"></a>
										</div>
										<div class="media-body">
											<div class="d-flex align-items-center">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Emperio</h5>
													<p class="mb-0 tx-13 mb-0 text-muted">Project assigned by the manager all<span class="badge badge-primary-transparent tx-12 font-weight-semibold text-primiary ms-1 me-1">files</span>and<span class="badge badge-primary-transparent text-primary tx-12 font-weight-semibold ms-1 me-1">folders</span>were included</p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">24, oct 2021</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
                             </li>
                             <li>
                                <div class="notification-time">
                                   <span class="date">Monday</span>
                                   <span class="time">08:47</span>
                                </div>
                                <div class="notification-icon">
                                   <a href="javascript:void(0);"></a>
                                </div>
                                <div class="notification-body">
                                    <div class="media mt-0">
                                        <div class="main-img-user avatar-md main-avatar offline mb-3  me-3 my-auto shadow">
                                            <a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/1.jpg')}}"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-0">
                                                    <h5 class="mb-1 tx-15 font-weight-semibold text-dark">Anesthesia</h5>
                                                    <p class="mb-0 tx-13 mb-0 text-muted">Admin and other team accepted your work request</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="float-end badge notification-badge">
                                                        <span class="tx-11 font-weight-semibold">30,sep 2021</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </li>
                             <li>
                                <div class="notification-time">
                                   <span class="date">Yesterday</span>
                                   <span class="time">18:43</span>
                                </div>
                                <div class="notification-icon">
                                   <a href="javascript:void(0);"></a>
                                </div>
                                <div class="notification-body">
                                    <div class="media mt-0">
                                        <div class="main-img-user avatar-md main-avatar online mb-3  me-3 my-auto shadow">
                                            <a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/15.jpg')}}"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-0">
                                                    <h5 class="mb-1 tx-15 font-weight-semibold text-dark">Hughes</h5>
                                                    <p class="mb-0 tx-13 mb-0 text-muted">Temporary data will be <span class="badge badge-danger-transparent tx-12 font-weight-semibold me-1 ms-1">deleted</span> once dedicated time complated</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="float-end badge notification-badge">
                                                        <span class="tx-11 font-weight-semibold">11,sep 2021</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </li>
                            <li>
                               <div class="notification-time">
                                  <span class="date">Today</span>
                                  <span class="time">03:18</span>
                               </div>
                               <div class="notification-icon">
                                  <a href="javascript:void(0);"></a>
                               </div>
                               	<div class="notification-body">
                                    <div class="media mt-0">
                                        <div class="main-img-user avatar-md main-avatar online mb-3  me-3 my-auto shadow">
                                            <a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/2.jpg')}}"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-0">
                                                    <h5 class="mb-1 tx-15 font-weight-semibold text-dark">Samantha Melon</h5>
                                                    <p class="mb-0 tx-12 mb-0 text-muted">Approved date for sanction of loan is verified <i class="fe fe-check text-success"></i></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="float-end badge notification-badge">
                                                        <span class="tx-11 font-weight-semibold">18, sep 2021</span>
                                                     </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </li>
                            <li>
                                <div class="notification-time">
                                   <span class="date">Today</span>
                                   <span class="time">12:24</span>
                                </div>
                                <div class="notification-icon">
                                   <a href="javascript:void(0);"></a>
                                </div>
                                <div class="notification-body">
                                    <div class="media mt-0">
                                        <div class="main-img-user avatar-md main-avatar offline mb-3  me-3 my-auto shadow">
                                            <a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/11.jpg')}}"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-0">
                                                    <h5 class="mb-1 tx-15 font-weight-semibold text-dark">Nexus Ronaldo</h5>
                                                    <p class="mb-0 tx-13 mb-0 text-muted">Social network accounts are at risk check your <span class="badge badge-success-transparent font-weight-semibold tx-12 ms-1 me-1">login</span> details</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="float-end badge notification-badge">
                                                        <span class="tx-11 font-weight-semibold">18,sep 2021</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </li>
                             <li>
                                <div class="notification-time">
                                   <span class="date">Today</span>
                                   <span class="time">04:11</span>
                                </div>
                                <div class="notification-icon">
                                   <a href="javascript:void(0);"></a>
                                </div>
                                <div class="notification-body">
                                    <div class="media mt-0">
                                        <div class="main-img-user avatar-md main-avatar online mb-3  me-3 my-auto shadow">
                                            <a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/13.jpg')}}"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-0">
                                                    <h5 class="mb-1 tx-15 font-weight-semibold text-dark">Hercules</h5>
                                                    <p class="mb-0 tx-13 mb-0 text-muted">Changed the password of gmail 4 hrs ago. <span class="badge badge-secondary">Update</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="float-end badge notification-badge">
                                                        <span class="tx-11 font-weight-semibold">18,sep 2021</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </li>
                             <li>
                                <div class="notification-time">
                                   <span class="date">today</span>
                                   <span class="time">02:52</span>
                                </div>
                                <div class="notification-icon">
                                   <a href="javascript:void(0);"></a>
                                </div>
                                <div class="notification-body">
                                    <div class="media mt-0">
                                        <div class="main-img-user avatar-md main-avatar online mb-3  me-3 my-auto shadow">
                                            <a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('assets/img/faces/4.jpg')}}"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-0">
                                                    <h5 class="mb-1 tx-15 font-weight-semibold text-dark">Milinda</h5>
                                                    <p class="mb-0 tx-13 mb-0 text-muted">Completed target date to change data heirarchy</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="float-end badge notification-badge">
                                                        <span class="tx-11 font-weight-semibold">18,sep 2021</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </li>
                         </ul>
                         <div class="text-center mb-4">
                             <button class="btn btn-primary">Load more</button>
                         </div>
                     </div>
					<!-- row closed -->

    @endsection

    @section('scripts')



    @endsection
