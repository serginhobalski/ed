@extends('layouts.admin')


@section('estilos')
@endsection


{{-- @section('conteudo')
<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-lg-4">
            <div class="card profile-card-2">
                <div class="card-img-block">
                    <img class="img-fluid" src="{{ asset('adm/assets/images/perfil-capa.jpg') }}" alt="Card image cap">
                </div>
                <div class="card-body pt-5">
                    @if (!Auth::user()->profile_photo_path)
                        <img src="{{ asset('adm/assets/images/avatar.png') }}" alt="profile-image" class="profile">
                    @else
                        <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                            alt="{{ Auth::user()->name }}" class="profile">
                    @endif
                    <h5 class="card-title">{{ Auth::user()->name }}</h5>
                    <p class="card-text">{{ strtoupper(Auth::user()->group) }}</p>
                    <div class="icon-block">
                        <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                    </div>
                </div>


            </div>

        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                class="nav-link active"><i class="icon-user"></i> <span
                                    class="hidden-xs">Perfil</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i
                                    class="icon-envelope-open"></i> <span class="hidden-xs">Mensagens</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                    class="icon-note"></i> <span class="hidden-xs">Editar</span></a>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="profile">
                            <h5 class="mb-3">Perfil do Usuário</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Nome</h6>
                                    <p>{{ Auth::user()->name . ' ' . Auth::user()->surname }}</p>
                                    <h6>E-mail</h6>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h6>Telefone</h6>
                                    <p>Telefone do Usuário</p>
                                    <h6>Bio</h6>
                                    <p>Bio do Usuário</p>
                                </div>
                            </div>
                            <br>
                            <hr />
                            <div class="col-md-12">
                                <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span>
                                    Atividades Recentes</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>Usuário</strong> foi cadastrado
                                                    <strong>`ADMIN`</strong>
                                                </td>
                                                <td>
                                                    <strong>Usuário</strong> alterado
                                                    <strong>`ADMIN`</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="tab-pane" id="messages">
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <div class="alert-icon">
                                    <i class="icon-info"></i>
                                </div>
                                <div class="alert-message">
                                    <span><strong>Atenção!</strong> Confira suas mensagens.</span>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="float-right font-weight-bold">30/12/2022 - 11:26
                                                </span> Mensagem de teste..
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="float-right font-weight-bold">30/12/2022 - 11:26
                                                </span> Mensagem de teste..
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="float-right font-weight-bold">30/12/2022 - 11:26
                                                </span> Mensagem de teste..
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="edit">
                            <strong><span class="text-secondary">Atualizar Informações de Perfil</span></strong>
                            <br>
                            <br>

                            <form action="{{route('update_perfil', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                                    <div class="col-lg-9">
                                        <input name="name" class="form-control" type="text"
                                            value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Sobrenome</label>
                                    <div class="col-lg-9">
                                        <input name="surname" class="form-control" type="text"
                                            value="{{ Auth::user()->surname }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">E-mail</label>
                                    <div class="col-lg-9">
                                        <input name="email" class="form-control" type="email"
                                            value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="submit" class="btn btn-primary" value="Salvar">
                                    </div>
                                </div>
                            </form>

                            <hr>
                            <strong><span class="text-secondary">Alterar Senha</span></strong>
                            <br>
                            <br>
                            <form action="{{url('admin/update_senha')}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Senha</label>
                                    <div class="col-lg-9">
                                        <input name="password" class="form-control" type="password" placeholder="Senha">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Confirmação de senha</label>
                                    <div class="col-lg-9">
                                        <input name="password-confirm" class="form-control" type="password" placeholder="Confirmação de senha">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="submit" class="btn btn-primary" value="Salvar">
                                    </div>
                                </div>

                            </form>

                            <hr>

                            <form>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Endereço</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value=""
                                            placeholder="Endereço">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" value=""
                                            placeholder="Cidade">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="text" value="" placeholder="UF">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Login</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="jhonsanmark">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Senha</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Confirmar senha</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="reset" class="btn btn-secondary" value="Cancelar">
                                        <input type="button" class="btn btn-primary" value="Salvar">
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
@endsection --}}



@extends('admin.layouts.base')

@section('estilos')
@endsection

@section('conteudo')
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card profile-card-2">
                    <div class="card-img-block">
                        <img class="img-fluid" src="{{ asset('adm/assets/images/perfil-capa.jpg') }}" alt="Card image cap">
                    </div>
                    <div class="card-body pt-5">
                        @if (!Auth::user()->profile_photo_path)
                            <img src="{{ asset('adm/assets/images/avatar.png') }}" alt="profile-image" class="profile">
                        @else
                            <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                                alt="{{ Auth::user()->name }}" class="profile">
                        @endif
                        <h5 class="card-title">{{ Auth::user()->name }}</h5>
                        <p class="card-text">{{ strtoupper(Auth::user()->group) }}</p>
                        <div class="icon-block">
                            <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                            <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                            <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                        </div>
                    </div>


                </div>

            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                    class="nav-link active"><i class="icon-user"></i> <span
                                        class="hidden-xs">Perfil</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i
                                        class="icon-envelope-open"></i> <span class="hidden-xs">Mensagens</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                        class="icon-note"></i> <span class="hidden-xs">Editar</span></a>
                            </li>
                        </ul>
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="profile">
                                <h5 class="mb-3">Perfil do Usuário</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Nome</h6>
                                        <p>{{ Auth::user()->name . ' ' . Auth::user()->surname }}</p>
                                        <h6>E-mail</h6>
                                        <p>{{ Auth::user()->email }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Telefone</h6>
                                        <p>Telefone do Usuário</p>
                                        <h6>Bio</h6>
                                        <p>Bio do Usuário</p>
                                    </div>
                                </div>
                                <br>
                                <hr />
                                <div class="col-md-12">
                                    <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span>
                                        Atividades Recentes</h5>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <strong>Usuário</strong> foi cadastrado
                                                        <strong>`ADMIN`</strong>
                                                    </td>
                                                    <td>
                                                        <strong>Usuário</strong> alterado
                                                        <strong>`ADMIN`</strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <div class="tab-pane" id="messages">
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <div class="alert-icon">
                                        <i class="icon-info"></i>
                                    </div>
                                    <div class="alert-message">
                                        <span><strong>Atenção!</strong> Confira suas mensagens.</span>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">30/12/2022 - 11:26
                                                    </span> Mensagem de teste..
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">30/12/2022 - 11:26
                                                    </span> Mensagem de teste..
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">30/12/2022 - 11:26
                                                    </span> Mensagem de teste..
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="edit">

                                <form action="">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                                        <div class="col-lg-9">
                                            <input name="name" class="form-control" type="text"
                                                value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                                        <div class="col-lg-9">
                                            <input name="surname" class="form-control" type="text"
                                                value="{{ Auth::user()->surname }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">E-mail</label>
                                        <div class="col-lg-9">
                                            <input name="email" class="form-control" type="email"
                                                value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Alterar imagem</label>
                                        <div class="col-lg-9">
                                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-4">
                                                    <!-- Profile Photo File Input -->
                                                    <input type="file" id="photo" class="form-control hidden"
                                                        wire:model.live="photo" x-ref="photo"
                                                        x-on:change="
                                                            photoName = $refs.photo.files[0].name;
                                                            const reader = new FileReader();
                                                            reader.onload = (e) => {
                                                                photoPreview = e.target.result;
                                                            };
                                                            reader.readAsDataURL($refs.photo.files[0]);
                                                    " />

                                                    <x-label for="photo" value="{{ __('Photo') }}" />

                                                    <!-- Current Profile Photo -->
                                                    <div class="mt-2" x-show="! photoPreview">
                                                        <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                                                            alt="{{ Auth::user()->name }}"
                                                            width="100">
                                                    </div>

                                                    <!-- New Profile Photo Preview -->
                                                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                                                        <span
                                                            class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                                            x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                                        </span>
                                                    </div>

                                                    <x-secondary-button class="mt-2 me-2" type="button"
                                                        x-on:click.prevent="$refs.photo.click()">
                                                        {{ __('Selecionar uma Nova Foto') }}
                                                    </x-secondary-button>

                                                    @if (Auth::user()->profile_photo_path)
                                                        <x-secondary-button type="button" class="mt-2"
                                                            wire:click="deleteProfilePhoto">
                                                            {{ __('Remover Foto') }}
                                                        </x-secondary-button>
                                                    @endif

                                                    <x-input-error for="photo" class="mt-2" />
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </form>

                                <form>

                                    <hr>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Endereço</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value=""
                                                placeholder="Endereço">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value=""
                                                placeholder="Cidade">
                                        </div>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="text" value="" placeholder="UF">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Login</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="jhonsanmark">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Senha</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="11111122333">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Confirmar senha</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="11111122333">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-secondary" value="Cancelar">
                                            <input type="button" class="btn btn-primary" value="Salvar">
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
