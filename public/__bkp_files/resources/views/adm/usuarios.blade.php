@extends('layouts.admin')

@section('estilos')
@endsection

@section('conteudo')
<div class="container-fluid">

    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">Usuários recentes
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
                                <th>Cadastro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($usuarios->count() === 0)
                                <tr>
                                    <td colspan="3" class="text-center">Nenhum usuário cadastrado...</td>
                                </tr>
                            @else
                                @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>
                                        <a href="{{url('usuario/'. $usuario->id)}}">
                                            {{$usuario->name}}
                                        </a>
                                    </td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ date('d/m/Y - H:i', strtotime($usuario->created_at)) }}</td>
                                </tr>
                                @endforeach
                            @endif
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
