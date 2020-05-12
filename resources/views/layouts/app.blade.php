<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekap Surat @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('assets/pcc_icon.ico') }}" type="image/x-icon">

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')

</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('layouts.navbar')

        @include('layouts.sidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('layouts.footer')

    </div>

    @stack('before-script')

    @include('includes.script')

    @stack('after-script')

</body>
</html>
