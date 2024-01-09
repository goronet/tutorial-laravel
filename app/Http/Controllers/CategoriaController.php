<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        $nombre = $request->get('nombre');

        if (!is_null($nombre)) {
            $categorias = Categoria::where('nombre', 'like', '%' . $request->get('nombre') . '%')->get();
        } else {
            $categorias = Categoria::orderBy('nombre', 'asc')->get();
        }

        return view('categorias', compact('categorias'));
    }

    public function crearCategoria()
    {
        $categoria = new Categoria();
        $categoria->nombre = 'Fideos';
        $categoria->save();
    }
}
