@extends('layouts.app')

@section('styles')

<!-- Data table css -->
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

<!-- INTERNAL Select2 css -->
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />

@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="left-content">
        <span class="main-content-title mg-b-0 mg-b-lg-1">REPORT SUMMARY OF TRIPS &nbsp;&nbsp;<a class="btn btn-outline-primary btn-sm mb-1" data-bs-target="#select2modal" data-bs-toggle="modal" href="">FEBRUARY 2023</a></span>
    </div>
    <div class="justify-content-center mt-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Summary of Trips</li>
        </ol>
    </div>
</div>
<!-- /breadcrumb -->

<!-- row -->
<div class="row row-cards row-deck">
    <div class="col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="card-title pb-0  mb-2">Trips</div>
                <p class="tx-12 tx-gray-500 mb-3">Hello <strong>{{ Auth::user()->name }}</strong>, this is the summarized total of trips this day, this week, and this month</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <label class="tx-12">Today</label>
                        <p class="font-weight-bold tx-20">3,256</p>
                    </div><!-- col -->
                    <div class="col border-start text-center">
                        <label class="tx-12">This Week</label>
                        <p class="font-weight-bold tx-20">25,321</p>
                    </div><!-- col -->
                    <div class="col border-start text-center">
                        <label class="tx-12">This Month</label>
                        <p class="font-weight-bold tx-20">53,625</p>
                    </div><!-- col -->
                </div><!-- row -->
                <center>
                    <div id="tripsChart"></div>
                </center>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="card">
            <div class="card-header pb-0">
                <div class="card-title pb-0 mb-2">SAN MIGUEL PUREFOODS INC.</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <label class="tx-12">SMFI-SINDALAN</label>
                        <p class="font-weight-bold tx-20">236</p>
                    </div><!-- col -->
                    <div class="col border-start text-center ">
                        <label class="tx-12">PHC-CAVITE</label>
                        <p class="font-weight-bold tx-20">1,365</p>
                    </div><!-- col -->
                </div><!-- row table-->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">PER DAY TRIPS SUMMARY</h6>
                                    <p class="text-muted card-sub-title"></p>
                                </div>
                                <div class="table-responsive">
                                    <table id="responsive-datatable1" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">DATE</th>
                                                <th class="border-bottom-0">SMFI-SINDALAN</th>
                                                <th class="border-bottom-0">PHC-CAVITE</th>
                                                <th class="border-bottom-0">TOTAL TRIPS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row table-->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="card">
            <div class="card-header pb-0">
                <div class="card-title pb-0  mb-2">BOUNTY FARMS INC.</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <label class="tx-12">GLOBAL ESSENTIAL FOODS</label>
                        <p class="font-weight-bold tx-20">3,256</p>
                    </div><!-- col -->
                    <div class="col border-start text-center">
                        <label class="tx-12">BOUNTY EGG</label>
                        <p class="font-weight-bold tx-20">25,321</p>
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">PER DAY TRIPS SUMMARY</h6>
                                    <p class="text-muted card-sub-title"></p>
                                </div>
                                <div class="table-responsive">
                                    <table id="responsive-datatable2" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">DATE</th>
                                                <th class="border-bottom-0">GLOBAL ESSENTIAL FOODS</th>
                                                <th class="border-bottom-0">BOUNTY EGG</th>
                                                <th class="border-bottom-0">TOTAL TRIPS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row table-->
            </div>
        </div>
    </div>
</div>
<!-- row closed -->

<!-- row -->
<div class="row row-cards row-deck">
    <div class="col-sm-12 col-lg-6">
        <div class="card">
            <div class="card-header pb-0">
                <div class="card-title pb-0 mb-2">ROADWISE LOGISTICS</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <label class="tx-12">JWS WET</label>
                        <p class="font-weight-bold tx-20">236</p>
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">PER DAY TRIPS SUMMARY</h6>
                                    <p class="text-muted card-sub-title"></p>
                                </div>
                                <div class="table-responsive">
                                    <table id="responsive-datatable4" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">DATE</th>
                                                <th class="border-bottom-0">JWS WET</th>
                                                <th class="border-bottom-0">TOTAL TRIPS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row table-->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="card">
            <div class="card-header pb-0">
                <div class="card-title pb-0  mb-2">FAST CARGO</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <label class="tx-12">FAST CARGO</label>
                        <p class="font-weight-bold tx-20">3,256</p>
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">PER DAY TRIPS SUMMARY</h6>
                                    <p class="text-muted card-sub-title"></p>
                                </div>
                                <div class="table-responsive">
                                    <table id="responsive-datatable5" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">DATE</th>
                                                <th class="border-bottom-0">FAST CARGO</th>
                                                <th class="border-bottom-0">TOTAL TRIPS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row table-->
            </div>
        </div>
    </div>
</div>
<!-- row closed -->

<!-- row -->
<div class="row row-cards row-deck">
    <div class="col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="card-title pb-0  mb-2">BOLLORE LOGISTICS PHILIPPINES INC.</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <label class="tx-12">LOCAL DISTRIBTUTION</label>
                        <p class="font-weight-bold tx-20">3,256</p>
                    </div><!-- col -->
                    <div class="col border-start text-center">
                        <label class="tx-12">AIR FREIGHT IMPORT & EXPORT</label>
                        <p class="font-weight-bold tx-20">25,321</p>
                    </div><!-- col -->
                    <div class="col border-start text-center">
                        <label class="tx-12">SEA FREIGHT IMPORT & EXPORT</label>
                        <p class="font-weight-bold tx-20">53,625</p>
                    </div><!-- col -->
                </div><!-- row table-->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">PER DAY TRIPS SUMMARY</h6>
                                    <p class="text-muted card-sub-title"></p>
                                </div>
                                <div class="table-responsive">
                                    <table id="responsive-datatable3" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">DATE</th>
                                                <th class="border-bottom-0">LOCAL DISTRIBTUTION</th>
                                                <th class="border-bottom-0">AIR FREIGHT IMPORT & EXPORT</th>
                                                <th class="border-bottom-0">SEA FREIGHT IMPORT & EXPORT</th>
                                                <th class="border-bottom-0">TOTAL TRIPS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>150</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>150</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>150</td>
                                            </tr>
                                            <tr>
                                                <td>Sunday, February 26, 2023</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>150</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row table-->
            </div>
        </div>
    </div>
</div>
<!-- row closed -->


<!-- Basic modal -->
<div class="modal fade" id="select2modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Month & Year Select</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <!-- Select2 -->
                <div class="main-content-label mg-b-5">
                    Select
                </div>
                <div class="input-group">
                    <div class="input-group-text">
                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                    </div>
                    <input type="month" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" value="2023-02">
                </div><!-- input-group -->
                <!-- Select2 -->
                <p class="mt-3">Choose month and year of summary to display.</p>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-primary" type="button">Save changes</button>
                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Basic modal -->


@endsection

@section('scripts')

<!-- Internal Data tables -->
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/js/table-data.js')}}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- INTERNAL Apexchart js -->
<script src="{{asset('assets/js/apexcharts.js')}}"></script>

@endsection