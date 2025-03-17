@section('styles')

<!--- Internal Select2 css-->
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

<!---Internal Fileupload css-->
<link href="{{asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css" />

<!---Internal Fancy uploader css-->
<link href="{{asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

<!-- Interenal Accordion Css -->
<link href="{{asset('assets/plugins/accordion/accordion.css')}}" rel="stylesheet" />

<!--Internal  Font Awesome -->
<link href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

<!--Internal   Notify -->
<link href="{{asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

<!--Internal  treeview -->
<link href="{{asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />

@endsection

<div class="single-page">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">Edit Trip Record</span>
            <p class="text-primary">Waybill No. {{ $waybillNo }}</p>
        </div>
        <div class="justify-content-center mt-2">
            <ol class="breadcrumb">
                <a class="btn btn-outline-primary form-control-sm btn-w-lg mb-1" href="{{url('/trips')}}">Back</a>
            </ol>
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="wizard2">
                        <h3>Trip Information</h3>
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                        @endif
                        <section>
                            <div class="main-content-label mg-b-5 text-primary">
                                Basic
                            </div><br>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-3">
                                    <label class="form-control-label">Client's Name <span class="tx-danger">*</span></label>
                                    <select wire:model.lazy="client" class="form-control form-control-sm form-select" id="client">
                                        <option value="">Select Client</option>
                                        <option value="Bollore Logistics Philippines Inc">Bollore Logistics Philippines Inc</option>
                                        <option value="Global Essentials">Global Essentials</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">BU Account <span class="tx-danger">*</span></label>
                                    <select wire:model.lazy="buAccount" class="form-control form-control-sm form-select" id="buaccount">
                                        <option value="">Select BU Account</option>
                                        <option value="Local Distribution">Local Distribution</option>
                                        <option value="Global Essentials">Global Essentials</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Consignee <span class="tx-danger">*</span></label>
                                    <select wire:model.lazy="consignee" class="form-control form-control-sm form-select" id="consignee">
                                        <option value="">Select Consignee</option>
                                        <option value="Louis Vuitton">Louis Vuitton</option>
                                        <option value="Bounty Farms">Bounty Farms</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Requestor <span class="tx-danger">*</span></label>
                                    <select wire:model.lazy="requestor" class="form-control form-control-sm form-select" id="consignee">
                                        <option value="">Select Requestor</option>
                                        <option value="Ms. Alyssa Jhoida Delas Las">Ms. Alyssa Jhoida Delas Las</option>
                                        <option value="Ms. Kristina Bolocon">Ms. Kristina Bolocon</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-3">
                                    <label class="form-control-label">Pick Up Date <span class="tx-danger">*</span></label>
                                    <input wire:model.lazy="pickUpDate" type="date" class="form-control form-control-sm fc-datepicker" placeholder="Select Date" id="pickup" required="">
                                </div>
                                <div class="col-md-5 col-lg-3">
                                    <label class="form-control-label">Trip Type <span class="tx-danger">*</span></label>
                                    <select wire:model.lazy="tripType" class="form-control form-control-sm form-select" data-bs-placeholder="Select Trip Type" id="triptype" required="">
                                        <option value="">Select Trip Type</option>
                                        <option value="FT">Full Trip</option>
                                        <option value="ST">Side Trip</option>
                                        <option value="BL">Back Load</option>
                                        <option value="TR">Transfer</option>
                                        <option value="PU">Pull Out</option>
                                        <option value="DC">Drop Change</option>
                                        <option value="CL">Co-Load</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-lg-3">
                                    <label class="form-control-label">Trip Status <span class="tx-danger">*</span></label>
                                    <select wire:model.lazy="tripStatus" class="form-control form-control-sm form-select" data-bs-placeholder="Select Trip Status" id="tripstatus" required="">
                                        <option value="">Select Trip Status</option>
                                        <option value="WA">Waiting</option>
                                        <option value="RU">Running</option>
                                        <option value="AP">Approved</option>
                                        <option value="CO">Completed</option>
                                        <option value="CA">Cancelled</option>
                                        <option value="DE">Declined</option>
                                        <option value="PE">Pending</option>
                                        <option value="FR">For Reverse</option>
                                        <option value="BI">Billed</option>
                                        <option value="NA">No Attachment</option>
                                    </select>
                                </div>
                            </div><br><br>
                            <div class="main-content-label mg-b-5 text-primary">
                                Schedule
                            </div><br>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-3">
                                    <label class="form-control-label">Waybill No. <span class="tx-danger">*</span></label>
                                    <input wire:model.lazy="waybillNo" class="form-control form-control-sm" id="waybill" name="waybill" placeholder="Waybill No." required="" type="text">
                                </div>
                                <div class="col-md-5 col-lg-3">
                                    <label class=" form-control-label">Control No. <span class="tx-danger">*</span></label>
                                    <input wire:model.lazy="controlNo" class="form-control form-control-sm" id="control" name="control" placeholder="Control No." required="" type="text">
                                </div>
                                <div class="col-md-5 col-lg-6">
                                    <label class=" form-control-label">&nbsp;</label>
                                    <input class="form-control form-control-sm" placeholder="00000, 00000" required="" type="text">
                                </div>
                            </div><br>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-3">
                                    <label class="form-control-label">Pick Up Date <span class="tx-danger">*</span></label>
                                    <input type="date" class="form-control form-control-sm fc-datepicker" placeholder="Select Date" id="pickup2" wire:model.debounce.500ms="pickUpDate" disabled>
                                </div>
                                <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Actual Arrival Time </label>
                                    <input wire:model.lazy="puAAT" type="time" class="form-control form-control-sm" placeholder="Select Time">
                                </div>
                                <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Actual Departure Time </label>
                                    <input wire:model.lazy="puADT" type="time" class="form-control form-control-sm" placeholder="Select Time">
                                </div>
                            </div><br>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-3">
                                    <label class="form-control-label">Delivery Date <span class="tx-danger">*</span></label>
                                    <input wire:model.lazy="delDate" type="date" class="form-control form-control-sm fc-datepicker" placeholder="Select Date" id="pickup2">
                                </div>
                                <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Actime Arrival Time </label>
                                    <input wire:model.lazy="delAAT" type="time" class="form-control form-control-sm" placeholder="Select Time">
                                </div>
                                <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Actual Departure Time </label>
                                    <input wire:model.lazy="delADT" type="time" class="form-control form-control-sm" placeholder="Select Time">
                                </div>
                            </div><br><br>
                            <div class="main-content-label mg-b-5 text-primary">
                                Route
                            </div><br>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-6">
                                    <label class="form-control-label">Pickup Point <span class="tx-danger">*</span></label>
                                    <select wire:model.lazy="origin" wire:click="loadOrigin" class="form-control form-control-sm form-select" id="origin">
                                        <option value="">Select Origin Site</option>
                                        <option value="Greenbelt LV Store">Greenbelt LV Store</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-lg-6">
                                    <label class="form-control-label">&nbsp;</label>
                                    <input type="text" class="form-control form-control-sm" id="address" placeholder="Address Line" wire:model.debounce.500ms="originAddress" disabled>
                                </div>
                            </div><br><br>
                            <div class="main-content-label mg-b-5 text-primary">
                                Delivery Point
                            </div><br>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-6">
                                    <label class="form-control-label">Destination Site <span class="tx-danger">*</span></label>
                                    <select wire:model.lazy="destination" wire:click="loadDestination" class="form-control form-control-sm form-select" data-bs-placeholder="Select Trip Status" id="destination">
                                        <option value="">Select Destination</option>
                                        <option value="Bollore Warehouse Cupang Muntinlupa">Bollore Warehouse Cupang Muntinlupa</option>
                                        <option value="Solaire LV Store">Solaire LV Store</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-lg-6">
                                    <label class="form-control-label">&nbsp;</label>
                                    <input type="text" class="form-control form-control-sm" id="control" placeholder="Address Line" wire:model.debounce.500ms="destiAddress" disabled>
                                </div>
                            </div><br><br>
                            <div class="main-content-label mg-b-5 text-primary">
                                Fleet
                            </div><br>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-3">
                                    <label class="form-control-label">Fleet Type </label>
                                    <select wire:model.lazy="fleet" class="form-control form-control-sm form-select" data-bs-placeholder="Select Fleet Type">
                                        <option value="">Select Fleet Type</option>
                                        <option value="4 WHEELER">4 WHEELER</option>
                                        <option value="FB L300">FB L300</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Plate No. </label>
                                    <select wire:model.lazy="plateNo" wire:click="loadDriver" class="form-control form-control-sm form-select" data-bs-placeholder="Select Plate No">
                                        <option value="">Select Plate No.</option>
                                        <option value="CAW 4136">CAW 4136</option>
                                        <option value="CAH 8854">CAH 8854</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Temperature Requirements </label>
                                    <select wire:model.lazy="tempRequirements" class="form-control form-control-sm form-select">
                                        <option value="">Select Requirements</option>
                                        <option value="Dry Van">Dry Van</option>
                                        <option value="Reefer Van">Reefer Van</option>
                                    </select>
                                </div>
                            </div><br><br>
                            <div class="main-content-label mg-b-5 text-primary">
                                People
                            </div><br>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-3">
                                    <label class="ckbox"><input type="checkbox"><span>All People</span></label><br>
                                    <label class="ckbox"><input type="checkbox" checked><span>Fleet Assignment</span></label>
                                </div>
                            </div><br><br>
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-3">
                                    <label class="form-control-label">Driver's Name</label>
                                    <select wire:model.lazy="driver" class="form-control form-control-sm form-select">
                                        <option value="">Select Driver</option>
                                        <option value="Jose Delafuente">Jose Delafuente</option>
                                        <option value="Juan DelaCruz">Juan DelaCruz</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Driver's Contact No. </label>
                                    <input type="text" class="form-control form-control-sm" id="control" wire:model.defer="driverNo" wire:model.debounce.500ms="driverNo" placeholder="+63">
                                </div>
                                <div class="col-md-5 col-lg-3">
                                    <label class="form-control-label">Helper's Name </label>
                                    <select wire:model.lazy="helper" class="form-control form-control-sm form-select">
                                        <option value="">Select Helper</option>
                                        <option value="Juan Santiago">Juan Santiago</option>
                                        <option value="Juan DelaCruz">Juan DelaCruz</option>
                                    </select>
                                </div>
                                <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Helper's Contact No. </label>
                                    <input type="text" class="form-control form-control-sm" id="control" wire:model.defer="helperNo" wire:model.debounce.500ms="helperNo" placeholder="+63">
                                </div>
                            </div><br>
                        </section>
                        <h3>Order Details</h3>
                        <section>
                            <livewire:addorder />
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-8">
                                </div>
                                <div class="col-md-5 col-lg-4">
                                    <button type="button" wire:click.prevent="updateTrip" class="btn btn-primary btn-w-lg mb-1 form-control-sm" style="float:right;">Save</button>
                                </div>
                            </div><br>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->

    <!-- modals -->
    <div class="modal fade" id="tripUpdated" class="modal hide" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20"><i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-success tx-semibold mg-b-20">Trip registered successfully!</h4>
                    <p class="mg-b-20 mg-x-20">Please select <strong>Continue</strong> to stay on the page and <strong>Back</strong> to go back to the main page.</p>
                    <a class="btn ripple btn-success form-control-sm btn-w-lg mb-1" href="{{ route('tripedit', $this->tripID) }}">Continue</a>
                    <a class="btn ripple btn-danger form-control-sm btn-w-lg mb-1" href="{{ route('trips', '') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>


@section('scripts')
<script>
    window.addEventListener('notif', event => {
        $('#tripUpdated').modal('show')
    })
</script>

<!--Internal  Perfect-scrollbar js -->
<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

<!-- Internal Treeview js -->
<script src="{{asset('assets/plugins/treeview/treeview.js')}}"></script>

<!--Internal  Notify js -->
<script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

<!--Internal  Select2 js -->
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

<!-- Internal Jquery.steps js -->
<script src="{{asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

<!--Internal  Form-wizard js -->
<script src="{{asset('assets/js/form-wizard.js')}}"></script>

<!--Internal Fileuploads js-->
<script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

<!--Internal Fancy uploader js-->
<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

<!--Internal  Parsley.min js -->
<script src="{{asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

<!-- Internal Form-validation js -->
<script src="{{asset('assets/js/form-validation.js')}}"></script>

<!--- Internal Accordion Js -->
<script src="{{asset('assets/plugins/accordion/accordion.min.js')}}"></script>
<script src="{{asset('assets/js/accordion.js')}}"></script>


@endsection