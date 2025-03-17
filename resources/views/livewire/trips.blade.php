<div>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">List of all current trips</span>
        </div>
        <div class="justify-content-center mt-2">
            <ol class="breadcrumb">
                <a class="btn btn-outline-primary form-control-sm btn-w-lg mb-1" href="#">Extract List</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-primary form-control-sm btn-w-lg mb-1" href="{{url('/trips/new')}}">New Trip</a>
            </ol>
        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
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
                    <br>
                    <div class="col-sm-3">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Pick-up Date</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input wire:model.lazy="puFilter" type="date" class="form-control form-control-sm fc-datepicker" placeholder="MM/DD/YYYY">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Delivery Date</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input wire:model.lazy="ddFilter" type="date" class="form-control form-control-sm fc-datepicker" placeholder="MM/DD/YYYY">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Trip Status</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <select wire:model.lazy="statusFilter" class="form-control form-control-sm form-select" data-bs-placeholder="Select Trip Status" id="destination">
                                    <option value="">No filter</option>
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
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Trip Type</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <select wire:model.lazy="typeFilter" class="form-control form-control-sm form-select" data-bs-placeholder="Select Trip Status" id="destination">
                                    <option value="">No filter</option>
                                    <option value="FT">Full Trip</option>
                                    <option value="ST">Side Trip</option>
                                    <option value="BL">Back Load</option>
                                    <option value="TR">Transfer</option>
                                    <option value="PU">Pull Out</option>
                                    <option value="DC">Drop Change</option>
                                    <option value="CL">Co-Load</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Sort table by</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <select wire:model.lazy="sortBy" class="form-control form-control-sm form-select" data-bs-placeholder="Select Trip Status">
                                    <option value="asc">Ascending</option>
                                    <option value="desc">Descending</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-8">
                            <div class="loading" wire:loading>
                                <div class="spinner-border spinner-border-sm" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <label class="main-content-label mg-b-0">Search</label>
                        </div>
                        <div class="col-md-3 mg-t-5 mg-md-t-0">
                            <input wire:model="search" class="form-control form-control-sm" placeholder="Enter any keyword" type="text">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0 text-md-nowrap" id="responsive-datatable" wire:loading.remove>
                            <thead>
                                <tr>
                                    <th wire:click="sortColumnBy('pick_up_date')" role="button">PICK-UP DATE</th>
                                    <th wire:click="sortColumnBy('delivery_date')" role="button">DELIVERY DATE</th>
                                    <th wire:click="sortColumnBy('type')" role="button">TRIP TYPE</th>
                                    <th wire:click="sortColumnBy('client')" role="button">CLIENT NAME</th>
                                    <th wire:click="sortColumnBy('buaccount')" role="button">BU ACCOUNT</th>
                                    <th wire:click="sortColumnBy('consignee')" role="button">CONSIGNEE</th>
                                    <th wire:click="sortColumnBy('waybillno')" role="button">WAYBILL NO</th>
                                    <th wire:click="sortColumnBy('plate_no')" role="button">PLATE NO</th>
                                    <th wire:click="sortColumnBy('origin')" role="button">ORIGIN</th>
                                    <th wire:click="sortColumnBy('destination')" role="button">DESTINATION</th>
                                    <th wire:click="sortColumnBy('status')" role="button">TRIP STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($trips as $data)
                                <tr>
                                    <th scope="row">{{ $data->pick_up_date }}</th>
                                    <td>{{ $data->delivery_date }}</td>
                                    <td>
                                        <center><span class="badge badge-tt form-control-sm">{{ $data->type }}</span></center>
                                    </td>
                                    <td>{{ $data->client }}</td>
                                    <td>{{ $data->buaccount }}</td>
                                    <td>{{ $data->consignee }}</td>
                                    <td>{{ $data->waybillno }}</td>
                                    <td>{{ $data->plate_no }}</td>
                                    <td>{{ $data->origin }}</td>
                                    <td>{{ $data->destination }}</td>
                                    <td>
                                        <center><span class="badge {{ $this->getStatus($data->status) }} form-control-sm">{{ $data->status }}</span></center>
                                    </td>
                                    <td>
                                        <div class="btn-icon-list btn-list justify-content-center">
                                            <a class="btn btn-icon badge-link btn-sm me-1" data-bs-placement="left" data-bs-toggle="tooltip" title="View" href="{{ route('viewtrip', $data->id) }}"><i class="bi bi-envelope-open"></i></a>
                                            @if ($data->status == 'CO' || $data->status == 'CA' || $data->status == 'CO')
                                            <button type="button" class="btn btn-icon badge-link btn-sm me-1" disabled><i class="bi bi-pencil"></i></button>
                                            <button type="button" class="btn btn-icon badge-link btn-sm me-1" data-bs-placement="top" data-bs-toggle="tooltip" title="Archive"><i class="bi bi-archive"></i></button>
                                            @else
                                            <a class="btn btn-icon badge-link btn-sm me-1" data-bs-placement="top" data-bs-toggle="tooltip" title="Edit" href="{{ route('tripedit', $data->id) }}"><i class="bi bi-pencil"></i></a>
                                            <button type="button" class="btn btn-icon badge-link btn-sm me-1" data-bs-placement="top" data-bs-toggle="tooltip" title="Delete"><i class="bi bi-trash" wire:click="deleteId({{ $data->id }})"></i></button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td scope="row">No result</td>
                                    <td>No result</td>
                                    <td>No result</td>
                                    <td>No result</td>
                                    <td>No result</td>
                                    <td>No result</td>
                                    <td>No result</td>
                                    <td>No result</td>
                                    <td>No result</td>
                                    <td>No result</td>
                                    <td>No result</td>
                                    <td>No result</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0 text-md-nowrap" wire:loading.remove>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>BU Account</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($trips as $data)
                                <tr>
                                    <th scope="row">{{ $data->id }}</th>
                                    <td>{{ $data->client }}</td>
                                    <td>{{ $data->buaccount }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <th>No result</th>
                                    <td>No result</td>
                                    <td>No result</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div><br> -->

                </div>
            </div>
        </div>
    </div>

    <!-- modals -->
    <div wire:ignore.self class="modal fade" id="tripDeleted">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20"><i class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-success tx-semibold mg-b-20">Confirm delete?</h4>
                    <p class="mg-b-20 mg-x-20">Please select <strong>Confirm</strong> to continue deleting the trip and <strong>Cancel</strong> to cancel.</p>
                    <button type="button" wire:click.prevent="deleteTrip()" class="btn btn-danger close-modal" data-bs-dismiss="modal">Confirm</button>
                    <button class="btn ripple btn-primary" data-bs-dismiss="modal" type="button">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="doneDelete">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20"><i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-success tx-semibold mg-b-20">Trip deleted successfully!</h4>
                    <button class="btn ripple btn-primary" data-bs-dismiss="modal" type="button">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Row -->

@section('scripts')
<script>
    window.addEventListener('showModal', event => {
        $('#tripDeleted').modal('show')
    })
    window.addEventListener('notif', event => {
        $('#doneDelete').modal('show')
    })
</script>

@endsection