@extends('layouts.admin')

@section('estilos')
@endsection

@section('conteudo')
<div class="container-fluid">

    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">Usuários Cadastrados
                    <div class="card-action">
                        <a class="btn btn-primary" href="{{route('usuarios.create')}}">
                            <i class="fa fa-save"></i> Cadastrar Novo Usuário
                        </a>
                        {{-- <div class="dropdown">
                            <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                data-toggle="dropdown">
                                <i class="icon-options"></i> Gerenciar
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{route('usuarios.create')}}">
                                    <i class="fa fa-save"></i> Cadastrar Novo Usuário
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush table-borderless">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Cadastro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($usuarios->count() === 0)
                                <tr>
                                    <td colspan="3" class="text-center">Nenhum usuário cadastrado...</td>
                                </tr>
                            @else
                                @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>
                                        <a href="{{url('usuario/'. $usuario->id)}}">
                                            {{$usuario->name}}
                                        </a>
                                    </td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ date('d/m/Y - H:i', strtotime($usuario->created_at)) }}</td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
    <!--end overlay-->

</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {

      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        // defaultDate: '2019-03-12',
        navLinks: true, // can click day/week names to navigate views

        weekNumbers: true,
        weekNumbersWithinDays: true,
        weekNumberCalculation: 'ISO',

        editable: true,
        eventLimit: true, // allow "more" link when too many events
        // events: [
        //   {
        //     title: 'Evento de dia inteiro',
        //     start: '2023-11-01'
        //   },
        //   {
        //     title: 'Evento longo',
        //     start: '2023-11-07',
        //     end: '2023-11-10'
        //   },
        //   {
        //     id: 999,
        //     title: 'Evento Repetido',
        //     start: '2023-11-09T16:00:00'
        //   },
        //   {
        //     id: 999,
        //     title: 'Evento Repetido',
        //     start: '2023-11-16T16:00:00'
        //   },
        //   {
        //     title: 'Conferência',
        //     start: '2023-11-11',
        //     end: '2023-11-13'
        //   },
        //   {
        //     title: 'Reunião',
        //     start: '2023-11-12T10:30:00',
        //     end: '2023-11-12T12:30:00'
        //   },
        //   {
        //     title: 'Almoço',
        //     start: '2023-11-12T12:00:00'
        //   },
        //   {
        //     title: 'Reunião',
        //     start: '2023-11-12T14:30:00'
        //   },
        //   {
        //     title: 'Happy Hour',
        //     start: '2023-11-12T17:30:00'
        //   },
        //   {
        //     title: 'Jantar',
        //     start: '2023-11-12T20:00:00'
        //   },
        //   {
        //     title: 'Aniversário da mana!',
        //     start: '2023-11-06'
        //   },
        //   {
        //     title: 'Acessar link (Google)',
        //     description: 'Este é um exemplo de evento com acesso via link externo!',
        //     url: 'http://google.com/',
        //     start: '2023-11-28'
        //   }
        // ]
        events: "{{url('listar_agenda')}}"
      });

    });

</script>
@endsection
