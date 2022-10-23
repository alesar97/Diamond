@extends('layouts.app1')
@section('body')

    <section class="page_title ds s-pt-80 s-pb-80 s-pt-lg-130 s-pb-lg-90">
        <div class="divider-50"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1>{{__('navbar.documentation')}}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">{{__('navbar.home')}}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{__('navbar.documentation')}}
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
                    <h2 class="text-center"> {{__('navbar.documentation')}} </h2>
                    </br>
                    </br>


                </div>
            </div>
        </div>
    </section>


@endsection