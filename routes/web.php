<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// CATEGORÍAS
Route::prefix('categorias')->group(function () {
    Route::get('/', [App\Http\Controllers\CategoriaController::class, 'index']);

    Route::get('crear-categoria', [App\Http\Controllers\CategoriaController::class, 'crearCategoria']);
    Route::get('{nombreCategoria}', [App\Http\Controllers\CategoriaController::class, 'categoria']);
});

// PRODUCTOS
Route::get('productos/crear-producto', [App\Http\Controllers\ProductoController::class, 'crearProducto']);
Route::get('productos/ver-producto/{producto}', [App\Http\Controllers\ProductoController::class, 'verProducto']);
Route::get('productos/{categoria?}', [App\Http\Controllers\ProductoController::class, 'index']);


// ADMIN
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\AdminController::class, 'home']);
});
