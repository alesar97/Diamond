@extends('layouts.app1')
@section('body')

    <section class="page_title ds s-pt-80 s-pb-80 s-pt-lg-130 s-pb-lg-90">
        <div class="divider-50"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1>{{__('navbar.login')}}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">{{__('navbar.home')}}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{__('navbar.login')}}
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>


    <section class="ls s-pt-55 s-pb-30 s-pt-lg-95 s-pb-lg-70" id="courses">
        <div class="container">
            <div class="divider-3"></div>
            <div class="row text-center justify-content-center">
                <div class="col-md-6">
                <p>Log in to save your progress and obtain a certificate </p>
                <p>  @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif
                </p>


                <form method="POST" action="{{route('login')}}">
                @csrf

                <div class="form-group has-placeholder">
                <label for="email_login">Email:</label>
                <input type="email" class="form-control" id="email_login" placeholder="Your email address" name="email_login">
                </div>
                <div class="form-group has-placeholder">
                <label for="password_login">Password:</label>
                <input type="password" class="form-control" id="password_login" placeholder="Password" name="password_login">
                </div>
                    <a class="breadcrumb-item pull-right" href="{{route('forgot_password')}}"> I forgot password! </a>

                    <br>
                <div class="social-account">
                    <h6>
                    or
                   <br>
                   <br>

                    Sign up with your Social Account
                    </h6>
                    <span class="social-icons">
                    <a href="{{url('auth/facebook')}}" class="fa fa-facebook" style="color: blue" title="facebook"></a>
                        <a href="{{url('auth/google')}}" class="fa fa-google" style="color: red" title="google"></a>
                        {{--<a href="#" class="fa fa-twitter " title="twitter"></a>--}}
                        {{--<a href="#" class="fa fa-paper-plane " title="telegram"></a>--}}
                        {{--<a href="#" class="fa fa-linkedin " title="linkedin"></a>--}}
                        {{--<a href="#" class="fa fa-instagram " title="instagram"></a>--}}
                        {{--<a href="#" class="fa fa-youtube-play " title="youtube"></a>--}}
                    </span>
                </div>

                <div class="form-check">
                    <input class="form-check-label" type="checkbox" id="remember_me" name="remember_me">
                    {{__('navbar.remember')}}
                </div>
                    <br>

                <button type="submit" class="btn btn-maincolor log-btn"> {{__('navbar.login')}} </button>
                </form>
        <hr>

                        Don't have an account? <a href="{{url('signup_form')}}"> {{__('navbar.sign_up')}} </a>

                </div>
            </div>
        </div>
    </section>


@endsection