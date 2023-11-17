@extends('layouts.admin')

@section('estilos')
@endsection

@section('conteudo')
<div class="container-fluid">
    <div class="row mt-3">

        <div class="col-lg-5">
            <div class="card profile-card-2">
                <div class="card-img-block">
                    <img class="img-fluid" src="{{ asset('adm/assets/images/perfil-capa.jpg') }}" alt="Card image cap">
                </div>
                <div class="card-body pt-5">
                    <img src="{{ asset('adm/assets/images/avatar.png') }}" alt="profile-image" class="profile">
                    <h5 class="card-title"><?php echo $contato->nome; ?></h5>
                    <p class="card-text"><b>E-mail: </b><?php echo $contato->email; ?></p>
                    <p class="card-text"><strong>Telefone: </strong><?php echo $contato->telefone; ?></p>
                    <p class="card-text">
                        <strong>Mensagem: </strong><br>
                        <?php echo $contato->mensagem; ?>
                    </p>
                    <hr>
                    <p class="card-text"><strong>Enviado em: </strong><?php echo date('d/m/Y - H:i', strtotime($contato->created_at)); ?></p>
                    <div class="icon-block">
                        <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                    </div>
                    <a class="btn btn-primary p-1" href="{{ route("contato.deletar_contato", $contato->id) }}"><i class="fa fa-trash"></i> Deletar Contato</a>
                    {{-- <form action="{{ route("contato.deletar_contato", $contato->id) }}" method="POST">
                        <input type="submit" class="btn btn-primary" value="Deletar">
                    </form> --}}
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">

                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                    class="icon-note"></i> <span class="hidden-xs">Editar Contato</span></a>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="edit">
                            <form action="{{ route("contato.editar_contato", $contato->id) }}" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                                    <div class="col-lg-9">
                                        <input name="nome" class="form-control" type="text" value="<?php echo $contato->nome; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">E-mail</label>
                                    <div class="col-lg-9">
                                        <input name="email" class="form-control" type="email" value="<?php echo $contato->email; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Telefone</label>
                                    <div class="col-lg-9">
                                        <input name="telefone" class="form-control" type="tel" value="<?php echo $contato->telefone; ?>"
                                            placeholder="Cadastrar telefone">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Login</label>
                                    <div class="col-lg-9">
                                        <textarea name="mensagem" class="form-control" id="" cols="50" rows="10"><?php echo $contato->mensagem; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="submit" class="btn btn-primary" value="Salvar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
@endsection
