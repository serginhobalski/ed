<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfissionalController extends Controller {
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
        return view( 'usuario.painel', $data );
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
}
