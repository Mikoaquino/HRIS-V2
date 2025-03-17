@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">BLOG</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card overflow-hidden">
                                <a href="{{url('blog-details')}}" class="card custom-card card-img-top-1 background-image-blog mb-0">
                                </a>
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="mt-4"><h5 class="font-weight-semibold">Best Place To visit For a Holiday idea of denouncing pleasure?</h5></a>
                                    <p class="mb-0">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="item7-card-desc d-sm-flex mt-0">
                                        <a href="javascript:void(0);" class="d-flex"><span class="fe fe-user text-muted me-2 tx-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Anna Ogden</div></a>
                                        <div class="d-flex ms-auto">
                                            <a href="javascript:void(0);" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 tx-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Jan-18-2020</div></a>
                                            <a class="me-0 d-flex" href="javascript:void(0);"><span class="fe fe-message-square text-muted me-2 tx-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">12 Comments</div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('assets/img/photos/11.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">10 Ways To Immediately Start Selling Products !</h4></a>
                                    <p class="mb-2">Those who do not know how  pursues or desires to  occur in which toil and pain can procure him some great pleasure. To take a trivial example  pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-buil</p>
                                </div>
                                <div class="item7-card-desc d-flex p-3 pt-0 align-items-center justify-content-center border-top">
                                    <div class="main-img-user online">
                                    <img alt="avatar" src="{{asset('assets/img/faces/9.jpg')}}">
                                    </div>
                                    <div class="main-contact-body">
                                        <h6>Jiggel mossin</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone me-3 font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 tx-16"></span>Aug 01,2021</span></a>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h3 class="card-title">Latest Posts</h3>
                                </div>
                                <div class="card-body pt-1">
                                    <div class="list-catergory1">
                                        <div class="item-list">
                                            <ul class="list-group mb-0">
                                                <li class="list-group-item d-flex border-bottom-0 pt-4">
                                                    <img src="{{asset('assets/img/photos/blog1.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                                    <div class="">
                                                        <span class="d-block">Tourism</span>
                                                        <a class="text-default fs-16 font-weight-semibold">Explore tourism by visitinig places.</a>
                                                        <small class="d-block text-muted">2 day ago</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex border-bottom-0">
                                                    <img src="{{asset('assets/img/photos/blog2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                                    <div class="">
                                                        <span class="d-block">Beautician</span>
                                                        <a class="text-default fs-16 font-weight-semibold">Beautification courses are available.</a>
                                                        <small class="d-block text-muted">2 hrs ago</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex border-bottom-0">
                                                    <img src="{{asset('assets/img/photos/blog5.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                                    <div class="">
                                                        <span class="d-block">Music</span>
                                                        <a class="text-default fs-16 font-weight-semibold">Music in a peaceful way </a>
                                                        <small class="d-block text-muted">1 day ago</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex border-bottom-0">
                                                    <img src="{{asset('assets/img/photos/blog4.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                                    <div class="">
                                                        <span class="d-block">Literature</span>
                                                        <a class="text-default fs-16 font-weight-semibold">English and spanish classes in Your way</a>
                                                        <small class="d-block text-muted">1 week ago</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex  pb-4 br-bs-7 br-be-7">
                                                    <img src="{{asset('assets/img/photos/blog6.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                                    <div class="">
                                                        <span class="d-block">Health</span>
                                                        <a class="text-default fs-16 font-weight-semibold">Health care and fitness awareness</a>
                                                        <small class="d-block text-muted">22 hrs ago</small>
                                                    </div>
                                                </li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row ">
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('assets/img/photos/2.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">How To Become Better With Building In 1 Month !</h4></a>
                                    <p class="card-text mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="item7-card-desc d-flex p-3 pt-0 align-items-center justify-content-center border-top">
                                    <div class="main-img-user online">
                                    <img alt="avatar" src="{{asset('assets/img/faces/2.jpg')}}">
                                    </div>
                                    <div class="main-contact-body">
                                        <h6>Abigail John</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone me-3 font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 tx-16"></span>Aug 24,2021</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6  col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('assets/img/photos/1.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">10 Ways To Immediately Start Selling Products !</h4></a>
                                    <p class="card-text mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                <div class="item7-card-desc d-flex p-3 pt-0 align-items-center justify-content-center border-top">
                                    <div class="main-img-user online">
                                    <img alt="avatar" src="{{asset('assets/img/faces/9.jpg')}}">
                                    </div>
                                    <div class="main-contact-body">
                                        <h6>Jiggel mossin</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone me-3 font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 tx-16"></span>Aug 01,2021</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6  col-sm-6">
                            <div class="card custom-card card-img-top-1">
                                <a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('assets/img/photos/9.jpg')}}" alt=""></a>
                                <div class="card-body pb-0">
                                    <a href="{{url('blog-details')}}"><h4 class="card-title">3 Easy Ways To Make Your mobile Faster & Even !</h4></a>
                                    <p class="card-text mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="item7-card-desc d-flex p-3 pt-0 align-items-center justify-content-center border-top">
                                    <div class="main-img-user online">
                                    <img alt="avatar" src="{{asset('assets/img/faces/7.jpg')}}">
                                    </div>
                                    <div class="main-contact-body">
                                        <h6>Raven Chanan</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="me-0 d-flex" href="javascript:void(0);"><span class="phone me-3 font-weight-semibold text-muted"><span class="fe fe-calendar text-muted me-2 tx-16"></span>Feb 19,2021</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6  col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-header pb-1">
                                    <h3 class="card-title mb-2">Blog AUthors</h3>
                                </div>
                                <div class="card-body p-0 customers mt-1">
                                    <div class="list-group list-lg-group list-group-flush">
                                <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item list-group-item-action">
                                            <div class="media mt-0">
                                                <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('assets/img/faces/3.jpg')}}" alt="Image description">
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mt-0">
                                                            <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Samantha Melon</h5>
                                                            <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                        </div>
                                                        <span class="ms-auto wd-45p fs-16 ">
                                                            <span id="spark1" class="wd-100p"></span>
                                                            <span class="float-end badge badge-success-transparent">
                                                            <span class="op-7 text-success font-weight-semibold">8 hrs ago </span>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('assets/img/faces/11.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Allie Grater</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16 ">
                                                                <span id="spark2" class="wd-100p"></span>
                                                                <span class="float-end badge badge-danger-transparent ">
                                                                <span class="op-7 text-danger font-weight-semibold">12 hrs ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('assets/img/faces/17.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Gabe Lackmen</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16 ">
                                                                <span id="spark3" class="wd-100p"></span>
                                                                <span class="float-end badge badge-danger-transparent ">
                                                                <span class="op-7 text-danger font-weight-semibold">1 hr ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('assets/img/faces/15.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Manuel Labor</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16">
                                                                <span id="spark6" class="wd-100p"></span>
                                                            <span class="float-end badge badge-success-transparent ">
                                                            <span class="op-7 text-success font-weight-semibold">3 days ago</span>
                                                        </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('assets/img/faces/13.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Manuel Labor</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16">
                                                                <span id="spark4" class="wd-100p"></span>
                                                                <span class="float-end badge badge-danger-transparent ">
                                                                <span class="op-7 text-danger font-weight-semibold">22 hrs ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle me-3 my-auto" src="{{asset('assets/img/faces/13.jpg')}}" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-13 font-weight-sembold text-dark">Manuel Labor</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234</p>
                                                            </div>
                                                            <span class="ms-auto wd-45p fs-16">
                                                                <span id="spark5" class="wd-100p"></span>
                                                                <span class="float-end badge badge-danger-transparent ">
                                                                <span class="op-7 text-danger font-weight-semibold">1 day ago</span>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    <ul class="pagination product-pagination ms-auto float-end">
                        <li class="page-item page-prev disabled">
                            <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                        <li class="page-item page-next">
                            <a class="page-link" href="javascript:void(0);">Next</a>
                        </li>
                    </ul>

    @endsection

    @section('scripts')



    @endsection
