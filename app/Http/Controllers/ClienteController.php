<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Detalhe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function painel() {
        $data = [
            'titulo' => 'Painel de ' . Auth::user()->name,
            'slug' => 'painel-cliente',
            // 'usuarios' => User::all(),
        ];
        $user_id = Auth::user()->id;
        if ( request()->ajax() ) {
            $query_events = DB::table( 'agendas' )
            ->select( 'id', 'title', 'color', 'start', 'end' )
            ->where( 'user_id', '=', $user_id );
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
        return view( 'usuario.painel', $data );
    }

    public function perfil() {
        $data = [
            'titulo' => 'Perfil de ' . Auth::user()->name,
            'slug' => 'perfil',
            'user' => Auth::user(),
            'detalhe' => Detalhe::where( 'user_id', '=', Auth::id() )->first(),
        ];
        $user_id = Auth::user()->id;
        if ( request()->ajax() ) {
            $query_events = DB::table( 'agendas' )
            ->select( 'id', 'title', 'color', 'start', 'end' )
            ->where( 'user_id', '=', $user_id );
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
        return view( 'usuario.perfil', $data );
    }

    public function listar_agenda() {
        if ( request()->ajax() ) {
            $user_id = Auth::user()->id;
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
    }

    public function create_agenda() {
        $data = [
            'titulo' => 'Criar agenda de  ' . Auth::user()->name,
            'slug' => 'agenda-profissional',
            'usuarios' => User::all(),
        ];
        return view( 'usuario.create_agenda', $data );
    }

    public function store_agenda( Request $request ) {
        $request->validate( [
            'title' => [ 'required' ],
            'description' => [ 'nullable' ],
            'place' => [ 'nullable' ],
            'address' => [ 'nullable' ],
            'color' => [ 'nullable' ],
            'start' => [ 'required' ],
            'end' => [ 'required' ],
        ] );
        $agenda = new Agenda();
        $agenda->user_id = Auth::user()->id;
        $agenda->title = $request->title;
        $agenda->description = $request->description;
        $agenda->place = $request->place;
        $agenda->address = $request->address;
        $agenda->color = $request->color;
        $agenda->start = $request->start;
        $agenda->end = $request->end;
        $agenda->save();
        if ( Auth::user()->group === 'admin' ) {
            return redirect( 'admin' );
        }
        if ( Auth::user()->group === 'profissional' ) {
            return redirect( 'prof' );
        }
        if ( Auth::user()->group === 'cliente' ) {
            return redirect( 'usuario' );
        }
    }

    public function agenda() {
        $data = [
            'titulo' => 'Agenda de  ' . Auth::user()->name,
            'slug' => 'agenda',
            'usuarios' => User::all(),
        ];
        return view( 'usuario.agenda', $data );
    }

    public function atendimentos() {
        $data = [
            'titulo' => 'Atendimentos de  ' . Auth::user()->name,
            'slug' => 'atendimentos',
            'usuarios' => User::all(),
        ];
        return view( 'usuario.atendimentos', $data );
    }

    public function financeiro() {
        $data = [
            'titulo' => 'Financeiro de  ' . Auth::user()->name,
            'slug' => 'financeiro',
            'usuarios' => User::all(),
        ];
        return view( 'usuario.financeiro', $data );
    }

    public function update_perfil( Request $request, string $id ) {
        $request->validate( [
            'name' => [ 'required', 'string', 'max:255' ],
            'surname' => [ 'nullable', 'string', 'max:255' ],
            'username' => [ 'nullable', 'string', 'lowercase', 'max:255', 'unique:'.User::class ],
            'email' => [ 'required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class ],
            'group' => [ 'required', 'string', 'lowercase', 'max:255' ],
        ] );
        $usuario = User::find( $id );
        $usuario->name = $request->name;
        $usuario->surname = $request->surname;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->group = $request->group;
        $usuario->save();
        return redirect( 'usuario/perfil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_senha( Request $request, string $id ) {
        $request->validate( [
            'password' => [ 'required', 'string', 'max:255' ],
        ] );
        $usuario = User::find( $id );
        $usuario->password = Hash::make( $request->password );
        $usuario->save();
        return redirect( 'usuario/pefil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_endereco( Request $request, string $id ) {
        $request->validate( [
            'telefone' => [ 'required', 'string' ],
            'endereco' => [ 'required', 'string' ],
            'cidade' => [ 'nullable', 'string' ],
            'estado' => [ 'required', 'string' ],
            'cep' => [ 'nullable', 'string' ],
        ] );
        $endereco = Detalhe::find( $id );
        $endereco->telefone = $request->telefone;
        $endereco->endereco = $request->endereco;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->cep = $request->cep;
        $endereco->save();
        return redirect( 'usuario/perfil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_informacoes( Request $request, string $id ) {
        $request->validate( [
            'nascimento' => [ 'required', 'string' ],
            'pai' => [ 'nullable', 'string' ],
            'mae' => [ 'nullable', 'string' ],
            'cpf' => [ 'nullable', 'string' ],
            'rg' => [ 'nullable', 'string' ],
        ] );
        $informacoes = Detalhe::find( $id );
        $informacoes->nascimento = $request->nascimento;
        $informacoes->pai = $request->pai;
        $informacoes->mae = $request->mae;
        $informacoes->cpf = $request->cpf;
        $informacoes->rg = $request->rg;
        $informacoes->save();
        return redirect( 'usuario/perfil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_detalhes( Request $request, string $id ) {
        $request->validate( [
            'nullable' => [ 'nullable', 'string' ],
        ] );
        $detalhes = Detalhe::find( $id );
        $detalhes->detalhes = $request->detalhes;
        $detalhes->save();
        return redirect( 'usuario/perfil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_prof( Request $request, string $id ) {
        $request->validate( [
            'nullable' => [ 'nullable', 'string' ],
        ] );
        $detalhes = Detalhe::find( $id );
        $detalhes->detalhes = $request->detalhes;
        $detalhes->save();
        return redirect( 'usuario/perfil' )->with( 'success', 'Dados atualizados!' );
    }

}
