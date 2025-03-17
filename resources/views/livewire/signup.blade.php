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
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main py-45 justify-content-center mx-auto">
                            <div class="card-sigin mt-5 mt-md-0">
                                <!-- Demo content-->
                                <div class="main-card-signin d-md-flex">
                                    <div class="wd-100p"><div class="d-flex mb-4"><a href="{{url('index')}}"><img src="{{asset('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a></div>
                                        <div class="">
                                            <div class="main-signup-header">
                                                <h2 class="text-dark">Get Started</h2>
                                                <h6 class="font-weight-normal mb-4">It's free to signup and only takes a minute.</h6>
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label>Firstname &amp; Lastname</label> <input class="form-control" placeholder="Enter your firstname and lastname" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label> <input class="form-control" placeholder="Enter your email" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password">
                                                    </div><a href="{{url('signin')}}" class="btn btn-primary btn-block">Create Account</a>
                                                    <div class="mt-4 d-flex mx-auto text-center justify-content-center">
                                                        <button class="btn btn-icon btn-facebook me-3" type="button">
                                                            <span class="btn-inner--icon"> <i class="bx bxl-facebook tx-18 tx-prime"></i> </span>
                                                        </button>
                                                        <button class="btn btn-icon me-3" type="button">
                                                            <span class="btn-inner--icon"> <i class="bx bxl-twitter tx-18 tx-prime"></i> </span>
                                                        </button>
                                                        <button class="btn btn-icon me-3" type="button">
                                                            <span class="btn-inner--icon"> <i class="bx bxl-linkedin tx-18 tx-prime"></i> </span>
                                                        </button>
                                                        <button class="btn  btn-icon me-3" type="button">
                                                            <span class="btn-inner--icon"> <i class="bx bxl-instagram tx-18 tx-prime"></i> </span>
                                                        </button>
                                                    </div>
                                                </form>
                                                <div class="main-signup-footer mt-3 text-center">
                                                    <p>Already have an account? <a href="{{url('signin')}}">Sign In</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endsection

    @section('scripts')

    @endsection
