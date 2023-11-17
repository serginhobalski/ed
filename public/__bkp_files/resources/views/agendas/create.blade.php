@extends('layouts.user')

@section('styles')
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="widget-card widget-bg1 text-white">
            <h3> {{$titulo}} </h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{url('store_agenda')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Título do agendamento">
                <small id="titleHelp" class="form-text text-muted">Escreva um título.</small>
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <input name="description" type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Descrição">
                <small id="titleHelp" class="form-text text-muted">Escreva uma descrição.</small>
            </div>
            <div class="form-group">
                <label for="start">Início</label>
                <input name="start" type="datetime" class="form-control" id="start" aria-describedby="emailHelp" placeholder="Início">
                <small id="titleHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="end">Fim</label>
                <input name="end" type="datetime" class="form-control" id="end" aria-describedby="emailHelp" placeholder="Início">
                <small id="titleHelp" class="form-text text-muted"></small>
            </div>
            <button type="submit" class="btn btn-secondary">Cadastrar</button>
        </form>
    </div>
</div>

@endsection

@section('scripts')
@endsection
