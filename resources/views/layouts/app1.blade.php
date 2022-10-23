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
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets\vendors\css\datatables\dataTables.bootstrap4.min.css')}}">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css"/>--}}
    @if(app()->getLocale()=="ar")
        <link rel="stylesheet" href="{{URL::asset('assets/css/rtl.css')}}">
    @endif
</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <a href="index.html" class="logo">
        <img src="assets/images/logo1.png" alt="">
        {{--<span class="logo-text color-darkgrey">utor</span>--}}
    </a>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="btn"> {{__('navbar.search')}} </button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls p-normal">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->
    </div>
</div><!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->
        <!--topline section visible only on small screens|-->
        <section class="page_topline ds c-my-10 d-xl-none">
            <div class="container-fluid">
                <div class="row align-items-center text-center">
                    <div class="col-12">
                        <div class="top-includes main-includes">
                            <a href="{{url('signup_form')}}"><button type="button" class="login-btn-form login_modal_window"><i class="fw-900 s-16 fa fa-sign-in" aria-hidden="true"></i>{{__('navbar.sign_up')}} </button></a>
                            <a href="{{url('login_form')}}"><button type="button" class="login-btn-form login_modal_window"><i class="fs-17 fa fa-user" aria-hidden="true"></i> &nbsp {{__('navbar.login')}} </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--eof topline-->
        <div class="header_absolute ds cover-background s-overlay">
            <!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
            <header class="page_header ds justify-nav-center s-borderbottom container-px-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-4 col-md-5 col-11">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="">
                                {{--<span class="logo-text color-darkgrey">utor</span>--}}
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-1">
                            <div class="nav-wrap">
                                <!-- main nav start -->
                                <nav class="top-nav">
                                    <ul class="nav sf-menu">

                                        <li class="active">
                                            <a href="{{url('/')}}">{{__('navbar.home')}} </a>

                                        </li>

                                        <!-- eof pages -->

                                        <!-- blog -->
                                        <li>
                                            <a href="{{url('documentations')}}">{{__('navbar.documentation')}} </a>
                                            <ul>

                                                <li>
                                                    <a href="blog-right.html">Right Sidebar</a>
                                                </li>

                                                <li>
                                                    <a href="blog-single-right.html">Post</a>
                                                    <ul>
                                                        <li>
                                                            <a href="blog-single-right.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-left.html">Left Sidebar</a>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <!-- eof blog -->

                                        <li>
                                            <a href="{{url('about')}}">{{__('navbar.about')}} </a>

                                        </li>

                                        <li>
                                            <a href="{{url('contact')}}">{{__('navbar.contact')}} </a>

                                        </li>
                                        <!-- eof features -->
                                    </ul>

                                </nav>
                                <!-- eof main nav -->
                                <!--hidding includes on small devices. They are duplicated in topline-->
                            </div>
                        </div>
                        <div class="col-4 d-none d-xl-block">
                            <div class="top-includes main-includes">
                                {{--<button type="button" class="sign-btn-form" data-toggle="modal" data-target="#form2"><i class="fw-900 s-16 fa fa-sign-in" aria-hidden="true"></i>Sign Up</button>--}}
                                @guest

                                    <a href="{{url('login_form')}}"><button type="button" class="login-btn-form login_modal_window"><i class="fs-17 fa fa-user" aria-hidden="true"></i> &nbsp {{__('navbar.login')}} </button></a>

                                @endguest

                                @auth
                                <div class="widget course-dropdown">
                                    <button type="button" class="login-btn-form login_modal_window" id="course-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fs-16 fa fa-user-circle" aria-hidden="true"></i>&nbsp {{__('navbar.profile')}}
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right ds" aria-labelledby="course-dropdown">
                                        <div class="row c-gutter-75">
                                            <div class="col-12">
                                                <a class="dropdown-item" href="{{url('profile')}}">
                                                    <i class="fs-20 fa fa-user" aria-hidden="true"></i>
                                                    {{__('navbar.view_profile')}}
                                                </a>
                                                <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="fs-20 fa fa-sign-out" aria-hidden="true"></i>
                                                    {{__('navbar.logout')}}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                                {{--<a class="dropdown-item" href="course-categories.html">--}}
                                                    {{--<i class="fs-31 icon-m-science" aria-hidden="true"></i>--}}
                                                    {{--Science--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6">--}}
                                                {{--<a class="dropdown-item" href="course-categories.html">--}}
                                                    {{--<i class="fs-31 fa fa-globe" aria-hidden="true"></i>--}}
                                                    {{--Web--}}
                                                {{--</a>--}}
                                                {{--<a class="dropdown-item" href="course-categories.html">--}}
                                                    {{--<i class="fs-31 fa fa-apple" aria-hidden="true"></i>--}}
                                                    {{--IOS--}}
                                                {{--</a>--}}
                                                {{--<a class="dropdown-item" href="course-categories.html">--}}
                                                    {{--<i class="fs-31 icon-m-business" aria-hidden="true"></i>--}}
                                                    {{--Business--}}
                                                {{--</a>--}}
                                            </div>
                                            {{--<div class="col-4">--}}
                                                {{--<a class="dropdown-item" href="course-categories.html">--}}
                                                    {{--<i class="fs-31 icon-m-math" aria-hidden="true"></i>--}}
                                                    {{--Math--}}
                                                {{--</a>--}}
                                                {{--<a class="dropdown-item" href="course-categories.html">--}}
                                                    {{--<i class="fs-31 icon-m-marketing" aria-hidden="true"></i>--}}
                                                    {{--Marketing--}}
                                                {{--</a>--}}
                                                {{--<a class="dropdown-item" href="course-categories.html">--}}
                                                    {{--<i class="fs-31 icon-m-lifestyle" aria-hidden="true"></i>--}}
                                                    {{--Lifestyle--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                                @endauth

                                @if(app()->getLocale() == 'ar')
                                    <a href="{{url('/locale/en')}}">English</a>
                                @else
                                    <a href="{{url('/locale/ar')}}">العربية </a>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header toggler -->
                <span class="toggle_menu"><span></span></span>
            </header>
        </div>



@yield('body')

        <footer class="page_footer ds s-pt-60 s-pb-20 s-pt-lg-100 s-pb-lg-55 c-gutter-40 container-px-md-0 text-center text-md-left">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 animate" data-animation="fadeInUp">

                        <div class="widget widget_text">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="">
                                {{--<span class="logo-text color-darkgrey">utor</span>--}}
                            </a>
                            <p>
                                {{__('footer.title')}}
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 animate" data-animation="fadeInUp">
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget-title">{{__('footer.tag')}}</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">
                                    {{__('navbar.desktop')}}
                                </a>

                                <a href="#" class="tag-cloud-link">
                                    {{__('navbar.android')}}
                                </a>

                                <a href="#" class="tag-cloud-link">
                                    {{__('navbar.ios')}}
                                </a>

                                <a href="#" class="tag-cloud-link">
                                    {{__('navbar.web')}}
                                </a>

                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3 animate" data-animation="fadeInUp">
                        <div class="widget widget_social_button">
                            <h3 class="widget-title">{{__('footer.follow_us')}}</h3>
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook" title="facebook"></i>
                                {{__('footer.facebook')}}
                            </a>
                            <a class="twitter-linka" href="#">
                                <i class="fa fa-twitter" title="twitter"></i>
                                {{__('footer.twitter')}}
                            </a>
                            <a class="telegram" href="#">
                                <i class="fa fa-paper-plane" title="telegram"></i>
                                {{__('footer.telegram')}}
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram" title="instagram"></i>
                                {{__('footer.instagram')}}
                            </a>
                            <a class="youtube" href="#">
                                <i class="fa fa-youtube-play" title="youtube"></i>
                                {{__('footer.youtube')}}
                            </a>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 animate" data-animation="fadeInUp">
                        <div class="widget widget_icons_list">
                            <h3>{{__('footer.contacts')}}</h3>
                            <div class="media side-icon-box">
                                <div class="icon-styled fs-14">
                                    <i class="icon-m-marker-alt"></i>
                                </div>
                                <p class="media-body">{{__('footer.address')}}</p>
                            </div>
                            <div class="media side-icon-box">
                                <div class="icon-styled fs-14">
                                    <i class="icon-m-phone-alt"></i>
                                </div>
                                <p class="media-body">{{__('footer.tel')}}.: +1 703-518-6099</p>
                            </div>
                            <div class="media side-icon-box">
                                <div class="icon-styled fs-14">
                                    <i class="icon-m-fax-alt"></i>
                                </div>
                                <p class="media-body">{{__('footer.fax')}}: +1 709-834-2693</p>
                            </div>
                            <div class="media side-icon-box">
                                <div class="icon-styled fs-14">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <p class="media-body">
                                    <a href="#">info@ustudi.com</a>
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </footer>


        <section class="page_copyright ds ms s-py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="divider-20 d-none d-lg-block"></div>
                    <div class="col-md-12 text-center">
                        <p><strong>{{__('navbar.site_name')}}</strong> &copy; <span class="copyright_year">2021</span> {{__('footer.reserved')}}</p>
                    </div>
                    <div class="divider-20 d-none d-lg-block"></div>
                </div>
            </div>
        </section>


    </div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->


<script src="{{URL::asset('assets/js/compressed.js')}}"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>
<script src="{{URL::asset('js/switcher.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/themera.net/embed/themera227f.js?id=%d1%85%d1%85%d1%85%d1%85%d1%85')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>--}}
<script src="{{asset('app-assets\vendors\js\datatable\jquery.dataTables.min.js')}}"></script>
<script src="{{asset('app-assets\vendors\js\datatable\dataTables.bootstrap4.min.js')}}"></script>

</body>


<!-- Mirrored from webdesign-finder.com/html/tutor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2021 23:06:51 GMT -->
</html>

@stack('pageJs')

<script type="text/javascript">

    $(function () {


        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });
    });


    {{--$('.btn-signUp').click(function (e) {--}}

        {{--e.preventDefault();--}}

        {{--$(this).html('..');--}}


        {{--$.ajax({--}}

            {{--data: $('#form').serialize(),--}}

            {{--url: "{{ url('auth/register') }}",--}}

            {{--type: "POST",--}}

            {{--dataType: 'json',--}}

            {{--success: function (data) {--}}
                    {{--if(data.status==200){--}}
                        {{--$('#form').trigger("reset");--}}
                        {{--$('#ajaxModel').modal('hide');--}}

                        {{--toastr.success(data.message);--}}
                    {{--}--}}
                    {{--else{--}}
                        {{--toastr.error(data.message);--}}
                    {{--}--}}


            {{--},--}}

            {{--error: function (data) {--}}
                {{--$("#unknown_error_sign_up").show();--}}

                {{--setTimeout(5000, function () {--}}
                    {{--$("#unknown_error_sign_up").hide();--}}
                {{--});--}}

                {{--console.log('Error:', data);--}}
                {{--// $('#ajaxModel').modal('hide');--}}


            {{--}--}}

        {{--});--}}
    // });
    </script>
