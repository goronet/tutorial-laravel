<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
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

    $nombreCategorias = [];
    $productos = [];
    foreach ($categorias as $nombreCategoria => $categoriaArray) {
        $nombreCategorias[] = $nombreCategoria;

        foreach ($categoriaArray as $producto) {
            $productos[] = $producto;
        }
    }

    return view('home', [
        'categorias' => $nombreCategorias,
        'productos' => $productos
    ]);
});

// CATEGORÍAS
Route::prefix('categorias')->group(function () {
    Route::get('/', function (Request $request) {
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

        if (!is_null($request->input('nombre'))) {
            if (array_key_exists($request->input('nombre'), $categorias)) {
                echo 'Categoría existe';
            }
        } else {
            foreach ($categorias as $nombreCategoria => $categoria) {
                echo $nombreCategoria . '<br>';
            }
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

    $productos = [];
    foreach ($categorias as $categoriaArray) {
        foreach ($categoriaArray as $producto) {
            $productos[] = $producto;
        }
    }

    return view('productos', [
        'productos' => $productos
    ]);
});
