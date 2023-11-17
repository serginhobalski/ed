@extends('site.layouts.base')


@section('estilos')
@endsection


@section('header')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Contato</h1>
            <a href="/" class="h5 text-white">Home</a>
             /
            <a href="" class="h5 text-white">Contato</a>
        </div>
    </div>
</div>
@endsection


@section('conteudo')
<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Solicite um contato</h5>
                    <h1 class="mb-0">Entre em contato conosco</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-12 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Respondemos em até 24 horas</h5>
                    </div>
                    {{-- <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>(91) 99188-2198</h5>
                    </div> --}}
                </div>
                <p class="mb-4">Solicite uma reunião online, contato telefônico ou um agendamento de reunião presencial.</p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Estamos à disposição para tirar qualquer dúvida</h5>
                        <h4 class="text-primary mb-0">(91) 99188-2198</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    @component('site.components.form_contato')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->
@endsection


@section('scripts')
@endsection

