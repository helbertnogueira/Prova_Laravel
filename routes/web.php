<?php

use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\AcessosController;
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

Route::prefix('acessos')->group(function(){
    Route::get('/', [AcessosController::class, 'index'])->name('acessos-index');
    Route::get('/create', [AcessosController::class, 'create'])->name('acessos-create');
    Route::post('/', [AcessosController::class, 'store'])->name('acessos-store');
    Route::get('/{id}/edit', [AcessosController::class, 'edit'])->where('id', '[0-9]+')->name('acessos-edit');
});

Route::prefix('cadastros')->group(function(){
    Route::get('/', [CadastrosController::class, 'index'])->name('cadastros-index');
    Route::get('/create', [CadastrosController::class, 'create'])->name('cadastros-create');
    Route::post('/', [CadastrosController::class, 'store'])->name('cadastros-store');
    Route::get('/{id}/edit', [CadastrosController::class, 'edit'])->where('id', '[0-9]+')->name('acessos-edit');
});


Route::fallback(function(){
    Return "Erro de Rota... Checar!";
});