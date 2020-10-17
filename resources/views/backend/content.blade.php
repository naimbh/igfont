@extends('backend.layout')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Home Page
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
                            <form method="post" action="{{route('content.update', $homepage->id)}}">
                                @csrf
                                @method('put')
                                <textarea name="contents" class="textarea">{!! $homepage->content !!}</textarea>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Caption Page
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
                            <form method="post" action="{{route('content.update', $caption->id)}}">
                                @csrf
                                @method('put')
                                <textarea name="contents" class="textarea">{!! $caption->content !!}</textarea>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-info">Update</button>
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
        <script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <script>
            $(function () {
                // Summernote
                $('.textarea').summernote({
                    height: 250,
                });
            })
        </script>
    @endpush



@endsection
