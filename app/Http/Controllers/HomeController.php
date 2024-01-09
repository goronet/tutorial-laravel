<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
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
    }
}
