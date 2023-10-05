<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{ asset('dist/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('dist/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('dist/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{ asset('dist/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/header-colors.css') }}" rel="stylesheet" />

    <title>Fobia - Bootstrap5 Admin Template</title>
</head>

<body>


    {{-- Content --}}

    @yield('content_dashboard')


    <!-- JS Files-->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('dist/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap2.bundle.min.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="{{ asset('dist/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }} "></script>
    <script src="{{ asset('dist/plugins/apexcharts-bundle/js/apexcharts.min.js') }} "></script>
    <script src="{{ asset('dist/plugins/easyPieChart/jquery.easypiechart.js') }} "></script>
    <script src="{{ asset('dist/plugins/chartjs/chart.min.js') }} "></script>
    <script src="{{ asset('dist/js/index.js') }} "></script>
    <!-- Main JS-->
    <script src="{{ asset('dist/js/main2.js') }}"></script>


</body>

</html>