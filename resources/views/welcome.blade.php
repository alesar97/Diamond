@extends('layouts.app')
@section('body')

    <section class="ls s-pt-55 s-pb-35 s-pt-lg-95 s-pb-lg-75">
        <div class="container">
            <div class="divider-3"></div>
            <div class="row">
                <div class="col-12 text-center price-header">
                    <h6 class="special-heading fw-300">{{__('navbar.empower')}}</h6>
                    <h2>Select a Plan</h2>
                    <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="pricing-plan text-center text-lg-left bordered rounded">
                        <div class="plan-name text-center">
                            <h3>
                                Limited
                            </h3>
                        </div>
                        <div class="price-wrap">
                            <span class="plan-sign fw-900">$</span>
                            <span class="plan-price color-dark fw-900">10</span>
                            <span class="plan-decimals">/month</span>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <li><i class="icon-m-user color-dark"></i>3 User</li>
                                <li><i class="icon-m-comment color-dark"></i>Basic Support</li>
                                <li><i class="fa fa-edit color-dark"></i>All Features included</li>
                                <li><i class="fa fa-thumbs-o-up color-dark"></i>Participant Dial Out</li>
                                <li><i class="icon-m-list-alt color-dark"></i>Web interface</li>
                            </ul>
                            <div class="plan-button text-center">
                                <a href="#" class="btn btn-maincolor">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="pricing-plan text-center text-lg-left plan-featured rounded ds">
                        <div class="plan-name text-center">
                            <h3>
                                Unlimited
                            </h3>
                        </div>
                        <div class="price-wrap">
                            <span class="plan-sign fw-900">$</span>
                            <span class="plan-price color-dark fw-900">30</span>
                            <span class="plan-decimals">/month</span>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <li><i class="icon-m-user color-dark"></i>3 User</li>
                                <li><i class="icon-m-comment color-dark"></i>Basic Support</li>
                                <li><i class="fa fa-edit color-dark"></i>All Features included</li>
                                <li><i class="fa fa-thumbs-o-up color-dark"></i>Participant Dial Out</li>
                                <li><i class="icon-m-list-alt color-dark"></i>Web interface</li>
                            </ul>
                            <div class="plan-button text-center">
                                <a href="#" class="btn btn-maincolor">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="pricing-plan text-center text-lg-left bordered rounded">
                        <div class="plan-name text-center">
                            <h3>
                                Premium
                            </h3>
                        </div>
                        <div class="price-wrap">
                            <span class="plan-sign fw-900">$</span>
                            <span class="plan-price color-dark fw-900">20</span>
                            <span class="plan-decimals">/month</span>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <li><i class="icon-m-user color-dark"></i>3 User</li>
                                <li><i class="icon-m-comment color-dark"></i>Basic Support</li>
                                <li><i class="fa fa-edit color-dark"></i>All Features included</li>
                                <li><i class="fa fa-thumbs-o-up color-dark"></i>Participant Dial Out</li>
                                <li><i class="icon-m-list-alt color-dark"></i>Web interface</li>
                            </ul>
                            <div class="plan-button text-center">
                                <a href="#" class="btn btn-maincolor">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ds s-py-60 s-py-lg-100 call-to-action s-parallax s-overlay text-center text-lg-left" id="action">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 col-xl-6">
                    <h6 class="special-heading fw-300">Personable Virtual Assistants</h6>
                    <h2>Don't just take our</h2>
                    <div class="divider-35 d-none d-md-block"></div>
                    <p class="mt-20 mb-20">
                        We are proud to say that since our opening in ....
                    </p>
                    <div class="divider-43 d-none d-md-block"></div>
                    <a href="#" class="btn btn-maincolor">Find </a>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="ls s-pt-60 s-pb-10 s-pt-lg-100 s-pb-lg-30 c-gutter-10 c-mb-20 category-section" id="categories">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                    {{--<h6 class="special-heading fw-300 text-center">Empower Yourself</h6>--}}
                    {{--<h2 class="text-center">Popular categories</h2>--}}
                {{--</div>--}}
                {{--<div class="divider-10 d-none d-lg-block"></div>--}}
                {{--<div class="col-lg-4 col-sm-6 animate" data-animation="fadeInUp">--}}
                    {{--<div class="icon-box text-center">--}}
                        {{--<div class="color-main icon-styled fs-77">--}}
                            {{--<i class="icon-m-technology" aria-hidden="true"></i>--}}
                        {{--</div>--}}
                        {{--<h6 class="fw-700">--}}
                            {{--<a href="single-course.html">Technology</a>--}}
                        {{--</h6>--}}
                        {{--<p>--}}
                            {{--Lorem ipsum dolor sit amet, contetur adipiscing diam--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<span class="media-links">--}}
								{{--<a class="abs-link" title="" href="course-categories.html"></a>--}}
							{{--</span>--}}
                {{--</div><!-- .col-* -->--}}
                {{--<div class="col-lg-4 col-sm-6 animate" data-animation="fadeInUp">--}}

                    {{--<div class="icon-box text-center">--}}
                        {{--<div class="color-main icon-styled fs-77">--}}
                            {{--<i class="icon-m-language" aria-hidden="true"></i>--}}
                        {{--</div>--}}
                        {{--<h6 class="fw-700">--}}
                            {{--<a href="single-course.html">Language</a>--}}
                        {{--</h6>--}}
                        {{--<p>--}}
                            {{--Phasellus porttitor justo elit, ac tempus ligula sodales--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<div class="media-links">--}}
                        {{--<a class="abs-link" title="" href="course-categories.html"></a>--}}
                    {{--</div>--}}
                {{--</div><!-- .col-* -->--}}
                {{--<div class="col-lg-4 col-sm-6 animate" data-animation="fadeInUp">--}}

                    {{--<div class="icon-box text-center">--}}
                        {{--<div class="color-main icon-styled fs-77">--}}
                            {{--<i class="icon-m-science" aria-hidden="true"></i>--}}
                        {{--</div>--}}

                        {{--<h6 class="fw-700">--}}
                            {{--<a href="single-course.html">Science</a>--}}
                        {{--</h6>--}}

                        {{--<p>--}}
                            {{--Nunc vehicula metus et massa tincidunt ultrices tincidunt--}}
                        {{--</p>--}}


                    {{--</div>--}}
                    {{--<div class="media-links">--}}
                        {{--<a class="abs-link" title="" href="course-categories.html"></a>--}}
                    {{--</div>--}}
                {{--</div><!-- .col-* -->--}}
                {{--<div class="col-lg-4 col-sm-6 animate" data-animation="fadeInUp">--}}

                    {{--<div class="icon-box text-center">--}}
                        {{--<div class="color-main icon-styled fs-77">--}}
                            {{--<i class="icon-m-humanities" aria-hidden="true"></i>--}}
                        {{--</div>--}}

                        {{--<h6 class="fw-700">--}}
                            {{--<a href="single-course.html">Humanities</a>--}}
                        {{--</h6>--}}

                        {{--<p>--}}
                            {{--Curabitur pretium elit mi, non sollicitudin massa ac--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<div class="media-links">--}}
                        {{--<a class="abs-link" title="" href="course-categories.html"></a>--}}
                    {{--</div>--}}
                {{--</div><!-- .col-* -->--}}
                {{--<div class="col-lg-4 col-sm-6 animate" data-animation="fadeInUp">--}}

                    {{--<div class="icon-box text-center">--}}
                        {{--<div class="color-main icon-styled fs-77">--}}
                            {{--<i class="icon-m-business" aria-hidden="true"></i>--}}
                        {{--</div>--}}

                        {{--<h6 class="fw-700">--}}
                            {{--<a href="single-course.html">Business</a>--}}
                        {{--</h6>--}}

                        {{--<p>--}}
                            {{--In porta urna risus, ut imperdiet nisl condimentum lobortis--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<div class="media-links">--}}
                        {{--<a class="abs-link" title="" href="course-categories.html"></a>--}}
                    {{--</div>--}}
                {{--</div><!-- .col-* -->--}}
                {{--<div class="col-lg-4 col-sm-6 animate" data-animation="fadeInUp">--}}

                    {{--<div class="icon-box text-center">--}}
                        {{--<div class="color-main icon-styled fs-77">--}}
                            {{--<i class="icon-m-marketing" aria-hidden="true"></i>--}}
                        {{--</div>--}}

                        {{--<h6 class="fw-700">--}}
                            {{--<a href="single-course.html">Marketing</a>--}}
                        {{--</h6>--}}

                        {{--<p>--}}
                            {{--Sed pellentesque pulvinar arcu ac congue. Sed sed est nec--}}
                        {{--</p>--}}


                    {{--</div>--}}
                    {{--<div class="media-links">--}}
                        {{--<a class="abs-link" title="" href="course-categories.html"></a>--}}
                    {{--</div>--}}
                {{--</div><!-- .col-* -->--}}
                {{--<div class="d-none d-lg-block divider-20"></div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</section>--}}

    <section id="section_testimonials" class="s-pt-60 s-pb-55 s-pt-lg-100 s-pb-lg-95 ls ms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-slider owl-carousel" data-autoplay="true" data-loop="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="false" data-dots="false">
                        <div class="quote-item">
                            <div class="quote-image">
                                <img src="assets/images/team/testimonials_01.jpg" alt="">
                            </div>
                            <p>
                                <em class="big">
                                    I met so many interesting people over the last couple of months, who proved to stay ahead of the modern technologies in the world of branding and web design. I loved working with you all, thank you so much!
                                </em>
                            </p>
                            <img src="assets/images/quote.png" alt="">
                            <h6 class="quote-meta fw-700">
                                Keith M. Jordan
                            </h6>
                            <p>Applied Researcher</p>
                        </div>
                        <div class="quote-item">
                            <div class="quote-image">
                                <img src="assets/images/team/testimonials_02.jpg" alt="">
                            </div>
                            <p>
                                <em class="big">
                                    I am inspired by the UN Declaration that “everyone is entitled to a free education”. We are committed to equality and access to education irrespective of gender, geography, economic status or any other barriers to access.
                                </em>
                            </p>
                            <img src="assets/images/quote.png" alt="">
                            <h6 class="quote-meta fw-700">
                                Ron M. Martin
                            </h6>
                            <p>Applied Researcher</p>
                        </div>
                        <div class="quote-item">
                            <div class="quote-image">
                                <img src="assets/images/team/testimonials_03.jpg" alt="">
                            </div>
                            <p>
                                <em class="big">
                                    I am drive by our belief in the power of free education and skills training to change people’s lives for the better and are passionate about providing an overall learning experience that meets their needs and helps them to achieve life goals.
                                </em>
                            </p>
                            <img src="assets/images/quote.png" alt="">
                            <h6 class="quote-meta fw-700">
                                Thelma R. Furman
                            </h6>
                            <p>Autor courses</p>
                        </div>

                    </div><!-- .testimonials-slider -->

                </div>
            </div>
        </div>
    </section>

    <section class="ls ms s-pt-60 s-pb-50 s-pt-lg-95 s-pb-lg-90 c-gutter-30">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-20">
                    <h5>{{__('welcome.general_questions')}}</h5>
                </div>
                <div class="col-md-6">
                    <div id="accordion01" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="collapse01_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse01" aria-expanded="false" aria-controls="collapse01">
                                        What does Your Company Consulting do?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse01" class="collapse" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                                <div class="card-body">
                                    <p>
                                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                                    </p>
                                    <ul class="list-styled">
                                        <li>It can answer common questions</li>
                                        <li>It can demonstrate how a product or service works</li>
                                        <li>It can discuss current trends</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="collapse02_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                        Lorem ipsum dolor sit amet elit?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                                <div class="card-body">
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="collapse04_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                        Integer venenatis tellus et est?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                                <div class="card-body">
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable sunt aliqua put a bird on it squid single-origin coffee shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="collapse05_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse05" aria-expanded="false" aria-controls="collapse05">
                                        Maecenas vel libero ex nec sem eros?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse05" class="collapse" role="tabpanel" aria-labelledby="collapse05_header" data-parent="#accordion01">
                                <div class="card-body">
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- collapse -->
                </div>

                <div class="col-md-6">
                    <div id="accordion02" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="collapse03_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                        Cras non tincidunt massa?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion02">
                                <div class="card-body">
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable sunt aliqua put a bird on it squid single-origin coffee shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="collapse07_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse07" aria-expanded="false" aria-controls="collapse07">
                                        Etiam suscipit arcu quis massa?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse07" class="collapse" role="tabpanel" aria-labelledby="collapse07_header" data-parent="#accordion02">
                                <div class="card-body">
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="collapse08_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse08" aria-expanded="false" aria-controls="collapse08">
                                        Maecenas ornare ante pharetra?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse08" class="collapse" role="tabpanel" aria-labelledby="collapse08_header" data-parent="#accordion02">
                                <div class="card-body">
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable sunt aliqua put a bird on it squid single-origin coffee shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="collapse09_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse09" aria-expanded="false" aria-controls="collapse09">
                                        Aliquam mattis vel tortor ac tristique?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse09" class="collapse" role="tabpanel" aria-labelledby="collapse09_header" data-parent="#accordion02">
                                <div class="card-body">
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- collapse -->
                </div>
            </div>
        </div>
    </section>


    {{--<section class="ls s-pt-60 s-pb-50 s-py-lg-100 partners-section" id="partners">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-4 col-md-2">--}}
                    {{--<a href="#">--}}
                        {{--<img src="assets/images/partners/06.jpg" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-4 col-md-2">--}}
                    {{--<a href="#">--}}
                        {{--<img src="assets/images/partners/05.jpg" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-4 col-md-2">--}}
                    {{--<a href="#">--}}
                        {{--<img src="assets/images/partners/04.jpg" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-4 col-md-2">--}}
                    {{--<a href="#">--}}
                        {{--<img src="assets/images/partners/03.jpg" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-4 col-md-2">--}}
                    {{--<a href="#">--}}
                        {{--<img src="assets/images/partners/02.jpg" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-4 col-md-2">--}}
                    {{--<a href="#">--}}
                        {{--<img src="assets/images/partners/01.jpg" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

@endsection