@extends('layouts.custom-app')

    @section('styles')

    @endsection

    @section('class')

        <div class="cover-image" data-image-src="{{asset('assets/img/backgrounds/1.jpg')}}">

    @endsection

    @section('content')

            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main py-45 justify-content-center mx-auto">
                            <div class="card-sigin mt-5 mt-md-0">
                                <!-- Demo content-->
                                <div class="main-card-signin d-md-flex">
                                    <div class="wd-100p">
                                        <div class="d-flex mx-auto"> <a href="{{url('index')}}" class="mx-auto d-flex"><img src="{{asset('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40 mx-auto" alt="logo"><h1 class="main-logo1 ms-1 me-0 my-auto tx-28 text-dark ms-2">no<span>w</span>a</h1></a></div>
                                        <div class="main-card-signin d-md-flex bg-white">
                                            <div class="p-4 wd-100p">
                                                <div class="main-signin-header">
                                                    <div class="avatar avatar-xxl avatar-xxl mx-auto text-center mb-2"><img alt="" class="avatar avatar-xxl rounded-circle  mt-2 mb-2 " src="{{asset('assets/img/faces/6.jpg')}}"></div>
                                                    <div class="mx-auto text-center mt-4 mg-b-20">
                                                        <h5 class="mg-b-10 tx-16">Teri Dactyl</h5>
                                                        <p class="tx-13 text-muted">Enter Your Password to View your Screen</p>
                                                    </div>
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Enter your password" type="password" value="">
                                                        </div>
                                                        <a href="{{url('signin')}}" class="btn btn-primary btn-block">Unlock</a>
                                                    </form>
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
