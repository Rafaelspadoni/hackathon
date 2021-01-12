<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\PerfilController;
use App\Http\Controllers\AcessoController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/perfil', [PerfilController::class, 'perfil'])->middleware(['auth'])->name('perfil');
Route::post('/perfil', [PerfilController::class, 'cadastro_telefone'])->middleware(['auth'])->name('cadastra_telefone');

require __DIR__.'/auth.php';

Route::get('/cadastro/telefone',[PerfilController::class, 'telefone_view'])->middleware(['auth']);

Route::get('/empresa/cadastro',[EmpresasController::class, 'empresa'])->middleware(['auth']);
