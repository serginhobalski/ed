@extends('layouts.user')

@section('styles')
@endsection

@section('content')
<!-- Card -->
<div class="row">
    <div class="col-12">
        <div class="widget-card widget-bg1 text-white">
            <h2> {{ strtoupper($titulo) }} </h2>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg1">
            <div class="wc-item">
                <h4 class="wc-title">
                    Evetos
                </h4>
                <span class="wc-des">
                    Agendamentos do mês
                </span>
                <span class="wc-stats">
                    <span class="counter">0</span>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        ---
                    </span>
                    <span class="wc-number ml-auto">
                        ---
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg2">
            <div class="wc-item">
                <h4 class="wc-title">
                     Clientes
                </h4>
                <span class="wc-des">
                    Total de clientes
                </span>
                <span class="wc-stats counter">
                    0
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg4">
            <div class="wc-item">
                <h4 class="wc-title">
                    Entrada
                </h4>
                <span class="wc-des">
                    Valores recebidos
                </span>
                <span class="wc-stats">
                   R$ <span class="counter">0</span>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg3">
            <div class="wc-item">
                <h4 class="wc-title">
                    Despesas
                </h4>
                <span class="wc-des">
                    Saídas
                </span>
                <span class="wc-stats">
                    R$ <span class="counter">0</span>
                 </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Card END -->
<div class="row">

    <div class="col-lg-6 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Novos Clientes</h4>
            </div>
            <div class="widget-inner">
                <div class="new-user-list">
                    <ul>
                        <li>
                            <span class="new-users-pic">
                                <img src="{{ asset('src') }}/assets/images/testimonials/pic1.jpg" alt=""/>
                            </span>
                            <span class="new-users-text">
                                <a href="#" class="new-users-name">Anna Strong </a>
                                <span class="new-users-info">Visual Designer,Google Inc </span>
                            </span>
                            <span class="new-users-btn">
                                <a href="#" class="btn button-sm outline">Seguir</a>
                            </span>
                        </li>
                        <li>
                            <span class="new-users-pic">
                                <img src="{{ asset('src') }}/assets/images/testimonials/pic2.jpg" alt=""/>
                            </span>
                            <span class="new-users-text">
                                <a href="#" class="new-users-name"> Milano Esco </a>
                                <span class="new-users-info">Product Designer, Apple Inc </span>
                            </span>
                            <span class="new-users-btn">
                                <a href="#" class="btn button-sm outline">Seguir</a>
                            </span>
                        </li>
                        <li>
                            <span class="new-users-pic">
                                <img src="{{ asset('src') }}/assets/images/testimonials/pic1.jpg" alt=""/>
                            </span>
                            <span class="new-users-text">
                                <a href="#" class="new-users-name">Nick Bold  </a>
                                <span class="new-users-info">Web Developer, Facebook Inc </span>
                            </span>
                            <span class="new-users-btn">
                                <a href="#" class="btn button-sm outline">Seguir</a>
                            </span>
                        </li>
                        <li>
                            <span class="new-users-pic">
                                <img src="{{ asset('src') }}/assets/images/testimonials/pic2.jpg" alt=""/>
                            </span>
                            <span class="new-users-text">
                                <a href="#" class="new-users-name">Wiltor Delton </a>
                                <span class="new-users-info">Project Manager, Amazon Inc </span>
                            </span>
                            <span class="new-users-btn">
                                <a href="#" class="btn button-sm outline">Seguir</a>
                            </span>
                        </li>
                        <li>
                            <span class="new-users-pic">
                                <img src="{{ asset('src') }}/assets/images/testimonials/pic3.jpg" alt=""/>
                            </span>
                            <span class="new-users-text">
                                <a href="#" class="new-users-name">Nick Stone </a>
                                <span class="new-users-info">Project Manager, Amazon Inc  </span>
                            </span>
                            <span class="new-users-btn">
                                <a href="#" class="btn button-sm outline">seguir</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Pagamentos</h4>
            </div>
            <div class="widget-inner">
                <div class="orders-list">
                    <ul>
                        <li>
                            <span class="orders-title">
                                <a href="#" class="orders-title-name">Anna Strong </a>
                                <span class="orders-info">Order #02357 | Date 12/08/2019</span>
                            </span>
                            <span class="orders-btn">
                                <a href="#" class="btn button-sm red">Pendente</a>
                            </span>
                        </li>
                        <li>
                            <span class="orders-title">
                                <a href="#" class="orders-title-name">Revenue</a>
                                <span class="orders-info">Order #02357 | Date 12/08/2019</span>
                            </span>
                            <span class="orders-btn">
                                <a href="#" class="btn button-sm red">Pendente</a>
                            </span>
                        </li>
                        <li>
                            <span class="orders-title">
                                <a href="#" class="orders-title-name">Anna Strong </a>
                                <span class="orders-info">Order #02357 | Date 12/08/2019</span>
                            </span>
                            <span class="orders-btn">
                                <a href="#" class="btn button-sm green">Pago</a>
                            </span>
                        </li>
                        <li>
                            <span class="orders-title">
                                <a href="#" class="orders-title-name">Revenue</a>
                                <span class="orders-info">Order #02357 | Date 12/08/2019</span>
                            </span>
                            <span class="orders-btn">
                                <a href="#" class="btn button-sm green">Pago</a>
                            </span>
                        </li>
                        <li>
                            <span class="orders-title">
                                <a href="#" class="orders-title-name">Anna Strong </a>
                                <span class="orders-info">Order #02357 | Date 12/08/2019</span>
                            </span>
                            <span class="orders-btn">
                                <a href="#" class="btn button-sm green">Pago</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
