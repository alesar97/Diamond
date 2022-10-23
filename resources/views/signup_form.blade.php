@extends('layouts.app1')
@section('body')

    <section class="page_title ds s-pt-80 s-pb-80 s-pt-lg-130 s-pb-lg-90">
        <div class="divider-50"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1>{{__('navbar.sign_up')}}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">{{__('navbar.home')}}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{__('navbar.sign_up')}}
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

                    <p>Sign up to save your progress and obtain a certificate</p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{url('auth/register')}}" id="form">
                        @csrf

                        <div class="form-group has-placeholder">
                            <label for="First_name">Your Name:</label>
                            <input type="text" class="form-control" id="First_name" placeholder="Enter your name" name="First_name">
                        </div>
                        <div class="form-group has-placeholder">
                            <label for="phone">Your Phone:</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter your phone" name="phone">
                        </div>
                        <div class="form-group has-placeholder">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Your email address" name="email">
                        </div>
                        <div class="form-group has-placeholder">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="password" name="password">
                        </div>
                        <div class="form-group has-placeholder">
                            <label for="password_confirmation">Confirmed Password:</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="password_confirmation" name="password_confirmation">
                        </div>
                        <div class="social-account">
                            <h6>
                                or
                            <br>
                            <br>
                                Sign up with your Social Account
                            </h6>
                            <span class="social-icons">
								<a href="{{url('auth/facebook')}}" style="color: blue" class="fa fa-facebook " title="facebook"></a>
								<a href="{{url('auth/google')}}" style="color: red" class="fa fa-google" title="google"></a>
                                                {{--<a href="#" class="fa fa-twitter " title="twitter"></a>--}}
                                                {{--<a href="#" class="fa fa-paper-plane " title="telegram"></a>--}}
                                                {{--<a href="#" class="fa fa-linkedin " title="linkedin"></a>--}}
                                                {{--<a href="#" class="fa fa-instagram " title="instagram"></a>--}}
                                                {{--<a href="#" class="fa fa-youtube-play " title="youtube"></a>--}}
							</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-label" type="checkbox" id="agree" name="agree">
                            {{--<label class="form-check-label agree" for="agree">--}}
                                I agree to the Terms and Conditions
                            {{--</label>--}}
                            <br>
                            <input class="form-check-label" type="checkbox" id="updates" name="updates">
                            {{--<label class="form-check-label" for="updates">--}}
                                Yes, I want to get the most updates and exclusive offers.
                            {{--</label>--}}
                        </div>
                        <br>

                        <button class="btn btn-maincolor btn-signUp">{{__('navbar.sign_up')}} </button>
                    </form>
        <hr>
                    Already have an account?<a href="{{url('login_form')}}"> {{__('navbar.login')}} </a>

                    <div class="hidden" id="unknown_error_sign_up" hidden>
                        {{__('auth.unknown_error')}}
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection