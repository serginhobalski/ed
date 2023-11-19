@extends('layouts.guest')

@section('content')
<div class="account-container">
    <div class="heading-bx left">
        <h2 class="title-head">Faça seu <span>Login</span></h2>
        <p>Não possui cadastro? <a href="{{url('cadastro')}}">Cadastre-se aqui</a></p>
    </div>
    <form method="POST" action="{{route('login')}}" class="contact-bx">
        @csrf
        <div class="row placeani">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Seu e-mail ou login</label>
                        <input name="email" type="text" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Sua senha</label>
                        <input name="password" type="password" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group form-forget">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"
                            id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing">Lembrar</label>
                    </div>
                    <a href="#" class="ml-auto">Esqueceu sua senha?</a>
                </div>
            </div>
            <div class="col-lg-12 m-b30">
                <button name="submit" type="submit" value="Submit"
                    class="btn button-md">Entrar</button>
            </div>
        </div>
    </form>
</div>
@endsection
