<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Nowa – Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template" />

    <!-- Title -->
    <title> Human Resources Information System </title>

    @include('layouts.components.custom-styles')

</head>

<body class="ltr error-page1">

    @yield('class')

    <!-- Loader -->
    <div id="global-loader">
        <!-- <img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader"> -->
        <div class="lds-ripple loader-img">
            <div></div>
            <div></div>
        </div>
        <!-- /Loader -->
    </div>


    <div class="square-box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="page">

        @yield('content')

    </div>

    @include('layouts.components.custom-scripts')

</body>

</html>