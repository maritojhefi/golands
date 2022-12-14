<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('april/distri/images/logo.png') }}" />
    <title>Golands</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500">
    <link rel="stylesheet" href="{{ asset('dashboard/css/vendor/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/metismenu/dist/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/switchery-npm/index.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dashboard/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/icons/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/icons/dripicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/icons/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/common/main.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/layouts/vertical/core/main.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/layouts/vertical/menu-type/content.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/layouts/vertical/themes/theme-c.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('dashboard/vendor/jquery/dist/jquery.min.js') }}"></script>
    @stack('header')

    <style>
        .card {
            border-radius: 15px;
        }
        
    </style>
</head>

<body class="content-menu  ">
    <div id="">
        <!-- TOP TOOLBAR WRAPPER -->
        @include('partials.navmobile')
        @include('partials.nav')
        <!-- END TOP TOOLBAR WRAPPER -->
        <div class="content-wrapper">
            <!-- MENU SIDEBAR WRAPPER -->
            @include('partials.sidebar')
            <div class="content container-fluid">
                @include('partials.session-flash-status')
                @include('partials.validation-error')
                @yield('content')
            </div>
            <!-- SIDEBAR QUICK PANNEL WRAPPER -->
            <aside class="sidebar sidebar-right">
                <div class="sidebar-content">
                    <div class="tab-panel m-b-30" id="sidebar-tabs">
                    </div>
                </div>
            </aside>
        </div>
    </div>
    @yield('modals')
    <script src="{{ asset('dashboard/vendor/modernizr/modernizr.custom.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/js-storage/js.storage.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/js-cookie/src/js.cookie.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/pace/pace.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/metismenu/dist/metisMenu.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/switchery-npm/index.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}">
    </script>
    <script src="{{ asset('dashboard/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/global/app.js') }}"></script>
    <script src="{{ asset('dashboard/js/components/vertical-wizard-init.js') }}"></script>
    @stack('footer')
</body>

</html>
