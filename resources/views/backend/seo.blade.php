@extends('backend.layout')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Update Seo and Meta data
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
                            <form method="post" action="{{route('seo.update', $meta->id)}}">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <textarea name="meta" rows="9" class="form-control">{{$meta->meta}}</textarea>
                                </div>

                                <div class="card-footer">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Update Meta</button>
                                    </div>
                                </div>

                            </form>
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
                    "responsive": true,
                    "autoWidth": false,
                });
            });
        </script>
    @endpush



@endsection
