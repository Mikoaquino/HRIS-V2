@extends('layouts.custom-app')

    @section('styles')

    @endsection

    @section('class')

        <div class="bg-primary">

    @endsection

    @section('content')

				<!-- Main-error-wrapper -->
				<div class="main-error-wrapper page page-h">
					<h1 class="text-white">500<span class="tx-20">error</span></h1>
					<h2 class="text-white">Oops. The page you are looking for doesn't exist.</h2>
					<h6 class="tx-white-6">You may have mistyped the address or the page may have moved.</h6><a class="btn btn-light" href="{{url('index')}}">Back to Home</a>
				</div>
				<!-- /Main-error-wrapper -->

    @endsection

    @section('scripts')

    @endsection
