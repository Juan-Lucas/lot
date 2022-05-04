<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>ADMIN - @yield('title') </title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/admin/bundles/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/bundles/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/bundles/datatables/datatables.min.css') }}">
      <link rel="stylesheet" href="{{  asset('/assets/admin/bundles/prism/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/bundles/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/assets/admin/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('/assets/admin/img/favicon.ico') }}' />
</head>

<body>
     <div class="loader"></div>

    @yield('content')

    <!-- General JS Scripts -->
    <script src="{{ asset('/assets/admin/js/app.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/bundles/prism/prism.js') }}"></script>
    <script src="{{ asset('/assets/admin/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/bundles/datatables/export-tables/jszip.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/bundles/datatables/export-tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/assets/admin/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/page/datatables.js') }}"></script>
     <script src="{{ asset('/assets/admin/bundles/summernote/summernote-bs4.js') }}"></script>
     <script src="{{ asset('/assets/admin/bundles/codemirror/lib/codemirror.js') }}"></script>
     <script src="{{ asset('/assets/admin/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('/assets/admin/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('/assets/admin/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('/assets/admin/js/custom.js') }}"></script>

    @livewireScripts
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
