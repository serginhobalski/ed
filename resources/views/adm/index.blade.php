@extends('layouts.admin')


@section('estilos')
@endsection


@section('conteudo')
@php
use App\Models\Agenda;
use App\Models\Contato;
use App\Models\Servico;
use App\Models\User;

$usuarios = User::all();
$contatos = Contato::all();
$agendamentos = Agenda::all();
$servicos = Servico::all();
@endphp
<div class="container-fluid">

    <!--Start Dashboard Content-->

    <div class="card mt-3">
        <div class="card-content">
            <div class="row row-group m-0">
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <h5 class="text-white mb-0">
                            {{ $contatos->count() }}
                            <span class="float-right"><i
                                    class="fa fa-comment"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                            <div class="progress-bar" style="width:55%"></div>
                        </div>
                        <p class="mb-0 text-white small-font">Contatos Recebidos <span class="float-right">--
                                <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <h5 class="text-white mb-0">{{$servicos->count()}} <span class="float-right"><i
                                    class="fa fa-calendar"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                            <div class="progress-bar" style="width:55%"></div>
                        </div>
                        <p class="mb-0 text-white small-font">Serviços cadastrados <span
                                class="float-right">-- <i class="zmdi zmdi-long-arrow-up"></i></span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <h5 class="text-white mb-0">{{$usuarios->count()}} <span class="float-right"><i
                                    class="fa fa-users"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                            <div class="progress-bar" style="width:55%"></div>
                        </div>
                        <p class="mb-0 text-white small-font">Usuários <span class="float-right">-- <i
                                    class="zmdi zmdi-long-arrow-up"></i></span></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <h5 class="text-white mb-0">{{$agendamentos->count()}}
                            <span class="float-right">
                            <i class="fa fa-calendar"></i>
                            </span>
                        </h5>
                        <div class="progress my-3" style="height:3px;">
                            <div class="progress-bar" style="width:55%"></div>
                        </div>
                        <p class="mb-0 text-white small-font">Agendamentos <span class="float-right">-- <i
                                    class="zmdi zmdi-long-arrow-up"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">Contatos recentes
                    <div class="card-action">
                        <div class="dropdown">
                            <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                data-toggle="dropdown">
                                <i class="icon-options"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void();">Ações</a>
                                <a class="dropdown-item" href="javascript:void();">Ação 1</a>
                                <a class="dropdown-item" href="javascript:void();">Ação 2</a>
                                <a class="dropdown-item" href="javascript:void();">Ação 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush table-borderless">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Assunto</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                if($contatos->count() === 0):
                            @endphp
                            <tr>
                                <td colspan="5" class="text-center">Nenhum contato recebido...</td>
                            </tr>
                            @php
                                else:
                                foreach ($contatos as $contato):
                            @endphp
                            <tr>
                                <td><?php echo $contato->nome; ?></td>
                                <td><?php echo $contato->email; ?></td>
                                <td><?php echo $contato->telefone; ?></td>
                                <td><?php echo $contato->assunto; ?></td>
                                <td><?php echo date('d/m/Y - H:i', strtotime($contato->created_at)); ?></td>
                            </tr>
                            @php
                                endforeach;
                                endif;
                            @endphp
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
    <!--end overlay-->

</div>
@endsection



@section('scripts')
@endsection
