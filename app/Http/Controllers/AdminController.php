<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Contato;
use App\Models\Servico;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        $data = [
            'titulo' => 'Painel de  ' . Auth::user()->name,
            'slug' => 'painel-admin',
            'usuarios' => User::all(),
        ];
        $user_id = Auth::user()->id;
        if ( request()->ajax() ) {
            $query_events = DB::table( 'agendas' )
            ->select( 'user_id', 'id', 'title', 'color', 'start', 'end' );
            if ( $user_id !== null ) {
                $query_events = $query_events->where( 'user_id', '=', $user_id );
            }
            $query_events = $query_events->orWhere( 'user_id', '=', null );
            $resultado_events = $query_events->get();

            $eventos = [];

            foreach ( $resultado_events as $row_events ) {
                $id = $row_events->id;
                $title = $row_events->title;
                $color = $row_events->color;
                $start = $row_events->start;
                $end = $row_events->end;

                $eventos[] = [
                    'id' => $id,
                    'title' => $title,
                    'color' => $color,
                    'start' => $start,
                    'end' => $end,
                ];
            }
            return response()->json( $eventos );
        }
        return view( 'adm.index', $data );
    }

    public function painel() {
        $data = [
            'titulo' => 'Painel de  ' . Auth::user()->name,
            'slug' => 'painel-admin',
            'usuarios' => User::all(),
        ];
        $user_id = Auth::user()->id;
        if ( request()->ajax() ) {
            $query_events = DB::table( 'agendas' )
            ->select( 'user_id', 'id', 'title', 'color', 'start', 'end' );
            if ( $user_id !== null ) {
                $query_events = $query_events->where( 'user_id', '=', $user_id );
            }
            $query_events = $query_events->orWhere( 'user_id', '=', null );
            $resultado_events = $query_events->get();

            $eventos = [];

            foreach ( $resultado_events as $row_events ) {
                $id = $row_events->id;
                $title = $row_events->title;
                $color = $row_events->color;
                $start = $row_events->start;
                $end = $row_events->end;

                $eventos[] = [
                    'id' => $id,
                    'title' => $title,
                    'color' => $color,
                    'start' => $start,
                    'end' => $end,
                ];
            }
            return response()->json( $eventos );
        }
        return view( 'adm.index', $data );
    }

    public function agenda_adm() {
        $data = [
            'titulo' => 'Agendas de  ' . Auth::user()->name,
            'slug' => 'agenda-admin',
            'usuarios' => User::all(),
            'contatos' => Contato::all(),
            'agendamentos' => Agenda::all(),
            'servicos' => Servico::all(),
        ];
        if ( request()->ajax() ) {
            $query_events = DB::table( 'agendas' )
            ->select( 'id', 'title', 'color', 'start', 'end' );
            $resultado_events = $query_events->get();

            $eventos = [];

            foreach ( $resultado_events as $row_events ) {
                $id = $row_events->id;
                $title = $row_events->title;
                $color = $row_events->color;
                $start = $row_events->start;
                $end = $row_events->end;

                $eventos[] = [
                    'id' => $id,
                    'title' => $title,
                    'color' => $color,
                    'start' => $start,
                    'end' => $end,
                ];
            }
            return response()->json( $eventos );
        }
        return view( 'adm.agenda', $data );
    }

    public function contatos_adm() {
        $data = [
            'titulo' => 'Contatos de  ' . Auth::user()->name,
            'slug' => 'agenda-admin',
            'usuarios' => User::all(),
            'contatos' => Contato::all(),
            'agendamentos' => Agenda::all(),
            'servicos' => Servico::all(),
        ];
        if ( request()->ajax() ) {
            $query_events = DB::table( 'agendas' )
            ->select( 'id', 'title', 'color', 'start', 'end' );
            $resultado_events = $query_events->get();

            $eventos = [];

            foreach ( $resultado_events as $row_events ) {
                $id = $row_events->id;
                $title = $row_events->title;
                $color = $row_events->color;
                $start = $row_events->start;
                $end = $row_events->end;

                $eventos[] = [
                    'id' => $id,
                    'title' => $title,
                    'color' => $color,
                    'start' => $start,
                    'end' => $end,
                ];
            }
            return response()->json( $eventos );
        }
        return view( 'adm.contatos', $data );
    }

    public function detalhe_contato( $id ) {
        $data = [
            'titulo' => 'Detalhes do Contato',
            'slug' => 'detalhe-contato',
            'usuarios' => User::all(),
            'contato' => Contato::findOrFail( $id ),
            'agendamentos' => Agenda::all(),
            'servicos' => Servico::all(),
        ];
        if ( request()->ajax() ) {
            $query_events = DB::table( 'agendas' )
            ->select( 'id', 'title', 'color', 'start', 'end' );
            $resultado_events = $query_events->get();

            $eventos = [];

            foreach ( $resultado_events as $row_events ) {
                $id = $row_events->id;
                $title = $row_events->title;
                $color = $row_events->color;
                $start = $row_events->start;
                $end = $row_events->end;

                $eventos[] = [
                    'id' => $id,
                    'title' => $title,
                    'color' => $color,
                    'start' => $start,
                    'end' => $end,
                ];
            }
            return response()->json( $eventos );
        }
        return view( 'adm.detalhe_contato', $data );
    }

    public function editar_contato( $id ) {
        $data = [
            'titulo' => 'Editar do Contato',
            'slug' => 'editar-contato',
            'usuarios' => User::all(),
            'contato' => Contato::findOrFail( $id ),
            'agendamentos' => Agenda::all(),
            'servicos' => Servico::all(),
        ];
        if ( request()->ajax() ) {
            $query_events = DB::table( 'agendas' )
            ->select( 'id', 'title', 'color', 'start', 'end' );
            $resultado_events = $query_events->get();

            $eventos = [];

            foreach ( $resultado_events as $row_events ) {
                $id = $row_events->id;
                $title = $row_events->title;
                $color = $row_events->color;
                $start = $row_events->start;
                $end = $row_events->end;

                $eventos[] = [
                    'id' => $id,
                    'title' => $title,
                    'color' => $color,
                    'start' => $start,
                    'end' => $end,
                ];
            }
            return response()->json( $eventos );
        }
        return view( 'adm.editar_contato', $data );
    }

    public function perfil( $id ) {
        $data = [
            'titulo' => 'Perfil de ' . Auth::user()->name,
            'slug' => 'perfil',
            'usuarios' => User::all(),
            'contato' => Contato::findOrFail( $id ),
            'agendamentos' => Agenda::all(),
            'servicos' => Servico::all(),
        ];
        if ( request()->ajax() ) {
            $query_events = DB::table( 'agendas' )
            ->select( 'id', 'title', 'color', 'start', 'end' );
            $resultado_events = $query_events->get();

            $eventos = [];

            foreach ( $resultado_events as $row_events ) {
                $id = $row_events->id;
                $title = $row_events->title;
                $color = $row_events->color;
                $start = $row_events->start;
                $end = $row_events->end;

                $eventos[] = [
                    'id' => $id,
                    'title' => $title,
                    'color' => $color,
                    'start' => $start,
                    'end' => $end,
                ];
            }
            return response()->json( $eventos );
        }
        return view( 'adm.perfil', $data );
    }

    public function agenda() {
        $data = [
            'titulo' => 'Agenda de  ' . Auth::user()->name,
            'slug' => 'painel-admin',
            'usuarios' => User::all(),
            'contatos' => Contato::all(),
            'agendamentos' => Agenda::all(),
            'servicos' => Servico::all(),
        ];
        if ( request()->ajax() ) {
            $query_events = DB::table( 'agendas' )
            ->select( 'id', 'title', 'color', 'start', 'end' );
            $resultado_events = $query_events->get();

            $eventos = [];

            foreach ( $resultado_events as $row_events ) {
                $id = $row_events->id;
                $title = $row_events->title;
                $color = $row_events->color;
                $start = $row_events->start;
                $end = $row_events->end;

                $eventos[] = [
                    'id' => $id,
                    'title' => $title,
                    'color' => $color,
                    'start' => $start,
                    'end' => $end,
                ];
            }
            return response()->json( $eventos );
        }
        return view( 'adm.agenda', $data );
    }

    public function atendimentos() {
        $data = [
            'titulo' => 'Atendimentos de  ' . Auth::user()->name,
            'slug' => 'painel-admin',
            'usuarios' => User::all(),
            'contatos' => Contato::all(),
            'agendamentos' => Agenda::all(),
            'servicos' => Servico::all(),
        ];
        return view( 'adm.atendimentos', $data );
    }

    public function clientes() {
        $data = [
            'titulo' => 'Clientes de  ' . Auth::user()->name,
            'slug' => 'clientes',
            'usuarios' => User::all(),
            'contatos' => Contato::all(),
            'agendamentos' => Agenda::all(),
            'servicos' => Servico::all(),
        ];
        return view( 'adm.clientes', $data );
    }

    public function financeiro() {
        $data = [
            'titulo' => 'Financeiro de  ' . Auth::user()->name,
            'slug' => 'financeiro',
            'usuarios' => User::all(),
            'contatos' => Contato::all(),
            'agendamentos' => Agenda::all(),
            'servicos' => Servico::all(),
        ];
        return view( 'adm.financeiro', $data );
    }

    public function store_agenda( Request $request ) {
        $request->validate( [
            'title' => [ 'required' ],
            'description' => [ 'nullable' ],
            'place' => [ 'nullable' ],
            'address' => [ 'nullable' ],
            'color' => [ 'nullable' ],
            'image' => [ 'nullable' ],
            'start' => [ 'required' ],
            'end' => [ 'required' ],
        ] );
        Agenda::create( $request->all() );
        return redirect( 'adm/agenda' )->with( 'success', 'Evento cadastrado.' );
    }
}
