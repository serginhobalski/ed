@extends('layouts.admin')

@section('estilos')
@endsection

@section('conteudo')
    <div class="card card-authentication1 mx-auto my-4">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="assets/images/logo-ed.png" alt="logo icon">
                </div>
                <div class="card-title text-uppercase text-center py-3">Cadastrar</div>
                <form>
                    <div class="form-group">
                        <label for="exampleInputName" class="sr-only">Nome</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="exampleInputName" class="form-control input-shadow"
                                placeholder="Digite seu nome">
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmailId" class="sr-only">E-mail</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="exampleInputEmailId" class="form-control input-shadow"
                                placeholder="Digite seu e-mail">
                            <div class="form-control-position">
                                <i class="icon-envelope-open"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword" class="sr-only">Senha</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="exampleInputPassword" class="form-control input-shadow"
                                placeholder="Escolha uma senha">
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="icheck-material-white">
                            <input type="checkbox" id="user-checkbox" checked="" />
                            <label for="user-checkbox">Aceito receber comunicações</label>
                        </div>
                    </div>

                    <button type="button" class="btn btn-light btn-block waves-effect waves-light">Cadastrar</button>
                    <hr>
                    <div class="text-center mt-3">Cadastrar com:</div>

                    <div class="form-row mt-4">
                        <div class="form-group mb-0 col-6">
                            <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i>
                                Facebook</button>
                        </div>
                        <div class="form-group mb-0 col-6 text-right">
                            <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i>
                                Twitter</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <p class="text-warning mb-0">Já possui uma conta?
                <a class="btn btn-success" href="/adm/login"> Entre aqui</a></p>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
