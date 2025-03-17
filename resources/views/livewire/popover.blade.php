@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                      <span class="main-content-title mg-b-0 mg-b-lg-1">POPOVERS</span>
                    </div>
                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Popover</li>
                        </ol>
                    </div>
                </div>
                <!-- /breadcrumb -->

                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card" id="popover">
                            <div class="card-body">
                                <div>
                                    <h6 class="card-title mb-1">DEFAULT POPOVER</h6>
                                    <p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site..</p>
                                </div>
                                <div class="text-wrap">
                                    <div class="example">
                                        <div class="tx-10 mb-1 font-weight-bold text-muted text-uppercase">
                                            STATIC EXAMPLE
                                        </div>
                                        <div class="popover-static-demo">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="popover bs-popover-top default">
                                                        <div class="popover-arrow"></div>
                                                        <h3 class="popover-header">Popover top</h3>
                                                        <div class="popover-body">
                                                            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                        </div>
                                                    </div><!-- popover -->
                                                </div><!-- col-6 -->
                                                <div class="col-md-6 mg-t-30 mg-md-t-0">
                                                    <div class="popover bs-popover-bottom default">
                                                        <div class="popover-arrow"></div>
                                                        <h3 class="popover-header">Popover Bottom</h3>
                                                        <div class="popover-body">
                                                            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                        </div>
                                                    </div><!-- popover -->
                                                </div><!-- col-6 -->
                                                <div class="col-md-6 mg-t-30">
                                                    <div class="popover bs-popover-start default">
                                                        <div class="popover-arrow"></div>
                                                        <h3 class="popover-header">Popover Left</h3>
                                                        <div class="popover-body">
                                                            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                        </div>
                                                    </div><!-- popover -->
                                                </div><!-- col-6 -->
                                                <div class="col-md-6 mg-t-30">
                                                    <div class="popover bs-popover-end default">
                                                        <div class="popover-arrow"></div>
                                                        <h3 class="popover-header">Popover Right</h3>
                                                        <div class="popover-body">
                                                            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                        </div>
                                                    </div><!-- popover -->
                                                </div><!-- col-6 -->
                                            </div><!-- row -->
                                        </div>
                                    </div>
                                    <div class="example border-top-0">
                                        <div class="tx-10 mb-1 font-weight-bold text-muted text-uppercase">
                                            Live EXAMPLE
                                        </div>
                                        <div class="pd-20 bg-gray-200">
                                            <div class="row row-sm tx-center">
                                                <div class="col-sm-6 col-lg-3">
                                                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="default" data-bs-placement="top" title="Popover top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Click me</button>
                                                </div><!-- col-3 -->
                                                <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                                                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="default1" data-bs-placement="bottom" title="Popover bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Click me</button>
                                                </div><!-- col-3 -->
                                                <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                                                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="default2"  data-bs-placement="right" title="Popover right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Click me</button>
                                                </div><!-- col-3 -->
                                                <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                                                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="default3"  data-bs-placement="left" title="Popover left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Click me</button>
                                                </div><!-- col-3 -->
                                            </div><!-- row -->
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="popover2">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">DEFAULT POPOVER</h6>
                                        <p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site..</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="popover-static-demo">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="popover popover-head-primary bs-popover-top">
                                                            <div class="popover-arrow"></div>
                                                            <h3 class="popover-header">Popover top</h3>
                                                            <div class="popover-body">
                                                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                            </div>
                                                        </div><!-- popover -->
                                                    </div><!-- col-6 -->
                                                    <div class="col-md-6 mg-t-30 mg-md-t-0">
                                                        <div class="popover popover-head-primary bs-popover-bottom">
                                                            <div class="popover-arrow"></div>
                                                            <h3 class="popover-header">Popover Bottom</h3>
                                                            <div class="popover-body">
                                                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                            </div>
                                                        </div><!-- popover -->
                                                    </div><!-- col-6 -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="example border-top-0">
                                            <div class="pd-20 bg-gray-200">
                                                <div class="row row-sm tx-center">
                                                    <div class="col-sm-6 col-lg-3">
                                                        <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-popover-color="head-primary" data-bs-placement="top" title="Popover top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." >Click me</button>
                                                    </div><!-- col-3 -->
                                                    <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                                                        <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-popover-color="head-secondary" data-bs-placement="bottom" title="Popover bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Click me</button>
                                                    </div><!-- col-3 -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="popover3">
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">DEFAULT POPOVER</h6>
                                        <p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site..</p>
                                    </div>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="popover-static-demo">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="popover popover-primary bs-popover-top">
                                                            <div class="popover-arrow"></div>
                                                            <h3 class="popover-header">Popover top</h3>
                                                            <div class="popover-body">
                                                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                            </div>
                                                        </div><!-- popover -->
                                                    </div><!-- col-6 -->
                                                    <div class="col-md-6 mg-t-30 mg-md-t-0">
                                                        <div class="popover popover-secondary bs-popover-bottom">
                                                            <div class="popover-arrow"></div>
                                                            <h3 class="popover-header">Popover Bottom</h3>
                                                            <div class="popover-body">
                                                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                            </div>
                                                        </div><!-- popover -->
                                                    </div><!-- col-6 -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="example border-top-0">
                                            <div class="pd-20 bg-gray-200">
                                                <div class="row row-sm tx-center">
                                                    <div class="col-sm-6 col-lg-3">
                                                        <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-popover-color="primary" data-bs-placement="top" title="Popover top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Click me</button>
                                                    </div><!-- col-3 -->
                                                    <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                                                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-popover-color="secondary" data-bs-placement="bottom" title="Popover bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." >Click me</button>
                                                    </div><!-- col-3 -->
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->

    @endsection

    @section('scripts')

		<!--popover js-->
		<script src="{{asset('assets/js/popover.js')}}"></script>

    @endsection
