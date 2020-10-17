@extends('backend.layout')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row justify-content-center">

                <div class="col-lg-8 col-md-10">
                    <div class="card card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-info">
                            <h3 class="widget-user-username">{{auth()->user()->name}}</h3>
                            <h5 class="widget-user-desc">Admin</h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="{{asset('backend')}}/dist/img/avatar5.png"
                                 alt="User Avatar">
                        </div>
                        <div class="card-footer">
                            <h5 class="text-center">{{env('APP_NAME')}}</h5>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="card card-outline card-primary collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Update Profile
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
                            <form method="post" action="{{route('user.update', auth()->user()->id)}}">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" value="{{auth()->user()->name}}" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" value="{{auth()->user()->email}}" name="email" class="form-control" required>
                                </div>

                                <div class="card-footer">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="card card-outline card-danger collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Update Password
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
                            <form method="get" action="{{route('user.edit', auth()->user()->id)}}">
                                @csrf

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" placeholder="Input a new password.." name="password" class="form-control" required>
                                </div>

                                <div class="card-footer">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-danger">Update Password</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection
