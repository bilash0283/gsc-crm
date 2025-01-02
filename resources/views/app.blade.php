<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />

        <!-- Fonts -->
{{--        <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />--}}
        <link rel="shortcut icon" href="{{ asset('/') }}assets/backend/images/favicon.ico">

{{--        <!-- Bootstrap Css -->--}}
{{--        <link href="{{ asset('/') }}assets/backend/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />--}}
{{--        <!-- Icons Css -->--}}
{{--        <link href="{{ asset('/') }}assets/backend/css/icons.min.css" rel="stylesheet" type="text/css" />--}}
{{--        <!-- App Css-->--}}
{{--        <link href="{{ asset('/') }}assets/backend/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />--}}
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
        @inertiaHead

    </head>
    <body data-sidebar="dark" data-layout-mode="dark">
        @inertia

{{--        <script src="{{ asset('/') }}assets/backend/libs/jquery/jquery.min.js"></script>--}}
{{--        <script src="{{ asset('/') }}assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--        <script src="{{ asset('/') }}assets/backend/libs/metismenu/metisMenu.min.js"></script>--}}
{{--        <script src="{{ asset('/') }}assets/backend/libs/simplebar/simplebar.min.js"></script>--}}
{{--        <script src="{{ asset('/') }}assets/backend/libs/node-waves/waves.min.js"></script>--}}

{{--        <!-- apexcharts -->--}}
{{--        <script src="{{ asset('/') }}assets/backend/libs/apexcharts/apexcharts.min.js"></script>--}}

{{--        <!-- dashboard init -->--}}
{{--        <script src="{{ asset('/') }}assets/backend/js/pages/dashboard.init.js"></script>--}}

{{--        <!-- App js -->--}}
{{--        <script src="{{ asset('/') }}assets/backend/js/app.js"></script>--}}
    </body>
</html>
