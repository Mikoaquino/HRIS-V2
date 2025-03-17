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
            <span class="main-content-title mg-b-0 mg-b-lg-1">New Trip Record</span>
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
                            <livewire:tripinformation />
                        </section>
                        <h3>Order Details</h3>
                        <section>
                            <livewire:addorder />
                            <div class="row row-sm">
                                <div class="col-md-5 col-lg-8">
                                </div>
                                <div class="col-md-5 col-lg-4">
                                    <button type="button" wire:click="saveTrip" class="btn btn-primary btn-w-lg mb-1 form-control-sm" style="float:right;">Save</button>
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
    <div class="modal fade" id="tripsAdded" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20"><i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-success tx-semibold mg-b-20">Trip registered successfully!</h4>
                    <p class="mg-b-20 mg-x-20">Please select <strong>Continue</strong> to stay on the page and <strong>Back</strong> to go back to the main page.</p>
                    <a class="btn ripple btn-success form-control-sm btn-w-lg mb-1" href="{{url('/trips/new')}}">Continue</a>
                    <a class="btn ripple btn-danger form-control-sm btn-w-lg mb-1" href="{{ route('trips') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>


@section('scripts')

<script>
    window.addEventListener('notif', event => {
        $('#tripsAdded').modal('show')
    })
    // let i = 1;

    // function addTr(table_body) {
    //     let tableBody = document.getElementById(table_body),
    //         first_tr = tableBody.firstElementChild
    //     tr_clone = first_tr.cloneNode(true);
    //     tableBody.append(tr_clone);
    //     document.getElementById("ordernum").innerHTML = ++i;
    //     clean_first_tr(tableBody.firstElementChild);
    // }

    // function clean_first_tr(firstTr) {
    //     let children = firstTr.children;

    //     children = Array.isArray(children) ? children : Object.values(children);
    //     children.forEach(x => {
    //         if (x !== firstTr.lastElementChild) {
    //             x.firstElementChild.value = '';
    //         }
    //     });
    // }

    // function deleteTr(This) {
    //     if (This.closest('tbody').childElementCount == 1) {
    //         alert('Minimum field reached');
    //     } else {
    //         This.closest('tr').remove();
    //     }
    // }
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