@extends('layouts.custom-app')

@section('styles')
@endsection

@section('class')
    <div class="bg-primary">
@endsection

@section('content')

<div class="page-single">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-45 justify-content-center">
                <div class="card-sigin mt-5 mt-md-0">
                    <div class="">
                        <div class="main-signup-header">
                            <h2>Welcome back!</h2>
                            <h6 class="font-weight-semibold mb-4">Please sign in to continue.</h6>

                            <div class="panel panel-primary">
                                <div class="tab-menu-heading mb-2 border-bottom-0">
                                    <div class="tabs-menu1">
                                        <ul class="nav panel-tabs">
                                            <li class="me-2">
                                                <a href="#tab5" class="active" data-bs-toggle="tab">Email / Employee ID</a>
                                            </li>
                                            <li>
                                                <a href="#tab6" data-bs-toggle="tab">Mobile No</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body tabs-menu-body border-0 p-3">
                                    <div class="tab-content">

                                        <!-- Email / Employee ID Login -->
                                        <div class="tab-pane active" id="tab5">
                                            <form method="POST" action="{{ route('auth.login') }}">
                                                @csrf {{-- BACKEND: CSRF token for security --}}
                                                <div class="form-group">
                                                    <label>Email or Employee ID</label>
                                                    <input name="email_or_id" class="form-control" placeholder="Enter your email or employee ID" type="text" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input name="password" class="form-control" placeholder="Enter your password" type="password" required>
                                                </div>

                                                <div class="form-group">
                                                    <input type="checkbox" name="remember"> Remember Me
                                                </div>

                                                {{-- BACKEND: Replace this button if you want to show error or success feedback --}}
                                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>

                                                {{-- BACKEND: Handle login via AuthController@authenticate --}}
                                            </form>
                                        </div>

                                        <!-- Mobile Number Login with OTP -->
                                        <div class="tab-pane" id="tab6">
                                            <form method="POST" action="{{ route('auth.mobile-otp') }}">
                                                @csrf {{-- BACKEND: Add OTP sending route --}}
                                                <div id="mobile-num" class="wrap-input100 validate-input input-group mb-2">
                                                    <a href="javascript:void(0);" class="input-group-text bg-white text-muted">
                                                        <span>+91</span>
                                                    </a>
                                                    <input name="mobile" class="input100 form-control" type="text" placeholder="Mobile" required>
                                                </div>

                                                {{-- BACKEND: Populate this via JS after sending OTP --}}
                                                <div id="login-otp" class="justify-content-around mb-4">
                                                    <input class="form-control text-center me-2" name="otp_1" maxlength="1">
                                                    <input class="form-control text-center me-2" name="otp_2" maxlength="1">
                                                    <input class="form-control text-center me-2" name="otp_3" maxlength="1">
                                                    <input class="form-control text-center" name="otp_4" maxlength="1">
                                                </div>

                                                <span>Note: Login with registered mobile number to generate OTP.</span>

                                                <div class="container-login100-form-btn mt-3">
                                                    <button type="submit" class="btn login100-form-btn btn-primary" id="generate-otp">
                                                        Proceed
                                                    </button>
                                                    {{-- BACKEND: Submit OTP for verification and authentication --}}
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="main-signin-footer text-center mt-3">
                                <p><a href="{{ url('forgot') }}" class="mb-3">Forgot password?</a></p>                              
                            </div>
                        </div>
                    </div>
                </div> <!-- End main-card-signin -->
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <!-- generate-otp js -->
    <script src="{{ asset('assets/js/generate-otp.js') }}"></script>

    {{-- BACKEND: You can write additional JS to handle API responses from OTP or Login --}}
    {{-- Example: show error messages, resend OTP, or redirect after successful login --}}
@endsection
