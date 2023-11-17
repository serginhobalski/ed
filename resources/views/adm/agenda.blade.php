{{-- @extends('admin.layouts.base') --}}
@extends('layouts.admin')

@section('estilo-calendario')
@endsection

@section('estilos')
    <!-- Full Calendar -->
    {{-- <link href='{{ asset('adm') }}/assets/fullcalendar/css/core/main.min.css' rel='stylesheet' />
    <link href='{{ asset('adm') }}/assets/fullcalendar/css/daygrid/main.min.css' rel='stylesheet' />
    <script src='{{ asset('adm') }}/assets/fullcalendar/js/core/main.min.js'></script>
    <script src='{{ asset('adm') }}/assets/fullcalendar/js/interaction/main.min.js'></script>
    <script src='{{ asset('adm') }}/assets/fullcalendar/js/daygrid/main.min.js'></script>
    <script src='{{ asset('adm') }}/assets/fullcalendar/js/core/locales/pt-br.js'></script> --}}
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'pt-br',
                header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
                },
                plugins: ['interaction', 'dayGrid'],
                //defaultDate: '2019-04-12',
                editable: true,
                eventLimit: true,
                events: '{{url("listar_agenda")}}',
                extraParams: function() {
                    return {
                        cachebuster: new Date().valueOf()
                    };
                }
            });

            calendar.render();
        });
    </script> --}}
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
            events: "{{url('listar_agenda')}}"
          });

        });

    </script>
@endsection

@section('load-calendario')
    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->
@endsection

@section('conteudo')
    <div class="container-fluid">

        <div class="mt-3">
            <div id='calendar'></div>
        </div>

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

    </div>
@endsection

@section('scripts')
@endsection
