<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller {
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

    public function listar_agenda() {
        if ( request()->ajax() ) {
            $user_id = Auth::user()->id;
            // $query_events = DB::table( 'agendas' )
            // ->select( 'id', 'title', 'color', 'start', 'end' )
            // ->where( 'user_id', '=', $user_id );
            // $resultado_events = $query_events->get();
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
}
