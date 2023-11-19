<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AtendimentoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// General Site routes
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('appp', [SiteController::class, 'app'])->name('app');
Route::get('contato', [SiteController::class, 'contato'])->name('contato');
Route::get('precos', [SiteController::class, 'precos'])->name('precos');
Route::get('servicos', [SiteController::class, 'servicos'])->name('servicos');
Route::get('sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::get('sucesso', [SiteController::class, 'sucesso'])->name('sucesso');
// General Agenda routes
Route::get('listar_agenda', [ClienteController::class, 'listar_agenda']);
Route::post('store_agenda', [ClienteController::class, 'store_agenda']);
Route::get('criar_agenda', [ClienteController::class, 'create_agenda']);
// Custom register routes
Route::get('cadastro', [SiteController::class, 'cadastro']);
Route::post('cadastrar', [SiteController::class, 'cadastrar'])->name('cadastrar');
Route::get('cad_cliente', [SiteController::class, 'cad_cliente']);
Route::post('store_cliente', [SiteController::class, 'store_cliente']);
Route::get('cad_profissional', [SiteController::class, 'cad_profissional']);
Route::post('store_profissional', [SiteController::class, 'store_profissional']);

Route::put('update_prof/{id}', [SiteController::class, 'update_prof'])->name('update_prof');
// Resource Routes
Route::resource('agendas', AgendaController::class)->middleware('auth');
Route::resource('atendimentos', AtendimentoController::class)->middleware('auth');
Route::resource('contatos', ContatoController::class)->middleware('auth');
Route::resource('usuarios', UsuarioController::class)->middleware('auth');
// Admin routes
Route::group(['prefix' => '/admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('agenda', [AdminController::class, 'agenda']);
    Route::get('atendimentos', [AdminController::class, 'atendimentos']);
    Route::get('clientes', [AdminController::class, 'clientes']);
    Route::get('financeiro', [AdminController::class, 'financeiro']);
    Route::get('painel', [AdminController::class, 'painel_adm']);
    Route::get('perfil', [AdminController::class, 'perfil'])->name('admin.perfil');
    Route::get('detalhe_contato', [AdminController::class, 'detalhe_contato'])->name('detalhe_contato');
    Route::get('editar_contato', [AdminController::class, 'editar_contato'])->name('editar_contato');
});
// Profissional routes
Route::group(['prefix' => '/prof'], function(){
    Route::get('/', [ProfissionalController::class, 'painel']);
    Route::get('criar_agenda', [ProfissionalController::class, 'create_agenda']);
    Route::post('strore_agenda', [ProfissionalController::class, 'strore_agenda']);
    Route::post('clientes', [ProfissionalController::class, 'clientes']);
    Route::post('atendimentos', [ProfissionalController::class, 'atendimentos']);
    Route::post('agenda', [ProfissionalController::class, 'agenda']);
    Route::post('perfil', [ProfissionalController::class, 'perfil']);
    Route::post('financeiro', [ProfissionalController::class, 'financeiro']);
    Route::put('update_perfil/{id}', [ProfissionalController::class, 'update_perfil'])
        ->name('prof.update_perfil');
    Route::put('update_senha/{id}', [ProfissionalController::class, 'update_senha'])
        ->name('prof.update_senha');
    Route::put('update_endereco/{id}', [ProfissionalController::class, 'update_endereco'])
        ->name('prof.update_endereco');
    Route::put('update_informacoes/{id}', [ProfissionalController::class, 'update_informacoes'])
        ->name('prof.update_informacoes');
    Route::put('update_detalhes/{id}', [ProfissionalController::class, 'update_detalhes'])
        ->name('prof.update_detalhes');
});
// Clientes routes
Route::group(['prefix' => '/usuario'], function(){
    Route::get('/', [ClienteController::class, 'painel'])->name('usuario');
    Route::get('atendimentos', [ClienteController::class, 'atendimentos']);
    Route::get('agenda', [ClienteController::class, 'agenda']);
    Route::get('perfil', [ClienteController::class, 'perfil']);
    Route::get('financeiro', [ClienteController::class, 'financeiro']);
    Route::get('criar_agenda', [ClienteController::class, 'create_agenda']);
    Route::post('strore_agenda', [ClienteController::class, 'strore_agenda']);
    Route::put('update_perfil/{id}', [ClienteController::class, 'update_perfil'])
        ->name('cliente.update_perfil');
    Route::put('update_senha/{id}', [ClienteController::class, 'update_senha'])
        ->name('cliente.update_senha');
    Route::put('update_endereco/{id}', [ClienteController::class, 'update_endereco'])
        ->name('cliente.update_endereco');
    Route::put('update_informacoes/{id}', [ClienteController::class, 'update_informacoes'])
        ->name('cliente.update_informacoes');
    Route::put('update_detalhes/{id}', [ClienteController::class, 'update_detalhes'])
        ->name('cliente.update_detalhes');
});

Auth::routes();

Route::get('/painel', [HomeController::class, 'index'])->name('painel');
