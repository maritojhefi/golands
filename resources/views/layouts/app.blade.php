<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles QuantumPro-->
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
    <style>
        #snackbar {
            visibility: hidden;
            /* Hidden by default. Visible on click */
            min-width: 250px;
            /* Set a default minimum width */
            margin-left: -125px;
            /* Divide value of min-width by 2 */
            background-color: #333;
            /* Black background color */
            color: #fff;
            /* White text color */
            text-align: center;
            /* Centered text */
            border-radius: 2px;
            /* Rounded borders */
            padding: 16px;
            /* Padding */
            position: fixed;
            /* Sit on top of the screen */
            z-index: 1;
            /* Add a z-index if needed */
            left: 50%;
            /* Center the snackbar */
            bottom: 30px;
            /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #snackbar.show {
            visibility: visible;
            /* Show the snackbar */
            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
      However, delay the fade out process for 2.5 seconds */
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }

        }

        .text-small {
            font-size: 12px;
            font-weight: bold;
        }

        a.disabled {
            pointer-events: none;
            cursor: default;
        }
    </style>
    
    <style>
        .main-content {
            transition: all 350ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
        }

        .navbar-brand-box {
            transition: all 350ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
            height: 70px;
        }

        .vertical-menu {
            transition: all 350ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
        }

        .text-rotate {
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .text-rotate .span-text {
            display: inline-block;
            font-family: "Montserrat", sans-serif;
            text-transform: uppercase;
            font-size: 20px;
            font-weight: 700;
            color: #fff;
        }

        .text-rotate:hover .span-text {
            animation: text-rotate 2s ease forwards 1;
        }

        .text-rotate:hover .span-text:nth-child(2) {
            animation-delay: 0.1s;
        }

        .text-rotate:hover .span-text:nth-child(3) {
            animation-delay: 0.2s;
        }

        .text-rotate:hover .span-text:nth-child(4) {
            animation-delay: 0.3s;
        }

        .text-rotate:hover .span-text:nth-child(5) {
            animation-delay: 0.4s;
        }

        .text-rotate:hover .span-text:nth-child(6) {
            animation-delay: 0.5s;
        }

        .text-rotate:hover .span-text:nth-child(7) {
            animation-delay: 0.6s;
        }

        @keyframes text-rotate {
            from {
                transform: rotateY(0deg);
            }

            to {
                transform: rotateY(360deg);
            }
        }
        .card{
            border-radius: 20px;
        }
        .card-bordered {
            border-radius: 20px;
        }
        .stage-card {
            border-radius: 20px;
        }
        .modal-content {
            border-radius: 20px;
        }
        @media (max-width: 991px){
            .navbar-brand-box {
                border-bottom-left-radius: 20px;
            }
            body.sidebar-enable .navbar-brand-box {
                border-bottom-left-radius: 0px;
                transition: none;
            }
            #page-topbar {
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
            }
            body.sidebar-enable #page-topbar {
                border-bottom-left-radius: 0px;
            }
        }
        @media (max-width: 992px){
            body.sidebar-enable .vertical-menu {
                border-top-right-radius: 20px;
                border-bottom-right-radius: 20px;
            }
            
            
        }
        body.vertical-collpsed .styledrop-set {
            position: fixed!important;
            right: calc(5% + 100%)!important;
            top: 135px;
        }
        body.vertical-collpsed .styledrop-user {
            position: fixed!important;
            right: calc(5% + 100%)!important;
            top: 22.2rem;;
        }
        body.vertical-collpsed .styledrop-faq {
            position: fixed!important;
            right: calc(5% + 100%)!important;
            top: 32.5rem;
        }
    </style>

</head>


























<body class="peace done">
    <div id="app">
        
            @yield('content')
    </div>
    <!-- Scripts QuantumPro-->
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

</body>

</html>
