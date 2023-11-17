<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('cadastrar', function(){
    return view ('cadastrar');
});
Route::get('perfil', [SiteController::class, 'perfil'])->name('perfil');
Route::put('update_perfil/{id}', [SiteController::class, 'update_perfil'])
    ->name('update_perfil');
Route::put('update_senha/{id}', [SiteController::class, 'update_senha'])
    ->name('update_senha');
Route::put('update_informacoes/{id}', [SiteController::class, 'update_informacoes'])
    ->name('update_informacoes');
Route::put('update_endereco/{id}', [SiteController::class, 'update_endereco'])
    ->name('update_endereco');
Route::put('update_detalhes/{id}', [SiteController::class, 'update_detalhes'])
    ->name('update_detalhes');
Route::post('cadastrar', [SiteController::class, 'cadastrar'])->name('cadastrar');

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('appp', [SiteController::class, 'app'])->name('app');
Route::get('contato', [SiteController::class, 'contato'])->name('contato');
Route::get('precos', [SiteController::class, 'precos'])->name('precos');
Route::get('servicos', [SiteController::class, 'servicos'])->name('servicos');
Route::get('sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::get('sucesso', [SiteController::class, 'sucesso'])->name('sucesso');
Route::resource('contatos', ContatoController::class);


Route::group(['prefix' => '/admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('agenda', AgendaController::class);
});

Route::group(['prefix' => '/adm'], function(){
    Route::get('painel', [AdminController::class, 'painel_adm'])->name('painel_adm');
    Route::get('agenda', [AdminController::class, 'agenda_adm'])->name('agenda_adm');
    Route::get('contatos', [AdminController::class, 'contatos_adm'])->name('contatos_adm');
    Route::get('detalhe_contato', [AdminController::class, 'detalhe_contato'])->name('detalhe_contato');
    Route::get('editar_contato', [AdminController::class, 'editar_contato'])->name('editar_contato');
    Route::get('perfil', [AdminController::class, 'perfil'])->name('perfil_adm');
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('agendas', AgendaController::class);
});

Route::group(['prefix' => '/prof'], function(){
    Route::get('/', [ProfissionalController::class, 'painel']);
    Route::get('criar_agenda', [ProfissionalController::class, 'create_agenda']);
    Route::post('strore_agenda', [ProfissionalController::class, 'strore_agenda']);
});

Route::get('listar_agenda', [ClienteController::class, 'listar_agenda']);
Route::post('store_agenda', [ClienteController::class, 'store_agenda']);
Route::get('criar_agenda', [ClienteController::class, 'create_agenda']);

Route::group(['prefix' => '/usuario'], function(){
    Route::get('/', [ClienteController::class, 'painel']);
    Route::get('criar_agenda', [ClienteController::class, 'create_agenda']);
    Route::post('strore_agenda', [ClienteController::class, 'strore_agenda']);
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
