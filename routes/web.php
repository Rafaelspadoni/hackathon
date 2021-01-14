<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\PerfilController;
use  App\Http\Controllers\AcessoController;
use  App\Http\Controllers\EmpresasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/verifica',[AcessoController::class, 'Verifica_logado'])->middleware(['auth']);

Route::prefix('/usuario')->group( function () {

    Route::get('/perfil', [PerfilController::class, 'perfil'])->middleware(['auth', 'e_usuario'])->name('perfil_usuario');

    Route::get('/cadastro/telefone',[PerfilController::class, 'telefone_view'])->middleware(['auth', 'e_usuario'])->name('cadastra_telefone');
    Route::post('/cadastro/telefone', [PerfilController::class, 'cadastro_telefone'])->middleware(['auth', 'e_usuario'])->name('guarda_telefone');
    Route::post('/deletar/telefone/', [PerfilController::class, 'remover_telefone'])->middleware(['auth', 'e_usuario'])->name('deletar_telefone');

    Route::get('/home', [PerfilController::class, 'perfil'])->middleware(['auth', 'e_usuario']);
});





Route::prefix('/empresa')->group( function () {
    
    Route::get('/home',[EmpresasController::class, 'empresa_home'])->middleware(['auth', 'e_empresa'])->name('empresa_home');
    Route::get('/cadastrar/vaga',[EmpresasController::class, 'cadastrar_vaga'])->middleware(['auth', 'e_empresa'])->name('cadastrar_vaga');
    Route::post('/cadastrar/vaga',[EmpresasController::class, 'guarda_vagas'])->middleware(['auth', 'e_empresa'])->name('guarda_vagas');
});


require __DIR__.'/auth.php';
