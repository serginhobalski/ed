<!-- Painéis -->
<li>
    <a href="" class="ttr-material-button">
        <span class="ttr-icon"><i class="fa-solid fa-display"></i></span>
        <span class="ttr-label">Painéis</span>
        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
    </a>
    <ul>
        <li>
            <a href="{{url('admin')}}" class="ttr-material-button">
                <span class="ttr-label">
                    <i class="fa-solid fa-user-gear"></i> Admin
                </span>
            </a>
        </li>
        <li>
            <a href="{{url('prof')}}" class="ttr-material-button">
                <span class="ttr-label">
                    <i class="fa-solid fa-user-tie"></i> Profissional
                </span>
            </a>
        </li>
        <li>
            <a href="{{url(('usuario'))}}" class="ttr-material-button">
                <span class="ttr-label">
                    <i class="fa-solid fa-user-graduate"></i> Cliente
                </span>
            </a>
        </li>
    </ul>
</li>
<!-- Gerenciar -->
<li>
    <a href="" class="ttr-material-button">
        <span class="ttr-icon"><i class="ti-panel"></i></span>
        <span class="ttr-label">Gerenciar</span>
        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
    </a>
    <ul>
        <li>
            <a href="{{url('adm/usuarios')}}" class="ttr-material-button">
                <span class="ttr-label">
                    <i class="fa fa-users"></i> Usuários
                </span>
            </a>
        </li>
        <li>
            <a href="{{url('adm/agendas')}}" class="ttr-material-button">
                <span class="ttr-label">
                    <span class="ttr-label">Agendas</span>
                </span>
            </a>
        </li>
    </ul>
</li>
<!-- Clientes -->
<li>
    <a href="{{url('adm/clientes')}}" class="ttr-material-button">
        <span class="ttr-icon"><i class="fa fa-users"></i></span>
        <span class="ttr-label">Clientes</span>
    </a>
</li>
<!-- Atendimentos -->
<li>
    <a href="{{url('adm/atendimentos')}}" class="ttr-material-button">
        <span class="ttr-icon"><i class="fa-solid fa-id-card"></i></span>
        <span class="ttr-label">Atendimentos</span>
    </a>
</li>
<!-- Agenda -->
<li>
    <a href="{{url('adm/agenda')}}" class="ttr-material-button">
        <span class="ttr-icon"><i class="fa-solid fa-calendar-days"></i></span>
        <span class="ttr-label">Agenda</span>
    </a>
</li>
<!-- Financeiro -->
<li>
    <a href="{{url('adm/financeiro')}}" class="ttr-material-button">
        <span class="ttr-icon"><i class="fa-solid fa-cash-register"></i></span>
        <span class="ttr-label">Financeiro</span>
    </a>
</li>

