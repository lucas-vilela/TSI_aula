<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\GinasioController;
use App\Http\Controllers\EsporteController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::get('/produtos',function(){
        return view('produtos');
    })->name('produtos');

   Route::get('/produto/{id}',[
       ProdutoController::class,
       'show'
   ])->name('show');

   Route::get('/produto',[
       ProdutoController::class,
       'create'
   ])->name('produto.create');

   Route::post('/produto',[
       ProdutoController::class,
       'store'
   ]);

   Route::get('/produto/{id}/edit',[
       ProdutoController::class,
       'edit'
   ])->name('edit');

   Route::post('/produto/{id}/update',[
       ProdutoController::class,
       'update'
   ])->name('update');

   Route::get('/produto/{id}/delete',[
       ProdutoController::class,
       'delete'
   ])->name('delete');

   Route::post('/produto/{id}/remove',[
       ProdutoController::class,
       'remove'
   ])->name('remove');

   //GINÁSIOS

    Route::get('/ginasios', [GinasioController::class, 'index'])->name('ginasios');

    Route::get('/ginasio/{id}', [GinasioController::class, 'show'])->name('show_ginasio');

    Route::get('/ginasio', [GinasioController::class, 'create']); //pra levar pro form de criação

    Route::post('/ginasio', [GinasioController::class, 'store']); //pra ir pro método store

    Route::get('/ginasio/{id}/edit', [GinasioController::class, 'edit'])->name('edit_ginasio'); //pra levar pro view do form edição

    Route::post('/ginasio/{id}/update', [GinasioController::class, 'update'])->name('update_ginasio'); //pra ir pro método update

    Route::get('/ginasio/{id}/delete', [GinasioController::class, 'remove'])->name('remove_ginasio'); //pra levar pra view de confirmação de exclusão

    Route::post('/ginasio/{id}/delete', [GinasioController::class, 'delete'])->name('delete_ginasio'); //pra ir pro método delete


    // ESPORTES

    Route::get('/esportes', [EsporteController::class, 'index'])->name('esportes');

    Route::get('/esporte/{id}', [EsporteController::class, 'show']);

    Route::get('/esporte', [EsporteController::class, 'create']); //pra levar pro form de criação

    Route::post('/esporte', [EsporteController::class, 'store']); //pra ir pro método store

    Route::get('/esporte/{id}/edit', [EsporteController::class, 'edit'])->name('edit_esporte'); //pra levar pro view do form edição

    Route::post('/esporte/{id}/update', [EsporteController::class, 'update'])->name('update_esporte'); //pra ir pro método update

    Route::get('/esporte/{id}/delete', [EsporteController::class, 'remove'])->name('remove_esporte'); //pra levar pra view de confirmação de exclusão

    Route::post('/esporte/{id}/delete', [EsporteController::class, 'delete'])->name('delete_esporte'); //pra ir pro método delete
});





require __DIR__.'/auth.php';
