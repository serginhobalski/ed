@extends('layouts.user')

@section('styles')
@endsection

@section('content')
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Perfil do Usuário</h4>
            </div>
            <div class="widget-inner">
                <form method="POST" action="{{route('update_perfil', $user->id)}}" class="edit-profile m-b30">
                    @csrf
                    @method('PUT')
                    <div class="">
                        <div class="form-group row">
                            <div class="col-sm-10  ml-auto">
                                <h3>1. Dados do Perfil</h3>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-7">
                                <input name="name" class="form-control" type="text" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sobrenome</label>
                            <div class="col-sm-7">
                                <input name="surname" class="form-control" type="text" value="{{$user->surname}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome de usuário</label>
                            <div class="col-sm-7">
                                <input name="username" class="form-control" type="text" value="{{$user->username}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-7">
                                <input name="email" class="form-control" type="text" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-7">
                                <button type="submit" class="btn buttom-primary"><i class="fa-solid fa-floppy-disk"></i> Salvar mudança</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="seperator"></div>

                <form method="POST" action="{{url('', $detalhe->id)}}" class="edit-profile mb-30">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col-sm-10 ml-auto">
                            <h3>2. Endereço</h3>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telefone</label>
                        <div class="col-sm-7">
                            <input name="telefone" class="form-control" type="text" value="{{$detalhe->telefone}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Endereço</label>
                        <div class="col-sm-7">
                            <input name="endereco" class="form-control" type="text" value="{{$detalhe->endereco}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-7">
                            <button type="submit" class="btn buttom-primary"><i class="fa-solid fa-floppy-disk"></i> Salvar mudança</button>
                        </div>
                    </div>
                </form>

                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                <form method="POST" action="{{route('update_informacoes', $detalhe->id)}}" class="edit-profile m-b30">
                    @csrf
                    @method('PUT')

                        <div class="form-group row">
                            <div class="col-sm-10 ml-auto">
                                <h3 class="m-form__section">3. Informações</h3>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Profissão</label>
                            <div class="col-sm-7">
                                <input name="pai" class="form-control" type="text" value="{{$detalhe->profissao}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">BIO</label>
                            <div class="col-sm-7">
                                <span class="help">Resumo profissional.</span>
                                <textarea class="form-control" name="detalhes" id="detalhes" >{{$detalhe->bio}}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-7">
                            <button type="submit" class="btn buttom-primary"><i class="fa-solid fa-floppy-disk"></i> Salvar mudança</button>
                        </div>
                    </div>
                </form>

                <form method="POST" action="{{route('update_senha', $user->id)}}" class="edit-profile m-b30">
                    @csrf
                    @method('PUT')
                    <div class="">
                        <div class="form-group row">
                            <div class="col-sm-10 ml-auto">
                                <h3>4. Alterar Senha</h3>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nova Senha</label>
                            <div class="col-sm-7">
                                <input name="password" class="form-control" type="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Repetir nova senha</label>
                            <div class="col-sm-7">
                                <input  name="password-confirm" class="form-control" type="password" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-7">
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Salvar mudança</button>
                        </div>
                    </div>
                </form>
                <form method="POST" action="{{url('update_detalhes', $detalhe->id)}}" class="edit-profile m-b30">
                    @csrf
                    @method('PUT')
                    <div class="">
                        <div class="form-group row">
                            <div class="col-sm-10 ml-auto">
                                <h3>4. Detalhes Adicionais</h3>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-7">
                            <button type="submit" class="btn buttom-primary"><i class="fa-solid fa-floppy-disk"></i> Salvar mudança</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
</div>
<!-- Card END -->
<div class="row">
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Agenda</h4>
                <a href="{{url('criar_agenda')}}" class="btn buttom-primary">
                    Cadastrar Evento
                </a>
            </div>
            <div class="widget-inner">
                <div id="calendar"></div>
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
        events: "{{url('listar_agenda')}}"
      });

    });

</script>
@endsection
