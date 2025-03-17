@extends('layouts.app')

    @section('styles')

		<!---Internal  Owl Carousel css-->
		<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

    @endsection

    @section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FILE DETAILS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">File details</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
                    <div class="row row-sm">
                        <div class="col-xl-8 col-lg-12 col-md-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body px-4 pt-4">
                                    <a href="{{url('blog-details')}}"><img src="{{asset('assets/img/photos/blog.jpg')}}" alt="img" class="cover-image br-7 w-100"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="card custom-card">
                                <div class=" card-body ">
                                    <h5 class="mb-3">File details :</h5>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="table-responsive">
                                                    <table class="table mb-0 border-top table-bordered text-nowrap">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">File-name</th>
                                                                <td>image.jpg</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">File-size</th>
                                                                <td>12.45mb</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">uploaded-date</th>
                                                                <td>01-12-2020</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">uploaded-by</th>
                                                                <td>prityy abodh</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">image-width</th>
                                                                <td>1000</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">image-height</th>
                                                                <td>600</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">File-formate</th>
                                                                <td>jpg</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">File-location</th>
                                                                <td>storage/photos/image.jpg</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body h-100">
                                    <div id="owl-demo2" class="owl-carousel owl-carousel-icons2">
                                        <div class="item">
                                            <div class="card">
                                                <div class="card custom-card overflow-hidden mb-0 ">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/img/photos/fileimage4.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0">221.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card custom-card overflow-hidden mb-0 ">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/img/photos/fileimage1.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0">221.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card custom-card overflow-hidden mb-0 ">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/img/photos/fileimage2.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0">221.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card custom-card overflow-hidden mb-0 ">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/img/photos/fileimage3.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0">221.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card custom-card overflow-hidden mb-0 ">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/img/photos/fileimage4.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0">221.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card custom-card overflow-hidden mb-0 ">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/img/photos/fileimage5.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0">221.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card custom-card overflow-hidden mb-0 ">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/img/photos/fileimage1.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0">221.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card custom-card overflow-hidden mb-0 ">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/img/photos/fileimage3.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0">221.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card custom-card overflow-hidden mb-0 ">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/img/photos/fileimage5.jpg')}}" alt="img"></a>
                                                    <div class="card-footer bd-t-0 py-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6 class="mb-0">221.jpg</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <h6 class="text-muted mb-0">120 KB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h5 class="mb-3">Recent Files</h5>
                                    <div class="row row-sm file-detailimg">
                                        <div class="col-xl-3">
                                            <div class="card custom-card">
                                                <img src="{{asset('assets/img/media/1.jpg')}}" alt="img" class="rounded-5">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card">
                                                <img src="{{asset('assets/img/media/2.jpg')}}" alt="img" class="rounded-5">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card">
                                                <img src="{{asset('assets/img/media/3.jpg')}}" alt="img" class="rounded-5">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card">
                                                <img src="{{asset('assets/img/media/4.jpg')}}" alt="img" class="rounded-5">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card">
                                                <img src="{{asset('assets/img/media/5.jpg')}}" alt="img" class="rounded-5">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card">
                                                <img src="{{asset('assets/img/media/6.jpg')}}" alt="img" class="rounded-5">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card">
                                                <img src="{{asset('assets/img/media/7.jpg')}}" alt="img" class="rounded-5">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card">
                                                <img src="{{asset('assets/img/media/8.jpg')}}" alt="img" class="rounded-5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End Row -->

    @endsection

    @section('scripts')

		<!-- Internal Owl Carousel js-->
		<script src="{{asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
		<script src="{{asset('assets/plugins/multislider/multislider.js')}}"></script>
        <script src="{{asset('assets/js/carousel.js')}}"></script>

    @endsection
