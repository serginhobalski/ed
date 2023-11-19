@extends('layouts.guest')

@section('styles')

@endsection

@section('content')
<div class="account-container">
    <div class="heading-bx text-center">
        <h2 class="title-head"><span>Selecione o </span><strong class="text-primary">tipo de cadastro</strong> </h2>
    </div>
    <div class="contact-bx">
        <div class="row text-center">
            <div class="col-md-6 text-center mt-2" style="border-top-color: blueviolet;">
                <a href="{{url('cad_profissional')}}">
                    <i class="fa-solid fa-user-tie fa-10x"></i><br>
                    Profissional
                </a>
            </div>
            <div class="col-md-6 text-center mt-2">
                <a href="{{url('cad_cliente')}}">
                    <i class="fa-solid fa-user-graduate fa-10x"></i><br>
                    Cliente
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
