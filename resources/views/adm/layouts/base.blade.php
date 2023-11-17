<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{env('APP_NAME')}} | <?= $titulo; ?></title>
    <!-- loader-->
    <link href="{{ asset('adm') }}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('adm') }}/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('adm') }}/assets/images/logo-ed.png" type="image/x-icon">

    @yield('estilo-calendario')

    <!-- Vector CSS
    <link href="{{ asset('adm') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />-->
    <!-- simplebar CSS-->
    <link href="{{ asset('adm') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('adm') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('adm') }}/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('adm') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('adm') }}/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('adm') }}/assets/css/app-style.css" rel="stylesheet" />
    <!-- Scripts 'resources/css/app.css', -->
    @vite(['resources/js/app.js'])
    @yield('estilos')

</head>

<body class="bg-theme bg-theme1">

    @yield('load-calendario')

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('admin.partials.menu_lateral')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('admin.partials.menu_topo')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">

            @yield('conteudo')

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                <?= date('Y') ?> © {{env('APP_NAME')}}
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Texturas</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradientes</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>-->
        <!--end color switcher-->

    </div>
    <!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('adm') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('adm') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('adm') }}/assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="{{ asset('adm') }}/assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="{{ asset('adm') }}/assets/js/sidebar-menu.js"></script>
    <!-- loader scripts
    <script src="{{ asset('adm') }}/assets/js/jquery.loading-indicator.js"></script> -->
    <!-- Custom scripts -->
    <script src="{{ asset('adm') }}/assets/js/app-script.js"></script>

    <!-- Chart js
    <script src="{{ asset('adm') }}/assets/plugins/Chart.js/Chart.min.js"></script>-->

    <!-- Index js
    <script src="{{ asset('adm') }}/assets/js/index.js"></script>-->

    @yield('scripts')


</body>

</html>
