@extends('layouts._app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                    <div class="card-body bg-dark text-white">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <center>
                                <img src="{{ asset('src/assets/images/logo-white.png') }}" alt="">
                                <h1 class="text-white">Formulário de cadastro</h1>
                            </center>
                            <!-- Progress bar -->
                            <div class="progressbar">
                                <div class="progress" id="progress"></div>

                                <div class="progress-step progress-step-active" data-title="Pessoal"></div>
                                <div class="progress-step" data-title="Contato"></div>
                                <div class="progress-step" data-title="Informações"></div>
                                <div class="progress-step" data-title="Detalhes"></div>
                            </div>

                            <!-- Pessoal -->
                            <div class="form-step form-step-active">
                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="surname"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Sobrenome') }}</label>
                                    <div class="col-md-6">
                                        <input id="surname" type="text"
                                            class="form-control @error('surname') is-invalid @enderror" name="surname"
                                            value="{{ old('surname') }}" autocomplete="surname" autofocus>
                                        @error('surname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="username"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nome de usuário') }}</label>
                                    <div class="col-md-6">
                                        <input id="username" type="text"
                                            class="form-control @error('username') is-invalid @enderror" name="username"
                                            value="{{ old('username') }}" autocomplete="username" autofocus>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('E-mail') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirmação de senha') }}</label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="btns-group">
                                    <a href="{{ route('login') }}" class="btn btn-primary btn-prev">Já possui login?</a>
                                    <a href="#" class="btn btn-primary btn-next">Próximo</a>
                                </div>

                            </div>

                            <!-- Contato -->
                            <div class="form-step">
                                <div class="row mb-3">
                                    <label for="telefone"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Telefone') }}</label>
                                    <div class="col-md-6">
                                        <input id="telefone" type="text" class="form-control" name="telefone"
                                            value="{{ old('telefone') }}" required autocomplete="telefone" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="endereco"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Endereço') }}</label>
                                    <div class="col-md-6">
                                        <input id="endereco" type="text" class="form-control" name="endereco"
                                            value="{{ old('endereco') }}" autocomplete="endereco" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cidade"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Cidade') }}</label>
                                    <div class="col-md-6">
                                        <input id="cidade" type="text" class="form-control" name="cidade"
                                            value="{{ old('cidade') }}" autocomplete="cidade" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="estado"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>
                                    <div class="col-md-6">
                                        <input id="estado" type="text" class="form-control" name="estado"
                                            value="{{ old('estado') }}" autocomplete="estado" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cep"
                                        class="col-md-4 col-form-label text-md-end">{{ __('CEP') }}</label>
                                    <div class="col-md-6">
                                        <input id="cep" type="text" class="form-control" name="cep"
                                            value="{{ old('cep') }}" autocomplete="cep" autofocus>
                                    </div>
                                </div>

                                <div class="btns-group">
                                    <a href="#" class="btn btn-primary btn-prev">Anterior</a>
                                    <a href="#" class="btn btn-primary btn-next">Próximo</a>
                                </div>
                            </div>

                            <!-- Informações -->
                            <div class="form-step">
                                <div class="row mb-3">
                                    <label for="nascimento"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Data de Nascimento') }}</label>
                                    <div class="col-md-6">
                                        <input id="nascimento" type="date" class="form-control" name="nascimento"
                                            value="{{ old('nascimento') }}" required autocomplete="nascimento" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pai"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nome do pai') }}</label>
                                    <div class="col-md-6">
                                        <input id="pai" type="text" class="form-control" name="pai"
                                            value="{{ old('pai') }}" autocomplete="pai" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="mae"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nome da mãe') }}</label>
                                    <div class="col-md-6">
                                        <input id="mae" type="text" class="form-control" name="mae"
                                            value="{{ old('mae') }}" autocomplete="mae" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cpf"
                                        class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>
                                    <div class="col-md-6">
                                        <input id="cpf" type="text" class="form-control" name="cpf"
                                            value="{{ old('cpf') }}" autocomplete="cpf" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="rg"
                                        class="col-md-4 col-form-label text-md-end">{{ __('RG') }}</label>
                                    <div class="col-md-6">
                                        <input id="rg" type="text" class="form-control" name="rg"
                                            value="{{ old('rg') }}" autocomplete="rg" autofocus>
                                    </div>
                                </div>

                                <div class="btns-group">
                                    <a href="#" class="btn btn-primary btn-prev">Anterior</a>
                                    <a href="#" class="btn btn-primary btn-next">Próximo</a>
                                </div>
                            </div>

                            <!-- Detalhes  cols="30" rows="10"-->
                            <div class="form-step">
                                <div class="row mb-3">
                                    <label for="detalhes"
                                    class="col-md-4 col-form-label text-md-end">
                                        {{ __('Detalhes') }}
                                    </label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" name="detalhes" id="detalhes">{{ old('detalhes') }}</textarea>
                                    </div>
                                </div>
                                <div class="btns-group">
                                    <a href="#" class="btn btn-primary btn-prev">Anterior</a>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Cadastar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
