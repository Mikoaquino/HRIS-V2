@section('styles')

<!--- Internal Select2 css-->
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

<!--  smart photo master css -->
<link href="{{asset('assets/plugins/SmartPhoto-master/smartphoto.css')}}" rel="stylesheet">

@endsection

<div class="single-page">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">View Trip Record</span>
            <p class="text-primary">Waybill No. {{ $waybillNo }}</p>
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body d-md-flex">
                    <div class="">
                        <span class="profile-image pos-relative">
                            <img class="br-5" alt="" src="{{asset('assets/img/faces/profile.jpg')}}">
                            <span class="bg-success text-white wd-1 ht-1 rounded-pill profile-online"></span>
                        </span>
                    </div>
                    <div class="my-md-auto mt-4 prof-details">
                        <h4 class="font-weight-semibold ms-md-4 ms-0 mb-1 pb-0">{{ $client }}</h4><br>
                        <p class="text-muted ms-md-4 ms-0 mb-2"><span class="font-weight-semibold me-2">BU Account:</span><span>{{ $buAccount }}</span>
                        </p>
                        <p class="text-muted ms-md-4 ms-0 mb-2"><span class="font-weight-semibold me-2">Consignee:</span><span>{{ $consignee }}</span>
                        </p>
                        <p class="text-muted ms-md-4 ms-0 mb-2"><span class="font-weight-semibold me-2">Trip Type:</span><span>{{ $tripType }}</span>
                        </p>
                        <p class="text-muted ms-md-4 ms-0 mb-2"><span class="font-weight-semibold me-2">Trip Status:</span><span>{{ $tripStatus }}</span>
                        </p>
                    </div>
                </div>
                <div class="card-footer py-0">
                    <div class="profile-tab tab-menu-heading border-bottom-0">
                        <nav class="nav main-nav-line p-0 tabs-menu profile-nav-line border-0 br-5 mb-0	">
                            <a class="nav-link  mb-2 mt-2 active" data-bs-toggle="tab" href="#tripinfo">Trip Information</a>
                            <a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#orderdetails">Order Details</a>
                            <a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#po">Purchase Order</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="custom-card main-content-body-profile">
                <div class="tab-content">
                    <div class="main-content-body tab-pane  active" id="tripinfo">
                        <div class="card">
                            <div class="card-body p-0 border-0 p-0 rounded-10">
                                <div class="p-4">
                                    <h4 class="tx-15 text-uppercase mb-3">SCHEDULE</h4><br>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Waybill No. </label>
                                            <p>{{ $waybillNo }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Control No. </label>
                                            <p>{{ $controlNo }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Requestor </label>
                                            <p>{{ $requestor }}</p>
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Pick Up Date </label>
                                            <p>{{ $pickUpDate }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">AAT Pick Up</label>
                                            <p>{{ $puAAT }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">ADT Pick Up </label>
                                            <p>{{ $puADT }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Pick Up Point </label>
                                            <p>{{ $origin }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-4">
                                            <label class="form-control-label text-primary">Pick Up Address </label>
                                            <p>{{ $originStreet }} {{ $originAddress }}, {{ $originCity }}</p>
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Delivery Date </label>
                                            <p>{{ $delDate }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">AAT Delivery</label>
                                            <p>{{ $delAAT }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">ATD Delivery </label>
                                            <p>{{ $delADT }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Delivery Point </label>
                                            <p>{{ $destination }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-4">
                                            <label class="form-control-label text-primary">Delivery Address </label>
                                            <p>{{ $destiStreet }} {{ $destiAddress }}, {{ $destiCity }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top"></div>
                                <div class="p-4">
                                    <h4 class="tx-15 text-uppercase mb-3">FLEET</h4><br>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Plate No. </label>
                                            <p>{{ $plateNo }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Fleet Type Used</label>
                                            <p>{{ $fleet }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Temperature Requirements </label>
                                            <p>{{ $tempRequirements }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top"></div>
                                <div class="p-4">
                                    <h4 class="tx-15 text-uppercase mb-3">People</h4><br>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Driver's Name </label>
                                            <p>{{ $driver }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Driver's Contact No.</label>
                                            <p>{{ $driverNo }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Helper's Name </label>
                                            <p>{{ $helper }}</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Helper's Contact No. </label>
                                            <p>{{ $helperNo }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content-body tab-pane " id="orderdetails">
                        <div class="card">
                            <div class="card-body p-0 border-0 p-0 rounded-10">
                                <div class="p-4">
                                    <h4 class="tx-15 text-uppercase mb-3">Order summary</h4><br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover mb-0 text-md-nowrap" id="responsive-datatable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">NO.</th>
                                                    <th class="text-center">PRODUCT DESCRIPTION</th>
                                                    <th class="text-center">QUANTITY</th>
                                                    <th class="text-center">DECLARED VALUE</th>
                                                    <th class="text-center">PRODUCT COST</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableBody">
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Product Description Sample</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">boxes</td>
                                                    <td class="text-center">100,000.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><br>
                                </div>
                                <div class="border-top"></div>
                                <div class="p-4">
                                    <h4 class="tx-15 text-uppercase mb-3">Sales Breakdown</h4><br>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Order Subtotal </label>
                                            <p>100,000.00</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Additional Order Fees</label>
                                            <p>500.00</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Total Order Price </label>
                                            <p>100,500.00</p>
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Trucking Cost </label>
                                            <p>5,000.00</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Additional Trucking Cost</label>
                                            <p>500.00</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Total Trucking Cost </label>
                                            <p>5,500.00</p>
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Sales Total </label>
                                            <p>106,000.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content-body tab-pane " id="orderdetails">
                        <div class="card">
                            <div class="card-body p-0 border-0 p-0 rounded-10">
                                <div class="p-4">
                                    <h4 class="tx-15 text-uppercase mb-3">Order summary</h4><br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover mb-0 text-md-nowrap" id="responsive-datatable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">NO.</th>
                                                    <th class="text-center">PRODUCT DESCRIPTION</th>
                                                    <th class="text-center">QUANTITY</th>
                                                    <th class="text-center">DECLARED VALUE</th>
                                                    <th class="text-center">PRODUCT COST</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableBody">
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Product Description Sample</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">boxes</td>
                                                    <td class="text-center">100,000.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><br>
                                </div>
                                <div class="border-top"></div>
                                <div class="p-4">
                                    <h4 class="tx-15 text-uppercase mb-3">Sales Breakdown</h4><br>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Order Subtotal </label>
                                            <p>100,000.00</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Additional Order Fees</label>
                                            <p>500.00</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Total Order Price </label>
                                            <p>100,500.00</p>
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Trucking Cost </label>
                                            <p>5,000.00</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Additional Trucking Cost</label>
                                            <p>500.00</p>
                                        </div>
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Total Trucking Cost </label>
                                            <p>5,500.00</p>
                                        </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Sales Total </label>
                                            <p>106,000.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content-body tab-pane " id="po">
                        <div class="card">
                            <div class="card-body p-0 border-0 p-0 rounded-10">
                                <div class="p-4">
                                    <h4 class="tx-15 text-uppercase mb-3">Other purchase order details</h4><br>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Vendor </label>
                                            <p>Casangcapan Guinto Enterprises</p>
                                            <p> 28 Victor St., Pulong Tamo, San Idelfonso Bulacan</p>
                                        </div>
                                    </div><br>
                                    <div class="row row-sm">
                                        <div class="col-md-5 col-lg-2">
                                            <label class="form-control-label text-primary">Client </label>
                                            <p>{{ $client }}</p>
                                            <p>{{ $originStreet }} {{ $originAddress }}, {{ $originCity }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content-body tab-pane  border-0" id="theme">
                        <div class="card">
                            <div class="card-body border-0" data-select2-id="12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->

</div>

@section('scripts')

<!-- Internal Select2 js-->
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/select2.js')}}"></script>

<!-- smart photo master js -->
<script src="{{asset('assets/plugins/SmartPhoto-master/smartphoto.js')}}"></script>
<script src="{{asset('assets/js/gallery.js')}}"></script>

@endsection