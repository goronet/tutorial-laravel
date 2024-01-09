<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class HomeController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('home', compact('categorias'));
    }
}
