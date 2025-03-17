@extends('layouts.app')

    @section('styles')



    @endsection

    @section('content')

				<!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                      <span class="main-content-title mg-b-0 mg-b-lg-1">INVOICE</span>
                    </div>
                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                        </ol>
                    </div>
                </div>
                <!-- /breadcrumb -->

                <!-- Row -->
                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-lg-flex">
                                        <h6 class="main-content-label mb-1"><span class="d-flex mb-4"><a href="{{url('index')}}"><img src="{{asset('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a></span></h6>
                                            <div class="ms-auto">
                                                <p class="mb-1"><span class="font-weight-bold">Invoice No : #000321</span></p>
                                            </div>
                                    </div>
                                    <div class="row row-sm">
                                        <div class="col-lg-6">
                                            <p class="h3">Invoice Form:</p>
                                            <address>
                                                Street Address<br>
                                                State, City<br>
                                                Region, Postal Code<br>
                                                yourdomain@example.com
                                            </address>
                                        </div>
                                        <div class="col-lg-6 text-end">
                                            <p class="h3">Invoice To:</p>
                                            <address>
                                                Street Address<br>
                                                State, City<br>
                                                Region, Postal Code<br>
                                                ypurdomain@example.com
                                            </address>
                                            <div class="">
                                                <p class="mb-1"><span class="font-weight-bold">Invoice Date :</span></p>
                                                    <address>
                                                        01st November 2020
                                                    </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive mg-t-40">
                                        <table class="table table-invoice table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="wd-20p">Product</th>
                                                    <th class="wd-40p">Description</th>
                                                    <th class="tx-center">QNTY</th>
                                                    <th class="tx-right">Unit</th>
                                                    <th class="tx-right">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Logo Creation</td>
                                                    <td class="tx-12">Logo and business cards design</td>
                                                    <td class="tx-center">2</td>
                                                    <td class="tx-right">$60.00</td>
                                                    <td class="tx-right">$120.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Online Store Design & Development</td>
                                                    <td class="tx-12">Design/Development for all popular modern browsers</td>
                                                    <td class="tx-center">3</td>
                                                    <td class="tx-right">$80.00</td>
                                                    <td class="tx-right">$240.00</td>
                                                </tr>
                                                <tr>
                                                    <td>App Design</td>
                                                    <td class="tx-12">Promotional mobile application</td>
                                                    <td class="tx-center">1</td>
                                                    <td class="tx-right">$40.00</td>
                                                    <td class="tx-right">$40.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="valign-middle" colspan="2" rowspan="4">
                                                        <div class="invoice-notes">
                                                            <label class="main-content-label tx-13">Notes</label>
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                        </div><!-- invoice-notes -->
                                                    </td>
                                                    <td class="tx-right">Sub-Total</td>
                                                    <td class="tx-right" colspan="2">$400.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="tx-right">Tax</td>
                                                    <td class="tx-right" colspan="2">3%</td>
                                                </tr>
                                                <tr>
                                                    <td class="tx-right">Discount</td>
                                                    <td class="tx-right" colspan="2">10%</td>
                                                </tr>
                                                <tr>
                                                    <td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
                                                    <td class="tx-right" colspan="2">
                                                        <h4 class="tx-bold">$450.00</h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="button" class="btn ripple btn-primary mb-1"><i class="fe fe-credit-card me-1"></i> Pay Invoice</button>
                                    <button type="button" class="btn ripple btn-secondary mb-1"><i class="fe fe-send me-1"></i> Send Invoice</button>
                                    <button type="button" class="btn ripple btn-info mb-1" onclick="javascript:window.print();"><i class="fe fe-printer me-1"></i> Print Invoice</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->

    @endsection

    @section('scripts')

		<!--Internal  Chart.bundle js -->
		<script src="{{asset('assets/plugins/chartjs/Chart.bundle.min.js')}}"></script>

    @endsection
