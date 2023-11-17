{{-- @extends('admin.layouts.base') --}}
@extends('layouts.admin')

@section('estilos')
@endsection

@section('conteudo')
<div class="container-fluid">

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
                                <td>
                                    <a href="/contato/<?php echo $contato->id; ?>">
                                        <?php echo $contato->nome; ?>
                                    </a>
                                </td>
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
    {{-- <div class="overlay toggle-menu"></div> --}}
    <!--end overlay-->

</div>
@endsection

@section('scripts')
@endsection
