<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/tutor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2021 23:06:51 GMT -->
<head>
    <title> {{__('navbar.site_name')}} </title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/animations.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}" class="color-switcher-link">
    <script src="{{URL::asset('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="{{URL::asset('assets/js/vendor/html5shiv.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/respond.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css"/>
    @if(app()->getLocale()=="ar")
        <link rel="stylesheet" href="{{URL::asset('assets/css/rtl.css')}}">
    @endif
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('navbar.site_name') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                        <img src="{{URL::asset('assets/images/diamond.png')}}" alt="" width="200" height="200">
                        <br>
                        <a href="{{ route('reset_password',['token'=>$token]) }}" style="text-decoration: none"> Reset Password </a>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>