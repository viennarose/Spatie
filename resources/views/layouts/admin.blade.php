<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/loading.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/styleButton.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png')}}" />

    <link rel="stylesheet" href="{{ asset('assets/js/jquery-ui.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link type="text/css" href="{{ asset('assets/css/jquery.signature.css')}}" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div class="container-scroller">
        @include('layouts.inc.admin.navbar')
        <div class="container-fluid page-body-wrapper" >
            @include('layouts.inc.admin.sidebar')
            <div class="main-panel" >
                <div class="content-wrapper" style="background-color: rgb(166, 227, 246)">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>

    <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>

    <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('admin/js/template.js')}}"></script>

    <!-- Custom js for this page-->
    <script src="{{asset('/admin/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/js/data-table.js')}}"></script>
    <script src="{{asset('admin/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/js/dataTables.bootstrap4.js')}}"></script>
    <!-- End custom js for this page-->


    <script src="{{ asset('assets/js/external/jquery/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js')}}"></script>


    @livewireScripts
    @yield('script')


</body>
</html>
