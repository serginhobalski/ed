<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        $data = [
            'titulo' => 'Painel de ' . Auth::user()->name,
            'slug' => 'painel',
        ];
        return view( 'painel', $data );
    }
}
