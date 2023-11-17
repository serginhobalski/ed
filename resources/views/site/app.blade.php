@extends('site.layouts.base')


@section('estilos')
@endsection


@section('header')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">App PsicoPed</h1>
            <a href="/" class="h5 text-white">Home</a>
             /
            <a href="" class="h5 text-white">App</a>
        </div>
    </div>
</div>
@endsection


@section('conteudo')
<!-- Pricing Plan Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">App PsicoPed</h5>
            <h1 class="mb-0">Tudo o que você precisa para a sua prática profissional!</h1>
            <img src="{{asset('site/img/app.png')}}" width="100%" alt="">
        </div>
        <div class="row g-0">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Sessão Clínica</h4>
                        {{-- <small class="text-uppercase">Sessão com Neuropsicopedagogo.</small> --}}
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>Materiais específicos para as demandas do(a) aluno(a)</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Treino de habilidades cognitivas</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Adaptação curricular</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Adaptação de atividades, tarefas e recursos</span><i class="fa fa-check text-primary pt-1"></i></div>

                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Solicitar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Avaliação Diagnóstica</h4>
                        <small class="text-uppercase"></small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>Avaliação Psicopedagógica</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Avaliação Comportamental</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Testes de pré-requisitos de leitura e escrita</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Relatório neuropsicopedagógico</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Solicitar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Plataforma EAD Completa
                        </h4>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            {{-- <small class="align-top" style="font-size: 22px; line-height: 45px;">R$</small>3.590,00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;"></small> --}}
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>Dashboard administrativo (gerenciamento geral)</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Painel da Secretaria</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Painel da Coordenação</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Painel do Professor</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Painel do Aluno</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Solicitar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-0">
            <center>
                <h4 class="text-primary mb-1">Adquira já!</h4>
                {{-- <img src="{{asset('site/img/app-disponivel.png')}}" width="30%" alt=""> --}}
                <a class="btn btn-primary rounded-2" href=""><i class="fa-brands fa-google-play fa-2xl"></i> Google Play</a><br><br>
                <a class="btn btn-primary rounded-2" href=""><i class="fa-brands fa-apple fa-2xl"></i> Play Store</a>
            </center>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->
@endsection


@section('scripts')
@endsection

