<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <!-- DESCRIPTION -->
    <meta name="description" content="App PsicoPed" />
    <!-- OG -->
    <meta property="og:title" content="App PsicoPed" />
    <meta property="og:description" content="App PsicoPed" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">
    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="{{ asset('logo-app.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo-app.png') }}" />
    <!-- PAGE TITLE HERE ============================================= -->
    <title>App PsicoPed | {{ $titulo }} </title>
    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src') }}/assets/css/assets.css">
    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src') }}/assets/css/typography.css">
    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src') }}/assets/css/shortcodes/shortcodes.css">
    <!-- Font Awesome Style -->
    <link rel="stylesheet" href="{{asset('src/fontawesome/css/all.css')}}" >
    <script src="{{asset('src/fontawesome/js/all.js')}}"></script>
    <!-- Multi-Step-Form -->
    <link rel="stylesheet" href="{{asset('multi-step-form/style-guest.css')}}" >
    <script src="{{asset('multi-step-form/script.js')}}"></script>
    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src') }}/assets/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('src') }}/assets/css/color/color-1.css">
    @yield('styles')

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <div class="account-form">
            <div class="account-head" style="background-image:url({{asset('src/assets/images/background/bg2.jpg')}});">
                <a href="{{url('/')}}"><img src="{{ asset('src') }}/assets/images/logo-white.png" alt=""></a>
            </div>
            <div class="account-form-inner">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- External JavaScripts -->
    <script src="{{ asset('src') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/counter/waypoints-min.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/counter/counterup.min.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/masonry/masonry.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/masonry/filter.js"></script>
    <script src="{{ asset('src') }}/assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="{{ asset('src') }}/assets/js/functions.js"></script>
    <script src="{{ asset('src') }}/assets/js/contact.js"></script>
</body>

</html>
