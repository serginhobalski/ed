<?php

namespace App\Http\Controllers;

use App\Models\Detalhe;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller {
    public function index() {
        $data = [
            'titulo' => 'Início',
            'slug' => 'home',
        ];
        return view( 'site.index', $data );
    }

    public function perfil() {
        $user = Auth::user();
        $data = [
            'titulo' => 'Perfil de ' . $user->name,
            'slug' => 'perfil',
            'user' => $user,
            'detalhe' => Detalhe::where( 'user_id', '=', $user->id )->first(),
        ];
        // dd( $data );
        return view( 'perfil', $data );
    }

    public function app() {
        $data = [
            'titulo' => 'App PsicoPed',
            'slug' => 'app',
        ];
        return view( 'site.app', $data );
    }

    public function cadastro() {
        $data = [
            'titulo' => 'Cadastro',
            'slug' => 'cadastro',
        ];
        return view( 'cadastro', $data );
    }

    public function cadastrar( Request $request ) {
        // dd( $request );
        $request->validate( [
            'name' => [ 'required', 'string' ],
            'surname' => [ 'nullable', 'string', 'max:255' ],
            'username' => [ 'nullable', 'lowercase', 'string', 'max:255', 'unique:'.User::class ],
            'email' => [ 'required', 'lowercase', 'string', 'max:255', 'unique:'.User::class ],
            'group' => [ 'required', 'string' ],
            'telefone' => [ 'required', 'string' ],
            'endereco' => [ 'required', 'string' ],
            'cidade' => [ 'nullable', 'string' ],
            'estado' => [ 'required', 'string' ],
            'cep' => [ 'nullable', 'string' ],
            'nascimento' => [ 'required', 'string' ],
            'pai' => [ 'nullable', 'string' ],
            'mae' => [ 'nullable', 'string' ],
            'cpf' => [ 'nullable', 'string' ],
            'rg' => [ 'nullable', 'string' ],
            'detalhes' => [ 'nullable', 'string' ],
        ] );
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->surname = $request->surname;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->group = $request->group;
        $usuario->password = Hash::make( $request->password );
        $usuario->save();

        Auth::login( $usuario );

        $detalhes = new Detalhe();
        $detalhes->user_id = $usuario->id;
        $detalhes->telefone = $request->telefone;
        $detalhes->endereco = $request->endereco;
        $detalhes->cidade = $request->cidade;
        $detalhes->estado = $request->estado;
        $detalhes->cep = $request->cep;
        $detalhes->nascimento = $request->nascimento;
        $detalhes->pai = $request->pai;
        $detalhes->mae = $request->mae;
        $detalhes->cpf = $request->cpf;
        $detalhes->rg = $request->rg;
        $detalhes->detalhes = $request->detalhes;
        $detalhes->save();

        return redirect()->route( 'usuario' )->with( 'success', 'Seja bem-vindo!' );
    }

    public function registrar() {
        $data = [
            'titulo' => 'Registrar',
            'slug' => 'registrar',
        ];
        return view( 'registrar', $data );
    }

    public function contato() {
        $data = [
            'titulo' => 'Contato',
            'slug' => 'contato',
        ];
        return view( 'site.contato', $data );
    }

    public function cad_cliente() {
        $data = [
            'titulo' => 'Cadastro Cliente',
            'slug' => 'cadastrar',
        ];
        return view( 'cad_cliente', $data );
    }

    public function store_cliente( Request $request ) {
        // dd( $request );
        $request->validate( [
            'name' => [ 'required', 'string' ],
            'surname' => [ 'nullable', 'string', 'max:255' ],
            'username' => [ 'nullable', 'lowercase', 'string', 'max:255', 'unique:'.User::class ],
            'email' => [ 'required', 'lowercase', 'string', 'max:255', 'unique:'.User::class ],
            // 'group' => [ 'required', 'string' ],
            'telefone' => [ 'required', 'string' ],
            'endereco' => [ 'required', 'string' ],
            'cidade' => [ 'nullable', 'string' ],
            'estado' => [ 'required', 'string' ],
            'cep' => [ 'nullable', 'string' ],
            'nascimento' => [ 'required', 'string' ],
            'pai' => [ 'nullable', 'string' ],
            'mae' => [ 'nullable', 'string' ],
            'cpf' => [ 'nullable', 'string' ],
            'rg' => [ 'nullable', 'string' ],
            'detalhes' => [ 'nullable', 'string' ],
        ] );
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->surname = $request->surname;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        // $usuario->group = $request->group;
        $usuario->password = Hash::make( $request->password );
        $usuario->save();

        Auth::login( $usuario );

        $detalhes = new Detalhe();
        $detalhes->user_id = $usuario->id;
        $detalhes->telefone = $request->telefone;
        $detalhes->endereco = $request->endereco;
        $detalhes->cidade = $request->cidade;
        $detalhes->estado = $request->estado;
        $detalhes->cep = $request->cep;
        $detalhes->nascimento = $request->nascimento;
        $detalhes->pai = $request->pai;
        $detalhes->mae = $request->mae;
        $detalhes->cpf = $request->cpf;
        $detalhes->rg = $request->rg;
        $detalhes->detalhes = $request->detalhes;
        $detalhes->save();

        return redirect()->route( 'usuario' )->with( 'success', 'Seja bem-vindo, ' . Auth::user()->name . '!' );
    }

    public function cad_profissional() {
        $data = [
            'titulo' => 'Cadastro Profissional',
            'slug' => 'cadastrar',
        ];
        return view( 'cad_profissional', $data );
    }

    public function store_profissional( Request $request ) {
        // dd( $request );
        $request->validate( [
            'name' => [ 'required', 'string' ],
            'surname' => [ 'nullable', 'string', 'max:255' ],
            'username' => [ 'nullable', 'lowercase', 'string', 'max:255', 'unique:'.User::class ],
            'email' => [ 'required', 'lowercase', 'string', 'max:255', 'unique:'.User::class ],
            'group' => [ 'required', 'string' ],
            'profissao' => [ 'required', 'string' ],
            'bio' => [ 'nullable', 'string' ],
            'telefone' => [ 'required', 'string' ],
            'endereco' => [ 'required', 'string' ],
        ] );
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->surname = $request->surname;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->group = $request->group;
        $usuario->password = Hash::make( $request->password );
        $usuario->save();

        Auth::login( $usuario );

        $prof = new Detalhe();
        $prof->user_id = $usuario->id;
        $prof->profissao = $request->profissao;
        $prof->bio = $request->bio;
        $prof->telefone = $request->telefone;
        $prof->endereco = $request->endereco;
        $prof->save();

        return redirect()->route( 'prof' )->with( 'success', 'Seja bem-vindo, ' . Auth::user()->name . '!' );
    }

    public function precos() {
        $data = [
            'titulo' => 'Precos',
            'slug' => 'precos',
        ];
        return view( 'site.precos', $data );
    }

    public function servicos() {
        $data = [
            'titulo' => 'Serviços',
            'slug' => 'servicos',
        ];
        return view( 'site.servicos', $data );
    }

    public function sobre() {
        $data = [
            'titulo' => 'Sobre',
            'slug' => 'sobre',
        ];
        return view( 'site.sobre', $data );
    }

    public function sucesso() {
        $data = [
            'titulo' => 'Contato enviado!',
            'slug' => 'sucesso',
        ];
        return view( 'site.sucesso', $data );
    }

}
