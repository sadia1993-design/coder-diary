<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('admin/img/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <title>Coder Diary</title>
</head>

<body class="bg-gray-100">

    <!-- start navbar -->
       @include('admin.components.navigation')
    <!-- end navbar -->

    <div class="h-screen flex flex-row flex-wrap">

          <!-- start sidebar -->
        @include('admin.components.sidebar')
          <!-- end sidbar -->

        <!-- strat content -->
        @yield('content')
        <!-- End content -->


    </div>


    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <!-- end script -->

</body>
</html>
