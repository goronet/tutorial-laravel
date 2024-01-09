<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
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
    }
}
