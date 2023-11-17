<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') . ' | ' . $titulo }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ env('APP_NAME') }}" name="keywords">
    <meta content="{{ env('APP_NAME') }}" name="description">

    <!-- Favicon -->
    <link href="{{ asset('site') }}/img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('site') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('site') }}/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('site') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('site') }}/css/style.css" rel="stylesheet">

    <!-- Scripts 'resources/css/app.css', -->
    @vite(['resources/js/app.js'])
    {{-- Custom estilos --}}
    @yield('estilos')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{ env('APP_ADDRESS') }}</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{ env('APP_TEL') }}</small>
                    <small class="text-light"><i
                            class="fa fa-envelope-open me-2"></i>{{ env('APP_MAIL') }}</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <a class="nav-item nav-link btn btn-primary" href="{{ route('login') }}">
                                <i class="fa-solid fa-right-to-bracket"></i> {{ __('Logar no App') }} <i class="fa-solid fa-chalkboard-user"></i>
                            </a>
                            {{-- <a class="nav-item nav-link" href="#"></a>
                            <a class="nav-item nav-link btn btn-primary" href="{{ route('register') }}">
                                <i class="fa-solid fa-floppy-disk"></i> {{ __('Cadastrar') }}
                            </a> --}}
                        @endif
                        <div class="dropdown">
                            @else
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-circle-user"></i> {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    @if (Auth::user()->group === 'admin')
                                    <a class="dropdown-item" href="{{url('admin')}}">
                                        <i class="fa-solid fa-chalkboard-user"></i> Painel
                                    </a>
                                    @endif
                                    @if (Auth::user()->group === 'profissional')
                                    <a class="dropdown-item" href="{{url('prof')}}">
                                        <i class="fa-solid fa-chalkboard-user"></i> Painel
                                    </a>
                                    @endif
                                    @if (Auth::user()->group === 'cliente')
                                    <a class="dropdown-item" href="{{url('usuario')}}">
                                        <i class="fa-solid fa-chalkboard-user"></i> Painel
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{url('usuario/perfil')}}">
                                        <i class="fa-solid fa-address-card"></i> Perfil
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            @endguest
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        @include('site.partials.nav')

        @yield('header')
    </div>
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Pesquisar">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    @yield('conteudo')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-12 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="{{ url('/') }}" class="navbar-brand">
                            <img src="{{ asset('site/img/estimular.png') }}" alt="" width="200px">
                            {{-- <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1> --}}
                        </a>
                        <p class="mt-3 mb-4"></p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-8 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Entre em Contato</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Trav. Humaitá, 942, Ap 803, Pedreira - Belém / PA</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">contato@estimulardigital.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">(91) 99188-2198</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0"><?php echo date('Y'); ?> &copy; <a class="text-white border-bottom"
                                href="#">{{ env('APP_NAME') }}</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{asset('fontawesome/js/all.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('site') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('site') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('site') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('site') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('site') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('site') }}/js/main.js"></script>

    {{-- Custom Scripts --}}
    @yield('scripts')
</body>

</html>
