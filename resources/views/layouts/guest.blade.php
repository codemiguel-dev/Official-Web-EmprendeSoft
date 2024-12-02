<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Iniciar Sesión</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- loader-->
    <link href="{{ asset('dashboard_theme/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('dashboard_theme/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{ asset('dashboard_theme/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{ asset('dashboard_theme/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('dashboard_theme/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('dashboard_theme/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('dashboard_theme/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('dashboard_theme/css/sidebar-menu.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="{{ asset('dashboard_theme/css/app-style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="bg-theme bg-theme1">
    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>

    <div id="wrapper">
        {{ $slot }}
    </div>

    <script src="{{ asset('dashboard_theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard_theme/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard_theme/js/bootstrap.min.js') }}"></script>

    <!-- simplebar js -->
    <script src="{{ asset('dashboard_theme/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ asset('dashboard_theme/js/sidebar-menu.js') }}"></script>
    <!-- loader scripts -->
    <script src="{{ asset('dashboard_theme/js/jquery.loading-indicator.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('dashboard_theme/js/app-script.js') }}"></script>
    <!-- Chart js -->

    <script src="{{ asset('dashboard_theme/plugins/Chart.js/Chart.min.js') }}"></script>

    <!-- Index js -->
    <script src="{{ asset('dashboard_theme/js/index.js') }}"></script>
    @livewireScripts
</body>

</html>
