<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Product;

class ProductoController extends Controller
{
    public function crearProducto()
    {
        $producto = new Product();
        $producto->nombre = 'Lechuga';
        $producto->categoria_id = 2;
        $producto->save();
    }

    public function index(?string $categoria = null)
    {
        if (!is_null($categoria)) {
            $categoria = Categoria::where('nombre', $categoria)->first();

            if (empty($categoria)) {
                dd('No existe la categoria');
            } else {
                $productos = Product::where('categoria_id', $categoria->id)->get();
            }
        } else {
            $productos = Product::all();
        }

        return view('productos', [
            'productos' => $productos
        ]);
    }

    public function verProducto(Product $producto)
    {
        return view('producto', ['producto' => $producto]);
    }
}
