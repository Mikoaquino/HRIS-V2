@extends('layouts.app')

    @section('styles')

		<!---Internal Owl Carousel css-->
		<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!---Internal  Multislider css-->
		<link href="{{asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">

    @endsection

    @section('content')

			<!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">COLLAPSE</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Collapse</li>
                    </ol>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div>
                                <h6 class="card-title mb-1">Basic Example</h6>
                                <p class="text-muted card-sub-title">Click the buttons below to show and hide another element via class changes</p>
                            </div>
                            <div>
                                <a aria-controls="collapseExample" aria-expanded="false" class="btn ripple btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button">Toggle Content</a>
                                <div class="collapse" id="collapseExample">
                                    <div class="mt-4">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div>
                                <h6 class="card-title mb-1">Multiple Targets</h6>
                                <p class="text-muted card-sub-title">A button or link can show and hide multiple elements by referencing them with a jquery selector in its href or data-bs-target attribute.</p>
                            </div>
                            <div>
                                <div class="btn-list">
                                    <a aria-controls="multiCollapseExample1" aria-expanded="false" class="btn ripple btn-primary mb-3 mb-xl-0" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button">Toggle First Content</a>
                                    <a aria-controls="multiCollapseExample2" aria-expanded="false" class="btn ripple btn-secondary mb-3 mb-xl-0" href="#multiCollapseExample2" data-bs-toggle="collapse" role="button">Toggle Second Content</a>
                                    <a aria-controls="multiCollapseExample1 multiCollapseExample2" aria-expanded="false" class="btn ripple btn-success mb-3 mb-xl-0" href=".multi-collapse" data-bs-toggle="collapse" role="button">Toggle Both Contents</a>
                                </div>
                                <div class="row row-sm">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="mt-4">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="mt-4">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row closed -->

    @endsection

    @section('scripts')



    @endsection
