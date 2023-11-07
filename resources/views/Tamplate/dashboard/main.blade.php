<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icon Tab -->
    <link href="{{ asset('favicon.png') }}" rel="shortcut icon" />

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

    <title>GANA - Game Asset Indonesia</title>
    @stack('vendorStyle')
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

    <script>
        $(document).ready(function() {
            $('.delete-asset').on('click', function() {
                var assetId = $(this).data('asset-id');
                $('#confirmDeleteButton').data('asset-id', assetId);
                $('#confirmDeleteModal').modal('show');
            });

            $('#confirmDeleteButton').on('click', function() {
                var assetId = $(this).data('asset-id');
                // Send a DELETE request to the route for asset deletion
                $.ajax({
                    url: '/assets/' + assetId + '/delete',
                    type: 'DELETE',
                    success: function(data) {
                        "Asset berhasil di hapus!"
                    },
                    error: function(err) {
                        "Asset gagal dihapus!"
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.delete-asset').on('click', function() {
                var assetId = $(this).data('asset-id');
                $('#confirmDeleteButtonMessage').data('asset-id', assetId);
                $('#confirmDeleteModalMessage').modal('show');
            });

            $('#confirmDeleteButtonMessage').on('click', function() {
                var assetId = $(this).data('asset-id');
                // Send a DELETE request to the route for message deletion
                $.ajax({
                    url: '/message/' + assetId + '/delete',
                    type: 'DELETE',
                    success: function(data) {
                        "Message berhasil dihapus!"
                    },
                    error: function(err) {
                        "Message gagal dihapus!"
                    }
                });
            });
        });
    </script>




    @stack('vendorScript')
</body>
@yield('scripts')

</html>
