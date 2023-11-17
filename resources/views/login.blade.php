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
    <meta name="description" content="{{ env('APP_NAME') }}" />
    <!-- OG -->
    <meta property="og:title" content="{{ env('APP_NAME') }}" />
    <meta property="og:description" content="{{ env('APP_NAME') }}" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">
    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="{{ asset('logo-app.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo-app.png') }}" />
    <!-- PAGE TITLE HERE ============================================= -->
    <title>{{ env('APP_NAME') }} </title>
    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src') }}/assets/css/assets.css">
    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src') }}/assets/css/typography.css">
    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src') }}/assets/css/shortcodes/shortcodes.css">
    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src') }}/assets/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('src') }}/assets/css/color/color-1.css">

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <div class="account-form">
            <div class="account-head" style="background-image:url({{asset('src/assets/images/background/bg2.jpg')}});">
                <a href="{{url('/')}}"><img src="{{ asset('src') }}/assets/images/logo-white.png" alt=""></a>
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="heading-bx left">
                        <h2 class="title-head">Faça seu <span>Login</span></h2>
                        <p>Não possui cadastro? <a href="{{url('register')}}">Cadastre-se aqui</a></p>
                    </div>
                    <form method="POST" action="{{route('login')}}" class="contact-bx">
                        @csrf
                        <div class="row placeani">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Seu e-mail ou login</label>
                                        <input name="email" type="text" required="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Sua senha</label>
                                        <input name="senha" type="password" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group form-forget">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                            id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Lembrar</label>
                                    </div>
                                    <a href="#" class="ml-auto">Esqueceu sua senha?</a>
                                </div>
                            </div>
                            <div class="col-lg-12 m-b30">
                                <button name="submit" type="submit" value="Submit"
                                    class="btn button-md">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
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
    <script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>
