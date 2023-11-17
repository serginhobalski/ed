<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="{{ url('/') }}" class="navbar-brand p-0">
        <img src="{{ asset('site/img/mini-logo.png') }}" alt="">
        {{-- <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1> --}}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ url('/') }}" class="nav-item nav-link {{ ($slug === 'home' ? 'active' : '') }}"><i class="fa-solid fa-house "></i></a>
            <a href="{{ url('sobre') }}" class="nav-item nav-link {{ ($slug === 'sobre' ? 'active' : '') }}"><i class="fa-solid fa-clipboard-user "></i> Sobre</a>
            <a href="{{ url('servicos') }}" class="nav-item nav-link" {{ ($slug === 'servicos' ? 'active' : '') }}><i class="fa-solid fa-briefcase "></i> Serviços</a>
            <a href="{{ url('precos') }}" class="nav-item nav-link" {{ ($slug === 'precos' ? 'active' : '') }}><i class="fa-solid fa-money-check-dollar"></i> Preços</a>
            <a href="{{ url('appp') }}" class="nav-item nav-link" {{ ($slug === 'app' ? 'active' : '') }}><i class="fa-solid fa-chalkboard-user"></i> App PsicoPed</a>
            <a href="{{ url('contato') }}" class="nav-item nav-link" {{ ($slug === 'contato' ? 'active' : '') }}><i class="fa-solid fa-envelope "></i> Contato</a>
        </div>
    </div>
</nav>
