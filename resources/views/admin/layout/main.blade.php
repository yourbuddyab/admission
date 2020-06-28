
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="geMKdjEtmQwoU0xCybrvjDYCKaeJQXZH5MCmkoge">
    <title>{{ config('app.name', 'Admin') }}</title>
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-flash-1.6.2/b-html5-1.6.2/datatables.min.css"/>
    <link rel="stylesheet" href="{{asset('plugins/adminlte/dist/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        .card-header>.title {
            margin-bottom: 0 !important;
            text-transform: uppercase !important;
            font-size: 1rem !important;
            font-weight: 700 !important;
            letter-spacing: 2px !important;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        @include('admin.layout.include.navbar')
        @include('admin.layout.include.sidebar')
        @include('admin.layout.include.content')
        @include('admin.layout.include.footer')
    </div>

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-flash-1.6.2/b-html5-1.6.2/datatables.min.js"></script>
    <script src="{{asset('plugins/adminlte/dist/js/adminlte.min.js')}}"></script>
    @yield('script')
</body>
</html>