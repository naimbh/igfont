@extends('backend.layout')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row justify-content-center">

                <div class="col-lg-8 col-md-10">
                    <div class="card card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-info">
                            <h3 class="widget-user-username">{{$user->name}}</h3>
                            <h5 class="widget-user-desc">Admin</h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="{{asset('backend')}}/dist/img/avatar5.png"
                                 alt="User Avatar">
                        </div>
                        <div class="card-footer">
                            <h5 class="text-center">Reach America Media</h5>
                        </div>
                    </div>
                </div>



{{--                <div class="col-lg-8 col-md-10">--}}
{{--                    <div class="card card-primary">--}}
{{--                        <div class="card-header">--}}
{{--                            <h3 class="card-title">Change Password</h3>--}}
{{--                        </div>--}}
{{--                        <!-- /.card-header -->--}}
{{--                        <!-- form start -->--}}
{{--                        <form method="post" action="{{route('admin.profile.password')}}">--}}
{{--                            @csrf--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail1">Password:</label>--}}
{{--                                    <input name="password" type="password" class="form-control" id="exampleInputEmail1" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Confirm Password:</label>--}}
{{--                                    <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}

{{--                            <div class="card-footer">--}}
{{--                                <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection
