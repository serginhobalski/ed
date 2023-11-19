@extends('layouts.guest')

@section('content')
<div class="account-container">
    <div class="heading-bx left">
        <h2 class="title-head">Cadastro de <span>Cliente</span></h2>
        <p>Já possui cadastro? <a href="{{url('login')}}">Acesse aqui</a></p>
    </div>
    <form method="POST" action="{{url('store_cliente')}}" class="contact-bx">
        @csrf
        <div class="row placeani">
            <div class="col-lg-12">
                <div class="form-group">
                    <h5 class="text-primary">1. Dados de Acesso</h5>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Seu nome</label>
                        <input name="name" type="text" required class="form-control" value="{{old('name')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Seu sobrenome</label>
                        <input name="surname" required type="text" class="form-control" value="{{old('surname')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Nome de usuário</label>
                        <input name="username" type="text" class="form-control" value="{{old('username')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Seu e-mail</label>
                        <input name="email" type="text" required="" class="form-control"  value="{{old('email')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Sua senha</label>
                        <input name="password" type="password" class="form-control" required autocomplete="new-password">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Confirmar senha</label>
                        <input name="password-confirm" type="password" class="form-control" required autocomplete="new-password">
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <h5 class="text-primary">2. Dados de Contato</h5>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Telefone</label>
                        <input name="telefone" type="text" class="form-control" required value="{{old('telefone')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Endereço</label>
                        <input name="endereco" type="text" class="form-control" required value="{{old('endereco')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Cidade</label>
                        <input name="cidade" type="text" class="form-control" required value="{{old('cidade')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Estado</label>
                        <input name="estado" type="text" class="form-control" required value="{{old('estado')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>CEP</label>
                        <input name="cep" type="text" class="form-control" required value="{{old('cep')}}">
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <h5 class="text-primary">3. Informações</h5>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Data de nascimento</label>
                        <input name="nascimento" type="date" class="form-control" required value="{{old('nascimento')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Nome do pai</label>
                        <input name="pai" type="text" class="form-control" required value="{{old('pai')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Nome da mãe</label>
                        <input name="mae" type="text" class="form-control" required value="{{old('mae')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>CPF</label>
                        <input name="cpf" type="text" class="form-control" required value="{{old('cpf')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>RG</label>
                        <input name="rg" type="text" class="form-control" required value="{{old('rg')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Detalhes</label>
                        <textarea class="form-control" name="detalhes" id="" cols="30" rows="10">{{old('detalhes')}}</textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 m-b30">
                <button type="submit" class="btn button-md">
                    Cadastrar
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
