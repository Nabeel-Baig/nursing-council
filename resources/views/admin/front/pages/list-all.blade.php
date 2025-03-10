@extends('layouts.master')

@section('title') @lang('translation.Data_Tables') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') {{ $title ?? '' }} @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        {{-- {{ $id }} --}}
                            <a class="btn btn-info" href="{{ url('admin/slides/create',$id) }}">Add</a>
                    </div>
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Slide Image</th>
                                <th>Slider Title</th>
                                <th>Slider Sub Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <!-- sample modal content -->
    <div id="viewModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">View Slider Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','id'))}}</th>
                                <td id="news_id" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','title'))}}</th>
                                <td id="title" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','sub title'))}}</th>
                                <td id="sub_title" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','details'))}}</th>
                                <td id="details" align="center"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Delete content -->
    <div id="confirmModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to delete this ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_delete" name="ok_delete" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
@section('script-bottom')
    <script>
        var DataTable = '';
        $(function () {
            var source = `{{ url('admin/slides/showAllById/' . $id) }}`;

            // let url = '{{route('admin.sliders.show',':id')}}';
            DataTable = $("#example1").DataTable({
                dom: "Blfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn-sm"
                }, {
                    extend: "csv",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                }, {
                    extend: "colvis",
                    className: "btn-sm"
                }],
                responsive: true,
                processing: true,
                serverSide: true,
                pageLength: 10,
                ajax: {
                    url: source,
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'image',
                        name: 'image',
                    },
                    {
                        data: 'slide_title',
                        name: 'slide_title',
                    },
                    {
                        data: 'slide_sub_title',
                        name: 'slide_sub_title'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });


            // View Records
            $(document, this).on('click', '.view', function () {
                let id = $(this).attr('id');
                let url = '{{route('admin.sliders.show',':id')}}';
                $.ajax({
                    url: url.replace(':id',id),
                    dataType: "json",
                    success: function (data) {
                        document.getElementById('news_id').innerText = data.id;
                        document.getElementById('title').innerText = data.news_title;
                        document.getElementById('sub_title').innerText = data.news_sub_title;
                        document.getElementById('details').innerText = data.news_details;
                        $("#viewModal").modal('show');
                    }
                })
            })


            // ==============================================

        })

        var delete_id;
            $(document, this).on('click', '.delete', function () {
                delete_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });
            $(document).on('click', '#ok_delete', function () {
                let url = '{{ route('admin.slides.destroy',':id') }}'
                $.ajax({
                    type: "delete",
                    url: url.replace(':id',delete_id),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function () {
                        $('#ok_delete').text('Deleting...');
                        $('#ok_delete').attr("disabled", true);
                    },
                    success: function (data) {
                        DataTable.ajax.reload();
                        $('#ok_delete').text('Delete');
                        $('#ok_delete').attr("disabled", false);
                        $('#confirmModal').modal('hide');
                        toastr.success(data);
                    }
                })
            });

// ==========================================

            // for limit check if data limit is greater then 10 it will add .....
            function limitSet(data){
                if(data.length > 10)
                    return data.substring(0,10) + ' .....';
                    else
                    return data;
            }
// ===========================================
                // for remove html character
                let removeHTML = (input) => {
                let tmp = document.createElement('div');
                tmp.innerHTML = input;
                return tmp.textContent || tmp.innerText || '';
                };

// ==========================================
    </script>

@endsection
