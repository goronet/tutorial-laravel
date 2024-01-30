<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CrearCategoriaRequest;
use App\Http\Requests\EditarCategoriaRequest;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();

        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CrearCategoriaRequest $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->save();

        return redirect()
            ->action([CategoriasController::class, 'index'])
            ->with(['success' => 'Categoría creada con éxito.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditarCategoriaRequest $request, Categoria $categoria)
    {
        $nombre = $request->input('nombre');

        $categoria->nombre = $nombre;
        $categoria->save();

        return redirect()
            ->action([CategoriasController::class, 'index'])
            ->with(['success' => 'Categoría actualizada con éxito.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()
            ->action([CategoriasController::class, 'index'])
            ->with(['success' => 'Categoría eliminada con éxito.']);
    }
}
