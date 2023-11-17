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
        return redirect( 'perfil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_senha( Request $request, string $id ) {
        $request->validate( [
            'password' => [ 'required', 'string', 'max:255' ],
        ] );
        $usuario = User::find( $id );
        $usuario->password = Hash::make( $request->password );
        $usuario->save();
        return redirect( 'pefil' )->with( 'success', 'Dados atualizados!' );
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
        return redirect( 'perfil' )->with( 'success', 'Dados atualizados!' );
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
        return redirect( 'perfil' )->with( 'success', 'Dados atualizados!' );
    }

    public function update_detalhes( Request $request, string $id ) {
        $request->validate( [
            'nullable' => [ 'nullable', 'string' ],
        ] );
        $detalhes = Detalhe::find( $id );
        $detalhes->detalhes = $request->detalhes;
        $detalhes->save();
        return redirect( 'perfil' )->with( 'success', 'Dados atualizados!' );
    }
}
