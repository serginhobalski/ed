@extends('site.layouts.base')


@section('estilos')
@endsection


@section('header')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn"><?php echo $titulo ?></h1>
            <a href="/" class="h5 text-white">Home</a>
             /
            <a href="" class="h5 text-white"><?php echo $slug ?></a>
        </div>
    </div>
</div>
@endsection


@section('conteudo')
<div class="container-fluid">
    <center>
        <button class="btn btn-primary" onclick="history.go(-1);"><i class="fa fa-arrow-left"></i> Voltar</button>
    </center>
</div>
@endsection


@section('scripts')
@endsection

