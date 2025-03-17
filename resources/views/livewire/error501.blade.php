@extends('layouts.app')

    @section('styles')

    @endsection

    @section('content')

            <!-- row -->
            <div class="row">
                <!-- Main-error-wrapper -->
                    <div class="main-error-wrapper wrapper-1 page page-h">
                        <h1 class="">501<span class="tx-20">error</span></h1>
                        <h2 class="">Oops. The page you are looking for doesn't exist.</h2>
                        <h6 class="">You may have mistyped the address or the page may have moved.</h6><a class="btn btn-primary" href="{{url('index')}}">Back to Home</a>
                    </div>
                <!-- /Main-error-wrapper -->
            </div>
            <!-- row closed -->

    @endsection

    @section('scripts')

    @endsection

