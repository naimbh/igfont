@extends('backend.layout')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Update Settings
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
                            <form method="post" action="{{route('setting.update', $settings->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <label for="">Site Title</label>
                                    <input type="text" value="{{$settings->title}}" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Site Logo</label>
                                    <input type="file" name="logo" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Site Favicon</label>
                                    <input type="file" name="favicon" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Caption Limits</label>
                                    <input type="number" value="{{$settings->limit}}" name="limit" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Backgroud Color</label>
                                    <textarea type="text" name="bgcolor" rows="4" class="form-control">{!! $settings->bgcolor !!}</textarea>
                                </div>

                                <div class="card-footer">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Update Settings</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card card-outline card-info collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Background Color Instructions
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
                            <h4>Solid Color: </h4>
                            <div><code class="codeview">background: black or #fff ;</code></div>
                            <br>
                            <h4>Gradient Color: </h4>
                            <div><code class="codeview">
                                    background: rgb(2, 0, 36); <br>
                                    background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 33%, rgba(0, 212, 255, 1) 100%);
                                </code>
                            </div>
                            <br>
                            <div class="">
                                To Generate awesome gradient please visit <a href="https://cssgradient.io/">cssgradient.io</a> !
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>




@endsection
