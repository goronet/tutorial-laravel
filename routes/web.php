<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

});

// CATEGORÍAS
Route::prefix('categorias')->group(function () {
    Route::get('/', function () {
        $categorias = [
            'Fideos',
            'Verduras',
            'Arroz'
        ];

        foreach ($categorias as $categoria) {
            echo $categoria . '<br>';
        }
    });

    Route::get('{nombreCategoria}', function (string $nombreCategoria) {
        echo 'productos de ' . $nombreCategoria;
    });
});

Route::get('productos/{categoria?}', function (?string $categoria = null) {
    $categorias = [
        'Fideos' => [
            'Moñitos',
            'Fideos largos',
            'Cabello de angel'
        ],
        'Verduras' => [
            'Tomate',
            'Lechuga',
            'Cebolla'
        ]
    ];

    // si el usuario no ingresa categoría
    if (is_null($categoria)) {
        // muestro todos los productos
        foreach ($categorias as $categoriaArray) {
            foreach ($categoriaArray as $producto) {
                echo $producto . '<br>';
            }
        }
    } else {
        // checkeo si el nombre de la categoria existe en el array
        if (array_key_exists($categoria, $categorias)) {
            foreach ($categorias[$categoria] as $producto) {
                echo $producto . '<br>';
            }
        }
    }
});
