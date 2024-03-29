<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\PerfilController;
use  App\Http\Controllers\AcessoController;
use  App\Http\Controllers\EmpresasController;
use  App\Http\Controllers\AdministradorController;

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
   
    Route::get('/cadastro/experiencia',[PerfilController::class, 'cadastro_experiencia'])->middleware(['auth', 'e_usuario'])->name('cadastro_experiencia');
    Route::post('/cadastro/experiencia', [PerfilController::class, 'guarda_experiencia'])->middleware(['auth', 'e_usuario'])->name('guarda_experiencia');
    Route::post('/deletar/experiencia/', [PerfilController::class, 'remover_experiencia'])->middleware(['auth', 'e_usuario'])->name('deletar_experiencia');

    Route::get('/cadastro/certificacao',[PerfilController::class, 'cadastro_certificacao'])->middleware(['auth', 'e_usuario'])->name('cadastro_certificacao');
    Route::post('/cadastro/certificacao', [PerfilController::class, 'guarda_certificacao'])->middleware(['auth', 'e_usuario'])->name('guarda_certificacao');
    Route::post('/deletar/certificacao/', [PerfilController::class, 'remover_certificacao'])->middleware(['auth', 'e_usuario'])->name('deletar_certificacao');


    Route::get('/home', [PerfilController::class, 'perfil'])->middleware(['auth', 'e_usuario']);
});





Route::prefix('/empresa')->group( function () {
    
    Route::get('/home',[EmpresasController::class, 'empresa_home'])->middleware(['auth', 'e_empresa'])->name('empresa_home');
    Route::get('/cadastrar/vaga',[EmpresasController::class, 'cadastrar_vaga'])->middleware(['auth', 'e_empresa'])->name('cadastrar_vaga');
    Route::post('/cadastrar/vaga',[EmpresasController::class, 'guarda_vagas'])->middleware(['auth', 'e_empresa'])->name('guarda_vagas');
});


Route::prefix('/administrador')->group( function () {
    
    Route::get('/home',[AdministradorController::class, 'administrador_home'])->middleware(['auth', 'e_administrador'])->name('administrador_home');
    Route::get('/cadastrar/vaga',[EmpresasController::class, 'cadastrar_vaga'])->middleware(['auth', 'e_empresa'])->name('cadastrar_vaga');
    Route::post('/cadastrar/vaga',[EmpresasController::class, 'guarda_vagas'])->middleware(['auth', 'e_empresa'])->name('guarda_vagas');
    Route::post('/deletar/vaga/', [EmpresasController::class, 'remover_vaga'])->middleware(['auth', 'e_empresa'])->name('deletar_vaga');
});

require __DIR__.'/auth.php';
