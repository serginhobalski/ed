<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<!-- DESCRIPTION -->
	<meta name="description" content="{{ config('app.name') . ' | ' . $titulo }}" />
	<!-- OG -->
	<meta property="og:title" content="{{ env('APP_NAME') }}" />
	<meta property="og:description" content="{{ env('APP_NAME') }}" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('src') }}/logo-app.png" />
	<!-- PAGE TITLE HERE ============================================= -->
	<title>{{ env('APP_NAME') . ' | ' . $titulo }} </title>
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('src/admin')}}/assets/css/assets.css">
    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('src/admin')}}/assets/css/typography.css">
    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('src/admin')}}/assets/css/shortcodes/shortcodes.css">
    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('src/admin')}}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('src/admin')}}/assets/css/dashboard.css">
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset('src/admin')}}/assets/css/color/color-1.css">
    <!-- Font Awesome Style -->
    <link rel="stylesheet" href="{{asset('src/fontawesome/css/all.css')}}" >
    <script src="{{asset('src/fontawesome/js/all.js')}}"></script>
    <!-- FullCalendar -->
    <script src="{{asset('src/')}}/assets/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('src/assets/vendors/calendar/fullcalendar.css')}}">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Styles -->
    @yield('calendar')
    @livewireStyles
    @yield('styles')

</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">

	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="{{ url("adm") }}" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="{{ asset('logo-app.png') }}" width="30" height="30">
						<img class="ttr-logo-desktop" alt="" src="{{ asset('src') }}/assets/images/logo-white.png" width="160" height="27">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation"></ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
						<div class="ttr-header-submenu noti-menu">
							<div class="ttr-notify-header">
								<span class="ttr-notify-text-top"></span>
								<span class="ttr-notify-text">Notificações</span>
							</div>
							<div class="noti-box-list">
								<ul>
									<li>
										<span class="notification-icon dashbg-gray">
											<i class="fa fa-check"></i>
										</span>
										<span class="notification-text">
											<span>Notificação</span> Esta é uma notificação de exemplo...
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 02:14</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">
                            <span class="ttr-user-avatar">
                                <img title="{{Auth::user()->name}}" src="{{ asset('src') }}/assets/images/avatar.png" width="32" height="32">
                            </span>
                        </a>
						<div class="ttr-header-submenu">
							<ul>
                                <li class="text-center"><strong>{{Auth::user()->name}}</strong></li>
                                <hr>
								<li>
                                    <a href="{{url('usuario/perfil')}}">
                                        <i class="fa fa-address-card"></i> Meu perfil <br>
                                    </a>
                                </li>
								<li>
                                    <a href="{{url('usurio/mensagens')}}">
                                        <i class="fa fa-envelope"></i> Mensagens
                                    </a>
                                </li>
								<li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Sair
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="Pesquisar..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="#"><img alt="" src="{{ asset('src') }}/assets/images/logo.png" width="122" height="27"></a>
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
                    @if (Auth::user()->group == 'admin')
                        @include('components.sidebar-adm')
                    @endif
                    @if (Auth::user()->group == 'profissional')
                        @include('components.sidebar-prof')
                    @endif
                    @if (Auth::user()->group == 'cliente')
                        @include('components.sidebar-default')
                    @endif
		            <li class="ttr-seperate"></li>
                    <!-- Mensagens -->
                    <li>
                        <a href="" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-email"></i></span>
                            <span class="ttr-label">Mensagens</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="#" class="ttr-material-button">
                                    <span class="ttr-label">
                                        Recebidas
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
						<a href="{{url('perfil')}}" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-user-circle"></i></span>
		                	<span class="ttr-label">Meu Perfil</span>
		                </a>
		            </li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title"> {{ strtoupper(implode(' ', explode('-', $slug))) }} </h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i></a></li>
					<li> {{ $titulo }} </li>
				</ul>
			</div>

            @include('components.flash-message')
            @yield('content')

		</div>
	</main>
	<div class="ttr-overlay"></div>

    {{-- <script src="{{asset('src/')}}/assets/jquery.min.js"></script> --}}
    <script src="{{asset('src/admin')}}/assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/counter/waypoints-min.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/counter/counterup.min.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/masonry/masonry.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/masonry/filter.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src='{{asset('src/admin')}}/assets/vendors/scroll/scrollbar.min.js'></script>
    <script src="{{asset('src/admin')}}/assets/js/functions.js"></script>
    <script src="{{asset('src/admin')}}/assets/vendors/chart/chart.min.js"></script>
    <script src="{{asset('src/admin')}}/assets/js/admin.js"></script>
    <script src="{{asset('src/assets/vendors/fullcalendar/lib/moment.min.js')}}"></script>
    <script src="{{asset('src/assets/vendors/fullcalendar/fullcalendar.js')}}"></script>
    <script src="{{asset('src/assets/vendors/fullcalendar/locale/pt-br.js')}}"></script>
    <script src="{{asset('src/assets/vendors/switcher/switcher.js')}}"></script>
    <!-- Font Awesome Script -->
    <script src="https://kit.fontawesome.com/33b01659b8.js" crossorigin="anonymous"></script>
    <!-- Render custom scripts -->
    <script src="{{asset('scripts.js')}}"></script>

    @stack('modals')

    @livewireScripts

    @yield('scripts')

    <script>
        $(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
            });
        })

        $('.alert').alert();
    </script>
    <script>
        horaAtual = setInterval(() => {
            document.getElementById('hora-atual').innerHTML = '<i class="fa-solid fa-clock"></i> ' + new Date().toLocaleString();
        }, 1000);
    </script>

</body>

</html>
