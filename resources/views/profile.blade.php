@extends('layouts.app1')
@section('body')

    <style>
        /*profile*/
        .profile-userpic img {
            float: none;
            margin: 0 auto;
            width: 30%;
            height: 30%;
            -webkit-border-radius: 50%!important;
            -moz-border-radius: 50%!important;
            border-radius: 50%!important
        }

        .profile-usertitle {
            text-align: left;
            margin-top: 20px
        }

        .profile-usertitle-name {
            color: #5a7391;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 7px
        }
    </style>


    <section class="page_title ds s-pt-80 s-pb-80 s-pt-lg-130 s-pb-lg-90">
        <div class="divider-50"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1>{{__('navbar.profile')}}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">{{__('navbar.home')}}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{__('navbar.profile')}}
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
                <div class="col-lg-12 col-md-12">
                    <h6 class="special-heading fw-300 text-center">{{__('navbar.empower')}}</h6>
                    <h2 class="text-center">{{__('navbar.profile')}}</h2>
                    </br>
                    </br>
                    </br>

        <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">{{__('navbar.home')}}</a>
                                <a class="nav-item nav-link" id="nav-apps-tab" data-toggle="tab" href="#nav-apps" role="tab" aria-controls="nav-apps" aria-selected="false">{{__('profile.apps')}}</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Questions</a>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <form class="contact-form mt-0 c-mb-10 c-gutter-10" method="post" action="">

                                    <input type="hidden" name="_token" id="_token_val" value="{{csrf_token()}}">

                                    <div class="row">

                                        <div class="col-sm-6 col-md-6">
                                            {{--<div class="portlet light profile-sidebar-portlet bordered">--}}
                                                <div class="profile-userpic">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-responsive" alt=""> </div>
                                                <div class="profile-usertitle">
                                                    {{--<div class="profile-usertitle-name"> Marcus Doe </div>--}}
                                                </div>

                                            {{--</div>--}}
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group has-placeholder">
                                                <label for="name">{{__('profile.name')}} <span class="required">*</span></label>
                                                <input type="text" aria-required="true" size="30" value="{{Auth()->user()->name}}" name="name" id="name" class="form-control" placeholder="{{__('profile.name')}}*" style="border-bottom-color: #01bf01">
                                            </div>
                                            </br>
                                            <div class="form-group has-placeholder">
                                                <label for="phone">{{__('profile.phone')}}</label>
                                                <input type="text" aria-required="true" size="30" value="{{Auth()->user()->phone}}" name="phone" id="phone" class="form-control" placeholder="{{__('profile.phone')}}" style="border-bottom-color: #01bf01">
                                            </div>
                                            </br>
                                            <div class="form-group has-placeholder">
                                                <label for="email"> {{__('profile.email')}} <span class="required">*</span></label>
                                                <input type="email" aria-required="true" size="30" value="{{Auth()->user()->email}}" name="email" id="email" class="form-control" placeholder="{{__('profile.email')}}*" style="border-bottom-color: #01bf01">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-sm- col-md-12">

                                            <div class="form-group has-placeholder mt-20" style="text-align: right">
                                                <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">{{__('profile.update')}}
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-apps" role="tabpanel" aria-labelledby="nav-apps-tab">
                                <table id ="tableData" class="table table-striped table-sm data-table" cellspacing="0" style="width: 100%">
                                    <thead style="color: #0b0b0b; font-weight: bold;">
                                    <tr>
                                        <th> #</th>
                                        <th>{{__('profile.app_name')}}</th>
                                        <th>{{__('profile.app_type')}}</th>
                                        <th>{{__('profile.lang')}}</th>
                                        <th>{{__('profile.subscription')}}</th>
                                        <th>{{__('profile.operation')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody style="color: #0b0b0b;">

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Contest Name</th>
                                        <th>Date</th>
                                        <th>Award Position</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#">Work 1</a></td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 2</a></td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 3</a></td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

                </div>
            </div>
        </div>
    </section>


@endsection


@push('pageJs')
<script type="text/javascript">

    $(function () {


        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });


        var table = $('#tableData').DataTable({
            "language": {
                "processing": " جاري المعالجة",
                "paginate": {
                    "first": "الأولى",
                    "last": "الأخيرة",
                    "next": "التالية",
                    "previous": "السابقة"
                },
                "search": "البحث :",
                "loadingRecords": "جاري التحميل...",
                "emptyTable": " لا توجد بيانات",
                "info": "من إظهار _START_ إلى _END_ من _TOTAL_ النتائج",
                "infoEmpty": "Showing 0 إلى 0 من 0 entries",
                "lengthMenu": "إظهار _MENU_ البيانات",
            },
            destroy: true,
            processing: true,

            serverSide: true,
            stateSave: true,

            ajax: "{{ url('your_apps')}}",

            columns: [

                {data: 'DT_RowIndex', name: 'DT_RowIndex'},

                {data: 'app_name', name: 'name'},
                {data: 'type_id', name: 'type_id'},
                {data: 'programming_lang_id', name: 'programming_lang_id'},
                {data: 'subscription_id', name: 'subscription_id'},

                {data: 'action', name: 'action', orderable: false, searchable: false},

            ]

        });


        $('body').on('click', '.add', function () {


            var ques_id = $(this).data("id");

            window.location.href="{{ url('/apps/question') }}" + "/" + ques_id;

        });
    });

</script>
    @endpush
