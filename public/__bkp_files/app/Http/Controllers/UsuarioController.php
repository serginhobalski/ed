<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller {

    public function index() {
        $data = [
            'titulo' => 'Geranciar Usuários',
            'slug' => 'admin-usuarios',
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
        return view( 'usuarios.index', $data );
    }

    public function create() {
        $data = [
            'titulo' => 'Cadastrando novo usuário no sistema',
            'slug' => 'criar-usuario',
            'usuarios' => User::all(),
        ];
        return view( 'usuarios.create', $data );
    }

    public function store( Request $request ) {
        // dd( $request );
        $request->validate( [
            'name' => [ 'required', 'string' ],
            'surname' => [ 'nullable', 'string', 'max:255' ],
            'username' => [ 'nullable', 'lowercase', 'string', 'max:255', 'unique:'.User::class ],
            'email' => [ 'required', 'lowercase', 'string', 'max:255', 'unique:'.User::class ],
            'group' => [ 'nullable', 'string' ],
        ] );
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->surname = $request->surname;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->group = $request->group;
        $usuario->password = Hash::make( $request->password );
        $usuario->save();
        return redirect()->route( 'usuarios.index' );
    }

    public function show( string $id ) {
        //
    }

    public function edit( string $id ) {
        //
    }

    public function update( Request $request, string $id ) {
        //
    }

    public function destroy( string $id ) {
        //
    }
}
