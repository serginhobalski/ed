<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Detalhe;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
    * Where to redirect users after registration.
    *
    * @var string
    */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct() {
        $this->middleware( 'guest' );
    }

    /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
    protected function validator( array $data ) {
        return Validator::make( $data, [
            'name' => [ 'required', 'string', 'max:255' ],
            'surname' => [ 'nullable', 'string', 'max:255' ],
            'username' => [ 'nullable', 'string', 'max:255', 'unique:users' ],
            'email' => [ 'required', 'string', 'email', 'max:255', 'unique:users' ],
            'group' => [ 'nullable', 'string', 'max:255', 'unique:users' ],
            'password' => [ 'required', 'string', 'min:8', 'confirmed' ],
            'telefone' => [ 'required', 'string' ],
            'endereco' => [ 'nullable', 'string' ],
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
    }

    /**
    * Create a new user instance after a valid registration.
    *
    * @param  array  $data
    * @return \App\Models\User
    */
    protected function create( array $data ) {
        $user = User::create( [
            'name' => $data[ 'name' ],
            'email' => $data[ 'email' ],
            'surname' => $data[ 'surname' ],
            'username' => $data[ 'username' ],
            'password' => Hash::make( $data[ 'password' ] ),
        ] );
        Detalhe::create( [
            'user_id' => $user->id,
            'telefone' => $data[ 'telefone' ],
            'endereco' => $data[ 'endereco' ],
            'cidade' => $data[ 'cidade' ],
            'estado' => $data[ 'estado' ],
            'cep' => $data[ 'cep' ],
            'nascimento' => $data[ 'nascimento' ],
            'pai' => $data[ 'pai' ],
            'mae' => $data[ 'mae' ],
            'cpf' => $data[ 'cpf' ],
            'rg' => $data[ 'rg' ],
            'detalhes' => $data[ 'detalhes' ],
        ] );
        return $user;
    }
}
