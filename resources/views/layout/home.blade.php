<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Viewing Menus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="Gbv0TEV18QqGKgUd4ZxK3zVAgw9Q386crSoNfKiU" />
    <meta name="assets-path" content="http://localhost/nfdc-admin/public/admin/voyager-assets" />

    <!-- Google Fonts
    
    
    -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://localhost/nfdc-admin/public/admin/voyager-assets?path=images%2Flogo-icon.png"
        type="image/png">



    <!-- App CSS -->

    <link rel="stylesheet" href="{{ asset('css/boostrap.css') }}">

    <!-- Few Dynamic Styles -->
    <style type="text/css">
        @font-face {
            font-family: voyager;
            font-style: normal;
            font-weight: 400;
            src: url({{ asset('fonts/voyager.eot') }});
            src: url({{ asset('fonts/voyager.eot') }}?#iefix) format("embedded-opentype"),
                url({{ asset('fonts/voyager.woff') }}) format("woff"),
                url({{ asset('fonts/voyager.ttf') }}) format("truetype"),
                url({{ asset('fonts/voyager.svg#voyager') }}) format("svg");
        }
    </style>


</head>

<body class="voyager menus">

    <div id="voyager-loader">
        <img src="{{ asset('img/loader.png') }}" alt="nfdc Loader">
    </div>


    <div class="app-container">
        <div class="fadetoblack visible-xs"></div>
        <div class="row content-container">
            <div class="row">
                @include('partials/header')
            </div>
            <!-- Main Content -->

            @include('partials/sidebar')

            <div class="content">
                <div class="row">
                    @yield('content')
                </div>
            </div>
            @include('partials/footer')

        </div>
    </div>


    <!-- Javascript Libs -->


    <script type="text/javascript" src="http://localhost/nfdc-admin/public/admin/voyager-assets?path=js%2Fapp.js"></script>


    <style>
        .dd-placeholder {
            flex: 1;
            width: 100%;
            min-width: 200px;
            max-width: 250px;
        }
    </style>
    <!-- DataTables -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "order": [],
                "language": {
                    "sEmptyTable": "No data available in table",
                    "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
                    "sInfoEmpty": "Showing 0 to 0 of 0 entries",
                    "sInfoFiltered": "(filtered from _MAX_ total entries)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ",",
                    "sLengthMenu": "Show _MENU_ entries",
                    "sLoadingRecords": "Loading...",
                    "sProcessing": "Processing...",
                    "sSearch": "Search:",
                    "sZeroRecords": "No matching records found",
                    "oPaginate": {
                        "sFirst": "First",
                        "sLast": "Last",
                        "sNext": "Next",
                        "sPrevious": "Previous"
                    },
                    "oAria": {
                        "sSortAscending": ": activate to sort column ascending",
                        "sSortDescending": ": activate to sort column descending"
                    }
                },
                "columnDefs": [{
                    "targets": -1,
                    "searchable": false,
                    "orderable": false
                }]
            });
        });
    </script>

</body>

</html>
