@extends('layouts.app1')
@section('body')

    <section class="page_title ds s-pt-80 s-pb-80 s-pt-lg-130 s-pb-lg-90">
        <div class="divider-50"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1>{{__('navbar.contact')}}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">{{__('navbar.home')}}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{__('navbar.contact')}}
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>


    <section class="ls s-pt-55 s-pb-30 s-pt-lg-95 s-pb-lg-70" id="courses">
        <div class="container">
            <div class="divider-3"></div>
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="special-heading fw-300 text-center">{{__('navbar.empower')}}</h6>
                    <h2 class="text-center">{{__('navbar.contact')}}</h2>
                    </br>
                    </br>
                    </br>
                    {{--<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">--}}
                    <section class="ls s-py-55 s-pb-lg-100 s-pt-lg-95 c-gutter-60 container-px-30 ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 animate" data-animation="scaleAppear">

                                    <form class="contact-form mt-0 c-mb-10 c-gutter-10" method="post" action="{{url('contact_us')}}">

                                        <input type="hidden" name="_token" id="_token_val" value="{{csrf_token()}}">
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <h5>{{__('contact.contact_form')}}</h5>
                                            </div>
                                            <div class="divider-10 b-block d-lg-none"></div>
                                        </div>

                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group has-placeholder">
                                                    <label for="name">{{__('contact.name')}} <span class="required">*</span></label>
                                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="{{__('contact.name')}}*" style="border-color: #01bf01">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-placeholder">
                                                    <label for="phone">{{__('contact.phone')}}</label>
                                                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="{{__('contact.phone')}}" style="border-color: #01bf01">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group has-placeholder">
                                                    <label for="email">{{__('contact.email')}}<span class="required">*</span></label>
                                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="{{__('contact.email')}}*" style="border-color: #01bf01">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-placeholder">
                                                    <label for="subject">{{__('contact.subject')}}<span class="required">*</span></label>
                                                    <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="{{__('contact.subject')}}*"  style="border-color: #01bf01">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <div class="form-group has-placeholder">
                                                    <label for="message">{{__('contact.message')}}<span class="required">*</span></label>
                                                    <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="{{__('contact.message')}}*" style="border-color: #01bf01"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <div class="form-group has-placeholder mt-20">
                                                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor"> {{__('contact.send')}}
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                    </form>


                                    <div class="divider-30 d-block d-mb-none"></div>
                                </div>
                                <!--.col-* -->
                                <div class="col-lg-4 animate" data-animation="scaleAppear">

                                    <h5>{{__('contact.contact_info')}}</h5>

                                    <p class="icon-inline">
								<span class="icon-styled color-main">
									<i class="fa fa-map-marker"></i>
								</span>
                                        <span> {{__('contact.address')}} </span>
                                    </p>

                                    <p class="icon-inline">
								<span class="icon-styled color-main">
									<i class="fa fa-phone"></i>
								</span>
                                        <span> +963 900000000</span>
                                    </p>

                                    <p class="icon-inline">
								<span class="icon-styled color-main">
									<i class="fa fa-envelope"></i>
								</span>
                                        <span>info@example.com</span>
                                    </p>


                                    <h5 class="mt-40 mb-20">{{__('contact.open_hours')}}</h5>

                                    <div class="row c-gutter-30">
                                        <div class="col-6">
									<span class="icon-styled color-main pr-2">
										<i class="fa fa-clock-o"></i>
									</span>
                                            <strong>{{__('contact.sun')}}-{{__('contact.thursday')}}</strong>
                                        </div>
                                        <div class="col-6">
                                            9:00-15:00
                                        </div>

                                        <div class="col-6">
									<span class="icon-styled color-main pr-2">
										<i class="fa fa-clock-o"></i>
									</span>
                                            <strong>{{__('contact.saturday')}}</strong>
                                        </div>
                                        <div class="col-6">
                                            10:00-14:00
                                        </div>

                                        <div class="col-6">
									<span class="icon-styled color-main pr-2">
										<i class="fa fa-close"></i>
									</span>
                                            <strong>{{__('contact.friday')}}</strong>
                                        </div>
                                        <div class="col-6">
                                            {{__('contact.closed')}}
                                        </div>

                                        <div class="col-6">
									<span class="icon-styled color-main pr-2">
										<i class="fa fa-clock-o"></i>
									</span>
                                            <strong>{{__('contact.holidays')}}</strong>
                                        </div>
                                        <div class="col-6">
                                            10:00-13:00
                                        </div>
                                    </div>

                                  {{--<h5> Follow Us</h5>--}}

                                       {{--<p> <span class="icon-styled color-main pr-2">--}}
										{{--<i class="fa fa-facebook"></i>--}}
									{{--</span>--}}
                                        {{--<span>facebook</span>--}}
                                       {{--</p>--}}

                                        {{--<p>--}}
                                        {{--<span class="icon-styled color-main pr-2">--}}
										{{--<i class="fa fa-whatsapp"></i>--}}
									{{--</span>--}}
                                            {{--<span>whatsapp</span>--}}
                                        {{--</p>--}}



                                </div>
                                <!--.col-* -->
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>

    <section class="ls s-pt-55 s-pb-30 s-pt-lg-95 s-pb-lg-70" id="courses">
        <div class="container">

            <h3 class="text-center"> {{__('contact.location')}} </h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.2979014339435!2d35.8870336150887!3d34.89897288038402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15217dc3e993d1b1%3A0xbaf33b4ff21b090!2sTartus%20University!5e0!3m2!1sen!2s!4v1612193410316!5m2!1sen!2s"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>
    </section>

@endsection