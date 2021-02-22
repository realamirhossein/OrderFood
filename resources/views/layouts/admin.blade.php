<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Order Food') }}</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/css/adminlte.css') }}">

    <!-- bootstrap rtl -->
{{--    <link rel="stylesheet" href="{{ asset('/css/bootstrap-rtl.min.css') }}">--}}
    <!-- template rtl version -->
    <link rel="stylesheet" href="{{ asset('/css/custom-style.css') }}">

    @yield('extra-css')
</head>
<body>
<body class="sidebar-mini">
<script>
    (function () {
        if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
            var body = document.getElementsByTagName('body')[0];
            body.className = body.className + ' sidebar-collapse';
        }
    })();
</script>
<div class="wrapper">
@include('inc.admin-nav')

{{--@unless(isset($noAdminSideBar))--}}
@include('inc.admin-sidebar')
{{--@endunless--}}
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            {{--            @include('inc.admin-fastAccess')--}}
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
            {{--                <div class="row">--}}
            @yield('content')
            {{--                </div>--}}
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
<!-- /.content-wrapper --
{{--@include('inc.admin-controlsidebar')--}}
@include('inc.admin-footer')

    </div>

<!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
{{--    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>--}}
    <!-- Bootstrap 4 -->
{{--    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>--}}
    <!-- AdminLTE App -->
    <script src="{{ asset('/js/adminlte.min.js') }}"></script>

    <script>
        // Click handler can be added latter, after jQuery is loaded...
        $('.sidebar-toggle').click(function (event) {
            event.preventDefault();
            if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
                sessionStorage.setItem('sidebar-toggle-collapsed', '');
            } else {
                sessionStorage.setItem('sidebar-toggle-collapsed', '1');
            }
        });
    </script>

@yield('extra-js')

</body>
</html>
