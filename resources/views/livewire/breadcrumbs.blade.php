@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                <span class="main-content-title mg-b-0 mg-b-lg-1">BREADCRUMBS</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">ELements</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
                    </ol>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card" id="basic">
                        <div class="card-body">
                            <div>
                                <h6 class="card-title mb-1">Basic Styling</h6>
                                <p class="text-muted card-sub-title">The example below is the basic styling of the breadcrumb from Bootstrap.</p>
                            </div>
                            <div class="text-wrap">
                                <div class="example">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-style mg-b-0">
                                            <li class="breadcrumb-item">
                                                <a href="javascript:void(0);">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="javascript:void(0);">Library</a>
                                            </li>
                                            <li class="breadcrumb-item active">Data</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card" id="custom">
                        <div class="card-body">
                            <div>
                                <h6 class="card-title mb-1">Custom Styling</h6>
                                <p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb used by this template.</p>
                            </div>
                            <div class="text-wrap">
                                <div class="example">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-style2 mb-0">
                                            <li class="breadcrumb-item">
                                                <a href="javascript:void(0);">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="javascript:void(0);">Library</a>
                                            </li>
                                            <li class="breadcrumb-item active">Data</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card" id="divider">
                        <div class="card-body">
                            <div>
                                <h6 class="card-title mb-1">Icon Divider</h6>
                                <p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb using different divider.</p>
                            </div>
                            <div class="text-wrap">
                                <div class="example">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb  breadcrumb-style mb-2">
                                            <li class="breadcrumb-item">
                                            <svg class="svg-icon mb-1" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                <a href="javascript:void(0);">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="javascript:void(0);">Library</a>
                                            </li>
                                            <li class="breadcrumb-item active">Data</li>
                                        </ol>
                                        <ol class="breadcrumb breadcrumb-style2 mb-0">
                                            <li class="breadcrumb-item">
                                            <svg class="svg-icon mb-1" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                <a href="javascript:void(0);">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="javascript:void(0);">Library</a>
                                            </li>
                                            <li class="breadcrumb-item active">Data</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card" id="center">
                        <div class="card-body">
                            <div>
                                <h6 class="card-title mb-1">Breadcrumbs-Center align</h6>
                                <p class="text-muted card-sub-title">The example below is the center aligment of the breadcrumb</p>
                            </div>
                            <div class="text-wrap">
                                <div class="example">
                                    <nav class="breadcrumb-3">
                                        <ol class="breadcrumb breadcrumb-style1 mb-0">
                                            <li class="breadcrumb-item">
                                                <a href="javascript:void(0);">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="javascript:void(0);">Library</a>
                                            </li>
                                            <li class="breadcrumb-item active">Data</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card" id="right">
                            <div class="card-body">
                                <div>
                                    <h6 class="card-title mb-1">Breadcrumbs-Right align</h6>
                                    <p class="text-muted card-sub-title">The example below is the Right aligment of the breadcrumb</p>
                                </div>
                                <div class="text-wrap">
                                    <div class="example">
                                        <nav class="breadcrumb-4">
                                            <ol class="breadcrumb breadcrumb-style1 mb-0">
                                                <li class="breadcrumb-item">
                                                    <a href="javascript:void(0);">Home</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="javascript:void(0);">Library</a>
                                                </li>
                                                <li class="breadcrumb-item active">Data</li>
                                            </ol>
                                        </nav>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->

    @endsection

    @section('scripts')



    @endsection
