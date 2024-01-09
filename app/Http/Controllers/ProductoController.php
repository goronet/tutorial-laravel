<?php

namespace App\Http\Controllers;

class ProductoController extends Controller
{
    public function index(?string $categoria = null)
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

        $productos = [];
        foreach ($categorias as $categoriaArray) {
            foreach ($categoriaArray as $producto) {
                $productos[] = $producto;
            }
        }

        return view('productos', [
            'productos' => $productos
        ]);
    }
}
