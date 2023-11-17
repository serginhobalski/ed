{{-- @extends('layouts.user') --}}
@extends('layouts.admin')

@section('styles')
@endsection

{{-- @section('content') --}}
@section('conteudo')
<div class="container-fluid">

    <!-- Card -->
    <div class="row">
        <div class="col-12">
            <div class="widget-card widget-bg1 text-white">
                <h3> {{$titulo}} </h3>
            </div>
        </div>
    </div>
    <!-- Card END -->
    <div class="row">
        <div class="col-lg-12 m-b30">
            <div class="widget-box">
                <form method="POST" action="{{route('usuarios.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-30">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Nome">
                            </div>
                        </div>
                        <div class="col-md-6 mb-30">
                            <div class="form-group">
                                <label for="surname">Sobrenome</label>
                                <input name="surname" type="text" class="form-control" id="surname" placeholder="Sobrenome">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-30">
                            <div class="form-group">
                                <label for="username">Nome de usuário</label>
                                <input name="username" type="text" class="form-control" id="username" placeholder="Nome de usuário">
                            </div>
                        </div>
                        <div class="col-md-6 mb-30">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-30">
                            <div class="form-group">
                                <label for="group">Grupo</label>
                                <select name="group" id="group" class="form-control">
                                    <option value="">Selecionar...</option>
                                    <option value="cliente">Cliente</option>
                                    <option value="profissional">Profissional</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-30">
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Senha">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn button-secondary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
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
        events: "{{url('usuarios')}}"
      });

    });

  </script>
@endsection
