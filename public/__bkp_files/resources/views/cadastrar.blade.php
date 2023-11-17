<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro | App PsicoPed</title>
    <link rel="shortcut icon" href="{{asset('logo-app.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('multi-step-form') }}/bootstrap.css" />
    <script src="{{ asset('multi-step-form') }}/bootstrap.js" defer></script>
    <link rel="stylesheet" href="{{ asset('multi-step-form') }}/style.css" />
    <script src="{{ asset('multi-step-form') }}/script.js" defer></script>

</head>

<body>
    <form action="{{ route('register') }}" method="POST" class="form">
        @csrf
        <center>
            <img src="{{ asset('src/assets/images/logo.png') }}" alt="">
            <h1 class="text-center">Formulário de cadastro</h1>
        </center>
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Pessoal"></div>
            <div class="progress-step" data-title="Contato"></div>
            <div class="progress-step" data-title="Informações"></div>
            <div class="progress-step" data-title="Detalhes"></div>
        </div>

        <!-- Steps -->
        <!-- Pessoal -->
        <div class="form-step form-step-active">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Digitar nome" name="name" required value="{{ old('name') }}">
                <label for="floatingInput">Nome</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Digitar sobrenome" name="surname" required value="{{ old('surname') }}">
                <label for="floatingInput">Sobrenome</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Digitar nome de usuário" name="username" value="{{ old('username') }}">
                <label for="floatingInput">Nome de usuário</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" name="group" required>
                    <option selected>Selecionar...</option>
                    <option value="cliente" title="Você vai receber atendimento">
                        Cliente
                    </option>
                    <option value="profissional" title="Você vai realizar atendimentos">
                        Profissional
                    </option>
                </select>
                <label for="floatingSelect">Selecionar o tipo de cadastro</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Senha" required autocomplete="new-password">
                <label for="floatingPassword">Senha</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password-confirm" type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Senha" required autocomplete="new-password">
                <label for="floatingPasswordConfirm">Confirmação de Senha</label>
            </div>


            <div class="input-group">
                <a href="#" class="btn btn-next width-50 ml-auto">Próximo</a>
            </div>
        </div>
        <!-- Contato -->
        <div class="form-step">
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="floatingInput" placeholder="Digitar telefone" name="tetefone" required value="{{ old('telefone') }}">
                <label for="floatingInput">Telefone</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Digitar endereço" name="endereco" value="{{ old('endereco') }}">
                <label for="floatingInput">Endereco</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Digitar cidade" name="cidade" required value="{{ old('cidade') }}">
                <label for="floatingInput">Cidade</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Digitar estado" name="estado" required value="{{ old('estado') }}">
                <label for="floatingInput">Estado</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="Digitar cep" name="cep" value="{{ old('cep') }}">
                <label for="floatingInput">CEP</label>
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Anterior</a>
                <a href="#" class="btn btn-next">Próximo</a>
            </div>
        </div>
        <!-- Informações -->
        <div class="form-step">
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="floatingInput" name="nascimento" required value="{{ old('nascimento') }}">
                <label for="floatingInput">Data de nascimento</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Digitar nome do pai" name="pai" value="{{ old('pai') }}">
                <label for="floatingInput">Nome do Pai</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Digitar nome da mãe" name="mae" required value="{{ old('mae') }}">
                <label for="floatingInput">Nome da Mãe</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="Digitar CPF do cliente" name="cpf" value="{{ old('cpf') }}">
                <label for="floatingInput">CPF</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="Digitar RG do cliente" name="rg" value="{{ old('rg') }}">
                <label for="floatingInput">RG</label>
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Anterior</a>
                <a href="#" class="btn btn-next">Próximo</a>
            </div>
        </div>
        <!-- Detalhes -->
        <div class="form-step">
            <div class="form-floating">
                <textarea name="detalhes" class="form-control" placeholder="Detalhes adicionais" id="floatingTextarea">{{ old('detalhes') }}</textarea>
                <label for="floatingTextarea">Detalhes</label>
            </div>
            <div class="form-group">
                <a href="#" class="btn btn-prev">Anterior</a>
                {{-- <input type="submit" value="Cadastrar" class="btn" /> --}}
                {{-- <button type="submit" class="btn">
                    <i class="fa-solid fa-pen-to-square"></i>
                    {{ __('Cadastrar') }}
                </button> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>
