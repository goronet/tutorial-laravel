<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CrearProductoRequest;
use App\Http\Requests\EditarProductoRequest;
use App\Models\Categoria;
use App\Models\Product;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.productos.index', ['productos' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('admin.productos.create', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CrearProductoRequest $request)
    {
        $producto = new Product();
        $producto->fill($request->validated());
        $producto->save();

        return redirect()
            ->action([ProductoController::class, 'index'])
            ->with(['success' => 'Producto creado correctamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $producto)
    {
        $categorias = Categoria::all();

        return view('admin.productos.edit', [
            'producto' => $producto,
            'categorias' => $categorias
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditarProductoRequest $request, Product $producto)
    {
        $producto->fill($request->validated());
        $producto->save();

        return redirect()
            ->action([ProductoController::class, 'index'])
            ->with(['success' => 'Producto actualizado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
