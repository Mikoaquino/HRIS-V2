@extends('layouts.app')

    @section('styles')

		<!-- INTERNAL Select2 css -->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SETTINGS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item active" aria-current="page">Settings</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

                    <!-- row -->
                    <div class="row">
						<div class="col-lg-4 col-xl-3">
							<div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Settings</div>
                                </div>
								<div class="main-content-left main-content-left-mail card-body">
									<div class="main-settings-menu">
										<nav class="nav main-nav-column">
											<a class="nav-link thumb active mb-2" href="javascript:void(0);"><i class="fe fe-home"></i> Main </a>
											<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-grid"></i> Web Apps</a>
											<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-server"></i> General</a>
											<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-globe"></i> Components</a>
											<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-layers"></i> Pages</a>
											<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-flag"></i> Language & Region</a>
											<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-bell"></i> Notifications</a>
										</nav>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-9">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Overview</div>
                                    <p>Used to customize and manage all settngs about this Dashboard</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="d-flex">
                                                        <div class="settings-main-icon me-4 mt-1"><i class="fe fe-home"></i></div>
                                                        <div>
                                                            <p class="tx-20 font-weight-semibold d-flex mb-0">Dashboard</p>
                                                            <p class="tx-13 text-muted mb-0">Dashboard Settings such as sidemenu,header and main page can be Controlled.</p>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
                                            <label class="custom-switch float-end mb-0">
                                                <a href="javascript:void(0);" class="tx-14 mb-0 me-2">Restore default</a>
                                                <input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-radius"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="d-flex">
                                                        <div class="settings-main-icon me-4 mt-1"><i class="fe fe-grid"></i></div>
                                                        <div>
                                                            <p class="tx-20 font-weight-semibold d-flex mb-0">Webapps</p>
                                                            <p class="tx-13 text-muted mb-0">Web apps settings such as Apps,Elements,Advanced Ui & Mail can be Controlled.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
                                            <label class="custom-switch float-end mb-0">
                                                <a href="javascript:void(0);" class="tx-14 mb-0 me-2">Restore default</a>
                                                <input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-radius"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="d-flex">
                                                        <div class="settings-main-icon me-4 mt-1"><i class="fe fe-server"></i></div>
                                                        <div>
                                                            <p class="tx-20 font-weight-semibold d-flex mb-0">General</p>
                                                            <p class="tx-13 text-muted mb-0">General settings such as Icons,Charts,Ecommerce can be Controlled.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
                                            <label class="custom-switch float-end mb-0">
                                                <a href="javascript:void(0);" class="tx-14 mb-0 me-2">Restore default</a>
                                                <input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input" checked="">
                                                <span class="custom-switch-indicator custom-radius"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="d-flex">
                                                        <div class="settings-main-icon me-4 mt-1"><i class="fe fe-flag"></i></div>
                                                        <div>
                                                            <p class="tx-20 font-weight-semibold d-flex mb-0">Region & language</p>
                                                            <p class="tx-13 text-muted mb-0">In this settings we can change the region and language manually.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
                                            <label class="custom-switch float-end mb-0">
                                                <a href="javascript:void(0);" class="tx-14 mb-0 me-2">Restore default</a>
                                                <input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-radius"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="d-flex">
                                                        <div class="settings-main-icon me-4 mt-1"><i class="fe fe-bell"></i></div>
                                                        <div>
                                                            <p class="tx-20 font-weight-semibold d-flex mb-0">Notifiation</p>
                                                            <p class="tx-13 text-muted mb-0">Notification settings we can control the notification privacy and security.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
                                            <label class="custom-switch float-end mb-0">
                                                <a href="javascript:void(0);" class="tx-14 mb-0 me-2">Restore default</a>
                                                <input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input">
                                                <span class="custom-switch-indicator custom-radius"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="d-flex">
                                                        <div class="settings-main-icon me-4 mt-1"><i class="fe fe-settings"></i></div>
                                                        <div>
                                                            <p class="tx-20 font-weight-semibold d-flex mb-0">Blog</p>
                                                            <p class="tx-13 text-muted mb-0">In this settings we can modify all Blog related settings in this template.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
                                            <label class="custom-switch float-end mb-0">
                                                <a href="javascript:void(0);" class="tx-14 mb-0 me-2">Restore default</a>
                                                <input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input" checked="">
                                                <span class="custom-switch-indicator custom-radius"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ row -->

    @endsection

    @section('scripts')

		<!-- INTERNAL Select2 js -->
		<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

    @endsection
