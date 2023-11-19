@extends('layouts.admin')


@section('estilos')
@endsection


@section('conteudo')
<div class="container-fluid">

    <!--Start Dashboard Content-->
    <div class="card mt-3">
        <div class="card-content">
            <div class="row row-group m-0">
                <div class="col-12 border-light">
                    <div class="card-body">
                        <h5 class="text-white mb-0">
                            {{ $titulo }}</h5>
                    </div>
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
