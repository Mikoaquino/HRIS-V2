@extends('layouts.app')

    @section('styles')

		<!-- Internal Gallery css -->
		<link href="{{asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TODO TASK</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Todotask</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
                        <!-- col -->
                        <div class="col-md-12 col-xl-3 col-lg-12">
                            <div class="card">
                                <div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
                                    <div class="mt-4 mb-4 mx-4 text-center">
                                        <a href="javascript:void(0);" class="btn btn-primary d-grid">Add New Task</a>
                                    </div>
                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center border-0 ">
                                        <i class="fe fe-codepen fs-18 me-4 p-2 border-primary brround bg-primary-transparent text-primary"></i> All Tasks
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center border-0 ">
                                        <i class="fe fe-alert-octagon fs-18 me-4 p-2 border-warning brround bg-warning-transparent text-warning"></i> Important <span class="ms-auto badge bg-danger">6</span>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center border-0  ">
                                        <i class="fe fe-star fs-18 me-4 p-2 border-secondary brround bg-secondary-transparent text-secondary"></i> Starred
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center border-0 ">
                                        <i class="fe fe-briefcase fs-18 me-4 p-2 border-info brround bg-info-transparent text-info"></i> Spam
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center border-0 ">
                                        <i class="fe fe-bell fs-18 me-4 p-2 border-success brround bg-success-transparent text-success"></i> Archive <span class="ms-auto badge bg-warning">4</span>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item  d-flex align-items-center border-bottom-0 border-0 ">
                                        <i class="fe fe-trash-2 fs-18 me-4 p-2 border-danger brround bg-danger-transparent text-danger"></i> Trash
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-md-12">
                            <div class="row row-sm">
                                <!-- col -->
                                <div class="col-lg-12">
                                    <div class="card mg-b-20">
                                        <div class="card-body d-flex p-3">
                                            <div class="main-content-label mb-0 mg-t-8">User Today Tasks</div>
                                            <div class="ms-auto"><a class="d-block tx-20" data-placement="top" data-bs-toggle="tooltip" title="Add New User" href="javascript:void(0);"><i class="si si-plus text-muted"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card mg-b-20">
                                        <div class="card-body p-0">
                                            <div class="todo-widget-header d-flex pb-2 pd-20 border-bottom">
                                                <div class="drop-down-profile" data-bs-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{asset('assets/img/faces/1.jpg')}}"><span class="assigned-task bg-success">9</span></div>
                                                <div class="dropdown-menu tx-13">
                                                    <div class="main-header-profile">
                                                        <div class="tx-16 h5 mg-b-0">Teri Dactyl</div>
                                                        <span>Web Designer</span>
                                                    </div>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Total Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Completed Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="card-options-task">
                                                        <a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="archive" class="p-2 border br-5 text-primary me-1"><i class="fe fe-folder-plus align-middle"></i></a>
                                                        <a  href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Move to spam" class="p-2 border br-5 text-primary me-1"><i class="fe fe-info align-middle"></i></a>
                                                        <a href="javascript:void(0);" class="p-2 border br-5 text-primary" data-bs-toggle="dropdown"><i class="fe fe-more-vertical align-middle"></i></a>
                                                        <div class="dropdown-menu tx-13 dropleft">
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent me-1 my-2  text-primary ms-auto float-end">New</span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Work Assigned by Clients ,try to get new work</h5>
                                            </div>
                                            <div class="p-4 border-top">
                                                <span class="tx-12 text-muted">10.54am</span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Sed ut perspiciatis unde omnis iste natus</h5>
                                            </div>
                                        </div>
                                        <div class="card-footer ">
                                            <a class="btn btn-primary" href="javascript:void(0);" title="Assign Task">Assign</a>
                                            <a class="btn btn-outline-primary ms-auto float-end" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="View Task">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card mg-b-20">
                                        <div class="card-body p-0">
                                            <div class="todo-widget-header d-flex pb-2 pd-20 border-bottom">
                                                <div class="drop-down-profile" data-bs-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{asset('assets/img/faces/12.jpg')}}"><span class="assigned-task bg-info">2</span></div>
                                                <div class="dropdown-menu tx-13">
                                                    <div class="main-header-profile">
                                                        <div class="tx-16 h5 mg-b-0">Teri Dactyl</div>
                                                        <span>Web Designer</span>
                                                    </div>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Total Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Completed Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="">
                                                        <a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="archive" class="p-2  border br-5 text-primary me-1"><i class="fe fe-folder-plus align-middle"></i></a>
                                                        <a  href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Move to spam" class="p-2 border br-5 text-primary me-1"><i class="fe fe-info align-middle"></i></a>
                                                        <a href="javascript:void(0);" class="p-2 border br-5 text-primary me-1" data-bs-toggle="dropdown"><i class="fe fe-more-vertical align-middle"></i></a>
                                                        <div class="dropdown-menu tx-13">
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <span class="tx-12 text-muted">10.54am</span><span class="badge bg-success-transparent text-success ms-auto float-end">completed</span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">voluptatem accusantium dolo laudantium</h5>
                                            </div>
                                            <div class="p-4 border-top">
                                                <span class="tx-12 text-muted">10.54am</span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">inventore veritatis et quasi architecto</h5>
                                            </div>
                                        </div>
                                        <div class="card-footer ">
                                            <a class="btn btn-primary" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Assign Task">Assign</a>
                                            <a class="btn btn-outline-primary ms-auto float-end" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="View Task">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card mg-b-20">
                                        <div class="card-body p-0">
                                            <div class="todo-widget-header d-flex pb-2 pd-20 border-bottom">
                                                <div class="drop-down-profile" data-bs-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{asset('assets/img/faces/9.jpg')}}"><span class="assigned-task bg-danger">6</span></div>
                                                <div class="dropdown-menu tx-13">
                                                    <div class="main-header-profile">
                                                        <div class="tx-16 h5 mg-b-0">Teri Dactyl</div>
                                                        <span>Web Designer</span>
                                                    </div>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Total Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Completed Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="">
                                                        <a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="archive" class="p-2  border br-5 text-primary me-1"><i class="fe fe-folder-plus align-middle"></i></a>
                                                        <a  href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Move to spam" class="p-2 border br-5 text-primary me-1"><i class="fe fe-info align-middle"></i></a>
                                                        <a href="javascript:void(0);" class="p-2 border br-5 text-primary me-1" data-bs-toggle="dropdown"><i class="fe fe-more-vertical align-middle"></i></a>
                                                        <div class="dropdown-menu tx-13">
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ms-auto float-end">Pending </span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Nemo enim ipsam voluptatem quia voluptas</h5>
                                            </div>
                                            <div class="p-4 border-top">
                                                <span class="tx-12 text-muted">10.54am</span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">vero eos et accusamus et iusto odio dignissimos</h5>
                                            </div>
                                        </div>
                                        <div class="card-footer ">
                                            <a class="btn btn-primary" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Assign Task">Assign</a>
                                            <a class="btn btn-outline-primary ms-auto float-end" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="View Task">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card mg-b-20 mg-lg-b-0">
                                        <div class="card-body p-0">
                                            <div class="todo-widget-header d-flex pb-2 pd-20 border-bottom">
                                                <div class="drop-down-profile" data-bs-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{asset('assets/img/faces/4.jpg')}}"><span class="assigned-task bg-info">9</span></div>
                                                <div class="dropdown-menu tx-13">
                                                    <div class="main-header-profile">
                                                        <div class="tx-16 h5 mg-b-0">Teri Dactyl</div>
                                                        <span>Web Designer</span>
                                                    </div>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Total Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Completed Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="">
                                                        <a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="archive" class="p-2  border br-5 text-primary me-1"><i class="fe fe-folder-plus align-middle"></i></a>
                                                        <a  href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Move to spam" class="p-2 border br-5 text-primary me-1"><i class="fe fe-info align-middle"></i></a>
                                                        <a href="javascript:void(0);" class="p-2 border br-5 text-primary me-1" data-bs-toggle="dropdown"><i class="fe fe-more-vertical align-middle"></i></a>
                                                        <div class="dropdown-menu tx-13">
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <span class="tx-12 text-muted">10.54am</span><span class="badge bg-success-transparent text-success ms-auto float-end">completed</span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Ut enim ad minima veniam nostrum exercitationem</h5>
                                            </div>
                                            <div class="p-4 border-top">
                                                <span class="tx-12 text-muted">10.54am</span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Quis autem vel eum iure reprehenderit qui</h5>
                                            </div>
                                        </div>
                                        <div class="card-footer ">
                                            <a class="btn btn-primary" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Assign Task">Assign</a>
                                            <a class="btn btn-outline-primary ms-auto float-end" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="View Task">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-xl-4  col-md-6">
                                    <div class="card mg-b-20 mg-lg-b-0">
                                        <div class="card-body p-0">
                                            <div class="todo-widget-header d-flex pb-2 pd-20 border-bottom">
                                                <div class=" drop-down-profile" data-bs-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md" src="{{asset('assets/img/faces/15.jpg')}}"><span class="assigned-task bg-danger">7</span></div>
                                                <div class="dropdown-menu tx-13">
                                                    <div class="main-header-profile">
                                                        <div class="tx-16 h5 mg-b-0">Teri Dactyl</div>
                                                        <span>Web Designer</span>
                                                    </div>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Total Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Completed Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="">
                                                        <a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="archive" class="p-2  border br-5 text-primary me-1"><i class="fe fe-folder-plus align-middle"></i></a>
                                                        <a  href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Move to spam" class="p-2 border br-5 text-primary me-1"><i class="fe fe-info align-middle"></i></a>
                                                        <a  href="javascript:void(0);" class="p-2 border br-5 text-primary me-1" data-bs-toggle="dropdown"><i class="fe fe-more-vertical align-middle"></i></a>
                                                        <div class="dropdown-menu tx-13">
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ms-auto float-end">Pending </span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">I must explain to you how all this mistaken</h5>
                                            </div>
                                            <div class="p-4 border-top">
                                                <span class="tx-12 text-muted">10.54am</span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">I will give you a complete account of the system</h5>
                                            </div>
                                        </div>
                                        <div class="card-footer ">
                                            <a class="btn btn-primary" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Assign Task">Assign</a>
                                            <a class="btn btn-outline-primary ms-auto float-end" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="View Task">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card mg-b-20 ">
                                        <div class="card-body p-0">
                                            <div class="todo-widget-header d-flex pb-2 pd-20 border-bottom">
                                                <div class="drop-down-profile" data-bs-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{asset('assets/img/faces/5.jpg')}}"><span class="assigned-task bg-info">4</span></div>
                                                <div class="dropdown-menu tx-13">
                                                    <div class="main-header-profile">
                                                        <div class="tx-16 h5 mg-b-0">Teri Dactyl</div>
                                                        <span>Web Designer</span>
                                                    </div>
                                                    <a class="dropdown-item" href="javascript:void(0);">View Total Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Completed Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="">
                                                        <a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="archive" class="p-2  border br-5 text-primary me-1"><i class="fe fe-folder-plus align-middle"></i></a>
                                                        <a  href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Move to spam" class="p-2 border br-5 text-primary me-1"><i class="fe fe-info align-middle"></i></a>
                                                        <a href="javascript:void(0);" class="p-2 border br-5 text-primary me-1" data-bs-toggle="dropdown"><i class="fe fe-more-vertical align-middle"></i></a>
                                                        <div class="dropdown-menu tx-13">
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Unread</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mark As Important</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add to Tasks</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Add Star</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Mute</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Move to Trash</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ms-auto float-end">New</span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Rationally encounter quences extremely painful</h5>
                                            </div>
                                            <div class="p-4 border-top">
                                                <span class="tx-12 text-muted">10.54am</span>
                                                <h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Which of us ever undertakes laborious physical</h5>
                                            </div>
                                        </div>
                                        <div class="card-footer ">
                                            <a class="btn btn-primary" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="Assign Task">Assign</a>
                                            <a class="btn btn-outline-primary ms-auto float-end" href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="View Task">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /col -->
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- row closed -->

    @endsection

    @section('scripts')



    @endsection
