@extends('site.layouts.base')


@section('estilos')
@endsection


@section('header')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Sobre nós</h1>
            <a href="" class="h5 text-white">Home</a>
             /
            <a href="" class="h5 text-white">Sobre</a>
        </div>
    </div>
</div>
@endsection


@section('conteudo')
<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Sobre Nós</h5>
                    <h1 class="mb-0">Estimular Digital</h1>
                </div>
                <p class="mb-4">Em plena era digital, nossa missão é utilizar todos os recursos ao nosso alcance para potencializar o processo de ensino e aprendizagem ao máximo.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Excelência</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Honestidade</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Profissionalismo</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Preços justos</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Fale conosco</h5>
                        <h4 class="text-primary mb-0">(91) 99188-2198</h4>
                    </div>
                </div>
                <a href="https://wa.me/5591991882198" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" target="_blank">WhatsApp</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('site') }}/img/sobre.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Nosso Diferencial</h5>
            <h1 class="mb-0">Trabalhamos para o seu crescimento</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Excelência</h4>
                        <p class="mb-0">Trabalhamos sempre com a visão de oferecer o melhor!</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Honestidade</h4>
                        <p class="mb-0">Aqui não tem enrolação. Trabalhamos com honestidade e transparência.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('site') }}/img/estimular.png" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Profissionalismo</h4>
                        <p class="mb-0">Trabalhamos com profissionalismo e competência técnica.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>Suporte Individualizado</h4>
                        <p class="mb-0">Atendemos cada demanda específica dando sempre a atenção necessária.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->
@endsection


@section('scripts')
@endsection

