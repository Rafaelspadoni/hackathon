<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\PerfilController;
use  App\Http\Controllers\AcessoController;

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

    Route::get('/perfil', [PerfilController::class, 'perfil'])->middleware(['auth', 'e_usuario']);
    Route::post('/perfil', [PerfilController::class, 'cadastro_telefone'])->middleware(['auth', 'e_usuario']);

    Route::get('/home', [PerfilController::class, 'perfil'])->middleware(['auth', 'e_usuario']);
});



Route::get('/cadastro/telefone',[PerfilController::class, 'telefone_view'])->middleware(['auth']);

Route::get('/empresa/cadastro',[EmpresasController::class, 'empresa'])->middleware(['auth']);


require __DIR__.'/auth.php';
