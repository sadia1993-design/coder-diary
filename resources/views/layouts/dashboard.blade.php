<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('admin/img/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
	<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>Coder Diary</title>

    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
        }

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- toaster --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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


    {{-- ckeditor --}}
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    @yield('scripts')
    <script>
        $(document).ready(function() {
                CKEDITOR.replace( 'ckEditor' );
        })
    </script>
    <!-- end script -->

</body>

</html>
