<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);


// CATEGORÍAS
Route::prefix('categorias')->group(function () {
    Route::get('/', [CategoriaController::class, 'index']);

    Route::get('crear-categoria', [CategoriaController::class, 'crearCategoria']);
    Route::get('{nombreCategoria}', [CategoriaController::class, 'categoria']);
});

// PRODUCTOS
Route::get('productos/{categoria?}', [CategoriaController::class, 'index']);
