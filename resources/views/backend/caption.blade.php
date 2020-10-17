@extends('backend.layout')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Add Caption
                            </h3>
                            <!-- tools box -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove"
                                        data-toggle="tooltip" title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                            <form method="post" action="{{route('caption.store')}}">
                                @csrf
                                <div class="form-group">
                                    <textarea name="caption" rows="6" class="form-control"></textarea>
                                </div>

                                <div class="card-footer">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Add Caption</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card card-outline card-indigo">
                        <div class="card-header">
                            <h3 class="card-title">
                                All Captions
                            </h3>
                            <!-- tools box -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove"
                                        data-toggle="tooltip" title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                            <div class="table-responsive">
                                <button class="btn btn-danger mb-4" id="delete_all"
                                        data-url="{{ route('caption.multiDelete') }}">Delete All Selected Captions
                                </button>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr class="text-center">
                                        <th width="10px"><input style="zoom:1.5" type="checkbox" id="master"></th>
                                        <th scope="col">#</th>
                                        <th scope="col">Caption</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($captions as $item)

                                        <tr>
                                            <td><input style="zoom:1.5" type="checkbox" class="sub_chk"
                                                       data-id="{{$item->id}}">
                                            </td>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->caption}}</td>
                                            <td>{{$item->updated_at->diffForHumans()}}</td>
                                            <td class="text-center">

                                                <a class="btn-sm bg-warning p-2"
                                                   href="{{route('caption.edit', $item->id)}}" title="Edit"><i
                                                        class="fa fa-pen"></i></a>

                                                <a class="btn-sm bg-danger p-2"
                                                   onclick="event.preventDefault(); document.getElementById('delete-form{{$item->id}}').submit();"
                                                   href="#" title="Delete"><i class="fa fa-trash"></i></a>

                                                <form id="delete-form{{$item->id}}"
                                                      action="{{ route('caption.destroy', $item->id) }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>

    @push('css')
        <link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}">
    @endpush

    @push('js')
        <script>
            $(function () {
                $(".table").DataTable({
                    "columnDefs": [
                        {"orderable": false, "targets": 0}
                    ]
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {

                $('#master').on('click', function (e) {
                    if ($(this).is(':checked', true)) {
                        $(".sub_chk").prop('checked', true);
                    } else {
                        $(".sub_chk").prop('checked', false);
                    }
                });

                $('#delete_all').on('click', function (e) {
                    e.preventDefault();

                    var allVals = [];
                    $(".sub_chk:checked").each(function () {
                        allVals.push($(this).attr('data-id'));
                    });
                    var ids = allVals.join(",");

                    if(ids == ''){
                        alert('Warning! \nYou didn\'t select any captions');
                        return;
                    }

                    var url = $('#delete_all').data('url');

                    $.post(url,
                        {
                            _token: "{{csrf_token()}}",
                            ids: ids
                        },
                        function(data, status){
                            alert('Captions Deleted Successfully!');
                            location.reload();
                        });
                });
            });
        </script>
    @endpush



@endsection
