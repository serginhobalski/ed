@extends('adm.layouts.base_login')

@section('estilos')
@endsection

@section('conteudo')
<div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('adm') }}/assets/images/logo-ed.png" alt="logo icon">
            </div>
            <div class="card-title text-uppercase text-center py-3">Login de acesso</div>
            <form>
                <div class="form-group">
                    <label for="exampleInputUsername" class="sr-only">Nome de Usuário</label>
                    <div class="position-relative has-icon-right">
                        <input type="text" id="exampleInputUsername" class="form-control input-shadow"
                            placeholder="Digite o login">
                        <div class="form-control-position">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword" class="sr-only">Senha</label>
                    <div class="position-relative has-icon-right">
                        <input type="password" id="exampleInputPassword" class="form-control input-shadow"
                            placeholder="Digite a senha">
                        <div class="form-control-position">
                            <i class="icon-lock"></i>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <div class="icheck-material-white">
                            <input type="checkbox" id="user-checkbox" checked="" />
                            <label for="user-checkbox">Lembrar</label>
                        </div>
                    </div>
                    <div class="form-group col-6 text-right">
                        <a href="#">Resetar a senha</a>
                    </div>
                </div>
                <button type="button" class="btn btn-light btn-block">Logar</button>

                {{--
                <div class="text-center mt-3">Logar com</div>
                <div class="form-row mt-4">
                    <div class="form-group mb-0 col-6">
                        <button type="button" class="btn btn-light btn-block"><i
                                class="fa fa-facebook-square"></i> Facebook</button>
                    </div>
                    <div class="form-group mb-0 col-6 text-right">
                        <button type="button" class="btn btn-light btn-block"><i
                                class="fa fa-twitter-square"></i> Twitter</button>
                    </div>
                </div>
                 --}}

            </form>
        </div>
    </div>
    <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">Ainda não possui cadastro? <a class="btn btn-success" href="/adm/cadastrar"> Cadastre-se aqui</a>
        </p>
    </div>
</div>
@endsection

@section('scripts')
@endsection
