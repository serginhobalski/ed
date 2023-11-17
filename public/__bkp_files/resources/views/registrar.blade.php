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
                        <h2 class="title-head">Faça seu <span>Registro</span></h2>
                        <p>Já possui login? <a href="{{url('login')}}">Entre Aqui</a></p>
                    </div>
                    <form method="POST" action="{{route('register')}}" class="contact-bx">
                        @csrf
                        <div class="row placeani">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Nome</label>
                                        <input id="name" name="name" type="text" required class="form-control" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Sobrenome</label>
                                        <input id="surname" name="surname" type="text" class="form-control" value="{{ old('surname') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Nome de usuário</label>
                                        <input id="username" name="username" type="text" class="form-control" value="{{ old('username') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Cadastro</label>
                                        <input id="group" name="group" type="text" required class="form-control plaintext" value="cliente" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>E-mail</label>
                                        <input id="email" name="email" type="email" required class="form-control" value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Senha</label>
                                        <input id="password" name="password" type="password" class="form-control" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Confirmação de Senha</label>
                                        <input id="password-confirm" name="password-confirmation" type="password" class="form-control" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 m-b30">
                                <button name="submit" type="submit" value="Cadastrar" class="btn button-md">Cadastrar</button>
                            </div>
                            <div class="col-lg-12">
                                <h6>Cadastro com rede social</h6>
                                <div class="d-flex">
                                    <a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
                                    <a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google</a>
                                </div>
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
