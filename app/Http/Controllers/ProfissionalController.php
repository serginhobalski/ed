<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Prof;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfissionalController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function painel() {
        $data = [
            'titulo' => 'Painel de  ' . Auth::user()->name,
            'slug' => 'painel-profissional',
            'usuarios' => User::all(),
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
        return view( 'prof.painel', $data );
    }

    public function perfil() {
        $user = Auth::user();
        $data = [
            'titulo' => 'Perfil de ' . $user->name,
            'slug' => 'perfil',
            'user' => $user,
            'detalhe' => Prof::where( 'user_id', '=', $user->id )->first(),
        ];
        // dd( $data );
        return view( 'perfil', $data );
    }

    public function create_agenda() {
        $data = [
            'titulo' => 'Criar agenda de  ' . Auth::user()->name,
            'slug' => 'agenda-profissional',
            'usuarios' => User::all(),
        ];
        return view( 'prof.create_agenda', $data );
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
        $agenda = new Agenda();
        $agenda->title = $request->title;
        $agenda->description = $request->description;
        $agenda->place = $request->place;
        $agenda->address = $request->address;
        $agenda->color = $request->color;
        $agenda->image = $request->image;
        $agenda->start = $request->start;
        $agenda->end = $request->end;
        $agenda->save();
        return redirect( 'prof' );
    }

    public function clientes() {
        $data = [
            'titulo' => 'Clientes de  ' . Auth::user()->name,
            'slug' => 'clientes',
            'usuarios' => User::all(),
        ];
        return view( 'prof.clientes', $data );
    }

    public function atendimentos() {
        $data = [
            'titulo' => 'Atendimentos de  ' . Auth::user()->name,
            'slug' => 'atendimentos',
            'usuarios' => User::all(),
        ];
        return view( 'prof.atendimentos', $data );
    }

    public function agenda() {
        $data = [
            'titulo' => 'Agenda de  ' . Auth::user()->name,
            'slug' => 'agenda',
            'usuarios' => User::all(),
        ];
        return view( 'prof.agenda', $data );
    }

    public function financeiro() {
        $data = [
            'titulo' => 'Financeiro de  ' . Auth::user()->name,
            'slug' => 'financeiro',
            'usuarios' => User::all(),
        ];
        return view( 'prof.financeiro', $data );
    }

    public function update_perfil( Request $request, string $id ) {
        $request->validate( [
            'name' => [ 'required', 'string', 'max:255' ],
            'surname' => [ 'nullable', 'string', 'max:255' ],
            'username' => [ 'nullable', 'string', 'lowercase', 'max:255', 'unique:'.User::class ],
            'email' => [ 'required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class ],
        ] );
        $usuario = User::find( $id );
        $usuario->name = $request->name;
        $usuario->surname = $request->surname;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->save();
        return redirect( 'prof/perfil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_senha( Request $request, string $id ) {
        $request->validate( [
            'password' => [ 'required', 'string', 'max:255' ],
        ] );
        $usuario = User::find( $id );
        $usuario->password = Hash::make( $request->password );
        $usuario->save();
        return redirect( 'profbio/pefil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_endereco( Request $request, string $id ) {
        $request->validate( [
            'telefone' => [ 'required', 'string' ],
            'endereco' => [ 'required', 'string' ],
        ] );
        $endereco = Prof::find( $id );
        $endereco->telefone = $request->telefone;
        $endereco->endereco = $request->endereco;
        $endereco->save();
        return redirect( 'prof/perfil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_profissao( Request $request, string $id ) {
        $request->validate( [
            'profissao' => [ 'required', 'string' ],
        ] );
        $profissao = Prof::find( $id );
        $profissao->profissao = $request->profissao;
        $profissao->save();
        return redirect( 'prof/perfil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_bio( Request $request, string $id ) {
        $request->validate( [
            'bio' => [ 'required', 'string' ],
        ] );
        $detalhes = Prof::find( $id );
        $detalhes->bio = $request->bio;
        $detalhes->save();
        return redirect( 'prof/perfil' )->with( 'success', 'Dados atualizados!' );
    }

}
