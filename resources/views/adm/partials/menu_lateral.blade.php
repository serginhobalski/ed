<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{url('adm/painel')}}">
            <img src="{{ asset('adm') }}/assets/images/logo-ed.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Estimular Digital</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MENU</li>
        <li>
            <a href="{{url('adm/painel')}}">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Painel</span>
            </a>
        </li>


        <li>
            <a href="{{url('/')}}">
                <i class="zmdi zmdi-home"></i> <span>Site</span>
            </a>
        </li>


        <li>
            <a href="{{url('adm/usuarios')}}">
                <i class="fa-solid fa-users-rectangle"></i> <span>Usuários</span>
            </a>
        </li>

        <li>
            <a href="{{url('adm/contatos')}}">
                <i class="fa-solid fa-envelope"></i> <span>Contatos</span>
            </a>
        </li>


        <li>
            <a href="{{url('adm/agenda')}}">
                <i class="zmdi zmdi-calendar-check"></i> <span>Agenda</span>
                <small class="badge float-right badge-light">Novo</small>
            </a>
        </li>

        <li>
            <a href="{{url('adm/perfil')}}">
                <i class="fa-solid fa-clipboard-user"></i> <span>Perfil</span>
            </a>
        </li>

        <li>
            <a href="{{url('adm/login')}}" target="_blank">
                <i class="zmdi zmdi-lock"></i> <span>Login</span>
            </a>
        </li>

        <li>
            <a href="{{url('adm/cadastrar')}}" target="_blank">
                <i class="zmdi zmdi-account-circle"></i> <span>Cadastrar</span>
            </a>
        </li>

    </ul>

</div>
