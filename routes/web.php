<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);


// CATEGORÍAS
Route::get('categorias', [CategoriaController::class, 'index']);

Route::prefix('categorias')->group(function () {
    Route::get('/', [CategoriaController::class, 'index']);
    Route::get('{nombreCategoria}', [CategoriaController::class, 'categoria']);
});

Route::get('productos/{categoria?}', [CategoriaController::class, 'index']);
