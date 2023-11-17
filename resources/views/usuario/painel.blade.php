@extends('layouts.user')

@section('styles')
@endsection

@section('content')
<!-- Card -->
<div class="row">
    <div class="col-12">
        <div class="widget-card widget-bg1 text-white">
            <h2> {{ $titulo }} </h2>
        </div>
    </div>
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
