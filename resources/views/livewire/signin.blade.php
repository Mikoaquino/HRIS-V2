<div class="page-single">
    <div class="container">
        <div class="row">
            <div
                class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-45 justify-content-center">
                <div class="card-sigin mt-5 mt-md-0">
                    <!-- Demo content-->
                    <div class="main-card-signin d-md-flex">
                        <div class="wd-100p">
                            <!-- <div class="d-flex mb-4"><a href=""><img src="{{asset('assets/img/brand/CGE.png')}}" class="sign-favicon ht-40" alt="logo"></a></div> -->
                            <div class="">
                                <div class="main-signup-header">
                                    <h2>Welcome back!</h2>
                                    <h6 class="font-weight-semibold mb-4">Please sign in to continue.</h6>
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
                                    <div class="panel panel-primary">
                                        <!-- <div class=" tab-menu-heading mb-2 border-bottom-0">
                                            <div class="tabs-menu1">
                                                <ul class="nav panel-tabs">
                                                    <li class="me-2"><a href="#tab5" class="active"
                                                            data-bs-toggle="tab">Email</a></li> -->
                                        <!-- <li><a href="#tab6" data-bs-toggle="tab" class="">Mobile no</a></li> -->
                                        <!-- </ul>
                                            </div>
                                        </div> -->
                                        <div class="panel-body tabs-menu-body border-0 p-3">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab5">
                                                    <form wire:submit.prevent="submit">
                                                        <div class="form-group">
                                                            <label>Email</label> <input wire:model="email"
                                                                class="form-control" placeholder="Enter your email"
                                                                type="text">
                                                            <span class="text-danger">@error('email'){{ $message }}
                                                                @enderror</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label> <input wire:model="password"
                                                                class="form-control" placeholder="Enter your password"
                                                                type="password">
                                                            <span class="text-danger">@error('password'){{ $message }}
                                                                @enderror</span>
                                                        </div>
                                                        <button class="btn btn-primary btn-block" type="submit">Sign
                                                            In</button>
                                                        <!-- <div
                                                            class="mt-4 d-flex mx-auto text-center justify-content-center mb-2">
                                                            <button class="btn btn-icon btn-facebook me-3"
                                                                type="button">
                                                                <span class="btn-inner--icon"> <i
                                                                        class="bx bxl-facebook tx-18 tx-prime"></i>
                                                                </span>
                                                            </button>
                                                            <button class="btn btn-icon me-3" type="button">
                                                                <span class="btn-inner--icon"> <i
                                                                        class="bx bxl-twitter tx-18 tx-prime"></i>
                                                                </span>
                                                            </button>
                                                            <button class="btn btn-icon me-3" type="button">
                                                                <span class="btn-inner--icon"> <i
                                                                        class="bx bxl-linkedin tx-18 tx-prime"></i>
                                                                </span>
                                                            </button>
                                                            <button class="btn  btn-icon me-3" type="button">
                                                                <span class="btn-inner--icon"> <i
                                                                        class="bx bxl-instagram tx-18 tx-prime"></i>
                                                                </span>
                                                            </button>
                                                        </div> -->
                                                    </form>
                                                </div>
                                                <!-- <div class="tab-pane" id="tab6">
                                                        <div id="mobile-num" class="wrap-input100 validate-input input-group mb-2">
                                                            <a href="javascript:void(0);" class="input-group-text bg-white text-muted">
                                                                <span>+91</span>
                                                            </a>
                                                            <input class="input100 form-control" type="mobile" placeholder="Mobile">
                                                        </div>
                                                        <div id="login-otp" class="justify-content-around mb-4">
                                                            <input class="form-control  text-center me-2" id="txt1" maxlength="1">
                                                            <input class="form-control  text-center me-2" id="txt2" maxlength="1">
                                                            <input class="form-control  text-center me-2" id="txt3" maxlength="1">
                                                            <input class="form-control  text-center" id="txt4" maxlength="1">
                                                        </div>
                                                        <span>Note : Login with registered mobile number to generate OTP.</span>
                                                        <div class="container-login100-form-btn mt-3">
                                                            <a href="javascript:void(0);" class="btn login100-form-btn btn-primary" id="generate-otp">
                                                                Proceed
                                                            </a>
                                                        </div>
                                                    </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="main-signin-footer text-center mt-3">
                                        <p><a href="{{url('forgot')}}" class="mb-3">Forgot password?</a></p>
                                        <p>Don't have an account? <a href="{{url('auth/register')}}">Create an
                                                Account</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<!--Internal  Datepicker js -->
<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

<!--Internal  jquery.maskedinput js -->
<script src="{{asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

<!--Internal  spectrum-colorpicker js -->
<script src="{{asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>

<!--Internal Ion.rangeSlider.min js -->
<script src="{{asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>

<!-- Ionicons js -->
<script src="{{asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>

<!--Internal  pickerjs js -->
<script src="{{asset('assets/plugins/pickerjs/picker.min.js')}}"></script>

<!--internal color picker js-->
<script src="{{asset('assets/plugins/colorpicker/pickr.es5.min.js')}}"></script>
<script src="{{asset('assets/js/colorpicker.js')}}"></script>

<!--Bootstrap-datepicker js-->
<script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>

<!-- Internal Select2.min js -->
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

<!-- Internal form-elements js -->
<script src="{{asset('assets/js/form-elements.js')}}"></script>