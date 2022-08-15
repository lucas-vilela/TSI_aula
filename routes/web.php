<?php

use App\Http\Controllers\GinasioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EsporteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/produto', [ProdutoController::class, 'index']);

Route::get('/produto/{id}', [ProdutoController::class, 'show']);


//GINÁSIOS

Route::get('/ginasios', [GinasioController::class, 'index']);

Route::get('/ginasio/{id}', [GinasioController::class, 'show']);

Route::get('/ginasio', [GinasioController::class, 'create']); //pra levar pro form de criação

Route::post('/ginasio', [GinasioController::class, 'store']); //pra ir pro método store

Route::get('/ginasio/{id}/edit', [GinasioController::class, 'edit'])->name('edit_ginasio'); //pra levar pro view do form edição

Route::post('/ginasio/{id}/update', [GinasioController::class, 'update'])->name('update_ginasio'); //pra ir pro método update

Route::get('/ginasio/{id}/delete', [GinasioController::class, 'remove'])->name('remove_ginasio'); //pra levar pra view de confirmação de exclusão

Route::post('/ginasio/{id}/delete', [GinasioController::class, 'delete'])->name('delete_ginasio'); //pra ir pro método delete


// ESPORTES

Route::get('/esportes', [EsporteController::class, 'index']);

Route::get('/esporte/{id}', [EsporteController::class, 'show']);

Route::get('/esporte', [EsporteController::class, 'create']); //pra levar pro form de criação

Route::post('/esporte', [EsporteController::class, 'store']); //pra ir pro método store

Route::get('/esporte/{id}/edit', [EsporteController::class, 'edit'])->name('edit_esporte'); //pra levar pro view do form edição

Route::post('/esporte/{id}/update', [EsporteController::class, 'update'])->name('update_esporte'); //pra ir pro método update

Route::get('/esporte/{id}/delete', [EsporteController::class, 'remove'])->name('remove_esporte'); //pra levar pra view de confirmação de exclusão

Route::post('/esporte/{id}/delete', [EsporteController::class, 'delete'])->name('delete_esporte'); //pra ir pro método delete


// USUÁRIOS

Route::get('/usuarios', [UsuarioController::class, 'index']);

Route::get('/usuario/{id}', [UsuarioController::class, 'show']);

Route::get('/usuario', [UsuarioController::class, 'create']); //pra levar pro form de criação

Route::post('/usuario', [UsuarioController::class, 'store']); //pra ir pro método store

Route::get('/usuario/{id}/edit', [UsuarioController::class, 'edit'])->name('edit_usuario'); //pra levar pro view do form edição

Route::post('/usuario/{id}/update', [UsuarioController::class, 'update'])->name('update_usuario'); //pra ir pro método update

Route::get('/usuario/{id}/delete', [UsuarioController::class, 'remove'])->name('remove_usuario'); //pra levar pra view de confirmação de exclusão

Route::post('/usuario/{id}/delete', [UsuarioController::class, 'delete'])->name('delete_usuario'); //pra ir pro método delete