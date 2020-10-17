<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon"
          href="{{asset('frontend/asset/img/favicon.png')}}"
          type="image/png"/>
    <link rel="apple-touch-icon"
          href="{{asset('frontend/asset/img/favicon.png')}}"
          type="image/png"/>

    <title> Dashboard | IgFont.Com</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('backend/plugins/toastr/toastr.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    @stack('css')
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <div class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </div>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a title="logout" class="nav-link" data-toggle="dropdown" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off fa-2x"></i>
                </a>
                <form id="logout-form" style="display:none;" method="post" action="{{route('logout')}}">
                    @csrf
                </form>
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-danger elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('frontend.home')}}" class="brand-link">
            <div class="text-center">{{env('APP_NAME')}}</div>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel justify-content-center mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('backend')}}/dist/img/avatar5.png" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{route('admin.dashboard')}}" class="nav-link bg-secondary">
                            <i class="nav-icon fa fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <br>

                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Menus
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.content')}}" class="nav-link {{request()->routeIs('admin.content') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Page Contents</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.caption')}}" class="nav-link {{request()->routeIs('admin.caption') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Captions</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.seo')}}" class="nav-link {{request()->routeIs('admin.seo') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SEO & Metatags</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.setting')}}" class="nav-link {{request()->routeIs('admin.setting') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Settings</p>
                                </a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{route('admin.traffic')}}" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>My Profile</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}


                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
    @yield('content')
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">

        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020-21 <a href="https://NaimBH.com"></a></strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend')}}/dist/js/adminlte.min.js"></script>

<!-- DataTables -->
<script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('backend/plugins/toastr/toastr.min.js')}}"></script>
{!! Toastr::message() !!}
@foreach ($errors->all() as $error)
    <script>
        toastr["error"]("{{$error}}");
    </script>
@endforeach
@stack('js')
</body>
</html>
