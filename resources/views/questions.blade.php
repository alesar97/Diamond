@extends('layouts.app1')
@section('body')

    <section class="page_title ds s-pt-80 s-pb-80 s-pt-lg-130 s-pb-lg-90">
        <div class="divider-50"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1>{{__('profile.questions')}}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/"> {{__('navbar.home')}} </a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{__('profile.questions')}}
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
                    <h2 class="text-center">{{__('profile.questions')}}</h2>

                    <div class="row justify-content-end">
                        <button type="button" id="createNew" data-toggle="modal" data-target="#advertModal" class="btn btn-darkgrey">Add New</button>

                    </div>

                    <section class="ls s-py-55 s-pb-lg-100 s-pt-lg-95 c-gutter-60 container-px-30 ">
                        <div class="container">

                    <table id ="tableData" class="table table-striped table-sm data-table" cellspacing="0">
                        <thead style="color: #0b0b0b; font-weight: bold;">
                        <tr>
                            <th> #</th>
                            <th> {{__('profile.question')}} </th>
                            <th>{{__('profile.reply')}} </th>
                            <th>{{__('profile.operation')}}</th>
                        </tr>
                        </thead>
                        <tbody style="color: #0b0b0b;">

                        </tbody>
                    </table>

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

                ajax: "{{ url('apps/question')}}" + "/" + {{$id}},

                columns: [

                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},

                    {data: 'question', name: 'question'},
                    {data: 'reply', name: 'reply'},

                    {data: 'action', name: 'action', orderable: false, searchable: false},

                ]

            });


            $('#createNew').click(function () {

                $('#action').val("{{__('toastr.add_button')}}");

                $('#_id').val('');

                $('#Form').trigger("reset");

                // $('#modaHeading').html("  إضافة سؤال جديد ");


            });

            $('#action').click(function (e) {

                e.preventDefault();

                $(this).html("{{__('toastr.sending')}}");


                $.ajax({

                    data: $('#productForm').serialize(),

                    url: "{{ route('questions.store') }}",

                    type: "POST",

                    dataType: 'json',

                    success: function (data) {
                        $('#action').html("{{__('toastr.add_button')}}");

                        $('#productForm').trigger("reset");
                        $('#advertModal').modal("hide");
                        $(".modal-backdrop").hide();
                        toastr.success("{{__('toastr.add')}}");
                        table.draw(false);


                    },

                    error: function (data) {

                        console.log('Error:', data);

                        $('#action').html("{{__('toastr.add_button')}}");

                    }

                });

            });

            $('body').on('click', '.edit', function () {


                var q_id = $(this).data('id');

                $.get("{{ route('questions.index') }}" + '/' + q_id + '/edit', function (data) {

                    $('#modaHeading').html("{{__('toastr.edit_q')}}");

                    $("#action").html("{{__('toastr.edit_button')}}");
                    $("#action").val("edit");
                    $('#advertModal').modal('show');

                    $('#_id').val(data.id);

                    $('#question').val(data.title);
                    $('#options').val(data.q_options);
                    $('#answers').val(data.answers);

                })

            });

            $('#editBtn').click(function (e) {

                var q_id = $(this).data("id");
                e.preventDefault();

                $(this).html("{{__('toastr.saving')}}");


                $.ajax({

                    data: $('#EditForm').serialize(),

                    url: "{{ route('questions.store') }}" + '/' + q_id,

                    type: "POST",

                    dataType: 'json',

                    success: function (data) {
                        $('#action').html('   save changes &nbsp; <i class="fa fa-save"></i> ');

                        $('#EditForm').trigger("reset");
                        $('#ajaxModel').modal('hide');

                        table.draw(false);
                        toastr.success("{{__('toastr.edit')}}");

                    },

                    error: function (data) {

                        console.log('Error:', data);
                        $('#ajaxModel').modal('hide');

                        $('#editBtn').html('Save changes &nbsp; <i class="fa fa-save"></i> ');

                    }

                });

            });

            $('body').on('click', '.delete', function () {


                var q_id = $(this).data("id");

                var co = confirm("  {{__('toastr.sure')}}");
                if (!co) {
                    return;
                }


                $.ajax({

                    type: "DELETE",

                    url: "{{ route('questions.store') }}" + '/' + q_id,

                    success: function (data) {
                        toastr.error("{{__('toastr.delete')}}");
                        table.draw(false);

                    },

                    error: function (data) {
                        toastr.error("{{__('toastr.error')}}");
                        console.log('error:', data);

                    }

                });

            });


        });

    </script>
@endpush
